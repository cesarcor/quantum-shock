<?php

add_action('wp_enqueue_scripts', 'qs_assets_load');
function qs_assets_load(){

  $query_args = array(
    'family' => 'Open+Sans:300,400,600i,700,800',
    'subset' => 'latin,latin-ext'
  );


  wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

  wp_enqueue_style('main-style', get_template_directory_uri().'/css/main.css', false, filemtime(get_stylesheet_directory().'/css/main.css'));
  wp_enqueue_script('jquery');
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, filemtime( get_stylesheet_directory().'/js/custom.js' ), true);
  wp_enqueue_style('hamburger', get_template_directory_uri().'/assets/hamburgers/dist/hamburgers.min.css', false, false, false);
  wp_enqueue_style('animate', get_template_directory_uri().'/assets/animatecss/animate.min.css', false, false, false);

}

function qs_customize_enqueue() {
	wp_enqueue_script( 'custom-customize-js', get_template_directory_uri() . '/admin/customizer/js/customizer-custom-js.js', array( 'jquery', 'customize-controls' ), false, true );
  wp_enqueue_style('custom-customize-css', get_template_directory_uri().'/admin/customizer/css/customizer-custom-css.css', false, filemtime(get_stylesheet_directory().'/admin/customizer/css/customizer-custom-css.css'));

}
add_action( 'customize_controls_enqueue_scripts', 'qs_customize_enqueue' );

/* ======= THEME SUPPORT ======= */

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

/* ======= EXCERPT LENGTH ======= */

add_filter( 'excerpt_length', 'qs_excerpt_length', 999 );
function qs_excerpt_length( $length ) {
	return 15;
}

/* ======= ICNLUDES ======= */
include ('admin/customizer/customize.php');
