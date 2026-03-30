<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METI Alumni Network</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        .achievement-card-hover {
            transition: all 0.3s ease;
        }

        .achievement-card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(13, 110, 253, 0.15) !important;
        }

        .bg-primary-light {
            background-color: rgba(13, 110, 253, 0.1) !important;
        }

        .bg-success-light {
            background-color: rgba(25, 135, 84, 0.1) !important;
        }

        .bg-info-light {
            background-color: rgba(13, 202, 240, 0.1) !important;
        }

        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .alumni-highlights-grid {
            align-items: stretch;
        }

        .news-updates-panel {
            margin-left: auto;
            height: 100%;
            max-width: 420px;
            background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid rgba(30, 58, 95, 0.12);
            border-radius: 20px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
            overflow: hidden;
        }

        .news-updates-header {
            display: flex;
            align-items: center;
            gap: 100px;
            padding: 18px;
        }

        .news-updates-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 12px;
            border-radius: 999px;
            background: rgba(0, 180, 216, 0.12);
            color: #1e3a5f;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .news-updates-scroll {
            height: 430px;
            overflow: hidden;
            border-top: 1px solid rgba(30, 58, 95, 0.08);
            border-bottom: 1px solid rgba(30, 58, 95, 0.08);
        }

        .news-updates-track {
            animation: alumniNewsScroll 16s linear infinite;
        }

        .news-updates-panel:hover .news-updates-track {
            animation-play-state: paused;
        }

        .news-updates-table {
            width: 100%;
            margin: 0;
        }

        .news-updates-table tbody td {
            padding: 16px 20px;
            vertical-align: top;
            color: #475569;
            border-color: rgba(30, 58, 95, 0.08);
        }

        .news-updates-table tbody tr:nth-child(even) {
            background: rgba(241, 245, 249, 0.7);
        }

        .news-update-title {
            display: block;
            margin-bottom: 4px;
            color: #1e3a5f;
            font-weight: 700;
        }

        .news-update-meta {
            color: #64748b;
            font-size: 0.88rem;
            white-space: nowrap;
        }

        @keyframes alumniNewsScroll {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-50%);
            }
        }

        @media (max-width: 991.98px) {
            .news-updates-panel {
                margin-right: auto;
            }
        }

        /* Achievement Slider Styles */
        .achievement-slider {
            position: relative;
            margin-bottom: 20px;
        }

        .achievement-track {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 20px 10px;
            scrollbar-width: none;
        }

        .achievement-track::-webkit-scrollbar {
            display: none;
        }

        .achievement-track .card {
            min-width: 320px;
            max-width: 320px;
            flex-shrink: 0;
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            color: #0d6efd;
            font-size: 18px;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .slider-nav:hover {
            background: #0d6efd;
            color: white;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 20px rgba(13, 110, 253, 0.3);
        }

        .slider-prev {
            left: -25px;
        }

        .slider-next {
            right: -25px;
        }

        @media (max-width: 768px) {
            .slider-nav {
                width: 38px;
                height: 38px;
                font-size: 16px;
            }

            .slider-prev {
                left: 5px;
            }

            .slider-next {
                right: 5px;
            }

            .achievement-track {
                padding: 20px 45px;
            }
        }
    </style>
</head>

<body>
  <?php
    include "./include/navbar.php";
    ?>
    <?php
  $topTabsConfig = [
    'id' => 'top-tabs-section',
    'title' => 'Alumni Network',
    'image' => './Assets/577a7723-2643x1762.jpg',
    'image_alt' => 'METI campus banner',
    'active_tab' => 'Alumni',
  ];
  ?>
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


<!-- 🔹 GALLERY -->
<section class="bg-light py-5 gallery">
    <div class="container">
        <h2 class="text-center section-title">Gallery</h2>
        <div class="row g-3">
            <div class="col-md-3"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"></div>
            <div class="col-md-3"><img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678"></div>
            <div class="col-md-3"><img src="https://images.unsplash.com/photo-1515169067865-5387ec356754"></div>
            <div class="col-md-3"><img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7"></div>
        </div>
    </div>
</section>

<!-- 🔹 SIGNIN / SIGNUP -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Join Alumni Network</h2>
        <p>Sign in or create an account to stay connected.</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <input type="email" class="form-control mb-2" placeholder="Email">
                <input type="password" class="form-control mb-2" placeholder="Password">
                <button class="btn btn-primary w-100">Login</button>
            </div>
        </div>

        <p class="mt-3">New here? <a href="#">Signup</a></p>
    </div>
</section>


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
</script>
<script src="./js/common.js"></script>
</body>
</html>
