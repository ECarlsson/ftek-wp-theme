<?php
/**
 * Functions and filters related to the menus
 *
 * @package ftek-wp-theme
 * @since ftek-wp-theme 1.0.0
 */
?>

<?php
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 * 
 * @since ftek-wp-them 1.0.0
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );

/**
 * Adds custom menu items to primary
 * 
 * @since ftek-wp-them 1.0.0
 */
function ftek_wp_theme_primary_menu_items( $items, $args ) {
    if ( $args->theme_location == 'primary' ) {
        // Add search link
        $items .=   '<li class="nav-item"><a href="' .
        get_search_link() .
        '" class="nav-link"><i class="bi-search" aria-label="' .
        esc_html__( 'Search', 'ftek-wp-theme' ) .
        '"></i></a></li>';

        // Add login/logout link
        if ( is_user_logged_in() ) {
            $items .=   '<li class="nav-item"><a href="' .
                        wp_logout_url() .
                        '" class="nav-link"><i class="bi-box-arrow-left" aria-label="' .
                        esc_html__( 'Log out', 'ftek-wp-theme' ) .
                        '"></i></a></li>';
        } else {
            $items .=   '<li class="nav-item"><a href="' .
                        wp_login_url() .
                        '" class="nav-link"><i class="bi-box-arrow-in-right" aria-label="' .
                        esc_html__( 'Log in', 'ftek-wp-theme' ) .
                        '"></i></a></li>';    
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ftek_wp_theme_primary_menu_items', 10, 2 );
?>