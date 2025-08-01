<?php
function gymfit_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'gymfit-theme'),
    ]);
}
add_action('after_setup_theme', 'gymfit_theme_setup');
