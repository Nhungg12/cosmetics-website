<?php
/**
 * Theme functions and definitions
 *
 * @package MultiBiz
 */
 
// Main file
require_once get_stylesheet_directory() . '/core/core.php';


/**
 * Import Options From Parent Theme
 *
 */
function multibiz_parent_theme_options() {
    $flixita_mods = get_option( 'theme_mods_flixita' );
    if ( ! empty( $flixita_mods ) ) {
        foreach ( $flixita_mods as $flixita_mod_k => $flixita_mod_v ) {
            set_theme_mod( $flixita_mod_k, $flixita_mod_v );
        }
    }
}
add_action( 'after_switch_theme', 'multibiz_parent_theme_options' );

