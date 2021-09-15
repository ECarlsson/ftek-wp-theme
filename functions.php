<?php
/**
 * Functions and definitions in global scope 
 * 
 * @package ftek-wp-teme
 * @since 1.0.0
 */

if ( ! function_exists( 'ftek_wp_theme_setup' ) ) {
    
    function twenty_twenty_one_setup() {
		/*
		 * Make theme available for translation
		 */
		load_theme_textdomain( 'ftek-wp-theme', get_template_directory() . '/languages' );

        /*
         * Register menus provided by theme
         */
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'ftek-wp-theme' ),
			)
		);

        /*
		 * Use dynamic title tag
		 */
		add_theme_support( 'title-tag' );

		/*
         * Add support for html5 syntax in WP core 
         */
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
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

?>