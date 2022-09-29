# WPGraphQL Stubs

Provides stub declarations for [WPGraphQL](https://wpgraphql.org/) core functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated with [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP 7.3+
- Sodium PHP extension as latest WordPress core uses it and **compat code is removed** from stubs.


## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev axepress/wp-graphql-stubs
```

Alternatively you may download `wp-graphql-stubs.php` directly.

## Usage with PHPStan

```bash
composer require --dev szepeviktor/phpstan-wordpress
```

The package [`szepeviktor/phpstan-wordpress`](https://github.com/szepeviktor/phpstan-wordpress)
depends on [`phpstan/phpstan`](http://github.com/phpstan/phpstan) and this one.
Please do read
[that package's README](https://github.com/szepeviktor/phpstan-wordpress/blob/master/README.md)
and see the `example` directory over there.

## Versioning

This package is versioned to match the WPGraphQL version from which the stubs are generated.

## Generating stubs for a different WPGraphQL version

1. Clone this repository and `cd` into it.
2. Update `"wpackagist-plugin/wp-graphql": "x.x.x"` in `composer.json` with the desired version
3. Run `composer update`
4. Run `composer generate`

The `wp-graphql-stubs.php` file should now be updated.

## Prior Art
- Based on [php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommece-stubs).
- Inspired by the original [wp-graphql-stubs](https://github.com/Poolshark/wp-graphql-stubs) project.
