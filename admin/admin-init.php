<?php function egr_add_settings_page() {
    add_options_page( 'Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'manage_options', 'egwebapps', 'egr_render_plugin_settings_page' );
}
add_action( 'admin_menu', 'egr_add_settings_page' );

function egr_render_plugin_settings_page() { ?>
    <h2 class="page-title">Ρυθμίσεις Ηλεκτρονικών Εφαρμογών</h2>
    <form action="options.php" method="post">
        <?php settings_fields('egr_webapps_plugin_options');
        do_settings_sections('egr_example_plugin'); ?>
        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
    </form>
    <?php
}

function egr_register_settings() {
    register_setting('egr_webapps_plugin_options', 'egr_webapps_plugin_options');
    
    add_settings_section( 'auth_settings', 'Βασικές Ρυθμίσεις Plugin', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_organization_name', 'Όνομα Οργανισμού (organization_name)', 'egr_plugin_setting_organization_name', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_console_id', 'Console Client ID', 'egr_plugin_setting_console_id', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_unauthorized_allowed', 'Επιτρέπεται περιήγηση απο μη συνδεδεμένους χρήστες (unauthorized_allowed)', 'egr_plugin_setting_unauthorized_allowed', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_authserver', 'URL Authentication Server (stsServer)', 'egr_plugin_setting_authserver', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_clientid', 'Client ID (client_id)', 'egr_plugin_setting_clientid', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_scope', 'Scopes (scope)', 'egr_plugin_setting_scope', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_application_url', 'URL εφαρμογής', 'egr_plugin_setting_application_url', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_home_page_text', 'Κείμενο αρχικής σελίδας', 'egr_plugin_setting_home_page_text', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_oroi_xrisis_link', 'Link Όρων Χρήσης', 'egr_plugin_setting_oroi_xrisis_link', 'egr_example_plugin', 'auth_settings' );

    add_settings_section( 'domes_settings', '<div>Ρυθμίσεις Δομών</div>', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_isdomes', 'Δομές (is_benefits_enabled)', 'egr_plugin_setting_isdomes', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_domes_api', 'Δομές Api URL (benefits_api)', 'egr_plugin_setting_domes_api', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_benefits_tab_title', 'Τίτλος Καρτέλας Μενού (benefits_tab_title)', 'egr_plugin_setting_benefits_tab_title', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_benefits_description', 'Περιγραφή (benefits_description)', 'egr_plugin_setting_benefits_description', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_benefits_tab_info', 'Οδηγίες (benefits_tab_info)', 'egr_plugin_setting_benefits_tab_info', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_app_help_page', 'Σελίδα Οδηγιών (app_help_page)', 'egr_plugin_setting_app_help_page', 'egr_example_plugin', 'domes_settings' );

    add_settings_section( 'carpooling_settings', '<div>Ρυθμίσεις CarPooling</div>', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_iscarpooling', 'Car Pooling (is_carpooling_enabled)', 'egr_plugin_setting_iscarpooling', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_carpooling_api', 'Car Pooling Api URL (carpooling_api)', 'egr_plugin_setting_carpooling_api', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_carpooling_description', 'Περιγραφή (carpooling_description)', 'egr_plugin_setting_carpooling_description', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_carpooling_tab_info', 'Γενικές Οδηγίες (carpooling_tab_info)', 'egr_plugin_setting_carpooling_tab_info', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_google_maps_key', 'Google Maps Key (google_maps_key)', 'egr_plugin_setting_google_maps_key', 'egr_example_plugin', 'carpooling_settings' );

    add_settings_section( 'epayments_settings', '<div>Ρυθμίσεις Ηλεκτρονικών Πληρωμών</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_isepayments', 'Ηλεκτρονικές Πληρωμές (is_epayments_enabled)', 'egr_plugin_setting_isepayments', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_api', 'Ηλεκτρονικές Πληρωμές Api URL (epayments_api)', 'egr_plugin_setting_epayments_api', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_description', 'Περιγραφή (epayments_description)', 'egr_plugin_setting_epayments_description', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_debits_tab_info', 'Οδηγίες Βεβαιωμένων Οφειλών (epayments_debits_tab_info)', 'egr_plugin_setting_epayments_debits_tab_info', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_receipts_tab_info', 'Οδηγίες Ιστορικού Πληρωμών Βεβαιωμένων Οφειλών (epayments_receipts_tab_info)', 'egr_plugin_setting_epayments_receipts_tab_info', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_tab_info', 'Γενικές Οδηγίες (epayments_tab_info)', 'egr_plugin_setting_epayments_tab_info', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_show_non_persisted_debits', 'Εμφάνιση μη διαρκών χρεών (show_non_persisted_debits)', 'egr_plugin_setting_show_non_persisted_debits', 'egr_example_plugin', 'epayments_settings' );
    
    add_settings_section( 'kliseis_settings', '<div>Ρυθμίσεις Κλήσεων</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_iskliseis', 'Κλήσεις (is_kliseis_enabled)', 'egr_plugin_setting_iskliseis', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_api', 'Κλήσεις Api URL (kliseis_api)', 'egr_plugin_setting_kliseis_api', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_description', 'Περιγραφή (kliseis_description)', 'egr_plugin_setting_kliseis_description', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_debits_tab_info', 'Οδηγίες Κλήσεων (kliseis_debits_tab_info)', 'egr_plugin_setting_kliseis_debits_tab_info', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_receipts_tab_info', 'Οδηγίες Ιστορικού Πληρωμών Κλήσεων (kliseis_receipts_tab_info)', 'egr_plugin_setting_kliseis_receipts_tab_info', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_tab_info', 'Γενικές Οδηγίες (kliseis_tab_info)', 'egr_plugin_setting_kliseis_tab_info', 'egr_example_plugin', 'kliseis_settings' );

    add_settings_section( 'eidopoiitiria_settings', '<div>Ρυθμίσεις Ειδοποιητηρίων</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_iseidopoiitiria', 'Ειδοποιητήρια (is_eidopoiitiria_enabled)', 'egr_plugin_setting_iseidopoiitiria', 'egr_example_plugin', 'eidopoiitiria_settings' );
    add_settings_field( 'egr_plugin_setting_eidopoiitiria_api', 'Ειδοποιητήρια Api URL (eidopoiitiria_api)', 'egr_plugin_setting_eidopoiitiria_api', 'egr_example_plugin', 'eidopoiitiria_settings' );
    add_settings_field( 'egr_plugin_setting_eidopoiitiria_description', 'Περιγραφή (eidopoiitiria_description)', 'egr_plugin_setting_eidopoiitiria_description', 'egr_example_plugin', 'eidopoiitiria_settings' );
    add_settings_field( 'egr_plugin_setting_eidopoiitiria_tab_info', 'Γενικές Οδηγίες (eidopoiitiria_tab_info)', 'egr_plugin_setting_eidopoiitiria_tab_info', 'egr_example_plugin', 'eidopoiitiria_settings' );

    add_settings_section( 'dimotikos_foros_settings', '<div>Ρυθμίσεις Δημοτικού Φόρου</div>', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_isdimotikos_foros', 'Δημοτικός Φόρος (is_dimotikos_foros_enabled)', 'egr_plugin_setting_isdimotikos_foros', 'egr_example_plugin', 'dimotikos_foros_settings' );
    add_settings_field( 'egr_plugin_setting_katastimata_api', 'Δημοτικός Φόρος Api URL (katastimata_api)', 'egr_plugin_setting_katastimata_api', 'egr_example_plugin', 'dimotikos_foros_settings' );
    add_settings_field( 'egr_plugin_setting_katastimata_description', 'Περιγραφή (katastimata_description)', 'egr_plugin_setting_katastimata_description', 'egr_example_plugin', 'dimotikos_foros_settings' );
    add_settings_field( 'egr_plugin_setting_katastimata_tab_info', 'Γενικές Οδηγίες (katastimata_tab_info)', 'egr_plugin_setting_katastimata_tab_info', 'egr_example_plugin', 'dimotikos_foros_settings' );

    add_settings_section( 'diakanonismoi_settings', '<div>Ρυθμίσεις Διακανονισμών</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_isdiakanonismoi', 'Διακανονισμοί (is_diakanonismoi_enabled)', 'egr_plugin_setting_isdiakanonismoi', 'egr_example_plugin', 'diakanonismoi_settings' );
    add_settings_field( 'egr_plugin_setting_diakanonismoi_description', 'Περιγραφή (diakanonismoi_description)', 'egr_plugin_setting_diakanonismoi_description', 'egr_example_plugin', 'diakanonismoi_settings' );
    add_settings_field( 'egr_plugin_setting_diakanonismoi_tab_info', 'Γενικές Οδηγίες (diakanonismoi_tab_info)', 'egr_plugin_setting_diakanonismoi_tab_info', 'egr_example_plugin', 'diakanonismoi_settings' );
    
    add_settings_section( 'shde_settings', '<div>Ρυθμίσεις Ηλεκτρονικής Διακήνησης Εγγράφων</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_isshde', 'Ηλεκτρονική Διακήνηση Εγγράφων (is_shde_app_enabled)', 'egr_plugin_setting_isshde', 'egr_example_plugin', 'shde_settings' );
    add_settings_field( 'egr_plugin_setting_shde_api', 'Api Ηλεκτρονικής Διακήνησης Εγγράφων (shde_api)', 'egr_plugin_setting_shde_api', 'egr_example_plugin', 'shde_settings' );
    add_settings_field( 'egr_plugin_setting_shde_description', 'Περιγραφή (shde_description)', 'egr_plugin_setting_shde_description', 'egr_example_plugin', 'shde_settings' );
    add_settings_field( 'egr_plugin_setting_shde_tab_info', 'Γενικές Οδηγίες (shde_tab_info)', 'egr_plugin_setting_shde_tab_info', 'egr_example_plugin', 'shde_settings' );

    add_settings_section( 'rantevou_settings', '<div>Ρυθμίσεις Ηλεκτρονικών Ραντεβού</div>', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_israntevou', 'Ηλεκτρονικά Ραντεβού (is_rantevou_app_enabled)', 'egr_plugin_setting_israntevou', 'egr_example_plugin', 'rantevou_settings' );
    add_settings_field( 'egr_plugin_setting_rantevou_api', 'Api Ηλεκτρονικών Ραντεβού (rantevou_api)', 'egr_plugin_setting_rantevou_api', 'egr_example_plugin', 'rantevou_settings' );
    add_settings_field( 'egr_plugin_setting_rantevou_description', 'Περιγραφή (rantevou_description)', 'egr_plugin_setting_rantevou_description', 'egr_example_plugin', 'rantevou_settings' );
    add_settings_field( 'egr_plugin_setting_rantevou_tab_info', 'Γενικές Οδηγίες (rantevou_tab_info)', 'egr_plugin_setting_rantevou_tab_info', 'egr_example_plugin', 'rantevou_settings' );

    add_settings_section( 'extra_plugin_options', 'Έξτρα Ρυθμίσεις Plugin', 'egr_plugin_section_text', 'egr_example_plugin' );
	
    //add_settings_field( 'egr_plugin_setting_shortcode', 'Ενεργοποίηση Shortcode', 'egr_plugin_setting_shortcode', 'egr_example_plugin', 'extra_plugin_options' );
    add_settings_field( 'egr_plugin_setting_jquery_check', 'Ενεργοποίηση JQuery', 'egr_plugin_setting_jquery_check', 'egr_example_plugin', 'extra_plugin_options' );
    add_settings_field( 'egr_plugin_setting_extra_css', 'Έξτρα Κανόνες CSS', 'egr_plugin_setting_extra_css', 'egr_example_plugin', 'extra_plugin_options' );
    add_settings_field( 'egr_plugin_setting_extra_css_path', 'Path υπάρχοντος CSS αρχείου', 'egr_plugin_setting_extra_css_path', 'egr_example_plugin', 'extra_plugin_options' );
	add_settings_field( 'egr_plugin_setting_extra_html_header', 'HTML κάτω απο το header', 'egr_plugin_setting_extra_html_header', 'egr_example_plugin', 'extra_plugin_options' );
	add_settings_field( 'egr_plugin_setting_extra_html_footer', 'HTML πάνω απο το footer', 'egr_plugin_setting_extra_html_footer', 'egr_example_plugin', 'extra_plugin_options' );
}
add_action( 'admin_init', 'egr_register_settings' ); 

function egr_plugin_section_text() {
    
}

function egr_plugin_setting_organization_name() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_organization_name' name='egr_webapps_plugin_options[organization_name]' type='text' value='".esc_attr(isset($options['organization_name']) ? $options['organization_name'] : '')."' />";
}

function egr_plugin_setting_console_id() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_console_id' name='egr_webapps_plugin_options[console_id]' type='text' value='".esc_attr(isset($options['console_id']) ? $options['console_id'] : '')."' />";
}

function egr_plugin_setting_unauthorized_allowed() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_unauthorized_allowed' name='egr_webapps_plugin_options[unauthorized_allowed]' type='checkbox' ".esc_attr(isset($options['unauthorized_allowed']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_authserver() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_authserver' name='egr_webapps_plugin_options[authserver]' type='text' value='".esc_url(isset($options['authserver']) ? $options['authserver'] : '')."' />";
}

function egr_plugin_setting_clientid() {
    $options = get_option( 'egr_webapps_plugin_options' ); 
    echo "<input id='egr_plugin_setting_clientid' name='egr_webapps_plugin_options[clientid]' type='text' value='".esc_attr(isset($options['clientid']) ? $options['clientid'] : '')."' />";
}

function egr_plugin_setting_scope() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_scope' name='egr_webapps_plugin_options[scope]' type='text' disabled='disabled' value='openid profile roles profileextra EgritosGroup.Auth.Basic' />";
}

function egr_plugin_setting_application_url() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_application_url' name='egr_webapps_plugin_options[application_url]' type='text' value='".esc_attr(isset($options['application_url']) ? $options['application_url'] : '')."' />";
}

function egr_plugin_setting_home_page_text() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_home_page_text' name='egr_webapps_plugin_options[home_page_text]' type='text' value='".esc_attr(isset($options['home_page_text']) ? $options['home_page_text'] : '')."' />";
}

