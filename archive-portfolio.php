<?php
/**
 * The template for displaying archive pages for portfolio posts
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
			<div class="entry-content">
				<div class="row my-5 d-flex justify-content-center">
					<div class="col-lg-7 col-sm-12 pe-5 mt-5">
						<h1>WordPress Skills + Tools</h1> 
						<p class="opening-paragraph">Here you'll get a better idea of the WordPress projects I've worked on, challenges I had to face, solutions I came up with, skills I developed, and tools I used along the way.</p>

						<p><em><?php single_term_title( "Check out my project(s) when I worked with "); ?></em></p>
						<?php
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post();?>
								<div class="cm-post-list mb-5">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
									<?php
									if ( ! has_excerpt() ) {
										echo '';
									} else { 
										the_excerpt();
									}?>
									<?php $project_info = get_post_meta( get_the_ID(), 'catmom_textarea', true );
									if ( $project_info ): ?>
									<p class="project-meta"><?php echo $project_info; ?></p>
									<?php endif;?>

									<?php the_post_thumbnail();?>
								</div><?php
							endwhile;
						else :
							// When no posts are found, output this text.
							_e( 'Sorry, no posts matched your criteria.' );
						endif;
						wp_reset_postdata(); ?>
					</div>
				</div>	
			</div> <!-- entry-content -->
		</div> <!-- #site-main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

