<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div> 	
			<div>
				<?php the_content(); ?>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->
<div><!-- #content -->
<?php
get_footer();
