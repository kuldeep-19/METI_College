<?php
$page_title = "Alumni";
include("include/header.php");
?>

<body >
  <?php
    include "./include/navbar.php";
    ?>
    <!-- 🔹 GALLERY DETAIL VIEW -->
<section id="gallery-detail" style="display:none; padding:40px 20px;">
    <a class="container" onclick="goBack()" href="#" style="text-decoration: none; color: #1e3a5f; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px;"><i class="fa-solid fa-arrow-left"></i> Back</a>
    
    <div class="gallery-detail-container">
       
        <!-- Sidebar with Title & Description -->
        <div class="gallery-detail-sidebar container mb-5 text-center">
            
            <h2 class="section-title mb-3 text-center" id="detail-title">Gallery Detail Title</h2>
            <div class="gallery-detail-description" id="detail-description">
                Description goes here...
            </div>
        </div>

        <!-- Images Grid -->
        <div class="gallery-detail-images container">
            <div class="gallery-image-grid" id="detail-images-grid">
                <!-- Images will be loaded here -->
            </div>
        </div>
    </div>
</section>
    <?php
  $topTabsConfig = [
    'id' => 'top-tabs-section',
    'title' => 'Alumni Network',
    'image' => './Assets/577a7723-2643x1762.jpg',
    'image_alt' => 'METI campus banner',
    'active_tab' => 'Alumni',
  ];
  ?>
  <div id="main-content">
