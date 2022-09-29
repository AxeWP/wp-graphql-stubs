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
        /**
         * Use post date based comparison
         *
         * @return void
         */
        private function compare_with_date()
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
        private function compare_with($by, $order)
        {
        }
        /**
         * Compare with meta key field
         *
         * @param string $meta_key post meta key
         * @param string $order    The comparison string
         *
         * @return void
         */
        private function compare_with_meta_field(string $meta_key, string $order)
        {
        }
        /**
         * Get the actual meta key if any
         *
         * @param string $by The order by key
         *
         * @return string|null
         */
        private function get_meta_key($by)
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
        /**
         * Use user login based comparison
         *
         * @return void
         */
        private function compare_with_login()
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
        private function compare_with($by, $order)
        {
        }
        /**
         * Compare with meta key field
         *
         * @param string $meta_key user meta key
         * @param string $order    The comparison string
         *
         * @return void
         */
        private function compare_with_meta_field(string $meta_key, string $order)
        {
        }
        /**
         * Get the actual meta key if any
         *
         * @param string $by The order by key
         *
         * @return string|null
         */
        private function get_meta_key($by)
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
         * Whether the loader should cache results or not. In some cases the loader may be used to just
         * get content but not bother with caching it.
         *
         * Default: true
         *
         * @var bool
         */
        private $shouldCache = true;
        /**
         * This stores an array of items that have already been loaded
         *
         * @var array
         */
        private $cached = [];
        /**
         * This stores an array of IDs that need to be loaded
         *
         * @var array
         */
        private $buffer = [];
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
         * Given an array of keys, this yields the object from the cached results
         *
         * @param array $keys   The keys to generate results for
         * @param array $result The results for all keys
         *
         * @return Generator
         */
        private function generate_many(array $keys, array $result)
        {
        }
        /**
         * This checks to see if any items are in the buffer, and if there are this
         * executes the loaders `loadKeys` method to load the items and adds them
         * to the cache if necessary
         *
         * @return array
         * @throws Exception
         */
        private function load_buffered()
        {
        }
        /**
         * This helps to ensure null values aren't being loaded by accident.
         *
         * @param mixed $key
         *
         * @return string
         */
        private function get_scalar_key_hint($key)
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
         * Stores the input fields static definition
         *
         * @var array $input_fields
         */
        private static $input_fields = [];
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
        /**
         * Method to add user roles to a user object
         *
         * @param int   $user_id The ID of the user
         * @param array $roles   List of roles that need to get added to the user
         *
         * @return void
         * @throws Exception
         */
        private static function add_user_roles($user_id, $roles)
        {
        }
        /**
         * Method to check if the user role is valid, and if the current user has permission to add, or
         * remove it from a user.
         *
         * @param string $role    Name of the role trying to get added to a user object
         * @param int    $user_id The ID of the user being mutated
         *
         * @return mixed|bool|\WP_Error
         */
        private static function verify_user_role($role, $user_id)
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
         * Adds the model visibility fields to the data
         *
         * @return void
         */
        private function add_model_visibility()
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
     * @property boolean $isPrivacyPage
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
        /**
         * Was a username or email address provided?
         *
         * @param array $input The input args.
         *
         * @return bool
         */
        private static function was_username_provided($input)
        {
        }
        /**
         * Get WP_User object representing this user
         *
         * @param  string $username The user's username or email address.
         *
         * @return WP_User|false WP_User object on success, false on failure.
         */
        private static function get_user_data($username)
        {
        }
        /**
         * Get the error message indicating why the user wasn't found
         *
         * @param  string $username The user's username or email address.
         *
         * @return string
         */
        private static function get_user_not_found_error_message(string $username)
        {
        }
        /**
         * Is the provided username arg an email address?
         *
         * @param  string $username The user's username or email address.
         *
         * @return bool
         */
        private static function is_email_address(string $username)
        {
        }
        /**
         * Get the subject of the password reset email
         *
         * @param WP_User $user_data User data
         *
         * @return string
         */
        private static function get_email_subject($user_data)
        {
        }
        /**
         * Get the site name.
         *
         * @return string
         */
        private static function get_site_name()
        {
        }
        /**
         * Get the message body of the password reset email
         *
         * @param WP_User $user_data User data
         * @param string   $key       Password reset key
         *
         * @return string
         */
        private static function get_email_message($user_data, $key)
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
         * Cached global wp_the_query.
         *
         * @var WP_Query
         */
        private $global_wp_the_query;
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
         * Apply filters and do actions before GraphQL execution
         *
         * @return void
         */
        private function before_execute()
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
         * Performs actions and runs filters after execution completes
         *
         * @param mixed|array|object $response The response from execution. Array for batch requests,
         *                                     single object for individual requests
         *
         * @return array
         *
         * @throws Exception
         */
        private function after_execute($response)
        {
        }
        /**
         * Apply filters and do actions after GraphQL execution
         *
         * @param mixed|array|object $response The response for your GraphQL request
         * @param mixed|Int|null     $key      The array key of the params for batch requests
         *
         * @return array
         */
        private function after_execute_actions($response, $key = null)
        {
        }
        /**
         * Run action for a request.
         *
         * @param OperationParams $params OperationParams for the request.
         *
         * @return void
         */
        private function do_action($params)
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
        /**
         * Create the GraphQL server that will process the request.
         *
         * @return StandardServer
         */
        private function get_server()
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
        /**
         * Parse parameters and proxy to parse_extensions.
         *
         * @param  array $params Request parameters.
         * @return array
         */
        private function parse_params($params)
        {
        }
        /**
         * Parse query extensions.
         *
         * @param  array $params Request parameters.
         * @return array
         */
        private function parse_extensions($params)
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
        /**
         * This function sorts the values and applies a filter to allow for easily
         * extending/modifying the shape of the Schema for the enum.
         *
         * @param array  $values
         * @param string $type_name
         * @return mixed
         * @since 0.0.5
         */
        private static function prepare_values($values, $type_name)
        {
        }
    }
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
         * Holds the node_interface definition allowing WPObjectTypes
         * to easily define themselves as a node type by implementing
         * self::$node_interface
         *
         * @var array|Node $node_interface
         * @since 0.0.5
         */
        private static $node_interface;
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
         * Cache post for the resolvers so we can call the setup_postdata only when the actual
         * source post changes
         *
         * @var mixed The WP_Post object, or null
         */
        private static $cached_post = null;
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
         * Stores the instance of the WPGraphQL class
         *
         * @var WPGraphQL The one true WPGraphQL
         * @since  0.0.1
         */
        private static $instance;
        /**
         * Holds the Schema def
         *
         * @var mixed|null|WPSchema $schema The Schema used for the GraphQL API
         */
        protected static $schema;
        /**
         * Holds the TypeRegistry instance
         *
         * @var mixed|null|TypeRegistry $type_registry The registry that holds all GraphQL Types
         */
        protected static $type_registry;
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
         * @var boolean
         */
        protected static $is_graphql_request;
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
         * Setup plugin constants.
         *
         * @since  0.0.1
         * @return void
         */
        private function setup_constants()
        {
        }
        /**
         * Include required files.
         * Uses composer's autoload
         *
         * @since  0.0.1
         * @return void
         */
        private function includes()
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
         * Sets up actions to run at certain spots throughout WordPress and the WPGraphQL execution cycle
         *
         * @return void
         */
        private function actions()
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
         * Setup filters
         *
         * @return void
         */
        private function filters()
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
