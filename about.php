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
    <section class="p-5">
        <div style="background: linear-gradient(135deg,#eef2ff,#f8fafc);">
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
                    <!-- Overview, History, Mission, Values -->

                    <!-- Overview -->
                    <div class="row gy-4 p-5 mb-5" data-aos="fade-up">
                        <div class="col-lg-6 content-text">
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
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="row g-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
                                    <div class="stat-box">
                                        <i class="fa fa-star fa-2x text-primary mb-3"></i>
                                        <h4 class="fw-bold text-primary">Grade A1</h4>
                                        <p class="text-muted">Lloyd's Rating</p>
                                    </div>
                                </div>
                                <div class="col-md-4  aos-init aos-animate" data-aos="fade-up" data-aos-delay="75">
                                    <div class="stat-box">
                                        <i class="fa fa-graduation-cap fa-2x text-success mb-3"></i>
                                        <h4 class="fw-bold text-success">160 Seats</h4>
                                        <p class="text-muted">Annual GME Capacity</p>
                                    </div>
                                </div>
                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                    <div class="stat-box">
                                        <i class="fa fa-users fa-2x text-info mb-3"></i>
                                        <h4 class="fw-bold text-info">World-Class</h4>
                                        <p class="text-muted">Faculty Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- History -->
                    <div class="row gy-4 p-5 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6 content-text">
                            <h2 class="section-title">
                                <i class="fa fa-history me-2 text-success"></i>Our History
                            </h2>
                            <p class="lead mb-5" style="color: #6b7b8d; line-height: 1.8; font-size: 16px;">
                                Established in 1993 as CSL division, METI pioneered maritime
                                training in India. Vigyana Sagar - the state-of-the-art campus - was inaugurated by the
                                <strong style="color: #1e3a5f;">Honourable Prime Minister</strong> in 2021.
                            </p>
                        </div>
                        <div class="col-lg-6 content-text">
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
                    </div>

                    <!-- Our Mission -->
                    <div class="row gy-4 p-5 mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-5 content-text">
                            <h2 class="section-title">
                                <i class="fa fa-bullseye me-2 text-info"></i>Our Mission
                            </h2>
                            <p class="lead mb-5" style="color: #6b7b8d; line-height: 1.8; font-size: 16px;">To deliver
                                <strong style="color: #1e3a5f;">world-class maritime training</strong> that produces
                                technically proficient, safety-conscious marine engineers ready for global shipping
                                challenges.
                            </p>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2">
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="50">
                                    <div class="mission-point p-4">
                                        <div class="mb-5 algin-items-center d-flex justify-content-center">
                                            <i class="fa fa-anchor fa-3x text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-3">Practical Excellence</h5>
                                        <p><strong style="color: #00b4d8;">60% hands-on training</strong> with real engines,
                                            simulators & afloat
                                            experience at Cochin Shipyard</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="mission-point p-4">
                                        <div class="mb-5 algin-items-center d-flex justify-content-center">
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
                    </div>
                    <!-- Our Value -->
                    <div class=" p-5" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="section-title">
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

                <!-- WHY US TAB - 3 Static Subsections -->
                <div class="tab-content-custom container" id="whyus">

                        <!-- 1. ACHIEVEMENTS - Updated Layout -->

                        <div class="" data-aos="fade-up" data-aos-delay="100">

                            <h2 class="section-title mb-4">
                                <i class="fa fa-trophy me-2 text-danger"></i>Achievements
                            </h2>

                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/2-days-scba-886x1147.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/3-days-bff-886x1147.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/advert2-886x1108.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/maersk-advrt-2-886x1083.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. AWARDS & CERTIFICATION -->
                        <div class=" p-5 mb-5" data-aos="fade-up" data-aos-delay="100">

                            <h2 class="section-title mb-4">
                                <i class="fa fa-trophy me-2 text-danger"></i>Awards & Certificates
                            </h2>

                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/2-days-scba-886x1147.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/3-days-bff-886x1147.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/advert2-886x1108.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="./Assets/image/maersk-advrt-2-886x1083.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 3. PLACEMENT -->
                        <div class="p-5 mb-5" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="section-title mb-4">
                                <i class="fa fa-briefcase me-2 text-success"></i>Placement Record
                            </h2>
                            <!-- PLACEMENT AUTO SLIDER -->
                            <div class="placement-slider">

                                <div class="placement-track">

                                    <!-- CARD 1 -->
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg"
                                                    class="img-fluid rounded-4 border border-2" alt="">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6><span class="label text-danger">Slot No:</span> 01</h6>
                                                    <h6><span class="label text-primary">Name:</span> Devendra Kumar</h6>
                                                    <h6><span class="label text-success">Sponsored by:</span> Maersk</h6>
                                                    <h6><span class="label text-warning">Batch:</span> 2023</h6>
                                                </div>
                                            </div>

                                            <!-- Testimonial -->
                                            <div class="placement-testimonial">
                                                <i class="fa-solid fa-quote-left quote-icon"></i>
                                                <p class="testimonial-text">
                                                    METI training made me job-ready from day one!
                                                </p>
                                                <small class="author">- Rahul K.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD 2 -->
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg"
                                                    class="img-fluid rounded-4 border border-2" alt="">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6><span class="label text-danger">Slot No:</span> 02</h6>
                                                    <h6><span class="label text-primary">Name:</span> Aman Singh</h6>
                                                    <h6><span class="label text-success">Sponsored by:</span> Shell</h6>
                                                    <h6><span class="label text-warning">Batch:</span> 2022</h6>
                                                </div>
                                            </div>

                                            <div class="placement-testimonial">
                                                <i class="fa-solid fa-quote-left quote-icon"></i>
                                                <p class="testimonial-text">
                                                    Great faculty and placement support!
                                                </p>
                                                <small class="author">- Aman S.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARD 3 -->
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg"
                                                    class="img-fluid rounded-4 border border-2" alt="">
                                            </div>

                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6><span class="label text-danger">Slot No:</span> 03</h6>
                                                    <h6><span class="label text-primary">Name:</span> Rohit Sharma</h6>
                                                    <h6><span class="label text-success">Sponsored by:</span> BPCL</h6>
                                                    <h6><span class="label text-warning">Batch:</span> 2021</h6>
                                                </div>
                                            </div>

                                            <div class="placement-testimonial">
                                                <i class="fa-solid fa-quote-left quote-icon"></i>
                                                <p class="testimonial-text">
                                                    Best institute for marine training!
                                                </p>
                                                <small class="author">- Rohit</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Navigation Arrows -->
                                <button class="slider-nav slider-prev" onclick="scrollSlider('prev')">
                                    <i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="slider-nav slider-next" onclick="scrollSlider('next')">
                                    <i class="fa fa-chevron-right"></i>
                                </button>

                            </div>
                        </div>
                    </div>


                    <!-- staff-faculty -->
                <div class="tab-content-custom container" id="staff-faculty">

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
                <div class="tab-content-custom container" id="facilities">
                        <h2 class="section-title">Campus & Infrastructure</h2>
                        
                </div>

            </div>
        </div>
    </section>

    <?php
    include "./include/footer.php";
    ?>


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

    <script>
        function scrollSlider(direction) {
            const track = document.querySelector('.placement-track');
            const cardWidth = track.querySelector('.card').offsetWidth + 20; // width + gap
            const scrollAmount = direction === 'prev' ? -cardWidth : cardWidth;

            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }

        // Touch/swipe support for mobile
        let startX = 0;
        const track = document.querySelector('.placement-track');
        if (track) {
            track.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            });

            track.addEventListener('touchend', (e) => {
                const endX = e.changedTouches[0].clientX;
                const diff = startX - endX;
                if (Math.abs(diff) > 50) {
                    scrollSlider(diff > 0 ? 'next' : 'prev');
                }
            });
        }
    </script>

    <script>
        const swiper = new Swiper(".myPlacementSlider", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            speed: 800, // smooth transition
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // Responsive
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>

</html>
