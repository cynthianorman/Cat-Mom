<?php

/**
 * The template for displaying portfolio posts
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cat Mom
 */

get_header();
?>
<div id="content" class="site-content container">
  <div id="primary" class="content-area">
    <div id="main" class="site-main">
      <?php if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/single-portfolio-content' );
        endwhile;

        else :
          get_template_part( 'no-results' ); 
        endif; 
      ?>     
    </div><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
 
