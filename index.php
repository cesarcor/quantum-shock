<?php
/**
 * The main template file.
 *
 * @package Quantum-Shock
 * @author Red Isotope
 * @link http://wwww.redisotope.com
 */

  get_header();
?>

    <main class="page_container">

      <div class="hero">
        <h1>HOW TO MAINTAIN A HAPPY STREAK?</h1>

        <div class="hero__overlay"></div>
        <figure style="background-image: url(<?php echo get_template_directory_uri() . '/img/temp/hero.jpg'; ?>);">
        </figure>
      </div>

      <section class="blog-listing">

        <article class="blog-item">
          <div class="item_overlay"></div>
          <img src="<?php echo get_template_directory_uri() . '/img/temp/post1.jpg' ?>" alt="">

        </article>

        <article class="blog-item">
          <div class="item_overlay"></div>
          <img src="<?php echo get_template_directory_uri() . '/img/temp/post2.jpg' ?>" alt="">

        </article>

      </section>




    </main>





<?php
  get_footer();
?>
