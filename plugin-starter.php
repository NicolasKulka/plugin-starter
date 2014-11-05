<?php
/**
 * Plugin Name:         Plugin starter
 * Plugin URI:          
 * Description:         Plugin starter
 * Author:              Nicolas Kulka
 * Author URI:          http://kulka-nicolas.olympe.in/
 *
 * Version:             1.00
 * Requires at least:   4.0.0
 */

if( !class_exists( 'PluginStarter' ) ) {

	// Load configuration
    require_once realpath( dirname( __FILE__ ) ) . '/include/config.php';

    // Load textdomain
    load_plugin_textdomain( PLUGIN_STARTER_DOMAIN, NULL, PLUGIN_STARTER_PATH . '/languages' );

    // Load language
    require_once PLUGIN_STARTER_COMPLETE_PATH . '/include/lang.php';

	/**
     * Main class of the plugin
     */
    class PluginStarter {

        /**
         * Register hooks used by the plugin
         */
        public static function hooks() {
            // Register (de)activation hook
            register_activation_hook( __FILE__, array( __CLASS__, 'activate' ) );
            register_deactivation_hook( __FILE__, array( __CLASS__, 'deactivate' ) );
            register_uninstall_hook( __FILE__, array( __CLASS__, 'uninstall' ) );

            add_action( 'init', array( __CLASS__, 'init' ) );
        }

        /**
         * What to do on plugin activation
         */
        public static function activate() {
            flush_rewrite_rules();
        }

        /**
         * What to do on plugin deactivation
         */
        public static function deactivate() {
            // Nothing for now.
        }

        /**
         * What to do on plugin uninstallation
         */
        public static function uninstall() {
            // Nothing for now.
        }

        /**
         * Plugin init:
         */
        public static function init() {
        }

    }

    PluginStarter::hooks();
}