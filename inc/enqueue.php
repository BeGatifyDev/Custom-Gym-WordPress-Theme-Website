<?php
function gymfit_enqueue_assets() {
    // Main CSS
    wp_enqueue_style('gymfit-main-style', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');

    // Main JS
    wp_enqueue_script('gymfit-main-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'gymfit_enqueue_assets');
// Swiper CSS & JS
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

