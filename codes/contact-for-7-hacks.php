contact form 7 controls plugin

Contact Form 7 Controls Version 0.3.5 | By Kaspars Dambis | View details

<?php

Note: contact form 7 DB plugin , fields name can be renamed.


jquery validation plugin
https://wordpress.org/plugins/jquery-validation-for-contact-form-7/


/* Contact Form Recaptcha start */
Link : http://contactform7.com/recaptcha/
/* Contact Form Recaptcha end */

/* contact form 7 coutry list using listo plugin start */
Link:http://contactform7.com/listo/
[select your-country data:countries]
/* contact form 7 coutry list using listo plugin end */

/* contact form 7 thank you page redirect start */
//place this code in additional settings
on_sent_ok: "location = 'http://gopoker.in/iimb-unmaad';"
OR
plugin url: https://wordpress.org/plugins/contact-form-7-success-page-redirects/
/* contact form 7 thank you page redirect end */


/* condition on specific form start */
add_action( 'wpcf7_before_send_mail', 'wpcf7ev_verify_form' );
function wpcf7ev_verify_form($wpcf7_verify_form) {
	$formtitle = $wpcf7_verify_form->title;
	if($formtitle=='Contact form 1'){
	}
}
/* condition on specific form end */


/* contact form 7 email already existance check/ email validation start*/
add_filter( "wpcf7_validate", "email_already_in_db", 10, 2 );
function email_already_in_db ( $result, $tags ) {
    // retrieve the posted email
    $form  = WPCF7_Submission::get_instance();
    $email = $form->get_posted_data('your-email-custom');
    // if already in database, invalidate
    if( email_exists( $email ) )
         $result->invalidate('your-email-custom', 'Email is already registered with us');
     // return the filtered value
     return $result;
 }

/* contact form 7 email already existance check/ email validation end*/


/* contact form 7 TEXTBOX VALIDATION start*/
add_filter( "wpcf7_validate", "email_already_in_db", 10, 2 );
function email_already_in_db ( $result, $tags ) {	
	// retrieve the posted email
    $form  = WPCF7_Submission::get_instance();
    $email = $form->get_posted_data('your-name');
	$varlen=strlen($email);
    // if already in database, invalidate
	if($varlen>=5){
		$result->invalidate('your-name', 'custom error');
	}
    // return the filtered value
     return $result;
}
/* contact form 7 TEXTBOX VALIDATION end*/


/* contact form 7 TEL VALIDATION start*/
add_filter( "wpcf7_validate", "tellencheck_in_db", 10, 2 );
function tellencheck_in_db ( $result, $tags ) {

    // retrieve the posted email
    $form  = WPCF7_Submission::get_instance();
    $email = $form->get_posted_data('tel-400');
	$varlen=strlen($email);
    // if already in database, invalidate
	if(($varlen>10)||($varlen<10)){
		$result->invalidate('tel-400', 'custom TEl error');
	}
    
     // return the filtered value
     return $result;
 }
/* contact form 7 TEL VALIDATION end*/


/* contact form select box label start*/
[select* menu-509 first_as_label "AGE" "12" "13" "14" "15" ]
/* contact form select box label end*/

?>
