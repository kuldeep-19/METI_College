<?php
/**
 * Placement & Career Page
 * METI College Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement & Careers | METI</title>
    <!-- CSS Includes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/placement.css">
</head>

<body>

    <?php include "./include/navbar.php"; ?>

    <!-- HERO SECTION -->
    <section class="placement-hero">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3" data-aos="fade-down">Charting Your Success</h1>
            <p class="lead opacity-75 mb-4" data-aos="fade-up">Building global maritime careers through excellence in training and placement.</p>
            <div data-aos="zoom-in">
                <a href="#recruitment" class="btn btn-teal px-5 py-3 rounded-pill fw-bold text-white shadow">Explore Opportunities</a>
            </div>
        </div>
    </section>

    <!-- STATISTICS SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4 text-center">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="stats-card">
                        <span class="stats-number" data-target="100" data-suffix="%">0</span>
                        <span class="stats-label">Placement Record</span>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-card">
                        <span class="stats-number" data-target="50" data-suffix="+">0</span>
                        <span class="stats-label">Top Recruiters</span>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-card">
                        <span class="stats-number" data-target="5000" data-suffix="+">0</span>
                        <span class="stats-label">Global Alumni</span>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-card">
                        <span class="stats-number" data-target="30" data-suffix="+">0</span>
                        <span class="stats-label">Years Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY PLACEMENT SECTION -->
    <section id="recruitment" class="py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold text-navy mb-4">Why Global Giants Choose METI Engineers?</h2>
                    <div class="d-flex gap-3 mb-4">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-anchor fa-2x text-teal"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Practical Mastery</h5>
                            <p class="text-muted">60% of our curriculum is hands-on 'On-the-job' training at the world-class Cochin Shipyard.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-4">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-ship fa-2x text-teal"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Rigorous Selection</h5>
                            <p class="text-muted">Only the top mechanical engineers are selected through a multi-stage entrance process.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-shield-halved fa-2x text-teal"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Holistic Discipline</h5>
                            <p class="text-muted">Fully residential training ensures cadets develop the discipline and leadership required for command.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="modern-card p-0 overflow-hidden">
                        <img src="./assets/image/students-2000x1279.jpg" class="img-fluid" alt="Training at METI">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECRUITERS GRID -->
    <section class="py-5 bg-navy text-white">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our Top Partners in Recruitment</h2>
                <p class="opacity-75">Leading global shipping companies that trust METI for their future officers.</p>
            </div>
            <div class="row g-4">
                <?php
                $recruiters = ["Maersk Line", "Synergy Group", "Anglo-Eastern", "MSC Shipping", "Bernhard Schulte", "Teekay Shipping", "Chevron", "Mitsui O.S.K."];
                foreach ($recruiters as $index => $name):
                    $delay = $index * 50;
                ?>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="<?= $delay ?>">
                    <div class="recruiter-logo">
                        <span class="fw-bold text-navy opacity-50"><?= $name ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CAREER ROADMAP -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-navy">Global Career Progression</h2>
                <p class="text-muted">From Cadet to Captain: The METI Roadmap</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="career-step" data-aos="fade-right">
                        <div class="step-count">1</div>
                        <h4 class="fw-bold text-navy">12 Months Pre-Sea Training</h4>
                        <p class="text-muted mb-0">Intensive residential training with 60% workshop and afloat experience at METI, CSL.</p>
                    </div>
                    <div class="career-step scale-up" data-aos="fade-left">
                        <div class="step-count">2</div>
                        <h4 class="fw-bold text-navy">6 Months On-Board Training</h4>
                        <p class="text-muted mb-0">Practical shipboard training as a Junior Engineer with sponsored shipping lines.</p>
                    </div>
                    <div class="career-step" data-aos="fade-right">
                        <div class="step-count">3</div>
                        <h4 class="fw-bold text-navy">MEO Class IV COC</h4>
                        <p class="text-muted mb-0">Appear for DGS examination and become a designated Officer in Charge of an Engineering Watch.</p>
                    </div>
                    <div class="career-step" data-aos="fade-left">
                        <div class="step-count">4</div>
                        <h4 class="fw-bold text-navy">Chief Engineer Rank</h4>
                        <p class="text-muted mb-0">Professional advancement through subsequent COCs (Class II & Class I) to the highest engineering command.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-teal text-white text-center">
        <div class="container py-4" data-aos="zoom-in">
            <h2 class="display-5 fw-bold mb-4">Ready to Start Your Journey?</h2>
            <p class="lead mb-5">Admissions are open for our upcoming batch. Fast track your maritime career today.</p>
            <a href="apply-now.php" class="btn btn-navy btn-lg px-5 py-3 rounded-pill fw-bold text-white shadow">Apply for Admission</a>
        </div>
    </section>

    <?php include "./include/footer.php"; ?>

    <!-- JS Includes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="./js/placement.js"></script>
</body>

</html>
