<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Load basic setup. Plugin list links, text domain, footer links etc. 
require_once( NSTIS_STARTER_PLUGIN_DIR . 'admin/basic-setup.php' );

// Load admin setup. Register menus and settings
require_once( NSTIS_STARTER_PLUGIN_DIR . 'admin/admin-ui-setup.php' );

// Render Admin UI
require_once( NSTIS_STARTER_PLUGIN_DIR . 'admin/admin-ui-render.php' );

// Do plugin operations
require_once( NSTIS_STARTER_PLUGIN_DIR . 'functions/do.php' );