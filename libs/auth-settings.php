<?php
add_action('parse_request', 'egwebapps_settings_url_handler');
function egwebapps_settings_url_handler() {
    if(strpos($_SERVER['REQUEST_URI'],'/auth-settings') > -1 ) {
        $options = get_option('egr_webapps_plugin_options');
        echo 'var AuthConfOptions = '.setAuthSettings($options).'; ';
        echo 'var AppConfOptions = '.setAppsSettings($options).'; ';
        exit();
    }
}

function setAuthSettings($options) {
    $settingsArray = array(
        'stsServer' => $options['authserver'],
        'redirect_url' => site_url('/egwebapps'),
        'app_base_href' => '/',
        'client_id' => $options['clientid'],
        'response_type' => 'id_token token',
        'resource' => '',
        'scope' => 'openid profile profileextra EgritosGroup.Auth.Basic ' . $options['scope'],
        'post_logout_redirect_uri' => site_url('/egwebapps/home'),
        'start_checksession' => false,
        'silent_renew' => false,
        'post_login_route' => '/home',
        'log_console_warning_active' => false,
        'log_console_debug_active' => false,
        'assets_base_href' => site_url('wp-content/plugins/egwebapps/static/assets/'),
        'max_id_token_iat_offset_allowed_in_seconds' => 3000,
        'show_home_info' => true
    );

    return json_encode($settingsArray);
}

function setAppsSettings($options) {
    
    $settingsArray = array(
        'organization_name' => get_bloginfo(),
        'unauthorized_allowed' => false,
        'is_benefits_enabled' => isset($options['isdomes']) && $options['isdomes'] == 'on' ? true : false,
        'benefits_applications_organization' => $options['domes_organization'] ? $options['domes_organization'] : '',
        'benefits_api' => $options['domes_api'] ? $options['domes_api'] : '',
        'is_carpooling_enabled' => isset($options['iscarpooling']) && $options['iscarpooling'] == 'on' ? true : false,
        'carpooling_api' => $options['carpooling_api'] ? $options['carpooling_api'] : '',
        'google_maps_key' => $options['google_maps_key'] ? $options['google_maps_key'] : '',
        'is_epayments_enabled' => isset($options['isepayments']) && $options['isepayments'] == 'on' ? true : false,
        'epayments_api' => $options['epayments_api'] ? $options['epayments_api'] : '',
        'show_non_persisted_debits' => $options['show_debits'] == 'on' ? true : false,
        'is_kliseis_enabled' => isset($options['iskliseis']) && $options['iskliseis'] == 'on' ? true : false,
        'kliseis_api' => $options['kliseis_api'] ? $options['kliseis_api'] : '',
        'is_eidopoiitiria_enabled' => isset($options['iseidopoiitiria']) && $options['iseidopoiitiria'] == 'on' ? true : false,
        'eidopoiitiria_api' => $options['eidopoiitiria_api'] ? $options['eidopoiitiria_api'] : '',
        'is_dimotikos_foros_enabled' => isset($options['isdimotikos_foros']) && $options['isdimotikos_foros'] == 'on' ? true : false,
        'katastimata_api' => $options['katastimata_api'] ? $options['katastimata_api'] : '',
        'is_diakanonismoi_enabled' => isset($options['isdiakanonismoi']) && $options['isdiakanonismoi'] == 'on' ? true : false
    );

    return json_encode($settingsArray);
}