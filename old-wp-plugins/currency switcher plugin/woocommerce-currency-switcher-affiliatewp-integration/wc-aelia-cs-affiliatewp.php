<?php if(!defined('ABSPATH')) exit; // Exit if accessed directly
/*
Plugin Name: WooCommerce Currency Switcher - AffiliateWP Integration
Description: AffiliateWP integration for WooCommerce Currency Switcher
Plugin URI: PLUGIN_URI
Version: 1.0.3.150609
Author: Diego Zanella
Author URI: http://aelia.co
Text Domain: wc-aelia-cs-affiliatewp
License: GPL-3.0
*/

require_once(dirname(__FILE__) . '/src/lib/classes/install/plugin-requirementscheck.php');
// If requirements are not met, deactivate the plugin
if(Aelia_CS_AffiliateWP_RequirementsChecks::factory()->check_requirements()) {
	require_once dirname(__FILE__) . '/src/plugin-main.php';
}
