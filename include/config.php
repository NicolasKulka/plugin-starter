<?php

/**
 * Remember plugin path & URL
 */
define( 'PLUGIN_STARTER_PATH', plugin_basename( realpath( dirname( __FILE__ ).'/..') ) );
define( 'PLUGIN_STARTER_COMPLETE_PATH', WP_PLUGIN_DIR.'/'.PLUGIN_STARTER_PATH );
define( 'PLUGIN_STARTER_URL', WP_PLUGIN_URL.'/'.PLUGIN_STARTER_PATH );

/**
 * Translation domain name for this plugin
 */
define( 'PLUGIN_STARTER_DOMAIN', 'plugin_starter' );