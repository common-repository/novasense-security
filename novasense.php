<?php
/**
 * Plugin Name: NovaSense Security
 * Plugin URI: https://github.com/snapt/NovaSense-WordPress
 * Description: Block threats, abusers, spammers, and more from your WordPress site.
 * Author: NovaSense
 * Author URI: https://novasense-threats.com
 * Version: 1.1
 * Text Domain: novasense
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * This plugin was developed using the WordPress starter plugin template by Arun Basil Lal <arunbasillal@gmail.com>
 * Please leave this credit and the directory structure intact for future developers who might read the code.
 * @GitHub https://github.com/arunbasillal/WordPress-Starter-Plugin
 */
 
/**
 * ~ Directory Structure ~
 *
 * /admin/ 						- Plugin backend stuff.
 * /functions/					- Functions and plugin operations.
 * /includes/					- External third party classes and libraries.
 * /languages/					- Translation files go here. 
 * /public/						- Front end files and functions that matter on the front end go here.
 * index.php					- Dummy file.
 * license.txt					- GPL v2
 * novasense.php	            - Main plugin file containing plugin name and other version info for WordPress.
 * readme.txt					- Readme for WordPress plugin repository. https://wordpress.org/plugins/files/2018/01/readme.txt
 * uninstall.php				- Fired when the plugin is uninstalled. 
 */
 
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Define constants
 *
 * @since 1.0
 */
if ( ! defined( 'NSTIS_VERSION_NUM' ) ) 		    define( 'NSTIS_VERSION_NUM'		, '1.0' ); // Plugin version constant
if ( ! defined( 'NSTIS_STARTER_PLUGIN' ) )		define( 'NSTIS_STARTER_PLUGIN'		, trim( dirname( plugin_basename( __FILE__ ) ), '/' ) ); // Name of the plugin folder eg - 'novasense'
if ( ! defined( 'NSTIS_STARTER_PLUGIN_DIR' ) )	define( 'NSTIS_STARTER_PLUGIN_DIR'	, plugin_dir_path( __FILE__ ) ); // Plugin directory absolute path with the trailing slash. Useful for using with includes eg - /var/www/html/wp-content/plugins/novasense/
if ( ! defined( 'NSTIS_STARTER_PLUGIN_URL' ) )	define( 'NSTIS_STARTER_PLUGIN_URL'	, plugin_dir_url( __FILE__ ) ); // URL to the plugin folder with the trailing slash. Useful for referencing src eg - http://localhost/wp/wp-content/plugins/novasense/

/**
 * Add plugin version to database
 *
 * @refer https://codex.wordpress.org/Creating_Tables_with_Plugins#Adding_an_Upgrade_Function
 * @since 1.0
 */
update_option('abl_nstis_version', NSTIS_VERSION_NUM);

// Load everything
require_once(NSTIS_STARTER_PLUGIN_DIR . 'loader.php');
