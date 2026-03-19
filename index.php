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


    <section class="partners py-5">
      <div class="partner-section" data-aos="fade-up">
        <div class="section-title text-center">
                <h2 class="fw-bold">Our Trusted Partners</h2>
        </div>  
      <div class="logo-slider">
        <div class="logo-track">
          <!-- original logos -->
          <img src="./Assets/partner-log/bsm1-1-173x100.jpg" />
          <img src="./Assets/partner-log/damico-logo1-195x231.jpg" />
          <img src="./Assets/partner-log/elegant-logo1-311x114.jpg" />
          <img src="./Assets/partner-log/fleet-logo1-256x97.jpg" />
          <img src="./Assets/partner-log/klsm1-256x248.jpg" />
          <img src="./Assets/partner-log/massa1-218x198.jpg" />
          <img src="./Assets/partner-log/sima-marine-logo-new-126x98.jpg" />
          <img src="./Assets/partner-log/synergy1-355x352.jpg" />
          <img src="./Assets/partner-log/wilhelmsen1-506x260.jpg" />

          <!-- duplicate logos for smooth loop -->
          <img src="./Assets/partner-log/bsm1-1-173x100.jpg" />
          <img src="./Assets/partner-log/damico-logo1-195x231.jpg" />
          <img src="./Assets/partner-log/elegant-logo1-311x114.jpg" />
          <img src="./Assets/partner-log/fleet-logo1-256x97.jpg" />
          <img src="./Assets/partner-log/klsm1-256x248.jpg" />
          <img src="./Assets/partner-log/massa1-218x198.jpg" />
          <img src="./Assets/partner-log/sima-marine-logo-new-126x98.jpg" />
          <img src="./Assets/partner-log/synergy1-355x352.jpg" />
          <img src="./Assets/partner-log/wilhelmsen1-506x260.jpg" />
        </div>
      </div>
      </div>
    </section>

  <section class="achievements py-5">
    <div class="container ">

      <div class="section-title text-center" data-aos="fade-down">
      <h2 class="fw-bold">Our Achievements</h2>
      </div>

      <div class="row g-4">

      <!-- CARD 1 -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0">
      <div class="achievement-card">
      <img src="./Assets/image/2-days-scba-886x1147.jpg">
      <div class="achievement-overlay">
      <button class="btn btn-light shadow-sm fw-bold"
      onclick="openPopup('./Assets/image/2-days-scba-886x1147.jpg')">
      <i class="fa-solid fa-eye me-2"></i>View
      </button>
      </div>
      </div>
      </div>

      <!-- CARD 2 -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="achievement-card">
      <img src="./Assets/image/3-days-bff-886x1147.jpg">
      <div class="achievement-overlay">
      <button class="btn btn-light shadow-sm fw-bold"
      onclick="openPopup('./Assets/image/3-days-bff-886x1147.jpg')">
      <i class="fa-solid fa-eye me-2"></i>View
      </button>
      </div>
      </div>
      </div>

      <!-- CARD 3 -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
      <div class="achievement-card">
      <img src="./Assets/image/advert2-886x1108.jpeg">
      <div class="achievement-overlay">
      <button class="btn btn-light shadow-sm fw-bold"
      onclick="openPopup('./Assets/image/advert2-886x1108.jpeg')">
      <i class="fa-solid fa-eye me-2"></i>View
      </button>
      </div>
      </div>
      </div>

      <!-- CARD 4 -->

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
      <div class="achievement-card">
      <img src="./Assets/image/maersk-advrt-2-886x1083.jpg">
      <div class="achievement-overlay">
      <button class="btn btn-light shadow-sm fw-bold"
      onclick="openPopup('./Assets/image/maersk-advrt-2-886x1083.jpg')">
      <i class="fa-solid fa-eye me-2"></i>View
      </button>
      </div>
      </div>
      </div>

      </div>
      </div>
</section>


<!-- POPUP -->

<div id="imagePopup" class="popup">

<button class="close-btn" onclick="closePopup()">✕</button>

<img id="popupImg">

</div>

<section class="ask-us">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title">Ask Us</h2>
    <p class="section-subtitle">Have a question? Our recruitment experts are ready to help.</p>

    <div class="ask-us-content">
      <!-- Inquiry Form -->
      <form id="inquiryForm" class="inquiry-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Contact" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Submit Inquiry</button>
      </form>

      <!-- Google Map -->
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.418206773479!2d76.29768997468354!3d9.95735327978698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08733ffafb78af%3A0x4c96f22c7023776a!2sMETI%2C%20VIGYANA%20SAGAR%20-%20HOSTEL%2C%20COCHIN%20SHIPYARD%20LIMITED%20MARINE%20ENGINEERING%20TRAINING%20INSTITUTE!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script src="./js/common.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