function egr_plugin_setting_oroi_xrisis_link() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_oroi_xrisis_link' name='egr_webapps_plugin_options[oroi_xrisis_link]' type='text' value='".esc_attr(isset($options['oroi_xrisis_link']) ? $options['oroi_xrisis_link'] : '')."' />";
}

//domes

function egr_plugin_setting_isdomes() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdomes' name='egr_webapps_plugin_options[isdomes]' type='checkbox' ".esc_attr(isset($options['isdomes']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_domes_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_domes_api' name='egr_webapps_plugin_options[domes_api]' type='text' value='".esc_attr(isset($options['domes_api']) ? $options['domes_api'] : '')."' />";
}

function egr_plugin_setting_benefits_tab_title() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_benefits_tab_title' name='egr_webapps_plugin_options[benefits_tab_title]' type='text' value='".esc_attr(isset($options['benefits_tab_title']) ? $options['benefits_tab_title'] : '')."' />";
}

function egr_plugin_setting_benefits_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_benefits_description' name='egr_webapps_plugin_options[benefits_description]'>".esc_attr(isset($options['benefits_description']) ? $options['benefits_description'] : '')."</textarea>";
}

function egr_plugin_setting_benefits_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_benefits_tab_info' name='egr_webapps_plugin_options[benefits_tab_info]'>".esc_attr(isset($options['benefits_tab_info']) ? $options['benefits_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_app_help_page() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_app_help_page' name='egr_webapps_plugin_options[app_help_page]' type='text' value='".esc_attr(isset($options['app_help_page']) ? $options['app_help_page'] : '')."' />";
}

