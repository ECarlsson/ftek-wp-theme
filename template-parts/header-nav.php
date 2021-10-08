<?php
/**
 * Template for displaying the header nav
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<header id="header" role="banner" class="bg-light">
    <nav id="nav-menu-primary" class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <?php get_template_part( 'template-parts/header', 'branding' ); ?>
            <?php get_template_part( 'template-parts/header', 'menu' ); ?>
        </div>
    </nav> <!-- #nav-menu-primary -->
</header> <!-- #header -->