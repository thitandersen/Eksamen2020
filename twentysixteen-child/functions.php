<?php
function stc_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'stc_enqueue_styles' );

// Script

function vegan_child_scripts() {
    wp_enqueue_script( 'theme_child_js', get_stylesheet_directory_uri() . '/js/child.js', array( 'jquery' ), '1.0', true );
}
add_action('wp_enqueue_scripts', 'vegan_child_scripts');