//END

//CARPOOLING

function egr_plugin_setting_iscarpooling() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iscarpooling' name='egr_webapps_plugin_options[iscarpooling]' type='checkbox' ".esc_attr(isset($options['iscarpooling']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_carpooling_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_carpooling_api' name='egr_webapps_plugin_options[carpooling_api]' type='text' value='".esc_attr(isset($options['carpooling_api']) ? $options['carpooling_api'] : '')."' />";
}

function egr_plugin_setting_carpooling_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_carpooling_description' name='egr_webapps_plugin_options[carpooling_description]'>".esc_attr(isset($options['carpooling_description']) ? $options['carpooling_description'] : '')."</textarea>";
}

function egr_plugin_setting_carpooling_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_carpooling_tab_info' name='egr_webapps_plugin_options[carpooling_tab_info]'>".esc_attr(isset($options['carpooling_tab_info']) ? $options['carpooling_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_google_maps_key() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_google_maps_key' name='egr_webapps_plugin_options[google_maps_key]' type='text' value='".esc_attr(isset($options['google_maps_key']) ? $options['google_maps_key'] : '')."' />";
}

//END

//EPAYMENTS

function egr_plugin_setting_isepayments() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isepayments' name='egr_webapps_plugin_options[isepayments]' type='checkbox' ".esc_attr(isset($options['isepayments']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_epayments_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_epayments_api' name='egr_webapps_plugin_options[epayments_api]' type='text' value='".esc_attr(isset($options['epayments_api']) ? $options['epayments_api'] : '')."' />";
}

