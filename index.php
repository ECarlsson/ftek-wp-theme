<?php
/**
 * Main template file
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<?php
get_header();

if ( have_posts() ) {
   while ( have_posts() ) {
       the_post();
       the_content();
   }
}

get_footer();
?>