<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

// ----------------------- disable size and srcset for custom-size2 -------------------

function shapeSpace_customize_image_sizes($sizes) {
	unset($sizes['custom-size2']); // 768px
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'shapeSpace_customize_image_sizes');
add_filter('max_srcset_image_width', create_function('', 'return 1;'));
// add_filter( 'wp_calculate_image_srcset', '__return_false' );


function remove_then_add_image_sizes() {
	remove_image_size('custom-size');
	// add_image_size('image-name', 200, 200, true);
}

add_action('init', 'remove_then_add_image_sizes');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu' ),
			'primary-menu2' 	=> __( 'Primary Menu2' ),
			'mobile-menu' 	=> __( 'Mobile Menu' )
		)
	);

}

add_action( 'init', 'register_theme_menus' );

// ----------------------- load js page specific -------------------

function load_scripts() {
  global $post;

  if( is_page('Over ons') ) {
		wp_enqueue_script('overons.js', '/wp-content/themes/test-FoundationPress/src/assets/js/overons.js', false ,'1.0', 'all' );
	}
  // if( is_front_page() ) {
	// 	wp_enqueue_script('app.js', '/wp-content/themes/test-FoundationPress/src/assets/js/overons.js', false ,'1.0', 'all' );
  // }
	//
	// if( is_page('Home') ) {
	// 	wp_enqueue_script('app.js', '/wp-content/themes/test-FoundationPress/src/assets/js/app.js', false ,'1.0', 'all' );
  // }
}
//
// function load_scripts() {
//     global $post;
//
// 	switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
// 	{
// 	    case 'home':
// 	        wp_enqueue_script('home', get_template_directory_uri() . '/src/assets/js/app.js', array('jquery'), '', false);
// 	        break;
// 			case 'over-ons':
// 	        wp_enqueue_script('over-ons', get_template_directory_uri() . '/src/assets/js/app.js', array('jquery'), '', false);
// 	        break;
// 	}
// }

add_action('wp_enqueue_scripts', 'load_scripts');

// function epic_enqueue_scripts() {
//   wp_register_script('main', BASEURL . '/assets/scripts/main.min.js', array(), '1.0.0', true);
//   wp_localize_script('main', 'SITE', array(
//     'ADMIN_BAR_VISIBLE' => is_admin_bar_showing()
//   ));
//   wp_enqueue_script('main');
// }

// add_action( 'wp_enqueue_scripts', 'epic_enqueue_scripts' );

add_image_size( 'custom-size2', 580, 380, true );


/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
