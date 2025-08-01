<?php 
function gymfit_register_custom_post_types() {
    // Testimonials
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'testimonials'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'gymfit_register_custom_post_types');
?>