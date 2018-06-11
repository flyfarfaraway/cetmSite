<?php
// Add custom Theme Functions here

function cetm_scripts()
{
    // wp_enqueue_style('odometer.min', get_stylesheet_directory_uri() . '/style.css', array(), '');
    // wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '');
}
add_action('wp_enqueue_scripts', 'cetm_scripts');