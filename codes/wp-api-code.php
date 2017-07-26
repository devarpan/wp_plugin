<?php
include '../wp-load.php';
$varid = $_REQUEST['id'];
$vartype = $_REQUEST['type'];

if($vartype=='home'){
	$result = [];
	$result['status'] = 1;
	$main_image = get_field('home_screen_main_image', 5);
	$title = get_field('home_screen_title', 5);
	$content = get_field('home_screen_content', 5);
	$result['main_image'] = $main_image;
	$result['main_title'] = $title;
	$result['main_content'] = $content;
	$categories = get_categories('hide_empty=0&parent=0');
	foreach($categories as $category){
		if($category->term_id != 1){
			$sub_categories = get_categories( array( 'child_of' => $category->term_id, 'taxonomy' => 'category', 'hide_empty' => 0 ) );
			if(!empty($sub_categories)){
				$child_type = 2;
			}else if($category->count > 0) {
				$child_type = 1;
			}else {
				$child_type = 0;
			}
			$result['categories'][] = array('id' => $category->term_id, 'name' => htmlspecialchars_decode($category->name), 'image' => z_taxonomy_image_url($category->term_id), 'child_type' => $child_type);
		}
	}
	print_r(json_encode($result));
}

if($vartype && $varid){
	if($vartype==2){
		$result = [];
		$result['status'] = 1;
		$categories = get_categories(array('child_of' => $varid, 'taxonomy' => 'category', 'hide_empty' => 0));
		foreach($categories as $category){
			$categories = get_categories( array( 'child_of' => $category->term_id, 'taxonomy' => 'category', 'hide_empty' => 0 ) );
			if(!empty($categories)){
				$child_type = 2;
			}else if($category->count > 0) {
				$child_type = 1;
			}else {
				$child_type = 0;
			}
			$result['categories'][] = array('id' => $category->term_id, 'name' => $category->name, 'image' => z_taxonomy_image_url($category->term_id), 'child_type' => $child_type);
		}
	}else if($vartype==1){
		$result = [];
		$result['status'] = 1;
		$args = array('posts_per_page' => -1, 'category' => $varid);
		$posts = get_posts( $args );
		foreach ( $posts as $post ) : setup_postdata( $post );
			$pdf = get_field('app_pdf_link', get_the_ID());
			$result['products'][] = array('id' => get_the_ID(), 'title' => get_the_title(get_the_ID()), 'content' => get_the_content(get_the_ID()), 'image' => get_the_post_thumbnail_url(get_the_ID()), 'pdf' => $pdf);
		endforeach; 
		wp_reset_postdata(); 
	}else {
		$result = [];
		$result['status'] = 0;
	}
	print_r(json_encode($result));
}
if($vartype=='contact'){
	
}
?>