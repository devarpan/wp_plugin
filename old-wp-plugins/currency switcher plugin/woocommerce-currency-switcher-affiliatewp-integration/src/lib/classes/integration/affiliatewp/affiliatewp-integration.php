<?php
namespace Aelia\WC\CurrencySwitcher\AffiliateWP;
if(!defined('ABSPATH')) exit; // Exit if accessed directly

use Aelia\WC\CurrencySwitcher\AffiliateWP\Order as Order;

/**
 * Implements the integration for the AffiliateWP plugin.
 *
 * @since 1.0.1.150518
 */
class AffiliateWP_Integration {
	protected static $_instance;

	/**
	 * Returns an instance of the class, creating one on the fly if needed.
	 *
	 * @return AffiliateWP_Integration
	 */
	public static function instance() {
		if(empty(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->set_hooks();
	}

	/**
	 * Set the hooks required by the class.
	 */
	protected function set_hooks() {
		// Price conversion
		add_filter('affwp_get_woocommerce_order', array($this, 'affwp_get_woocommerce_order'), 10, 2);
	}

	/**
	 * Processes an order object before it's used by AffiliateWP. This method
	 * replaced an order instance with an instance of
	 * \Aelia\WC\CurrencySwitcher\AffiliateWP\Order class, which will return the
	 * order totals in the currency used by Affiliate WP.
	 *
	 * @param WC_Order order The order being processed by AffiliateWP.
	 * @return \Aelia\WC\CurrencySwitcher\AffiliateWP\Order An order class,
	 * @see \Aelia\WC\CurrencySwitcher\AffiliateWP\Order
	 */
	public function affwp_get_woocommerce_order($order) {
		// Replace the order instance with an extended order class, which will
		// return the totals in the currency expected by AffiliateWP
		return Order::factory($order->id);
	}
}
