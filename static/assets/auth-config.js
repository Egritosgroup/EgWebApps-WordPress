var AuthConfOptions = {
	stsServer: "http://auth.dev.egritosgroup.gr",
	redirect_url: "https://localhost:4200",
	app_base_href: "/",
	// The Client MUST validate that the aud (audience) Claim contains its client_id value registered at the Issuer identified by the iss (issuer) Claim as an audience.
	// The ID Token MUST be rejected if the ID Token does not list the Client as a valid audience, or if it contains additional audiences not trusted by the Client.
	client_id: "egwebapps-localhost",
	response_type: "id_token token",
	// For some oidc, we require resource identifier to be provided along with the request.
	resource: "",
	//EgritosGroup.Finance.Revenue.Full EgritosGroup.CarPooling.Full EgritosGroup.Domes.Basic EgritosGroup.Kliseis.Politis EgritosGroup.Katastimata.Politis
	scope: "openid profile profileextra EgritosGroup.Auth.Basic",
	post_logout_redirect_uri: "https://localhost:4200/home",
	start_checksession: false,
	silent_renew: false,
	post_login_route: "/home",
	// HTTP 403
	//forbidden_route : '/forbidden',
	// HTTP 401
	//unauthorized_route : '/',
	//auto_userinfo : true,
	//auto_clean_state_after_authentication: true,
	log_console_warning_active: false,
	log_console_debug_active: false,
	assets_base_href: "https://localhost:4200/assets/",

	// id_token C8: The iat Claim can be used to reject tokens that were issued too far away from the current time,
	// limiting the amount of time that nonces need to be stored to prevent attacks.The acceptable range is Client specific.
	max_id_token_iat_offset_allowed_in_seconds: 3000, // 30000, //300
	//override_well_known_configuration : true,
	//override_well_known_configuration_url : '/.well-known/openid-configuration'
};


var AppConfOptions = {
	organization_name: "του Δήμου Τρικκαίων",
	unauthorized_allowed: true,

	is_benefits_enabled: true,
	benefits_applications_organization: "ΔΟΜΕΣ",
	benefits_api: "http://paidi.demo.egritosgroup.gr/",
	benefits_tab_title: "Αιτήσεις Παιδικών Σταθμών",
	benefits_description: 'Δημιουργία, επεξεργασία & υποβολή αιτήσεων για παιδικούς σταθμούς, με άμεση ενημέρωση για την κατάσταση της αίτησής σας.',
	//app_help_page: "https://aitisi.dopafmai.gr/odigies-eggrafis/"

	is_carpooling_enabled: true,
	carpooling_api: "http://carpooling.demo.egritosgroup.gr/",
	carpooling_description: 'Δημιουργία & συμμετοχή σε διαδρομές συν-πολιτών σας από οποιοδήποτε μέρος της Ελλάδας.',
	google_maps_key: "AIzaSyCIE9XxZEUpWvs_4e1O-gKL1jK6Xo2CQCM",

	is_epayments_enabled: true,
	//epayments_api: "http://financeapi.dev.egritosgroup.gr/",
	epayments_api: "https://financeapi.localhost.egritosgroup.gr/",
	epayments_description: 'Εξόφληση των οριστικοποιημένων οφειλών σας προς τον Φορέα.',
	//epayments_api: "http://localhost:5462/",
	show_non_persisted_debits: false,

	is_kliseis_enabled: true,
	kliseis_api: "http://localhost:4287/",
	kliseis_description: 'Εξόφληση και καταχώρηση κλήσεων Δημοτικής Αστυνομίας.',

	is_eidopoiitiria_enabled: true,
	eidopoiitiria_api: "http://financeapi.dev.egritosgroup.gr/",
	eidopoiitiria_description: 'Εξόφληση ειδοποιητηρίων.',

	is_dimotikos_foros_enabled: true,
	katastimata_api: "http://katastimata.demo.egritosgroup.gr/",
	katastimata_description: 'Υποβάλλετε και εξοφλήστε την δήλωσή σας για το τέλος 0,5%.',

	is_diakanonismoi_enabled: true,
	diakanonismoi_description: 'Ενημέρωση για την κατάσταση των διακανονισμών σας & αίτηση νέων διακακονισμών.'
};

