<?php function egr_add_settings_page() {
    add_options_page( 'Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'manage_options', 'egwebapps', 'egr_render_plugin_settings_page' );
}
add_action( 'admin_menu', 'egr_add_settings_page' );

function egr_render_plugin_settings_page() { ?>
    <h2>Ρυθμίσεις Ηλεκτρονικών Εφαρμογών</h2>
    <form action="options.php" method="post">
        <?php 
        settings_fields('egr_webapps_plugin_options');
        do_settings_sections('egr_example_plugin'); ?>
        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
    </form>
    <?php
}

function egr_register_settings() {
    register_setting('egr_webapps_plugin_options', 'egr_webapps_plugin_options');
    
    add_settings_section( 'auth_settings', 'Ρυθμίσεις Authentication Server', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_authserver', 'URL Authentication Server', 'egr_plugin_setting_authserver', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_clientid', 'Client ID', 'egr_plugin_setting_clientid', 'egr_example_plugin', 'auth_settings' );
    add_settings_field( 'egr_plugin_setting_scope', 'Scopes', 'egr_plugin_setting_scope', 'egr_example_plugin', 'auth_settings' );

    add_settings_section( 'domes_settings', 'Ρυθμίσεις Δομών', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_isdomes', 'Δομές', 'egr_plugin_setting_isdomes', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_domes_organization', 'Όνομα Οργανισμού', 'egr_plugin_setting_domes_organization', 'egr_example_plugin', 'domes_settings' );
    add_settings_field( 'egr_plugin_setting_domes_api', 'Δομές Api URL', 'egr_plugin_setting_domes_api', 'egr_example_plugin', 'domes_settings' );

    add_settings_section( 'carpooling_settings', 'Ρυθμίσεις CarPooling', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_iscarpooling', 'Car Pooling', 'egr_plugin_setting_iscarpooling', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_carpooling_api', 'Car Pooling Api URL', 'egr_plugin_setting_carpooling_api', 'egr_example_plugin', 'carpooling_settings' );
    add_settings_field( 'egr_plugin_setting_google_maps_key', 'Google Maps Key', 'egr_plugin_setting_google_maps_key', 'egr_example_plugin', 'carpooling_settings' );

    add_settings_section( 'epayments_settings', 'Ρυθμίσεις Ηλεκτρονικών Πληρωμών', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_isepayments', 'Ηλεκτρονικές Πληρωμές', 'egr_plugin_setting_isepayments', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_epayments_api', 'Ηλεκτρονικές Πληρωμές Api URL', 'egr_plugin_setting_epayments_api', 'egr_example_plugin', 'epayments_settings' );
    add_settings_field( 'egr_plugin_setting_show_debits', 'Εμφάνιση μη διαρκών χρεών', 'egr_plugin_setting_show_debits', 'egr_example_plugin', 'epayments_settings' );
    
    add_settings_section( 'kliseis_settings', 'Ρυθμίσεις Κλήσεων', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_iskliseis', 'Κλήσεις', 'egr_plugin_setting_iskliseis', 'egr_example_plugin', 'kliseis_settings' );
    add_settings_field( 'egr_plugin_setting_kliseis_api', 'Κλήσεις Api URL', 'egr_plugin_setting_kliseis_api', 'egr_example_plugin', 'kliseis_settings' );

    add_settings_section( 'eidopoiitiria_settings', 'Ρυθμίσεις Ειδοποιητηρίων', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_iseidopoiitiria', 'Ειδοποιητήρια', 'egr_plugin_setting_iseidopoiitiria', 'egr_example_plugin', 'eidopoiitiria_settings' );
    add_settings_field( 'egr_plugin_setting_eidopoiitiria_api', 'Ειδοποιητήρια Api URL', 'egr_plugin_setting_eidopoiitiria_api', 'egr_example_plugin', 'eidopoiitiria_settings' );

    add_settings_section( 'dimotikos_foros_settings', 'Ρυθμίσεις Δημοτικού Φόρου', 'egr_plugin_section_text', 'egr_example_plugin' );

    add_settings_field( 'egr_plugin_setting_isdimotikos_foros', 'Δημοτικός Φόρος', 'egr_plugin_setting_isdimotikos_foros', 'egr_example_plugin', 'dimotikos_foros_settings' );
    add_settings_field( 'egr_plugin_setting_katastimata_api', 'Δημοτικός Φόρος Api URL', 'egr_plugin_setting_katastimata_api', 'egr_example_plugin', 'dimotikos_foros_settings' );

    add_settings_section( 'diakanonismoi_settings', 'Ρυθμίσεις Διακανονισμών', 'egr_plugin_section_text', 'egr_example_plugin' );
    
    add_settings_field( 'egr_plugin_setting_isdiakanonismoi', 'Διακανονισμοί', 'egr_plugin_setting_isdiakanonismoi', 'egr_example_plugin', 'diakanonismoi_settings' );
}
add_action( 'admin_init', 'egr_register_settings' ); 

function egr_plugin_section_text() {
    //echo '<p>Here you can set all the options for using the API</p>';
}

function egr_plugin_setting_authserver() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_authserver' name='egr_webapps_plugin_options[authserver]' type='text' value='".esc_attr($options['authserver'])."' />";
}

function egr_plugin_setting_clientid() {
    $options = get_option( 'egr_webapps_plugin_options' ); 
    echo "<input id='egr_plugin_setting_clientid' name='egr_webapps_plugin_options[clientid]' type='text' value='".esc_attr($options['clientid'])."' />";
}

function egr_plugin_setting_scope() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_scope' name='egr_webapps_plugin_options[scope]' type='text' value='".esc_attr($options['scope'])."' />";
}

//domes

function egr_plugin_setting_isdomes() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdomes' name='egr_webapps_plugin_options[isdomes]' type='checkbox' ".esc_attr(isset($options['isdomes']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_domes_organization() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_domes_organization' name='egr_webapps_plugin_options[domes_organization]' type='text' value='".esc_attr($options['domes_organization'])."' />";
}

