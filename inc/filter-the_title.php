<?php

function kafka_post_title_filter( $title, $id = null ) {

    if ( $title == '' ) {
        return '#' . $id;
    }

    return $title;
}
add_filter( 'the_title', 'kafka_post_title_filter', 10, 2 );
