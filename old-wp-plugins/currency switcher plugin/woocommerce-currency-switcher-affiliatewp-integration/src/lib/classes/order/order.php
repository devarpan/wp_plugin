<?php
namespace Aelia\WC\CurrencySwitcher\AffiliateWP;
if(!defined('ABSPATH')) exit; // Exit if accessed directly

use \Exception;

/**
 * Extends the Aelia Order class, replacing the methods that will return the
 * amounts expected by AffiliateWP.
 *
 * @since 1.0.1.150518
 */
class Order extends \Aelia\WC\Order {
	/**
	 * Loads an order and returns an instance of this class.
	 *
	 * @param int order_id The ID of the order to load.
	 * @return \Aelia\WC\CurrencySwitcher\AffiliateWP\Order
	 */
	public static function factory($order_id) {
		return new self($order_id);
	}

	/**
	 * Converts an amount from this order's currency to AffiliateWP currency.
	 *
	 * @param float amount The amount to convert.
	 * @return float The amount converted from order currency to AffiliateWP
	 * currency.
	 */
	protected function convert($amount) {
		$amount = apply_filters('wc_aelia_cs_convert',
														$amount,
														// Source currency - This order's currency
														$this->get_order_currency(),
														// Destination currency - AffiliateWP currency
														affwp_get_currency());
		return apply_filters('wc_aelia_cs_affiliatewp_convert_amount', $amount, $this);
	}

	/**
	 * Converts the shipping total to AffiliateWP currency.
	 *
	 * @return float The shipping total for the order, converted to AffiliateWP
	 * currency.
	 * @see WC_Order::get_total_shipping()
	 */
	public function get_total_shipping() {
		$total_shipping = $this->convert(parent::get_total_shipping());
		return apply_filters('wc_aelia_cs_affiliatewp_order_get_total_shipping', $total_shipping, $this);
	}

	/**
	 * Converts the order items amounts to AffiliateWP currency.
	 *
	 * @param string|array type Types of line items to get.
	 * @return array An array of order items, with their amounts converted to
	 * AffiliateWP currency.
	 * @see WC_Order::get_items()
	 */
	public function get_items($type= '') {
		$items = parent::get_items($type);

		foreach($items as $item_idx => $product) {
			$product['line_total'] = $this->convert($product['line_total']);
			$product['line_tax'] = $this->convert($product['line_tax']);

			$items[$item_idx] = $product;
		}
		return apply_filters('wc_aelia_cs_affiliatewp_order_get_items', $items, $this);
	}
}