function egr_plugin_setting_domes_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_domes_api' name='egr_webapps_plugin_options[domes_api]' type='text' value='".esc_attr($options['domes_api'])."' />";
}

//END

//CARPOOLING

function egr_plugin_setting_iscarpooling() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iscarpooling' name='egr_webapps_plugin_options[iscarpooling]' type='checkbox' ".esc_attr(isset($options['iscarpooling']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_carpooling_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_carpooling_api' name='egr_webapps_plugin_options[carpooling_api]' type='text' value='".esc_attr($options['carpooling_api'])."' />";
}

function egr_plugin_setting_google_maps_key() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_google_maps_key' name='egr_webapps_plugin_options[google_maps_key]' type='text' value='".esc_attr($options['google_maps_key'])."' />";
}

//END

//EPAYMENTS

function egr_plugin_setting_isepayments() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isepayments' name='egr_webapps_plugin_options[isepayments]' type='checkbox' ".esc_attr(isset($options['isepayments']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_epayments_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_epayments_api' name='egr_webapps_plugin_options[epayments_api]' type='text' value='".esc_attr($options['epayments_api'])."' />";
}

function egr_plugin_setting_show_debits() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_show_debits' name='egr_webapps_plugin_options[show_debits]' type='text' value='".esc_attr($options['show_debits'])."' />";
}

//END

//KLISEIS

function egr_plugin_setting_iskliseis() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iskliseis' name='egr_webapps_plugin_options[iskliseis]' type='checkbox' ".esc_attr(isset($options['iskliseis']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_kliseis_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_kliseis_api' name='egr_webapps_plugin_options[kliseis_api]' type='text' value='".esc_attr($options['kliseis_api'])."' />";
}

//END

//EIDOPOIITIRIA

function egr_plugin_setting_iseidopoiitiria() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_iseidopoiitiria' name='egr_webapps_plugin_options[iseidopoiitiria]' type='checkbox' ".esc_attr(isset($options['iseidopoiitiria']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_eidopoiitiria_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_eidopoiitiria_api' name='egr_webapps_plugin_options[eidopoiitiria_api]' type='text' value='".esc_attr($options['eidopoiitiria_api'])."' />";
}

//END

//KATASTIMATA

function egr_plugin_setting_isdimotikos_foros() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdimotikos_foros' name='egr_webapps_plugin_options[isdimotikos_foros]' type='checkbox' ".esc_attr(isset($options['isdimotikos_foros']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_katastimata_api() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_katastimata_api' name='egr_webapps_plugin_options[katastimata_api]' type='text' value='".esc_attr($options['katastimata_api'])."' />";
}

//END

//DIAKANONISMOI

function egr_plugin_setting_isdiakanonismoi() {
    $options = get_option( 'egr_webapps_plugin_options' );
    echo "<input id='egr_plugin_setting_isdiakanonismoi' name='egr_webapps_plugin_options[isdiakanonismoi]' type='checkbox' ".esc_attr(isset($options['isdiakanonismoi']) ? 'checked=checked' : '')." />";
}
//END ?>