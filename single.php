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
      	<div class="row justify-content-center my-5"> <!--featured image of post with title on left -->
          <div class="screenshot">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
          </div> 
      	</div>
				<div class="post-main-content mb-5">
					<div class="blog-post-title">
						<h1><?php the_title(); ?></h1>
					</div>  
					<?php the_content(); ?>  
				</div>
		<?php
				$related_args = array(
					'post_type' => 'post',
					'posts_per_page' => -1,
					'post_status' => 'publish',
					'post__not_in' => array( get_the_ID() ),
					'orderby' => 'rand',
				);
				$related = new WP_Query( $related_args );

				if( $related->have_posts() ) :
				?>
				<div class="post-navigation ms-5">
					<h3>Related posts</h3>
					<ul>
						<?php while( $related->have_posts() ): $related->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
		<?php
		endif;
		wp_reset_postdata(); ?>
    </div><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
 
