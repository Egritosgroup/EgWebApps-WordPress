<?php
/**
* Plugin Name: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Plugin URI: 
* Description: Ηλεκτρονικές Εφαρμογές - Έγκριτος Group
* Version: 2.2.8838
* Author: EgritosGroup
* Author URI: https://egritosgroup.gr/
**/ 

global $egwebapps_version;
$egwebapps_version = '2.2.8826';

$GLOBALS['pluginFolderName'] = explode('/', trailingslashit(dirname(plugin_basename( __FILE__ ))));
define('EGR__PLUGIN_DIR', plugin_dir_path( __FILE__ ));


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
        new BFIGitHubPluginUpdater( __FILE__, 'Egritosgroup', "EgWebApps-WordPress");
    }
} 

function egritosTpl_admin_scripts() {
    $screen = get_current_screen();

    if($screen->base == 'settings_page_egwebapps') {
        wp_enqueue_style('egwebapps-admin-style', '/wp-content/plugins/' . trailingslashit(dirname(plugin_basename( __FILE__ ))) . 'admin/css/admin.css', array());
    }
}

add_action('admin_enqueue_scripts', 'egritosTpl_admin_scripts');

function egritos_install() {
	global $wpdb;
    global $egwebapps_version;

	add_option('egwebapps_version', $egwebapps_version);
} ?>
