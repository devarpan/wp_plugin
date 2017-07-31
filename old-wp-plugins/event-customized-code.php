<?php
//custom work
add_shortcode( 'myshortcode_2017', 'my_shortcode_2017_handler');
function my_shortcode_2017_handler() {
ob_start();
echo '<div class="et_pb_blog_grid clearfix et_pb_module et_pb_bg_layout_light  et_pb_blog_0" data-columns="3">';

$current_month = date('m');
$current_day = date('d');

$count = 1;
$postidvar = [];
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