function egr_plugin_setting_epayments_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_epayments_description' name='egr_webapps_plugin_options[epayments_description]'>".esc_attr(isset($options['epayments_description']) ? $options['epayments_description'] : '')."</textarea>";
}

function egr_plugin_setting_epayments_debits_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_epayments_debits_tab_info' name='egr_webapps_plugin_options[epayments_debits_tab_info]'>".esc_attr(isset($options['epayments_debits_tab_info']) ? $options['epayments_debits_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_epayments_receipts_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_epayments_receipts_tab_info' name='egr_webapps_plugin_options[epayments_receipts_tab_info]'>".esc_attr(isset($options['epayments_receipts_tab_info']) ? $options['epayments_receipts_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_epayments_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_epayments_tab_info' name='egr_webapps_plugin_options[epayments_tab_info]'>".esc_attr(isset($options['epayments_tab_info']) ? $options['epayments_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_show_non_persisted_debits() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_show_non_persisted_debits' name='egr_webapps_plugin_options[show_non_persisted_debits]' type='checkbox' ".esc_attr(isset($options['show_non_persisted_debits']) ? 'checked=checked' : '')." />";
}

//END

//KLISEIS

function egr_plugin_setting_iskliseis() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iskliseis' name='egr_webapps_plugin_options[iskliseis]' type='checkbox' ".esc_attr(isset($options['iskliseis']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_kliseis_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_kliseis_api' name='egr_webapps_plugin_options[kliseis_api]' type='text' value='".esc_attr(isset($options['kliseis_api']) ? $options['kliseis_api'] : '')."' />";
}

