
<?php
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
  ?>

  <article class="post-item">
   <div class="post-overlay">
     <div class="post-item-excerpt">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <?php the_excerpt(); ?>
     </div>
   </div>
  </article>


  <?php
	endwhile;
endif;
?>
