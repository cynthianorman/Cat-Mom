<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cat Mom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Cynthia Norman, Web Developer located in Bancroft, Ontario">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="p:domain_verify" content="07caebb0d36233deeb95219dde7dd08d"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">

      <div class="bg-main-nav">

        <nav id="nav-main" class="navbar navbar-expand-md navbar-top navbar-fixed navbar-light" role="navigation" aria-label="Main">
			
			<div class="skip">
				<a href="#content">Skip to main content</a>
			</div>
				 

          <div class="container">

            <!-- Navbar Brand -->
            <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/CynthiaNorman_logo.png" alt="logo" class="logo xs"></a>
            <a class="navbar-brand md d-none d-md-block" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/CynthiaNorman_logo.png" alt="logo" class="logo md"></a>
			  
            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header bg-silver">
                <span class="h5 mb-0"><?php esc_html_e('Menu', 'catmom'); ?></span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="catmom-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
              </div>
            </div>

            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fas fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>             


            </div><!-- .header-actions -->

          </div><!-- .container -->

        </nav><!-- .navbar -->

      </div><!-- .fixed-top .bg-light -->

</header><!-- #masthead -->