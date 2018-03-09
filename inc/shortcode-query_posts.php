<?php

function kafka_queryposts($atts){

	extract(shortcode_atts( array(
	'category_id' => '',
	'category_name' => '',
	'tag' => '',
	'day' => '',
	'month' => '',
	'year' => '',
	'count' => '-1',
	'author_id' => '',
	'author_name' => '',
	'order_by' => 'date',
	), $atts));

	$output = '';
	$query = array();

	if ($category_id != '') $query[] = 'cat=' .$category_id;
	if ($category_name != '') $query[] = 'category_name=' .$category_name;
	if ($tag != '') $query[] = 'tag=' . $tag;
	if ($day != '') $query[] = 'day=' . $day;
	if ($month != '') $query[] = 'monthnum=' . $month;
	if ($year != '') $query[] = 'year=' . $year;
	if ($count) $query[] = 'posts_per_page=' .$count;
	if ($author_id != '') $query[] = 'author=' . $author_id;
	if ($author_name != '') $query[] = 'author_name=' . $author_name;
	if ($order_by) $query[] = 'orderby=' . $order_by;

	$backup = $post;

	$posts = new WP_Query(implode('&',$query));

	$output = '';
	$temp_title = '';
	$temp_link = '';

	if ($posts->have_posts()):
		$output = '<ul>';
		while ($posts->have_posts()):
			$posts->the_post();
			$temp_title = get_the_title($post->ID);
			$temp_link = get_permalink($post->ID);
			$output .= "<li><a href='$temp_link'>$temp_title</a></li>";
		endwhile;
		$output .= '</ul>';
	else:
		$output .= '<p class="error">'.__("No posts found.", 'kafka').'</p>';
	endif;

	wp_reset_postdata();
	return $output;

} add_shortcode('query_posts', 'kafka_queryposts');