<?php include "./include/top-tabs-banner.php"; ?>
<!-- 🔹 ABOUT SECTION + NEWS -->
<section class="py-5">
    <div class="container ">
        <div class="row g-4 alumni-highlights-grid">
            <div class="col-lg-8">
                <h2 class="section-title">About Alumni Network</h2>
                <p>
                    METI Alumni Network connects former students to share knowledge,
                    explore opportunities, and support each other's professional growth. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ullam praesentium. Incidunt laudantium nisi porro quidem tempore! Architecto ab est voluptatum, ratione impedit nesciunt facilis iure tenetur animi praesentium obcaecati vel ad rem nemo repellendus eius, provident, cum tempora numquam. Pariatur veritatis tempora maxime a delectus eligendi laboriosam tenetur modi, voluptatum iusto ipsum, numquam quaerat consequatur laborum! Tempore voluptatibus quas ex iste saepe aperiam nisi fugiat, sequi quam earum ducimus impedit, voluptatem et atque suscipit ea vitae praesentium eveniet velit reiciendis nam iusto. Laudantium, nulla voluptatibus! Porro dolorum, placeat iure ad omnis provident! Accusantium obcaecati voluptatem et vel, voluptas sapiente.
                </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <i class="fa fa-network-wired fa-2x text-primary"></i>
                        <h5>Networking</h5>
                        <p>Connect with professionals and expand your career.</p>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-briefcase fa-2x text-primary"></i>
                        <h5>Opportunities</h5>
                        <p>Discover jobs, internships, and collaborations.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <i class="fa fa-users fa-2x text-primary"></i>
                        <h5>Community Support</h5>
                        <p>Be part of a strong alumni community.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="news-updates-panel" style="margin-left: auto;">
                    <div class="news-updates-header">
                        <h2 class="section-title fs-5">News & Updates</h2>
                        <span class="news-updates-badge"><i class="fa-solid fa-arrow-trend-up"></i> Live Feed</span>
                    </div>

                    <div class="news-updates-scroll">
                        <div class="news-updates-track">
                            <table class="table news-updates-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">Alumni Meet 2025</span>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, veritatis.</p>
                                            <a href="www.google.com">Lorem ipsum dolor sit amet.</a>
                                        </td>
                                        <td class="news-update-meta">Event</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">New Job Portal</span>
                                            Exclusive job portal launched for alumni.
                                        </td>
                                        <td class="news-update-meta">Career</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">Mentorship Program</span>
                                            Senior alumni guiding fresh graduates.
                                        </td>
                                        <td class="news-update-meta">Program</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">Alumni Meet 2025</span>
                                            Annual meetup organized successfully.
                                        </td>
                                        <td class="news-update-meta">Event</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">New Job Portal</span>
                                            Exclusive job portal launched for alumni.
                                        </td>
                                        <td class="news-update-meta">Career</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="news-update-title">Mentorship Program</span>
                                            Senior alumni guiding fresh graduates.
                                        </td>
                                        <td class="news-update-meta">Program</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 🔹 ACHIEVEMENTS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Alumni Achievements</h2>
            <p class="text-muted fw-500">Meet our successful alumni making an impact globally</p>
        </div>
        
        <div class="achievement-slider">
            <div class="achievement-track">
                <!-- Achievement Card 1 -->
                <div class="card h-100 border-0 shadow-sm overflow-hidden achievement-card-hover">
                    <div class="text-center pt-5 pb-3 bg-white">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80" alt="Rahul Sharma" class="rounded-circle object-fit-cover" style="width: 120px; height: 120px; border: 4px solid rgba(13, 110, 253, 0.15);">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-dark mb-2">Rahul Sharma</h5>
                        <span class="badge bg-primary-light text-primary fw-600 mb-3 d-inline-block">Software Engineer, Google</span>
                        <p class="card-text text-secondary small lh-sm">Leading product engineering initiatives and representing METI alumni in top global tech teams.</p>
                    </div>
                </div>

                <!-- Achievement Card 2 -->
                <div class="card h-100 border-0 shadow-sm overflow-hidden achievement-card-hover">
                    <div class="text-center pt-5 pb-3 bg-white">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80" alt="Neha Verma" class="rounded-circle object-fit-cover" style="width: 120px; height: 120px; border: 4px solid rgba(25, 135, 84, 0.15);">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-dark mb-2">Neha Verma</h5>
                        <span class="badge bg-success-light text-success fw-600 mb-3 d-inline-block">Founder, Startup Venture</span>
                        <p class="card-text text-secondary small lh-sm">Built a fast-growing startup and now mentors young graduates on entrepreneurship and leadership.</p>
                    </div>
                </div>

                <!-- Achievement Card 3 -->
                <div class="card h-100 border-0 shadow-sm overflow-hidden achievement-card-hover">
                    <div class="text-center pt-5 pb-3 bg-white">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=300&q=80" alt="Amit Singh" class="rounded-circle object-fit-cover" style="width: 120px; height: 120px; border: 4px solid rgba(13, 202, 240, 0.15);">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-dark mb-2">Amit Singh</h5>
                        <span class="badge bg-info-light text-info fw-600 mb-3 d-inline-block">Data Scientist, USA</span>
                        <p class="card-text text-secondary small lh-sm">Driving data-led decisions in an international team while staying connected with the METI alumni network.</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="slider-nav slider-prev" onclick="scrollAchievementSlider('prev')">
                <i class="fa fa-chevron-left"></i>
            </button>

            <button class="slider-nav slider-next" onclick="scrollAchievementSlider('next')">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

    <!-- Activities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Alumni Activities & Events</h2>
                <p class="text-muted fw-500">Join us for engaging events that strengthen our alumni community</p>
            </div>

            <div class="row g-4">
                <!-- Activity Card 1: Annual Reunion -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Annual Reunion" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-danger">Live Event</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Annual Reunion Celebration</h5>
                            <p class="card-text text-secondary flex-grow-1">Experience nostalgic moments with fellow alumni, reconnect with old friends, and celebrate your shared journey at METI.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p class="mb-0 mt-1">June 15, 2025</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-users"></i>
                                        <p class="mb-0 mt-1">500+ Attendees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card 2: Professional Workshops -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Professional Workshops" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-info">Upskilling</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Professional Development Workshops</h5>
                            <p class="card-text text-secondary flex-grow-1">Learn from industry experts in AI, digital marketing, leadership, and modern tech skills to advance your career.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="mb-0 mt-1">Monthly</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                        <p class="mb-0 mt-1">5+ Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card 3: Networking Events -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Networking Events" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-success">Networking</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Industry Networking Meetups</h5>
                            <p class="card-text text-secondary flex-grow-1">Connect with professionals across industries, explore collaboration opportunities, and build meaningful business relationships.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p class="mb-0 mt-1">City-wise</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p class="mb-0 mt-1">50+ Companies</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card 4: Career Fair -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Career Fair" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-warning">Recruitment</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Annual Career Fair</h5>
                            <p class="card-text text-secondary flex-grow-1">Meet leading recruiters, explore job opportunities, and interview directly with top companies actively hiring talents.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p class="mb-0 mt-1">Dec 10, 2025</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-handshake"></i>
                                        <p class="mb-0 mt-1">100+ Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card 5: Mentorship Program -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Mentorship Program" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-primary">Mentoring</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Alumni Mentorship Program</h5>
                            <p class="card-text text-secondary flex-grow-1">Get guided by experienced alumni mentors who share their expertise, insights, and support your professional and personal growth.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-person-chalkboard"></i>
                                        <p class="mb-0 mt-1">1-on-1</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-chart-line"></i>
                                        <p class="mb-0 mt-1">Career Growth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card 6: Community Outreach -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden activity-card-hover" style="transition: all 0.3s ease;">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" 
                                 alt="Community Outreach" class="w-100 h-100 object-fit-cover" style="transition: transform 0.3s ease;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-secondary">Impact</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2">Community Outreach Programs</h5>
                            <p class="card-text text-secondary flex-grow-1">Give back to society through volunteer activities, mentoring underprivileged youth, and contributing to social development initiatives.</p>
                            <div class="mt-3 pt-3 border-top">
                                <div class="row text-center small text-muted">
                                    <div class="col-6">
                                        <i class="fa-solid fa-heart"></i>
                                        <p class="mb-0 mt-1">Volunteer</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-globe"></i>
                                        <p class="mb-0 mt-1">CSR</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 🔹 GALLERY -->
