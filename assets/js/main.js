document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.testimonial-swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
});
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
