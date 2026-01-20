<?php
/**
 * Generated stub declarations for WPGraphQL.
 * @see https://wpgraphql.org
 * @see https://github.com/axewp/wp-graphql-stubs
 */

namespace {
    class WPGraphQL_CLI_Command extends \WP_CLI_Command
    {
        /**
         * Generate a static schema.
         *
         * Defaults to creating a schema.graphql file in the IDL format at the root
         * of the plugin.
         *
         * [--output=<output>]
         * : The file path to save the schema to.
         *
         * @todo: Provide alternative formats (AST? INTROSPECTION JSON?) and options for output file-type?
         * @todo: Add Unit Tests
         *
         * ## EXAMPLE
         *
         *     # Generate a static schema
         *     $ wp graphql generate-static-schema
         *
         *     # Generate a static schema and save it to a specific file
         *     $ wp graphql generate-static-schema --output=/path/to/file.graphql
         *
         * @alias generate
         * @subcommand generate-static-schema
         */
        public function generate_static_schema($args, $assoc_args)
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    /**
     * Class Comments
     *
     * This class organizes the registration of connections to Comments
     *
     * @package WPGraphQL\Type\Connection
     */
    class Comments
    {
        /**
         * Register connections to Comments.
         *
         * Connections from Post Objects to Comments are handled in \Registry\Utils\PostObject.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_connections()
        {
        }
        /**
         * Given an array of $args, this returns the connection config, merging the provided args
         * with the defaults
         *
         * @param array<string,mixed> $args
         *
         * @return array<string,mixed>
         */
        public static function get_connection_config($args = [])
        {
        }
        /**
         * This returns the connection args for the Comment connection
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_connection_args()
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class Comments extends \WPGraphQL\Type\Connection\Comments
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_config($args = [])
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_args()
        {
        }
    }
}
namespace WPGraphQL\Type\Union {
    /**
     * Class MenuItemObjectUnion
     *
     * @todo Remove in 3.0.0
     * @deprecated 0.10.3
     * @codeCoverageIgnore
     */
    class MenuItemObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param ?\WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         * @throws \Exception
         */
        public static function register_type(?\WPGraphQL\Registry\TypeRegistry $type_registry = null)
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return string[]
         */
        public static function get_possible_types()
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    /**
     * Class MenuItems
     *
     * This class organizes registration of connections to MenuItems
     *
     * @package WPGraphQL\Type\Connection
     */
    class MenuItems
    {
        /**
         * Register connections to MenuItems
         *
         * @return void
         * @throws \Exception
         */
        public static function register_connections()
        {
        }
        /**
         * Given an array of $args, returns the args for the connection with the provided args merged
         *
         * @param array<string,mixed> $args
         *
         * @return array<string,mixed>
         */
        public static function get_connection_config($args = [])
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class MenuItems extends \WPGraphQL\Type\Connection\MenuItems
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_config($args = [])
        {
        }
    }
}
namespace WPGraphQL\Type\ObjectType {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.12.0
     * @codeCoverageIgnore
     */
    class PostObject
    {
        /**
         * @todo remove in 3.0.0
         *
         * @param \WP_Post_Type                    $post_type_object Post type.
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The Type Registry
         *
         * @return void
         * @throws \Exception
         * @deprecated 1.12.0
         */
        public static function register_post_object_types(\WP_Post_Type $post_type_object, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * @todo remove in 3.0.0
         *
         * @param \WP_Post_Type                    $post_type_object Post type.
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The Type Registry
         *
         * @deprecated 1.12.0
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_fields($post_type_object, $type_registry)
        {
        }
    }
}
namespace WPGraphQL\Type\Union {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.14.1
     * @codeCoverageIgnore
     */
    class PostObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param ?\WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(?\WPGraphQL\Registry\TypeRegistry $type_registry = null): void
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return string[]
         */
        public static function get_possible_types()
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    /**
     * Class PostObjects
     *
     * This class organizes the registration of connections to PostObjects
     *
     * @package WPGraphQL\Type\Connection
     */
    class PostObjects
    {
        /**
         * Registers the various connections from other Types to PostObjects
         *
         * @return void
         * @throws \Exception
         */
        public static function register_connections()
        {
        }
        /**
         * Given the Post Type Object and an array of args, this returns an array of args for use in
         * registering a connection.
         *
         * @param mixed|\WP_Post_Type|\WP_Taxonomy $graphql_object The post type object for the post_type having a
         * connection registered to it
         * @param array<string,mixed>              $args           The custom args to modify the connection registration
         *
         * @return array<string,mixed>
         */
        public static function get_connection_config($graphql_object, $args = [])
        {
        }
        /**
         * Given an optional array of args, this returns the args to be used in the connection
         *
         * @param array<string,array<string,mixed>> $args             The args to modify the defaults
         * @param mixed|\WP_Post_Type|\WP_Taxonomy  $post_type_object The post type the connection is going to
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_connection_args($args = [], $post_type_object = null)
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class PostObjects extends \WPGraphQL\Type\Connection\PostObjects
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_config($graphql_object, $args = [])
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_args($args = [], $post_type_object = null)
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    class Taxonomies
    {
        /**
         * Registers connections to the Taxonomy type
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class Taxonomies extends \WPGraphQL\Type\Connection\Taxonomies
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
    }
}
namespace WPGraphQL\Type\ObjectType {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.12.0
     * @codeCoverageIgnore
     */
    class TermObject
    {
        /**
         * Register the Type for each kind of Taxonomy
         *
         * @param \WP_Taxonomy $tax_object The taxonomy being registered
         *
         * @return void
         * @throws \Exception
         * @deprecated 1.12.0
         */
        public static function register_taxonomy_object_type(\WP_Taxonomy $tax_object)
        {
        }
    }
}
namespace WPGraphQL\Type\Union {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.14.1
     * @codeCoverageIgnore
     */
    class TermObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param ?\WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(?\WPGraphQL\Registry\TypeRegistry $type_registry = null): void
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return array<string,string>
         */
        public static function get_possible_types()
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    /**
     * Class TermObjects
     *
     * This class organizes the registration of connections to TermObjects
     *
     * @package WPGraphQL\Type\Connection
     */
    class TermObjects
    {
        /**
         * Register connections to TermObjects
         *
         * @return void
         */
        public static function register_connections()
        {
        }
        /**
         * Given the Taxonomy Object and an array of args, this returns an array of args for use in
         * registering a connection.
         *
         * @param \WP_Taxonomy        $tax_object        The taxonomy object for the taxonomy having a connection registered to it
         * @param array<string,mixed> $args              The custom args to modify the connection registration
         *
         * @return array<string,mixed>
         */
        public static function get_connection_config($tax_object, $args = [])
        {
        }
        /**
         * Given an optional array of args, this returns the args to be used in the connection
         *
         * @param array<string,array<string,mixed>> $args The args to modify the defaults
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_connection_args($args = [])
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class TermObjects extends \WPGraphQL\Type\Connection\TermObjects
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_config($tax_object, $args = [])
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_args($args = [])
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 0.6.0.
     * @codeCoverageIgnore
     */
    class Types
    {
        /**
         * @deprecated since v0.6.0. Use Utils:map_input instead
         *
         * @param mixed[] $args The raw query args from the GraphQL query.
         * @param mixed[] $map  The mapping of where each of the args should go.
         *
         * @return array<string,mixed>
         */
        public static function map_input($args, $map)
        {
        }
        /**
         * @deprecated since v0.6.0 use Utils::prepare_date_response(); instead
         * @param string      $date_gmt GMT publication time.
         * @param string|null $date     Optional. Local publication time. Default null.
         * @return string|null ISO8601/RFC3339 formatted datetime.
         */
        public static function prepare_date_response($date_gmt, $date = null)
        {
        }
    }
}
namespace WPGraphQL\Type\Connection {
    /**
     * Class Users
     *
     * This class organizes the registration of connections to Users
     *
     * @package WPGraphQL\Type\Connection
     */
    class Users
    {
        /**
         * Register connections to Users
         *
         * @return void
         */
        public static function register_connections()
        {
        }
        /**
         * Returns the connection args for use in the connection
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_connection_args()
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * @todo Remove in 3.0.0
     * @deprecated 1.13.0
     * @codeCoverageIgnore
     */
    class Users extends \WPGraphQL\Type\Connection\Users
    {
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function register_connections()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @deprecated 1.13.0
         */
        public static function get_connection_args()
        {
        }
    }
}
namespace WPGraphQL\PHPCS\Sniffs\Commenting {
    class ValidSinceTagSniff implements \PHP_CodeSniffer\Sniffs\Sniff
    {
        public function __construct()
        {
        }
        /**
         * Returns an array of tokens this test wants to listen for.
         *
         * @return array<int|string>
         */
        public function register()
        {
        }
        /**
         * Processes this test when one of its tokens is encountered.
         *
         * @param File $phpcsFile The file being scanned.
         * @param int  $stackPtr  The position of the current token in the stack.
         *
         * @return void
         */
        public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $stackPtr)
        {
        }
    }
}
namespace WPGraphQL\PHPCS\Sniffs\Functions {
    class VersionParameterSniff implements \PHP_CodeSniffer\Sniffs\Sniff
    {
        public function __construct()
        {
        }
        /**
         * Returns an array of tokens this test wants to listen for.
         *
         * @return array<int|string>
         */
        public function register()
        {
        }
        /**
         * Processes this test when one of its tokens is encountered.
         *
         * @param File $phpcsFile The file being scanned.
         * @param int  $stackPtr  The position of the current token in the stack.
         *
         * @return void
         */
        public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $stackPtr)
        {
        }
    }
}
namespace WPGraphQL\Admin {
    /**
     * Class Admin
     *
     * @package WPGraphQL\Admin
     */
    class Admin
    {
        /**
         * Whether Admin Pages are enabled or not
         *
         * @var bool
         */
        protected $admin_enabled;
        /**
         * Whether GraphiQL is enabled or not
         *
         * @var bool
         */
        protected $graphiql_enabled;
        /**
         * @var \WPGraphQL\Admin\Settings\Settings
         */
        protected $settings;
        /**
         * @var \WPGraphQL\Admin\Extensions\Extensions
         */
        protected $extensions;
        /**
         * Initialize Admin functionality for WPGraphQL
         *
         * @return void
         */
        public function init()
        {
        }
    }
    /**
     * This class isn't intended for direct extending or customizing.
     *
     * This class is responsible for handling the management and display of admin notices
     * related directly to WPGraphQL.
     *
     * Breaking changes to this class will not be considered a semver breaking change as there's no
     * expectation that users will be calling these functions directly or extending this class.
     *
     * @phpstan-type AdminNoticeConfig array{
     *   message: string,
     *   type?: 'error'|'warning'|'success'|'info',
     *   is_dismissable?: bool,
     *   conditions?: callable():bool,
     * }
     *
     * @internal
     */
    class AdminNotices
    {
        /**
         * Stores the admin notices to display
         *
         * @var array<string,AdminNoticeConfig>
         */
        protected $admin_notices = [];
        /**
         * @var array<string>
         */
        protected $dismissed_notices = [];
        /**
         * Prevent cloning the instance
         */
        public function __clone()
        {
        }
        /**
         * Prevent unserializing the instance
         */
        public function __wakeup()
        {
        }
        /**
         * Get the singleton instance of the class
         */
        public static function get_instance(): self
        {
        }
        /**
         * Initialize the Admin Notices class
         */
        public function init(): void
        {
        }
        /**
         * Pre-filters dismissed notices from the admin notices array.
         */
        protected function pre_filter_dismissed_notices(): void
        {
        }
        /**
         * Return all admin notices
         *
         * @return array<string,AdminNoticeConfig>
         */
        public function get_admin_notices(): array
        {
        }
        /**
         * @param string            $slug   The slug identifying the admin notice
         * @param AdminNoticeConfig $config The config of the admin notice
         *
         * @return AdminNoticeConfig|array{}
         */
        public function add_admin_notice(string $slug, array $config): array
        {
        }
        /**
         * Throw an error if the config is not valid.
         *
         * @since v1.21.0
         *
         * @param array<string,mixed> $config The config of the admin notice
         *
         * @phpstan-assert-if-true array{
         *  message: string,
         *  type?: 'error'|'warning'|'success'|'info',
         *  is_dismissable?: bool,
         *  conditions?: callable,
         * } $config
         */
        public function is_valid_config(array $config): bool
        {
        }
        /**
         * Given the slug of an admin notice, remove it from the notices
         *
         * @param string $slug The slug identifying the admin notice to remove
         *
         * @return array<string,AdminNoticeConfig>
         */
        public function remove_admin_notice(string $slug): array
        {
        }
        /**
         * Determine whether a notice is dismissable or not
         *
         * @param AdminNoticeConfig|array{} $notice The notice to check whether its dismissable or not
         */
        public function is_notice_dismissable(array $notice = []): bool
        {
        }
        /**
         * Display notices if they are displayable
         */
        public function maybe_display_notices(): void
        {
        }
        /**
         * Adds the notification count to the menu item.
         */
        public function add_notification_bubble(): void
        {
        }
        /**
         * Render the notices.
         */
        protected function render_notices(): void
        {
        }
        /**
         * Checks if the current admin page is within the scope of the plugin's own pages.
         *
         * @return bool True if the current page is within scope of the plugin's pages.
         */
        protected function is_plugin_scoped_page(): bool
        {
        }
        /**
         * Handles the dismissal of the ACF notice.
         * set_transient reference: https://developer.wordpress.org/reference/functions/set_transient/
         * This function sets a transient to remember the dismissal status of the notice.
         */
        public function handle_dismissal_of_notice(): void
        {
        }
    }
}
namespace WPGraphQL\Admin\Extensions {
    /**
     * Class Extensions
     *
     * @package WPGraphQL\Admin\Extensions
     *
     * phpcs:disable -- For phpstan type hinting
     * @phpstan-import-type ExtensionAuthor from \WPGraphQL\Admin\Extensions\Registry
     * @phpstan-import-type Extension from \WPGraphQL\Admin\Extensions\Registry
     *
     * @phpstan-type PopulatedExtension array{
     *   name: non-empty-string,
     *   description: non-empty-string,
     *   plugin_url: non-empty-string,
     *   support_url: non-empty-string,
     *   documentation_url: non-empty-string,
     *   repo_url?: string,
     *   author: ExtensionAuthor,
     *   installed: bool,
     *   active: bool,
     *   settings_path?: string,
     *   settings_url?: string,
     * }
     * phpcs:enable
     */
    final class Extensions
    {
        /**
         * Initialize Extensions functionality for WPGraphQL.
         */
        public function init(): void
        {
        }
        /**
         * Register the admin page for extensions.
         */
        public function register_admin_page(): void
        {
        }
        /**
         * Render the admin page content.
         */
        public function render_admin_page(): void
        {
        }
        /**
         * Enqueue the necessary scripts and styles for the extensions page.
         *
         * @param string $hook_suffix The current admin page.
         */
        public function enqueue_scripts($hook_suffix): void
        {
        }
        /**
         * Register custom REST API routes.
         */
        public function register_rest_routes(): void
        {
        }
        /**
         * Activate a plugin.
         *
         * @param \WP_REST_Request<array{plugin:string}> $request The REST request.
         *
         * @return \WP_REST_Response The REST response.
         */
        public function activate_plugin(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Validate an extension.
         *
         * Sanitization ensures that the values are correctly types, so we just need to check if the required fields are present.
         *
         * @param array<string,mixed> $extension The extension to validate.
         *
         * @return true|\WP_Error True if the extension is valid, otherwise an error.
         *
         * @phpstan-assert-if-true Extension $extension
         */
        public function is_valid_extension(array $extension)
        {
        }
        /**
         * Get the list of WPGraphQL extensions.
         *
         * @return PopulatedExtension[] The list of extensions.
         */
        public function get_extensions(): array
        {
        }
    }
    /**
     * Class Registry
     *
     * phpcs:disable -- For phpstan type hinting
     * @phpstan-type ExtensionAuthor array{
     *  name: string,
     *  homepage?: string,
     * }
     * @phpstan-type Extension array{
     *  name: non-empty-string,
     *  description: non-empty-string,
     *  plugin_url: non-empty-string,
     *  support_url: non-empty-string,
     *  documentation_url: non-empty-string,
     *  repo_url?: string,
     *  author: ExtensionAuthor,
     * }
     * phpcs:enable
     */
    final class Registry
    {
        /**
         * Gets the registry of WPGraphQL Extensions.
         *
         * @see docs/submit-extensions.md for more information on how to submit an extension.
         *
         * Fields:
         * - name: Required. The name of the extension.
         * - description: Required. A description of the extension.
         * - plugin_url: Required. The URL to the plugin.
         * - repo_url: Optional. The URL to the repository for the plugin.
         * - support_url: Required. The URL to the support page for the plugin.
         * - documentation_url: Required. The URL to the documentation for the plugin.
         * - author: Required. An array with the following fields:
         *   - name: Required. The name of the author.
         *   - homepage: Optional. The URL to the author's homepage.
         *
         * Array keys are solely used to sort the array and prevent merge conflicts when diffing. They should be unique.
         *
         * @return array<string,Extension>
         */
        public static function get_extensions(): array
        {
        }
    }
}
namespace WPGraphQL\Admin\GraphiQL {
    /**
     * Class GraphiQL
     *
     * Sets up GraphiQL in the WordPress Admin
     *
     * @package WPGraphQL\Admin\GraphiQL
     */
    class GraphiQL
    {
        /**
         * @var bool Whether GraphiQL is enabled
         */
        protected $is_enabled = false;
        /**
         * Initialize Admin functionality for WPGraphQL
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Registers admin bar menu
         *
         * @param \WP_Admin_Bar $admin_bar The Admin Bar Instance
         *
         * @return void
         */
        public function register_admin_bar_menu(\WP_Admin_Bar $admin_bar)
        {
        }
        /**
         * Register the admin page as a subpage
         *
         * @return void
         */
        public function register_admin_page()
        {
        }
        /**
         * Render the markup to load GraphiQL to.
         *
         * @return void
         */
        public function render_graphiql_admin_page()
        {
        }
        /**
         * Enqueues the stylesheet and js for the WPGraphiQL app
         *
         * @return void
         */
        public function enqueue_graphiql()
        {
        }
        /**
         * Enqueue the GraphiQL Auth Switch extension, which adds a button to the GraphiQL toolbar
         * that allows the user to switch between the logged in user and the current user
         *
         * @return void
         */
        public function graphiql_enqueue_auth_switch()
        {
        }
        /**
         * Enqueue the Query Composer extension, which adds a button to the GraphiQL toolbar
         * that allows the user to open the Query Composer and compose a query with a form-based UI
         *
         * @return void
         */
        public function graphiql_enqueue_query_composer()
        {
        }
        /**
         * Enqueue the GraphiQL Fullscreen Toggle extension, which adds a button to the GraphiQL toolbar
         * that allows the user to toggle the fullscreen mode
         *
         * @return void
         */
        public function graphiql_enqueue_fullscreen_toggle()
        {
        }
    }
}
namespace WPGraphQL\Admin\Settings {
    /**
     * Class Settings
     *
     * @package WPGraphQL\Admin\Settings
     */
    class Settings
    {
        /**
         * @var \WPGraphQL\Admin\Settings\SettingsRegistry
         */
        public $settings_api;
        /**
         * WP_ENVIRONMENT_TYPE
         *
         * @var string The WordPress environment.
         */
        protected $wp_environment;
        /**
         * Initialize the WPGraphQL Settings Pages
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Return the environment. Default to production.
         *
         * @return string The environment set using WP_ENVIRONMENT_TYPE.
         */
        protected function get_wp_environment()
        {
        }
        /**
         * Add the options page to the WP Admin
         *
         * @return void
         */
        public function add_options_page()
        {
        }
        /**
         * Registers the initial settings for WPGraphQL
         *
         * @return void
         */
        public function register_settings()
        {
        }
        /**
         * Initialize the settings admin page
         *
         * @return void
         */
        public function initialize_settings_page()
        {
        }
        /**
         * Initialize the styles and scripts used on the settings admin page
         *
         * @param ?string $hook_suffix The current admin page.
         */
        public function initialize_settings_page_scripts(?string $hook_suffix): void
        {
        }
        /**
         * Render the settings page in the admin
         *
         * @return void
         */
        public function render_settings_page()
        {
        }
    }
    /**
     * Class SettingsRegistry
     *
     * This settings class is based on the WordPress Settings API Class v1.3 from Tareq Hasan of WeDevs
     *
     * @see     https://github.com/tareq1988/wordpress-settings-api-class
     * @author  Tareq Hasan <tareq@weDevs.com>
     * @link    https://tareq.co Tareq Hasan
     *
     * @package WPGraphQL\Admin\Settings
     */
    class SettingsRegistry
    {
        /**
         * Settings sections array
         *
         * @var array<string,array<string,mixed>>
         */
        protected $settings_sections = [];
        /**
         * Settings fields array
         *
         * @var array<string,array<string,mixed>[]>
         */
        protected $settings_fields = [];
        /**
         * Returns the settings sections.
         *
         * @return array<string,array<string,mixed>>
         */
        public function get_settings_sections()
        {
        }
        /**
         * Returns the settings fields.
         *
         * @return array<string,array<string,mixed>[]>
         */
        public function get_settings_fields()
        {
        }
        /**
         * Enqueue scripts and styles
         *
         * @param string $hook_suffix The current admin page.
         *
         * @return void
         */
        public function admin_enqueue_scripts(string $hook_suffix)
        {
        }
        /**
         * Set settings sections
         *
         * @param string              $slug    Setting Section Slug
         * @param array<string,mixed> $section setting section config.
         *
         * @return \WPGraphQL\Admin\Settings\SettingsRegistry
         */
        public function register_section(string $slug, array $section)
        {
        }
        /**
         * Register fields to a section
         *
         * @param string                $section The slug of the section to register a field to
         * @param array<string,mixed>[] $fields  settings fields array
         *
         * @return \WPGraphQL\Admin\Settings\SettingsRegistry
         */
        public function register_fields(string $section, array $fields)
        {
        }
        /**
         * Register a field to a section
         *
         * @param string              $section The slug of the section to register a field to
         * @param array<string,mixed> $field   The config for the field being registered
         *
         * @return \WPGraphQL\Admin\Settings\SettingsRegistry
         */
        public function register_field(string $section, array $field)
        {
        }
        /**
         * Initialize and registers the settings sections and fields to WordPress
         *
         * Usually this should be called at `admin_init` hook.
         *
         * This function gets the initiated settings sections and fields. Then
         * registers them to WordPress and ready for use.
         *
         * @return void
         */
        public function admin_init()
        {
        }
        /**
         * Get field description for display
         *
         * @param array<string,string> $args settings field args
         */
        public function get_field_description(array $args): string
        {
        }
        /**
         * Displays a text field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_text(array $args)
        {
        }
        /**
         * Displays a url field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_url(array $args)
        {
        }
        /**
         * Displays a number field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_number(array $args)
        {
        }
        /**
         * Displays a checkbox for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_checkbox(array $args)
        {
        }
        /**
         * Displays a multicheckbox for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_multicheck(array $args)
        {
        }
        /**
         * Displays a radio button for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_radio(array $args)
        {
        }
        /**
         * Displays a selectbox for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_select(array $args)
        {
        }
        /**
         * Displays a textarea for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_textarea(array $args)
        {
        }
        /**
         * Displays the html for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_html(array $args)
        {
        }
        /**
         * Displays a rich text textarea for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_wysiwyg(array $args)
        {
        }
        /**
         * Displays a file upload field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_file(array $args)
        {
        }
        /**
         * Displays a password field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_password(array $args)
        {
        }
        /**
         * Displays a color picker field for a settings field
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_color($args)
        {
        }
        /**
         * Displays a select box for creating the pages select box
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_pages(array $args)
        {
        }
        /**
         * Displays a select box for user roles
         *
         * @param array<string,mixed> $args settings field args
         *
         * @return void
         */
        public function callback_user_role_select(array $args)
        {
        }
        /**
         * Sanitize callback for Settings API
         *
         * @param mixed $options settings field args (can be array or other types when called via WordPress sanitize_option filter)
         *
         * @return mixed
         */
        public function sanitize_options($options)
        {
        }
        /**
         * Get sanitization callback for given option slug
         *
         * @param string $slug option slug
         *
         * @return callable|false
         */
        public function get_sanitize_callback($slug = '')
        {
        }
        /**
         * Get the value of a settings field
         *
         * @param string $option  settings field name
         * @param string $section the section name this field belongs to
         * @param string $default_value default text if it's not found
         *
         * @return string
         */
        public function get_option($option, $section, $default_value = '')
        {
        }
        /**
         * Show navigations as tab
         *
         * Shows all the settings section labels as tab
         *
         * @return void
         */
        public function show_navigation()
        {
        }
        /**
         * Show the section settings forms
         *
         * This function displays every sections in a different form
         *
         * @return void
         */
        public function show_forms()
        {
        }
        /**
         * Tabbable JavaScript codes & Initiate Color Picker
         *
         * This code uses URL hash fragments and localStorage for displaying active tabs
         *
         * @return void
         */
        public function script()
        {
        }
        /**
         * Add styles to adjust some settings
         *
         * @return void
         */
        public function _style_fix()
        {
        }
    }
}
namespace WPGraphQL\Admin\Updates {
    /**
     * Class PluginsScreenLoader
     */
    class PluginsScreenLoader
    {
        /**
         * The class constructor.
         *
         * Class properties are set inside the action.
         */
        public function __construct()
        {
        }
        /**
         * Injects a warning message into the plugin update message.
         *
         * @param array<string,mixed> $args The plugin update message arguments.
         * @param object              $response The plugin update response.
         */
        public function in_plugin_update_message($args, $response): void
        {
        }
        /**
         * The modal JS for the plugin update message.
         */
        public function modal_js(): void
        {
        }
    }
    /**
     * Class SemVer
     */
    final class SemVer
    {
        /**
         * Get the release type of the current version of WPGraphQL.
         *
         * @param string $old_version The old version of WPGraphQL.
         * @param string $new_version The new version of WPGraphQL.
         *
         * @return 'major'|'minor'|'patch'|'prerelease'|'unknown' The release type.
         */
        public static function get_release_type(string $old_version, string $new_version): string
        {
        }
        /**
         * Parse the version string.
         *
         * @param string $version The version string.
         *
         * @return ?array{major:int,minor:int,patch:int,prerelease:?string,buildmetadata:?string,version:string}
         */
        public static function parse(string $version): ?array
        {
        }
    }
    /**
     * Class UpdateChecker
     *
     * @internal This class is for internal use only. It may change in the future without warning.
     */
    class UpdateChecker
    {
        /**
         * The version header to check for in the plugin file.
         */
        public const VERSION_HEADER = 'Requires WPGraphQL';
        /**
         * The tested up to header to check for in the plugin file.
         */
        public const TESTED_UP_TO_HEADER = 'WPGraphQL tested up to';
        /**
         * The current version of the plugin.
         *
         * @var string
         */
        public $current_version = WPGRAPHQL_VERSION;
        /**
         * The new version of the available.
         *
         * @var string
         */
        public $new_version;
        /**
         * UpdateChecker constructor.
         *
         * @param object $plugin_data The plugin data object from the update check.
         */
        public function __construct($plugin_data)
        {
        }
        /**
         * Checks whether any untested or incompatible WPGraphQL extensions should prevent an autoupdate.
         *
         * @param bool $default_value Whether to allow the update by default.
         */
        public function should_autoupdate(bool $default_value): bool
        {
        }
        /**
         * Gets a list of plugins that use WPGraphQL as a dependency and are not tested with the current version of WPGraphQL.
         *
         * @param string $release_type The release type of the current version of WPGraphQL.
         *
         * @return array<string,array<string,mixed>> The array of untested plugin data.
         * @throws \InvalidArgumentException If the WPGraphQL version is invalid.
         */
        public function get_untested_plugins(string $release_type): array
        {
        }
        /**
         * Get incompatible plugins.
         *
         * @param string $version The current plugin version.
         * @param bool   $active_only Whether to only return active plugins. Default false.
         *
         * @return array<string,array<string,mixed>> The array of incompatible plugins.
         */
        public function get_incompatible_plugins(string $version = WPGRAPHQL_VERSION, bool $active_only = false): array
        {
        }
        /**
         * Get the shared modal HTML for the update checkers.
         *
         * @param array<string,array<string,mixed>> $untested_plugins The untested plugins.
         */
        public function get_untested_plugins_modal(array $untested_plugins): string
        {
        }
        /**
         * Outputs the shared modal JS for the update checkers.
         *
         * @todo WIP.
         */
        public function modal_js(): void
        {
        }
        /**
         * Returns whether to allow major plugin autoupdates.
         *
         * Defaults to false.
         *
         * @uses 'wpgraphql_enable_major_autoupdates' filter.
         */
        protected function should_allow_major_autoupdates(): bool
        {
        }
        /**
         * Returns whether to allow plugin autoupdates when plugin dependencies are untested and might be incompatible.
         *
         * @uses `wpgraphql_untested_release_type` filter to determine the release type to use when checking for untested plugins.
         *
         * @uses 'wpgraphql_enable_untested_autoupdates' filter.
         */
        protected function should_allow_untested_autoupdates(): bool
        {
        }
        /**
         * Gets the release type to use when checking for untested plugins.
         *
         * @return 'major'|'minor'|'patch'|'prerelease' The release type to use when checking for untested plugins.
         */
        protected function get_untested_release_type(): string
        {
        }
        /**
         * Gets the plugins that use WPGraphQL as a dependency.
         *
         * @return array<string,array<string,mixed>> The array of plugins that use WPGraphQL as a dependency, keyed by plugin path.
         */
        protected function get_dependents(): array
        {
        }
        /**
         * Gets the plugins that *maybe* use WPGraphQL as a dependency.
         *
         * @return array<string,array<string,mixed>> The array of plugins that maybe use WPGraphQL as a dependency, keyed by plugin path.
         */
        protected function get_possible_dependents(): array
        {
        }
        /**
         * Gets the complete compatibility warning message including the plugins table and follow-up text.
         *
         * @param array<string,array<string,mixed>> $untested_plugins The untested plugins.
         * @return string The formatted HTML message.
         */
        public function get_compatibility_warning_message(array $untested_plugins): string
        {
        }
    }
    /**
     * Class Updates
     */
    final class Updates
    {
        /**
         * Initialize the Updates functionality.
         */
        public function init(): void
        {
        }
        /**
         * Enable the plugin headers.
         *
         * @param string[] $headers The headers.
         * @return string[]
         */
        public function enable_plugin_headers($headers)
        {
        }
        /**
         * Prevent autoupdates when there is an untested WPGraphQL Extension.
         *
         * @param bool   $should_update Whether the plugin should autoupdate.
         * @param object $plugin The plugin data object.
         *
         * @return bool Whether the plugin should autoupdate.
         */
        public function maybe_allow_autoupdates($should_update, $plugin)
        {
        }
        /**
         * Maybe loads the Update Checker for the current admin screen.
         */
        public function load_screen_checker(): void
        {
        }
        /**
         * Registers the admin assets.
         */
        public function register_assets(): void
        {
        }
        /**
         * Disables plugins that don't meet the minimum `Requires WPGraphQL` version.
         */
        public function disable_incompatible_plugins(): void
        {
        }
        /**
         * Displays a one-time notice to the user if incompatible plugins were deactivated.
         */
        public function disable_incompatible_plugins_notice(): void
        {
        }
    }
    /**
     * Class UpdatesScreenLoader
     */
    class UpdatesScreenLoader
    {
        /**
         * The class constructor.
         *
         * Class properties are set inside the action.
         */
        public function __construct()
        {
        }
        /**
         * Show a warning message on the upgrades screen if the user tries to upgrade and has untested plugins.
         */
        public function update_screen_modal(): void
        {
        }
        /**
         * The modal JS for the plugin update message.
         */
        public function modal_js(): void
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * Class AppContext
     * Creates an object that contains all of the context for the GraphQL query
     * This class gets instantiated and populated in the main WPGraphQL class.
     *
     * The context is passed to each resolver during execution.
     *
     * Resolvers have the ability to read and write to context to pass info to nested resolvers.
     *
     * @package WPGraphQL
     */
    #[\AllowDynamicProperties]
    class AppContext
    {
        /**
         * Stores the class to use for the connection query.
         *
         * @var \WP_Query|null
         */
        public $connection_query_class = null;
        /**
         * Stores the url string for the current site
         *
         * @var string $root_url
         */
        public $root_url;
        /**
         * Stores the WP_User object of the current user
         *
         * @var \WP_User $viewer
         */
        public $viewer;
        /**
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * Stores everything from the $_REQUEST global
         *
         * @var mixed $request
         */
        public $request;
        /**
         * Stores additional $config properties
         *
         * @var mixed $config
         */
        public $config;
        /**
         * Passes context about the current connection being resolved
         *
         * @todo These properties and methods are unused. We should consider deprecating/removing them.
         *
         * @var mixed|string|null
         */
        public $currentConnection = null;
        /**
         * Passes context about the current connection
         *
         * @todo These properties and methods are unused. We should consider deprecating/removing them.
         *
         * @var array<string,mixed>
         */
        public $connectionArgs = [];
        /**
         * Stores the loaders for the class
         *
         * @var array<string,\WPGraphQL\Data\Loader\AbstractDataLoader>
         *
         * phpcs:disable SlevomatCodingStandard.Namespaces.FullyQualifiedClassNameInAnnotation, -- For phpstan type hinting
         *
         * @template T of key-of<self::DEFAULT_LOADERS>
         *
         * @phpstan-var array<T, new<self::DEFAULT_LOADERS[T]>>|array<string,\WPGraphQL\Data\Loader\AbstractDataLoader>
         *
         * phpcs:enable
         */
        public $loaders = [];
        /**
         * Instance of the NodeResolver class to resolve nodes by URI
         *
         * @var \WPGraphQL\Data\NodeResolver
         */
        public $node_resolver;
        /**
         * AppContext constructor.
         */
        public function __construct()
        {
        }
        /**
         * Retrieves loader assigned to $key
         *
         * @param string $key The name of the loader to get
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         *
         * @deprecated Use get_loader instead.
         */
        public function getLoader($key)
        {
        }
        /**
         * Retrieves loader assigned to $key
         *
         * @template T of key-of<self::DEFAULT_LOADERS>
         *
         * @param T|string $key The name of the loader to get.
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         * @throws \GraphQL\Error\UserError If the loader is not found.
         *
         * @phpstan-return ( $key is T ? new<self::DEFAULT_LOADERS[T]> : \WPGraphQL\Data\Loader\AbstractDataLoader )
         */
        public function get_loader($key)
        {
        }
        /**
         * Magic getter used to warn about accessing the loaders property directly.
         *
         * @todo Remove this when we change the property visibility.
         *
         * @param string $key The name of the property to get.
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Returns the $args for the connection the field is a part of
         *
         * @deprecated use get_connection_args() instead
         * @return mixed[]|mixed
         */
        public function getConnectionArgs()
        {
        }
        /**
         * Returns the $args for the connection the field is a part of
         *
         * @todo These properties and methods are unused. We should consider deprecating/removing them.
         *
         * @return mixed[]|mixed
         */
        public function get_connection_args()
        {
        }
        /**
         * Returns the current connection
         *
         * @todo These properties and methods are unused. We should consider deprecating/removing them.
         *
         * @return mixed|string|null
         */
        public function get_current_connection()
        {
        }
        /**
         * @return mixed|string|null
         * @deprecated use get_current_connection instead.
         */
        public function getCurrentConnection()
        {
        }
        /**
         * Magic setter to warn about setting dynamic properties on AppContext.
         *
         * This maintains backward compatibility while warning developers to use the new set() method.
         *
         * @param string $name  The name of the property being set.
         * @param mixed  $value The value being assigned to the property.
         * @return void
         */
        public function __set($name, $value)
        {
        }
        /**
         * Sets a value in the context store with namespace isolation.
         *
         * It's strongly recommended to use a unique namespace to avoid collisions with other plugins.
         * A good practice is to use your plugin's text domain or a similar unique identifier.
         *
         * Example:
         * ```php
         * $context->set( 'my-plugin', 'user-language', 'fr' );
         * $context->set( 'my-plugin', 'original-locale', get_locale() );
         * ```
         *
         * @param string $namespace The namespace to store the value under (e.g., 'my-plugin').
         * @param string $key       The key to store the value under within the namespace.
         * @param mixed  $value     The value to store.
         * @since 2.3.8
         */
        public function set(string $namespace, string $key, $value): void
        {
        }
        /**
         * Gets a value from the context store.
         *
         * Example:
         * ```php
         * $language = $context->get( 'my-plugin', 'user-language', 'en' );
         * $locale = $context->get( 'my-plugin', 'original-locale' );
         * ```
         *
         * @param string $namespace The namespace to retrieve the value from.
         * @param string $key       The key to retrieve within the namespace.
         * @param mixed  $default   Optional. The default value to return if the key doesn't exist. Default null.
         * @return mixed The value if it exists, otherwise the default value.
         * @since 2.3.8
         */
        public function get(string $namespace, string $key, $default = null)
        {
        }
        /**
         * Checks if a key exists in the context store.
         *
         * Example:
         * ```php
         * if ( $context->has( 'my-plugin', 'user-language' ) ) {
         *     $language = $context->get( 'my-plugin', 'user-language' );
         * }
         * ```
         *
         * @param string $namespace The namespace to check.
         * @param string $key       The key to check within the namespace.
         * @return bool True if the key exists, false otherwise.
         * @since 2.3.8
         */
        public function has(string $namespace, string $key): bool
        {
        }
        /**
         * Removes a specific key from the context store.
         *
         * Example:
         * ```php
         * $context->remove( 'my-plugin', 'temporary-data' );
         * ```
         *
         * @param string $namespace The namespace containing the key.
         * @param string $key       The key to remove.
         * @since 2.3.8
         */
        public function remove(string $namespace, string $key): void
        {
        }
        /**
         * Clears all data in a specific namespace.
         *
         * This removes all keys associated with the given namespace.
         *
         * Example:
         * ```php
         * // Clear all data for 'my-plugin' namespace
         * $context->clear( 'my-plugin' );
         * ```
         *
         * @param string $namespace The namespace to clear.
         * @since 2.3.8
         */
        public function clear(string $namespace): void
        {
        }
        /**
         * Gets all data stored in a specific namespace.
         *
         * Returns an associative array of all key-value pairs in the namespace.
         *
         * Example:
         * ```php
         * $all_data = $context->all( 'my-plugin' );
         * foreach ( $all_data as $key => $value ) {
         *     // Process each key-value pair
         * }
         * ```
         *
         * @param string $namespace The namespace to retrieve data from.
         * @return array<string,mixed> An array of all key-value pairs in the namespace, or empty array if namespace doesn't exist.
         * @since 2.3.8
         */
        public function all(string $namespace): array
        {
        }
    }
}
namespace WPGraphQL\Data {
    /**
     * Class CommentMutation
     *
     * @package WPGraphQL\Type\Comment\Mutation
     */
    class CommentMutation
    {
        /**
         * This handles inserting the comment and creating
         *
         * @param array<string,mixed> $input         The input for the mutation
         * @param array<string,mixed> $output_args   The output args
         * @param string              $mutation_name The name of the mutation being performed
         * @param bool                $update        Whether it's an update action
         *
         * @return array<string,mixed>
         * @throws \GraphQL\Error\UserError If the comment author is not provided.
         */
        public static function prepare_comment_object(array $input, array &$output_args, string $mutation_name, $update = false)
        {
        }
        /**
         * This updates commentmeta.
         *
         * @param int                                  $comment_id    The ID of the postObject the comment is connected to
         * @param array<string,mixed>                  $input         The input for the mutation
         * @param string                               $mutation_name The name of the mutation ( ex: create, update, delete )
         * @param \WPGraphQL\AppContext                $context The AppContext passed down to all resolvers
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo passed down to all resolvers
         *
         * @return void
         */
        public static function update_additional_comment_data(int $comment_id, array $input, string $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Gets the user object for the comment author.
         *
         * @param ?string $author_email The authorEmail provided to the mutation input.
         *
         * @return \WP_User|false
         */
        protected static function get_comment_author(?string $author_email = null)
        {
        }
    }
    /**
     * Class Config
     *
     * This class contains configurations for various data-related things, such as query filters for
     * cursor pagination.
     *
     * @package WPGraphQL\Data
     */
    class Config
    {
        /**
         * Config constructor.
         */
        public function __construct()
        {
        }
        /**
         * When posts are ordered by fields that have duplicate values, we need to consider
         * another field to "stabilize" the query order. We use IDs as they're always unique.
         *
         * This allows for posts with the same title or same date or same meta value to exist
         * and for their cursors to properly go forward/backward to the proper place in the database.
         *
         * @param string    $orderby  The ORDER BY clause of the query.
         * @param \WP_Query $query    The WP_Query instance executing.
         *
         * @return string
         */
        public function graphql_wp_query_cursor_pagination_stability(string $orderby, \WP_Query $query)
        {
        }
        /**
         * This filters the WPQuery 'where' $args, enforcing the query to return results before or
         * after the referenced cursor
         *
         * @param string    $where The WHERE clause of the query.
         * @param \WP_Query $query The WP_Query instance (passed by reference).
         *
         * @return string
         */
        public function graphql_wp_query_cursor_pagination_support(string $where, \WP_Query $query)
        {
        }
        /**
         * When users are ordered by a meta query the order might be random when
         * the meta values have same values multiple times. This filter adds a
         * secondary ordering by the post ID which forces stable order in such cases.
         *
         * @param string         $orderby The ORDER BY clause of the query.
         * @param \WP_User_Query $query The WP_User_Query instance (passed by reference).
         *
         * @return string
         */
        public function graphql_wp_user_query_cursor_pagination_stability($orderby, \WP_User_Query $query)
        {
        }
        /**
         * This filters the WP_User_Query 'where' $args, enforcing the query to return results before or
         * after the referenced cursor
         *
         * @param string         $where The WHERE clause of the query.
         * @param \WP_User_Query $query The WP_User_Query instance (passed by reference).
         *
         * @return string
         */
        public function graphql_wp_user_query_cursor_pagination_support($where, \WP_User_Query $query)
        {
        }
        /**
         * This filters the term_clauses in the WP_Term_Query to support cursor based pagination, where
         * we can move forward or backward from a particular record, instead of typical offset
         * pagination which can be much more expensive and less accurate.
         *
         * @param array<string,mixed> $pieces     Terms query SQL clauses.
         * @param string[]            $taxonomies An array of taxonomies.
         * @param array<string,mixed> $args       An array of terms query arguments.
         *
         * @return array<string,mixed> $pieces
         */
        public function graphql_wp_term_query_cursor_pagination_support(array $pieces, array $taxonomies, array $args)
        {
        }
        /**
         * This returns a modified version of the $pieces of the comment query clauses if the request
         * is a GraphQL Request and before or after cursors are passed to the query
         *
         * @param array<string,mixed> $pieces A compacted array of comment query clauses.
         * @param \WP_Comment_Query   $query Current instance of WP_Comment_Query, passed by reference.
         *
         * @return array<string,mixed> $pieces
         */
        public function graphql_wp_comments_query_cursor_pagination_support(array $pieces, \WP_Comment_Query $query)
        {
        }
    }
}
namespace WPGraphQL\Data\Connection {
    /**
     * Class AbstractConnectionResolver
     *
     * Individual Connection Resolvers should extend this to make returning data in proper shape for Relay-compliant connections easier, ensure data is passed through consistent filters, etc.
     *
     * @package WPGraphQL\Data\Connection
     *
     * The template type `TQueryClass` is used by static analysis tools to correctly typehint the query class used by the Connection Resolver.
     * Classes that extend `AbstractConnectionResolver` should add `@extends @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\MY_QUERY_CLASS>` to the class dockblock to get proper hinting.
     * E.g. `@extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\WP_Term_Query>`
     *
     * @template TQueryClass
     */
    abstract class AbstractConnectionResolver
    {
        /**
         * The source from the field calling the connection.
         *
         * @var \WPGraphQL\Model\Model|mixed[]|mixed
         */
        protected $source;
        /**
         * The args input before it is filtered and prepared by the constructor.
         *
         * @var array<string,mixed>
         */
        protected $unfiltered_args;
        /**
         * The args input on the field calling the connection.
         *
         * Filterable by `graphql_connection_args`.
         *
         * @var ?array<string,mixed>
         */
        protected $args;
        /**
         * The AppContext for the GraphQL Request
         *
         * @var \WPGraphQL\AppContext
         */
        protected $context;
        /**
         * The ResolveInfo for the GraphQL Request
         *
         * @var \GraphQL\Type\Definition\ResolveInfo
         */
        protected $info;
        /**
         * The query args used to query for data to resolve the connection.
         *
         * Filterable by `graphql_connection_query_args`.
         *
         * @var ?array<string,mixed>
         */
        protected $query_args;
        /**
         * Whether the connection resolver should execute.
         *
         * If `false`, the connection resolve will short-circuit and return an empty array.
         *
         * Filterable by `graphql_connection_pre_should_execute` and `graphql_connection_should_execute`.
         *
         * @var ?bool
         */
        protected $should_execute;
        /**
         * The loader name.
         *
         * Defaults to `loader_name()` and filterable by `graphql_connection_loader_name`.
         *
         * @var ?string
         */
        protected $loader_name;
        /**
         * The loader the resolver is configured to use.
         *
         * @var ?\WPGraphQL\Data\Loader\AbstractDataLoader
         */
        protected $loader;
        /**
         * Whether the connection is a one to one connection. Default false.
         *
         * @var bool
         */
        public $one_to_one = false;
        /**
         * The class name of the query to instantiate. Set to `null` if the Connection Resolver does not rely on a query class to fetch data.
         *
         * Examples `WP_Query`, `WP_Comment_Query`, `WC_Query`, `/My/Namespaced/CustomQuery`, etc.
         *
         * @var ?class-string<TQueryClass>
         */
        protected $query_class;
        /**
         * The instantiated query array/object used to fetch the data.
         *
         * Examples:
         *   return new WP_Query( $this->get_query_args() );
         *   return new WP_Comment_Query( $this->get_query_args() );
         *   return new WP_Term_Query( $this->get_query_args() );
         *
         * Whatever it is will be passed through filters so that fields throughout
         * have context from what was queried and can make adjustments as needed, such
         * as exposing `totalCount` in pageInfo, etc.
         *
         * Filterable by `graphql_connection_pre_get_query` and `graphql_connection_query`.
         *
         * @var ?TQueryClass
         */
        protected $query;
        /**
         * @var mixed[]
         *
         * @deprecated 1.26.0 This is an artifact and is unused. It will be removed in a future release.
         */
        protected $items;
        /**
         * The IDs returned from the query.
         *
         * The IDs are sliced to confirm with the pagination args, and overfetched by one.
         *
         * Filterable by `graphql_connection_ids`.
         *
         * @var int[]|string[]|null
         */
        protected $ids;
        /**
         * The nodes (usually GraphQL models) returned from the query.
         *
         * Filterable by `graphql_connection_nodes`.
         *
         * @var \WPGraphQL\Model\Model[]|mixed[]|null
         */
        protected $nodes;
        /**
         * The edges for the connection.
         *
         * Filterable by `graphql_connection_edges`.
         *
         * @var ?array<string,mixed>[]
         */
        protected $edges;
        /**
         * The page info for the connection.
         *
         * Filterable by `graphql_connection_page_info`.
         *
         * @var ?array<string,mixed>
         */
        protected $page_info;
        /**
         * The query amount to return for the connection.
         *
         * @var ?int
         */
        protected $query_amount;
        /**
         * ConnectionResolver constructor.
         *
         * @param mixed                                $source  Source passed down from the resolve tree
         * @param array<string,mixed>                  $args    Array of arguments input in the field as part of the GraphQL query.
         * @param \WPGraphQL\AppContext                $context The app context that gets passed down the resolve tree.
         * @param \GraphQL\Type\Definition\ResolveInfo $info    Info about fields passed down the resolve tree.
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * ====================
         * Required/Abstract Methods
         *
         * These methods must be implemented or overloaded in the extending class.
         *
         * The reason not all methods are abstract is to prevent backwards compatibility issues.
         * ====================
         */
        /**
         * The name of the loader to use for this connection.
         *
         * Filterable by `graphql_connection_loader_name`.
         *
         * @todo This is protected for backwards compatibility, but should be abstract and implemented by the child classes.
         */
        protected function loader_name(): string
        {
        }
        /**
         * Prepares the query args used to fetch the data for the connection.
         *
         * This accepts the GraphQL args and maps them to a format that can be read by our query class.
         * For example, if the ConnectionResolver uses WP_Query to fetch the data, this should return $args for use in `new WP_Query( $args );`
         *
         * @todo This is protected for backwards compatibility, but should be abstract and implemented by the child classes.
         *
         * @param array<string,mixed> $args The GraphQL input args passed to the connection.
         *
         * @return array<string,mixed>
         *
         * @throws \GraphQL\Error\InvariantViolation If the method is not implemented.
         *
         * @codeCoverageIgnore
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * Return an array of ids from the query
         *
         * Each Query class in WP and potential datasource handles this differently,
         * so each connection resolver should handle getting the items into a uniform array of items.
         *
         * @todo: This is not an abstract function to prevent backwards compatibility issues, so it instead throws an exception.
         *
         * Classes that extend AbstractConnectionResolver should
         * override this method instead of ::get_ids().
         *
         * @since 1.9.0
         *
         * @throws \GraphQL\Error\InvariantViolation If child class forgot to implement this.
         * @return int[]|string[] the array of IDs.
         */
        public function get_ids_from_query()
        {
        }
        /**
         * Determine whether or not the the offset is valid, i.e the item corresponding to the offset exists.
         *
         * Offset is equivalent to WordPress ID (e.g post_id, term_id). So this is equivalent to checking if the WordPress object exists for the given ID.
         *
         * @param mixed $offset The offset to validate. Typically a WordPress Database ID
         *
         * @return bool
         */
        abstract public function is_valid_offset($offset);
        /**
         * ====================
         * The following methods handle the underlying behavior of the connection, and are intended to be overloaded by the child class.
         *
         * These methods are wrapped in getters which apply the filters and set the properties of the class instance.
         * ====================
         */
        /**
         * Used to determine whether the connection query should be executed. This is useful for short-circuiting the connection resolver before executing the query.
         *
         * When `pre_should_execute()` returns false, that's a sign the Resolver shouldn't execute the query. Otherwise, the more expensive logic logic in `should_execute()` will run later in the lifecycle.
         *
         * @param mixed                                $source  Source passed down from the resolve tree
         * @param array<string,mixed>                  $args    Array of arguments input in the field as part of the GraphQL query.
         * @param \WPGraphQL\AppContext                $context The app context that gets passed down the resolve tree.
         * @param \GraphQL\Type\Definition\ResolveInfo $info    Info about fields passed down the resolve tree.
         */
        protected function pre_should_execute($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info): bool
        {
        }
        /**
         * Prepares the GraphQL args for use by the connection.
         *
         * Useful for modifying the $args before they are passed to $this->get_query_args().
         *
         * @param array<string,mixed> $args The GraphQL input args to prepare.
         *
         * @return array<string,mixed>
         */
        protected function prepare_args(array $args): array
        {
        }
        /**
         * The maximum number of items that should be returned by the query.
         *
         * This is filtered by `graphql_connection_max_query_amount` in ::get_query_amount().
         */
        protected function max_query_amount(): int
        {
        }
        /**
         * The default query class to use for the connection.
         *
         * Should return null if the resolver does not use a query class to fetch the data.
         *
         * @return ?class-string<TQueryClass>
         */
        protected function query_class(): ?string
        {
        }
        /**
         * Validates the query class. Will be ignored if the Connection Resolver does not use a query class.
         *
         * By default this checks if the query class has a `query()` method. If the query class requires the `query()` method to be named something else (e.g. $query_class->get_results()` ) this method should be overloaded.
         *
         * @param string $query_class The query class to validate.
         */
        protected function is_valid_query_class(string $query_class): bool
        {
        }
        /**
         * Executes the query and returns the results.
         *
         * Usually, the returned value is an instantiated `$query_class` (e.g. `WP_Query`), but it can be any collection of data. The `get_ids_from_query()` method will be used to extract the IDs from the returned value.
         *
         * If the resolver does not rely on a query class, this should be overloaded to return the data directly.
         *
         * @param array<string,mixed> $query_args The query args to use to query the data.
         *
         * @return TQueryClass
         *
         * @throws \GraphQL\Error\InvariantViolation If the query class is not valid.
         */
        protected function query(array $query_args)
        {
        }
        /**
         * Determine whether or not the query should execute.
         *
         * Return true to execute, return false to prevent execution.
         *
         * Various criteria can be used to determine whether a Connection Query should be executed.
         *
         * For example, if a user is requesting revisions of a Post, and the user doesn't have permission to edit the post, they don't have permission to view the revisions, and therefore we can prevent the query to fetch revisions from executing in the first place.
         *
         * Runs only if `pre_should_execute()` returns true.
         *
         * @todo This is public for b/c but it should be protected.
         *
         * @return bool
         */
        public function should_execute()
        {
        }
        /**
         * Returns the offset for a given cursor.
         *
         * Connections that use a string-based offset should override this method.
         *
         * @param ?string $cursor The cursor to convert to an offset.
         *
         * @return int|mixed
         */
        public function get_offset_for_cursor(string $cursor = null)
        {
        }
        /**
         * Validates Model.
         *
         * If model isn't a class with a `fields` member, this function with have be overridden in
         * the Connection class.
         *
         * @param \WPGraphQL\Model\Model|mixed $model The model being validated.
         *
         * @return bool
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * ====================
         * Public Getters
         *
         * These methods are used to get the properties of the class instance.
         *
         * You shouldn't need to overload these, but if you do, take care to ensure that the overloaded method applies the same filters and sets the same properties as the methods here.
         * ====================
         */
        /**
         * Returns the source of the connection
         *
         * @return mixed
         */
        public function get_source()
        {
        }
        /**
         * Returns the AppContext of the connection.
         */
        public function get_context(): \WPGraphQL\AppContext
        {
        }
        /**
         * Returns the ResolveInfo of the connection.
         */
        public function get_info(): \GraphQL\Type\Definition\ResolveInfo
        {
        }
        /**
         * Returns the loader name.
         *
         * If $loader_name is not initialized, this plugin will initialize it.
         *
         * @return string
         *
         * @throws \GraphQL\Error\InvariantViolation
         */
        public function get_loader_name()
        {
        }
        /**
         * Returns the $args passed to the connection, before any modifications.
         *
         * @return array<string,mixed>
         */
        public function get_unfiltered_args(): array
        {
        }
        /**
         * Returns the $args passed to the connection.
         *
         * @return array<string,mixed>
         */
        public function get_args(): array
        {
        }
        /**
         * Returns the amount of items to query from the database.
         *
         * The amount is calculated as the the max between what was requested and what is defined as the $max_query_amount to ensure that queries don't exceed unwanted limits when querying data.
         *
         * If the amount requested is greater than the max query amount, a debug message will be included in the GraphQL response.
         *
         * @return int
         */
        public function get_query_amount()
        {
        }
        /**
         * Gets the query args used by the connection to fetch the data.
         *
         * @return array<string,mixed>
         */
        public function get_query_args()
        {
        }
        /**
         * Gets the query class to be instantiated by the `query()` method.
         *
         * If null, the `query()` method will be overloaded to return the data.
         *
         * @return ?class-string<TQueryClass>
         */
        public function get_query_class(): ?string
        {
        }
        /**
         * Returns whether the connection should execute.
         *
         * If conditions are met that should prevent the execution, we can bail from resolving early, before the query is executed.
         */
        public function get_should_execute(): bool
        {
        }
        /**
         * Gets the results of the executed query.
         *
         * @return TQueryClass
         */
        public function get_query()
        {
        }
        /**
         * Returns an array of IDs for the connection.
         *
         * These IDs have been fetched from the query with all the query args applied,
         * then sliced (overfetching by 1) by pagination args.
         *
         * @return int[]|string[]
         */
        public function get_ids()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * @uses AbstractConnectionResolver::get_ids_for_nodes()
         *
         * @return array<int|string,mixed|\WPGraphQL\Model\Model|null>
         */
        public function get_nodes()
        {
        }
        /**
         * Get the edges from the nodes.
         *
         * @return array<string,mixed>[]
         */
        public function get_edges()
        {
        }
        /**
         * Returns pageInfo for the connection
         *
         * @return array<string,mixed>
         */
        public function get_page_info()
        {
        }
        /**
         * ===============================
         * Public setters
         *
         * These are used to directly modify the instance properties from outside the class.
         * ===============================
         */
        /**
         * Given a key and value, this sets a query_arg which will modify the query_args used by ::get_query();
         *
         * @param string $key   The key of the query arg to set
         * @param mixed  $value The value of the query arg to set
         *
         * @return static
         */
        public function set_query_arg($key, $value)
        {
        }
        /**
         * Overloads the query_class which will be used to instantiate the query.
         *
         * @param class-string<TQueryClass> $query_class The class to use for the query. If empty, this will reset to the default query class.
         *
         * @return static
         */
        public function set_query_class(string $query_class)
        {
        }
        /**
         * Whether the connection should resolve as a one-to-one connection.
         *
         * @return static
         */
        public function one_to_one()
        {
        }
        /**
         * Gets whether or not the query should execute, BEFORE any data is fetched or altered, filtered by 'graphql_connection_pre_should_execute'.
         *
         * @param mixed                                $source  The source that's passed down the GraphQL queries.
         * @param array<string,mixed>                  $args    The inputArgs on the field.
         * @param \WPGraphQL\AppContext                $context The AppContext passed down the GraphQL tree.
         * @param \GraphQL\Type\Definition\ResolveInfo $info    The ResolveInfo passed down the GraphQL tree.
         */
        protected function get_pre_should_execute($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info): bool
        {
        }
        /**
         * Returns the loader.
         *
         * If $loader is not initialized, this method will initialize it.
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         */
        protected function get_loader()
        {
        }
        /**
         * Returns the amount of items requested from the connection.
         *
         * @return int
         *
         * @throws \GraphQL\Error\UserError If the `first` or `last` args are used together.
         */
        public function get_amount_requested()
        {
        }
        /**
         * =====================
         * Resolver lifecycle methods
         *
         * These methods are used internally by the class to resolve the connection. They rarely should be overloaded by the child class, but if you do, make sure to preserve any WordPress hooks included in the parent method.
         * =====================
         */
        /**
         * Get the connection to return to the Connection Resolver
         *
         * @return \GraphQL\Deferred
         */
        public function get_connection()
        {
        }
        /**
         * Execute the resolver query and get the data for the connection
         *
         * @return int[]|string[]
         */
        public function execute_and_get_ids()
        {
        }
        /**
         * Validates the $query_class set on the resolver.
         *
         * This runs before the query is executed to ensure that the query class is valid.
         *
         * @throws \GraphQL\Error\InvariantViolation If the query class is invalid.
         */
        protected function validate_query_class(): void
        {
        }
        /**
         * Returns an array slice of IDs, per the Relay Cursor Connection spec.
         *
         * The resulting array should be overfetched by 1.
         *
         * @see https://relay.dev/graphql/connections.htm#sec-Pagination-algorithm
         *
         * @param int[]|string[] $ids The array of IDs from the query to slice, ordered as expected by the GraphQL query.
         *
         * @since 1.9.0
         *
         * @return int[]|string[]
         */
        public function apply_cursors_to_ids(array $ids)
        {
        }
        /**
         * Gets the array index for the given offset.
         *
         * @param int|string|false $offset The cursor pagination offset.
         * @param int[]|string[]   $ids    The array of ids from the query.
         *
         * @return int|false $index The array index of the offset.
         */
        public function get_array_index_for_offset($offset, $ids)
        {
        }
        /**
         * Prepares the nodes for the connection.
         *
         * @used-by self::get_nodes()
         *
         * @return array<int|string,mixed|\WPGraphQL\Model\Model|null>
         */
        protected function prepare_nodes(): array
        {
        }
        /**
         * Prepares the IDs for the connection.
         *
         * @used-by self::get_ids()
         *
         * @return int[]|string[]
         */
        protected function prepare_ids(): array
        {
        }
        /**
         * Gets the IDs for the currently-paginated slice of nodes.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched by 1 item to calculate pageInfo.
         *
         * @used-by AbstractConnectionResolver::get_nodes()
         *
         * @return int[]|string[]
         */
        public function get_ids_for_nodes()
        {
        }
        /**
         * Given an ID, return the model for the entity or null
         *
         * @param int|string|mixed $id The ID to identify the object by. Could be a database ID or an in-memory ID (like post_type name)
         *
         * @return mixed|\WPGraphQL\Model\Model|null
         */
        public function get_node_by_id($id)
        {
        }
        /**
         * Gets whether or not the model is valid.
         *
         * @param mixed $model The model being validated.
         */
        protected function get_is_valid_model($model): bool
        {
        }
        /**
         * Prepares the edges for the connection.
         *
         * @used-by self::get_edges()
         *
         * @param array<int|string,mixed|\WPGraphQL\Model\Model|null> $nodes The nodes for the connection.
         *
         * @return array<string,mixed>[]
         */
        protected function prepare_edges(array $nodes): array
        {
        }
        /**
         * Prepares a single edge for the connection.
         *
         * @used-by self::prepare_edges()
         *
         * @param int|string                        $id   The ID of the node.
         * @param mixed|\WPGraphQL\Model\Model|null $node The node for the edge.
         *
         * @return array<string,mixed>
         */
        protected function prepare_edge($id, $node): array
        {
        }
        /**
         * Given an ID, a cursor is returned.
         *
         * @param int|string $id The ID to get the cursor for.
         *
         * @return string
         */
        protected function get_cursor_for_node($id)
        {
        }
        /**
         * Prepares the page info for the connection.
         *
         * @used-by self::get_page_info()
         *
         * @return array<string,mixed>
         */
        protected function prepare_page_info(): array
        {
        }
        /**
         * Determine the start cursor from the connection
         *
         * @return mixed|string|null
         */
        public function get_start_cursor()
        {
        }
        /**
         * Determine the end cursor from the connection
         *
         * @return mixed|string|null
         */
        public function get_end_cursor()
        {
        }
        /**
         * Gets the offset for the `after` cursor.
         *
         * @return int|string|null
         */
        public function get_after_offset()
        {
        }
        /**
         * Gets the offset for the `before` cursor.
         *
         * @return int|string|null
         */
        public function get_before_offset()
        {
        }
        /**
         * Whether there is a next page in the connection.
         *
         * If there are more "items" than were asked for in the "first" argument or if there are more "items" after the "before" argument, has_next_page() will be set to true.
         *
         * @return bool
         */
        public function has_next_page()
        {
        }
        /**
         * Whether there is a previous page in the connection.
         *
         * If there are more "items" than were asked for in the "last" argument or if there are more "items" before the "after" argument, has_previous_page() will be set to true.
         *
         * @return bool
         */
        public function has_previous_page()
        {
        }
        /**
         * DEPRECATED METHODS
         *
         * These methods are deprecated and will be removed in a future release.
         */
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.11.0 in favor of $this->get_args();
         * @codeCoverageIgnore
         *
         * @return array<string,mixed>
         */
        public function getArgs(): array
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 0.3.0
         * @codeCoverageIgnore
         *
         * @param string $key   The key of the query arg to set
         * @param mixed  $value The value of the query arg to set
         *
         * @return static
         */
        public function setQueryArg($key, $value)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.9.0
         * @codeCoverageIgnore
         *
         * @return int|mixed
         */
        public function get_offset()
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.24.0 in favor of $this->get_source().
         * @codeCoverageIgnore
         *
         * @return mixed
         */
        public function getSource()
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.24.0 in favor of $this->get_context().
         * @codeCoverageIgnore
         */
        public function getContext(): \WPGraphQL\AppContext
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.24.0 in favor of $this->get_info().
         * @codeCoverageIgnore
         */
        public function getInfo(): \GraphQL\Type\Definition\ResolveInfo
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.24.0 in favor of $this->get_should_execute().
         * @codeCoverageIgnore
         */
        public function getShouldExecute(): bool
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.24.0 in favor of $this->get_loader().
         * @codeCoverageIgnore
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         */
        protected function getLoader()
        {
        }
    }
    /**
     * Class CommentConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\WP_Comment_Query>
     */
    class CommentConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         *
         * @throws \GraphQL\Error\UserError
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query_class(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_args(array $args): array
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to
         * WP_Comment_Query friendly keys.
         *
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be
         * down to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @param array<string,mixed> $args The array of query arguments
         *
         * @since  0.0.5
         * @return array<string,mixed>
         */
        public function sanitize_input_fields(array $args)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int $offset The ID of the node used for the cursor offset.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class ContentTypeConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class ContentTypeConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string $offset The offset (post type name) to check.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class EnqueuedScriptsConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class EnqueuedScriptsConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function max_query_amount(): int
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param ?\_WP_Dependency $model The model to check.
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class EnqueuedStylesheetConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class EnqueuedStylesheetConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function max_query_amount(): int
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param ?\_WP_Dependency $model
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class TermObjectConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\WP_Term_Query>
     */
    class TermObjectConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * The name of the Taxonomy the resolver is intended to be used for
         *
         * @var array<string>|string
         */
        protected $taxonomy;
        /**
         * {@inheritDoc}
         *
         * @param mixed|array<string>|string|null $taxonomy The name of the Taxonomy the resolver is intended to be used for.
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $taxonomy = null)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query_class(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * This maps the GraphQL "friendly" args to get_terms $args.
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be down
         * to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @since  0.0.5
         * @return array<string,mixed>
         */
        public function sanitize_input_fields()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int $offset The ID of the node used in the cursor for offset.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class MenuConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class MenuConnectionResolver extends \WPGraphQL\Data\Connection\TermObjectConnectionResolver
    {
        /**
         * {@inheritDoc}
         *
         * @throws \Exception
         */
        protected function prepare_query_args(array $args): array
        {
        }
    }
    /**
     * Class PostObjectConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\WP_Query>
     */
    class PostObjectConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * The name of the post type, or array of post types the connection resolver is resolving for
         *
         * @var mixed|string|string[]
         */
        protected $post_type;
        /**
         * {@inheritDoc}
         *
         * @param mixed|string|string[] $post_type The post type to resolve for
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $post_type = 'any')
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query_class(): string
        {
        }
        /**
         * {@inheritDoc}
         *
         * @throws \GraphQL\Error\InvariantViolation If the query has been modified to suppress_filters.
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function should_execute()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to WP_Query
         * friendly keys. There's probably a cleaner/more dynamic way to approach this, but
         * this was quick. I'd be down to explore more dynamic ways to map this, but for
         * now this gets the job done.
         *
         * @param array<string,mixed> $where_args The args passed to the connection
         *
         * @return array<string,mixed>
         * @since  0.0.5
         */
        public function sanitize_input_fields(array $where_args)
        {
        }
        /**
         * Limit the status of posts a user can query.
         *
         * By default, published posts are public, and other statuses require permission to access.
         *
         * This strips the status from the query_args if the user doesn't have permission to query for
         * posts of that status.
         *
         * @param string[]|string $stati The status(es) to sanitize.
         *
         * @return string[]|null
         */
        public function sanitize_post_stati($stati)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int $offset The ID of the node used in the cursor offset.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class MenuItemConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class MenuItemConnectionResolver extends \WPGraphQL\Data\Connection\PostObjectConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_args(array $args): array
        {
        }
    }
    /**
     * Class PluginConnectionResolver - Connects plugins to other objects
     *
     * @package WPGraphQL\Data\Connection
     * @since 0.0.5
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<array<string,array<string,mixed>>>
     */
    class PluginConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * A list of all the installed plugins, keyed by their type.
         *
         * @var ?array{site:array<string,mixed>,mustuse:array<string,mixed>,dropins:array<string,mixed>}
         */
        protected $all_plugins;
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return array<string,array<string,mixed>>
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function should_execute()
        {
        }
        /**
         * Gets all the installed plugins, including must use and drop in plugins.
         *
         * The result is cached in the ConnectionResolver instance.
         *
         * @return array{site:array<string,mixed>,mustuse:array<string,mixed>,dropins:array<string,mixed>}
         */
        protected function get_all_plugins(): array
        {
        }
    }
    /**
     * Class TaxonomyConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class TaxonomyConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string $offset The offset (taxonomy name) to check.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class ThemeConnectionResolver
     *
     * @package WPGraphQL\Data\Resolvers
     * @since 0.5.0
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class ThemeConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class UserConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<\WP_User_Query>
     */
    class UserConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         *
         * @throws \Exception
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query_class(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to WP_User_Query
         * friendly keys.
         *
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be
         * down to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @param array<string,mixed> $args The query "where" args
         *
         * @return array<string,mixed>
         * @throws \GraphQL\Error\UserError If the user does not have the "list_users" capability.
         * @since  0.0.5
         */
        protected function sanitize_input_fields(array $args)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int $offset The ID of the node used as the offset in the cursor.
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class PluginConnectionResolver - Connects plugins to other objects
     *
     * @package WPGraphQL\Data\Resolvers
     * @since   0.0.5
     * @extends \WPGraphQL\Data\Connection\AbstractConnectionResolver<string[]>
     */
    class UserRoleConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * {@inheritDoc}
         */
        public function get_ids_from_query()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function prepare_query_args(array $args): array
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function query(array $query_args)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function loader_name(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function should_execute()
        {
        }
    }
}
namespace WPGraphQL\Data\Cursor {
    /**
     * Abstract Cursor
     *
     * @package WPGraphQL\Data\Loader
     * @since 1.9.0
     */
    abstract class AbstractCursor
    {
        /**
         * The global WordPress Database instance
         *
         * @var \wpdb $wpdb
         */
        public $wpdb;
        /**
         * @var \WPGraphQL\Data\Cursor\CursorBuilder
         */
        public $builder;
        /**
         * @var string
         */
        public $compare;
        /**
         * Our current cursor offset.
         * For example, the term, post, user, or comment ID.
         *
         * @var int
         */
        public $cursor_offset;
        /**
         * @var string|null
         */
        public $cursor;
        /**
         * The WP object instance for the cursor.
         *
         * @var mixed
         */
        public $cursor_node;
        /**
         * Copy of query vars so we can modify them safely
         *
         * @var array<string,mixed>
         */
        public $query_vars = [];
        /**
         * Stores SQL statement alias for the ID column applied to the cutoff
         *
         * @var string
         */
        protected $id_key = '';
        /**
         * The constructor
         *
         * @param array<string,mixed> $query_vars         Query variable for the query to be executed.
         * @param string|null         $cursor             Cursor type. Either 'after' or 'before'.
         */
        public function __construct($query_vars, $cursor = 'after')
        {
        }
        /**
         * Get the query variable for the provided name.
         *
         * @param string $name .
         *
         * @return mixed|null
         */
        public function get_query_var(string $name)
        {
        }
        /**
         * Get the direction pagination is going in.
         *
         * @return string
         */
        public function get_cursor_compare()
        {
        }
        /**
         * Ensure the cursor_offset is a positive integer and we have a valid object for our cursor node.
         *
         * @return bool
         */
        protected function is_valid_offset_and_node()
        {
        }
        /**
         * Validates cursor compare field configuration. Validation failure results in a fatal
         * error because query execution is guaranteed to fail.
         *
         * @param array<string,mixed> $field Threshold configuration.
         *
         * @throws \GraphQL\Error\InvariantViolation Invalid configuration format.
         */
        protected function validate_cursor_compare_field($field): void
        {
        }
        /**
         * Returns the ID key.
         *
         * @return string
         */
        public function get_cursor_id_key()
        {
        }
        /**
         * Applies cursor compare fields to the cursor cutoff.
         *
         * @param array<string,mixed>[] $fallback Fallback cursor compare fields.
         *
         * @throws \GraphQL\Error\InvariantViolation Invalid configuration format.
         */
        protected function compare_with_cursor_fields($fallback = []): void
        {
        }
        /**
         * Applies ID field to the cursor builder.
         */
        protected function compare_with_id_field(): void
        {
        }
        /**
         * Get the WP Object instance for the cursor.
         *
         * This is cached internally so it should not generate additionl queries.
         *
         * @return mixed|null
         */
        abstract public function get_cursor_node();
        /**
         * Return the additional AND operators for the where statement
         *
         * @return string
         */
        abstract public function get_where();
        /**
         * Generate the final SQL string to be appended to WHERE clause
         *
         * @return string
         */
        abstract public function to_sql();
    }
    /**
     * Comment Cursor
     *
     * This class generates the SQL and operators for cursor based pagination for comments
     *
     * @package WPGraphQL\Data\Cursor
     */
    class CommentObjectCursor extends \WPGraphQL\Data\Cursor\AbstractCursor
    {
        /**
         * @var ?\WP_Comment
         */
        public $cursor_node;
        /**
         * {@inheritDoc}
         *
         * @param array<string,mixed>|\WP_Comment_Query $query_vars The query vars to use when building the SQL statement.
         */
        public function __construct($query_vars, $cursor = 'after')
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return ?\WP_Comment
         */
        public function get_cursor_node()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_where()
        {
        }
        /**
         * Get AND operator for given order by key
         *
         * @param string $by    The order by key
         * @param string $order The order direction ASC or DESC
         *
         * @return void
         */
        public function compare_with($by, $order)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function to_sql()
        {
        }
    }
    /**
     * Generic class for building AND&OR operators for cursor based paginators
     */
    class CursorBuilder
    {
        /**
         * The field by which the cursor should order the results
         *
         * @var array<string,mixed>[]
         */
        public $fields;
        /**
         * Default comparison operator. < or >
         *
         * @var string
         */
        public $compare;
        /**
         * CursorBuilder constructor.
         *
         * @param string $compare
         *
         * @return void
         */
        public function __construct($compare = '>')
        {
        }
        /**
         * Add ordering field. The order you call this method matters. First field
         * will be the primary field and latter ones will be used if the primary
         * field has duplicate values
         *
         * @param string           $key           database column
         * @param mixed|string|int $value         value from the current cursor
         * @param string|null      $type          type cast
         * @param string|null      $order         custom order
         * @param object|null      $object_cursor The Cursor class
         *
         * @return void
         */
        public function add_field(string $key, $value, ?string $type = null, ?string $order = null, $object_cursor = null)
        {
        }
        /**
         * Returns true at least one ordering field has been added
         *
         * @return bool
         */
        public function has_fields()
        {
        }
        /**
         * Generate the final SQL string to be appended to WHERE clause
         *
         * @param mixed|array<string,mixed>[]|null $fields
         *
         * @return string
         */
        public function to_sql($fields = null)
        {
        }
        /**
         * Copied from
         * https://github.com/WordPress/WordPress/blob/c4f8bc468db56baa2a3bf917c99cdfd17c3391ce/wp-includes/class-wp-meta-query.php#L272-L296
         *
         * It's an instance method. No way to call it without creating the instance?
         *
         * Return the appropriate alias for the given meta type if applicable.
         *
         * @param string $type MySQL type to cast meta_value.
         *
         * @return string MySQL type.
         */
        public function get_cast_for_type($type = '')
        {
        }
    }
    /**
     * Post Cursor
     *
     * This class generates the SQL AND operators for cursor based pagination for posts
     *
     * @package WPGraphQL\Data\Cursor
     */
    class PostObjectCursor extends \WPGraphQL\Data\Cursor\AbstractCursor
    {
        /**
         * @var ?\WP_Post
         */
        public $cursor_node;
        /**
         * Counter for meta value joins
         *
         * @var int
         */
        public $meta_join_alias = 0;
        /**
         * {@inheritDoc}
         */
        public function __construct($query_vars, $cursor = 'after')
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return ?\WP_Post
         */
        public function get_cursor_node()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function to_sql()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_where()
        {
        }
        /**
         * @todo Remove in 3.0.0
         * @deprecated 1.9.0
         * @codeCoverageIgnore
         *
         * @return ?\WP_Post
         */
        public function get_cursor_post()
        {
        }
    }
    class TermObjectCursor extends \WPGraphQL\Data\Cursor\AbstractCursor
    {
        /**
         * @var ?\WP_Term ;
         */
        public $cursor_node;
        /**
         * Counter for meta value joins
         *
         * @var int
         */
        public $meta_join_alias = 0;
        /**
         * {@inheritDoc}
         *
         * @var string
         */
        protected $id_key = 't.term_id';
        /**
         * {@inheritDoc}
         *
         * @return ?\WP_Term ;
         */
        public function get_cursor_node()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param array<array<string,mixed>>[]|null $fields The fields from the CursorBuilder to convert to SQL.
         */
        public function to_sql($fields = null)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_where()
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.9.0
         * @codeCoverageIgnore
         *
         * @param string $name The name of the query var to get
         * @return mixed|null
         */
        public function get_query_arg(string $name)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.9.0
         * @codeCoverageIgnore
         *
         * @return ?\WP_Term
         */
        public function get_cursor_term()
        {
        }
    }
    /**
     * User Cursor
     *
     * This class generates the SQL AND operators for cursor based pagination for users
     *
     * @package WPGraphQL\Data\Cursor
     */
    class UserCursor extends \WPGraphQL\Data\Cursor\AbstractCursor
    {
        /**
         * @var ?\WP_User
         */
        public $cursor_node;
        /**
         * Counter for meta value joins
         *
         * @var int
         */
        public $meta_join_alias = 0;
        /**
         * {@inheritDoc}
         *
         * @param array<string,mixed>|\WP_User_Query $query_vars The query vars to use when building the SQL statement.
         */
        public function __construct($query_vars, $cursor = 'after')
        {
        }
        /**
         * {@inheritDoc}
         *
         * Unlike most queries, users by default are in ascending order.
         */
        public function get_cursor_compare()
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return ?\WP_User
         */
        public function get_cursor_node()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function to_sql()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function get_where()
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated 1.9.0
         * @codeCoverageIgnore
         *
         * @return ?\WP_User
         */
        public function get_cursor_user()
        {
        }
    }
}
namespace WPGraphQL\Data {
    /**
     * Class DataSource
     *
     * This class serves as a factory for all the resolvers for queries and mutations. This layer of
     * abstraction over the actual resolve functions allows easier, granular control over versioning as
     * we can change big things behind the scenes if/when needed, and we just need to ensure the
     * call to the DataSource method returns the expected data later on. This should make it easy
     * down the road to version resolvers if/when changes to the WordPress API are rolled out.
     *
     * @package WPGraphQL\Data
     * @since   0.0.4
     */
    class DataSource
    {
        /**
         * Stores an array of node definitions
         *
         * @var mixed[] $node_definition
         * @since  0.0.4
         */
        protected static $node_definition;
        /**
         * Retrieves a WP_Comment object for the ID that gets passed
         *
         * @param int $comment_id The ID of the comment the comment author is associated with.
         *
         * @return \WPGraphQL\Model\CommentAuthor|null
         * @throws \Exception Throws Exception.
         */
        public static function resolve_comment_author(int $comment_id)
        {
        }
        /**
         * Wrapper for the CommentsConnectionResolver class
         *
         * @param mixed                                $source  The object the connection is coming from
         * @param array<string,mixed>                  $args    Query args to pass to the connection resolver
         * @param \WPGraphQL\AppContext                $context The context of the query to pass along
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since 0.0.5
         */
        public static function resolve_comments_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Wrapper for PluginsConnectionResolver::resolve
         *
         * @param mixed                                $source  The object the connection is coming from
         * @param array<string,mixed>                  $args    Array of arguments to pass to resolve method
         * @param \WPGraphQL\AppContext                $context AppContext object passed down
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since  0.0.5
         */
        public static function resolve_plugins_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Wrapper for PostObjectsConnectionResolver
         *
         * @param mixed                                $source    The object the connection is coming from
         * @param array<string,mixed>                  $args      Arguments to pass to the resolve method
         * @param \WPGraphQL\AppContext                $context AppContext object to pass down
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         * @param mixed|string|string[]                $post_type Post type of the post we are trying to resolve
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since  0.0.5
         */
        public static function resolve_post_objects_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $post_type)
        {
        }
        /**
         * Retrieves the taxonomy object for the name of the taxonomy passed
         *
         * @param string $taxonomy Name of the taxonomy you want to retrieve the taxonomy object for
         *
         * @return \WPGraphQL\Model\Taxonomy object
         * @throws \GraphQL\Error\UserError If no taxonomy is found with the name passed.
         * @since  0.0.5
         */
        public static function resolve_taxonomy($taxonomy)
        {
        }
        /**
         * Wrapper for TermObjectConnectionResolver::resolve
         *
         * @param mixed                                $source   The object the connection is coming from
         * @param array<string,mixed>                  $args     Array of args to be passed to the resolve method
         * @param \WPGraphQL\AppContext                $context The AppContext object to be passed down
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         * @param string                               $taxonomy The name of the taxonomy the term belongs to
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since  0.0.5
         */
        public static function resolve_term_objects_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, string $taxonomy)
        {
        }
        /**
         * Retrieves the theme object for the theme you are looking for
         *
         * @param string $stylesheet Directory name for the theme.
         *
         * @return \WPGraphQL\Model\Theme object
         * @throws \GraphQL\Error\UserError
         * @since  0.0.5
         */
        public static function resolve_theme($stylesheet)
        {
        }
        /**
         * Wrapper for the ThemesConnectionResolver::resolve method
         *
         * @param mixed                                $source  The object the connection is coming from
         * @param array<string,mixed>                  $args    Passes an array of arguments to the resolve method
         * @param \WPGraphQL\AppContext                $context The AppContext object to be passed down
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since  0.0.5
         */
        public static function resolve_themes_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Wrapper for the UsersConnectionResolver::resolve method
         *
         * @param mixed                                $source  The object the connection is coming from
         * @param array<string,mixed>                  $args    Array of args to be passed down to the resolve method
         * @param \WPGraphQL\AppContext                $context The AppContext object to be passed down
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         * @since  0.0.5
         */
        public static function resolve_users_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns an array of data about the user role you are requesting
         *
         * @param string $name Name of the user role you want info for
         *
         * @return \WPGraphQL\Model\UserRole
         * @throws \GraphQL\Error\UserError If no user role is found with the name passed.
         * @since  0.0.30
         */
        public static function resolve_user_role($name)
        {
        }
        /**
         * Resolve the avatar for a user
         *
         * @param int                 $user_id ID of the user to get the avatar data for
         * @param array<string,mixed> $args    The args to pass to the get_avatar_data function
         *
         * @return \WPGraphQL\Model\Avatar|null
         * @throws \Exception
         */
        public static function resolve_avatar(int $user_id, array $args)
        {
        }
        /**
         * Resolve the connection data for user roles
         *
         * @param mixed[]                              $source  The Query results
         * @param array<string,mixed>                  $args    The query arguments
         * @param \WPGraphQL\AppContext                $context The AppContext passed down to the query
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo object
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         */
        public static function resolve_user_role_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Format the setting group name to our standard.
         *
         * @param string $group
         *
         * @return string $group
         */
        public static function format_group_name(string $group)
        {
        }
        /**
         * Get all of the allowed settings by group and return the
         * settings group that matches the group param
         *
         * @param string                           $group
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,mixed>
         */
        public static function get_setting_group_fields(string $group, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Get all of the allowed settings by group
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>> $allowed_settings_by_group
         */
        public static function get_allowed_settings_by_group(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Get all of the $allowed_settings
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>> $allowed_settings
         */
        public static function get_allowed_settings(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * We get the node interface and field from the relay library.
         *
         * The first method is the way we resolve an ID to its object. The second is the way we resolve
         * an object that implements node to its type.
         *
         * @return mixed[]
         * @throws \GraphQL\Error\UserError
         */
        public static function get_node_definition()
        {
        }
        /**
         * Given a node, returns the GraphQL Type
         *
         * @param mixed $node The node to resolve the type of
         *
         * @return string
         * @throws \GraphQL\Error\UserError If no type is found for the node.
         */
        public static function resolve_node_type($node)
        {
        }
        /**
         * Given the ID of a node, this resolves the data
         *
         * @param string                               $global_id The Global ID of the node
         * @param \WPGraphQL\AppContext                $context The Context of the GraphQL Request
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo for the GraphQL Request
         *
         * @return ?\GraphQL\Deferred
         * @throws \GraphQL\Error\UserError If no ID is passed.
         */
        public static function resolve_node($global_id, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns array of nav menu location names
         *
         * @return string[]
         */
        public static function get_registered_nav_menu_locations()
        {
        }
        /**
         * This resolves a resource, given a URI (the path / permalink to a resource)
         *
         * Based largely on the core parse_request function in wp-includes/class-wp.php
         *
         * @param string                               $uri     The URI to fetch a resource from
         * @param \WPGraphQL\AppContext                $context The AppContext passed through the GraphQL Resolve Tree
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo passed through the GraphQL Resolve tree
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         */
        public static function resolve_resource_by_uri($uri, $context, $info)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use the Loader passed in $context instead
         * @codeCoverageIgnore
         *
         * @param int                   $id      ID of the comment we want to get the object for.
         * @param \WPGraphQL\AppContext $context The context of the request.
         *
         * @return \GraphQL\Deferred object
         * @throws \GraphQL\Error\UserError Throws UserError.
         * @throws \Exception Throws UserError.
         */
        public static function resolve_comment($id, $context)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use the Loader passed in $context instead
         * @codeCoverageIgnore
         *
         * @param int                   $id      ID of the post you are trying to retrieve
         * @param \WPGraphQL\AppContext $context The context of the GraphQL Request
         *
         * @return \GraphQL\Deferred
         *
         * @throws \GraphQL\Error\UserError
         * @throws \Exception
         */
        public static function resolve_post_object(int $id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use the Loader passed in $context instead
         * @codeCoverageIgnore
         *
         * @param int                   $id      The ID of the menu item to load
         * @param \WPGraphQL\AppContext $context The context of the GraphQL request
         *
         * @return \GraphQL\Deferred|null
         * @throws \Exception
         */
        public static function resolve_menu_item(int $id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use the Loader passed in $context instead
         * @codeCoverageIgnore
         *
         * @param int                   $id      ID of the term you are trying to retrieve the object for
         * @param \WPGraphQL\AppContext $context The context of the GraphQL Request
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         */
        public static function resolve_term_object($id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use the Loader passed in $context instead
         * @codeCoverageIgnore
         *
         * @param int                   $id      ID of the user you want the object for
         * @param \WPGraphQL\AppContext $context The AppContext
         *
         * @return \GraphQL\Deferred
         * @throws \Exception
         */
        public static function resolve_user($id, \WPGraphQL\AppContext $context)
        {
        }
    }
}
namespace WPGraphQL\Data\Loader {
    /**
     * Class AbstractDataLoader
     *
     * @package WPGraphQL\Data\Loader
     *
     * @todo Replace this type with a generic.
     * @phpstan-type TModel \WPGraphQL\Model\Model<mixed>
     */
    abstract class AbstractDataLoader
    {
        /**
         * This stores a reference to the AppContext for the loader to make use of
         *
         * @var \WPGraphQL\AppContext
         */
        protected $context;
        /**
         * AbstractDataLoader constructor.
         *
         * @param \WPGraphQL\AppContext $context
         */
        public function __construct(\WPGraphQL\AppContext $context)
        {
        }
        /**
         * Given a Database ID, the particular loader will buffer it and resolve it deferred.
         *
         * @param mixed|int|string $database_id The database ID for a particular loader to load an object
         *
         * @return \GraphQL\Deferred|null
         * @throws \Exception
         *
         * @phpstan-return ($database_id is int|string ? \GraphQL\Deferred : null)
         */
        public function load_deferred($database_id)
        {
        }
        /**
         * Add keys to buffer to be loaded in single batch later.
         *
         * @param int[]|string[] $keys The keys of the objects to buffer
         *
         * @return $this
         * @throws \Exception
         */
        public function buffer(array $keys)
        {
        }
        /**
         * Loads a key and returns value represented by this key.
         * Internally this method will load all currently buffered items and cache them locally.
         *
         * @param int|string|mixed $key
         *
         * @return ?TModel
         * @throws \Exception
         */
        public function load($key)
        {
        }
        /**
         * Adds the provided key and value to the cache. If the key already exists, no
         * change is made. Returns itself for method chaining.
         *
         * @param mixed $key
         * @param mixed $value
         *
         * @return $this
         * @throws \Exception
         */
        public function prime($key, $value)
        {
        }
        /**
         * Clears the value at `key` from the cache, if it exists. Returns itself for
         * method chaining.
         *
         * @param int[]|string[] $keys
         *
         * @return $this
         */
        public function clear(array $keys)
        {
        }
        /**
         * Clears the entire cache. To be used when some event results in unknown
         * invalidations across this particular `DataLoader`. Returns itself for
         * method chaining.
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         */
        public function clear_all()
        {
        }
        /**
         * Loads multiple keys. Returns generator where each entry directly corresponds to entry in
         * $keys. If second argument $asArray is set to true, returns array instead of generator
         *
         * @param int[]|string[] $keys
         * @param bool           $asArray
         *
         * @return \Generator|array<int|string,mixed>
         * @throws \Exception
         */
        public function load_many(array $keys, $asArray = false)
        {
        }
        /**
         * For loaders that need to decode keys, this method can help with that.
         * For example, if we wanted to accept a list of RELAY style global IDs and pass them
         * to the loader, we could have the loader centrally decode the keys into their
         * integer values in the PostObjectLoader by overriding this method.
         *
         * @param int|string|mixed $key
         *
         * @return int|string
         */
        protected function key_to_scalar($key)
        {
        }
        /**
         * @param mixed $entry The entry loaded from the dataloader to be used to generate a Model
         * @param mixed $key   The Key used to identify the loaded entry
         *
         * @return TModel|null
         */
        protected function normalize_entry($entry, $key)
        {
        }
        /**
         * Returns a cached data object by key.
         *
         * @param int|string $key Key.
         *
         * @return mixed
         */
        protected function get_cached($key)
        {
        }
        /**
         * Caches a data object by key.
         *
         * @param int|string $key    Key.
         * @param mixed      $value  Data object.
         *
         * @return void
         */
        protected function set_cached($key, $value)
        {
        }
        /**
         * If the loader needs to do any tweaks between getting raw data from the DB and caching,
         * this can be overridden by the specific loader and used for transformations, etc.
         *
         * @param mixed $entry The entry data to be used to generate a Model.
         * @param mixed $key   The Key to identify the entry by.
         *
         * @return ?TModel
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * Given array of keys, loads and returns a map consisting of keys from `keys` array and loaded
         * values
         *
         * Note that order of returned values must match exactly the order of keys.
         * If some entry is not available for given key - it must include null for the missing key.
         *
         * For example:
         * loadKeys(['a', 'b', 'c']) -> ['a' => 'value1, 'b' => null, 'c' => 'value3']
         *
         * @param int[]|string[] $keys
         *
         * @return array<int|string,mixed>
         */
        abstract protected function loadKeys(array $keys);
        // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid -- @todo deprecate for `::load_keys()`
        /**
         * @todo remove in 3.0.0
         * @deprecated Use load_many instead
         * @codeCoverageIgnore
         *
         * @param int[]|string[] $keys
         * @param bool           $asArray
         *
         * @return \Generator|array<int|string,mixed>
         * @throws \Exception
         */
        public function loadMany(array $keys, $asArray = false)
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated in favor of clear_all
         * @codeCoverageIgnore
         *
         * @return \WPGraphQL\Data\Loader\AbstractDataLoader
         */
        public function clearAll()
        {
        }
        /**
         * @todo remove in 3.0.0
         * @deprecated Use key_to_scalar instead
         * @codeCoverageIgnore
         *
         * @param int|string|mixed $key
         * @return int|string
         */
        protected function keyToScalar($key)
        {
        }
    }
    /**
     * Class CommentAuthorLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class CommentAuthorLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @return ?\WPGraphQL\Model\CommentAuthor
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int[] $keys Array of IDs to load
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class CommentLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class CommentLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @return ?\WPGraphQL\Model\Comment
         * @throws \Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int[] $keys Array of IDs to load
         */
        public function loadKeys(array $keys = [])
        {
        }
    }
    /**
     * Class EnqueuedScriptLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class EnqueuedScriptLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param string[] $keys Array of script handles to load
         *
         * @return array<string,mixed>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class EnqueuedStylesheetLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class EnqueuedStylesheetLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param string[] $keys Array of stylesheet handles to load
         *
         * @return array<string,mixed>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class PluginLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class PluginLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param array<string,mixed> $entry The plugin data
         *
         * @return \WPGraphQL\Model\Plugin
         * @throws \Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string[] $keys Array of plugin names to load
         *
         * @return array<string,array<string,mixed>|null>
         * @throws \Exception
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class PostObjectLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class PostObjectLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_Post $entry The Post Object
         *
         * @return \WPGraphQL\Model\Post|\WPGraphQL\Model\MenuItem|null
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return array<string|int,\WP_Post|null>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class PostTypeLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class PostTypeLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_Post_Type $entry The Post Type Object
         *
         * @return \WPGraphQL\Model\PostType
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string[] $keys
         * @return array<string,\WP_Post_Type|null>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class TaxonomyLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class TaxonomyLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_Taxonomy $entry The Taxonomy Object
         *
         * @return \WPGraphQL\Model\Taxonomy
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string[] $keys
         *
         * @return array<string,\WP_Taxonomy|null>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class TermObjectLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class TermObjectLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_Term $entry The Term Object
         *
         * @return \WPGraphQL\Model\Term|\WPGraphQL\Model\Menu|null
         * @throws \Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int[] $keys
         *
         * @return array<int,\WP_Term|\WP_Error|null>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class ThemeLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class ThemeLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_Theme $entry The User Role object
         *
         * @return \WPGraphQL\Model\Theme
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @return array<int|string,?\WP_Theme>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class UserLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class UserLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @param mixed|\WP_User $entry The User object
         *
         * @return ?\WPGraphQL\Model\User
         * @throws \Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * The data loader always returns a user object if it exists, but we need to
         * separately determine whether the user should be considered private. The
         * WordPress frontend does not expose authors without published posts, so our
         * privacy model follows that same convention.
         *
         * Example return format for input "[ 1, 2 ]":
         *
         * [
         *   2 => true,  // User 2 is public (has published posts)
         * ]
         *
         * In this example, user 1 is not public (has no published posts) and is
         * omitted from the returned array.
         *
         * @param int[] $keys Array of author IDs (int).
         *
         * @return array<int,bool> Associative array of author IDs (int) to boolean.
         */
        public function get_public_users(array $keys)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param int[] $keys
         *
         * @return array<int,\WP_User|null>
         */
        public function loadKeys(array $keys)
        {
        }
    }
    /**
     * Class UserRoleLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class UserRoleLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * {@inheritDoc}
         *
         * @return \WPGraphQL\Model\UserRole
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function loadKeys(array $keys)
        {
        }
    }
}
namespace WPGraphQL\Data {
    /**
     * Class MediaItemMutation
     *
     * @package WPGraphQL\Type\MediaItem
     */
    class MediaItemMutation
    {
        /**
         * This prepares the media item for insertion
         *
         * @param array<string,mixed>       $input            The input for the mutation from the GraphQL request
         * @param \WP_Post_Type             $post_type_object The post_type_object for the mediaItem (attachment)
         * @param string                    $mutation_name    The name of the mutation being performed (create, update, etc.)
         * @param array<string,mixed>|false $file             The mediaItem (attachment) file
         *
         * @return array<string,mixed>
         */
        public static function prepare_media_item(array $input, \WP_Post_Type $post_type_object, string $mutation_name, $file)
        {
        }
        /**
         * This updates additional data related to a mediaItem, such as postmeta.
         *
         * @param int                                  $media_item_id    The ID of the media item being mutated
         * @param array<string,mixed>                  $input            The input on the mutation
         * @param \WP_Post_Type                        $post_type_object The Post Type Object for the item being mutated
         * @param string                               $mutation_name    The name of the mutation
         * @param \WPGraphQL\AppContext                $context The AppContext that is passed down the resolve tree
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo that is passed down the resolve tree
         *
         * @return void
         */
        public static function update_additional_media_item_data(int $media_item_id, array $input, \WP_Post_Type $post_type_object, string $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
    }
    class NodeResolver
    {
        /**
         * @var \WP
         */
        protected $wp;
        /**
         * @var \WPGraphQL\AppContext
         */
        protected $context;
        /**
         * @var string
         */
        protected $route;
        /**
         * NodeResolver constructor.
         *
         * @param \WPGraphQL\AppContext $context
         *
         * @return void
         */
        public function __construct(\WPGraphQL\AppContext $context)
        {
        }
        /**
         * Given a Post object, validates it before returning it.
         *
         * @param \WP_Post $post
         *
         * @return \WP_Post|null
         */
        public function validate_post(\WP_Post $post)
        {
        }
        /**
         * Given a Term object, validates it before returning it.
         *
         * @param \WP_Term $term
         *
         * @return \WP_Term|null
         */
        public function validate_term(\WP_Term $term)
        {
        }
        /**
         * Given the URI of a resource, this method attempts to resolve it and return the
         * appropriate related object
         *
         * @param string                     $uri              The path to be used as an identifier for the resource.
         * @param array<string,mixed>|string $extra_query_vars Any extra query vars to consider
         *
         * @return mixed
         * @throws \GraphQL\Error\UserError If the query class does not exist.
         */
        public function resolve_uri(string $uri, $extra_query_vars = '')
        {
        }
        /**
         * Parses a URL to produce an array of query variables.
         *
         * Mimics WP::parse_request()
         *
         * @param string                     $uri
         * @param array<string,mixed>|string $extra_query_vars
         *
         * @return string|null The parsed uri.
         */
        public function parse_request(string $uri, $extra_query_vars = '')
        {
        }
        /**
         * Checks if the node type is set in the query vars and, if so, whether it matches the node type.
         *
         * @param string $node_type The node type to check.
         */
        protected function is_valid_node_type(string $node_type): bool
        {
        }
        /**
         * Resolves the home page.
         *
         * If the homepage is a static page, return the page, otherwise we return the Posts `ContentType`.
         *
         * @todo Replace `ContentType` with an `Archive` type.
         */
        protected function resolve_home_page(): ?\GraphQL\Deferred
        {
        }
        /**
         * Checks if the URI is a comment URI and, if so, returns the comment ID.
         *
         * @param string $uri The URI to check.
         */
        protected function maybe_parse_comment_uri(string $uri): ?int
        {
        }
    }
    /**
     * Class PostObjectMutation
     *
     * @package WPGraphQL\Type\PostObject
     */
    class PostObjectMutation
    {
        /**
         * This handles inserting the post object
         *
         * @param array<string,mixed> $input            The input for the mutation
         * @param \WP_Post_Type       $post_type_object The post_type_object for the type of post being mutated
         * @param string              $mutation_name    The name of the mutation being performed
         *
         * @return array<string,mixed>
         * @throws \Exception
         */
        public static function prepare_post_object($input, $post_type_object, $mutation_name)
        {
        }
        /**
         * This updates additional data related to a post object, such as postmeta, term relationships,
         * etc.
         *
         * @param int                                  $post_id              The ID of the postObject being mutated
         * @param array<string,mixed>                  $input                The input for the mutation
         * @param \WP_Post_Type                        $post_type_object     The Post Type Object for the type of post being mutated
         * @param string                               $mutation_name        The name of the mutation (ex: create, update, delete)
         * @param \WPGraphQL\AppContext                $context              The AppContext passed down to all resolvers
         * @param \GraphQL\Type\Definition\ResolveInfo $info                 The ResolveInfo passed down to all resolvers
         * @param string                               $default_post_status  The default status posts should use if an intended status wasn't set
         * @param string                               $intended_post_status The intended post_status the post should have according to the mutation input
         *
         * @return void
         */
        public static function update_additional_post_object_data($post_id, $input, $post_type_object, $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $default_post_status = null, $intended_post_status = null)
        {
        }
        /**
         * Given a $post_id and $input from the mutation, check to see if any term associations are
         * being made, and properly set the relationships
         *
         * @param int                 $post_id           The ID of the postObject being mutated
         * @param array<string,mixed> $input             The input for the mutation
         * @param \WP_Post_Type       $post_type_object The Post Type Object for the type of post being mutated
         * @param string              $mutation_name     The name of the mutation (ex: create, update, delete)
         *
         * @return void
         */
        protected static function set_object_terms(int $post_id, array $input, \WP_Post_Type $post_type_object, string $mutation_name)
        {
        }
        /**
         * Given an array of Term properties (slug, name, description, etc), create the term and return
         * a term_id
         *
         * @param array<string,mixed> $node     The node input for the term
         * @param string              $taxonomy The taxonomy the term input is for
         *
         * @return int $term_id The ID of the created term. 0 if no term was created.
         */
        protected static function create_term_to_connect($node, $taxonomy)
        {
        }
        /**
         * This is a copy of the wp_set_post_lock function that exists in WordPress core, but is not
         * accessible because that part of WordPress is never loaded for WPGraphQL executions
         *
         * Mark the post as currently being edited by the current user
         *
         * @param int $post_id ID of the post being edited.
         *
         * @return int[]|false Array of the lock time and user ID. False if the post does not exist, or
         *                     there is no current user.
         */
        public static function set_edit_lock($post_id)
        {
        }
        /**
         * Remove the edit lock for a post
         *
         * @param int $post_id ID of the post to delete the lock for
         *
         * @return bool
         */
        public static function remove_edit_lock(int $post_id)
        {
        }
        /**
         * Check the edit lock for a post
         *
         * @param false|int           $post_id ID of the post to delete the lock for
         * @param array<string,mixed> $input             The input for the mutation
         *
         * @return false|int Return false if no lock or the user_id of the owner of the lock
         */
        public static function check_edit_lock($post_id, array $input)
        {
        }
    }
    class TermObjectMutation
    {
        /**
         * This prepares the object to be mutated - ensures data is safe to be saved,
         * and mapped from input args to WordPress $args
         *
         * @throws \GraphQL\Error\UserError User error for invalid term.
         *
         * @param array<string,mixed> $input         The input from the GraphQL Request
         * @param \WP_Taxonomy        $taxonomy The Taxonomy object for the type of term being mutated
         * @param string              $mutation_name The name of the mutation (create, update, etc)
         *
         * @return array<string,mixed>
         */
        public static function prepare_object(array $input, \WP_Taxonomy $taxonomy, string $mutation_name)
        {
        }
    }
    /**
     * Class UserMutation
     *
     * @package WPGraphQL\Type\User\Mutation
     */
    class UserMutation
    {
        /**
         * Defines the accepted input arguments
         *
         * @return array<string,array<string,mixed>>|null
         */
        public static function input_fields()
        {
        }
        /**
         * Maps the GraphQL input to a format that the WordPress functions can use
         *
         * @param array<string,mixed> $input         Data coming from the GraphQL mutation query input
         * @param string              $mutation_name Name of the mutation being performed
         *
         * @return array<string,mixed>
         * @throws \GraphQL\Error\UserError If the passed email address is invalid.
         */
        public static function prepare_user_object($input, $mutation_name)
        {
        }
        /**
         * This updates additional data related to the user object after the initial mutation has
         * happened
         *
         * @param int                                  $user_id       The ID of the user being mutated
         * @param array<string,mixed>                  $input         The input data from the GraphQL query
         * @param string                               $mutation_name Name of the mutation currently being run
         * @param \WPGraphQL\AppContext                $context The AppContext passed down the resolve tree
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo passed down the Resolve Tree
         *
         * @return void
         * @throws \Exception
         */
        public static function update_additional_user_object_data($user_id, $input, $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * Class - Deprecated
     */
    final class Deprecated
    {
        /**
         * The class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register the deprecated functionality.
         */
        public function register(): void
        {
        }
        /**
         * Registers deprecated graphql types.
         */
        public function register_deprecated_types(): void
        {
        }
        /**
         * SendPasswordResetEmail.user output field\
         *
         * @todo remove in 3.0.0
         */
        public function send_password_reset_email_user(): void
        {
        }
    }
}
namespace WPGraphQL\Experimental {
    /**
     * Class - Admin
     */
    class Admin
    {
        /**
         * The name of the option group
         *
         * @var string
         */
        public static $option_group = 'graphql_experiments_settings';
        /**
         * Initialize Admin functionality for Experiments
         */
        public function init(): void
        {
        }
        /**
         * Handle option updates and display activation/deactivation messages.
         *
         * This method is called when the experiments settings option is updated
         * and detects changes in experiment activation status to display appropriate admin notices.
         *
         * @param string $option_name The name of the option being updated.
         * @param mixed  $old_value The old option value.
         * @param mixed  $new_value The new option value.
         */
        public function handle_option_update($option_name, $old_value, $new_value): void
        {
        }
    }
}
namespace WPGraphQL\Experimental\Experiment {
    /**
     * Class - Abstract Experiment
     */
    abstract class AbstractExperiment
    {
        /**
         * The experiment unique slug.
         *
         * @var ?string
         */
        protected static $slug;
        /**
         * The experiment's configuration.
         *
         * @var ?array{title:string,description:string,deprecationMessage?:?string}
         */
        protected $config;
        /**
         * Whether the experiment is active.
         *
         * @var ?bool
         */
        protected $is_active;
        /**
         * Defines the experiment slug.
         */
        abstract protected static function slug(): string;
        /**
         * Defines the experiment configuration.
         *
         * @return array{title:string,description:string,deprecationMessage?:?string}
         */
        abstract protected function config(): array;
        /**
         * Initializes the experiment.
         *
         * I.e where you put your hooks.
         */
        abstract protected function init(): void;
        /**
         * Loads the experiment.
         *
         * @uses AbstractExperiment::init() to initialize the experiment.
         */
        public function load(): void
        {
        }
        /**
         * Gets the experiment's configuration array.
         *
         * @return array{title:string,description:string,deprecationMessage?:?string}
         */
        public function get_config(): array
        {
        }
        /**
         * Gets the experiment's dependencies.
         *
         * Override this method to specify dependencies for your experiment.
         *
         * @return array{required?:array<string>,optional?:array<string>} Array of dependencies.
         *         - 'required': Array of experiment slugs that must be active
         *         - 'optional': Array of experiment slugs that are recommended but not required
         *
         * @since 2.3.8
         */
        public function get_dependencies(): array
        {
        }
        /**
         * Gets the path to the experiment's README.md file.
         *
         * @return string|null The absolute path to the README.md file, or null if it doesn't exist.
         *
         * @since 2.3.8
         */
        public function get_readme_path(): ?string
        {
        }
        /**
         * Gets a link to view the experiment's README.
         *
         * @return string|null A markdown/HTML formatted link to the README, or null if README doesn't exist.
         *
         * @since 2.3.8
         */
        public function get_readme_link(): ?string
        {
        }
        /**
         * Gets the activation message for this experiment.
         *
         * Override this method to provide a custom activation message.
         * This message will be displayed as an admin notice when the experiment is activated.
         *
         * @return string|null The activation message, or null for no message.
         *
         * @since 2.3.8
         */
        public function get_activation_message(): ?string
        {
        }
        /**
         * Gets the deactivation message for this experiment.
         *
         * Override this method to provide a custom deactivation message.
         * This message will be displayed as an admin notice when the experiment is deactivated.
         *
         * @return string|null The deactivation message, or null for no message.
         *
         * @since 2.3.8
         */
        public function get_deactivation_message(): ?string
        {
        }
        /**
         * Returns the experiment's slug.
         *
         * This is static so it can be accessed outside of the class instantiation.
         *
         * @throws \Exception If the experiment is missing a slug.
         */
        public static function get_slug(): string
        {
        }
        /**
         * Whether the experiment is active.
         */
        public function is_active(): bool
        {
        }
        /**
         * Gets the deprecation message, if it exists.
         */
        public function get_deprecation_message(): ?string
        {
        }
        /**
         * Checks whether the experiment has been deprecated.
         */
        public function is_deprecated(): bool
        {
        }
        /**
         * Prepares the configuration.
         *
         * @return array{title:string,description:string,deprecationMessage?:?string}
         *
         * @throws \Exception If the experiment is missing a slug.
         */
        protected function prepare_config(): array
        {
        }
        /**
         * Validates the $config array, throwing an exception if it's invalid.
         *
         * @param array<string,mixed> $config The experiment configuration.
         *
         * @throws \Exception If the config is invalid.
         */
        protected function validate_config(array $config): void
        {
        }
        /**
         * Clear the cached active state (useful for testing).
         */
        public function clear_active_cache(): void
        {
        }
    }
}
namespace WPGraphQL\Experimental\Experiment\TestDependantExperiment {
    /**
     * TestDependantExperiment - A demonstration experiment that depends on TestExperiment
     *
     * This experiment:
     * - Depends on TestExperiment (required dependency)
     * - Adds a `testDependantExperiment` field to RootQuery
     * - Shows how dependent experiments can use functionality from their dependencies
     * - Demonstrates the dependency system in action
     *
     * Example GraphQL query:
     * ```graphql
     * query {
     *   testDependantExperiment
     * }
     * ```
     *
     * This will return a string that includes data from the TestExperiment dependency.
     *
     * @see TestExperiment The experiment this depends on
     * @see docs/experiments-creating.md For more examples of creating experiments
     */
    class TestDependantExperiment extends \WPGraphQL\Experimental\Experiment\AbstractExperiment
    {
        /**
         * Returns the experiment's slug.
         */
        protected static function slug(): string
        {
        }
        /**
         * Gets the experiment's dependencies.
         *
         * This experiment demonstrates both required and optional dependencies:
         * - Required: TestExperiment (provides base functionality)
         * - Optional: None in this example, but could depend on other experiments
         *
         * @return array{required?:array<string>,optional?:array<string>}
         */
        public function get_dependencies(): array
        {
        }
        /**
         * Prepares the experiment's configuration array.
         *
         * @return array{title:string,description:string}
         */
        protected function config(): array
        {
        }
        /**
         * Gets the activation message for this experiment.
         *
         * @return string The activation message.
         */
        public function get_activation_message(): string
        {
        }
        /**
         * Gets the deactivation message for this experiment.
         *
         * @return string The deactivation message.
         */
        public function get_deactivation_message(): string
        {
        }
        /**
         * Initializes the experiment.
         *
         * This method is called when the experiment is active and all dependencies are met.
         */
        protected function init(): void
        {
        }
        /**
         * Registers the testDependantExperiment field to the RootQuery type.
         */
        public function register_test_dependant_field(): void
        {
        }
    }
}
namespace WPGraphQL\Experimental\Experiment\TestExperiment {
    /**
     * Class - TestExperiment
     *
     * A simple example experiment that adds a `RootQuery.testExperiment` field.
     *
     * When enabled, you can query:
     * ```graphql
     * query {
     *   testExperiment
     * }
     * ```
     *
     * This will return: "This is a test field for the Test Experiment."
     */
    class TestExperiment extends \WPGraphQL\Experimental\Experiment\AbstractExperiment
    {
        /**
         * {@inheritDoc}
         */
        protected static function slug(): string
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function config(): array
        {
        }
        /**
         * Gets the activation message for this experiment.
         *
         * @return string The activation message.
         */
        public function get_activation_message(): string
        {
        }
        /**
         * Gets the deactivation message for this experiment.
         *
         * @return string The deactivation message.
         */
        public function get_deactivation_message(): string
        {
        }
        /**
         * Initializes the experiment.
         *
         * I.e where you put your hooks.
         */
        protected function init(): void
        {
        }
        /**
         * Registers the field for the experiment.
         */
        public function register_field(): void
        {
        }
    }
}
namespace WPGraphQL\Experimental\Experiment\TestOptionalDependencyExperiment {
    /**
     * TestOptionalDependencyExperiment - Demonstrates optional experiment dependencies
     *
     * This experiment:
     * - Works independently (no required dependencies)
     * - Has optional dependencies that enhance its functionality
     * - Shows how to check for and use optional dependencies
     * - Demonstrates graceful degradation when optional deps are missing
     *
     * Example GraphQL query:
     * ```graphql
     * query {
     *   testOptionalDependency
     * }
     * ```
     *
     * This will return different results based on which optional dependencies are active.
     *
     * @see TestExperiment An optional dependency that enhances functionality
     * @see docs/experiments-creating.md For more examples of creating experiments
     */
    class TestOptionalDependencyExperiment extends \WPGraphQL\Experimental\Experiment\AbstractExperiment
    {
        /**
         * Returns the experiment's slug.
         */
        protected static function slug(): string
        {
        }
        /**
         * Gets the experiment's dependencies.
         *
         * This experiment demonstrates optional dependencies:
         * - Required: None (works independently)
         * - Optional: TestExperiment (enhances functionality if available)
         *
         * @return array{required?:array<string>,optional?:array<string>}
         */
        public function get_dependencies(): array
        {
        }
        /**
         * Prepares the experiment's configuration array.
         *
         * @return array{title:string,description:string}
         */
        protected function config(): array
        {
        }
        /**
         * Gets the activation message for this experiment.
         *
         * @return string The activation message.
         */
        public function get_activation_message(): string
        {
        }
        /**
         * Gets the deactivation message for this experiment.
         *
         * @return string The deactivation message.
         */
        public function get_deactivation_message(): string
        {
        }
        /**
         * Initializes the experiment.
         *
         * This method is called when the experiment is active.
         */
        protected function init(): void
        {
        }
        /**
         * Registers the testOptionalDependency field to the RootQuery type.
         */
        public function register_optional_dependency_field(): void
        {
        }
    }
}
namespace WPGraphQL\Experimental {
    /**
     * Class - ExperimentRegistry
     */
    final class ExperimentRegistry
    {
        /**
         * Initializes the Experimental Functionality for WPGraphQL
         */
        public function init(): void
        {
        }
        /**
         * Whether the current user can manage experimental features.
         *
         * @uses 'graphql_experimental_features_cap' filter to determine the capability required.
         */
        public static function can_manage_experiments(): bool
        {
        }
        /**
         * The capability required to turn experimental features on and off.
         *
         * Defaults to `manage_options`.
         */
        public static function capability(): string
        {
        }
        /**
         * Checks whether the experiment is enabled.
         *
         * @return array<string,class-string<\WPGraphQL\Experimental\Experiment\AbstractExperiment>>
         */
        public static function get_experiment_registry(): array
        {
        }
        /**
         * Gets the list of all experiments.
         *
         * @return array<string,\WPGraphQL\Experimental\Experiment\AbstractExperiment>
         */
        public static function get_experiments(): array
        {
        }
        /**
         * Get the list of active experiments.
         *
         * @return array<string,\WPGraphQL\Experimental\Experiment\AbstractExperiment>
         */
        public static function get_active_experiments(): array
        {
        }
        /**
         * Get all registered experiment classes (before instantiation).
         *
         * @return array<string,class-string<\WPGraphQL\Experimental\Experiment\AbstractExperiment>>
         */
        public static function get_registered_experiments(): array
        {
        }
        /**
         * Returns whether the experiment is active.
         *
         * @param string $experiment_name The name of the experiment.
         */
        public static function is_experiment_active(string $experiment_name): bool
        {
        }
        /**
         * Reload experiments (useful for testing).
         */
        public function reload_experiments(): void
        {
        }
        /**
         * Reset the experiment registry (useful for testing).
         *
         * This clears all static properties to ensure a clean slate between tests.
         */
        public static function reset(): void
        {
        }
    }
    /**
     * Class - Experimental
     */
    final class Experimental
    {
        /**
         * Initializes Experimental Functionality for WPGraphQL
         */
        public function init(): void
        {
        }
    }
    /**
     * Class Extensions
     *
     * Handles adding active experiments to GraphQL response extensions.
     *
     * @package WPGraphQL\Experimental
     * @since 2.3.8
     */
    class Extensions
    {
        /**
         * Initialize the extensions functionality.
         */
        public function init(): void
        {
        }
        /**
         * Add active experiments to GraphQL response extensions.
         *
         * @param mixed|array<string,mixed>|object $response       The response of the GraphQL Request being executed
         * @param \WPGraphQL\WPSchema              $schema         The WPGraphQL Schema
         * @param string|null                      $operation_name The operation name being executed
         * @param string|null                      $request        The GraphQL Request being made
         * @param array<string,mixed>|null         $variables      The variables sent with the request
         *
         * @return mixed|array<string,mixed>|object
         */
        public function add_experiments_to_response_extensions($response, $schema, ?string $operation_name, ?string $request, ?array $variables)
        {
        }
    }
}
namespace WPGraphQL\Model {
    /**
     * Class Model - Abstract class for modeling data for all core types
     *
     * @property bool $isPrivate
     * @property bool $isPublic
     * @property bool $isRestricted
     *
     * @template TData
     */
    abstract class Model
    {
        /**
         * Stores the name of the type the child class extending this one represents
         *
         * @var string
         */
        protected $model_name;
        /**
         * Stores the raw data passed to the child class when it's instantiated before it's transformed
         *
         * @var TData
         */
        protected $data;
        /**
         * Stores the capability name for what to check on the user if the data should be considered
         * "Restricted"
         *
         * @var string
         */
        protected $restricted_cap;
        /**
         * Stores the array of allowed fields to show if the data is restricted
         *
         * @var string[]
         */
        protected $allowed_restricted_fields;
        /**
         * Stores the DB ID of the user that owns this piece of data, or null if there is no owner
         *
         * @var int|null
         */
        protected $owner;
        /**
         * Stores the WP_User object for the current user in the session
         *
         * @var \WP_User $current_user
         */
        protected $current_user;
        /**
         * Stores the visibility value for the current piece of data
         *
         * @var string
         */
        protected $visibility;
        /**
         * The fields for the modeled object. This will be populated in the child class
         *
         * @var array<string,mixed>
         */
        public $fields;
        /**
         * Model constructor.
         *
         * @param string   $restricted_cap            The capability to check against to determine if
         *                                            the data should be restricted or not
         * @param string[] $allowed_restricted_fields The allowed fields if the data is in fact restricted
         * @param int|null $owner                     Database ID of the user that owns this piece of
         *                                            data to compare with the current user ID
         *
         * @return void
         * @throws \Exception Throws Exception.
         */
        protected function __construct($restricted_cap = '', $allowed_restricted_fields = [], $owner = null)
        {
        }
        /**
         * Magic method to re-map the isset check on the child class looking for properties when
         * resolving the fields
         *
         * @param string $key The name of the field you are trying to retrieve
         *
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * Magic method to re-map setting new properties to the class inside of the $fields prop rather
         * than on the class in unique properties
         *
         * @param string                    $key   Name of the key to set the data to
         * @param callable|int|string|mixed $value The value to set to the key
         *
         * @return void
         */
        public function __set($key, $value)
        {
        }
        /**
         * Magic method to re-map where external calls go to look for properties on the child objects.
         * This is crucial to let objects modeled through this class work with the default field
         * resolver.
         *
         * @param string $key Name of the property that is trying to be accessed
         *
         * @return mixed|null
         */
        public function __get($key)
        {
        }
        /**
         * Setup the global state before each field is resolved so the Model has the necessary context.
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Tear-down call that runs after each field is resolved.
         *
         * This can be used to reset state to where it was before the model was setup.
         *
         * @return void
         */
        public function tear_down()
        {
        }
        /**
         * Returns the name of the model, built from the child className
         *
         * @return string
         */
        protected function get_model_name()
        {
        }
        /**
         * Return the visibility state for the current piece of data
         *
         * @return string|null
         */
        public function get_visibility()
        {
        }
        /**
         * Method to return the private state of the object. Can be overwritten in classes extending
         * this one.
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Whether or not the owner of the data matches the current user
         *
         * @return bool
         */
        protected function owner_matches_current_user()
        {
        }
        /**
         * Restricts fields for the data to only return the allowed fields if the data is restricted
         *
         * @return void
         */
        protected function restrict_fields()
        {
        }
        /**
         * Wraps all fields with another callback layer so we can inject hooks & filters into them
         *
         * @return void
         */
        protected function wrap_fields()
        {
        }
        /**
         * Returns instance of the data fully modeled
         *
         * @return void
         */
        protected function prepare_fields()
        {
        }
        /**
         * Given a string, and optional context, this decodes html entities if html_entity_decode is
         * enabled.
         *
         * @param string $str        The string to decode
         * @param string $field_name The name of the field being encoded
         * @param bool   $enabled    Whether decoding is enabled by default for the string passed in
         *
         * @return string
         */
        public function html_entity_decode($str, $field_name, $enabled = false)
        {
        }
        /**
         * Filter the fields returned for the object
         *
         * @param string|string[]|null $fields The field or fields to build in the modeled object. Null to leave all fields.
         * @return void
         */
        public function filter($fields)
        {
        }
        /**
         * Initialized the object.
         *
         * @return void
         */
        abstract protected function init();
    }
    /**
     * Class Avatar - Models data for avatars
     *
     * @property ?string $default
     * @property ?string $extraAttr
     * @property bool    $forceDefault
     * @property bool    $foundAvatar
     * @property ?int    $height
     * @property ?string $rating
     * @property ?string $scheme
     * @property ?int    $size
     * @property ?string $url
     * @property ?int    $width
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<array<string,mixed>>
     */
    class Avatar extends \WPGraphQL\Model\Model
    {
        /**
         * Avatar constructor.
         *
         * @param array<string,mixed> $avatar The incoming avatar to be modeled.
         */
        public function __construct(array $avatar)
        {
        }
        /**
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Comment - Models data for Comments
     *
     * @property ?string $agent
     * @property ?string $authorIp
     * @property ?string $commentAuthor
     * @property ?string $commentAuthorEmail
     * @property ?string $commentAuthorUrl
     * @property ?string $contentRaw
     * @property ?string $contentRendered
     * @property int     $databaseId
     * @property ?string $date
     * @property ?string $dateGmt
     * @property ?string $id
     * @property ?string $karma
     * @property ?string $link
     * @property int     $parentDatabaseId
     * @property string  $parentId
     * @property ?string $status
     * @property ?string $type
     * @property ?string $uri
     * @property ?int    $userId
     *
     * Aliases:
     * @property ?string $comment_author
     * @property ?string $comment_author_url
     * @property int     $comment_ID
     * @property int     $comment_parent_id
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Comment>
     */
    class Comment extends \WPGraphQL\Model\Model
    {
        /**
         * Comment constructor.
         *
         * @param \WP_Comment $comment The incoming WP_Comment to be modeled
         */
        public function __construct(\WP_Comment $comment)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class CommentAuthor - Models the CommentAuthor object
     *
     * @property ?int    $databaseId
     * @property ?string $email
     * @property ?string $id
     * @property ?string $name
     * @property ?string $url
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Comment>
     */
    class CommentAuthor extends \WPGraphQL\Model\Model
    {
        /**
         * CommentAuthor constructor.
         *
         * @param \WP_Comment $comment_author The incoming comment author array to be modeled
         */
        public function __construct(\WP_Comment $comment_author)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Menu - Models data for Menus
     *
     * @property ?int          $count
     * @property ?int          $databaseId
     * @property ?string       $id
     * @property string[]|null $locations
     * @property ?string       $name
     * @property ?string       $slug
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Term>
     */
    class Menu extends \WPGraphQL\Model\Model
    {
        /**
         * Menu constructor.
         *
         * @param \WP_Term $term The incoming WP_Term object that needs modeling
         *
         * @return void
         */
        public function __construct(\WP_Term $term)
        {
        }
        /**
         * {@inheritDoc}
         *
         * If a Menu is not connected to a menu that's assigned to a location
         * it's not considered a public node.
         */
        public function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class MenuItem - Models the data for the MenuItem object type
     *
     * @property string[]      $cssClasses
     * @property int           $databaseId
     * @property ?string       $description
     * @property ?string       $id
     * @property ?string       $label
     * @property ?string       $linkRelationship
     * @property string[]|null $locations
     * @property ?int          $menuDatabaseId
     * @property ?string       $menuId
     * @property int           $objectId
     * @property ?int          $parentDatabaseId
     * @property ?string       $parentId
     * @property ?string       $target
     * @property ?string       $title
     * @property ?string       $uri
     * @property ?string       $url
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<object|mixed>
     */
    class MenuItem extends \WPGraphQL\Model\Model
    {
        /**
         * MenuItem constructor.
         *
         * @param \WP_Post $post The incoming WP_Post object that needs modeling
         *
         * @return void
         */
        public function __construct(\WP_Post $post)
        {
        }
        /**
         * {@inheritDoc}
         *
         * If a MenuItem is not connected to a menu that's assigned to a location
         * it's not considered a public node.
         *
         * @throws \Exception
         */
        public function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Plugin - Models the Plugin object
     *
     * @property ?string $author
     * @property ?string $authorUri
     * @property ?string $description
     * @property ?string $id
     * @property ?string $name
     * @property ?string $path
     * @property ?string $pluginUri
     * @property ?string $version
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<array<string,mixed>>
     */
    class Plugin extends \WPGraphQL\Model\Model
    {
        /**
         * Plugin constructor.
         *
         * @param array<string,mixed> $plugin The incoming Plugin data to be modeled.
         */
        public function __construct($plugin)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Post - Models data for the Post object type
     *
     * @property ?int          $authorDatabaseId
     * @property ?string       $authorId
     * @property int           $commentCount
     * @property ?string       $commentStatus
     * @property ?string       $contentRaw
     * @property ?string       $contentRendered
     * @property ?int          $databaseId
     * @property ?string       $date
     * @property ?string       $dateGmt
     * @property ?int          $editLastId
     * @property string[]|null $editLock
     * @property ?string       $enclosure
     * @property ?string       $excerptRaw
     * @property ?string       $excerptRendered
     * @property ?int          $featuredImageDatabaseId
     * @property ?string       $featuredImageId
     * @property ?string       $guid
     * @property bool          $hasPassword
     * @property ?string       $id
     * @property bool          $isFrontPage
     * @property bool          $isPostsPage
     * @property bool          $isPreview
     * @property bool          $isPrivacyPage
     * @property bool          $isRevision
     * @property bool          $isSticky
     * @property ?string       $link
     * @property ?int          $menuOrder
     * @property ?string       $modified
     * @property ?string       $modifiedGmt
     * @property ?string       $pageTemplate
     * @property ?int          $parentDatabaseId
     * @property ?string       $parentId
     * @property ?string       $password
     * @property ?string       $pinged
     * @property ?string       $pingStatus
     * @property ?string       $post_type
     * @property int           $previewRevisionDatabaseId
     * @property ?string       $slug
     * @property ?string       $status
     * @property array{
     *  __typename: string,
     *  templateName: string
     * }                       $template
     * @property ?string       $titleRaw
     * @property ?string       $titleRendered
     * @property ?string       $toPing
     * @property ?string       $uri
     *
     * Attachment specific fields:
     * @property string|null              $altText
     * @property string|null              $captionRaw
     * @property string|null              $captionRendered
     * @property string|null              $descriptionRaw
     * @property string|null              $descriptionRendered
     * @property array<string,mixed>|null $mediaDetails
     * @property string|null              $mediaItemUrl
     * @property string|null              $mediaType
     * @property string|null              $mimeType
     * @property string|null              $sourceUrl
     *
     * Aliases:
     * @property ?int    $ID
     * @property ?int    $post_author
     * @property ?string $post_status
     *
     * @extends \WPGraphQL\Model\Model<\WP_Post>
     */
    class Post extends \WPGraphQL\Model\Model
    {
        /**
         * Store the global post to reset during model tear down
         *
         * @var \WP_Post
         */
        protected $global_post;
        /**
         * Stores the incoming post type object for the post being modeled
         *
         * @var \WP_Post_Type|null $post_type_object
         */
        protected $post_type_object;
        /**
         * Store the instance of the WP_Query
         *
         * @var \WP_Query
         */
        protected $wp_query;
        /**
         * Stores the resolved image `sourceUrl`s keyed by size.
         *
         * This is used to prevent multiple calls to `wp_get_attachment_image_src`.
         *
         * If no source URL is found for a size, the value will be `null`.
         *
         * @var array<string,?string>
         */
        protected $source_urls_by_size = [];
        /**
         * Post constructor.
         *
         * @param \WP_Post $post The incoming WP_Post object that needs modeling.
         *
         * @return void
         */
        public function __construct(\WP_Post $post)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function setup()
        {
        }
        /**
         * Retrieve the cap to check if the data should be restricted for the post
         *
         * @return string
         */
        protected function get_restricted_cap()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function is_private()
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @param \WP_Post $post_object The object of the post we need to verify permissions for
         *
         * @return bool
         */
        protected function is_post_private($post_object = null)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
        /**
         * Gets the source URL for an image attachment by size.
         *
         * This method caches the source URL for a given size to prevent multiple calls to `wp_get_attachment_image_src`.
         *
         * @param ?string $size The size of the image to get the source URL for. `full` by default.
         */
        public function get_source_url_by_size(?string $size = 'full'): ?string
        {
        }
    }
    /**
     * Class PostType - Models data for PostTypes
     *
     * @property bool          $canExport
     * @property bool          $deleteWithUser
     * @property ?string       $description
     * @property bool          $excludeFromSearch
     * @property ?string       $graphqlPluralName
     * @property ?string       $graphqlSingleName
     * @property bool          $hasArchive
     * @property ?bool         $hierarchical
     * @property ?string       $id
     * @property object        $labels
     * @property ?string       $menuIcon
     * @property ?int          $menuPosition
     * @property ?string       $name
     * @property ?bool         $public
     * @property bool          $publiclyQueryable
     * @property ?string       $restBase
     * @property ?string       $restControllerClass
     * @property bool          $showInAdminBar
     * @property bool          $showInGraphql
     * @property bool          $showInMenu
     * @property bool          $showInNavMenus
     * @property bool          $showInRest
     * @property bool          $showUi
     * @property string[]|null $taxonomies
     *
     * Aliases:
     * @property ?string       $graphql_plural_name
     * @property ?string       $graphql_single_name
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Post_Type>
     */
    class PostType extends \WPGraphQL\Model\Model
    {
        /**
         * PostType constructor.
         *
         * @param \WP_Post_Type $post_type The incoming post type to model.
         */
        public function __construct(\WP_Post_Type $post_type)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Taxonomy - Models data for taxonomies
     *
     * @property string        $description
     * @property ?string       $graphqlPluralName
     * @property ?string       $graphqlSingleName
     * @property bool          $hierarchical
     * @property ?string       $id
     * @property ?string       $label
     * @property ?string       $name
     * @property string[]|null $object_type
     * @property bool          $public
     * @property ?string       $restBase
     * @property ?string       $restControllerClass
     * @property bool          $showCloud
     * @property bool          $showInAdminColumn
     * @property ?bool         $showInGraphql
     * @property bool          $showInMenu
     * @property bool          $showInNavMenus
     * @property bool          $showInQuickEdit
     * @property bool          $showInRest
     * @property bool          $showUi
     *
     * Aliases:
     * @property ?string       $graphql_plural_name
     * @property ?string       $graphql_single_name
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Taxonomy>
     */
    class Taxonomy extends \WPGraphQL\Model\Model
    {
        /**
         * Taxonomy constructor.
         *
         * @param \WP_Taxonomy $taxonomy The incoming Taxonomy to model.
         */
        public function __construct(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Term - Models data for Terms
     *
     * @property ?int    $count
     * @property ?int    $databaseId
     * @property ?string $description
     * @property ?string $id
     * @property ?string $link
     * @property ?string $name
     * @property ?string $parentId
     * @property ?int    $parentDatabaseId
     * @property ?string $slug
     * @property ?string $taxonomyName
     * @property ?int    $termGroupId
     * @property ?int    $termTaxonomyId
     *
     * Aliases:
     * @property ?int     $term_id
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Term>
     */
    class Term extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the taxonomy object for the term being modeled
         *
         * @var \WP_Taxonomy|null $taxonomy_object
         */
        protected $taxonomy_object;
        /**
         * The global Post instance
         *
         * @var \WP_Post
         */
        protected $global_post;
        /**
         * Term constructor.
         *
         * @param \WP_Term $term The incoming WP_Term object that needs modeling
         *
         * @return void
         */
        public function __construct(\WP_Term $term)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function setup()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function tear_down()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class Theme - Models data for themes
     *
     * @property ?string       $author
     * @property ?string       $authorUri
     * @property ?string       $description
     * @property ?string       $id
     * @property ?string       $name
     * @property ?string       $screenshot
     * @property ?string       $slug
     * @property ?string       $themeUri
     * @property string[]|null $tags
     * @property ?string       $version
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_Theme>
     */
    class Theme extends \WPGraphQL\Model\Model
    {
        /**
         * Theme constructor.
         *
         * @param \WP_Theme $theme The incoming WP_Theme to be modeled
         *
         * @return void
         * @throws \Exception
         */
        public function __construct(\WP_Theme $theme)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class User - Models the data for the User object type
     *
     * @property string[]|null $capabilities
     * @property ?string       $capKey
     * @property ?int          $databaseId
     * @property ?string       $description
     * @property ?string       $email
     * @property string[]      $enqueuedScriptsQueue
     * @property string[]      $enqueuedStylesheetsQueue
     * @property string[]|null $extraCapabilities
     * @property ?string       $firstName
     * @property ?string       $id
     * @property ?string       $lastName
     * @property ?string       $locale
     * @property ?string       $name
     * @property ?string       $nicename
     * @property ?string       $nickname
     * @property ?string       $registeredDate
     * @property string[]|null $roles
     * @property ?string       $slug
     * @property string        $uri
     * @property ?string       $url
     * @property ?string       $username
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<\WP_User>
     */
    class User extends \WPGraphQL\Model\Model
    {
        /**
         * The Global Post at time of Model generation
         *
         * @var \WP_Post
         */
        protected $global_post;
        /**
         * The global authordata at time of Model generation
         *
         * @var \WP_User
         */
        protected $global_authordata;
        /**
         * User constructor.
         *
         * @param \WP_User $user The incoming WP_User object that needs modeling
         *
         * @return void
         */
        public function __construct(\WP_User $user)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function setup()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function tear_down()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
    /**
     * Class UserRole - Models data for user roles
     *
     * @property ?string[] $capabilities
     * @property ?string   $displayName
     * @property string    $id
     * @property ?string   $name
     *
     * @package WPGraphQL\Model
     *
     * @extends \WPGraphQL\Model\Model<array<string,mixed>>
     */
    class UserRole extends \WPGraphQL\Model\Model
    {
        /**
         * UserRole constructor.
         *
         * @param array<string,mixed> $user_role The incoming user role to be modeled
         *
         * @return void
         * @throws \Exception
         */
        public function __construct($user_role)
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function is_private()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function init()
        {
        }
    }
}
namespace WPGraphQL\Mutation {
    class CommentCreate
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class CommentDelete
    {
        /**
         * Registers the CommentDelete mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    /**
     * Class CommentRestore
     *
     * @package WPGraphQL\Mutation
     */
    class CommentRestore
    {
        /**
         * Registers the CommentRestore mutation.
         *
         * @return void
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    /**
     * Class CommentUpdate
     *
     * @package WPGraphQL\Mutation
     */
    class CommentUpdate
    {
        /**
         * Registers the CommentUpdate mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class MediaItemCreate
    {
        /**
         * Registers the MediaItemCreate mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class MediaItemDelete
    {
        /**
         * Registers the MediaItemDelete mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class MediaItemUpdate
    {
        /**
         * Registers the MediaItemUpdate mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    /**
     * Class PostObjectCreate
     *
     * @package WPGraphQL\Mutation
     */
    class PostObjectCreate
    {
        /**
         * Registers the PostObjectCreate mutation.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         * @param string        $mutation_name    The mutation name.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload($post_type_object, $mutation_name)
        {
        }
    }
    class PostObjectDelete
    {
        /**
         * Registers the PostObjectDelete mutation.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         * @param string        $mutation_name    The mutation name.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload(\WP_Post_Type $post_type_object, string $mutation_name)
        {
        }
    }
    class PostObjectUpdate
    {
        /**
         * Registers the PostObjectUpdate mutation.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Post_Type $post_type_object The post type of the mutation.
         * @param string        $mutation_name      The mutation name.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload($post_type_object, $mutation_name)
        {
        }
    }
    class ResetUserPassword
    {
        /**
         * Registers the ResetUserPassword mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class SendPasswordResetEmail
    {
        /**
         * Registers the sendPasswordResetEmail Mutation
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields(): array
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(): array
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload(): callable
        {
        }
    }
    class TermObjectCreate
    {
        /**
         * Registers the TermObjectCreate mutation.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         * @param string       $mutation_name The name of the mutation.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload(\WP_Taxonomy $taxonomy, string $mutation_name)
        {
        }
    }
    /**
     * Class TermObjectDelete
     *
     * @package WPGraphQL\Mutation
     */
    class TermObjectDelete
    {
        /**
         * Registers the TermObjectDelete mutation.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         * @param string       $mutation_name The name of the mutation.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload(\WP_Taxonomy $taxonomy, string $mutation_name)
        {
        }
    }
    /**
     * Class TermObjectUpdate
     *
     * @package WPGraphQL\Mutation
     */
    class TermObjectUpdate
    {
        /**
         * Registers the TermObjectUpdate mutation.
         *
         * @param \WP_Taxonomy $taxonomy The Taxonomy the mutation is registered for.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param \WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         * @param string       $mutation_name  The name of the mutation.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload(\WP_Taxonomy $taxonomy, $mutation_name)
        {
        }
    }
    /**
     * Class UpdateSettings
     *
     * @package WPGraphQL\Mutation
     */
    class UpdateSettings
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return void
         */
        public static function register_mutation(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param array<string,mixed>              $input The mutation input
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,string>>
         *
         * @throws \GraphQL\Error\UserError
         */
        public static function mutate_and_get_payload(array $input, \WPGraphQL\Registry\TypeRegistry $type_registry): array
        {
        }
    }
    /**
     * Class UserCreate
     *
     * @package WPGraphQL\Mutation
     */
    class UserCreate
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    /**
     * Class UserDelete
     *
     * @package WPGraphQL\Mutation
     */
    class UserDelete
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
    class UserRegister
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
        /**
         * @return bool False.
         */
        public static function return_false(): bool
        {
        }
    }
    class UserUpdate
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable(array<string,mixed>$input,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):array<string,mixed>
         */
        public static function mutate_and_get_payload()
        {
        }
    }
}
namespace WPGraphQL\Registry {
    /**
     * Class SchemaRegistry
     *
     * @package WPGraphQL\Registry
     */
    class SchemaRegistry
    {
        /**
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        protected $type_registry;
        /**
         * SchemaRegistry constructor.
         *
         * @throws \Exception
         */
        public function __construct()
        {
        }
        /**
         * Returns the Schema to use for execution of the GraphQL Request
         *
         * @return \WPGraphQL\WPSchema
         * @throws \Exception
         */
        public function get_schema()
        {
        }
    }
    /**
     * Class TypeRegistry
     *
     * This class maintains the registry of Types used in the GraphQL Schema
     *
     * @phpstan-import-type InputObjectConfig from \GraphQL\Type\Definition\InputObjectType
     * @phpstan-import-type InterfaceConfig from \GraphQL\Type\Definition\InterfaceType
     * @phpstan-import-type ObjectConfig from \GraphQL\Type\Definition\ObjectType
     * @phpstan-import-type WPEnumTypeConfig from \WPGraphQL\Type\WPEnumType
     * @phpstan-import-type WPScalarConfig from \WPGraphQL\Type\WPScalar
     *
     * @phpstan-type TypeDef \GraphQL\Type\Definition\Type&\GraphQL\Type\Definition\NamedType
     *
     * @package WPGraphQL\Registry
     */
    class TypeRegistry
    {
        /**
         * The registered Types
         *
         * @var array<string,?TypeDef>
         */
        protected $types;
        /**
         * The keys that are prepared for introspection.
         *
         * @var array<string>|null
         */
        protected static ?array $introspection_keys = null;
        /**
         * The loaders needed to register types
         *
         * @var array<string,callable(): ?TypeDef>
         */
        protected $type_loaders;
        /**
         * Stores a list of Types that need to be eagerly loaded instead of lazy loaded.
         *
         * Types that exist in the Schema but are only part of a Union/Interface ResolveType but not
         * referenced directly need to be eagerly loaded.
         *
         * @var array<string,string>
         */
        protected $eager_type_map;
        /**
         * Stores a list of Types that should be excluded from the schema.
         *
         * Type names are filtered by `graphql_excluded_types` and normalized using strtolower(), to avoid case sensitivity issues.
         *
         * @var string[]
         */
        protected $excluded_types = null;
        /**
         * Stores a list of mutation names that should be excluded from the schema, along with their generated input and payload types.
         *
         * Type names are filtered by `graphql_excluded_mutations` and normalized using strtolower(), to avoid case sensitivity issues.
         *
         * @var string[]
         */
        protected $excluded_mutations = null;
        /**
         * Stores a list of connection Type names that should be excluded from the schema, along with their generated types.
         *
         * Type names are filtered by `graphql_excluded_connections` and normalized using strtolower(), to avoid case sensitivity issues.
         *
         * Type name
         *
         * @var string[]
         */
        protected $excluded_connections = null;
        /**
         * TypeRegistry constructor.
         */
        public function __construct()
        {
        }
        /**
         * Formats the array key to a more friendly format
         *
         * @param string $key Name of the array key to format
         *
         * @return string
         */
        protected function format_key(string $key)
        {
        }
        /**
         * Returns the eager type map, an array of Type definitions for Types that
         * are not directly referenced in the schema.
         *
         * Types can add "eagerlyLoadType => true" when being registered to be included
         * in the eager_type_map.
         *
         * @return array<string,?TypeDef>
         */
        protected function get_eager_type_map()
        {
        }
        /**
         * Initialize the TypeRegistry
         *
         * @throws \Exception
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Initialize the Type Registry
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         * @throws \Exception
         */
        public function init_type_registry(self $type_registry)
        {
        }
        /**
         * Given a config for a custom Scalar, this adds the Scalar for use in the Schema.
         *
         * @param string              $type_name The name of the Type to register
         * @param array<string,mixed> $config    The config for the scalar type to register
         *
         * @phpstan-param WPScalarConfig $config
         *
         * @throws \Exception
         *
         * @return void
         */
        public function register_scalar(string $type_name, array $config)
        {
        }
        /**
         * Registers connections that were passed through the Type registration config
         *
         * @param array<string,mixed> $config Type config
         *
         * @return void
         *
         * @throws \Exception
         */
        protected function register_connections_from_config(array $config)
        {
        }
        /**
         * Add a Type to the Registry
         *
         * @param string                      $type_name The name of the type to register
         * @param array<string,mixed>|TypeDef $config The config for the type
         *
         * @throws \Exception
         */
        public function register_type(string $type_name, $config): void
        {
        }
        /**
         * Add an Object Type to the Registry
         *
         * @param string              $type_name The name of the type to register
         * @param array<string,mixed> $config The configuration of the type
         *
         * @throws \Exception
         */
        public function register_object_type(string $type_name, array $config): void
        {
        }
        /**
         * Add an Interface Type to the registry
         *
         * @param string              $type_name The name of the type to register
         * @param array<string,mixed> $config The configuration of the type
         *
         * @throws \Exception
         */
        public function register_interface_type(string $type_name, $config): void
        {
        }
        /**
         * Add an Enum Type to the registry
         *
         * @param string              $type_name The name of the type to register
         * @param array<string,mixed> $config he configuration of the type
         *
         * @phpstan-param WPEnumTypeConfig $config
         *
         * @throws \Exception
         */
        public function register_enum_type(string $type_name, array $config): void
        {
        }
        /**
         * Add an Input Type to the Registry
         *
         * @param string              $type_name The name of the type to register
         * @param array<string,mixed> $config he configuration of the type
         *
         * @throws \Exception
         */
        public function register_input_type(string $type_name, array $config): void
        {
        }
        /**
         * Add a Union Type to the Registry
         *
         * @param string              $type_name The name of the type to register
         * @param array<string,mixed> $config he configuration of the type
         *
         * @throws \Exception
         */
        public function register_union_type(string $type_name, array $config): void
        {
        }
        /**
         * Get the keys that are prepared for introspection.
         *
         * @return array<string>
         */
        protected static function get_introspection_keys(): array
        {
        }
        /**
         * Prepare the config for introspection. This is used to resolve callable values for description and deprecationReason for
         * introspection queries.
         *
         * @template T of array<string,mixed>
         * @param T $config The config to prepare.
         *
         * @return array<string,mixed> The prepared config.
         * @phpstan-return T|array{description?: string|null, deprecationReason?: string|null}
         *
         * @internal
         */
        public static function prepare_config_for_introspection(array $config): array
        {
        }
        /**
         * Prepare the type for registration.
         *
         * @template T of WPEnumTypeConfig|WPScalarConfig|array<string,mixed>
         *
         * @param string    $type_name The name of the type to prepare
         * @param T|TypeDef $config    The config for the type
         *
         * @return ?TypeDef The prepared type
         */
        protected function prepare_type(string $type_name, $config)
        {
        }
        /**
         * Given a type name, returns the type or null if not found
         *
         * @param string $type_name The name of the Type to get from the registry
         *
         * @return ?TypeDef
         */
        public function get_type(string $type_name)
        {
        }
        /**
         * Given a type name, determines if the type is already present in the Type Loader
         *
         * @param string $type_name The name of the type to check the registry for
         */
        public function has_type(string $type_name): bool
        {
        }
        /**
         * Return the Types in the registry
         *
         * @return TypeDef[]
         */
        public function get_types(): array
        {
        }
        /**
         * Wrapper for prepare_field to prepare multiple fields for registration at once
         *
         * @param array<string,mixed> $fields    Array of fields and their settings to register on a Type
         * @param string              $type_name Name of the Type to register the fields to
         *
         * @return array<string,mixed>
         * @throws \Exception
         */
        public function prepare_fields(array $fields, string $type_name): array
        {
        }
        /**
         * Prepare the field to be registered on the type
         *
         * @param string              $field_name   Friendly name of the field
         * @param array<string,mixed> $field_config Config data about the field to prepare
         * @param string              $type_name    Name of the type to prepare the field for
         *
         * @return ?array<string,mixed>
         * @throws \Exception
         */
        protected function prepare_field(string $field_name, array $field_config, string $type_name): ?array
        {
        }
        /**
         * Processes type modifiers (e.g., "non-null"). Loads types immediately, so do
         * not call before types are ready to be loaded.
         *
         * @template WrappedType of array{non_null:mixed}|array{list_of:mixed}
         * @param WrappedType|array<string,mixed>|string|\GraphQL\Type\Definition\Type $type The type to process.
         *
         * @return ($type is WrappedType ? \GraphQL\Type\Definition\Type : (array<string,mixed>|string|\GraphQL\Type\Definition\Type))
         * @throws \Exception
         */
        public function setup_type_modifiers($type)
        {
        }
        /**
         * Wrapper for the register_field method to register multiple fields at once
         *
         * @param string                            $type_name Name of the type in the Type Registry to add the fields to
         * @param array<string,array<string,mixed>> $fields    Fields to register
         *
         * @throws \Exception
         */
        public function register_fields(string $type_name, array $fields = []): void
        {
        }
        /**
         * Add a field to a Type in the Type Registry
         *
         * @param string              $type_name  Name of the type in the Type Registry to add the fields to
         * @param string              $field_name Name of the field to add to the type
         * @param array<string,mixed> $config     Info about the field to register to the type
         *
         * @throws \Exception
         */
        public function register_field(string $type_name, string $field_name, array $config): void
        {
        }
        /**
         * Remove a field from a type
         *
         * @param string $type_name  Name of the Type the field is registered to
         * @param string $field_name Name of the field you would like to remove from the type
         *
         * @return void
         */
        public function deregister_field(string $type_name, string $field_name)
        {
        }
        /**
         * Method to register a new connection in the Type registry
         *
         * @param array<string,mixed> $config The info about the connection being registered
         *
         * @throws \InvalidArgumentException
         * @throws \Exception
         */
        public function register_connection(array $config): void
        {
        }
        /**
         * Handles registration of a mutation to the Type registry
         *
         * @param string              $mutation_name Name of the mutation being registered
         * @param array<string,mixed> $config        Info about the mutation being registered
         *
         * @throws \Exception
         */
        public function register_mutation(string $mutation_name, array $config): void
        {
        }
        /**
         * Removes a GraphQL mutation from the schema.
         *
         * This works by preventing the mutation from being registered in the first place.
         *
         * @uses 'graphql_excluded_mutations' filter.
         *
         * @param string $mutation_name Name of the mutation to remove from the schema.
         *
         * @since 1.14.0
         */
        public function deregister_mutation(string $mutation_name): void
        {
        }
        /**
         * Removes a GraphQL connection from the schema.
         *
         * This works by preventing the connection from being registered in the first place.
         *
         * @uses 'graphql_excluded_connections' filter.
         *
         * @param string $connection_name The GraphQL connection name.
         */
        public function deregister_connection(string $connection_name): void
        {
        }
        /**
         * Given a Type, this returns an instance of a NonNull of that type.
         *
         * @template T of \GraphQL\Type\Definition\NullableType&\GraphQL\Type\Definition\Type
         * @param T|string $type The Type being wrapped.
         */
        public function non_null($type): \GraphQL\Type\Definition\NonNull
        {
        }
        /**
         * Given a Type, this returns an instance of a listOf of that type.
         *
         * @template T of \GraphQL\Type\Definition\Type
         * @param T|string $type The Type being wrapped.
         *
         * @return \GraphQL\Type\Definition\ListOfType<\GraphQL\Type\Definition\Type>
         */
        public function list_of($type): \GraphQL\Type\Definition\ListOfType
        {
        }
        /**
         * Get the list of GraphQL type names to exclude from the schema.
         *
         * Type names are normalized using `strtolower()`, to avoid case sensitivity issues.
         *
         * @since 1.13.0
         *
         * @return string[]
         */
        public function get_excluded_types(): array
        {
        }
        /**
         * Get the list of GraphQL connections to exclude from the schema.
         *
         * Type names are normalized using `strtolower()`, to avoid case sensitivity issues.
         *
         * @return string[]
         *
         * @since 1.14.0
         */
        public function get_excluded_connections(): array
        {
        }
        /**
         * Get the list of GraphQL mutation names to exclude from the schema.
         *
         * Mutation names are normalized using `strtolower()`, to avoid case sensitivity issues.
         *
         * @return string[]
         * @since 1.14.0
         */
        public function get_excluded_mutations(): array
        {
        }
        /**
         * Gets the actual type name, stripped of possible NonNull and ListOf wrappers.
         *
         * Returns an empty string if the type modifiers are malformed.
         *
         * @param string|array<string|int,mixed> $type The (possibly-wrapped) type name.
         */
        protected function get_unmodified_type_name($type): string
        {
        }
    }
}
namespace WPGraphQL\Registry\Utils {
    /**
     * Class PostObject
     *
     * @package WPGraphQL\Data
     * @since   1.12.0
     */
    class PostObject
    {
        /**
         * Registers a post_type type to the schema as either a GraphQL object, interface, or union.
         *
         * @param \WP_Post_Type $post_type_object Post type.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_types(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Gets all the connections for the given post type.
         *
         * @param \WP_Post_Type $post_type_object
         *
         * @return array<string,array<string,mixed>>
         */
        protected static function get_connections(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Gets all the interfaces for the given post type.
         *
         * @param \WP_Post_Type $post_type_object Post type.
         *
         * @return string[]
         */
        protected static function get_interfaces(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Registers common post type fields on schema type corresponding to provided post type object.
         *
         * @param \WP_Post_Type $post_type_object Post type.
         *
         * @return array<string,array<string,mixed>>
         * @todo make protected after \Type\ObjectType\PostObject::get_fields() is removed.
         */
        public static function get_fields(\WP_Post_Type $post_type_object)
        {
        }
    }
    /**
     * Class TermObjectType
     *
     * @package WPGraphQL\Data
     * @since   1.12.0
     */
    class TermObject
    {
        /**
         * Registers a taxonomy type to the schema as either a GraphQL object, interface, or union.
         *
         * @param \WP_Taxonomy $tax_object Taxonomy.
         *
         * @return void
         * @throws \Exception
         */
        public static function register_types(\WP_Taxonomy $tax_object)
        {
        }
        /**
         * Gets all the connections for the given post type.
         *
         * @param \WP_Taxonomy $tax_object
         *
         * @return array<string,array<string,mixed>>
         */
        protected static function get_connections(\WP_Taxonomy $tax_object)
        {
        }
        /**
         * Gets all the interfaces for the given Taxonomy.
         *
         * @param \WP_Taxonomy $tax_object Taxonomy.
         *
         * @return string[]
         */
        protected static function get_interfaces(\WP_Taxonomy $tax_object)
        {
        }
        /**
         * Registers common Taxonomy fields on schema type corresponding to provided Taxonomy object.
         *
         * @param \WP_Taxonomy $tax_object Taxonomy.
         *
         * @return array<string,array<string,mixed>>[]
         */
        protected static function get_fields(\WP_Taxonomy $tax_object)
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * Class Request
     *
     * Proxies a request to graphql-php, applying filters and transforming request
     * data as needed.
     *
     * @package WPGraphQL
     *
     * phpcs:disable -- PHPStan annotation.
     * @phpstan-import-type RootValueResolver from \GraphQL\Server\ServerConfig
     * @phpstan-import-type SerializableResult from \GraphQL\Executor\ExecutionResult
     * phpcs:enable
     */
    class Request
    {
        /**
         * App context for this request.
         *
         * @var \WPGraphQL\AppContext
         */
        public $app_context;
        /**
         * Request data.
         *
         * @var array<string,mixed>|\GraphQL\Server\OperationParams
         */
        public $data;
        /**
         * Cached global post.
         *
         * @var ?\WP_Post
         */
        public $global_post;
        /**
         * GraphQL operation parameters for this request.
         * Will be an array of OperationParams if this is a batch request.
         *
         * @var \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
         */
        public $params;
        /**
         * Schema for this request.
         *
         * @var \WPGraphQL\WPSchema
         */
        public $schema;
        /**
         * Debug log for WPGraphQL Requests
         *
         * @var \WPGraphQL\Utils\DebugLog
         */
        public $debug_log;
        /**
         * The Type Registry the Schema is built with
         *
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * Validation rules for execution.
         *
         * @var array<string,\GraphQL\Validator\Rules\ValidationRule>
         */
        protected $validation_rules;
        /**
         * The default field resolver function. Default null
         *
         * @var callable|null
         */
        protected $field_resolver;
        /**
         * The root value of the request. Default null;
         *
         * @var mixed|RootValueResolver
         */
        protected $root_value;
        /**
         * @var \WPGraphQL\Utils\QueryAnalyzer
         */
        protected $query_analyzer;
        /**
         * Constructor
         *
         * @param array<string,mixed> $data The request data (for Non-HTTP requests).
         *
         * @return void
         *
         * @throws \Exception
         */
        public function __construct(array $data = [])
        {
        }
        /**
         * Get the instance of the Query Analyzer
         */
        public function get_query_analyzer(): \WPGraphQL\Utils\QueryAnalyzer
        {
        }
        /**
         * @return callable|null
         */
        protected function get_field_resolver()
        {
        }
        /**
         * Return the validation rules to use in the request
         *
         * @return array<string,\GraphQL\Validator\Rules\ValidationRule>
         */
        protected function get_validation_rules(): array
        {
        }
        /**
         * Returns the root value to use in the request.
         *
         * @return mixed|RootValueResolver|null
         */
        protected function get_root_value()
        {
        }
        /**
         * Checks authentication errors.
         *
         * False will mean there are no detected errors and
         * execution will continue.
         *
         * Anything else (true, WP_Error, thrown exception, etc) will prevent execution of the GraphQL
         * request.
         *
         * @return bool
         * @throws \Exception
         */
        protected function has_authentication_errors()
        {
        }
        /**
         * Filter Authentication errors. Allows plugins that authenticate to hook in and prevent
         * execution if Authentication errors exist.
         *
         * @param bool $authentication_errors Whether there are authentication errors with the request.
         *
         * @return bool
         */
        protected function filtered_authentication_errors($authentication_errors = false)
        {
        }
        /**
         * Execute an internal request (graphql() function call).
         *
         * @return mixed[]
         * @phpstan-return SerializableResult|SerializableResult[]|mixed[]
         * @throws \Exception
         */
        public function execute()
        {
        }
        /**
         * Execute an HTTP request.
         *
         * @return SerializableResult|(\GraphQL\Executor\ExecutionResult|array<int,\GraphQL\Executor\ExecutionResult>)
         * @throws \Exception
         */
        public function execute_http()
        {
        }
        /**
         * Get the operation params for the request.
         *
         * @return \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
         */
        public function get_params()
        {
        }
        /**
         * Returns the debug flag value
         *
         * @return int
         */
        public function get_debug_flag()
        {
        }
    }
    /**
     * Class Router
     * This sets up the /graphql endpoint
     *
     * @package WPGraphQL
     * @since   0.0.1
     *
     * phpcs:disable -- PHPStan annotation.
     * @phpstan-import-type SerializableError from \GraphQL\Executor\ExecutionResult
     * @phpstan-import-type SerializableResult from \GraphQL\Executor\ExecutionResult
     *
     * @phpstan-type WPGraphQLResult = SerializableResult|(\GraphQL\Executor\ExecutionResult|array<int,\GraphQL\Executor\ExecutionResult>)
     * phpcs:enable
     */
    class Router
    {
        /**
         * Sets the route to use as the endpoint
         *
         * @var string $route
         */
        public static $route = 'graphql';
        /**
         * Holds the Global Post for later resetting
         *
         * @var string
         */
        protected static $global_post = '';
        /**
         * Set the default status code to 200.
         *
         * @var int
         */
        public static $http_status_code = 200;
        /**
         * @var ?\WPGraphQL\Request
         */
        protected static $request;
        /**
         * Initialize the WPGraphQL Router
         *
         * @return void
         * @throws \Exception
         */
        public function init()
        {
        }
        /**
         * Returns the GraphQL Request being executed
         */
        public static function get_request(): ?\WPGraphQL\Request
        {
        }
        /**
         * Adds rewrite rule for the route endpoint
         *
         * @return void
         * @since  0.0.1
         * @uses   add_rewrite_rule()
         */
        public static function add_rewrite_rule()
        {
        }
        /**
         * Determines whether the request is an API request to play nice with
         * application passwords and potential other WordPress core functionality
         * for APIs
         *
         * @param bool $is_api_request Whether the request is an API request
         *
         * @return bool
         */
        public function is_api_request($is_api_request)
        {
        }
        /**
         * Adds the query_var for the route
         *
         * @param string[] $query_vars The array of whitelisted query variables.
         *
         * @return string[]
         * @since  0.0.1
         */
        public static function add_query_var($query_vars)
        {
        }
        /**
         * Returns true when the current request is a GraphQL request coming from the HTTP
         *
         * NOTE: This will only indicate whether the GraphQL Request is an HTTP request. Many features
         * need to affect _all_ GraphQL requests, including internal requests using the `graphql()`
         * function, so be careful how you use this to check your conditions.
         *
         * @return bool
         */
        public static function is_graphql_http_request()
        {
        }
        /**
         * This resolves the http request and ensures that WordPress can respond with the appropriate
         * JSON response instead of responding with a template from the standard WordPress Template
         * Loading process
         *
         * @return void
         * @throws \Exception Throws exception.
         * @throws \Throwable Throws exception.
         * @since  0.0.1
         */
        public static function resolve_http_request()
        {
        }
        /**
         * Sends an HTTP header.
         *
         * @param string $key   Header key.
         * @param string $value Header value.
         *
         * @return void
         * @since  0.0.5
         */
        public static function send_header($key, $value)
        {
        }
        /**
         * Sends an HTTP status code.
         *
         * @param int|null $status_code The status code to send.
         *
         * @return void
         */
        protected static function set_status(?int $status_code = null)
        {
        }
        /**
         * Returns an array of headers to send with the HTTP response
         *
         * @return array<string,string>
         */
        protected static function get_response_headers()
        {
        }
        /**
         * Set the response headers
         *
         * @return void
         * @since  0.0.1
         */
        public static function set_headers()
        {
        }
        /**
         * Retrieves the raw request entity (body).
         *
         * @since  0.0.5
         *
         * @global string php://input Raw post data.
         *
         * @return string Raw request data.
         */
        public static function get_raw_data()
        {
        }
        /**
         * This processes the graphql requests that come into the /graphql endpoint via an HTTP request
         *
         * @return void
         * @throws \Throwable Throws Exception.
         * @global WP_User $current_user The currently authenticated user.
         * @since  0.0.1
         */
        public static function process_http_request()
        {
        }
        /**
         * Prepare headers for response
         *
         * @param mixed[]|\GraphQL\Executor\ExecutionResult $response       The response of the GraphQL Request.
         * @param mixed[]|\GraphQL\Executor\ExecutionResult $_deprecated    Deprecated.
         * @param string                                    $query          The GraphQL query.
         * @param string                                    $operation_name The operation name of the GraphQL Request.
         * @param ?array<string,mixed>                      $variables      The variables applied to the GraphQL Request.
         * @param ?\WP_User                                 $user           The current user object.
         *
         * @return void
         */
        protected static function prepare_headers($response, $_deprecated, string $query, string $operation_name, $variables, $user = null)
        {
        }
        /**
         * @deprecated 0.4.1 Use Router::is_graphql_http_request instead. This now resolves to it
         * @todo remove in v3.0
         * @codeCoverageIgnore
         *
         * @return bool
         */
        public static function is_graphql_request()
        {
        }
    }
}
namespace GraphQL\Validator\Rules {
    /**
     * @phpstan-import-type VisitorArray from Visitor
     */
    abstract class ValidationRule
    {
        protected string $name;
        public function getName(): string
        {
        }
        /**
         * Returns structure suitable for @see \GraphQL\Language\Visitor.
         *
         * @phpstan-return VisitorArray
         */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * Returns structure suitable for @see \GraphQL\Language\Visitor.
         *
         * @phpstan-return VisitorArray
         */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    /**
     * @see Visitor, FieldDefinition
     *
     * @phpstan-import-type VisitorArray from Visitor
     *
     * @phpstan-type ASTAndDefs \ArrayObject<string, \ArrayObject<int, array{FieldNode, FieldDefinition|null}>>
     */
    abstract class QuerySecurityRule extends \GraphQL\Validator\Rules\ValidationRule
    {
        public const DISABLED = 0;
        /** @var array<string, FragmentDefinitionNode> */
        protected array $fragments = [];
        /** @throws \InvalidArgumentException */
        protected function checkIfGreaterOrEqualToZero(string $name, int $value): void
        {
        }
        protected function getFragment(\GraphQL\Language\AST\FragmentSpreadNode $fragmentSpread): ?\GraphQL\Language\AST\FragmentDefinitionNode
        {
        }
        /** @return array<string, FragmentDefinitionNode> */
        protected function getFragments(): array
        {
        }
        /**
         * @phpstan-param VisitorArray $validators
         *
         * @phpstan-return VisitorArray
         */
        protected function invokeIfNeeded(\GraphQL\Validator\QueryValidationContext $context, array $validators): array
        {
        }
        abstract protected function isEnabled(): bool;
        protected function gatherFragmentDefinition(\GraphQL\Validator\QueryValidationContext $context): void
        {
        }
        /**
         * Given a selectionSet, adds all fields in that selection to
         * the passed in map of fields, and returns it at the end.
         *
         * Note: This is not the same as execution's collectFields because at static
         * time we do not know what object type will be used, so we unconditionally
         * spread in all fragments.
         *
         * @see \GraphQL\Validator\Rules\OverlappingFieldsCanBeMerged
         *
         * @param \ArrayObject<string, true>|null $visitedFragmentNames
         *
         * @phpstan-param ASTAndDefs|null $astAndDefs
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws InvariantViolation
         *
         * @phpstan-return ASTAndDefs
         */
        protected function collectFieldASTsAndDefs(\GraphQL\Validator\QueryValidationContext $context, ?\GraphQL\Type\Definition\Type $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, ?\ArrayObject $visitedFragmentNames = null, ?\ArrayObject $astAndDefs = null): \ArrayObject
        {
        }
        protected function getFieldName(\GraphQL\Language\AST\FieldNode $node): string
        {
        }
    }
    class DisableIntrospection extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        public const ENABLED = 1;
        protected int $isEnabled;
        public function __construct(int $enabled)
        {
        }
        public function setEnabled(int $enabled): void
        {
        }
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function introspectionDisabledMessage(): string
        {
        }
        protected function isEnabled(): bool
        {
        }
    }
}
namespace WPGraphQL\Server\ValidationRules {
    /**
     * Class DisableIntrospection
     *
     * @package WPGraphQL\Server\ValidationRules
     */
    class DisableIntrospection extends \GraphQL\Validator\Rules\DisableIntrospection
    {
        /**
         * DisableIntrospection constructor.
         */
        public function __construct()
        {
        }
        /**
         * Determines whether the DisableIntrospection rule should be disabled.
         */
        public function should_be_enabled(): bool
        {
        }
        /**
         * Returns a helpful message when introspection is disabled and an introspection query is attempted.
         */
        public static function introspectionDisabledMessage(): string
        {
        }
    }
    /**
     * Class QueryDepth
     *
     * @package WPGraphQL\Server\ValidationRules
     */
    class QueryDepth extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        /**
         * QueryDepth constructor.
         */
        public function __construct()
        {
        }
        /**
         * {@inheritDoc}
         */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * Return the maxQueryDepth allowed
         *
         * @return int
         */
        public function getMaxQueryDepth()
        {
        }
        /**
         * Set max query depth. If equal to 0 no check is done. Must be greater or equal to 0.
         *
         * @param int $maxQueryDepth The max query depth to allow for GraphQL operations
         *
         * @return void
         */
        public function setMaxQueryDepth(int $maxQueryDepth)
        {
        }
        /**
         * Return the max query depth error message
         *
         * @param int $max The max number of levels to allow in GraphQL operation
         * @param int $count The number of levels in the current operation
         *
         * @return string
         */
        public function errorMessage($max, $count)
        {
        }
        /**
         * Determine whether the rule should be enabled
         */
        protected function isEnabled(): bool
        {
        }
    }
    /**
     * Class RequireAuthentication
     *
     * @package WPGraphQL\Server\ValidationRules
     */
    class RequireAuthentication extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        /**
         * Whether the rule is enabled or not.
         */
        protected function isEnabled(): bool
        {
        }
        /**
         * {@inheritDoc}
         */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
    }
}
namespace GraphQL\Server {
    /**
     * Contains functionality that could be re-used by various server implementations.
     *
     * @see \GraphQL\Tests\Server\HelperTest
     */
    class Helper
    {
        /**
         * Parses HTTP request using PHP globals and returns GraphQL OperationParams
         * contained in this request. For batched requests it returns an array of OperationParams.
         *
         * This function does not check validity of these params
         * (validation is performed separately in validateOperationParams() method).
         *
         * If $readRawBodyFn argument is not provided - will attempt to read raw request body
         * from `php://input` stream.
         *
         * Internally it normalizes input to $method, $bodyParams and $queryParams and
         * calls `parseRequestParams()` to produce actual return value.
         *
         * For PSR-7 request parsing use `parsePsrRequest()` instead.
         *
         * @throws RequestError
         *
         * @return OperationParams|array<int, OperationParams>
         *
         * @api
         */
        public function parseHttpRequest(?callable $readRawBodyFn = null)
        {
        }
        /**
         * Parses normalized request params and returns instance of OperationParams
         * or array of OperationParams in case of batch operation.
         *
         * Returned value is a suitable input for `executeOperation` or `executeBatch` (if array)
         *
         * @param array<mixed> $bodyParams
         * @param array<mixed> $queryParams
         *
         * @throws RequestError
         *
         * @return OperationParams|array<int, OperationParams>
         *
         * @api
         */
        public function parseRequestParams(string $method, array $bodyParams, array $queryParams)
        {
        }
        /**
         * Checks validity of OperationParams extracted from HTTP request and returns an array of errors
         * if params are invalid (or empty array when params are valid).
         *
         * @return list<RequestError>
         *
         * @api
         */
        public function validateOperationParams(\GraphQL\Server\OperationParams $params): array
        {
        }
        /**
         * Executes GraphQL operation with given server configuration and returns execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter).
         *
         * @throws \Exception
         * @throws InvariantViolation
         *
         * @return ExecutionResult|Promise
         *
         * @api
         */
        public function executeOperation(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $op)
        {
        }
        /**
         * Executes batched GraphQL operations with shared promise queue
         * (thus, effectively batching deferreds|promises of all queries at once).
         *
         * @param array<OperationParams> $operations
         *
         * @throws \Exception
         * @throws InvariantViolation
         *
         * @return array<int, ExecutionResult>|Promise
         *
         * @api
         */
        public function executeBatch(\GraphQL\Server\ServerConfig $config, array $operations)
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        protected function promiseToExecuteOperation(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $op, bool $isBatch = false): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws RequestError
         *
         * @return mixed
         */
        protected function loadPersistedQuery(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $operationParams)
        {
        }
        /** @return array<mixed>|null */
        protected function resolveValidationRules(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType): ?array
        {
        }
        /** @return mixed */
        protected function resolveRootValue(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType)
        {
        }
        /** @return mixed user defined */
        protected function resolveContextValue(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType)
        {
        }
        /**
         * Send response using standard PHP `header()` and `echo`.
         *
         * @param Promise|ExecutionResult|array<ExecutionResult> $result
         *
         * @api
         *
         * @throws \JsonException
         */
        public function sendResponse($result): void
        {
        }
        /**
         * @param array<mixed>|\JsonSerializable $jsonSerializable
         *
         * @throws \JsonException
         */
        protected function emitResponse($jsonSerializable): void
        {
        }
        /** @throws RequestError */
        protected function readRawBody(): string
        {
        }
        /**
         * Converts PSR-7 request to OperationParams or an array thereof.
         *
         * @throws RequestError
         *
         * @return OperationParams|array<OperationParams>
         *
         * @api
         */
        public function parsePsrRequest(\Psr\Http\Message\RequestInterface $request)
        {
        }
        /**
         * @throws RequestError
         *
         * @return mixed
         */
        protected function decodeJson(string $rawBody)
        {
        }
        /** @return array<mixed> */
        protected function decodeContent(string $rawBody): array
        {
        }
        /**
         * @param mixed $bodyParams
         *
         * @throws RequestError
         */
        protected function assertJsonObjectOrArray($bodyParams): void
        {
        }
        /**
         * Converts query execution result to PSR-7 response.
         *
         * @param Promise|ExecutionResult|array<ExecutionResult> $result
         *
         * @throws \InvalidArgumentException
         * @throws \JsonException
         * @throws \RuntimeException
         *
         * @return Promise|ResponseInterface
         *
         * @api
         */
        public function toPsrResponse($result, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream)
        {
        }
        /**
         * @param ExecutionResult|array<ExecutionResult> $result
         *
         * @throws \InvalidArgumentException
         * @throws \JsonException
         * @throws \RuntimeException
         */
        protected function doConvertToPsrResponse($result, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream): \Psr\Http\Message\ResponseInterface
        {
        }
    }
}
namespace WPGraphQL\Server {
    /**
     * Extends GraphQL\Server\Helper to apply filters and parse query extensions.
     *
     * @package WPGraphQL\Server
     */
    class WPHelper extends \GraphQL\Server\Helper
    {
        /**
         * {@inheritDoc}
         * Parses normalized request params and returns instance of OperationParams
         * or array of OperationParams in case of batch operation.
         *
         * @param string  $method The method of the request (GET, POST, etc).
         * @param mixed[] $bodyParams The params passed to the body of the request.
         * @param mixed[] $queryParams The query params passed to the request.
         *
         * @return \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
         * @throws \GraphQL\Server\RequestError Throws RequestError.
         */
        public function parseRequestParams($method, array $bodyParams, array $queryParams)
        {
        }
    }
}
namespace WPGraphQL\Type\Enum {
    class AvatarRatingEnum
    {
        /**
         * Register the AvatarRatingEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class CommentNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     */
    class CommentNodeIdTypeEnum
    {
        /**
         * Register the CommentNodeIdTypeEnum
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class CommentStatusEnum
    {
        /**
         * Register the CommentStatusEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Get the description for a comment status
         *
         * @param string $status_name The name of the comment status.
         * @return string The description for the comment status.
         *
         * @since 2.3.0
         */
        protected static function get_status_description($status_name)
        {
        }
    }
    class CommentsConnectionOrderbyEnum
    {
        /**
         * Register the CommentsConnectionOrderbyEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class - ContentNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     *
     * @phpstan-import-type PartialWPEnumValueConfig from \WPGraphQL\Type\WPEnumType
     */
    class ContentNodeIdTypeEnum
    {
        /**
         * Register the Enum used for setting the field to identify content nodes by
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Returns the values for the Enum.
         *
         * @return array<string,PartialWPEnumValueConfig>
         */
        public static function get_values()
        {
        }
    }
    class ContentTypeEnum
    {
        /**
         * Register the ContentTypeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class ContentTypeIdTypeEnum
    {
        /**
         * Register the ContentTypeIdTypeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MediaItemSizeEnum
    {
        /**
         * Get information about available image sizes
         *
         * @param string $size Optional. The size to get information for.
         * @return array<string, array{width: int, height: int, crop: bool}>|null
         *
         * @since 2.3.0
         */
        protected static function get_image_sizes($size = ''): ?array
        {
        }
        /**
         * Register the MediaItemSizeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Get the description for a media item size
         *
         * @param string                 $image_size The size of the image.
         * @param array<string,bool|int> $image_size_dimensions The dimensions of the image.
         * @return string The description for the media item size.
         *
         * @since 2.3.0
         */
        protected static function get_value_description(string $image_size, array $image_size_dimensions): string
        {
        }
    }
    class MediaItemStatusEnum
    {
        /**
         * Register the MediaItemStatusEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class MenuItemNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     */
    class MenuItemNodeIdTypeEnum
    {
        /**
         * Register the MenuItemNodeIdTypeEnum
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MenuLocationEnum
    {
        /**
         * Register the MenuLocationEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class MenuNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     */
    class MenuNodeIdTypeEnum
    {
        /**
         * Register the MenuNodeIdTypeEnum
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MimeTypeEnum
    {
        /**
         * Register the MimeTypeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class OrderEnum
    {
        /**
         * Register the OrderEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class - PluginStatusEnum
     *
     * @package WPGraphQL\Type\Enum
     *
     * @phpstan-import-type PartialWPEnumValueConfig from \WPGraphQL\Type\WPEnumType
     */
    class PluginStatusEnum
    {
        /**
         * Register the PluginStatusEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Returns the values for the Enum.
         *
         * @return array<string,PartialWPEnumValueConfig>
         */
        protected static function get_enum_values()
        {
        }
    }
    class PostObjectFieldFormatEnum
    {
        /**
         * Register the PostObjectFieldFormatEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class PostObjectsConnectionDateColumnEnum
    {
        /**
         * Register the PostObjectsConnectionDateColumnEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class PostObjectsConnectionOrderbyEnum
    {
        /**
         * Register the PostObjectsConnectionOrderbyEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class - PostStatusEnum
     *
     * @package WPGraphQL\Type\Enum
     *
     * @phpstan-import-type PartialWPEnumValueConfig from \WPGraphQL\Type\WPEnumType
     */
    class PostStatusEnum
    {
        /**
         * Register the PostStatusEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class RelationEnum
    {
        /**
         * Register the RelationEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class ScriptLoadingGroupLocationEnum
     */
    class ScriptLoadingGroupLocationEnum
    {
        /**
         * Register the ScriptLoadingStrategy Enum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class ScriptLoadingStrategyEnum
     */
    class ScriptLoadingStrategyEnum
    {
        /**
         * Register the ScriptLoadingStrategy Enum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class TaxonomyEnum
    {
        /**
         * Register the TaxonomyEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class TaxonomyIdTypeEnum
    {
        /**
         * Register the TaxonomyIdTypeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class - TermNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     *
     * @phpstan-import-type PartialWPEnumValueConfig from \WPGraphQL\Type\WPEnumType
     */
    class TermNodeIdTypeEnum
    {
        /**
         * Register the Enum used for setting the field to identify term nodes by
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Returns the values for the Enum.
         *
         * @return array<string,PartialWPEnumValueConfig>
         */
        public static function get_values()
        {
        }
    }
    class TermObjectsConnectionOrderbyEnum
    {
        /**
         * Register the TermObjectsConnectionOrderbyEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class TimezoneEnum
    {
        /**
         * Register the TimezoneEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class - UserNodeIdTypeEnum
     *
     * @package WPGraphQL\Type\Enum
     *
     * @phpstan-import-type PartialWPEnumValueConfig from \WPGraphQL\Type\WPEnumType
     */
    class UserNodeIdTypeEnum
    {
        /**
         * Register the Enum used for setting the field to identify User nodes by
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Returns the values for the Enum.
         *
         * @return array<string,PartialWPEnumValueConfig>
         */
        public static function get_values()
        {
        }
    }
    class UserRoleEnum
    {
        /**
         * Register the UserRoleEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class UsersConnectionOrderbyEnum
    {
        /**
         * Register the UsersConnectionOrderbyEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class UsersConnectionSearchColumnEnum
    {
        /**
         * Register the UsersConnectionSearchColumnEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
}
namespace WPGraphQL\Type\Input {
    class DateInput
    {
        /**
         * Register the DateInput Input
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class DateQueryInput
    {
        /**
         * Register the DateQueryInput Input
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class PostObjectsConnectionOrderbyInput
    {
        /**
         * Register the PostObjectsConnectionOrderbyInput Input
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class UsersConnectionOrderbyInput
    {
        /**
         * Register the UsersConnectionOrderbyInput Input
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
}
namespace WPGraphQL\Type\InterfaceType {
    /**
     * Class CommenterInterface
     *
     * @package WPGraphQL\Type\InterfaceType
     */
    class Commenter
    {
        /**
         * Register the Commenter Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class Connection
    {
        /**
         * Register the Connection Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    class ContentNode
    {
        /**
         * Adds the ContentNode Type to the WPGraphQL Registry
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class ContentTemplate
    {
        /**
         * Register the ContentTemplate Interface
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Register individual GraphQL objects for supported theme templates.
         *
         * @return void
         */
        public static function register_content_template_types()
        {
        }
    }
    /**
     * Class DatabaseIdentifier
     *
     * @package WPGraphQL\Type\InterfaceType
     */
    class DatabaseIdentifier
    {
        /**
         * Register the DatabaseIdentifier Interface.
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class Edge
    {
        /**
         * Register the Connection Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    /**
     * Class EnqueuedAsset
     *
     * @package WPGraphQL\Type
     */
    class EnqueuedAsset
    {
        /**
         * Register the Enqueued Script Type
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL Type Registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    /**
     * Class HierarchicalContentNode
     *
     * @package WPGraphQL\Type\InterfaceType
     */
    class HierarchicalContentNode
    {
        /**
         * Register the HierarchicalContentNode Interface Type
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    /**
     * Class HierarchicalNode
     *
     * @package WPGraphQL\Type\InterfaceType
     */
    class HierarchicalNode
    {
        /**
         * Register the HierarchicalNode Interface Type
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    /**
     * Class HierarchicalTermNode
     *
     * @package WPGraphQL\Type\InterfaceType
     */
    class HierarchicalTermNode
    {
        /**
         * Register the HierarchicalTermNode Interface Type
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    class MenuItemLinkable
    {
        /**
         * Registers the MenuItemLinkable Interface Type
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry Instance of the WPGraphQL Type Registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    class Node
    {
        /**
         * Register the Node interface
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class NodeWithAuthor
    {
        /**
         * Registers the NodeWithAuthor Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithComments
    {
        /**
         * Registers the NodeWithComments Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithContentEditor
    {
        /**
         * Registers the NodeWithContentEditor Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithExcerpt
    {
        /**
         * Registers the NodeWithExcerpt Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithFeaturedImage
    {
        /**
         * Registers the NodeWithFeaturedImage Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithPageAttributes
    {
        /**
         * Registers the NodeWithPageAttributes Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithRevisions
    {
        /**
         * Registers the NodeWithRevisions Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithTemplate
    {
        /**
         * Registers the NodeWithTemplate Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithTitle
    {
        /**
         * Registers the NodeWithTitle Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class NodeWithTrackbacks
    {
        /**
         * Registers the NodeWithTrackbacks Type to the Schema
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class OneToOneConnection
    {
        /**
         * Register the Connection Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    class PageInfo
    {
        /**
         * Register the PageInfo Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
        /**
         * Get the fields for the PageInfo Type
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_fields(): array
        {
        }
    }
    class Previewable
    {
        /**
         * Adds the Previewable Type to the WPGraphQL Registry
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry): void
        {
        }
    }
    class TermNode
    {
        /**
         * Register the TermNode Interface
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return void
         * @throws \Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class UniformResourceIdentifiable
    {
        /**
         * Registers the UniformResourceIdentifiable Interface to the Schema.
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace WPGraphQL\Type\ObjectType {
    class Avatar
    {
        /**
         * Register the Avatar Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class Comment
     *
     * @package WPGraphQL\Type\Object
     */
    class Comment
    {
        /**
         * Register Comment Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class CommentAuthor
    {
        /**
         * Register the CommentAuthor Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class ContentType
    {
        /**
         * Register the ContentType Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class EnqueuedScript
     *
     * @package WPGraphQL\Type\Object
     */
    class EnqueuedScript
    {
        /**
         * Register the EnqueuedScript Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class EnqueuedStylesheet
     *
     * @package WPGraphQL\Type\Object
     */
    class EnqueuedStylesheet
    {
        /**
         * Register the EnqueuedStylesheet Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MediaDetails
    {
        /**
         * Register the MediaDetails type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class MediaItemMeta
     *
     * @package WPGraphQL\Type\ObjectType
     */
    class MediaItemMeta
    {
        /**
         * Register the MediaItemMeta Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MediaSize
    {
        /**
         * Register the MediaSize
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class Menu
    {
        /**
         * Register the Menu object type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class MenuItem
    {
        /**
         * Register the MenuItem Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class Plugin
     *
     * @package WPGraphQL\Type\Object
     */
    class Plugin
    {
        /**
         * Registers the Plugin Type to the Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class PostTypeLabelDetails
     *
     * @package WPGraphQL\Type\Object
     */
    class PostTypeLabelDetails
    {
        /**
         * Register the PostTypeLabelDetails type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class RootMutation
    {
        /**
         * Register RootMutation type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class RootQuery
     *
     * @package WPGraphQL\Type\Object
     */
    class RootQuery
    {
        /**
         * Register the RootQuery type
         *
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Register RootQuery fields for Post Objects of supported post types
         *
         * @return void
         */
        public static function register_post_object_fields()
        {
        }
        /**
         * Register RootQuery fields for Term Objects of supported taxonomies
         *
         * @return void
         */
        public static function register_term_object_fields()
        {
        }
    }
    class SettingGroup
    {
        /**
         * Register each settings group to the GraphQL Schema
         *
         * @param string                           $group_name    The name of the setting group
         * @param string                           $group         The settings group config
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return string|null
         * @throws \Exception
         */
        public static function register_settings_group(string $group_name, string $group, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Given the name of a registered settings group, retrieve GraphQL fields for the group
         *
         * @param string                           $group_name Name of the settings group to retrieve fields for
         * @param string                           $group      The settings group config
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>>|null
         */
        public static function get_settings_group_fields(string $group_name, string $group, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    /**
     * Class Settings
     *
     * @package WPGraphQL\Type\Object
     */
    class Settings
    {
        /**
         * Registers a Settings Type with fields for all settings based on settings
         * registered using the core register_setting API
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Returns an array of fields for all settings based on the `register_setting` WordPress API
         *
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The WPGraphQL TypeRegistry
         *
         * @return array<string,array<string,mixed>>
         */
        public static function get_fields(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class Taxonomy
    {
        /**
         * Register the Taxonomy type to the GraphQL Schema
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class Theme
     *
     * @package WPGraphQL\Type\Object
     */
    class Theme
    {
        /**
         * Register the Theme Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    /**
     * Class User
     *
     * @package WPGraphQL\Type\Object
     */
    class User
    {
        /**
         * Registers the User type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
    class UserRole
    {
        /**
         * Register the UserRole Type
         *
         * @return void
         */
        public static function register_type()
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPConnectionType
     *
     * @package WPGraphQL\Type
     */
    class WPConnectionType
    {
        /**
         * Configuration for how auth should be handled on the connection field
         *
         * @var array<string,mixed>
         */
        protected $auth;
        /**
         * The config for the connection
         *
         * @var array<string,mixed>
         */
        protected $config;
        /**
         * The args configured for the connection
         *
         * @var array<string,array<string,mixed>>
         */
        protected $connection_args;
        /**
         * The fields to show on the connection
         *
         * @var array<string,mixed>
         */
        protected $connection_fields;
        /**
         * @var string[]|null
         */
        protected $connection_interfaces;
        /**
         * The name of the connection
         *
         * @var mixed|string
         */
        protected $connection_name;
        /**
         * The fields to expose on the edge of the connection
         *
         * @var array<string,array<string,mixed>>
         */
        protected $edge_fields;
        /**
         * The name of the field the connection will be exposed as
         *
         * @var string
         */
        protected $from_field_name;
        /**
         * The name of the GraphQL Type the connection stems from
         *
         * @var string
         */
        protected $from_type;
        /**
         * Whether the connection is a one-to-one connection (default is false)
         *
         * @var bool
         */
        protected $one_to_one;
        /**
         * The Query Class that is used to resolve the connection.
         *
         * @var string
         */
        protected $query_class;
        /**
         * The resolver function to resolve the connection
         *
         * @var callable(mixed $root,array<string,mixed> $args,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info):mixed
         */
        protected $resolve_connection;
        /**
         * @var mixed|null
         */
        protected $resolve_cursor;
        /**
         * Whether to  include and generate the default GraphQL interfaces on the connection Object types.
         *
         * @var bool
         */
        protected $include_default_interfaces;
        /**
         * The name of the GraphQL Type the connection connects to
         *
         * @var string
         */
        protected $to_type;
        /**
         * The WPGraphQL TypeRegistry
         *
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        protected $type_registry;
        /**
         * The where args for the connection
         *
         * @var array<string,array<string,mixed>>
         */
        protected $where_args = [];
        /**
         * WPConnectionType constructor.
         *
         * @param array<string,mixed>              $config        The config array for the connection
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry Instance of the WPGraphQL Type Registry
         *
         * @throws \Exception
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Validates that essential key/value pairs are passed to the connection config.
         *
         * @param array<string,mixed> $config The config array for the connection.
         *
         * @throws \GraphQL\Error\UserError If the config is invalid.
         */
        protected function validate_config(array $config): void
        {
        }
        /**
         * Get edge interfaces
         *
         * @param string[] $interfaces Array of interfaces to add to the edge.
         *
         * @return string[]
         */
        protected function get_edge_interfaces(array $interfaces = []): array
        {
        }
        /**
         * Utility method that formats the connection name given the name of the from Type and the to
         * Type
         *
         * @param string $from_type        Name of the Type the connection is coming from
         * @param string $to_type          Name of the Type the connection is going to
         * @param string $from_field_name  Acts as an alternative "toType" if connection type already defined using $to_type.
         */
        public function get_connection_name(string $from_type, string $to_type, string $from_field_name): string
        {
        }
        /**
         * If the connection includes connection args in the config, this registers the input args
         * for the connection
         *
         * @throws \Exception
         */
        protected function register_connection_input(): void
        {
        }
        /**
         * Registers the One to One Connection Edge type to the Schema
         *
         * @throws \Exception
         */
        protected function register_one_to_one_connection_edge_type(): void
        {
        }
        /**
         * Registers the PageInfo type for the connection
         *
         * @throws \Exception
         */
        public function register_connection_page_info_type(): void
        {
        }
        /**
         * Registers the Connection Edge type to the Schema
         *
         * @throws \Exception
         */
        protected function register_connection_edge_type(): void
        {
        }
        /**
         * Registers the Connection Type to the Schema
         *
         * @throws \Exception
         */
        protected function register_connection_type(): void
        {
        }
        /**
         * Returns fields to be used on the connection
         *
         * @return array<string,array<string,mixed>>
         */
        protected function get_connection_fields(): array
        {
        }
        /**
         * Get the args used for pagination on connections
         *
         * @return array<string,array<string,mixed>>
         */
        protected function get_pagination_args(): array
        {
        }
        /**
         * Registers the connection in the Graph
         *
         * @throws \Exception
         */
        public function register_connection_field(): void
        {
        }
        /**
         * @throws \Exception
         */
        public function register_connection_interfaces(): void
        {
        }
        /**
         * Registers the connection Types and field to the Schema.
         *
         * @todo change to 'Protected'. This is public for now to allow for backwards compatibility.
         *
         * @throws \Exception
         */
        public function register_connection(): void
        {
        }
        /**
         * Checks whether the connection should be registered to the Schema.
         */
        protected function should_register(): bool
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * export type InputType =
     * | ScalarType
     * | EnumType
     * | InputObjectType
     * | ListOfType<InputType>
     * | NonNull<
     * | ScalarType
     * | EnumType
     * | InputObjectType
     * | ListOfType<InputType>,
     * >;.
     */
    interface InputType
    {
    }
    /*
    GraphQLScalarType |
    GraphQLObjectType |
    GraphQLInterfaceType |
    GraphQLUnionType |
    GraphQLEnumType |
    GraphQLList |
    GraphQLNonNull;
    */
    interface OutputType
    {
    }
    /*
    export type GraphQLLeafType =
    GraphQLScalarType |
    GraphQLEnumType;
    */
    interface LeafType
    {
        /**
         * Serializes an internal value to include in a response.
         *
         * Should throw an exception on invalid values.
         *
         * @param mixed $value
         *
         * @throws SerializationError
         *
         * @return mixed
         */
        public function serialize($value);
        /**
         * Parses an externally provided value (query variable) to use as an input.
         *
         * Should throw an exception with a client-friendly message on invalid values, @see ClientAware.
         *
         * @param mixed $value
         *
         * @throws Error
         *
         * @return mixed
         */
        public function parseValue($value);
        /**
         * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
         *
         * Should throw an exception with a client-friendly message on invalid value nodes, @see ClientAware.
         *
         * @param ValueNode&Node $valueNode
         * @param array<string, mixed>|null $variables
         *
         * @throws Error
         *
         * @return mixed
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null);
    }
    /*
    export type GraphQLNullableType =
     | GraphQLScalarType
     | GraphQLObjectType
     | GraphQLInterfaceType
     | GraphQLUnionType
     | GraphQLEnumType
     | GraphQLInputObjectType
     | GraphQLList<any>;
    */
    interface NullableType
    {
    }
    /**
     * export type NamedType =
     * | ScalarType
     * | ObjectType
     * | InterfaceType
     * | UnionType
     * | EnumType
     * | InputObjectType;.
     *
     * @property string $name
     * @property string|null $description
     * @property (Node&TypeDefinitionNode)|null $astNode
     * @property array<Node&TypeExtensionNode> $extensionASTNodes
     */
    interface NamedType
    {
        /** @throws Error */
        public function assertValid(): void;
        /** Is this type a built-in type? */
        public function isBuiltInType(): bool;
        public function name(): string;
        public function description(): ?string;
        /** @return (Node&TypeDefinitionNode)|null */
        public function astNode(): ?\GraphQL\Language\AST\Node;
        /** @return array<Node&TypeExtensionNode> */
        public function extensionASTNodes(): array;
    }
    /**
     * Registry of standard GraphQL types and base class for all other types.
     */
    abstract class Type implements \JsonSerializable
    {
        public const INT = 'Int';
        public const FLOAT = 'Float';
        public const STRING = 'String';
        public const BOOLEAN = 'Boolean';
        public const ID = 'ID';
        public const STANDARD_TYPE_NAMES = [self::INT, self::FLOAT, self::STRING, self::BOOLEAN, self::ID];
        public const BUILT_IN_TYPE_NAMES = [...self::STANDARD_TYPE_NAMES, ...\GraphQL\Type\Introspection::TYPE_NAMES];
        /** @var array<string, ScalarType>|null */
        protected static ?array $standardTypes;
        /** @var array<string, Type&NamedType>|null */
        protected static ?array $builtInTypes;
        /**
         * Returns the registered or default standard Int type.
         *
         * @api
         */
        public static function int(): \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * Returns the registered or default standard Float type.
         *
         * @api
         */
        public static function float(): \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * Returns the registered or default standard String type.
         *
         * @api
         */
        public static function string(): \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * Returns the registered or default standard Boolean type.
         *
         * @api
         */
        public static function boolean(): \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * Returns the registered or default standard ID type.
         *
         * @api
         */
        public static function id(): \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * Wraps the given type in a list type.
         *
         * @template T of Type
         *
         * @param T|callable():T $type
         *
         * @return ListOfType<T>
         *
         * @api
         */
        public static function listOf($type): \GraphQL\Type\Definition\ListOfType
        {
        }
        /**
         * Wraps the given type in a non-null type.
         *
         * @param NonNull|(NullableType&Type)|callable():(NullableType&Type) $type
         *
         * @api
         */
        public static function nonNull($type): \GraphQL\Type\Definition\NonNull
        {
        }
        /**
         * Returns all builtin in types including base scalar and introspection types.
         *
         * @return array<string, Type&NamedType>
         */
        public static function builtInTypes(): array
        {
        }
        /**
         * Returns all builtin scalar types.
         *
         * @return array<string, ScalarType>
         */
        public static function getStandardTypes(): array
        {
        }
        /**
         * Allows partially or completely overriding the standard types.
         *
         * @param array<ScalarType> $types
         *
         * @throws InvariantViolation
         */
        public static function overrideStandardTypes(array $types): void
        {
        }
        /**
         * Determines if the given type is an input type.
         *
         * @param mixed $type
         *
         * @api
         */
        public static function isInputType($type): bool
        {
        }
        /**
         * Returns the underlying named type of the given type.
         *
         * @return (Type&NamedType)|null
         *
         * @phpstan-return ($type is null ? null : Type&NamedType)
         *
         * @api
         */
        public static function getNamedType(?\GraphQL\Type\Definition\Type $type): ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * Determines if the given type is an output type.
         *
         * @param mixed $type
         *
         * @api
         */
        public static function isOutputType($type): bool
        {
        }
        /**
         * Determines if the given type is a leaf type.
         *
         * @param mixed $type
         *
         * @api
         */
        public static function isLeafType($type): bool
        {
        }
        /**
         * Determines if the given type is a composite type.
         *
         * @param mixed $type
         *
         * @api
         */
        public static function isCompositeType($type): bool
        {
        }
        /**
         * Determines if the given type is an abstract type.
         *
         * @param mixed $type
         *
         * @api
         */
        public static function isAbstractType($type): bool
        {
        }
        /**
         * Unwraps a potentially non-null type to return the underlying nullable type.
         *
         * @return Type&NullableType
         *
         * @api
         */
        public static function getNullableType(\GraphQL\Type\Definition\Type $type): \GraphQL\Type\Definition\Type
        {
        }
        abstract public function toString(): string;
        public function __toString(): string
        {
        }
        #[\ReturnTypeWillChange]
        public function jsonSerialize(): string
        {
        }
    }
    /** @see NamedType */
    trait NamedTypeImplementation
    {
        public string $name;
        public ?string $description;
        public function toString(): string
        {
        }
        /** @throws InvariantViolation */
        protected function inferName(): string
        {
        }
        public function isBuiltInType(): bool
        {
        }
        public function name(): string
        {
        }
        public function description(): ?string
        {
        }
    }
    /**
     * @see EnumValueDefinitionNode
     *
     * @phpstan-type PartialEnumValueConfig array{
     *   name?: string,
     *   value?: mixed,
     *   deprecationReason?: string|null,
     *   description?: string|null,
     *   astNode?: EnumValueDefinitionNode|null
     * }
     * @phpstan-type EnumValues iterable<string, PartialEnumValueConfig>|iterable<string, mixed>|iterable<int, string>
     * @phpstan-type EnumTypeConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   values: EnumValues|callable(): EnumValues,
     *   astNode?: EnumTypeDefinitionNode|null,
     *   extensionASTNodes?: array<EnumTypeExtensionNode>|null
     * }
     */
    class EnumType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\LeafType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        public ?\GraphQL\Language\AST\EnumTypeDefinitionNode $astNode;
        /** @var array<EnumTypeExtensionNode> */
        public array $extensionASTNodes;
        /** @phpstan-var EnumTypeConfig */
        public array $config;
        /**
         * @phpstan-param EnumTypeConfig $config
         *
         * @throws InvariantViolation
         */
        public function __construct(array $config)
        {
        }
        /** @throws InvariantViolation */
        public function getValue(string $name): ?\GraphQL\Type\Definition\EnumValueDefinition
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, EnumValueDefinition>
         */
        public function getValues(): array
        {
        }
        /**
         * @throws \InvalidArgumentException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        public function serialize($value)
        {
        }
        /**
         * @throws Error
         * @throws InvariantViolation
         */
        public function parseValue($value)
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         * @throws InvariantViolation
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
        /**
         * @throws Error
         * @throws InvariantViolation
         */
        public function assertValid(): void
        {
        }
        /** @throws InvariantViolation */
        protected function didYouMean(string $unknownValue): ?string
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\EnumTypeDefinitionNode
        {
        }
        /** @return array<EnumTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPEnumType
     *
     * EnumTypes should extend this class to have filters and sorting applied, etc.
     *
     * @package WPGraphQL\Type
     *
     * phpcs:disable -- For phpstan type hinting
     * @phpstan-import-type PartialEnumValueConfig from \GraphQL\Type\Definition\EnumType
     * @phpstan-import-type EnumValues from \GraphQL\Type\Definition\EnumType
     *
     * @phpstan-type PartialWPEnumValueConfig array{
     *   name?: string,
     *   value?: mixed,
     *   deprecationReason?: string|callable():string|null,
     *   description?: string|callable():string|null,
     *   astNode?: \GraphQL\Language\AST\EnumValueDefinitionNode|null
     * }
     * @phpstan-type WPEnumTypeConfig array{
     *  name: string,
     *  description?: string|null,
     *  values: array<string, PartialWPEnumValueConfig>,
     *  astNode?: \GraphQL\Language\AST\EnumTypeDefinitionNode|null,
     *  extensionASTNodes?: array<\GraphQL\Language\AST\EnumTypeExtensionNode>|null,
     *  kind?:'enum'|null,
     * }
     * phpcs:enable
     */
    class WPEnumType extends \GraphQL\Type\Definition\EnumType
    {
        /**
         * WPEnumType constructor.
         *
         * @param array<string,mixed> $config
         * @phpstan-param WPEnumTypeConfig $config
         */
        public function __construct($config)
        {
        }
        /**
         * Generate a safe / sanitized Enum value from a string.
         *
         * @param  string $value Enum value.
         * @return string
         */
        public static function get_safe_name(string $value)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * @phpstan-import-type UnnamedInputObjectFieldConfig from InputObjectField
     *
     * @phpstan-type EagerFieldConfig InputObjectField|(Type&InputType)|UnnamedInputObjectFieldConfig
     * @phpstan-type LazyFieldConfig callable(): EagerFieldConfig
     * @phpstan-type FieldConfig EagerFieldConfig|LazyFieldConfig
     * @phpstan-type ParseValueFn callable(array<string, mixed>): mixed
     * @phpstan-type InputObjectConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   isOneOf?: bool|null,
     *   fields: iterable<FieldConfig>|callable(): iterable<FieldConfig>,
     *   parseValue?: ParseValueFn|null,
     *   astNode?: InputObjectTypeDefinitionNode|null,
     *   extensionASTNodes?: array<InputObjectTypeExtensionNode>|null
     * }
     */
    class InputObjectType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        public bool $isOneOf;
        public ?\GraphQL\Language\AST\InputObjectTypeDefinitionNode $astNode;
        /** @var array<InputObjectTypeExtensionNode> */
        public array $extensionASTNodes;
        /** @phpstan-var InputObjectConfig */
        public array $config;
        /**
         * @phpstan-param InputObjectConfig $config
         *
         * @throws InvariantViolation
         * @throws InvariantViolation
         */
        public function __construct(array $config)
        {
        }
        /** @throws InvariantViolation */
        public function getField(string $name): \GraphQL\Type\Definition\InputObjectField
        {
        }
        /** @throws InvariantViolation */
        public function findField(string $name): ?\GraphQL\Type\Definition\InputObjectField
        {
        }
        /** @throws InvariantViolation */
        public function hasField(string $name): bool
        {
        }
        /** Returns true if this is a oneOf input object type. */
        public function isOneOf(): bool
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<string, InputObjectField>
         */
        public function getFields(): array
        {
        }
        /** @throws InvariantViolation */
        protected function initializeFields(): void
        {
        }
        /**
         * @param string|int $nameOrIndex
         *
         * @phpstan-param FieldConfig $field
         *
         * @throws InvariantViolation
         */
        protected function initializeField($nameOrIndex, $field): void
        {
        }
        /**
         * Parses an externally provided value (query variable) to use as an input.
         *
         * Should throw an exception with a client-friendly message on invalid values, @see ClientAware.
         *
         * @param array<string, mixed> $value
         *
         * @return mixed
         */
        public function parseValue(array $value)
        {
        }
        /**
         * Validates type config and throws if one of the type options is invalid.
         * Note: this method is shallow, it won't validate object fields and their arguments.
         *
         * @throws Error
         * @throws InvariantViolation
         */
        public function assertValid(): void
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\InputObjectTypeDefinitionNode
        {
        }
        /** @return array<InputObjectTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPInputObjectType
     *
     * Input types should extend this class to take advantage of the helper methods for formatting
     * and adding consistent filters.
     *
     * @phpstan-import-type InputObjectConfig from \GraphQL\Type\Definition\InputObjectType
     * @phpstan-import-type FieldConfig from \GraphQL\Type\Definition\InputObjectType
     *
     * @package WPGraphQL\Type
     * @since 0.0.5
     */
    class WPInputObjectType extends \GraphQL\Type\Definition\InputObjectType
    {
        /**
         * WPInputObjectType constructor.
         *
         * @param InputObjectConfig                $config The Config to set up an Input Type
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The TypeRegistry instance
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Get the fields for the input type
         *
         * @param array<string,mixed>              $config
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         * @return array<string,mixed>
         *
         * @since 2.3.0
         */
        protected function get_fields(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry): array
        {
        }
        /**
         * Prepare_fields
         *
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array<string,array<string,mixed>> $fields
         * @param string                            $type_name
         * @param array<string,mixed>               $config
         * @param \WPGraphQL\Registry\TypeRegistry  $type_registry
         * @return array<string,array<string,mixed>>
         *
         * @phpstan-param array<string,FieldConfig> $fields
         * @phpstan-return array<string,FieldConfig>
         * @since 0.0.5
         */
        public function prepare_fields(array $fields, string $type_name, array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Validates type config and throws if one of type options is invalid.
         *
         * This method is overridden from the parent GraphQL\Type\Definition\InputObjectType class
         * to support WPGraphQL's filter system. The parent implementation only accepts iterables
         * for fields, but WPGraphQL's filters (like graphql_input_fields and graphql_{type}_fields)
         * might return a single InputObjectField instance. This override allows for both iterables
         * and single InputObjectField instances to be valid field values.
         *
         * @throws \GraphQL\Error\InvariantViolation
         */
        public function assertValid(): void
        {
        }
    }
    /**
     * Trait WPInterfaceTrait
     *
     * This Trait includes methods to help Interfaces and ObjectTypes ensure they implement
     * the proper inherited interfaces
     *
     * @package WPGraphQL\Type
     */
    trait WPInterfaceTrait
    {
        /**
         * Given an array of interfaces, this gets the Interfaces the Type should implement including inherited interfaces.
         *
         * @return \GraphQL\Type\Definition\InterfaceType[]
         */
        protected function get_implemented_interfaces(): array
        {
        }
        /**
         * Resolves a single interface configuration entry to an InterfaceType instance.
         * Handles validation and debugging messages, using early returns for clarity.
         *
         * @param mixed  $type The interface entry from the config (string name or InterfaceType instance).
         * @param string $implementing_type_name The name of the type that is implementing this interface (for debug messages and self-implementation check).
         * @return \GraphQL\Type\Definition\InterfaceType|null The resolved InterfaceType or null if invalid/skipped.
         */
        private function maybe_resolve_interface($type, string $implementing_type_name): ?\GraphQL\Type\Definition\InterfaceType
        {
        }
        /**
         * Adds interfaces implemented by the given InterfaceType to the target array.
         * Handles recursive collection of interfaces, avoiding duplicates.
         *
         * @param \GraphQL\Type\Definition\InterfaceType                $interface_type     The interface whose implemented interfaces should be added.
         * @param array<string, \GraphQL\Type\Definition\InterfaceType> &$target_interfaces The array to add interfaces to (passed by reference).
         *
         * @@param-out array<string, \GraphQL\Type\Definition\InterfaceType> $target_interfaces The array to add interfaces to (passed by reference).
         */
        private function resolve_inherited_interfaces(\GraphQL\Type\Definition\InterfaceType $interface_type, array &$target_interfaces): void
        {
        }
        /**
         * Returns the fields for a Type, applying any missing fields defined on interfaces implemented on the type
         *
         * @param array<string,mixed>              $config
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @return array<string, array<string,mixed>>
         * @throws \Exception
         */
        protected function get_fields(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry): array
        {
        }
        /**
         * Get the fields from the implemented interfaces.
         *
         * @param \WPGraphQL\Registry\TypeRegistry $registry The TypeRegistry instance.
         *
         * @return array<string,array<string,mixed>>
         */
        private function get_fields_from_implemented_interfaces(\WPGraphQL\Registry\TypeRegistry $registry): array
        {
        }
        /**
         * Inherit missing field configs from the interface.
         *
         * @param string                            $field_name       The field name.
         * @param array<string,mixed>               $field            The field config.
         * @param array<string,array<string,mixed>> $interface_fields The fields from the interface.
         *
         * @return ?array<string,mixed> The field config with inherited values. Null if the field type cannot be determined.
         */
        private function inherit_field_config_from_interface(string $field_name, array $field, array $interface_fields): ?array
        {
        }
        /**
         * Merge the field args from the field and the interface.
         *
         * @param string                            $field_name     The field name.
         * @param array<string,array<string,mixed>> $field_args     The field args.
         * @param array<string,array<string,mixed>> $interface_args The interface args.
         *
         * @return array<string,array<string,mixed>>
         */
        private function merge_field_args(string $field_name, array $field_args, array $interface_args): array
        {
        }
        /**
         * Given a type it will return a string representation of the type.
         *
         * This is used for optimistic comparison of the arg types using strings.
         *
         * @param string|array<string,mixed>|callable|\GraphQL\Type\Definition\Type $type The type to normalize.
         */
        private function normalize_type_name($type): string
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * @phpstan-type ResolveTypeReturn ObjectType|string|callable(): (ObjectType|string|null)|Deferred|null
     * @phpstan-type ResolveType callable(mixed $objectValue, mixed $context, ResolveInfo $resolveInfo): ResolveTypeReturn
     */
    interface AbstractType
    {
        /**
         * Resolves the concrete ObjectType for the given value.
         *
         * @param mixed $objectValue The resolved value for the object type
         * @param mixed $context The context that was passed to GraphQL::execute()
         *
         * @return ObjectType|string|callable|Deferred|null
         *
         * @phpstan-return ResolveTypeReturn
         */
        public function resolveType($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info);
    }
    /*
    export type GraphQLCompositeType =
    GraphQLObjectType |
    GraphQLInterfaceType |
    GraphQLUnionType;
    */
    interface CompositeType
    {
    }
    interface HasFieldsType
    {
        /** @throws InvariantViolation */
        public function getField(string $name): \GraphQL\Type\Definition\FieldDefinition;
        public function hasField(string $name): bool;
        public function findField(string $name): ?\GraphQL\Type\Definition\FieldDefinition;
        /**
         * @throws InvariantViolation
         *
         * @return array<string, FieldDefinition>
         */
        public function getFields(): array;
        /**
         * @throws InvariantViolation
         *
         * @return array<string, FieldDefinition>
         */
        public function getVisibleFields(): array;
        /**
         * Get all field names, including only visible fields.
         *
         * @throws InvariantViolation
         *
         * @return array<int, string>
         */
        public function getFieldNames(): array;
    }
    /**
     * export type GraphQLImplementingType =
     * GraphQLObjectType |
     * GraphQLInterfaceType;.
     */
    interface ImplementingType
    {
        public function implementsInterface(\GraphQL\Type\Definition\InterfaceType $interfaceType): bool;
        /** @return array<int, InterfaceType> */
        public function getInterfaces(): array;
    }
    /**
     * @see HasFieldsType
     */
    trait HasFieldsTypeImplementation
    {
        /**
         * Lazily initialized.
         *
         * @var array<string, FieldDefinition|UnresolvedFieldDefinition>
         */
        private array $fields;
        /** @throws InvariantViolation */
        private function initializeFields(): void
        {
        }
        /** @throws InvariantViolation */
        public function getField(string $name): \GraphQL\Type\Definition\FieldDefinition
        {
        }
        /** @throws InvariantViolation */
        public function findField(string $name): ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        /** @throws InvariantViolation */
        public function hasField(string $name): bool
        {
        }
        /** @throws InvariantViolation */
        public function getFields(): array
        {
        }
        public function getVisibleFields(): array
        {
        }
        /** @throws InvariantViolation */
        public function getFieldNames(): array
        {
        }
    }
    /**
     * @see ImplementingType
     */
    trait ImplementingTypeImplementation
    {
        /**
         * Lazily initialized.
         *
         * @var array<int, InterfaceType>
         */
        private array $interfaces;
        public function implementsInterface(\GraphQL\Type\Definition\InterfaceType $interfaceType): bool
        {
        }
        /** @return array<int, InterfaceType> */
        public function getInterfaces(): array
        {
        }
        private function initializeInterfaces(): void
        {
        }
        /** @throws InvariantViolation */
        protected function assertValidInterfaces(): void
        {
        }
    }
    /**
     * @phpstan-import-type ResolveType from AbstractType
     * @phpstan-import-type FieldsConfig from FieldDefinition
     *
     * @phpstan-type InterfaceTypeReference InterfaceType|callable(): InterfaceType
     * @phpstan-type InterfaceConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   fields: FieldsConfig,
     *   interfaces?: iterable<InterfaceTypeReference>|callable(): iterable<InterfaceTypeReference>,
     *   resolveType?: ResolveType|null,
     *   astNode?: InterfaceTypeDefinitionNode|null,
     *   extensionASTNodes?: array<InterfaceTypeExtensionNode>|null
     * }
     */
    class InterfaceType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\AbstractType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\HasFieldsType, \GraphQL\Type\Definition\NamedType, \GraphQL\Type\Definition\ImplementingType
    {
        use \GraphQL\Type\Definition\HasFieldsTypeImplementation;
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        use \GraphQL\Type\Definition\ImplementingTypeImplementation;
        public ?\GraphQL\Language\AST\InterfaceTypeDefinitionNode $astNode;
        /** @var array<InterfaceTypeExtensionNode> */
        public array $extensionASTNodes;
        /** @phpstan-var InterfaceConfig */
        public array $config;
        /**
         * @phpstan-param InterfaceConfig $config
         *
         * @throws InvariantViolation
         */
        public function __construct(array $config)
        {
        }
        /**
         * @param mixed $type
         *
         * @throws InvariantViolation
         */
        public static function assertInterfaceType($type): self
        {
        }
        public function resolveType($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @throws Error
         * @throws InvariantViolation
         */
        public function assertValid(): void
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\InterfaceTypeDefinitionNode
        {
        }
        /** @return array<InterfaceTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPInterface
     *
     * @phpstan-import-type InterfaceConfig from \GraphQL\Type\Definition\InterfaceType
     */
    class WPInterfaceType extends \GraphQL\Type\Definition\InterfaceType
    {
        use \WPGraphQL\Type\WPInterfaceTrait;
        /**
         * Instance of the TypeRegistry as an Interface needs knowledge of available Types
         *
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * @var array<string, array<string, mixed>>
         */
        public $fields;
        /**
         * @var \GraphQL\Type\Definition\InterfaceType[]
         */
        public $interfaces = [];
        /**
         * WPInterfaceType constructor.
         *
         * @param array<string,mixed>              $config The configuration array for setting up the WPInterfaceType.
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @phpstan-param InterfaceConfig $config
         *
         * @throws \Exception
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Get the interfaces implemented by the ObjectType
         *
         * @return \GraphQL\Type\Definition\InterfaceType[]
         */
        public function getInterfaces(): array
        {
        }
        /**
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array<string,array<string,mixed>> $fields The array of fields for the object config
         * @param string                            $type_name The name of the type to prepare fields for
         * @param array<string,mixed>               $config    The config for the Object Type
         * @return array<string,array<string,mixed>>
         * @since 0.0.5
         */
        public function prepare_fields(array $fields, string $type_name, array $config): array
        {
        }
    }
    /**
     * Class WPMutationType
     *
     * @package WPGraphQL\Type
     */
    class WPMutationType
    {
        /**
         * Configuration for how auth should be handled on the connection field
         *
         * @var array<string,mixed>
         */
        protected $auth;
        /**
         * The config for the connection
         *
         * @var array<string,mixed>
         */
        protected $config;
        /**
         * The name of the mutation field
         *
         * @var string
         */
        protected $mutation_name;
        /**
         * Whether the user must be authenticated to use the mutation.
         *
         * @var bool
         */
        protected $is_private;
        /**
         * The mutation input field config.
         *
         * @var array<string,array<string,mixed>>
         */
        protected $input_fields;
        /**
         * The mutation output field config.
         *
         * @var array<string,array<string,mixed>>
         */
        protected $output_fields;
        /**
         * The resolver function to resolve the mutation
         *
         * @var callable(mixed $root,array<string,mixed> $args,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info): array<string,mixed>
         */
        protected $resolve_mutation;
        /**
         * The WPGraphQL TypeRegistry
         *
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        protected $type_registry;
        /**
         * WPMutationType constructor.
         *
         * @param array<string,mixed>              $config        The config array for the mutation
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry Instance of the WPGraphQL Type Registry
         *
         * @throws \Exception
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Validates that essential key/value pairs are passed to the connection config.
         *
         * @param array<string,mixed> $config The config array for the mutation
         */
        protected function is_config_valid(array $config): bool
        {
        }
        /**
         * Gets the mutation input fields.
         *
         * @return array<string,array<string,mixed>>
         */
        protected function get_input_fields(): array
        {
        }
        /**
         * Gets the mutation output fields.
         *
         * @return array<string,array<string,mixed>>
         */
        protected function get_output_fields(): array
        {
        }
        /**
         * Gets the resolver callable for the mutation.
         *
         * @return callable(mixed $root,array<string,mixed> $args,\WPGraphQL\AppContext $context,\GraphQL\Type\Definition\ResolveInfo $info): array<string,mixed>
         */
        protected function get_resolver(): callable
        {
        }
        /**
         * Registers the input args for the mutation.
         */
        protected function register_mutation_input(): void
        {
        }
        /**
         * Registers the payload type to the Schema.
         */
        protected function register_mutation_payload(): void
        {
        }
        /**
         * Registers the mutation in the Graph.
         *
         * @throws \Exception
         */
        protected function register_mutation_field(): void
        {
        }
        /**
         * Registers the Mutation Types and field to the Schema.
         *
         * @throws \Exception
         */
        protected function register_mutation(): void
        {
        }
        /**
         * Checks whether the mutation should be registered to the schema.
         */
        protected function should_register(): bool
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * Object Type Definition.
     *
     * Most GraphQL types you define will be object types.
     * Object types have a name, but most importantly describe their fields.
     *
     * Example:
     *
     *     $AddressType = new ObjectType([
     *         'name' => 'Address',
     *         'fields' => [
     *             'street' => GraphQL\Type\Definition\Type::string(),
     *             'number' => GraphQL\Type\Definition\Type::int(),
     *             'formatted' => [
     *                 'type' => GraphQL\Type\Definition\Type::string(),
     *                 'resolve' => fn (AddressModel $address): string => "{$address->number} {$address->street}",
     *             ],
     *         ],
     *     ]);
     *
     * When two types need to refer to each other, or a type needs to refer to
     * itself in a field, you can use a function expression (aka a closure or a
     * thunk) to supply the fields lazily.
     *
     * Example:
     *
     *     $PersonType = null;
     *     $PersonType = new ObjectType([
     *         'name' => 'Person',
     *         'fields' => fn (): array => [
     *             'name' => GraphQL\Type\Definition\Type::string(),
     *             'bestFriend' => $PersonType,
     *         ],
     *     ]);
     *
     * @phpstan-import-type FieldResolver from Executor
     * @phpstan-import-type ArgsMapper from Executor
     *
     * @phpstan-type InterfaceTypeReference InterfaceType|callable(): InterfaceType
     * @phpstan-type ObjectConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   resolveField?: FieldResolver|null,
     *   argsMapper?: ArgsMapper|null,
     *   fields: (callable(): iterable<mixed>)|iterable<mixed>,
     *   interfaces?: iterable<InterfaceTypeReference>|callable(): iterable<InterfaceTypeReference>,
     *   isTypeOf?: (callable(mixed $objectValue, mixed $context, ResolveInfo $resolveInfo): (bool|Deferred|null))|null,
     *   astNode?: ObjectTypeDefinitionNode|null,
     *   extensionASTNodes?: array<ObjectTypeExtensionNode>|null
     * }
     */
    class ObjectType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\HasFieldsType, \GraphQL\Type\Definition\NamedType, \GraphQL\Type\Definition\ImplementingType
    {
        use \GraphQL\Type\Definition\HasFieldsTypeImplementation;
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        use \GraphQL\Type\Definition\ImplementingTypeImplementation;
        public ?\GraphQL\Language\AST\ObjectTypeDefinitionNode $astNode;
        /** @var array<ObjectTypeExtensionNode> */
        public array $extensionASTNodes;
        /**
         * @var callable|null
         *
         * @phpstan-var FieldResolver|null
         */
        public $resolveFieldFn;
        /**
         * @var callable|null
         *
         * @phpstan-var ArgsMapper|null
         */
        public $argsMapper;
        /** @phpstan-var ObjectConfig */
        public array $config;
        /**
         * @phpstan-param ObjectConfig $config
         *
         * @throws InvariantViolation
         */
        public function __construct(array $config)
        {
        }
        /**
         * @param mixed $type
         *
         * @throws InvariantViolation
         */
        public static function assertObjectType($type): self
        {
        }
        /**
         * @param mixed $objectValue The resolved value for the object type
         * @param mixed $context The context that was passed to GraphQL::execute()
         *
         * @return bool|Deferred|null
         */
        public function isTypeOf($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Validates type config and throws if one of the type options is invalid.
         * Note: this method is shallow, it won't validate object fields and their arguments.
         *
         * @throws Error
         * @throws InvariantViolation
         */
        public function assertValid(): void
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\ObjectTypeDefinitionNode
        {
        }
        /** @return array<ObjectTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPObjectType
     *
     * @phpstan-import-type ObjectConfig from \GraphQL\Type\Definition\ObjectType
     *
     * Object Types should extend this class to take advantage of the helper methods
     * and consistent filters.
     *
     * @package WPGraphQL\Type
     * @since   0.0.5
     */
    class WPObjectType extends \GraphQL\Type\Definition\ObjectType
    {
        use \WPGraphQL\Type\WPInterfaceTrait;
        /**
         * Instance of the Type Registry
         *
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * @var array<string, array<string, mixed>>
         */
        public $fields;
        /**
         * @var array<\GraphQL\Type\Definition\InterfaceType>
         */
        public $interfaces = [];
        /**
         * WPObjectType constructor.
         *
         * Sets up a WPObjectType instance with the given configuration and type registry.
         *
         * @param array<string, mixed>             $config The configuration array for setting up the WPObjectType.
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry The type registry to associate with the WPObjectType.
         *
         * @phpstan-param ObjectConfig $config
         *
         * @throws \Exception If there is an error during instantiation.
         * @since 0.0.5
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Get the interfaces implemented by the ObjectType
         *
         * @return \GraphQL\Type\Definition\InterfaceType[]
         */
        public function getInterfaces(): array
        {
        }
        /**
         * Node_interface
         *
         * This returns the node_interface definition allowing
         * WPObjectTypes to easily implement the node_interface
         *
         * @return array<string,mixed>|\WPGraphQL\Type\InterfaceType\Node
         * @since 0.0.5
         */
        public static function node_interface()
        {
        }
        /**
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array<string,mixed> $fields    The array of fields for the object config
         * @param string              $type_name The name of the type to prepare fields for
         * @param array<string,mixed> $config    The config for the Object Type
         *
         * @return array<string,mixed>
         * @since 0.0.5
         */
        public function prepare_fields($fields, $type_name, $config)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * Scalar Type Definition.
     *
     * The leaf values of any request and input values to arguments are
     * Scalars (or Enums) and are defined with a name and a series of coercion
     * functions used to ensure validity.
     *
     * Example:
     *
     * class OddType extends ScalarType
     * {
     *     public $name = 'Odd',
     *     public function serialize($value)
     *     {
     *         return $value % 2 === 1 ? $value : null;
     *     }
     * }
     *
     * @phpstan-type ScalarConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   astNode?: ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<ScalarTypeExtensionNode>|null
     * }
     */
    abstract class ScalarType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\LeafType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        public ?\GraphQL\Language\AST\ScalarTypeDefinitionNode $astNode;
        /** @var array<ScalarTypeExtensionNode> */
        public array $extensionASTNodes;
        /** @phpstan-var ScalarConfig */
        public array $config;
        /**
         * @phpstan-param ScalarConfig $config
         *
         * @throws InvariantViolation
         */
        public function __construct(array $config = [])
        {
        }
        public function assertValid(): void
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\ScalarTypeDefinitionNode
        {
        }
        /** @return array<ScalarTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
    /**
     * @phpstan-type InputCustomScalarConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   serialize?: callable(mixed): mixed,
     *   parseValue: callable(mixed): mixed,
     *   parseLiteral: callable(ValueNode&Node, array<string, mixed>|null): mixed,
     *   astNode?: ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<ScalarTypeExtensionNode>|null
     * }
     * @phpstan-type OutputCustomScalarConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   serialize: callable(mixed): mixed,
     *   parseValue?: callable(mixed): mixed,
     *   parseLiteral?: callable(ValueNode&Node, array<string, mixed>|null): mixed,
     *   astNode?: ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<ScalarTypeExtensionNode>|null
     * }
     * @phpstan-type CustomScalarConfig InputCustomScalarConfig|OutputCustomScalarConfig
     */
    class CustomScalarType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @phpstan-var CustomScalarConfig */
        // @phpstan-ignore-next-line specialize type
        public array $config;
        /**
         * @param array<string, mixed> $config
         *
         * @phpstan-param CustomScalarConfig $config
         */
        public function __construct(array $config)
        {
        }
        public function serialize($value)
        {
        }
        public function parseValue($value)
        {
        }
        /** @throws \Exception */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
        /**
         * @throws Error
         * @throws InvariantViolation
         */
        public function assertValid(): void
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPScalar
     *
     * @package WPGraphQL\Type
     *
     * phpcs:disable -- For phpstan type hinting.
     * @phpstan-import-type CustomScalarConfig from \GraphQL\Type\Definition\CustomScalarType
     *
     * @phpstan-type InputWPScalarConfig array{
     *   name: string,
     *   description?: string|null,
     *   serialize?: callable(mixed): mixed,
     *   parseValue: callable(mixed): mixed,
     *   parseLiteral: callable(\GraphQL\Language\AST\ValueNode&\GraphQL\Language\AST\Node, array<string, mixed>|null): mixed,
     *   astNode?: \GraphQL\Language\AST\ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<\GraphQL\Language\AST\ScalarTypeDefinitionNode>|null,
     *   kind?:'scalar'|null,
     * }
     * @phpstan-type OutputWPScalarConfig array{
     *   name: string,
     *   description?: string|null,
     *   serialize: callable(mixed): mixed,
     *   parseValue?: callable(mixed): mixed,
     *   parseLiteral?: callable(\GraphQL\Language\AST\ValueNode&\GraphQL\Language\AST\Node, array<string, mixed>|null): mixed,
     *   astNode?: \GraphQL\Language\AST\ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<\GraphQL\Language\AST\ScalarTypeDefinitionNode>|null,
     *   kind?:'scalar'|null,
     * }
     * @phpstan-type WPScalarConfig InputWPScalarConfig|OutputWPScalarConfig
     * phpcs:enable
     */
    class WPScalar extends \GraphQL\Type\Definition\CustomScalarType
    {
        /**
         * WPScalar constructor.
         *
         * @param array<string,mixed>              $config
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @phpstan-param WPScalarConfig $config
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * @phpstan-import-type ResolveType from AbstractType
     *
     * @phpstan-type ObjectTypeReference ObjectType|callable(): ObjectType
     * @phpstan-type UnionConfig array{
     *   name?: string|null,
     *   description?: string|null,
     *   types: iterable<ObjectTypeReference>|callable(): iterable<ObjectTypeReference>,
     *   resolveType?: ResolveType|null,
     *   astNode?: UnionTypeDefinitionNode|null,
     *   extensionASTNodes?: array<UnionTypeExtensionNode>|null
     * }
     */
    class UnionType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\AbstractType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        use \GraphQL\Type\Definition\NamedTypeImplementation;
        public ?\GraphQL\Language\AST\UnionTypeDefinitionNode $astNode;
        /** @var array<UnionTypeExtensionNode> */
        public array $extensionASTNodes;
        /** @phpstan-var UnionConfig */
        public array $config;
        /**
         * @phpstan-param UnionConfig $config
         *
         * @throws InvariantViolation
         */
        public function __construct(array $config)
        {
        }
        /** @throws InvariantViolation */
        public function isPossibleType(\GraphQL\Type\Definition\Type $type): bool
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, ObjectType>
         */
        public function getTypes(): array
        {
        }
        public function resolveType($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        public function assertValid(): void
        {
        }
        public function astNode(): ?\GraphQL\Language\AST\UnionTypeDefinitionNode
        {
        }
        /** @return array<UnionTypeExtensionNode> */
        public function extensionASTNodes(): array
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPUnionType
     *
     * @phpstan-import-type UnionConfig from \GraphQL\Type\Definition\UnionType
     *
     * Union Types should extend this class to take advantage of the helper methods
     * and consistent filters.
     *
     * @package WPGraphQL\Type\Union
     * @since   0.0.30
     */
    class WPUnionType extends \GraphQL\Type\Definition\UnionType
    {
        /**
         * @var \WPGraphQL\Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * WPUnionType constructor.
         *
         * @param array<string,mixed>              $config The Config to set up a Union Type
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @phpstan-param UnionConfig|array{typeNames?:array<string>} $config
         *
         * @since 0.0.30
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace WPGraphQL\Utils {
    /**
     * Class DebugLog
     *
     * @package WPGraphQL\Utils
     */
    class DebugLog
    {
        /**
         * The log items.
         *
         * @var array<string,mixed>[]
         */
        protected $logs;
        /**
         * Whether logs are enabled
         *
         * @var bool
         */
        protected $logs_enabled;
        /**
         * DebugLog constructor.
         */
        public function __construct()
        {
        }
        /**
         * Given a message and a config, a log entry is added to the log
         *
         * @template TMessage of mixed|string|mixed[]
         * @template TConfig of array<string,mixed>
         *
         * @param TMessage $message The debug log message
         * @param TConfig  $config Config for the debug log. Set type and any additional information to log
         *
         * @return array<string,array{
         *  type:string,
         *  message:TMessage,
         * }>
         */
        public function add_log_entry($message, $config = [])
        {
        }
        /**
         * Returns the debug log
         *
         * @return array<string,mixed>[]
         */
        public function get_logs()
        {
        }
    }
    /**
     * Class InstrumentSchema
     *
     * @package WPGraphQL\Data
     */
    class InstrumentSchema
    {
        /**
         * @param \GraphQL\Type\Definition\Type $type Instance of the Schema.
         * @param string                        $type_name Name of the Type
         */
        public static function instrument_resolvers(\GraphQL\Type\Definition\Type $type, string $type_name): \GraphQL\Type\Definition\Type
        {
        }
        /**
         * Wrap Fields
         *
         * This wraps fields to provide sanitization on fields output by introspection queries
         * (description/deprecation reason) and provides hooks to resolvers.
         *
         * @param \GraphQL\Type\Definition\FieldDefinition[] $fields    The fields configured for a Type
         * @param string                                     $type_name The Type name
         *
         * @return \GraphQL\Type\Definition\FieldDefinition[]
         */
        protected static function wrap_fields(array $fields, string $type_name)
        {
        }
        /**
         * Check field permissions when resolving. If the check fails, an error will be thrown.
         *
         * This takes into account auth params defined in the Schema
         *
         * @param mixed                                    $source         The source passed down the Resolve Tree
         * @param array<string,mixed>                      $args           The args for the field
         * @param \WPGraphQL\AppContext                    $context        The AppContext passed down the ResolveTree
         * @param \GraphQL\Type\Definition\ResolveInfo     $info           The ResolveInfo passed down the ResolveTree
         * @param ?callable                                $field_resolver The Resolve function for the field
         * @param string                                   $type_name      The name of the type the fields belong to
         * @param string                                   $field_key      The name of the field
         * @param \GraphQL\Type\Definition\FieldDefinition $field          The Field Definition for the resolving field
         *
         * @return void
         *
         * @throws \GraphQL\Error\UserError
         */
        public static function check_field_permissions($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $field_resolver, string $type_name, string $field_key, \GraphQL\Type\Definition\FieldDefinition $field)
        {
        }
    }
    class Preview
    {
        /**
         * This filters the post meta for previews. Since WordPress core does not save meta for
         * revisions this resolves calls to get_post_meta() using the meta of the revisions parent (the
         * published version of the post).
         *
         * For plugins (such as ACF) that do store meta on revisions, the filter
         * "graphql_resolve_revision_meta_from_parent" can be used to opt-out of this default behavior
         * and instead return meta from the revision object instead of the parent.
         *
         * @param mixed       $default_value The default value of the meta
         * @param int         $object_id     The ID of the object the meta is for
         * @param string|null $meta_key      The meta key
         * @param bool|null   $single        Whether the meta is a single value
         *
         * @return mixed
         */
        public static function filter_post_meta_for_previews($default_value, int $object_id, ?string $meta_key = null, ?bool $single = false)
        {
        }
    }
    /**
     * This class is used to identify "keys" relevant to the GraphQL Request.
     *
     * These keys can be used to identify common patterns across documents.
     *
     * A common use case would be for caching a GraphQL request and tagging the cached
     * object with these keys, then later using these keys to evict the cached
     * document.
     *
     * These keys can also be used by loggers to identify patterns, etc.
     *
     * @phpstan-type AnalyzedGraphQLKeys array{
     *  keys: string,
     *  keysLength: int,
     *  keysCount: int,
     *  skippedKeys: string,
     *  skippedKeysSize: int,
     *  skippedKeysCount: int,
     *  skippedTypes: string[]
     * }
     */
    class QueryAnalyzer
    {
        /**
         * @var \WPGraphQL\WPSchema|null
         */
        protected $schema;
        /**
         * Types that are referenced in the query
         *
         * @var string[]
         */
        protected $queried_types = [];
        /**
         * @var string
         */
        protected $root_operation = '';
        /**
         * Models that are referenced in the query
         *
         * @var string[]
         */
        protected $models = [];
        /**
         * Types in the query that are lists
         *
         * @var string[]
         */
        protected $list_types = [];
        /**
         * @var string[]|int[]
         */
        protected $runtime_nodes = [];
        /**
         * @var array<string,int[]|string[]>
         */
        protected $runtime_nodes_by_type = [];
        /**
         * @var string
         */
        protected $query_id;
        /**
         * @var \WPGraphQL\Request
         */
        protected $request;
        /**
         * The character length limit for headers
         *
         * @var int
         */
        protected $header_length_limit;
        /**
         * The keys that were skipped from being returned in the X-GraphQL-Keys header.
         *
         * @var string
         */
        protected $skipped_keys = '';
        /**
         * The GraphQL keys to return in the X-GraphQL-Keys header.
         *
         * @var AnalyzedGraphQLKeys|array{}
         */
        protected $graphql_keys = [];
        /**
         * Track all Types that were queried as a list.
         *
         * @var mixed[]
         */
        protected $queried_list_types = [];
        /**
         * @var ?bool Whether the Query Analyzer is enabled for the specific or not.
         */
        protected $is_enabled_for_query;
        /**
         * @param \WPGraphQL\Request $request The GraphQL request being executed
         */
        public function __construct(\WPGraphQL\Request $request)
        {
        }
        /**
         * Checks whether the Query Analyzer is enabled on the site.
         *
         * @uses `graphql_query_analyzer_enabled` filter.
         */
        public static function is_enabled(): bool
        {
        }
        /**
         * Get the GraphQL Schema.
         * If the schema is not set, it will be set.
         *
         * @throws \Exception
         */
        public function get_schema(): ?\WPGraphQL\WPSchema
        {
        }
        /**
         * Gets the request object.
         */
        public function get_request(): \WPGraphQL\Request
        {
        }
        /**
         * Checks if the Query Analyzer is enabled.
         *
         * @uses `graphql_should_analyze_queries` filter.
         */
        public function is_enabled_for_query(): bool
        {
        }
        /**
         * Initialize the QueryAnalyzer.
         */
        public function init(): void
        {
        }
        /**
         * Determine the keys associated with the GraphQL document being executed
         *
         * @param ?string                         $query     The GraphQL query
         * @param ?string                         $operation The name of the operation
         * @param ?array<string,mixed>            $variables Variables to be passed to your GraphQL request
         * @param \GraphQL\Server\OperationParams $params The Operation Params. This includes any extra params,
         * such as extensions or any other modifications to the request body
         *
         * @throws \Exception
         */
        public function determine_graphql_keys(?string $query, ?string $operation, ?array $variables, \GraphQL\Server\OperationParams $params): void
        {
        }
        /**
         * @return string[]
         */
        public function get_list_types(): array
        {
        }
        /**
         * @return string[]
         */
        public function get_query_types(): array
        {
        }
        /**
         * @return string[]
         */
        public function get_query_models(): array
        {
        }
        /**
         * @return string[]|int[]
         */
        public function get_runtime_nodes(): array
        {
        }
        /**
         * Get the root operation of the query.
         */
        public function get_root_operation(): string
        {
        }
        /**
         * Returns the operation name of the query, if there is one
         */
        public function get_operation_name(): ?string
        {
        }
        /**
         * Get the query id.
         */
        public function get_query_id(): ?string
        {
        }
        /**
         * @param \GraphQL\Type\Definition\Type            $type The Type of field
         * @param \GraphQL\Type\Definition\FieldDefinition $field_def The field definition the type is for
         * @param ?\GraphQL\Type\Definition\CompositeType  $parent_type The Parent Type
         * @param bool                                     $is_list_type Whether the field is a list type field
         *
         * @return \GraphQL\Type\Definition\Type|string|null
         */
        public static function get_wrapped_field_type(\GraphQL\Type\Definition\Type $type, \GraphQL\Type\Definition\FieldDefinition $field_def, $parent_type, bool $is_list_type = false)
        {
        }
        /**
         * Given the Schema and a query string, return a list of GraphQL Types that are being asked for
         * by the query.
         *
         * @param ?\GraphQL\Type\Schema $schema The WPGraphQL Schema
         * @param ?string               $query  The query string
         *
         * @return string[]
         * @throws \GraphQL\Error\SyntaxError|\Exception
         */
        public function set_list_types(?\GraphQL\Type\Schema $schema, ?string $query): array
        {
        }
        /**
         * Given the Schema and a query string, return a list of GraphQL Types that are being asked for
         * by the query.
         *
         * @param ?\GraphQL\Type\Schema $schema The WPGraphQL Schema
         * @param ?string               $query  The query string
         *
         * @return string[]
         * @throws \Exception
         */
        public function set_query_types(?\GraphQL\Type\Schema $schema, ?string $query): array
        {
        }
        /**
         * Given the Schema and a query string, return a list of GraphQL model names that are being
         * asked for by the query.
         *
         * @param ?\GraphQL\Type\Schema $schema The WPGraphQL Schema
         * @param ?string               $query  The query string
         *
         * @return string[]
         * @throws \GraphQL\Error\SyntaxError|\Exception
         */
        public function set_query_models(?\GraphQL\Type\Schema $schema, ?string $query): array
        {
        }
        /**
         * Track the nodes that were resolved by ensuring the Node's model
         * matches one of the models asked for in the query
         *
         * @template T
         *
         * @param T $model The Model to be returned by the loader
         *
         * @return T
         */
        public function track_nodes($model)
        {
        }
        /**
         * Returns graphql keys for use in debugging and headers.
         *
         * @return AnalyzedGraphQLKeys
         */
        public function get_graphql_keys()
        {
        }
        /**
         * Return headers
         *
         * @param array<string,string> $headers The array of headers being returned
         *
         * @return array<string,string>
         */
        public function get_headers(array $headers = []): array
        {
        }
        /**
         * Outputs Query Analyzer data in the extensions response
         *
         * @param mixed|array<string,mixed>|object $response
         * @param \WPGraphQL\WPSchema              $schema         The WPGraphQL Schema
         * @param string|null                      $operation_name The operation name being executed
         * @param string|null                      $request        The GraphQL Request being made
         * @param array<string,mixed>|null         $variables      The variables sent with the request
         *
         * @return mixed|array<string,mixed>|object
         */
        public function show_query_analyzer_in_extensions($response, \WPGraphQL\WPSchema $schema, ?string $operation_name, ?string $request, ?array $variables)
        {
        }
    }
    /**
     * Class QueryLog
     *
     * @package WPGraphQL\Utils
     */
    class QueryLog
    {
        /**
         * Whether Query Logs are enabled
         *
         * @var bool
         */
        protected $query_logs_enabled;
        /**
         * The user role query logs should be limited to
         *
         * @var string
         */
        protected $query_log_user_role;
        /**
         * Initialize Query Logging
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Tell WordPress to start saving queries.
         *
         * NOTE: This will affect all requests, not just GraphQL requests.
         *
         * @return void
         */
        public function init_save_queries()
        {
        }
        /**
         * Determine if the requesting user can see logs
         *
         * @return bool
         */
        public function user_can_see_logs()
        {
        }
        /**
         * Filter the results of the GraphQL Response to include the Query Log
         *
         * @param mixed|array<string,mixed>|object $response
         * @param \WPGraphQL\WPSchema              $schema The WPGraphQL Schema
         * @param string                           $operation_name The operation name being executed
         * @param string                           $request        The GraphQL Request being made
         * @param array<string,mixed>              $variables      The variables sent with the request
         *
         * @return mixed|array<string,mixed>|object
         */
        public function show_results($response, $schema, $operation_name, $request, $variables)
        {
        }
        /**
         * Return the query log produced from the logs stored by WPDB.
         *
         * @return array<string,mixed>
         */
        public function get_query_log()
        {
        }
    }
    /**
     * Class Tracing
     *
     * Sets up trace data to track how long individual fields take to resolve in WPGraphQL
     *
     * @package WPGraphQL\Utils
     *
     * phpcs:disable -- PHPStan annotation.
     * @phpstan-type FieldTrace array{
     *  path?: array<int,int|string>,
     *  parentType?: string,
     *  fieldName?: string,
     *  returnType?: string,
     *  startOffset?: float|int,
     *  startMicrotime?: float,
     *  duration?: float|int,
     * }
     *
     * @phpstan-type SanitizedFieldTrace array{
     *  path: array<int,int|string>,
     *  parentType: string,
     *  fieldName: string,
     *  returnType: string,
     *  startOffset: int|'',
     *  duration: int|'',
     * }
     *
     * @phpstan-type Trace array{
     *  version: int,
     *  startTime: float,
     *  endTime: float,
     *  duration: int,
     *  execution: array{
     *   resolvers: SanitizedFieldTrace[]
     *  }
     * }
     * phpcs:enable
     */
    class Tracing
    {
        /**
         * Whether Tracing is enabled
         *
         * @var bool
         */
        public $tracing_enabled;
        /**
         * Stores the logs for the trace
         *
         * @var SanitizedFieldTrace[]
         */
        public $trace_logs = [];
        /**
         * The start microtime
         *
         * @var float
         */
        public $request_start_microtime;
        /**
         * The start timestamp
         *
         * @var float
         */
        public $request_start_timestamp;
        /**
         * The end microtime
         *
         * @var float
         */
        public $request_end_microtime;
        /**
         * The end timestamp
         *
         * @var float
         */
        public $request_end_timestamp;
        /**
         * The trace for the current field being resolved
         *
         * @var FieldTrace
         */
        public $field_trace = [];
        /**
         * The version of the Apollo Tracing Spec
         *
         * @var int
         */
        public $trace_spec_version = 1;
        /**
         * The user role tracing is limited to
         *
         * @var string
         */
        public $tracing_user_role;
        /**
         * Initialize tracing
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Sets the timestamp and microtime for the start of the request
         */
        public function init_trace(): void
        {
        }
        /**
         * Sets the timestamp and microtime for the end of the request
         *
         * @return void
         */
        public function end_trace()
        {
        }
        /**
         * Initialize tracing for an individual field
         *
         * @param mixed                                $source         The source passed down the Resolve Tree
         * @param array<string,mixed>                  $args           The args for the field
         * @param \WPGraphQL\AppContext                $context The AppContext passed down the ResolveTree
         * @param \GraphQL\Type\Definition\ResolveInfo $info The ResolveInfo passed down the ResolveTree
         *
         * @return void
         */
        public function init_field_resolver_trace($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * End the tracing for a resolver
         *
         * @return void
         */
        public function end_field_resolver_trace()
        {
        }
        /**
         * Given a resolver start time, returns the duration of a resolver
         *
         * @return float
         */
        public function get_field_resolver_duration()
        {
        }
        /**
         * Get the offset between the start of the request and now
         *
         * @return float
         */
        public function get_start_offset()
        {
        }
        /**
         * Given a trace, sanitizes the values and returns the sanitized_trace
         *
         * @param array<string,mixed> $trace
         *
         * @return SanitizedFieldTrace
         */
        public function sanitize_resolver_trace(array $trace)
        {
        }
        /**
         * Given input from a Resolver Path, this sanitizes the input for output in the trace
         *
         * @param int|string|float|null $input The input to sanitize
         *
         * @return int|string
         *
         * @phpstan-return ( $input is int|float|numeric-string ? int : string )
         */
        public static function sanitize_trace_resolver_path($input)
        {
        }
        /**
         * Formats a timestamp to be RFC 3339 compliant
         *
         * @see https://github.com/apollographql/apollo-tracing
         *
         * @param string|float|int $time The timestamp to format
         *
         * @return float
         */
        public function format_timestamp($time)
        {
        }
        /**
         * Filter the headers that WPGraphQL returns to include headers that indicate the WPGraphQL
         * server supports Apollo Tracing and Credentials
         *
         * @param string[] $headers The headers to return
         *
         * @return string[]
         */
        public function return_tracing_headers(array $headers)
        {
        }
        /**
         * Filter the results of the GraphQL Response to include the Query Log
         *
         * @param array<string,mixed>|object|mixed $response The response of the GraphQL Request
         *
         * @return array<string,mixed>|object|mixed
         */
        public function add_tracing_to_response_extensions($response)
        {
        }
        /**
         * Returns the request duration calculated from the start and end times
         *
         * @return float
         */
        public function get_request_duration()
        {
        }
        /**
         * Determine if the requesting user can see trace data
         */
        public function user_can_see_trace_data(): bool
        {
        }
        /**
         * Get the trace to add to the response
         *
         * @return Trace
         */
        public function get_trace(): array
        {
        }
    }
    class Utils
    {
        /**
         * Given a GraphQL Query string, return a hash
         *
         * @param string $query The Query String to hash
         *
         * @return string|null
         */
        public static function get_query_id(string $query)
        {
        }
        /**
         * Maps new input query args and sanitizes the input
         *
         * @param mixed[]|string $args The raw query args from the GraphQL query
         * @param mixed[]|string $map  The mapping of where each of the args should go
         * @param string[]       $skip Fields to skipped and not be added to the output array.
         *
         * @return array<string,mixed>
         * @since  0.5.0
         */
        public static function map_input($args, $map, $skip = [])
        {
        }
        /**
         * Checks the post_date_gmt or modified_gmt and prepare any post or
         * modified date for single post output.
         *
         * @param string      $date_gmt GMT publication time.
         * @param string|null $date Optional. Local publication time. Default null.
         *
         * @return string|null ISO8601/RFC3339 formatted datetime.
         * @since 4.7.0
         */
        public static function prepare_date_response(string $date_gmt, $date = null)
        {
        }
        /**
         * Format a GraphQL name according to the GraphQL spec.
         *
         * Per the GraphQL spec, characters in names are limited to Latin ASCII letter, digits, or underscores.
         *
         * @see http://spec.graphql.org/draft/#sec-Names
         *
         * @param string $name The name to format.
         * @param string $replacement The replacement character for invalid characters. Defaults to '_'.
         * @param string $regex The regex to use to match invalid characters. Defaults to '/[^A-Za-z0-9_]/i'.
         *
         * @since v1.17.0
         */
        public static function format_graphql_name(string $name, string $replacement = '_', string $regex = '/[^A-Za-z0-9_]/i'): string
        {
        }
        /**
         * Given a field name, formats it for GraphQL
         *
         * @param string $field_name         The field name to format
         * @param bool   $allow_underscores  Whether the field should be formatted with underscores allowed. Default false.
         */
        public static function format_field_name(string $field_name, bool $allow_underscores = false): string
        {
        }
        /**
         * Given a type name, formats it for GraphQL
         *
         * @param string $type_name The type name to format
         *
         * @return string
         */
        public static function format_type_name($type_name)
        {
        }
        /**
         * Returns a GraphQL type name for a given WordPress template name.
         *
         * If the template name has no ASCII characters, the file name will be used instead.
         *
         * @param string $name The template name.
         * @param string $file The file name.
         * @return string The formatted type name. If the name is empty, an empty string will be returned.
         */
        public static function format_type_name_for_wp_template(string $name, string $file): string
        {
        }
        /**
         * Helper function that defines the allowed HTML to use on the Settings pages
         *
         * @return array<string,array<string,array<string>>>
         */
        public static function get_allowed_wp_kses_html()
        {
        }
        /**
         * Helper function to get the WordPress database ID from a GraphQL ID type input.
         *
         * Returns false if not a valid ID.
         *
         * @param int|string $id The ID from the input args. Can be either the database ID (as either a string or int) or the global Relay ID.
         *
         * @return int|false
         * @phpstan-return ( $id is int|numeric-string ? int : (int|false) )
         */
        public static function get_database_id_from_id($id)
        {
        }
        /**
         * Get the node type from the ID
         *
         * @param int|string $id The encoded Node ID.
         *
         * @return ?string
         * @phpstan-return ( $id is int|numeric-string ? null : ?string )
         */
        public static function get_node_type_from_id($id)
        {
        }
        /**
         * Given a WP Post or post ID, this method attempts to resolve a preview post ID.
         *
         * @param int|\WP_Post $post The WP Post object or Post ID
         *
         * @return int A preview post ID if one exists, the current post ID if one doesn't exist.
         * @since 1.18.0
         */
        public static function get_post_preview_id($post): int
        {
        }
    }
}
namespace {
    /**
     * Class WPGraphQL
     *
     * This is the one true WPGraphQL class
     */
    final class WPGraphQL
    {
        /**
         * The instance of the WPGraphQL object
         *
         * @return \WPGraphQL - The one true WPGraphQL
         * @since  0.0.1
         */
        public static function instance(): self
        {
        }
        /**
         * Throw error on object clone.
         * The whole idea of the singleton design pattern is that there is a single object
         * therefore, we don't want the object to be cloned.
         *
         * @return void
         * @since  0.0.1
         */
        public function __clone()
        {
        }
        /**
         * Disable unserializing of the class.
         *
         * @return void
         * @since  0.0.1
         */
        public function __wakeup()
        {
        }
        /**
         * Setup Experiments.
         */
        public function setup_experiments(): void
        {
        }
        /**
         * Set whether the request is a GraphQL request or not
         *
         * @param bool $is_graphql_request
         */
        public static function set_is_graphql_request($is_graphql_request = \false): void
        {
        }
        /**
         * Whether the request is a graphql request or not
         */
        public static function is_graphql_request(): bool
        {
        }
        /**
         * Set whether the request is an introspection query or not
         *
         * @param bool $is_introspection_query
         *
         * @since 1.28.0
         */
        public static function set_is_introspection_query(bool $is_introspection_query = \false): void
        {
        }
        /**
         * Whether the request is an introspection query or not (query for __type or __schema)
         *
         * @since 1.28.0
         */
        public static function is_introspection_query(): bool
        {
        }
        /**
         * @param ?string                         $query     The GraphQL query
         * @param ?string                         $operation The name of the operation
         * @param ?array<mixed>                   $variables Variables to be passed to your GraphQL
         *                                                   request
         * @param \GraphQL\Server\OperationParams $params    The Operation Params. This includes any
         *                                                   extra params,
         *
         * @throws \GraphQL\Error\SyntaxError
         * @throws \Exception
         */
        public function introspection_check(?string $query, ?string $operation, ?array $variables, \GraphQL\Server\OperationParams $params): void
        {
        }
        /**
         * Check if the minimum PHP version requirement is met before execution begins.
         *
         * If the server is running a lower version than required, throw an exception and prevent
         * further execution.
         *
         * @throws \Exception
         */
        public function min_php_version_check(): void
        {
        }
        /**
         * Sets up the plugin url
         */
        public function setup_plugin_url(): void
        {
        }
        /**
         * Determine the post_types and taxonomies, etc that should show in GraphQL.
         */
        public function setup_types(): void
        {
        }
        /**
         * Flush permalinks if the GraphQL Endpoint route isn't yet registered.
         */
        public function maybe_flush_permalinks(): void
        {
        }
        /**
         * Upgrade routine.
         */
        public function upgrade(): void
        {
        }
        /**
         * Executes update routines based on the previously stored version.
         *
         * This triggers an action that passes the previous version and new version and allows for specific actions or
         * modifications needed to bring installations up-to-date with the current plugin version.
         *
         * Each update routine (callback that hooks into "graphql_do_update_routine") should handle backward compatibility as gracefully as possible.
         *
         * @since 1.2.3
         * @param string|null $stored_version The version number currently stored in the database.
         *                                    Null if no version has been previously stored.
         */
        public function run_update_routines(?string $stored_version = \null): void
        {
        }
        /**
         * Clear all caches in the "wpgraphql_extensions" cache group.
         */
        public function clear_extensions_cache(): void
        {
        }
        /**
         * Initialize admin functionality.
         */
        public function init_admin(): void
        {
        }
        /**
         * This sets up built-in post_types and taxonomies to show in the GraphQL Schema.
         *
         * @since  0.0.2
         */
        public static function show_in_graphql(): void
        {
        }
        /**
         * Sets up the default post types to show_in_graphql.
         *
         * @param array<string,mixed> $args      Array of arguments for registering a post type.
         * @param string              $post_type Post type key.
         *
         * @return array<string,mixed>
         */
        public static function setup_default_post_types($args, $post_type)
        {
        }
        /**
         * Sets up the default taxonomies to show_in_graphql.
         *
         * @param array<string,mixed> $args     Array of arguments for registering a taxonomy.
         * @param string              $taxonomy Taxonomy key.
         *
         * @return array<string,mixed>
         * @since 1.12.0
         */
        public static function setup_default_taxonomies($args, $taxonomy)
        {
        }
        /**
         * Set the GraphQL Post Type Args and pass them through a filter.
         *
         * @param array<string,mixed> $args           The graphql specific args for the post type
         * @param string              $post_type_name The name of the post type being registered
         *
         * @return array<string,mixed>
         * @throws \Exception
         * @since 1.12.0
         */
        public static function register_graphql_post_type_args(array $args, string $post_type_name): array
        {
        }
        /**
         * Set the GraphQL Taxonomy Args and pass them through a filter.
         *
         * @param array<string,mixed> $args          The graphql specific args for the taxonomy
         * @param string              $taxonomy_name The name of the taxonomy being registered
         *
         * @return array<string,mixed>
         * @throws \Exception
         * @since 1.12.0
         */
        public static function register_graphql_taxonomy_args(array $args, string $taxonomy_name): array
        {
        }
        /**
         * This sets the post type /taxonomy GraphQL properties.
         *
         * @since 1.12.0
         *
         * @return array{
         *   graphql_kind: 'interface'|'object'|'union',
         *   graphql_resolve_type: ?callable,
         *   graphql_interfaces: string[],
         *   graphql_connections: string[],
         *   graphql_union_types: string[],
         *   graphql_register_root_field: bool,
         *   graphql_register_root_connection: bool,
         * }
         */
        public static function get_default_graphql_type_args(): array
        {
        }
        /**
         * Get the post types that are allowed to be used in GraphQL.
         *
         * This gets all post_types that are set to show_in_graphql, but allows for external code
         * (plugins/theme) to filter the list of allowed_post_types to add/remove additional post_types
         *
         * @param 'names'|'objects'   $output Optional. The type of output to return. Accepts post type 'names' or 'objects'. Default 'names'.
         * @param array<string,mixed> $args   Optional. Arguments to filter allowed post types
         *
         * @return string[]|\WP_Post_Type[]
         * @phpstan-return ( $output is 'objects' ? \WP_Post_Type[] : string[] )
         *
         * @since  0.0.4
         * @since  1.8.1 adds $output as first param, and stores post type objects in class property.
         */
        public static function get_allowed_post_types($output = 'names', $args = []): array
        {
        }
        /**
         * Get the taxonomies that are allowed to be used in GraphQL.
         * This gets all taxonomies that are set to "show_in_graphql" but allows for external code
         * (plugins/themes) to filter the list of allowed_taxonomies to add/remove additional
         * taxonomies
         *
         * @param 'names'|'objects'   $output Optional. The type of output to return. Accepts taxonomy 'names' or 'objects'. Default 'names'.
         * @param array<string,mixed> $args   Optional. Arguments to filter allowed taxonomies.
         *
         * @return string[]|\WP_Taxonomy[]
         * @phpstan-return ( $output is 'objects' ? \WP_Taxonomy[] : string[] )
         * @since  0.0.4
         */
        public static function get_allowed_taxonomies($output = 'names', $args = []): array
        {
        }
        /**
         * Allow Schema to be cleared.
         */
        public static function clear_schema(): void
        {
        }
        /**
         * Returns the Schema as defined by static registrations throughout
         * the WP Load.
         *
         * @return \WPGraphQL\WPSchema
         *
         * @throws \Exception
         */
        public static function get_schema()
        {
        }
        /**
         * Whether WPGraphQL is operating in Debug mode
         */
        public static function debug(): bool
        {
        }
        /**
         * Returns the type registry, instantiating it if it doesn't exist.
         *
         * @return \WPGraphQL\Registry\TypeRegistry
         *
         * @throws \Exception
         */
        public static function get_type_registry()
        {
        }
        /**
         * Return the static schema if there is one.
         */
        public static function get_static_schema(): ?string
        {
        }
        /**
         * Get the AppContext for use in passing down the Resolve Tree
         */
        public static function get_app_context(): \WPGraphQL\AppContext
        {
        }
    }
}
namespace GraphQL\Type {
    /**
     * Schema Definition (see [schema definition docs](schema-definition.md)).
     *
     * A Schema is created by supplying the root types of each type of operation:
     * query, mutation (optional) and subscription (optional). A schema definition is
     * then supplied to the validator and executor. Usage Example:
     *
     *     $schema = new GraphQL\Type\Schema([
     *       'query' => $MyAppQueryRootType,
     *       'mutation' => $MyAppMutationRootType,
     *     ]);
     *
     * Or using Schema Config instance:
     *
     *     $config = GraphQL\Type\SchemaConfig::create()
     *         ->setQuery($MyAppQueryRootType)
     *         ->setMutation($MyAppMutationRootType);
     *
     *     $schema = new GraphQL\Type\Schema($config);
     *
     * @phpstan-import-type SchemaConfigOptions from SchemaConfig
     * @phpstan-import-type OperationType from OperationDefinitionNode
     *
     * @see \GraphQL\Tests\Type\SchemaTest
     */
    class Schema
    {
        public ?\GraphQL\Language\AST\SchemaDefinitionNode $astNode;
        /** @var array<SchemaExtensionNode> */
        public array $extensionASTNodes = [];
        /**
         * @param SchemaConfig|array<string, mixed> $config
         *
         * @phpstan-param SchemaConfig|SchemaConfigOptions $config
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public function __construct($config)
        {
        }
        /**
         * Returns all types in this schema.
         *
         * This operation requires a full schema scan. Do not use in production environment.
         *
         * @throws InvariantViolation
         *
         * @return array<string, Type&NamedType> Keys represent type names, values are instances of corresponding type definitions
         *
         * @api
         */
        public function getTypeMap(): array
        {
        }
        /**
         * Returns a list of directives supported by this schema.
         *
         * @throws InvariantViolation
         *
         * @return array<Directive>
         *
         * @api
         */
        public function getDirectives(): array
        {
        }
        /** @param mixed $typeLoaderReturn could be anything */
        public static function typeLoaderNotType($typeLoaderReturn): string
        {
        }
        public static function typeLoaderWrongTypeName(string $expectedTypeName, string $actualTypeName): string
        {
        }
        /** Returns root type by operation name. */
        public function getOperationType(string $operation): ?\GraphQL\Type\Definition\ObjectType
        {
        }
        /**
         * Returns root query type.
         *
         * @api
         */
        public function getQueryType(): ?\GraphQL\Type\Definition\ObjectType
        {
        }
        /**
         * Returns root mutation type.
         *
         * @api
         */
        public function getMutationType(): ?\GraphQL\Type\Definition\ObjectType
        {
        }
        /**
         * Returns schema subscription.
         *
         * @api
         */
        public function getSubscriptionType(): ?\GraphQL\Type\Definition\ObjectType
        {
        }
        /** @api */
        public function getConfig(): \GraphQL\Type\SchemaConfig
        {
        }
        /**
         * Returns a type by name.
         *
         * @throws InvariantViolation
         *
         * @return (Type&NamedType)|null
         *
         * @api
         */
        public function getType(string $name): ?\GraphQL\Type\Definition\Type
        {
        }
        /** @throws InvariantViolation */
        public function hasType(string $name): bool
        {
        }
        /**
         * @template T of Type
         *
         * @param Type|callable $type
         *
         * @phpstan-param T|callable():T $type
         *
         * @phpstan-return T
         */
        public static function resolveType($type): \GraphQL\Type\Definition\Type
        {
        }
        /**
         * Returns all possible concrete types for given abstract type
         * (implementations for interfaces and members of union type for unions).
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @param AbstractType&Type $abstractType
         *
         * @throws InvariantViolation
         *
         * @return array<ObjectType>
         *
         * @api
         */
        public function getPossibleTypes(\GraphQL\Type\Definition\AbstractType $abstractType): array
        {
        }
        /**
         * Returns all types that implement a given interface type.
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public function getImplementations(\GraphQL\Type\Definition\InterfaceType $abstractType): \GraphQL\Utils\InterfaceImplementations
        {
        }
        /**
         * Returns true if the given type is a sub type of the given abstract type.
         *
         * @param AbstractType&Type $abstractType
         * @param ImplementingType&Type $maybeSubType
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public function isSubType(\GraphQL\Type\Definition\AbstractType $abstractType, \GraphQL\Type\Definition\ImplementingType $maybeSubType): bool
        {
        }
        /**
         * Returns instance of directive by name.
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public function getDirective(string $name): ?\GraphQL\Type\Definition\Directive
        {
        }
        /**
         * Throws if the schema is not valid.
         *
         * This operation requires a full schema scan. Do not use in production environment.
         *
         * @throws Error
         * @throws InvariantViolation
         *
         * @api
         */
        public function assertValid(): void
        {
        }
        /**
         * Validate the schema and return any errors.
         *
         * This operation requires a full schema scan. Do not use in production environment.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Error>
         *
         * @api
         */
        public function validate(): array
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * Class WPSchema
     *
     * Extends the Schema to make some properties accessible via hooks/filters
     *
     * @package WPGraphQL
     */
    class WPSchema extends \GraphQL\Type\Schema
    {
        /**
         * {@inheritDoc}
         *
         * @var \GraphQL\Type\SchemaConfig
         */
        public $config;
        /**
         * Holds the $filterable_config which allows WordPress access to modifying the
         * $config that gets passed down to the Executable Schema
         *
         * @var \GraphQL\Type\SchemaConfig
         * @since 0.0.9
         */
        public $filterable_config;
        /**
         * WPSchema constructor.
         *
         * @param \GraphQL\Type\SchemaConfig       $config The config for the Schema.
         * @param \WPGraphQL\Registry\TypeRegistry $type_registry
         *
         * @since 0.0.9
         */
        public function __construct(\GraphQL\Type\SchemaConfig $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace Appsero {
    /**
     * Appsero Client
     *
     * This class is necessary to set project data
     */
    class Client
    {
        /**
         * The client version
         *
         * @var string
         */
        public $version = '2.0.4';
        /**
         * Hash identifier of the plugin
         *
         * @var string
         */
        public $hash;
        /**
         * Name of the plugin
         *
         * @var string
         */
        public $name;
        /**
         * The plugin/theme file path
         *
         * @example .../wp-content/plugins/test-slug/test-slug.php
         *
         * @var string
         */
        public $file;
        /**
         * Main plugin file
         *
         * @example test-slug/test-slug.php
         *
         * @var string
         */
        public $basename;
        /**
         * Slug of the plugin
         *
         * @example test-slug
         *
         * @var string
         */
        public $slug;
        /**
         * The project version
         *
         * @var string
         */
        public $project_version;
        /**
         * The project type
         *
         * @var string
         */
        public $type;
        /**
         * Textdomain
         *
         * @var string
         */
        public $textdomain;
        /**
         * Initialize the class
         *
         * @param string $hash hash of the plugin
         * @param string $name readable name of the plugin
         * @param string $file main plugin file path
         */
        public function __construct($hash, $name, $file)
        {
        }
        /**
         * Initialize insights class
         *
         * @return Appsero\Insights
         */
        public function insights()
        {
        }
        /**
         * Initialize plugin/theme updater
         *
         * @return void
         */
        public function updater()
        {
        }
        /**
         * Initialize license checker
         *
         * @return Appsero\License
         */
        public function license()
        {
        }
        /**
         * API Endpoint
         *
         * @return string
         */
        public function endpoint()
        {
        }
        /**
         * Set project basename, slug and version
         *
         * @return void
         */
        protected function set_basename_and_slug()
        {
        }
        /**
         * Send request to remote endpoint
         *
         * @param array  $params
         * @param string $route
         *
         * @return array|WP_Error array of results including HTTP headers or WP_Error if the request failed
         */
        public function send_request($params, $route, $blocking = false)
        {
        }
        /**
         * Check if the current server is localhost
         *
         * @return bool
         */
        public function is_local_server()
        {
        }
        /**
         * Translate function _e()
         */
        // phpcs:ignore
        public function _etrans($text)
        {
        }
        /**
         * Translate function __()
         */
        // phpcs:ignore
        public function __trans($text)
        {
        }
        /**
         * Set project textdomain
         */
        public function set_textdomain($textdomain)
        {
        }
    }
    /**
     * Appsero Insights
     *
     * This is a tracker class to track plugin usage based on if the customer has opted in.
     * No personal information is being tracked by this class, only general settings, active plugins, environment details
     * and admin email.
     */
    class Insights
    {
        /**
         * The notice text
         *
         * @var string
         */
        public $notice;
        /**
         * Whether to show the notice or not
         *
         * @var bool
         */
        protected $show_notice = true;
        /**
         * If extra data needs to be sent
         *
         * @var array
         */
        protected $extra_data = array();
        /**
         * AppSero\Client
         *
         * @var object
         */
        protected $client;
        /**
         * Initialize the class
         *
         * @param mixed  $client Client object or string.
         * @param string $name   Name of the plugin/theme.
         * @param string $file   Main plugin file path.
         */
        public function __construct($client, $name = null, $file = null)
        {
        }
        /**
         * Don't show the notice
         *
         * @return self
         */
        public function hide_notice()
        {
        }
        /**
         * Add plugin data if needed
         *
         * @return self
         */
        public function add_plugin_data()
        {
        }
        /**
         * Add extra data if needed
         *
         * @param array $data Extra data.
         *
         * @return self
         */
        public function add_extra($data = array())
        {
        }
        /**
         * Set custom notice text
         *
         * @param string $text Custom notice text.
         *
         * @return self
         */
        public function notice($text = '')
        {
        }
        /**
         * Initialize insights
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Initialize theme hooks
         *
         * @return void
         */
        public function init_theme()
        {
        }
        /**
         * Initialize plugin hooks
         *
         * @return void
         */
        public function init_plugin()
        {
        }
        /**
         * Initialize common hooks
         *
         * @return void
         */
        protected function init_common()
        {
        }
        /**
         * Send tracking data to AppSero server
         *
         * @param bool $override Whether to override the tracking allowed check.
         *
         * @return void
         */
        public function send_tracking_data($override = false)
        {
        }
        /**
         * Get the tracking data points
         *
         * @return array
         */
        protected function get_tracking_data()
        {
        }
        /**
         * If a child class wants to send extra data
         *
         * @return mixed
         */
        protected function get_extra_data()
        {
        }
        /**
         * Explain the user which data we collect
         *
         * @return array
         */
        protected function data_we_collect()
        {
        }
        /**
         * Check if the user has opted into tracking
         *
         * @return bool
         */
        public function tracking_allowed()
        {
        }
        /**
         * Check if the notice has been dismissed or enabled
         *
         * @return bool
         */
        public function notice_dismissed()
        {
        }
        /**
         * Display the admin notice to users that have not opted-in or out
         *
         * @return void
         */
        public function admin_notice()
        {
        }
        /**
         * Handle the optin/optout
         *
         * @return void
         */
        public function handle_optin_optout()
        {
        }
        /**
         * Tracking optin
         *
         * @return void
         */
        public function optin()
        {
        }
        /**
         * Optout from tracking
         *
         * @return void
         */
        public function optout()
        {
        }
        /**
         * Get the number of post counts
         *
         * @param string $post_type The post type to count.
         * @return int
         */
        public function get_post_count($post_type)
        {
        }
        /**
         * Get user totals based on user role.
         *
         * @return array
         */
        public function get_user_counts()
        {
        }
        /**
         * Add weekly cron schedule
         *
         * @param array $schedules Existing cron schedules.
         * @return array
         */
        public function add_weekly_schedule($schedules)
        {
        }
        /**
         * Plugin activation hook
         *
         * @return void
         */
        public function activate_plugin()
        {
        }
        /**
         * Clear our options upon deactivation
         *
         * @return void
         */
        public function deactivation_cleanup()
        {
        }
        /**
         * Hook into action links and modify the deactivate link
         *
         * @param array $links
         *
         * @return array
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Plugin deactivation uninstall reason submission
         *
         * @return void
         */
        public function uninstall_reason_submission()
        {
        }
        /**
         * Handle the plugin deactivation feedback
         *
         * @return void
         */
        public function deactivate_scripts()
        {
        }
        /**
         * Run after theme deactivated
         *
         * @param string $new_name
         * @param object $new_theme
         * @param object $old_theme
         *
         * @return void
         */
        public function theme_deactivated($new_name, $new_theme, $old_theme)
        {
        }
    }
    /**
     * Appsero License Checker
     *
     * This class will check, active and deactive license
     */
    class License
    {
        /**
         * AppSero\Client
         *
         * @var object
         */
        protected $client;
        /**
         * Arguments of create menu
         *
         * @var array
         */
        protected $menu_args;
        /**
         * `option_name` of `wp_options` table
         *
         * @var string
         */
        protected $option_key;
        /**
         * Error message of HTTP request
         *
         * @var string
         */
        public $error;
        /**
         * Success message on form submit
         *
         * @var string
         */
        public $success;
        /**
         * Corn schedule hook name
         *
         * @var string
         */
        protected $schedule_hook;
        /**
         * Initialize the class
         *
         * @param Client $client
         */
        public function __construct(\Appsero\Client $client)
        {
        }
        /**
         * Set the license option key.
         *
         * If someone wants to override the default generated key.
         *
         * @param string $key
         *
         * @since 1.3.0
         *
         * @return License
         */
        public function set_option_key($key)
        {
        }
        /**
         * Get the license key
         *
         * @since 1.3.0
         *
         * @return string|null
         */
        public function get_license()
        {
        }
        /**
         * Check license
         *
         * @return array
         */
        public function check($license_key)
        {
        }
        /**
         * Active a license
         *
         * @return array
         */
        public function activate($license_key)
        {
        }
        /**
         * Deactivate a license
         *
         * @return array
         */
        public function deactivate($license_key)
        {
        }
        /**
         * Send common request
         *
         * @return array
         */
        protected function send_request($license_key, $route)
        {
        }
        /**
         * License Refresh Endpoint
         */
        public function refresh_license_api()
        {
        }
        /**
         * Add settings page for license
         *
         * @param array $args
         *
         * @return void
         */
        public function add_settings_page($args = [])
        {
        }
        /**
         * Admin Menu hook
         *
         * @return void
         */
        public function admin_menu()
        {
        }
        /**
         * License menu output
         */
        public function menu_output()
        {
        }
        /**
         * License form submit
         */
        public function license_form_submit($form_data = array())
        {
        }
        /**
         * Check license status on schedule
         */
        public function check_license_status()
        {
        }
        /**
         * Check this is a valid license
         */
        public function is_valid()
        {
        }
        /**
         * Check this is a valid license
         */
        public function is_valid_by($option, $value)
        {
        }
        /**
         * Schedule daily sicense checker event
         */
        public function schedule_cron_event()
        {
        }
        /**
         * Clear any scheduled hook
         */
        public function clear_scheduler()
        {
        }
    }
}
namespace GraphQLRelay\Connection {
    class ArrayConnection
    {
        const PREFIX = 'arrayconnection:';
        /**
         * Creates the cursor string from an offset.
         */
        public static function offsetToCursor($offset)
        {
        }
        /**
         * Rederives the offset from the cursor string.
         */
        public static function cursorToOffset($cursor)
        {
        }
        /**
         * Given an optional cursor and a default offset, returns the offset
         * to use; if the cursor contains a valid offset, that will be used,
         * otherwise it will be the default.
         */
        public static function getOffsetWithDefault($cursor, $defaultOffset)
        {
        }
        /**
         * A simple function that accepts an array and connection arguments, and returns
         * a connection object for use in GraphQL. It uses array offsets as pagination,
         * so pagination will only work if the array is static.
         * @param array $data
         * @param $args
         *
         * @return array
         */
        public static function connectionFromArray(array $data, $args)
        {
        }
        /**
         * Given a slice (subset) of an array, returns a connection object for use in
         * GraphQL.
         *
         * This function is similar to `connectionFromArray`, but is intended for use
         * cases where you know the cardinality of the connection, consider it too large
         * to materialize the entire array, and instead wish pass in a slice of the
         * total result large enough to cover the range specified in `args`.
         *
         * @return array
         */
        public static function connectionFromArraySlice(array $arraySlice, $args, $meta)
        {
        }
        /**
         * Return the cursor associated with an object in an array.
         *
         * @param array $data
         * @param $object
         * @return null|string
         */
        public static function cursorForObjectInConnection(array $data, $object)
        {
        }
        /**
         * Returns the value for the given array key, NULL, if it does not exist
         *
         * @param array $array
         * @param string $key
         * @return mixed
         */
        protected static function getArrayValueSafe(array $array, $key)
        {
        }
    }
    class Connection
    {
        /**
         * @var ObjectType
         */
        protected static $pageInfoType;
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with forward pagination.
         *
         * @return array
         */
        public static function forwardConnectionArgs()
        {
        }
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with backward pagination.
         *
         * @return array
         */
        public static function backwardConnectionArgs()
        {
        }
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with bidirectional pagination.
         *
         * @return array
         */
        public static function connectionArgs()
        {
        }
        /**
         * Returns a GraphQLObjectType for a connection with the given name,
         * and whose nodes are of the specified type.
         */
        public static function connectionDefinitions(array $config)
        {
        }
        /**
         * Returns a GraphQLObjectType for a connection with the given name,
         * and whose nodes are of the specified type.
         *
         * @return ObjectType
         */
        public static function createConnectionType(array $config)
        {
        }
        /**
         * Returns a GraphQLObjectType for an edge with the given name,
         * and whose nodes are of the specified type.
         *
         * @param array $config
         * @return ObjectType
         */
        public static function createEdgeType(array $config)
        {
        }
        /**
         * The common page info type used by all connections.
         *
         * @return ObjectType
         */
        public static function pageInfoType()
        {
        }
        protected static function resolveMaybeThunk($thinkOrThunk)
        {
        }
    }
}
namespace GraphQLRelay\Mutation {
    class Mutation
    {
        /**
         * Returns a GraphQLFieldConfig for the mutation described by the
         * provided MutationConfig.
         *
         * A description of a mutation consumable by mutationWithClientMutationId
         * to create a GraphQLFieldConfig for that mutation.
         *
         * The inputFields and outputFields should not include `clientMutationId`,
         * as this will be provided automatically.
         *
         * An input object will be created containing the input fields, and an
         * object will be created containing the output fields.
         *
         * mutateAndGetPayload will receive an Object with a key for each
         * input field, and it should return an Object with a key for each
         * output field. It may return synchronously, or return a Promise.
         *
         * type MutationConfig = {
         *   name: string,
         *   description?: string,
         *   deprecationReason?: string,
         *   inputFields: InputObjectConfigFieldMap,
         *   outputFields: GraphQLFieldConfigMap,
         *   mutateAndGetPayload: mutationFn,
         * }
         */
        public static function mutationWithClientMutationId(array $config)
        {
        }
        /**
         * Returns the value for the given array key, NULL, if it does not exist
         *
         * @param array $array
         * @param string $key
         * @return mixed
         */
        protected static function getArrayValue(array $array, $key)
        {
        }
        protected static function resolveMaybeThunk($thinkOrThunk)
        {
        }
    }
}
namespace GraphQLRelay\Node {
    class Node
    {
        /**
         * Given a function to map from an ID to an underlying object, and a function
         * to map from an underlying object to the concrete GraphQLObjectType it
         * corresponds to, constructs a `Node` interface that objects can implement,
         * and a field config for a `node` root field.
         *
         * If the typeResolver is omitted, object resolution on the interface will be
         * handled with the `isTypeOf` method on object types, as with any GraphQL
         * interface without a provided `resolveType` method.
         *
         * @param callable $idFetcher
         * @param callable $typeResolver
         * @return array
         */
        public static function nodeDefinitions(callable $idFetcher, callable $typeResolver = null)
        {
        }
        /**
         * Takes a type name and an ID specific to that type name, and returns a
         * "global ID" that is unique among all types.
         *
         * @param string $type
         * @param string $id
         * @return string
         */
        public static function toGlobalId($type, $id)
        {
        }
        /**
         * Takes the "global ID" created by self::toGlobalId, and returns the type name and ID
         * used to create it.
         *
         * @param $globalId
         * @return array
         */
        public static function fromGlobalId($globalId)
        {
        }
        /**
         * Creates the configuration for an id field on a node, using `self::toGlobalId` to
         * construct the ID from the provided typename. The type-specific ID is fetched
         * by calling idFetcher on the object, or if not provided, by accessing the `id`
         * property on the object.
         *
         * @param string|null $typeName
         * @param callable|null $idFetcher
         * @return array
         */
        public static function globalIdField($typeName = null, callable $idFetcher = null)
        {
        }
    }
    class Plural
    {
        /**
         * Returns configuration for Plural identifying root field
         *
         * type PluralIdentifyingRootFieldConfig = {
         *       argName: string,
         *       inputType: GraphQLInputType,
         *       outputType: GraphQLOutputType,
         *       resolveSingleInput: (input: any, info: GraphQLResolveInfo) => ?any,
         *       description?: ?string,
         * };
         *
         * @param array $config
         * @return array
         */
        public static function pluralIdentifyingRootField(array $config)
        {
        }
        /**
         * Returns the value for the given array key, NULL, if it does not exist
         *
         * @param array $array
         * @param string $key
         * @return mixed
         */
        protected static function getArrayValue(array $array, $key)
        {
        }
    }
}
namespace GraphQLRelay {
    class Relay
    {
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with forward pagination.
         *
         * @return array
         */
        public static function forwardConnectionArgs()
        {
        }
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with backward pagination.
         *
         * @return array
         */
        public static function backwardConnectionArgs()
        {
        }
        /**
         * Returns a GraphQLFieldConfigArgumentMap appropriate to include on a field
         * whose return type is a connection type with bidirectional pagination.
         *
         * @return array
         */
        public static function connectionArgs()
        {
        }
        /**
         * Returns a GraphQLObjectType for a connection and its edge with the given name,
         * and whose nodes are of the specified type.
         *
         * @param array $config
         * @return array
         */
        public static function connectionDefinitions(array $config)
        {
        }
        /**
         * Returns a GraphQLObjectType for a connection with the given name,
         * and whose nodes are of the specified type.
         *
         * @param array $config
         * @return ObjectType
         */
        public static function connectionType(array $config)
        {
        }
        /**
         * Returns a GraphQLObjectType for a edge with the given name,
         * and whose nodes are of the specified type.
         *
         * @param array $config
         * @return ObjectType
         */
        public static function edgeType(array $config)
        {
        }
        /**
         * A simple function that accepts an array and connection arguments, and returns
         * a connection object for use in GraphQL. It uses array offsets as pagination,
         * so pagination will only work if the array is static.
         * @param array $data
         * @param $args
         *
         * @return array
         */
        public static function connectionFromArray(array $data, $args)
        {
        }
        /**
         * Given a slice (subset) of an array, returns a connection object for use in
         * GraphQL.
         *
         * This function is similar to `connectionFromArray`, but is intended for use
         * cases where you know the cardinality of the connection, consider it too large
         * to materialize the entire array, and instead wish pass in a slice of the
         * total result large enough to cover the range specified in `args`.
         *
         * @param array $arraySlice
         * @param $args
         * @param $meta
         * @return array
         */
        public static function connectionFromArraySlice(array $arraySlice, $args, $meta)
        {
        }
        /**
         * Return the cursor associated with an object in an array.
         *
         * @param array $data
         * @param $object
         * @return null|string
         */
        public static function cursorForObjectInConnection(array $data, $object)
        {
        }
        /**
         * Returns a GraphQLFieldConfig for the mutation described by the
         * provided MutationConfig.
         *
         * A description of a mutation consumable by mutationWithClientMutationId
         * to create a GraphQLFieldConfig for that mutation.
         *
         * The inputFields and outputFields should not include `clientMutationId`,
         * as this will be provided automatically.
         *
         * An input object will be created containing the input fields, and an
         * object will be created containing the output fields.
         *
         * mutateAndGetPayload will receive an Object with a key for each
         * input field, and it should return an Object with a key for each
         * output field. It may return synchronously, or return a Promise.
         *
         * type MutationConfig = {
         *   name: string,
         *   inputFields: InputObjectConfigFieldMap,
         *   outputFields: GraphQLFieldConfigMap,
         *   mutateAndGetPayload: mutationFn,
         * }
         *
         * @param array $config
         * @return array
         */
        public static function mutationWithClientMutationId(array $config)
        {
        }
        /**
         * Given a function to map from an ID to an underlying object, and a function
         * to map from an underlying object to the concrete GraphQLObjectType it
         * corresponds to, constructs a `Node` interface that objects can implement,
         * and a field config for a `node` root field.
         *
         * If the typeResolver is omitted, object resolution on the interface will be
         * handled with the `isTypeOf` method on object types, as with any GraphQL
         * interface without a provided `resolveType` method.
         *
         * @param callable $idFetcher
         * @param callable $typeResolver
         * @return array
         */
        public static function nodeDefinitions(callable $idFetcher, callable $typeResolver = null)
        {
        }
        /**
         * Takes a type name and an ID specific to that type name, and returns a
         * "global ID" that is unique among all types.
         *
         * @param string $type
         * @param string $id
         * @return string
         */
        public static function toGlobalId($type, $id)
        {
        }
        /**
         * Takes the "global ID" created by self::toGlobalId, and returns the type name and ID
         * used to create it.
         *
         * @param $globalId
         * @return array
         */
        public static function fromGlobalId($globalId)
        {
        }
        /**
         * Creates the configuration for an id field on a node, using `self::toGlobalId` to
         * construct the ID from the provided typename. The type-specific ID is fetched
         * by calling idFetcher on the object, or if not provided, by accessing the `id`
         * property on the object.
         *
         * @param string|null $typeName
         * @param callable|null $idFetcher
         * @return array
         */
        public static function globalIdField($typeName = null, callable $idFetcher = null)
        {
        }
    }
}
namespace GraphQLRelay\Tests\Connection {
    class ArrayConnectionTest extends \PHPUnit\Framework\TestCase
    {
        protected $letters = ['A', 'B', 'C', 'D', 'E'];
        public function testReturnsAllElementsWithoutFilters()
        {
        }
        public function testRespectsASmallerFirst()
        {
        }
        public function testRespectsAnOverlyLargeFirst()
        {
        }
        public function testRespectsASmallerLast()
        {
        }
        public function testRespectsAnOverlyLargeLast()
        {
        }
        public function testRespectsFirstAndAfter()
        {
        }
        public function testRespectsFirstAndAfterWithLongFirst()
        {
        }
        public function testRespectsLastAndBefore()
        {
        }
        public function testRespectsLastAndBeforeWithLongLast()
        {
        }
        public function testRespectsFirstAndAfterAndBeforeTooFew()
        {
        }
        public function testRespectsFirstAndAfterAndBeforeTooMany()
        {
        }
        public function testRespectsFirstAndAfterAndBeforeExactlyRight()
        {
        }
        public function testRespectsLastAndAfterAndBeforeTooFew()
        {
        }
        public function testRespectsLastAndAfterAndBeforeTooMany()
        {
        }
        public function testRespectsLastAndAfterAndBeforeExactlyRight()
        {
        }
        public function testReturnsNoElementsIfFirstIs0()
        {
        }
        public function testReturnsAllElementsIfCursorsAreInvalid()
        {
        }
        public function testReturnsAllElementsIfCursorsAreOnTheOutside()
        {
        }
        public function testReturnsNoElementsIfCursorsCross()
        {
        }
        public function testReturnsAnEdgeCursorGivenAnArrayAndAMemberObject()
        {
        }
        public function testReturnsNullGivenAnArrayAndANonMemberObject()
        {
        }
        public function testWorksWithAJustRightArraySlice()
        {
        }
        public function testWorksWithAnOversizedArraySliceLeftSide()
        {
        }
        public function testWorksWithAnOversizedArraySliceRightSide()
        {
        }
        public function testWorksWithAnOversizedArraySliceBothSides()
        {
        }
        public function testWorksWithAnUndersizedArraySliceLeftSide()
        {
        }
        public function testWorksWithAnUndersizedArraySliceRightSide()
        {
        }
        public function testWorksWithAnUndersizedArraySliceBothSides()
        {
        }
    }
    class ConnectionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var array
         */
        protected $allUsers;
        /**
         * @var \GraphQL\Type\Definition\ObjectType
         */
        protected $userType;
        /**
         * @var array
         */
        protected $friendConnection;
        /**
         * @var array
         */
        protected $userConnection;
        /**
         * @var ObjectType
         */
        protected $queryType;
        /**
         * @var Schema
         */
        protected $schema;
        public function setup(): void
        {
        }
        public function testIncludesConnectionAndEdgeFields()
        {
        }
        public function testWorksWithForwardConnectionArgs()
        {
        }
        public function testWorksWithBackwardConnectionArgs()
        {
        }
        public function testEdgeTypeThrowsWithoutNodeType()
        {
        }
        public function testConnectionTypeThrowsWithoutNodeType()
        {
        }
        public function testConnectionDefinitionThrowsWithoutNodeType()
        {
        }
        /**
         * Helper function to test a query and the expected response.
         */
        protected function assertValidQuery($query, $expected)
        {
        }
    }
    class SeparateConnectionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var array
         */
        protected $allUsers;
        /**
         * @var ObjectType
         */
        protected $userType;
        /**
         * @var ObjectType
         */
        protected $friendEdge;
        /**
         * @var ObjectType
         */
        protected $friendConnection;
        /**
         * @var ObjectType
         */
        protected $userEdge;
        /**
         * @var ObjectType
         */
        protected $userConnection;
        /**
         * @var ObjectType
         */
        protected $queryType;
        /**
         * @var Schema
         */
        protected $schema;
        public function setup(): void
        {
        }
        public function testIncludesConnectionAndEdgeFields()
        {
        }
        public function testWorksWithForwardConnectionArgs()
        {
        }
        public function testWorksWithBackwardConnectionArgs()
        {
        }
        /**
         * Helper function to test a query and the expected response.
         */
        protected function assertValidQuery($query, $expected)
        {
        }
    }
}
namespace GraphQLRelay\Tests\Mutation {
    class MutationTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var ObjectType
         */
        protected $simpleMutation;
        /**
         * @var ObjectType
         */
        protected $simpleMutationWithDescription;
        /**
         * @var ObjectType
         */
        protected $simpleMutationWithDeprecationReason;
        /**
         * @var ObjectType
         */
        protected $simpleMutationWithThunkFields;
        /**
         * @var ObjectType
         */
        protected $mutation;
        /**
         * @var ObjectType
         */
        protected $edgeMutation;
        /**
         * @var Schema
         */
        protected $schema;
        public function setup(): void
        {
        }
        public function testRequiresAnArgument()
        {
        }
        public function testReturnsTheSameClientMutationID()
        {
        }
        public function testReturnsNullWithOmittedClientMutationID()
        {
        }
        public function testSupportsEdgeAsOutputField()
        {
        }
        public function testIntrospection()
        {
        }
        public function testContainsCorrectPayload()
        {
        }
        public function testContainsCorrectField()
        {
        }
        public function testContainsCorrectDescriptions()
        {
        }
        public function testContainsCorrectDeprecationReasons()
        {
        }
        /**
         * Helper function to test a query and the expected response.
         */
        protected function assertValidQuery($query, $expected)
        {
        }
    }
}
namespace GraphQLRelay\Tests\Node {
    class NodeTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Node definition, so that it is only created once
         *
         * @var array
         */
        protected static $nodeDefinition;
        /**
         * @var ObjectType
         */
        protected static $userType;
        /**
         * @var ObjectType
         */
        protected static $photoType;
        public function testGetsCorrectIDForUsers()
        {
        }
        public function testGetsCorrectIDForPhotos()
        {
        }
        public function testGetsCorrectNameForUsers()
        {
        }
        public function testGetsCorrectWidthForPhotos()
        {
        }
        public function testGetsCorrectTypeNameForUsers()
        {
        }
        public function testCorrectWidthForPhotos()
        {
        }
        public function testIgnoresPhotoFragmentsOnUser()
        {
        }
        public function testReturnsNullForBadIDs()
        {
        }
        public function testHasCorrectNodeInterface()
        {
        }
        public function testHasCorrectNodeRootField()
        {
        }
        /**
         * Returns test schema
         *
         * @return Schema
         */
        protected function getSchema()
        {
        }
        /**
         * Returns test query type
         *
         * @return ObjectType
         */
        protected function getQueryType()
        {
        }
        /**
         * Returns node definitions
         *
         * @return array
         */
        protected function getNodeDefinitions()
        {
        }
        /**
         * Returns photo data
         *
         * @return array
         */
        protected function getPhotoData()
        {
        }
        /**
         * Returns user data
         *
         * @return array
         */
        protected function getUserData()
        {
        }
    }
}
namespace GraphQLRelay\tests\Node {
    class PluralTest extends \PHPUnit\Framework\TestCase
    {
        protected static function getSchema()
        {
        }
        public function testAllowsFetching()
        {
        }
        public function testCorrectlyIntrospects()
        {
        }
    }
}
namespace GraphQLRelay\tests {
    class RelayTest extends \PHPUnit\Framework\TestCase
    {
        public function testForwardConnectionArgs()
        {
        }
        public function testBackwardConnectionArgs()
        {
        }
        public function testConnectionArgs()
        {
        }
        public function testConnectionDefinitions()
        {
        }
        public function testConnectionType()
        {
        }
        public function testEdgeType()
        {
        }
    }
    class StarWarsConnectionTest extends \PHPUnit\Framework\TestCase
    {
        public function testFetchesTheFirstShipOfTheRebels()
        {
        }
        public function testFetchesTheFirstTwoShipsOfTheRebelsWithACursor()
        {
        }
        public function testFetchesTheNextThreeShipsOfTHeRebelsWithACursor()
        {
        }
        public function testFetchesNoShipsOfTheRebelsAtTheEndOfConnection()
        {
        }
        public function testIdentifiesTheEndOfTheList()
        {
        }
    }
    class StarWarsData
    {
        protected static $xwing = ['id' => '1', 'name' => 'X-Wing'];
        protected static $ywing = ['id' => '2', 'name' => 'Y-Wing'];
        protected static $awing = ['id' => '3', 'name' => 'A-Wing'];
        protected static $falcon = ['id' => '4', 'name' => 'Millennium Falcon'];
        protected static $homeOne = ['id' => '5', 'name' => 'Home One'];
        protected static $tieFighter = ['id' => '6', 'name' => 'TIE Fighter'];
        protected static $tieInterceptor = ['id' => '7', 'name' => 'TIE Interceptor'];
        protected static $executor = ['id' => '8', 'name' => 'TIE Interceptor'];
        protected static $rebels = ['id' => '1', 'name' => 'Alliance to Restore the Republic', 'ships' => ['1', '2', '3', '4', '5']];
        protected static $empire = ['id' => '2', 'name' => 'Galactic Empire', 'ships' => ['6', '7', '8']];
        protected static $nextShip = 9;
        protected static $data;
        /**
         * Returns the data object
         *
         * @return array $array
         */
        protected static function getData()
        {
        }
        /**
         * @param $shipName
         * @param $factionId
         * @return array
         */
        public static function createShip($shipName, $factionId)
        {
        }
        public static function getShip($id)
        {
        }
        public static function getFaction($id)
        {
        }
        public static function getRebels()
        {
        }
        public static function getEmpire()
        {
        }
    }
    class StarWarsMutationTest extends \PHPUnit\Framework\TestCase
    {
        public function testMutatesTheDataSet()
        {
        }
    }
    class StarWarsObjectIdentificationTest extends \PHPUnit\Framework\TestCase
    {
        public function testFetchesTheIDAndNameOfTheRebels()
        {
        }
        public function testRefetchesTheRebels()
        {
        }
        public function testFetchesTheIDAndNameOfTheEmpire()
        {
        }
        public function testRefetchesTheEmpire()
        {
        }
        public function testRefetchesTheXWing()
        {
        }
    }
    class StarWarsSchema
    {
        protected static $shipConnection;
        protected static $factionType;
        protected static $shipType;
        protected static $nodeDefinition;
        protected static $shipMutation;
        /**
         * This is a basic end-to-end test, designed to demonstrate the various
         * capabilities of a Relay-compliant GraphQL server.
         *
         * It is recommended that readers of this test be familiar with
         * the end-to-end test in GraphQL.js first, as this test skips
         * over the basics covered there in favor of illustrating the
         * key aspects of the Relay spec that this test is designed to illustrate.
         *
         * We will create a GraphQL schema that describes the major
         * factions and ships in the original Star Wars trilogy.
         *
         * NOTE: This may contain spoilers for the original Star
         * Wars trilogy.
         */
        /**
         * Using our shorthand to describe type systems, the type system for our
         * example will be the following:
         *
         * interface Node {
         *   id: ID!
         * }
         *
         * type Faction : Node {
         *   id: ID!
         *   name: String
         *   ships: ShipConnection
         * }
         *
         * type Ship : Node {
         *   id: ID!
         *   name: String
         * }
         *
         * type ShipConnection {
         *   edges: [ShipEdge]
         *   pageInfo: PageInfo!
         * }
         *
         * type ShipEdge {
         *   cursor: String!
         *   node: Ship
         * }
         *
         * type PageInfo {
         *   hasNextPage: Boolean!
         *   hasPreviousPage: Boolean!
         *   startCursor: String
         *   endCursor: String
         * }
         *
         * type Query {
         *   rebels: Faction
         *   empire: Faction
         *   node(id: ID!): Node
         * }
         *
         * input IntroduceShipInput {
         *   clientMutationId: string!
         *   shipName: string!
         *   factionId: ID!
         * }
         *
         * input IntroduceShipPayload {
         *   clientMutationId: string!
         *   ship: Ship
         *   faction: Faction
         * }
         *
         * type Mutation {
         *   introduceShip(input IntroduceShipInput!): IntroduceShipPayload
         * }
         */
        /**
         * We get the node interface and field from the relay library.
         *
         * The first method is the way we resolve an ID to its object. The second is the
         * way we resolve an object that implements node to its type.
         */
        protected static function getNodeDefinition()
        {
        }
        /**
         * We define our basic ship type.
         *
         * This implements the following type system shorthand:
         *   type Ship : Node {
         *     id: String!
         *     name: String
         *   }
         *
         * @return ObjectType
         */
        protected static function getShipType()
        {
        }
        /**
         * We define our faction type, which implements the node interface.
         *
         * This implements the following type system shorthand:
         *   type Faction : Node {
         *     id: String!
         *     name: String
         *     ships: ShipConnection
         *   }
         *
         * @return ObjectType
         */
        protected static function getFactionType()
        {
        }
        /**
         * We define a connection between a faction and its ships.
         *
         * connectionType implements the following type system shorthand:
         *   type ShipConnection {
         *     edges: [ShipEdge]
         *     pageInfo: PageInfo!
         *   }
         *
         * connectionType has an edges field - a list of edgeTypes that implement the
         * following type system shorthand:
         *   type ShipEdge {
         *     cursor: String!
         *     node: Ship
         *   }
         */
        protected static function getShipConnection()
        {
        }
        /**
         * This will return a GraphQLFieldConfig for our ship
         * mutation.
         *
         * It creates these two types implicitly:
         *   input IntroduceShipInput {
         *     clientMutationId: string!
         *     shipName: string!
         *     factionId: ID!
         *   }
         *
         *   input IntroduceShipPayload {
         *     clientMutationId: string!
         *     ship: Ship
         *     faction: Faction
         *   }
         */
        public static function getShipMutation()
        {
        }
        /**
         * Returns the complete schema for StarWars tests
         *
         * @return Schema
         */
        public static function getSchema()
        {
        }
    }
}
namespace GraphQL\Executor\Promise\Adapter {
    /**
     * Simplistic (yet full-featured) implementation of Promises A+ spec for regular PHP `sync` mode
     * (using queue to defer promises execution).
     *
     * Library users are not supposed to use SyncPromise class in their resolvers.
     * Instead, they should use @see \GraphQL\Deferred which enforces `$executor` callback in the constructor.
     *
     * Root SyncPromise without explicit `$executor` will never resolve (actually throw while trying).
     * The whole point of Deferred is to ensure it never happens and that any resolver creates
     * at least one $executor to start the promise chain.
     *
     * @phpstan-type Executor callable(): mixed
     */
    class SyncPromise
    {
        public const PENDING = 'pending';
        public const FULFILLED = 'fulfilled';
        public const REJECTED = 'rejected';
        public string $state = self::PENDING;
        /** @var mixed */
        public $result;
        /**
         * Promises created in `then` method of this promise and awaiting resolution of this promise.
         *
         * @var array<
         *     int,
         *     array{
         *         self,
         *         (callable(mixed): mixed)|null,
         *         (callable(\Throwable): mixed)|null
         *     }
         * >
         */
        protected array $waiting = [];
        public static function runQueue(): void
        {
        }
        /** @param Executor|null $executor */
        public function __construct(?callable $executor = null)
        {
        }
        /**
         * @param mixed $value
         *
         * @throws \Exception
         */
        public function resolve($value): self
        {
        }
        /**
         * @throws \Exception
         *
         * @return $this
         */
        public function reject(\Throwable $reason): self
        {
        }
        /** @return \SplQueue<callable(): void> */
        public static function getQueue(): \SplQueue
        {
        }
        /**
         * @param (callable(mixed): mixed)|null $onFulfilled
         * @param (callable(\Throwable): mixed)|null $onRejected
         *
         * @throws InvariantViolation
         */
        public function then(?callable $onFulfilled = null, ?callable $onRejected = null): self
        {
        }
        /**
         * @param callable(\Throwable): mixed $onRejected
         *
         * @throws InvariantViolation
         */
        public function catch(callable $onRejected): self
        {
        }
    }
}
namespace GraphQL {
    /**
     * @phpstan-import-type Executor from SyncPromise
     */
    class Deferred extends \GraphQL\Executor\Promise\Adapter\SyncPromise
    {
        /** @param Executor $executor */
        public static function create(callable $executor): self
        {
        }
        /** @param Executor $executor */
        public function __construct(callable $executor)
        {
        }
    }
}
namespace GraphQL\Error {
    /**
     * Implementing ClientAware allows graphql-php to decide if this error is safe to be shown to clients.
     *
     * Only errors that both implement this interface and return true from `isClientSafe()`
     * will retain their original error message during formatting.
     *
     * All other errors will have their message replaced with "Internal server error".
     */
    interface ClientAware
    {
        /**
         * Is it safe to show the error message to clients?
         *
         * @api
         */
        public function isClientSafe(): bool;
    }
    /**
     * Implementing HasExtensions allows this error to provide additional data to clients.
     */
    interface ProvidesExtensions
    {
        /**
         * Data to include within the "extensions" key of the formatted error.
         *
         * @return array<string, mixed>|null
         */
        public function getExtensions(): ?array;
    }
    /**
     * Describes an Error found during the parse, validate, or
     * execute phases of performing a GraphQL operation. In addition to a message
     * and stack trace, it also includes information about the locations in a
     * GraphQL document and/or execution result that correspond to the Error.
     *
     * When the error was caused by an exception thrown in resolver, original exception
     * is available via `getPrevious()`.
     *
     * Also read related docs on [error handling](error-handling.md)
     *
     * Class extends standard PHP `\Exception`, so all standard methods of base `\Exception` class
     * are available in addition to those listed below.
     *
     * @see \GraphQL\Tests\Error\ErrorTest
     */
    class Error extends \Exception implements \JsonSerializable, \GraphQL\Error\ClientAware, \GraphQL\Error\ProvidesExtensions
    {
        /**
         * An array describing the JSON-path into the execution response which
         * corresponds to this error. Only included for errors during execution.
         * When fields are aliased, the path includes aliases.
         *
         * @var list<int|string>|null
         */
        public ?array $path;
        /**
         * An array describing the JSON-path into the execution response which
         * corresponds to this error. Only included for errors during execution.
         * This will never include aliases.
         *
         * @var list<int|string>|null
         */
        public ?array $unaliasedPath;
        /**
         * An array of GraphQL AST Nodes corresponding to this error.
         *
         * @var array<Node>|null
         */
        public ?array $nodes;
        /** @var array<string, mixed>|null */
        protected ?array $extensions;
        /**
         * @param iterable<array-key, Node|null>|Node|null $nodes
         * @param array<int, int>|null $positions
         * @param list<int|string>|null $path
         * @param array<string, mixed>|null $extensions
         * @param list<int|string>|null $unaliasedPath
         */
        public function __construct(string $message = '', $nodes = null, ?\GraphQL\Language\Source $source = null, ?array $positions = null, ?array $path = null, ?\Throwable $previous = null, ?array $extensions = null, ?array $unaliasedPath = null)
        {
        }
        /**
         * Given an arbitrary Error, presumably thrown while attempting to execute a
         * GraphQL operation, produce a new GraphQLError aware of the location in the
         * document responsible for the original Error.
         *
         * @param mixed $error
         * @param iterable<Node>|Node|null $nodes
         * @param list<int|string>|null $path
         * @param list<int|string>|null $unaliasedPath
         */
        public static function createLocatedError($error, $nodes = null, ?array $path = null, ?array $unaliasedPath = null): \GraphQL\Error\Error
        {
        }
        protected function isLocated(): bool
        {
        }
        public function isClientSafe(): bool
        {
        }
        public function getSource(): ?\GraphQL\Language\Source
        {
        }
        /** @return array<int, int> */
        public function getPositions(): array
        {
        }
        /**
         * An array of locations within the source GraphQL document which correspond to this error.
         *
         * Each entry has information about `line` and `column` within source GraphQL document:
         * $location->line;
         * $location->column;
         *
         * Errors during validation often contain multiple locations, for example to
         * point out to field mentioned in multiple fragments. Errors during execution include a
         * single location, the field which produced the error.
         *
         * @return array<int, SourceLocation>
         *
         * @api
         */
        public function getLocations(): array
        {
        }
        /** @return array<Node>|null */
        public function getNodes(): ?array
        {
        }
        /**
         * Returns an array describing the path from the root value to the field which produced this error.
         * Only included for execution errors. When fields are aliased, the path includes aliases.
         *
         * @return list<int|string>|null
         *
         * @api
         */
        public function getPath(): ?array
        {
        }
        /**
         * Returns an array describing the path from the root value to the field which produced this error.
         * Only included for execution errors. This will never include aliases.
         *
         * @return list<int|string>|null
         *
         * @api
         */
        public function getUnaliasedPath(): ?array
        {
        }
        /** @return array<string, mixed>|null */
        public function getExtensions(): ?array
        {
        }
        /**
         * Specify data which should be serialized to JSON.
         *
         * @see http://php.net/manual/en/jsonserializable.jsonserialize.php
         *
         * @return array<string, mixed> data which can be serialized by <b>json_encode</b>,
         *                              which is a value of any type other than a resource
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize(): array
        {
        }
        public function __toString(): string
        {
        }
    }
    /**
     * @phpstan-type InputPath list<string|int>
     */
    class CoercionError extends \GraphQL\Error\Error
    {
        /** @var InputPath|null */
        public ?array $inputPath;
        /** @var mixed whatever invalid value was passed */
        public $invalidValue;
        /**
         * @param InputPath|null $inputPath
         * @param mixed $invalidValue whatever invalid value was passed
         *
         * @return static
         */
        public static function make(string $message, ?array $inputPath, $invalidValue, ?\Throwable $previous = null): self
        {
        }
        public function printInputPath(): ?string
        {
        }
        public function printInvalidValue(): string
        {
        }
    }
    /**
     * Collection of flags for [error debugging](error-handling.md#debugging-tools).
     */
    final class DebugFlag
    {
        public const NONE = 0;
        public const INCLUDE_DEBUG_MESSAGE = 1;
        public const INCLUDE_TRACE = 2;
        public const RETHROW_INTERNAL_EXCEPTIONS = 4;
        public const RETHROW_UNSAFE_EXCEPTIONS = 8;
    }
    /**
     * This class is used for [default error formatting](error-handling.md).
     * It converts PHP exceptions to [spec-compliant errors](https://facebook.github.io/graphql/#sec-Errors)
     * and provides tools for error debugging.
     *
     * @see ExecutionResult
     *
     * @phpstan-import-type SerializableError from ExecutionResult
     * @phpstan-import-type ErrorFormatter from ExecutionResult
     *
     * @see \GraphQL\Tests\Error\FormattedErrorTest
     */
    class FormattedError
    {
        /**
         * Set default error message for internal errors formatted using createFormattedError().
         * This value can be overridden by passing 3rd argument to `createFormattedError()`.
         *
         * @api
         */
        public static function setInternalErrorMessage(string $msg): void
        {
        }
        /**
         * Prints a GraphQLError to a string, representing useful location information
         * about the error's position in the source.
         */
        public static function printError(\GraphQL\Error\Error $error): string
        {
        }
        /**
         * Convert any exception to a GraphQL spec compliant array.
         *
         * This method only exposes the exception message when the given exception
         * implements the ClientAware interface, or when debug flags are passed.
         *
         * For a list of available debug flags @see \GraphQL\Error\DebugFlag constants.
         *
         * @return SerializableError
         *
         * @api
         */
        public static function createFromException(\Throwable $exception, int $debugFlag = \GraphQL\Error\DebugFlag::NONE, ?string $internalErrorMessage = null): array
        {
        }
        /**
         * Decorates spec-compliant $formattedError with debug entries according to $debug flags.
         *
         * @param SerializableError $formattedError
         * @param int $debugFlag For available flags @see \GraphQL\Error\DebugFlag
         *
         * @throws \Throwable
         *
         * @return SerializableError
         */
        public static function addDebugEntries(array $formattedError, \Throwable $e, int $debugFlag): array
        {
        }
        /**
         * Prepares final error formatter taking in account $debug flags.
         *
         * If initial formatter is not set, FormattedError::createFromException is used.
         *
         * @phpstan-param ErrorFormatter|null $formatter
         */
        public static function prepareFormatter(?callable $formatter, int $debug): callable
        {
        }
        /**
         * Returns error trace as serializable array.
         *
         * @return array<int, array{
         *     file?: string,
         *     line?: int,
         *     function?: string,
         *     call?: string,
         * }>
         *
         * @api
         */
        public static function toSafeTrace(\Throwable $error): array
        {
        }
        /** @param mixed $var */
        public static function printVar($var): string
        {
        }
    }
    /**
     * Note:
     * This exception should not inherit base Error exception as it is raised when there is an error somewhere in
     * user-land code.
     */
    class InvariantViolation extends \LogicException
    {
    }
    /**
     * Thrown when failing to serialize a leaf value.
     *
     * Not generally safe for clients, as the wrong given value could
     * be something not intended to ever be seen by clients.
     */
    class SerializationError extends \Exception
    {
    }
    class SyntaxError extends \GraphQL\Error\Error
    {
        public function __construct(\GraphQL\Language\Source $source, int $position, string $description)
        {
        }
    }
    /**
     * Caused by GraphQL clients and can safely be displayed.
     */
    class UserError extends \RuntimeException implements \GraphQL\Error\ClientAware
    {
        public function isClientSafe(): bool
        {
        }
    }
    /**
     * Encapsulates warnings produced by the library.
     *
     * Warnings can be suppressed (individually or all) if required.
     * Also, it is possible to override warning handler (which is **trigger_error()** by default).
     *
     * @phpstan-type WarningHandler callable(string $errorMessage, int $warningId, ?int $messageLevel): void
     */
    final class Warning
    {
        public const NONE = 0;
        public const WARNING_ASSIGN = 2;
        public const WARNING_CONFIG = 4;
        public const WARNING_FULL_SCHEMA_SCAN = 8;
        public const WARNING_CONFIG_DEPRECATION = 16;
        public const WARNING_NOT_A_TYPE = 32;
        public const ALL = 63;
        /**
         * Sets warning handler which can intercept all system warnings.
         * When not set, trigger_error() is used to notify about warnings.
         *
         * @phpstan-param WarningHandler|null $warningHandler
         *
         * @api
         */
        public static function setWarningHandler(?callable $warningHandler = null): void
        {
        }
        /**
         * Suppress warning by id (has no effect when custom warning handler is set).
         *
         * @param bool|int $suppress
         *
         * @example Warning::suppress(Warning::WARNING_NOT_A_TYPE) suppress a specific warning
         * @example Warning::suppress(true) suppresses all warnings
         * @example Warning::suppress(false) enables all warnings
         *
         * @api
         */
        public static function suppress($suppress = true): void
        {
        }
        /**
         * Re-enable previously suppressed warning by id (has no effect when custom warning handler is set).
         *
         * @param bool|int $enable
         *
         * @example Warning::suppress(Warning::WARNING_NOT_A_TYPE) re-enables a specific warning
         * @example Warning::suppress(true) re-enables all warnings
         * @example Warning::suppress(false) suppresses all warnings
         *
         * @api
         */
        public static function enable($enable = true): void
        {
        }
        public static function warnOnce(string $errorMessage, int $warningId, ?int $messageLevel = null): void
        {
        }
        public static function warn(string $errorMessage, int $warningId, ?int $messageLevel = null): void
        {
        }
    }
}
namespace GraphQL\Executor {
    /**
     * Data that must be available at all points during query execution.
     *
     * Namely, schema of the type system that is currently executing,
     * and the fragments defined in the query document.
     *
     * @phpstan-import-type FieldResolver from Executor
     * @phpstan-import-type ArgsMapper from Executor
     */
    class ExecutionContext
    {
        public \GraphQL\Type\Schema $schema;
        /** @var array<string, FragmentDefinitionNode> */
        public array $fragments;
        /** @var mixed */
        public $rootValue;
        /** @var mixed */
        public $contextValue;
        public \GraphQL\Language\AST\OperationDefinitionNode $operation;
        /** @var array<string, mixed> */
        public array $variableValues;
        /**
         * @var callable
         *
         * @phpstan-var FieldResolver
         */
        public $fieldResolver;
        /**
         * @var callable
         *
         * @phpstan-var ArgsMapper
         */
        public $argsMapper;
        /** @var list<Error> */
        public array $errors;
        public \GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter;
        /**
         * @param array<string, FragmentDefinitionNode> $fragments
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed> $variableValues
         * @param list<Error> $errors
         *
         * @phpstan-param FieldResolver $fieldResolver
         */
        public function __construct(\GraphQL\Type\Schema $schema, array $fragments, $rootValue, $contextValue, \GraphQL\Language\AST\OperationDefinitionNode $operation, array $variableValues, array $errors, callable $fieldResolver, callable $argsMapper, \GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter)
        {
        }
        public function addError(\GraphQL\Error\Error $error): void
        {
        }
    }
    /**
     * Returned after [query execution](executing-queries.md).
     * Represents both - result of successful execution and of a failed one
     * (with errors collected in `errors` prop).
     *
     * Could be converted to [spec-compliant](https://facebook.github.io/graphql/#sec-Response-Format)
     * serializable array using `toArray()`.
     *
     * @phpstan-type SerializableError array{
     *   message: string,
     *   locations?: array<int, array{line: int, column: int}>,
     *   path?: array<int, int|string>,
     *   extensions?: array<string, mixed>
     * }
     * @phpstan-type SerializableErrors list<SerializableError>
     * @phpstan-type SerializableResult array{
     *     data?: array<string, mixed>,
     *     errors?: SerializableErrors,
     *     extensions?: array<string, mixed>
     * }
     * @phpstan-type ErrorFormatter callable(\Throwable): SerializableError
     * @phpstan-type ErrorsHandler callable(list<Error> $errors, ErrorFormatter $formatter): SerializableErrors
     *
     * @see \GraphQL\Tests\Executor\ExecutionResultTest
     */
    class ExecutionResult implements \JsonSerializable
    {
        /**
         * Data collected from resolvers during query execution.
         *
         * @api
         *
         * @var array<string, mixed>|null
         */
        public ?array $data = null;
        /**
         * Errors registered during query execution.
         *
         * If an error was caused by exception thrown in resolver, $error->getPrevious() would
         * contain original exception.
         *
         * @api
         *
         * @var list<Error>
         */
        public array $errors = [];
        /**
         * User-defined serializable array of extensions included in serialized result.
         *
         * @api
         *
         * @var array<string, mixed>|null
         */
        public ?array $extensions = null;
        /**
         * @param array<string, mixed>|null $data
         * @param list<Error> $errors
         * @param array<string, mixed> $extensions
         */
        public function __construct(?array $data = null, array $errors = [], array $extensions = [])
        {
        }
        /**
         * Define custom error formatting (must conform to http://facebook.github.io/graphql/#sec-Errors).
         *
         * Expected signature is: function (GraphQL\Error\Error $error): array
         *
         * Default formatter is "GraphQL\Error\FormattedError::createFromException"
         *
         * Expected returned value must be an array:
         * array(
         *    'message' => 'errorMessage',
         *    // ... other keys
         * );
         *
         * @phpstan-param ErrorFormatter|null $errorFormatter
         *
         * @api
         */
        public function setErrorFormatter(?callable $errorFormatter): self
        {
        }
        /**
         * Define custom logic for error handling (filtering, logging, etc).
         *
         * Expected handler signature is:
         * fn (array $errors, callable $formatter): array
         *
         * Default handler is:
         * fn (array $errors, callable $formatter): array => array_map($formatter, $errors)
         *
         * @phpstan-param ErrorsHandler|null $errorsHandler
         *
         * @api
         */
        public function setErrorsHandler(?callable $errorsHandler): self
        {
        }
        /** @phpstan-return SerializableResult */
        #[\ReturnTypeWillChange]
        public function jsonSerialize(): array
        {
        }
        /**
         * Converts GraphQL query result to spec-compliant serializable array using provided
         * errors handler and formatter.
         *
         * If debug argument is passed, output of error formatter is enriched which debugging information
         * ("debugMessage", "trace" keys depending on flags).
         *
         * $debug argument must sum of flags from @see \GraphQL\Error\DebugFlag
         *
         * @phpstan-return SerializableResult
         *
         * @api
         */
        public function toArray(int $debug = \GraphQL\Error\DebugFlag::NONE): array
        {
        }
    }
    /**
     * Implements the "Evaluating requests" section of the GraphQL specification.
     *
     * @phpstan-type ArgsMapper callable(array<string, mixed>, FieldDefinition, FieldNode, mixed): mixed
     * @phpstan-type FieldResolver callable(mixed, array<string, mixed>, mixed, ResolveInfo): mixed
     * @phpstan-type ImplementationFactory callable(PromiseAdapter, Schema, DocumentNode, mixed, mixed, array<mixed>, ?string, callable, callable): ExecutorImplementation
     *
     * @see \GraphQL\Tests\Executor\ExecutorTest
     */
    class Executor
    {
        /** @phpstan-return FieldResolver */
        public static function getDefaultFieldResolver(): callable
        {
        }
        /**
         * Set a custom default resolve function.
         *
         * @phpstan-param FieldResolver $fieldResolver
         */
        public static function setDefaultFieldResolver(callable $fieldResolver): void
        {
        }
        /** @phpstan-return ArgsMapper */
        public static function getDefaultArgsMapper(): callable
        {
        }
        /** @phpstan-param ArgsMapper $argsMapper */
        public static function setDefaultArgsMapper(callable $argsMapper): void
        {
        }
        public static function getDefaultPromiseAdapter(): \GraphQL\Executor\Promise\PromiseAdapter
        {
        }
        /** Set a custom default promise adapter. */
        public static function setDefaultPromiseAdapter(?\GraphQL\Executor\Promise\PromiseAdapter $defaultPromiseAdapter = null): void
        {
        }
        /** @phpstan-return ImplementationFactory */
        public static function getImplementationFactory(): callable
        {
        }
        /**
         * Set a custom executor implementation factory.
         *
         * @phpstan-param ImplementationFactory $implementationFactory
         */
        public static function setImplementationFactory(callable $implementationFactory): void
        {
        }
        /**
         * Executes DocumentNode against given $schema.
         *
         * Always returns ExecutionResult and never throws.
         * All errors which occur during operation execution are collected in `$result->errors`.
         *
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed>|null $variableValues
         *
         * @phpstan-param FieldResolver|null $fieldResolver
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public static function execute(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue = null, $contextValue = null, ?array $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null): \GraphQL\Executor\ExecutionResult
        {
        }
        /**
         * Same as execute(), but requires promise adapter and returns a promise which is always
         * fulfilled with an instance of ExecutionResult and never rejected.
         *
         * Useful for async PHP platforms.
         *
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed>|null $variableValues
         *
         * @phpstan-param FieldResolver|null $fieldResolver
         * @phpstan-param ArgsMapper|null $argsMapper
         *
         * @api
         */
        public static function promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue = null, $contextValue = null, ?array $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, ?callable $argsMapper = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * If a resolve function is not given, then a default resolve behavior is used
         * which takes the property of the root value of the same name as the field
         * and returns it as the result, or if it's a function, returns the result
         * of calling that function while passing along args and context.
         *
         * @param mixed $objectLikeValue
         * @param array<string, mixed> $args
         * @param mixed $contextValue
         *
         * @return mixed
         */
        public static function defaultFieldResolver($objectLikeValue, array $args, $contextValue, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @template T of array<string, mixed>
         *
         * @param T $args
         *
         * @return T
         */
        public static function defaultArgsMapper(array $args): array
        {
        }
    }
    interface ExecutorImplementation
    {
        /** Returns promise of {@link ExecutionResult}. Promise should always resolve, never reject. */
        public function doExecute(): \GraphQL\Executor\Promise\Promise;
    }
}
namespace GraphQL\Executor\Promise {
    /**
     * Provides a means for integration of async PHP platforms ([related docs](data-fetching.md#async-php)).
     */
    interface PromiseAdapter
    {
        /**
         * Is the value a promise or a deferred of the underlying platform?
         *
         * @param mixed $value
         *
         * @api
         */
        public function isThenable($value): bool;
        /**
         * Converts thenable of the underlying platform into GraphQL\Executor\Promise\Promise instance.
         *
         * @param mixed $thenable
         *
         * @api
         */
        public function convertThenable($thenable): \GraphQL\Executor\Promise\Promise;
        /**
         * Accepts our Promise wrapper, extracts adopted promise out of it and executes actual `then` logic described
         * in Promises/A+ specs. Then returns new wrapped instance of GraphQL\Executor\Promise\Promise.
         *
         * @api
         */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise;
        /**
         * Creates a Promise from the given resolver callable.
         *
         * @param callable(callable $resolve, callable $reject): void $resolver
         *
         * @api
         */
        public function create(callable $resolver): \GraphQL\Executor\Promise\Promise;
        /**
         * Creates a fulfilled Promise for a value if the value is not a promise.
         *
         * @param mixed $value
         *
         * @api
         */
        public function createFulfilled($value = null): \GraphQL\Executor\Promise\Promise;
        /**
         * Creates a rejected promise for a reason if the reason is not a promise.
         *
         * If the provided reason is a promise, then it is returned as-is.
         *
         * @api
         */
        public function createRejected(\Throwable $reason): \GraphQL\Executor\Promise\Promise;
        /**
         * Given an iterable of promises (or values), returns a promise that is fulfilled when all the
         * items in the iterable are fulfilled.
         *
         * @param iterable<Promise|mixed> $promisesOrValues
         *
         * @api
         */
        public function all(iterable $promisesOrValues): \GraphQL\Executor\Promise\Promise;
    }
}
namespace GraphQL\Executor\Promise\Adapter {
    class AmpPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        public function isThenable($value): bool
        {
        }
        /** @throws InvariantViolation */
        public function convertThenable($thenable): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function create(callable $resolver): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Error
         * @throws InvariantViolation
         */
        public function createFulfilled($value = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function createRejected(\Throwable $reason): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Error
         * @throws InvariantViolation
         */
        public function all(iterable $promisesOrValues): \GraphQL\Executor\Promise\Promise
        {
        }
    }
    class ReactPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        public function isThenable($value): bool
        {
        }
        /** @throws InvariantViolation */
        public function convertThenable($thenable): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function create(callable $resolver): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function createFulfilled($value = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function createRejected(\Throwable $reason): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function all(iterable $promisesOrValues): \GraphQL\Executor\Promise\Promise
        {
        }
    }
    /**
     * Allows changing order of field resolution even in sync environments
     * (by leveraging queue of deferreds and promises).
     */
    class SyncPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        public function isThenable($value): bool
        {
        }
        /** @throws InvariantViolation */
        public function convertThenable($thenable): \GraphQL\Executor\Promise\Promise
        {
        }
        /** @throws InvariantViolation */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function create(callable $resolver): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function createFulfilled($value = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function createRejected(\Throwable $reason): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function all(iterable $promisesOrValues): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * Synchronously wait when promise completes.
         *
         * @throws InvariantViolation
         *
         * @return mixed
         */
        public function wait(\GraphQL\Executor\Promise\Promise $promise)
        {
        }
        /** Execute just before starting to run promise completion. */
        protected function beforeWait(\GraphQL\Executor\Promise\Promise $promise): void
        {
        }
        /** Execute while running promise completion. */
        protected function onWait(\GraphQL\Executor\Promise\Promise $promise): void
        {
        }
    }
}
namespace GraphQL\Executor\Promise {
    /**
     * Convenience wrapper for promises represented by Promise Adapter.
     */
    class Promise
    {
        /** @var SyncPromise|ReactPromise<mixed>|AmpPromise<mixed> */
        public $adoptedPromise;
        /**
         * @param mixed $adoptedPromise
         *
         * @throws InvariantViolation
         */
        public function __construct($adoptedPromise, \GraphQL\Executor\Promise\PromiseAdapter $adapter)
        {
        }
        public function then(?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
        {
        }
    }
}
namespace GraphQL\Executor {
    /**
     * @phpstan-import-type FieldResolver from Executor
     * @phpstan-import-type Path from ResolveInfo
     * @phpstan-import-type ArgsMapper from Executor
     *
     * @phpstan-type Fields \ArrayObject<string, \ArrayObject<int, FieldNode>>
     */
    class ReferenceExecutor implements \GraphQL\Executor\ExecutorImplementation
    {
        protected static \stdClass $UNDEFINED;
        protected \GraphQL\Executor\ExecutionContext $exeContext;
        /**
         * @var \SplObjectStorage<
         *     ObjectType,
         *     \SplObjectStorage<
         *         \ArrayObject<int, FieldNode>,
         *         \ArrayObject<
         *             string,
         *             \ArrayObject<int, FieldNode>
         *         >
         *     >
         * >
         */
        protected \SplObjectStorage $subFieldCache;
        /**
         * @var \SplObjectStorage<
         *     FieldDefinition,
         *     \SplObjectStorage<FieldNode, mixed>
         * >
         */
        protected \SplObjectStorage $fieldArgsCache;
        protected \GraphQL\Type\Definition\FieldDefinition $schemaMetaFieldDef;
        protected \GraphQL\Type\Definition\FieldDefinition $typeMetaFieldDef;
        protected \GraphQL\Type\Definition\FieldDefinition $typeNameMetaFieldDef;
        protected function __construct(\GraphQL\Executor\ExecutionContext $context)
        {
        }
        /**
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed> $variableValues
         *
         * @phpstan-param FieldResolver $fieldResolver
         * @phpstan-param ArgsMapper $argsMapper
         *
         * @throws \Exception
         */
        public static function create(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue, $contextValue, array $variableValues, ?string $operationName, callable $fieldResolver, ?callable $argsMapper = null): \GraphQL\Executor\ExecutorImplementation
        {
        }
        /**
         * Constructs an ExecutionContext object from the arguments passed to execute,
         * which we will pass throughout the other execution methods.
         *
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed> $rawVariableValues
         *
         * @phpstan-param FieldResolver $fieldResolver
         *
         * @throws \Exception
         *
         * @return ExecutionContext|list<Error>
         */
        protected static function buildExecutionContext(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue, $contextValue, array $rawVariableValues, ?string $operationName, callable $fieldResolver, callable $argsMapper, \GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter)
        {
        }
        /**
         * @throws \Exception
         * @throws Error
         */
        public function doExecute(): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @param mixed $data
         *
         * @return ExecutionResult|Promise
         */
        protected function buildResponse($data)
        {
        }
        /**
         * Implements the "Evaluating operations" section of the spec.
         *
         * @param mixed $rootValue
         *
         * @throws \Exception
         *
         * @return array<mixed>|Promise|\stdClass|null
         */
        protected function executeOperation(\GraphQL\Language\AST\OperationDefinitionNode $operation, $rootValue)
        {
        }
        /** @param mixed $error */
        public function onError($error): ?\GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * Extracts the root type of the operation from the schema.
         *
         * @throws \Exception
         * @throws Error
         */
        protected function getOperationRootType(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\OperationDefinitionNode $operation): \GraphQL\Type\Definition\ObjectType
        {
        }
        /**
         * Given a selectionSet, adds all fields in that selection to
         * the passed in map of fields, and returns it at the end.
         *
         * CollectFields requires the "runtime type" of an object. For a field which
         * returns an Interface or Union type, the "runtime type" will be the actual
         * Object type returned by that field.
         *
         * @param \ArrayObject<string, true> $visitedFragmentNames
         *
         * @phpstan-param Fields $fields
         *
         * @throws \Exception
         * @throws Error
         *
         * @phpstan-return Fields
         */
        protected function collectFields(\GraphQL\Type\Definition\ObjectType $runtimeType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, \ArrayObject $fields, \ArrayObject $visitedFragmentNames): \ArrayObject
        {
        }
        /**
         * Determines if a field should be included based on the @include and @skip
         * directives, where @skip has higher precedence than @include.
         *
         * @param FragmentSpreadNode|FieldNode|InlineFragmentNode $node
         *
         * @throws \Exception
         * @throws Error
         */
        protected function shouldIncludeNode(\GraphQL\Language\AST\SelectionNode $node): bool
        {
        }
        /** Implements the logic to compute the key of a given fields entry. */
        protected static function getFieldEntryKey(\GraphQL\Language\AST\FieldNode $node): string
        {
        }
        /**
         * Determines if a fragment is applicable to the given type.
         *
         * @param FragmentDefinitionNode|InlineFragmentNode $fragment
         *
         * @throws \Exception
         */
        protected function doesFragmentConditionMatch(\GraphQL\Language\AST\Node $fragment, \GraphQL\Type\Definition\ObjectType $type): bool
        {
        }
        /**
         * Implements the "Evaluating selection sets" section of the spec for "write" mode.
         *
         * @param mixed $rootValue
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $contextValue
         *
         * @phpstan-param Fields $fields
         *
         * @return array<mixed>|Promise|\stdClass
         */
        protected function executeFieldsSerially(\GraphQL\Type\Definition\ObjectType $parentType, $rootValue, array $path, array $unaliasedPath, \ArrayObject $fields, $contextValue)
        {
        }
        /**
         * Resolves the field on the given root value.
         *
         * In particular, this figures out the value that the field returns
         * by calling its resolve function, then calls completeValue to complete promises,
         * serialize scalars, or execute the sub-selection-set for objects.
         *
         * @param mixed $rootValue
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $contextValue
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         *
         * @phpstan-param Path                $path
         * @phpstan-param Path                $unaliasedPath
         *
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<mixed>|\Throwable|mixed|null
         */
        protected function resolveField(\GraphQL\Type\Definition\ObjectType $parentType, $rootValue, \ArrayObject $fieldNodes, string $responseName, array $path, array $unaliasedPath, $contextValue)
        {
        }
        /**
         * This method looks up the field on the given type definition.
         *
         * It has special casing for the two introspection fields, __schema
         * and __typename. __typename is special because it can always be
         * queried as a field, even in situations where no other fields
         * are allowed, like on a Union. __schema could get automatically
         * added to the query type, but that would require mutating type
         * definitions, which would cause issues.
         *
         * @throws InvariantViolation
         */
        protected function getFieldDef(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\ObjectType $parentType, string $fieldName): ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        /**
         * Isolates the "ReturnOrAbrupt" behavior to not de-opt the `resolveField` function.
         * Returns the result of resolveFn or the abrupt-return Error object.
         *
         * @param mixed $rootValue
         * @param mixed $contextValue
         *
         * @phpstan-param FieldResolver $resolveFn
         *
         * @return \Throwable|Promise|mixed
         */
        protected function resolveFieldValueOrError(\GraphQL\Type\Definition\FieldDefinition $fieldDef, \GraphQL\Language\AST\FieldNode $fieldNode, callable $resolveFn, callable $argsMapper, $rootValue, \GraphQL\Type\Definition\ResolveInfo $info, $contextValue)
        {
        }
        /**
         * This is a small wrapper around completeValue which detects and logs errors
         * in the execution context.
         *
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $contextValue
         * @param mixed $result
         *
         * @phpstan-param Path                $path
         * @phpstan-param Path                $unaliasedPath
         *
         * @throws Error
         *
         * @return array<mixed>|Promise|\stdClass|null
         */
        protected function completeValueCatchingError(\GraphQL\Type\Definition\Type $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, array $path, array $unaliasedPath, $result, $contextValue)
        {
        }
        /**
         * @param mixed $rawError
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         *
         * @throws Error
         */
        protected function handleFieldError($rawError, \ArrayObject $fieldNodes, array $path, array $unaliasedPath, \GraphQL\Type\Definition\Type $returnType): void
        {
        }
        /**
         * Implements the instructions for completeValue as defined in the
         * "Field entries" section of the spec.
         *
         * If the field type is Non-Null, then this recursively completes the value
         * for the inner type. It throws a field error if that completion returns null,
         * as per the "Nullability" section of the spec.
         *
         * If the field type is a List, then this recursively completes the value
         * for the inner type on each item in the list.
         *
         * If the field type is a Scalar or Enum, ensures the completed value is a legal
         * value of the type by calling the `serialize` method of GraphQL type
         * definition.
         *
         * If the field is an abstract type, determine the runtime type of the value
         * and then complete based on that type.
         *
         * Otherwise, the field type expects a sub-selection set, and will complete the
         * value by evaluating all sub-selections.
         *
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $result
         * @param mixed $contextValue
         *
         * @throws \Throwable
         * @throws Error
         *
         * @return array<mixed>|mixed|Promise|null
         */
        protected function completeValue(\GraphQL\Type\Definition\Type $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, array $path, array $unaliasedPath, &$result, $contextValue)
        {
        }
        /** @param mixed $value */
        protected function isPromise($value): bool
        {
        }
        /**
         * Only returns the value if it acts like a Promise, i.e. has a "then" function,
         * otherwise returns null.
         *
         * @param mixed $value
         */
        protected function getPromise($value): ?\GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * Similar to array_reduce(), however the reducing callback may return
         * a Promise, in which case reduction will continue after each promise resolves.
         *
         * If the callback does not return a Promise, then this function will also not
         * return a Promise.
         *
         * @param array<mixed> $values
         * @param Promise|mixed|null $initialValue
         *
         * @return Promise|mixed|null
         */
        protected function promiseReduce(array $values, callable $callback, $initialValue)
        {
        }
        /**
         * Complete a list value by completing each item in the list with the inner type.
         *
         * @param ListOfType<Type&OutputType> $returnType
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param iterable<mixed> $results
         * @param mixed $contextValue
         *
         * @throws Error
         *
         * @return array<mixed>|Promise|\stdClass
         */
        protected function completeListValue(\GraphQL\Type\Definition\ListOfType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, array $path, array $unaliasedPath, iterable &$results, $contextValue)
        {
        }
        /**
         * Complete a Scalar or Enum by serializing to a valid value, throwing if serialization is not possible.
         *
         * @param mixed $result
         *
         * @throws \Exception
         *
         * @return mixed
         */
        protected function completeLeafValue(\GraphQL\Type\Definition\LeafType $returnType, &$result)
        {
        }
        /**
         * Complete a value of an abstract type by determining the runtime object type
         * of that value, then complete the value for that type.
         *
         * @param AbstractType&Type $returnType
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param array<mixed> $result
         * @param mixed $contextValue
         *
         * @throws \Exception
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<mixed>|Promise|\stdClass
         */
        protected function completeAbstractValue(\GraphQL\Type\Definition\AbstractType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, array $path, array $unaliasedPath, &$result, $contextValue)
        {
        }
        /**
         * If a resolveType function is not given, then a default resolve behavior is
         * used which attempts two strategies:.
         *
         * First, See if the provided value has a `__typename` field defined, if so, use
         * that value as name of the resolved type.
         *
         * Otherwise, test each possible type for the abstract type by calling
         * isTypeOf for the object being coerced, returning the first type that matches.
         *
         * @param mixed|null $value
         * @param mixed|null $contextValue
         * @param AbstractType&Type $abstractType
         *
         * @throws InvariantViolation
         *
         * @return Promise|Type|string|null
         */
        protected function defaultTypeResolver($value, $contextValue, \GraphQL\Type\Definition\ResolveInfo $info, \GraphQL\Type\Definition\AbstractType $abstractType)
        {
        }
        /**
         * Complete an Object value by executing all sub-selections.
         *
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $result
         * @param mixed $contextValue
         *
         * @throws \Exception
         * @throws Error
         *
         * @return array<mixed>|Promise|\stdClass
         */
        protected function completeObjectValue(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, array $path, array $unaliasedPath, &$result, $contextValue)
        {
        }
        /**
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param array<mixed> $result
         */
        protected function invalidReturnTypeError(\GraphQL\Type\Definition\ObjectType $returnType, $result, \ArrayObject $fieldNodes): \GraphQL\Error\Error
        {
        }
        /**
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $result
         * @param mixed $contextValue
         *
         * @throws \Exception
         * @throws Error
         *
         * @return array<mixed>|Promise|\stdClass
         */
        protected function collectAndExecuteSubfields(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes, array $path, array $unaliasedPath, &$result, $contextValue)
        {
        }
        /**
         * A memoized collection of relevant subfields with regard to the return
         * type. Memoizing ensures the subfields are not repeatedly calculated, which
         * saves overhead when resolving lists of values.
         *
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         *
         * @throws \Exception
         * @throws Error
         *
         * @phpstan-return Fields
         */
        protected function collectSubFields(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes): \ArrayObject
        {
        }
        /**
         * Implements the "Evaluating selection sets" section of the spec for "read" mode.
         *
         * @param mixed $rootValue
         * @param list<string|int> $path
         * @param list<string|int> $unaliasedPath
         * @param mixed $contextValue
         *
         * @phpstan-param Fields $fields
         *
         * @throws Error
         * @throws InvariantViolation
         *
         * @return Promise|\stdClass|array<mixed>
         */
        protected function executeFields(\GraphQL\Type\Definition\ObjectType $parentType, $rootValue, array $path, array $unaliasedPath, \ArrayObject $fields, $contextValue)
        {
        }
        /**
         * Differentiate empty objects from empty lists.
         *
         * @see https://github.com/webonyx/graphql-php/issues/59
         *
         * @param array<mixed>|mixed $results
         *
         * @return array<mixed>|\stdClass|mixed
         */
        protected static function fixResultsIfEmptyArray($results)
        {
        }
        /**
         * Transform an associative array with Promises to a Promise which resolves to an
         * associative array where all Promises were resolved.
         *
         * @param array<string, Promise|mixed> $assoc
         */
        protected function promiseForAssocArray(array $assoc): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @param mixed $runtimeTypeOrName
         * @param AbstractType&Type $returnType
         * @param mixed $result
         *
         * @throws InvariantViolation
         */
        protected function ensureValidRuntimeType($runtimeTypeOrName, \GraphQL\Type\Definition\AbstractType $returnType, \GraphQL\Type\Definition\ResolveInfo $info, &$result): \GraphQL\Type\Definition\ObjectType
        {
        }
    }
    /**
     * When the object passed as `$contextValue` to GraphQL execution implements this,
     * its `clone()` method will be called before passing the context down to a field.
     * This allows passing information to child fields in the query tree without affecting sibling or parent fields.
     */
    interface ScopedContext
    {
        public function clone(): self;
    }
    /**
     * @see ArgumentNode - force IDE import
     *
     * @phpstan-import-type ArgumentNodeValue from ArgumentNode
     *
     * @see \GraphQL\Tests\Executor\ValuesTest
     */
    class Values
    {
        /**
         * Prepares an object map of variables of the correct type based on the provided
         * variable definitions and arbitrary input. If the input cannot be coerced
         * to match the variable definitions, an Error will be thrown.
         *
         * @param NodeList<VariableDefinitionNode> $varDefNodes
         * @param array<string, mixed> $rawVariableValues
         *
         * @throws \Exception
         *
         * @return array{array<int, Error>, null}|array{null, array<string, mixed>}
         */
        public static function getVariableValues(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\NodeList $varDefNodes, array $rawVariableValues): array
        {
        }
        /**
         * Prepares an object map of argument values given a directive definition
         * and an AST node which may contain directives. Optionally also accepts a map
         * of variable values.
         *
         * If the directive does not exist on the node, returns undefined.
         *
         * @param EnumTypeDefinitionNode|EnumTypeExtensionNode|EnumValueDefinitionNode|FieldDefinitionNode|FieldNode|FragmentDefinitionNode|FragmentSpreadNode|InlineFragmentNode|InputObjectTypeDefinitionNode|InputObjectTypeExtensionNode|InputValueDefinitionNode|InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode|ObjectTypeDefinitionNode|ObjectTypeExtensionNode|OperationDefinitionNode|ScalarTypeDefinitionNode|ScalarTypeExtensionNode|SchemaExtensionNode|UnionTypeDefinitionNode|UnionTypeExtensionNode|VariableDefinitionNode $node
         * @param array<string, mixed>|null $variableValues
         *
         * @throws \Exception
         * @throws Error
         *
         * @return array<string, mixed>|null
         */
        public static function getDirectiveValues(\GraphQL\Type\Definition\Directive $directiveDef, \GraphQL\Language\AST\Node $node, ?array $variableValues = null): ?array
        {
        }
        /**
         * Prepares an object map of argument values given a list of argument
         * definitions and list of argument AST nodes.
         *
         * @param FieldDefinition|Directive $def
         * @param FieldNode|DirectiveNode $node
         * @param array<string, mixed>|null $variableValues
         *
         * @throws \Exception
         * @throws Error
         *
         * @return array<string, mixed>
         */
        public static function getArgumentValues($def, \GraphQL\Language\AST\Node $node, ?array $variableValues = null): array
        {
        }
        /**
         * @param FieldDefinition|Directive $def
         * @param array<string, ArgumentNodeValue> $argumentValueMap
         * @param array<string, mixed>|null $variableValues
         *
         * @throws \Exception
         * @throws Error
         *
         * @return array<string, mixed>
         */
        public static function getArgumentValuesForMap($def, array $argumentValueMap, ?array $variableValues = null, ?\GraphQL\Language\AST\Node $referenceNode = null): array
        {
        }
    }
}
namespace GraphQL {
    /**
     * This is the primary facade for fulfilling GraphQL operations.
     * See [related documentation](executing-queries.md).
     *
     * @phpstan-import-type ArgsMapper from Executor
     * @phpstan-import-type FieldResolver from Executor
     *
     * @see \GraphQL\Tests\GraphQLTest
     */
    class GraphQL
    {
        /**
         * Executes graphql query.
         *
         * More sophisticated GraphQL servers, such as those which persist queries,
         * may wish to separate the validation and execution phases to a static time
         * tooling step, and a server runtime step.
         *
         * Available options:
         *
         * schema:
         *    The GraphQL type system to use when validating and executing a query.
         * source:
         *    A GraphQL language formatted string representing the requested operation.
         * rootValue:
         *    The value provided as the first argument to resolver functions on the top
         *    level type (e.g. the query object type).
         * contextValue:
         *    The context value is provided as an argument to resolver functions after
         *    field arguments. It is used to pass shared information useful at any point
         *    during executing this query, for example the currently logged in user and
         *    connections to databases or other services.
         *    If the passed object implements the `ScopedContext` interface,
         *    its `clone()` method will be called before passing the context down to a field.
         *    This allows passing information to child fields in the query tree without affecting sibling or parent fields.
         * variableValues:
         *    A mapping of variable name to runtime value to use for all variables
         *    defined in the requestString.
         * operationName:
         *    The name of the operation to use if requestString contains multiple
         *    possible operations. Can be omitted if requestString contains only
         *    one operation.
         * fieldResolver:
         *    A resolver function to use when one is not provided by the schema.
         *    If not provided, the default field resolver is used (which looks for a
         *    value on the source value with the field's name).
         * validationRules:
         *    A set of rules for query validation step. Default value is all available rules.
         *    Empty array would allow to skip query validation (may be convenient for persisted
         *    queries which are validated before persisting and assumed valid during execution)
         *
         * @param string|DocumentNode $source
         * @param mixed $rootValue
         * @param mixed $contextValue
         * @param array<string, mixed>|null $variableValues
         * @param array<ValidationRule>|null $validationRules
         *
         * @api
         *
         * @throws \Exception
         * @throws InvariantViolation
         */
        public static function executeQuery(\GraphQL\Type\Schema $schema, $source, $rootValue = null, $contextValue = null, ?array $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, ?array $validationRules = null): \GraphQL\Executor\ExecutionResult
        {
        }
        /**
         * Same as executeQuery(), but requires PromiseAdapter and always returns a Promise.
         * Useful for Async PHP platforms.
         *
         * @param string|DocumentNode $source
         * @param mixed $rootValue
         * @param mixed $context
         * @param array<string, mixed>|null $variableValues
         * @param array<ValidationRule>|null $validationRules Defaults to using all available rules
         *
         * @api
         *
         * @throws \Exception
         */
        public static function promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, $source, $rootValue = null, $context = null, ?array $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, ?array $validationRules = null): \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * Returns directives defined in GraphQL spec.
         *
         * @throws InvariantViolation
         *
         * @return array<string, Directive>
         *
         * @api
         */
        public static function getStandardDirectives(): array
        {
        }
        /**
         * Returns types defined in GraphQL spec.
         *
         * @throws InvariantViolation
         *
         * @return array<string, ScalarType>
         *
         * @api
         */
        public static function getStandardTypes(): array
        {
        }
        /**
         * Replaces standard types with types from this list (matching by name).
         *
         * Standard types not listed here remain untouched.
         *
         * @param array<string, ScalarType> $types
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public static function overrideStandardTypes(array $types): void
        {
        }
        /**
         * Returns standard validation rules implementing GraphQL spec.
         *
         * @return array<class-string<ValidationRule>, ValidationRule>
         *
         * @api
         */
        public static function getStandardValidationRules(): array
        {
        }
        /**
         * Set default resolver implementation.
         *
         * @phpstan-param FieldResolver $fn
         *
         * @api
         */
        public static function setDefaultFieldResolver(callable $fn): void
        {
        }
        /**
         * Set default args mapper implementation.
         *
         * @phpstan-param ArgsMapper $fn
         *
         * @api
         */
        public static function setDefaultArgsMapper(callable $fn): void
        {
        }
    }
}
namespace GraphQL\Language\AST {
    /**
     * type Node = NameNode
     * | DocumentNode
     * | OperationDefinitionNode
     * | VariableDefinitionNode
     * | VariableNode
     * | SelectionSetNode
     * | FieldNode
     * | ArgumentNode
     * | FragmentSpreadNode
     * | InlineFragmentNode
     * | FragmentDefinitionNode
     * | IntValueNode
     * | FloatValueNode
     * | StringValueNode
     * | BooleanValueNode
     * | EnumValueNode
     * | ListValueNode
     * | ObjectValueNode
     * | ObjectFieldNode
     * | DirectiveNode
     * | ListTypeNode
     * | NonNullTypeNode.
     *
     * @see \GraphQL\Tests\Language\AST\NodeTest
     */
    abstract class Node implements \JsonSerializable
    {
        public ?\GraphQL\Language\AST\Location $loc = null;
        public string $kind;
        /** @param array<string, mixed> $vars */
        public function __construct(array $vars)
        {
        }
        /**
         * Returns a clone of this instance and all its children, except Location $loc.
         *
         * @throws \JsonException
         * @throws InvariantViolation
         *
         * @return static
         */
        public function cloneDeep(): self
        {
        }
        /**
         * @template TNode of Node
         * @template TCloneable of TNode|NodeList<TNode>|Location|string
         *
         * @phpstan-param TCloneable $value
         *
         * @throws \JsonException
         * @throws InvariantViolation
         *
         * @phpstan-return TCloneable
         */
        protected static function cloneValue($value)
        {
        }
        /** @throws \JsonException */
        public function __toString(): string
        {
        }
        /**
         * Improves upon the default serialization by:
         * - excluding null values
         * - excluding large reference values such as @see Location::$source.
         *
         * @return array<string, mixed>
         */
        public function jsonSerialize(): array
        {
        }
        /** @return array<string, mixed> */
        public function toArray(): array
        {
        }
    }
    /**
     * @phpstan-type ArgumentNodeValue VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode
     */
    class ArgumentNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::ARGUMENT;
        /** @phpstan-var ArgumentNodeValue */
        public \GraphQL\Language\AST\ValueNode $value;
        public \GraphQL\Language\AST\NameNode $name;
    }
    /**
     * export type ValueNode = VariableNode
     * | NullValueNode
     * | IntValueNode
     * | FloatValueNode
     * | StringValueNode
     * | BooleanValueNode
     * | EnumValueNode
     * | ListValueNode
     * | ObjectValueNode.
     */
    interface ValueNode
    {
    }
    class BooleanValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::BOOLEAN;
        public bool $value;
    }
    /**
     * export type DefinitionNode =
     *   | ExecutableDefinitionNode
     *   | TypeSystemDefinitionNode
     *   | TypeSystemExtensionNode;.
     */
    interface DefinitionNode
    {
    }
    /**
     * export type TypeSystemDefinitionNode =
     * | SchemaDefinitionNode
     * | TypeDefinitionNode
     * | DirectiveDefinitionNode.
     */
    interface TypeSystemDefinitionNode extends \GraphQL\Language\AST\DefinitionNode
    {
    }
    class DirectiveDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::DIRECTIVE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        /** @var NodeList<InputValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $arguments;
        public bool $repeatable;
        /** @var NodeList<NameNode> */
        public \GraphQL\Language\AST\NodeList $locations;
        public function __construct(array $vars)
        {
        }
    }
    class DirectiveNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::DIRECTIVE;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<ArgumentNode> */
        public \GraphQL\Language\AST\NodeList $arguments;
        public function __construct(array $vars)
        {
        }
    }
    class DocumentNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::DOCUMENT;
        /** @var NodeList<DefinitionNode&Node> */
        public \GraphQL\Language\AST\NodeList $definitions;
    }
    /**
     * export type TypeDefinitionNode = ScalarTypeDefinitionNode
     * | ObjectTypeDefinitionNode
     * | InterfaceTypeDefinitionNode
     * | UnionTypeDefinitionNode
     * | EnumTypeDefinitionNode
     * | InputObjectTypeDefinitionNode.
     */
    interface TypeDefinitionNode extends \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
        public function getName(): \GraphQL\Language\AST\NameNode;
    }
    class EnumTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::ENUM_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<EnumValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $values;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
        public function __construct(array $vars)
        {
        }
    }
    /**
     * export type TypeSystemExtensionNode = SchemaExtensionNode | TypeExtensionNode;.
     */
    interface TypeSystemExtensionNode extends \GraphQL\Language\AST\DefinitionNode
    {
    }
    /**
     * export type TypeExtensionNode =
     * | ScalarTypeExtensionNode
     * | ObjectTypeExtensionNode
     * | InterfaceTypeExtensionNode
     * | UnionTypeExtensionNode
     * | EnumTypeExtensionNode
     * | InputObjectTypeExtensionNode;.
     */
    interface TypeExtensionNode extends \GraphQL\Language\AST\TypeSystemExtensionNode
    {
        public function getName(): \GraphQL\Language\AST\NameNode;
    }
    class EnumTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::ENUM_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<EnumValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $values;
        public function __construct(array $vars)
        {
        }
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class EnumValueDefinitionNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::ENUM_VALUE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
    }
    class EnumValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::ENUM;
        public string $value;
    }
    /**
     * export type ExecutableDefinitionNode =
     *   | OperationDefinitionNode
     *   | FragmentDefinitionNode;.
     */
    interface ExecutableDefinitionNode extends \GraphQL\Language\AST\DefinitionNode
    {
    }
    class FieldDefinitionNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::FIELD_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<InputValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $arguments;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public \GraphQL\Language\AST\TypeNode $type;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
    }
    /**
     * export type SelectionNode = FieldNode | FragmentSpreadNode | InlineFragmentNode.
     */
    interface SelectionNode
    {
    }
    class FieldNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::FIELD;
        public \GraphQL\Language\AST\NameNode $name;
        public ?\GraphQL\Language\AST\NameNode $alias = null;
        /** @var NodeList<ArgumentNode> */
        public \GraphQL\Language\AST\NodeList $arguments;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public ?\GraphQL\Language\AST\SelectionSetNode $selectionSet = null;
        public function __construct(array $vars)
        {
        }
    }
    class FloatValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::FLOAT;
        public string $value;
    }
    /**
     * export type DefinitionNode = OperationDefinitionNode
     *                        | FragmentDefinitionNode.
     */
    interface HasSelectionSet
    {
        public function getSelectionSet(): \GraphQL\Language\AST\SelectionSetNode;
    }
    class FragmentDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ExecutableDefinitionNode, \GraphQL\Language\AST\HasSelectionSet
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::FRAGMENT_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /**
         * Note: fragment variable definitions are experimental and may be changed
         * or removed in the future.
         *
         * Thus, this property is the single exception where this is not always a NodeList but may be null.
         *
         * @var NodeList<VariableDefinitionNode>|null
         */
        public ?\GraphQL\Language\AST\NodeList $variableDefinitions = null;
        public \GraphQL\Language\AST\NamedTypeNode $typeCondition;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public \GraphQL\Language\AST\SelectionSetNode $selectionSet;
        public function __construct(array $vars)
        {
        }
        public function getSelectionSet(): \GraphQL\Language\AST\SelectionSetNode
        {
        }
    }
    class FragmentSpreadNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::FRAGMENT_SPREAD;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public function __construct(array $vars)
        {
        }
    }
    class InlineFragmentNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INLINE_FRAGMENT;
        public ?\GraphQL\Language\AST\NamedTypeNode $typeCondition = null;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public \GraphQL\Language\AST\SelectionSetNode $selectionSet;
        public function __construct(array $vars)
        {
        }
    }
    class InputObjectTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<InputValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
        public function __construct(array $vars)
        {
        }
    }
    class InputObjectTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<InputValueDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class InputValueDefinitionNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INPUT_VALUE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public \GraphQL\Language\AST\TypeNode $type;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
        public ?\GraphQL\Language\AST\ValueNode $defaultValue = null;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
    }
    class IntValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INT;
        public string $value;
    }
    class InterfaceTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $interfaces;
        /** @var NodeList<FieldDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class InterfaceTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $interfaces;
        /** @var NodeList<FieldDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    /**
     * export type TypeNode = NamedTypeNode
     * | ListTypeNode
     * | NonNullTypeNode.
     */
    interface TypeNode
    {
    }
    class ListTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::LIST_TYPE;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public \GraphQL\Language\AST\TypeNode $type;
    }
    class ListValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::LST;
        /** @var NodeList<ValueNode&Node> */
        public \GraphQL\Language\AST\NodeList $values;
    }
    /**
     * Contains a range of UTF-8 character offsets and token references that
     * identify the region of the source from which the AST derived.
     *
     * @phpstan-type LocationArray array{start: int, end: int}
     */
    class Location
    {
        /** The character offset at which this Node begins. */
        public int $start;
        /** The character offset at which this Node ends. */
        public int $end;
        /** The Token at which this Node begins. */
        public ?\GraphQL\Language\Token $startToken = null;
        /** The Token at which this Node ends. */
        public ?\GraphQL\Language\Token $endToken = null;
        /** The Source document the AST represents. */
        public ?\GraphQL\Language\Source $source = null;
        public static function create(int $start, int $end): self
        {
        }
        public function __construct(?\GraphQL\Language\Token $startToken = null, ?\GraphQL\Language\Token $endToken = null, ?\GraphQL\Language\Source $source = null)
        {
        }
        /** @return LocationArray */
        public function toArray(): array
        {
        }
    }
    class NameNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::NAME;
        public string $value;
    }
    class NamedTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::NAMED_TYPE;
        public \GraphQL\Language\AST\NameNode $name;
    }
    /**
     * Holds constants of possible AST nodes.
     */
    class NodeKind
    {
        // constants from language/kinds.js:
        public const NAME = 'Name';
        // Document
        public const DOCUMENT = 'Document';
        public const OPERATION_DEFINITION = 'OperationDefinition';
        public const VARIABLE_DEFINITION = 'VariableDefinition';
        public const VARIABLE = 'Variable';
        public const SELECTION_SET = 'SelectionSet';
        public const FIELD = 'Field';
        public const ARGUMENT = 'Argument';
        // Fragments
        public const FRAGMENT_SPREAD = 'FragmentSpread';
        public const INLINE_FRAGMENT = 'InlineFragment';
        public const FRAGMENT_DEFINITION = 'FragmentDefinition';
        // Values
        public const INT = 'IntValue';
        public const FLOAT = 'FloatValue';
        public const STRING = 'StringValue';
        public const BOOLEAN = 'BooleanValue';
        public const ENUM = 'EnumValue';
        public const NULL = 'NullValue';
        public const LST = 'ListValue';
        public const OBJECT = 'ObjectValue';
        public const OBJECT_FIELD = 'ObjectField';
        // Directives
        public const DIRECTIVE = 'Directive';
        // Types
        public const NAMED_TYPE = 'NamedType';
        public const LIST_TYPE = 'ListType';
        public const NON_NULL_TYPE = 'NonNullType';
        // Type System Definitions
        public const SCHEMA_DEFINITION = 'SchemaDefinition';
        public const OPERATION_TYPE_DEFINITION = 'OperationTypeDefinition';
        // Type Definitions
        public const SCALAR_TYPE_DEFINITION = 'ScalarTypeDefinition';
        public const OBJECT_TYPE_DEFINITION = 'ObjectTypeDefinition';
        public const FIELD_DEFINITION = 'FieldDefinition';
        public const INPUT_VALUE_DEFINITION = 'InputValueDefinition';
        public const INTERFACE_TYPE_DEFINITION = 'InterfaceTypeDefinition';
        public const UNION_TYPE_DEFINITION = 'UnionTypeDefinition';
        public const ENUM_TYPE_DEFINITION = 'EnumTypeDefinition';
        public const ENUM_VALUE_DEFINITION = 'EnumValueDefinition';
        public const INPUT_OBJECT_TYPE_DEFINITION = 'InputObjectTypeDefinition';
        // Type Extensions
        public const SCALAR_TYPE_EXTENSION = 'ScalarTypeExtension';
        public const OBJECT_TYPE_EXTENSION = 'ObjectTypeExtension';
        public const INTERFACE_TYPE_EXTENSION = 'InterfaceTypeExtension';
        public const UNION_TYPE_EXTENSION = 'UnionTypeExtension';
        public const ENUM_TYPE_EXTENSION = 'EnumTypeExtension';
        public const INPUT_OBJECT_TYPE_EXTENSION = 'InputObjectTypeExtension';
        // Directive Definitions
        public const DIRECTIVE_DEFINITION = 'DirectiveDefinition';
        // Type System Extensions
        public const SCHEMA_EXTENSION = 'SchemaExtension';
        public const CLASS_MAP = [
            self::NAME => \GraphQL\Language\AST\NameNode::class,
            // Document
            self::DOCUMENT => \GraphQL\Language\AST\DocumentNode::class,
            self::OPERATION_DEFINITION => \GraphQL\Language\AST\OperationDefinitionNode::class,
            self::VARIABLE_DEFINITION => \GraphQL\Language\AST\VariableDefinitionNode::class,
            self::VARIABLE => \GraphQL\Language\AST\VariableNode::class,
            self::SELECTION_SET => \GraphQL\Language\AST\SelectionSetNode::class,
            self::FIELD => \GraphQL\Language\AST\FieldNode::class,
            self::ARGUMENT => \GraphQL\Language\AST\ArgumentNode::class,
            // Fragments
            self::FRAGMENT_SPREAD => \GraphQL\Language\AST\FragmentSpreadNode::class,
            self::INLINE_FRAGMENT => \GraphQL\Language\AST\InlineFragmentNode::class,
            self::FRAGMENT_DEFINITION => \GraphQL\Language\AST\FragmentDefinitionNode::class,
            // Values
            self::INT => \GraphQL\Language\AST\IntValueNode::class,
            self::FLOAT => \GraphQL\Language\AST\FloatValueNode::class,
            self::STRING => \GraphQL\Language\AST\StringValueNode::class,
            self::BOOLEAN => \GraphQL\Language\AST\BooleanValueNode::class,
            self::ENUM => \GraphQL\Language\AST\EnumValueNode::class,
            self::NULL => \GraphQL\Language\AST\NullValueNode::class,
            self::LST => \GraphQL\Language\AST\ListValueNode::class,
            self::OBJECT => \GraphQL\Language\AST\ObjectValueNode::class,
            self::OBJECT_FIELD => \GraphQL\Language\AST\ObjectFieldNode::class,
            // Directives
            self::DIRECTIVE => \GraphQL\Language\AST\DirectiveNode::class,
            // Types
            self::NAMED_TYPE => \GraphQL\Language\AST\NamedTypeNode::class,
            self::LIST_TYPE => \GraphQL\Language\AST\ListTypeNode::class,
            self::NON_NULL_TYPE => \GraphQL\Language\AST\NonNullTypeNode::class,
            // Type System Definitions
            self::SCHEMA_DEFINITION => \GraphQL\Language\AST\SchemaDefinitionNode::class,
            self::OPERATION_TYPE_DEFINITION => \GraphQL\Language\AST\OperationTypeDefinitionNode::class,
            // Type Definitions
            self::SCALAR_TYPE_DEFINITION => \GraphQL\Language\AST\ScalarTypeDefinitionNode::class,
            self::OBJECT_TYPE_DEFINITION => \GraphQL\Language\AST\ObjectTypeDefinitionNode::class,
            self::FIELD_DEFINITION => \GraphQL\Language\AST\FieldDefinitionNode::class,
            self::INPUT_VALUE_DEFINITION => \GraphQL\Language\AST\InputValueDefinitionNode::class,
            self::INTERFACE_TYPE_DEFINITION => \GraphQL\Language\AST\InterfaceTypeDefinitionNode::class,
            self::UNION_TYPE_DEFINITION => \GraphQL\Language\AST\UnionTypeDefinitionNode::class,
            self::ENUM_TYPE_DEFINITION => \GraphQL\Language\AST\EnumTypeDefinitionNode::class,
            self::ENUM_VALUE_DEFINITION => \GraphQL\Language\AST\EnumValueDefinitionNode::class,
            self::INPUT_OBJECT_TYPE_DEFINITION => \GraphQL\Language\AST\InputObjectTypeDefinitionNode::class,
            // Type Extensions
            self::SCALAR_TYPE_EXTENSION => \GraphQL\Language\AST\ScalarTypeExtensionNode::class,
            self::OBJECT_TYPE_EXTENSION => \GraphQL\Language\AST\ObjectTypeExtensionNode::class,
            self::INTERFACE_TYPE_EXTENSION => \GraphQL\Language\AST\InterfaceTypeExtensionNode::class,
            self::UNION_TYPE_EXTENSION => \GraphQL\Language\AST\UnionTypeExtensionNode::class,
            self::ENUM_TYPE_EXTENSION => \GraphQL\Language\AST\EnumTypeExtensionNode::class,
            self::INPUT_OBJECT_TYPE_EXTENSION => \GraphQL\Language\AST\InputObjectTypeExtensionNode::class,
            // Directive Definitions
            self::DIRECTIVE_DEFINITION => \GraphQL\Language\AST\DirectiveDefinitionNode::class,
        ];
    }
    /**
     * @template T of Node
     *
     * @phpstan-implements \ArrayAccess<array-key, T>
     * @phpstan-implements \IteratorAggregate<array-key, T>
     */
    class NodeList implements \ArrayAccess, \IteratorAggregate, \Countable
    {
        /**
         * @param array<Node|array> $nodes
         *
         * @phpstan-param array<T|array<string, mixed>> $nodes
         */
        public function __construct(array $nodes)
        {
        }
        /** @param int|string $offset */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset): bool
        {
        }
        /**
         * @param int|string $offset
         *
         * @phpstan-return T
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset): \GraphQL\Language\AST\Node
        {
        }
        /**
         * @param int|string|null $offset
         * @param Node|array<string, mixed> $value
         *
         * @phpstan-param T|array<string, mixed> $value
         *
         * @throws \JsonException
         * @throws InvariantViolation
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value): void
        {
        }
        /** @param int|string $offset */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset): void
        {
        }
        public function getIterator(): \Traversable
        {
        }
        public function count(): int
        {
        }
        /**
         * Remove a portion of the NodeList and replace it with something else.
         *
         * @param T|iterable<T>|null $replacement
         *
         * @phpstan-return NodeList<T> the NodeList with the extracted elements
         */
        public function splice(int $offset, int $length, $replacement = null): \GraphQL\Language\AST\NodeList
        {
        }
        /**
         * @phpstan-param iterable<array-key, T> $list
         *
         * @phpstan-return NodeList<T>
         */
        public function merge(iterable $list): \GraphQL\Language\AST\NodeList
        {
        }
        /** Resets the keys of the stored nodes to contiguous numeric indexes. */
        public function reindex(): void
        {
        }
        /**
         * Returns a clone of this instance and all its children, except Location $loc.
         *
         * @throws \JsonException
         * @throws InvariantViolation
         *
         * @return static<T>
         */
        public function cloneDeep(): self
        {
        }
    }
    class NonNullTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::NON_NULL_TYPE;
        /** @var NamedTypeNode|ListTypeNode */
        public \GraphQL\Language\AST\TypeNode $type;
    }
    class NullValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::NULL;
    }
    class ObjectFieldNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OBJECT_FIELD;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode */
        public \GraphQL\Language\AST\ValueNode $value;
    }
    class ObjectTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $interfaces;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<FieldDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class ObjectTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $interfaces;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<FieldDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $fields;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class ObjectValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OBJECT;
        /** @var NodeList<ObjectFieldNode> */
        public \GraphQL\Language\AST\NodeList $fields;
    }
    /**
     * @phpstan-type OperationType 'query'|'mutation'|'subscription'
     */
    class OperationDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ExecutableDefinitionNode, \GraphQL\Language\AST\HasSelectionSet
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OPERATION_DEFINITION;
        public ?\GraphQL\Language\AST\NameNode $name = null;
        /** @var OperationType */
        public string $operation;
        /** @var NodeList<VariableDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $variableDefinitions;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public \GraphQL\Language\AST\SelectionSetNode $selectionSet;
        public function __construct(array $vars)
        {
        }
        public function getSelectionSet(): \GraphQL\Language\AST\SelectionSetNode
        {
        }
    }
    /**
     * @phpstan-import-type OperationType from OperationDefinitionNode
     */
    class OperationTypeDefinitionNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::OPERATION_TYPE_DEFINITION;
        /** @var OperationType */
        public string $operation;
        public \GraphQL\Language\AST\NamedTypeNode $type;
    }
    class ScalarTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class ScalarTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class SchemaDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::SCHEMA_DEFINITION;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<OperationTypeDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $operationTypes;
    }
    class SchemaExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeSystemExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::SCHEMA_EXTENSION;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<OperationTypeDefinitionNode> */
        public \GraphQL\Language\AST\NodeList $operationTypes;
    }
    class SelectionSetNode extends \GraphQL\Language\AST\Node
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::SELECTION_SET;
        /** @var NodeList<SelectionNode&Node> */
        public \GraphQL\Language\AST\NodeList $selections;
    }
    class StringValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::STRING;
        public string $value;
        public bool $block = false;
    }
    class UnionTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::UNION_TYPE_DEFINITION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $types;
        public ?\GraphQL\Language\AST\StringValueNode $description = null;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class UnionTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::UNION_TYPE_EXTENSION;
        public \GraphQL\Language\AST\NameNode $name;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        /** @var NodeList<NamedTypeNode> */
        public \GraphQL\Language\AST\NodeList $types;
        public function getName(): \GraphQL\Language\AST\NameNode
        {
        }
    }
    class VariableDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\DefinitionNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::VARIABLE_DEFINITION;
        public \GraphQL\Language\AST\VariableNode $variable;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public \GraphQL\Language\AST\TypeNode $type;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
        public ?\GraphQL\Language\AST\ValueNode $defaultValue = null;
        /** @var NodeList<DirectiveNode> */
        public \GraphQL\Language\AST\NodeList $directives;
        public function __construct(array $vars)
        {
        }
    }
    class VariableNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        public string $kind = \GraphQL\Language\AST\NodeKind::VARIABLE;
        public \GraphQL\Language\AST\NameNode $name;
    }
}
namespace GraphQL\Language {
    /**
     * @see \GraphQL\Tests\Language\BlockStringTest
     */
    class BlockString
    {
        /**
         * Produces the value of a block string from its parsed raw value, similar to
         * CoffeeScript's block string, Python's docstring trim or Ruby's strip_heredoc.
         *
         * This implements the GraphQL spec's BlockStringValue() static algorithm.
         */
        public static function dedentBlockStringLines(string $rawString): string
        {
        }
        public static function getIndentation(string $value): int
        {
        }
        /**
         * Print a block string in the indented block form by adding a leading and
         * trailing blank line. However, if a block string starts with whitespace and is
         * a single-line, adding a leading blank line would strip that whitespace.
         */
        public static function print(string $value): string
        {
        }
    }
    /**
     * Enumeration of available directive locations.
     */
    class DirectiveLocation
    {
        public const QUERY = 'QUERY';
        public const MUTATION = 'MUTATION';
        public const SUBSCRIPTION = 'SUBSCRIPTION';
        public const FIELD = 'FIELD';
        public const FRAGMENT_DEFINITION = 'FRAGMENT_DEFINITION';
        public const FRAGMENT_SPREAD = 'FRAGMENT_SPREAD';
        public const INLINE_FRAGMENT = 'INLINE_FRAGMENT';
        public const VARIABLE_DEFINITION = 'VARIABLE_DEFINITION';
        public const EXECUTABLE_LOCATIONS = [self::QUERY => self::QUERY, self::MUTATION => self::MUTATION, self::SUBSCRIPTION => self::SUBSCRIPTION, self::FIELD => self::FIELD, self::FRAGMENT_DEFINITION => self::FRAGMENT_DEFINITION, self::FRAGMENT_SPREAD => self::FRAGMENT_SPREAD, self::INLINE_FRAGMENT => self::INLINE_FRAGMENT, self::VARIABLE_DEFINITION => self::VARIABLE_DEFINITION];
        public const SCHEMA = 'SCHEMA';
        public const SCALAR = 'SCALAR';
        public const OBJECT = 'OBJECT';
        public const FIELD_DEFINITION = 'FIELD_DEFINITION';
        public const ARGUMENT_DEFINITION = 'ARGUMENT_DEFINITION';
        public const IFACE = 'INTERFACE';
        public const UNION = 'UNION';
        public const ENUM = 'ENUM';
        public const ENUM_VALUE = 'ENUM_VALUE';
        public const INPUT_OBJECT = 'INPUT_OBJECT';
        public const INPUT_FIELD_DEFINITION = 'INPUT_FIELD_DEFINITION';
        public const TYPE_SYSTEM_LOCATIONS = [self::SCHEMA => self::SCHEMA, self::SCALAR => self::SCALAR, self::OBJECT => self::OBJECT, self::FIELD_DEFINITION => self::FIELD_DEFINITION, self::ARGUMENT_DEFINITION => self::ARGUMENT_DEFINITION, self::IFACE => self::IFACE, self::UNION => self::UNION, self::ENUM => self::ENUM, self::ENUM_VALUE => self::ENUM_VALUE, self::INPUT_OBJECT => self::INPUT_OBJECT, self::INPUT_FIELD_DEFINITION => self::INPUT_FIELD_DEFINITION];
        public const LOCATIONS = self::EXECUTABLE_LOCATIONS + self::TYPE_SYSTEM_LOCATIONS;
        public static function has(string $name): bool
        {
        }
    }
    /**
     * A lexer is a stateful stream generator, it returns the next token in the Source when advanced.
     * Assuming the source is valid, the final returned token will be EOF,
     * after which the lexer will repeatedly return the same EOF token whenever called.
     *
     * Algorithm is O(N) both on memory and time.
     *
     * @phpstan-import-type ParserOptions from Parser
     *
     * @see \GraphQL\Tests\Language\LexerTest
     */
    class Lexer
    {
        public \GraphQL\Language\Source $source;
        /** @phpstan-var ParserOptions */
        public array $options;
        /** The previously focused non-ignored token. */
        public \GraphQL\Language\Token $lastToken;
        /** The currently focused non-ignored token. */
        public \GraphQL\Language\Token $token;
        /** The (1-indexed) line containing the current token. */
        public int $line = 1;
        /** The character offset at which the current line begins. */
        public int $lineStart = 0;
        /** @phpstan-param ParserOptions $options */
        public function __construct(\GraphQL\Language\Source $source, array $options = [])
        {
        }
        /**
         * @throws \JsonException
         * @throws SyntaxError
         */
        public function advance(): \GraphQL\Language\Token
        {
        }
        /**
         * @throws \JsonException
         * @throws SyntaxError
         */
        public function lookahead(): \GraphQL\Language\Token
        {
        }
    }
    /**
     * Parses string containing GraphQL query language or [schema definition language](schema-definition-language.md) to Abstract Syntax Tree.
     *
     * @phpstan-type ParserOptions array{
     *   noLocation?: bool,
     *   allowLegacySDLEmptyFields?: bool,
     *   allowLegacySDLImplementsInterfaces?: bool,
     *   experimentalFragmentVariables?: bool
     * }
     *
     * noLocation:
     *   (By default, the parser creates AST nodes that know the location
     *   in the source that they correspond to. This configuration flag
     *   disables that behavior for performance or testing.)
     *
     * allowLegacySDLEmptyFields:
     *   If enabled, the parser will parse empty fields sets in the Schema
     *   Definition Language. Otherwise, the parser will follow the current
     *   specification.
     *
     *   This option is provided to ease adoption of the final SDL specification
     *   and will be removed in a future major release.
     *
     * allowLegacySDLImplementsInterfaces:
     *   If enabled, the parser will parse implemented interfaces with no `&`
     *   character between each interface. Otherwise, the parser will follow the
     *   current specification.
     *
     *   This option is provided to ease adoption of the final SDL specification
     *   and will be removed in a future major release.
     *
     * experimentalFragmentVariables:
     *   (If enabled, the parser will understand and parse variable definitions
     *   contained in a fragment definition. They'll be represented in the
     *   `variableDefinitions` field of the FragmentDefinitionNode.
     *
     *   The syntax is identical to normal, query-defined variables. For example:
     *
     *     fragment A($var: Boolean = false) on T  {
     *       ...
     *     }
     *
     *   Note: this feature is experimental and may change or be removed in the
     *   future.)
     * Those magic functions allow partial parsing:
     *
     * @method static NameNode name(Source|string $source, ParserOptions $options = [])
     * @method static ExecutableDefinitionNode|TypeSystemDefinitionNode definition(Source|string $source, ParserOptions $options = [])
     * @method static ExecutableDefinitionNode executableDefinition(Source|string $source, ParserOptions $options = [])
     * @method static OperationDefinitionNode operationDefinition(Source|string $source, ParserOptions $options = [])
     * @method static string operationType(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<VariableDefinitionNode> variableDefinitions(Source|string $source, ParserOptions $options = [])
     * @method static VariableDefinitionNode variableDefinition(Source|string $source, ParserOptions $options = [])
     * @method static VariableNode variable(Source|string $source, ParserOptions $options = [])
     * @method static SelectionSetNode selectionSet(Source|string $source, ParserOptions $options = [])
     * @method static mixed selection(Source|string $source, ParserOptions $options = [])
     * @method static FieldNode field(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<ArgumentNode> arguments(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<ArgumentNode> constArguments(Source|string $source, ParserOptions $options = [])
     * @method static ArgumentNode argument(Source|string $source, ParserOptions $options = [])
     * @method static ArgumentNode constArgument(Source|string $source, ParserOptions $options = [])
     * @method static FragmentSpreadNode|InlineFragmentNode fragment(Source|string $source, ParserOptions $options = [])
     * @method static FragmentDefinitionNode fragmentDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NameNode fragmentName(Source|string $source, ParserOptions $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|NullValueNode|ObjectValueNode|StringValueNode|VariableNode valueLiteral(Source|string $source, ParserOptions $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|NullValueNode|ObjectValueNode|StringValueNode constValueLiteral(Source|string $source, ParserOptions $options = [])
     * @method static StringValueNode stringLiteral(Source|string $source, ParserOptions $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|StringValueNode constValue(Source|string $source, ParserOptions $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|ObjectValueNode|StringValueNode|VariableNode variableValue(Source|string $source, ParserOptions $options = [])
     * @method static ListValueNode array(Source|string $source, ParserOptions $options = [])
     * @method static ListValueNode constArray(Source|string $source, ParserOptions $options = [])
     * @method static ObjectValueNode object(Source|string $source, ParserOptions $options = [])
     * @method static ObjectValueNode constObject(Source|string $source, ParserOptions $options = [])
     * @method static ObjectFieldNode objectField(Source|string $source, ParserOptions $options = [])
     * @method static ObjectFieldNode constObjectField(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<DirectiveNode> directives(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<DirectiveNode> constDirectives(Source|string $source, ParserOptions $options = [])
     * @method static DirectiveNode directive(Source|string $source, ParserOptions $options = [])
     * @method static DirectiveNode constDirective(Source|string $source, ParserOptions $options = [])
     * @method static ListTypeNode|NamedTypeNode|NonNullTypeNode typeReference(Source|string $source, ParserOptions $options = [])
     * @method static NamedTypeNode namedType(Source|string $source, ParserOptions $options = [])
     * @method static TypeSystemDefinitionNode typeSystemDefinition(Source|string $source, ParserOptions $options = [])
     * @method static StringValueNode|null description(Source|string $source, ParserOptions $options = [])
     * @method static SchemaDefinitionNode schemaDefinition(Source|string $source, ParserOptions $options = [])
     * @method static OperationTypeDefinitionNode operationTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static ScalarTypeDefinitionNode scalarTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static ObjectTypeDefinitionNode objectTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<NamedTypeNode> implementsInterfaces(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<FieldDefinitionNode> fieldsDefinition(Source|string $source, ParserOptions $options = [])
     * @method static FieldDefinitionNode fieldDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<InputValueDefinitionNode> argumentsDefinition(Source|string $source, ParserOptions $options = [])
     * @method static InputValueDefinitionNode inputValueDefinition(Source|string $source, ParserOptions $options = [])
     * @method static InterfaceTypeDefinitionNode interfaceTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static UnionTypeDefinitionNode unionTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<NamedTypeNode> unionMemberTypes(Source|string $source, ParserOptions $options = [])
     * @method static EnumTypeDefinitionNode enumTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<EnumValueDefinitionNode> enumValuesDefinition(Source|string $source, ParserOptions $options = [])
     * @method static EnumValueDefinitionNode enumValueDefinition(Source|string $source, ParserOptions $options = [])
     * @method static InputObjectTypeDefinitionNode inputObjectTypeDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<InputValueDefinitionNode> inputFieldsDefinition(Source|string $source, ParserOptions $options = [])
     * @method static TypeExtensionNode typeExtension(Source|string $source, ParserOptions $options = [])
     * @method static SchemaExtensionNode schemaTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static ScalarTypeExtensionNode scalarTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static ObjectTypeExtensionNode objectTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static InterfaceTypeExtensionNode interfaceTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static UnionTypeExtensionNode unionTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static EnumTypeExtensionNode enumTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static InputObjectTypeExtensionNode inputObjectTypeExtension(Source|string $source, ParserOptions $options = [])
     * @method static DirectiveDefinitionNode directiveDefinition(Source|string $source, ParserOptions $options = [])
     * @method static NodeList<NameNode> directiveLocations(Source|string $source, ParserOptions $options = [])
     * @method static NameNode directiveLocation(Source|string $source, ParserOptions $options = [])
     *
     * @see \GraphQL\Tests\Language\ParserTest
     */
    class Parser
    {
        /**
         * Given a GraphQL source, parses it into a `GraphQL\Language\AST\DocumentNode`.
         *
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * @param Source|string $source
         *
         * @phpstan-param ParserOptions $options
         *
         * @api
         *
         * @throws \JsonException
         * @throws SyntaxError
         */
        public static function parse($source, array $options = []): \GraphQL\Language\AST\DocumentNode
        {
        }
        /**
         * Given a string containing a GraphQL value (ex. `[42]`), parse the AST for that value.
         *
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * This is useful within tools that operate upon GraphQL Values directly and
         * in isolation of complete GraphQL documents.
         *
         * Consider providing the results to the utility function: `GraphQL\Utils\AST::valueFromAST()`.
         *
         * @param Source|string $source
         *
         * @phpstan-param ParserOptions $options
         *
         * @throws \JsonException
         * @throws SyntaxError
         *
         * @return BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|NullValueNode|ObjectValueNode|StringValueNode|VariableNode
         *
         * @api
         */
        public static function parseValue($source, array $options = [])
        {
        }
        /**
         * Given a string containing a GraphQL Type (ex. `[Int!]`), parse the AST for that type.
         *
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * This is useful within tools that operate upon GraphQL Types directly and
         * in isolation of complete GraphQL documents.
         *
         * Consider providing the results to the utility function: `GraphQL\Utils\AST::typeFromAST()`.
         *
         * @param Source|string $source
         *
         * @phpstan-param ParserOptions $options
         *
         * @throws \JsonException
         * @throws SyntaxError
         *
         * @return ListTypeNode|NamedTypeNode|NonNullTypeNode
         *
         * @api
         */
        public static function parseType($source, array $options = [])
        {
        }
        /**
         * Parse partial source by delegating calls to the internal parseX methods.
         *
         * @phpstan-param array{string, ParserOptions} $arguments
         *
         * @throws \JsonException
         * @throws SyntaxError
         *
         * @return Node|NodeList<Node>
         */
        public static function __callStatic(string $name, array $arguments)
        {
        }
        /**
         * @param Source|string $source
         *
         * @phpstan-param ParserOptions        $options
         */
        public function __construct($source, array $options = [])
        {
        }
    }
    /**
     * Prints AST to string. Capable of printing GraphQL queries and Type definition language.
     * Useful for pretty-printing queries or printing back AST for logging, documentation, etc.
     *
     * Usage example:
     *
     * ```php
     * $query = 'query myQuery {someField}';
     * $ast = GraphQL\Language\Parser::parse($query);
     * $printed = GraphQL\Language\Printer::doPrint($ast);
     * ```
     *
     * @see \GraphQL\Tests\Language\PrinterTest
     */
    class Printer
    {
        /**
         * Converts the AST of a GraphQL node to a string.
         *
         * Handles both executable definitions and schema definitions.
         *
         * @throws \JsonException
         *
         * @api
         */
        public static function doPrint(\GraphQL\Language\AST\Node $ast): string
        {
        }
        /** @throws \JsonException */
        protected static function p(?\GraphQL\Language\AST\Node $node): string
        {
        }
        /**
         * @template TNode of Node
         *
         * @param NodeList<TNode> $list
         *
         * @throws \JsonException
         */
        protected static function printList(\GraphQL\Language\AST\NodeList $list, string $separator = ''): string
        {
        }
        /**
         * Print each item on its own line, wrapped in an indented "{ }" block.
         *
         * @template TNode of Node
         *
         * @param NodeList<TNode> $list
         *
         * @throws \JsonException
         */
        protected static function printListBlock(\GraphQL\Language\AST\NodeList $list): string
        {
        }
        /** @throws \JsonException */
        protected static function addDescription(?\GraphQL\Language\AST\StringValueNode $description, string $body): string
        {
        }
        /**
         * If maybeString is not null or empty, then wrap with start and end, otherwise
         * print an empty string.
         */
        protected static function wrap(string $start, ?string $maybeString, string $end = ''): string
        {
        }
        protected static function indent(string $string): string
        {
        }
        /** @param array<string|null> $parts */
        protected static function join(array $parts, string $separator = ''): string
        {
        }
    }
    class Source
    {
        public string $body;
        public int $length;
        public string $name;
        public \GraphQL\Language\SourceLocation $locationOffset;
        /**
         * A representation of source input to GraphQL.
         *
         * `name` and `locationOffset` are optional. They are useful for clients who
         * store GraphQL documents in source files; for example, if the GraphQL input
         * starts at line 40 in a file named Foo.graphql, it might be useful for name to
         * be "Foo.graphql" and location to be `{ line: 40, column: 0 }`.
         * line and column in locationOffset are 1-indexed
         */
        public function __construct(string $body, ?string $name = null, ?\GraphQL\Language\SourceLocation $location = null)
        {
        }
        public function getLocation(int $position): \GraphQL\Language\SourceLocation
        {
        }
    }
    class SourceLocation implements \JsonSerializable
    {
        public int $line;
        public int $column;
        public function __construct(int $line, int $col)
        {
        }
        /** @return array{line: int, column: int} */
        public function toArray(): array
        {
        }
        /** @return array{line: int, column: int} */
        public function toSerializableArray(): array
        {
        }
        /** @return array{line: int, column: int} */
        #[\ReturnTypeWillChange]
        public function jsonSerialize(): array
        {
        }
    }
    /**
     * Represents a range of characters represented by a lexical token
     * within a Source.
     *
     * @see \GraphQL\Tests\Language\TokenTest
     */
    class Token
    {
        // Each kind of token.
        public const SOF = '<SOF>';
        public const EOF = '<EOF>';
        public const BANG = '!';
        public const DOLLAR = '$';
        public const AMP = '&';
        public const PAREN_L = '(';
        public const PAREN_R = ')';
        public const SPREAD = '...';
        public const COLON = ':';
        public const EQUALS = '=';
        public const AT = '@';
        public const BRACKET_L = '[';
        public const BRACKET_R = ']';
        public const BRACE_L = '{';
        public const PIPE = '|';
        public const BRACE_R = '}';
        public const NAME = 'Name';
        public const INT = 'Int';
        public const FLOAT = 'Float';
        public const STRING = 'String';
        public const BLOCK_STRING = 'BlockString';
        public const COMMENT = 'Comment';
        /** The kind of Token (see one of constants above). */
        public string $kind;
        /** The character offset at which this Node begins. */
        public int $start;
        /** The character offset at which this Node ends. */
        public int $end;
        /** The 1-indexed line number on which this Token appears. */
        public int $line;
        /** The 1-indexed column number at which this Token begins. */
        public int $column;
        public ?string $value;
        /**
         * Tokens exist as nodes in a double-linked-list amongst all tokens
         * including ignored tokens. <SOF> is always the first node and <EOF>
         * the last.
         */
        public ?\GraphQL\Language\Token $prev;
        public ?\GraphQL\Language\Token $next = null;
        public function __construct(string $kind, int $start, int $end, int $line, int $column, ?\GraphQL\Language\Token $previous = null, ?string $value = null)
        {
        }
        public function getDescription(): string
        {
        }
        /**
         * @return array{
         *   kind: string,
         *   value: string|null,
         *   line: int,
         *   column: int,
         * }
         */
        public function toArray(): array
        {
        }
    }
    /**
     * Utility for efficient AST traversal and modification.
     *
     * `visit()` will walk through an AST using a depth first traversal, calling
     * the visitor's enter function at each node in the traversal, and calling the
     * leave function after visiting that node and all of its child nodes.
     *
     * By returning different values from the `enter` and `leave` functions, the
     * behavior of the visitor can be altered.
     * - no return (`void`) or return `null`: no action
     * - `Visitor::skipNode()`: skips over the subtree at the current node of the AST
     * - `Visitor::stop()`: stop the Visitor completely
     * - `Visitor::removeNode()`: remove the current node
     * - return any other value: replace this node with the returned value
     *
     * When using `visit()` to edit an AST, the original AST will not be modified, and
     * a new version of the AST with the changes applied will be returned from the
     * visit function.
     *
     *   $editedAST = Visitor::visit($ast, [
     *       'enter' => function (Node $node, $key, $parent, array $path, array $ancestors) {
     *           // ...
     *       },
     *       'leave' => function (Node $node, $key, $parent, array $path, array $ancestors) {
     *           // ...
     *       }
     *   ]);
     *
     * Alternatively to providing `enter` and `leave` functions, a visitor can
     * instead provide functions named the same as the [kinds of AST nodes](class-reference.md#graphqllanguageastnodekind),
     * or enter/leave visitors at a named key, leading to four permutations of
     * visitor API:
     *
     * 1. Named visitors triggered when entering a node a specific kind.
     *
     *     Visitor::visit($ast, [
     *       NodeKind::OBJECT_TYPE_DEFINITION => function (ObjectTypeDefinitionNode $node) {
     *         // enter the "ObjectTypeDefinition" node
     *       }
     *     ]);
     *
     * 2. Named visitors that trigger upon entering and leaving a node of
     *    a specific kind.
     *
     *     Visitor::visit($ast, [
     *       NodeKind::OBJECT_TYPE_DEFINITION => [
     *         'enter' => function (ObjectTypeDefinitionNode $node) {
     *           // enter the "ObjectTypeDefinition" node
     *         }
     *         'leave' => function (ObjectTypeDefinitionNode $node) {
     *           // leave the "ObjectTypeDefinition" node
     *         }
     *       ]
     *     ]);
     *
     * 3. Generic visitors that trigger upon entering and leaving any node.
     *
     *     Visitor::visit($ast, [
     *       'enter' => function (Node $node) {
     *         // enter any node
     *       },
     *       'leave' => function (Node $node) {
     *         // leave any node
     *       }
     *     ]);
     *
     * 4. Parallel visitors for entering and leaving nodes of a specific kind.
     *
     *     Visitor::visit($ast, [
     *       'enter' => [
     *         NodeKind::OBJECT_TYPE_DEFINITION => function (ObjectTypeDefinitionNode $node) {
     *           // enter the "ObjectTypeDefinition" node
     *         }
     *       },
     *       'leave' => [
     *         NodeKind::OBJECT_TYPE_DEFINITION => function (ObjectTypeDefinitionNode $node) {
     *           // leave the "ObjectTypeDefinition" node
     *         }
     *       ]
     *     ]);
     *
     * @phpstan-type NodeVisitor callable(Node): (VisitorOperation|Node|NodeList<Node>|null|false|void)
     * @phpstan-type VisitorArray array<string, NodeVisitor>|array<string, array<string, NodeVisitor>>
     *
     * @see \GraphQL\Tests\Language\VisitorTest
     */
    class Visitor
    {
        public const VISITOR_KEYS = [\GraphQL\Language\AST\NodeKind::NAME => [], \GraphQL\Language\AST\NodeKind::DOCUMENT => ['definitions'], \GraphQL\Language\AST\NodeKind::OPERATION_DEFINITION => ['name', 'variableDefinitions', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::VARIABLE_DEFINITION => ['variable', 'type', 'defaultValue', 'directives'], \GraphQL\Language\AST\NodeKind::VARIABLE => ['name'], \GraphQL\Language\AST\NodeKind::SELECTION_SET => ['selections'], \GraphQL\Language\AST\NodeKind::FIELD => ['alias', 'name', 'arguments', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::ARGUMENT => ['name', 'value'], \GraphQL\Language\AST\NodeKind::FRAGMENT_SPREAD => ['name', 'directives'], \GraphQL\Language\AST\NodeKind::INLINE_FRAGMENT => ['typeCondition', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::FRAGMENT_DEFINITION => [
            'name',
            // Note: fragment variable definitions are experimental and may be changed
            // or removed in the future.
            'variableDefinitions',
            'typeCondition',
            'directives',
            'selectionSet',
        ], \GraphQL\Language\AST\NodeKind::INT => [], \GraphQL\Language\AST\NodeKind::FLOAT => [], \GraphQL\Language\AST\NodeKind::STRING => [], \GraphQL\Language\AST\NodeKind::BOOLEAN => [], \GraphQL\Language\AST\NodeKind::NULL => [], \GraphQL\Language\AST\NodeKind::ENUM => [], \GraphQL\Language\AST\NodeKind::LST => ['values'], \GraphQL\Language\AST\NodeKind::OBJECT => ['fields'], \GraphQL\Language\AST\NodeKind::OBJECT_FIELD => ['name', 'value'], \GraphQL\Language\AST\NodeKind::DIRECTIVE => ['name', 'arguments'], \GraphQL\Language\AST\NodeKind::NAMED_TYPE => ['name'], \GraphQL\Language\AST\NodeKind::LIST_TYPE => ['type'], \GraphQL\Language\AST\NodeKind::NON_NULL_TYPE => ['type'], \GraphQL\Language\AST\NodeKind::SCHEMA_DEFINITION => ['directives', 'operationTypes'], \GraphQL\Language\AST\NodeKind::OPERATION_TYPE_DEFINITION => ['type'], \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_DEFINITION => ['description', 'name', 'directives'], \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_DEFINITION => ['description', 'name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::FIELD_DEFINITION => ['description', 'name', 'arguments', 'type', 'directives'], \GraphQL\Language\AST\NodeKind::INPUT_VALUE_DEFINITION => ['description', 'name', 'type', 'defaultValue', 'directives'], \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_DEFINITION => ['description', 'name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::UNION_TYPE_DEFINITION => ['description', 'name', 'directives', 'types'], \GraphQL\Language\AST\NodeKind::ENUM_TYPE_DEFINITION => ['description', 'name', 'directives', 'values'], \GraphQL\Language\AST\NodeKind::ENUM_VALUE_DEFINITION => ['description', 'name', 'directives'], \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_DEFINITION => ['description', 'name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_EXTENSION => ['name', 'directives'], \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_EXTENSION => ['name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_EXTENSION => ['name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::UNION_TYPE_EXTENSION => ['name', 'directives', 'types'], \GraphQL\Language\AST\NodeKind::ENUM_TYPE_EXTENSION => ['name', 'directives', 'values'], \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_EXTENSION => ['name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::DIRECTIVE_DEFINITION => ['description', 'name', 'arguments', 'locations'], \GraphQL\Language\AST\NodeKind::SCHEMA_EXTENSION => ['directives', 'operationTypes']];
        /**
         * Visit the AST (see class description for details).
         *
         * @param NodeList<Node>|Node $root
         * @param VisitorArray $visitor
         * @param array<string, mixed>|null $keyMap
         *
         * @throws \Exception
         *
         * @return mixed
         *
         * @api
         */
        public static function visit(object $root, array $visitor, ?array $keyMap = null)
        {
        }
        /**
         * Returns marker for stopping.
         *
         * @api
         */
        public static function stop(): \GraphQL\Language\VisitorStop
        {
        }
        /**
         * Returns marker for skipping the subtree at the current node.
         *
         * @api
         */
        public static function skipNode(): \GraphQL\Language\VisitorSkipNode
        {
        }
        /**
         * Returns marker for removing the current node.
         *
         * @api
         */
        public static function removeNode(): \GraphQL\Language\VisitorRemoveNode
        {
        }
        /**
         * Combines the given visitors to run in parallel.
         *
         * @phpstan-param array<int, VisitorArray> $visitors
         *
         * @return VisitorArray
         */
        public static function visitInParallel(array $visitors): array
        {
        }
        /**
         * Creates a new visitor that updates TypeInfo and delegates to the given visitor.
         *
         * @phpstan-param VisitorArray $visitor
         *
         * @phpstan-return VisitorArray
         */
        public static function visitWithTypeInfo(\GraphQL\Utils\TypeInfo $typeInfo, array $visitor): array
        {
        }
        /**
         * @phpstan-param VisitorArray $visitor
         *
         * @return (callable(Node $node, string|int|null $key, Node|NodeList<Node>|null $parent, array<int, int|string> $path, array<int, Node|NodeList<Node>> $ancestors): (VisitorOperation|Node|null))|(callable(Node): (VisitorOperation|Node|NodeList<Node>|void|false|null))|null
         */
        protected static function extractVisitFn(array $visitor, string $kind, bool $isLeaving): ?callable
        {
        }
    }
    abstract class VisitorOperation
    {
    }
    final class VisitorRemoveNode extends \GraphQL\Language\VisitorOperation
    {
    }
    final class VisitorSkipNode extends \GraphQL\Language\VisitorOperation
    {
    }
    final class VisitorStop extends \GraphQL\Language\VisitorOperation
    {
    }
}
namespace GraphQL\Server {
    class RequestError extends \Exception implements \GraphQL\Error\ClientAware
    {
        public function isClientSafe(): bool
        {
        }
    }
}
namespace GraphQL\Server\Exception {
    class BatchedQueriesAreNotSupported extends \GraphQL\Server\RequestError
    {
    }
    class CannotParseJsonBody extends \GraphQL\Server\RequestError
    {
    }
    class CannotParseVariables extends \GraphQL\Server\RequestError
    {
    }
    class CannotReadBody extends \GraphQL\Server\RequestError
    {
    }
    class FailedToDetermineOperationType extends \GraphQL\Server\RequestError
    {
    }
    class GetMethodSupportsOnlyQueryOperation extends \GraphQL\Server\RequestError
    {
    }
    class HttpMethodNotSupported extends \GraphQL\Server\RequestError
    {
    }
    class InvalidOperationParameter extends \GraphQL\Server\RequestError
    {
    }
    class InvalidQueryIdParameter extends \GraphQL\Server\RequestError
    {
    }
    class InvalidQueryParameter extends \GraphQL\Server\RequestError
    {
    }
    class MissingContentTypeHeader extends \GraphQL\Server\RequestError
    {
    }
    class MissingQueryOrQueryIdParameter extends \GraphQL\Server\RequestError
    {
    }
    class PersistedQueriesAreNotSupported extends \GraphQL\Server\RequestError
    {
    }
    class UnexpectedContentType extends \GraphQL\Server\RequestError
    {
    }
}
namespace GraphQL\Server {
    /**
     * Structure representing parsed HTTP parameters for GraphQL operation.
     *
     * The properties in this class are not strictly typed, as this class
     * is only meant to serve as an intermediary representation which is
     * not yet validated.
     */
    class OperationParams
    {
        /**
         * Id of the query (when using persisted queries).
         *
         * Valid aliases (case-insensitive):
         * - id
         * - queryId
         * - documentId
         *
         * @api
         *
         * @var mixed should be string|null
         */
        public $queryId;
        /**
         * A document containing GraphQL operations and fragments to execute.
         *
         * @api
         *
         * @var mixed should be string|null
         */
        public $query;
        /**
         * The name of the operation in the document to execute.
         *
         * @api
         *
         * @var mixed should be string|null
         */
        public $operation;
        /**
         * Values for any variables defined by the operation.
         *
         * @api
         *
         * @var mixed should be array<string, mixed>
         */
        public $variables;
        /**
         * Reserved for implementors to extend the protocol however they see fit.
         *
         * @api
         *
         * @var mixed should be array<string, mixed>
         */
        public $extensions;
        /**
         * Executed in read-only context (e.g. via HTTP GET request)?
         *
         * @api
         */
        public bool $readOnly;
        /**
         * The raw params used to construct this instance.
         *
         * @api
         *
         * @var array<string, mixed>
         */
        public array $originalInput;
        /**
         * Creates an instance from given array.
         *
         * @param array<string, mixed> $params
         *
         * @api
         */
        public static function create(array $params, bool $readonly = false): \GraphQL\Server\OperationParams
        {
        }
        /**
         * Decodes the value if it is JSON, otherwise returns it unchanged.
         *
         * @param mixed $value
         *
         * @return mixed
         */
        protected static function decodeIfJSON($value)
        {
        }
    }
    /**
     * Server configuration class.
     * Could be passed directly to server constructor. List of options accepted by **create** method is
     * [described in docs](executing-queries.md#server-configuration-options).
     *
     * Usage example:
     *
     *     $config = GraphQL\Server\ServerConfig::create()
     *         ->setSchema($mySchema)
     *         ->setContext($myContext);
     *
     *     $server = new GraphQL\Server\StandardServer($config);
     *
     * @see ExecutionResult
     *
     * @phpstan-type PersistedQueryLoader callable(string $queryId, OperationParams $operation): (string|DocumentNode)
     * @phpstan-type RootValueResolver callable(OperationParams $operation, DocumentNode $doc, string $operationType): mixed
     * @phpstan-type ValidationRulesOption array<ValidationRule>|null|callable(OperationParams $operation, DocumentNode $doc, string $operationType): array<ValidationRule>
     *
     * @phpstan-import-type ErrorsHandler from ExecutionResult
     * @phpstan-import-type ErrorFormatter from ExecutionResult
     *
     * @see \GraphQL\Tests\Server\ServerConfigTest
     */
    class ServerConfig
    {
        /**
         * Converts an array of options to instance of ServerConfig
         * (or just returns empty config when array is not passed).
         *
         * @param array<string, mixed> $config
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public static function create(array $config = []): self
        {
        }
        /** @api */
        public function setSchema(\GraphQL\Type\Schema $schema): self
        {
        }
        /**
         * @param mixed|callable $context
         *
         * @api
         */
        public function setContext($context): self
        {
        }
        /**
         * @param mixed|callable $rootValue
         *
         * @phpstan-param mixed|RootValueResolver $rootValue
         *
         * @api
         */
        public function setRootValue($rootValue): self
        {
        }
        /**
         * @phpstan-param ErrorFormatter $errorFormatter
         *
         * @api
         */
        public function setErrorFormatter(callable $errorFormatter): self
        {
        }
        /**
         * @phpstan-param ErrorsHandler $handler
         *
         * @api
         */
        public function setErrorsHandler(callable $handler): self
        {
        }
        /**
         * Set validation rules for this server.
         *
         * @param array<ValidationRule>|callable|null $validationRules
         *
         * @phpstan-param ValidationRulesOption $validationRules
         *
         * @api
         */
        public function setValidationRules($validationRules): self
        {
        }
        /** @api */
        public function setFieldResolver(callable $fieldResolver): self
        {
        }
        /**
         * @phpstan-param PersistedQueryLoader|null $persistedQueryLoader
         *
         * @api
         */
        public function setPersistedQueryLoader(?callable $persistedQueryLoader): self
        {
        }
        /**
         * Set response debug flags.
         *
         * @see \GraphQL\Error\DebugFlag class for a list of all available flags
         *
         * @api
         */
        public function setDebugFlag(int $debugFlag = \GraphQL\Error\DebugFlag::INCLUDE_DEBUG_MESSAGE): self
        {
        }
        /**
         * Allow batching queries (disabled by default).
         *
         * @api
         */
        public function setQueryBatching(bool $enableBatching): self
        {
        }
        /** @api */
        public function setPromiseAdapter(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter): self
        {
        }
        /** @return mixed|callable */
        public function getContext()
        {
        }
        /**
         * @return mixed|callable
         *
         * @phpstan-return mixed|RootValueResolver
         */
        public function getRootValue()
        {
        }
        public function getSchema(): ?\GraphQL\Type\Schema
        {
        }
        /** @phpstan-return ErrorFormatter|null */
        public function getErrorFormatter(): ?callable
        {
        }
        /** @phpstan-return ErrorsHandler|null */
        public function getErrorsHandler(): ?callable
        {
        }
        public function getPromiseAdapter(): ?\GraphQL\Executor\Promise\PromiseAdapter
        {
        }
        /**
         * @return array<ValidationRule>|callable|null
         *
         * @phpstan-return ValidationRulesOption
         */
        public function getValidationRules()
        {
        }
        public function getFieldResolver(): ?callable
        {
        }
        /** @phpstan-return PersistedQueryLoader|null */
        public function getPersistedQueryLoader(): ?callable
        {
        }
        public function getDebugFlag(): int
        {
        }
        public function getQueryBatching(): bool
        {
        }
    }
    /**
     * GraphQL server compatible with both: [express-graphql](https://github.com/graphql/express-graphql)
     * and [Apollo Server](https://github.com/apollographql/graphql-server).
     * Usage Example:.
     *
     *     $server = new StandardServer([
     *       'schema' => $mySchema
     *     ]);
     *     $server->handleRequest();
     *
     * Or using [ServerConfig](class-reference.md#graphqlserverserverconfig) instance:
     *
     *     $config = GraphQL\Server\ServerConfig::create()
     *         ->setSchema($mySchema)
     *         ->setContext($myContext);
     *
     *     $server = new GraphQL\Server\StandardServer($config);
     *     $server->handleRequest();
     *
     * See [dedicated section in docs](executing-queries.md#using-server) for details.
     *
     * @see \GraphQL\Tests\Server\StandardServerTest
     */
    class StandardServer
    {
        protected \GraphQL\Server\ServerConfig $config;
        protected \GraphQL\Server\Helper $helper;
        /**
         * @param ServerConfig|array<string, mixed> $config
         *
         * @api
         *
         * @throws InvariantViolation
         */
        public function __construct($config)
        {
        }
        /**
         * Parses HTTP request, executes and emits response (using standard PHP `header` function and `echo`).
         *
         * When $parsedBody is not set, it uses PHP globals to parse a request.
         * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
         * and then pass it to the server.
         *
         * See `executeRequest()` if you prefer to emit the response yourself
         * (e.g. using the Response object of some framework).
         *
         * @param OperationParams|array<OperationParams> $parsedBody
         *
         * @api
         *
         * @throws \Exception
         * @throws InvariantViolation
         * @throws RequestError
         */
        public function handleRequest($parsedBody = null): void
        {
        }
        /**
         * Executes a GraphQL operation and returns an execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter).
         *
         * When $parsedBody is not set, it uses PHP globals to parse a request.
         * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
         * and then pass it to the server.
         *
         * PSR-7 compatible method executePsrRequest() does exactly this.
         *
         * @param OperationParams|array<OperationParams> $parsedBody
         *
         * @throws \Exception
         * @throws InvariantViolation
         * @throws RequestError
         *
         * @return ExecutionResult|array<int, ExecutionResult>|Promise
         *
         * @api
         */
        public function executeRequest($parsedBody = null)
        {
        }
        /**
         * Executes PSR-7 request and fulfills PSR-7 response.
         *
         * See `executePsrRequest()` if you prefer to create response yourself
         * (e.g. using specific JsonResponse instance of some framework).
         *
         * @throws \Exception
         * @throws \InvalidArgumentException
         * @throws \JsonException
         * @throws \RuntimeException
         * @throws InvariantViolation
         * @throws RequestError
         *
         * @return ResponseInterface|Promise
         *
         * @api
         */
        public function processPsrRequest(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream)
        {
        }
        /**
         * Executes GraphQL operation and returns execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter).
         *
         * @throws \Exception
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws RequestError
         *
         * @return ExecutionResult|array<int, ExecutionResult>|Promise
         *
         * @api
         */
        public function executePsrRequest(\Psr\Http\Message\RequestInterface $request)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * @phpstan-type ArgumentType (Type&InputType)|callable(): (Type&InputType)
     * @phpstan-type UnnamedArgumentConfig array{
     *     name?: string,
     *     type: ArgumentType,
     *     defaultValue?: mixed,
     *     description?: string|null,
     *     deprecationReason?: string|null,
     *     astNode?: InputValueDefinitionNode|null
     * }
     * @phpstan-type ArgumentConfig array{
     *     name: string,
     *     type: ArgumentType,
     *     defaultValue?: mixed,
     *     description?: string|null,
     *     deprecationReason?: string|null,
     *     astNode?: InputValueDefinitionNode|null
     * }
     * @phpstan-type ArgumentListConfig iterable<ArgumentConfig|ArgumentType>|iterable<UnnamedArgumentConfig>
     */
    class Argument
    {
        public string $name;
        /** @var mixed */
        public $defaultValue;
        public ?string $description;
        public ?string $deprecationReason;
        public ?\GraphQL\Language\AST\InputValueDefinitionNode $astNode;
        /** @phpstan-var ArgumentConfig */
        public array $config;
        /** @phpstan-param ArgumentConfig $config */
        public function __construct(array $config)
        {
        }
        /**
         * @phpstan-param ArgumentListConfig $config
         *
         * @return array<int, self>
         */
        public static function listFromConfig(iterable $config): array
        {
        }
        /** @return Type&InputType */
        public function getType(): \GraphQL\Type\Definition\Type
        {
        }
        public function defaultValueExists(): bool
        {
        }
        public function isRequired(): bool
        {
        }
        public function isDeprecated(): bool
        {
        }
        /**
         * @param Type&NamedType $parentType
         *
         * @throws InvariantViolation
         */
        public function assertValid(\GraphQL\Type\Definition\FieldDefinition $parentField, \GraphQL\Type\Definition\Type $parentType): void
        {
        }
    }
    class BooleanType extends \GraphQL\Type\Definition\ScalarType
    {
        public string $name = \GraphQL\Type\Definition\Type::BOOLEAN;
        public ?string $description = 'The `Boolean` scalar type represents `true` or `false`.';
        /**
         * Serialize the given value to a Boolean.
         *
         * The GraphQL spec leaves this up to the implementations, so we just do what
         * PHP does natively to make this intuitive for developers.
         */
        public function serialize($value): bool
        {
        }
        /** @throws Error */
        public function parseValue($value): bool
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): bool
        {
        }
    }
    #[\Attribute(\Attribute::TARGET_ALL)]
    class Deprecated
    {
        public function __construct(public string $reason = \GraphQL\Type\Definition\Directive::DEFAULT_DEPRECATION_REASON)
        {
        }
    }
    #[\Attribute(\Attribute::TARGET_ALL)]
    class Description
    {
        public function __construct(public string $description)
        {
        }
    }
    /**
     * @phpstan-import-type ArgumentListConfig from Argument
     *
     * @phpstan-type DirectiveConfig array{
     *   name: string,
     *   description?: string|null,
     *   args?: ArgumentListConfig|null,
     *   locations: array<string>,
     *   isRepeatable?: bool|null,
     *   astNode?: DirectiveDefinitionNode|null
     * }
     */
    class Directive
    {
        public const DEFAULT_DEPRECATION_REASON = 'No longer supported';
        public const INCLUDE_NAME = 'include';
        public const IF_ARGUMENT_NAME = 'if';
        public const SKIP_NAME = 'skip';
        public const DEPRECATED_NAME = 'deprecated';
        public const REASON_ARGUMENT_NAME = 'reason';
        public const ONE_OF_NAME = 'oneOf';
        /**
         * Lazily initialized.
         *
         * @var array<string, Directive>|null
         */
        protected static ?array $internalDirectives = null;
        public string $name;
        public ?string $description;
        /** @var array<int, Argument> */
        public array $args;
        public bool $isRepeatable;
        /** @var array<string> */
        public array $locations;
        public ?\GraphQL\Language\AST\DirectiveDefinitionNode $astNode;
        /**
         * @var array<string, mixed>
         *
         * @phpstan-var DirectiveConfig
         */
        public array $config;
        /**
         * @param array<string, mixed> $config
         *
         * @phpstan-param DirectiveConfig $config
         */
        public function __construct(array $config)
        {
        }
        /** @return array<string, Directive> */
        public static function getInternalDirectives(): array
        {
        }
        public static function includeDirective(): \GraphQL\Type\Definition\Directive
        {
        }
        public static function skipDirective(): \GraphQL\Type\Definition\Directive
        {
        }
        public static function deprecatedDirective(): \GraphQL\Type\Definition\Directive
        {
        }
        public static function oneOfDirective(): \GraphQL\Type\Definition\Directive
        {
        }
        public static function isSpecifiedDirective(\GraphQL\Type\Definition\Directive $directive): bool
        {
        }
        public static function resetCachedInstances(): void
        {
        }
    }
    /**
     * @phpstan-type EnumValueConfig array{
     *   name: string,
     *   value?: mixed,
     *   deprecationReason?: string|null,
     *   description?: string|null,
     *   astNode?: EnumValueDefinitionNode|null
     * }
     */
    class EnumValueDefinition
    {
        public string $name;
        /** @var mixed */
        public $value;
        public ?string $deprecationReason;
        public ?string $description;
        public ?\GraphQL\Language\AST\EnumValueDefinitionNode $astNode;
        /** @phpstan-var EnumValueConfig */
        public array $config;
        /** @phpstan-param EnumValueConfig $config */
        public function __construct(array $config)
        {
        }
        public function isDeprecated(): bool
        {
        }
    }
    /**
     * @see Executor
     *
     * @phpstan-import-type FieldResolver from Executor
     * @phpstan-import-type ArgsMapper from Executor
     * @phpstan-import-type ArgumentListConfig from Argument
     *
     * @phpstan-type FieldType (Type&OutputType)|callable(): (Type&OutputType)
     * @phpstan-type ComplexityFn callable(int, array<string, mixed>): int
     * @phpstan-type VisibilityFn callable(): bool
     * @phpstan-type FieldDefinitionConfig array{
     *     name: string,
     *     type: FieldType,
     *     resolve?: FieldResolver|null,
     *     args?: ArgumentListConfig|null,
     *     argsMapper?: ArgsMapper|null,
     *     description?: string|null,
     *     visible?: VisibilityFn|bool,
     *     deprecationReason?: string|null,
     *     astNode?: FieldDefinitionNode|null,
     *     complexity?: ComplexityFn|null
     * }
     * @phpstan-type UnnamedFieldDefinitionConfig array{
     *     type: FieldType,
     *     resolve?: FieldResolver|null,
     *     args?: ArgumentListConfig|null,
     *     argsMapper?: ArgsMapper|null,
     *     description?: string|null,
     *     visible?: VisibilityFn|bool,
     *     deprecationReason?: string|null,
     *     astNode?: FieldDefinitionNode|null,
     *     complexity?: ComplexityFn|null
     * }
     * @phpstan-type FieldsConfig iterable<mixed>|callable(): iterable<mixed>
     */
    /*
     * TODO check if newer versions of PHPStan can handle the full definition, it currently crashes when it is used
     * @phpstan-type EagerListEntry FieldDefinitionConfig|(Type&OutputType)
     * @phpstan-type EagerMapEntry UnnamedFieldDefinitionConfig|FieldDefinition
     * @phpstan-type FieldsList iterable<EagerListEntry|(callable(): EagerListEntry)>
     * @phpstan-type FieldsMap iterable<string, EagerMapEntry|(callable(): EagerMapEntry)>
     * @phpstan-type FieldsIterable FieldsList|FieldsMap
     * @phpstan-type FieldsConfig FieldsIterable|(callable(): FieldsIterable)
     */
    class FieldDefinition
    {
        public string $name;
        /** @var array<int, Argument> */
        public array $args;
        /**
         * Callback to transform args to value object.
         *
         * @var callable|null
         *
         * @phpstan-var ArgsMapper|null
         */
        public $argsMapper;
        /**
         * Callback for resolving field value given parent value.
         *
         * @var callable|null
         *
         * @phpstan-var FieldResolver|null
         */
        public $resolveFn;
        public ?string $description;
        /**
         * @var callable|bool
         *
         * @phpstan-var VisibilityFn|bool
         */
        public $visible;
        public ?string $deprecationReason;
        public ?\GraphQL\Language\AST\FieldDefinitionNode $astNode;
        /**
         * @var callable|null
         *
         * @phpstan-var ComplexityFn|null
         */
        public $complexityFn;
        /**
         * Original field definition config.
         *
         * @phpstan-var FieldDefinitionConfig
         */
        public array $config;
        /** @param FieldDefinitionConfig $config */
        public function __construct(array $config)
        {
        }
        /**
         * @param ObjectType|InterfaceType $parentType
         * @param callable|iterable $fields
         *
         * @phpstan-param FieldsConfig $fields
         *
         * @throws InvariantViolation
         *
         * @return array<string, self|UnresolvedFieldDefinition>
         */
        public static function defineFieldMap(\GraphQL\Type\Definition\Type $parentType, $fields): array
        {
        }
        public function getArg(string $name): ?\GraphQL\Type\Definition\Argument
        {
        }
        public function getName(): string
        {
        }
        /** @return Type&OutputType */
        public function getType(): \GraphQL\Type\Definition\Type
        {
        }
        public function isVisible(): bool
        {
        }
        public function isDeprecated(): bool
        {
        }
        /**
         * @param Type&NamedType $parentType
         *
         * @throws InvariantViolation
         */
        public function assertValid(\GraphQL\Type\Definition\Type $parentType): void
        {
        }
    }
    class FloatType extends \GraphQL\Type\Definition\ScalarType
    {
        public string $name = \GraphQL\Type\Definition\Type::FLOAT;
        public ?string $description = 'The `Float` scalar type represents signed double-precision fractional
values as specified by
[IEEE 754](http://en.wikipedia.org/wiki/IEEE_floating_point). ';
        /** @throws SerializationError */
        public function serialize($value): float
        {
        }
        /** @throws Error */
        public function parseValue($value): float
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
    }
    class IDType extends \GraphQL\Type\Definition\ScalarType
    {
        public string $name = 'ID';
        public ?string $description = 'The `ID` scalar type represents a unique identifier, often used to
refetch an object or as key for a cache. The ID type appears in a JSON
response as a String; however, it is not intended to be human-readable.
When expected as an input type, any string (such as `"4"`) or integer
(such as `4`) input value will be accepted as an ID.';
        /** @throws SerializationError */
        public function serialize($value): string
        {
        }
        /** @throws Error */
        public function parseValue($value): string
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): string
        {
        }
    }
    /**
     * @phpstan-type ArgumentType (Type&InputType)|callable(): (Type&InputType)
     * @phpstan-type InputObjectFieldConfig array{
     *   name: string,
     *   type: ArgumentType,
     *   defaultValue?: mixed,
     *   description?: string|null,
     *   deprecationReason?: string|null,
     *   astNode?: InputValueDefinitionNode|null
     * }
     * @phpstan-type UnnamedInputObjectFieldConfig array{
     *   name?: string,
     *   type: ArgumentType,
     *   defaultValue?: mixed,
     *   description?: string|null,
     *   deprecationReason?: string|null,
     *   astNode?: InputValueDefinitionNode|null
     * }
     */
    class InputObjectField
    {
        public string $name;
        /** @var mixed */
        public $defaultValue;
        public ?string $description;
        public ?string $deprecationReason;
        public ?\GraphQL\Language\AST\InputValueDefinitionNode $astNode;
        /** @phpstan-var InputObjectFieldConfig */
        public array $config;
        /** @phpstan-param InputObjectFieldConfig $config */
        public function __construct(array $config)
        {
        }
        /** @return Type&InputType */
        public function getType(): \GraphQL\Type\Definition\Type
        {
        }
        public function defaultValueExists(): bool
        {
        }
        public function isRequired(): bool
        {
        }
        public function isDeprecated(): bool
        {
        }
        /**
         * @param Type&NamedType $parentType
         *
         * @throws InvariantViolation
         */
        public function assertValid(\GraphQL\Type\Definition\Type $parentType): void
        {
        }
    }
    class IntType extends \GraphQL\Type\Definition\ScalarType
    {
        // As per the GraphQL Spec, Integers are only treated as valid when a valid
        // 32-bit signed integer, providing the broadest support across platforms.
        //
        // n.b. JavaScript's integers are safe between -(2^53 - 1) and 2^53 - 1 because
        // they are internally represented as IEEE 754 doubles.
        public const MAX_INT = 2147483647;
        public const MIN_INT = -2147483648;
        public string $name = \GraphQL\Type\Definition\Type::INT;
        public ?string $description = 'The `Int` scalar type represents non-fractional signed whole numeric
values. Int can represent values between -(2^31) and 2^31 - 1. ';
        /** @throws SerializationError */
        public function serialize($value): int
        {
        }
        /** @throws Error */
        public function parseValue($value): int
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): int
        {
        }
    }
    interface WrappingType
    {
        /** Return the wrapped type, which may itself be a wrapping type. */
        public function getWrappedType(): \GraphQL\Type\Definition\Type;
        /**
         * Return the innermost wrapped type, which is guaranteed to be a named type.
         *
         * @return Type&NamedType
         */
        public function getInnermostType(): \GraphQL\Type\Definition\NamedType;
    }
    /**
     * @template-covariant OfType of Type
     */
    class ListOfType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\WrappingType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\InputType
    {
        /**
         * @param Type|callable $type
         *
         * @phpstan-param OfType|callable(): OfType $type
         */
        public function __construct($type)
        {
        }
        public function toString(): string
        {
        }
        /** @phpstan-return OfType */
        public function getWrappedType(): \GraphQL\Type\Definition\Type
        {
        }
        public function getInnermostType(): \GraphQL\Type\Definition\NamedType
        {
        }
    }
    /**
     * @phpstan-type WrappedType (NullableType&Type)|callable():(NullableType&Type)
     */
    class NonNull extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\WrappingType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\InputType
    {
        /**
         * @param Type|callable $type
         *
         * @phpstan-param WrappedType $type
         */
        public function __construct($type)
        {
        }
        public function toString(): string
        {
        }
        /** @return NullableType&Type */
        public function getWrappedType(): \GraphQL\Type\Definition\Type
        {
        }
        public function getInnermostType(): \GraphQL\Type\Definition\NamedType
        {
        }
    }
    /** @phpstan-import-type PartialEnumValueConfig from EnumType */
    class PhpEnumType extends \GraphQL\Type\Definition\EnumType
    {
        public const MULTIPLE_DESCRIPTIONS_DISALLOWED = 'Using more than 1 Description attribute is not supported.';
        public const MULTIPLE_DEPRECATIONS_DISALLOWED = 'Using more than 1 Deprecated attribute is not supported.';
        /** @var class-string<\UnitEnum> */
        protected string $enumClass;
        /**
         * @param class-string<\UnitEnum> $enumClass The fully qualified class name of a native PHP enum
         * @param string|null $name The name the enum will have in the schema, defaults to the basename of the given class
         * @param string|null $description The description the enum will have in the schema, defaults to PHPDoc of the given class
         * @param array<EnumTypeExtensionNode>|null $extensionASTNodes
         *
         * @throws \Exception
         * @throws \ReflectionException
         */
        public function __construct(string $enumClass, ?string $name = null, ?string $description = null, ?\GraphQL\Language\AST\EnumTypeDefinitionNode $astNode = null, ?array $extensionASTNodes = null)
        {
        }
        public function serialize($value): string
        {
        }
        public function parseValue($value)
        {
        }
        /** @param class-string $class */
        protected function baseName(string $class): string
        {
        }
        /**
         * @param \ReflectionClassConstant|\ReflectionClass<\UnitEnum> $reflection
         *
         * @throws \Exception
         */
        protected function extractDescription(\ReflectionClassConstant|\ReflectionClass $reflection): ?string
        {
        }
        /** @throws \Exception */
        protected function deprecationReason(\ReflectionClassConstant $reflection): ?string
        {
        }
    }
    /**
     * @phpstan-type QueryPlanOptions array{
     *   groupImplementorFields?: bool,
     * }
     */
    class QueryPlan
    {
        /**
         * @param iterable<FieldNode> $fieldNodes
         * @param array<string, mixed> $variableValues
         * @param array<string, FragmentDefinitionNode> $fragments
         * @param QueryPlanOptions $options
         *
         * @throws \Exception
         * @throws Error
         * @throws InvariantViolation
         */
        public function __construct(\GraphQL\Type\Definition\ObjectType $parentType, \GraphQL\Type\Schema $schema, iterable $fieldNodes, array $variableValues, array $fragments, array $options = [])
        {
        }
        /** @return array<string, mixed> */
        public function queryPlan(): array
        {
        }
        /** @return array<int, string> */
        public function getReferencedTypes(): array
        {
        }
        public function hasType(string $type): bool
        {
        }
        /**
         * TODO return array<string, true>.
         *
         * @return array<int, string>
         */
        public function getReferencedFields(): array
        {
        }
        public function hasField(string $field): bool
        {
        }
        /**
         * TODO return array<string, true>.
         *
         * @return array<int, string>
         */
        public function subFields(string $typename): array
        {
        }
    }
    /**
     * Structure containing information useful for field resolution process.
     *
     * Passed as 4th argument to every field resolver. See [docs on field resolving (data fetching)](data-fetching.md).
     *
     * @phpstan-import-type QueryPlanOptions from QueryPlan
     *
     * @phpstan-type Path list<string|int>
     */
    class ResolveInfo
    {
        /**
         * The definition of the field being resolved.
         *
         * @api
         */
        public \GraphQL\Type\Definition\FieldDefinition $fieldDefinition;
        /**
         * The name of the field being resolved.
         *
         * @api
         */
        public string $fieldName;
        /**
         * Expected return type of the field being resolved.
         *
         * @api
         */
        public \GraphQL\Type\Definition\Type $returnType;
        /**
         * AST of all nodes referencing this field in the query.
         *
         * @api
         *
         * @var \ArrayObject<int, FieldNode>
         */
        public \ArrayObject $fieldNodes;
        /**
         * Parent type of the field being resolved.
         *
         * @api
         */
        public \GraphQL\Type\Definition\ObjectType $parentType;
        /**
         * Path to this field from the very root value. When fields are aliased, the path includes aliases.
         *
         * @api
         *
         * @var list<string|int>
         *
         * @phpstan-var Path
         */
        public array $path;
        /**
         * Path to this field from the very root value. This will never include aliases.
         *
         * @api
         *
         * @var list<string|int>
         *
         * @phpstan-var Path
         */
        public array $unaliasedPath;
        /**
         * Instance of a schema used for execution.
         *
         * @api
         */
        public \GraphQL\Type\Schema $schema;
        /**
         * AST of all fragments defined in query.
         *
         * @api
         *
         * @var array<string, FragmentDefinitionNode>
         */
        public array $fragments = [];
        /**
         * Root value passed to query execution.
         *
         * @api
         *
         * @var mixed
         */
        public $rootValue;
        /**
         * AST of operation definition node (query, mutation).
         *
         * @api
         */
        public \GraphQL\Language\AST\OperationDefinitionNode $operation;
        /**
         * Array of variables passed to query execution.
         *
         * @api
         *
         * @var array<string, mixed>
         */
        public array $variableValues = [];
        /**
         * @param \ArrayObject<int, FieldNode> $fieldNodes
         * @param list<string|int> $path
         * @param array<string, FragmentDefinitionNode> $fragments
         * @param mixed|null $rootValue
         * @param array<string, mixed> $variableValues
         * @param list<string|int> $unaliasedPath
         *
         * @phpstan-param Path $path
         * @phpstan-param Path $unaliasedPath
         */
        public function __construct(\GraphQL\Type\Definition\FieldDefinition $fieldDefinition, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ObjectType $parentType, array $path, \GraphQL\Type\Schema $schema, array $fragments, $rootValue, \GraphQL\Language\AST\OperationDefinitionNode $operation, array $variableValues, array $unaliasedPath = [])
        {
        }
        /**
         * Returns names of all fields selected in query for `$this->fieldName` up to `$depth` levels.
         *
         * Example:
         * {
         *   root {
         *     id
         *     nested {
         *       nested1
         *       nested2 {
         *         nested3
         *       }
         *     }
         *   }
         * }
         *
         * Given this ResolveInfo instance is a part of root field resolution, and $depth === 1,
         * this method will return:
         * [
         *     'id' => true,
         *     'nested' => [
         *         'nested1' => true,
         *         'nested2' => true,
         *     ],
         * ]
         *
         * This method does not consider conditional typed fragments.
         * Use it with care for fields of interface and union types.
         *
         * @param int $depth How many levels to include in the output beyond the first
         *
         * @return array<string, mixed>
         *
         * @api
         */
        public function getFieldSelection(int $depth = 0): array
        {
        }
        /**
         * Returns names and args of all fields selected in query for `$this->fieldName` up to `$depth` levels, including aliases.
         *
         * The result maps original field names to a map of selections for that field, including aliases.
         * For each of those selections, you can find the following keys:
         * - "args" contains the passed arguments for this field/alias (not on an union inline fragment)
         * - "type" contains the related Type instance found (will be the same for all aliases of a field)
         * - "selectionSet" contains potential nested fields of this field/alias (only on ObjectType). The structure is recursive from here.
         * - "unions" contains potential object types contained in an UnionType (only on UnionType). The structure is recursive from here and will go through the selectionSet of the object types.
         *
         * Example:
         * {
         *   root {
         *     id
         *     nested {
         *      nested1(myArg: 1)
         *      nested1Bis: nested1
         *     }
         *     alias1: nested {
         *       nested1(myArg: 2, mySecondAg: "test")
         *     }
         *     myUnion(myArg: 3) {
         *       ...on Nested {
         *         nested1(myArg: 4)
         *       }
         *       ...on MyCustomObject {
         *         nested3
         *       }
         *     }
         *   }
         * }
         *
         * Given this ResolveInfo instance is a part of root field resolution,
         * $depth === 1,
         * and fields "nested" represents an ObjectType named "Nested",
         * this method will return:
         * [
         *     'id' => [
         *         'id' => [
         *              'args' => [],
         *              'type' => GraphQL\Type\Definition\IntType Object ( ... )),
         *         ],
         *     ],
         *     'nested' => [
         *         'nested' => [
         *             'args' => [],
         *             'type' => GraphQL\Type\Definition\ObjectType Object ( ... )),
         *             'selectionSet' => [
         *                 'nested1' => [
         *                     'nested1' => [
         *                          'args' => [
         *                              'myArg' => 1,
         *                          ],
         *                          'type' => GraphQL\Type\Definition\StringType Object ( ... )),
         *                      ],
         *                      'nested1Bis' => [
         *                          'args' => [],
         *                          'type' => GraphQL\Type\Definition\StringType Object ( ... )),
         *                      ],
         *                 ],
         *             ],
         *         ],
         *     ],
         *     'alias1' => [
         *         'alias1' => [
         *             'args' => [],
         *             'type' => GraphQL\Type\Definition\ObjectType Object ( ... )),
         *             'selectionSet' => [
         *                 'nested1' => [
         *                     'nested1' => [
         *                          'args' => [
         *                              'myArg' => 2,
         *                              'mySecondAg' => "test",
         *                          ],
         *                          'type' => GraphQL\Type\Definition\StringType Object ( ... )),
         *                      ],
         *                 ],
         *             ],
         *         ],
         *     ],
         *     'myUnion' => [
         *         'myUnion' => [
         *              'args' => [
         *                  'myArg' => 3,
         *              ],
         *              'type' => GraphQL\Type\Definition\UnionType Object ( ... )),
         *              'unions' => [
         *                  'Nested' => [
         *                      'type' => GraphQL\Type\Definition\ObjectType Object ( ... )),
         *                      'selectionSet' => [
         *                          'nested1' => [
         *                              'nested1' => [
         *                                  'args' => [
         *                                      'myArg' => 4,
         *                                  ],
         *                                  'type' => GraphQL\Type\Definition\StringType Object ( ... )),
         *                              ],
         *                          ],
         *                      ],
         *                  ],
         *                  'MyCustomObject' => [
         *                       'type' => GraphQL\Tests\Type\TestClasses\MyCustomType Object ( ... )),
         *                       'selectionSet' => [
         *                           'nested3' => [
         *                               'nested3' => [
         *                                   'args' => [],
         *                                   'type' => GraphQL\Type\Definition\StringType Object ( ... )),
         *                               ],
         *                           ],
         *                       ],
         *                   ],
         *              ],
         *          ],
         *      ],
         * ]
         *
         * @param int $depth How many levels to include in the output beyond the first
         *
         * @throws \Exception
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<string, mixed>
         *
         * @api
         */
        public function getFieldSelectionWithAliases(int $depth = 0): array
        {
        }
        /**
         * @param QueryPlanOptions $options
         *
         * @throws \Exception
         * @throws Error
         * @throws InvariantViolation
         */
        public function lookAhead(array $options = []): \GraphQL\Type\Definition\QueryPlan
        {
        }
    }
    class StringType extends \GraphQL\Type\Definition\ScalarType
    {
        public string $name = \GraphQL\Type\Definition\Type::STRING;
        public ?string $description = 'The `String` scalar type represents textual data, represented as UTF-8
character sequences. The String type is most often used by GraphQL to
represent free-form human-readable text.';
        /** @throws SerializationError */
        public function serialize($value): string
        {
        }
        /** @throws Error */
        public function parseValue($value): string
        {
        }
        /**
         * @throws \JsonException
         * @throws Error
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null): string
        {
        }
    }
    /*
    export type GraphQLUnmodifiedType =
    GraphQLScalarType |
    GraphQLObjectType |
    GraphQLInterfaceType |
    GraphQLUnionType |
    GraphQLEnumType |
    GraphQLInputObjectType;
    */
    interface UnmodifiedType
    {
    }
    /**
     * @phpstan-import-type UnnamedFieldDefinitionConfig from FieldDefinition
     *
     * @phpstan-type DefinitionResolver callable(): (FieldDefinition|(Type&OutputType)|UnnamedFieldDefinitionConfig)
     */
    class UnresolvedFieldDefinition
    {
        /** @param DefinitionResolver $definitionResolver */
        public function __construct(string $name, callable $definitionResolver)
        {
        }
        public function getName(): string
        {
        }
        public function resolve(): \GraphQL\Type\Definition\FieldDefinition
        {
        }
    }
}
namespace GraphQL\Type {
    /**
     * @phpstan-type IntrospectionOptions array{
     *     descriptions?: bool,
     *     directiveIsRepeatable?: bool,
     *     typeIsOneOf?: bool,
     * }
     *
     * Available options:
     * - descriptions
     *   Include descriptions in the introspection result?
     *   Default: true
     * - directiveIsRepeatable
     *   Include field `isRepeatable` for directives?
     *   Default: false
     * - typeIsOneOf
     *   Include field `isOneOf` for types?
     *   Default: false
     *
     * @see \GraphQL\Tests\Type\IntrospectionTest
     */
    class Introspection
    {
        public const SCHEMA_FIELD_NAME = '__schema';
        public const TYPE_FIELD_NAME = '__type';
        public const TYPE_NAME_FIELD_NAME = '__typename';
        public const SCHEMA_OBJECT_NAME = '__Schema';
        public const TYPE_OBJECT_NAME = '__Type';
        public const DIRECTIVE_OBJECT_NAME = '__Directive';
        public const FIELD_OBJECT_NAME = '__Field';
        public const INPUT_VALUE_OBJECT_NAME = '__InputValue';
        public const ENUM_VALUE_OBJECT_NAME = '__EnumValue';
        public const TYPE_KIND_ENUM_NAME = '__TypeKind';
        public const DIRECTIVE_LOCATION_ENUM_NAME = '__DirectiveLocation';
        public const TYPE_NAMES = [self::SCHEMA_OBJECT_NAME, self::TYPE_OBJECT_NAME, self::DIRECTIVE_OBJECT_NAME, self::FIELD_OBJECT_NAME, self::INPUT_VALUE_OBJECT_NAME, self::ENUM_VALUE_OBJECT_NAME, self::TYPE_KIND_ENUM_NAME, self::DIRECTIVE_LOCATION_ENUM_NAME];
        /** @var array<string, mixed>|null */
        protected static ?array $cachedInstances;
        /**
         * @param IntrospectionOptions $options
         *
         * @api
         */
        public static function getIntrospectionQuery(array $options = []): string
        {
        }
        /**
         * Build an introspection query from a Schema.
         *
         * Introspection is useful for utilities that care about type and field
         * relationships, but do not need to traverse through those relationships.
         *
         * This is the inverse of BuildClientSchema::build(). The primary use case is
         * outside the server context, for instance when doing schema comparisons.
         *
         * @param IntrospectionOptions $options
         *
         * @throws \Exception
         * @throws \JsonException
         * @throws InvariantViolation
         *
         * @return array<string, array<mixed>>
         *
         * @api
         */
        public static function fromSchema(\GraphQL\Type\Schema $schema, array $options = []): array
        {
        }
        /** @param Type&NamedType $type */
        public static function isIntrospectionType(\GraphQL\Type\Definition\NamedType $type): bool
        {
        }
        /** @return array<string, Type&NamedType> */
        public static function getTypes(): array
        {
        }
        public static function _schema(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _type(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _typeKind(): \GraphQL\Type\Definition\EnumType
        {
        }
        public static function _field(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _inputValue(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _enumValue(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _directive(): \GraphQL\Type\Definition\ObjectType
        {
        }
        public static function _directiveLocation(): \GraphQL\Type\Definition\EnumType
        {
        }
        public static function schemaMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public static function typeMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public static function typeNameMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public static function resetCachedInstances(): void
        {
        }
    }
    /**
     * Configuration options for schema construction.
     *
     * The options accepted by the **create** method are described
     * in the [schema definition docs](schema-definition.md#configuration-options).
     *
     * Usage example:
     *
     *     $config = SchemaConfig::create()
     *         ->setQuery($myQueryType)
     *         ->setTypeLoader($myTypeLoader);
     *
     *     $schema = new Schema($config);
     *
     * @see Type, NamedType
     *
     * @phpstan-type MaybeLazyObjectType ObjectType|(callable(): (ObjectType|null))|null
     * @phpstan-type TypeLoader callable(string $typeName): ((Type&NamedType)|null)
     * @phpstan-type Types iterable<Type&NamedType>|(callable(): iterable<Type&NamedType>)|iterable<(callable(): Type&NamedType)>|(callable(): iterable<(callable(): Type&NamedType)>)
     * @phpstan-type SchemaConfigOptions array{
     *   query?: MaybeLazyObjectType,
     *   mutation?: MaybeLazyObjectType,
     *   subscription?: MaybeLazyObjectType,
     *   types?: Types|null,
     *   directives?: array<Directive>|null,
     *   typeLoader?: TypeLoader|null,
     *   assumeValid?: bool|null,
     *   astNode?: SchemaDefinitionNode|null,
     *   extensionASTNodes?: array<SchemaExtensionNode>|null,
     * }
     */
    class SchemaConfig
    {
        /** @var MaybeLazyObjectType */
        public $query;
        /** @var MaybeLazyObjectType */
        public $mutation;
        /** @var MaybeLazyObjectType */
        public $subscription;
        /**
         * @var iterable|callable
         *
         * @phpstan-var Types
         */
        public $types = [];
        /** @var array<Directive>|null */
        public ?array $directives = null;
        /**
         * @var callable|null
         *
         * @phpstan-var TypeLoader|null
         */
        public $typeLoader;
        public bool $assumeValid = false;
        public ?\GraphQL\Language\AST\SchemaDefinitionNode $astNode = null;
        /** @var array<SchemaExtensionNode> */
        public array $extensionASTNodes = [];
        /**
         * Converts an array of options to instance of SchemaConfig
         * (or just returns empty config when array is not passed).
         *
         * @phpstan-param SchemaConfigOptions $options
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public static function create(array $options = []): self
        {
        }
        /**
         * @return MaybeLazyObjectType
         *
         * @api
         */
        public function getQuery()
        {
        }
        /**
         * @param MaybeLazyObjectType $query
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public function setQuery($query): self
        {
        }
        /**
         * @return MaybeLazyObjectType
         *
         * @api
         */
        public function getMutation()
        {
        }
        /**
         * @param MaybeLazyObjectType $mutation
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public function setMutation($mutation): self
        {
        }
        /**
         * @return MaybeLazyObjectType
         *
         * @api
         */
        public function getSubscription()
        {
        }
        /**
         * @param MaybeLazyObjectType $subscription
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public function setSubscription($subscription): self
        {
        }
        /**
         * @return array|callable
         *
         * @phpstan-return Types
         *
         * @api
         */
        public function getTypes()
        {
        }
        /**
         * @param array|callable $types
         *
         * @phpstan-param Types $types
         *
         * @api
         */
        public function setTypes($types): self
        {
        }
        /**
         * @return array<Directive>|null
         *
         * @api
         */
        public function getDirectives(): ?array
        {
        }
        /**
         * @param array<Directive>|null $directives
         *
         * @api
         */
        public function setDirectives(?array $directives): self
        {
        }
        /**
         * @return callable|null $typeLoader
         *
         * @phpstan-return TypeLoader|null $typeLoader
         *
         * @api
         */
        public function getTypeLoader(): ?callable
        {
        }
        /**
         * @phpstan-param TypeLoader|null $typeLoader
         *
         * @api
         */
        public function setTypeLoader(?callable $typeLoader): self
        {
        }
        public function getAssumeValid(): bool
        {
        }
        public function setAssumeValid(bool $assumeValid): self
        {
        }
        public function getAstNode(): ?\GraphQL\Language\AST\SchemaDefinitionNode
        {
        }
        public function setAstNode(?\GraphQL\Language\AST\SchemaDefinitionNode $astNode): self
        {
        }
        /** @return array<SchemaExtensionNode> */
        public function getExtensionASTNodes(): array
        {
        }
        /** @param array<SchemaExtensionNode> $extensionASTNodes */
        public function setExtensionASTNodes(array $extensionASTNodes): self
        {
        }
        /**
         * @param mixed $maybeLazyObjectType Should be MaybeLazyObjectType
         *
         * @throws InvariantViolation
         */
        protected function assertMaybeLazyObjectType($maybeLazyObjectType): void
        {
        }
    }
    class SchemaValidationContext
    {
        public function __construct(\GraphQL\Type\Schema $schema)
        {
        }
        /** @return list<Error> */
        public function getErrors(): array
        {
        }
        public function validateRootTypes(): void
        {
        }
        /** @param array<Node|null>|Node|null $nodes */
        public function reportError(string $message, $nodes = null): void
        {
        }
        /** @throws InvariantViolation */
        public function validateDirectives(): void
        {
        }
        /** @throws InvariantViolation */
        public function validateDirectiveDefinitions(): void
        {
        }
        /** @throws InvariantViolation */
        public function validateTypes(): void
        {
        }
        public static function duplicateType(\GraphQL\Type\Schema $schema, string $path, string $name): string
        {
        }
    }
    class TypeKind
    {
        public const SCALAR = 'SCALAR';
        public const OBJECT = 'OBJECT';
        public const INTERFACE = 'INTERFACE';
        public const UNION = 'UNION';
        public const ENUM = 'ENUM';
        public const INPUT_OBJECT = 'INPUT_OBJECT';
        public const LIST = 'LIST';
        public const NON_NULL = 'NON_NULL';
    }
}
namespace GraphQL\Type\Validation {
    class InputObjectCircularRefs
    {
        public function __construct(\GraphQL\Type\SchemaValidationContext $schemaValidationContext)
        {
        }
        /**
         * This does a straight-forward DFS to find cycles.
         * It does not terminate when a cycle was found but continues to explore
         * the graph to find all possible cycles.
         *
         * @throws InvariantViolation
         */
        public function validate(\GraphQL\Type\Definition\InputObjectType $inputObj): void
        {
        }
    }
}
namespace GraphQL\Utils {
    /**
     * Various utilities dealing with AST.
     */
    class AST
    {
        /**
         * Convert representation of AST as an associative array to instance of GraphQL\Language\AST\Node.
         *
         * For example:
         *
         * ```php
         * AST::fromArray([
         *     'kind' => 'ListValue',
         *     'values' => [
         *         ['kind' => 'StringValue', 'value' => 'my str'],
         *         ['kind' => 'StringValue', 'value' => 'my other str']
         *     ],
         *     'loc' => ['start' => 21, 'end' => 25]
         * ]);
         * ```
         *
         * Will produce instance of `ListValueNode` where `values` prop is a lazily-evaluated `NodeList`
         * returning instances of `StringValueNode` on access.
         *
         * This is a reverse operation for AST::toArray($node)
         *
         * @param array<string, mixed> $node
         *
         * @api
         *
         * @throws \JsonException
         * @throws InvariantViolation
         */
        public static function fromArray(array $node): \GraphQL\Language\AST\Node
        {
        }
        /**
         * Convert AST node to serializable array.
         *
         * @return array<string, mixed>
         *
         * @api
         */
        public static function toArray(\GraphQL\Language\AST\Node $node): array
        {
        }
        /**
         * Produces a GraphQL Value AST given a PHP value.
         *
         * Optionally, a GraphQL type may be provided, which will be used to
         * disambiguate between value primitives.
         *
         * | PHP Value     | GraphQL Value        |
         * | ------------- | -------------------- |
         * | Object        | Input Object         |
         * | Assoc Array   | Input Object         |
         * | Array         | List                 |
         * | Boolean       | Boolean              |
         * | String        | String / Enum Value  |
         * | Int           | Int                  |
         * | Float         | Int / Float          |
         * | Mixed         | Enum Value           |
         * | null          | NullValue            |
         *
         * @param mixed $value
         * @param InputType&Type $type
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         *
         * @return (ValueNode&Node)|null
         *
         * @api
         */
        public static function astFromValue($value, \GraphQL\Type\Definition\InputType $type): ?\GraphQL\Language\AST\ValueNode
        {
        }
        /**
         * Produces a PHP value given a GraphQL Value AST.
         *
         * A GraphQL type must be provided, which will be used to interpret different
         * GraphQL Value literals.
         *
         * Returns `null` when the value could not be validly coerced according to
         * the provided type.
         *
         * | GraphQL Value        | PHP Value     |
         * | -------------------- | ------------- |
         * | Input Object         | Assoc Array   |
         * | List                 | Array         |
         * | Boolean              | Boolean       |
         * | String               | String        |
         * | Int / Float          | Int / Float   |
         * | Enum Value           | Mixed         |
         * | Null Value           | null          |
         *
         * @param (ValueNode&Node)|null $valueNode
         * @param array<string, mixed>|null $variables
         *
         * @throws \Exception
         *
         * @return mixed
         *
         * @api
         */
        public static function valueFromAST(?\GraphQL\Language\AST\ValueNode $valueNode, \GraphQL\Type\Definition\Type $type, ?array $variables = null)
        {
        }
        /**
         * Produces a PHP value given a GraphQL Value AST.
         *
         * Unlike `valueFromAST()`, no type is provided. The resulting PHP value
         * will reflect the provided GraphQL value AST.
         *
         * | GraphQL Value        | PHP Value     |
         * | -------------------- | ------------- |
         * | Input Object         | Assoc Array   |
         * | List                 | Array         |
         * | Boolean              | Boolean       |
         * | String               | String        |
         * | Int / Float          | Int / Float   |
         * | Enum                 | Mixed         |
         * | Null                 | null          |
         *
         * @param array<string, mixed>|null $variables
         *
         * @throws \Exception
         *
         * @return mixed
         *
         * @api
         */
        public static function valueFromASTUntyped(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
        /**
         * Returns type definition for given AST Type node.
         *
         * @param callable(string): ?Type $typeLoader
         * @param NamedTypeNode|ListTypeNode|NonNullTypeNode $inputTypeNode
         *
         * @throws \Exception
         *
         * @api
         */
        public static function typeFromAST(callable $typeLoader, \GraphQL\Language\AST\Node $inputTypeNode): ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * Returns the operation within a document by name.
         *
         * If a name is not provided, an operation is only returned if the document has exactly one.
         *
         * @api
         */
        public static function getOperationAST(\GraphQL\Language\AST\DocumentNode $document, ?string $operationName = null): ?\GraphQL\Language\AST\OperationDefinitionNode
        {
        }
        /**
         * Provided a collection of ASTs, presumably each from different files,
         * concatenate the ASTs together into batched AST, useful for validating many
         * GraphQL source files which together represent one conceptual application.
         *
         * @param array<DocumentNode> $documents
         *
         * @api
         */
        public static function concatAST(array $documents): \GraphQL\Language\AST\DocumentNode
        {
        }
    }
    /**
     * @see FieldDefinition, InputObjectField
     *
     * @phpstan-import-type UnnamedFieldDefinitionConfig from FieldDefinition
     * @phpstan-import-type InputObjectFieldConfig from InputObjectField
     * @phpstan-import-type UnnamedInputObjectFieldConfig from InputObjectField
     *
     * @phpstan-type ResolveType callable(string, Node|null): Type&NamedType
     * @phpstan-type TypeConfigDecorator callable(array<string, mixed>, Node&TypeDefinitionNode, array<string, Node&TypeDefinitionNode>): array<string, mixed>
     * @phpstan-type FieldConfigDecorator callable(UnnamedFieldDefinitionConfig, FieldDefinitionNode, ObjectTypeDefinitionNode|ObjectTypeExtensionNode|InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode): UnnamedFieldDefinitionConfig
     */
    class ASTDefinitionBuilder
    {
        /**
         * @param array<string, Node&TypeDefinitionNode> $typeDefinitionsMap
         * @param array<string, array<int, Node&TypeExtensionNode>> $typeExtensionsMap
         *
         * @phpstan-param ResolveType $resolveType
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         *
         * @throws InvariantViolation
         */
        public function __construct(array $typeDefinitionsMap, array $typeExtensionsMap, callable $resolveType, ?callable $typeConfigDecorator = null, ?callable $fieldConfigDecorator = null)
        {
        }
        /** @throws \Exception */
        public function buildDirective(\GraphQL\Language\AST\DirectiveDefinitionNode $directiveNode): \GraphQL\Type\Definition\Directive
        {
        }
        /**
         * @param string|(Node&NamedTypeNode)|(Node&TypeDefinitionNode) $ref
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         *
         * @return Type&NamedType
         */
        public function buildType($ref): \GraphQL\Type\Definition\Type
        {
        }
        /**
         * Calling this method is an equivalent of `typeMap[typeName]` in `graphql-js`.
         * It is legal to access a type from the map of already-built types that doesn't exist in the map.
         * Since we build types lazily, and we don't have a such map of built types,
         * this method provides a way to build a type that may not exist in the SDL definitions and returns null instead.
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         *
         * @return (Type&NamedType)|null
         */
        public function maybeBuildType(string $name): ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * @param ObjectTypeDefinitionNode|ObjectTypeExtensionNode|InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $node
         *
         * @throws \Exception
         * @throws Error
         *
         * @return UnnamedFieldDefinitionConfig
         */
        public function buildField(\GraphQL\Language\AST\FieldDefinitionNode $field, object $node): array
        {
        }
        /**
         * @throws \Exception
         *
         * @return InputObjectFieldConfig
         */
        public function buildInputField(\GraphQL\Language\AST\InputValueDefinitionNode $value): array
        {
        }
        /**
         * @throws \Exception
         *
         * @return array<string, mixed>
         */
        public function buildEnumValue(\GraphQL\Language\AST\EnumValueDefinitionNode $value): array
        {
        }
    }
    /**
     * Utility for finding breaking/dangerous changes between two schemas.
     *
     * @phpstan-type Change array{type: string, description: string}
     * @phpstan-type Changes array{
     *     breakingChanges: array<int, Change>,
     *     dangerousChanges: array<int, Change>
     * }
     *
     * @see \GraphQL\Tests\Utils\BreakingChangesFinderTest
     */
    class BreakingChangesFinder
    {
        public const BREAKING_CHANGE_FIELD_CHANGED_KIND = 'FIELD_CHANGED_KIND';
        public const BREAKING_CHANGE_FIELD_REMOVED = 'FIELD_REMOVED';
        public const BREAKING_CHANGE_TYPE_CHANGED_KIND = 'TYPE_CHANGED_KIND';
        public const BREAKING_CHANGE_TYPE_REMOVED = 'TYPE_REMOVED';
        public const BREAKING_CHANGE_TYPE_REMOVED_FROM_UNION = 'TYPE_REMOVED_FROM_UNION';
        public const BREAKING_CHANGE_VALUE_REMOVED_FROM_ENUM = 'VALUE_REMOVED_FROM_ENUM';
        public const BREAKING_CHANGE_ARG_REMOVED = 'ARG_REMOVED';
        public const BREAKING_CHANGE_ARG_CHANGED_KIND = 'ARG_CHANGED_KIND';
        public const BREAKING_CHANGE_REQUIRED_ARG_ADDED = 'REQUIRED_ARG_ADDED';
        public const BREAKING_CHANGE_REQUIRED_INPUT_FIELD_ADDED = 'REQUIRED_INPUT_FIELD_ADDED';
        public const BREAKING_CHANGE_IMPLEMENTED_INTERFACE_REMOVED = 'IMPLEMENTED_INTERFACE_REMOVED';
        public const BREAKING_CHANGE_DIRECTIVE_REMOVED = 'DIRECTIVE_REMOVED';
        public const BREAKING_CHANGE_DIRECTIVE_ARG_REMOVED = 'DIRECTIVE_ARG_REMOVED';
        public const BREAKING_CHANGE_DIRECTIVE_LOCATION_REMOVED = 'DIRECTIVE_LOCATION_REMOVED';
        public const BREAKING_CHANGE_REQUIRED_DIRECTIVE_ARG_ADDED = 'REQUIRED_DIRECTIVE_ARG_ADDED';
        public const DANGEROUS_CHANGE_ARG_DEFAULT_VALUE_CHANGED = 'ARG_DEFAULT_VALUE_CHANGE';
        public const DANGEROUS_CHANGE_VALUE_ADDED_TO_ENUM = 'VALUE_ADDED_TO_ENUM';
        public const DANGEROUS_CHANGE_IMPLEMENTED_INTERFACE_ADDED = 'IMPLEMENTED_INTERFACE_ADDED';
        public const DANGEROUS_CHANGE_TYPE_ADDED_TO_UNION = 'TYPE_ADDED_TO_UNION';
        public const DANGEROUS_CHANGE_OPTIONAL_INPUT_FIELD_ADDED = 'OPTIONAL_INPUT_FIELD_ADDED';
        public const DANGEROUS_CHANGE_OPTIONAL_ARG_ADDED = 'OPTIONAL_ARG_ADDED';
        /**
         * Given two schemas, returns an Array containing descriptions of all the types
         * of breaking changes covered by the other functions down below.
         *
         * @throws \TypeError
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findBreakingChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing an entire type.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findRemovedTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to changing the type of a type.
         *
         * @throws \TypeError
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findTypesThatChangedKind(\GraphQL\Type\Schema $schemaA, \GraphQL\Type\Schema $schemaB): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findFieldsThatChangedTypeOnObjectOrInterfaceTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return Changes
         */
        public static function findFieldsThatChangedTypeOnInputObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing types from a union type.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findTypesRemovedFromUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing values from an enum type.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findValuesRemovedFromEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any
         * breaking or dangerous changes in the newSchema related to arguments
         * (such as removal or change of type of an argument, or a change in an
         * argument's default value).
         *
         * @throws InvariantViolation
         *
         * @return Changes
         */
        public static function findArgChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findInterfacesRemovedFromObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findRemovedDirectives(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findRemovedDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /** @return array<int, Argument> */
        public static function findRemovedArgsForDirectives(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findAddedNonNullDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /** @return array<int, Argument> */
        public static function findAddedArgsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findRemovedDirectiveLocations(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /** @return array<int, string> */
        public static function findRemovedLocationsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of all the types
         * of potentially dangerous changes covered by the other functions down below.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findDangerousChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any dangerous
         * changes in the newSchema related to adding values to an enum type.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findValuesAddedToEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findInterfacesAddedToObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any dangerous
         * changes in the newSchema related to adding types to a union type.
         *
         * @throws InvariantViolation
         *
         * @return array<int, Change>
         */
        public static function findTypesAddedToUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array
        {
        }
    }
    /**
     * @phpstan-import-type UnnamedFieldDefinitionConfig from FieldDefinition
     * @phpstan-import-type UnnamedInputObjectFieldConfig from InputObjectField
     *
     * @phpstan-type Options array{
     *   assumeValid?: bool
     * }
     *
     *    - assumeValid:
     *          When building a schema from a GraphQL service's introspection result, it
     *          might be safe to assume the schema is valid. Set to true to assume the
     *          produced schema is valid.
     *
     *          Default: false
     *
     * @see \GraphQL\Tests\Utils\BuildClientSchemaTest
     */
    class BuildClientSchema
    {
        /**
         * @param array<string, mixed> $introspectionQuery
         * @param array<string, bool> $options
         *
         * @phpstan-param Options    $options
         */
        public function __construct(array $introspectionQuery, array $options = [])
        {
        }
        /**
         * Build a schema for use by client tools.
         *
         * Given the result of a client running the introspection query, creates and
         * returns a \GraphQL\Type\Schema instance which can be then used with all graphql-php
         * tools, but cannot be used to execute a query, as introspection does not
         * represent the "resolver", "parse" or "serialize" functions or any other
         * server-internal mechanisms.
         *
         * This function expects a complete introspection result. Don't forget to check
         * the "errors" field of a server response before calling this function.
         *
         * @param array<string, mixed> $introspectionQuery
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @api
         *
         * @throws \Exception
         * @throws InvariantViolation
         */
        public static function build(array $introspectionQuery, array $options = []): \GraphQL\Type\Schema
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function buildSchema(): \GraphQL\Type\Schema
        {
        }
        /** @param array<mixed> $type */
        public static function invalidOrIncompleteIntrospectionResult(array $type): \GraphQL\Error\InvariantViolation
        {
        }
        /**
         * @param array<string, mixed> $typeRef
         *
         * @throws InvariantViolation
         */
        public function getInterfaceType(array $typeRef): \GraphQL\Type\Definition\InterfaceType
        {
        }
        /**
         * @param array<string, mixed> $inputValueIntrospection
         *
         * @throws \Exception
         * @throws SyntaxError
         *
         * @return UnnamedInputObjectFieldConfig
         */
        public function buildInputValue(array $inputValueIntrospection): array
        {
        }
        /**
         * @param array<string, mixed> $directive
         *
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function buildDirective(array $directive): \GraphQL\Type\Definition\Directive
        {
        }
    }
    /**
     * Build instance of @see \GraphQL\Type\Schema out of schema language definition (string or parsed AST).
     *
     * See [schema definition language docs](schema-definition-language.md) for details.
     *
     * @phpstan-import-type TypeConfigDecorator from ASTDefinitionBuilder
     * @phpstan-import-type FieldConfigDecorator from ASTDefinitionBuilder
     *
     * @phpstan-type BuildSchemaOptions array{
     *   assumeValid?: bool,
     *   assumeValidSDL?: bool
     * }
     *
     * - assumeValid:
     *     When building a schema from a GraphQL service's introspection result, it
     *     might be safe to assume the schema is valid. Set to true to assume the
     *     produced schema is valid.
     *
     *     Default: false
     *
     * - assumeValidSDL:
     *     Set to true to assume the SDL is valid.
     *
     *     Default: false
     *
     * @see \GraphQL\Tests\Utils\BuildSchemaTest
     */
    class BuildSchema
    {
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         * @phpstan-param BuildSchemaOptions $options
         */
        public function __construct(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array $options = [], ?callable $fieldConfigDecorator = null)
        {
        }
        /**
         * A helper function to build a GraphQLSchema directly from a source
         * document.
         *
         * @param DocumentNode|Source|string $source
         * @param array<string, bool> $options
         *
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         * @phpstan-param FieldConfigDecorator|null $fieldConfigDecorator
         * @phpstan-param BuildSchemaOptions $options
         *
         * @api
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         * @throws SyntaxError
         */
        public static function build($source, ?callable $typeConfigDecorator = null, array $options = [], ?callable $fieldConfigDecorator = null): \GraphQL\Type\Schema
        {
        }
        /**
         * This takes the AST of a schema from @see \GraphQL\Language\Parser::parse().
         *
         * If no schema definition is provided, then it will look for types named Query and Mutation.
         *
         * Given that AST it constructs a @see \GraphQL\Type\Schema. The resulting schema
         * has no resolve methods, so execution will use default resolvers.
         *
         * @param array<string, bool> $options
         *
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         * @phpstan-param FieldConfigDecorator|null $fieldConfigDecorator
         * @phpstan-param BuildSchemaOptions $options
         *
         * @api
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         */
        public static function buildAST(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array $options = [], ?callable $fieldConfigDecorator = null): \GraphQL\Type\Schema
        {
        }
        /**
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         */
        public function buildSchema(): \GraphQL\Type\Schema
        {
        }
        public static function unknownType(string $typeName): \GraphQL\Error\Error
        {
        }
    }
    /**
     * A way to track interface implementations.
     *
     * Distinguishes between implementations by ObjectTypes and InterfaceTypes.
     */
    class InterfaceImplementations
    {
        /**
         * @param array<int, ObjectType> $objects
         * @param array<int, InterfaceType> $interfaces
         */
        public function __construct(array $objects, array $interfaces)
        {
        }
        /** @return array<int, ObjectType> */
        public function objects(): array
        {
        }
        /** @return array<int, InterfaceType> */
        public function interfaces(): array
        {
        }
    }
    /**
     * Allows lazy calculation of a complex message when the exception is used in `assert()`.
     */
    class LazyException extends \Exception
    {
        /** @param callable(): string $makeMessage */
        public function __construct(callable $makeMessage)
        {
        }
    }
    /**
     * Computes the lexical distance between strings A and B.
     *
     * The "distance" between two strings is given by counting the minimum number
     * of edits needed to transform string A into string B. An edit can be an
     * insertion, deletion, or substitution of a single character, or a swap of two
     * adjacent characters.
     *
     * Includes a custom alteration from Damerau-Levenshtein to treat case changes
     * as a single edit which helps identify mis-cased values with an edit distance
     * of 1.
     *
     * This distance can be useful for detecting typos in input or sorting
     *
     * Unlike the native levenshtein() function that always returns int, LexicalDistance::measure() returns int|null.
     * It takes into account the threshold and returns null if the measured distance is bigger.
     */
    class LexicalDistance
    {
        public function __construct(string $input)
        {
        }
        public function measure(string $option, float $threshold): ?int
        {
        }
    }
    /**
     * Similar to PHP array, but allows any type of data to act as key (including arrays, objects, scalars).
     *
     * When storing array as key, access and modification is O(N). Avoid if possible.
     *
     * @template TValue of mixed
     *
     * @implements \ArrayAccess<mixed, TValue>
     *
     * @see \GraphQL\Tests\Utils\MixedStoreTest
     */
    class MixedStore implements \ArrayAccess
    {
        public function __construct()
        {
        }
        /** @param mixed $offset */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset): bool
        {
        }
        /**
         * @param mixed $offset
         *
         * @return TValue|null
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * @param mixed $offset
         * @param TValue $value
         *
         * @throws \InvalidArgumentException
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value): void
        {
        }
        /** @param mixed $offset */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset): void
        {
        }
    }
    /**
     * A way to keep track of pairs of things when the ordering of the pair does
     * not matter. We do this by maintaining a sort of double adjacency sets.
     */
    class PairSet
    {
        public function has(string $a, string $b, bool $areMutuallyExclusive): bool
        {
        }
        public function add(string $a, string $b, bool $areMutuallyExclusive): void
        {
        }
    }
    class PhpDoc
    {
        /** @param string|false|null $docBlock */
        public static function unwrap($docBlock): ?string
        {
        }
        /** @param string|false|null $docBlock */
        public static function unpad($docBlock): ?string
        {
        }
        protected static function nonEmptyOrNull(string $maybeEmptyString): ?string
        {
        }
    }
    /**
     * @phpstan-import-type TypeConfigDecorator from ASTDefinitionBuilder
     * @phpstan-import-type FieldConfigDecorator from ASTDefinitionBuilder
     * @phpstan-import-type UnnamedArgumentConfig from Argument
     * @phpstan-import-type UnnamedInputObjectFieldConfig from InputObjectField
     *
     * @see \GraphQL\Tests\Utils\SchemaExtenderTest
     */
    class SchemaExtender
    {
        /** @var array<string, Type> */
        protected array $extendTypeCache = [];
        /** @var array<string, array<TypeExtensionNode>> */
        protected array $typeExtensionsMap = [];
        protected \GraphQL\Utils\ASTDefinitionBuilder $astBuilder;
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         * @phpstan-param FieldConfigDecorator|null $fieldConfigDecorator
         *
         * @api
         *
         * @throws \Exception
         * @throws InvariantViolation
         */
        public static function extend(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentAST, array $options = [], ?callable $typeConfigDecorator = null, ?callable $fieldConfigDecorator = null): \GraphQL\Type\Schema
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param TypeConfigDecorator|null $typeConfigDecorator
         * @phpstan-param FieldConfigDecorator|null $fieldConfigDecorator
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         */
        protected function doExtend(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentAST, array $options = [], ?callable $typeConfigDecorator = null, ?callable $fieldConfigDecorator = null): \GraphQL\Type\Schema
        {
        }
        /**
         * @param Type&NamedType $type
         *
         * @return array<TypeExtensionNode>|null
         */
        protected function extensionASTNodes(\GraphQL\Type\Definition\NamedType $type): ?array
        {
        }
        /**
         * @throws \Exception
         * @throws \ReflectionException
         * @throws InvariantViolation
         */
        protected function extendScalarType(\GraphQL\Type\Definition\ScalarType $type): \GraphQL\Type\Definition\CustomScalarType
        {
        }
        /** @throws InvariantViolation */
        protected function extendUnionType(\GraphQL\Type\Definition\UnionType $type): \GraphQL\Type\Definition\UnionType
        {
        }
        /**
         * @throws \Exception
         * @throws \ReflectionException
         * @throws InvariantViolation
         */
        protected function extendEnumType(\GraphQL\Type\Definition\EnumType $type): \GraphQL\Type\Definition\EnumType
        {
        }
        /** @throws InvariantViolation */
        protected function extendInputObjectType(\GraphQL\Type\Definition\InputObjectType $type): \GraphQL\Type\Definition\InputObjectType
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         *
         * @return array<string, UnnamedInputObjectFieldConfig>
         */
        protected function extendInputFieldMap(\GraphQL\Type\Definition\InputObjectType $type): array
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         *
         * @return array<string, array<string, mixed>>
         */
        protected function extendEnumValueMap(\GraphQL\Type\Definition\EnumType $type): array
        {
        }
        /**
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<int, ObjectType>
         */
        protected function extendUnionPossibleTypes(\GraphQL\Type\Definition\UnionType $type): array
        {
        }
        /**
         * @param ObjectType|InterfaceType $type
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<int, InterfaceType>
         */
        protected function extendImplementedInterfaces(\GraphQL\Type\Definition\ImplementingType $type): array
        {
        }
        /**
         * @template T of Type
         *
         * @param T $typeDef
         *
         * @return T
         */
        protected function extendType(\GraphQL\Type\Definition\Type $typeDef): \GraphQL\Type\Definition\Type
        {
        }
        /**
         * @param array<Argument> $args
         *
         * @return array<string, UnnamedArgumentConfig>
         */
        protected function extendArgs(array $args): array
        {
        }
        /**
         * @param InterfaceType|ObjectType $type
         *
         * @throws \Exception
         * @throws Error
         * @throws InvariantViolation
         *
         * @return array<string, array<string, mixed>>
         */
        protected function extendFieldMap(\GraphQL\Type\Definition\Type $type): array
        {
        }
        /** @throws InvariantViolation */
        protected function extendObjectType(\GraphQL\Type\Definition\ObjectType $type): \GraphQL\Type\Definition\ObjectType
        {
        }
        /** @throws InvariantViolation */
        protected function extendInterfaceType(\GraphQL\Type\Definition\InterfaceType $type): \GraphQL\Type\Definition\InterfaceType
        {
        }
        protected function isSpecifiedScalarType(\GraphQL\Type\Definition\Type $type): bool
        {
        }
        /**
         * @template T of Type
         *
         * @param T&NamedType $type
         *
         * @throws \ReflectionException
         * @throws InvariantViolation
         *
         * @return T&NamedType
         */
        protected function extendNamedType(\GraphQL\Type\Definition\Type $type): \GraphQL\Type\Definition\Type
        {
        }
        /** @throws \Exception */
        protected function extendNamedTypeWithoutCache(\GraphQL\Type\Definition\Type $type): \GraphQL\Type\Definition\Type
        {
        }
        /**
         * @template T of Type
         *
         * @param (T&NamedType)|null $type
         *
         * @throws \ReflectionException
         * @throws InvariantViolation
         *
         * @return (T&NamedType)|null
         */
        protected function extendMaybeNamedType(?\GraphQL\Type\Definition\Type $type = null): ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * @param array<DirectiveDefinitionNode> $directiveDefinitions
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws InvariantViolation
         *
         * @return array<int, Directive>
         */
        protected function getMergedDirectives(\GraphQL\Type\Schema $schema, array $directiveDefinitions): array
        {
        }
        protected function extendDirective(\GraphQL\Type\Definition\Directive $directive): \GraphQL\Type\Definition\Directive
        {
        }
    }
    /**
     * Prints the contents of a Schema in schema definition language.
     *
     * All sorting options sort alphabetically. If not given or `false`, the original schema definition order will be used.
     *
     * @phpstan-type Options array{
     *   sortArguments?: bool,
     *   sortEnumValues?: bool,
     *   sortFields?: bool,
     *   sortInputFields?: bool,
     *   sortTypes?: bool,
     * }
     *
     * @see \GraphQL\Tests\Utils\SchemaPrinterTest
     */
    class SchemaPrinter
    {
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @api
         *
         * @throws \JsonException
         * @throws Error
         * @throws InvariantViolation
         * @throws SerializationError
         */
        public static function doPrint(\GraphQL\Type\Schema $schema, array $options = []): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @api
         *
         * @throws \JsonException
         * @throws Error
         * @throws InvariantViolation
         * @throws SerializationError
         */
        public static function printIntrospectionSchema(\GraphQL\Type\Schema $schema, array $options = []): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws Error
         * @throws InvariantViolation
         * @throws SerializationError
         */
        public static function printType(\GraphQL\Type\Definition\Type $type, array $options = []): string
        {
        }
        /**
         * @param callable(Directive  $directive): bool $directiveFilter
         * @param callable(Type&NamedType $type): bool $typeFilter
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws Error
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printFilteredSchema(\GraphQL\Type\Schema $schema, callable $directiveFilter, callable $typeFilter, array $options): string
        {
        }
        /** @throws InvariantViolation */
        protected static function printSchemaDefinition(\GraphQL\Type\Schema $schema): ?string
        {
        }
        /**
         * GraphQL schema define root types for each type of operation. These types are
         * the same as any other type and can be named in any manner, however there is
         * a common naming convention:.
         *
         * ```graphql
         *   schema {
         *     query: Query
         *     mutation: Mutation
         *     subscription: Subscription
         *   }
         * ```
         *
         * When using this naming convention, the schema description can be omitted.
         * When using this naming convention, the schema description can be omitted so
         * long as these names are only used for operation types.
         *
         * Note however that if any of these default names are used elsewhere in the
         * schema but not as a root operation type, the schema definition must still
         * be printed to avoid ambiguity.
         *
         * @throws InvariantViolation
         */
        protected static function hasDefaultRootOperationTypes(\GraphQL\Type\Schema $schema): bool
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printDirective(\GraphQL\Type\Definition\Directive $directive, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         * @param (Type&NamedType)|Directive|EnumValueDefinition|Argument|FieldDefinition|InputObjectField $def
         *
         * @throws \JsonException
         */
        protected static function printDescription(array $options, $def, string $indentation = '', bool $firstInBlock = true): string
        {
        }
        /**
         * @param array<string, bool> $options
         * @param array<int, Argument> $args
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printArgs(array $options, array $args, string $indentation = ''): string
        {
        }
        /**
         * @param InputObjectField|Argument $arg
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printInputValue($arg): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         */
        protected static function printScalar(\GraphQL\Type\Definition\ScalarType $type, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printObject(\GraphQL\Type\Definition\ObjectType $type, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         * @param ObjectType|InterfaceType $type
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printFields(array $options, $type): string
        {
        }
        /**
         * @param FieldDefinition|EnumValueDefinition|InputObjectField|Argument $deprecation
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printDeprecated($deprecation): string
        {
        }
        protected static function printImplementedInterfaces(\GraphQL\Type\Definition\ImplementingType $type): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printInterface(\GraphQL\Type\Definition\InterfaceType $type, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         */
        protected static function printUnion(\GraphQL\Type\Definition\UnionType $type, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printEnum(\GraphQL\Type\Definition\EnumType $type, array $options): string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @phpstan-param Options $options
         *
         * @throws \JsonException
         * @throws InvariantViolation
         * @throws SerializationError
         */
        protected static function printInputObject(\GraphQL\Type\Definition\InputObjectType $type, array $options): string
        {
        }
        /** @param array<string> $items */
        protected static function printBlock(array $items): string
        {
        }
    }
    class TypeComparators
    {
        /** Provided two types, return true if the types are equal (invariant). */
        public static function isEqualType(\GraphQL\Type\Definition\Type $typeA, \GraphQL\Type\Definition\Type $typeB): bool
        {
        }
        /**
         * Provided a type and a super type, return true if the first type is either
         * equal or a subset of the second super type (covariant).
         *
         * @throws InvariantViolation
         */
        public static function isTypeSubTypeOf(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $maybeSubType, \GraphQL\Type\Definition\Type $superType): bool
        {
        }
    }
    class TypeInfo
    {
        public function __construct(\GraphQL\Type\Schema $schema)
        {
        }
        /** @return array<int, (CompositeType&Type)|null> */
        public function getParentTypeStack(): array
        {
        }
        /** @return array<int, FieldDefinition|null> */
        public function getFieldDefStack(): array
        {
        }
        /**
         * Given root type scans through all fields to find nested types.
         *
         * Returns array where keys are for type name
         * and value contains corresponding type instance.
         *
         * Example output:
         * [
         *     'String' => $instanceOfStringType,
         *     'MyType' => $instanceOfMyType,
         *     ...
         * ]
         *
         * @param (Type&NamedType)|(Type&WrappingType) $type
         * @param array<string, Type&NamedType> $typeMap
         *
         * @throws InvariantViolation
         */
        public static function extractTypes(\GraphQL\Type\Definition\Type $type, array &$typeMap): void
        {
        }
        /**
         * @param array<string, Type&NamedType> $typeMap
         *
         * @throws InvariantViolation
         */
        public static function extractTypesFromDirectives(\GraphQL\Type\Definition\Directive $directive, array &$typeMap): void
        {
        }
        /** @return (Type&InputType)|null */
        public function getParentInputType(): ?\GraphQL\Type\Definition\InputType
        {
        }
        public function getArgument(): ?\GraphQL\Type\Definition\Argument
        {
        }
        /** @return mixed */
        public function getEnumValue()
        {
        }
        /**
         * @throws \Exception
         * @throws InvariantViolation
         */
        public function enter(\GraphQL\Language\AST\Node $node): void
        {
        }
        public function getType(): ?\GraphQL\Type\Definition\Type
        {
        }
        /** @return (CompositeType&Type)|null */
        public function getParentType(): ?\GraphQL\Type\Definition\CompositeType
        {
        }
        public function getDirective(): ?\GraphQL\Type\Definition\Directive
        {
        }
        public function getFieldDef(): ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        /** @return mixed any value is possible */
        public function getDefaultValue()
        {
        }
        /** @return (InputType&Type)|null */
        public function getInputType(): ?\GraphQL\Type\Definition\InputType
        {
        }
        public function leave(\GraphQL\Language\AST\Node $node): void
        {
        }
    }
    class Utils
    {
        public static function undefined(): \stdClass
        {
        }
        /** @param array<string, mixed> $vars */
        public static function assign(object $obj, array $vars): object
        {
        }
        /**
         * Print a value that came from JSON for debugging purposes.
         *
         * @param mixed $value
         */
        public static function printSafeJson($value): string
        {
        }
        /**
         * Print a value that came from PHP for debugging purposes.
         *
         * @param mixed $value
         */
        public static function printSafe($value): string
        {
        }
        /** @param \stdClass|array<mixed> $value */
        protected static function jsonEncodeOrSerialize($value): string
        {
        }
        /** @param mixed $value */
        protected static function printSafeInternal($value): string
        {
        }
        /** UTF-8 compatible chr(). */
        public static function chr(int $ord, string $encoding = 'UTF-8'): string
        {
        }
        /** UTF-8 compatible ord(). */
        public static function ord(string $char, string $encoding = 'UTF-8'): int
        {
        }
        /** Returns UTF-8 char code at given $positing of the $string. */
        public static function charCodeAt(string $string, int $position): int
        {
        }
        /** @throws \JsonException */
        public static function printCharCode(?int $code): string
        {
        }
        /**
         * Upholds the spec rules about naming.
         *
         * @throws Error
         */
        public static function assertValidName(string $name): void
        {
        }
        /** Returns an Error if a name is invalid. */
        public static function isValidNameError(string $name, ?\GraphQL\Language\AST\Node $node = null): ?\GraphQL\Error\Error
        {
        }
        /** @param array<string> $items */
        public static function quotedOrList(array $items): string
        {
        }
        /** @param array<string> $items */
        public static function orList(array $items): string
        {
        }
        /**
         * Given an invalid input string and a list of valid options, returns a filtered
         * list of valid options sorted based on their similarity with the input.
         *
         * @param array<string> $options
         *
         * @return array<int, string>
         */
        public static function suggestionList(string $input, array $options): array
        {
        }
        /**
         * Try to extract the value for a key from an object like value.
         *
         * @param mixed $objectLikeValue
         *
         * @return mixed
         */
        public static function extractKey($objectLikeValue, string $key)
        {
        }
        /**
         * Split a string that has either Unix, Windows or Mac style newlines into lines.
         *
         * @return list<string>
         */
        public static function splitLines(string $value): array
        {
        }
    }
    /**
     * @phpstan-type CoercedValue array{errors: null, value: mixed}
     * @phpstan-type CoercedErrors array{errors: array<int, CoercionError>, value: null}
     *
     * @phpstan-import-type InputPath from CoercionError
     */
    class Value
    {
        /**
         * Coerce the given value to match the given GraphQL Input Type.
         *
         * Returns either a value which is valid for the provided type,
         * or a list of encountered coercion errors.
         *
         * @param mixed $value
         * @param InputType&Type $type
         *
         * @phpstan-param InputPath|null $path
         *
         * @throws InvariantViolation
         *
         * @phpstan-return CoercedValue|CoercedErrors
         */
        public static function coerceInputValue($value, \GraphQL\Type\Definition\InputType $type, ?array $path = null): array
        {
        }
    }
}
namespace GraphQL\Validator {
    /**
     * Implements the "Validation" section of the spec.
     *
     * Validation runs synchronously, returning an array of encountered errors, or
     * an empty array if no errors were encountered and the document is valid.
     *
     * A list of specific validation rules may be provided. If not provided, the
     * default list of rules defined by the GraphQL specification will be used.
     *
     * Each validation rule is an instance of GraphQL\Validator\Rules\ValidationRule
     * which returns a visitor (see the [GraphQL\Language\Visitor API](class-reference.md#graphqllanguagevisitor)).
     *
     * Visitor methods are expected to return an instance of [GraphQL\Error\Error](class-reference.md#graphqlerrorerror),
     * or array of such instances when invalid.
     *
     * Optionally a custom TypeInfo instance may be provided. If not provided, one
     * will be created from the provided schema.
     */
    class DocumentValidator
    {
        /**
         * Validate a GraphQL query against a schema.
         *
         * @param array<ValidationRule>|null $rules Defaults to using all available rules
         *
         * @throws \Exception
         *
         * @return list<Error>
         *
         * @api
         */
        public static function validate(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, ?array $rules = null, ?\GraphQL\Utils\TypeInfo $typeInfo = null): array
        {
        }
        /**
         * Returns all global validation rules.
         *
         * @throws \InvalidArgumentException
         *
         * @return array<string, ValidationRule>
         *
         * @api
         */
        public static function allRules(): array
        {
        }
        /** @return array<class-string<ValidationRule>, ValidationRule> */
        public static function defaultRules(): array
        {
        }
        /**
         * @deprecated just add rules via @see DocumentValidator::addRule()
         *
         * @throws \InvalidArgumentException
         *
         * @return array<class-string<QuerySecurityRule>, QuerySecurityRule>
         */
        public static function securityRules(): array
        {
        }
        /** @return array<class-string<ValidationRule>, ValidationRule> */
        public static function sdlRules(): array
        {
        }
        /**
         * Returns global validation rule by name.
         *
         * Standard rules are named by class name, so example usage for such rules:
         *
         * @example DocumentValidator::getRule(GraphQL\Validator\Rules\QueryComplexity::class);
         *
         * @api
         *
         * @throws \InvalidArgumentException
         */
        public static function getRule(string $name): ?\GraphQL\Validator\Rules\ValidationRule
        {
        }
        /**
         * Add rule to list of global validation rules.
         *
         * @api
         */
        public static function addRule(\GraphQL\Validator\Rules\ValidationRule $rule): void
        {
        }
        /**
         * Remove rule from list of global validation rules.
         *
         * @api
         */
        public static function removeRule(\GraphQL\Validator\Rules\ValidationRule $rule): void
        {
        }
        /**
         * Validate a GraphQL document defined through schema definition language.
         *
         * @param array<ValidationRule>|null $rules
         *
         * @throws \Exception
         *
         * @return list<Error>
         */
        public static function validateSDL(\GraphQL\Language\AST\DocumentNode $documentAST, ?\GraphQL\Type\Schema $schemaToExtend = null, ?array $rules = null): array
        {
        }
        /**
         * @throws \Exception
         * @throws Error
         */
        public static function assertValidSDL(\GraphQL\Language\AST\DocumentNode $documentAST): void
        {
        }
        /**
         * @throws \Exception
         * @throws Error
         */
        public static function assertValidSDLExtension(\GraphQL\Language\AST\DocumentNode $documentAST, \GraphQL\Type\Schema $schema): void
        {
        }
    }
    interface ValidationContext
    {
        public function reportError(\GraphQL\Error\Error $error): void;
        /** @return list<Error> */
        public function getErrors(): array;
        public function getDocument(): \GraphQL\Language\AST\DocumentNode;
        public function getSchema(): ?\GraphQL\Type\Schema;
    }
    /**
     * An instance of this class is passed as the "this" context to all validators,
     * allowing access to commonly useful contextual information from within a
     * validation rule.
     *
     * @phpstan-type VariableUsage array{node: VariableNode, type: (Type&InputType)|null, defaultValue: mixed}
     */
    class QueryValidationContext implements \GraphQL\Validator\ValidationContext
    {
        protected \GraphQL\Type\Schema $schema;
        protected \GraphQL\Language\AST\DocumentNode $ast;
        /** @var list<Error> */
        protected array $errors = [];
        public function __construct(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, \GraphQL\Utils\TypeInfo $typeInfo)
        {
        }
        public function reportError(\GraphQL\Error\Error $error): void
        {
        }
        /** @return list<Error> */
        public function getErrors(): array
        {
        }
        public function getDocument(): \GraphQL\Language\AST\DocumentNode
        {
        }
        public function getSchema(): \GraphQL\Type\Schema
        {
        }
        /**
         * @throws \Exception
         *
         * @phpstan-return array<int, VariableUsage>
         */
        public function getRecursiveVariableUsages(\GraphQL\Language\AST\OperationDefinitionNode $operation): array
        {
        }
        /** @return array<int, FragmentDefinitionNode> */
        public function getRecursivelyReferencedFragments(\GraphQL\Language\AST\OperationDefinitionNode $operation): array
        {
        }
        /**
         * @param OperationDefinitionNode|FragmentDefinitionNode $node
         *
         * @return array<int, FragmentSpreadNode>
         */
        public function getFragmentSpreads(\GraphQL\Language\AST\HasSelectionSet $node): array
        {
        }
        public function getFragment(string $name): ?\GraphQL\Language\AST\FragmentDefinitionNode
        {
        }
        public function getType(): ?\GraphQL\Type\Definition\Type
        {
        }
        /** @return (CompositeType&Type)|null */
        public function getParentType(): ?\GraphQL\Type\Definition\CompositeType
        {
        }
        /** @return (Type&InputType)|null */
        public function getInputType(): ?\GraphQL\Type\Definition\InputType
        {
        }
        /** @return (Type&InputType)|null */
        public function getParentInputType(): ?\GraphQL\Type\Definition\InputType
        {
        }
        public function getFieldDef(): ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        public function getDirective(): ?\GraphQL\Type\Definition\Directive
        {
        }
        public function getArgument(): ?\GraphQL\Type\Definition\Argument
        {
        }
    }
}
namespace GraphQL\Validator\Rules {
    /**
     * @see Node, VisitorOperation
     *
     * @phpstan-type NodeVisitorFnResult VisitorOperation|mixed|null
     * @phpstan-type VisitorFnResult array<string, callable(Node): NodeVisitorFnResult>|array<string, array<string, callable(Node): NodeVisitorFnResult>>
     * @phpstan-type VisitorFn callable(ValidationContext): VisitorFnResult
     */
    class CustomValidationRule extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * @var callable
         *
         * @phpstan-var VisitorFn
         */
        protected $visitorFn;
        /** @phpstan-param VisitorFn $visitorFn */
        public function __construct(string $name, callable $visitorFn)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
    }
    /**
     * Executable definitions.
     *
     * A GraphQL document is only valid for execution if all definitions are either
     * operation or fragment definitions.
     */
    class ExecutableDefinitions extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function nonExecutableDefinitionMessage(string $defName): string
        {
        }
    }
    class FieldsOnCorrectType extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * Go through all implementations of a type, as well as the interfaces
         * that it implements. If any of those types include the provided field,
         * suggest them, sorted by how often the type is referenced, starting
         * with interfaces.
         *
         * @throws InvariantViolation
         *
         * @return array<int, string>
         */
        protected function getSuggestedTypeNames(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $type, string $fieldName): array
        {
        }
        /**
         * For the field name provided, determine if there are any similar field names
         * that may be the result of a typo.
         *
         * @throws InvariantViolation
         *
         * @return array<int, string>
         */
        protected function getSuggestedFieldNames(\GraphQL\Type\Definition\Type $type, string $fieldName): array
        {
        }
        /**
         * @param array<string> $suggestedTypeNames
         * @param array<string> $suggestedFieldNames
         */
        public static function undefinedFieldMessage(string $fieldName, string $type, array $suggestedTypeNames, array $suggestedFieldNames): string
        {
        }
    }
    class FragmentsOnCompositeTypes extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function inlineFragmentOnNonCompositeErrorMessage(string $type): string
        {
        }
        public static function fragmentOnNonCompositeErrorMessage(string $fragName, string $type): string
        {
        }
    }
    /**
     * Known argument names.
     *
     * A GraphQL field is only valid if all supplied arguments are defined by
     * that field.
     */
    class KnownArgumentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @throws InvariantViolation */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @param array<string> $suggestedArgs */
        public static function unknownArgMessage(string $argName, string $fieldName, string $typeName, array $suggestedArgs): string
        {
        }
    }
    /**
     * Known argument names on directives.
     *
     * A GraphQL directive is only valid if all supplied arguments are defined by
     * that field.
     *
     * @phpstan-import-type VisitorArray from Visitor
     */
    class KnownArgumentNamesOnDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @param array<string> $suggestedArgs */
        public static function unknownDirectiveArgMessage(string $argName, string $directiveName, array $suggestedArgs): string
        {
        }
        /** @throws InvariantViolation */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /** @throws InvariantViolation */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @phpstan-return VisitorArray
         */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
    }
    /**
     * @phpstan-import-type VisitorArray from Visitor
     */
    class KnownDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @throws InvariantViolation */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @throws InvariantViolation */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @phpstan-return VisitorArray
         */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
        public static function unknownDirectiveMessage(string $directiveName): string
        {
        }
        /**
         * @param array<Node|NodeList<Node>> $ancestors
         *
         * @throws \Exception
         */
        protected function getDirectiveLocationForASTPath(array $ancestors): string
        {
        }
        public static function misplacedDirectiveMessage(string $directiveName, string $location): string
        {
        }
    }
    class KnownFragmentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function unknownFragmentMessage(string $fragName): string
        {
        }
    }
    /**
     * Known type names.
     *
     * A GraphQL document is only valid if referenced types (specifically
     * variable definitions and fragment conditions) are defined by the type schema.
     *
     * @phpstan-import-type VisitorArray from \GraphQL\Language\Visitor
     */
    class KnownTypeNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /** @phpstan-return VisitorArray */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
        /** @param array<string> $suggestedTypes */
        public static function unknownTypeMessage(string $type, array $suggestedTypes): string
        {
        }
    }
    /**
     * Lone anonymous operation.
     *
     * A GraphQL document is only valid if when it contains an anonymous operation
     * (the query shorthand) that it contains only that one operation definition.
     */
    class LoneAnonymousOperation extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function anonOperationNotAloneMessage(): string
        {
        }
    }
    /**
     * Lone schema definition.
     *
     * A GraphQL document is only valid if it contains only one schema definition.
     */
    class LoneSchemaDefinition extends \GraphQL\Validator\Rules\ValidationRule
    {
        public static function schemaDefinitionNotAloneMessage(): string
        {
        }
        public static function canNotDefineSchemaWithinExtensionMessage(): string
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    class NoFragmentCycles extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, bool> */
        protected array $visitedFrags;
        /** @var array<int, FragmentSpreadNode> */
        protected array $spreadPath;
        /** @var array<string, int|null> */
        protected array $spreadPathIndexByName;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        protected function detectCycleRecursive(\GraphQL\Language\AST\FragmentDefinitionNode $fragment, \GraphQL\Validator\QueryValidationContext $context): void
        {
        }
        /** @param array<string> $spreadNames */
        public static function cycleErrorMessage(string $fragName, array $spreadNames = []): string
        {
        }
    }
    /**
     * A GraphQL operation is only valid if all variables encountered, both directly
     * and via fragment spreads, are defined by that operation.
     */
    class NoUndefinedVariables extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function undefinedVarMessage(string $varName, ?string $opName): string
        {
        }
    }
    class NoUnusedFragments extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<int, OperationDefinitionNode> */
        protected array $operationDefs;
        /** @var array<int, FragmentDefinitionNode> */
        protected array $fragmentDefs;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function unusedFragMessage(string $fragName): string
        {
        }
    }
    class NoUnusedVariables extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<int, VariableDefinitionNode> */
        protected array $variableDefs;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function unusedVariableMessage(string $varName, ?string $opName = null): string
        {
        }
    }
    /**
     * OneOf Input Objects validation rule.
     *
     * Validates that OneOf Input Objects have exactly one non-null field provided.
     */
    class OneOfInputObjectsRule extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function oneOfInputObjectExpectedExactlyOneFieldMessage(string $typeName, ?int $providedCount = null): string
        {
        }
        public static function oneOfInputObjectFieldValueMustNotBeNullMessage(string $typeName, string $fieldName): string
        {
        }
    }
    /**
     * ReasonOrReasons is recursive, but PHPStan does not support that.
     *
     * @phpstan-type ReasonOrReasons string|array<array{string, string|array<mixed>}>
     * @phpstan-type Conflict array{array{string, ReasonOrReasons}, array<int, FieldNode>, array<int, FieldNode>}
     * @phpstan-type FieldInfo array{Type|null, FieldNode, FieldDefinition|null}
     * @phpstan-type FieldMap array<string, array<int, FieldInfo>>
     */
    class OverlappingFieldsCanBeMerged extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * A memoization for when two fragments are compared "between" each other for
         * conflicts. Two fragments may be compared many times, so memoizing this can
         * dramatically improve the performance of this validator.
         */
        protected \GraphQL\Utils\PairSet $comparedFragmentPairs;
        /**
         * A cache for the "field map" and list of fragment names found in any given
         * selection set. Selection sets may be asked for this information multiple
         * times, so this improves the performance of this validator.
         *
         * @phpstan-var \SplObjectStorage<SelectionSetNode, array{FieldMap, array<int, string>}>
         */
        protected \SplObjectStorage $cachedFieldsAndFragmentNames;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * Find all conflicts found "within" a selection set, including those found
         * via spreading in fragments. Called when visiting each SelectionSet in the
         * GraphQL Document.
         *
         * @throws \Exception
         *
         * @phpstan-return array<int, Conflict>
         */
        protected function findConflictsWithinSelectionSet(\GraphQL\Validator\QueryValidationContext $context, ?\GraphQL\Type\Definition\Type $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet): array
        {
        }
        /**
         * Given a selection set, return the collection of fields (a mapping of response
         * name to field ASTs and definitions) as well as a list of fragment names
         * referenced via fragment spreads.
         *
         * @throws \Exception
         *
         * @return array{FieldMap, array<int, string>}
         */
        protected function getFieldsAndFragmentNames(\GraphQL\Validator\QueryValidationContext $context, ?\GraphQL\Type\Definition\Type $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet): array
        {
        }
        /**
         * Algorithm:.
         *
         * Conflicts occur when two fields exist in a query which will produce the same
         * response name, but represent differing values, thus creating a conflict.
         * The algorithm below finds all conflicts via making a series of comparisons
         * between fields. In order to compare as few fields as possible, this makes
         * a series of comparisons "within" sets of fields and "between" sets of fields.
         *
         * Given any selection set, a collection produces both a set of fields by
         * also including all inline fragments, as well as a list of fragments
         * referenced by fragment spreads.
         *
         * A) Each selection set represented in the document first compares "within" its
         * collected set of fields, finding any conflicts between every pair of
         * overlapping fields.
         * Note: This is the *only time* that a the fields "within" a set are compared
         * to each other. After this only fields "between" sets are compared.
         *
         * B) Also, if any fragment is referenced in a selection set, then a
         * comparison is made "between" the original set of fields and the
         * referenced fragment.
         *
         * C) Also, if multiple fragments are referenced, then comparisons
         * are made "between" each referenced fragment.
         *
         * D) When comparing "between" a set of fields and a referenced fragment, first
         * a comparison is made between each field in the original set of fields and
         * each field in the the referenced set of fields.
         *
         * E) Also, if any fragment is referenced in the referenced selection set,
         * then a comparison is made "between" the original set of fields and the
         * referenced fragment (recursively referring to step D).
         *
         * F) When comparing "between" two fragments, first a comparison is made between
         * each field in the first referenced set of fields and each field in the the
         * second referenced set of fields.
         *
         * G) Also, any fragments referenced by the first must be compared to the
         * second, and any fragments referenced by the second must be compared to the
         * first (recursively referring to step F).
         *
         * H) When comparing two fields, if both have selection sets, then a comparison
         * is made "between" both selection sets, first comparing the set of fields in
         * the first selection set with the set of fields in the second.
         *
         * I) Also, if any fragment is referenced in either selection set, then a
         * comparison is made "between" the other set of fields and the
         * referenced fragment.
         *
         * J) Also, if two fragments are referenced in both selection sets, then a
         * comparison is made "between" the two fragments.
         */
        /**
         * Given a reference to a fragment, return the represented collection of fields
         * as well as a list of nested fragment names referenced via fragment spreads.
         *
         * @param array<string, bool> $fragmentNames
         *
         * @phpstan-param FieldMap $astAndDefs
         *
         * @throws \Exception
         */
        protected function internalCollectFieldsAndFragmentNames(\GraphQL\Validator\QueryValidationContext $context, ?\GraphQL\Type\Definition\Type $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, array &$astAndDefs, array &$fragmentNames): void
        {
        }
        /**
         * Collect all Conflicts "within" one collection of fields.
         *
         * @param array<int, Conflict> $conflicts
         *
         * @phpstan-param FieldMap $fieldMap
         *
         * @throws \Exception
         */
        protected function collectConflictsWithin(\GraphQL\Validator\QueryValidationContext $context, array &$conflicts, array $fieldMap): void
        {
        }
        /**
         * Determines if there is a conflict between two particular fields, including
         * comparing their sub-fields.
         *
         * @param array{Type|null, FieldNode, FieldDefinition|null} $field1
         * @param array{Type|null, FieldNode, FieldDefinition|null} $field2
         *
         * @throws \Exception
         *
         * @phpstan-return Conflict|null
         */
        protected function findConflict(\GraphQL\Validator\QueryValidationContext $context, bool $parentFieldsAreMutuallyExclusive, string $responseName, array $field1, array $field2): ?array
        {
        }
        /**
         * @param NodeList<ArgumentNode> $arguments1 keep
         * @param NodeList<ArgumentNode> $arguments2 keep
         *
         * @throws \JsonException
         */
        protected function sameArguments(\GraphQL\Language\AST\NodeList $arguments1, \GraphQL\Language\AST\NodeList $arguments2): bool
        {
        }
        /** @throws \JsonException */
        protected function sameValue(\GraphQL\Language\AST\Node $value1, \GraphQL\Language\AST\Node $value2): bool
        {
        }
        /**
         * Two types conflict if both types could not apply to a value simultaneously.
         *
         * Composite types are ignored as their individual field types will be compared
         * later recursively. However, List and Non-Null types must match.
         */
        protected function doTypesConflict(\GraphQL\Type\Definition\Type $type1, \GraphQL\Type\Definition\Type $type2): bool
        {
        }
        /**
         * Find all conflicts found between two selection sets, including those found
         * via spreading in fragments. Called when determining if conflicts exist
         * between the sub-fields of two overlapping fields.
         *
         * @throws \Exception
         *
         * @return array<int, Conflict>
         */
        protected function findConflictsBetweenSubSelectionSets(\GraphQL\Validator\QueryValidationContext $context, bool $areMutuallyExclusive, ?\GraphQL\Type\Definition\Type $parentType1, \GraphQL\Language\AST\SelectionSetNode $selectionSet1, ?\GraphQL\Type\Definition\Type $parentType2, \GraphQL\Language\AST\SelectionSetNode $selectionSet2): array
        {
        }
        /**
         * Collect all Conflicts between two collections of fields. This is similar to,
         * but different from the `collectConflictsWithin` function above. This check
         * assumes that `collectConflictsWithin` has already been called on each
         * provided collection of fields. This is true because this validator traverses
         * each individual selection set.
         *
         * @phpstan-param array<int, Conflict> $conflicts
         * @phpstan-param FieldMap $fieldMap1
         * @phpstan-param FieldMap $fieldMap2
         *
         * @throws \Exception
         */
        protected function collectConflictsBetween(\GraphQL\Validator\QueryValidationContext $context, array &$conflicts, bool $parentFieldsAreMutuallyExclusive, array $fieldMap1, array $fieldMap2): void
        {
        }
        /**
         * Collect all conflicts found between a set of fields and a fragment reference
         * including via spreading in any nested fragments.
         *
         * @param array<string, true> $comparedFragments
         *
         * @phpstan-param array<int, Conflict> $conflicts
         * @phpstan-param FieldMap $fieldMap
         *
         * @throws \Exception
         */
        protected function collectConflictsBetweenFieldsAndFragment(\GraphQL\Validator\QueryValidationContext $context, array &$conflicts, array &$comparedFragments, bool $areMutuallyExclusive, array $fieldMap, string $fragmentName): void
        {
        }
        /**
         * Given a reference to a fragment, return the represented collection of fields
         * as well as a list of nested fragment names referenced via fragment spreads.
         *
         * @throws \Exception
         *
         * @phpstan-return array{FieldMap, array<int, string>}
         */
        protected function getReferencedFieldsAndFragmentNames(\GraphQL\Validator\QueryValidationContext $context, \GraphQL\Language\AST\FragmentDefinitionNode $fragment): array
        {
        }
        /**
         * Collect all conflicts found between two fragments, including via spreading in
         * any nested fragments.
         *
         * @phpstan-param array<int, Conflict> $conflicts
         *
         * @throws \Exception
         */
        protected function collectConflictsBetweenFragments(\GraphQL\Validator\QueryValidationContext $context, array &$conflicts, bool $areMutuallyExclusive, string $fragmentName1, string $fragmentName2): void
        {
        }
        /**
         * Merge Conflicts between two sub-fields into a single Conflict.
         *
         * @phpstan-param array<int, Conflict> $conflicts
         *
         * @phpstan-return Conflict|null
         */
        protected function subfieldConflicts(array $conflicts, string $responseName, \GraphQL\Language\AST\FieldNode $ast1, \GraphQL\Language\AST\FieldNode $ast2): ?array
        {
        }
        /**
         * @param string|array $reasonOrReasons
         *
         * @phpstan-param ReasonOrReasons $reasonOrReasons
         */
        public static function fieldsConflictMessage(string $responseName, $reasonOrReasons): string
        {
        }
        /**
         * @param string|array $reasonOrReasons
         *
         * @phpstan-param ReasonOrReasons $reasonOrReasons
         */
        public static function reasonMessage($reasonOrReasons): string
        {
        }
    }
    class PossibleFragmentSpreads extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * @param CompositeType&Type $fragType
         * @param CompositeType&Type $parentType
         *
         * @throws InvariantViolation
         */
        protected function doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $fragType, \GraphQL\Type\Definition\CompositeType $parentType): bool
        {
        }
        public static function typeIncompatibleAnonSpreadMessage(string $parentType, string $fragType): string
        {
        }
        /**
         * @throws \Exception
         *
         * @return (CompositeType&Type)|null
         */
        protected function getFragmentType(\GraphQL\Validator\QueryValidationContext $context, string $name): ?\GraphQL\Type\Definition\Type
        {
        }
        public static function typeIncompatibleSpreadMessage(string $fragName, string $parentType, string $fragType): string
        {
        }
    }
    /**
     * Possible type extensions.
     *
     * A type extension is only valid if the type is defined and has the same kind.
     */
    class PossibleTypeExtensions extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    class ProvidedRequiredArguments extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @throws \Exception */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function missingFieldArgMessage(string $fieldName, string $argName, string $type): string
        {
        }
    }
    /**
     * Provided required arguments on directives.
     *
     * A directive is only valid if all required (non-null without a
     * default value) field arguments have been provided.
     *
     * @phpstan-import-type VisitorArray from Visitor
     */
    class ProvidedRequiredArgumentsOnDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        public static function missingDirectiveArgMessage(string $directiveName, string $argName, string $type): string
        {
        }
        /** @throws \Exception */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /** @throws \Exception */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * @throws \Exception
         * @throws \InvalidArgumentException
         * @throws \ReflectionException
         * @throws Error
         * @throws InvariantViolation
         *
         * @phpstan-return VisitorArray
         */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
    }
    /**
     * @phpstan-import-type ASTAndDefs from QuerySecurityRule
     */
    class QueryComplexity extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        protected int $maxQueryComplexity;
        protected int $queryComplexity;
        /** @var array<string, mixed> */
        protected array $rawVariableValues = [];
        /** @var NodeList<VariableDefinitionNode> */
        protected \GraphQL\Language\AST\NodeList $variableDefs;
        /** @phpstan-var ASTAndDefs */
        protected \ArrayObject $fieldNodeAndDefs;
        protected \GraphQL\Validator\QueryValidationContext $context;
        /** @throws \InvalidArgumentException */
        public function __construct(int $maxQueryComplexity)
        {
        }
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @throws \Exception */
        protected function fieldComplexity(\GraphQL\Language\AST\SelectionSetNode $selectionSet): int
        {
        }
        /** @throws \Exception */
        protected function nodeComplexity(\GraphQL\Language\AST\SelectionNode $node): int
        {
        }
        protected function fieldDefinition(\GraphQL\Language\AST\FieldNode $field): ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        /**
         * Will the given field be executed at all, given the directives placed upon it?
         *
         * @throws \Exception
         * @throws \ReflectionException
         * @throws InvariantViolation
         */
        protected function directiveExcludesField(\GraphQL\Language\AST\FieldNode $node): bool
        {
        }
        /** @return array<string, mixed> */
        public function getRawVariableValues(): array
        {
        }
        /** @param array<string, mixed>|null $rawVariableValues */
        public function setRawVariableValues(?array $rawVariableValues = null): void
        {
        }
        /**
         * @throws \Exception
         * @throws Error
         *
         * @return array<string, mixed>
         */
        protected function buildFieldArguments(\GraphQL\Language\AST\FieldNode $node): array
        {
        }
        public function getMaxQueryComplexity(): int
        {
        }
        public function getQueryComplexity(): int
        {
        }
        /**
         * Set max query complexity. If equal to 0 no check is done. Must be greater or equal to 0.
         *
         * @throws \InvalidArgumentException
         */
        public function setMaxQueryComplexity(int $maxQueryComplexity): void
        {
        }
        public static function maxQueryComplexityErrorMessage(int $max, int $count): string
        {
        }
        protected function isEnabled(): bool
        {
        }
    }
    class QueryDepth extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        /** @var array<string, bool> Fragment names which are already calculated in recursion */
        protected array $calculatedFragments = [];
        protected int $maxQueryDepth;
        /** @throws \InvalidArgumentException */
        public function __construct(int $maxQueryDepth)
        {
        }
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @param OperationDefinitionNode|FieldNode|InlineFragmentNode|FragmentDefinitionNode $node */
        protected function fieldDepth(\GraphQL\Language\AST\Node $node, int $depth = 0, int $maxDepth = 0): int
        {
        }
        protected function nodeDepth(\GraphQL\Language\AST\Node $node, int $depth = 0, int $maxDepth = 0): int
        {
        }
        public function getMaxQueryDepth(): int
        {
        }
        /**
         * Set max query depth. If equal to 0 no check is done. Must be greater or equal to 0.
         *
         * @throws \InvalidArgumentException
         */
        public function setMaxQueryDepth(int $maxQueryDepth): void
        {
        }
        public static function maxQueryDepthErrorMessage(int $max, int $count): string
        {
        }
        protected function isEnabled(): bool
        {
        }
    }
    class ScalarLeafs extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function noSubselectionAllowedMessage(string $field, string $type): string
        {
        }
        public static function requiredSubselectionMessage(string $field, string $type): string
        {
        }
    }
    class SingleFieldSubscription extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function multipleFieldsInOperation(?string $operationName): string
        {
        }
    }
    /**
     * Unique argument definition names.
     *
     * A GraphQL Object or Interface type is only valid if all its fields have uniquely named arguments.
     * A GraphQL Directive is only valid if all its arguments are uniquely named.
     */
    class UniqueArgumentDefinitionNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    /**
     * @phpstan-import-type VisitorArray from Visitor
     */
    class UniqueArgumentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        protected array $knownArgNames;
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @phpstan-return VisitorArray */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
        public static function duplicateArgMessage(string $argName): string
        {
        }
    }
    /**
     * Unique directive names.
     *
     * A GraphQL document is only valid if all defined directives have unique names.
     */
    class UniqueDirectiveNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    /**
     * Unique directive names per location.
     *
     * A GraphQL document is only valid if all non-repeatable directives at
     * a given location are uniquely named.
     *
     * @phpstan-import-type VisitorArray from Visitor
     */
    class UniqueDirectivesPerLocation extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @throws InvariantViolation */
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /** @throws InvariantViolation */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /**
         * @throws InvariantViolation
         *
         * @phpstan-return VisitorArray
         */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
        public static function duplicateDirectiveMessage(string $directiveName): string
        {
        }
    }
    class UniqueEnumValueNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    /**
     * Unique field definition names.
     *
     * A GraphQL complex type is only valid if all its fields are uniquely named.
     */
    class UniqueFieldDefinitionNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    class UniqueFragmentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        protected array $knownFragmentNames;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function duplicateFragmentNameMessage(string $fragName): string
        {
        }
    }
    /**
     * @phpstan-import-type VisitorArray from Visitor
     */
    class UniqueInputFieldNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        protected array $knownNames;
        /** @var array<array<string, NameNode>> */
        protected array $knownNameStack;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
        /** @phpstan-return VisitorArray */
        public function getASTVisitor(\GraphQL\Validator\ValidationContext $context): array
        {
        }
        public static function duplicateInputFieldMessage(string $fieldName): string
        {
        }
    }
    class UniqueOperationNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        protected array $knownOperationNames;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function duplicateOperationNameMessage(string $operationName): string
        {
        }
    }
    /**
     * Unique operation types.
     *
     * A GraphQL document is only valid if it has only one type per operation.
     */
    class UniqueOperationTypes extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    /**
     * Unique type names.
     *
     * A GraphQL document is only valid if all defined types have unique names.
     */
    class UniqueTypeNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
        {
        }
    }
    class UniqueVariableNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        protected array $knownVariableNames;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function duplicateVariableMessage(string $variableName): string
        {
        }
    }
    /**
     * Value literals of correct type.
     *
     * A GraphQL document is only valid if all value literals are of the type
     * expected at their position.
     */
    class ValuesOfCorrectType extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * @param VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode $node
         *
         * @throws \JsonException
         */
        protected function isValidValueNode(\GraphQL\Validator\QueryValidationContext $context, \GraphQL\Language\AST\ValueNode $node): void
        {
        }
    }
    class VariablesAreInputTypes extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        public static function nonInputTypeOnVarMessage(string $variableName, string $typeName): string
        {
        }
    }
    class VariablesInAllowedPosition extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * A map from variable names to their definition nodes.
         *
         * @var array<string, VariableDefinitionNode>
         */
        protected array $varDefMap;
        public function getVisitor(\GraphQL\Validator\QueryValidationContext $context): array
        {
        }
        /**
         * A var type is allowed if it is the same or more strict than the expected
         * type. It can be more strict if the variable type is non-null when the
         * expected type is nullable. If both are list types, the variable item type can
         * be more strict than the expected item type.
         */
        public static function badVarPosMessage(string $varName, string $varType, string $expectedType): string
        {
        }
        /**
         * Returns true if the variable is allowed in the location it was found,
         * which includes considering if default values exist for either the variable
         * or the location at which it is located.
         *
         * @param ValueNode|null $varDefaultValue
         * @param mixed $locationDefaultValue
         *
         * @throws InvariantViolation
         */
        protected function allowedVariableUsage(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $varType, $varDefaultValue, \GraphQL\Type\Definition\Type $locationType, $locationDefaultValue): bool
        {
        }
    }
}
namespace GraphQL\Validator {
    class SDLValidationContext implements \GraphQL\Validator\ValidationContext
    {
        protected \GraphQL\Language\AST\DocumentNode $ast;
        protected ?\GraphQL\Type\Schema $schema;
        /** @var list<Error> */
        protected array $errors = [];
        public function __construct(\GraphQL\Language\AST\DocumentNode $ast, ?\GraphQL\Type\Schema $schema)
        {
        }
        public function reportError(\GraphQL\Error\Error $error): void
        {
        }
        public function getErrors(): array
        {
        }
        public function getDocument(): \GraphQL\Language\AST\DocumentNode
        {
        }
        public function getSchema(): ?\GraphQL\Type\Schema
        {
        }
    }
}
namespace {
    /**
     * Formats a string for use as a GraphQL name.
     *
     * Per the GraphQL spec, characters in names are limited to Latin ASCII letter, digits, or underscores.
     *
     * @see http://spec.graphql.org/draft/#sec-Names
     * @uses graphql_pre_format_name filter.
     *
     * @param string $name The name to format.
     * @param string $replacement The replacement character for invalid characters. Defaults to '_'.
     * @param string $regex The regex to use to match invalid characters. Defaults to '/[^A-Za-z0-9_]/i'.
     *
     * @since v1.17.0
     */
    function graphql_format_name(string $name, string $replacement = '_', string $regex = '/[^A-Za-z0-9_]/i'): string
    {
    }
    /**
     * Formats the name of a field so that it plays nice with GraphiQL
     *
     * @param string $field_name Name of the field
     *
     * @return string Name of the field
     * @since  0.0.2
     *
     * @todo refactor to use Utils::format_field_name()
     */
    function graphql_format_field_name($field_name): string
    {
    }
    /**
     * Formats the name of a Type so that it plays nice with GraphiQL
     *
     * @param string $type_name Name of the field
     *
     * @return string Name of the field
     * @since  0.0.2
     */
    function graphql_format_type_name($type_name): string
    {
    }
    /**
     * Provides a simple way to run a GraphQL query without posting a request to the endpoint.
     *
     * @param array<string,mixed> $request_data   The GraphQL request data (query, variables, operation_name).
     * @param bool                $return_request If true, return the Request object, else return the results of the request execution
     *
     * @return array<string,mixed>|\WPGraphQL\Request
     * @phpstan-return ( $return_request is true ? \WPGraphQL\Request : array<string,mixed> )
     *
     * @throws \Exception
     * @since  0.2.0
     */
    function graphql(array $request_data = [], bool $return_request = \false)
    {
    }
    /**
     * Previous access function for running GraphQL queries directly. This function will
     * eventually be deprecated in favor of `graphql`.
     *
     * @param string              $query          The GraphQL query to run
     * @param string              $operation_name The name of the operation
     * @param array<string,mixed> $variables      Variables to be passed to your GraphQL request
     * @param bool                $return_request If true, return the Request object, else return the results of the request execution
     *
     * @return array<string,mixed>|\WPGraphQL\Request
     *
     * @phpstan-return ( $return_request is true ? \WPGraphQL\Request : array<string,mixed> )
     *
     * @throws \Exception
     * @since  0.0.2
     */
    function do_graphql_request($query, $operation_name = '', $variables = [], $return_request = \false)
    {
    }
    /**
     * Determine when to register types.
     *
     * @return 'graphql_register_initial_types'|'graphql_register_types'|'graphql_register_types_late'
     */
    function get_graphql_register_action(): string
    {
    }
    /**
     * Given a type name and interface name, this applies the interface to the Type.
     *
     * Should be used at the `graphql_register_types` hook.
     *
     * @param string|string[] $interface_names Array of one or more names of the GraphQL Interfaces to apply to the GraphQL Types
     * @param string|string[] $type_names      Array of one or more names of the GraphQL Types to apply the interfaces to.
     *
     * Example:
     * The following would register the "MyNewInterface" interface to the Post and Page type in the
     * Schema.
     *
     * register_graphql_interfaces_to_types( [ 'MyNewInterface' ], [ 'Post', 'Page' ] );
     */
    function register_graphql_interfaces_to_types($interface_names, $type_names): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds a Type to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     */
    function register_graphql_type(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an Interface Type to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     */
    function register_graphql_interface_type(string $type_name, $config): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an ObjectType to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     */
    function register_graphql_object_type(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an InputType to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     */
    function register_graphql_input_type(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an UnionType to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     *
     * @throws \Exception
     */
    function register_graphql_union_type(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an EnumType to the TypeRegistry
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The Type config
     *
     * @phpstan-param array{
     *   description?: string|callable():string|null,
     *   values: array<string, array{
     *     name?: string,
     *     value?: mixed,
     *     deprecationReason?: string|callable():string|null,
     *     description?: string|callable():string|null,
     *     astNode?: \GraphQL\Language\AST\EnumValueDefinitionNode|null
     *   }>,
     *   astNode?: \GraphQL\Language\AST\EnumTypeDefinitionNode|null,
     *   extensionASTNodes?: \GraphQL\Language\AST\EnumTypeExtensionNode[]|null,
     *   kind?: 'enum'|null
     * } $config
     */
    function register_graphql_enum_type(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name, Field Name, and a $config array, this adds a Field to a registered Type in
     * the TypeRegistry
     *
     * @param string              $type_name  The name of the Type to add the field to
     * @param string              $field_name The name of the Field to add to the Type
     * @param array<string,mixed> $config     The Type config
     *
     * @throws \Exception
     * @since 0.1.0
     */
    function register_graphql_field(string $type_name, string $field_name, array $config): void
    {
    }
    /**
     * Given a Type Name and an array of field configs, this adds the fields to the registered type in
     * the TypeRegistry
     *
     * @param string                            $type_name The name of the Type to add the fields to
     * @param array<string,array<string,mixed>> $fields    An array of field configs
     *
     * @throws \Exception
     * @since 0.1.0
     */
    function register_graphql_fields(string $type_name, array $fields): void
    {
    }
    /**
     * Adds a field to the Connection Edge between the provided 'From' Type Name and 'To' Type Name.
     *
     * @param string              $from_type  The name of the Type the connection is coming from.
     * @param string              $to_type    The name of the Type or Alias (the connection config's `FromFieldName`) the connection is going to.
     * @param string              $field_name The name of the field to add to the connection edge.
     * @param array<string,mixed> $config     The field config.
     *
     * @since 1.13.0
     */
    function register_graphql_edge_field(string $from_type, string $to_type, string $field_name, array $config): void
    {
    }
    /**
     * Adds several fields to the Connection Edge between the provided 'From' Type Name and 'To' Type Name.
     *
     * @param string                            $from_type The name of the Type the connection is coming from.
     * @param string                            $to_type   The name of the Type or Alias (the connection config's `FromFieldName`) the connection is going to.
     * @param array<string,array<string,mixed>> $fields    An array of field configs.
     *
     * @since 1.13.0
     */
    function register_graphql_edge_fields(string $from_type, string $to_type, array $fields): void
    {
    }
    /**
     * Adds an input field to the Connection Where Args between the provided 'From' Type Name and 'To' Type Name.
     *
     * @param string              $from_type  The name of the Type the connection is coming from.
     * @param string              $to_type    The name of the Type or Alias (the connection config's `FromFieldName`) the connection is going to.
     * @param string              $field_name The name of the field to add to the connection edge.
     * @param array<string,mixed> $config      The field config.
     *
     * @since 1.13.0
     */
    function register_graphql_connection_where_arg(string $from_type, string $to_type, string $field_name, array $config): void
    {
    }
    /**
     * Adds several input fields to the Connection Where Args between the provided 'From' Type Name and 'To' Type Name.
     *
     * @param string                            $from_type The name of the Type the connection is coming from.
     * @param string                            $to_type   The name of the Type or Alias (the connection config's `FromFieldName`) the connection is going to.
     * @param array<string,array<string,mixed>> $fields    An array of field configs.
     *
     * @since 1.13.0
     */
    function register_graphql_connection_where_args(string $from_type, string $to_type, array $fields): void
    {
    }
    /**
     * Renames a GraphQL field.
     *
     * @param string $type_name       Name of the Type to rename a field on.
     * @param string $field_name      Field name to be renamed.
     * @param string $new_field_name  New field name.
     *
     * @since 1.3.4
     */
    function rename_graphql_field(string $type_name, string $field_name, string $new_field_name): void
    {
    }
    /**
     * Renames a GraphQL Type in the Schema.
     *
     * @param string $type_name The name of the Type in the Schema to rename.
     * @param string $new_type_name  The new name to give the Type.
     *
     * @throws \Exception
     *
     * @since 1.3.4
     */
    function rename_graphql_type(string $type_name, string $new_type_name): void
    {
    }
    /**
     * Given a config array for a connection, this registers a connection by creating all appropriate
     * fields and types for the connection
     *
     * @param array<string,mixed> $config Array to configure the connection
     *
     * @since 0.1.0
     */
    function register_graphql_connection(array $config): void
    {
    }
    /**
     * Given a Mutation Name and Config array, this adds a Mutation to the Schema
     *
     * @param string              $mutation_name The name of the Mutation to register
     * @param array<string,mixed> $config        The config for the mutation
     *
     * @since 0.1.0
     */
    function register_graphql_mutation(string $mutation_name, array $config): void
    {
    }
    /**
     * Given a config array for a custom Scalar, this registers a Scalar for use in the Schema
     *
     * @param string              $type_name The name of the Type to register
     * @param array<string,mixed> $config    The config for the scalar type to register
     *
     * @phpstan-param array{
     *   description?: string|callable():string|null,
     *   serialize?: callable(mixed): mixed,
     *   parseValue?: callable(mixed): mixed,
     *   parseLiteral?: callable(\GraphQL\Language\AST\ValueNode&\GraphQL\Language\AST\Node, array<string, mixed>|null): mixed,
     *   astNode?: \GraphQL\Language\AST\ScalarTypeDefinitionNode|null,
     *   extensionASTNodes?: array<\GraphQL\Language\AST\ScalarTypeDefinitionNode>|null
     * } $config
     *
     * @since 0.8.4
     */
    function register_graphql_scalar(string $type_name, array $config): void
    {
    }
    /**
     * Given a Type Name, this removes the type from the entire schema
     *
     * @param string $type_name The name of the Type to remove.
     *
     * @since 1.13.0
     */
    function deregister_graphql_type(string $type_name): void
    {
    }
    /**
     * Given a Type Name and Field Name, this removes the field from the TypeRegistry
     *
     * @param string $type_name  The name of the Type to remove the field from
     * @param string $field_name The name of the field to remove
     *
     * @since 0.1.0
     */
    function deregister_graphql_field(string $type_name, string $field_name): void
    {
    }
    /**
     * Given a Connection Name, this removes the connection from the Schema
     *
     * @param string $connection_name The name of the Connection to remove
     *
     * @since 1.14.0
     */
    function deregister_graphql_connection(string $connection_name): void
    {
    }
    /**
     * Given a Mutation Name, this removes the mutation from the Schema
     *
     * @param string $mutation_name The name of the Mutation to remove
     *
     * @since 1.14.0
     */
    function deregister_graphql_mutation(string $mutation_name): void
    {
    }
    /**
     * Whether a GraphQL request is in action or not. This is determined by the WPGraphQL Request
     * class being initiated. True while a request is in action, false after a request completes.
     *
     * This should be used when a condition needs to be checked for ALL GraphQL requests, such
     * as filtering WP_Query for GraphQL requests, for example.
     *
     * Default false.
     *
     * @since 0.4.1
     */
    function is_graphql_request(): bool
    {
    }
    /**
     * Whether a GraphQL HTTP request is in action or not. This is determined by
     * checking if the request is occurring on the route defined for the GraphQL endpoint.
     *
     * This conditional should only be used for features that apply to HTTP requests. If you are going
     * to apply filters to underlying WordPress core functionality that should affect _all_ GraphQL
     * requests, you should use "is_graphql_request" but if you need to apply filters only if the
     * GraphQL request is an HTTP request, use this conditional.
     *
     * Default false.
     *
     * @since 0.4.1
     */
    function is_graphql_http_request(): bool
    {
    }
    /**
     * Registers a GraphQL Settings Section
     *
     * @param string              $slug   The slug of the group being registered
     * @param array<string,mixed> $config Array configuring the section. Should include: title
     *
     * @since 0.13.0
     */
    function register_graphql_settings_section(string $slug, array $config): void
    {
    }
    /**
     * Registers a GraphQL Settings Field
     *
     * @param string              $group  The name of the group to register a setting field to
     * @param array<string,mixed> $config The config for the settings field being registered
     *
     * @since 0.13.0
     */
    function register_graphql_settings_field(string $group, array $config): void
    {
    }
    /**
     * Given a message and an optional config array
     *
     * @param mixed|string|mixed[] $message The debug message
     * @param array<string,mixed>  $config  The debug config. Should be an associative array of keys and values.
     *                                      $config['type'] will set the "type" of the log, default type is GRAPHQL_DEBUG.
     *                                      Other fields added to $config will be merged into the debug entry.
     *
     * @since 0.14.0
     */
    function graphql_debug($message, $config = []): void
    {
    }
    /**
     * Check if the name is valid for use in GraphQL
     *
     * @param string $type_name The name of the type to validate
     *
     * @since 0.14.0
     */
    function is_valid_graphql_name(string $type_name): bool
    {
    }
    /**
     * Registers a series of GraphQL Settings Fields
     *
     * @param string                $group  The name of the settings group to register fields to
     * @param array<string,mixed>[] $fields Array of field configs to register to the group
     *
     * @since 0.13.0
     */
    function register_graphql_settings_fields(string $group, array $fields): void
    {
    }
    /**
     * Get an option value from GraphQL settings
     *
     * @param string $option_name   The key of the option to return
     * @param mixed  $default_value The default value the setting should return if no value is set
     * @param string $section_name  The settings group section that the option belongs to
     *
     * @return mixed|string|int|bool
     * @since 0.13.0
     */
    function get_graphql_setting(string $option_name, $default_value = '', $section_name = 'graphql_general_settings')
    {
    }
    /**
     * Get the endpoint route for the WPGraphQL API
     *
     * @since 1.12.0
     */
    function graphql_get_endpoint(): string
    {
    }
    /**
     * Return the full url for the GraphQL Endpoint.
     *
     * @since 1.12.0
     */
    function graphql_get_endpoint_url(): string
    {
    }
    /**
     * @param string              $slug A unique slug to identify the admin notice by
     * @param array<string,mixed> $config The config for the admin notice. Determines visibility, context, etc.
     *
     * @phpstan-param array{
     *  message: string,
     *  type?: 'error'|'warning'|'success'|'info',
     *  is_dismissable?: bool,
     *  conditions?: callable():bool
     * } $config
     */
    function register_graphql_admin_notice(string $slug, array $config): void
    {
    }
    /**
     * Get the admin notices registered for the WPGraphQL plugin screens
     *
     * @return array<string,array{
     *  message: string,
     *  type?: 'error'|'warning'|'success'|'info',
     *  is_dismissable?: bool,
     *  conditions?: callable():bool,
     * }>
     */
    function get_graphql_admin_notices(): array
    {
    }
    /**
     * Runs when WPGraphQL is activated
     */
    function graphql_activation_callback(): void
    {
    }
    /**
     * Sets up constants for use throughout the plugin and by other extending plugins.
     *
     * This is in its own file so that it can be used via the autoloaded classes, but also
     * can be pulled in when composer dependencies have not been installed.
     *
     * @return void
     */
    function graphql_setup_constants()
    {
    }
    /**
     * Runs when WPGraphQL is de-activated
     *
     * This cleans up data that WPGraphQL stores
     *
     * @return void
     */
    function graphql_deactivation_callback()
    {
    }
    /**
     * Delete data on deactivation
     */
    function delete_graphql_data(): void
    {
    }
    /**
     * Load files that are required even if the composer autoloader isn't installed
     */
    function graphql_require_bootstrap_files(): void
    {
    }
    /**
     * Determines if the plugin can load.
     *
     * Test env:
     *  - WPGRAPHQL_AUTOLOAD: false
     *  - autoload installed and manually added in test env
     *
     * Bedrock
     *  - WPGRAPHQL_AUTOLOAD: not defined
     *  - composer deps installed outside the plugin
     *
     * Normal (.org repo install)
     * - WPGRAPHQL_AUTOLOAD: not defined
     * - composer deps installed INSIDE the plugin
     */
    function graphql_can_load_plugin(): bool
    {
    }
    /**
     * Function that instantiates the plugins main class
     *
     * @return object|null
     */
    function graphql_init()
    {
    }
    /**
     * Render an admin notice if the plugin cannot load
     */
    function graphql_cannot_load_admin_notice_callback(): void
    {
    }
    /**
     * Initialize the plugin tracker.
     */
    function graphql_init_appsero_telemetry(): void
    {
    }
}
namespace {
define('WPGRAPHQL_VERSION', '0.0.0');
}
