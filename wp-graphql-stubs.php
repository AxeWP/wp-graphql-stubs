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
         * @todo: Provide alternative formats (AST? INTROSPECTION JSON?) and options for output location/file-type?
         * @todo: Add Unit Tests
         *
         * ## EXAMPLE
         *
         *     $ wp graphql generate-static-schema
         *
         * @alias generate
         * @subcommand generate-static-schema
         */
        public function generate_static_schema($args, $assoc_args)
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
         * @var boolean
         */
        protected $admin_enabled;
        /**
         * Whether GraphiQL is enabled or not
         *
         * @var boolean
         */
        protected $graphiql_enabled;
        /**
         * @var Settings
         */
        protected $settings;
        /**
         * Initialize Admin functionality for WPGraphQL
         *
         * @return void
         */
        public function init()
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
         * @var bool Whether GraphiQL is enabled or disabled
         */
        protected $is_disabled = false;
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
         * @param WP_Admin_Bar $admin_bar The Admin Bar Instance
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
         * Render the markup to load GraphiQL to
         *
         * @return void
         */
        public function render_graphiql_admin_page()
        {
        }
        /**
         * Gets the contents of the Create React App manifest file
         *
         * @return array
         */
        public function get_app_manifest()
        {
        }
        /**
         * Gets the path to the stylesheet compiled by Create React App
         *
         * @return string
         */
        public function get_app_stylesheet()
        {
        }
        /**
         * Gets the path to the built javascript file compiled by Create React App
         *
         * @return string
         */
        public function get_app_script()
        {
        }
        /**
         * Get the helpers JS
         *
         * @return string
         */
        public function get_app_script_helpers()
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
         * @var SettingsRegistry
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
         * @var array
         */
        protected $settings_sections = [];
        /**
         * Settings fields array
         *
         * @var array
         */
        protected $settings_fields = [];
        /**
         * SettingsRegistry constructor.
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * @return array
         */
        public function get_settings_sections()
        {
        }
        /**
         * @return array
         */
        public function get_settings_fields()
        {
        }
        /**
         * Enqueue scripts and styles
         *
         * @return void
         */
        function admin_enqueue_scripts()
        {
        }
        /**
         * Set settings sections
         *
         * @param string $slug    Setting Section Slug
         * @param array  $section setting section config
         *
         * @return SettingsRegistry
         */
        function register_section(string $slug, array $section)
        {
        }
        /**
         * Register fields to a section
         *
         * @param string $section The slug of the section to register a field to
         * @param array  $fields  settings fields array
         *
         * @return SettingsRegistry
         */
        function register_fields(string $section, array $fields)
        {
        }
        /**
         * Register a field to a section
         *
         * @param string $section The slug of the section to register a field to
         * @param array  $field   The config for the field being registered
         *
         * @return SettingsRegistry
         */
        function register_field(string $section, array $field)
        {
        }
        /**
         * Initialize and registers the settings sections and fileds to WordPress
         *
         * Usually this should be called at `admin_init` hook.
         *
         * This function gets the initiated settings sections and fields. Then
         * registers them to WordPress and ready for use.
         *
         * @return void
         */
        function admin_init()
        {
        }
        /**
         * Get field description for display
         *
         * @param array $args settings field args
         *
         * @return string
         */
        public function get_field_description(array $args) : string
        {
        }
        /**
         * Displays a text field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_text(array $args)
        {
        }
        /**
         * Displays a url field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_url(array $args)
        {
        }
        /**
         * Displays a number field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_number(array $args)
        {
        }
        /**
         * Displays a checkbox for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_checkbox(array $args)
        {
        }
        /**
         * Displays a multicheckbox for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_multicheck(array $args)
        {
        }
        /**
         * Displays a radio button for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_radio(array $args)
        {
        }
        /**
         * Displays a selectbox for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_select(array $args)
        {
        }
        /**
         * Displays a textarea for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_textarea(array $args)
        {
        }
        /**
         * Displays the html for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_html(array $args)
        {
        }
        /**
         * Displays a rich text textarea for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_wysiwyg(array $args)
        {
        }
        /**
         * Displays a file upload field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_file(array $args)
        {
        }
        /**
         * Displays a password field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_password(array $args)
        {
        }
        /**
         * Displays a color picker field for a settings field
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_color($args)
        {
        }
        /**
         * Displays a select box for creating the pages select box
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_pages(array $args)
        {
        }
        /**
         * Displays a select box for user roles
         *
         * @param array $args settings field args
         *
         * @return void
         */
        function callback_user_role_select(array $args)
        {
        }
        /**
         * Sanitize callback for Settings API
         *
         * @param array $options
         *
         * @return mixed
         */
        function sanitize_options(array $options)
        {
        }
        /**
         * Get sanitization callback for given option slug
         *
         * @param string $slug option slug
         *
         * @return mixed string or bool false
         */
        function get_sanitize_callback($slug = '')
        {
        }
        /**
         * Get the value of a settings field
         *
         * @param string $option  settings field name
         * @param string $section the section name this field belongs to
         * @param string $default default text if it's not found
         *
         * @return string
         */
        function get_option($option, $section, $default = '')
        {
        }
        /**
         * Show navigations as tab
         *
         * Shows all the settings section labels as tab
         *
         * @return void
         */
        function show_navigation()
        {
        }
        /**
         * Show the section settings forms
         *
         * This function displays every sections in a different form
         *
         * @return void
         */
        function show_forms()
        {
        }
        /**
         * Tabbable JavaScript codes & Initiate Color Picker
         *
         * This code uses localstorage for displaying active tabs
         *
         * @return void
         */
        function script()
        {
        }
        /**
         * Add styles to adjust some settings
         *
         * @return void
         */
        function _style_fix()
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
    class AppContext
    {
        /**
         * Stores the url string for the current site
         *
         * @var string $root_url
         */
        public $root_url;
        /**
         * Stores the WP_User object of the current user
         *
         * @var WP_User $viewer
         */
        public $viewer;
        /**
         * @var TypeRegistry
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
         * @var mixed|String|null
         */
        public $currentConnection = null;
        /**
         * Passes context about the current connection
         *
         * @var array
         */
        public $connectionArgs = [];
        /**
         * Stores the loaders for the class
         *
         * @var array
         */
        public $loaders = [];
        /**
         * Instance of the NodeResolver class to resolve nodes by URI
         *
         * @var NodeResolver
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
         * @return mixed
         *
         * @deprecated Use get_loader instead.
         */
        public function getLoader($key)
        {
        }
        /**
         * Retrieves loader assigned to $key
         *
         * @param string $key The name of the loader to get
         *
         * @return mixed
         */
        public function get_loader($key)
        {
        }
        /**
         * Returns the $args for the connection the field is a part of
         *
         * @return array|mixed
         *
         * @deprecated use get_connection_args() instead
         */
        public function getConnectionArgs()
        {
        }
        /**
         * Returns the $args for the connection the field is a part of
         *
         * @return array|mixed
         */
        public function get_connection_args()
        {
        }
        /**
         * Returns the current connection
         *
         * @return mixed|null|String
         */
        public function get_current_connection()
        {
        }
        /**
         * @return mixed|null|String
         * @deprecated use get_current_connection instead.
         */
        public function getCurrentConnection()
        {
        }
    }
}
namespace WPGraphQL\Connection {
    /**
     * Class Commenter
     *
     * @package WPGraphQL\Connection
     */
    class Commenter
    {
        /**
         * Register connections to Commenter type
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class Comments
     *
     * This class organizes the registration of connections to Comments
     *
     * @package WPGraphQL\Connection
     */
    class Comments
    {
        /**
         * Register connections to Comments
         *
         * @return void
         * @throws Exception
         */
        public static function register_connections()
        {
        }
        /**
         * Given an array of $args, this returns the connection config, merging the provided args
         * with the defaults
         *
         * @param array $args
         *
         * @return array
         */
        public static function get_connection_config($args = [])
        {
        }
        /**
         * This returns the connection args for the Comment connection
         *
         * @return array
         */
        public static function get_connection_args()
        {
        }
    }
    class ContentTypes
    {
        /**
         * Registers connections to the ContentType Type
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class EnqueuedScripts
     *
     * @package WPGraphQL\Connection
     */
    class EnqueuedScripts
    {
        /**
         * Register connections to Enqueued Assets
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class EnqueuedStylesheets
     *
     * @package WPGraphQL\Connection
     */
    class EnqueuedStylesheets
    {
        /**
         * Register connections to Enqueued Assets
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class MediaItems
     *
     * @package WPGraphQL\Connection
     */
    class MediaItems
    {
        /**
         * Register connections to MediaItems
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    class MenuItemLinkableConnection
    {
        /**
         * Registers connections to the MenuItemLinkable type
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class MenuItems
     *
     * This class organizes registration of connections to MenuItems
     *
     * @package WPGraphQL\Connection
     */
    class MenuItems
    {
        /**
         * Register connections to MenuItems
         *
         * @return void
         */
        public static function register_connections()
        {
        }
        /**
         * Given an array of $args, returns the args for the connection with the provided args merged
         *
         * @param array $args
         *
         * @return array
         */
        public static function get_connection_config($args = [])
        {
        }
    }
    /**
     * Class Menus
     *
     * This class organizes the registration of connections to Menus
     *
     * @package WPGraphQL\Connection
     */
    class Menus
    {
        /**
         * Registers connections to Menus
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class Plugins
     *
     * This class organizes the registration of connections to Plugins
     *
     * @package WPGraphQL\Connection
     */
    class Plugins
    {
        /**
         * Register connections to Plugins
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class PostObjects
     *
     * This class organizes the registration of connections to PostObjects
     *
     * @package WPGraphQL\Connection
     */
    class PostObjects
    {
        /**
         * Registers the various connections from other Types to PostObjects
         *
         * @return void
         * @throws Exception
         */
        public static function register_connections()
        {
        }
        /**
         * Given the Post Type Object and an array of args, this returns an array of args for use in
         * registering a connection.
         *
         * @param mixed|WP_Post_Type|WP_Taxonomy $graphql_object The post type object for the post_type having a
         *                                        connection registered to it
         * @param array                          $args           The custom args to modify the connection registration
         *
         * @return array
         */
        public static function get_connection_config($graphql_object, $args = [])
        {
        }
        /**
         * Given an optional array of args, this returns the args to be used in the connection
         *
         * @param array         $args             The args to modify the defaults
         * @param WP_Post_Type $post_type_object The post type the connection is going to
         *
         * @return array
         */
        public static function get_connection_args($args = [], $post_type_object = null)
        {
        }
    }
    class Revisions
    {
        /**
         * Register connections to Revisions
         *
         * @param TypeRegistry $type_registry Instance of the TypeRegistry
         *
         * @return void
         */
        public static function register_connections(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
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
    /**
     * Class TermObjects
     *
     * This class organizes the registration of connections to TermObjects
     *
     * @package WPGraphQL\Connection
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
         * @param \WP_Taxonomy $tax_object        The taxonomy object for the taxonomy having a
         *                                        connection registered to it
         * @param array        $args              The custom args to modify the connection registration
         *
         * @return array
         */
        public static function get_connection_config($tax_object, $args = [])
        {
        }
        /**
         * Given an optional array of args, this returns the args to be used in the connection
         *
         * @param array $args The args to modify the defaults
         *
         * @return array
         */
        public static function get_connection_args($args = [])
        {
        }
    }
    /**
     * Class Themes
     *
     * This class organizes registering connections to Themes
     *
     * @package WPGraphQL\Connection
     */
    class Themes
    {
        /**
         * Register the connections
         *
         * @return void
         */
        public static function register_connections()
        {
        }
    }
    /**
     * Class UserRoles
     *
     * This registers the connections to UserRoles
     *
     * @package WPGraphQL\Connection
     */
    class UserRoles
    {
        /**
         * Register the connections
         *
         * @return void
         */
        public static function register_connections()
        {
        }
        /**
         * Given an array of config, returns a config with the custom config merged with the defaults
         *
         * @param array $config
         *
         * @return array
         */
        public static function get_connection_config(array $config)
        {
        }
    }
    /**
     * Class Users
     *
     * This class organizes the registration of connections to Users
     *
     * @package WPGraphQL\Connection
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
         * @return array
         */
        public static function get_connection_args()
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
         * @param array  $input         The input for the mutation
         * @param array  $output_args   The output args
         * @param string $mutation_name The name of the mutation being performed
         * @param bool   $update        Whether it's an update action
         *
         * @return array $output_args
         * @throws Exception
         */
        public static function prepare_comment_object(array $input, array &$output_args, string $mutation_name, $update = false)
        {
        }
        /**
         * This updates commentmeta.
         *
         * @param int         $comment_id    The ID of the postObject the comment is connected to
         * @param array       $input         The input for the mutation
         * @param string      $mutation_name The name of the mutation ( ex: create, update, delete )
         * @param AppContext  $context       The AppContext passed down to all resolvers
         * @param ResolveInfo $info          The ResolveInfo passed down to all resolvers
         *
         * @return void
         */
        public static function update_additional_comment_data(int $comment_id, array $input, string $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
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
         * When posts are ordered by a meta query the order might be random when
         * the meta values have same values multiple times. This filter adds a
         * secondary ordering by the post ID which forces stable order in such cases.
         *
         * @param string $orderby The ORDER BY clause of the query.
         *
         * @return string
         */
        public function graphql_wp_query_cursor_pagination_stability($orderby)
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
        public function graphql_wp_query_cursor_pagination_support($where, \WP_Query $query)
        {
        }
        /**
         * When users are ordered by a meta query the order might be random when
         * the meta values have same values multiple times. This filter adds a
         * secondary ordering by the post ID which forces stable order in such cases.
         *
         * @param string $orderby The ORDER BY clause of the query.
         *
         * @return string
         */
        public function graphql_wp_user_query_cursor_pagination_stability($orderby)
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
         * @param array $pieces     Terms query SQL clauses.
         * @param array $taxonomies An array of taxonomies.
         * @param array $args       An array of terms query arguments.
         *
         * @return array $pieces
         */
        public function graphql_wp_term_query_cursor_pagination_support(array $pieces, $taxonomies, $args)
        {
        }
        /**
         * This returns a modified version of the $pieces of the comment query clauses if the request
         * is a GraphQL Request and the query has a graphql_cursor_offset defined
         *
         * @param array             $pieces A compacted array of comment query clauses.
         * @param WP_Comment_Query $query  Current instance of WP_Comment_Query, passed by reference.
         *
         * @return array $pieces
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
     * ConnectionResolvers should extend this to make returning data in proper shape for
     * connections easier, ensure data is passed through consistent filters, etc.
     *
     * @package WPGraphQL\Data\Connection
     */
    abstract class AbstractConnectionResolver
    {
        /**
         * The source from the field calling the connection
         *
         * @var mixed
         */
        protected $source;
        /**
         * The args input on the field calling the connection
         *
         * @var array
         */
        protected $args;
        /**
         * The AppContext for the GraphQL Request
         *
         * @var AppContext
         */
        protected $context;
        /**
         * The ResolveInfo for the GraphQL Request
         *
         * @var ResolveInfo
         */
        protected $info;
        /**
         * The query args used to query for data to resolve the connection
         *
         * @var array
         */
        protected $query_args;
        /**
         * Whether the connection resolver should execute
         *
         * @var bool
         */
        protected $should_execute = true;
        /**
         * The loader the resolver is configured to use.
         *
         * @var AbstractDataLoader
         */
        protected $loader;
        /**
         * Whether the connection is a one to one connection. Default false.
         *
         * @var bool
         */
        public $one_to_one = false;
        /**
         * The Query class/array/object used to fetch the data.
         *
         * Examples:
         *   return new WP_Query( $this->query_args );
         *   return new WP_Comment_Query( $this->query_args );
         *   return new WP_Term_Query( $this->query_args );
         *
         * Whatever it is will be passed through filters so that fields throughout
         * have context from what was queried and can make adjustments as needed, such
         * as exposing `totalCount` in pageInfo, etc.
         *
         * @var mixed
         */
        protected $query;
        /**
         * @var array
         */
        protected $items;
        /**
         * @var array
         */
        protected $ids;
        /**
         * @var array
         */
        protected $nodes;
        /**
         * @var array
         */
        protected $edges;
        /**
         * @var int
         */
        protected $query_amount;
        /**
         * ConnectionResolver constructor.
         *
         * @param mixed       $source  source passed down from the resolve tree
         * @param array       $args    array of arguments input in the field as part of the GraphQL
         *                             query
         * @param AppContext  $context Object containing app context that gets passed down the resolve
         *                             tree
         * @param ResolveInfo $info    Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns the source of the connection
         *
         * @return mixed
         */
        public function getSource()
        {
        }
        /**
         * Get the loader name
         *
         * @return AbstractDataLoader
         * @throws Exception
         */
        protected function getLoader()
        {
        }
        /**
         * Returns the $args passed to the connection
         *
         * @return array
         */
        public function getArgs() : array
        {
        }
        /**
         * Returns the AppContext of the connection
         *
         * @return AppContext
         */
        public function getContext() : \WPGraphQL\AppContext
        {
        }
        /**
         * Returns the ResolveInfo of the connection
         *
         * @return ResolveInfo
         */
        public function getInfo() : \GraphQL\Type\Definition\ResolveInfo
        {
        }
        /**
         * Returns whether the connection should execute
         *
         * @return bool
         */
        public function getShouldExecute() : bool
        {
        }
        /**
         * @param string $key   The key of the query arg to set
         * @param mixed  $value The value of the query arg to set
         *
         * @return AbstractConnectionResolver
         *
         * @deprecated in favor of set_query_arg
         */
        public function setQueryArg($key, $value)
        {
        }
        /**
         * Given a key and value, this sets a query_arg which will modify the query_args used by
         * the connection resolvers get_query();
         *
         * @param string $key   The key of the query arg to set
         * @param mixed  $value The value of the query arg to set
         *
         * @return AbstractConnectionResolver
         */
        public function set_query_arg($key, $value)
        {
        }
        /**
         * Whether the connection should resolve as a one-to-one connection.
         *
         * @return AbstractConnectionResolver
         */
        public function one_to_one()
        {
        }
        /**
         * Get_loader_name
         *
         * Return the name of the loader to be used with the connection resolver
         *
         * @return string
         */
        public abstract function get_loader_name();
        /**
         * Get_query_args
         *
         * This method is used to accept the GraphQL Args input to the connection and return args
         * that can be used in the Query to the datasource.
         *
         * For example, if the ConnectionResolver uses WP_Query to fetch the data, this
         * should return $args for use in `new WP_Query`
         *
         * @return array
         */
        public abstract function get_query_args();
        /**
         * Get_query
         *
         * The Query used to get items from the database (or even external datasource) are all
         * different.
         *
         * Each connection resolver should be responsible for defining the Query object that
         * is used to fetch items.
         *
         * @return mixed
         */
        public abstract function get_query();
        /**
         * Get_ids
         *
         * Return an array of ids from the query
         *
         * Each Query class in WP and potential datasource handles this differently, so each connection
         * resolver should handle getting the items into a uniform array of items.
         *
         * @return array
         */
        public abstract function get_ids();
        /**
         * Should_execute
         *
         * Determine whether or not the query should execute.
         *
         * Return true to exeucte, return false to prevent execution.
         *
         * Various criteria can be used to determine whether a Connection Query should
         * be executed.
         *
         * For example, if a user is requesting revisions of a Post, and the user doesn't have
         * permission to edit the post, they don't have permission to view the revisions, and therefore
         * we can prevent the query to fetch revisions from executing in the first place.
         *
         * @return bool
         */
        public abstract function should_execute();
        /**
         * Is_valid_offset
         *
         * Determine whether or not the the offset is valid, i.e the item corresponding to the offset
         * exists. Offset is equivalent to WordPress ID (e.g post_id, term_id). So this function is
         * equivalent to checking if the WordPress object exists for the given ID.
         *
         * @param mixed $offset The offset to validate. Typically a WordPress Database ID
         *
         * @return bool
         */
        public abstract function is_valid_offset($offset);
        /**
         * Given an ID, return the model for the entity or null
         *
         * @param mixed $id The ID to identify the object by. Could be a database ID or an in-memory ID
         *                  (like post_type name)
         *
         * @return mixed|Model|null
         * @throws Exception
         */
        public function get_node_by_id($id)
        {
        }
        /**
         * Get_query_amount
         *
         * Returns the max between what was requested and what is defined as the $max_query_amount to
         * ensure that queries don't exceed unwanted limits when querying data.
         *
         * @return int
         * @throws Exception
         */
        public function get_query_amount()
        {
        }
        /**
         * Get_amount_requested
         *
         * This checks the $args to determine the amount requested, and if
         *
         * @return int|null
         * @throws Exception
         */
        public function get_amount_requested()
        {
        }
        /**
         * Get_offset
         *
         * This returns the offset to be used in the $query_args based on the $args passed to the
         * GraphQL query.
         *
         * @return int|mixed
         */
        public function get_offset()
        {
        }
        /**
         * Has_next_page
         *
         * Whether there is a next page in the connection.
         *
         * If there are more "items" than were asked for in the "first" argument
         * ore if there are more "items" after the "before" argument, has_next_page()
         * will be set to true
         *
         * @return boolean
         */
        public function has_next_page()
        {
        }
        /**
         * Has_previous_page
         *
         * Whether there is a previous page in the connection.
         *
         * If there are more "items" than were asked for in the "last" argument
         * or if there are more "items" before the "after" argument, has_previous_page()
         * will be set to true.
         *
         * @return boolean
         */
        public function has_previous_page()
        {
        }
        /**
         * Get_start_cursor
         *
         * Determine the start cursor from the connection
         *
         * @return mixed string|null
         */
        public function get_start_cursor()
        {
        }
        /**
         * Get_end_cursor
         *
         * Determine the end cursor from the connection
         *
         * @return mixed string|null
         */
        public function get_end_cursor()
        {
        }
        /**
         * Get_nodes
         *
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * Validates Model.
         *
         * If model isn't a class with a `fields` member, this function with have be overridden in
         * the Connection class.
         *
         * @param mixed $model The model being validated
         *
         * @return bool
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * Given an ID, a cursor is returned
         *
         * @param int $id
         *
         * @return string
         */
        protected function get_cursor_for_node($id)
        {
        }
        /**
         * Get_edges
         *
         * This iterates over the nodes and returns edges
         *
         * @return array
         */
        public function get_edges()
        {
        }
        /**
         * Get_page_info
         *
         * Returns pageInfo for the connection
         *
         * @return array
         */
        public function get_page_info()
        {
        }
        /**
         * Execute the resolver query and get the data for the connection
         *
         * @return array
         *
         * @throws Exception
         */
        public function execute_and_get_ids()
        {
        }
        /**
         * Get_connection
         *
         * Get the connection to return to the Connection Resolver
         *
         * @return mixed|array|Deferred
         *
         * @throws Exception
         */
        public function get_connection()
        {
        }
    }
    /**
     * Class CommentConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class CommentConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * @return array
         * @throws Exception
         */
        public function get_query_args()
        {
        }
        /**
         * Get_query
         *
         * Return the instance of the WP_Comment_Query
         *
         * @return mixed|\WP_Comment_Query
         * @throws Exception
         */
        public function get_query()
        {
        }
        /**
         * Return the name of the loader
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * @return array
         * @throws Exception
         */
        public function get_ids()
        {
        }
        /**
         * This can be used to determine whether the connection query should even execute.
         *
         * For example, if the $source were a post_type that didn't support comments, we could prevent
         * the connection query from even executing. In our case, we prevent comments from even showing
         * in the Schema for post types that don't have comment support, so we don't need to worry
         * about that, but there may be other situations where we'd need to prevent it.
         *
         * @return boolean
         */
        public function should_execute()
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to
         * WP_Comment_Query friendly keys.
         *
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be
         * down to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @param array $args The array of query arguments
         *
         * @since  0.0.5
         * @return array
         */
        public function sanitize_input_fields(array $args)
        {
        }
        /**
         * Determine whether or not the the offset is valid, i.e the comment corresponding to the
         * offset exists. Offset is equivalent to comment_id. So this function is equivalent to
         * checking if the comment with the given ID exists.
         *
         * @param int $offset The ID of the node used for the cursor offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
    }
    /**
     * Class ContentTypeConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class ContentTypeConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * ContentTypeConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @return bool|int|mixed|null|string
         */
        public function get_offset()
        {
        }
        /**
         * Get the IDs from the source
         *
         * @return array|mixed|null
         */
        public function get_ids()
        {
        }
        /**
         * @return array
         */
        public function get_query_args()
        {
        }
        /**
         * Get the items from the source
         *
         * @return array|mixed|null
         */
        public function get_query()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * The name of the loader to load the data
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Determine if the offset used for pagination is valid
         *
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * Determine if the query should execute
         *
         * @return bool
         */
        public function should_execute()
        {
        }
    }
    /**
     * Class EnqueuedScriptsConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class EnqueuedScriptsConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * EnqueuedScriptsConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        public function get_offset()
        {
        }
        /**
         * Get the IDs from the source
         *
         * @return array|mixed|null
         */
        public function get_ids()
        {
        }
        /**
         * @return array|void
         */
        public function get_query_args()
        {
        }
        /**
         * Get the items from the source
         *
         * @return array|mixed|null
         */
        public function get_query()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * The name of the loader to load the data
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Determine if the model is valid
         *
         * @param array $model
         *
         * @return bool
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * Determine if the offset used for pagination is valid
         *
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * Determine if the query should execute
         *
         * @return bool
         */
        public function should_execute()
        {
        }
    }
    /**
     * Class EnqueuedStylesheetConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class EnqueuedStylesheetConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * EnqueuedStylesheetConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        public function get_offset()
        {
        }
        /**
         * Get the IDs from the source
         *
         * @return array|mixed|null
         */
        public function get_ids()
        {
        }
        /**
         * @return array|void
         */
        public function get_query_args()
        {
        }
        /**
         * Get the items from the source
         *
         * @return array|mixed|null
         */
        public function get_query()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * The name of the loader to load the data
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Determine if the model is valid
         *
         * @param array $model
         *
         * @return bool
         */
        protected function is_valid_model($model)
        {
        }
        /**
         * Determine if the offset used for pagination is valid
         *
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * Determine if the query should execute
         *
         * @return bool
         */
        public function should_execute()
        {
        }
    }
    /**
     * Class TermObjectConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class TermObjectConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * The name of the Taxonomy the resolver is intended to be used for
         *
         * @var string
         */
        protected $taxonomy;
        /**
         * TermObjectConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         * @param mixed|string|null $taxonomy The name of the Taxonomy the resolver is intended to be used for
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $taxonomy = null)
        {
        }
        /**
         * @return array
         * @throws Exception
         */
        public function get_query_args()
        {
        }
        /**
         * Return an instance of WP_Term_Query with the args mapped to the query
         *
         * @return mixed|\WP_Term_Query
         * @throws Exception
         */
        public function get_query()
        {
        }
        /**
         * This gets the items from the query. Different queries return items in different ways, so this
         * helps normalize the items into an array for use by the get_nodes() function.
         *
         * @return array
         */
        public function get_ids()
        {
        }
        /**
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Whether the connection query should execute. Certain contexts _may_ warrant
         * restricting the query to execute at all. Default is true, meaning any time
         * a TermObjectConnection resolver is asked for, it will execute.
         *
         * @return bool
         */
        public function should_execute()
        {
        }
        /**
         * This maps the GraphQL "friendly" args to get_terms $args.
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be down
         * to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @since  0.0.5
         * @return array
         */
        public function sanitize_input_fields()
        {
        }
        /**
         * Determine whether or not the the offset is valid, i.e the term corresponding to the offset
         * exists. Offset is equivalent to term_id. So this function is equivalent to checking if the
         * term with the given ID exists.
         *
         * @param int $offset The ID of the node used in the cursor for offset
         *
         * @return bool
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
         * Get the connection args for use in WP_Term_Query to query the menus
         *
         * @return array
         * @throws Exception
         */
        public function get_query_args()
        {
        }
    }
    /**
     * Class PostObjectConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class PostObjectConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * The name of the post type, or array of post types the connection resolver is resolving for
         *
         * @var mixed string|array
         */
        protected $post_type;
        /**
         * PostObjectConnectionResolver constructor.
         *
         * @param mixed              $source    source passed down from the resolve tree
         * @param array              $args      array of arguments input in the field as part of the
         *                                      GraphQL query
         * @param AppContext         $context   Object containing app context that gets passed down the
         *                                      resolve tree
         * @param ResolveInfo        $info      Info about fields passed down the resolve tree
         * @param mixed|string|array $post_type The post type to resolve for
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $post_type = 'any')
        {
        }
        /**
         * Return the name of the loader
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Returns the query being executed
         *
         * @return \WP_Query
         *
         * @throws Exception
         */
        public function get_query()
        {
        }
        /**
         * Return an array of items from the query
         *
         * @return array
         */
        public function get_ids()
        {
        }
        /**
         * Determine whether the Query should execute. If it's determined that the query should
         * not be run based on context such as, but not limited to, who the user is, where in the
         * ResolveTree the Query is, the relation to the node the Query is connected to, etc
         *
         * Return false to prevent the query from executing.
         *
         * @return bool
         */
        public function should_execute()
        {
        }
        /**
         * Here, we map the args from the input, then we make sure that we're only querying
         * for IDs. The IDs are then passed down the resolve tree, and deferred resolvers
         * handle batch resolution of the posts.
         *
         * @return array
         */
        public function get_query_args()
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to WP_Query
         * friendly keys. There's probably a cleaner/more dynamic way to approach this, but
         * this was quick. I'd be down to explore more dynamic ways to map this, but for
         * now this gets the job done.
         *
         * @param array $where_args The args passed to the connection
         *
         * @return array
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
         * @param mixed $stati The status(es) to sanitize
         *
         * @return array|null
         */
        public function sanitize_post_stati($stati)
        {
        }
        /**
         * Determine whether or not the the offset is valid, i.e the post corresponding to the offset
         * exists. Offset is equivalent to post_id. So this function is equivalent to checking if the
         * post with the given ID exists.
         *
         * @param int $offset The ID of the node used in the cursor offset
         *
         * @return bool
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
         * MenuItemConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns the query args for the connection to resolve with
         *
         * @return array
         */
        public function get_query_args()
        {
        }
    }
    /**
     * Class PluginConnectionResolver - Connects plugins to other objects
     *
     * @package WPGraphQL\Data\Resolvers
     * @since 0.0.5
     */
    class PluginConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * PluginConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @return bool|int|mixed|null|string
         */
        public function get_offset()
        {
        }
        /**
         * @return array
         */
        public function get_ids()
        {
        }
        /**
         * @return array|void
         */
        public function get_query_args()
        {
        }
        /**
         * @return array|mixed
         */
        public function get_query()
        {
        }
        /**
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * @return bool
         */
        public function should_execute()
        {
        }
    }
    /**
     * Class TaxonomyConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class TaxonomyConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * ContentTypeConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @return bool|int|mixed|null|string
         */
        public function get_offset()
        {
        }
        /**
         * Get the IDs from the source
         *
         * @return array|mixed|null
         */
        public function get_ids()
        {
        }
        /**
         * @return array
         */
        public function get_query_args()
        {
        }
        /**
         * Get the items from the source
         *
         * @return array|mixed|null
         */
        public function get_query()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * The name of the loader to load the data
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Determine if the offset used for pagination is valid
         *
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * Determine if the query should execute
         *
         * @return bool
         */
        public function should_execute()
        {
        }
    }
    /**
     * Class ThemeConnectionResolver
     *
     * @package WPGraphQL\Data\Resolvers
     * @since 0.5.0
     */
    class ThemeConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * @return mixed
         */
        public function get_offset()
        {
        }
        /**
         * Get the IDs from the source
         *
         * @return array|mixed|null
         */
        public function get_ids()
        {
        }
        /**
         * @return array
         */
        public function get_query_args()
        {
        }
        /**
         * Get the items from the source
         *
         * @return array|mixed|null
         */
        public function get_query()
        {
        }
        /**
         * Get the nodes from the query.
         *
         * We slice the array to match the amount of items that was asked for, as we over-fetched
         * by 1 item to calculate pageInfo.
         *
         * For backward pagination, we reverse the order of nodes.
         *
         * @return array
         * @throws \Exception
         */
        public function get_nodes()
        {
        }
        /**
         * The name of the loader to load the data
         *
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * Determine if the offset used for pagination is valid
         *
         * @param mixed $offset
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * Determine if the query should execute
         *
         * @return bool
         */
        public function should_execute()
        {
        }
        /**
         * Creates the connection for themes
         *
         * @param mixed       $source  The query results of the query calling this relation
         * @param array       $args    Query arguments
         * @param AppContext  $context The AppContext object
         * @param ResolveInfo $info    The ResolveInfo object
         *
         * @since  0.5.0
         * @return array
         * @throws \Exception
         */
        public static function resolve($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
    }
    /**
     * Class UserConnectionResolver
     *
     * @package WPGraphQL\Data\Connection
     */
    class UserConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * Determines whether the query should execute at all. It's possible that in some
         * situations we may want to prevent the underlying query from executing at all.
         *
         * In those cases, this would be set to false.
         *
         * @return bool
         */
        public function should_execute()
        {
        }
        public function get_loader_name()
        {
        }
        /**
         * Converts the args that were input to the connection into args that can be executed
         * by WP_User_Query
         *
         * @return array
         * @throws \Exception
         */
        public function get_query_args()
        {
        }
        /**
         * Return an instance of the WP_User_Query with the args for the connection being executed
         *
         * @return mixed|\WP_User_Query
         * @throws \Exception
         */
        public function get_query()
        {
        }
        /**
         * Returns an array of ids from the query being executed.
         *
         * @return array
         * @throws \Exception
         */
        public function get_ids()
        {
        }
        /**
         * This sets up the "allowed" args, and translates the GraphQL-friendly keys to WP_User_Query
         * friendly keys.
         *
         * There's probably a cleaner/more dynamic way to approach this, but this was quick. I'd be
         * down to explore more dynamic ways to map this, but for now this gets the job done.
         *
         * @param array $args The query "where" args
         *
         * @since  0.0.5
         * @return array
         */
        protected function sanitize_input_fields(array $args)
        {
        }
        /**
         * Determine whether or not the the offset is valid, i.e the user corresponding to the offset
         * exists. Offset is equivalent to user_id. So this function is equivalent to checking if the
         * user with the given ID exists.
         *
         * @param int $offset The ID of the node used as the offset in the cursor
         *
         * @return bool
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
     */
    class UserRoleConnectionResolver extends \WPGraphQL\Data\Connection\AbstractConnectionResolver
    {
        /**
         * UserRoleConnectionResolver constructor.
         *
         * @param mixed       $source     source passed down from the resolve tree
         * @param array       $args       array of arguments input in the field as part of the GraphQL query
         * @param AppContext  $context    Object containing app context that gets passed down the resolve tree
         * @param ResolveInfo $info       Info about fields passed down the resolve tree
         *
         * @throws Exception
         */
        public function __construct($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @return mixed
         */
        public function get_offset()
        {
        }
        /**
         * @return array
         */
        public function get_ids()
        {
        }
        /**
         * @return array
         */
        public function get_query_args()
        {
        }
        /**
         * @return array|mixed
         */
        public function get_query()
        {
        }
        /**
         * @return array
         * @throws Exception
         */
        public function get_nodes()
        {
        }
        /**
         * @return string
         */
        public function get_loader_name()
        {
        }
        /**
         * @param mixed $offset Whether the provided offset is valid for the connection
         *
         * @return bool
         */
        public function is_valid_offset($offset)
        {
        }
        /**
         * @return bool
         */
        public function should_execute()
        {
        }
    }
}
namespace WPGraphQL\Data\Cursor {
    /**
     * Generic class for building AND&OR operators for cursor based paginators
     */
    class CursorBuilder
    {
        /**
         * The field by which the cursor should order the results
         *
         * @var array
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
         * @param string           $type          type cast
         * @param string           $order         custom order
         * @param PostObjectCursor $object_cursor The PostObjectCursor class
         *
         * @return void
         */
        public function add_field(string $key, $value, string $type = null, string $order = null, \WPGraphQL\Data\Cursor\PostObjectCursor $object_cursor = null)
        {
        }
        /**
         * Returns true at least one ordering field has been added
         *
         * @return boolean
         */
        public function has_fields()
        {
        }
        /**
         * Generate the final SQL string to be appended to WHERE clause
         *
         * @param mixed|array|null $fields
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
     * @package WPGraphQL\Data
     */
    class PostObjectCursor
    {
        /**
         * The global WordPress Database instance
         *
         * @var wpdb $wpdb
         */
        public $wpdb;
        /**
         * The WP_Query instance
         *
         * @var WP_Query $query
         */
        public $query;
        /**
         * The current post id which is our cursor offset
         *
         * @var int $cursor_offset
         */
        public $cursor_offset;
        /**
         * @var CursorBuilder
         */
        public $builder;
        /**
         * Counter for meta value joins
         *
         * @var integer
         */
        public $meta_join_alias = 0;
        /**
         * Copy of query vars so we can modify them safely
         *
         * @var array
         */
        public $query_vars = [];
        /**
         * PostCursor constructor.
         *
         * @param WP_Query $query The WP_Query instance
         */
        public function __construct($query)
        {
        }
        /**
         * Get post instance for the cursor.
         *
         * This is cached internally so it does not generate extra queries
         *
         * @return mixed WP_Post|null
         */
        public function get_cursor_post()
        {
        }
        /**
         * @return string|null
         */
        public function to_sql()
        {
        }
        /**
         * @param string $name The name of the query var to get
         *
         * @return mixed|null
         */
        public function get_query_var(string $name)
        {
        }
        /**
         * Return the additional AND operators for the where statement
         *
         * @return string|null
         */
        public function get_where()
        {
        }
    }
    /**
     * User Cursor
     *
     * This class generates the SQL AND operators for cursor based pagination for users
     *
     * @package WPGraphQL\Data
     */
    class UserCursor
    {
        /**
         * The global WordPress Database instance
         *
         * @var wpdb $wpdb WordPress Database
         */
        public $wpdb;
        /**
         * The WP_User_Query instance
         *
         * @var WP_User_Query $query The WP_User_Query Instance
         */
        public $query;
        /**
         * The current user id which is our cursor offset
         *
         * @var int $cursor_offset The current user ID
         */
        public $cursor_offset;
        /**
         * @var CursorBuilder
         */
        public $builder;
        /**
         * Counter for meta value joins
         *
         * @var integer
         */
        public $meta_join_alias = 0;
        /**
         * Copy of query vars so we can modify them safely
         *
         * @var array
         */
        public $query_vars = [];
        /**
         * UserCursor constructor.
         *
         * @param WP_User_Query $query The WP_User_Query instance
         *
         * @return void
         */
        public function __construct(\WP_User_Query $query)
        {
        }
        /**
         * Get user instance for the cursor.
         *
         * This is cached internally so it does not generate extra queries
         *
         * @return mixed WP_User|null
         */
        public function get_cursor_user()
        {
        }
        /**
         * Generate the final SQL string to be appended to WHERE clause
         *
         * @return string
         */
        public function to_sql()
        {
        }
        /**
         * Get current WP_User_Query instance's query variables.
         *
         * @param string $name The query var to get
         *
         * @return mixed array|null
         */
        public function get_query_var(string $name)
        {
        }
        /**
         * Return the additional AND operators for the where statement
         *
         * @return string
         */
        public function get_where()
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
         * @var array $node_definition
         * @since  0.0.4
         */
        protected static $node_definition;
        /**
         * Retrieves a WP_Comment object for the id that gets passed
         *
         * @param int        $id      ID of the comment we want to get the object for.
         * @param AppContext $context The context of the request.
         *
         * @return Deferred object
         * @throws UserError Throws UserError.
         * @throws Exception Throws UserError.
         *
         * @since      0.0.5
         *
         * @deprecated Use the Loader passed in $context instead
         */
        public static function resolve_comment($id, $context)
        {
        }
        /**
         * Retrieves a WP_Comment object for the ID that gets passed
         *
         * @param int $comment_id The ID of the comment the comment author is associated with.
         *
         * @return mixed|CommentAuthor|null
         * @throws Exception Throws Exception.
         */
        public static function resolve_comment_author(int $comment_id)
        {
        }
        /**
         * Wrapper for the CommentsConnectionResolver class
         *
         * @param mixed       $source  The object the connection is coming from
         * @param array       $args    Query args to pass to the connection resolver
         * @param AppContext  $context The context of the query to pass along
         * @param ResolveInfo $info    The ResolveInfo object
         *
         * @return mixed
         * @throws Exception
         * @since 0.0.5
         */
        public static function resolve_comments_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Wrapper for PluginsConnectionResolver::resolve
         *
         * @param mixed       $source  The object the connection is coming from
         * @param array       $args    Array of arguments to pass to resolve method
         * @param AppContext  $context AppContext object passed down
         * @param ResolveInfo $info    The ResolveInfo object
         *
         * @return array
         * @throws Exception
         * @since  0.0.5
         */
        public static function resolve_plugins_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns the post object for the ID and post type passed
         *
         * @param int        $id      ID of the post you are trying to retrieve
         * @param AppContext $context The context of the GraphQL Request
         *
         * @return Deferred
         *
         * @throws UserError
         * @throws Exception
         *
         * @since      0.0.5
         * @deprecated Use the Loader passed in $context instead
         */
        public static function resolve_post_object(int $id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * @param int        $id      The ID of the menu item to load
         * @param AppContext $context The context of the GraphQL request
         *
         * @return Deferred|null
         * @throws Exception
         *
         * @deprecated Use the Loader passed in $context instead
         */
        public static function resolve_menu_item(int $id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * Wrapper for PostObjectsConnectionResolver
         *
         * @param mixed              $source    The object the connection is coming from
         * @param array              $args      Arguments to pass to the resolve method
         * @param AppContext         $context   AppContext object to pass down
         * @param ResolveInfo        $info      The ResolveInfo object
         * @param mixed|string|array $post_type Post type of the post we are trying to resolve
         *
         * @return mixed
         * @throws Exception
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
         * @return Taxonomy object
         * @throws UserError | Exception
         * @since  0.0.5
         */
        public static function resolve_taxonomy($taxonomy)
        {
        }
        /**
         * Get the term object for a term
         *
         * @param int        $id      ID of the term you are trying to retrieve the object for
         * @param AppContext $context The context of the GraphQL Request
         *
         * @return mixed
         * @throws Exception
         * @since      0.0.5
         *
         * @deprecated Use the Loader passed in $context instead
         */
        public static function resolve_term_object($id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * Wrapper for TermObjectConnectionResolver::resolve
         *
         * @param mixed       $source   The object the connection is coming from
         * @param array       $args     Array of args to be passed to the resolve method
         * @param AppContext  $context  The AppContext object to be passed down
         * @param ResolveInfo $info     The ResolveInfo object
         * @param string      $taxonomy The name of the taxonomy the term belongs to
         *
         * @return array
         * @throws Exception
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
         * @return Theme object
         * @throws UserError
         * @throws Exception
         * @since  0.0.5
         */
        public static function resolve_theme($stylesheet)
        {
        }
        /**
         * Wrapper for the ThemesConnectionResolver::resolve method
         *
         * @param mixed       $source  The object the connection is coming from
         * @param array       $args    Passes an array of arguments to the resolve method
         * @param AppContext  $context The AppContext object to be passed down
         * @param ResolveInfo $info    The ResolveInfo object
         *
         * @return array
         * @throws Exception
         * @since  0.0.5
         */
        public static function resolve_themes_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Gets the user object for the user ID specified
         *
         * @param int        $id      ID of the user you want the object for
         * @param AppContext $context The AppContext
         *
         * @return Deferred
         * @throws Exception
         *
         * @since      0.0.5
         * @deprecated Use the Loader passed in $context instead
         */
        public static function resolve_user($id, \WPGraphQL\AppContext $context)
        {
        }
        /**
         * Wrapper for the UsersConnectionResolver::resolve method
         *
         * @param mixed       $source  The object the connection is coming from
         * @param array       $args    Array of args to be passed down to the resolve method
         * @param AppContext  $context The AppContext object to be passed down
         * @param ResolveInfo $info    The ResolveInfo object
         *
         * @return array
         * @throws Exception
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
         * @return UserRole
         * @throws Exception
         * @since  0.0.30
         */
        public static function resolve_user_role($name)
        {
        }
        /**
         * Resolve the avatar for a user
         *
         * @param int   $user_id ID of the user to get the avatar data for
         * @param array $args    The args to pass to the get_avatar_data function
         *
         * @return array|null|Avatar
         * @throws Exception
         */
        public static function resolve_avatar($user_id, $args)
        {
        }
        /**
         * Resolve the connection data for user roles
         *
         * @param array       $source  The Query results
         * @param array       $args    The query arguments
         * @param AppContext  $context The AppContext passed down to the query
         * @param ResolveInfo $info    The ResloveInfo object
         *
         * @return array
         * @throws Exception
         */
        public static function resolve_user_role_connection($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Get all of the allowed settings by group and return the
         * settings group that matches the group param
         *
         * @param string $group
         *
         * @return array $settings_groups[ $group ]
         */
        public static function get_setting_group_fields(string $group)
        {
        }
        /**
         * Get all of the allowed settings by group
         *
         * @return array $allowed_settings_by_group
         */
        public static function get_allowed_settings_by_group()
        {
        }
        /**
         * Get all of the $allowed_settings
         *
         * @return array $allowed_settings
         */
        public static function get_allowed_settings()
        {
        }
        /**
         * We get the node interface and field from the relay library.
         *
         * The first method is the way we resolve an ID to its object. The second is the way we resolve
         * an object that implements node to its type.
         *
         * @return array
         * @throws UserError
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
         */
        public static function resolve_node_type($node)
        {
        }
        /**
         * Given the ID of a node, this resolves the data
         *
         * @param string      $global_id The Global ID of the node
         * @param AppContext  $context   The Context of the GraphQL Request
         * @param ResolveInfo $info      The ResolveInfo for the GraphQL Request
         *
         * @return null|string
         * @throws Exception
         */
        public static function resolve_node($global_id, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Returns array of nav menu location names
         *
         * @return array
         */
        public static function get_registered_nav_menu_locations()
        {
        }
        /**
         * This resolves a resource, given a URI (the path / permalink to a resource)
         *
         * Based largely on the core parse_request function in wp-includes/class-wp.php
         *
         * @param string      $uri     The URI to fetch a resource from
         * @param AppContext  $context The AppContext passed through the GraphQL Resolve Tree
         * @param ResolveInfo $info    The ResolveInfo passed through the GraphQL Resolve tree
         *
         * @return mixed
         * @throws Exception
         */
        public static function resolve_resource_by_uri($uri, $context, $info)
        {
        }
    }
}
namespace WPGraphQL\Data\Loader {
    /**
     * Class AbstractDataLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    abstract class AbstractDataLoader
    {
        /**
         * This stores a reference to the AppContext for the loader to make use of
         *
         * @var AppContext
         */
        protected $context;
        /**
         * AbstractDataLoader constructor.
         *
         * @param AppContext $context
         */
        public function __construct(\WPGraphQL\AppContext $context)
        {
        }
        /**
         * Given a Database ID, the particular loader will buffer it and resolve it deferred.
         *
         * @param mixed|int|string $database_id The database ID for a particular loader to load an
         *                                      object
         *
         * @return Deferred|null
         * @throws Exception
         */
        public function load_deferred($database_id)
        {
        }
        /**
         * Add keys to buffer to be loaded in single batch later.
         *
         * @param array $keys The keys of the objects to buffer
         *
         * @return $this
         * @throws Exception
         */
        public function buffer(array $keys)
        {
        }
        /**
         * Loads a key and returns value represented by this key.
         * Internally this method will load all currently buffered items and cache them locally.
         *
         * @param mixed $key
         *
         * @return mixed
         * @throws Exception
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
         * @throws Exception
         */
        public function prime($key, $value)
        {
        }
        /**
         * Clears the value at `key` from the cache, if it exists. Returns itself for
         * method chaining.
         *
         * @param array $keys
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
         * @return AbstractDataLoader
         * @deprecated in favor of clear_all
         */
        public function clearAll()
        {
        }
        /**
         * Clears the entire cache. To be used when some event results in unknown
         * invalidations across this particular `DataLoader`. Returns itself for
         * method chaining.
         *
         * @return AbstractDataLoader
         */
        public function clear_all()
        {
        }
        /**
         * Loads multiple keys. Returns generator where each entry directly corresponds to entry in
         * $keys. If second argument $asArray is set to true, returns array instead of generator
         *
         * @param array $keys
         * @param bool  $asArray
         *
         * @return array|Generator
         * @throws Exception
         *
         * @deprecated Use load_many instead
         */
        public function loadMany(array $keys, $asArray = false)
        {
        }
        /**
         * Loads multiple keys. Returns generator where each entry directly corresponds to entry in
         * $keys. If second argument $asArray is set to true, returns array instead of generator
         *
         * @param array $keys
         * @param bool  $asArray
         *
         * @return array|Generator
         * @throws Exception
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
         * @param mixed $key
         *
         * @return mixed
         */
        protected function key_to_scalar($key)
        {
        }
        /**
         * @param mixed $key
         *
         * @return mixed
         * @deprecated Use key_to_scalar instead
         */
        protected function keyToScalar($key)
        {
        }
        /**
         * @param mixed $entry The entry loaded from the dataloader to be used to generate a Model
         * @param mixed $key   The Key used to identify the loaded entry
         *
         * @return null|Model
         */
        protected function normalize_entry($entry, $key)
        {
        }
        /**
         * If the loader needs to do any tweaks between getting raw data from the DB and caching,
         * this can be overridden by the specific loader and used for transformations, etc.
         *
         * @param mixed $entry The User Role object
         * @param mixed $key   The Key to identify the user role by
         *
         * @return Model
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
         * @param array $keys
         *
         * @return array
         */
        protected abstract function loadKeys(array $keys);
    }
    /**
     * Class CommentAuthorLoader
     *
     * @package WPGraphQL\Data\Loader
     */
    class CommentAuthorLoader extends \WPGraphQL\Data\Loader\AbstractDataLoader
    {
        /**
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|CommentAuthor
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * @param array $keys
         *
         * @return array
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|Comment|null
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * Given array of keys, loads and returns a map consisting of keys from `keys` array and loaded
         * comments as the values
         *
         * Note that order of returned values must match exactly the order of keys.
         * If some entry is not available for given key - it must include null for the missing key.
         *
         * For example:
         * loadKeys(['a', 'b', 'c']) -> ['a' => 'value1, 'b' => null, 'c' => 'value3']
         *
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * Given an array of enqueued script handles ($keys) load the associated
         * enqueued scripts from the $wp_scripts registry.
         *
         * @param array $keys
         *
         * @return array
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
         * Given an array of enqueued stylesheet handles ($keys) load the associated
         * enqueued stylesheets from the $wp_styles registry.
         *
         * @param array $keys
         *
         * @return array
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return Model|Plugin
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * Given an array of plugin names, load the associated plugins from the plugin registry.
         *
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|Post
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * Given array of keys, loads and returns a map consisting of keys from `keys` array and loaded
         * posts as the values
         *
         * Note that order of returned values must match exactly the order of keys.
         * If some entry is not available for given key - it must include null for the missing key.
         *
         * For example:
         * loadKeys(['a', 'b', 'c']) -> ['a' => 'value1, 'b' => null, 'c' => 'value3']
         *
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|PostType
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|Taxonomy
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|Term
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * Given array of keys, loads and returns a map consisting of keys from `keys` array and loaded
         * posts as the values
         *
         * Note that order of returned values must match exactly the order of keys.
         * If some entry is not available for given key - it must include null for the missing key.
         *
         * For example:
         * loadKeys(['a', 'b', 'c']) -> ['a' => 'value1, 'b' => null, 'c' => 'value3']
         *
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return Model|Theme
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|User
         * @throws Exception
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
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param mixed $entry The User Role object
         * @param mixed $key The Key to identify the user role by
         *
         * @return mixed|UserRole
         * @throws Exception
         */
        protected function get_model($entry, $key)
        {
        }
        /**
         * @param array $keys
         *
         * @return array
         * @throws Exception
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
         * @param array        $input            The input for the mutation from the GraphQL request
         * @param WP_Post_Type $post_type_object The post_type_object for the mediaItem (attachment)
         * @param string       $mutation_name    The name of the mutation being performed (create,
         *                                       update, etc.)
         * @param mixed        $file             The mediaItem (attachment) file
         *
         * @return array $media_item_args
         */
        public static function prepare_media_item(array $input, \WP_Post_Type $post_type_object, string $mutation_name, $file)
        {
        }
        /**
         * This updates additional data related to a mediaItem, such as postmeta.
         *
         * @param int          $media_item_id    The ID of the media item being mutated
         * @param array        $input            The input on the mutation
         * @param WP_Post_Type $post_type_object The Post Type Object for the item being mutated
         * @param string       $mutation_name    The name of the mutation
         * @param AppContext   $context          The AppContext that is passed down the resolve tree
         * @param ResolveInfo  $info             The ResolveInfo that is passed down the resolve tree
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
         * @var WP
         */
        protected $wp;
        /**
         * @var AppContext
         */
        protected $context;
        /**
         * NodeResolver constructor.
         *
         * @param AppContext $context
         *
         * @return void
         */
        public function __construct(\WPGraphQL\AppContext $context)
        {
        }
        /**
         * Given the URI of a resource, this method attempts to resolve it and return the
         * appropriate related object
         *
         * @param string       $uri              The path to be used as an identifier for the
         *                                             resource.
         * @param mixed|array|string $extra_query_vars Any extra query vars to consider
         *
         * @return mixed
         * @throws Exception
         */
        public function resolve_uri(string $uri, $extra_query_vars = '')
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
         * @param array        $input             The input for the mutation
         * @param WP_Post_Type $post_type_object  The post_type_object for the type of post being
         *                                        mutated
         * @param string       $mutation_name     The name of the mutation being performed
         *
         * @return array $insert_post_args
         * @throws \Exception
         */
        public static function prepare_post_object($input, $post_type_object, $mutation_name)
        {
        }
        /**
         * This updates additional data related to a post object, such as postmeta, term relationships,
         * etc.
         *
         * @param int          $post_id               $post_id      The ID of the postObject being
         *                                            mutated
         * @param array        $input                 The input for the mutation
         * @param WP_Post_Type $post_type_object      The Post Type Object for the type of post being
         *                                            mutated
         * @param string       $mutation_name         The name of the mutation (ex: create, update,
         *                                            delete)
         * @param AppContext   $context               The AppContext passed down to all resolvers
         * @param ResolveInfo  $info                  The ResolveInfo passed down to all resolvers
         * @param string       $intended_post_status  The intended post_status the post should have
         *                                            according to the mutation input
         * @param string       $default_post_status   The default status posts should use if an
         *                                            intended status wasn't set
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
         * @param int          $post_id           The ID of the postObject being mutated
         * @param array        $input             The input for the mutation
         * @param WP_Post_Type $post_type_object  The Post Type Object for the type of post being
         *                                        mutated
         * @param string       $mutation_name     The name of the mutation (ex: create, update, delete)
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
         * @param array  $node     The node input for the term
         * @param string $taxonomy The taxonomy the term input is for
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
         * @return array|false Array of the lock time and user ID. False if the post does not exist, or
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
    }
    class TermObjectMutation
    {
        /**
         * This prepares the object to be mutated – ensures data is safe to be saved,
         * and mapped from input args to WordPress $args
         *
         * @param array        $input         The input from the GraphQL Request
         * @param \WP_Taxonomy $taxonomy      The Taxonomy object for the type of term being mutated
         * @param string       $mutation_name The name of the mutation (create, update, etc)
         *
         * @throws \Exception
         *
         * @return mixed
         */
        public static function prepare_object($input, \WP_Taxonomy $taxonomy, $mutation_name)
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
         * @return array|null
         */
        public static function input_fields()
        {
        }
        /**
         * Maps the GraphQL input to a format that the WordPress functions can use
         *
         * @param array  $input         Data coming from the GraphQL mutation query input
         * @param string $mutation_name Name of the mutation being performed
         *
         * @return array
         */
        public static function prepare_user_object($input, $mutation_name)
        {
        }
        /**
         * This updates additional data related to the user object after the initial mutation has
         * happened
         *
         * @param int         $user_id       The ID of the user being mutated
         * @param array       $input         The input data from the GraphQL query
         * @param string      $mutation_name Name of the mutation currently being run
         * @param AppContext  $context       The AppContext passed down the resolve tree
         * @param ResolveInfo $info          The ResolveInfo passed down the Resolve Tree
         *
         * @return void
         * @throws Exception
         */
        public static function update_additional_user_object_data($user_id, $input, $mutation_name, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
    }
}
namespace WPGraphQL\Model {
    /**
     * Class Model - Abstract class for modeling data for all core types
     *
     * @package WPGraphQL\Model
     */
    abstract class Model
    {
        /**
         * Stores the name of the type the child class extending this one represents
         *
         * @var string $model_name
         */
        protected $model_name;
        /**
         * Stores the raw data passed to the child class when it's instantiated before it's transformed
         *
         * @var array $data
         */
        protected $data;
        /**
         * Stores the capability name for what to check on the user if the data should be considered
         * "Restricted"
         *
         * @var string $restricted_cap
         */
        protected $restricted_cap;
        /**
         * Stores the array of allowed fields to show if the data is restricted
         *
         * @var array $allowed_restricted_fields
         */
        protected $allowed_restricted_fields;
        /**
         * Stores the DB ID of the user that owns this piece of data, or null if there is no owner
         *
         * @var int|null $owner
         */
        protected $owner;
        /**
         * Stores the WP_User object for the current user in the session
         *
         * @var WP_User $current_user
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
         * @var array $fields
         */
        public $fields;
        /**
         * Model constructor.
         *
         * @param string   $restricted_cap            The capability to check against to determine if
         *                                            the data should be restricted or not
         * @param array    $allowed_restricted_fields The allowed fields if the data is in fact
         *                                            restricted
         * @param null|int $owner                     Database ID of the user that owns this piece of
         *                                            data to compare with the current user ID
         *
         * @return void
         * @throws Exception Throws Exception.
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
         * Generic model setup before the resolver function executes
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Generic model tear down after the fields are setup. This can be used
         * to reset state to where it was before the model was setup.
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
         * @return string
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
         * @param string $string     The string to decode
         * @param string $field_name The name of the field being encoded
         * @param bool   $enabled    Whether decoding is enabled by default for the string passed in
         *
         * @return string
         */
        public function html_entity_decode($string, $field_name, $enabled = false)
        {
        }
        /**
         * Filter the fields returned for the object
         *
         * @param null|string|array $fields The field or fields to build in the modeled object. You can
         *                                  pass null to build all of the fields, a string to only
         *                                  build an object with one field, or an array of field keys
         *                                  to build an object with those keys and their respective
         *                                  values.
         *
         * @return void
         */
        public function filter($fields)
        {
        }
        /**
         * @return mixed
         */
        protected abstract function init();
    }
    /**
     * Class Avatar - Models data for avatars
     *
     * @property int    $size
     * @property int    $height
     * @property int    $width
     * @property string $default
     * @property bool   $forceDefault
     * @property string $rating
     * @property string $scheme
     * @property string $extraAttr
     * @property bool   $foundAvatar
     * @property string $url
     *
     * @package WPGraphQL\Model
     */
    class Avatar extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming avatar to be modeled
         *
         * @var array $data
         */
        protected $data;
        /**
         * Avatar constructor.
         *
         * @param array $avatar The incoming avatar to be modeled
         *
         * @throws \Exception Throws Exception.
         */
        public function __construct($avatar)
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Comment - Models data for Comments
     *
     * @property string $id
     * @property int    $commentId
     * @property string $commentAuthorEmail
     * @property string $comment_author
     * @property string $comment_author_url
     * @property int    $comment_ID
     * @property int    $comment_parent_id
     * @property string $parentId
     * @property int    $parentDatabaseId
     * @property string $authorIp
     * @property string $date
     * @property string $dateGmt
     * @property string $contentRaw
     * @property string $contentRendered
     * @property string $karma
     * @property int    $approved
     * @property string $agent
     * @property string $type
     * @property int    $userId
     *
     * @package WPGraphQL\Model
     */
    class Comment extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Comment object to be modeled
         *
         * @var \WP_Comment $data
         */
        protected $data;
        /**
         * Comment constructor.
         *
         * @param \WP_Comment $comment The incoming WP_Comment to be modeled
         *
         * @throws Exception
         */
        public function __construct(\WP_Comment $comment)
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         * @throws Exception
         */
        protected function is_private()
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class CommentAuthor - Models the CommentAuthor object
     *
     * @property string $id
     * @property string $name
     * @property string $email
     * @property string $url
     *
     * @package WPGraphQL\Model
     */
    class CommentAuthor extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the comment author to be modeled
         *
         * @var WP_Comment $data The raw data passed to he model
         */
        protected $data;
        /**
         * CommentAuthor constructor.
         *
         * @param WP_Comment $comment_author The incoming comment author array to be modeled
         *
         * @throws Exception
         */
        public function __construct(\WP_Comment $comment_author)
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Menu - Models data for Menus
     *
     * @property string $id
     * @property int    $count
     * @property int    $menuId
     * @property int    $databaseId
     * @property string $name
     * @property string $slug
     *
     * @package WPGraphQL\Model
     */
    class Menu extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Term object
         *
         * @var \WP_Term $data
         */
        protected $data;
        /**
         * Menu constructor.
         *
         * @param \WP_Term $term The incoming WP_Term object that needs modeling
         *
         * @return void
         * @throws \Exception
         */
        public function __construct(\WP_Term $term)
        {
        }
        /**
         * Determines whether a Menu should be considered private.
         *
         * If a Menu is not connected to a menu that's assigned to a location
         * it's not considered a public node
         *
         * @return bool
         * @throws \Exception
         */
        public function is_private()
        {
        }
        /**
         * Initializes the Menu object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class MenuItem - Models the data for the MenuItem object type
     *
     * @property string $id
     * @property array  $cssClasses
     * @property string $description
     * @property string $label
     * @property string $linkRelationship
     * @property int    $menuItemId
     * @property int    $databaseId
     * @property int    $objectId
     * @property string $target
     * @property string $title
     * @property string $url
     * @property string $menuId
     * @property int    $menuDatabaseId
     * @property array  $locations
     *
     * @package WPGraphQL\Model
     */
    class MenuItem extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming post data
         *
         * @var mixed|WP_Post|object $data
         */
        protected $data;
        /**
         * MenuItem constructor.
         *
         * @param WP_Post $post The incoming WP_Post object that needs modeling
         *
         * @return void
         * @throws Exception
         */
        public function __construct(\WP_Post $post)
        {
        }
        /**
         * Determines whether a MenuItem should be considered private.
         *
         * If a MenuItem is not connected to a menu that's assigned to a location
         * it's not considered a public node
         *
         * @return bool
         * @throws Exception
         */
        public function is_private()
        {
        }
        /**
         * Initialize the Post object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Plugin - Models the Plugin object
     *
     * @property string $id
     * @property string $name
     * @property string $pluginUri
     * @property string $description
     * @property string $author
     * @property string $authorUri
     * @property string $version
     * @property string $path
     *
     * @package WPGraphQL\Model
     */
    class Plugin extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming plugin data to be modeled
         *
         * @var array $data
         */
        protected $data;
        /**
         * Plugin constructor.
         *
         * @param array $plugin The incoming Plugin data to be modeled
         *
         * @throws \Exception
         */
        public function __construct($plugin)
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Post - Models data for the Post object type
     *
     * @property int     $ID
     * @property string  $post_author
     * @property string  $id
     * @property string  $post_type
     * @property string  $authorId
     * @property string  $authorDatabaseId
     * @property int     $databaseId
     * @property string  $date
     * @property string  $dateGmt
     * @property string  $contentRendered
     * @property string  $contentRaw
     * @property string  $titleRendered
     * @property string  $titleRaw
     * @property string  $excerptRendered
     * @property string  $excerptRaw
     * @property string  $post_status
     * @property string  $status
     * @property string  $commentStatus
     * @property string  $pingStatus
     * @property string  $slug
     * @property array   $template
     * @property boolean $isFrontPage
     * @property boolean $isPostsPage
     * @property boolean $isPreview
     * @property boolean $isRevision
     * @property boolean $isSticky
     * @property string  $toPing
     * @property string  $pinged
     * @property string  $modified
     * @property string  $modifiedGmt
     * @property string  $parentId
     * @property int     $parentDatabaseId
     * @property int     $editLastId
     * @property array   $editLock
     * @property string  $enclosure
     * @property string  $guid
     * @property int     $menuOrder
     * @property string  $link
     * @property string  $uri
     * @property int     $commentCount
     * @property string  $featuredImageId
     * @property int     $featuredImageDatabaseId
     * @property string  $pageTemplate
     * @property int     $previewRevisionDatabaseId
     *
     * @property string  $captionRaw
     * @property string  $captionRendered
     * @property string  $altText
     * @property string  $descriptionRaw
     * @property string  $descriptionRendered
     * @property string  $mediaType
     * @property string  $sourceUrl
     * @property string  $mimeType
     * @property array   $mediaDetails
     *
     * @package WPGraphQL\Model
     */
    class Post extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming post data
         *
         * @var WP_Post $data
         */
        protected $data;
        /**
         * Store the global post to reset during model tear down
         *
         * @var WP_Post
         */
        protected $global_post;
        /**
         * Stores the incoming post type object for the post being modeled
         *
         * @var null|WP_Post_Type $post_type_object
         */
        protected $post_type_object;
        /**
         * Store the instance of the WP_Query
         *
         * @var WP_Query
         */
        protected $wp_query;
        /**
         * Post constructor.
         *
         * @param WP_Post $post The incoming WP_Post object that needs modeling.
         *
         * @return void
         * @throws Exception
         */
        public function __construct(\WP_Post $post)
        {
        }
        /**
         * Setup the global data for the model to have proper context when resolving
         *
         * @return void
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
         * Determine if the model is private
         *
         * @return bool
         */
        public function is_private()
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @param WP_Post $post_object The object of the post we need to verify permissions for
         *
         * @return bool
         */
        protected function is_post_private($post_object = null)
        {
        }
        /**
         * Initialize the Post object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class PostType - Models data for PostTypes
     *
     * @property string $id
     * @property string $name
     * @property object $labels
     * @property string $description
     * @property bool   $public
     * @property bool   $hierarchical
     * @property bool   $excludeFromSearch
     * @property bool   $publiclyQueryable
     * @property bool   $showUi
     * @property bool   $showInMenu
     * @property bool   $showInNavMenus
     * @property bool   $showInAdminBar
     * @property int    $menuPosition
     * @property string $menuIcon
     * @property bool   $hasArchive
     * @property bool   $canExport
     * @property bool   $deleteWithUser
     * @property bool   $showInRest
     * @property string $restBase
     * @property string $restControllerClass
     * @property bool   $showInGraphql
     * @property string $graphqlSingleName
     * @property string $graphql_single_name
     * @property string $graphqlPluralName
     * @property string $graphql_plural_name
     * @property string $taxonomies
     *
     * @package WPGraphQL\Model
     */
    class PostType extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Post_Type to be modeled
         *
         * @var \WP_Post_Type $data
         */
        protected $data;
        /**
         * PostType constructor.
         *
         * @param \WP_Post_Type $post_type The incoming post type to model
         *
         * @throws \Exception
         */
        public function __construct(\WP_Post_Type $post_type)
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Taxonomy - Models data for taxonomies
     *
     * @property string $id
     * @property array  $object_type
     * @property string $name
     * @property string $label
     * @property string $description
     * @property bool   $public
     * @property bool   $hierarchical
     * @property bool   $showUi
     * @property bool   $showInMenu
     * @property bool   $showInNavMenus
     * @property bool   $showCloud
     * @property bool   $showInQuickEdit
     * @property bool   $showInAdminColumn
     * @property bool   $showInRest
     * @property string $restBase
     * @property string $restControllerClass
     * @property bool   $showInGraphql
     * @property string $graphqlSingleName
     * @property string $graphql_single_name
     * @property string $graphqlPluralName
     * @property string $graphql_plural_name
     *
     * @package WPGraphQL\Model
     */
    class Taxonomy extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Taxonomy object to be modeled
         *
         * @var \WP_Taxonomy $data
         */
        protected $data;
        /**
         * Taxonomy constructor.
         *
         * @param \WP_Taxonomy $taxonomy The incoming Taxonomy to model
         *
         * @throws \Exception
         */
        public function __construct(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initializes the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Term - Models data for Terms
     *
     * @property string $id
     * @property int    $term_id
     * @property int    $count
     * @property string $description
     * @property string $name
     * @property string $slug
     * @property int    $termGroupId
     * @property int    $termTaxonomyId
     * @property string $taxonomyName
     * @property string $link
     * @property string $parentId
     * @property int    $parentDatabaseId
     * @property array  $ancestors
     *
     * @package WPGraphQL\Model
     */
    class Term extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Term object
         *
         * @var WP_Term $data
         */
        protected $data;
        /**
         * Stores the taxonomy object for the term being modeled
         *
         * @var null|WP_Taxonomy $taxonomy_object
         */
        protected $taxonomy_object;
        /**
         * The global Post instance
         *
         * @var WP_Post
         */
        protected $global_post;
        /**
         * Term constructor.
         *
         * @param WP_Term $term The incoming WP_Term object that needs modeling
         *
         * @return void
         * @throws Exception
         */
        public function __construct(\WP_Term $term)
        {
        }
        /**
         * Setup the global state for the model to have proper context when resolving
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Reset global state after the model fields
         * have been generated
         *
         * @return void
         */
        public function tear_down()
        {
        }
        /**
         * Initializes the Term object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class Theme - Models data for themes
     *
     * @property string     $id
     * @property string     $slug
     * @property string     $name
     * @property string     $screenshot
     * @property string     $themeUri
     * @property string     $description
     * @property string     $author
     * @property string     $authorUri
     * @property array      $tags
     * @property string|int $version
     *
     * @package WPGraphQL\Model
     */
    class Theme extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming WP_Theme to be modeled
         *
         * @var \WP_Theme $data
         */
        protected $data;
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
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initialize the object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class User - Models the data for the User object type
     *
     * @property string $id
     * @property array  $capabilities
     * @property string $capKey
     * @property array  $roles
     * @property string $email
     * @property string $firstName
     * @property string $lastName
     * @property array  $extraCapabilities
     * @property string $description
     * @property string $username
     * @property string $name
     * @property string $registeredDate
     * @property string $nickname
     * @property string $url
     * @property string $slug
     * @property string $nicename
     * @property string $locale
     * @property int    $userId
     * @property string $uri
     * @property string $enqueuedScriptsQueue
     * @property string $enqueuedStylesheetsQueue
     *
     * @package WPGraphQL\Model
     */
    class User extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the WP_User object for the incoming data
         *
         * @var WP_User $data
         */
        protected $data;
        /**
         * The Global Post at time of Model generation
         *
         * @var WP_Post
         */
        protected $global_post;
        /**
         * The global authordata at time of Model generation
         *
         * @var WP_User
         */
        protected $global_authordata;
        /**
         * User constructor.
         *
         * @param WP_User $user The incoming WP_User object that needs modeling
         *
         * @return void
         * @throws Exception
         */
        public function __construct(\WP_User $user)
        {
        }
        /**
         * Setup the global data for the model to have proper context when resolving
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Reset global state after the model fields
         * have been generated
         *
         * @return void
         */
        public function tear_down()
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initialize the User object
         *
         * @return void
         */
        protected function init()
        {
        }
    }
    /**
     * Class UserRole - Models data for user roles
     *
     * @property string $displayName
     * @property string $id
     * @property string $name
     * @property array  $capabilities
     *
     * @package WPGraphQL\Model
     */
    class UserRole extends \WPGraphQL\Model\Model
    {
        /**
         * Stores the incoming user role to be modeled
         *
         * @var array $data
         */
        protected $data;
        /**
         * UserRole constructor.
         *
         * @param array $user_role The incoming user role to be modeled
         *
         * @return void
         * @throws \Exception
         */
        public function __construct($user_role)
        {
        }
        /**
         * Method for determining if the data should be considered private or not
         *
         * @return bool
         */
        protected function is_private()
        {
        }
        /**
         * Initializes the object
         *
         * @return void
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         * @param string       $mutation_name    The mutation name.
         *
         * @return callable
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
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         * @throws Exception
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         * @param string       $mutation_name    The mutation name.
         *
         * @return callable
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
         * @param WP_Post_Type $post_type_object The post type of the mutation.
         *
         * @return void
         * @throws Exception
         */
        public static function register_mutation(\WP_Post_Type $post_type_object)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Post_Type $post_type_object   The post type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Post_Type $post_type_object   The post type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields($post_type_object)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Post_Type $post_type_object   The post type of the mutation.
         * @param string        $mutation_name      The mutation name.
         *
         * @return callable
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
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
    }
    class TermObjectCreate
    {
        /**
         * Registers the TermObjectCreate mutation.
         *
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Taxonomy $taxonomy      The taxonomy type of the mutation.
         * @param string      $mutation_name The name of the mutation.
         *
         * @return callable
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
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Taxonomy $taxonomy The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Taxonomy $taxonomy      The taxonomy type of the mutation.
         * @param string      $mutation_name The name of the mutation.
         *
         * @return callable
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
         * @param WP_Taxonomy $taxonomy The Taxonomy the mutation is registered for.
         *
         * @return void
         */
        public static function register_mutation(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @param WP_Taxonomy $taxonomy    The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_input_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @param WP_Taxonomy $taxonomy    The taxonomy type of the mutation.
         *
         * @return array
         */
        public static function get_output_fields(\WP_Taxonomy $taxonomy)
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @param WP_Taxonomy $taxonomy       The taxonomy type of the mutation.
         * @param string       $mutation_name  The name of the mutation.
         *
         * @return callable
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
         * @return void
         * @throws \Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
         */
        public static function mutate_and_get_payload()
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
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
         */
        public static function mutate_and_get_payload()
        {
        }
        /**
         * @return bool False.
         */
        public static function return_false() : bool
        {
        }
    }
    class UserUpdate
    {
        /**
         * Registers the CommentCreate mutation.
         *
         * @return void
         * @throws Exception
         */
        public static function register_mutation()
        {
        }
        /**
         * Defines the mutation input field configuration.
         *
         * @return array
         */
        public static function get_input_fields()
        {
        }
        /**
         * Defines the mutation output field configuration.
         *
         * @return array
         */
        public static function get_output_fields()
        {
        }
        /**
         * Defines the mutation data modification closure.
         *
         * @return callable
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
         * @var TypeRegistry
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
         * @return WPSchema
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
     * @package WPGraphQL\Registry
     */
    class TypeRegistry
    {
        /**
         * The registered Types
         *
         * @var array
         */
        protected $types;
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
        protected function format_key($key)
        {
        }
        /**
         * Initialize the TypeRegistry
         *
         * @throws Exception
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Initialize the Type Registry
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public function init_type_registry(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Given a config for a custom Scalar, this adds the Scalar for use in the Schema.
         *
         * @param string $type_name The name of the Type to register
         * @param array  $config    The config for the scalar type to register
         *
         * @throws Exception
         *
         * @return void
         */
        public function register_scalar(string $type_name, array $config)
        {
        }
        /**
         * Add a Type to the Registry
         *
         * @param string $type_name The name of the type to register
         * @param mixed|array|Type $config The config for the type
         *
         * @throws Exception
         *
         * @return mixed
         */
        public function register_type(string $type_name, $config)
        {
        }
        /**
         * Add an Object Type to the Registry
         *
         * @param string $type_name The name of the type to register
         * @param array $config The configuration of the type
         *
         * @throws Exception
         * @return void
         */
        public function register_object_type(string $type_name, array $config)
        {
        }
        /**
         * Add an Interface Type to the registry
         *
         * @param string $type_name The name of the type to register
         * @param array $config he configuration of the type
         *
         * @throws Exception
         * @return void
         */
        public function register_interface_type(string $type_name, array $config)
        {
        }
        /**
         * Add an Enum Type to the registry
         *
         * @param string $type_name The name of the type to register
         * @param array $config he configuration of the type
         *
         * @return void
         * @throws Exception
         */
        public function register_enum_type(string $type_name, array $config)
        {
        }
        /**
         * Add an Input Type to the Registry
         *
         * @param string $type_name The name of the type to register
         * @param array $config he configuration of the type
         *
         * @return void
         * @throws Exception
         */
        public function register_input_type(string $type_name, array $config)
        {
        }
        /**
         * Add a Union Type to the Registry
         *
         * @param string $type_name The name of the type to register
         * @param array $config he configuration of the type
         *
         * @return void
         *
         * @throws Exception
         */
        public function register_union_type(string $type_name, array $config)
        {
        }
        /**
         * @param string $type_name The name of the type to register
         * @param mixed|array|Type $config he configuration of the type
         *
         * @return mixed|array|Type|null
         * @throws Exception
         */
        public function prepare_type(string $type_name, $config)
        {
        }
        /**
         * Given a type name, returns the type or null if not found
         *
         * @param string $type_name The name of the Type to get from the registry
         *
         * @return mixed|null
         */
        public function get_type(string $type_name)
        {
        }
        /**
         * Return the Types in the registry
         *
         * @return array
         */
        public function get_types()
        {
        }
        /**
         * Wrapper for prepare_field to prepare multiple fields for registration at once
         *
         * @param array  $fields    Array of fields and their settings to register on a Type
         * @param string $type_name Name of the Type to register the fields to
         *
         * @return array
         * @throws Exception
         */
        public function prepare_fields($fields, $type_name)
        {
        }
        /**
         * Prepare the field to be registered on the type
         *
         * @param string $field_name   Friendly name of the field
         * @param array  $field_config Config data about the field to prepare
         * @param string $type_name    Name of the type to prepare the field for
         *
         * @return array|null
         * @throws Exception
         */
        protected function prepare_field($field_name, $field_config, $type_name)
        {
        }
        /**
         * @param mixed|string|array $type The type definition
         *
         * @return mixed
         * @throws Exception
         */
        public function setup_type_modifiers($type)
        {
        }
        /**
         * Wrapper for the register_field method to register multiple fields at once
         *
         * @param string $type_name Name of the type in the Type Registry to add the fields to
         * @param array  $fields    Fields to register
         *
         * @return void
         */
        public function register_fields(string $type_name, array $fields = [])
        {
        }
        /**
         * Add a field to a Type in the Type Registry
         *
         * @param string $type_name  Name of the type in the Type Registry to add the fields to
         * @param string $field_name Name of the field to add to the type
         * @param array  $config     Info about the field to register to the type
         *
         * @return void
         */
        public function register_field(string $type_name, string $field_name, array $config)
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
        public function deregister_field($type_name, $field_name)
        {
        }
        /**
         * Utility method that formats the connection name given the name of the from Type and the to
         * Type
         *
         * @param string $from_type        Name of the Type the connection is coming from
         * @param string $to_type          Name of the Type the connection is going to
         * @param string $from_field_name  Acts as an alternative "toType" if connection type already defined using $to_type.
         *
         * @return string
         */
        protected function get_connection_name($from_type, $to_type, $from_field_name)
        {
        }
        /**
         * Method to register a new connection in the Type registry
         *
         * @param array $config The info about the connection being registered
         *
         * @return void
         * @throws \InvalidArgumentException
         * @throws Exception
         */
        public function register_connection($config)
        {
        }
        /**
         * Handles registration of a mutation to the Type registry
         *
         * @param string $mutation_name Name of the mutation being registered
         * @param array  $config        Info about the mutation being registered
         *
         * @return void
         * @throws Exception
         */
        public function register_mutation($mutation_name, $config)
        {
        }
        /**
         * Given a Type, this returns an instance of a NonNull of that type
         *
         * @param mixed $type The Type being wrapped
         *
         * @return NonNull
         */
        public function non_null($type)
        {
        }
        /**
         * Given a Type, this returns an instance of a listOf of that type
         *
         * @param mixed $type The Type being wrapped
         *
         * @return ListOfType
         */
        public function list_of($type)
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
         * @var array
         */
        public $data;
        /**
         * Cached global post.
         *
         * @var WP_Post
         */
        public $global_post;
        /**
         * GraphQL operation parameters for this request. Can also be an array of
         * OperationParams.
         *
         * @var OperationParams|OperationParams[]
         */
        public $params;
        /**
         * Schema for this request.
         *
         * @var WPSchema
         */
        public $schema;
        /**
         * Debug log for WPGraphQL Requests
         *
         * @var DebugLog
         */
        public $debug_log;
        /**
         * The Type Registry the Schema is built with
         *
         * @var Registry\TypeRegistry
         */
        public $type_registry;
        /**
         * Validation rules for execution.
         *
         * @var array
         */
        protected $validation_rules;
        /**
         * The default field resolver function. Default null
         *
         * @var mixed|callable|null
         */
        protected $field_resolver;
        /**
         * The root value of the request. Default null;
         *
         * @var mixed
         */
        protected $root_value;
        /**
         * Constructor
         *
         * @param array $data The request data (for non-HTTP requests).
         *
         * @return void
         *
         * @throws Exception
         */
        public function __construct(array $data = [])
        {
        }
        /**
         * @return null
         */
        protected function get_field_resolver()
        {
        }
        /**
         * Return the validation rules to use in the request
         *
         * @return array
         */
        protected function get_validation_rules()
        {
        }
        /**
         * Returns the root value to use in the request.
         *
         * @return mixed|null
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
         * @return boolean
         * @throws Exception
         */
        protected function has_authentication_errors()
        {
        }
        /**
         * Filter Authentication errors. Allows plugins that authenticate to hook in and prevent
         * execution if Authentication errors exist.
         *
         * @param boolean $authentication_errors Whether there are authentication errors with the
         *                                       request
         *
         * @return boolean
         */
        protected function filtered_authentication_errors($authentication_errors = false)
        {
        }
        /**
         * Execute an internal request (graphql() function call).
         *
         * @return array
         * @throws Exception
         */
        public function execute()
        {
        }
        /**
         * Execute an HTTP request.
         *
         * @return array
         * @throws Exception
         */
        public function execute_http()
        {
        }
        /**
         * Get the operation params for the request.
         *
         * @return OperationParams|OperationParams[]
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
         * Router constructor.
         *
         * @since  0.0.1
         */
        public function __construct()
        {
        }
        /**
         * Adds rewrite rule for the route endpoint
         *
         * @uses   add_rewrite_rule()
         * @since  0.0.1
         * @return void
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
         * @param array $query_vars The array of whitelisted query variables.
         *
         * @since  0.0.1
         * @return array
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
         * @return boolean
         */
        public static function is_graphql_http_request()
        {
        }
        /**
         * DEPRECATED: Returns whether a request is a GraphQL Request. Deprecated
         * because it's name is a bit misleading. This will only return if the request
         * is a GraphQL request coming from the HTTP endpoint. Internal GraphQL requests
         * won't be able to use this to properly determine if the request is a GraphQL request
         * or not.
         *
         * @return boolean
         * @deprecated 0.4.1 Use Router::is_graphql_http_request instead. This now resolves to it
         */
        public static function is_graphql_request()
        {
        }
        /**
         * This resolves the http request and ensures that WordPress can respond with the appropriate
         * JSON response instead of responding with a template from the standard WordPress Template
         * Loading process
         *
         * @since  0.0.1
         * @return void
         * @throws \Exception Throws exception.
         * @throws \Throwable Throws exception.
         */
        public static function resolve_http_request()
        {
        }
        /**
         * Sends an HTTP header.
         *
         * @since  0.0.5
         *
         * @param string $key   Header key.
         * @param string $value Header value.
         *
         * @return void
         */
        public static function send_header($key, $value)
        {
        }
        /**
         * Sends an HTTP status code.
         *
         * @return void
         */
        protected static function set_status()
        {
        }
        /**
         * Returns an array of headers to send with the HTTP response
         *
         * @return array
         */
        protected static function get_response_headers()
        {
        }
        /**
         * Set the response headers
         *
         * @since  0.0.1
         * @return void
         */
        public static function set_headers()
        {
        }
        /**
         * Retrieves the raw request entity (body).
         *
         * @since  0.0.5
         * @global string php://input Raw post data.
         * @return string Raw request data.
         */
        public static function get_raw_data()
        {
        }
        /**
         * This processes the graphql requests that come into the /graphql endpoint via an HTTP request
         *
         * @since  0.0.1
         * @global WP_User $current_user The currently authenticated user.
         * @return mixed
         * @throws \Exception Throws Exception.
         * @throws \Throwable Throws Exception.
         */
        public static function process_http_request()
        {
        }
        /**
         * Prepare headers for response
         *
         * @param mixed|array|ExecutionResult    $response        The response of the GraphQL Request.
         * @param mixed|array|ExecutionResult    $graphql_results The results of the GraphQL execution.
         * @param string   $query           The GraphQL query.
         * @param string   $operation_name  The operation name of the GraphQL Request.
         * @param mixed|array|null    $variables       The variables applied to the GraphQL Request.
         * @param mixed|WP_User|null $user            The current user object.
         *
         * @return void
         */
        protected static function prepare_headers($response, $graphql_results, string $query, string $operation_name, $variables, $user = null)
        {
        }
    }
}
namespace GraphQL\Server {
    /**
     * Contains functionality that could be re-used by various server implementations
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
         * @return OperationParams|OperationParams[]
         *
         * @throws RequestError
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
         * @param string  $method
         * @param mixed[] $bodyParams
         * @param mixed[] $queryParams
         *
         * @return OperationParams|OperationParams[]
         *
         * @throws RequestError
         *
         * @api
         */
        public function parseRequestParams($method, array $bodyParams, array $queryParams)
        {
        }
        /**
         * Checks validity of OperationParams extracted from HTTP request and returns an array of errors
         * if params are invalid (or empty array when params are valid)
         *
         * @return array<int, RequestError>
         *
         * @api
         */
        public function validateOperationParams(\GraphQL\Server\OperationParams $params)
        {
        }
        /**
         * Executes GraphQL operation with given server configuration and returns execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter)
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
         * (thus, effectively batching deferreds|promises of all queries at once)
         *
         * @param OperationParams[] $operations
         *
         * @return ExecutionResult|ExecutionResult[]|Promise
         *
         * @api
         */
        public function executeBatch(\GraphQL\Server\ServerConfig $config, array $operations)
        {
        }
        /**
         * Send response using standard PHP `header()` and `echo`.
         *
         * @param Promise|ExecutionResult|ExecutionResult[] $result
         * @param bool                                      $exitWhenDone
         *
         * @api
         */
        public function sendResponse($result, $exitWhenDone = false)
        {
        }
        /**
         * @param mixed[]|JsonSerializable $jsonSerializable
         * @param int                      $httpStatus
         * @param bool                     $exitWhenDone
         */
        public function emitResponse($jsonSerializable, $httpStatus, $exitWhenDone)
        {
        }
        /**
         * Converts PSR-7 request to OperationParams[]
         *
         * @return OperationParams[]|OperationParams
         *
         * @throws RequestError
         *
         * @api
         */
        public function parsePsrRequest(\Psr\Http\Message\RequestInterface $request)
        {
        }
        /**
         * Converts query execution result to PSR-7 response
         *
         * @param Promise|ExecutionResult|ExecutionResult[] $result
         *
         * @return Promise|ResponseInterface
         *
         * @api
         */
        public function toPsrResponse($result, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream)
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
         * Parses normalized request params and returns instance of OperationParams
         * or array of OperationParams in case of batch operation.
         *
         * @param string $method The method of the request (GET, POST, etc).
         * @param array  $bodyParams The params passed to the body of the request.
         * @param array  $queryParams The query params passed to the request.
         * @return OperationParams|OperationParams[]
         * @throws RequestError Throws RequestError.
         */
        public function parseRequestParams($method, array $bodyParams, array $queryParams)
        {
        }
    }
}
namespace WPGraphQL\Telemetry {
    /**
     * Class Tracker
     *
     * @package WPGraphQL\Telemetry
     */
    class Tracker
    {
        /**
         * The name of the plugin being tracked
         *
         * @var string
         */
        protected $plugin_name;
        /**
         * The slugified name of the plugin being tracked
         *
         * @var string
         */
        protected $plugin_slug;
        /**
         * Whether tracking is enabled for the plugin
         *
         * @var mixed|void
         */
        protected $tracking_enabled;
        /**
         * The endpoint to send tracking data to
         *
         * @var string
         */
        protected $endpoint_url;
        /**
         * Events that have been tracked during this request
         *
         * @var array
         */
        protected $events;
        /**
         * The name of the option that tracks the last tracked timestamp
         *
         * @var string
         */
        protected $identity_timestamp_option_name;
        /**
         * Tracker constructor.
         *
         * @param string $plugin_name The name of the plugin
         */
        public function __construct(string $plugin_name)
        {
        }
        /**
         * Initialize the tracker.
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * @return void
         */
        public function delete_timestamp()
        {
        }
        /**
         * Return the option name that stores the timestamp
         *
         * @return string
         */
        public function get_identity_timestamp_option_name()
        {
        }
        /**
         * Returns the plugin name being tracked
         *
         * @return string
         */
        public function get_plugin_name()
        {
        }
        /**
         * Returns the slug of the plugin being tracked
         *
         * @return string
         */
        public function get_plugin_slug()
        {
        }
        /**
         * Returns whether tracking is enabled or not
         *
         * @return bool
         */
        public function is_tracking_enabled()
        {
        }
        /**
         * Tracks the identity of the plugin. This is done once daily.
         *
         * @return void
         */
        public function track_identity()
        {
        }
        /**
         * Given a string, this hashes it and returns the hashed value
         *
         * @param string $value The string to hash
         *
         * @return string
         */
        public function hash(string $value)
        {
        }
        /**
         * Given a key from the $_SERVER super global, returns sanitized data
         *
         * @param string $key
         *
         * @return string
         */
        public function clean_server_data(string $key)
        {
        }
        /**
         * Clean variables using sanitize_text_field. Arrays are cleaned recursively.
         * Non-scalar values are ignored.
         *
         * @param string $input String to sanitize.
         *
         * @return string
         */
        public function sanitize(string $input)
        {
        }
        /**
         * Get the info to track
         *
         * @param string $event_type The type of event being tracked
         * @param array  $extra_info Additional info to track for the event
         *
         * @return array
         */
        public function get_info($event_type = 'IDENTITY', array $extra_info = [])
        {
        }
        /**
         * Given an Event Type and optional array of extra info, this will track an event
         * by adding it to an in-memory array of tracked events.
         *
         * The events will be sent to the remote endpoint on shutdown.
         *
         * @param string $event_type The name of the event to track
         * @param array  $extra_info Extra info to track with the event
         *
         * @return void
         */
        public function track_event(string $event_type, $extra_info = [])
        {
        }
        /**
         * Determines whether the event should be tracked
         *
         * @return bool
         */
        public function should_track_identity()
        {
        }
        /**
         * Send any tracked events
         *
         * @return void
         */
        public function send_events()
        {
        }
        /**
         * Given an array of event info, this sends a request for the event to be logged
         *
         * @param array $event_info The event info to log
         *
         * @return void
         */
        protected function send_request(array $event_info)
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
         * Get the values for the Enum definitions
         *
         * @return array
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
         * Register the MediaItemSizeEnum Type to the Schema
         *
         * @return void
         */
        public static function register_type()
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
         * Get the values for the Enum definitions
         *
         * @return array
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
         * @return array
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
    class MenuItemsConnectionWhereArgs
    {
        /**
         * Register the MenuItemsWhereArgs Input
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
    class CommenterInterface
    {
        /**
         * Register the Commenter Interface
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class ContentNode
    {
        /**
         * Adds the ContentNode Type to the WPGraphQL Registry
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         * @throws Exception
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
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
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
         * Register the DatabaseIdentifier Interface
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
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
         * @param TypeRegistry $type_registry The WPGraphQL Type Registry
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
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
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
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class MenuItemLinkable
    {
        /**
         * Registers the MenuItemLinkable Interface Type
         *
         * @param TypeRegistry $type_registry Instance of the WPGraphQL Type Registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
         *
         * @return void
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
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
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    class TermNode
    {
        /**
         * Register the TermNode Interface
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
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
         * @param TypeRegistry $type_registry
         *
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
    class PageInfo
    {
        /**
         * Register WPPageInfo Type to the Schema
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
     * WPObject - PostObject
     *
     * @package WPGraphQL\Type
     */
    class PostObject
    {
        /**
         * Registers a post_type WPObject type to the schema.
         *
         * @param WP_Post_Type $post_type_object Post type.
         * @param TypeRegistry $type_registry    The Type Registry
         *
         * @return void
         */
        public static function register_post_object_types(\WP_Post_Type $post_type_object, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Registers common post type fields on schema type corresponding to provided post type object.
         *
         * @param WP_Post_Type $post_type_object Post type.
         * @param TypeRegistry $type_registry    The Type Registry
         *
         * @return array
         */
        public static function get_post_object_fields($post_type_object, $type_registry)
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
         * @param string $group_name The name of the setting group
         * @param string $group      The settings group config
         *
         * @return void
         */
        public static function register_settings_group(string $group_name, string $group)
        {
        }
        /**
         * Given the name of a registered settings group, retrieve GraphQL fields for the group
         *
         * @param string $group_name Name of the settings group to retrieve fields for
         * @param string $group      The settings group config
         *
         * @return array
         */
        public static function get_settings_group_fields(string $group_name, string $group)
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
         * @return void
         */
        public static function register_type()
        {
        }
        /**
         * Returns an array of fields for all settings based on the `register_setting` WordPress API
         *
         * @return array
         */
        public static function get_fields()
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
     * Class TermObject
     *
     * @package WPGraphQL\Type\Object
     */
    class TermObject
    {
        /**
         * Register the Type for each kind of Taxonomy
         *
         * @param WP_Taxonomy $taxonomy_object The taxonomy being registered
         *
         * @return void
         */
        public static function register_taxonomy_object_type(\WP_Taxonomy $taxonomy_object)
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
namespace WPGraphQL\Type\Union {
    class ContentRevisionUnion
    {
        /**
         * Register the ContentRevisionUnion Type
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
    /**
     * Class MenuItemObjectUnion
     *
     * @package WPGraphQL\Type\Union
     * @deprecated
     */
    class MenuItemObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         * @throws Exception
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return array
         */
        public static function get_possible_types()
        {
        }
    }
    class PostObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return array
         */
        public static function get_possible_types()
        {
        }
    }
    class TermObjectUnion
    {
        /**
         * Registers the Type
         *
         * @param TypeRegistry $type_registry
         *
         * @return void
         */
        public static function register_type(\WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Returns a list of possible types for the union
         *
         * @return array
         */
        public static function get_possible_types()
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
    export type InputType =
     | ScalarType
     | EnumType
     | InputObjectType
     | ListOfType<InputType>
     | NonNull<
         | ScalarType
         | EnumType
         | InputObjectType
         | ListOfType<InputType>,
       >;
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
         * @param mixed $value
         *
         * @return mixed
         *
         * @throws Error
         */
        public function serialize($value);
        /**
         * Parses an externally provided value (query variable) to use as an input
         *
         * In the case of an invalid value this method must throw an Exception
         *
         * @param mixed $value
         *
         * @return mixed
         *
         * @throws Error
         */
        public function parseValue($value);
        /**
         * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input
         *
         * In the case of an invalid node or value this method must throw an Exception
         *
         * @param IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|NullValueNode $valueNode
         * @param mixed[]|null                                                               $variables
         *
         * @return mixed
         *
         * @throws Exception
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
    export type NamedType =
     | ScalarType
     | ObjectType
     | InterfaceType
     | UnionType
     | EnumType
     | InputObjectType;
    */
    interface NamedType
    {
    }
    /**
     * Registry of standard GraphQL types
     * and a base class for all other types.
     */
    abstract class Type implements \JsonSerializable
    {
        public const STRING = 'String';
        public const INT = 'Int';
        public const BOOLEAN = 'Boolean';
        public const FLOAT = 'Float';
        public const ID = 'ID';
        /** @var array<string, ScalarType> */
        protected static $standardTypes;
        /** @var string */
        public $name;
        /** @var string|null */
        public $description;
        /** @var TypeDefinitionNode|null */
        public $astNode;
        /** @var mixed[] */
        public $config;
        /** @var TypeExtensionNode[] */
        public $extensionASTNodes;
        /**
         * @api
         */
        public static function id() : \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * @api
         */
        public static function string() : \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * @api
         */
        public static function boolean() : \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * @api
         */
        public static function int() : \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * @api
         */
        public static function float() : \GraphQL\Type\Definition\ScalarType
        {
        }
        /**
         * @api
         */
        public static function listOf(\GraphQL\Type\Definition\Type $wrappedType) : \GraphQL\Type\Definition\ListOfType
        {
        }
        /**
         * @param callable|NullableType $wrappedType
         *
         * @api
         */
        public static function nonNull($wrappedType) : \GraphQL\Type\Definition\NonNull
        {
        }
        /**
         * Checks if the type is a builtin type
         */
        public static function isBuiltInType(\GraphQL\Type\Definition\Type $type) : bool
        {
        }
        /**
         * Returns all builtin in types including base scalar and
         * introspection types
         *
         * @return Type[]
         */
        public static function getAllBuiltInTypes()
        {
        }
        /**
         * Returns all builtin scalar types
         *
         * @return ScalarType[]
         */
        public static function getStandardTypes()
        {
        }
        /**
         * @deprecated Use method getStandardTypes() instead
         *
         * @return Type[]
         *
         * @codeCoverageIgnore
         */
        public static function getInternalTypes()
        {
        }
        /**
         * @param array<string, ScalarType> $types
         */
        public static function overrideStandardTypes(array $types)
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function isInputType($type) : bool
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function getNamedType($type) : ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function isOutputType($type) : bool
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function isLeafType($type) : bool
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function isCompositeType($type) : bool
        {
        }
        /**
         * @param Type $type
         *
         * @api
         */
        public static function isAbstractType($type) : bool
        {
        }
        /**
         * @param mixed $type
         */
        public static function assertType($type) : \GraphQL\Type\Definition\Type
        {
        }
        /**
         * @api
         */
        public static function getNullableType(\GraphQL\Type\Definition\Type $type) : \GraphQL\Type\Definition\Type
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid()
        {
        }
        /**
         * @return string
         */
        public function jsonSerialize()
        {
        }
        /**
         * @return string
         */
        public function toString()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * @return string|null
         */
        protected function tryInferName()
        {
        }
    }
    class EnumType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\LeafType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var EnumTypeDefinitionNode|null */
        public $astNode;
        /** @var EnumTypeExtensionNode[] */
        public $extensionASTNodes;
        public function __construct($config)
        {
        }
        /**
         * @param string|mixed[] $name
         *
         * @return EnumValueDefinition|null
         */
        public function getValue($name)
        {
        }
        /**
         * @return EnumValueDefinition[]
         */
        public function getValues() : array
        {
        }
        /**
         * @param mixed $value
         *
         * @return mixed
         *
         * @throws Error
         */
        public function serialize($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @return mixed
         *
         * @throws Error
         */
        public function parseValue($value)
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return null
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid()
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
     */
    class WPEnumType extends \GraphQL\Type\Definition\EnumType
    {
        /**
         * WPInputObjectType constructor.
         *
         * @param array $config
         */
        public function __construct($config)
        {
        }
        /**
         * Generate a safe / sanitized name from a menu location slug.
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
    class InputObjectType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var InputObjectTypeDefinitionNode|null */
        public $astNode;
        /** @var InputObjectTypeExtensionNode[] */
        public $extensionASTNodes;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function getField(string $name) : \GraphQL\Type\Definition\InputObjectField
        {
        }
        /**
         * @return InputObjectField[]
         */
        public function getFields() : array
        {
        }
        protected function initializeFields() : void
        {
        }
        /**
         * Validates type config and throws if one of type options is invalid.
         * Note: this method is shallow, it won't validate object fields and their arguments.
         *
         * @throws InvariantViolation
         */
        public function assertValid() : void
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
     * @package WPGraphQL\Type
     * @since 0.0.5
     */
    class WPInputObjectType extends \GraphQL\Type\Definition\InputObjectType
    {
        /**
         * Prepare_fields
         *
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array        $fields
         * @param string       $type_name
         * @param array        $config
         * @param TypeRegistry $type_registry
         * @return mixed
         * @since 0.0.5
         */
        public static function prepare_fields(array $fields, $type_name, $config = [], \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
    export type AbstractType =
    InterfaceType |
    UnionType;
    */
    interface AbstractType
    {
        /**
         * Resolves concrete ObjectType for given object value
         *
         * @param object  $objectValue
         * @param mixed[] $context
         *
         * @return mixed
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
    class InterfaceType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\AbstractType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var InterfaceTypeDefinitionNode|null */
        public $astNode;
        /** @var InterfaceTypeExtensionNode[] */
        public $extensionASTNodes;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        /**
         * @param mixed $type
         *
         * @return $this
         *
         * @throws InvariantViolation
         */
        public static function assertInterfaceType($type) : self
        {
        }
        public function getField(string $name) : \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public function hasField(string $name) : bool
        {
        }
        /**
         * @return FieldDefinition[]
         */
        public function getFields() : array
        {
        }
        protected function initializeFields() : void
        {
        }
        /**
         * Resolves concrete ObjectType for given object value
         *
         * @param object $objectValue
         * @param mixed  $context
         *
         * @return Type|null
         */
        public function resolveType($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid() : void
        {
        }
    }
}
namespace WPGraphQL\Type {
    class WPInterfaceType extends \GraphQL\Type\Definition\InterfaceType
    {
        /**
         * Instance of the TypeRegistry as an Interface needs knowledge of available Types
         *
         * @var TypeRegistry
         */
        public $type_registry;
        /**
         * WPInterfaceType constructor.
         *
         * @param array        $config
         * @param TypeRegistry $type_registry
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array  $fields
         * @param string $type_name
         *
         * @return mixed
         * @since 0.0.5
         */
        public function prepare_fields(array $fields, string $type_name)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * Object Type Definition
     *
     * Almost all of the GraphQL types you define will be object types. Object types
     * have a name, but most importantly describe their fields.
     *
     * Example:
     *
     *     $AddressType = new ObjectType([
     *       'name' => 'Address',
     *       'fields' => [
     *         'street' => [ 'type' => GraphQL\Type\Definition\Type::string() ],
     *         'number' => [ 'type' => GraphQL\Type\Definition\Type::int() ],
     *         'formatted' => [
     *           'type' => GraphQL\Type\Definition\Type::string(),
     *           'resolve' => function($obj) {
     *             return $obj->number . ' ' . $obj->street;
     *           }
     *         ]
     *       ]
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
     *       'name' => 'Person',
     *       'fields' => function() use (&$PersonType) {
     *          return [
     *              'name' => ['type' => GraphQL\Type\Definition\Type::string() ],
     *              'bestFriend' => [ 'type' => $PersonType ],
     *          ];
     *        }
     *     ]);
     */
    class ObjectType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var ObjectTypeDefinitionNode|null */
        public $astNode;
        /** @var ObjectTypeExtensionNode[] */
        public $extensionASTNodes;
        /** @var ?callable */
        public $resolveFieldFn;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        /**
         * @param mixed $type
         *
         * @return $this
         *
         * @throws InvariantViolation
         */
        public static function assertObjectType($type) : self
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function getField(string $name) : \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public function hasField(string $name) : bool
        {
        }
        /**
         * @return FieldDefinition[]
         *
         * @throws InvariantViolation
         */
        public function getFields() : array
        {
        }
        protected function initializeFields() : void
        {
        }
        public function implementsInterface(\GraphQL\Type\Definition\InterfaceType $interfaceType) : bool
        {
        }
        /**
         * @return InterfaceType[]
         */
        public function getInterfaces() : array
        {
        }
        /**
         * @param mixed $value
         * @param mixed $context
         *
         * @return bool|Deferred|null
         */
        public function isTypeOf($value, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * Validates type config and throws if one of type options is invalid.
         * Note: this method is shallow, it won't validate object fields and their arguments.
         *
         * @throws InvariantViolation
         */
        public function assertValid() : void
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPObjectType
     *
     * Object Types should extend this class to take advantage of the helper methods
     * and consistent filters.
     *
     * @package WPGraphQL\Type
     * @since   0.0.5
     */
    class WPObjectType extends \GraphQL\Type\Definition\ObjectType
    {
        /**
         * Instance of the Type Registry
         *
         * @var TypeRegistry
         */
        public $type_registry;
        /**
         * WPObjectType constructor.
         *
         * @param array        $config
         * @param TypeRegistry $type_registry
         *
         * @since 0.0.5
         */
        public function __construct($config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
        /**
         * Node_interface
         *
         * This returns the node_interface definition allowing
         * WPObjectTypes to easily implement the node_interface
         *
         * @return array|Node
         * @since 0.0.5
         */
        public static function node_interface()
        {
        }
        /**
         * This function sorts the fields and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the type.
         *
         * @param array  $fields
         * @param string $type_name
         * @param array  $config
         *
         * @return mixed
         * @since 0.0.5
         */
        public function prepare_fields($fields, $type_name, $config)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    /**
     * Scalar Type Definition
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
     */
    abstract class ScalarType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\InputType, \GraphQL\Type\Definition\LeafType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var ScalarTypeDefinitionNode|null */
        public $astNode;
        /** @var ScalarTypeExtensionNode[] */
        public $extensionASTNodes;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config = [])
        {
        }
    }
    class CustomScalarType extends \GraphQL\Type\Definition\ScalarType
    {
        /**
         * @param mixed $value
         *
         * @return mixed
         */
        public function serialize($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @return mixed
         */
        public function parseValue($value)
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return mixed
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
        public function assertValid()
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPScalar
     *
     * @package WPGraphQL\Type
     */
    class WPScalar extends \GraphQL\Type\Definition\CustomScalarType
    {
        /**
         * WPScalar constructor.
         *
         * @param array        $config
         * @param TypeRegistry $type_registry
         */
        public function __construct(array $config, \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    class UnionType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\AbstractType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\CompositeType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\NamedType
    {
        /** @var UnionTypeDefinitionNode */
        public $astNode;
        /** @var UnionTypeExtensionNode[] */
        public $extensionASTNodes;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        public function isPossibleType(\GraphQL\Type\Definition\Type $type) : bool
        {
        }
        /**
         * @return ObjectType[]
         *
         * @throws InvariantViolation
         */
        public function getTypes() : array
        {
        }
        /**
         * Resolves concrete ObjectType for given object value
         *
         * @param object $objectValue
         * @param mixed  $context
         *
         * @return callable|null
         */
        public function resolveType($objectValue, $context, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid() : void
        {
        }
    }
}
namespace WPGraphQL\Type {
    /**
     * Class WPUnionType
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
         * @var TypeRegistry
         */
        public $type_registry;
        /**
         * WPUnionType constructor.
         *
         * @param array        $config The Config to setup a Union Type
         * @param TypeRegistry $type_registry
         *
         * @since 0.0.30
         */
        public function __construct($config = [], \WPGraphQL\Registry\TypeRegistry $type_registry)
        {
        }
    }
}
namespace WPGraphQL {
    /**
     * This class was used to access Type definitions pre v0.4.0, but is no longer used.
     * See upgrade guide vor v0.4.0 (https://github.com/wp-graphql/wp-graphql/releases/tag/v0.4.0) for
     * information on updating to use non-static TypeRegistry methods to get_type(), etc.
     *
     * @deprecated since v0.6.0. Old static methods can now be done by accessing the
     *             TypeRegistry class from within the `graphql_register_types` hook
     */
    class Types
    {
        /**
         * @deprecated since v0.6.0. Use Utils:map_input instead
         *
         * @param array $args The raw query args from the GraphQL query.
         * @param array $map  The mapping of where each of the args should go.
         *
         * @return array
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
namespace WPGraphQL\Utils {
    /**
     * Class DebugLog
     *
     * @package WPGraphQL\Utils
     */
    class DebugLog
    {
        /**
         * @var array
         */
        protected $logs;
        /**
         * Whether logs are enabled
         *
         * @var boolean
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
         * @param mixed|string|array $message The debug log message
         * @param array  $config Config for the debug log. Set type and any additional information to log
         *
         * @return array
         */
        public function add_log_entry($message, $config = [])
        {
        }
        /**
         * Returns the debug log
         *
         * @return array
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
         * @param WPSchema $schema Instance of the Schema.
         *
         * @return WPSchema
         */
        public static function instrument_schema(\WPGraphQL\WPSchema $schema)
        {
        }
        /**
         * Wrap Fields
         *
         * This wraps fields to provide sanitization on fields output by introspection queries
         * (description/deprecation reason) and provides hooks to resolvers.
         *
         * @param array  $fields    The fields configured for a Type
         * @param string $type_name The Type name
         *
         * @return mixed
         */
        protected static function wrap_fields($fields, $type_name)
        {
        }
        /**
         * Check field permissions when resolving.
         *
         * This takes into account auth params defined in the Schema
         *
         * @param mixed                 $source         The source passed down the Resolve Tree
         * @param array                 $args           The args for the field
         * @param AppContext            $context        The AppContext passed down the ResolveTree
         * @param ResolveInfo           $info           The ResolveInfo passed down the ResolveTree
         * @param mixed|callable|string $field_resolver The Resolve function for the field
         * @param string                $type_name      The name of the type the fields belong to
         * @param string                $field_key      The name of the field
         * @param FieldDefinition       $field          The Field Definition for the resolving field
         *
         * @return bool|mixed
         */
        public static function check_field_permissions($source, array $args, \WPGraphQL\AppContext $context, \GraphQL\Type\Definition\ResolveInfo $info, $field_resolver, string $type_name, string $field_key, \GraphQL\Type\Definition\FieldDefinition $field)
        {
        }
    }
    class Preview
    {
        /**
         * This filters the post meta for previews. Since WordPress core does not save meta for revisions
         * this resolves calls to get_post_meta() using the meta of the revisions parent (the published version of the post).
         *
         * For plugins (such as ACF) that do store meta on revisions, the filter "graphql_resolve_revision_meta_from_parent"
         * can be used to opt-out of this default behavior and instead return meta from the revision
         * object instead of the parent.
         *
         * @param mixed $default_value The default value of the meta
         * @param int $object_id The ID of the object the meta is for
         * @param string $meta_key The meta key
         * @param bool $single Whether the meta is a single value
         *
         * @return mixed
         */
        public static function filter_post_meta_for_previews($default_value, int $object_id, string $meta_key, bool $single)
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
         * @var boolean
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
         * @return boolean
         */
        public function user_can_see_logs()
        {
        }
        /**
         * Filter the results of the GraphQL Response to include the Query Log
         *
         * @param mixed    $response
         * @param WPSchema $schema         The WPGraphQL Schema
         * @param string   $operation_name The operation name being executed
         * @param string   $request        The GraphQL Request being made
         * @param array    $variables      The variables sent with the request
         *
         * @return array
         */
        public function show_results($response, $schema, $operation_name, $request, $variables)
        {
        }
        /**
         * Return the query log produced from the logs stored by WPDB.
         *
         * @return array
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
     */
    class Tracing
    {
        /**
         * Whether Tracing is enabled
         *
         * @var boolean
         */
        public $tracing_enabled;
        /**
         * Stores the logs for the trace
         *
         * @var array
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
         * @var array
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
         *
         * @return float
         */
        public function init_trace()
        {
        }
        /**
         * Sets the timestamp and microtime for the end of the request
         *
         * @return float
         */
        public function end_trace()
        {
        }
        /**
         * Initialize tracing for an individual field
         *
         * @param mixed               $source         The source passed down the Resolve Tree
         * @param array               $args           The args for the field
         * @param AppContext          $context        The AppContext passed down the ResolveTree
         * @param ResolveInfo         $info           The ResolveInfo passed down the ResolveTree
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
         * @return float|int
         */
        public function get_field_resolver_duration()
        {
        }
        /**
         * Get the offset between the start of the request and now
         *
         * @return float|int
         */
        public function get_start_offset()
        {
        }
        /**
         * Given a trace, sanitizes the values and returns the sanitized_trace
         *
         * @param array $trace
         *
         * @return mixed
         */
        public function sanitize_resolver_trace(array $trace)
        {
        }
        /**
         * Given input from a Resolver Path, this sanitizes the input for output in the trace
         *
         * @param mixed $input The input to sanitize
         *
         * @return int|null|string
         */
        public static function sanitize_trace_resolver_path($input)
        {
        }
        /**
         * Formats a timestamp to be RFC 3339 compliant
         *
         * @see https://github.com/apollographql/apollo-tracing
         *
         * @param mixed|string|float|int $time The timestamp to format
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
         * @param array $headers The headers to return
         *
         * @return array
         */
        public function return_tracing_headers(array $headers)
        {
        }
        /**
         * Filter the results of the GraphQL Response to include the Query Log
         *
         * @param mixed|array|object $response       The response of the GraphQL Request
         * @param mixed              $schema         The WPGraphQL Schema
         * @param string             $operation_name The operation name being executed
         * @param string             $request        The GraphQL Request being made
         *
         * @return mixed $response
         */
        public function add_tracing_to_response_extensions($response, $schema, string $operation_name, string $request)
        {
        }
        /**
         * Returns the request duration calculated from the start and end times
         *
         * @return float|int
         */
        public function get_request_duration()
        {
        }
        /**
         * Determine if the requesting user can see trace data
         *
         * @return boolean
         */
        public function user_can_see_trace_data() : bool
        {
        }
        /**
         * Get the trace to add to the response
         *
         * @return array
         */
        public function get_trace() : array
        {
        }
    }
    class Utils
    {
        /**
         * Maps new input query args and sanitizes the input
         *
         * @param mixed|array|string $args The raw query args from the GraphQL query
         * @param mixed|array|string $map  The mapping of where each of the args should go
         *
         * @return array
         * @since  0.5.0
         */
        public static function map_input($args, $map)
        {
        }
        /**
         * Checks the post_date_gmt or modified_gmt and prepare any post or
         * modified date for single post output.
         *
         * @param string $date_gmt GMT publication time.
         * @param mixed|string|null $date Optional. Local publication time. Default null.
         *
         * @return string|null ISO8601/RFC3339 formatted datetime.
         * @since 4.7.0
         */
        public static function prepare_date_response(string $date_gmt, $date = null)
        {
        }
        /**
         * Given a field name, formats it for GraphQL
         *
         * @param string $field_name The field name to format
         *
         * @return string
         */
        public static function format_field_name(string $field_name)
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
         * Helper function that defines the allowed HTML to use on the Settings pages
         *
         * @return array
         */
        public static function get_allowed_wp_kses_html()
        {
        }
    }
}
namespace {
    /**
     * Class WPGraphQL
     *
     * This is the one true WPGraphQL class
     *
     * @package WPGraphQL
     */
    final class WPGraphQL
    {
        /**
         * Stores an array of allowed post types
         *
         * @var array allowed_post_types
         * @since  0.0.5
         */
        public static $allowed_post_types;
        /**
         * Stores an array of allowed taxonomies
         *
         * @var array allowed_taxonomies
         * @since  0.0.5
         */
        public static $allowed_taxonomies;
        /**
         * The instance of the WPGraphQL object
         *
         * @return object|WPGraphQL - The one true WPGraphQL
         * @since  0.0.1
         */
        public static function instance()
        {
        }
        /**
         * Throw error on object clone.
         * The whole idea of the singleton design pattern is that there is a single object
         * therefore, we don't want the object to be cloned.
         *
         * @since  0.0.1
         * @return void
         */
        public function __clone()
        {
        }
        /**
         * Disable unserializing of the class.
         *
         * @since  0.0.1
         * @return void
         */
        public function __wakeup()
        {
        }
        /**
         * Set whether the request is a GraphQL request or not
         *
         * @param bool $is_graphql_request
         *
         * @return void
         */
        public static function set_is_graphql_request($is_graphql_request = \false)
        {
        }
        /**
         * @return bool
         */
        public static function is_graphql_request()
        {
        }
        /**
         * Check if the minimum PHP version requirement is met before execution begins.
         *
         * If the server is running a lower version than required, throw an exception and prevent
         * further execution.
         *
         * @throws Exception
         *
         * @return void
         */
        public function min_php_version_check()
        {
        }
        /**
         * Determine the post_types and taxonomies, etc that should show in GraphQL
         *
         * @return void
         */
        public function setup_types()
        {
        }
        /**
         * Flush permalinks if the GraphQL Endpoint route isn't yet registered
         *
         * @return void
         */
        public function maybe_flush_permalinks()
        {
        }
        /**
         * Initialize admin functionality
         *
         * @return void
         */
        public function init_admin()
        {
        }
        /**
         * This sets up built-in post_types and taxonomies to show in the GraphQL Schema
         *
         * @since  0.0.2
         * @return void
         */
        public static function show_in_graphql()
        {
        }
        /**
         * Get the post types that are allowed to be used in GraphQL. This gets all post_types that
         * are set to show_in_graphql, but allows for external code (plugins/theme) to filter the
         * list of allowed_post_types to add/remove additional post_types
         *
         * @param array $args Arguments to filter allowed post types
         *
         * @return array
         * @since  0.0.4
         */
        public static function get_allowed_post_types($args = [])
        {
        }
        /**
         * Get the taxonomies that are allowed to be used in GraphQL/This gets all taxonomies that
         * are set to "show_in_graphql" but allows for external code (plugins/themes) to filter
         * the list of allowed_taxonomies to add/remove additional taxonomies
         *
         * @since  0.0.4
         * @return array
         */
        public static function get_allowed_taxonomies()
        {
        }
        /**
         * Allow Schema to be cleared
         *
         * @return void
         */
        public static function clear_schema()
        {
        }
        /**
         * Returns the Schema as defined by static registrations throughout
         * the WP Load.
         *
         * @return WPSchema
         *
         * @throws Exception
         */
        public static function get_schema()
        {
        }
        /**
         * Whether WPGraphQL is operating in Debug mode
         *
         * @return bool
         */
        public static function debug() : bool
        {
        }
        /**
         * Returns the Schema as defined by static registrations throughout
         * the WP Load.
         *
         * @return TypeRegistry
         *
         * @throws Exception
         */
        public static function get_type_registry()
        {
        }
        /**
         * Return the static schema if there is one
         *
         * @return null|string
         */
        public static function get_static_schema()
        {
        }
        /**
         * Get the AppContext for use in passing down the Resolve Tree
         *
         * @return AppContext
         */
        public static function get_app_context()
        {
        }
    }
}
namespace GraphQL\Type {
    /**
     * Schema Definition (see [related docs](type-system/schema.md))
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
     */
    class Schema
    {
        /** @var SchemaTypeExtensionNode[] */
        public $extensionASTNodes = [];
        /**
         * @param mixed[]|SchemaConfig $config
         *
         * @api
         */
        public function __construct($config)
        {
        }
        /**
         * Returns array of all types in this schema. Keys of this array represent type names, values are instances
         * of corresponding type definitions
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @return Type[]
         *
         * @api
         */
        public function getTypeMap()
        {
        }
        /**
         * Returns a list of directives supported by this schema
         *
         * @return Directive[]
         *
         * @api
         */
        public function getDirectives()
        {
        }
        /**
         * @param string $operation
         *
         * @return ObjectType|null
         */
        public function getOperationType($operation)
        {
        }
        /**
         * Returns schema query type
         *
         * @return ObjectType
         *
         * @api
         */
        public function getQueryType() : ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * Returns schema mutation type
         *
         * @return ObjectType|null
         *
         * @api
         */
        public function getMutationType() : ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * Returns schema subscription
         *
         * @return ObjectType|null
         *
         * @api
         */
        public function getSubscriptionType() : ?\GraphQL\Type\Definition\Type
        {
        }
        /**
         * @return SchemaConfig
         *
         * @api
         */
        public function getConfig()
        {
        }
        /**
         * Returns type by its name
         *
         * @api
         */
        public function getType(string $name) : ?\GraphQL\Type\Definition\Type
        {
        }
        public function hasType(string $name) : bool
        {
        }
        protected function throwNotAType($type, string $typeName)
        {
        }
        /**
         * @param Type|callable():Type $type
         */
        public static function resolveType($type) : \GraphQL\Type\Definition\Type
        {
        }
        /**
         * Returns all possible concrete types for given abstract type
         * (implementations for interfaces and members of union type for unions)
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @param InterfaceType|UnionType $abstractType
         *
         * @return array<Type&ObjectType>
         *
         * @api
         */
        public function getPossibleTypes(\GraphQL\Type\Definition\Type $abstractType) : array
        {
        }
        /**
         * Returns true if object type is concrete type of given abstract type
         * (implementation for interfaces and members of union type for unions)
         *
         * @api
         */
        public function isPossibleType(\GraphQL\Type\Definition\AbstractType $abstractType, \GraphQL\Type\Definition\ObjectType $possibleType) : bool
        {
        }
        /**
         * Returns instance of directive by name
         *
         * @api
         */
        public function getDirective(string $name) : ?\GraphQL\Type\Definition\Directive
        {
        }
        public function getAstNode() : ?\GraphQL\Language\AST\SchemaDefinitionNode
        {
        }
        /**
         * Validates schema.
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @throws InvariantViolation
         *
         * @api
         */
        public function assertValid()
        {
        }
        /**
         * Validates schema.
         *
         * This operation requires full schema scan. Do not use in production environment.
         *
         * @return InvariantViolation[]|Error[]
         *
         * @api
         */
        public function validate()
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
         * @var SchemaConfig
         */
        public $config;
        /**
         * Holds the $filterable_config which allows WordPress access to modifying the
         * $config that gets passed down to the Executable Schema
         *
         * @var array|null
         * @since 0.0.9
         */
        public $filterable_config;
        /**
         * WPSchema constructor.
         *
         * @param SchemaConfig $config The config for the Schema.
         *
         * @since 0.0.9
         */
        public function __construct(\GraphQL\Type\SchemaConfig $config)
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
         * mutateAndGetPayload will receieve an Object with a key for each
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
         * mutateAndGetPayload will receieve an Object with a key for each
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
namespace GraphQL\Executor\Promise\Adapter {
    /**
     * Simplistic (yet full-featured) implementation of Promises A+ spec for regular PHP `sync` mode
     * (using queue to defer promises execution)
     *
     * Note:
     * Library users are not supposed to use SyncPromise class in their resolvers.
     * Instead they should use GraphQL\Deferred which enforces $executor callback in the constructor.
     *
     * Root SyncPromise without explicit $executor will never resolve (actually throw while trying).
     * The whole point of Deferred is to ensure it never happens and that any resolver creates
     * at least one $executor to start the promise chain.
     */
    class SyncPromise
    {
        const PENDING = 'pending';
        const FULFILLED = 'fulfilled';
        const REJECTED = 'rejected';
        /** @var SplQueue */
        public static $queue;
        /** @var string */
        public $state = self::PENDING;
        /** @var mixed */
        public $result;
        public static function runQueue() : void
        {
        }
        /**
         * @param callable() : mixed $executor
         */
        public function __construct(?callable $executor = null)
        {
        }
        public function resolve($value) : self
        {
        }
        public function reject($reason) : self
        {
        }
        public static function getQueue() : \SplQueue
        {
        }
        /**
         * @param callable(mixed) : mixed     $onFulfilled
         * @param callable(Throwable) : mixed $onRejected
         */
        public function then(?callable $onFulfilled = null, ?callable $onRejected = null) : self
        {
        }
        /**
         * @param callable(Throwable) : mixed $onRejected
         */
        public function catch(callable $onRejected) : self
        {
        }
    }
}
namespace GraphQL {
    class Deferred extends \GraphQL\Executor\Promise\Adapter\SyncPromise
    {
        /**
         * @param callable() : mixed $executor
         */
        public static function create(callable $executor) : self
        {
        }
        /**
         * @param callable() : mixed $executor
         */
        public function __construct(callable $executor)
        {
        }
    }
}
namespace GraphQL\Error {
    /**
     * This interface is used for [default error formatting](error-handling.md).
     *
     * Only errors implementing this interface (and returning true from `isClientSafe()`)
     * will be formatted with original error message.
     *
     * All other errors will be formatted with generic "Internal server error".
     */
    interface ClientAware
    {
        /**
         * Returns true when exception message is safe to be displayed to a client.
         *
         * @return bool
         *
         * @api
         */
        public function isClientSafe();
        /**
         * Returns string describing a category of the error.
         *
         * Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.
         *
         * @return string
         *
         * @api
         */
        public function getCategory();
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
     */
    class Error extends \Exception implements \JsonSerializable, \GraphQL\Error\ClientAware
    {
        const CATEGORY_GRAPHQL = 'graphql';
        const CATEGORY_INTERNAL = 'internal';
        /**
         * An array describing the JSON-path into the execution response which
         * corresponds to this error. Only included for errors during execution.
         *
         * @var mixed[]|null
         */
        public $path;
        /**
         * An array of GraphQL AST Nodes corresponding to this error.
         *
         * @var Node[]|null
         */
        public $nodes;
        /** @var string */
        protected $category;
        /** @var mixed[]|null */
        protected $extensions;
        /**
         * @param string                       $message
         * @param Node|Node[]|Traversable|null $nodes
         * @param mixed[]                      $positions
         * @param mixed[]|null                 $path
         * @param Throwable                    $previous
         * @param mixed[]                      $extensions
         */
        public function __construct($message = '', $nodes = null, ?\GraphQL\Language\Source $source = null, array $positions = [], $path = null, $previous = null, array $extensions = [])
        {
        }
        /**
         * Given an arbitrary Error, presumably thrown while attempting to execute a
         * GraphQL operation, produce a new GraphQLError aware of the location in the
         * document responsible for the original Error.
         *
         * @param mixed        $error
         * @param Node[]|null  $nodes
         * @param mixed[]|null $path
         *
         * @return Error
         */
        public static function createLocatedError($error, $nodes = null, $path = null)
        {
        }
        /**
         * @return mixed[]
         */
        public static function formatError(\GraphQL\Error\Error $error)
        {
        }
        /**
         * @inheritdoc
         */
        public function isClientSafe()
        {
        }
        /**
         * @inheritdoc
         */
        public function getCategory()
        {
        }
        public function getSource() : ?\GraphQL\Language\Source
        {
        }
        /**
         * @return int[]
         */
        public function getPositions() : array
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
         * @return SourceLocation[]
         *
         * @api
         */
        public function getLocations() : array
        {
        }
        /**
         * @return Node[]|null
         */
        public function getNodes()
        {
        }
        /**
         * Returns an array describing the path from the root value to the field which produced this error.
         * Only included for execution errors.
         *
         * @return mixed[]|null
         *
         * @api
         */
        public function getPath()
        {
        }
        /**
         * @return mixed[]
         */
        public function getExtensions()
        {
        }
        /**
         * Returns array representation of error suitable for serialization
         *
         * @deprecated Use FormattedError::createFromException() instead
         *
         * @return mixed[]
         *
         * @codeCoverageIgnore
         */
        public function toSerializableArray()
        {
        }
        /**
         * Specify data which should be serialized to JSON
         *
         * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
         *
         * @return mixed data which can be serialized by <b>json_encode</b>,
         * which is a value of any type other than a resource.
         */
        public function jsonSerialize()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
    }
    /**
     * This class is used for [default error formatting](error-handling.md).
     * It converts PHP exceptions to [spec-compliant errors](https://facebook.github.io/graphql/#sec-Errors)
     * and provides tools for error debugging.
     */
    class FormattedError
    {
        /**
         * Set default error message for internal errors formatted using createFormattedError().
         * This value can be overridden by passing 3rd argument to `createFormattedError()`.
         *
         * @param string $msg
         *
         * @api
         */
        public static function setInternalErrorMessage($msg)
        {
        }
        /**
         * Prints a GraphQLError to a string, representing useful location information
         * about the error's position in the source.
         *
         * @return string
         */
        public static function printError(\GraphQL\Error\Error $error)
        {
        }
        /**
         * Standard GraphQL error formatter. Converts any exception to array
         * conforming to GraphQL spec.
         *
         * This method only exposes exception message when exception implements ClientAware interface
         * (or when debug flags are passed).
         *
         * For a list of available debug flags @see \GraphQL\Error\DebugFlag constants.
         *
         * @param string $internalErrorMessage
         *
         * @return mixed[]
         *
         * @throws Throwable
         *
         * @api
         */
        public static function createFromException(\Throwable $exception, int $debug = \GraphQL\Error\DebugFlag::NONE, $internalErrorMessage = null) : array
        {
        }
        /**
         * Decorates spec-compliant $formattedError with debug entries according to $debug flags
         * (@see \GraphQL\Error\DebugFlag for available flags)
         *
         * @param mixed[] $formattedError
         *
         * @return mixed[]
         *
         * @throws Throwable
         */
        public static function addDebugEntries(array $formattedError, \Throwable $e, int $debugFlag) : array
        {
        }
        /**
         * Prepares final error formatter taking in account $debug flags.
         * If initial formatter is not set, FormattedError::createFromException is used
         */
        public static function prepareFormatter(?callable $formatter = null, int $debug) : callable
        {
        }
        /**
         * Returns error trace as serializable array
         *
         * @param Throwable $error
         *
         * @return mixed[]
         *
         * @api
         */
        public static function toSafeTrace($error)
        {
        }
        /**
         * @param mixed $var
         *
         * @return string
         */
        public static function printVar($var)
        {
        }
        /**
         * @deprecated as of v0.8.0
         *
         * @param string           $error
         * @param SourceLocation[] $locations
         *
         * @return mixed[]
         */
        public static function create($error, array $locations = [])
        {
        }
        /**
         * @deprecated as of v0.10.0, use general purpose method createFromException() instead
         *
         * @return mixed[]
         *
         * @codeCoverageIgnore
         */
        public static function createFromPHPError(\ErrorException $e)
        {
        }
    }
    /**
     * Note:
     * This exception should not inherit base Error exception as it is raised when there is an error somewhere in
     * user-land code
     */
    class InvariantViolation extends \LogicException
    {
        public static function shouldNotHappen() : self
        {
        }
    }
    class SyntaxError extends \GraphQL\Error\Error
    {
        /**
         * @param int    $position
         * @param string $description
         */
        public function __construct(\GraphQL\Language\Source $source, $position, $description)
        {
        }
    }
    /**
     * Error caused by actions of GraphQL clients. Can be safely displayed to a client...
     */
    class UserError extends \RuntimeException implements \GraphQL\Error\ClientAware
    {
        /**
         * @return bool
         */
        public function isClientSafe()
        {
        }
        /**
         * @return string
         */
        public function getCategory()
        {
        }
    }
    /**
     * Encapsulates warnings produced by the library.
     *
     * Warnings can be suppressed (individually or all) if required.
     * Also it is possible to override warning handler (which is **trigger_error()** by default)
     */
    final class Warning
    {
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
         * @api
         */
        public static function setWarningHandler(?callable $warningHandler = null) : void
        {
        }
        /**
         * Suppress warning by id (has no effect when custom warning handler is set)
         *
         * Usage example:
         * Warning::suppress(Warning::WARNING_NOT_A_TYPE)
         *
         * When passing true - suppresses all warnings.
         *
         * @param bool|int $suppress
         *
         * @api
         */
        public static function suppress($suppress = true) : void
        {
        }
        /**
         * Re-enable previously suppressed warning by id
         *
         * Usage example:
         * Warning::suppress(Warning::WARNING_NOT_A_TYPE)
         *
         * When passing true - re-enables all warnings.
         *
         * @param bool|int $enable
         *
         * @api
         */
        public static function enable($enable = true) : void
        {
        }
        public static function warnOnce(string $errorMessage, int $warningId, ?int $messageLevel = null) : void
        {
        }
        public static function warn(string $errorMessage, int $warningId, ?int $messageLevel = null) : void
        {
        }
    }
}
namespace GraphQL\Exception {
    final class InvalidArgument extends \InvalidArgumentException
    {
        /**
         * @param mixed $argument
         */
        public static function fromExpectedTypeAndArgument(string $expectedType, $argument) : self
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
     * @internal
     */
    class ExecutionContext
    {
        /** @var Schema */
        public $schema;
        /** @var FragmentDefinitionNode[] */
        public $fragments;
        /** @var mixed */
        public $rootValue;
        /** @var mixed */
        public $contextValue;
        /** @var OperationDefinitionNode */
        public $operation;
        /** @var mixed[] */
        public $variableValues;
        /** @var callable */
        public $fieldResolver;
        /** @var Error[] */
        public $errors;
        /** @var PromiseAdapter */
        public $promiseAdapter;
        public function __construct($schema, $fragments, $rootValue, $contextValue, $operation, $variableValues, $errors, $fieldResolver, $promiseAdapter)
        {
        }
        public function addError(\GraphQL\Error\Error $error)
        {
        }
    }
    /**
     * Returned after [query execution](executing-queries.md).
     * Represents both - result of successful execution and of a failed one
     * (with errors collected in `errors` prop)
     *
     * Could be converted to [spec-compliant](https://facebook.github.io/graphql/#sec-Response-Format)
     * serializable array using `toArray()`
     */
    class ExecutionResult implements \JsonSerializable
    {
        /**
         * Data collected from resolvers during query execution
         *
         * @api
         * @var mixed[]
         */
        public $data;
        /**
         * Errors registered during query execution.
         *
         * If an error was caused by exception thrown in resolver, $error->getPrevious() would
         * contain original exception.
         *
         * @api
         * @var Error[]
         */
        public $errors;
        /**
         * User-defined serializable array of extensions included in serialized result.
         * Conforms to
         *
         * @api
         * @var mixed[]
         */
        public $extensions;
        /**
         * @param mixed[] $data
         * @param Error[] $errors
         * @param mixed[] $extensions
         */
        public function __construct($data = null, array $errors = [], array $extensions = [])
        {
        }
        /**
         * Define custom error formatting (must conform to http://facebook.github.io/graphql/#sec-Errors)
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
         * @return self
         *
         * @api
         */
        public function setErrorFormatter(callable $errorFormatter)
        {
        }
        /**
         * Define custom logic for error handling (filtering, logging, etc).
         *
         * Expected handler signature is: function (array $errors, callable $formatter): array
         *
         * Default handler is:
         * function (array $errors, callable $formatter) {
         *     return array_map($formatter, $errors);
         * }
         *
         * @return self
         *
         * @api
         */
        public function setErrorsHandler(callable $handler)
        {
        }
        /**
         * @return mixed[]
         */
        public function jsonSerialize()
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
         * @return mixed[]
         *
         * @api
         */
        public function toArray(int $debug = \GraphQL\Error\DebugFlag::NONE) : array
        {
        }
    }
    /**
     * Implements the "Evaluating requests" section of the GraphQL specification.
     */
    class Executor
    {
        public static function getDefaultFieldResolver() : callable
        {
        }
        /**
         * Set a custom default resolve function.
         */
        public static function setDefaultFieldResolver(callable $fieldResolver)
        {
        }
        public static function getPromiseAdapter() : \GraphQL\Executor\Promise\PromiseAdapter
        {
        }
        /**
         * Set a custom default promise adapter.
         */
        public static function setPromiseAdapter(?\GraphQL\Executor\Promise\PromiseAdapter $defaultPromiseAdapter = null)
        {
        }
        public static function getImplementationFactory() : callable
        {
        }
        /**
         * Set a custom executor implementation factory.
         */
        public static function setImplementationFactory(callable $implementationFactory)
        {
        }
        /**
         * Executes DocumentNode against given $schema.
         *
         * Always returns ExecutionResult and never throws.
         * All errors which occur during operation execution are collected in `$result->errors`.
         *
         * @param mixed|null                    $rootValue
         * @param mixed|null                    $contextValue
         * @param array<mixed>|ArrayAccess|null $variableValues
         * @param string|null                   $operationName
         *
         * @return ExecutionResult|Promise
         *
         * @api
         */
        public static function execute(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue = null, $contextValue = null, $variableValues = null, $operationName = null, ?callable $fieldResolver = null)
        {
        }
        /**
         * Same as execute(), but requires promise adapter and returns a promise which is always
         * fulfilled with an instance of ExecutionResult and never rejected.
         *
         * Useful for async PHP platforms.
         *
         * @param mixed|null        $rootValue
         * @param mixed|null        $contextValue
         * @param array<mixed>|null $variableValues
         * @param string|null       $operationName
         *
         * @return Promise
         *
         * @api
         */
        public static function promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue = null, $contextValue = null, $variableValues = null, $operationName = null, ?callable $fieldResolver = null)
        {
        }
        /**
         * If a resolve function is not given, then a default resolve behavior is used
         * which takes the property of the root value of the same name as the field
         * and returns it as the result, or if it's a function, returns the result
         * of calling that function while passing along args and context.
         *
         * @param mixed                $objectValue
         * @param array<string, mixed> $args
         * @param mixed|null           $contextValue
         *
         * @return mixed|null
         */
        public static function defaultFieldResolver($objectValue, $args, $contextValue, \GraphQL\Type\Definition\ResolveInfo $info)
        {
        }
    }
    interface ExecutorImplementation
    {
        /**
         * Returns promise of {@link ExecutionResult}. Promise should always resolve, never reject.
         */
        public function doExecute() : \GraphQL\Executor\Promise\Promise;
    }
}
namespace GraphQL\Executor\Promise {
    /**
     * Provides a means for integration of async PHP platforms ([related docs](data-fetching.md#async-php))
     */
    interface PromiseAdapter
    {
        /**
         * Return true if the value is a promise or a deferred of the underlying platform
         *
         * @param mixed $value
         *
         * @return bool
         *
         * @api
         */
        public function isThenable($value);
        /**
         * Converts thenable of the underlying platform into GraphQL\Executor\Promise\Promise instance
         *
         * @param object $thenable
         *
         * @return Promise
         *
         * @api
         */
        public function convertThenable($thenable);
        /**
         * Accepts our Promise wrapper, extracts adopted promise out of it and executes actual `then` logic described
         * in Promises/A+ specs. Then returns new wrapped instance of GraphQL\Executor\Promise\Promise.
         *
         * @return Promise
         *
         * @api
         */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null);
        /**
         * Creates a Promise
         *
         * Expected resolver signature:
         *     function(callable $resolve, callable $reject)
         *
         * @return Promise
         *
         * @api
         */
        public function create(callable $resolver);
        /**
         * Creates a fulfilled Promise for a value if the value is not a promise.
         *
         * @param mixed $value
         *
         * @return Promise
         *
         * @api
         */
        public function createFulfilled($value = null);
        /**
         * Creates a rejected promise for a reason if the reason is not a promise. If
         * the provided reason is a promise, then it is returned as-is.
         *
         * @param Throwable $reason
         *
         * @return Promise
         *
         * @api
         */
        public function createRejected($reason);
        /**
         * Given an array of promises (or values), returns a promise that is fulfilled when all the
         * items in the array are fulfilled.
         *
         * @param Promise[]|mixed[] $promisesOrValues Promises or values.
         *
         * @return Promise
         *
         * @api
         */
        public function all(array $promisesOrValues);
    }
}
namespace GraphQL\Executor\Promise\Adapter {
    class AmpPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        /**
         * @inheritdoc
         */
        public function isThenable($value) : bool
        {
        }
        /**
         * @inheritdoc
         */
        public function convertThenable($thenable) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @inheritdoc
         */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @inheritdoc
         */
        public function create(callable $resolver) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @inheritdoc
         */
        public function createFulfilled($value = null) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @inheritdoc
         */
        public function createRejected($reason) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @inheritdoc
         */
        public function all(array $promisesOrValues) : \GraphQL\Executor\Promise\Promise
        {
        }
    }
    class ReactPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        /**
         * @inheritdoc
         */
        public function isThenable($value)
        {
        }
        /**
         * @inheritdoc
         */
        public function convertThenable($thenable)
        {
        }
        /**
         * @inheritdoc
         */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null)
        {
        }
        /**
         * @inheritdoc
         */
        public function create(callable $resolver)
        {
        }
        /**
         * @inheritdoc
         */
        public function createFulfilled($value = null)
        {
        }
        /**
         * @inheritdoc
         */
        public function createRejected($reason)
        {
        }
        /**
         * @inheritdoc
         */
        public function all(array $promisesOrValues)
        {
        }
    }
    /**
     * Allows changing order of field resolution even in sync environments
     * (by leveraging queue of deferreds and promises)
     */
    class SyncPromiseAdapter implements \GraphQL\Executor\Promise\PromiseAdapter
    {
        /**
         * @inheritdoc
         */
        public function isThenable($value)
        {
        }
        /**
         * @inheritdoc
         */
        public function convertThenable($thenable)
        {
        }
        /**
         * @inheritdoc
         */
        public function then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null)
        {
        }
        /**
         * @inheritdoc
         */
        public function create(callable $resolver)
        {
        }
        /**
         * @inheritdoc
         */
        public function createFulfilled($value = null)
        {
        }
        /**
         * @inheritdoc
         */
        public function createRejected($reason)
        {
        }
        /**
         * @inheritdoc
         */
        public function all(array $promisesOrValues)
        {
        }
        /**
         * Synchronously wait when promise completes
         *
         * @return ExecutionResult
         */
        public function wait(\GraphQL\Executor\Promise\Promise $promise)
        {
        }
        /**
         * Execute just before starting to run promise completion
         */
        protected function beforeWait(\GraphQL\Executor\Promise\Promise $promise)
        {
        }
        /**
         * Execute while running promise completion
         */
        protected function onWait(\GraphQL\Executor\Promise\Promise $promise)
        {
        }
    }
}
namespace GraphQL\Executor\Promise {
    /**
     * Convenience wrapper for promises represented by Promise Adapter
     */
    class Promise
    {
        /** @var SyncPromise|ReactPromise */
        public $adoptedPromise;
        /**
         * @param mixed $adoptedPromise
         */
        public function __construct($adoptedPromise, \GraphQL\Executor\Promise\PromiseAdapter $adapter)
        {
        }
        /**
         * @return Promise
         */
        public function then(?callable $onFulfilled = null, ?callable $onRejected = null)
        {
        }
    }
}
namespace GraphQL\Executor {
    class ReferenceExecutor implements \GraphQL\Executor\ExecutorImplementation
    {
        /**
         * @param mixed                    $rootValue
         * @param mixed                    $contextValue
         * @param array<mixed>|Traversable $variableValues
         */
        public static function create(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue, $contextValue, $variableValues, ?string $operationName, callable $fieldResolver) : \GraphQL\Executor\ExecutorImplementation
        {
        }
        public function doExecute() : \GraphQL\Executor\Promise\Promise
        {
        }
    }
    class Values
    {
        /**
         * Prepares an object map of variables of the correct type based on the provided
         * variable definitions and arbitrary input. If the input cannot be coerced
         * to match the variable definitions, a Error will be thrown.
         *
         * @param VariableDefinitionNode[] $varDefNodes
         * @param mixed[]                  $inputs
         *
         * @return mixed[]
         */
        public static function getVariableValues(\GraphQL\Type\Schema $schema, $varDefNodes, array $inputs)
        {
        }
        /**
         * Prepares an object map of argument values given a directive definition
         * and a AST node which may contain directives. Optionally also accepts a map
         * of variable values.
         *
         * If the directive does not exist on the node, returns undefined.
         *
         * @param FragmentSpreadNode|FieldNode|InlineFragmentNode|EnumValueDefinitionNode|FieldDefinitionNode $node
         * @param mixed[]|null                                                                                $variableValues
         *
         * @return mixed[]|null
         */
        public static function getDirectiveValues(\GraphQL\Type\Definition\Directive $directiveDef, $node, $variableValues = null)
        {
        }
        /**
         * Prepares an object map of argument values given a list of argument
         * definitions and list of argument AST nodes.
         *
         * @param FieldDefinition|Directive $def
         * @param FieldNode|DirectiveNode   $node
         * @param mixed[]                   $variableValues
         *
         * @return mixed[]
         *
         * @throws Error
         */
        public static function getArgumentValues($def, $node, $variableValues = null)
        {
        }
        /**
         * @param FieldDefinition|Directive $fieldDefinition
         * @param ArgumentNode[]            $argumentValueMap
         * @param mixed[]                   $variableValues
         * @param Node|null                 $referenceNode
         *
         * @return mixed[]
         *
         * @throws Error
         */
        public static function getArgumentValuesForMap($fieldDefinition, $argumentValueMap, $variableValues = null, $referenceNode = null)
        {
        }
        /**
         * @deprecated as of 8.0 (Moved to \GraphQL\Utils\AST::valueFromAST)
         *
         * @param VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode $valueNode
         * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull                                                                              $type
         * @param mixed[]|null                                                                                                                        $variables
         *
         * @return mixed[]|stdClass|null
         *
         * @codeCoverageIgnore
         */
        public static function valueFromAST(\GraphQL\Language\AST\ValueNode $valueNode, \GraphQL\Type\Definition\InputType $type, ?array $variables = null)
        {
        }
        /**
         * @deprecated as of 0.12 (Use coerceValue() directly for richer information)
         *
         * @param mixed[]                                                $value
         * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull $type
         *
         * @return string[]
         *
         * @codeCoverageIgnore
         */
        public static function isValidPHPValue($value, \GraphQL\Type\Definition\InputType $type)
        {
        }
    }
}
namespace GraphQL\Experimental\Executor {
    /**
     * @internal
     */
    class Collector
    {
        /** @var OperationDefinitionNode|null */
        public $operation = null;
        /** @var FragmentDefinitionNode[] */
        public $fragments = [];
        /** @var ObjectType|null */
        public $rootType;
        public function __construct(\GraphQL\Type\Schema $schema, \GraphQL\Experimental\Executor\Runtime $runtime)
        {
        }
        public function initialize(\GraphQL\Language\AST\DocumentNode $documentNode, ?string $operationName = null)
        {
        }
        /**
         * @return Generator
         */
        public function collectFields(\GraphQL\Type\Definition\ObjectType $runtimeType, ?\GraphQL\Language\AST\SelectionSetNode $selectionSet)
        {
        }
    }
    /**
     * @internal
     */
    class CoroutineContext
    {
        /** @var CoroutineContextShared */
        public $shared;
        /** @var ObjectType */
        public $type;
        /** @var mixed */
        public $value;
        /** @var object */
        public $result;
        /** @var string[] */
        public $path;
        /** @var ResolveInfo */
        public $resolveInfo;
        /** @var string[]|null */
        public $nullFence;
        /**
         * @param mixed         $value
         * @param object        $result
         * @param string[]      $path
         * @param string[]|null $nullFence
         */
        public function __construct(\GraphQL\Experimental\Executor\CoroutineContextShared $shared, \GraphQL\Type\Definition\ObjectType $type, $value, $result, array $path, ?array $nullFence = null)
        {
        }
    }
    /**
     * @internal
     */
    class CoroutineContextShared
    {
        /** @var FieldNode[] */
        public $fieldNodes;
        /** @var string */
        public $fieldName;
        /** @var string */
        public $resultName;
        /** @var ValueNode[]|null */
        public $argumentValueMap;
        /** @var SelectionSetNode|null */
        public $mergedSelectionSet;
        /** @var ObjectType|null */
        public $typeGuard1;
        /** @var callable|null */
        public $resolveIfType1;
        /** @var mixed */
        public $argumentsIfType1;
        /** @var ResolveInfo|null */
        public $resolveInfoIfType1;
        /** @var ObjectType|null */
        public $typeGuard2;
        /** @var CoroutineContext[]|null */
        public $childContextsIfType2;
        /**
         * @param FieldNode[]  $fieldNodes
         * @param mixed[]|null $argumentValueMap
         */
        public function __construct(array $fieldNodes, string $fieldName, string $resultName, ?array $argumentValueMap)
        {
        }
    }
    /**
     * @internal
     */
    interface Runtime
    {
        /**
         * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull $type
         */
        public function evaluate(\GraphQL\Language\AST\ValueNode $valueNode, \GraphQL\Type\Definition\InputType $type);
        public function addError($error);
    }
    class CoroutineExecutor implements \GraphQL\Experimental\Executor\Runtime, \GraphQL\Executor\ExecutorImplementation
    {
        public function __construct(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue, $contextValue, $rawVariableValues, ?string $operationName, callable $fieldResolver)
        {
        }
        public static function create(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, $rootValue, $contextValue, $variableValues, ?string $operationName, callable $fieldResolver)
        {
        }
        public function doExecute() : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @internal
         *
         * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull $type
         */
        public function evaluate(\GraphQL\Language\AST\ValueNode $valueNode, \GraphQL\Type\Definition\InputType $type)
        {
        }
        /**
         * @internal
         */
        public function addError($error)
        {
        }
    }
    /**
     * @internal
     */
    class Strand
    {
        /** @var Generator */
        public $current;
        /** @var Generator[] */
        public $stack;
        /** @var int */
        public $depth;
        /** @var bool|null */
        public $success;
        /** @var mixed */
        public $value;
        public function __construct(\Generator $coroutine)
        {
        }
    }
}
namespace GraphQL {
    /**
     * This is the primary facade for fulfilling GraphQL operations.
     * See [related documentation](executing-queries.md).
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
         * @param mixed               $rootValue
         * @param mixed               $contextValue
         * @param mixed[]|null        $variableValues
         * @param ValidationRule[]    $validationRules
         *
         * @api
         */
        public static function executeQuery(\GraphQL\Type\Schema $schema, $source, $rootValue = null, $contextValue = null, $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, ?array $validationRules = null) : \GraphQL\Executor\ExecutionResult
        {
        }
        /**
         * Same as executeQuery(), but requires PromiseAdapter and always returns a Promise.
         * Useful for Async PHP platforms.
         *
         * @param string|DocumentNode   $source
         * @param mixed                 $rootValue
         * @param mixed                 $context
         * @param mixed[]|null          $variableValues
         * @param ValidationRule[]|null $validationRules
         *
         * @api
         */
        public static function promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, $source, $rootValue = null, $context = null, $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, ?array $validationRules = null) : \GraphQL\Executor\Promise\Promise
        {
        }
        /**
         * @deprecated Use executeQuery()->toArray() instead
         *
         * @param string|DocumentNode $source
         * @param mixed               $rootValue
         * @param mixed               $contextValue
         * @param mixed[]|null        $variableValues
         *
         * @return Promise|mixed[]
         *
         * @codeCoverageIgnore
         */
        public static function execute(\GraphQL\Type\Schema $schema, $source, $rootValue = null, $contextValue = null, $variableValues = null, ?string $operationName = null)
        {
        }
        /**
         * @deprecated renamed to executeQuery()
         *
         * @param string|DocumentNode $source
         * @param mixed               $rootValue
         * @param mixed               $contextValue
         * @param mixed[]|null        $variableValues
         *
         * @return ExecutionResult|Promise
         *
         * @codeCoverageIgnore
         */
        public static function executeAndReturnResult(\GraphQL\Type\Schema $schema, $source, $rootValue = null, $contextValue = null, $variableValues = null, ?string $operationName = null)
        {
        }
        /**
         * Returns directives defined in GraphQL spec
         *
         * @return Directive[]
         *
         * @api
         */
        public static function getStandardDirectives() : array
        {
        }
        /**
         * Returns types defined in GraphQL spec
         *
         * @return Type[]
         *
         * @api
         */
        public static function getStandardTypes() : array
        {
        }
        /**
         * Replaces standard types with types from this list (matching by name)
         * Standard types not listed here remain untouched.
         *
         * @param array<string, ScalarType> $types
         *
         * @api
         */
        public static function overrideStandardTypes(array $types)
        {
        }
        /**
         * Returns standard validation rules implementing GraphQL spec
         *
         * @return ValidationRule[]
         *
         * @api
         */
        public static function getStandardValidationRules() : array
        {
        }
        /**
         * Set default resolver implementation
         *
         * @api
         */
        public static function setDefaultFieldResolver(callable $fn) : void
        {
        }
        public static function setPromiseAdapter(?\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter = null) : void
        {
        }
        /**
         * Experimental: Switch to the new executor
         */
        public static function useExperimentalExecutor()
        {
        }
        /**
         * Experimental: Switch back to the default executor
         */
        public static function useReferenceExecutor()
        {
        }
        /**
         * Returns directives defined in GraphQL spec
         *
         * @deprecated Renamed to getStandardDirectives
         *
         * @return Directive[]
         *
         * @codeCoverageIgnore
         */
        public static function getInternalDirectives() : array
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
     * | NonNullTypeNode
     */
    abstract class Node
    {
        /** @var Location|null */
        public $loc;
        /** @var string */
        public $kind;
        /**
         * @param (NameNode|NodeList|SelectionSetNode|Location|string|int|bool|float|null)[] $vars
         */
        public function __construct(array $vars)
        {
        }
        /**
         * @return self
         */
        public function cloneDeep()
        {
        }
        public function __toString() : string
        {
        }
        /**
         * @return mixed[]
         */
        public function toArray(bool $recursive = false) : array
        {
        }
    }
    class ArgumentNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::ARGUMENT;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode */
        public $value;
        /** @var NameNode */
        public $name;
    }
    /**
    export type ValueNode = VariableNode
    | NullValueNode
    | IntValueNode
    | FloatValueNode
    | StringValueNode
    | BooleanValueNode
    | EnumValueNode
    | ListValueNode
    | ObjectValueNode
    */
    interface ValueNode
    {
    }
    class BooleanValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::BOOLEAN;
        /** @var bool */
        public $value;
    }
    /**
     * export type DefinitionNode =
     *   | ExecutableDefinitionNode
     *   | TypeSystemDefinitionNode;
     */
    interface DefinitionNode
    {
    }
    /**
     * export type TypeSystemDefinitionNode =
     * | SchemaDefinitionNode
     * | TypeDefinitionNode
     * | TypeExtensionNode
     * | DirectiveDefinitionNode
     *
     * @property NameNode $name
     */
    interface TypeSystemDefinitionNode extends \GraphQL\Language\AST\DefinitionNode
    {
    }
    class DirectiveDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::DIRECTIVE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var StringValueNode|null */
        public $description;
        /** @var NodeList<InputValueDefinitionNode> */
        public $arguments;
        /** @var bool */
        public $repeatable;
        /** @var NodeList<NameNode> */
        public $locations;
    }
    class DirectiveNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::DIRECTIVE;
        /** @var NameNode */
        public $name;
        /** @var NodeList<ArgumentNode> */
        public $arguments;
    }
    class DocumentNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::DOCUMENT;
        /** @var NodeList<DefinitionNode&Node> */
        public $definitions;
    }
    /**
     * export type TypeDefinitionNode = ScalarTypeDefinitionNode
     * | ObjectTypeDefinitionNode
     * | InterfaceTypeDefinitionNode
     * | UnionTypeDefinitionNode
     * | EnumTypeDefinitionNode
     * | InputObjectTypeDefinitionNode
     */
    interface TypeDefinitionNode extends \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
    }
    class EnumTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::ENUM_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var NodeList<EnumValueDefinitionNode>|null */
        public $values;
        /** @var StringValueNode|null */
        public $description;
    }
    /**
     * export type TypeExtensionNode =
     * | ScalarTypeExtensionNode
     * | ObjectTypeExtensionNode
     * | InterfaceTypeExtensionNode
     * | UnionTypeExtensionNode
     * | EnumTypeExtensionNode
     * | InputObjectTypeExtensionNode;
     */
    interface TypeExtensionNode extends \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
    }
    class EnumTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::ENUM_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<EnumValueDefinitionNode>|null */
        public $values;
    }
    class EnumValueDefinitionNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::ENUM_VALUE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var StringValueNode|null */
        public $description;
    }
    class EnumValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::ENUM;
        /** @var string */
        public $value;
    }
    /**
     * export type ExecutableDefinitionNode =
     *   | OperationDefinitionNode
     *   | FragmentDefinitionNode;
     */
    interface ExecutableDefinitionNode extends \GraphQL\Language\AST\DefinitionNode
    {
    }
    class FieldDefinitionNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::FIELD_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<InputValueDefinitionNode> */
        public $arguments;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public $type;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var StringValueNode|null */
        public $description;
    }
    /**
     * export type SelectionNode = FieldNode | FragmentSpreadNode | InlineFragmentNode
     */
    interface SelectionNode
    {
    }
    class FieldNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::FIELD;
        /** @var NameNode */
        public $name;
        /** @var NameNode|null */
        public $alias;
        /** @var NodeList<ArgumentNode>|null */
        public $arguments;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var SelectionSetNode|null */
        public $selectionSet;
    }
    class FloatValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::FLOAT;
        /** @var string */
        public $value;
    }
    /**
     * export type DefinitionNode = OperationDefinitionNode
     *                        | FragmentDefinitionNode
     *
     * @property SelectionSetNode $selectionSet
     */
    interface HasSelectionSet
    {
    }
    class FragmentDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ExecutableDefinitionNode, \GraphQL\Language\AST\HasSelectionSet
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::FRAGMENT_DEFINITION;
        /** @var NameNode */
        public $name;
        /**
         * Note: fragment variable definitions are experimental and may be changed
         * or removed in the future.
         *
         * @var NodeList<VariableDefinitionNode>
         */
        public $variableDefinitions;
        /** @var NamedTypeNode */
        public $typeCondition;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var SelectionSetNode */
        public $selectionSet;
    }
    class FragmentSpreadNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::FRAGMENT_SPREAD;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode> */
        public $directives;
    }
    class InlineFragmentNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\SelectionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INLINE_FRAGMENT;
        /** @var NamedTypeNode */
        public $typeCondition;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var SelectionSetNode */
        public $selectionSet;
    }
    class InputObjectTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<InputValueDefinitionNode>|null */
        public $fields;
        /** @var StringValueNode|null */
        public $description;
    }
    class InputObjectTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<InputValueDefinitionNode>|null */
        public $fields;
    }
    class InputValueDefinitionNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INPUT_VALUE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public $type;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
        public $defaultValue;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var StringValueNode|null */
        public $description;
    }
    class IntValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INT;
        /** @var string */
        public $value;
    }
    class InterfaceTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<FieldDefinitionNode>|null */
        public $fields;
        /** @var StringValueNode|null */
        public $description;
    }
    class InterfaceTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<FieldDefinitionNode>|null */
        public $fields;
    }
    /**
     * export type TypeNode = NamedTypeNode
     * | ListTypeNode
     * | NonNullTypeNode
     */
    interface TypeNode
    {
    }
    class ListTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::LIST_TYPE;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public $type;
    }
    class ListValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::LST;
        /** @var NodeList<ValueNode&Node> */
        public $values;
    }
    /**
     * Contains a range of UTF-8 character offsets and token references that
     * identify the region of the source from which the AST derived.
     */
    class Location
    {
        /**
         * The character offset at which this Node begins.
         *
         * @var int
         */
        public $start;
        /**
         * The character offset at which this Node ends.
         *
         * @var int
         */
        public $end;
        /**
         * The Token at which this Node begins.
         *
         * @var Token
         */
        public $startToken;
        /**
         * The Token at which this Node ends.
         *
         * @var Token
         */
        public $endToken;
        /**
         * The Source document the AST represents.
         *
         * @var Source|null
         */
        public $source;
        /**
         * @param int $start
         * @param int $end
         *
         * @return static
         */
        public static function create($start, $end)
        {
        }
        public function __construct(?\GraphQL\Language\Token $startToken = null, ?\GraphQL\Language\Token $endToken = null, ?\GraphQL\Language\Source $source = null)
        {
        }
    }
    class NameNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::NAME;
        /** @var string */
        public $value;
    }
    class NamedTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::NAMED_TYPE;
        /** @var NameNode */
        public $name;
    }
    class NodeKind
    {
        // constants from language/kinds.js:
        const NAME = 'Name';
        // Document
        const DOCUMENT = 'Document';
        const OPERATION_DEFINITION = 'OperationDefinition';
        const VARIABLE_DEFINITION = 'VariableDefinition';
        const VARIABLE = 'Variable';
        const SELECTION_SET = 'SelectionSet';
        const FIELD = 'Field';
        const ARGUMENT = 'Argument';
        // Fragments
        const FRAGMENT_SPREAD = 'FragmentSpread';
        const INLINE_FRAGMENT = 'InlineFragment';
        const FRAGMENT_DEFINITION = 'FragmentDefinition';
        // Values
        const INT = 'IntValue';
        const FLOAT = 'FloatValue';
        const STRING = 'StringValue';
        const BOOLEAN = 'BooleanValue';
        const ENUM = 'EnumValue';
        const NULL = 'NullValue';
        const LST = 'ListValue';
        const OBJECT = 'ObjectValue';
        const OBJECT_FIELD = 'ObjectField';
        // Directives
        const DIRECTIVE = 'Directive';
        // Types
        const NAMED_TYPE = 'NamedType';
        const LIST_TYPE = 'ListType';
        const NON_NULL_TYPE = 'NonNullType';
        // Type System Definitions
        const SCHEMA_DEFINITION = 'SchemaDefinition';
        const OPERATION_TYPE_DEFINITION = 'OperationTypeDefinition';
        // Type Definitions
        const SCALAR_TYPE_DEFINITION = 'ScalarTypeDefinition';
        const OBJECT_TYPE_DEFINITION = 'ObjectTypeDefinition';
        const FIELD_DEFINITION = 'FieldDefinition';
        const INPUT_VALUE_DEFINITION = 'InputValueDefinition';
        const INTERFACE_TYPE_DEFINITION = 'InterfaceTypeDefinition';
        const UNION_TYPE_DEFINITION = 'UnionTypeDefinition';
        const ENUM_TYPE_DEFINITION = 'EnumTypeDefinition';
        const ENUM_VALUE_DEFINITION = 'EnumValueDefinition';
        const INPUT_OBJECT_TYPE_DEFINITION = 'InputObjectTypeDefinition';
        // Type Extensions
        const SCALAR_TYPE_EXTENSION = 'ScalarTypeExtension';
        const OBJECT_TYPE_EXTENSION = 'ObjectTypeExtension';
        const INTERFACE_TYPE_EXTENSION = 'InterfaceTypeExtension';
        const UNION_TYPE_EXTENSION = 'UnionTypeExtension';
        const ENUM_TYPE_EXTENSION = 'EnumTypeExtension';
        const INPUT_OBJECT_TYPE_EXTENSION = 'InputObjectTypeExtension';
        // Directive Definitions
        const DIRECTIVE_DEFINITION = 'DirectiveDefinition';
        // Type System Extensions
        const SCHEMA_EXTENSION = 'SchemaExtension';
        /** @var string[] */
        public static $classMap = [
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
     * @phpstan-implements ArrayAccess<int|string, T>
     * @phpstan-implements IteratorAggregate<T>
     */
    class NodeList implements \ArrayAccess, \IteratorAggregate, \Countable
    {
        /**
         * @param Node[] $nodes
         *
         * @phpstan-param array<T> $nodes
         * @phpstan-return self<T>
         */
        public static function create(array $nodes) : self
        {
        }
        /**
         * @param Node[] $nodes
         *
         * @phpstan-param array<T> $nodes
         */
        public function __construct(array $nodes)
        {
        }
        /**
         * @param int|string $offset
         */
        public function offsetExists($offset) : bool
        {
        }
        /**
         * TODO enable strict typing by changing how the Visitor deals with NodeList.
         * Ideally, this function should always return a Node instance.
         * However, the Visitor currently allows mutation of the NodeList
         * and puts arbitrary values in the NodeList, such as strings.
         * We will have to switch to using an array or a less strict
         * type instead so we can enable strict typing in this class.
         *
         * @param int|string $offset
         *
         * @phpstan-return T
         */
        public function offsetGet($offset)
        {
        }
        /**
         * @param int|string|null $offset
         * @param Node|mixed[]    $value
         *
         * @phpstan-param T|mixed[] $value
         */
        public function offsetSet($offset, $value) : void
        {
        }
        /**
         * @param int|string $offset
         */
        public function offsetUnset($offset) : void
        {
        }
        /**
         * @param mixed $replacement
         *
         * @phpstan-return NodeList<T>
         */
        public function splice(int $offset, int $length, $replacement = null) : \GraphQL\Language\AST\NodeList
        {
        }
        /**
         * @param NodeList|Node[] $list
         *
         * @phpstan-param NodeList<T>|array<T> $list
         * @phpstan-return NodeList<T>
         */
        public function merge($list) : \GraphQL\Language\AST\NodeList
        {
        }
        public function getIterator() : \Traversable
        {
        }
        public function count() : int
        {
        }
    }
    class NonNullTypeNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::NON_NULL_TYPE;
        /** @var NamedTypeNode|ListTypeNode */
        public $type;
    }
    class NullValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::NULL;
    }
    class ObjectFieldNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OBJECT_FIELD;
        /** @var NameNode */
        public $name;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode */
        public $value;
    }
    class ObjectTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<NamedTypeNode> */
        public $interfaces;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var NodeList<FieldDefinitionNode>|null */
        public $fields;
        /** @var StringValueNode|null */
        public $description;
    }
    class ObjectTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<NamedTypeNode> */
        public $interfaces;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var NodeList<FieldDefinitionNode> */
        public $fields;
    }
    class ObjectValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OBJECT;
        /** @var NodeList<ObjectFieldNode> */
        public $fields;
    }
    class OperationDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ExecutableDefinitionNode, \GraphQL\Language\AST\HasSelectionSet
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OPERATION_DEFINITION;
        /** @var NameNode|null */
        public $name;
        /** @var string (oneOf 'query', 'mutation', 'subscription')) */
        public $operation;
        /** @var NodeList<VariableDefinitionNode> */
        public $variableDefinitions;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var SelectionSetNode */
        public $selectionSet;
    }
    class OperationTypeDefinitionNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::OPERATION_TYPE_DEFINITION;
        /**
         * One of 'query' | 'mutation' | 'subscription'
         *
         * @var string
         */
        public $operation;
        /** @var NamedTypeNode */
        public $type;
    }
    class ScalarTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var StringValueNode|null */
        public $description;
    }
    class ScalarTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
    }
    class SchemaDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeSystemDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::SCHEMA_DEFINITION;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var NodeList<OperationTypeDefinitionNode> */
        public $operationTypes;
    }
    class SchemaTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::SCHEMA_EXTENSION;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<OperationTypeDefinitionNode>|null */
        public $operationTypes;
    }
    class SelectionSetNode extends \GraphQL\Language\AST\Node
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::SELECTION_SET;
        /** @var NodeList<SelectionNode&Node> */
        public $selections;
    }
    class StringValueNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::STRING;
        /** @var string */
        public $value;
        /** @var bool|null */
        public $block;
    }
    class UnionTypeDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeDefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::UNION_TYPE_DEFINITION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode> */
        public $directives;
        /** @var NodeList<NamedTypeNode>|null */
        public $types;
        /** @var StringValueNode|null */
        public $description;
    }
    class UnionTypeExtensionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\TypeExtensionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::UNION_TYPE_EXTENSION;
        /** @var NameNode */
        public $name;
        /** @var NodeList<DirectiveNode>|null */
        public $directives;
        /** @var NodeList<NamedTypeNode>|null */
        public $types;
    }
    class VariableDefinitionNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\DefinitionNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::VARIABLE_DEFINITION;
        /** @var VariableNode */
        public $variable;
        /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
        public $type;
        /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
        public $defaultValue;
        /** @var NodeList<DirectiveNode> */
        public $directives;
    }
    class VariableNode extends \GraphQL\Language\AST\Node implements \GraphQL\Language\AST\ValueNode
    {
        /** @var string */
        public $kind = \GraphQL\Language\AST\NodeKind::VARIABLE;
        /** @var NameNode */
        public $name;
    }
}
namespace GraphQL\Language {
    /**
     * List of available directive locations
     */
    class DirectiveLocation
    {
        // Request Definitions
        const QUERY = 'QUERY';
        const MUTATION = 'MUTATION';
        const SUBSCRIPTION = 'SUBSCRIPTION';
        const FIELD = 'FIELD';
        const FRAGMENT_DEFINITION = 'FRAGMENT_DEFINITION';
        const FRAGMENT_SPREAD = 'FRAGMENT_SPREAD';
        const INLINE_FRAGMENT = 'INLINE_FRAGMENT';
        const VARIABLE_DEFINITION = 'VARIABLE_DEFINITION';
        // Type System Definitions
        const SCHEMA = 'SCHEMA';
        const SCALAR = 'SCALAR';
        const OBJECT = 'OBJECT';
        const FIELD_DEFINITION = 'FIELD_DEFINITION';
        const ARGUMENT_DEFINITION = 'ARGUMENT_DEFINITION';
        const IFACE = 'INTERFACE';
        const UNION = 'UNION';
        const ENUM = 'ENUM';
        const ENUM_VALUE = 'ENUM_VALUE';
        const INPUT_OBJECT = 'INPUT_OBJECT';
        const INPUT_FIELD_DEFINITION = 'INPUT_FIELD_DEFINITION';
        public static function has(string $name) : bool
        {
        }
    }
    /**
     * A Lexer is a stateful stream generator in that every time
     * it is advanced, it returns the next token in the Source. Assuming the
     * source lexes, the final Token emitted by the lexer will be of kind
     * EOF, after which the lexer will repeatedly return the same EOF token
     * whenever called.
     *
     * Algorithm is O(N) both on memory and time
     */
    class Lexer
    {
        /** @var Source */
        public $source;
        /** @var bool[] */
        public $options;
        /**
         * The previously focused non-ignored token.
         *
         * @var Token
         */
        public $lastToken;
        /**
         * The currently focused non-ignored token.
         *
         * @var Token
         */
        public $token;
        /**
         * The (1-indexed) line containing the current token.
         *
         * @var int
         */
        public $line;
        /**
         * The character offset at which the current line begins.
         *
         * @var int
         */
        public $lineStart;
        /**
         * @param bool[] $options
         */
        public function __construct(\GraphQL\Language\Source $source, array $options = [])
        {
        }
        /**
         * @return Token
         */
        public function advance()
        {
        }
        public function lookahead()
        {
        }
    }
    /**
     * Parses string containing GraphQL query or [type definition](type-system/type-language.md) to Abstract Syntax Tree.
     *
     * Those magic functions allow partial parsing:
     *
     * @method static NameNode name(Source|string $source, bool[] $options = [])
     * @method static DocumentNode document(Source|string $source, bool[] $options = [])
     * @method static ExecutableDefinitionNode|TypeSystemDefinitionNode definition(Source|string $source, bool[] $options = [])
     * @method static ExecutableDefinitionNode executableDefinition(Source|string $source, bool[] $options = [])
     * @method static OperationDefinitionNode operationDefinition(Source|string $source, bool[] $options = [])
     * @method static string operationType(Source|string $source, bool[] $options = [])
     * @method static NodeList<VariableDefinitionNode> variableDefinitions(Source|string $source, bool[] $options = [])
     * @method static VariableDefinitionNode variableDefinition(Source|string $source, bool[] $options = [])
     * @method static VariableNode variable(Source|string $source, bool[] $options = [])
     * @method static SelectionSetNode selectionSet(Source|string $source, bool[] $options = [])
     * @method static mixed selection(Source|string $source, bool[] $options = [])
     * @method static FieldNode field(Source|string $source, bool[] $options = [])
     * @method static NodeList<ArgumentNode> arguments(Source|string $source, bool[] $options = [])
     * @method static NodeList<ArgumentNode> constArguments(Source|string $source, bool[] $options = [])
     * @method static ArgumentNode argument(Source|string $source, bool[] $options = [])
     * @method static ArgumentNode constArgument(Source|string $source, bool[] $options = [])
     * @method static FragmentSpreadNode|InlineFragmentNode fragment(Source|string $source, bool[] $options = [])
     * @method static FragmentDefinitionNode fragmentDefinition(Source|string $source, bool[] $options = [])
     * @method static NameNode fragmentName(Source|string $source, bool[] $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|NullValueNode|ObjectValueNode|StringValueNode|VariableNode valueLiteral(Source|string $source, bool[] $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|NullValueNode|ObjectValueNode|StringValueNode constValueLiteral(Source|string $source, bool[] $options = [])
     * @method static StringValueNode stringLiteral(Source|string $source, bool[] $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|StringValueNode constValue(Source|string $source, bool[] $options = [])
     * @method static BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|ObjectValueNode|StringValueNode|VariableNode variableValue(Source|string $source, bool[] $options = [])
     * @method static ListValueNode array(Source|string $source, bool[] $options = [])
     * @method static ListValueNode constArray(Source|string $source, bool[] $options = [])
     * @method static ObjectValueNode object(Source|string $source, bool[] $options = [])
     * @method static ObjectValueNode constObject(Source|string $source, bool[] $options = [])
     * @method static ObjectFieldNode objectField(Source|string $source, bool[] $options = [])
     * @method static ObjectFieldNode constObjectField(Source|string $source, bool[] $options = [])
     * @method static NodeList<DirectiveNode> directives(Source|string $source, bool[] $options = [])
     * @method static NodeList<DirectiveNode> constDirectives(Source|string $source, bool[] $options = [])
     * @method static DirectiveNode directive(Source|string $source, bool[] $options = [])
     * @method static DirectiveNode constDirective(Source|string $source, bool[] $options = [])
     * @method static ListTypeNode|NamedTypeNode|NonNullTypeNode typeReference(Source|string $source, bool[] $options = [])
     * @method static NamedTypeNode namedType(Source|string $source, bool[] $options = [])
     * @method static TypeSystemDefinitionNode typeSystemDefinition(Source|string $source, bool[] $options = [])
     * @method static StringValueNode|null description(Source|string $source, bool[] $options = [])
     * @method static SchemaDefinitionNode schemaDefinition(Source|string $source, bool[] $options = [])
     * @method static OperationTypeDefinitionNode operationTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static ScalarTypeDefinitionNode scalarTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static ObjectTypeDefinitionNode objectTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<NamedTypeNode> implementsInterfaces(Source|string $source, bool[] $options = [])
     * @method static NodeList<FieldDefinitionNode> fieldsDefinition(Source|string $source, bool[] $options = [])
     * @method static FieldDefinitionNode fieldDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<InputValueDefinitionNode> argumentsDefinition(Source|string $source, bool[] $options = [])
     * @method static InputValueDefinitionNode inputValueDefinition(Source|string $source, bool[] $options = [])
     * @method static InterfaceTypeDefinitionNode interfaceTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static UnionTypeDefinitionNode unionTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<NamedTypeNode> unionMemberTypes(Source|string $source, bool[] $options = [])
     * @method static EnumTypeDefinitionNode enumTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<EnumValueDefinitionNode> enumValuesDefinition(Source|string $source, bool[] $options = [])
     * @method static EnumValueDefinitionNode enumValueDefinition(Source|string $source, bool[] $options = [])
     * @method static InputObjectTypeDefinitionNode inputObjectTypeDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<InputValueDefinitionNode> inputFieldsDefinition(Source|string $source, bool[] $options = [])
     * @method static TypeExtensionNode typeExtension(Source|string $source, bool[] $options = [])
     * @method static SchemaTypeExtensionNode schemaTypeExtension(Source|string $source, bool[] $options = [])
     * @method static ScalarTypeExtensionNode scalarTypeExtension(Source|string $source, bool[] $options = [])
     * @method static ObjectTypeExtensionNode objectTypeExtension(Source|string $source, bool[] $options = [])
     * @method static InterfaceTypeExtensionNode interfaceTypeExtension(Source|string $source, bool[] $options = [])
     * @method static UnionTypeExtensionNode unionTypeExtension(Source|string $source, bool[] $options = [])
     * @method static EnumTypeExtensionNode enumTypeExtension(Source|string $source, bool[] $options = [])
     * @method static InputObjectTypeExtensionNode inputObjectTypeExtension(Source|string $source, bool[] $options = [])
     * @method static DirectiveDefinitionNode directiveDefinition(Source|string $source, bool[] $options = [])
     * @method static NodeList<NameNode> directiveLocations(Source|string $source, bool[] $options = [])
     * @method static NameNode directiveLocation(Source|string $source, bool[] $options = [])
     */
    class Parser
    {
        /**
         * Given a GraphQL source, parses it into a `GraphQL\Language\AST\DocumentNode`.
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * Available options:
         *
         * noLocation: boolean,
         *   (By default, the parser creates AST nodes that know the location
         *   in the source that they correspond to. This configuration flag
         *   disables that behavior for performance or testing.)
         *
         * allowLegacySDLEmptyFields: boolean
         *   If enabled, the parser will parse empty fields sets in the Schema
         *   Definition Language. Otherwise, the parser will follow the current
         *   specification.
         *
         *   This option is provided to ease adoption of the final SDL specification
         *   and will be removed in a future major release.
         *
         * allowLegacySDLImplementsInterfaces: boolean
         *   If enabled, the parser will parse implemented interfaces with no `&`
         *   character between each interface. Otherwise, the parser will follow the
         *   current specification.
         *
         *   This option is provided to ease adoption of the final SDL specification
         *   and will be removed in a future major release.
         *
         * experimentalFragmentVariables: boolean,
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
         *
         * @param Source|string $source
         * @param bool[]        $options
         *
         * @return DocumentNode
         *
         * @throws SyntaxError
         *
         * @api
         */
        public static function parse($source, array $options = [])
        {
        }
        /**
         * Given a string containing a GraphQL value (ex. `[42]`), parse the AST for
         * that value.
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * This is useful within tools that operate upon GraphQL Values directly and
         * in isolation of complete GraphQL documents.
         *
         * Consider providing the results to the utility function: `GraphQL\Utils\AST::valueFromAST()`.
         *
         * @param Source|string $source
         * @param bool[]        $options
         *
         * @return BooleanValueNode|EnumValueNode|FloatValueNode|IntValueNode|ListValueNode|ObjectValueNode|StringValueNode|VariableNode
         *
         * @api
         */
        public static function parseValue($source, array $options = [])
        {
        }
        /**
         * Given a string containing a GraphQL Type (ex. `[Int!]`), parse the AST for
         * that type.
         * Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.
         *
         * This is useful within tools that operate upon GraphQL Types directly and
         * in isolation of complete GraphQL documents.
         *
         * Consider providing the results to the utility function: `GraphQL\Utils\AST::typeFromAST()`.
         *
         * @param Source|string $source
         * @param bool[]        $options
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
         * @param bool[] $arguments
         *
         * @throws SyntaxError
         */
        public static function __callStatic(string $name, array $arguments)
        {
        }
        /**
         * @param Source|string $source
         * @param bool[]        $options
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
     */
    class Printer
    {
        /**
         * Prints AST to string. Capable of printing GraphQL queries and Type definition language.
         *
         * @param Node $ast
         *
         * @return string
         *
         * @api
         */
        public static function doPrint($ast)
        {
        }
        protected function __construct()
        {
        }
        /**
         * Traverse an AST bottom-up, converting all nodes to strings.
         *
         * That means the AST is manipulated in such a way that it no longer
         * resembles the well-formed result of parsing.
         */
        public function printAST($ast)
        {
        }
        public function addDescription(callable $cb)
        {
        }
        /**
         * If maybeString is not null or empty, then wrap with start and end, otherwise
         * print an empty string.
         */
        public function wrap($start, $maybeString, $end = '')
        {
        }
        /**
         * Given array, print each item on its own line, wrapped in an
         * indented "{ }" block.
         */
        public function block($array)
        {
        }
        public function indent($maybeString)
        {
        }
        public function manyList($start, $list, $separator, $end)
        {
        }
        public function length($maybeArray)
        {
        }
        public function join($maybeArray, $separator = '') : string
        {
        }
    }
    class Source
    {
        /** @var string */
        public $body;
        /** @var int */
        public $length;
        /** @var string */
        public $name;
        /** @var SourceLocation */
        public $locationOffset;
        /**
         * A representation of source input to GraphQL.
         * `name` and `locationOffset` are optional. They are useful for clients who
         * store GraphQL documents in source files; for example, if the GraphQL input
         * starts at line 40 in a file named Foo.graphql, it might be useful for name to
         * be "Foo.graphql" and location to be `{ line: 40, column: 0 }`.
         * line and column in locationOffset are 1-indexed
         *
         * @param string      $body
         * @param string|null $name
         */
        public function __construct($body, $name = null, ?\GraphQL\Language\SourceLocation $location = null)
        {
        }
        /**
         * @param int $position
         *
         * @return SourceLocation
         */
        public function getLocation($position)
        {
        }
    }
    class SourceLocation implements \JsonSerializable
    {
        /** @var int */
        public $line;
        /** @var int */
        public $column;
        /**
         * @param int $line
         * @param int $col
         */
        public function __construct($line, $col)
        {
        }
        /**
         * @return int[]
         */
        public function toArray()
        {
        }
        /**
         * @return int[]
         */
        public function toSerializableArray()
        {
        }
        /**
         * @return int[]
         */
        public function jsonSerialize()
        {
        }
    }
    /**
     * Represents a range of characters represented by a lexical token
     * within a Source.
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
        /**
         * The kind of Token (see one of constants above).
         *
         * @var string
         */
        public $kind;
        /**
         * The character offset at which this Node begins.
         *
         * @var int
         */
        public $start;
        /**
         * The character offset at which this Node ends.
         *
         * @var int
         */
        public $end;
        /**
         * The 1-indexed line number on which this Token appears.
         *
         * @var int
         */
        public $line;
        /**
         * The 1-indexed column number at which this Token begins.
         *
         * @var int
         */
        public $column;
        /** @var string|null */
        public $value;
        /**
         * Tokens exist as nodes in a double-linked-list amongst all tokens
         * including ignored tokens. <SOF> is always the first node and <EOF>
         * the last.
         *
         * @var Token
         */
        public $prev;
        /** @var Token|null */
        public $next;
        /**
         * @param mixed $value
         */
        public function __construct(string $kind, int $start, int $end, int $line, int $column, ?\GraphQL\Language\Token $previous = null, $value = null)
        {
        }
        public function getDescription() : string
        {
        }
        /**
         * @return (string|int|null)[]
         */
        public function toArray() : array
        {
        }
    }
    /**
     * Utility for efficient AST traversal and modification.
     *
     * `visit()` will walk through an AST using a depth first traversal, calling
     * the visitor's enter function at each node in the traversal, and calling the
     * leave function after visiting that node and all of it's child nodes.
     *
     * By returning different values from the enter and leave functions, the
     * behavior of the visitor can be altered, including skipping over a sub-tree of
     * the AST (by returning false), editing the AST by returning a value or null
     * to remove the value, or to stop the whole traversal by returning BREAK.
     *
     * When using `visit()` to edit an AST, the original AST will not be modified, and
     * a new version of the AST with the changes applied will be returned from the
     * visit function.
     *
     *     $editedAST = Visitor::visit($ast, [
     *       'enter' => function ($node, $key, $parent, $path, $ancestors) {
     *         // return
     *         //   null: no action
     *         //   Visitor::skipNode(): skip visiting this node
     *         //   Visitor::stop(): stop visiting altogether
     *         //   Visitor::removeNode(): delete this node
     *         //   any value: replace this node with the returned value
     *       },
     *       'leave' => function ($node, $key, $parent, $path, $ancestors) {
     *         // return
     *         //   null: no action
     *         //   Visitor::stop(): stop visiting altogether
     *         //   Visitor::removeNode(): delete this node
     *         //   any value: replace this node with the returned value
     *       }
     *     ]);
     *
     * Alternatively to providing enter() and leave() functions, a visitor can
     * instead provide functions named the same as the [kinds of AST nodes](reference.md#graphqllanguageastnodekind),
     * or enter/leave visitors at a named key, leading to four permutations of
     * visitor API:
     *
     * 1) Named visitors triggered when entering a node a specific kind.
     *
     *     Visitor::visit($ast, [
     *       'Kind' => function ($node) {
     *         // enter the "Kind" node
     *       }
     *     ]);
     *
     * 2) Named visitors that trigger upon entering and leaving a node of
     *    a specific kind.
     *
     *     Visitor::visit($ast, [
     *       'Kind' => [
     *         'enter' => function ($node) {
     *           // enter the "Kind" node
     *         }
     *         'leave' => function ($node) {
     *           // leave the "Kind" node
     *         }
     *       ]
     *     ]);
     *
     * 3) Generic visitors that trigger upon entering and leaving any node.
     *
     *     Visitor::visit($ast, [
     *       'enter' => function ($node) {
     *         // enter any node
     *       },
     *       'leave' => function ($node) {
     *         // leave any node
     *       }
     *     ]);
     *
     * 4) Parallel visitors for entering and leaving nodes of a specific kind.
     *
     *     Visitor::visit($ast, [
     *       'enter' => [
     *         'Kind' => function($node) {
     *           // enter the "Kind" node
     *         }
     *       },
     *       'leave' => [
     *         'Kind' => function ($node) {
     *           // leave the "Kind" node
     *         }
     *       ]
     *     ]);
     */
    class Visitor
    {
        /** @var string[][] */
        public static $visitorKeys = [\GraphQL\Language\AST\NodeKind::NAME => [], \GraphQL\Language\AST\NodeKind::DOCUMENT => ['definitions'], \GraphQL\Language\AST\NodeKind::OPERATION_DEFINITION => ['name', 'variableDefinitions', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::VARIABLE_DEFINITION => ['variable', 'type', 'defaultValue', 'directives'], \GraphQL\Language\AST\NodeKind::VARIABLE => ['name'], \GraphQL\Language\AST\NodeKind::SELECTION_SET => ['selections'], \GraphQL\Language\AST\NodeKind::FIELD => ['alias', 'name', 'arguments', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::ARGUMENT => ['name', 'value'], \GraphQL\Language\AST\NodeKind::FRAGMENT_SPREAD => ['name', 'directives'], \GraphQL\Language\AST\NodeKind::INLINE_FRAGMENT => ['typeCondition', 'directives', 'selectionSet'], \GraphQL\Language\AST\NodeKind::FRAGMENT_DEFINITION => [
            'name',
            // Note: fragment variable definitions are experimental and may be changed
            // or removed in the future.
            'variableDefinitions',
            'typeCondition',
            'directives',
            'selectionSet',
        ], \GraphQL\Language\AST\NodeKind::INT => [], \GraphQL\Language\AST\NodeKind::FLOAT => [], \GraphQL\Language\AST\NodeKind::STRING => [], \GraphQL\Language\AST\NodeKind::BOOLEAN => [], \GraphQL\Language\AST\NodeKind::NULL => [], \GraphQL\Language\AST\NodeKind::ENUM => [], \GraphQL\Language\AST\NodeKind::LST => ['values'], \GraphQL\Language\AST\NodeKind::OBJECT => ['fields'], \GraphQL\Language\AST\NodeKind::OBJECT_FIELD => ['name', 'value'], \GraphQL\Language\AST\NodeKind::DIRECTIVE => ['name', 'arguments'], \GraphQL\Language\AST\NodeKind::NAMED_TYPE => ['name'], \GraphQL\Language\AST\NodeKind::LIST_TYPE => ['type'], \GraphQL\Language\AST\NodeKind::NON_NULL_TYPE => ['type'], \GraphQL\Language\AST\NodeKind::SCHEMA_DEFINITION => ['directives', 'operationTypes'], \GraphQL\Language\AST\NodeKind::OPERATION_TYPE_DEFINITION => ['type'], \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_DEFINITION => ['description', 'name', 'directives'], \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_DEFINITION => ['description', 'name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::FIELD_DEFINITION => ['description', 'name', 'arguments', 'type', 'directives'], \GraphQL\Language\AST\NodeKind::INPUT_VALUE_DEFINITION => ['description', 'name', 'type', 'defaultValue', 'directives'], \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_DEFINITION => ['description', 'name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::UNION_TYPE_DEFINITION => ['description', 'name', 'directives', 'types'], \GraphQL\Language\AST\NodeKind::ENUM_TYPE_DEFINITION => ['description', 'name', 'directives', 'values'], \GraphQL\Language\AST\NodeKind::ENUM_VALUE_DEFINITION => ['description', 'name', 'directives'], \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_DEFINITION => ['description', 'name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::SCALAR_TYPE_EXTENSION => ['name', 'directives'], \GraphQL\Language\AST\NodeKind::OBJECT_TYPE_EXTENSION => ['name', 'interfaces', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::INTERFACE_TYPE_EXTENSION => ['name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::UNION_TYPE_EXTENSION => ['name', 'directives', 'types'], \GraphQL\Language\AST\NodeKind::ENUM_TYPE_EXTENSION => ['name', 'directives', 'values'], \GraphQL\Language\AST\NodeKind::INPUT_OBJECT_TYPE_EXTENSION => ['name', 'directives', 'fields'], \GraphQL\Language\AST\NodeKind::DIRECTIVE_DEFINITION => ['description', 'name', 'arguments', 'locations'], \GraphQL\Language\AST\NodeKind::SCHEMA_EXTENSION => ['directives', 'operationTypes']];
        /**
         * Visit the AST (see class description for details)
         *
         * @param Node|ArrayObject|stdClass $root
         * @param callable[]                $visitor
         * @param mixed[]|null              $keyMap
         *
         * @return Node|mixed
         *
         * @throws Exception
         *
         * @api
         */
        public static function visit($root, $visitor, $keyMap = null)
        {
        }
        /**
         * Returns marker for visitor break
         *
         * @return VisitorOperation
         *
         * @api
         */
        public static function stop()
        {
        }
        /**
         * Returns marker for skipping current node
         *
         * @return VisitorOperation
         *
         * @api
         */
        public static function skipNode()
        {
        }
        /**
         * Returns marker for removing a node
         *
         * @return VisitorOperation
         *
         * @api
         */
        public static function removeNode()
        {
        }
        /**
         * @param callable[][] $visitors
         *
         * @return array<string, callable>
         */
        public static function visitInParallel($visitors)
        {
        }
        /**
         * Creates a new visitor instance which maintains a provided TypeInfo instance
         * along with visiting visitor.
         */
        public static function visitWithTypeInfo(\GraphQL\Utils\TypeInfo $typeInfo, $visitor)
        {
        }
        /**
         * @param callable[]|null $visitor
         * @param string          $kind
         * @param bool            $isLeaving
         */
        public static function getVisitFn($visitor, $kind, $isLeaving) : ?callable
        {
        }
    }
    class VisitorOperation
    {
        /** @var bool */
        public $doBreak;
        /** @var bool */
        public $doContinue;
        /** @var bool */
        public $removeNode;
    }
}
namespace GraphQL\Server {
    /**
     * Structure representing parsed HTTP parameters for GraphQL operation
     */
    class OperationParams
    {
        /**
         * Id of the query (when using persistent queries).
         *
         * Valid aliases (case-insensitive):
         * - id
         * - queryId
         * - documentId
         *
         * @api
         * @var string
         */
        public $queryId;
        /**
         * @api
         * @var string
         */
        public $query;
        /**
         * @api
         * @var string
         */
        public $operation;
        /**
         * @api
         * @var mixed[]|null
         */
        public $variables;
        /**
         * @api
         * @var mixed[]|null
         */
        public $extensions;
        /**
         * Creates an instance from given array
         *
         * @param mixed[] $params
         *
         * @api
         */
        public static function create(array $params, bool $readonly = false) : \GraphQL\Server\OperationParams
        {
        }
        /**
         * @param string $key
         *
         * @return mixed
         *
         * @api
         */
        public function getOriginalInput($key)
        {
        }
        /**
         * Indicates that operation is executed in read-only context
         * (e.g. via HTTP GET request)
         *
         * @return bool
         *
         * @api
         */
        public function isReadOnly()
        {
        }
    }
    class RequestError extends \Exception implements \GraphQL\Error\ClientAware
    {
        /**
         * Returns true when exception message is safe to be displayed to client
         *
         * @return bool
         */
        public function isClientSafe()
        {
        }
        /**
         * Returns string describing error category. E.g. "validation" for your own validation errors.
         *
         * Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.
         *
         * @return string
         */
        public function getCategory()
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
     */
    class ServerConfig
    {
        /**
         * Converts an array of options to instance of ServerConfig
         * (or just returns empty config when array is not passed).
         *
         * @param mixed[] $config
         *
         * @return ServerConfig
         *
         * @api
         */
        public static function create(array $config = [])
        {
        }
        /**
         * @return self
         *
         * @api
         */
        public function setSchema(\GraphQL\Type\Schema $schema)
        {
        }
        /**
         * @param mixed|callable $context
         *
         * @return self
         *
         * @api
         */
        public function setContext($context)
        {
        }
        /**
         * @param mixed|callable $rootValue
         *
         * @return self
         *
         * @api
         */
        public function setRootValue($rootValue)
        {
        }
        /**
         * Expects function(Throwable $e) : array
         *
         * @return self
         *
         * @api
         */
        public function setErrorFormatter(callable $errorFormatter)
        {
        }
        /**
         * Expects function(array $errors, callable $formatter) : array
         *
         * @return self
         *
         * @api
         */
        public function setErrorsHandler(callable $handler)
        {
        }
        /**
         * Set validation rules for this server.
         *
         * @param ValidationRule[]|callable|null $validationRules
         *
         * @return self
         *
         * @api
         */
        public function setValidationRules($validationRules)
        {
        }
        /**
         * @return self
         *
         * @api
         */
        public function setFieldResolver(callable $fieldResolver)
        {
        }
        /**
         * Expects function($queryId, OperationParams $params) : string|DocumentNode
         *
         * This function must return query string or valid DocumentNode.
         *
         * @return self
         *
         * @api
         */
        public function setPersistentQueryLoader(callable $persistentQueryLoader)
        {
        }
        /**
         * Set response debug flags. @see \GraphQL\Error\DebugFlag class for a list of all available flags
         *
         * @api
         */
        public function setDebugFlag(int $debugFlag = \GraphQL\Error\DebugFlag::INCLUDE_DEBUG_MESSAGE) : self
        {
        }
        /**
         * Allow batching queries (disabled by default)
         *
         * @api
         */
        public function setQueryBatching(bool $enableBatching) : self
        {
        }
        /**
         * @return self
         *
         * @api
         */
        public function setPromiseAdapter(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter)
        {
        }
        /**
         * @return mixed|callable
         */
        public function getContext()
        {
        }
        /**
         * @return mixed|callable
         */
        public function getRootValue()
        {
        }
        /**
         * @return Schema|null
         */
        public function getSchema()
        {
        }
        /**
         * @return callable|null
         */
        public function getErrorFormatter()
        {
        }
        /**
         * @return callable|null
         */
        public function getErrorsHandler()
        {
        }
        /**
         * @return PromiseAdapter|null
         */
        public function getPromiseAdapter()
        {
        }
        /**
         * @return ValidationRule[]|callable|null
         */
        public function getValidationRules()
        {
        }
        /**
         * @return callable|null
         */
        public function getFieldResolver()
        {
        }
        /**
         * @return callable|null
         */
        public function getPersistentQueryLoader()
        {
        }
        public function getDebugFlag() : int
        {
        }
        /**
         * @return bool
         */
        public function getQueryBatching()
        {
        }
    }
    /**
     * GraphQL server compatible with both: [express-graphql](https://github.com/graphql/express-graphql)
     * and [Apollo Server](https://github.com/apollographql/graphql-server).
     * Usage Example:
     *
     *     $server = new StandardServer([
     *       'schema' => $mySchema
     *     ]);
     *     $server->handleRequest();
     *
     * Or using [ServerConfig](reference.md#graphqlserverserverconfig) instance:
     *
     *     $config = GraphQL\Server\ServerConfig::create()
     *         ->setSchema($mySchema)
     *         ->setContext($myContext);
     *
     *     $server = new GraphQL\Server\StandardServer($config);
     *     $server->handleRequest();
     *
     * See [dedicated section in docs](executing-queries.md#using-server) for details.
     */
    class StandardServer
    {
        /**
         * Converts and exception to error and sends spec-compliant HTTP 500 error.
         * Useful when an exception is thrown somewhere outside of server execution context
         * (e.g. during schema instantiation).
         *
         * @param Throwable $error
         * @param int       $debug
         * @param bool      $exitWhenDone
         *
         * @api
         */
        public static function send500Error($error, $debug = \GraphQL\Error\DebugFlag::NONE, $exitWhenDone = false)
        {
        }
        /**
         * Creates new instance of a standard GraphQL HTTP server
         *
         * @param ServerConfig|mixed[] $config
         *
         * @api
         */
        public function __construct($config)
        {
        }
        /**
         * Parses HTTP request, executes and emits response (using standard PHP `header` function and `echo`)
         *
         * By default (when $parsedBody is not set) it uses PHP globals to parse a request.
         * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
         * and then pass it to the server.
         *
         * See `executeRequest()` if you prefer to emit response yourself
         * (e.g. using Response object of some framework)
         *
         * @param OperationParams|OperationParams[] $parsedBody
         * @param bool                              $exitWhenDone
         *
         * @api
         */
        public function handleRequest($parsedBody = null, $exitWhenDone = false)
        {
        }
        /**
         * Executes GraphQL operation and returns execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter).
         *
         * By default (when $parsedBody is not set) it uses PHP globals to parse a request.
         * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
         * and then pass it to the server.
         *
         * PSR-7 compatible method executePsrRequest() does exactly this.
         *
         * @param OperationParams|OperationParams[] $parsedBody
         *
         * @return ExecutionResult|ExecutionResult[]|Promise
         *
         * @throws InvariantViolation
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
         * @return ResponseInterface|Promise
         *
         * @api
         */
        public function processPsrRequest(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream)
        {
        }
        /**
         * Executes GraphQL operation and returns execution result
         * (or promise when promise adapter is different from SyncPromiseAdapter)
         *
         * @return ExecutionResult|ExecutionResult[]|Promise
         *
         * @api
         */
        public function executePsrRequest(\Psr\Http\Message\RequestInterface $request)
        {
        }
        /**
         * Returns an instance of Server helper, which contains most of the actual logic for
         * parsing / validating / executing request (which could be re-used by other server implementations)
         *
         * @return Helper
         *
         * @api
         */
        public function getHelper()
        {
        }
    }
}
namespace GraphQL\Type\Definition {
    class BooleanType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @var string */
        public $name = \GraphQL\Type\Definition\Type::BOOLEAN;
        /** @var string */
        public $description = 'The `Boolean` scalar type represents `true` or `false`.';
        /**
         * Serialize the given value to a boolean.
         *
         * The GraphQL spec leaves this up to the implementations, so we just do what
         * PHP does natively to make this intuitive for developers.
         *
         * @param mixed $value
         */
        public function serialize($value) : bool
        {
        }
        /**
         * @param mixed $value
         *
         * @return bool
         *
         * @throws Error
         */
        public function parseValue($value)
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
    }
    class Directive
    {
        public const DEFAULT_DEPRECATION_REASON = 'No longer supported';
        public const INCLUDE_NAME = 'include';
        public const IF_ARGUMENT_NAME = 'if';
        public const SKIP_NAME = 'skip';
        public const DEPRECATED_NAME = 'deprecated';
        public const REASON_ARGUMENT_NAME = 'reason';
        /** @var Directive[]|null */
        public static $internalDirectives;
        // Schema Definitions
        /** @var string */
        public $name;
        /** @var string|null */
        public $description;
        /** @var FieldArgument[] */
        public $args = [];
        /** @var bool */
        public $isRepeatable;
        /** @var string[] */
        public $locations;
        /** @var DirectiveDefinitionNode|null */
        public $astNode;
        /** @var mixed[] */
        public $config;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        /**
         * @return Directive
         */
        public static function includeDirective()
        {
        }
        /**
         * @return Directive[]
         */
        public static function getInternalDirectives() : array
        {
        }
        /**
         * @return Directive
         */
        public static function skipDirective()
        {
        }
        /**
         * @return Directive
         */
        public static function deprecatedDirective()
        {
        }
        /**
         * @return bool
         */
        public static function isSpecifiedDirective(\GraphQL\Type\Definition\Directive $directive)
        {
        }
    }
    class EnumValueDefinition
    {
        /** @var string */
        public $name;
        /** @var mixed */
        public $value;
        /** @var string|null */
        public $deprecationReason;
        /** @var string|null */
        public $description;
        /** @var EnumValueDefinitionNode|null */
        public $astNode;
        /** @var mixed[] */
        public $config;
        /**
         * @param mixed[] $config
         */
        public function __construct(array $config)
        {
        }
        /**
         * @return bool
         */
        public function isDeprecated()
        {
        }
    }
    class FieldArgument
    {
        /** @var string */
        public $name;
        /** @var mixed */
        public $defaultValue;
        /** @var string|null */
        public $description;
        /** @var InputValueDefinitionNode|null */
        public $astNode;
        /** @var mixed[] */
        public $config;
        /** @param mixed[] $def */
        public function __construct(array $def)
        {
        }
        /**
         * @param mixed[] $config
         *
         * @return FieldArgument[]
         */
        public static function createMap(array $config) : array
        {
        }
        public function getType() : \GraphQL\Type\Definition\Type
        {
        }
        public function defaultValueExists() : bool
        {
        }
        public function isRequired() : bool
        {
        }
        public function assertValid(\GraphQL\Type\Definition\FieldDefinition $parentField, \GraphQL\Type\Definition\Type $parentType)
        {
        }
    }
    /**
     * @todo Move complexity-related code to it's own place
     */
    class FieldDefinition
    {
        public const DEFAULT_COMPLEXITY_FN = 'GraphQL\\Type\\Definition\\FieldDefinition::defaultComplexity';
        /** @var string */
        public $name;
        /** @var FieldArgument[] */
        public $args;
        /**
         * Callback for resolving field value given parent value.
         * Mutually exclusive with `map`
         *
         * @var callable|null
         */
        public $resolveFn;
        /**
         * Callback for mapping list of parent values to list of field values.
         * Mutually exclusive with `resolve`
         *
         * @var callable|null
         */
        public $mapFn;
        /** @var string|null */
        public $description;
        /** @var string|null */
        public $deprecationReason;
        /** @var FieldDefinitionNode|null */
        public $astNode;
        /**
         * Original field definition config
         *
         * @var mixed[]
         */
        public $config;
        /**
         * @param mixed[] $config
         */
        protected function __construct(array $config)
        {
        }
        /**
         * @param (callable():mixed[])|mixed[] $fields
         *
         * @return array<string, self>
         */
        public static function defineFieldMap(\GraphQL\Type\Definition\Type $type, $fields) : array
        {
        }
        /**
         * @param mixed[] $field
         *
         * @return FieldDefinition
         */
        public static function create($field)
        {
        }
        /**
         * @param int $childrenComplexity
         *
         * @return mixed
         */
        public static function defaultComplexity($childrenComplexity)
        {
        }
        /**
         * @param string $name
         *
         * @return FieldArgument|null
         */
        public function getArg($name)
        {
        }
        public function getType() : \GraphQL\Type\Definition\Type
        {
        }
        public function __isset(string $name) : bool
        {
        }
        public function __get(string $name)
        {
        }
        public function __set(string $name, $value)
        {
        }
        /**
         * @return bool
         */
        public function isDeprecated()
        {
        }
        /**
         * @return callable|callable
         */
        public function getComplexityFn()
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid(\GraphQL\Type\Definition\Type $parentType)
        {
        }
    }
    class FloatType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @var string */
        public $name = \GraphQL\Type\Definition\Type::FLOAT;
        /** @var string */
        public $description = 'The `Float` scalar type represents signed double-precision fractional
values as specified by
[IEEE 754](http://en.wikipedia.org/wiki/IEEE_floating_point). ';
        /**
         * @param mixed $value
         *
         * @throws Error
         */
        public function serialize($value) : float
        {
        }
        /**
         * @param mixed $value
         *
         * @throws Error
         */
        public function parseValue($value) : float
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return float
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
    }
    class IDType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @var string */
        public $name = 'ID';
        /** @var string */
        public $description = 'The `ID` scalar type represents a unique identifier, often used to
refetch an object or as key for a cache. The ID type appears in a JSON
response as a String; however, it is not intended to be human-readable.
When expected as an input type, any string (such as `"4"`) or integer
(such as `4`) input value will be accepted as an ID.';
        /**
         * @param mixed $value
         *
         * @return string
         *
         * @throws Error
         */
        public function serialize($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @throws Error
         */
        public function parseValue($value) : string
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return string
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
    }
    class InputObjectField
    {
        /** @var string */
        public $name;
        /** @var mixed|null */
        public $defaultValue;
        /** @var string|null */
        public $description;
        /** @var InputValueDefinitionNode|null */
        public $astNode;
        /** @var mixed[] */
        public $config;
        /**
         * @param mixed[] $opts
         */
        public function __construct(array $opts)
        {
        }
        public function __isset(string $name) : bool
        {
        }
        public function __get(string $name)
        {
        }
        public function __set(string $name, $value)
        {
        }
        /**
         * @return Type&InputType
         */
        public function getType() : \GraphQL\Type\Definition\Type
        {
        }
        public function defaultValueExists() : bool
        {
        }
        public function isRequired() : bool
        {
        }
        /**
         * @throws InvariantViolation
         */
        public function assertValid(\GraphQL\Type\Definition\Type $parentType)
        {
        }
    }
    class IntType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @var string */
        public $name = \GraphQL\Type\Definition\Type::INT;
        /** @var string */
        public $description = 'The `Int` scalar type represents non-fractional signed whole numeric
values. Int can represent values between -(2^31) and 2^31 - 1. ';
        /**
         * @param mixed $value
         *
         * @return int|null
         *
         * @throws Error
         */
        public function serialize($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @throws Error
         */
        public function parseValue($value) : int
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return int
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
        {
        }
    }
    interface WrappingType
    {
        public function getWrappedType(bool $recurse = false) : \GraphQL\Type\Definition\Type;
    }
    class ListOfType extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\WrappingType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\NullableType, \GraphQL\Type\Definition\InputType
    {
        /** @var callable():Type|Type */
        public $ofType;
        /**
         * @param callable():Type|Type $type
         */
        public function __construct($type)
        {
        }
        public function toString() : string
        {
        }
        public function getOfType()
        {
        }
        /**
         * @return ObjectType|InterfaceType|UnionType|ScalarType|InputObjectType|EnumType|(Type&WrappingType)
         */
        public function getWrappedType(bool $recurse = false) : \GraphQL\Type\Definition\Type
        {
        }
    }
    class NonNull extends \GraphQL\Type\Definition\Type implements \GraphQL\Type\Definition\WrappingType, \GraphQL\Type\Definition\OutputType, \GraphQL\Type\Definition\InputType
    {
        /**
         * code sniffer doesn't understand this syntax. Pr with a fix here: waiting on https://github.com/squizlabs/PHP_CodeSniffer/pull/2919
         * phpcs:disable Squiz.Commenting.FunctionComment.SpacingAfterParamType
         * @param  (NullableType&Type)|callable $type
         */
        public function __construct($type)
        {
        }
        public function toString() : string
        {
        }
        public function getOfType()
        {
        }
        public function getWrappedType(bool $recurse = false) : \GraphQL\Type\Definition\Type
        {
        }
    }
    class QueryPlan
    {
        /**
         * @param FieldNode[]              $fieldNodes
         * @param mixed[]                  $variableValues
         * @param FragmentDefinitionNode[] $fragments
         * @param mixed[]                  $options
         */
        public function __construct(\GraphQL\Type\Definition\ObjectType $parentType, \GraphQL\Type\Schema $schema, iterable $fieldNodes, array $variableValues, array $fragments, array $options = [])
        {
        }
        /**
         * @return mixed[]
         */
        public function queryPlan() : array
        {
        }
        /**
         * @return string[]
         */
        public function getReferencedTypes() : array
        {
        }
        public function hasType(string $type) : bool
        {
        }
        /**
         * @return string[]
         */
        public function getReferencedFields() : array
        {
        }
        public function hasField(string $field) : bool
        {
        }
        /**
         * @return string[]
         */
        public function subFields(string $typename) : array
        {
        }
    }
    /**
     * Structure containing information useful for field resolution process.
     *
     * Passed as 4th argument to every field resolver. See [docs on field resolving (data fetching)](data-fetching.md).
     */
    class ResolveInfo
    {
        /**
         * The definition of the field being resolved.
         *
         * @api
         * @var FieldDefinition
         */
        public $fieldDefinition;
        /**
         * The name of the field being resolved.
         *
         * @api
         * @var string
         */
        public $fieldName;
        /**
         * Expected return type of the field being resolved.
         *
         * @api
         * @var Type
         */
        public $returnType;
        /**
         * AST of all nodes referencing this field in the query.
         *
         * @api
         * @var FieldNode[]
         */
        public $fieldNodes = [];
        /**
         * Parent type of the field being resolved.
         *
         * @api
         * @var ObjectType
         */
        public $parentType;
        /**
         * Path to this field from the very root value.
         *
         * @api
         * @var string[]
         */
        public $path;
        /**
         * Instance of a schema used for execution.
         *
         * @api
         * @var Schema
         */
        public $schema;
        /**
         * AST of all fragments defined in query.
         *
         * @api
         * @var FragmentDefinitionNode[]
         */
        public $fragments = [];
        /**
         * Root value passed to query execution.
         *
         * @api
         * @var mixed
         */
        public $rootValue;
        /**
         * AST of operation definition node (query, mutation).
         *
         * @api
         * @var OperationDefinitionNode|null
         */
        public $operation;
        /**
         * Array of variables passed to query execution.
         *
         * @api
         * @var mixed[]
         */
        public $variableValues = [];
        /**
         * @param FieldNode[]              $fieldNodes
         * @param string[]                 $path
         * @param FragmentDefinitionNode[] $fragments
         * @param mixed|null               $rootValue
         * @param mixed[]                  $variableValues
         */
        public function __construct(\GraphQL\Type\Definition\FieldDefinition $fieldDefinition, iterable $fieldNodes, \GraphQL\Type\Definition\ObjectType $parentType, array $path, \GraphQL\Type\Schema $schema, array $fragments, $rootValue, ?\GraphQL\Language\AST\OperationDefinitionNode $operation, array $variableValues)
        {
        }
        /**
         * Helper method that returns names of all fields selected in query for
         * $this->fieldName up to $depth levels.
         *
         * Example:
         * query MyQuery{
         * {
         *   root {
         *     id,
         *     nested {
         *      nested1
         *      nested2 {
         *        nested3
         *      }
         *     }
         *   }
         * }
         *
         * Given this ResolveInfo instance is a part of "root" field resolution, and $depth === 1,
         * method will return:
         * [
         *     'id' => true,
         *     'nested' => [
         *         nested1 => true,
         *         nested2 => true
         *     ]
         * ]
         *
         * Warning: this method it is a naive implementation which does not take into account
         * conditional typed fragments. So use it with care for fields of interface and union types.
         *
         * @param int $depth How many levels to include in output
         *
         * @return array<string, mixed>
         *
         * @api
         */
        public function getFieldSelection($depth = 0)
        {
        }
        /**
         * @param mixed[] $options
         */
        public function lookAhead(array $options = []) : \GraphQL\Type\Definition\QueryPlan
        {
        }
    }
    class StringType extends \GraphQL\Type\Definition\ScalarType
    {
        /** @var string */
        public $name = \GraphQL\Type\Definition\Type::STRING;
        /** @var string */
        public $description = 'The `String` scalar type represents textual data, represented as UTF-8
character sequences. The String type is most often used by GraphQL to
represent free-form human-readable text.';
        /**
         * @param mixed $value
         *
         * @return mixed|string
         *
         * @throws Error
         */
        public function serialize($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @return string
         *
         * @throws Error
         */
        public function parseValue($value)
        {
        }
        /**
         * @param mixed[]|null $variables
         *
         * @return string
         *
         * @throws Exception
         */
        public function parseLiteral(\GraphQL\Language\AST\Node $valueNode, ?array $variables = null)
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
}
namespace GraphQL\Type {
    class Introspection
    {
        const SCHEMA_FIELD_NAME = '__schema';
        const TYPE_FIELD_NAME = '__type';
        const TYPE_NAME_FIELD_NAME = '__typename';
        /**
         * @param array<string, bool> $options
         *      Available options:
         *      - descriptions
         *        Whether to include descriptions in the introspection result.
         *        Default: true
         *      - directiveIsRepeatable
         *        Whether to include `isRepeatable` flag on directives.
         *        Default: false
         *
         * @return string
         *
         * @api
         */
        public static function getIntrospectionQuery(array $options = [])
        {
        }
        /**
         * @param Type $type
         *
         * @return bool
         */
        public static function isIntrospectionType($type)
        {
        }
        public static function getTypes()
        {
        }
        /**
         * Build an introspection query from a Schema
         *
         * Introspection is useful for utilities that care about type and field
         * relationships, but do not need to traverse through those relationships.
         *
         * This is the inverse of BuildClientSchema::build(). The primary use case is outside
         * of the server context, for instance when doing schema comparisons.
         *
         * @param array<string, bool> $options
         *      Available options:
         *      - descriptions
         *        Whether to include `isRepeatable` flag on directives.
         *        Default: true
         *      - directiveIsRepeatable
         *        Whether to include descriptions in the introspection result.
         *        Default: true
         *
         * @return array<string, array<mixed>>|null
         *
         * @api
         */
        public static function fromSchema(\GraphQL\Type\Schema $schema, array $options = []) : ?array
        {
        }
        public static function _schema()
        {
        }
        public static function _type()
        {
        }
        public static function _typeKind()
        {
        }
        public static function _field()
        {
        }
        public static function _inputValue()
        {
        }
        public static function _enumValue()
        {
        }
        public static function _directive()
        {
        }
        public static function _directiveLocation()
        {
        }
        public static function schemaMetaFieldDef() : \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public static function typeMetaFieldDef() : \GraphQL\Type\Definition\FieldDefinition
        {
        }
        public static function typeNameMetaFieldDef() : \GraphQL\Type\Definition\FieldDefinition
        {
        }
    }
    /**
     * Schema configuration class.
     * Could be passed directly to schema constructor. List of options accepted by **create** method is
     * [described in docs](type-system/schema.md#configuration-options).
     *
     * Usage example:
     *
     *     $config = SchemaConfig::create()
     *         ->setQuery($myQueryType)
     *         ->setTypeLoader($myTypeLoader);
     *
     *     $schema = new Schema($config);
     */
    class SchemaConfig
    {
        /** @var ObjectType|null */
        public $query;
        /** @var ObjectType|null */
        public $mutation;
        /** @var ObjectType|null */
        public $subscription;
        /** @var Type[]|callable */
        public $types = [];
        /** @var Directive[]|null */
        public $directives;
        /** @var callable|null */
        public $typeLoader;
        /** @var SchemaDefinitionNode|null */
        public $astNode;
        /** @var bool */
        public $assumeValid = false;
        /** @var SchemaTypeExtensionNode[] */
        public $extensionASTNodes = [];
        /**
         * Converts an array of options to instance of SchemaConfig
         * (or just returns empty config when array is not passed).
         *
         * @param mixed[] $options
         *
         * @return SchemaConfig
         *
         * @api
         */
        public static function create(array $options = [])
        {
        }
        /**
         * @return SchemaDefinitionNode|null
         */
        public function getAstNode()
        {
        }
        /**
         * @return SchemaConfig
         */
        public function setAstNode(\GraphQL\Language\AST\SchemaDefinitionNode $astNode)
        {
        }
        /**
         * @return ObjectType|null
         *
         * @api
         */
        public function getQuery()
        {
        }
        /**
         * @param ObjectType|null $query
         *
         * @return SchemaConfig
         *
         * @api
         */
        public function setQuery($query)
        {
        }
        /**
         * @return ObjectType|null
         *
         * @api
         */
        public function getMutation()
        {
        }
        /**
         * @param ObjectType|null $mutation
         *
         * @return SchemaConfig
         *
         * @api
         */
        public function setMutation($mutation)
        {
        }
        /**
         * @return ObjectType|null
         *
         * @api
         */
        public function getSubscription()
        {
        }
        /**
         * @param ObjectType|null $subscription
         *
         * @return SchemaConfig
         *
         * @api
         */
        public function setSubscription($subscription)
        {
        }
        /**
         * @return Type[]|callable
         *
         * @api
         */
        public function getTypes()
        {
        }
        /**
         * @param Type[]|callable $types
         *
         * @return SchemaConfig
         *
         * @api
         */
        public function setTypes($types)
        {
        }
        /**
         * @return Directive[]|null
         *
         * @api
         */
        public function getDirectives()
        {
        }
        /**
         * @param Directive[] $directives
         *
         * @return SchemaConfig
         *
         * @api
         */
        public function setDirectives(array $directives)
        {
        }
        /**
         * @return callable|null
         *
         * @api
         */
        public function getTypeLoader()
        {
        }
        /**
         * @return SchemaConfig
         *
         * @api
         */
        public function setTypeLoader(callable $typeLoader)
        {
        }
        /**
         * @return bool
         */
        public function getAssumeValid()
        {
        }
        /**
         * @param bool $assumeValid
         *
         * @return SchemaConfig
         */
        public function setAssumeValid($assumeValid)
        {
        }
        /**
         * @return SchemaTypeExtensionNode[]
         */
        public function getExtensionASTNodes()
        {
        }
        /**
         * @param SchemaTypeExtensionNode[] $extensionASTNodes
         */
        public function setExtensionASTNodes(array $extensionASTNodes)
        {
        }
    }
    class SchemaValidationContext
    {
        public function __construct(\GraphQL\Type\Schema $schema)
        {
        }
        /**
         * @return Error[]
         */
        public function getErrors()
        {
        }
        public function validateRootTypes() : void
        {
        }
        /**
         * @param string                                       $message
         * @param Node[]|Node|TypeNode|TypeDefinitionNode|null $nodes
         */
        public function reportError($message, $nodes = null)
        {
        }
        public function validateDirectives()
        {
        }
        public function validateDirectiveDefinitions()
        {
        }
        public function validateTypes() : void
        {
        }
    }
    class TypeKind
    {
        const SCALAR = 'SCALAR';
        const OBJECT = 'OBJECT';
        const INTERFACE = 'INTERFACE';
        const UNION = 'UNION';
        const ENUM = 'ENUM';
        const INPUT_OBJECT = 'INPUT_OBJECT';
        const LIST = 'LIST';
        const NON_NULL = 'NON_NULL';
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
         */
        public function validate(\GraphQL\Type\Definition\InputObjectType $inputObj) : void
        {
        }
    }
}
namespace GraphQL\Utils {
    /**
     * Various utilities dealing with AST
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
         * @param mixed[] $node
         *
         * @api
         */
        public static function fromArray(array $node) : \GraphQL\Language\AST\Node
        {
        }
        /**
         * Convert AST node to serializable array
         *
         * @return mixed[]
         *
         * @api
         */
        public static function toArray(\GraphQL\Language\AST\Node $node) : array
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
         * @param Type|mixed|null $value
         *
         * @return ObjectValueNode|ListValueNode|BooleanValueNode|IntValueNode|FloatValueNode|EnumValueNode|StringValueNode|NullValueNode|null
         *
         * @api
         */
        public static function astFromValue($value, \GraphQL\Type\Definition\InputType $type)
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
         * @param VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null $valueNode
         * @param mixed[]|null                                                                                                                             $variables
         *
         * @return mixed[]|stdClass|null
         *
         * @throws Exception
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
         * @param Node         $valueNode
         * @param mixed[]|null $variables
         *
         * @return mixed
         *
         * @throws Exception
         *
         * @api
         */
        public static function valueFromASTUntyped($valueNode, ?array $variables = null)
        {
        }
        /**
         * Returns type definition for given AST Type node
         *
         * @param NamedTypeNode|ListTypeNode|NonNullTypeNode $inputTypeNode
         *
         * @return Type|null
         *
         * @throws Exception
         *
         * @api
         */
        public static function typeFromAST(\GraphQL\Type\Schema $schema, $inputTypeNode)
        {
        }
        /**
         * Returns operation type ("query", "mutation" or "subscription") given a document and operation name
         *
         * @param string $operationName
         *
         * @return bool|string
         *
         * @api
         */
        public static function getOperation(\GraphQL\Language\AST\DocumentNode $document, $operationName = null)
        {
        }
    }
    class ASTDefinitionBuilder
    {
        /**
         * @param Node[] $typeDefinitionsMap
         * @param bool[] $options
         */
        public function __construct(array $typeDefinitionsMap, $options, callable $resolveType, ?callable $typeConfigDecorator = null)
        {
        }
        public function buildDirective(\GraphQL\Language\AST\DirectiveDefinitionNode $directiveNode)
        {
        }
        /**
         * @param string|NamedTypeNode $ref
         *
         * @return Type
         *
         * @throws Error
         */
        public function buildType($ref)
        {
        }
        public function buildField(\GraphQL\Language\AST\FieldDefinitionNode $field)
        {
        }
        /**
         * @return mixed[]
         */
        public function buildInputField(\GraphQL\Language\AST\InputValueDefinitionNode $value) : array
        {
        }
        /**
         * @return mixed[]
         */
        public function buildEnumValue(\GraphQL\Language\AST\EnumValueDefinitionNode $value) : array
        {
        }
    }
    class BlockString
    {
        /**
         * Produces the value of a block string from its parsed raw value, similar to
         * Coffeescript's block string, Python's docstring trim or Ruby's strip_heredoc.
         *
         * This implements the GraphQL spec's BlockStringValue() static algorithm.
         */
        public static function value($rawString)
        {
        }
    }
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
        public const BREAKING_CHANGE_INTERFACE_REMOVED_FROM_OBJECT = 'INTERFACE_REMOVED_FROM_OBJECT';
        public const BREAKING_CHANGE_DIRECTIVE_REMOVED = 'DIRECTIVE_REMOVED';
        public const BREAKING_CHANGE_DIRECTIVE_ARG_REMOVED = 'DIRECTIVE_ARG_REMOVED';
        public const BREAKING_CHANGE_DIRECTIVE_LOCATION_REMOVED = 'DIRECTIVE_LOCATION_REMOVED';
        public const BREAKING_CHANGE_REQUIRED_DIRECTIVE_ARG_ADDED = 'REQUIRED_DIRECTIVE_ARG_ADDED';
        public const DANGEROUS_CHANGE_ARG_DEFAULT_VALUE_CHANGED = 'ARG_DEFAULT_VALUE_CHANGE';
        public const DANGEROUS_CHANGE_VALUE_ADDED_TO_ENUM = 'VALUE_ADDED_TO_ENUM';
        public const DANGEROUS_CHANGE_INTERFACE_ADDED_TO_OBJECT = 'INTERFACE_ADDED_TO_OBJECT';
        public const DANGEROUS_CHANGE_TYPE_ADDED_TO_UNION = 'TYPE_ADDED_TO_UNION';
        public const DANGEROUS_CHANGE_OPTIONAL_INPUT_FIELD_ADDED = 'OPTIONAL_INPUT_FIELD_ADDED';
        public const DANGEROUS_CHANGE_OPTIONAL_ARG_ADDED = 'OPTIONAL_ARG_ADDED';
        /**
         * Given two schemas, returns an Array containing descriptions of all the types
         * of breaking changes covered by the other functions down below.
         *
         * @return string[][]
         */
        public static function findBreakingChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing an entire type.
         *
         * @return string[][]
         */
        public static function findRemovedTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to changing the type of a type.
         *
         * @return string[][]
         */
        public static function findTypesThatChangedKind(\GraphQL\Type\Schema $schemaA, \GraphQL\Type\Schema $schemaB) : iterable
        {
        }
        /**
         * @return string[][]
         */
        public static function findFieldsThatChangedTypeOnObjectOrInterfaceTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * @return array<string, array<int, array<string, string>>>
         */
        public static function findFieldsThatChangedTypeOnInputObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing types from a union type.
         *
         * @return string[][]
         */
        public static function findTypesRemovedFromUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any breaking
         * changes in the newSchema related to removing values from an enum type.
         *
         * @return string[][]
         */
        public static function findValuesRemovedFromEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any
         * breaking or dangerous changes in the newSchema related to arguments
         * (such as removal or change of type of an argument, or a change in an
         * argument's default value).
         *
         * @return array<string, array<int,array<string, string>>>
         */
        public static function findArgChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * @return string[][]
         */
        public static function findInterfacesRemovedFromObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * @return string[][]
         */
        public static function findRemovedDirectives(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        public static function findRemovedDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        public static function findRemovedArgsForDirectives(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective)
        {
        }
        public static function findAddedNonNullDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * @return FieldArgument[]
         */
        public static function findAddedArgsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective)
        {
        }
        /**
         * @return string[][]
         */
        public static function findRemovedDirectiveLocations(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        public static function findRemovedLocationsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of all the types
         * of potentially dangerous changes covered by the other functions down below.
         *
         * @return string[][]
         */
        public static function findDangerousChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any dangerous
         * changes in the newSchema related to adding values to an enum type.
         *
         * @return string[][]
         */
        public static function findValuesAddedToEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * @return string[][]
         */
        public static function findInterfacesAddedToObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
        /**
         * Given two schemas, returns an Array containing descriptions of any dangerous
         * changes in the newSchema related to adding types to a union type.
         *
         * @return string[][]
         */
        public static function findTypesAddedToUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema)
        {
        }
    }
    class BuildClientSchema
    {
        /**
         * @param array<string, mixed[]> $introspectionQuery
         * @param array<string, bool>    $options
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
         * Accepts options as a third argument:
         *
         *    - assumeValid:
         *          When building a schema from a GraphQL service's introspection result, it
         *          might be safe to assume the schema is valid. Set to true to assume the
         *          produced schema is valid.
         *
         *          Default: false
         *
         * @param array<string, mixed[]> $introspectionQuery
         * @param array<string, bool>    $options
         *
         * @api
         */
        public static function build(array $introspectionQuery, array $options = []) : \GraphQL\Type\Schema
        {
        }
        public function buildSchema() : \GraphQL\Type\Schema
        {
        }
        /**
         * @param array<string, mixed> $typeRef
         */
        public function getInterfaceType(array $typeRef) : \GraphQL\Type\Definition\InterfaceType
        {
        }
        /**
         * @param array<string, mixed> $inputValueIntrospection
         *
         * @return array<string, mixed>
         */
        public function buildInputValue(array $inputValueIntrospection) : array
        {
        }
        /**
         * @param array<string, mixed> $directive
         */
        public function buildDirective(array $directive) : \GraphQL\Type\Definition\Directive
        {
        }
    }
    /**
     * Build instance of `GraphQL\Type\Schema` out of type language definition (string or parsed AST)
     * See [section in docs](type-system/type-language.md) for details.
     */
    class BuildSchema
    {
        /**
         * @param bool[] $options
         */
        public function __construct(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array $options = [])
        {
        }
        /**
         * A helper function to build a GraphQLSchema directly from a source
         * document.
         *
         * @param DocumentNode|Source|string $source
         * @param bool[]                     $options
         *
         * @return Schema
         *
         * @api
         */
        public static function build($source, ?callable $typeConfigDecorator = null, array $options = [])
        {
        }
        /**
         * This takes the ast of a schema document produced by the parse function in
         * GraphQL\Language\Parser.
         *
         * If no schema definition is provided, then it will look for types named Query
         * and Mutation.
         *
         * Given that AST it constructs a GraphQL\Type\Schema. The resulting schema
         * has no resolve methods, so execution will use default resolvers.
         *
         * Accepts options as a third argument:
         *
         *    - commentDescriptions:
         *        Provide true to use preceding comments as the description.
         *        This option is provided to ease adoption and will be removed in v16.
         *
         * @param bool[] $options
         *
         * @return Schema
         *
         * @throws Error
         *
         * @api
         */
        public static function buildAST(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array $options = [])
        {
        }
        public function buildSchema()
        {
        }
    }
    /**
     * Similar to PHP array, but allows any type of data to act as key (including arrays, objects, scalars)
     *
     * Note: unfortunately when storing array as key - access and modification is O(N)
     * (yet this should rarely be the case and should be avoided when possible)
     */
    class MixedStore implements \ArrayAccess
    {
        public function __construct()
        {
        }
        /**
         * Whether a offset exists
         *
         * @link http://php.net/manual/en/arrayaccess.offsetexists.php
         *
         * @param mixed $offset <p>
         * An offset to check for.
         * </p>
         *
         * @return bool true on success or false on failure.
         * </p>
         * <p>
         * The return value will be casted to boolean if non-boolean was returned.
         */
        public function offsetExists($offset)
        {
        }
        /**
         * Offset to retrieve
         *
         * @link http://php.net/manual/en/arrayaccess.offsetget.php
         *
         * @param mixed $offset <p>
         * The offset to retrieve.
         * </p>
         *
         * @return mixed Can return all value types.
         */
        public function offsetGet($offset)
        {
        }
        /**
         * Offset to set
         *
         * @link http://php.net/manual/en/arrayaccess.offsetset.php
         *
         * @param mixed $offset <p>
         * The offset to assign the value to.
         * </p>
         * @param mixed $value  <p>
         *  The value to set.
         *  </p>
         *
         * @return void
         */
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Offset to unset
         *
         * @link http://php.net/manual/en/arrayaccess.offsetunset.php
         *
         * @param mixed $offset <p>
         * The offset to unset.
         * </p>
         *
         * @return void
         */
        public function offsetUnset($offset)
        {
        }
    }
    /**
     * A way to keep track of pairs of things when the ordering of the pair does
     * not matter. We do this by maintaining a sort of double adjacency sets.
     */
    class PairSet
    {
        public function __construct()
        {
        }
        /**
         * @param string $a
         * @param string $b
         * @param bool   $areMutuallyExclusive
         *
         * @return bool
         */
        public function has($a, $b, $areMutuallyExclusive)
        {
        }
        /**
         * @param string $a
         * @param string $b
         * @param bool   $areMutuallyExclusive
         */
        public function add($a, $b, $areMutuallyExclusive)
        {
        }
    }
    class SchemaExtender
    {
        const SCHEMA_EXTENSION = 'SchemaExtension';
        /** @var Type[] */
        protected static $extendTypeCache;
        /** @var mixed[] */
        protected static $typeExtensionsMap;
        /** @var ASTDefinitionBuilder */
        protected static $astBuilder;
        /**
         * @return TypeExtensionNode[]|null
         */
        protected static function getExtensionASTNodes(\GraphQL\Type\Definition\NamedType $type) : ?array
        {
        }
        /**
         * @throws Error
         */
        protected static function checkExtensionNode(\GraphQL\Type\Definition\Type $type, \GraphQL\Language\AST\Node $node) : void
        {
        }
        protected static function extendScalarType(\GraphQL\Type\Definition\ScalarType $type) : \GraphQL\Type\Definition\CustomScalarType
        {
        }
        protected static function extendUnionType(\GraphQL\Type\Definition\UnionType $type) : \GraphQL\Type\Definition\UnionType
        {
        }
        protected static function extendEnumType(\GraphQL\Type\Definition\EnumType $type) : \GraphQL\Type\Definition\EnumType
        {
        }
        protected static function extendInputObjectType(\GraphQL\Type\Definition\InputObjectType $type) : \GraphQL\Type\Definition\InputObjectType
        {
        }
        /**
         * @return mixed[]
         */
        protected static function extendInputFieldMap(\GraphQL\Type\Definition\InputObjectType $type) : array
        {
        }
        /**
         * @return mixed[]
         */
        protected static function extendValueMap(\GraphQL\Type\Definition\EnumType $type) : array
        {
        }
        /**
         * @return ObjectType[]
         */
        protected static function extendPossibleTypes(\GraphQL\Type\Definition\UnionType $type) : array
        {
        }
        /**
         * @return InterfaceType[]
         */
        protected static function extendImplementedInterfaces(\GraphQL\Type\Definition\ObjectType $type) : array
        {
        }
        protected static function extendType($typeDef)
        {
        }
        /**
         * @param FieldArgument[] $args
         *
         * @return mixed[]
         */
        protected static function extendArgs(array $args) : array
        {
        }
        /**
         * @param InterfaceType|ObjectType $type
         *
         * @return mixed[]
         *
         * @throws Error
         */
        protected static function extendFieldMap($type) : array
        {
        }
        protected static function extendObjectType(\GraphQL\Type\Definition\ObjectType $type) : \GraphQL\Type\Definition\ObjectType
        {
        }
        protected static function extendInterfaceType(\GraphQL\Type\Definition\InterfaceType $type) : \GraphQL\Type\Definition\InterfaceType
        {
        }
        protected static function isSpecifiedScalarType(\GraphQL\Type\Definition\Type $type) : bool
        {
        }
        protected static function extendNamedType(\GraphQL\Type\Definition\Type $type)
        {
        }
        /**
         * @return mixed|null
         */
        protected static function extendMaybeNamedType(?\GraphQL\Type\Definition\NamedType $type = null)
        {
        }
        /**
         * @param DirectiveDefinitionNode[] $directiveDefinitions
         *
         * @return Directive[]
         */
        protected static function getMergedDirectives(\GraphQL\Type\Schema $schema, array $directiveDefinitions) : array
        {
        }
        protected static function extendDirective(\GraphQL\Type\Definition\Directive $directive) : \GraphQL\Type\Definition\Directive
        {
        }
        /**
         * @param mixed[]|null $options
         */
        public static function extend(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentAST, ?array $options = null) : \GraphQL\Type\Schema
        {
        }
    }
    /**
     * Given an instance of Schema, prints it in GraphQL type language.
     */
    class SchemaPrinter
    {
        /**
         * @param array<string, bool> $options
         *    Available options:
         *    - commentDescriptions:
         *        Provide true to use preceding comments as the description.
         *        This option is provided to ease adoption and will be removed in v16.
         *
         * @api
         */
        public static function doPrint(\GraphQL\Type\Schema $schema, array $options = []) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printFilteredSchema(\GraphQL\Type\Schema $schema, callable $directiveFilter, callable $typeFilter, array $options) : string
        {
        }
        protected static function printSchemaDefinition(\GraphQL\Type\Schema $schema) : string
        {
        }
        /**
         * GraphQL schema define root types for each type of operation. These types are
         * the same as any other type and can be named in any manner, however there is
         * a common naming convention:
         *
         *   schema {
         *     query: Query
         *     mutation: Mutation
         *   }
         *
         * When using this naming convention, the schema description can be omitted.
         */
        protected static function isSchemaOfCommonNames(\GraphQL\Type\Schema $schema) : bool
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printDirective(\GraphQL\Type\Definition\Directive $directive, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printDescription(array $options, $def, $indentation = '', $firstInBlock = true) : string
        {
        }
        /**
         * @return string[]
         */
        protected static function descriptionLines(string $description, int $maxLen) : array
        {
        }
        /**
         * @return string[]
         */
        protected static function breakLine(string $line, int $maxLen) : array
        {
        }
        protected static function printDescriptionWithComments($lines, $indentation, $firstInBlock) : string
        {
        }
        protected static function escapeQuote($line) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printArgs(array $options, $args, $indentation = '') : string
        {
        }
        protected static function printInputValue($arg) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        public static function printType(\GraphQL\Type\Definition\Type $type, array $options = []) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printScalar(\GraphQL\Type\Definition\ScalarType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printObject(\GraphQL\Type\Definition\ObjectType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printFields(array $options, $type) : string
        {
        }
        protected static function printDeprecated($fieldOrEnumVal) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printInterface(\GraphQL\Type\Definition\InterfaceType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printUnion(\GraphQL\Type\Definition\UnionType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printEnum(\GraphQL\Type\Definition\EnumType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printEnumValues($values, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         */
        protected static function printInputObject(\GraphQL\Type\Definition\InputObjectType $type, array $options) : string
        {
        }
        /**
         * @param array<string, bool> $options
         *
         * @api
         */
        public static function printIntrospectionSchema(\GraphQL\Type\Schema $schema, array $options = []) : string
        {
        }
    }
    class TypeComparators
    {
        /**
         * Provided two types, return true if the types are equal (invariant).
         *
         * @return bool
         */
        public static function isEqualType(\GraphQL\Type\Definition\Type $typeA, \GraphQL\Type\Definition\Type $typeB)
        {
        }
        /**
         * Provided a type and a super type, return true if the first type is either
         * equal or a subset of the second super type (covariant).
         *
         * @return bool
         */
        public static function isTypeSubTypeOf(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $maybeSubType, \GraphQL\Type\Definition\Type $superType)
        {
        }
        /**
         * Provided two composite types, determine if they "overlap". Two composite
         * types overlap when the Sets of possible concrete types for each intersect.
         *
         * This is often used to determine if a fragment of a given type could possibly
         * be visited in a context of another type.
         *
         * This function is commutative.
         *
         * @return bool
         */
        public static function doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $typeA, \GraphQL\Type\Definition\CompositeType $typeB)
        {
        }
    }
    class TypeInfo
    {
        /**
         * @param Type|null $initialType
         */
        public function __construct(\GraphQL\Type\Schema $schema, $initialType = null)
        {
        }
        /**
         * @deprecated moved to GraphQL\Utils\TypeComparators
         *
         * @codeCoverageIgnore
         */
        public static function isEqualType(\GraphQL\Type\Definition\Type $typeA, \GraphQL\Type\Definition\Type $typeB) : bool
        {
        }
        /**
         * @deprecated moved to GraphQL\Utils\TypeComparators
         *
         * @codeCoverageIgnore
         */
        public static function isTypeSubTypeOf(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $maybeSubType, \GraphQL\Type\Definition\Type $superType)
        {
        }
        /**
         * @deprecated moved to GraphQL\Utils\TypeComparators
         *
         * @codeCoverageIgnore
         */
        public static function doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $typeA, \GraphQL\Type\Definition\CompositeType $typeB)
        {
        }
        /**
         * Given root type scans through all fields to find nested types. Returns array where keys are for type name
         * and value contains corresponding type instance.
         *
         * Example output:
         * [
         *     'String' => $instanceOfStringType,
         *     'MyType' => $instanceOfMyType,
         *     ...
         * ]
         *
         * @param Type|null   $type
         * @param Type[]|null $typeMap
         *
         * @return Type[]|null
         */
        public static function extractTypes($type, ?array $typeMap = null)
        {
        }
        /**
         * @param Type[] $typeMap
         *
         * @return Type[]
         */
        public static function extractTypesFromDirectives(\GraphQL\Type\Definition\Directive $directive, array $typeMap = [])
        {
        }
        /**
         * @return (Type&InputType)|null
         */
        public function getParentInputType() : ?\GraphQL\Type\Definition\InputType
        {
        }
        public function getArgument() : ?\GraphQL\Type\Definition\FieldArgument
        {
        }
        /**
         * @return mixed
         */
        public function getEnumValue()
        {
        }
        public function enter(\GraphQL\Language\AST\Node $node)
        {
        }
        /**
         * @return (Type & OutputType) | null
         */
        public function getType() : ?\GraphQL\Type\Definition\OutputType
        {
        }
        /**
         * @return (CompositeType & Type) | null
         */
        public function getParentType() : ?\GraphQL\Type\Definition\CompositeType
        {
        }
        /**
         * @param NamedTypeNode|ListTypeNode|NonNullTypeNode $inputTypeNode
         *
         * @throws InvariantViolation
         */
        public static function typeFromAST(\GraphQL\Type\Schema $schema, $inputTypeNode) : ?\GraphQL\Type\Definition\Type
        {
        }
        public function getDirective() : ?\GraphQL\Type\Definition\Directive
        {
        }
        public function getFieldDef() : ?\GraphQL\Type\Definition\FieldDefinition
        {
        }
        /**
         * @return mixed|null
         */
        public function getDefaultValue()
        {
        }
        /**
         * @return (Type & InputType) | null
         */
        public function getInputType() : ?\GraphQL\Type\Definition\InputType
        {
        }
        public function leave(\GraphQL\Language\AST\Node $node)
        {
        }
    }
    class Utils
    {
        public static function undefined()
        {
        }
        /**
         * Check if the value is invalid
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function isInvalid($value)
        {
        }
        /**
         * @param object   $obj
         * @param mixed[]  $vars
         * @param string[] $requiredKeys
         *
         * @return object
         */
        public static function assign($obj, array $vars, array $requiredKeys = [])
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return mixed|null
         */
        public static function find($iterable, callable $predicate)
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return array<mixed>
         *
         * @throws Exception
         */
        public static function filter($iterable, callable $predicate) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return array<mixed>
         *
         * @throws Exception
         */
        public static function map($iterable, callable $fn) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return array<mixed>
         *
         * @throws Exception
         */
        public static function mapKeyValue($iterable, callable $fn) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return array<mixed>
         *
         * @throws Exception
         */
        public static function keyMap($iterable, callable $keyFn) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         */
        public static function each($iterable, callable $fn) : void
        {
        }
        /**
         * Splits original iterable to several arrays with keys equal to $keyFn return
         *
         * E.g. Utils::groupBy([1, 2, 3, 4, 5], function($value) {return $value % 3}) will output:
         * [
         *    1 => [1, 4],
         *    2 => [2, 5],
         *    0 => [3],
         * ]
         *
         * $keyFn is also allowed to return array of keys. Then value will be added to all arrays with given keys
         *
         * @param iterable<mixed> $iterable
         *
         * @return array<array<mixed>>
         */
        public static function groupBy($iterable, callable $keyFn) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         *
         * @return array<mixed>
         */
        public static function keyValMap($iterable, callable $keyFn, callable $valFn) : array
        {
        }
        /**
         * @param iterable<mixed> $iterable
         */
        public static function every($iterable, callable $predicate) : bool
        {
        }
        /**
         * @param iterable<mixed> $iterable
         */
        public static function some($iterable, callable $predicate) : bool
        {
        }
        /**
         * @param bool   $test
         * @param string $message
         */
        public static function invariant($test, $message = '')
        {
        }
        /**
         * @param Type|mixed $var
         *
         * @return string
         */
        public static function getVariableType($var)
        {
        }
        /**
         * @param mixed $var
         *
         * @return string
         */
        public static function printSafeJson($var)
        {
        }
        /**
         * @param Type|mixed $var
         *
         * @return string
         */
        public static function printSafe($var)
        {
        }
        /**
         * UTF-8 compatible chr()
         *
         * @param string $ord
         * @param string $encoding
         *
         * @return string
         */
        public static function chr($ord, $encoding = 'UTF-8')
        {
        }
        /**
         * UTF-8 compatible ord()
         *
         * @param string $char
         * @param string $encoding
         *
         * @return mixed
         */
        public static function ord($char, $encoding = 'UTF-8')
        {
        }
        /**
         * Returns UTF-8 char code at given $positing of the $string
         *
         * @param string $string
         * @param int    $position
         *
         * @return mixed
         */
        public static function charCodeAt($string, $position)
        {
        }
        /**
         * @param int|null $code
         *
         * @return string
         */
        public static function printCharCode($code)
        {
        }
        /**
         * Upholds the spec rules about naming.
         *
         * @param string $name
         *
         * @throws Error
         */
        public static function assertValidName($name)
        {
        }
        /**
         * Returns an Error if a name is invalid.
         *
         * @param string    $name
         * @param Node|null $node
         *
         * @return Error|null
         */
        public static function isValidNameError($name, $node = null)
        {
        }
        /**
         * Wraps original callable with PHP error handling (using set_error_handler).
         * Resulting callable will collect all PHP errors that occur during the call in $errors array.
         *
         * @param ErrorException[] $errors
         *
         * @return callable
         */
        public static function withErrorHandling(callable $fn, array &$errors)
        {
        }
        /**
         * @param string[] $items
         *
         * @return string
         */
        public static function quotedOrList(array $items)
        {
        }
        /**
         * @param string[] $items
         *
         * @return string
         */
        public static function orList(array $items)
        {
        }
        /**
         * Given an invalid input string and a list of valid options, returns a filtered
         * list of valid options sorted based on their similarity with the input.
         *
         * Includes a custom alteration from Damerau-Levenshtein to treat case changes
         * as a single edit which helps identify mis-cased values with an edit distance
         * of 1
         *
         * @param string   $input
         * @param string[] $options
         *
         * @return string[]
         */
        public static function suggestionList($input, array $options)
        {
        }
    }
    /**
     * Coerces a PHP value given a GraphQL Type.
     *
     * Returns either a value which is valid for the provided type or a list of
     * encountered coercion errors.
     */
    class Value
    {
        /**
         * Given a type and any value, return a runtime value coerced to match the type.
         *
         * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull $type
         * @param mixed[]                                                $path
         */
        public static function coerceValue($value, \GraphQL\Type\Definition\InputType $type, $blameNode = null, ?array $path = null)
        {
        }
    }
}
namespace GraphQL\Validator {
    abstract class ASTValidationContext
    {
        /** @var DocumentNode */
        protected $ast;
        /** @var Error[] */
        protected $errors;
        /** @var Schema */
        protected $schema;
        public function __construct(\GraphQL\Language\AST\DocumentNode $ast, ?\GraphQL\Type\Schema $schema = null)
        {
        }
        public function reportError(\GraphQL\Error\Error $error)
        {
        }
        /**
         * @return Error[]
         */
        public function getErrors()
        {
        }
        /**
         * @return DocumentNode
         */
        public function getDocument()
        {
        }
        public function getSchema() : ?\GraphQL\Type\Schema
        {
        }
    }
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
     * which returns a visitor (see the [GraphQL\Language\Visitor API](reference.md#graphqllanguagevisitor)).
     *
     * Visitor methods are expected to return an instance of [GraphQL\Error\Error](reference.md#graphqlerrorerror),
     * or array of such instances when invalid.
     *
     * Optionally a custom TypeInfo instance may be provided. If not provided, one
     * will be created from the provided schema.
     */
    class DocumentValidator
    {
        /**
         * Primary method for query validation. See class description for details.
         *
         * @param ValidationRule[]|null $rules
         *
         * @return Error[]
         *
         * @api
         */
        public static function validate(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, ?array $rules = null, ?\GraphQL\Utils\TypeInfo $typeInfo = null)
        {
        }
        /**
         * Returns all global validation rules.
         *
         * @return ValidationRule[]
         *
         * @api
         */
        public static function allRules()
        {
        }
        public static function defaultRules()
        {
        }
        /**
         * @return QuerySecurityRule[]
         */
        public static function securityRules()
        {
        }
        public static function sdlRules()
        {
        }
        /**
         * This uses a specialized visitor which runs multiple visitors in parallel,
         * while maintaining the visitor skip and break API.
         *
         * @param ValidationRule[] $rules
         *
         * @return Error[]
         */
        public static function visitUsingRules(\GraphQL\Type\Schema $schema, \GraphQL\Utils\TypeInfo $typeInfo, \GraphQL\Language\AST\DocumentNode $documentNode, array $rules)
        {
        }
        /**
         * Returns global validation rule by name. Standard rules are named by class name, so
         * example usage for such rules:
         *
         * $rule = DocumentValidator::getRule(GraphQL\Validator\Rules\QueryComplexity::class);
         *
         * @param string $name
         *
         * @return ValidationRule
         *
         * @api
         */
        public static function getRule($name)
        {
        }
        /**
         * Add rule to list of global validation rules
         *
         * @api
         */
        public static function addRule(\GraphQL\Validator\Rules\ValidationRule $rule)
        {
        }
        public static function isError($value)
        {
        }
        public static function append(&$arr, $items)
        {
        }
        /**
         * Utility which determines if a value literal node is valid for an input type.
         *
         * Deprecated. Rely on validation for documents co
         * ntaining literal values.
         *
         * @deprecated
         *
         * @return Error[]
         */
        public static function isValidLiteralValue(\GraphQL\Type\Definition\Type $type, $valueNode)
        {
        }
        /**
         * @param ValidationRule[]|null $rules
         *
         * @return Error[]
         *
         * @throws Exception
         */
        public static function validateSDL(\GraphQL\Language\AST\DocumentNode $documentAST, ?\GraphQL\Type\Schema $schemaToExtend = null, ?array $rules = null)
        {
        }
        public static function assertValidSDL(\GraphQL\Language\AST\DocumentNode $documentAST)
        {
        }
        public static function assertValidSDLExtension(\GraphQL\Language\AST\DocumentNode $documentAST, \GraphQL\Type\Schema $schema)
        {
        }
    }
}
namespace GraphQL\Validator\Rules {
    abstract class ValidationRule
    {
        /** @var string */
        protected $name;
        public function getName()
        {
        }
        public function __invoke(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * Returns structure suitable for GraphQL\Language\Visitor
         *
         * @see \GraphQL\Language\Visitor
         *
         * @return mixed[]
         */
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * Returns structure suitable for GraphQL\Language\Visitor
         *
         * @see \GraphQL\Language\Visitor
         *
         * @return mixed[]
         */
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
    }
    class CustomValidationRule extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function __construct($name, callable $visitorFn)
        {
        }
        /**
         * @return Error[]
         */
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
    }
    abstract class QuerySecurityRule extends \GraphQL\Validator\Rules\ValidationRule
    {
        public const DISABLED = 0;
        /**
         * check if equal to 0 no check is done. Must be greater or equal to 0.
         *
         * @param string $name
         * @param int    $value
         */
        protected function checkIfGreaterOrEqualToZero($name, $value)
        {
        }
        protected function getFragment(\GraphQL\Language\AST\FragmentSpreadNode $fragmentSpread)
        {
        }
        /**
         * @return FragmentDefinitionNode[]
         */
        protected function getFragments()
        {
        }
        /**
         * @param callable[] $validators
         *
         * @return callable[]
         */
        protected function invokeIfNeeded(\GraphQL\Validator\ValidationContext $context, array $validators)
        {
        }
        protected abstract function isEnabled();
        protected function gatherFragmentDefinition(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * Given a selectionSet, adds all of the fields in that selection to
         * the passed in map of fields, and returns it at the end.
         *
         * Note: This is not the same as execution's collectFields because at static
         * time we do not know what object type will be used, so we unconditionally
         * spread in all fragments.
         *
         * @see \GraphQL\Validator\Rules\OverlappingFieldsCanBeMerged
         *
         * @param Type|null $parentType
         *
         * @return ArrayObject
         */
        protected function collectFieldASTsAndDefs(\GraphQL\Validator\ValidationContext $context, $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, ?\ArrayObject $visitedFragmentNames = null, ?\ArrayObject $astAndDefs = null)
        {
        }
        protected function getFieldName(\GraphQL\Language\AST\FieldNode $node)
        {
        }
    }
    class DisableIntrospection extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        public const ENABLED = 1;
        public function __construct($enabled = self::ENABLED)
        {
        }
        public function setEnabled($enabled)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function introspectionDisabledMessage()
        {
        }
        protected function isEnabled()
        {
        }
    }
    /**
     * Executable definitions
     *
     * A GraphQL document is only valid for execution if all definitions are either
     * operation or fragment definitions.
     */
    class ExecutableDefinitions extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function nonExecutableDefinitionMessage($defName)
        {
        }
    }
    class FieldsOnCorrectType extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string   $fieldName
         * @param string   $type
         * @param string[] $suggestedTypeNames
         * @param string[] $suggestedFieldNames
         *
         * @return string
         */
        public static function undefinedFieldMessage($fieldName, $type, array $suggestedTypeNames, array $suggestedFieldNames)
        {
        }
    }
    class FragmentsOnCompositeTypes extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function inlineFragmentOnNonCompositeErrorMessage($type)
        {
        }
        public static function fragmentOnNonCompositeErrorMessage($fragName, $type)
        {
        }
    }
    /**
     * Known argument names
     *
     * A GraphQL field is only valid if all supplied arguments are defined by
     * that field.
     */
    class KnownArgumentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string[] $suggestedArgs
         */
        public static function unknownArgMessage($argName, $fieldName, $typeName, array $suggestedArgs)
        {
        }
    }
    /**
     * Known argument names on directives
     *
     * A GraphQL directive is only valid if all supplied arguments are defined by
     * that field.
     */
    class KnownArgumentNamesOnDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * @param string[] $suggestedArgs
         */
        public static function unknownDirectiveArgMessage($argName, $directiveName, array $suggestedArgs)
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
    }
    class KnownDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
        public static function unknownDirectiveMessage($directiveName)
        {
        }
        public static function misplacedDirectiveMessage($directiveName, $location)
        {
        }
    }
    class KnownFragmentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string $fragName
         */
        public static function unknownFragmentMessage($fragName)
        {
        }
    }
    /**
     * Known type names
     *
     * A GraphQL document is only valid if referenced types (specifically
     * variable definitions and fragment conditions) are defined by the type schema.
     */
    class KnownTypeNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string   $type
         * @param string[] $suggestedTypes
         */
        public static function unknownTypeMessage($type, array $suggestedTypes)
        {
        }
    }
    /**
     * Lone anonymous operation
     *
     * A GraphQL document is only valid if when it contains an anonymous operation
     * (the query short-hand) that it contains only that one operation definition.
     */
    class LoneAnonymousOperation extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function anonOperationNotAloneMessage()
        {
        }
    }
    /**
     * Lone Schema definition
     *
     * A GraphQL document is only valid if it contains only one schema definition.
     */
    class LoneSchemaDefinition extends \GraphQL\Validator\Rules\ValidationRule
    {
        public static function schemaDefinitionNotAloneMessage()
        {
        }
        public static function canNotDefineSchemaWithinExtensionMessage()
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
    }
    class NoFragmentCycles extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var bool[] */
        public $visitedFrags;
        /** @var FragmentSpreadNode[] */
        public $spreadPath;
        /** @var (int|null)[] */
        public $spreadPathIndexByName;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string[] $spreadNames
         */
        public static function cycleErrorMessage($fragName, array $spreadNames = [])
        {
        }
    }
    /**
     * A GraphQL operation is only valid if all variables encountered, both directly
     * and via fragment spreads, are defined by that operation.
     */
    class NoUndefinedVariables extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function undefinedVarMessage($varName, $opName = null)
        {
        }
    }
    class NoUnusedFragments extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var OperationDefinitionNode[] */
        public $operationDefs;
        /** @var FragmentDefinitionNode[] */
        public $fragmentDefs;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function unusedFragMessage($fragName)
        {
        }
    }
    class NoUnusedVariables extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var VariableDefinitionNode[] */
        public $variableDefs;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function unusedVariableMessage($varName, $opName = null)
        {
        }
    }
    class OverlappingFieldsCanBeMerged extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * @param string $responseName
         * @param string $reason
         */
        public static function fieldsConflictMessage($responseName, $reason)
        {
        }
        public static function reasonMessage($reason)
        {
        }
    }
    class PossibleFragmentSpreads extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function typeIncompatibleAnonSpreadMessage($parentType, $fragType)
        {
        }
        public static function typeIncompatibleSpreadMessage($fragName, $parentType, $fragType)
        {
        }
    }
    class ProvidedRequiredArguments extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function missingFieldArgMessage($fieldName, $argName, $type)
        {
        }
    }
    /**
     * Provided required arguments on directives
     *
     * A directive is only valid if all required (non-null without a
     * default value) field arguments have been provided.
     */
    class ProvidedRequiredArgumentsOnDirectives extends \GraphQL\Validator\Rules\ValidationRule
    {
        public static function missingDirectiveArgMessage(string $directiveName, string $argName, string $type)
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
    }
    class QueryComplexity extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        public function __construct($maxQueryComplexity)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getRawVariableValues()
        {
        }
        /**
         * @param mixed[]|null $rawVariableValues
         */
        public function setRawVariableValues(?array $rawVariableValues = null)
        {
        }
        public function getQueryComplexity()
        {
        }
        public function getMaxQueryComplexity()
        {
        }
        /**
         * Set max query complexity. If equal to 0 no check is done. Must be greater or equal to 0.
         */
        public function setMaxQueryComplexity($maxQueryComplexity)
        {
        }
        public static function maxQueryComplexityErrorMessage($max, $count)
        {
        }
        protected function isEnabled()
        {
        }
    }
    class QueryDepth extends \GraphQL\Validator\Rules\QuerySecurityRule
    {
        public function __construct($maxQueryDepth)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getMaxQueryDepth()
        {
        }
        /**
         * Set max query depth. If equal to 0 no check is done. Must be greater or equal to 0.
         */
        public function setMaxQueryDepth($maxQueryDepth)
        {
        }
        public static function maxQueryDepthErrorMessage($max, $count)
        {
        }
        protected function isEnabled()
        {
        }
    }
    class ScalarLeafs extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function noSubselectionAllowedMessage($field, $type)
        {
        }
        public static function requiredSubselectionMessage($field, $type)
        {
        }
    }
    class SingleFieldSubscription extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * @return array<string, callable>
         */
        public function getVisitor(\GraphQL\Validator\ValidationContext $context) : array
        {
        }
        public static function multipleFieldsInOperation(?string $operationName) : string
        {
        }
    }
    class UniqueArgumentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var NameNode[] */
        public $knownArgNames;
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
        public static function duplicateArgMessage($argName)
        {
        }
    }
    /**
     * Unique directive names per location
     *
     * A GraphQL document is only valid if all non-repeatable directives at
     * a given location are uniquely named.
     */
    class UniqueDirectivesPerLocation extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
        public static function duplicateDirectiveMessage($directiveName)
        {
        }
    }
    class UniqueFragmentNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var NameNode[] */
        public $knownFragmentNames;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function duplicateFragmentNameMessage($fragName)
        {
        }
    }
    class UniqueInputFieldNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var array<string, NameNode> */
        public $knownNames;
        /** @var array<array<string, NameNode>> */
        public $knownNameStack;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public function getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context)
        {
        }
        public function getASTVisitor(\GraphQL\Validator\ASTValidationContext $context)
        {
        }
        public static function duplicateInputFieldMessage($fieldName)
        {
        }
    }
    class UniqueOperationNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var NameNode[] */
        public $knownOperationNames;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function duplicateOperationNameMessage($operationName)
        {
        }
    }
    class UniqueVariableNames extends \GraphQL\Validator\Rules\ValidationRule
    {
        /** @var NameNode[] */
        public $knownVariableNames;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function duplicateVariableMessage($variableName)
        {
        }
    }
    /**
     * Value literals of correct type
     *
     * A GraphQL document is only valid if all value literals are of the type
     * expected at their position.
     */
    class ValuesOfCorrectType extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function badValueMessage($typeName, $valueName, $message = null)
        {
        }
        public static function badArgumentValueMessage($typeName, $valueName, $fieldName, $argName, $message = null)
        {
        }
        public static function requiredFieldMessage($typeName, $fieldName, $fieldTypeName)
        {
        }
        public static function unknownFieldMessage($typeName, $fieldName, $message = null)
        {
        }
    }
    class VariablesAreInputTypes extends \GraphQL\Validator\Rules\ValidationRule
    {
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        public static function nonInputTypeOnVarMessage($variableName, $typeName)
        {
        }
    }
    class VariablesInAllowedPosition extends \GraphQL\Validator\Rules\ValidationRule
    {
        /**
         * A map from variable names to their definition nodes.
         *
         * @var VariableDefinitionNode[]
         */
        public $varDefMap;
        public function getVisitor(\GraphQL\Validator\ValidationContext $context)
        {
        }
        /**
         * A var type is allowed if it is the same or more strict than the expected
         * type. It can be more strict if the variable type is non-null when the
         * expected type is nullable. If both are list types, the variable item type can
         * be more strict than the expected item type.
         */
        public static function badVarPosMessage($varName, $varType, $expectedType)
        {
        }
    }
}
namespace GraphQL\Validator {
    class SDLValidationContext extends \GraphQL\Validator\ASTValidationContext
    {
    }
    /**
     * An instance of this class is passed as the "this" context to all validators,
     * allowing access to commonly useful contextual information from within a
     * validation rule.
     */
    class ValidationContext extends \GraphQL\Validator\ASTValidationContext
    {
        public function __construct(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, \GraphQL\Utils\TypeInfo $typeInfo)
        {
        }
        /**
         * @return mixed[][] List of ['node' => VariableNode, 'type' => ?InputObjectType]
         */
        public function getRecursiveVariableUsages(\GraphQL\Language\AST\OperationDefinitionNode $operation)
        {
        }
        /**
         * @return FragmentDefinitionNode[]
         */
        public function getRecursivelyReferencedFragments(\GraphQL\Language\AST\OperationDefinitionNode $operation)
        {
        }
        /**
         * @param OperationDefinitionNode|FragmentDefinitionNode $node
         *
         * @return FragmentSpreadNode[]
         */
        public function getFragmentSpreads(\GraphQL\Language\AST\HasSelectionSet $node) : array
        {
        }
        /**
         * @param string $name
         *
         * @return FragmentDefinitionNode|null
         */
        public function getFragment($name)
        {
        }
        public function getType() : ?\GraphQL\Type\Definition\OutputType
        {
        }
        /**
         * @return (CompositeType & Type) | null
         */
        public function getParentType() : ?\GraphQL\Type\Definition\CompositeType
        {
        }
        /**
         * @return (Type & InputType) | null
         */
        public function getInputType() : ?\GraphQL\Type\Definition\InputType
        {
        }
        /**
         * @return (Type&InputType)|null
         */
        public function getParentInputType() : ?\GraphQL\Type\Definition\InputType
        {
        }
        /**
         * @return FieldDefinition
         */
        public function getFieldDef()
        {
        }
        public function getDirective()
        {
        }
        public function getArgument()
        {
        }
    }
}
namespace {
    /**
     * Formats the name of a field so that it plays nice with GraphiQL
     *
     * @param string $field_name Name of the field
     *
     * @return string Name of the field
     * @since  0.0.2
     */
    function graphql_format_field_name($field_name)
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
    function graphql_format_type_name($type_name)
    {
    }
    /**
     * Provides a simple way to run a GraphQL query with out posting a request to the endpoint.
     *
     * @param array $request_data The GraphQL request data (query, variables, operation_name).
     *
     * @return array
     * @throws Exception
     * @since  0.2.0
     */
    function graphql($request_data = [])
    {
    }
    /**
     * Previous access function for running GraphQL queries directly. This function will
     * eventually be deprecated in favor of `graphql`.
     *
     * @param string $query          The GraphQL query to run
     * @param string $operation_name The name of the operation
     * @param array  $variables      Variables to be passed to your GraphQL request
     *
     * @return array
     * @throws \Exception
     * @since  0.0.2
     */
    function do_graphql_request($query, $operation_name = '', $variables = [])
    {
    }
    /**
     * Determine when to register types
     *
     * @return string
     */
    function get_graphql_register_action()
    {
    }
    /**
     * Given a type name and interface name, this applies the interface to the Type.
     *
     * Should be used at the `graphql_register_types` hook.
     *
     * @param mixed|string|array<string> $interface_names Array of one or more names of the GraphQL
     *                                                    Interfaces to apply to the GraphQL Types
     * @param mixed|string|array<string> $type_names      Array of one or more names of the GraphQL
     *                                                    Types to apply the interfaces to
     *
     * example:
     * The following would register the "MyNewInterface" interface to the Post and Page type in the
     * Schema.
     *
     * register_graphql_interfaces_to_types( [ 'MyNewInterface' ], [ 'Post', 'Page' ] );
     *
     * @return void
     */
    function register_graphql_interfaces_to_types($interface_names, $type_names)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds a Type to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @throws Exception
     * @return void
     */
    function register_graphql_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an Interface Type to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @throws Exception
     * @return void
     */
    function register_graphql_interface_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an ObjectType to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @return void
     */
    function register_graphql_object_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an InputType to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @return void
     */
    function register_graphql_input_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an UnionType to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @throws Exception
     *
     * @return void
     */
    function register_graphql_union_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and a $config array, this adds an EnumType to the TypeRegistry
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The Type config
     *
     * @return void
     */
    function register_graphql_enum_type(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name, Field Name, and a $config array, this adds a Field to a registered Type in
     * the TypeRegistry
     *
     * @param string $type_name  The name of the Type to add the field to
     * @param string $field_name The name of the Field to add to the Type
     * @param array  $config     The Type config
     *
     * @return void
     */
    function register_graphql_field(string $type_name, string $field_name, array $config)
    {
    }
    /**
     * Given a Type Name and an array of field configs, this adds the fields to the registered type in
     * the TypeRegistry
     *
     * @param string $type_name The name of the Type to add the fields to
     * @param array  $fields    An array of field configs
     *
     * @return void
     */
    function register_graphql_fields(string $type_name, array $fields)
    {
    }
    /**
     * Given a config array for a connection, this registers a connection by creating all appropriate
     * fields and types for the connection
     *
     * @param array $config Array to configure the connection
     *
     * @throws Exception
     * @return void
     */
    function register_graphql_connection(array $config)
    {
    }
    /**
     * Given a config array for a custom Scalar, this registers a Scalar for use in the Schema
     *
     * @param string $type_name The name of the Type to register
     * @param array  $config    The config for the scalar type to register
     *
     * @throws Exception
     * @return void
     */
    function register_graphql_scalar(string $type_name, array $config)
    {
    }
    /**
     * Given a Type Name and Field Name, this removes the field from the TypeRegistry
     *
     * @param string $type_name  The name of the Type to remove the field from
     * @param string $field_name The name of the field to remove
     *
     * @return void
     */
    function deregister_graphql_field(string $type_name, string $field_name)
    {
    }
    /**
     * Given a Mutation Name and Config array, this adds a Mutation to the Schema
     *
     * @param string $mutation_name The name of the Mutation to register
     * @param array  $config        The config for the mutation
     *
     * @throws Exception
     *
     * @return void
     */
    function register_graphql_mutation(string $mutation_name, array $config)
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
     * @return bool
     * @since 0.4.1
     */
    function is_graphql_request()
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
     * @return bool
     * @since 0.4.1
     */
    function is_graphql_http_request()
    {
    }
    /**
     * Registers a GraphQL Settings Section
     *
     * @param string $slug   The slug of the group being registered
     * @param array  $config Array configuring the section. Should include: title
     *
     * @return void
     */
    function register_graphql_settings_section(string $slug, array $config)
    {
    }
    /**
     * Registers a GraphQL Settings Field
     *
     * @param string $group  The name of the group to register a setting field to
     * @param array  $config The config for the settings field being registered
     *
     * @return void
     */
    function register_graphql_settings_field(string $group, array $config)
    {
    }
    /**
     * Given a message and an optional config array
     *
     * @param mixed|string|array $message The debug message
     * @param array              $config  The debug config. Should be an associative array of keys and
     *                                    values.
     *                                    $config['type'] will set the "type" of the log, default type
     *                                    is GRAPHQL_DEBUG. Other fields added to $config will be
     *                                    merged into the debug entry.
     *
     * @return void
     */
    function graphql_debug($message, $config = [])
    {
    }
    /**
     * Check if the name is valid for use in GraphQL
     *
     * @param string $type_name The name of the type to validate
     *
     * @return bool
     */
    function is_valid_graphql_name(string $type_name)
    {
    }
    /**
     * Registers a series of GraphQL Settings Fields
     *
     * @param string $group  The name of the settings group to register fields to
     * @param array  $fields Array of field configs to register to the group
     *
     * @return void
     */
    function register_graphql_settings_fields(string $group, array $fields)
    {
    }
    /**
     * Get an option value from GraphQL settings
     *
     * @param string $option_name  The key of the option to return
     * @param mixed  $default      The default value the setting should return if no value is set
     * @param string $section_name The settings group section that the option belongs to
     *
     * @return mixed|string|int|boolean
     */
    function get_graphql_setting(string $option_name, $default = '', $section_name = 'graphql_general_settings')
    {
    }
    /**
     * Runs when WPGraphQL is activated
     *
     * @return void
     */
    function graphql_activation_callback()
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
    function delete_graphql_data()
    {
    }
    /**
     * Function that instantiates the plugins main class
     *
     * @return object
     */
    function graphql_init()
    {
    }
}
namespace {
define('WPGRAPHQL_VERSION', '0.0.0');
}
