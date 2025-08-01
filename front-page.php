<?php get_header(); ?>

<main id="main-content">

  <?php
    $welcome_bg = get_theme_mod('gym_welcome_bg');
    $welcome_title = get_theme_mod('gym_welcome_title');
    $welcome_subtitle = get_theme_mod('gym_welcome_subtitle');
?>

<section class="welcome-section" style="background-image: url('<?php echo esc_url($welcome_bg); ?>');">
    <div class="container">
        <h1 class="typing-text"><?php echo esc_html($welcome_title); ?></h1>
        <p><?php echo esc_html($welcome_subtitle); ?></p>
     
    </div>
</section>


    <?php
        // Booking Form
        get_template_part('template-parts/booking/booking-form');

        // Gallery Section
        get_template_part('template-parts/gallery/gallery');

        // Testimonials
        get_template_part('template-parts/testimonials/testimonials');

        // Blog Previews
        get_template_part('template-parts/blog/blog-preview');
    ?>

</main>

<?php get_footer(); ?>
