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

  $listing_type;
  $qsset_listing_type = get_theme_mod('listing_type');

  switch ($qsset_listing_type) {
    case 'brick-listing-type':
      $listing_type = 'brick-listing';
      break;

    case 'masonry-listing-type':
      $listing_type = 'masonry-listing';
    break;

    case 'two-column-listing-type':
      $listing_type = 'two-column-listing';
    break;

    case 'card-listing-type':
      $listing_type = 'card-listing';
    break;

    case 'classic-listing-type':
      $listing_type = 'classic-listing';
    break;

    default:
      $listing_type = '';
    break;
  }

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

          <div class="blog-listing <?php echo $listing_type; ?>">

            <?php
            if ( have_posts() ):
            	while ( have_posts() ):
            		the_post();
            ?>

            <?php
              switch ($qsset_listing_type) {
                case 'two-column-listing-type':
                  get_template_part('template-parts/content/content', 'twocolumns');
                break;

                case 'masonry-listing-type':
                  get_template_part('template-parts/content/content', 'masonry');
                break;

                case 'card-listing-type':
                  get_template_part('template-parts/content/content', 'cards');
                break;

                case 'classic-listing-type':
                  get_template_part('template-parts/content/content', 'classic');
                break;

                default:
                  get_template_part('template-parts/content/content', 'brick');
                break;
              }
            ?>

              <?php
            	endwhile;
            endif;
            ?>

          </div>


          <aside class="qs-sidebar">

          </aside>

        </section>

      </div>


    </main>


<?php
  get_footer();
?>