<section class="bg-light py-5 gallery">
    <div class="container">
        <h2 class="text-center section-title">Gallery</h2>
        <div class="row g-4">
            <!-- Gallery Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="gallery-card" data-card-id="1">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="Alumni Meetup">
                    <div class="gallery-card-header">
                        <h5 class="gallery-card-title">Alumni Meetup 2025</h5>
                        <p class="gallery-card-meta">📅 March 15, 2025 | 👥 250+ Attendees</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="gallery-card" data-card-id="2">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678" alt="Networking Event">
                    <div class="gallery-card-header">
                        <h5 class="gallery-card-title">Networking Event</h5>
                        <p class="gallery-card-meta">📅 February 28, 2025 | 🎯 50+ Companies</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="gallery-card" data-card-id="3">
                    <img src="https://t4.ftcdn.net/jpg/18/88/29/19/360_F_1888291966_LcMHxNYrvHge7sxWj8fsyvtQr0y8VDag.jpg" alt="Workshop Session">
                    <div class="gallery-card-header">
                        <h5 class="gallery-card-title">Workshop Session</h5>
                        <p class="gallery-card-meta">📅 January 20, 2025 | 🏆 5 Courses</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="gallery-card" data-card-id="4">
                    <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7" alt="Career Fair">
                    <div class="gallery-card-header">
                        <h5 class="gallery-card-title">Career Fair</h5>
                        <p class="gallery-card-meta">📅 December 10, 2024 | 💼 100+ Jobs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 SIGNIN / SIGNUP -->
