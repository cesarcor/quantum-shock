
  <article class="post-item masonry-item" style="background: url(<?php echo get_the_post_thumbnail_url() ?>);">
     <div>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <?php the_excerpt(); ?>
     </div>
  </article>
