<?php add_action('parse_request', 'egwebapps_settings_url_handler');

function egwebapps_settings_url_handler() {
    if(strpos($_SERVER['REQUEST_URI'],'/auth-settings') > -1 ) {
        $options = get_option('egr_webapps_plugin_options');

        $AuthConf = json_decode(setAuthSettings($options, $GLOBALS['pluginFolderName']));
        $AppConf = json_decode(setAppsSettings($options, $GLOBALS['pluginFolderName']));

        echo 'var AuthConfOptions = { ';
        if($AuthConf) {
            foreach($AuthConf as $key => $value) {
                if(is_bool($value)) {
                    $bool_val = $value ? 'true' : 'false';
                    echo $key.': '.$bool_val.', ';
                } else if(is_numeric($value)) {
                    echo $key.': '.$value.', ';
                } else {
                    echo $key.': "'.$value.'", ';
                }
            }
        }
        echo ' }; ';
        echo 'var AppConfOptions = { ';
        if($AppConf) {
            foreach($AppConf as $key => $value) {
                if(is_bool($value)) {
                    $bool_val = $value ? 'true' : 'false';
                    echo $key.': '.$bool_val.', ';
                } else {
                    echo $key.': "'.$value.'", ';
                }
            }
        }
        echo ' }; ';
        exit();
    }
}

function setAuthSettings($options, $pluginFolderName) {
    $settingsArray = array(
        'stsServer' => $options['authserver'],
        'redirect_url' => site_url('/egwebapps'),
        'app_base_href' => '/',
        'client_id' => $options['clientid'],
        'response_type' => 'id_token token',
        'resource' => '',
        'scope' => 'openid profile roles profileextra EgritosGroup.Auth.Basic',
        'post_logout_redirect_uri' => site_url('/egwebapps/home'),
        'start_checksession' => false,
        'silent_renew' => false,
        'post_login_route' => '/home',
        'log_console_warning_active' => false,
        'log_console_debug_active' => false,
        'assets_base_href' => '/wp-content/plugins/' . $pluginFolderName[0] . '/static/assets/',
        'max_id_token_iat_offset_allowed_in_seconds' => 3000,
        'show_home_info' => true
    );

    return json_encode($settingsArray);
}

