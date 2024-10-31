<?php
/**
 * Admin setup for the plugin
 *
 * @since 1.0
 * @function	nstis_add_menu_links()		Add admin menu pages
 * @function	nstis_register_settings	Register Settings
 * @function	nstis_validater_and_sanitizer()	Validate And Sanitize User Input Before Its Saved To Database
 * @function	nstis_get_settings()		Get settings from database
 */

// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit; 
 
/**
 * Add admin menu pages
 *
 * @since 1.0
 * @refer https://developer.wordpress.org/plugins/administration-menus/
 */
function nstis_add_menu_links() {
	add_options_page ( __('NovaSense','novasense'), __('NovaSense','novasense'), 'update_core', 'novasense','nstis_admin_interface_render'  );
}
add_action( 'admin_menu', 'nstis_add_menu_links' );

/**
 * Register Settings
 *
 * @since 1.0
 */
function nstis_register_settings() {

	// Register Setting
	register_setting( 
		'nstis_settings_group', 			// Group name
		'nstis_settings', 					// Setting name = html form <input> name on settings form
		'nstis_validater_and_sanitizer'	// Input sanitizer
	);
	
	// Register A New Section
    add_settings_section(
        'nstis_general_settings_section',							// ID
        __('NovaSense General Settings', 'novasense'),		// Title
        'nstis_general_settings_section_callback',					// Callback Function
        'novasense'											// Page slug
    );
	
	// General Settings
    add_settings_field(
        'nstis_general_settings_field',							// ID
        __('General Settings', 'novasense'),					// Title
        'nstis_general_settings_field_callback',					// Callback function
        'novasense',											// Page slug
        'nstis_general_settings_section'							// Settings Section ID
    );
	
}
add_action( 'admin_init', 'nstis_register_settings' );

/**
 * Validate and sanitize user input before its saved to database
 *
 * @since 1.0
 */
function nstis_validater_and_sanitizer ( $settings ) {
	
	// Sanitize text field
	//$settings['text_input'] = sanitize_text_field($settings['text_input']);
	
	return $settings;
}
			
/**
 * Get settings from database
 *
 * @return	Array	A merged array of default and settings saved in database. 
 *
 * @since 1.0
 */
function nstis_get_settings() {

	$defaults = array(
				'setting_one' 	=> '1',
				'setting_two' 	=> '1',
			);

	$settings = get_option('nstis_settings', $defaults);
	
	return $settings;
}
