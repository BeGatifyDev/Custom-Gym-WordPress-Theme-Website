    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> BestGYM. All rights reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".animated-form .form-step");
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); // Animate only once
            }
        });
    }, options);

    steps.forEach(step => {
        observer.observe(step);
    });
});
</script>

</body>
</html>
