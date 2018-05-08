<?php

$query_args = array(
  'family' => 'Dosis:800',
  'subset' => 'latin,latin-ext'
);


add_action('wp_enqueue_scripts', 'qs_assets_load');
function qs_assets_load(){


  wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

  wp_enqueue_style('main-style', get_template_directory_uri().'/css/main.css', false, filemtime(get_stylesheet_directory().'/css/main.css'));
  wp_enqueue_script('jquery');
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, filemtime( get_stylesheet_directory().'/js/custom.js' ), true);
  wp_enqueue_style('hamburger', get_template_directory_uri().'/assets/hamburgers/dist/hamburgers.min.css', false, false, false);
  wp_enqueue_style('animate', get_template_directory_uri().'/assets/animatecss/animate.min.css', false, false, false);

}


/* ======= THEME SUPPORT ======= */

add_theme_support( 'custom-logo' );
