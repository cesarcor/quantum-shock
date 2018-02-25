
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <?php wp_head(); ?>

      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

      <link rel="stylesheet" href="<?php get_template_directory_uri().'/assets/hamburgers/dist/hamburgers.min.css' ?>">

    </head>

    <body <?php body_class(); ?>>

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

            <nav role="navigation">

            </nav>
        </header>
