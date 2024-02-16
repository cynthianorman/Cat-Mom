<?php

/**
 * Work Mom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cat Mom
 */


/**
 * Enqueue scripts and styles
 */
function catmom_scripts() {
// Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
// Style CSS
$modificated_styleCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/style.css'));
wp_enqueue_style('catmom-style', get_stylesheet_uri(), array(), $modificated_styleCss);

// Compiled Bootstrap
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/lib/bootstrap.min.css', array(), '5.1.3', 'all' );

// Bootstrap JS
$modificated_bootstrapJs = date('YmdHi', filemtime(get_template_directory() . '/assets/js/lib/bootstrap.bundle.min.js'));
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/lib/bootstrap.bundle.min.js', array(), $modificated_bootstrapJs, true);

// FontAwesome
$modificated_fontawesomeCss = date('YmdHi', filemtime(get_template_directory() . '/assets/css/lib/fontawesome.min.css'));
wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/lib/fontawesome.min.css', array(), $modificated_fontawesomeCss);

}
add_action('wp_enqueue_scripts', 'catmom_scripts');
//Enqueue scripts and styles END

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

  if ( ! function_exists( 'catmom_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function catmom_setup() {
     
        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support('title-tag');
         
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
         
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );       

    }
    endif; // catmom_setup
    add_action( 'after_setup_theme', 'catmom_setup' );

	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	} 

// Google Fonts where the League Spartan is for everything except heading tags
function google_fonts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Oxygen&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

// Register Bootstrap 5 Nav Walker
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
    require_once('inc/class-bootstrap-5-navwalker.php');
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');
// Register Bootstrap 5 Nav Walker END

// Place the portfolio archive on home page
function print_portfolio_posts($query) {

	//not the admin but the main query
	if(!is_admin() && $query->is_main_query()) {
		//add post to home
		if(is_home()) {
			$query->set('post_type', array('post', 'portfolio'));
		}
	}
}
add_action('pre_get_posts', 'print_portfolio_posts');

/* Theme Widgets Setup */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'portfolio' ),
		'description'   => __( 'Appears on blog page sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget pt-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-3 px-4">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'portfolio' ),
		'description'   => __( 'Appears on page sidebar', 'portfolio' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget pt-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-3 px-4">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'portfolio' ),
		'description'   => __( 'Appears on footer 1', 'portfolio' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'portfolio' ),
		'description'   => __( 'Appears on footer 2', 'portfolio' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'portfolio' ),
		'description'   => __( 'Appears on footer 3', 'portfolio' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'portfolio' ),
		'description'   => __( 'Appears on footer 4', 'portfolio' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'portfolio_widgets_init' );


add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );
function md_custom_woocommerce_checkout_fields( $fields ) 
    {
        $fields['order']['order_comments']['placeholder'] = 'Order notes';
        $fields['order']['order_comments']['label'] = 'Add any additional information you would like to share here';
    
        return $fields;
    }
