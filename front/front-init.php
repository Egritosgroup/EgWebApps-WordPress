<?php //show plugin template if theme template not found
/*
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
*/

add_filter('request', function ( $query_vars ) {

    if(strpos($_SERVER['REQUEST_URI'],'/egwebapps') > -1) {
        $query_vars['pagename'] = 'egwebapps';
    }
    
    return $query_vars;
} );

function wpb_shortcode_egwebapps() { 
    ob_start();
    include dirname( __FILE__ ) . '/view-egwebapps.php';
    $ddd = ob_get_clean();
    //echo '222' . $ddd  . '333';
    //die('0000');
    return $ddd ;
 
}
// Register shortcode
add_shortcode('shortcode-egwebapps', 'wpb_shortcode_egwebapps');

?>