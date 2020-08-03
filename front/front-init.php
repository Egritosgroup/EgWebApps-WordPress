<?php //show plugin template if theme template not found
add_action('parse_request', 'egwebapps_url_handler');
function egwebapps_url_handler() {
    if(strpos($_SERVER['REQUEST_URI'],'/egwebapps') > -1 && strpos($_SERVER['REQUEST_URI'],'/auth-settings') == 0) {
        if(file_exists(get_template_directory().'/page-egwebapps.php')) {
            require_once(get_template_directory().'/page-egwebapps.php');
        } else {
            require_once('page-egwebapps.php');
        }
        exit();
    }
} ?>