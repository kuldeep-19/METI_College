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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/placement.css">
</head>

<body>

    <?php include "./include/navbar.php"; ?>

    <!-- HERO SECTION -->
    <section class="placement-hero-new">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="placement-badge mb-3" data-aos="fade-down" data-aos-delay="200">
                        <i class="fas fa-check-circle me-2"></i> 100% PLACEMENT RECORD
                    </div>
                    <h1 class="display-3 fw-bold text-navy mb-4">Empowering Your <span class="text-teal">Maritime Career</span> Success</h1>
                    <p class="lead text-muted mb-5">METI College is proud to shape the next generation of marine engineers with a proven history of excellence. Our intensive training and global industry partnerships guarantee that every cadet is career-ready for the world's leading shipping lines.</p>

                    <div class="row g-4 mb-5">
                        <div class="col-sm-4 col-6">
                            <div class="mini-stat">
                                <h3 class="fw-bold text-navy mb-0">100%</h3>
                                <p class="text-muted small mb-0">Record</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="mini-stat">
                                <h3 class="fw-bold text-navy mb-0">50+</h3>
                                <p class="text-muted small mb-0">Recruiters</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="mini-stat">
                                <h3 class="fw-bold text-navy mb-0">5000+</h3>
                                <p class="text-muted small mb-0">Alumni</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#recruitment" class="btn btn-teal px-5 py-3 rounded-pill fw-bold text-white shadow-lg">Explore Recruitment</a>
                        <a href="apply-now.php" class="btn btn-outline-navy px-5 py-3 rounded-pill fw-bold">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="hero-image-wrapper">
                        <div class="image-stack">
                            <img src="./assets/image/students-2000x1279.jpg" class="img-fluid rounded-4 shadow-premium main-img" alt="METI Students">
                            <div class="floating-card p-3 shadow-lg rounded-3" data-aos="zoom-in" data-aos-delay="400">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-circle bg-teal text-white">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-0">ISO 9001:2015</h6>
                                        <p class="text-muted small mb-0">Quality Training</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- RECRUITERS SLIDER -->
    <section class="partners-section-new py-5">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="placement-badge mb-3">
                    <i class="fas fa-globe me-2"></i> GLOBAL NETWORK
                </div>
                <h2 class="display-5 fw-bold text-navy">Our Top Partners in Recruitment</h2>
                <p class="lead text-muted">Leading global shipping companies that trust METI for their future officers.</p>
            </div>

            <div class="logo-slider mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="logo-track">
                    <?php
                    $partners = [
                        ["name" => "Maersk Line", "logo" => "Assets/image/maersk-advrt-2-886x1083.jpg"],
                        ["name" => "Synergy Group", "logo" => "Assets/partner-log/synergy1-355x352.jpg"],
                        ["name" => "Bernhard Schulte", "logo" => "Assets/partner-log/bsm1-1-173x100.jpg"],
                        ["name" => "Fleet Management", "logo" => "Assets/partner-log/fleet-logo1-256x97.jpg"],
                        ["name" => "d'Amico", "logo" => "Assets/partner-log/damico-logo1-195x231.jpg"],
                        ["name" => "Elegant Marine", "logo" => "Assets/partner-log/elegant-logo1-311x114.jpg"],
                        ["name" => "K Line", "logo" => "Assets/partner-log/klsm1-256x248.jpg"],
                        ["name" => "Sima Marine", "logo" => "Assets/partner-log/sima-marine-logo-new-126x98.jpg"],
                        ["name" => "Wilhelmsen", "logo" => "Assets/partner-log/wilhelmsen1-506x260.jpg"],
                    ];
                    // Repeat list for smooth loop
                    $display_partners = array_merge($partners, $partners);
                    foreach ($display_partners as $partner):
                    ?>
                        <div class="partner-card-modern">
                            <div class="partner-inner">
                                <?php if ($partner['logo'] != ""): ?>
                                    <img src="<?= $partner['logo'] ?>" alt="<?= $partner['name'] ?>" class="partner-logo-img mb-3">
                                <?php else: ?>
                                    <i class="fa-solid fa-anchor mb-3 text-teal opacity-50"></i>
                                <?php endif; ?>
                                <h6 class="fw-bold mb-0 text-navy"><?= $partner['name'] ?></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SESSION RECORDS SECTION -->
    <section class="session-records py-5 bg-light">
        <div class="container py-4">
            <?php
            // Centralized Placement Data for Sessions
            $placement_sessions = [
                "2023-24" => [
                    "rate" => 100,
                    "placed" => 40,
                    "companies" => 15,
                    "description" => "Full placement achieved for the entire batch.",
                    "recruiters" => ["Maersk Line", "Synergy Group", "Anglo-Eastern", "Bernhard Schulte"],
                    "positions" => ["Junior Engineer", "Fifth Engineer", "Engine Cadet"],
                    "students" => [
                        ["name" => "Adarsh S", "pos" => "Junior Engineer", "company" => "Maersk Line", "img" => "", "logo" => "Assets/image/maersk-advrt-2-886x1083.jpg"],
                        ["name" => "Rahul K", "pos" => "Fifth Engineer", "company" => "Synergy Group", "img" => "", "logo" => "Assets/partner-log/synergy1-355x352.jpg"],
                        ["name" => "Sneha M", "pos" => "Engine Cadet", "company" => "Anglo-Eastern", "img" => "", "logo" => ""],
                        ["name" => "Nitin Kumar", "pos" => "Junior Engineer", "company" => "Bernhard Schulte", "img" => "", "logo" => "Assets/partner-log/bsm1-1-173x100.jpg"]
                    ]
                ],
                "2022-23" => [
                    "rate" => 98,
                    "placed" => 38,
                    "companies" => 12,
                    "description" => "High-performance placement for the 2022-23 period.",
                    "recruiters" => ["Fleet Management", "d'Amico Shipping", "MSC Shipping", "Chevron"],
                    "positions" => ["Junior Engineer", "Marine Cadet", "Trainee Engine Officer"],
                    "students" => [
                        ["name" => "Karthik R", "pos" => "Junior Engineer", "company" => "Fleet Management", "img" => "", "logo" => "Assets/partner-log/fleet-logo1-256x97.jpg"],
                        ["name" => "Arjun V", "pos" => "Marine Cadet", "company" => "d'Amico Shipping", "img" => "", "logo" => "Assets/partner-log/damico-logo1-195x231.jpg"],
                        ["name" => "Deepak P", "pos" => "Trainee Officer", "company" => "MSC Shipping", "img" => "", "logo" => ""],
                        ["name" => "Siddharth J", "pos" => "Junior Engineer", "company" => "Chevron", "img" => "", "logo" => ""]
                    ]
                ],
                "2021-22" => [
                    "rate" => 100,
                    "placed" => 35,
                    "companies" => 10,
                    "description" => "Successful placement of all candidates in global shipping.",
                    "recruiters" => ["Teekay Shipping", "Mitsui O.S.K.", "V.Ships", "Torm Shipping"],
                    "positions" => ["TME (Trainee Marine Engineer)", "Junior Engineer", "Apprentice Engineer"],
                    "students" => [
                        ["name" => "Vivek G", "pos" => "TME", "company" => "Teekay Shipping", "img" => "", "logo" => ""],
                        ["name" => "Abhishek T", "pos" => "Junior Engineer", "company" => "Mitsui O.S.K.", "img" => "", "logo" => ""],
                        ["name" => "Manoj P", "pos" => "Engine Officer", "company" => "V.Ships", "img" => "", "logo" => ""],
                        ["name" => "Anish R", "pos" => "Junior Engineer", "company" => "Torm Shipping", "img" => "", "logo" => ""]
                    ]
                ]
            ];
            ?>

            <div class="text-center mb-5" data-aos="fade-up">
                <div class="placement-badge mb-3">
                    <i class="fas fa-history me-2"></i> TRACK RECORD
                </div>
                <h2 class="display-5 fw-bold text-navy">Placement Records by Session</h2>
                <p class="lead text-muted">Select an academic session to view detailed placement performance and company insights.</p>
            </div>

            <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap" data-aos="fade-up">
                <?php
                $is_first = true;
                foreach ($placement_sessions as $year => $data):
                ?>
                    <button class="btn btn-session <?= $is_first ? 'active' : '' ?>" data-session="<?= $year ?>">Session <?= $year ?></button>
                <?php
                    $is_first = false;
                endforeach;
                ?>
            </div>

            <div class="session-content-wrapper" data-aos="fade-up">
                <?php
                $is_first = true;
                foreach ($placement_sessions as $year => $data):
                ?>
                    <div class="session-row-item session-record-details <?= $is_first ? 'active' : '' ?>" id="session-<?= $year ?>">
                        <div class="row g-4 mb-5">
                            <div class="col-lg-4">
                                <div class="record-card h-100 text-center">
                                    <h5 class="fw-bold mb-4 text-navy">Placement Rate</h5>
                                    <div class="circular-progress-wrapper mb-3">
                                        <div class="circular-progress" style="--percent: <?= $data['rate'] ?>">
                                            <span class="percent text-navy fw-bold h4"><?= $data['rate'] ?>%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center gap-2 mt-2">
                                        <span class="session-stat-badge bg-teal-light"><i class="fas fa-users me-1"></i> <?= $data['placed'] ?> Placed</span>
                                        <span class="session-stat-badge bg-navy-light"><i class="fas fa-building me-1"></i> <?= $data['companies'] ?> Cos.</span>
                                    </div>
                                    <p class="text-muted small mt-3"><?= $data['description'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="record-card h-100">
                                    <h5 class="fw-bold mb-4 text-navy">Top Recruiters</h5>
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($data['recruiters'] as $rec): ?>
                                            <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-teal me-2"></i> <?= $rec ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="record-card h-100">
                                    <h5 class="fw-bold mb-4 text-navy">Key Positions</h5>
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($data['positions'] as $pos): ?>
                                            <li class="mb-3 d-flex align-items-center"><i class="fas fa-anchor text-navy opacity-50 me-2"></i> <?= $pos ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold text-navy mb-4 text-center"><i class="fas fa-graduation-cap me-2 text-teal"></i> Student Success Highlights</h5>
                        <div class="student-swiper-container position-relative">
                            <div class="swiper student-swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($data['students'] as $st): ?>
                                        <div class="swiper-slide">
                                            <div class="student-success-card">
                                                <div class="student-img-wrapper mb-3">
                                                    <?php if ($st['img']): ?>
                                                        <img src="<?= $st['img'] ?>" alt="<?= $st['name'] ?>">
                                                    <?php elseif ($st['logo']): ?>
                                                        <img src="<?= $st['logo'] ?>" alt="<?= $st['company'] ?>" class="logo-fallback">
                                                    <?php else: ?>
                                                        <i class="fas fa-user-tie fa-2x text-muted opacity-50"></i>
                                                    <?php endif; ?>
                                                </div>
                                                <h6 class="fw-bold mb-1 card-student-name"><?= $st['name'] ?></h6>
                                                <p class="small text-muted mb-0 card-student-pos"><?= $st['pos'] ?></p>
                                                <div class="company-tag mt-2"><?= $st['company'] ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Add Pagination if needed -->
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                            <!-- Add Navigation Arrows -->
                            <div class="swiper-button-next student-swiper-next"></div>
                            <div class="swiper-button-prev student-swiper-prev"></div>
                        </div>
                    </div>
                <?php
                    $is_first = false;
                endforeach;
                ?>
            </div>
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/placement.js"></script>
</body>

</html>