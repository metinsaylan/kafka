<?php 

function see_also_box( $atts, $content = ""  ){
	
	$atts = shortcode_atts( array(
		'ids' => ''
	), $atts, 'seealso' );
	
	if( empty( $atts['ids'] ) )
		return '';
		
	$panel_header = 'See Also';
	$panel_open = '<div class="panel panel-info"><div class="panel-heading">'.$panel_header.'</div><div class="panel-body"><ul class="postlist">';
	$panel_close = '</ul></div></div>';
	
	$posts_content = '';
	
	$post_ids = explode( ',', $atts['ids'] );
	
	foreach( $post_ids as $pid ){
		$post_arr = get_post( intval($pid), ARRAY_A );
		$post_title = $post_arr['post_title'];
		$posts_content .= '<li><a href="'.get_the_permalink( $pid ).'" target="_blank">' . $post_title . '</a></li>';		
	}
	
	return $panel_open.$posts_content.$panel_close;
	
} add_shortcode( 'seealso', 'see_also_box' );