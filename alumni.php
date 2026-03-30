<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METI Alumni Network</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d');
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .cta {
            background: #0d6efd;
            color: white;
            padding: 40px;
            text-align: center;
        }
    </style>
</head>

<body>
  <?php
    include "./include/navbar.php";
    ?>
<!-- 🔹 HERO SECTION -->
<section class="hero">
    <div class="container">
        <h1>METI Alumni Network</h1>
        <p>Stay Connected | Grow Together | Build Opportunities</p>
        <a href="#" class="btn btn-primary btn-lg">Join Now</a>
    </div>
</section>

<!-- 🔹 ABOUT SECTION -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">About Alumni Network</h2>
        <p>
            METI Alumni Network connects former students to share knowledge,
            explore opportunities, and support each other’s professional growth.
        </p>
        <div class="row mt-4">
            <div class="col-md-4">
                <i class="fa fa-network-wired fa-2x text-primary"></i>
                <h5>Networking</h5>
                <p>Connect with professionals and expand your career.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-briefcase fa-2x text-primary"></i>
                <h5>Opportunities</h5>
                <p>Discover jobs, internships, and collaborations.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-users fa-2x text-primary"></i>
                <h5>Community Support</h5>
                <p>Be part of a strong alumni community.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 ACHIEVEMENTS -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center section-title">Alumni Achievements</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Rahul Sharma</h5>
                    <p>Placed at Google as Software Engineer.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Neha Verma</h5>
                    <p>Started her own successful startup.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Amit Singh</h5>
                    <p>Working as Data Scientist in USA.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 NEWS & UPDATES -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">News & Updates</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Alumni Meet 2025</h5>
                    <p>Annual meetup organized successfully.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>New Job Portal</h5>
                    <p>Exclusive job portal launched for alumni.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Mentorship Program</h5>
                    <p>Senior alumni guiding fresh graduates.</p>
                </div>
            </div>
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

<!-- 🔹 CTA -->
<section class="cta">
    <h3>Be a Part of METI Alumni Community</h3>
    <p>Reconnect, learn, and grow together.</p>
    <a href="#" class="btn btn-light">Register Now</a>
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
</script>
</body>
</html>