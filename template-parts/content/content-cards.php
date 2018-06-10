<article class="post-item">

  <div class="listing-card__img">
    <a href="<?php the_permalink(); ?>">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </a>
  </div>

  <div class="listing-card__content">
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
  </div>

</article>
