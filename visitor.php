<?php
/**
 * Node visitor that rewrites PHP 8-only syntax so the generated stubfile parses
 * on PHP 7.4, matching the runtime floor of WPGraphQL itself.
 *
 * Upstream (graphql-php) ships 8.x syntax in files it only ever loads on PHP 8
 * -- promoted properties in its attribute classes, union types in its enum
 * support. That's fine for the library, but our stubs are one concatenated file
 * that has to parse as a whole, so `php -l` on 7.4 chokes on them.
 *
 * DELETE THIS FILE once composer.json's PHP floor moves off 7.4 -- current
 * graphql-php has already dropped it and WPGraphQL v3 will follow. Also drop
 * `--visitor` from generate.sh and "7.4" from the CI matrix. Nothing else
 * depends on it, and the stubs are strictly better without it.
 *
 * ponytail: dropping a native type loses it entirely -- no docblock is
 * synthesized. Dormant today: PHPStan prefers the docblock type anyway, and
 * every affected type in the current sources is documented. The PHP 7.4 CI job
 * is the tripwire for anything that breaks parsing.
 */

use PhpParser\Modifiers;
use PhpParser\Node;
use StubsGenerator\NodeVisitor;

return new class extends NodeVisitor {
	/** Types that exist in PHP 8+ but have no PHP 7.4 spelling. */
	private const PHP8_TYPES = [ 'mixed', 'never', 'static', 'false', 'true', 'null' ];

	/** `readonly` (8.1) and asymmetric visibility (8.4). */
	private const PHP8_MODIFIERS = Modifiers::READONLY | Modifiers::VISIBILITY_SET_MASK;

	public function enterNode( Node $node ) {
		if ( $node instanceof Node\Stmt\ClassLike ) {
			$this->depromote( $node );
		}

		// Every FunctionLike implementation declares a public `$returnType`.
		if ( $node instanceof Node\FunctionLike ) {
			foreach ( $node->getParams() as $param ) {
				$param->type = $this->downgradeType( $param->type );
			}

			$node->returnType = $this->downgradeType( $node->returnType );
		}

		// `readonly` property (8.1) and `readonly class` (8.2).
		if ( $node instanceof Node\Stmt\Property || $node instanceof Node\Stmt\Class_ ) {
			$node->flags &= ~self::PHP8_MODIFIERS;

			if ( $node instanceof Node\Stmt\Property ) {
				$node->type = $this->downgradeType( $node->type );
			}
		}

		return parent::enterNode( $node );
	}

	/**
	 * Returns the type unchanged if PHP 7.4 can express it, else null.
	 *
	 * @param Node\Identifier|Node\Name|Node\ComplexType|null $type
	 * @return Node\Identifier|Node\Name|Node\ComplexType|null
	 */
	private function downgradeType( ?Node $type ): ?Node {
		if ( $type instanceof Node\UnionType || $type instanceof Node\IntersectionType ) {
			return null;
		}

		if ( $type instanceof Node\NullableType ) {
			return $this->downgradeType( $type->type ) ? $type : null;
		}

		// `static` reaches us as a Name, the rest as Identifiers.
		if ( $type instanceof Node\Identifier || $type instanceof Node\Name ) {
			return in_array( strtolower( $type->toString() ), self::PHP8_TYPES, true ) ? null : $type;
		}

		return $type;
	}

	/**
	 * Rewrites `__construct( public string $x )` into an explicit property
	 * declaration plus a plain constructor parameter.
	 */
	private function depromote( Node\Stmt\ClassLike $class ): void {
		$constructor = $class->getMethod( '__construct' );

		if ( ! $constructor ) {
			return;
		}

		$properties = [];

		foreach ( $constructor->params as $param ) {
			if ( ! $param->flags || ! $param->var instanceof Node\Expr\Variable ) {
				continue;
			}

			$properties[] = new Node\Stmt\Property(
				// Visibility only: `readonly` and asymmetric visibility are 8.1+/8.4+.
				$param->flags & Modifiers::VISIBILITY_MASK,
				[ new Node\PropertyItem( (string) $param->var->name ) ],
				[ 'comments' => $param->getComments() ],
				$param->type
			);

			$param->flags = 0;
		}

		$class->stmts = array_merge( $properties, $class->stmts );
	}
};
