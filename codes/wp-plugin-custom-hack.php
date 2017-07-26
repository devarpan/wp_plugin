wordpress plugin 

// Adding visit plugin site link
function alobaidi_video_popup_plugin_row_meta( $links, $file ) {

	if ( strpos( $file, 'video-popup.php' ) !== false ) {
		
		$new_links = array(
						'<a href="http://wp-plugins.in/video-popup" target="_blank">Explanation of Use</a>',
						'<a href="https://profiles.wordpress.org/alobaidi#content-plugins" target="_blank">More Plugins</a>',
						'<a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=24967&url=19683" target="_blank">Elegant Themes</a>',
						'<a href="https://wordpress.org/plugins/extend-link/" target="_blank">Recommended Plugin for Video PopUp</a>'
					);
		
		$links = array_merge( $links, $new_links );
		
	}
	
	return $links;
	
}
add_filter( 'plugin_row_meta', 'alobaidi_video_popup_plugin_row_meta', 10, 2 );

// Hiding view details plugin link
function alobaidi_video_popup_plugin_row_meta1( $links, $file ) {
	
	if($file=="productsize-chart-for-woocommerce/productsize-chart-for-woocommerce.php"){
	$links=array('');
	}	
	
	return $links;
	
}
add_filter( 'plugin_row_meta', 'alobaidi_video_popup_plugin_row_meta1', 10, 2 );