	jQuery("#option_background_sett-save_btn1 , #option_background_sett-save_btn2").click( function() {
    	
				
				jQuery.ajax({
					url: myAjax.ajaxurl,
					type : 'POST',
					data: {
						'action':'theme_option_background_ajax',
						'PerOptionformVal' : PerOptionformVal
					},
					success:function(data){
						// This outputs the result of the ajax request
						
						setTimeout(function() {
						jQuery('.theme_option_save_div').fadeOut('slow');
						}, 5000);
					},
					error: function(errorThrown){
						console.log(errorThrown);
						alert('error');
					}
				});
			 
      });
	  
	  
	  

add_action( 'admin_enqueue_scripts', 'admin_queue_ajax' );
function admin_queue_ajax (){
		wp_register_script( "v2_per_ajax_script", get_stylesheet_directory_uri() .'/theme_option/v2_per_ajax_script.js', array('jquery') );
		wp_localize_script( 'v2_per_ajax_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

		wp_enqueue_script('jquery');
		wp_enqueue_script('v2_per_ajax_script');
}


add_action("wp_ajax_theme_option_background_ajax", "theme_option_background_ajax");
add_action("wp_ajax_nopriv_theme_option_background_ajax", "theme_option_background_ajax");

function theme_option_background_ajax() {
	parse_str($_POST['PerOptionformVal'], $searcharray);
	update_option('body_color',$searcharray['body_color']);
	
	die();
}