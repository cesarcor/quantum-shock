
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <?php wp_head(); ?>

      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

      <link rel="stylesheet" href="<?php get_template_directory_uri().'/assets/hamburgers/dist/hamburgers.min.css' ?>">

      <?php require('admin/customizer/option-setting.php'); ?>

    </head>

    <body <?php body_class(); ?>>

      <div class="qs-menu-overlay">
        <nav class="overlay_nav" role="navigation">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav>
      </div>

        <header class="main_header">

            <?php
              if ( function_exists( 'the_custom_logo' ) ):
                  the_custom_logo();
              endif;
            ?>

            <button class="hamburger hamburger--squeeze" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </header>
