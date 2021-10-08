<?php
/**
 * Template for displaying the header site branding
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<a class="navbar-brand" href="<?php home_url() ?>">
    <?php
    if ( has_custom_logo() ) {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" height="50" class="me-3">';
    }
    bloginfo( 'title' )
    
    ?>            
</a>