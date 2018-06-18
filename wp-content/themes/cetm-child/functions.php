<?php
// Add custom Theme Functions here

function cetm_scripts()
{
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/styles/styles.css', array(), '');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/styles/bootstrap.css', array(), '');
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/styles/lib/swiper.css', array(), '');
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/styles/fontawesome-all.css', array(), '');

    if (!is_user_logged_in() && is_front_page()) {
        wp_enqueue_script('jqueryjs', get_stylesheet_directory_uri() . '/scripts/jquery.js', array(), '');
        wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . '/scripts/bootstrap.js', array(), '');
        wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/scripts/custom.js', array(), '');
        wp_enqueue_script('swiperjs', get_stylesheet_directory_uri() . '/scripts/swiper.js', array(), '');
        wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/scripts/slick.min.js', array(), '');
        wp_enqueue_script('home', get_stylesheet_directory_uri() . '/scripts/page/home.js', array(), '');
    }


    // wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '');
}

add_action('wp_enqueue_scripts', 'cetm_scripts');