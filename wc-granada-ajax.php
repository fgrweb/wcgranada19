<?php

/**
 *
 * @link              https://fgrweb.es
 * @since             1.0.0
 * @package           Wc_Granada_Ajax
 *
 * @wordpress-plugin
 * Plugin Name:       Ajax con WordPress - WordCamp Granada 2019
 * Plugin URI:        https://fgrweb.es
 * Description:       Plugin para la demo de WordCamp Granada 2019
 * Version:           1.0.0
 * Author:            Fernando García Rebolledo
 * Author URI:        https://fgrweb.es/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-granada-ajax
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WC_GRANADA_AJAX_VERSION', '1.0.0' );

/**
 * Currently dir path.
 */
define( 'WC_GRANADA_AJAX_DIR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Currently dir path url.
 */
define( 'WC_GRANADA_AJAX_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-granada-ajax-activator.php
 */
function activate_wc_granada_ajax() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-granada-ajax-activator.php';
	Wc_Granada_Ajax_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-granada-ajax-deactivator.php
 */
function deactivate_wc_granada_ajax() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-granada-ajax-deactivator.php';
	Wc_Granada_Ajax_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_granada_ajax' );
register_deactivation_hook( __FILE__, 'deactivate_wc_granada_ajax' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-granada-ajax.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_granada_ajax() {

	$plugin = new Wc_Granada_Ajax();
	$plugin->run();

}
run_wc_granada_ajax();
