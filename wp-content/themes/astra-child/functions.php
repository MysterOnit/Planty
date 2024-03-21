<?php
/**
 * astra-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra-child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function custom_admin_menu_link( $items, $args ) {
    // Vérifie si l'utilisateur est connecté et s'il est administrateur
    if ( is_user_logged_in() && current_user_can( 'administrator' ) ) {
        // Crée le lien vers le tableau de bord admin
        $admin_link = '<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="'.admin_url().'" class="menu-link">Admin</a></li>';
        // Insère le lien à la deuxième position du menu
        $items = substr_replace( $items, $admin_link, strpos( $items, '</li>' ), 0 );
    }
    return $items;
}
// Ajoute un filtre pour modifier les éléments du menu
add_filter( 'wp_nav_menu_items', 'custom_admin_menu_link', 10, 2 );