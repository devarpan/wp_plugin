wocommerce plugin package link
http://www28.zippyshare.com/v/F4szgdVW/file.html

<?php

/* wocommerce custom field sorting with multiple sort option start */
Link : http://new.galalaly.me/2013/05/woocommerce-sort-by-custom-attributes/

add_filter('woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args11',999,1);
 function custom_woocommerce_get_catalog_ordering_args11( $args ) {
    global $wp_query;
        // Changed the $_SESSION to $_GET
    if (isset($_GET['orderby'])) {
        switch ($_GET['orderby']) :
            case 'unit_price' :
                $args['order'] = 'ASC';
                $args['meta_key'] = 'unit_price';
                $args['orderby'] = 'meta_value_num';
            break;
        endswitch;
    }
    return $args;
}
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby11');
 
function custom_woocommerce_catalog_orderby11( $sortby ) {
    $sortby['unit_price'] = 'Unit Price - Low to High';
    return $sortby;
}
 

add_filter('woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args2');
 
function custom_woocommerce_get_catalog_ordering_args2( $args ) {
    global $wp_query;
        // Changed the $_SESSION to $_GET
    if (isset($_GET['orderby'])) {
        switch ($_GET['orderby']) :
            case 'unit_price_desc' :
                $args['order'] = 'DESC';
                $args['meta_key'] = 'unit_price';
                $args['orderby'] = 'meta_value_num';
            break;
        endswitch;
    }
    return $args;
}
 
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby2');
 
function custom_woocommerce_catalog_orderby2( $sortby ) {
    $sortby['unit_price_desc'] = 'Unit Price - High to Low';
    return $sortby;
}
/* wocommerce custom field sorting with multiple sort option end */

/* Hiding payment methods in wocommerce using currency switcher plugin start */
global $WOOCS;
$t9l_current_currency=$WOOCS->current_currency;
if(($t9l_current_currency ==='USD'|| $t9l_current_currency ==='USD') && ( $t9l_pay_method==='cheque'|| $t9l_pay_method==='cod'|| $t9l_pay_method==='bacs'|| $t9l_pay_method==='razorpay')){ ?> style='display:none;' <?php }
/* Hiding payment methods in wocommerce using currency switcher plugin End */

/* Hide/remove  wocommerce checkout fields start */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
  
function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_company']);
unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_city']);
unset($fields['billing']['billing_state']);
unset($fields['billing']['billing_postcode']);
  return $fields;
}
/* Hide/remove  wocommerce checkout fields end */


/* Changing proceed to pay pal text start */
add_filter( 'gettext', 'ld_custom_paypal_button_text', 20, 3 );
function ld_custom_paypal_button_text( $translated_text, $text, $domain ) {
switch ( $translated_text ) {
case 'Proceed to PayPal' :
$translated_text = __( 'Place Order', 'woocommerce' );
break;
}
return $translated_text;
}
/* Changing proceed to pay pal text end */

/* Change wocommerce order button text start */
add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); 

function woo_custom_order_button_text() {
    return __( 'Your new button text here', 'woocommerce' ); 
}
/* Change wocommerce order button text end */
/* MOdify wocommerce total amount start */
function custom_price_function( $total, $cart ) {
global $woocommerce;
global $WOOCS;

$t9l_current_currency=$WOOCS->current_currency;

	if($t9l_current_currency==='INR'||$t9l_current_currency==='inr'){

	$t9l_servicetaxtotal = ($total / 100) * 15;	

	$total=$total+$t9l_servicetaxtotal;
	}
	else{
			$total=$total;
	}

    return $total;
}
add_filter( 'woocommerce_calculated_total', 'custom_price_function', 10, 2 );



/* MOdify wocommerce total amount end */



?>
