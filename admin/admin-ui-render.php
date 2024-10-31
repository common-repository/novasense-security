<?php
/**
 * Admin UI setup and render
 *
 * @since 1.0
 * @function	nstis_general_settings_section_callback()	Callback function for General Settings section
 * @function	nstis_general_settings_field_callback()	Callback function for General Settings field
 * @function	nstis_admin_interface_render()				Admin interface renderer
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Callback function for General Settings section
 *
 * @since 1.0
 */
function nstis_general_settings_section_callback() {
	echo '<p>' . __('You may configure your NovaSense protection settings on this page. When blocking ensure you understand the lists and what they include. You may lookup and check IP addresses at novasense-threats.com.', 'novasense') . '</p>';
}

/**
 * Callback function for General Settings field
 *
 * @since 1.0
 */
function nstis_general_settings_field_callback() {

	// Get Settings
	$settings = nstis_get_settings();

	// General Settings. Name of form element should be same as the setting name in register_setting(). ?>
	
	<fieldset>

        <input type="checkbox" name="nstis_settings[threats]" id="nstis_settings[threats]" value="1"
            <?php if ( isset( $settings['threats'] ) ) { checked( '1', $settings['threats'] ); } ?>>
        <label for="nstis_settings[threats]"><?php _e('Block Threats', 'novasense') ?></label>
        <br>

        <input type="checkbox" name="nstis_settings[abusers]" id="nstis_settings[abusers]" value="1"
            <?php if ( isset( $settings['abusers'] ) ) { checked( '1', $settings['abusers'] ); } ?>>
        <label for="nstis_settings[abusers]"><?php _e('Block Abusers', 'novasense') ?></label>
        <br>

        <input type="checkbox" name="nstis_settings[malware]" id="nstis_settings[malware]" value="1"
            <?php if ( isset( $settings['malware'] ) ) { checked( '1', $settings['malware'] ); } ?>>
        <label for="nstis_settings[malware]"><?php _e('Block Malware', 'novasense') ?></label>
        <br>

        <input type="checkbox" name="nstis_settings[botnets]" id="nstis_settings[botnets]" value="1"
            <?php if ( isset( $settings['botnets'] ) ) { checked( '1', $settings['botnets'] ); } ?>>
        <label for="nstis_settings[botnets]"><?php _e('Block Botnets', 'novasense') ?></label>
        <br>

    </fieldset>
	<?php
}
 
/**
 * Admin interface renderer
 *
 * @since 1.0
 */ 
function nstis_admin_interface_render () {
	
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	?>
	<div class="wrap">	
		<h1>NovaSense Threat Intelligence</h1>
		
		<form action="options.php" method="post">		
			<?php
			// Output nonce, action, and option_page fields for a settings page.
			settings_fields( 'nstis_settings_group' );
			
			// Prints out all settings sections added to a particular settings page. 
			do_settings_sections( 'novasense' );	// Page slug
			
			// Output save settings button
			submit_button( __('Save Settings', 'novasense') );
			?>
		</form>
	</div>
	<?php
}