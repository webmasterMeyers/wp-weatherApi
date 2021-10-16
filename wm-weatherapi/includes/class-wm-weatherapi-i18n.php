<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       nobodyfamous.ca
 * @since      1.0.0
 *
 * @package    Wm_Weatherapi
 * @subpackage Wm_Weatherapi/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wm_Weatherapi
 * @subpackage Wm_Weatherapi/includes
 * @author     Chad Meyers <chad@nobodyfamous.ca>
 */
class Wm_Weatherapi_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wm-weatherapi',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
