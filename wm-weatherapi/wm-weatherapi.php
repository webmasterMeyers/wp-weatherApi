<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * * Please write a WordPress plugin that demonstrates interacting with the
 * * WordPress plugin API, object oriented programming and has some basic interaction
 * * with the WordPress database. The plugin can do anything you would like. n
 * * include a link to a downloadable ZIP distribution of your WordPress plugin in the
 * * text field below. Note that the code must be 100% authored by you. We will
 * * include this in the criteria we use to evaluate your job application.
 *
 * @link              nobodyfamous.ca
 * @since             1.0.0
 * @package           Wm_Weatherapi
 *
 * @wordpress-plugin
 * Plugin Name:       W.M. WeatherApi
 * Plugin URI:        https://github.com/webmasterMeyers/wp-weatherApi
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Chad Meyers
 * Author URI:        nobodyfamous.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wm-weatherapi
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
define( 'WM_WEATHERAPI_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wm-weatherapi-activator.php
 */
function activate_wm_weatherapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wm-weatherapi-activator.php';
	Wm_Weatherapi_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wm-weatherapi-deactivator.php
 */
function deactivate_wm_weatherapi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wm-weatherapi-deactivator.php';
	Wm_Weatherapi_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wm_weatherapi' );
register_deactivation_hook( __FILE__, 'deactivate_wm_weatherapi' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wm-weatherapi.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wm_weatherapi() {

	$plugin = new Wm_Weatherapi();
	$plugin->run();

}
run_wm_weatherapi();
