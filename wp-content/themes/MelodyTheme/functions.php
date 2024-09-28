<?php
// Add theme support for necessary features
add_theme_support( 'automatic-feed-links' );
add_filter('show_admin_bar', '__return_false');

// Function to load stylesheets
function main() {
    wp_enqueue_style( 'main-css', get_stylesheet_uri() );  // This enqueues your main style.css
}

// Hook to enqueue your styles with WordPress
add_action( 'wp_enqueue_scripts', 'main' );


function custom_enqueue_scripts() {
    wp_enqueue_script('adjust-padding', get_template_directory_uri() . '/js/content_dynamic.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

function enqueue_arrow_scripts() {
    wp_enqueue_script('dynamic-arrow-positioning', get_template_directory_uri() . '/js/arrow_dynamic.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_arrow_scripts');

function enqueue_slider_script() {
    wp_enqueue_script('image-slider', get_template_directory_uri() . '/js/image_slider.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slider_script');
