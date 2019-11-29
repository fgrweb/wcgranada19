<?php

/**
 * Fired during plugin activation
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/includes
 * @author     Your Name <email@example.com>
 */
class Wc_Granada_Ajax_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Añadir role granaino.
		// Capabilities como contribuidor.
		add_role(
			'granaino',
			__( 'Granaíno', 'wc-granada-ajax' ),
			array(
				'read'         => true,
				'edit_posts'   => true,
				'delete_posts' => false,
			)
		);
	}

}
