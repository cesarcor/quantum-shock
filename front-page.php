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

    <main class="main-element">

      <div class="boxy-layout">

        <div class="hero">

          <div class="big-post">

            <div class="post-item" style="background-image:url(<?php echo get_template_directory_uri() . '/img/temp/post1.jpg' ?>);">
              <div class="post-item__content">
                <h2>Bubbles in newtonian liquids</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore m…</p>
              </div>

            </div>

          </div>

          <div class="hero-listing">
            <div class="post-item">
              <a href="#"><h2>Bubbles in newtonian liquids</h2></a>
            </div>

            <div class="post-item">
              <a href="#"><h2>Bubbles in newtonian liquids</h2></a>
            </div>

            <div class="post-item">
              <a href="#"><h2>Bubbles in newtonian liquids</h2></a>
            </div>
          </div>

        </div>

        <section class="below-hero">

          <div class="blog-listing">

          </div>


          <aside class="">

          </aside>

        </section>

      </div>


    </main>





<?php
  get_footer();
?>
