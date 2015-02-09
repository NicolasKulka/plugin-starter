<?php
/**
 * Plugin Name:         Plugin starter
 * Plugin URI:          http://www.plateformewpdigital.fr
 * Description:         Plugin starter
 * Author:              Nicolas Kulka
 * Author URI:          http://nicolaskulka.fr/
 *
 * Version:             1.1
 * Domain Path: languages
 * Text Domain: plugin-starter
 * Depends:
 */

// don't load directly
if ( !defined( 'ABSPATH' ) ) {
    die( '-1' );
}


// Plugin constants
define( 'PLUGIN_STARTER_VERSION', '1.1' );
define( 'PLUGIN_STARTER_FOLDER', 'plugin-starter' );

define( 'PLUGIN_STARTER_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_STARTER_DIR', plugin_dir_path( __FILE__ ) );

// Function for easy load files
function _plugin_starter_load_files( $dir, $files, $prefix = '' ) {
    foreach ( $files as $file ) {
        if ( is_file( $dir . $prefix . $file . ".php" ) ) {
            require_once($dir . $prefix . $file . ".php");
        }
    }
}

// Plugin client classes
_plugin_starter_load_files( PLUGIN_STARTER_DIR . 'include/', array( 'lang' ) );
_plugin_starter_load_files( PLUGIN_STARTER_DIR . 'classes/', array( 'plugin' ) );

add_action( 'plugins_loaded', 'init_plugin_starter_plugin' );
function init_plugin_starter_plugin() {
 
    // Load textdomain
    load_plugin_textdomain( 'plugin-starter', NULL, PLUGIN_STARTER_DIR . '/languages' );

    // Load client
    new PluginStarter();
}