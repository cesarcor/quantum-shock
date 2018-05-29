
<?php
if ( have_posts() ):
	while ( have_posts() ):
		the_post();
  ?>

  <article class="post-item listing-twocolumns">

        <img src="" alt="">

       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <?php the_excerpt(); ?>

  </article>


  <?php
	endwhile;
endif;
?>
