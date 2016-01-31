<?php
/**
 * HEAVILY INFLUENCED BY
 * @see http://www.wpexplorer.com/wordpress-page-templates-plugin/
 */
class PageTemplateAdder {

    /**
    * A Unique Identifier
    */
    protected $plugin_slug;

    /**
    * A reference to an instance of this class.
    */
    private static $instance;

    /**
    * The array of templates that this plugin tracks.
    */
    protected $templates;


    /**
    * Returns an instance of this class.
    */
    public static function get_instance() {

        if( null == self::$instance ) {
            self::$instance = new PageTemplateAdder();
        }

        return self::$instance;
    }

    /**
    * Initializes the plugin by setting filters and administration functions.
    */
    private function __construct() {

        $this->plugin_slug = 'zw-ch-cv';

        $this->templates = array();


        // Add a filter to the attributes metabox to inject template into the cache.
        add_filter(
            'page_attributes_dropdown_pages_args',
            array( $this, 'register_project_templates' )
        );


        // Add a filter to the save post to inject out template into the page cache
        add_filter(
            'wp_insert_post_data',
            array( $this, 'register_project_templates' )
        );

        // Enqueue a custom stylesheet when called
        add_action(
            'enqueue_custom_stylesheet',
            array( $this, 'enqueue_custom_style' ), 10, 1
        );

        // Add a filter to the template include to determine if the page has a custom template assigned
        // If found, enqueue the stylesheet and return the template
        add_filter(
            'template_include',
            array( $this, 'view_project_template')
        );


        // Add your templates to this array.
        $this->templates = array(
            'page-cv.php'     => 'Paul\'s CV',
        );
    }


    /**
     * Queue up a custom stylesheet, if found, based on a passed in template name.
     * Assumes that the css file would have the same name as the template.
     * Ex: for custom template "custom-template.php", enqueue "/css/custom-template.css"
     *
     * @param $custom_template [str] name of our custom template
     */
    public function enqueue_custom_style( $custom_template ) {

        if(!isset($this->templates[$custom_template]))
            return;

        //grab the filename of the template, sans the  '.php' suffix
        $filename = basename($custom_template, '.php');

        $custom_stylesheet = '/css/' . $filename . '.css';

        if( file_exists( dirname(__FILE__) . $custom_stylesheet ) ) {

            wp_enqueue_style(
                $this->plugin_slug . '-' . $filename,
                plugins_url($custom_stylesheet, __FILE__),
                array());
        }
    }

    /**
    * Adds our template to the pages cache in order to trick WordPress
    * into thinking the template file exists where it doesn't really exist.
    */
    public function register_project_templates( $atts ) {

        // Create the key used for the themes cache
        $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

        // Retrieve the cache list.
        // If it doesn't exist, or it's empty prepare an array
        $templates = wp_get_theme()->get_page_templates();
        if ( empty( $templates ) ) {
            $templates = array();
        }

        // New cache, therefore remove the old one
        wp_cache_delete( $cache_key , 'themes');

        // Now add our template to the list of templates by merging our templates
        // with the existing templates array from the cache.
        $templates = array_merge( $templates, $this->templates );

        // Add the modified cache to allow WordPress to pick it up for listing
        // available templates
        wp_cache_add( $cache_key, $templates, 'themes', 1800 );

        return $atts;
    }

    /**
    * Checks if the template is assigned to the page
    */
    public function view_project_template( $template ) {

        global $post;

        /* On search pages, for example, there may be no $post object */
        if( is_null( $post ) ) {

            return $template;
        }

        $custom_post_template = get_post_meta( $post->ID, '_wp_page_template', true );

        if (!isset($this->templates[$custom_post_template] ) ) {

            return $template;
        }

        // at this point, we've found a custom template
        $file = plugin_dir_path(__FILE__) . $custom_post_template;

        // Just to be safe, we check if the file exist first
        if( file_exists( $file ) ) {

            // Add an action to enqueue stylesheet based on if they exist in the
            // /css folder with the same name as the template
            do_action( 'enqueue_custom_stylesheet', $custom_post_template );

            return $file;
        }
        else { echo $file; }

        return $template;
    }
}

add_action( 'plugins_loaded', array( 'PageTemplateAdder', 'get_instance' ) );
