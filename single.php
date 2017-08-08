<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
          the_content();
          
        endwhile;
      ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php

get_footer();