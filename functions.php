<?php
/**
 * Functions and definitions in global scope 
 * 
 * @package ftek-wp-teme
 * @since ftek-wp-teme 1.0.0
 */

/**
 * Sets up theme defaults and registers theme feature support
 * 
 * @since ftek-wp-teme 1.0.0
 */
function ftek_wp_theme_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'ftek-wp-theme', get_template_directory() . '/languages' );
	
	// Register bootstrap nav walker
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';

	// Register menus provided by theme
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary menu', 'ftek-wp-theme' ),
		)
	);

	// Register primary sidebar (widget area)
	register_sidebar(
		array(
			'id'			=> 'primary',
			'name'			=> esc_html__( 'Primary widget area', 'ftek-wp-theme' ),
			'description'	=> esc_html__( 'Primary widget area displayed on front page.', 'ftek-wp-theme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
		)
	);

	// Use dynamic title tag
	add_theme_support( 'title-tag' );

	// Enable custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'		=> 128,
			'width'			=> 128,
			'flex-height'	=> true,
			'flex-width'	=> true
		)
	);

	// Enable post thumbnails and featured images
	add_theme_support( 'post-thumbnails' );

	// Add support for html5 syntax in WP core 
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);
}
add_action( 'after_setup_theme', 'ftek_wp_theme_setup' );

/**
 * Enqueues scripts and styles
 * 
 * @since ftek-wp-teme 1.0.0
 */
function ftek_wp_theme_scripts() {
	
	// Enqueue main stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri());

	// Enqueue bootstrap js 
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/bootstrap-5.1.1/dist/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'ftek_wp_theme_scripts');

// Menu functions and filters
require get_template_directory() . '/inc/menu-functions.php';


?>