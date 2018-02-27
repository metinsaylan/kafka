<?php

include_once( 'inc/class-wp_bootstrap_navwalker.php' );
include_once( 'inc/shortcode-query_posts.php' );
include_once( 'inc/filter-the_title.php' );
include_once( 'inc/filter-title_separator.php' );
include_once( 'inc/filter-disable_emojis.php' );

function kafka_theme_setup(){

  add_editor_style();
  add_theme_support( 'custom-background' );
  add_theme_support( 'nav-menus' );
  add_theme_support( 'title-tag' );
  add_post_type_support( 'page', 'excerpt' );
  

	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'kafka' ),
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


} add_action( 'after_setup_theme', 'kafka_theme_setup' );

function kafka_theme_scripts() {

  wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( ), null, true );
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'popper' ), null, true );

  wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'popper' );
  wp_enqueue_script( 'bootstrap' );

}
add_action( 'wp_enqueue_scripts', 'kafka_theme_scripts' );

function kafka_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'kafka_excerpt_length', 999 );
