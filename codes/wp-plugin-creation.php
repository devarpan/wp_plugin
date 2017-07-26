<?php 

/*
Plugin Name: test plugin
Description: An addon 
Author: Arpan A, Developer at Tech9logy Creators
*/

add_action( 'admin_menu', 'register_my_scplg_menu_page' );

function register_my_scplg_menu_page(){
add_menu_page( 'countsc', 'counter shortcode', 'manage_options', 't9lscplsett', 'my_first_menu_page', '', 6 );
add_submenu_page( 't9lscplsett', 'countsc', 'Entries', 'manage_options', 't9lscpl_entries', 'my_first_submenu_function');

}
function my_first_menu_page(){
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

		}
		global $table_name;
	
		if(isset($_POST['s1']))
		{
		

		}else{
			
		}
	}
	echo '<div class="wrap">';
?>
	<h1>Create Short code here. </h1>
	
	<form name="" id="" method="post">
	<span style="width:30px">Name:</span>   <input type="text" name="counter_name"><br>
	<input type="submit" name="s1" value="send" class="button button-primary">	
	</form>

<?php
//require_once(dirname (__FILE__) . '/includes/title_form.php');	
	echo '</div>';
}
add_shortcode( 'list-counters', 'rmcc_post_listing_parameters_shortcode12' );
function rmcc_post_listing_parameters_shortcode12( $atts ) {
    ob_start();
	
	$myvariable = ob_get_clean();
        return $returningavr;
  }



function counter_table_update12(){
}

function my_first_submenu_function(){

}

counter_table_update12();
?>