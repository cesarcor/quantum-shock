<?php
  get_header();
?>


<?php
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
  ?>

  <article class="post-content">

   <div class="post-overlay">
     <div class="post-item-excerpt">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <?php the_content(); ?>
     </div>
   </div>
   
  </article>


  <?php
	endwhile;
endif;
?>


<?php
	get_footer();
?>
