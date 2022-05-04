<?php function egr_add_settings_page() {
    add_options_page('Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'Ρυθμίσεις Ηλεκτρονικών Εφαρμογών', 'manage_options', 'egwebapps', 'egr_render_plugin_settings_page');
}
add_action('admin_menu', 'egr_add_settings_page');

add_action('wp_ajax_nopriv_do_update_egwebapps_file', 'update_egwebapps_file');
add_action('wp_ajax_do_update_egwebapps_file', 'update_egwebapps_file');

function update_egwebapps_file() {
    $newContent = $_REQUEST["egwebapps_file_content"];
    $newContent = stripcslashes($newContent);
    $file = explode('admin', plugin_dir_path(__FILE__))[0] . 'front/page-egwebapps.php';
    
    if(isset($newContent) && strlen($newContent) > 0) {
        echo file_put_contents($file, $newContent);
    } else {
        $default_content = '<?php get_header(); ?>
        <?php require_once("view-egwebapps.php"); ?>
        <?php get_footer(); ?>';

        echo file_put_contents($file, $default_content);
    }
}

add_action('admin_enqueue_scripts','custom_scripts');

function custom_scripts() {
    wp_enqueue_script('jquery', plugins_url('/js/jquery.min.js', __FILE__ ));
    wp_enqueue_script('bootstrap', plugins_url('/js/bootstrap.min.js', __FILE__ ));
    wp_enqueue_script('editorjs', plugins_url('/js/editor.js', __FILE__ ));
    wp_enqueue_script('egwebapps-script-js', plugins_url('/js/egwebapps-script.js', __FILE__ ));

    $screen = get_current_screen();
    if($screen->base == 'settings_page_egwebapps') {
        wp_enqueue_style('bootstrap', plugins_url('/css/bootstrap.min.css', __FILE__ ));
    }
}

function egr_render_plugin_settings_page() {
    $options = get_option('egr_webapps_plugin_options'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css" integrity="sha512-PIAUVU8u1vAd0Sz1sS1bFE5F1YjGqm/scQJ+VIUJL9kNa8jtAWFUDMu5vynXPDprRRBqHrE8KKEsjA7z22J1FA==" crossorigin="anonymous" />
    <h2 class="page-title mt-4">Ρυθμίσεις Ηλεκτρονικών Εφαρμογών</h2>

    <div class="card w-100" style="max-width: unset;">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-basic-tab" data-bs-toggle="tab" data-bs-target="#nav-basic" type="button" role="tab" aria-controls="nav-basic" aria-selected="true">Βασικές Ρυθμίσεις</button>
                    <button class="nav-link" id="nav-domes-tab" data-bs-toggle="tab" data-bs-target="#nav-domes" type="button" role="tab" aria-controls="nav-domes" aria-selected="true">Δομές</button>
                    <button class="nav-link" id="nav-carpooling-tab" data-bs-toggle="tab" data-bs-target="#nav-carpooling" type="button" role="tab" aria-controls="nav-carpooling" aria-selected="false">Car Pooling</button>
                    <button class="nav-link" id="nav-epayments-tab" data-bs-toggle="tab" data-bs-target="#nav-epayments" type="button" role="tab" aria-controls="nav-epayments" aria-selected="false">Ηλεκτρονικές Πληρωμές</button>
                    <button class="nav-link" id="nav-kliseis-tab" data-bs-toggle="tab" data-bs-target="#nav-kliseis" type="button" role="tab" aria-controls="nav-kliseis" aria-selected="false">Κλήσεις</button>
                    <button class="nav-link" id="nav-eidopoiitiria-tab" data-bs-toggle="tab" data-bs-target="#nav-eidopoiitiria" type="button" role="tab" aria-controls="nav-eidopoiitiria" aria-selected="false">Ειδοποιητήρια</button>
                    <button class="nav-link" id="nav-dimotikosforos-tab" data-bs-toggle="tab" data-bs-target="#nav-dimotikosforos" type="button" role="tab" aria-controls="nav-dimotikosforos" aria-selected="false">Δημοτικός Φόρος</button>
                    <button class="nav-link" id="nav-koi-aitiseis-tab" data-bs-toggle="tab" data-bs-target="#nav-koi-aitiseis" type="button" role="tab" aria-controls="nav-koi-aitiseis" aria-selected="false">Αιτήσεις Κοινοχρήστων</button>
                    <button class="nav-link" id="nav-diakanonismoi-tab" data-bs-toggle="tab" data-bs-target="#nav-diakanonismoi" type="button" role="tab" aria-controls="nav-diakanonismoi" aria-selected="false">Διακανονισμοί</button>
                    <button class="nav-link" id="nav-diakinisi-tab" data-bs-toggle="tab" data-bs-target="#nav-diakinisi" type="button" role="tab" aria-controls="nav-diakinisi" aria-selected="false">Διακίνηση Εγγράφων</button>
                    <button class="nav-link" id="nav-rantevou-tab" data-bs-toggle="tab" data-bs-target="#nav-rantevou" type="button" role="tab" aria-controls="nav-rantevou" aria-selected="false">Ηλεκτρονικά Ραντεβού</button>
                    <button class="nav-link" id="nav-proslipseis-tab" data-bs-toggle="tab" data-bs-target="#nav-proslipseis" type="button" role="tab" aria-controls="nav-proslipseis" aria-selected="false">Προσλήψεις</button>
                    <button class="nav-link" id="nav-extrasettings-tab" data-bs-toggle="tab" data-bs-target="#nav-extrasettings" type="button" role="tab" aria-controls="nav-extrasettings" aria-selected="false">Ρυθμίσεις Προσθέτου</button>
                </div>
            </nav>
            <form action="options.php" method="post" class="mt-4">
                <?php settings_fields('egr_webapps_plugin_options'); ?>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-basic" role="tabpanel" aria-labelledby="nav-basic-tab">                
                        <?php do_settings_sections('egr_basic_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-domes" role="tabpanel" aria-labelledby="nav-domes-tab">                
                        <?php do_settings_sections('egr_domes_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-carpooling" role="tabpanel" aria-labelledby="nav-carpooling-tab">                
                        <?php do_settings_sections('egr_carpooling_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-epayments" role="tabpanel" aria-labelledby="nav-epayments-tab">                
                        <?php do_settings_sections('egr_epayments_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-kliseis" role="tabpanel" aria-labelledby="nav-kliseis-tab">                
                        <?php do_settings_sections('egr_kliseis_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-eidopoiitiria" role="tabpanel" aria-labelledby="nav-eidopoiitiria-tab">                
                        <?php do_settings_sections('egr_eidopoiitiria_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-dimotikosforos" role="tabpanel" aria-labelledby="nav-dimotikosforos-tab">                
                        <?php do_settings_sections('egr_dimotikosforos_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-koi-aitiseis" role="tabpanel" aria-labelledby="nav-koi-aitiseis-tab">                
                        <?php do_settings_sections('egr_koinoxristoi_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-diakanonismoi" role="tabpanel" aria-labelledby="nav-diakanonismoi-tab">                
                        <?php do_settings_sections('egr_diakanonismoi_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-diakinisi" role="tabpanel" aria-labelledby="nav-diakinisi-tab">                
                        <?php do_settings_sections('egr_diakinisi_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-rantevou" role="tabpanel" aria-labelledby="nav-rantevou-tab">                
                        <?php do_settings_sections('egr_rantevou_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-proslipseis" role="tabpanel" aria-labelledby="nav-proslipseis-tab">                
                        <?php do_settings_sections('egr_proslipseis_plugin'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-extrasettings" role="tabpanel" aria-labelledby="nav-extrasettings-tab">                
                        <?php do_settings_sections('egr_extrasettings_plugin'); ?>
                    </div>
                </div>
                <input name="submit" class="submit-button button button-primary" type="submit" value="<?php esc_attr_e('Save'); ?>" />
            </form>
            <button onclick="topFunction()" id="scrolltotop" title="Go to top"><i class="fa fa-angle-up fa-4x"></i></button>
        </div>
    </div>
    <?php
}

function egr_register_settings() {
    register_setting('egr_webapps_plugin_options', 'egr_webapps_plugin_options');
    
    add_settings_section('auth_settings', 'Βασικές Ρυθμίσεις', 'egr_plugin_section_text', 'egr_basic_plugin');
    add_settings_field('egr_plugin_setting_organization_name', 'Όνομα Οργανισμού (organization_name)', 'egr_plugin_setting_organization_name', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_organization_name_en', 'Όνομα Οργανισμού(EN) (organization_name_en)', 'egr_plugin_setting_organization_name_en', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_console_id', 'Console Client ID', 'egr_plugin_setting_console_id', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_unauthorized_allowed', 'Επιτρέπεται περιήγηση απο μη συνδεδεμένους χρήστες (unauthorized_allowed)', 'egr_plugin_setting_unauthorized_allowed', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_multilingual', 'Πολυγλωσσικό (multilingual)', 'egr_plugin_setting_multilingual', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_authserver', 'URL Authentication Server (stsServer)', 'egr_plugin_setting_authserver', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_clientid', 'Client ID (client_id)', 'egr_plugin_setting_clientid', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_scope', 'Scopes (scope)', 'egr_plugin_setting_scope', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_application_url', 'URL εφαρμογής', 'egr_plugin_setting_application_url', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_home_page_text', 'Κείμενο αρχικής σελίδας', 'egr_plugin_setting_home_page_text', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_home_page_text_en', 'Κείμενο αρχικής σελίδας(EN)', 'egr_plugin_setting_home_page_text_en', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_oroi_xrisis_link', 'Link Όρων Χρήσης', 'egr_plugin_setting_oroi_xrisis_link', 'egr_basic_plugin', 'auth_settings');
    add_settings_field('egr_plugin_setting_order_profile', 'Σειρά Προφίλ (order_profile)', 'egr_plugin_setting_order_profile', 'egr_basic_plugin', 'auth_settings');

    add_settings_section('domes_settings', '<div id="domes">Ρυθμίσεις Δομών</div>', 'egr_plugin_section_text', 'egr_domes_plugin');
    add_settings_field('egr_plugin_setting_isdomes', 'Δομές (is_benefits_enabled)', 'egr_plugin_setting_isdomes', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_domes_api', 'Δομές Api URL (benefits_api)', 'egr_plugin_setting_domes_api', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_tab_title', 'Τίτλος Καρτέλας Μενού (benefits_tab_title)', 'egr_plugin_setting_benefits_tab_title', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_tab_title_en', 'Τίτλος Καρτέλας Μενού(EN) (benefits_tab_title_en)', 'egr_plugin_setting_benefits_tab_title_en', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_description', 'Περιγραφή (benefits_description)', 'egr_plugin_setting_benefits_description', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_description_en', 'Περιγραφή(EN) (benefits_description_en)', 'egr_plugin_setting_benefits_description_en', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_tab_info', 'Οδηγίες (benefits_tab_info)', 'egr_plugin_setting_benefits_tab_info', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_benefits_tab_info_en', 'Οδηγίες (benefits_tab_info_en)', 'egr_plugin_setting_benefits_tab_info_en', 'egr_domes_plugin', 'domes_settings');
    add_settings_field('egr_plugin_setting_app_help_page', 'Σελίδα Οδηγιών (app_help_page)', 'egr_plugin_setting_app_help_page', 'egr_domes_plugin', 'domes_settings');

    add_settings_section('carpooling_settings', '<div id="carpooling">Ρυθμίσεις CarPooling</div>', 'egr_plugin_section_text', 'egr_carpooling_plugin');
    add_settings_field('egr_plugin_setting_iscarpooling', 'Car Pooling (is_carpooling_enabled)', 'egr_plugin_setting_iscarpooling', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_carpooling_api', 'Car Pooling Api URL (carpooling_api)', 'egr_plugin_setting_carpooling_api', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_carpooling_description', 'Περιγραφή (carpooling_description)', 'egr_plugin_setting_carpooling_description', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_carpooling_description_en', 'Περιγραφή(EN) (carpooling_description_en)', 'egr_plugin_setting_carpooling_description_en', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_carpooling_tab_info', 'Γενικές Οδηγίες (carpooling_tab_info)', 'egr_plugin_setting_carpooling_tab_info', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_google_maps_key', 'Google Maps Key (google_maps_key)', 'egr_plugin_setting_google_maps_key', 'egr_carpooling_plugin', 'carpooling_settings');
    add_settings_field('egr_plugin_setting_order_carpooling', 'Σειρά Carpooling (order_carpooling)', 'egr_plugin_setting_order_carpooling', 'egr_carpooling_plugin', 'carpooling_settings');

    add_settings_section('epayments_settings', '<div id="epayments">Ρυθμίσεις Ηλεκτρονικών Πληρωμών</div>', 'egr_plugin_section_text', 'egr_epayments_plugin');
    add_settings_field('egr_plugin_setting_isepayments', 'Ηλεκτρονικές Πληρωμές (is_epayments_enabled)', 'egr_plugin_setting_isepayments', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_api', 'Ηλεκτρονικές Πληρωμές Api URL (epayments_api)', 'egr_plugin_setting_epayments_api', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_description', 'Περιγραφή (epayments_description)', 'egr_plugin_setting_epayments_description', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_description_en', 'Περιγραφή(EN) (epayments_description_en)', 'egr_plugin_setting_epayments_description_en', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_debits_tab_info', 'Οδηγίες Βεβαιωμένων Οφειλών (epayments_debits_tab_info)', 'egr_plugin_setting_epayments_debits_tab_info', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_debits_tab_info_en', 'Οδηγίες Βεβαιωμένων Οφειλών(EN) (epayments_debits_tab_info_en)', 'egr_plugin_setting_epayments_debits_tab_info_en', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_receipts_tab_info', 'Οδηγίες Ιστορικού Πληρωμών Βεβαιωμένων Οφειλών (epayments_receipts_tab_info)', 'egr_plugin_setting_epayments_receipts_tab_info', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_receipts_tab_info_en', 'Οδηγίες Ιστορικού Πληρωμών Βεβαιωμένων Οφειλών(EN) (epayments_receipts_tab_info_en)', 'egr_plugin_setting_epayments_receipts_tab_info_en', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_epayments_tab_info', 'Γενικές Οδηγίες (epayments_tab_info)', 'egr_plugin_setting_epayments_tab_info', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_show_non_persisted_debits', 'Εμφάνιση μη βεβαιωμένων Οφειλών (show_non_persisted_debits)', 'egr_plugin_setting_show_non_persisted_debits', 'egr_epayments_plugin', 'epayments_settings');
    add_settings_field('egr_plugin_setting_order_epayments', 'Σειρά Ηλεκτρονικών Πληρωμών (order_epayments)', 'egr_plugin_setting_order_epayments', 'egr_epayments_plugin', 'epayments_settings');
    
    add_settings_section('kliseis_settings', '<div id="kliseis">Ρυθμίσεις Κλήσεων</div>', 'egr_plugin_section_text', 'egr_kliseis_plugin');
    add_settings_field('egr_plugin_setting_iskliseis', 'Κλήσεις (is_kliseis_enabled)', 'egr_plugin_setting_iskliseis', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_api', 'Κλήσεις Api URL (kliseis_api)', 'egr_plugin_setting_kliseis_api', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_description', 'Περιγραφή (kliseis_description)', 'egr_plugin_setting_kliseis_description', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_description_en', 'Περιγραφή (kliseis_description_en)', 'egr_plugin_setting_kliseis_description_en', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_debits_tab_info', 'Οδηγίες Κλήσεων (kliseis_debits_tab_info)', 'egr_plugin_setting_kliseis_debits_tab_info', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_debits_tab_info_en', 'Οδηγίες Κλήσεων(EN) (kliseis_debits_tab_info_en)', 'egr_plugin_setting_kliseis_debits_tab_info_en', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_receipts_tab_info', 'Οδηγίες Ιστορικού Πληρωμών Κλήσεων (kliseis_receipts_tab_info)', 'egr_plugin_setting_kliseis_receipts_tab_info', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_receipts_tab_info_en', 'Οδηγίες Ιστορικού Πληρωμών Κλήσεων(EN) (kliseis_receipts_tab_info_en)', 'egr_plugin_setting_kliseis_receipts_tab_info_en', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_kliseis_tab_info', 'Γενικές Οδηγίες (kliseis_tab_info)', 'egr_plugin_setting_kliseis_tab_info', 'egr_kliseis_plugin', 'kliseis_settings');
    add_settings_field('egr_plugin_setting_order_kliseis', 'Σειρά Κλήσεων (order_kliseis)', 'egr_plugin_setting_order_kliseis', 'egr_kliseis_plugin', 'kliseis_settings');

    add_settings_section('eidopoiitiria_settings', '<div id="eidopoiitiria">Ρυθμίσεις Ειδοποιητηρίων</div>', 'egr_plugin_section_text', 'egr_eidopoiitiria_plugin');
    add_settings_field('egr_plugin_setting_iseidopoiitiria', 'Ειδοποιητήρια (is_eidopoiitiria_enabled)', 'egr_plugin_setting_iseidopoiitiria', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_eidopoiitiria_api', 'Ειδοποιητήρια Api URL (eidopoiitiria_api)', 'egr_plugin_setting_eidopoiitiria_api', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_eidopoiitiria_description', 'Περιγραφή (eidopoiitiria_description)', 'egr_plugin_setting_eidopoiitiria_description', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_eidopoiitiria_description_en', 'Περιγραφή(EN) (eidopoiitiria_description_en)', 'egr_plugin_setting_eidopoiitiria_description_en', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_eidopoiitiria_tab_info', 'Γενικές Οδηγίες (eidopoiitiria_tab_info)', 'egr_plugin_setting_eidopoiitiria_tab_info', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_eidopoiitiria_tab_info_en', 'Γενικές Οδηγίες(EN) (eidopoiitiria_tab_info_en)', 'egr_plugin_setting_eidopoiitiria_tab_info_en', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');
    add_settings_field('egr_plugin_setting_order_eidopoiitiria', 'Σειρά Ειδοποιητηρίων (order_eidopoiitiria)', 'egr_plugin_setting_order_eidopoiitiria', 'egr_eidopoiitiria_plugin', 'eidopoiitiria_settings');

    add_settings_section('dimotikos_foros_settings', '<div id="dimotikosforos">Ρυθμίσεις Τέλους 0.5% / Παρεπιδημούντων</div>', 'egr_plugin_section_text', 'egr_dimotikosforos_plugin');
    add_settings_field('egr_plugin_setting_isdimotikos_foros', 'Τέλος 0.5% / Παρεπιδημούντων (is_dimotikos_foros_enabled)', 'egr_plugin_setting_isdimotikos_foros', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_katastimata_api', 'Τέλος 0.5% / Παρεπιδημούντων Api URL (katastimata_api)', 'egr_plugin_setting_katastimata_api', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_katastimata_description', 'Περιγραφή (katastimata_description)', 'egr_plugin_setting_katastimata_description', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_katastimata_description_en', 'Περιγραφή(EN) (katastimata_description_en)', 'egr_plugin_setting_katastimata_description_en', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_katastimata_tab_info', 'Γενικές Οδηγίες (katastimata_tab_info)', 'egr_plugin_setting_katastimata_tab_info', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_katastimata_tab_info_en', 'Γενικές Οδηγίες(EN) (katastimata_tab_info_en)', 'egr_plugin_setting_katastimata_tab_info_en', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');
    add_settings_field('egr_plugin_setting_order_katastimata', 'Σειρά Τέλους 0.5% / Παρεπιδημούντων (order_katastimata)', 'egr_plugin_setting_order_katastimata', 'egr_dimotikosforos_plugin', 'dimotikos_foros_settings');

    add_settings_section('koin_aitiseis_settings', '<div id="koinoxristoi">Ρυθμίσεις Αιτήσεων Κοινοχρήστων</div>', 'egr_plugin_section_text', 'egr_koinoxristoi_plugin');
    add_settings_field('egr_plugin_setting_is_koinoxristoi', 'Αιτήσεις Κοινοχρήστων (is_koinoxristoi_enabled)', 'egr_plugin_setting_koinoxristoi', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_koinoxristoi_api', 'Αιτήσεις Κοινοχρήστων Api URL (koinoxristoi_api)', 'egr_plugin_setting_koinoxristoi_api', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_koinoxristoi_description', 'Περιγραφή (koinoxristoi_description)', 'egr_plugin_setting_koinoxristoi_description', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_koinoxristoi_description_en', 'Περιγραφή(EN) (koinoxristoi_description_en)', 'egr_plugin_setting_koinoxristoi_description_en', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_koinoxristoi_tab_info', 'Γενικές Οδηγίες (koinoxristoi_tab_info)', 'egr_plugin_setting_koinoxristoi_tab_info', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_koinoxristoi_tab_info_en', 'Γενικές Οδηγίες(EN) (koinoxristoi_tab_info_en)', 'egr_plugin_setting_koinoxristoi_tab_info_en', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');
    add_settings_field('egr_plugin_setting_order_koinoxristoi', 'Σειρά Αιτήσεων Κοινοχρήστων (order_koinoxristoi)', 'egr_plugin_setting_order_koinoxristoi', 'egr_koinoxristoi_plugin', 'koinoxristoi_settings');

    add_settings_section('diakanonismoi_settings', '<div id="diakanonismoi">Ρυθμίσεις Διακανονισμών</div>', 'egr_plugin_section_text', 'egr_diakanonismoi_plugin');
    add_settings_field('egr_plugin_setting_isdiakanonismoi', 'Διακανονισμοί (is_diakanonismoi_enabled)', 'egr_plugin_setting_isdiakanonismoi', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    add_settings_field('egr_plugin_setting_diakanonismoi_description', 'Περιγραφή (diakanonismoi_description)', 'egr_plugin_setting_diakanonismoi_description', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    add_settings_field('egr_plugin_setting_diakanonismoi_description_en', 'Περιγραφή(EN) (diakanonismoi_description_en)', 'egr_plugin_setting_diakanonismoi_description_en', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    add_settings_field('egr_plugin_setting_diakanonismoi_tab_info', 'Γενικές Οδηγίες (diakanonismoi_tab_info)', 'egr_plugin_setting_diakanonismoi_tab_info', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    add_settings_field('egr_plugin_setting_diakanonismoi_tab_info_en', 'Γενικές Οδηγίες(EN) (diakanonismoi_tab_info_en)', 'egr_plugin_setting_diakanonismoi_tab_info_en', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    add_settings_field('egr_plugin_setting_order_diakanonismoi', 'Σειρά Διακανονισμών (order_diakanonismoi)', 'egr_plugin_setting_order_diakanonismoi', 'egr_diakanonismoi_plugin', 'diakanonismoi_settings');
    
    add_settings_section('shde_settings', '<div id="diakinisi">Ρυθμίσεις Ηλεκτρονικής Διακήνησης Εγγράφων</div>', 'egr_plugin_section_text', 'egr_diakinisi_plugin');
    add_settings_field('egr_plugin_setting_isshde', 'Ηλεκτρονική Διακήνηση Εγγράφων (is_shde_app_enabled)', 'egr_plugin_setting_isshde', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_shde_api', 'Api Ηλεκτρονικής Διακήνησης Εγγράφων (shde_api)', 'egr_plugin_setting_shde_api', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_shde_description', 'Περιγραφή (shde_description)', 'egr_plugin_setting_shde_description', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_shde_description_en', 'Περιγραφή(EN) (shde_description_en)', 'egr_plugin_setting_shde_description_en', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_shde_tab_info', 'Γενικές Οδηγίες (shde_tab_info)', 'egr_plugin_setting_shde_tab_info', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_shde_tab_info_en', 'Γενικές Οδηγίες(EN) (shde_tab_info_en)', 'egr_plugin_setting_shde_tab_info_en', 'egr_diakinisi_plugin', 'shde_settings');
    add_settings_field('egr_plugin_setting_order_shde', 'Σειρά Ηλεκτρονικής Διακήνησης Εγγράφων (order_shde)', 'egr_plugin_setting_order_shde', 'egr_diakinisi_plugin', 'shde_settings');

    add_settings_section('rantevou_settings', '<div id="rantevou">Ρυθμίσεις Ηλεκτρονικών Ραντεβού</div>', 'egr_plugin_section_text', 'egr_rantevou_plugin');
    add_settings_field('egr_plugin_setting_israntevou', 'Ηλεκτρονικά Ραντεβού (is_rantevou_app_enabled)', 'egr_plugin_setting_israntevou', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_rantevou_api', 'Api Ηλεκτρονικών Ραντεβού (rantevou_api)', 'egr_plugin_setting_rantevou_api', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_rantevou_description', 'Περιγραφή (rantevou_description)', 'egr_plugin_setting_rantevou_description', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_rantevou_description_en', 'Περιγραφή(EN) (rantevou_description_en)', 'egr_plugin_setting_rantevou_description_en', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_rantevou_tab_info', 'Γενικές Οδηγίες (rantevou_tab_info)', 'egr_plugin_setting_rantevou_tab_info', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_rantevou_tab_info_en', 'Γενικές Οδηγίες(ΕΝ) (rantevou_tab_info_en)', 'egr_plugin_setting_rantevou_tab_info_en', 'egr_rantevou_plugin', 'rantevou_settings');
    add_settings_field('egr_plugin_setting_order_rantevou', 'Σειρά Ραντεβού (order_rantevou)', 'egr_plugin_setting_order_rantevou', 'egr_rantevou_plugin', 'rantevou_settings');
    
    add_settings_section('proslipseis_settings', '<div id="proslipseis">Ρυθμίσεις Προσλήψεων</div>', 'egr_plugin_section_text', 'egr_proslipseis_plugin');
    add_settings_field('egr_plugin_setting_isproslipseis', 'Προσλήψεις (is_proslipseis_enabled)', 'egr_plugin_setting_isproslipseis', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_api', 'Api Προσλήψεων (proslipseis_api)', 'egr_plugin_setting_proslipseis_api', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_description', 'Περιγραφή (proslipseis_description)', 'egr_plugin_setting_proslipseis_description', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_description_en', 'Περιγραφή(ΕΝ) (proslipseis_description_en)', 'egr_plugin_setting_proslipseis_description_en', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_tab_title', 'Τίτλος Καρτέλας Μενού (proslipseis_tab_title)', 'egr_plugin_setting_proslipseis_tab_title', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_tab_title_en', 'Τίτλος Καρτέλας Μενού (proslipseis_tab_title_en)', 'egr_plugin_setting_proslipseis_tab_title_en', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_proslipseis_tab_info', 'Γενικές Οδηγίες (proslipseis_tab_info)', 'egr_plugin_setting_proslipseis_tab_info', 'egr_proslipseis_plugin', 'proslipseis_settings');
    add_settings_field('egr_plugin_setting_order_proslipseis', 'Σειρά Προσλήψεων (order_proslipseis)', 'egr_plugin_setting_order_proslipseis', 'egr_proslipseis_plugin', 'proslipseis_settings');

    add_settings_section('extra_plugin_options', '<div id="extra-settings">Έξτρα Ρυθμίσεις Plugin</div>', 'egr_plugin_section_text', 'egr_extrasettings_plugin');
    add_settings_field('egr_plugin_setting_jquery_check', 'Ενεργοποίηση JQuery', 'egr_plugin_setting_jquery_check', 'egr_extrasettings_plugin', 'extra_plugin_options');
    add_settings_field('egr_plugin_setting_extra_css', 'Έξτρα Κανόνες CSS', 'egr_plugin_setting_extra_css', 'egr_extrasettings_plugin', 'extra_plugin_options');
    add_settings_field('egr_plugin_setting_extra_css_path', 'Path υπάρχοντος CSS αρχείου', 'egr_plugin_setting_extra_css_path', 'egr_extrasettings_plugin', 'extra_plugin_options');
	add_settings_field('egr_plugin_setting_extra_change_egwebapps', 'Αλλαγή αρχείου egwebapps', 'egr_plugin_setting_extra_change_egwebapps', 'egr_extrasettings_plugin', 'extra_plugin_options');
}
add_action('admin_init', 'egr_register_settings'); 

function egr_plugin_section_text() {
    
}

function egr_plugin_setting_organization_name() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_organization_name' name='egr_webapps_plugin_options[organization_name]' type='text' value='".esc_attr(isset($options['organization_name']) ? $options['organization_name'] : '')."' />";
}

function egr_plugin_setting_organization_name_en() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_organization_name_en' name='egr_webapps_plugin_options[organization_name_en]' type='text' value='".esc_attr(isset($options['organization_name_en']) ? $options['organization_name_en'] : '')."' />";
}

function egr_plugin_setting_console_id() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_console_id' name='egr_webapps_plugin_options[console_id]' type='text' value='".esc_attr(isset($options['console_id']) ? $options['console_id'] : '')."' />";
}

function egr_plugin_setting_unauthorized_allowed() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_unauthorized_allowed' name='egr_webapps_plugin_options[unauthorized_allowed]' type='checkbox' ".esc_attr(isset($options['unauthorized_allowed']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_multilingual() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_multilingual' name='egr_webapps_plugin_options[multilingual]' type='checkbox' ".esc_attr(isset($options['multilingual']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_authserver() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_authserver' name='egr_webapps_plugin_options[authserver]' type='text' value='".esc_url(isset($options['authserver']) ? $options['authserver'] : '')."' />";
}

function egr_plugin_setting_clientid() {
    $options = get_option('egr_webapps_plugin_options'); 
    echo "<input id='egr_plugin_setting_clientid' name='egr_webapps_plugin_options[clientid]' type='text' value='".esc_attr(isset($options['clientid']) ? $options['clientid'] : '')."' />";
}

function egr_plugin_setting_scope() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_scope' name='egr_webapps_plugin_options[scope]' type='text' disabled='disabled' value='openid profile roles profileextra EgritosGroup.Auth.Basic' />";
}

function egr_plugin_setting_application_url() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_application_url' name='egr_webapps_plugin_options[application_url]' type='text' value='".esc_attr(isset($options['application_url']) ? $options['application_url'] : '')."' />";
}

function egr_plugin_setting_home_page_text() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_home_page_text' name='egr_webapps_plugin_options[home_page_text]' type='text' value='".esc_attr(isset($options['home_page_text']) ? $options['home_page_text'] : '')."' />";
}

function egr_plugin_setting_home_page_text_en() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_home_page_text_en' name='egr_webapps_plugin_options[home_page_text_en]' type='text' value='".esc_attr(isset($options['home_page_text_en']) ? $options['home_page_text_en'] : '')."' />";
}

function egr_plugin_setting_oroi_xrisis_link() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_oroi_xrisis_link' name='egr_webapps_plugin_options[oroi_xrisis_link]' type='text' value='".esc_attr(isset($options['oroi_xrisis_link']) ? $options['oroi_xrisis_link'] : '')."' />";
}

function egr_plugin_setting_order_profile() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_profile' name='egr_webapps_plugin_options[order_profile]' type='text' value='".esc_attr(isset($options['order_profile']) ? $options['order_profile'] : 200)."' />";
}

//domes

function egr_plugin_setting_isdomes() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isdomes' name='egr_webapps_plugin_options[isdomes]' type='checkbox' ".esc_attr(isset($options['isdomes']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_domes_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_domes_api' name='egr_webapps_plugin_options[domes_api]' type='text' value='".esc_attr(isset($options['domes_api']) ? $options['domes_api'] : '')."' />";
}

function egr_plugin_setting_benefits_tab_title() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_benefits_tab_title' name='egr_webapps_plugin_options[benefits_tab_title]' type='text' value='".esc_attr(isset($options['benefits_tab_title']) ? $options['benefits_tab_title'] : '')."' />";
}

function egr_plugin_setting_benefits_tab_title_en() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_benefits_tab_title_en' name='egr_webapps_plugin_options[benefits_tab_title_en]' type='text' value='".esc_attr(isset($options['benefits_tab_title_en']) ? $options['benefits_tab_title_en'] : '')."' />";
}

function egr_plugin_setting_benefits_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_benefits_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_benefits_description' name='egr_webapps_plugin_options[benefits_description]' value='".esc_attr(isset($options['benefits_description']) ? $options['benefits_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_benefits_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_benefits_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_benefits_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_benefits_description_en' name='egr_webapps_plugin_options[benefits_description_en]' value='".esc_attr(isset($options['benefits_description_en']) ? $options['benefits_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_benefits_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_benefits_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_benefits_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_benefits_tab_info' name='egr_webapps_plugin_options[benefits_tab_info]' value='".esc_attr(isset($options['benefits_tab_info']) ? $options['benefits_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_benefits_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_benefits_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_benefits_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_benefits_tab_info_en' name='egr_webapps_plugin_options[benefits_tab_info_en]' value='".esc_attr(isset($options['benefits_tab_info_en']) ? $options['benefits_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_benefits_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_app_help_page() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_app_help_page' name='egr_webapps_plugin_options[app_help_page]' type='text' value='".esc_attr(isset($options['app_help_page']) ? $options['app_help_page'] : '')."' />";
}

//END

//CARPOOLING

function egr_plugin_setting_iscarpooling() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_iscarpooling' name='egr_webapps_plugin_options[iscarpooling]' type='checkbox' ".esc_attr(isset($options['iscarpooling']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_carpooling_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_carpooling_api' name='egr_webapps_plugin_options[carpooling_api]' type='text' value='".esc_attr(isset($options['carpooling_api']) ? $options['carpooling_api'] : '')."' />";
}

function egr_plugin_setting_carpooling_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_carpooling_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_carpooling_description' name='egr_webapps_plugin_options[carpooling_description]' value='".esc_attr(isset($options['carpooling_description']) ? $options['carpooling_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_carpooling_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_carpooling_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_carpooling_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_carpooling_description_en' name='egr_webapps_plugin_options[carpooling_description_en]' value='".esc_attr(isset($options['carpooling_description_en']) ? $options['carpooling_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_carpooling_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_carpooling_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_carpooling_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_carpooling_tab_info' name='egr_webapps_plugin_options[carpooling_tab_info]' value='".esc_attr(isset($options['carpooling_tab_info']) ? $options['carpooling_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_carpooling_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_google_maps_key() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_google_maps_key' name='egr_webapps_plugin_options[google_maps_key]' type='text' value='".esc_attr(isset($options['google_maps_key']) ? $options['google_maps_key'] : '')."' />";
}

function egr_plugin_setting_order_carpooling() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_carpooling' name='egr_webapps_plugin_options[order_carpooling]' type='text' value='".esc_attr(isset($options['order_carpooling']) ? $options['order_carpooling'] : 170)."' />";
}

//END

//EPAYMENTS

function egr_plugin_setting_isepayments() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isepayments' name='egr_webapps_plugin_options[isepayments]' type='checkbox' ".esc_attr(isset($options['isepayments']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_epayments_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_epayments_api' name='egr_webapps_plugin_options[epayments_api]' type='text' value='".esc_attr(isset($options['epayments_api']) ? $options['epayments_api'] : '')."' />";
}

function egr_plugin_setting_epayments_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_description' name='egr_webapps_plugin_options[epayments_description]' value='".esc_attr(isset($options['epayments_description']) ? $options['epayments_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_description_en' name='egr_webapps_plugin_options[epayments_description_en]' value='".esc_attr(isset($options['epayments_description_en']) ? $options['epayments_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_debits_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_debits_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_debits_tab_info' name='egr_webapps_plugin_options[epayments_debits_tab_info]' value='".esc_attr(isset($options['epayments_debits_tab_info']) ? $options['epayments_debits_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_debits_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_debits_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_debits_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_debits_tab_info_en' name='egr_webapps_plugin_options[epayments_debits_tab_info_en]' value='".esc_attr(isset($options['epayments_debits_tab_info_en']) ? $options['epayments_debits_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_debits_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_receipts_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_receipts_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_receipts_tab_info' name='egr_webapps_plugin_options[epayments_receipts_tab_info]' value='".esc_attr(isset($options['epayments_receipts_tab_info']) ? $options['epayments_receipts_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_receipts_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_receipts_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_receipts_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_receipts_tab_info_en' name='egr_webapps_plugin_options[epayments_receipts_tab_info_en]' value='".esc_attr(isset($options['epayments_receipts_tab_info_en']) ? $options['epayments_receipts_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_receipts_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_epayments_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_epayments_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_epayments_tab_info' name='egr_webapps_plugin_options[epayments_tab_info]' value='".esc_attr(isset($options['epayments_tab_info']) ? $options['epayments_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_epayments_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_show_non_persisted_debits() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_show_non_persisted_debits' name='egr_webapps_plugin_options[show_non_persisted_debits]' type='checkbox' ".esc_attr(isset($options['show_non_persisted_debits']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_order_epayments() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_epayments' name='egr_webapps_plugin_options[order_epayments]' type='text' value='".esc_attr(isset($options['order_epayments']) ? $options['order_epayments'] : 10)."' />";
}

//END

//KLISEIS

function egr_plugin_setting_iskliseis() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_iskliseis' name='egr_webapps_plugin_options[iskliseis]' type='checkbox' ".esc_attr(isset($options['iskliseis']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_kliseis_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_kliseis_api' name='egr_webapps_plugin_options[kliseis_api]' type='text' value='".esc_attr(isset($options['kliseis_api']) ? $options['kliseis_api'] : '')."' />";
}

function egr_plugin_setting_kliseis_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_description' name='egr_webapps_plugin_options[kliseis_description]' value='".esc_attr(isset($options['kliseis_description']) ? $options['kliseis_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_description_en' name='egr_webapps_plugin_options[kliseis_description_en]' value='".esc_attr(isset($options['kliseis_description_en']) ? $options['kliseis_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_tab_info' name='egr_webapps_plugin_options[kliseis_tab_info]' value='".esc_attr(isset($options['kliseis_tab_info']) ? $options['kliseis_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_debits_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_debits_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_debits_tab_info' name='egr_webapps_plugin_options[kliseis_debits_tab_info]' value='".esc_attr(isset($options['kliseis_debits_tab_info']) ? $options['kliseis_debits_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_debits_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_debits_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_debits_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_debits_tab_info_en' name='egr_webapps_plugin_options[kliseis_debits_tab_info_en]' value='".esc_attr(isset($options['kliseis_debits_tab_info_en']) ? $options['kliseis_debits_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_debits_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_receipts_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_receipts_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_receipts_tab_info' name='egr_webapps_plugin_options[kliseis_receipts_tab_info]' value='".esc_attr(isset($options['kliseis_receipts_tab_info']) ? $options['kliseis_receipts_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_receipts_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_kliseis_receipts_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_kliseis_receipts_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_kliseis_receipts_tab_info_en' name='egr_webapps_plugin_options[kliseis_receipts_tab_info_en]' value='".esc_attr(isset($options['kliseis_receipts_tab_info_en']) ? $options['kliseis_receipts_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_kliseis_receipts_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_kliseis() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_kliseis' name='egr_webapps_plugin_options[order_kliseis]' type='text' value='".esc_attr(isset($options['order_kliseis']) ? $options['order_kliseis'] : 20)."' />";
}

//END

//EIDOPOIITIRIA

function egr_plugin_setting_iseidopoiitiria() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_iseidopoiitiria' name='egr_webapps_plugin_options[iseidopoiitiria]' type='checkbox' ".esc_attr(isset($options['iseidopoiitiria']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_eidopoiitiria_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_eidopoiitiria_api' name='egr_webapps_plugin_options[eidopoiitiria_api]' type='text' value='".esc_attr(isset($options['eidopoiitiria_api']) ? $options['eidopoiitiria_api'] : '')."' />";
}

function egr_plugin_setting_eidopoiitiria_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_eidopoiitiria_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_eidopoiitiria_description' name='egr_webapps_plugin_options[eidopoiitiria_description]' value='".esc_attr(isset($options['eidopoiitiria_description']) ? $options['eidopoiitiria_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_eidopoiitiria_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_eidopoiitiria_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_eidopoiitiria_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_eidopoiitiria_description_en' name='egr_webapps_plugin_options[eidopoiitiria_description_en]' value='".esc_attr(isset($options['eidopoiitiria_description_en']) ? $options['eidopoiitiria_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_eidopoiitiria_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_eidopoiitiria_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_eidopoiitiria_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_eidopoiitiria_tab_info' name='egr_webapps_plugin_options[eidopoiitiria_tab_info]' value='".esc_attr(isset($options['eidopoiitiria_tab_info']) ? $options['eidopoiitiria_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_eidopoiitiria_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_eidopoiitiria_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_eidopoiitiria_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_eidopoiitiria_tab_info_en' name='egr_webapps_plugin_options[eidopoiitiria_tab_info_en]' value='".esc_attr(isset($options['eidopoiitiria_tab_info_en']) ? $options['eidopoiitiria_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_eidopoiitiria_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_eidopoiitiria() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_eidopoiitiria' name='egr_webapps_plugin_options[order_eidopoiitiria]' type='text' value='".esc_attr(isset($options['order_eidopoiitiria']) ? $options['order_eidopoiitiria'] : 70)."' />";
}

//END

//KATASTIMATA

function egr_plugin_setting_isdimotikos_foros() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isdimotikos_foros' name='egr_webapps_plugin_options[isdimotikos_foros]' type='checkbox' ".esc_attr(isset($options['isdimotikos_foros']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_katastimata_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_katastimata_api' name='egr_webapps_plugin_options[katastimata_api]' type='text' value='".esc_attr(isset($options['katastimata_api']) ? $options['katastimata_api'] : '')."' />";
}

function egr_plugin_setting_katastimata_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_katastimata_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_katastimata_description' name='egr_webapps_plugin_options[katastimata_description]' value='".esc_attr(isset($options['katastimata_description']) ? $options['katastimata_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_katastimata_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_katastimata_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_katastimata_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_katastimata_description_en' name='egr_webapps_plugin_options[katastimata_description_en]' value='".esc_attr(isset($options['katastimata_description_en']) ? $options['katastimata_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_katastimata_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_katastimata_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_katastimata_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_katastimata_tab_info' name='egr_webapps_plugin_options[katastimata_tab_info]' value='".esc_attr(isset($options['katastimata_tab_info']) ? $options['katastimata_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_katastimata_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_katastimata_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_katastimata_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_katastimata_tab_info_en' name='egr_webapps_plugin_options[katastimata_tab_info_en]' value='".esc_attr(isset($options['katastimata_tab_info_en']) ? $options['katastimata_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_katastimata_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_katastimata() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_katastimata' name='egr_webapps_plugin_options[order_katastimata]' type='text' value='".esc_attr(isset($options['order_katastimata']) ? $options['order_katastimata'] : 30)."' />";
}

//END

//KOINOXRHSTOI

function egr_plugin_setting_koinoxristoi() {
   $options = get_option('egr_webapps_plugin_options');
   echo "<input id='egr_plugin_setting_koinoxristoi' name='egr_webapps_plugin_options[koinoxristoi]' type='checkbox' ".esc_attr(isset($options['koinoxristoi']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_koinoxristoi_api() {
   $options = get_option('egr_webapps_plugin_options');
   echo "<input id='egr_plugin_setting_koinoxristoi_api' name='egr_webapps_plugin_options[koinoxristoi_api]' type='text' value='".esc_attr(isset($options['koinoxristoi_api']) ? $options['katastimata_api'] : '')."' />";
}

function egr_plugin_setting_koinoxristoi_description() {
   $options = get_option('egr_webapps_plugin_options'); ?>

   <div class="editor-wrapper egr_plugin_setting_katastimata_description_editor">
       <?php echo "<input type='hidden' id='egr_plugin_setting_koinoxristoi_description' name='egr_webapps_plugin_options[koinoxristoi_description]' value='".esc_attr(isset($options['koinoxristoi_description']) ? $options['koinoxristoi_description'] : '')."' />"; ?>
       <div id="egr_plugin_setting_koinoxristoi_description_editor" class="editor"></div>
   </div>
<?php }

function egr_plugin_setting_koinoxristoi_description_en() {
   $options = get_option('egr_webapps_plugin_options'); ?>

   <div class="editor-wrapper egr_plugin_setting_katastimata_description_en_editor">
       <?php echo "<input type='hidden' id='egr_plugin_setting_koinoxristoi_description_en' name='egr_webapps_plugin_options[koinoxristoi_description_en]' value='".esc_attr(isset($options['koinoxristoi_description_en']) ? $options['koinoxristoi_description_en'] : '')."' />"; ?>
       <div id="egr_plugin_setting_koinoxristoi_description_en_editor" class="editor"></div>
   </div>
<?php }

function egr_plugin_setting_koinoxristoi_tab_info() {
   $options = get_option('egr_webapps_plugin_options'); ?>

   <div class="editor-wrapper egr_plugin_setting_katastimata_tab_info_editor">
       <?php echo "<input type='hidden' id='egr_plugin_setting_koinoxristoi_tab_info' name='egr_webapps_plugin_options[koinoxristoi_tab_info]' value='".esc_attr(isset($options['koinoxristoi_tab_info']) ? $options['koinoxristoi_tab_info'] : '')."' />"; ?>
       <div id="egr_plugin_setting_koinoxristoi_tab_info_editor" class="editor"></div>
   </div>
<?php }

function egr_plugin_setting_koinoxristoi_tab_info_en() {
   $options = get_option('egr_webapps_plugin_options'); ?>

   <div class="editor-wrapper egr_plugin_setting_katastimata_tab_info_en_editor">
       <?php echo "<input type='hidden' id='egr_plugin_setting_koinoxristoi_tab_info_en' name='egr_webapps_plugin_options[koinoxristoi_tab_info_en]' value='".esc_attr(isset($options['koinoxristoi_tab_info_en']) ? $options['koinoxristoi_tab_info_en'] : '')."' />"; ?>
       <div id="egr_plugin_setting_koinoxristoi_tab_info_en_editor" class="editor"></div>
   </div>
<?php }

function egr_plugin_setting_order_koinoxristoi() {
   $options = get_option('egr_webapps_plugin_options');
   echo "<input id='egr_plugin_setting_order_koinoxristoi' name='egr_webapps_plugin_options[order_koinoxristoi]' type='text' value='".esc_attr(isset($options['order_koinoxristoi']) ? $options['order_koinoxristoi'] : 30)."' />";
}

//END

//DIAKANONISMOI

function egr_plugin_setting_isdiakanonismoi() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isdiakanonismoi' name='egr_webapps_plugin_options[isdiakanonismoi]' type='checkbox' ".esc_attr(isset($options['isdiakanonismoi']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_diakanonismoi_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_diakanonismoi_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_diakanonismoi_description' name='egr_webapps_plugin_options[diakanonismoi_description]' value='".esc_attr(isset($options['diakanonismoi_description']) ? $options['diakanonismoi_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_diakanonismoi_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_diakanonismoi_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_diakanonismoi_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_diakanonismoi_description_en' name='egr_webapps_plugin_options[diakanonismoi_description_en]' value='".esc_attr(isset($options['diakanonismoi_description_en']) ? $options['diakanonismoi_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_diakanonismoi_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_diakanonismoi_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_diakanonismoi_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_diakanonismoi_tab_info' name='egr_webapps_plugin_options[diakanonismoi_tab_info]' value='".esc_attr(isset($options['diakanonismoi_tab_info']) ? $options['diakanonismoi_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_diakanonismoi_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_diakanonismoi_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_diakanonismoi_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_diakanonismoi_tab_info_en' name='egr_webapps_plugin_options[diakanonismoi_tab_info_en]' value='".esc_attr(isset($options['diakanonismoi_tab_info_en']) ? $options['diakanonismoi_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_diakanonismoi_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_diakanonismoi() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_diakanonismoi' name='egr_webapps_plugin_options[order_diakanonismoi]' type='text' value='".esc_attr(isset($options['order_diakanonismoi']) ? $options['order_diakanonismoi'] : 40)."' />";
}

//SHDE

function egr_plugin_setting_isshde() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isshde' name='egr_webapps_plugin_options[isshde]' type='checkbox' ".esc_attr(isset($options['isshde']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_shde_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_shde_api' name='egr_webapps_plugin_options[shde_api]' type='text' value='".esc_attr(isset($options['shde_api']) ? $options['shde_api'] : '')."' />";
}

function egr_plugin_setting_shde_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_shde_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_shde_description' name='egr_webapps_plugin_options[shde_description]' value='".esc_attr(isset($options['shde_description']) ? $options['shde_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_shde_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_shde_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_shde_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_shde_description_en' name='egr_webapps_plugin_options[shde_description_en]' value='".esc_attr(isset($options['shde_description_en']) ? $options['shde_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_shde_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_shde_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_shde_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_shde_tab_info' name='egr_webapps_plugin_options[shde_tab_info]' value='".esc_attr(isset($options['shde_tab_info']) ? $options['shde_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_shde_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_shde_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_shde_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_shde_tab_info_en' name='egr_webapps_plugin_options[shde_tab_info_en]' value='".esc_attr(isset($options['shde_tab_info_en']) ? $options['shde_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_shde_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_shde() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_shde' name='egr_webapps_plugin_options[order_shde]' type='text' value='".esc_attr(isset($options['order_shde']) ? $options['order_shde'] : 90)."' />";
}

//RANTEVOU

function egr_plugin_setting_israntevou() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_israntevou' name='egr_webapps_plugin_options[israntevou]' type='checkbox' ".esc_attr(isset($options['israntevou']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_rantevou_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_rantevou_api' name='egr_webapps_plugin_options[rantevou_api]' type='text' value='".esc_attr(isset($options['rantevou_api']) ? $options['rantevou_api'] : '')."' />";
}

function egr_plugin_setting_rantevou_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_rantevou_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_rantevou_description' name='egr_webapps_plugin_options[rantevou_description]' value='".esc_attr(isset($options['rantevou_description']) ? $options['rantevou_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_rantevou_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_rantevou_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_rantevou_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_rantevou_description_en' name='egr_webapps_plugin_options[rantevou_description_en]' value='".esc_attr(isset($options['rantevou_description_en']) ? $options['rantevou_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_rantevou_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_rantevou_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_rantevou_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_rantevou_tab_info' name='egr_webapps_plugin_options[rantevou_tab_info]' value='".esc_attr(isset($options['rantevou_tab_info']) ? $options['rantevou_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_rantevou_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_rantevou_tab_info_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_rantevou_tab_info_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_rantevou_tab_info_en' name='egr_webapps_plugin_options[rantevou_tab_info_en]' value='".esc_attr(isset($options['rantevou_tab_info_en']) ? $options['rantevou_tab_info_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_rantevou_tab_info_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_rantevou() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_rantevou' name='egr_webapps_plugin_options[order_rantevou]' type='text' value='".esc_attr(isset($options['order_rantevou']) ? $options['order_rantevou'] : 100)."' />";
}

//END 

//PROSLIPSEIS

function egr_plugin_setting_isproslipseis() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_isproslipseis' name='egr_webapps_plugin_options[isproslipseis]' type='checkbox' ".esc_attr(isset($options['isproslipseis']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_proslipseis_api() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_proslipseis_api' name='egr_webapps_plugin_options[proslipseis_api]' type='text' value='".esc_attr(isset($options['proslipseis_api']) ? $options['proslipseis_api'] : '')."' />";
}

function egr_plugin_setting_proslipseis_description() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_proslipseis_description_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_proslipseis_description' name='egr_webapps_plugin_options[proslipseis_description]' value='".esc_attr(isset($options['proslipseis_description']) ? $options['proslipseis_description'] : '')."' />"; ?>
        <div id="egr_plugin_setting_proslipseis_description_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_proslipseis_description_en() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_proslipseis_description_en_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_proslipseis_description_en' name='egr_webapps_plugin_options[proslipseis_description_en]' value='".esc_attr(isset($options['proslipseis_description_en']) ? $options['proslipseis_description_en'] : '')."' />"; ?>
        <div id="egr_plugin_setting_proslipseis_description_en_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_proslipseis_tab_title() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_proslipseis_tab_title' name='egr_webapps_plugin_options[proslipseis_tab_title]' type='text' value='".esc_attr(isset($options['proslipseis_tab_title']) ? $options['proslipseis_tab_title'] : '')."' />";
}

function egr_plugin_setting_proslipseis_tab_title_en() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_proslipseis_tab_title_en' name='egr_webapps_plugin_options[proslipseis_tab_title_en]' type='text' value='".esc_attr(isset($options['proslipseis_tab_title_en']) ? $options['proslipseis_tab_title_en'] : '')."' />";
}

function egr_plugin_setting_proslipseis_tab_info() {
    $options = get_option('egr_webapps_plugin_options'); ?>

    <div class="editor-wrapper egr_plugin_setting_proslipseis_tab_info_editor">
        <?php echo "<input type='hidden' id='egr_plugin_setting_proslipseis_tab_info' name='egr_webapps_plugin_options[proslipseis_tab_info]' value='".esc_attr(isset($options['proslipseis_tab_info']) ? $options['proslipseis_tab_info'] : '')."' />"; ?>
        <div id="egr_plugin_setting_proslipseis_tab_info_editor" class="editor"></div>
    </div>
<?php }

function egr_plugin_setting_order_proslipseis() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_order_proslipseis' name='egr_webapps_plugin_options[order_proslipseis]' type='text' value='".esc_attr(isset($options['order_proslipseis']) ? $options['order_proslipseis'] : 60)."' />";
}

//END 

function egr_plugin_setting_shortcode() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_shortcode' name='egr_webapps_plugin_options[shortcode]' type='checkbox' ".esc_attr(isset($options['shortcode']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_jquery_check() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_jquery_check' name='egr_webapps_plugin_options[jquery_check]' type='checkbox' ".esc_attr(isset($options['jquery_check']) ? 'checked=checked' : '')." />";
}

function egr_plugin_setting_extra_css() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<textarea id='egr_plugin_setting_extra_css' name='egr_webapps_plugin_options[extra_css]'>".esc_attr(isset($options['extra_css']) ? $options['extra_css'] : '')."</textarea>";
}

function egr_plugin_setting_extra_css_path() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<input id='egr_plugin_setting_extra_css_path' name='egr_webapps_plugin_options[extra_css_path]' type='text' value='".esc_attr(isset($options['extra_css_path']) ? $options['extra_css_path'] : '')."' />";
}

function egr_plugin_setting_extra_html_header() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<textarea id='egr_plugin_setting_extra_html_header' name='egr_webapps_plugin_options[html_header]'>".esc_attr(isset($options['html_header']) ? $options['html_header'] : '')."</textarea>";
}

function egr_plugin_setting_extra_html_footer() {
    $options = get_option('egr_webapps_plugin_options');
    echo "<textarea id='egr_plugin_setting_extra_html_footer' name='egr_webapps_plugin_options[html_footer]'>".esc_attr(isset($options['html_footer']) ? $options['html_footer'] : '')."</textarea>";
} 

function egr_plugin_setting_extra_change_egwebapps() {
    $options = get_option('egr_webapps_plugin_options');     
    echo "<textarea id='egr_plugin_setting_extra_change_egwebapps' name='egr_webapps_plugin_options[change_egwebapps]'>".esc_attr(isset($options['change_egwebapps']) ? $options['change_egwebapps'] : '')."</textarea>";
    echo '</br><b>Για να επιστρέψει το αρχείο page-egwebapps.php στην default του κατάσταση αφήστε αυτό το πεδίο κενό.</b>';
} ?>