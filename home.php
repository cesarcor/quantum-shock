<?php
/**
 * Front page template
 *
 * @package Quantum-Shock
 * @author Nearlake Media
 * @link http://wwww.nearlakemedia.com
 */

  get_header();
?>

<?php

  $qsset_listing_type = get_theme_mod('listing_type');

?>

    <main class="main-element">

      <div class="boxy-layout">

        <div class="hero">

          <div class="big-post">

            <div class="post-item">
              <div class="post-item__content">
                <h2><a href="#">Bubbles in newtonian liquids</a></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore m…</p>
              </div>

              <img src="<?php echo get_template_directory_uri() .  '/img/temp/post1.jpg'; ?>" alt="">

            </div>

          </div>

          <div class="hero-listing">

            <div class="post-item">

              <div class="post-overlay">
                <h2><a href="#">Bubbles in newtonian liquids</a></h2>
              </div>

              <img src="<?php echo get_template_directory_uri() .  '/img/temp/post1.jpg'; ?>" alt="">
            </div>

            <div class="post-item">
              <div class="post-overlay">
                <h2><a href="#">Bubbles in newtonian liquids</a></h2>
              </div>

              <img src="<?php echo get_template_directory_uri() .  '/img/temp/post3.jpg'; ?>" alt="">
            </div>

            <div class="post-item">
              <div class="post-overlay">
                <h2><a href="#">Bubbles in newtonian liquids</a></h2>
              </div>

              <img src="<?php echo get_template_directory_uri() .  '/img/temp/post4.jpg'; ?>" alt="">

            </div>

          </div>

        </div>

        <section class="below-hero">

          <div class="blog-listing blocked-post-listing">

            <?php if($qsset_listing_type == 'two-column-listing-type'): ?>

              <?php get_template_part('template-parts/content/content', 'twocolumns'); ?>


              <?php
                else:
              ?>

              <?php get_template_part('template-parts/content/content', 'brick'); ?>


            <?php endif; ?>

          </div>


          <aside class="qs-sidebar">

          </aside>

        </section>

      </div>


    </main>


<?php
  get_footer();
?>