<section class="alumni-auth">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title">Join Alumni Network</h2>
    <p class="section-subtitle">Sign in or create an account to stay connected with the METI community.</p>

    <div class="row g-4 justify-content-center align-items-stretch">
      <!-- Login Form -->
      <div id="login-form" class="col-lg-5 col-md-10">
        <form class="auth-form d-flex flex-column gap-3 h-100">
          <input type="tel" placeholder="Enter Mobile Number" required>
          <button type="submit">Send OTP</button>
          <p class="mt-auto text-center"><small>New here? <a href="#" onclick="toggleForms(event)" style="color: #00b4d8; text-decoration: none;">Create Account</a></small></p>
        </form>
      </div>

      <!-- Step 1: Signup Form (Hidden by default) -->
      <div id="signup-form" class="col-lg-5 col-md-10" style="display:none;">
        <form id="signup-form-step1" class="auth-form d-flex flex-column gap-3 h-100" onsubmit="handleSignupSubmit(event)">
          <input type="email" id="signup-email" placeholder="Email" required>
          <input type="tel" id="signup-mobile" placeholder="Mobile Number" required>
          <button type="submit">Create Account</button>
          <p class="mt-auto text-center"><small>Already have an account? <a href="#" onclick="toggleForms(event)" style="color: #00b4d8; text-decoration: none;">Login</a></small></p>
        </form>
      </div>

      <!-- Step 2: OTP Verification (Using SweetAlert - No modal needed here) -->
      
      <!-- Step 3: Registration Details Form (Moved to register-details.php) -->
      <!-- This is now a separate page: register-details.php -->
      
    </div>
  </div>
</section>
</div>

  <?php
    include "./include/footer.php";
    ?>
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

        // Achievement Slider Navigation Function
        function scrollAchievementSlider(direction) {
            const track = document.querySelector('.achievement-track');
            const cardWidth = track.querySelector('.card').offsetWidth + 30; // width + gap
            const scrollAmount = direction === 'prev' ? -cardWidth : cardWidth;

            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }

        // Touch/swipe support for mobile
        let achievementStartX = 0;
        const achievementTrack = document.querySelector('.achievement-track');
        if (achievementTrack) {
            achievementTrack.addEventListener('touchstart', (e) => {
                achievementStartX = e.touches[0].clientX;
            });

            achievementTrack.addEventListener('touchend', (e) => {
                const endX = e.changedTouches[0].clientX;
                const diff = achievementStartX - endX;
                if (Math.abs(diff) > 50) {
                    scrollAchievementSlider(diff > 0 ? 'next' : 'prev');
                }
            });
        }




        // Gallery Data (dynamic content)
const galleryData = {
    1: {
        title: "Alumni Meetup 2025",
        desc: "This event had 250+ alumni gathering for networking and fun. The Annual Alumni Meetup 2025 is a grand celebration that brings together our valued alumni community. This event features incredible networking opportunities, keynote addresses from successful alumni leaders, and engaging panel discussions on career growth and entrepreneurship.",
        images: [
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978"
        ]
    },
    2: {
        title: "Networking Event",
        desc: "Top companies joined for hiring and connections. Our exclusive Networking Event brings together METI alumni professionals from diverse industries including tech, finance, healthcare, and entrepreneurship. This carefully curated event facilitates meaningful conversations between experienced mentors and emerging professionals.",
        images: [
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978"
        ]
    },
    3: {
        title: "Workshop Session",
        desc: "Hands-on workshops conducted by industry experts. Comprehensive workshop sessions designed to upskill METI alumni across multiple domains including artificial intelligence, digital marketing, leadership development, and technical excellence. Expert instructors from leading organizations conduct interactive sessions.",
        images: [
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978"
        ]
    },
    4: {
        title: "Career Fair",
        desc: "100+ job opportunities offered to alumni. The METI Career Fair is a premier recruitment event featuring over 100 leading companies actively seeking talented alumni. This event provides direct access to recruiters, HR managers, and company decision-makers. Participants explore diverse career paths and interview opportunities.",
        images: [
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978",
            "https://images.unsplash.com/photo-1552664730-d307ca884978"
        ]
    }
};

