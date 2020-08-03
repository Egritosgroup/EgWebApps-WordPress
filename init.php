<?php
/**
* Plugin Name: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Plugin URI: 
* Description: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Version: 1.11
* Author: EgritosGroup
* Author URI: https://egritosgroup.gr/
**/ 

global $egr_db_version;
$egr_db_version = '1.12';

define( 'EGR__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


initEgritosPlugin();
register_activation_hook(__FILE__, 'egritos_install');

function initEgritosPlugin() {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
    initRequires();
}

function initRequires() {
    require_once(EGR__PLUGIN_DIR . 'front/front-init.php');
    require_once(EGR__PLUGIN_DIR . 'admin/admin-init.php');
    require_once(EGR__PLUGIN_DIR . 'libs/auth-settings.php');

    require_once(EGR__PLUGIN_DIR . 'libs/BFIGitHubPluginUploader.php');
    if (is_admin()) {
        if( ! class_exists( 'Smashing_Updater' ) ){
            include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
        }
        
        $updater = new Smashing_Updater( __FILE__ );
        $updater->set_username( 'Egritosgroup' );
        $updater->set_repository( 'EgWebApps-WordPress');
        //$updater->authorize( '91945bf7a6c75a39f72c7d76f27fe11f33eaaa8b' ); // Your auth code goes here for private repos
        $updater->initialize();
    }
    
} 

function egritos_install() {
	global $wpdb;
	global $egr_db_version;

	add_option('egr_db_version', $egr_db_version);
} ?>