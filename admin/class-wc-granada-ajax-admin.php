<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/admin
 * @author     Your Name <email@example.com>
 */
class Wc_Granada_Ajax_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wc_granada_ajax    The ID of this plugin.
	 */
	private $wc_granada_ajax;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wc_granada_ajax       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wc_granada_ajax, $version ) {

		$this->wc_granada_ajax = $wc_granada_ajax;
		$this->version = $version;
	}

	/**
	 * Add shortcodes
	 *
	 * Function to add shortcodes to plugin
	 *
	 * @since 1.0.0
	 **/
	public function add_shortcodes()
	{
		/***
		 * The path with the shortcodes
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/shortcodes/wc-granada-shortcodes.php';
		// The shortcodes.
		add_shortcode( 'formulario-alta', 'pinta_formulario' );
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_Granada_Ajax_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Granada_Ajax_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wc_granada_ajax, plugin_dir_url( __FILE__ ) . 'css/wc-granada-ajax-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_Granada_Ajax_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_Granada_Ajax_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wc_granada_ajax, plugin_dir_url( __FILE__ ) . 'js/wc-granada-ajax-admin.js', array( 'jquery' ), $this->version, false );

	}

}
