<?php 
$page_title = "Contact us";
include('include/header.php'); 
?>
<body>
    <?php include './include/navbar.php'; ?>


    <section class="contact-section container">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-container">

            <!-- Address -->
            <div class="contact-card">
                <div class="icon"><i class="fa-solid fa-location-dot" style="color: rgb(46, 86, 157);"></i></div>
                <h3>Address</h3>
                <p>
                    Marine Engineering Training Institute(METI)<br>
                    Vigyana Sagar Cochin Shipyard Limited (CSL)</br>
                    Girinagar, Kochi-682 020
                </p>
                <p class="time">🕒 Mon–Sat: 9AM – 5PM</p>
            </div>

            <!-- Email -->
            <div class="contact-card">
                <div class="icon">📧</div>
                <h3>Email</h3>
                <a href="mailto:info@abccollege.edu.in">
                    metihod@cochinshipyard.in
                </a></br>
                <a href="mailto:meti.admnoff@cochinshipyard.in">meti.admnoff@cochinshipyard.in</a></br>
            </div>

            <!-- Phone -->
            <div class="contact-card">
                <div class="icon">📞</div>
                <h3>Phone</h3>
                <a href="tel:0484-4011596">
                    0484-4011596
                </a></br>
                <a href="tel:8129823739">8129823739</a></br>
                <a href="tel:0484-2501223">0484-2501223</a></br>
            </div>
        </div>
    </section>

        <div class="container mb-3 text-center">
            <h2 class="section-title  ">Map Location</h2>
        </div>
<section class="map-section container px-0">

    <!-- Ask Us Button (Top Right Overlay) -->
    <div class="ask-btn-wrapper">
        <button onclick="location.href='index.php#contact'">
            Ask Us →
        </button>
    </div>
    <!-- Full Width Map -->
    <div class="map-full">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.418206773479!2d76.29768997468354!3d9.95735327978698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08733ffafb78af%3A0x4c96f22c7023776a!2sMETI%2C%20VIGYANA%20SAGAR%20-%20HOSTEL%2C%20COCHIN%20SHIPYARD%20LIMITED%20MARINE%20ENGINEERING%20TRAINING%20INSTITUTE!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0; min-height: 400px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>

        <!-- Overlay Text -->
        <div class="map-overlay">
            <h3>Visit METI Kochi</h3>
            <p>Marine Engineering Training Institute, Cochin Shipyard Limited</p>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="text-center my-4">
        <h2 class="section-title">Latest From Our Social Media</h2>
        <p class="text-muted">Stay connected with us</p>
    </div>

    <div class="row g-4">

        <!-- Facebook -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <img src="https://cslmeti.in/assets/images/infra3-1288x859.jpg" class="card-img-top" alt="Facebook Post">
                <div class="card-body">
                    <h6 class="text-primary">
                        <i class="fab fa-facebook"></i> Facebook
                    </h6>
                    <p class="card-text">Annual fest highlights are now live! 🎉</p>
                    <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">
                        View Post
                    </a>
                </div>
            </div>
        </div>

        <!-- Twitter -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <img src="https://cslmeti.in/assets/images/infra3-1288x859.jpg" class="card-img-top" alt="Twitter Post">
                <div class="card-body">
                    <h6 class="text-info">
                        <i class="fab fa-twitter"></i> Twitter
                    </h6>
                    <p class="card-text">Admissions 2026 are open now. Apply today!</p>
                    <a href="#" target="_blank" class="btn btn-outline-info btn-sm">
                        View Post
                    </a>
                </div>
            </div>
        </div>

        
        <!-- LinkedIn -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <img src="https://cslmeti.in/assets/images/infra3-1288x859.jpg" class="card-img-top" alt="LinkedIn Post">
                <div class="card-body">
                    <h6 class="text-primary">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </h6>
                    <p class="card-text">Our students placed in top MNCs 🚀</p>
                    <a href="#" target="_blank" class="btn btn-outline-primary btn-sm">
                        View Post
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
    <?php include './include/footer.php'; ?>
</body>

</html>