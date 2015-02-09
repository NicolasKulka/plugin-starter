<?php
/**
 * Main class of the plugin
 */
class PluginStarter {

    /**
     * Register hooks used by the plugin
     */
    function __construct() {
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