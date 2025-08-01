<section id="testimonials" class="section testimonials">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 6
                );
                $testimonials = new WP_Query($args);
                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                ?>
                    <div class="swiper-slide testimonial-item">
                        <blockquote>
                            <p><?php the_content(); ?></p>
                            <footer>— <?php the_title(); ?></footer>
                        </blockquote>
                    </div>
                <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="swiper-slide">No testimonials found.</div>
                <?php endif; ?>
            </div>

            <!-- Optional navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
