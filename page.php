<?php
/**
 * Template for displaying all single post-type content
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */

get_header();

while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content', 'page' );
}

get_footer();