<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/includes
 * @author     Your Name <email@example.com>
 */
class Wc_Granada_Ajax_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-granada-ajax',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
