<?php

include_once( 'inc/kafka-customizer.php' );
include_once( 'inc/class-wp_bootstrap_navwalker.php' );

/* Shortcodes */
include_once( 'inc/shortcode-query_posts.php' );
include_once( 'inc/shortcode-toc.php' );
include_once( 'inc/shortcode-authors.php' );
include_once( 'inc/shortcode-seealso.php' );

/* Filters */
include_once( 'inc/filter-the_title.php' );
include_once( 'inc/filter-title_separator.php' );
include_once( 'inc/filter-disable_emojis.php' );

function kafka_theme_setup(){

  add_editor_style();

  add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
  add_theme_support( 'custom-background' );
  add_theme_support( 'nav-menus' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );

  add_post_type_support( 'page', 'excerpt' );

	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'kafka' ),
		'secondary' => __( 'Secondary Menu', 'kafka' ), 
		'footer' => __( 'Footer Menu', 'kafka' ),
		'social' => __( 'Social Menu', 'kafka' )
	) );

  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'kafka' ),
    'id' => 'sidebar-main',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'kafka' ),
    'before_widget' => '<div id="%1$s" class="widget border shadow pad mb %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __( 'Footer', 'kafka' ),
    'id' => 'sidebar-footer',
    'description' => __( 'Footer widgets.', 'kafka' ),
    'before_widget' => '<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div id="%1$s" class="widget border shadow pad mb %2$s">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );


} add_action( 'after_setup_theme', 'kafka_theme_setup' );

function kafka_theme_scripts() {

  wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery', 'popper' ), null, true );  
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), null );

}
add_action( 'wp_enqueue_scripts', 'kafka_theme_scripts' );

function kafka_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'kafka_excerpt_length', 999 );
