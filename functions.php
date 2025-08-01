<?php
// Theme setup
require get_template_directory() . '/inc/theme-setup.php';
// Enqueue styles and scripts
require get_template_directory() . '/inc/enqueue.php';
// Custom post types (e.g., testimonials, gallery)
require get_template_directory() . '/inc/custom-post-types.php';
// Enable custom logo support
add_theme_support('custom-logo');
function gym_customize_register($wp_customize) {
    // Section
    $wp_customize->add_section('gym_welcome_section', [
        'title' => __('Welcome Section', 'gymfit'),
        'priority' => 30,
    ]);

    // Background Image
    $wp_customize->add_setting('gym_welcome_bg');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gym_welcome_bg', [
        'label' => __('Background Image', 'gymfit'),
        'section' => 'gym_welcome_section',
        'settings' => 'gym_welcome_bg',
    ]));

    // Title
    $wp_customize->add_setting('gym_welcome_title', ['default' => 'Welcome to GymFit']);
    $wp_customize->add_control('gym_welcome_title', [
        'label' => __('Welcome Title', 'gymfit'),
        'section' => 'gym_welcome_section',
        'type' => 'text',
    ]);

    // Subtitle
    $wp_customize->add_setting('gym_welcome_subtitle', ['default' => 'Your transformation starts today — let’s build your best self together 💪']);
    $wp_customize->add_control('gym_welcome_subtitle', [
        'label' => __('Welcome Subtitle', 'gymfit'),
        'section' => 'gym_welcome_section',
        'type' => 'textarea',
    ]);
}
add_action('customize_register', 'gym_customize_register');
