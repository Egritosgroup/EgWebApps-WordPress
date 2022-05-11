<?php add_action('parse_request', 'egwebapps_settings_url_handler');

function egwebapps_settings_url_handler() {
    if(strpos($_SERVER['REQUEST_URI'],'/auth-settings') > -1 ) {
        header("Content-type: text/javascript");
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
                } else if(is_numeric($value)) {
                    echo $key.': '.$value.', ';
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
        'redirect_url' => site_url('/egwebapps/redirect-auth'),
        'app_base_href' => '/',
        'client_id' => $options['clientid'],
        'response_type' => 'id_token token',
        'resource' => '',
        'scope' => 'openid profile roles profileextra EgritosGroup.Auth.Basic',
        'post_logout_redirect_uri' => site_url(),
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
        'organization_name_en' => $options['organization_name_en'] ? $options['organization_name_en'] : '',
        'unauthorized_allowed' => isset($options['unauthorized_allowed']) && $options['unauthorized_allowed'] == 'on' ? true : false,
        'multilingual' => isset($options['multilingual']) && $options['multilingual'] == 'on' ? true : false,
        'application_url' => $options['application_url'] ? $options['application_url'] : '',
        'home_page_text' => $options['home_page_text'] ? $options['home_page_text'] : '',
        'home_page_text_en' => $options['home_page_text_en'] ? $options['home_page_text_en'] : '',
        'oroi_xrisis_link' => $options['oroi_xrisis_link'] ? $options['oroi_xrisis_link'] : '',
        'order_profile' => $options['order_profile'] ? $options['order_profile'] : 200,
        
        'is_benefits_enabled' => isset($options['isdomes']) && $options['isdomes'] == 'on' ? true : false,
        'benefits_applications_organization' => $options['benefits_applications_organization'] ? htmlspecialchars($options['benefits_applications_organization']) : 'ΔΟΜΕΣ',
        'benefits_api' => $options['domes_api'] ? $options['domes_api'] : '',
        'benefits_tab_title' => $options['benefits_tab_title'] ? htmlspecialchars($options['benefits_tab_title']) : 'Αιτήσεις Παιδικών Σταθμών',
        'benefits_tab_title_en' => $options['benefits_tab_title_en'] ? htmlspecialchars($options['benefits_tab_title_en']) : '',
        'benefits_description' => $options['benefits_description'] ? htmlspecialchars($options['benefits_description']) : 'Δημιουργία, επεξεργασία & υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
        'benefits_description_en' => $options['benefits_description_en'] ? htmlspecialchars($options['benefits_description_en']) : '',
        'benefits_tab_info' => $options['benefits_tab_info'] ? htmlspecialchars($options['benefits_tab_info']) : '',
        'benefits_tab_info_en' => $options['benefits_tab_info_en'] ? htmlspecialchars($options['benefits_tab_info_en']) : '',
        'app_help_page' => $options['app_help_page'] ? $options['app_help_page'] : '',
        
        'is_carpooling_enabled' => isset($options['iscarpooling']) && $options['iscarpooling'] == 'on' ? true : false,
        'carpooling_api' => $options['carpooling_api'] ? $options['carpooling_api'] : '',
        'carpooling_tab_title' => $options['carpooling_tab_title'] ? htmlspecialchars($options['carpooling_tab_title']) : 'Carpooling',
        'carpooling_tab_title_en' => $options['carpooling_tab_title_en'] ? htmlspecialchars($options['carpooling_tab_title_en']) : 'Carpooling',
        'carpooling_description' => $options['carpooling_description'] ? htmlspecialchars($options['carpooling_description']) : 'Δημιουργία & συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.',
        'carpooling_description_en' => $options['carpooling_description_en'] ? htmlspecialchars($options['carpooling_description_en']) : '',
        'carpooling_tab_info' => $options['carpooling_tab_info'] ? htmlspecialchars($options['carpooling_tab_info']) : '',
        'carpooling_tab_info_en' => $options['carpooling_tab_info_en'] ? htmlspecialchars($options['carpooling_tab_info_en']) : '',
        'google_maps_key' => $options['google_maps_key'] ? $options['google_maps_key'] : '',
        'order_carpooling' => $options['order_carpooling'] ? $options['order_carpooling'] : 170,

        'is_epayments_enabled' => isset($options['isepayments']) && $options['isepayments'] == 'on' ? true : false,
        'epayments_api' => $options['epayments_api'] ? $options['epayments_api'] : '',
        'epayments_tab_title' => $options['epayments_tab_title'] ? htmlspecialchars($options['epayments_tab_title']) : 'Βεβαιωμένες Οφειλές',
        'epayments_tab_title_en' => $options['epayments_tab_title_en'] ? htmlspecialchars($options['epayments_tab_title_en']) : 'Persisted Debits',
        'epayments_description' => $options['epayments_description'] ? htmlspecialchars($options['epayments_description']) : 'Εξόφληση των οριστικοποιημένων οφειλών σας προς τον Φορέα.',
        'epayments_description_en' => $options['epayments_description_en'] ? htmlspecialchars($options['epayments_description_en']) : '',
        'epayments_debits_tab_info' => $options['epayments_debits_tab_info'] ? htmlspecialchars($options['epayments_debits_tab_info']) : '',
        'epayments_debits_tab_info_en' => $options['epayments_debits_tab_info_en'] ? htmlspecialchars($options['epayments_debits_tab_info_en']) : '',
        'epayments_receipts_tab_info' => $options['epayments_receipts_tab_info'] ? htmlspecialchars($options['epayments_receipts_tab_info']) : '',
        'epayments_receipts_tab_info_en' => $options['epayments_receipts_tab_info_en'] ? htmlspecialchars($options['epayments_receipts_tab_info_en']) : '',
        'show_non_persisted_debits' => isset($options['show_non_persisted_debits']) && $options['show_non_persisted_debits'] == 'on' ? true : false,
        'order_epayments' => $options['order_epayments'] ? $options['order_epayments'] : 10,

        'is_kliseis_enabled' => isset($options['iskliseis']) && $options['iskliseis'] == 'on' ? true : false,
        'kliseis_api' => $options['kliseis_api'] ? $options['kliseis_api'] : '',
        'kliseis_tab_title' => $options['kliseis_tab_title'] ? htmlspecialchars($options['kliseis_tab_title']) : 'Κλήσεις Κ.Ο.Κ.',
        'kliseis_tab_title_en' => $options['kliseis_tab_title_en'] ? htmlspecialchars($options['kliseis_tab_title_en']) : 'Traffic Tickets',
        'kliseis_description' => $options['kliseis_description'] ? htmlspecialchars($options['kliseis_description']) : 'Εξόφληση και καταχώρηση κλήσεων Δημοτικής Αστυνομίας.',
        'kliseis_description_en' => $options['kliseis_description_en'] ? htmlspecialchars($options['kliseis_description_en']) : '',
        'kliseis_debits_tab_info' => $options['kliseis_debits_tab_info'] ? htmlspecialchars($options['kliseis_debits_tab_info']) : '',
        'kliseis_debits_tab_info_en' => $options['kliseis_debits_tab_info_en'] ? htmlspecialchars($options['kliseis_debits_tab_info_en']) : '',
        'kliseis_receipts_tab_info' => $options['kliseis_receipts_tab_info'] ? htmlspecialchars($options['kliseis_receipts_tab_info']) : '',
        'kliseis_receipts_tab_info_en' => $options['kliseis_receipts_tab_info_en'] ? htmlspecialchars($options['kliseis_receipts_tab_info_en']) : '',
        'kliseis_unauthorized_info' => $options['kliseis_unauthorized_info'] ? htmlspecialchars($options['kliseis_unauthorized_info']) : 'Δεν έχετε δικαίωμα πρόσβασης.',
        'kliseis_unauthorized_info_en' => $options['kliseis_unauthorized_info_en'] ? htmlspecialchars($options['kliseis_unauthorized_info_en']) : '',
        'order_kliseis' => $options['order_kliseis'] ? $options['order_kliseis'] : 20,

        'is_eidopoiitiria_enabled' => isset($options['iseidopoiitiria']) && $options['iseidopoiitiria'] == 'on' ? true : false,
        'eidopoiitiria_api' => $options['eidopoiitiria_api'] ? $options['eidopoiitiria_api'] : '',
        'eidopoiitiria_tab_title' => $options['eidopoiitiria_tab_title'] ? htmlspecialchars($options['eidopoiitiria_tab_title']) : 'Ταυτότητες Οφειλής',
        'eidopoiitiria_tab_title_en' => $options['eidopoiitiria_tab_title_en'] ? htmlspecialchars($options['eidopoiitiria_tab_title_en']) : 'Debt ID',
        'eidopoiitiria_description' => $options['eidopoiitiria_description'] ? htmlspecialchars($options['eidopoiitiria_description']) : 'Εξόφληση ειδοποιητηρίων.',
        'eidopoiitiria_description_en' => $options['eidopoiitiria_description_en'] ? htmlspecialchars($options['eidopoiitiria_description_en']) : '',
        'eidopoiitiria_tab_info' => $options['eidopoiitiria_tab_info'] ? htmlspecialchars($options['eidopoiitiria_tab_info']) : '',
        'eidopoiitiria_tab_info_en' => $options['eidopoiitiria_tab_info_en'] ? htmlspecialchars($options['eidopoiitiria_tab_info_en']) : '',
        'order_eidopoiitiria' => $options['order_eidopoiitiria'] ? $options['order_eidopoiitiria'] : 70,

        'is_dimotikos_foros_enabled' => isset($options['isdimotikos_foros']) && $options['isdimotikos_foros'] == 'on' ? true : false,
        'katastimata_api' => $options['katastimata_api'] ? $options['katastimata_api'] : '',
        'katastimata_tab_title' => $options['katastimata_tab_title'] ? htmlspecialchars($options['katastimata_tab_title']) : 'Τέλος 0,5% / Παρεπιδημούντων',
        'katastimata_tab_title_en' => $options['katastimata_tab_title_en'] ? htmlspecialchars($options['katastimata_tab_title_en']) : '0,5% / Residents Tax',
        'katastimata_description' => $options['katastimata_description'] ? htmlspecialchars($options['katastimata_description']) : 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',
        'katastimata_description_en' => $options['katastimata_description_en'] ? htmlspecialchars($options['katastimata_description_en']) : '',
        'katastimata_tab_info' => $options['katastimata_tab_info'] ? htmlspecialchars($options['katastimata_tab_info']) : '',
        'katastimata_tab_info_en' => $options['katastimata_tab_info_en'] ? htmlspecialchars($options['katastimata_tab_info_en']) : '',
        'order_katastimata' => $options['order_katastimata'] ? $options['order_katastimata'] : 30,

        'is_koinoxristoi_enabled' => isset($options['koinoxristoi']) && $options['koinoxristoi'] == 'on' ? true : false,
        'koinoxristoi_api' => $options['koinoxristoi_api'] ? $options['koinoxristoi_api'] : '',
        'koinoxristoi_tab_title' => $options['koinoxristoi_tab_title'] ? htmlspecialchars($options['koinoxristoi_tab_title']) : 'Αιτήσεις Κοινοχρήστων',
        'koinoxristoi_tab_title_en' => $options['koinoxristoi_tab_title_en'] ? htmlspecialchars($options['koinoxristoi_tab_title_en']) : 'Common Area Applications',
        'koinoxristoi_description' => $options['koinoxristoi_description'] ? htmlspecialchars($options['koinoxristoi_description']) : 'Υποβάλλετε και εξοφλήστε αιτήσεις κοινοχρήστων.',
        'koinoxristoi_description_en' => $options['koinoxristoi_description_en'] ? htmlspecialchars($options['koinoxristoi_description_en']) : '',
        'koinoxristoi_tab_info' => $options['koinoxristoi_tab_info'] ? htmlspecialchars($options['koinoxristoi_tab_info']) : '',
        'koinoxristoi_tab_info_en' => $options['koinoxristoi_tab_info_en'] ? htmlspecialchars($options['koinoxristoi_tab_info_en']) : '',
        'order_koinoxristoi' => $options['order_koinoxristoi'] ? $options['order_koinoxristoi'] : 31,

        'is_diakanonismoi_enabled' => isset($options['isdiakanonismoi']) && $options['isdiakanonismoi'] == 'on' ? true : false,
        'diakanonismoi_tab_title' => $options['diakanonismoi_tab_title'] ? htmlspecialchars($options['diakanonismoi_tab_title']) : 'Διακανονισμοί',
        'diakanonismoi_tab_title_en' => $options['diakanonismoi_tab_title_en'] ? htmlspecialchars($options['diakanonismoi_tab_title_en']) : 'Debt Settlements',
        'diakanonismoi_description' => $options['diakanonismoi_description'] ? htmlspecialchars($options['diakanonismoi_description']) : 'Ενημέρωση για την κατάσταση των διακανονισμών σας & αίτηση νέων διακακονισμών.',
        'diakanonismoi_description_en' => $options['diakanonismoi_description_en'] ? htmlspecialchars($options['diakanonismoi_description_en']) : '',
        'diakanonismoi_tab_info' => $options['diakanonismoi_tab_info'] ? htmlspecialchars($options['diakanonismoi_tab_info']) : '',
        'diakanonismoi_tab_info_en' => $options['diakanonismoi_tab_info_en'] ? htmlspecialchars($options['diakanonismoi_tab_info_en']) : '',
        'order_diakanonismoi' => $options['order_diakanonismoi'] ? $options['order_diakanonismoi'] : 40,

        'is_shde_app_enabled' => isset($options['isshde']) && $options['isshde'] == 'on' ? true : false,
        'shde_api' => $options['shde_api'] ? $options['shde_api'] : '',
        'shde_tab_title' => $options['shde_tab_title'] ? htmlspecialchars($options['shde_tab_title']) : 'Αιτήσεις Πολιτών',
        'shde_tab_title_en' => $options['shde_tab_title_en'] ? htmlspecialchars($options['shde_tab_title_en']) : 'Residents Applications',
        'shde_description' => $options['shde_description'] ? htmlspecialchars($options['shde_description']) : 'Αιτήσεις Πολιτών προς το σύστημα ηλεκτρονικής διακίνησης εγγράφων του οργανισμού.',
        'shde_description_en' => $options['shde_description_en'] ? htmlspecialchars($options['shde_description_en']) : '',
        'shde_tab_info' => $options['shde_tab_info'] ? htmlspecialchars($options['shde_tab_info']) : '',
        'shde_tab_info_en' => $options['shde_tab_info_en'] ? htmlspecialchars($options['shde_tab_info_en']) : '',
        'order_shde' => $options['order_shde'] ? $options['order_shde'] : 90,

        'is_rantevou_app_enabled' => isset($options['israntevou']) && $options['israntevou'] == 'on' ? true : false,
        'rantevou_api' => $options['rantevou_api'] ? $options['rantevou_api'] : '',
        'rantevou_tab_title' => $options['rantevou_tab_title'] ? htmlspecialchars($options['rantevou_tab_title']) : 'Ραντεβού Πολιτών',
        'rantevou_tab_title_en' => $options['rantevou_tab_title_en'] ? htmlspecialchars($options['rantevou_tab_title_en']) : 'Residents Appointments',
        'rantevou_description' => $options['rantevou_description'] ? htmlspecialchars($options['rantevou_description']) : 'Ηλεκτρονικά Ραντεβού Πολιτών',
        'rantevou_description_en' => $options['rantevou_description_en'] ? htmlspecialchars($options['rantevou_description_en']) : '',
        'rantevou_tab_info' => $options['rantevou_tab_info'] ? htmlspecialchars($options['rantevou_tab_info']) : '',
        'rantevou_tab_info_en' => $options['rantevou_tab_info_en'] ? htmlspecialchars($options['rantevou_tab_info_en']) : '',
        'order_rantevou' => $options['order_rantevou'] ? $options['order_rantevou'] : 100,

        'is_proslipseis_enabled' => isset($options['isproslipseis']) && $options['isproslipseis'] == 'on' ? true : false,
        'proslipseis_api' => $options['proslipseis_api'] ? $options['proslipseis_api'] : '',
        'proslipseis_tab_title' => $options['proslipseis_tab_title'] ? htmlspecialchars($options['proslipseis_tab_title']) : 'Αιτήσεις Προσλήψεων',
        'proslipseis_tab_title_en' => $options['proslipseis_tab_title_en'] ? htmlspecialchars($options['proslipseis_tab_title_en']) : 'Recruitment Applications',
        'proslipseis_description' => $options['proslipseis_description'] ? htmlspecialchars($options['proslipseis_description']) : 'Αιτήσεις Πολιτών προς το σύστημα προσλήψεων εποχιακού και μόνιμου προσωπικού του οργανισμού.',
        'proslipseis_description_en' => $options['proslipseis_description_en'] ? htmlspecialchars($options['proslipseis_description_en']) : '',
        'proslipseis_tab_info' => $options['proslipseis_tab_info'] ? htmlspecialchars($options['proslipseis_tab_info']) : '',
        'proslipseis_tab_info_en' => $options['proslipseis_tab_info_en'] ? htmlspecialchars($options['proslipseis_tab_info_en']) : '',
        'order_proslipseis' => $options['order_proslipseis'] ? $options['order_proslipseis'] : 60,

        'is_notifications_enabled' => false,
        'notifications_api' => '',
        'notifications_tab_title' => $options['notifications_tab_title'] ? htmlspecialchars($options['notifications_tab_title']) : 'Ειδοποιήσεις',
        'notifications_tab_title_en' => $options['notifications_tab_title_en'] ? htmlspecialchars($options['notifications_tab_title_en']) : 'Notifications',
        'order_notifications' => 80
    );

    return json_encode($settingsArray);
}