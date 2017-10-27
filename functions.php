<?php

include_once( 'class-wp_bootstrap_navwalker.php' );
include_once( 'shortcode-query_posts.php' ); 

function setup_theme(){
	
  add_theme_support( 'custom-background' );
  add_theme_support( 'nav-menus' );
  add_theme_support( 'title-tag' );
	
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bs-cover' ),
	) );
  
  
  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'bs-cover' ),
    'id' => 'sidebar-main',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'bs-cover' ),
    'before_widget' => '<div id="%1$s" class="widget border shadow pad mb %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  
	
} add_action( 'after_setup_theme', 'setup_theme' );

function theme_scripts() {

  //wp_deregister_script( 'jquery' );
  //wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, true );
  wp_register_script( 'popper', get_template_directory_uri() . '/assets/popper.min.js', array( ), null, true );
  wp_register_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'popper' ), null, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'popper' );
  wp_enqueue_script( 'bootstrap' );
  
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );