<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package Cat Mom
 */

get_header();
?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<div id="main" class="site-main pt-5">
			<?php the_content(); ?>
		</div><!-- #main -->
	</div><!-- #primary -->
<div><!-- #content -->
<?php
get_footer();