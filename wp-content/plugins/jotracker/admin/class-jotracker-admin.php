<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/jojoalmost
 * @since      1.0.0
 *
 * @package    Jotracker
 * @subpackage Jotracker/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jotracker
 * @subpackage Jotracker/admin
 * @author     Yosua <Risandy>
 */
class Jotracker_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of this plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Jotracker_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Jotracker_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/jotracker-admin.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Jotracker_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Jotracker_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/jotracker-admin.js', array('jquery'), $this->version, false);

    }

    public function admin_menus()
    {
        add_options_page('Jotracker', 'Jotracker', 'manage_options', 'jotracker-menu', [$this, 'my_plugin_options']);
    }

    public function my_plugin_options()
    {
        require_once ('partials/jotracker-admin-display.php');
    }
}