function egr_plugin_setting_kliseis_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_kliseis_description' name='egr_webapps_plugin_options[kliseis_description]'>".esc_attr(isset($options['kliseis_description']) ? $options['kliseis_description'] : '')."</textarea>";
}

function egr_plugin_setting_kliseis_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_kliseis_tab_info' name='egr_webapps_plugin_options[kliseis_tab_info]'>".esc_attr(isset($options['kliseis_tab_info']) ? $options['kliseis_tab_info'] : '')."</textarea>";
}

function egr_plugin_setting_kliseis_debits_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_kliseis_debits_tab_info' name='egr_webapps_plugin_options[kliseis_debits_tab_info]'>".esc_attr(isset($options['kliseis_debits_tab_info']) ? $options['kliseis_debits_tab_info'] : '')."</textarea>";
}

//END

//EIDOPOIITIRIA

function egr_plugin_setting_iseidopoiitiria() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iseidopoiitiria' name='egr_webapps_plugin_options[iseidopoiitiria]' type='checkbox' ".esc_attr(isset($options['iseidopoiitiria']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_eidopoiitiria_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_eidopoiitiria_api' name='egr_webapps_plugin_options[eidopoiitiria_api]' type='text' value='".esc_attr(isset($options['eidopoiitiria_api']) ? $options['eidopoiitiria_api'] : '')."' />";
}

function egr_plugin_setting_eidopoiitiria_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_eidopoiitiria_description' name='egr_webapps_plugin_options[eidopoiitiria_description]'>".esc_attr(isset($options['eidopoiitiria_description']) ? $options['eidopoiitiria_description'] : '')."</textarea>";
}

function egr_plugin_setting_eidopoiitiria_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_eidopoiitiria_tab_info' name='egr_webapps_plugin_options[eidopoiitiria_tab_info]'>".esc_attr(isset($options['eidopoiitiria_tab_info']) ? $options['eidopoiitiria_tab_info'] : '')."</textarea>";
}

//END

//KATASTIMATA

function egr_plugin_setting_isdimotikos_foros() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdimotikos_foros' name='egr_webapps_plugin_options[isdimotikos_foros]' type='checkbox' ".esc_attr(isset($options['isdimotikos_foros']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_katastimata_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_katastimata_api' name='egr_webapps_plugin_options[katastimata_api]' type='text' value='".esc_attr(isset($options['katastimata_api']) ? $options['katastimata_api'] : '')."' />";
}

