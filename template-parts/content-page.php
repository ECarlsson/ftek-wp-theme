<?php
/**
 * Template for displaying static page content
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header> <!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div> <!-- .entry-content -->

</article> <!-- #post-<?php the_ID(); ?> -->