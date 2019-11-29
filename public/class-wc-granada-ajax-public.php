<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/public
 * @author     Your Name <email@example.com>
 */
class Wc_Granada_Ajax_Public {

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
	 * @param      string    $wc_granada_ajax       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wc_granada_ajax, $version ) {

		$this->wc_granada_ajax = $wc_granada_ajax;
		$this->version = $version;

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/wc-granada-ajax-functions.php';

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->wc_granada_ajax, plugin_dir_url( __FILE__ ) . 'css/wc-granada-ajax-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->wc_granada_ajax, plugin_dir_url( __FILE__ ) . 'js/wc-granada-ajax-public.js', array( 'jquery' ), $this->version, false );
		wp_localize_script(
			$this->wc_granada_ajax,
			'MyAjax',
			array(
				'ajaxurl'    => admin_url( 'admin-ajax.php' ),
				'ajax_nonce' => wp_create_nonce( 'my_nonce' ),
			)
		);

		wp_enqueue_script( 'ajax-blockUI', plugin_dir_url( __FILE__ ) . 'js/jquery.blockUI.min.js', array( 'jquery' ), $this->version, false );

	}

}
