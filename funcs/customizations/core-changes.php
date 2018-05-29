<?php
  $qsset_hero_type = get_theme_mod('hero_setting');

  $qsset_layout_width = get_theme_mod('layout_width');

  $qsset_hero_heading_color = get_theme_mod('hero_heading_color');

  if($qsset_hero_type == 'full-width'):

    echo '<style>

      .hero-listing{
        display:none;
      }

      .hero{
        grid-template-columns: 100%;
      }

      .hero .big-post .post-item .post-item__content,
      .hero .big-post .post-item img {
          width: 100%;
      }

    </style>';

  elseif($qsset_hero_type == 'full-width-full-overlay'):

    echo '<style>

      .hero .big-post .post-item .post-item__content{
          width: 100%;
          height: 100%;
          top: 0;
      }

    </style>';

  endif;

  if($qsset_layout_width == 'full-width'):
    ?>

    <script>
      $()
    </script>

    <?php
  endif;

    ?>

     <style>
       .hero .big-post .post-item .post-item__content h2 a{
         color: <?php echo get_theme_mod('hero_heading_color', '#FFFFFF'); ?>
       }
     </style>

    <?php

?>