function setAppsSettings($options, $pluginFolderName) {
    
    $settingsArray = array(
        'organization_name' => $options['organization_name'] ? $options['organization_name'] : get_bloginfo(),
        'unauthorized_allowed' => isset($options['unauthorized_allowed']) && $options['unauthorized_allowed'] == 'on' ? true : false,
        'oroi_xrisis_link' => $options['oroi_xrisis_link'] ? $options['oroi_xrisis_link'] : '',
        'is_benefits_enabled' => isset($options['isdomes']) && $options['isdomes'] == 'on' ? true : false,
        'benefits_api' => $options['domes_api'] ? $options['domes_api'] : '',
        'benefits_tab_title' => $options['benefits_tab_title'] ? $options['benefits_tab_title'] : 'Αιτήσεις Παιδικών Σταθμών',
        'benefits_description' => $options['benefits_description'] ? $options['benefits_description'] : 'Δημιουργία, επεξεργασία & υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
        'benefits_tab_info' => $options['benefits_tab_info'] ? $options['benefits_tab_info'] : 'Δημιουργία, επεξεργασία & υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
        'app_help_page' => $options['app_help_page'] ? $options['app_help_page'] : '',
        'is_carpooling_enabled' => isset($options['iscarpooling']) && $options['iscarpooling'] == 'on' ? true : false,
        'carpooling_api' => $options['carpooling_api'] ? $options['carpooling_api'] : '',
        'carpooling_description' => $options['carpooling_description'] ? $options['carpooling_description'] : 'Δημιουργία & συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.',
        'carpooling_tab_info' => $options['carpooling_tab_info'] ? $options['carpooling_tab_info'] : 'Δημιουργία & συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.',
        'google_maps_key' => $options['google_maps_key'] ? $options['google_maps_key'] : '',
        'is_epayments_enabled' => isset($options['isepayments']) && $options['isepayments'] == 'on' ? true : false,
        'epayments_api' => $options['epayments_api'] ? $options['epayments_api'] : '',
        'epayments_description' => $options['epayments_description'] ? $options['epayments_description'] : 'Εξόφληση των οριστικοποιημένων οφειλών σας προς τον Φορέα.',
        'epayments_tab_info' => $options['epayments_tab_info'] ? $options['epayments_tab_info'] : 'Εξόφληση των οριστικοποιημένων οφειλών σας προς τον Φορέα.',
        'show_non_persisted_debits' => isset($options['show_non_persisted_debits']) && $options['show_non_persisted_debits'] == 'on' ? true : false,
        'is_kliseis_enabled' => isset($options['iskliseis']) && $options['iskliseis'] == 'on' ? true : false,
        'kliseis_api' => $options['kliseis_api'] ? $options['kliseis_api'] : '',
        'kliseis_description' => $options['kliseis_description'] ? $options['kliseis_description'] : 'Εξόφληση και καταχώρηση κλήσεων Δημοτικής Αστυνομίας.',
        'kliseis_tab_info' => $options['kliseis_tab_info'] ? $options['kliseis_tab_info'] : 'Εξόφληση και καταχώρηση κλήσεων Δημοτικής Αστυνομίας.',
        'is_eidopoiitiria_enabled' => isset($options['iseidopoiitiria']) && $options['iseidopoiitiria'] == 'on' ? true : false,
        'eidopoiitiria_api' => $options['eidopoiitiria_api'] ? $options['eidopoiitiria_api'] : '',
        'eidopoiitiria_description' => $options['eidopoiitiria_description'] ? $options['eidopoiitiria_description'] : 'Εξόφληση ειδοποιητηρίων.',
        'eidopoiitiria_tab_info' => $options['eidopoiitiria_tab_info'] ? $options['eidopoiitiria_tab_info'] : 'Εξόφληση ειδοποιητηρίων.',
        'is_dimotikos_foros_enabled' => isset($options['isdimotikos_foros']) && $options['isdimotikos_foros'] == 'on' ? true : false,
        'katastimata_api' => $options['katastimata_api'] ? $options['katastimata_api'] : '',
        'katastimata_description' => $options['katastimata_description'] ? $options['katastimata_description'] : 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',
        'katastimata_tab_info' => $options['katastimata_tab_info'] ? $options['katastimata_tab_info'] : 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',
        'is_diakanonismoi_enabled' => isset($options['isdiakanonismoi']) && $options['isdiakanonismoi'] == 'on' ? true : false,
        'diakanonismoi_description' => $options['diakanonismoi_description'] ? $options['diakanonismoi_description'] : 'Ενημέρωση για την κατάσταση των διακανονισμών σας & αίτηση νέων διακακονισμών.',
        'diakanonismoi_tab_info' => $options['diakanonismoi_tab_info'] ? $options['diakanonismoi_tab_info'] : 'Ενημέρωση για την κατάσταση των διακανονισμών σας & αίτηση νέων διακακονισμών.',
        'is_shde_app_enabled' => isset($options['isshde']) && $options['isshde'] == 'on' ? true : false,
        'shde_api' => $options['shde_api'] ? $options['shde_api'] : '',
        'shde_description' => $options['shde_description'] ? $options['shde_description'] : 'Αιτήσεις Πολιτών προς το σύστημα ηλεκτρονικής διακίνησης εγγράφων του οργανισμού.',
        'shde_tab_info' => $options['shde_tab_info'] ? $options['shde_tab_info'] : 'Αιτήσεις Πολιτών προς το σύστημα ηλεκτρονικής διακίνησης εγγράφων του οργανισμού.'
    );

    return json_encode($settingsArray);
}