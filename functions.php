<?php


add_action('wp_enqueue_scripts', 'qs_assets_load');
function qs_assets_load(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('hamburger', get_template_directory_uri().'/assets/hamburgers/dist/hamburgers.min.css', false, false, true);
}
