<?php
/**
* Plugin Name: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Plugin URI: 
* Description: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Version: 1.7
* Author: EgritosGroup
* Author URI: https://egritosgroup.gr/
**/ 

global $egr_db_version;
$egr_db_version = '1.7';

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
    if ( is_admin() ) {
        new BFIGitHubPluginUpdater( __FILE__, 'Egritosgroup', "EgWebApps-WordPress");
    }
    
} 

function egritos_install() {
	global $wpdb;
	global $egr_db_version;

	add_option('egr_db_version', $egr_db_version);
} ?>