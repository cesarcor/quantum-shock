
  <article class="post-item listing-twocolumns">

      <div class="listing-twocolumns__img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
      </div>

      <div class="listing-twocolumns__content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </div>

  </article>
