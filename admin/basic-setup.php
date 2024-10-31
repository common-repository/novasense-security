<?php 

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

function nstis_settings_link( $links ) {
	return array_merge(
		array(
			'settings' => '<a href="' . admin_url( 'options-general.php?page=novasense' ) . '">' . __( 'Settings', 'novasense' ) . '</a>'
		),
		$links
	);
}
add_filter( 'plugin_action_links_' . NSTIS_STARTER_PLUGIN . '/novasense.php', 'nstis_settings_link' );
