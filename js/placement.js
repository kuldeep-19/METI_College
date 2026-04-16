document.addEventListener('DOMContentLoaded', () => {
    // STATISTICS COUNTER ANIMATION
    const stats = document.querySelectorAll('.stats-number');
    const speed = 200;

    const animateStats = (counter) => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target + (counter.getAttribute('data-suffix') || '');
            }
        };
        updateCount();
    };

    // Intersection Observer for stats
    const observerOptions = {
        threshold: 0.5
    };

    const statsObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    stats.forEach(stat => statsObserver.observe(stat));

    // AOS Initialization for this page
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true
        });
    }

    // Session Records Toggling
    const sessionButtons = document.querySelectorAll('.btn-session');
    const sessionDetails = document.querySelectorAll('.session-record-details');

    sessionButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const session = btn.getAttribute('data-session');

            // Update buttons
            sessionButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Update content visibility
            sessionDetails.forEach(detail => {
                detail.classList.remove('active');
                if (detail.id === `session-${session}`) {
                    detail.classList.add('active');
                }
            });

            // Re-trigger AOS for new content if needed
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }

            // Re-init Swiper if context changed
            initStudentSwiper();
        });
    });

    // Student Success Swiper
    const initStudentSwiper = () => {
        if (typeof Swiper !== 'undefined') {
            document.querySelectorAll('.student-swiper').forEach(swiperEl => {
                const container = swiperEl.closest('.student-swiper-container');
                new Swiper(swiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    pagination: {
                        el: swiperEl.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: container.querySelector('.student-swiper-next'),
                        prevEl: container.querySelector('.student-swiper-prev'),
                    },
                    breakpoints: {
                        640: { slidesPerView: 2, spaceBetween: 20 },
                        1024: { slidesPerView: 4, spaceBetween: 30 },
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    }
                });
            });
        }
    };

    initStudentSwiper();
});
