var AuthConfOptions = {
	stsServer: "https://auth.dev.egritosgroup.gr",
	//stsServer: "https://auth.demo.egritosgroup.gr",
	redirect_url: "http://localhost:4200/redirect-auth",
	app_base_href: "/",
	// The Client MUST validate that the aud (audience) Claim contains its client_id value registered at the Issuer identified by the iss (issuer) Claim as an audience.
	// The ID Token MUST be rejected if the ID Token does not list the Client as a valid audience, or if it contains additional audiences not trusted by the Client.
	client_id: "egwebapps-localhost",
	//client_id: "egwebapps-egritos",
	response_type: "id_token token",
	// For some oidc, we require resource identifier to be provided along with the request.
	resource: "",
	//EgritosGroup.Finance.Revenue.Full EgritosGroup.CarPooling.Full EgritosGroup.Domes.Basic EgritosGroup.Kliseis.Politis EgritosGroup.Katastimata.Politis
	scope: "openid profile profilepersonalinfo profileextra roles EgritosGroup.Auth.Basic",
	post_logout_redirect_uri: "http://localhost:4200",
	start_checksession: false,
	silent_renew: false,
	startup_route: "/home",
	log_console_warning_active: false,
	log_console_debug_active: false,
	assets_base_href: "http://localhost:4200/assets/",
	max_id_token_iat_offset_allowed_in_seconds: 3000, // 30000, //300
};

var AppConfOptions = {
	application_url: "http://localhost:4200",
	organization_name: "του Δήμου Τρικκαίων",
	unauthorized_allowed: true,
	oroi_xrisis_link: "",
	home_page_text: '<p>Σχόλια που αφορούν τις βεβαιωμένες οφειλές.</p><p>Σχόλια που αφορούν τις αποδείξεις των βεβαιωμένων οφειλών.</p>',
	order_profile: 200,

	is_benefits_enabled: true,
	benefits_applications_organization: "ΔΟΜΕΣ",
	benefits_api: "https://domes.demo.egritosgroup.gr/",
	//benefits_api: "http://localhost:5380/",
	benefits_tab_title: "Αιτήσεις Παιδικών Σταθμών",
	benefits_description: 'Δημιουργία, επεξεργασία και υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
	benefits_tab_info: 'Δημιουργία, επεξεργασία και υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
	//app_help_page: "https://aitisi.dopafmai.gr/odigies-eggrafis/"

	is_carpooling_enabled: false,
	carpooling_api: "https://carpooling.demo.egritosgroup.gr/",
	carpooling_description: 'Δημιουργία και συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.',
	carpooling_tab_info: '<p>Δημιουργία και συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.</p>',
	google_maps_key: "AIzaSyCIE9XxZEUpWvs_4e1O-gKL1jK6Xo2CQCM",
	order_carpooling: 170,

	is_epayments_enabled: true,
	epayments_api: "https://financeapi.dev.egritosgroup.gr/",
	//epayments_api: "https://financeapi.localhost.egritosgroup.gr/",
	epayments_description: 'Εξόφληση των οριστικοποιημένων οφειλών σας προς τον Φορέα.',
	epayments_debits_tab_info: 'Σχόλια που αφορούν τις βεβαιωμένες οφειλές.',
	epayments_receipts_tab_info: 'Σχόλια που αφορούν τις αποδείξεις των βεβαιωμένων οφειλών.',
	show_non_persisted_debits: true,
	order_epayments: 10,

	is_kliseis_enabled: true,
	kliseis_api: "https://kliseis.demo.egritosgroup.gr/",
	kliseis_description: 'Εξόφληση και καταχώρηση κλήσεων Δημοτικής Αστυνομίας.',
	kliseis_debits_tab_info: `Παρακαλούμε επιλέξτε αυτές τις κλήσεις που θέλετε να εξοφλήσετε από την παρακάτω λίστα.<br />
				Σε περίπτωση που επιθυμείτε να πληρώσετε κάποια κλήση που δεν υπάρχει στη λίστα, παρακαλώ πιέστε
				"Καταχώρηση Νέας Κλήσης".`,
	kliseis_receipts_tab_info: 'Ιστορικό πληρωμών κλήσεων.',
	kliseis_unauthorized_info: 'Δεν έχετε δικαίωμα πρόσβασης.',
	order_kliseis: 20,

	is_eidopoiitiria_enabled: true,
	eidopoiitiria_api: "https://financeapi.dev.egritosgroup.gr/",
	//eidopoiitiria_api: "https://financeapi.localhost.egritosgroup.gr/",
	eidopoiitiria_description: 'Εξόφληση ταυτοτήτων οφειλών.',
	eidopoiitiria_tab_info: 'Εξόφληση ταυτοτήτων οφειλών.',
	order_eidopoiitiria: 70,

	is_dimotikos_foros_enabled: true,
	katastimata_api: "https://katastimata.dev.egritosgroup.gr/",
	katastimata_description: 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',
	katastimata_tab_info: 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',
	order_katastimata: 30,

	is_diakanonismoi_enabled: true,
	diakanonismoi_description: 'Ενημέρωση για την κατάσταση των διακανονισμών σας και αίτηση νέων διακακονισμών.',
	diakanonismoi_tab_info: 'Ενημέρωση για την κατάσταση των διακανονισμών σας και αίτηση νέων διακακονισμών.',
	order_diakanonismoi: 40,

	is_shde_app_enabled: true,
	shde_api: "https://prot.dev.egritosgroup.gr/",
	shde_description: 'Αιτήσεις Πολιτών προς το σύστημα ηλεκτρονικής διακίνησης εγγράφων του οργανισμού.',
	shde_tab_info: 'Αιτήσεις Πολιτών προς το σύστημα ηλεκτρονικής διακίνησης εγγράφων του οργανισμού.',
	order_shde: 90,

	is_rantevou_app_enabled: true,
	rantevou_api: "https://rantevou.demo.egritosgroup.gr/",
	rantevou_description: '',
	rantevou_tab_info: 'Ραντεβού Πολιτών',
	order_rantevou: 100,

	is_proslipseis_enabled: true,
	proslipseis_api: "https://proslipseis.demo.egritosgroup.gr/",
	proslipseis_description: 'Αιτήσεις Πολιτών προς το σύστημα προσλήψεων εποχιακού και μόνιμου προσωπικού του οργανισμού.',
	proslipseis_tab_title: "Αιτήσεις Προσλήψεων",
	proslipseis_tab_info: 'Αιτήσεις Πολιτών προς το σύστημα προσλήψεων εποχιακού και μόνιμου προσωπικού του οργανισμού.',
	order_proslipseis: 60,

	is_notifications_enabled: false,
	notifications_api: "https://localhost:5330/",
	order_notifications: 80
};

