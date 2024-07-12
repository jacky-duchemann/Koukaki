<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('child-custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true); /* integration du fichier script.js du thème enfant */
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// inclusion des fichiers necesssaires au fonctionnement de Swiper.js

function enqueue_swiper_scripts() {
    // Enqueue Swiper CSS
    wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.5.9' );

    // Enqueue Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '6.5.9', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_scripts' );