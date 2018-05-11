<?php

function kafka_authors( $atts, $content = "" ){
	
	extract(shortcode_atts( array(
		'exclude' => ''
	), $atts));
	
	$blogusers = get_users( 'orderby=nicename&role=author' );
	
	$output = '';
	foreach ( $blogusers as $user ) {
		// get_template_part( 'author', 'loop' );
		// print_r( $user );
		$output .= '<div class="author-sm h-card bglight shadow pad-sm mb col-md-4">';
		$output .= '<img class="u-photo" alt="Photo of '. get_the_author_meta( 'display_name', $user->ID ) . '"
       src="' . esc_url( get_avatar_url( get_the_author_meta( 'user_email' ) , 90 ) ) .'" />';
		$output .= '<h4 class="p-name">'. get_the_author_meta( 'display_name', $user->ID ) . '</h4>';
		$output .= '<a class="u-url" href="'. get_the_author_meta( 'url', $user->ID ) .'"> <i class="fa"></i> </a>';
		$output .= '<p class="text-right"><a href="'. get_author_posts_url( $user->ID ) .'">View All Posts</a></p>';
		$output .= '</div>';
	}

	return $output;
	
} add_shortcode('authors', 'kafka_authors');