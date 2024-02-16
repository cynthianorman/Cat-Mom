<?php
/**
 * The template for displaying all woocommerce pages
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
        <?php woocommerce_content(); ?> 
		</div><!-- #main -->
	</div><!-- #primary -->
<div><!-- #content -->
<?php
get_footer();
