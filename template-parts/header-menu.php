<?php
/**
 * Template for displaying the main navigation menu
 * 
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#primary-nav-collapse"
        aria-controls="primary-nav-collapse"
        aria-expanded="false"
        aria-label="<?php esc_html_e( 'Toggle navigation', 'ftek-wp-theme' ) ?>"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu(array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'primary-nav-collapse',
        'menu_class'        => 'navbar-nav ms-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ))
    ?>
<?php endif; ?>