// Click Event
document.querySelectorAll('.gallery-card').forEach(card => {
    card.addEventListener('click', function () {
        const id = this.getAttribute('data-card-id');
        const data = galleryData[id];

        // Hide main content, show detail view
        document.getElementById('main-content').style.display = "none";
        document.getElementById('gallery-detail').style.display = "block";

        // Set title and description
        document.getElementById('detail-title').textContent = data.title;
        document.getElementById('detail-description').textContent = data.desc;

        // Generate image grid
        const imagesGrid = document.getElementById('detail-images-grid');
        imagesGrid.innerHTML = '';
        
        data.images.forEach(imgSrc => {
            const imgItem = document.createElement('div');
            imgItem.className = 'gallery-image-item';
            imgItem.innerHTML = `<img src="${imgSrc}" alt="${data.title}">`;
            imagesGrid.appendChild(imgItem);
        });

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});




function goBack() {
    document.getElementById('gallery-detail').style.display = "none";
    document.getElementById('main-content').style.display = "block";

    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Toggle between Login and Signup forms
function toggleForms(event) {
    event.preventDefault();
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
    }
}

// Store signup data for multi-step form
let signupData = {};
let otpTimer = null;
let otpTimeLeft = 300; // 5 minutes in seconds

// Handle Signup Form Submission (Step 1)
function handleSignupSubmit(event) {
    event.preventDefault();
    
    const email = document.getElementById('signup-email').value;
    const mobile = document.getElementById('signup-mobile').value;
    
    // Validate mobile number length
    if (mobile.length < 10) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Mobile Number',
            text: 'Please enter a valid mobile number (at least 10 digits)',
            confirmButtonColor: '#f0a500'
        });
        return;
    }
    
    // Store data for later use
    signupData.email = email;
    signupData.mobile = mobile;
    
    // Generate mock OTP (in real app, this would be sent via API)
    signupData.generatedOTP = '1234';
    
    // Reset timer
    otpTimeLeft = 300;
    
    // Hide signup form
    document.getElementById('signup-form-step1').style.display = 'none';
    
    // For demo: Show the OTP in console
    console.log('Demo OTP: ' + signupData.generatedOTP);
    
    // Show OTP popup with timer
    showOTPPopupWithTimer();
}

