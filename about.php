<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/aboutus.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Nav-Bar Add here -->

    <?php
    include "./include/navbar.php";
    ?>
    <section>
        <div class="py-5" style="background: linear-gradient(135deg,#eef2ff,#f8fafc);">

            <div class="container">

                <!-- TOP BUTTONS -->
                <div id="top-tabs-section" class="d-flex justify-content-center flex-wrap gap-3 mb-4">

                    <button class="top-tab active" data-tab="about">
                        <i class="fa fa-building me-2"></i>About METI
                    </button>

                    <button class="top-tab" data-tab="whyus">
                        <i class="fa fa-graduation-cap me-2"></i>Why Us
                    </button>

                    <button class="top-tab" data-tab="staff-faculty">
                        <i class="fa fa-eye me-2"></i>Staff & Faculty
                    </button>

                    <button class="top-tab" data-tab="facilities">
                        <i class="fa fa-bullseye me-2"></i>Facilities
                    </button>

                </div>

                <!-- CONTENT AREA -->

                <div class="tab-content-custom active" id="about">

                    <div class="glass-card p-5 mb-5" data-aos="fade-up">
                        <div class="left-overview">
                            <h2 class="section-title mb-4">
                                <i class="fa-solid fa-info-circle me-2 text-primary"></i>Overview
                            </h2>
                            <p class="lead mb-4" style="color: #6b7b8d; line-height: 1.8;">Cochin Shipyard was
                                incorporated in the year 1972 as a fully owned Government of India company. In the last
                                three decades the company has emerged as a forerunner in the Indian Shipbuilding & Ship
                                repair industry. This yard can build and repair the largest vessels in
                                India.<br /><br />
                                The Marine Engineering Training Institute (METI) of the Cochin Shipyard Ltd. was set up
                                as a division of CSL in September 1993 as recommended by the Expert Committee on
                                Maritime Education and Training, constituted by the Government of India in 1992. The
                                institute is approved by the Director General of Shipping (DGS). Govt. of
                                India.<br /><br />

                                <strong style="color: #1e3a5f;">Grade A1</strong> by Lloyd's Register.
                            </p>
                        </div>
                        <div class="row text-center g-4">
                            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="50">
                                <div class="stat-card h-100">
                                    <i class="fa fa-star fa-3x text-warning mb-3"></i>
                                    <h4 class="fw-bold text-primary">Grade A1</h4>
                                    <p class="text-muted">Lloyd's Rating</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                                <div class="stat-card h-100">
                                    <i class="fa fa-graduation-cap fa-3x text-success mb-3"></i>
                                    <h4 class="fw-bold text-success">160 Seats</h4>
                                    <p class="text-muted">Annual GME Capacity</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="150">
                                <div class="stat-card h-100">
                                    <i class="fa fa-users fa-3x text-info mb-3"></i>
                                    <h4 class="fw-bold text-info">World-Class</h4>
                                    <p class="text-muted">Faculty Team</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card p-5 mb-5" data-aos="fade-up" data-aos-delay="100">

                        <h2 class="content-title mb-4">
                            <i class="fa fa-history me-2 text-success"></i>Our History
                        </h2>
                        <p class="lead mb-5" style="color: #6b7b8d; line-height: 1.8; font-size: 16px;">
                            Established in 1993 as CSL division, METI pioneered maritime
                            training in India. Vigyana Sagar - the state-of-the-art campus - was inaugurated by the
                            <strong style="color: #1e3a5f;">Honourable Prime Minister</strong> in 2021.
                        </p>
                        <div class="timeline-modern">
                            <div class="timeline-item">
                                <div class="timeline-icon "><i class="fa fa-building"></i></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">1993: Foundation</h5>
                                    <p>METI established as CSL training division per DGS recommendations</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-icon "><i class="fa fa-graduation-cap"></i></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">2021: New Era</h5>
                                    <p>Vigyana Sagar campus inaugurated - 5x capacity expansion</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-icon "><i class="fa fa-star"></i></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">2024: Excellence</h5>
                                    <p>Lloyd's Register awards Grade A1 - Highest possible rating</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="glass-card p-5 mb-5" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="content-title mb-4">
                            <i class="fa fa-bullseye me-2 text-info"></i>Our Mission
                        </h2>
                        <p class="lead mb-5" style="color: #6b7b8d; line-height: 1.8; font-size: 16px;">To deliver
                            <strong style="color: #1e3a5f;">world-class maritime training</strong> that produces
                            technically proficient, safety-conscious marine engineers ready for global shipping
                            challenges.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="50">
                                <div class="mission-point p-5">
                                    <div class="mb-3">
                                        <i class="fa fa-anchor fa-3x text-primary"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Practical Excellence</h5>
                                    <p><strong style="color: #00b4d8;">60% hands-on training</strong> with real engines,
                                        simulators & afloat
                                        experience at Cochin Shipyard</p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="mission-point p-5">
                                    <div class="mb-3">
                                        <i class="fa fa-shield-alt fa-3x text-success"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Safety First</h5>
                                    <p>STCW-compliant training with emphasis on <strong
                                            style="color: #28a745;">emergency response & risk
                                            management</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card p-5" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="content-title mb-5">
                            <i class="fa fa-gem me-2 text-warning"></i>Core Values
                        </h2>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
                                <div class="value-card-modern text-center p-5 h-100 hover-lift">
                                    <div class="value-icon mb-4">
                                        <i class="fa fa-handshake fa-3x text-primary"></i>
                                    </div>
                                    <h6 class="fw-bold mb-3">Discipline</h6>
                                    <p class="text-muted">Regimented lifestyle builds shipboard readiness</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                                <div class="value-card-modern text-center p-5 h-100 hover-lift">
                                    <div class="value-icon mb-4">
                                        <i class="fa fa-rocket fa-3x text-success"></i>
                                    </div>
                                    <h6 class="fw-bold mb-3">Innovation</h6>
                                    <p class="text-muted">Cutting-edge simulators & tech training</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                                <div class="value-card-modern text-center p-5 h-100 hover-lift">
                                    <div class="value-icon mb-4">
                                        <i class="fa fa-users fa-3x text-info"></i>
                                    </div>
                                    <h6 class="fw-bold mb-3">Teamwork</h6>
                                    <p class="text-muted">Leadership development for command roles</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                                <div class="value-card-modern text-center p-5 h-100 hover-lift">
                                    <div class="value-icon mb-4">
                                        <i class="fa fa-globe fa-3x text-warning"></i>
                                    </div>
                                    <h6 class="fw-bold mb-3">Global Ready</h6>
                                    <p class="text-muted">International shipping standards met</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- METI TAB -->
                <div class="tab-content-custom" id="whyus">
                    <div class="main-wrapper">

                        <!-- LEFT SIDEBAR (FIXED STYLE) -->
                        <div class="floating-sidebar">

                            <button class="tab-btn active" onclick="showTab('achievements', this)">
                                <i class="fa fa-trophy"></i> Achievements
                            </button>

                            <button class="tab-btn" onclick="showTab('awards', this)">
                                <i class="fa fa-medal"></i> Awards
                            </button>

                            <button class="tab-btn" onclick="showTab('placement', this)">
                                <i class="fa fa-briefcase"></i> Placement
                            </button>

                        </div>

                        <!-- RIGHT CONTENT -->
                        <div class="content-container">

                            <!-- TOP HEADING -->
                            <div class="section-title text-center" data-aos="fade-down">
                                <h2 id="mainHeading" class="fw-bold">Achievements</h2>
                            </div>

                            <!-- ACHIEVEMENTS -->
                            <div class="tab-content active" id="achievements">

                                <div class="content-row">

                                    <!-- LEFT TEXT -->
                                    <div class="content-left">

                                        <div id="textContent">

                                            <div class="text-item active">
                                                <h5>Largest Vessel Built</h5>
                                                <p>Delivered one of India's largest and most complex vessels.</p>
                                            </div>

                                            <div class="text-item">
                                                <h5>Modern Engineering</h5>
                                                <p>Used advanced technologies for precision shipbuilding.</p>
                                            </div>

                                            <div class="text-item">
                                                <h5>Global Leadership</h5>
                                                <p>Recognized as a leader in maritime innovation.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- RIGHT SLIDER -->
                                    <div class="content-right">

                                        <div id="achieveSlider" class="carousel slide" data-bs-ride="carousel">

                                            <div class="carousel-inner rounded-4 shadow">

                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/400?1" class="w-100">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/400?2" class="w-100">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/400?3" class="w-100">
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- AWARDS -->
                            <div class="tab-content" id="awards">

                                <div class="content-row">

                                    <!-- LEFT TEXT -->
                                    <div class="content-left">

                                        <div id="awardTextContent">

                                            <div class="text-item active">
                                                <h5>National Recognition</h5>
                                                <p>Awarded for excellence in shipbuilding at national level.</p>
                                            </div>

                                            <div class="text-item">
                                                <h5>International Certification</h5>
                                                <p>Received global certifications ensuring quality standards.</p>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- RIGHT SLIDER -->
                                    <div class="content-right">

                                        <div id="awardSlider" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">

                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/400?3" class="w-100">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/400?4" class="w-100">
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- PLACEMENT -->
                            <div class="tab-content" id="placement">

                                <div class="content-row">

                                    <!-- LEFT TEXT -->
                                    <div class="content-left">

                                        <div id="placementTextContent">

                                            <div class="text-item active">
                                                <div class="placement-info-card">
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-hashtag"></i>
                                                                    Slot No:</span>
                                                                <span class="info-value">01</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-graduation-cap"></i>
                                                                    Batch:</span>
                                                                <span class="info-value">2023-24</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-user"></i>
                                                                    Name:</span>
                                                                <span class="info-value">Devendra Partap Kumar
                                                                    Singh</span>
                                                                <div class="text-muted small ps-4">Deoria, Uttar Pradesh
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-anchor"></i>
                                                                    Sponsored By:</span>
                                                                <span class="info-value">Cochin Shipyard Limited</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-item">
                                                <div class="placement-info-card">
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-hashtag"></i>
                                                                    Slot No:</span>
                                                                <span class="info-value">02</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-graduation-cap"></i>
                                                                    Batch:</span>
                                                                <span class="info-value">2023-24</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-user"></i>
                                                                    Name:</span>
                                                                <span class="info-value">Sample Student Name</span>
                                                                <div class="text-muted small ps-4">Location Detail</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="info-row">
                                                                <span class="info-label"><i
                                                                        class="fa-solid fa-anchor"></i>
                                                                    Sponsored By:</span>
                                                                <span class="info-value">Partner Shipping Co.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- RIGHT SLIDER -->
                                    <div class="content-right">

                                        <div id="placementSlider" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">

                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/400?5" class="w-100">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/400?6" class="w-100">
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- TESTIMONIAL SECTION -->
                                <div class="testimonial-box mt-4">

                                    <div id="placementTestimonials">

                                        <!-- Testimonial 1 -->
                                        <div class="testimonial-item active">
                                            <div class="testimonial-card">

                                                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>

                                                <p class="review">
                                                    Indian Institute Of Information Technology, Pune is the hub of
                                                    skills,
                                                    knowledge and success. Faculty members are very supportive and
                                                    placement opportunities are excellent.
                                                </p>

                                                <h5 class="name">— Nikita Bhatia</h5>

                                                <p class="course">
                                                    M.Tech, Electronics & Communication
                                                </p>

                                            </div>
                                        </div>

                                        <!-- Testimonial 2 -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-card">

                                                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>

                                                <p class="review">
                                                    The placement support is amazing. I got selected in a reputed
                                                    company thanks to the training and guidance provided here.
                                                </p>

                                                <h5 class="name">— Rahul Kumar</h5>

                                                <p class="course">
                                                    B.Tech, Mechanical Engineering
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- staff-faculty -->
                <div class="tab-content-custom" id="staff-faculty">

                    <!-- Department: Marine Engineering -->
                    <div class="dept-section mb-5">
                        <div class="dept-header">
                            <h3><i class="fa-solid fa-ship me-2"></i> Marine Engineering Department</h3>
                        </div>
                        <div class="row g-4">
                            <!-- Faculty 1 -->
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                                <div class="faculty-card" data-bs-toggle="modal" data-bs-target="#facultyModal"
                                    data-name="Prof. Vikram Singh" data-designation="Head of Department"
                                    data-dept="Marine Engineering"
                                    data-education="M.Tech (Marine Engineering), Ph.D (Maritime Science)"
                                    data-experience="25+ Years in Maritime Training & Research"
                                    data-specialty="Marine Engines, Ship Propulsion"
                                    data-photo="https://picsum.photos/400/533?10">
                                    <div class="faculty-photo-wrapper">
                                        <img src="https://picsum.photos/400/533?10" alt="Faculty" class="faculty-photo">
                                        <div class="view-profile-overlay"><i class="fa-solid fa-eye me-1"></i> View
                                            Profile
                                        </div>
                                    </div>
                                    <div class="faculty-info">
                                        <h5 class="faculty-name">Prof. Vikram Singh</h5>
                                        <p class="faculty-designation">Head of Department</p>
                                        <div class="faculty-experience">
                                            <i class="fa-solid fa-clock-rotate-left me-1"></i> 25+ Years Experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Faculty 2 -->
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="faculty-card" data-bs-toggle="modal" data-bs-target="#facultyModal"
                                    data-name="Cmdr. Ramesh Nair" data-designation="Senior Instructor"
                                    data-dept="Marine Engineering"
                                    data-education="B.E. (Mechanical), Retired Navy Commander"
                                    data-experience="20+ Years in Naval Operations & Training"
                                    data-specialty="Naval Architecture, Marine Safety"
                                    data-photo="https://picsum.photos/400/533?11">
                                    <div class="faculty-photo-wrapper">
                                        <img src="https://picsum.photos/400/533?11" alt="Faculty" class="faculty-photo">
                                        <div class="view-profile-overlay"><i class="fa-solid fa-eye me-1"></i> View
                                            Profile
                                        </div>
                                    </div>
                                    <div class="faculty-info">
                                        <h5 class="faculty-name">Cmdr. Ramesh Nair</h5>
                                        <p class="faculty-designation">Senior Instructor</p>
                                        <div class="faculty-experience">
                                            <i class="fa-solid fa-clock-rotate-left me-1"></i> 20+ Years Experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Department: Applied Sciences -->
                    <div class="dept-section">
                        <div class="dept-header">
                            <h3><i class="fa-solid fa-atom me-2"></i> Applied Sciences & Humanities</h3>
                        </div>
                        <div class="row g-4">
                            <!-- Faculty 3 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="faculty-card" data-bs-toggle="modal" data-bs-target="#facultyModal"
                                    data-name="Dr. Anjali Verma" data-designation="Asst. Professor (Mechanics)"
                                    data-dept="Applied Sciences & Humanities"
                                    data-education="M.Sc (Physics), Ph.D (Theoretical Mechanics)"
                                    data-experience="15+ Years in Engineering Academics"
                                    data-specialty="Quantum Mechanics, Structural Analysis"
                                    data-photo="https://picsum.photos/400/533?12">
                                    <div class="faculty-photo-wrapper">
                                        <img src="https://picsum.photos/400/533?12" alt="Faculty" class="faculty-photo">
                                        <div class="view-profile-overlay"><i class="fa-solid fa-eye me-1"></i> View
                                            Profile
                                        </div>
                                    </div>
                                    <div class="faculty-info">
                                        <h5 class="faculty-name">Dr. Anjali Verma</h5>
                                        <p class="faculty-designation">Asst. Professor (Mechanics)</p>
                                        <div class="faculty-experience">
                                            <i class="fa-solid fa-clock-rotate-left me-1"></i> 15+ Years Experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- facilities -->
                <div class="tab-content-custom" id="facilities">
                    <div class="main-wrapper">
                        <!-- LEFT SIDEBAR -->
                        <div class="floating-sidebar">
                            <button class="tab-btn active" onclick="showFacilityTab('f-campus', this)">
                                <i class="fa-solid fa-building-columns"></i> Campus
                            </button>
                            <button class="tab-btn" onclick="showFacilityTab('f-academics', this)">
                                <i class="fa-solid fa-graduation-cap"></i> Academics
                            </button>
                            <button class="tab-btn" onclick="showFacilityTab('f-residential', this)">
                                <i class="fa-solid fa-bed"></i> Residential
                            </button>
                            <button class="tab-btn" onclick="showFacilityTab('f-library', this)">
                                <i class="fa-solid fa-book-open"></i> Library
                            </button>
                        </div>

                        <!-- RIGHT CONTENT -->
                        <div class="content-container">
                            <!-- TOP HEADING -->
                            <div class="section-title text-center">
                                <h2 id="facilityHeading">Campus & Infrastructure</h2>
                            </div>

                            <!-- CAMPUS SUB-TAB -->
                            <div class="facility-sub-tab active" id="f-campus">
                                <div class="content-row">
                                    <div class="content-left">
                                        <div class="placement-info-card">
                                            <h4 class="fw-bold fs-5 text-navy mb-3">Campus Infrastructure</h4>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-maximize"></i> Total
                                                    Area:</span>
                                                <span class="info-value">15+ Acres Green Campus</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-location-dot"></i>
                                                    Location:</span>
                                                <span class="info-value">Vigyana Sagar, Kochi</span>
                                            </div>
                                            <div class="info-row">
                                                <span class="info-label"><i class="fa-solid fa-leaf"></i>
                                                    Environment:</span>
                                                <span class="info-value">Eco-friendly & Sustainable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div id="facilityCampusSlider" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">
                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/533?20" class="w-100"
                                                        alt="Campus 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/533?30" class="w-100"
                                                        alt="Campus 2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ACADEMICS SUB-TAB -->
                            <div class="facility-sub-tab" id="f-academics">
                                <div class="content-row">
                                    <div class="content-left">
                                        <div class="placement-info-card">
                                            <h4 class="fw-bold fs-5 text-navy mb-3">Academic Facilities</h4>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-wind"></i>
                                                    Classrooms:</span>
                                                <span class="info-value">Fully A/C Smart Rooms</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-microchip"></i>
                                                    Engineering
                                                    Labs:</span>
                                                <span class="info-value">Modern Engine Simulators</span>
                                            </div>
                                            <div class="info-row">
                                                <span class="info-label"><i class="fa-solid fa-screwdriver-wrench"></i>
                                                    Workshops:</span>
                                                <span class="info-value">Heavy-duty Fabrication Units</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div id="facilityAcademicSlider" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">
                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/533?21" class="w-100"
                                                        alt="Academics 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/533?31" class="w-100"
                                                        alt="Academics 2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- RESIDENTIAL SUB-TAB -->
                            <div class="facility-sub-tab" id="f-residential">
                                <div class="content-row">
                                    <div class="content-left">
                                        <div class="placement-info-card">
                                            <h4 class="fw-bold fs-5 text-navy mb-3">Residential & Dining</h4>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-shield-halved"></i>
                                                    Hostel:</span>
                                                <span class="info-value">24/7 Secure Boys & Girls Blocks</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-utensils"></i>
                                                    Mess:</span>
                                                <span class="info-value">Multicuisine Sanitized Dining</span>
                                            </div>
                                            <div class="info-row">
                                                <span class="info-label"><i class="fa-solid fa-wifi"></i>
                                                    Connectivity:</span>
                                                <span class="info-value">High-speed Campus-wide Wi-Fi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div id="facilityResidentialSlider" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">
                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/533?23" class="w-100"
                                                        alt="Residential 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/533?33" class="w-100"
                                                        alt="Residential 2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIBRARY SUB-TAB -->
                            <div class="facility-sub-tab" id="f-library">
                                <div class="content-row">
                                    <div class="content-left">
                                        <div class="placement-info-card">
                                            <h4 class="fw-bold fs-5 text-navy mb-3">Technical Library</h4>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-book"></i>
                                                    Volumes:</span>
                                                <span class="info-value">5,000+ Maritime Collections</span>
                                            </div>
                                            <div class="info-row mb-2">
                                                <span class="info-label"><i class="fa-solid fa-laptop-code"></i>
                                                    Digital:</span>
                                                <span class="info-value">Access to global E-Journals</span>
                                            </div>
                                            <div class="info-row">
                                                <span class="info-label"><i class="fa-solid fa-clock"></i> Study
                                                    Zones:</span>
                                                <span class="info-value">Dedicated Silent Reading Areas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div id="facilityLibrarySlider" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner rounded-4 shadow">
                                                <div class="carousel-item active">
                                                    <img src="https://picsum.photos/800/533?25" class="w-100"
                                                        alt="Library 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://picsum.photos/800/533?35" class="w-100"
                                                        alt="Library 2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- LOCATION -->
    <!-- <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="section-title">Location & Connectivity</h2>
            <div class="row">
                <div class="col-md-3"> 📍 Vigyana Sagar, Girinagar Kochi, Kerala Pincode- 682020 </div>
                <div class="col-md-3"> 🚆 2 km from Railway Station </div>
                <div class="col-md-3"> ✈️ 31 km from Airport </div>
                <div class="col-md-3"> 🛣 Well Connected </div>
            </div>
        </div>
    </section> -->

    <!-- ACADEMICS -->
    <section class="container py-5">
        <div class="section-title text-center">
            <h2>Academics</h2>
        </div>
        <p class="text-center">Teaching methodology is tailored to suit the educational qualifications of the trainees
            and
            the requirements of the STCW code. Training is systematic and the objectives and structure of the course are
            conveyed to the trainees at the beginning of the course itself. Reading materials provided in each of the
            subjects
            supplement the classroom and practical training. METI and CSL Technical Libraries also serve as reference
            material
            to students. Instructional CDs and CBT are also used in training. Strict discipline and a regimented
            lifestyle are
            characteristics of the training, which is designed to condition the trainees for the life on board a ship.
            Representatives of sponsoring shipping companies expressed complete satisfaction with the training provided
            by
            METI.<br />
            <br />
            The Institute has set up training centers with quality infrastructure for Basic & Advanced Fire fighting
            course
            and Elementary First Aid Course
            <br /><br />There are adequate facilities for recreation including indoor and outdoor games. Training is
            also
            imparted in boat-work, mast-climbing, swimming, VHF communication, interpersonal relations, etiquettes and
            dress
            code.

        </p>
    </section>


    <?php
    include "./include/footer.php";
    ?>

    <script src="./js/common.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        const tabs = document.querySelectorAll(".top-tab");
        const contents = document.querySelectorAll(".tab-content-custom");

        tabs.forEach(btn => {
            btn.addEventListener("click", () => {

                tabs.forEach(b => b.classList.remove("active"));
                contents.forEach(c => c.classList.remove("active"));

                btn.classList.add("active");
                document.getElementById(btn.dataset.tab).classList.add("active");
            });
        });




        function showTab(tabId, btn) {

            // hide all content
            document.querySelectorAll('.tab-content').forEach(el => {
                el.classList.remove('active');
            });

            // remove active button
            document.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('active');
            });

            // show selected tab
            document.getElementById(tabId).classList.add('active');
            btn.classList.add('active');

            // 🔥 MAIN LOGIC: update heading
            let text = btn.innerText.trim();
            document.getElementById('mainHeading').innerText = text;
        }


        // Achievements
        document.getElementById('achieveSlider')?.addEventListener('slid.bs.carousel', function (e) {
            let index = e.to;
            let items = document.querySelectorAll('#textContent .text-item');

            items.forEach((el, i) => {
                el.classList.remove('active');
                if (i === index) el.classList.add('active');
            });
        });

        // Awards
        document.getElementById('awardSlider')?.addEventListener('slid.bs.carousel', function (e) {
            let index = e.to;
            let items = document.querySelectorAll('#awardTextContent .text-item');

            items.forEach((el, i) => {
                el.classList.remove('active');
                if (i === index) el.classList.add('active');
            });
        });

        // Placement
        document.getElementById('placementSlider')?.addEventListener('slid.bs.carousel', function (e) {

            let index = e.to;

            // TEXT SYNC
            let textItems = document.querySelectorAll('#placementTextContent .text-item');
            textItems.forEach((el, i) => {
                el.classList.remove('active');
                if (i === index) el.classList.add('active');
            });

            // TESTIMONIAL SYNC 🔥
            let testimonials = document.querySelectorAll('#placementTestimonials .testimonial-item');
            testimonials.forEach((el, i) => {
                el.classList.remove('active');
                if (i === index) el.classList.add('active');
            });

        });

        // Faculty Modal Logic
        const facultyModal = document.getElementById('facultyModal');
        if (facultyModal) {
            facultyModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const name = button.getAttribute('data-name');
                const designation = button.getAttribute('data-designation');
                const dept = button.getAttribute('data-dept');
                const education = button.getAttribute('data-education');
                const experience = button.getAttribute('data-experience');
                const specialty = button.getAttribute('data-specialty');
                const photo = button.getAttribute('data-photo');

                document.getElementById('modalName').textContent = name;
                document.getElementById('modalDesignation').textContent = designation;
                document.getElementById('modalDept').textContent = dept;
                document.getElementById('modalEducation').textContent = education;
                document.getElementById('modalExperience').textContent = experience;
                document.getElementById('modalSpecialty').textContent = specialty;
                document.getElementById('modalImg').src = photo;
            });
        }

        function showFacilityTab(tabId, btn) {
            // Hide all facility sub-tabs
            document.querySelectorAll('.facility-sub-tab').forEach(el => {
                el.classList.remove('active');
            });
            // Remove active from all sub-buttons
            btn.parentElement.parentElement.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('active');
            });

            // Show selected sub-tab
            document.getElementById(tabId).classList.add('active');
            btn.classList.add('active');

            // Update sub-heading
            const text = btn.innerText.trim();
            document.getElementById('facilityHeading').innerText = text;
        }

        // Tab Switching Logic (Combined & Updated)
        const sidebarButtons = document.querySelectorAll('.sidebar-item');
        const tabBoxes = document.querySelectorAll('.tab-content-custom');
        const dynamicTitle = document.getElementById('dynamicSectionTitle');

        sidebarButtons.forEach(item => {
            item.addEventListener('click', () => {
                sidebarButtons.forEach(i => i.classList.remove('active'));
                tabBoxes.forEach(c => c.classList.remove('active'));

                item.classList.add('active');
                const tabId = item.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');

                // Update Section Title Text
                if (tabId === 'academics') dynamicTitle.textContent = 'Academics';
                if (tabId === 'achievements') dynamicTitle.textContent = 'Achievements & Awards';
                if (tabId === 'placement') dynamicTitle.textContent = 'Placement Details';
                if (tabId === 'staff-faculty') dynamicTitle.textContent = 'Our Staff & Faculty';
                if (tabId === 'facilities') dynamicTitle.textContent = 'Campus Facilities';
            });
        });

        // Handle direct links from Navbar (Robust Hash detection with Jump Prevention)
        function handleHash() {
            const hash = window.location.hash;
            if (hash) {
                // Remove # and the "tab-" prefix to get the actual tabId
                const tabId = hash.replace("#tab-", "").replace("#", "");

                // Ensure everything is settled
                setTimeout(() => {
                    const targetTab = document.querySelector(`.top-tab[data-tab="${tabId}"]`);
                    const scrollTarget = document.getElementById('top-tabs-section');

                    if (targetTab) {
                        targetTab.click();

                        if (scrollTarget) {
                            const offset = 120;
                            const bodyRect = document.body.getBoundingClientRect().top;
                            const elementRect = scrollTarget.getBoundingClientRect().top;
                            const elementPosition = elementRect - bodyRect;
                            const offsetPosition = elementPosition - offset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                }, 500);
            }
        }

        // Run once on load and every time hash changes
        handleHash();
        window.addEventListener("hashchange", handleHash);
    </script>

    <!-- Faculty Detail Modal -->
    <div class="modal fade" id="facultyModal" tabindex="-1" aria-labelledby="facultyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content faculty-modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="z-index: 10;"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-5 modal-photo-col">
                            <img src="" id="modalImg" class="img-fluid profile-modal-img" alt="Faculty">
                        </div>
                        <div class="col-md-7 p-4 modal-info-col bg-white">
                            <h2 class="modal-faculty-name mb-1" id="modalName"></h2>
                            <h5 class="modal-faculty-designation text-primary mb-4" id="modalDesignation"></h5>

                            <div class="faculty-detail-item mb-3">
                                <label><i class="fa-solid fa-building-user me-2"></i> Department</label>
                                <p id="modalDept" class="fw-bold text-navy"></p>
                            </div>

                            <div class="faculty-detail-item mb-3">
                                <label><i class="fa-solid fa-graduation-cap me-2"></i> Education</label>
                                <p id="modalEducation"></p>
                            </div>

                            <div class="faculty-detail-item mb-3">
                                <label><i class="fa-solid fa-briefcase me-2"></i> Experience</label>
                                <p id="modalExperience"></p>
                            </div>

                            <div class="faculty-detail-item">
                                <label><i class="fa-solid fa-star me-2"></i> Area of Expertise</label>
                                <p id="modalSpecialty"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>