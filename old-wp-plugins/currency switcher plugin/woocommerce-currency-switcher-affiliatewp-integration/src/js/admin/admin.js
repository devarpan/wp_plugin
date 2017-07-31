/* JavaScript for Admin pages */
jQuery(document).ready(function($) {
	var $settings_form = $('#wc_aelia_cs_affiliatewp_form');
	// If form is not found, we are not on this plugin's setting page
	if(!$settings_form.length) {
		return;
	}
	// Display tabbed interface
	$settings_form.find('.tabs').tabs();
});