// Show OTP Popup with 5-minute Timer
function showOTPPopupWithTimer() {
    const lastThreeDigits = signupData.mobile.slice(-3);
    
    Swal.fire({
        title: 'Verify OTP',
        html: `<p style="color: #666; margin-bottom: 10px;">OTP has been sent to <strong>XXX-XXXX-${lastThreeDigits}</strong></p>
               <p style="color: #e74c3c; font-weight: 700; margin-bottom: 20px; font-size: 16px;">⏱️ <span id="timer-display">05:00</span></p>
               <input type="text" id="otp-input-sweet" placeholder="Enter 4-digit OTP" maxlength="4" class="form-control" style="border: 1px solid #ddd; padding: 10px; border-radius: 8px; text-align: center; font-size: 20px; letter-spacing: 5px; margin-bottom: 15px;">
               <button type="button" id="resend-otp-btn" onclick="handleResendOTP()" style="background: #00b4d8; color: white; padding: 8px 20px; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; width: 100%; font-family: 'Inter', sans-serif; transition: all 0.3s ease;">📲 Resend OTP</button>`,
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Verify OTP',
        cancelButtonText: 'Cancel',
        confirmButtonColor: '#f0a500',
        cancelButtonColor: '#ccc',
        allowOutsideClick: false,
        allowEscapeKey: false,
        didOpen: () => {
            document.getElementById('otp-input-sweet').focus();
            // Start the timer
            startOTPTimer();
        },
        preConfirm: () => {
            const otpValue = document.getElementById('otp-input-sweet').value;
            if (!otpValue) {
                Swal.showValidationMessage('Please enter OTP');
                return false;
            }
            if (otpValue.length !== 4) {
                Swal.showValidationMessage('OTP must be 4 digits');
                return false;
            }
            return otpValue;
        },
        willClose: () => {
            // Clear timer when popup closes
            if (otpTimer) {
                clearInterval(otpTimer);
                otpTimer = null;
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            verifyOTPFromAlert(result.value);
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // User cancelled - show signup form again
            if (otpTimer) {
                clearInterval(otpTimer);
                otpTimer = null;
            }
            document.getElementById('signup-form-step1').style.display = 'block';
            signupData = {};
        }
    });
}

// Start OTP Timer
function startOTPTimer() {
    if (otpTimer) {
        clearInterval(otpTimer);
    }
    
    otpTimer = setInterval(() => {
        otpTimeLeft--;
        
        // Update timer display
        const minutes = Math.floor(otpTimeLeft / 60);
        const seconds = otpTimeLeft % 60;
        const timerDisplayElement = document.getElementById('timer-display');
        if (timerDisplayElement) {
            timerDisplayElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            
            // Change color to red when time is running out
            if (otpTimeLeft <= 60) {
                timerDisplayElement.style.color = '#e74c3c';
            }
        }
        
        // Enable/disable resend button
        const resendBtn = document.getElementById('resend-otp-btn');
        if (resendBtn) {
            if (otpTimeLeft <= 0) {
                resendBtn.disabled = false;
                resendBtn.style.opacity = '1';
                resendBtn.style.cursor = 'pointer';
                clearInterval(otpTimer);
                otpTimer = null;
            }
        }
        
        // Time expired
        if (otpTimeLeft <= 0) {
            clearInterval(otpTimer);
            otpTimer = null;
            Swal.close();
            Swal.fire({
                icon: 'error',
                title: 'OTP Expired',
                text: 'Your OTP has expired. Please request a new one.',
                confirmButtonColor: '#f0a500'
            }).then(() => {
                // Reset and show form again
                document.getElementById('signup-form-step1').style.display = 'block';
                signupData = {};
            });
        }
    }, 1000);
}

// Handle Resend OTP
function handleResendOTP() {
    // Reset timer
    otpTimeLeft = 300;
    
    // Generate new OTP
    signupData.generatedOTP = '1234';
    console.log('New Demo OTP: ' + signupData.generatedOTP);
    
    // Show success message
    Swal.fire({
        icon: 'success',
        title: 'OTP Sent!',
        text: 'A new OTP has been sent to your mobile number.',
        confirmButtonColor: '#00b4d8',
        timer: 1500,
        timerProgressBar: true
    }).then(() => {
        // Re-open OTP popup with fresh timer
        showOTPPopupWithTimer();
    });
}

// Verify OTP (Step 2)
function verifyOTP() {
    const enteredOTP = document.getElementById('otp-input').value;
    
    if (enteredOTP === signupData.generatedOTP) {
        // OTP is correct - redirect to registration details page
        const email = encodeURIComponent(signupData.email);
        const mobile = encodeURIComponent(signupData.mobile);
        window.location.href = `register-details.php?email=${email}&mobile=${mobile}`;
    } else {
        alert('Incorrect OTP. Please try again.');
        document.getElementById('otp-input').value = '';
        document.getElementById('otp-input').focus();
    }
}

// Verify OTP from SweetAlert
function verifyOTPFromAlert(enteredOTP) {
    if (enteredOTP === signupData.generatedOTP) {
        // OTP is correct - show success message
        if (otpTimer) {
            clearInterval(otpTimer);
            otpTimer = null;
        }
        
        Swal.fire({
            icon: 'success',
            title: 'OTP Verified!',
            text: 'Redirecting to complete your profile...',
            confirmButtonColor: '#00b4d8',
            timer: 1500,
            timerProgressBar: true,
            didClose: () => {
                // Redirect to registration details page
                const email = encodeURIComponent(signupData.email);
                const mobile = encodeURIComponent(signupData.mobile);
                window.location.href = `register-details.php?email=${email}&mobile=${mobile}`;
            }
        });
    } else {
        // OTP is incorrect - show error popup
        Swal.fire({
            icon: 'error',
            title: '❌ Incorrect OTP',
            html: `<p style="color: #666;">The OTP you entered is incorrect.</p>
                   <p style="color: #e74c3c; font-weight: 600;">Please try again.</p>`,
            confirmButtonText: 'Try Again',
            confirmButtonColor: '#f0a500',
            allowOutsideClick: false,
            allowEscapeKey: false
        }).then(() => {
            // Show OTP popup again with remaining time
            showOTPPopupWithTimer();
        });
    }
}

// Resend OTP
function resendOTP(event) {
    event.preventDefault();
    handleResendOTP();
}
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="./js/common.js"></script>
</body>
</html>
