<?php 

/* todo: move to options */
function kafka_document_title_separator(  $sep ) {
    return "//";
}
add_filter( 'document_title_separator', 'kafka_document_title_separator', 10, 1 );