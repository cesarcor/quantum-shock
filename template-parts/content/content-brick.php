
  <article class="post-item listing-brick">
   <div class="post-overlay">

     <div class="post-item-excerpt">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <?php the_excerpt(); ?>
     </div>

   </div>
   
   <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

  </article>
