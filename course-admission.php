<?php

/**
 * Course & Admission Page
 * METI College Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course & Admission | METI</title>
    <!-- CSS Includes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/courseadmission.css">
    <!-- JS Includes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php include "./include/navbar.php"; ?>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container" data-aos="fade-up">
            <h1 class="mb-3">Course & Admission</h1>
            <p class="lead opacity-75">Start your journey in maritime excellence with CSL METI.</p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-5">
        <div class="container">

            <div class="main-wrapper">

                <!-- SIDEBAR -->
                <div class="floating-sidebar" data-aos="fade-right">
                    <div class="sidebar-item active" data-section="courses">
                        <i class="fa-solid fa-book-open"></i> Our Courses
                    </div>
                    <div class="sidebar-item" data-section="process">
                        <i class="fa-solid fa-arrows-to-dot"></i> Admission Process
                    </div>
                    <div class="sidebar-item" data-section="details">
                        <i class="fa-solid fa-list-check"></i> Admission Details
                    </div>
                    <div class="sidebar-item" data-section="fees">
                        <i class="fa-solid fa-credit-card"></i> Fee Payment
                    </div>
                </div>

                <!-- CONTENT AREA -->
                <div class="content-container" data-aos="fade-up">

                    <!-- OUR COURSES SECTION -->
                    <div id="courses" class="section-content active">
                        <div class="modern-card mb-4">
                            <h2 class="fw-bold text-navy mb-3">Professional Maritime Courses</h2>
                            <p class="text-muted">Explore our industry-leading training programs designed to prepare the next generation of Marine Engineers and Officers for global maritime careers.</p>

                            <div class="sub-tabs-nav mt-4">
                                <div class="sub-tab-btn active" data-sub="pre-sea">Pre-Sea Courses</div>
                                <div class="sub-tab-btn" data-sub="post-sea">Post-Sea Courses</div>
                            </div>

                            <!-- PRE-SEA CONTENT -->
                            <div id="pre-sea" class="course-sub-content active">
                                <div class="row g-4">
                                    <!-- GME COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/gme.png" alt="GME Course">
                                                <div class="course-category-badge">Engineering</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Graduate Marine Engineering (GME)</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                    <div class="eligibility-text">
                                                        <strong>Eligibility:</strong> B.E/B.Tech (Mech / Naval Arch)
                                                    </div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-clock"></i>
                                                    <div class="eligibility-text">Duration: 1 Year Residential</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <div class="rich-info-container">
                                                    <div class="info-grid">
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Overview</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-circle"></i> 12 Months Fully Residential</li>
                                                                <li><i class="fa-solid fa-circle"></i> 60% Practical 'On-the-job' Training</li>
                                                                <li><i class="fa-solid fa-circle"></i> Mandatory for Class IV COC</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Academic Categories</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-1"></i> B.E/B.Tech Mechanical Engineering</li>
                                                                <li><i class="fa-solid fa-2"></i> Mechanical Streams (Automation/Elec)</li>
                                                                <li><i class="fa-solid fa-3"></i> Naval Architecture Streams</li>
                                                                <li><i class="fa-solid fa-4"></i> Marine Eng (Non-DGS/AICTE)</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Medical Standards</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-arrows-up-down"></i> Height: 157cm Min</li>
                                                                <li><i class="fa-solid fa-eye"></i> No Color Blindness</li>
                                                                <li><i class="fa-solid fa-ear-listen"></i> Good Hearing (ILO Norms)</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Requirements</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-passport"></i> Valid Indian Passport</li>
                                                                <li><i class="fa-solid fa-calendar-check"></i> Age: Max 28 years</li>
                                                                <li><i class="fa-solid fa-language"></i> English: 50% in X / XII / Degree</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="important-note">
                                                        <i class="fa-solid fa-circle-info me-2"></i>
                                                        <strong>Sponsorship:</strong> A guarantee letter from a Shipping Company / Manning Agency is required for 6 months on-board training.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- OCTCO COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/octco.png" alt="OCTCO Course">
                                                <div class="course-category-badge">Tanker</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Oil & Chemical Tanker Cargo Operation (OCTCO)</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-shield-halved"></i>
                                                    <div class="eligibility-text">
                                                        <strong>Eligibility:</strong> 10th Pass + BST
                                                    </div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-clock"></i>
                                                    <div class="eligibility-text">Duration: 6 Days</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <div class="rich-info-container">
                                                    <div class="info-grid">
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Overview</span>
                                                            <p class="small text-muted mb-0">Specialized training for personnel with duties on oil and chemical tankers.</p>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Eligibility</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-check"></i> 10th Pass</li>
                                                                <li><i class="fa-solid fa-check"></i> Valid BST Certificate</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Course Details</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-calendar"></i> Duration: 6 Days</li>
                                                                <li><i class="fa-solid fa-certificate"></i> DGS Approved</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Requirements</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-file-medical"></i> Medical Fitness</li>
                                                                <li><i class="fa-solid fa-id-card"></i> Valid INDoS No.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- GTCO COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/gtco.png" alt="GTCO Course">
                                                <div class="course-category-badge">Tanker</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Liquefied Gas Tanker Operation (GTCO)</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-flask-vial"></i>
                                                    <div class="eligibility-text">
                                                        <strong>Eligibility:</strong> 10th Pass + BST
                                                    </div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-clock"></i>
                                                    <div class="eligibility-text">Duration: 4.5 Days</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <div class="rich-info-container">
                                                    <div class="info-grid">
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Overview</span>
                                                            <p class="small text-muted mb-0">Mandatory training for safe cargo operations on liquefied gas tankers.</p>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Eligibility</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-check"></i> 10th Pass</li>
                                                                <li><i class="fa-solid fa-check"></i> Valid BST Certificate</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Course Details</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-calendar"></i> Duration: 4.5 Days</li>
                                                                <li><i class="fa-solid fa-certificate"></i> DGS Approved</li>
                                                            </ul>
                                                        </div>
                                                        <div class="info-sub-section">
                                                            <span class="info-sub-label">Requirements</span>
                                                            <ul class="info-value-list">
                                                                <li><i class="fa-solid fa-file-medical"></i> Medical Fitness</li>
                                                                <li><i class="fa-solid fa-id-card"></i> Valid INDoS No.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BST COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/bst.png" alt="BST Course">
                                                <div class="course-category-badge">Basic Safety</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Basic Safety Training (BST)</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-person-breastfeeding"></i>
                                                    <div class="eligibility-text">
                                                        <strong>Eligibility:</strong> 10th Pass
                                                    </div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-clock"></i>
                                                    <div class="eligibility-text">Duration: 12 Days</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <p class="course-desc-content">
                                                    Mandatory foundation course for all maritime professionals, covering personal survival techniques, fire prevention, elementary first aid, and social responsibilities.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- POST-SEA CONTENT -->
                            <div id="post-sea" class="course-sub-content">
                                <div class="row g-4">
                                    <!-- AFF COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/aff.png" alt="Advance Fire Fighting">
                                                <div class="course-category-badge">Safety</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Advance Fire Fighting</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-fire-extinguisher"></i>
                                                    <div class="eligibility-text">Mandatory course for sea personnel</div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-calendar-day"></i>
                                                    <div class="eligibility-text">Duration: 5 Days</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <p class="course-desc-content">
                                                    Advanced Fire Fighting provides training for masters and officers to take charge of fire-fighting operations. It covers fire control, organization of fire parties, and use of advanced fire detection systems.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- MFA COURSE -->
                                    <div class="col-md-6">
                                        <div class="course-card-modern">
                                            <div class="course-img-wrapper">
                                                <img src="./assets/image/courses/mfa.png" alt="Medical First Aid">
                                                <div class="course-category-badge">Medical</div>
                                            </div>
                                            <div class="eligibility-meta">
                                                <h4 class="course-title">Medical First Aid</h4>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-hand-holding-medical"></i>
                                                    <div class="eligibility-text">Comprehensive first aid training</div>
                                                </div>
                                                <div class="eligibility-item">
                                                    <i class="fa-solid fa-calendar-day"></i>
                                                    <div class="eligibility-text">Duration: 3 Days</div>
                                                </div>
                                            </div>
                                            <div class="course-footer">
                                                <button class="btn-course-details border-0" onclick="toggleDetails(this)">Course Info</button>
                                                <a href="apply-now.php" class="btn-course-apply text-decoration-none">Apply Now</a>
                                            </div>
                                            <div class="course-brief-desc">
                                                <p class="course-desc-content">
                                                    Medical First Aid training is essential for seafarers to provide immediate medical care in case of accidents or illnesses on board. It covers basic life support, resuscitation, and handling of medical emergencies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ADMISSION PROCESS SECTION -->
                    <div id="process" class="section-content">
                        <div class="modern-card">
                            <h2 class="fw-bold text-navy mb-4">Admission Journey</h2>
                            <div class="timeline-item">
                                <h5 class="fw-bold">Step 1: Application</h5>
                                <p class="text-muted">Register online and upload required academic documents.</p>
                            </div>
                            <div class="timeline-item">
                                <h5 class="fw-bold">Step 2: Entrance Exam</h5>
                                <p class="text-muted">Appear for the Common Entrance Test conducted by IMU.</p>
                            </div>
                            <div class="timeline-item">
                                <h5 class="fw-bold">Step 3: Verification</h5>
                                <p class="text-muted">Document verification and background check at our campus.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ADMISSION DETAILS SECTION -->
                    <div id="details" class="section-content">
                        <div class="modern-card">
                            <h2 class="fw-bold text-navy mb-4">General Admission Details</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-3 bg-light rounded-3">
                                        <h6 class="fw-bold text-navy"><i class="fa fa-id-card me-2"></i>Age Criteria</h6>
                                        <p class="small mb-0">Maximum 28 years (relaxable for SC/ST candidates).</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light rounded-3">
                                        <h6 class="fw-bold text-navy"><i class="fa fa-heart-pulse me-2"></i>Medical Fitness</h6>
                                        <p class="small mb-0">Must be cleared by DGS approved medical examiners.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FEE PAYMENT SECTION -->
                    <div id="fees" class="section-content">
                        <div class="modern-card">
                            <h2 class="fw-bold text-navy mb-4">Fee Payment Options</h2>
                            <p class="text-muted mb-4">We offer multiple convenient channels for fee remittance to ensure a hassle-free admission process.</p>

                            <div class="list-group list-group-flush border-top">
                                <div class="list-group-item py-3">
                                    <h6 class="fw-bold mb-1 text-navy">Online Net Banking / UPI</h6>
                                    <p class="small text-muted mb-0">Instant payment through our secure payment gateway.</p>
                                </div>
                                <div class="list-group-item py-3">
                                    <h6 class="fw-bold mb-1 text-navy">Demand Draft (DD)</h6>
                                    <p class="small text-muted mb-0">Favoring "Cochin Shipyard Limited" payable at Kochi.</p>
                                </div>
                                <div class="list-group-item py-3">
                                    <h6 class="fw-bold mb-1 text-navy">Direct NEFT/RTGS</h6>
                                    <p class="small text-muted mb-0">Bank transfer directly to the CSL Corporate account.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <?php include "./include/footer.php"; ?>

    <script src="./js/common.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <script src="./js/courseadmission.js"></script>
</body>

</html>