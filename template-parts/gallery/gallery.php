<section class="gallery-section">
    <div class="container">
        <h2>Our Gym Gallery</h2>
        <div class="gallery-grid">
            <?php
            $images = [
                'gym1.jpg',
                'gym2.jpg',
                'gym3.jpg',
                'gym4.jpg',
                'gym5.jpg',
                'gym6.jpg'
            ];

            foreach ($images as $image) : ?>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $image; ?>" alt="Gym Image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
