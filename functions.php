<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', [ 'fonts' ] );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Josefin+Slab:400,700|Permanent+Marker', [ 'normalize' ] );
}

add_action( 'init', 'theme_register_menus' );
function theme_register_menus() {
    register_nav_menus(array(
        'main-menu' => __( 'Main Menu' ),
        'socials-menu' => __( 'Socials Menu' )
    ));
}