function egr_plugin_setting_katastimata_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_katastimata_description' name='egr_webapps_plugin_options[katastimata_description]'>".esc_attr(isset($options['katastimata_description']) ? $options['katastimata_description'] : '')."</textarea>";
}

function egr_plugin_setting_katastimata_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_katastimata_tab_info' name='egr_webapps_plugin_options[katastimata_tab_info]'>".esc_attr(isset($options['katastimata_tab_info']) ? $options['katastimata_tab_info'] : '')."</textarea>";
}

//END

//DIAKANONISMOI

function egr_plugin_setting_isdiakanonismoi() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdiakanonismoi' name='egr_webapps_plugin_options[isdiakanonismoi]' type='checkbox' ".esc_attr(isset($options['isdiakanonismoi']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_diakanonismoi_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_diakanonismoi_description' name='egr_webapps_plugin_options[diakanonismoi_description]'>".esc_attr(isset($options['diakanonismoi_description']) ? $options['diakanonismoi_description'] : '')."</textarea>";
}

function egr_plugin_setting_diakanonismoi_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_diakanonismoi_tab_info' name='egr_webapps_plugin_options[diakanonismoi_tab_info]'>".esc_attr(isset($options['diakanonismoi_tab_info']) ? $options['diakanonismoi_tab_info'] : '')."</textarea>";
}

//SHDE

function egr_plugin_setting_isshde() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isshde' name='egr_webapps_plugin_options[isshde]' type='checkbox' ".esc_attr(isset($options['isshde']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_shde_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_shde_api' name='egr_webapps_plugin_options[shde_api]' type='text' value='".esc_attr(isset($options['shde_api']) ? $options['shde_api'] : '')."' />";
}

function egr_plugin_setting_shde_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_shde_description' name='egr_webapps_plugin_options[shde_description]'>".esc_attr(isset($options['shde_description']) ? $options['shde_description'] : '')."</textarea>";
}

function egr_plugin_setting_shde_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_shde_tab_info' name='egr_webapps_plugin_options[shde_tab_info]'>".esc_attr(isset($options['shde_tab_info']) ? $options['shde_tab_info'] : '')."</textarea>";
}

//RANTEVOU

function egr_plugin_setting_israntevou() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_israntevou' name='egr_webapps_plugin_options[israntevou]' type='checkbox' ".esc_attr(isset($options['israntevou']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_rantevou_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_rantevou_api' name='egr_webapps_plugin_options[rantevou_api]' type='text' value='".esc_attr(isset($options['rantevou_api']) ? $options['rantevou_api'] : '')."' />";
}

function egr_plugin_setting_rantevou_description() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_rantevou_description' name='egr_webapps_plugin_options[rantevou_description]'>".esc_attr(isset($options['rantevou_description']) ? $options['rantevou_description'] : '')."</textarea>";
}

function egr_plugin_setting_rantevou_tab_info() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_rantevou_tab_info' name='egr_webapps_plugin_options[rantevou_tab_info]'>".esc_attr(isset($options['rantevou_tab_info']) ? $options['rantevou_tab_info'] : '')."</textarea>";
}

//END 

function egr_plugin_setting_shortcode() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_shortcode' name='egr_webapps_plugin_options[shortcode]' type='checkbox' ".esc_attr(isset($options['shortcode']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_jquery_check() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_jquery_check' name='egr_webapps_plugin_options[jquery_check]' type='checkbox' ".esc_attr(isset($options['jquery_check']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_extra_css() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_extra_css' name='egr_webapps_plugin_options[extra_css]'>".esc_attr(isset($options['extra_css']) ? $options['extra_css'] : '')."</textarea>";
}

function egr_plugin_setting_extra_css_path() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_extra_css_path' name='egr_webapps_plugin_options[extra_css_path]' type='text' value='".esc_attr(isset($options['extra_css_path']) ? $options['extra_css_path'] : '')."' />";
}

function egr_plugin_setting_extra_html_header() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_extra_html_header' name='egr_webapps_plugin_options[html_header]'>".esc_attr(isset($options['html_header']) ? $options['html_header'] : '')."</textarea>";
}

function egr_plugin_setting_extra_html_footer() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<textarea id='egr_plugin_setting_extra_html_footer' name='egr_webapps_plugin_options[html_footer]'>".esc_attr(isset($options['html_footer']) ? $options['html_footer'] : '')."</textarea>";
} ?>