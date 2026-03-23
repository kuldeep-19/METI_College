<?php
include "config.php";
$result = mysqli_query($conn,"SELECT * FROM banaer_slider WHERE status=1");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABC College Website</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="./css/global.css" />
<link rel="stylesheet" href="./css/index.css" />

  </head>

  <body>
    <!-- Nav-Bar Add here -->

      <?php
        include "./include/navbar.php";
      ?>

    <!-- Banner  SECTION -->
 <section class="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Indicators -->
    <div class="carousel-indicators">
      <?php 
      $i = 0;
      while($row = mysqli_fetch_assoc($result)) { ?>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo 'active'; ?>"></button>
      <?php $i++; } ?>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <?php
      $result = mysqli_query($conn,"SELECT * FROM banaer_slider WHERE status=1");
      $i = 0;

      while($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="carousel-item <?php if($i==0) echo 'active'; ?>">
          
          <img src="Assets/image/<?php echo $row['image']; ?>" class="d-block w-100">

          <div class="carousel-caption hero-content">
              <h1 data-aos="fade-down" data-aos-duration="1200"><?php echo $row['title']; ?></h1>
              <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"><?php echo $row['subtitle']; ?></p>
<?php if($row['button_text'] != "") { ?>
    <div data-aos="zoom-in" data-aos-delay="400">
        <a href="<?php echo $row['button_link']; ?>" class="btn btn-warning btn-lg mt-3">
            <?php echo $row['button_text']; ?>
        </a>
    </div>
<?php } ?>
          </div>
        </div>
      <?php $i++; } ?>
    </div>
  </div>
</section>


<section style="background: linear-gradient(135deg,#eef2ff,#f8fafc);" class="content-section py-5">
    <div class="container">
        <div class="row gy-4 align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 content-text">
                <h2 class="content-title">
                    Transforming Ideas Into Reality
                </h2>

                <p class="content-desc">
                    We deliver innovative and scalable solutions designed to 
                    empower businesses and enhance digital experiences. 
                    Our focus is on quality, performance, and user satisfaction.
                </p>

                <a href="#" class="btn btn-teal mt-3">
                    Learn More
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img class="img-fluid" src="./Assets/students-2000x1279.jpg" alt="Content Image">
            </div>

        </div>
    </div>
</section>

    <!-- Counts Section -->
    <section id="counts" class="section counts">

      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-delay="0">
            <div class="stats-item text-center h-100">
              <span class="purecounter" data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="2">0</span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="stats-item text-center h-100">
              <span class="purecounter" data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="2">0</span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="stats-item text-center h-100">
              <span class="purecounter" data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="2">0</span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="stats-item text-center h-100">
              <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2">0</span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

   <!-- Testimonials Section -->
    <section style="background: linear-gradient(135deg,#eef2ff,#f8fafc);" id="testimonials" class="testimonials section container" >

        <h2 class="section-title">Testimonials</h2>

      <div class="" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i><i class="fa-solid fa-star" style="color: rgb(255, 212, 59);"></i>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Testimonials Section -->

<section class="ask-us">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title">Ask Us</h2>
    <p class="section-subtitle">Have a question? Our recruitment experts are ready to help.</p>

    <div class="row g-4 justify-content-center align-items-stretch">
      <!-- Inquiry Form -->
      <div class="col-lg-5 col-md-10">
        <form id="inquiryForm" class="inquiry-form d-flex flex-column gap-3 h-100">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <input type="tel" name="phone" placeholder="Your Contact" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <textarea name="message" placeholder="Your Message" required class="flex-grow-1"></textarea>
          <button type="submit" class="mt-auto">Submit Inquiry</button>
        </form>
      </div>

      <!-- Google Map -->
      <div class="col-lg-7 col-md-10">
        <div class="map-container h-100">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.418206773479!2d76.29768997468354!3d9.95735327978698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08733ffafb78af%3A0x4c96f22c7023776a!2sMETI%2C%20VIGYANA%20SAGAR%20-%20HOSTEL%2C%20COCHIN%20SHIPYARD%20LIMITED%20MARINE%20ENGINEERING%20TRAINING%20INSTITUTE!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0; min-height: 400px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  include "./include/footer.php";
?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- PureCounter Vanilla JS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/purecounter/1.5.0/purecounter_vanilla.min.js"></script>
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });

            // Initialize PureCounter with proper timing
            if (window.PureCounter) {
                new PureCounter();
            } else {
                // Fallback if PureCounter library fails
                console.warn('PureCounter library not loaded, using fallback');
                initCountersFallback();
            }
        });

        // Fallback counter animation
        function initCountersFallback() {
            const counters = document.querySelectorAll('.purecounter');
            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const start = parseInt(counter.dataset.purecounterStart) || 0;
                        const end = parseInt(counter.dataset.purecounterEnd) || 0;
                        const duration = (parseInt(counter.dataset.purecounterDuration) || 2) * 1000;
                        
                        if (end > 0) {
                            animateCounter(counter, start, end, duration);
                            observer.unobserve(counter);
                        }
                    }
                });
            }, observerOptions);

            counters.forEach(counter => observer.observe(counter));
        }

        function animateCounter(element, start, end, duration) {
            const increment = (end - start) / (duration / 16);
            let current = start;
            const timer = setInterval(() => {
                current += increment;
                if (current >= end) {
                    element.textContent = end.toLocaleString();
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        }
    </script>
    <script src="./js/common.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
