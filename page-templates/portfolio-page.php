<?php 


/*
  ===================================================
    Portfolio Page
    Template Name: Portfolio Template
  ===================================================
*/
  get_header();
?>

<div class="portfolio-page text-center">
  <?php 
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>
  
            <?php the_content(); ?>   

      <?php endwhile; 
    endif;
  ?>
</div>

<?php get_footer(); ?>