

<?php
/* wp function to trim content length start*/
wp_trim_words()

/* wp function to trim content length end */

/* how to remove customizer settings start */
function mytheme_customize_register( $wp_customize ) {
  //All our sections, settings, and controls will be added here

  
  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  $wp_customize->remove_panel( 'nav_menus');
  $wp_customize->remove_panel("widgets");
  $wp_customize->remove_section( 'custom_css');

}
add_action( 'customize_register', 'mytheme_customize_register',50 );

/* how to remove customizer settings end */

/* WORDPRESS FILE PERMISSION START*/
755 Folder
644 Files
/* WORDPRESS FILE PERMISSION END*/


/* Hide Post nav in single post for specific category Start*/
previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ), $in_same_term = true,$excluded_terms = '9', $taxonomy = 'category' ); 

next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ), $in_same_term = true,$excluded_terms = '9', $taxonomy = 'category' ); 
/* Hide Post nav in single post for specific category End*/



/* HOW TO CREATE WORDPRESS CHILD THEME START */
https://premium.wpmudev.org/blog/how-to-create-wordpress-child-theme/
/* HOW TO CREATE WORDPRESS CHILD THEME END */


/* how to get wordpress current screen start */
function wporg_current_screen_example( $current_screen ) {
	if($current_screen->base=='nav-menus'){
	print_r($current_screen->base);
	}
	
}
/* how to get wordpress current screen end */


add_action( 'current_screen', 'wporg_current_screen_example' );


add_action( 'edit_form_after_editor', 'no_metabox_wspe_114084' );
add_action( 'save_post', 'save_wpse_114084', 10, 2 );

function no_metabox_wspe_114084()
{
    global $post;
    if( 'page' != $post->post_type )
        return;

    $editor1 = get_post_meta( $post->ID, '_custom_editor_1', true);
    $editor2 = get_post_meta( $post->ID, '_custom_editor_2', true);

    wp_nonce_field( plugin_basename( __FILE__ ), 'wspe_114084' );
    echo '<h2>Aux editor 1</h2>';
    echo wp_editor( $editor1, 'custom_editor_1', array( 'textarea_name' => 'custom_editor_1' ) );
    echo '<h2>Aux editor 2</h2>';
    echo wp_editor( $editor2, 'custom_editor_2', array( 'textarea_name' => 'custom_editor_2' ) );
}

function save_wpse_114084( $post_id, $post_object )
{
    if( !isset( $post_object->post_type ) || 'page' != $post_object->post_type )
        return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( !isset( $_POST['wspe_114084'] ) || !wp_verify_nonce( $_POST['wspe_114084'], plugin_basename( __FILE__ ) ) )
        return;

    if ( isset( $_POST['custom_editor_1'] )  )
        update_post_meta( $post_id, '_custom_editor_1', $_POST['custom_editor_1'] );

    if ( isset( $_POST['custom_editor_2'] )  )
        update_post_meta( $post_id, '_custom_editor_2', $_POST['custom_editor_2'] );
}

/* wordpress multiple editor post/page start */
add_action( 'edit_form_after_editor', 'no_metabox_wspe_114084' );
add_action( 'save_post', 'save_wpse_114084', 10, 2 );

function no_metabox_wspe_114084()
{
    global $post;
    if( 'page' != $post->post_type )
        return;

    $editor1 = get_post_meta( $post->ID, '_custom_editor_1', true);
    $editor2 = get_post_meta( $post->ID, '_custom_editor_2', true);

    wp_nonce_field( plugin_basename( __FILE__ ), 'wspe_114084' );
    echo '<h2>Aux editor 1</h2>';
    echo wp_editor( $editor1, 'custom_editor_1', array( 'textarea_name' => 'custom_editor_1' ) );
    echo '<h2>Aux editor 2</h2>';
    echo wp_editor( $editor2, 'custom_editor_2', array( 'textarea_name' => 'custom_editor_2' ) );
}

function save_wpse_114084( $post_id, $post_object )
{
    if( !isset( $post_object->post_type ) || 'page' != $post_object->post_type )
        return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( !isset( $_POST['wspe_114084'] ) || !wp_verify_nonce( $_POST['wspe_114084'], plugin_basename( __FILE__ ) ) )
        return;

    if ( isset( $_POST['custom_editor_1'] )  )
        update_post_meta( $post_id, '_custom_editor_1', $_POST['custom_editor_1'] );

    if ( isset( $_POST['custom_editor_2'] )  )
        update_post_meta( $post_id, '_custom_editor_2', $_POST['custom_editor_2'] );
}
/* wordpress multiple editor post/page End */




/* wordpress table prefix change start */
Link: https://digwp.com/2010/10/change-database-prefix/
/* wordpress table prefix change start */


/* Adding shortcode in wordpress function file start */
function customcartview_shortcode() {
$t9lpost_id=get_the_ID();


ob_start();


$product_data=get_post_custom($t9lpost_id);
$cousse_product_data=$product_data['vibe_product'];
$course_product_id=$cousse_product_data[0];

$product_meta_data=get_post_custom($course_product_id);


$t9l_course_regullar_price=$product_meta_data['_regular_price'];
$t9l_course_sale_price=$product_meta_data['_sale_price'];


$t9l_dollor_price=$t9l_course_sale_price[0];
$t9l_indian_price=$t9l_course_sale_price[0]*68.67;

echo $t9l_dollor_price.' | '.$t9l_indian_price;
/*if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  || (function_exists('is_plugin_active') && is_plugin_active( 'woocommerce/woocommerce.php')) && $show_cart) { global $woocommerce;
                                    ?>
                                    <li><a class="smallimg vbpcart"><span class="fa fa-shopping-cart t9lScrscarticon"><?php echo (($woocommerce->cart->cart_contents_count)?'<em>'.$woocommerce->cart->cart_contents_count.'</em>':''); ?></span></a>
                                    <div class="t9lScrsviewcart woocart " style="display:none" ><?php woocommerce_mini_cart(); ?></div>
                                    </li>
                                    <?php
} */
return ob_get_clean();
}
add_shortcode('customcartview', 'customcartview_shortcode');
/* Adding shortcode in wordpress function file end */


