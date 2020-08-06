<?php //show plugin template if theme template not found
$options = get_option( 'egr_webapps_plugin_options' );

if(isset($options['shortcode']) && $options['shortcode'] == 'on') {
    add_filter('request', function ( $query_vars ) {
        if(strpos($_SERVER['REQUEST_URI'],'/egwebapps') > -1) {
            $query_vars['pagename'] = 'egwebapps';
        }
        
        return $query_vars;
    } );

    function wpb_shortcode_egwebapps() { 
        ob_start();
        include dirname( __FILE__ ) . '/view-egwebapps.php';
        return ob_get_clean();

    }
    add_shortcode('shortcode-egwebapps', 'wpb_shortcode_egwebapps');
} else {
    add_action('parse_request', 'egwebapps_url_handler');
    function egwebapps_url_handler() {
        if(strpos($_SERVER['REQUEST_URI'],'/egwebapps') > -1) {
            if(file_exists(get_template_directory().'/page-egwebapps.php')) {
                require_once(get_template_directory().'/page-egwebapps.php');
            } else {
                require_once('page-egwebapps.php');
            }
            exit();
        }
    }
} ?>