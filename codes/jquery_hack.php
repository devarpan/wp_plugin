DATEPICKER
DESABLING SPECIFIC DATES

jQuery( "#custom-date" ).datepicker({ 
        beforeShowDay: noSunday,
 		
disabling//friday, saturday,sunday
});
	
jQuery( "#custom-date" ).datepicker({ minDate: 0});
	function noSunday(date){
          var day = date.getDay(); 
                      return [(day < 5 && day > 0), '']; 
};



https://tympanus.net/codrops/2013/06/25/nifty-modal-window-effects/ [DOWNLOAD]
https://tympanus.net/Development/ModalWindowEffects/ [DEMO]

/* change link using jquery start */
jQuery(document).ready(function(){
    jQuery(".instantplybtnurl").attr("href", "http://gopoker.in/html5")
}); 
/* change link sing jquery end */


/* Redirecting after few swconds in wordpress start*/
<script> setTimeout(function () { window.location.href = "' . get_site_url() . '"; }, 8000); </script>
/* Redirecting after few swconds in wordpress end*/

/* Fixed Side bar Jquery Code Start */

jQuery(document).ready(function(){
jQuery.noConflict(); 

jQuery(".mtsnb-hide").click(function(){
     jQuery(".widget_sticky_sidebar").css("top", "12%");
});
   
    jQuery(window).scroll(function() {   
        var scroll = jQuery(window).scrollTop();
        //alert(scroll);
        var $windowWidth = jQuery(window).outerWidth();
        //alert($windowWidth);

        var $courseRightPanelNewHeight = jQuery(".mts-custom-sidebar").height()+ 200;
        var $subs_height=jQuery(".footer-widgets").height();
        var $page_height=jQuery("#page").height()-$subs_height; // hide when footer reach
       
       
       
        if($windowWidth>=721){
       
            if (scroll >= $courseRightPanelNewHeight) {
                jQuery('#email-subscribers-2').addClass("widget_sticky_sidebar");
               
            }
            else{
                jQuery('#email-subscribers-2').removeClass("widget_sticky_sidebar");
                //jQuery('.single #courseRightPanelNew .enroll').removeClass("widget_price_sticky_sidebar");
            }
            if(scroll >=$page_height){ // hide when footer reach
            jQuery('#email-subscribers-2').removeClass("widget_sticky_sidebar");
           
            }else{
           
            }
               
        }else{
                jQuery('#email-subscribers-2').removeClass("widget_sticky_sidebar");
        }
       
    });
});
/* Fixed Side bar Jquery Code End */

/* smooth scroll jquery code start */
jQuery("#myTab li a").click(function(){
	
	jQuery('html, body').animate({
        scrollTop: jQuery("#fx-tabbing").offset().top - 120
    }, 1000);

});
/* smooth scroll jquery code End */

/* jquery add css code start */
jQuery(document).ready(function(){

	jQuery(".crs-full-cn").css("display", "block"); 
	jQuery(".crs-exp-cn").css("display", "none"); 
    

});
/* jquery add css code end */

/* smooth scroll js start*/
jQuery("#scrolltestaId").click(function() {
	var topheadHeight=jQuery(".land-page-head").height();
	var topheadHeight=topheadHeight+20;
	
var calc = jQuery("#newsecId").offset().top-topheadHeight;
	jQuery('html, body').animate({
        scrollTop: calc
    }, 2000);


});
/* smooth scroll js end*/

/* js to detect devices start*/
var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");


if(isAndroid) {
jQuery(".page-id-1427-android-sys-1").css("display", "block");
jQuery(".gbl-dwlbtn-andr").css("display", "block");
jQuery(".lanpgdnbtnandr").css("display", "inline-block");
	
	
	
} else if (navigator.platform.indexOf('Win') > -1) {
	jQuery(".page-id-1427-win-sys-1").css("display", "block");
	jQuery(".gbl-dwlbtn-win").css("display", "block");
	jQuery(".lanpgdnbtnwin").css("display", "inline-block");
} else if (navigator.userAgent.indexOf('Mac ') != -1){
    
	jQuery(".page-id-1427-mac-sys-1").css("display", "block");
	jQuery(".gbl-dwlbtn-mac").css("display", "block");
	jQuery(".lanpgdnbtnmacsys").css("display", "inline-block");
	
	if((navigator.userAgent.match(/iPhone/i)) || 
		 (navigator.userAgent.match(/iPad|iPhone|iPod/i))) {
		 jQuery(".page-id-1427-i-decice-sys-1").css("display", "block");
  			jQuery(".page-id-1427-mac-sys-1").css("display", "none");
			/*jQuery(".landing-pg-instplaybtn").css("display", "none");*/
			jQuery(".lanpgdnbtnmacsys").css("display", "inline-block");
			
				/*jQuery( ".idvcbnr_insply_btn" ).addClass( "idvcbnr_insply_btn_ext" );*/
		
		jQuery(".gbl-dwlbtn-idevice").css("display", "block");
		jQuery(".lanpgdnbtnidivice").css("display", "none");
		
	}
} 
/* js to detect devices end*/

/* js for first element start*/
jQuery("#menu-item-290").children("a:first").remove();
jQuery("#menu-our-services-menu").children("a:first").remove();
/* js for first element end*/


 jQuery(".project_pictures_submit").click(function(e){
        e.preventDefault();
		alert('submit prevented');
    });
	
	


	
	var imagetitleVal= jQuery("#imagetitleId").val();
	
	 if (imagetitleVal == '') {
        alert("Field is empty");
    }else{
	
	}