/* wordpress meta query and array sorting like events start*/
add_shortcode( 'myshortcode_2017', 'my_shortcode_2017_handler' );
function my_shortcode_2017_handler() {
	ob_start();
echo '<div class="et_pb_blog_grid clearfix et_pb_module et_pb_bg_layout_light  et_pb_blog_0" data-columns="3">';

$current_month = date('m');
$current_day = date('d');

$count = 1;$postidvar = [];
$pstcount = 0;
$check = 1;
$show_post_count=0;
$arr_custom_postidvar = array();
for($i = $current_month; $i <= 12; $i++)
{
$args = array(
	'posts_per_page' => -1,
    'cat' => '5',	
		'order' => 'ASC',
	'orderby' => 'meta_value_num',
    /*'meta_key' => 'event_month',
    'meta_value_num' => $current_month,
    'meta_compare' => '<',*/	
	'meta_query'=> array( 
						array(
	'key' => 'event_month',
	'compare' => '>=',
	'value' => $current_month,
	'type' => 'numeric',			 
					),

					),
	
	
	
);
	


query_posts( $args );
	if(have_posts()){
		while ( have_posts() ) : the_post();
		$post_mnht = get_post_meta(get_the_ID(),'event_month',true);
		$post_day = get_post_meta(get_the_ID(),'event_date',true);
		$custom_postidvar=get_the_ID();
		
		if($post_mnht>=$current_month){
			if($show_post_count<3){
				
				if($post_mnht==$current_month){
					if($post_day>$current_day){
							
						array_push($arr_custom_postidvar,$custom_postidvar);
						$show_post_count++;
						//the_title();
						//echo '<br>';
					}
				}else{ 
					//the_title();
					//echo '<br>';
					array_push($arr_custom_postidvar,$custom_postidvar);
					$show_post_count++;
				}
			
			}
		}
		endwhile;
	}
	wp_reset_query();
	
	//print_r($arr_custom_postidvar);
	$artlen=count($arr_custom_postidvar);
	$associativeArray = array();
	for($i=0;$i<$artlen;$i++){
		$post_id=$arr_custom_postidvar[$i];
		$custom_date=get_post_meta($post_id)['event_date'][0];
		$custom_month=get_post_meta($post_id)['event_month'][0];
		
		//print_r($custom_date);
		
		$associativeArray[$custom_month][$post_id] = $custom_date;
		
	}
	//echo '<pre>';
	foreach($associativeArray as $k=>$v)
	{
		asort($v);
		
		foreach($v as $key=>$value){
			
			$sorted_post_id=$key;
			
		?>
							<div class="column size-1of3 test">
								<article id="post-<?php echo $sorted_post_id; ?>" class="et_pb_post post-<?php echo $sorted_post_id; ?> post type-post status-publish format-standard has-post-thumbnail hentry category-events">
									<div class="et_pb_image_container">
										<a href="<?php the_permalink($sorted_post_id); ?>" class="entry-featured-image-url">
											<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($sorted_post_id) ); ?>" alt="<?php echo get_the_title($sorted_post_id); ?>" width="400" height="250">
										</a>
									</div> <!-- .et_pb_image_container -->
									<h2 class="entry-title"><a href="<?php the_permalink($sorted_post_id); ?>"><?php echo get_the_title($sorted_post_id); ?></a></h2>
									<?php echo get_the_excerpt($sorted_post_id); ?><a href="<?php the_permalink($sorted_post_id); ?>" class="more-link">read more</a>			
								</article>
							</div>			

		<?php	
			
		}
	}
	//echo '</pre>';
	return ob_get_clean();
}
	
}
/* wordpress meta query and array sorting like events end*/


/* wordpress publish/update button hook start */
add_action('pre_post_update','post_updating_callback');
function post_updating_callback($post_id){
	add_action('save_post', 'check_new_vs_update' );

	function check_new_vs_update( $post_id ){
	    $myPost = get_post($post_id);
	
	}

}
/* wordpress publish/update button hook end */


/* how to condition wordpress url start */
Link http://wordpress.stackexchange.com/questions/165546/change-logo-image-condition-based-on-url
/* how to condition wordpress url end */



/* wordpress custom short code creation start */ 

add_shortcode( 'myshortcode_2017', 'my_shortcode_2017_handler' );
function my_shortcode_2017_handler() {
	ob_start();
	echo 'custom code';
	return ob_get_clean();
}
/* wordpress custom short code creation end */ 

/* find all type of posts (including custom post types) start*/
$args = array (
    'cat' => array(3),
    'posts_per_page' => -1, //showposts is deprecated
    'orderby' => 'date',
	'post_type' => array('post','services'),//You can specify more filters to get the data 
);

$cat_posts = new WP_query($args);

if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
        the_title();
endwhile; endif;

/* find all type of post (including custom post types) end*/

