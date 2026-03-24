<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/aboutus.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</head>

<body>
    <!-- Nav-Bar Add here -->

    <?php
    include "./include/navbar.php";
    ?>
    <section>
        <div style="background: linear-gradient(135deg,#eef2ff,#f8fafc);">
            <div class="container">

                <!-- TOP BUTTONS -->
                <div id="top-tabs-section" class="top-tabs-banner mb-5" data-aos="fade-up">
                    <img src="./Assets/577a7723-2643x1762.jpg" alt="METI campus banner" class="top-tabs-banner-image">
                    <div class="top-tabs-banner-overlay"></div>
                    <div class="top-tabs-content">
                        <h1 class="top-tabs-title">Explore METI</h1>
                        <div class="top-tabs-actions d-flex justify-content-center flex-wrap gap-3">
                            <button type="button" class="top-tab active" data-tab="about"
                                onclick="showTabSection('about')">
                                <i class="fa fa-building me-2"></i>About METI
                            </button>

                            <button type="button" class="top-tab" data-tab="whyus" onclick="showTabSection('whyus')">
                                <i class="fa fa-graduation-cap me-2"></i>Why Us
                            </button>

                            <button type="button" class="top-tab" data-tab="staff-faculty"
                                onclick="showTabSection('staff-faculty')">
                                <i class="fa fa-eye me-2"></i>Staff & Faculty
                            </button>

                            <button type="button" class="top-tab" data-tab="facilities"
                                onclick="showTabSection('facilities')">
                                <i class="fa fa-bullseye me-2"></i>Facilities
                            </button>
                        </div>
                    </div>
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
                                        <p><strong style="color: #00b4d8;">60% hands-on training</strong> with real
                                            engines,
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
                                    <img src="./Assets/image/maersk-advrt-2-886x1083.jpg" class="card-img-top"
                                        alt="...">
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
                                    <img src="./Assets/image/maersk-advrt-2-886x1083.jpg" class="card-img-top"
                                        alt="...">
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

                   <!-- Trainers Section -->
                    <section id="trainers" class="section trainers">
                        <div class="container row my-4 border " data-aos="fade-up" data-aos-delay="100">
                         <div class="d-flex align-items-center">
                        <h2 class="section-title mb-0">Department 1</h2></div>
                                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up"        data-aos-delay="100">
                                            <div class="member-img">
                                            <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="member-info text-center">
                                            <h4>Walter White</h4>
                                            <span>Business</span>
                                            <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                                            </div>
                                        </div><!-- End Team Member -->
                        </div>

                        <div class="container row my-4 border " data-aos="fade-up" data-aos-delay="100">
                         <div class="d-flex align-items-center">
                        <h2 class="section-title mb-0">Department 2</h2></div>
                                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up"        data-aos-delay="100">
                                            <div class="member-img">
                                            <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="member-info text-center">
                                            <h4>Walter White</h4>
                                            <span>Business</span>
                                            <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                                            </div>
                                        </div><!-- End Team Member -->
                        </div>
                    </section>
    
                        <!-- /Trainers Section -->
                </div>

                    <!-- facilities -->
                    <div class="tab-content-custom " id="facilities">

                        <!-- campus & Infrastructure -->

                        <h2 class="section-title">Campus & Infrastructure</h2>
                        <div class="my-4">
                            <div class="row facilities-overlap-row align-items-center">

                                <!-- LEFT SIDE IMAGE SLIDER -->
                                <div class="col-md-7 p-0 facilities-slider-col">
                                    <div class="swiper facilitiesSwiper">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <img src="https://picsum.photos/800/500?1" class="img-fluid w-100">
                                            </div>

                                            <div class="swiper-slide">
                                                <img src="https://picsum.photos/800/500?2" class="img-fluid w-100">
                                            </div>

                                            <div class="swiper-slide">
                                                <img src="https://picsum.photos/800/500?2" class="img-fluid w-100">
                                            </div>

                                        </div>

                                        <!-- dots -->
                                        <div class="swiper-pagination facilities-pagination"></div>
                                    </div>
                                </div>

                                <!-- RIGHT SIDE TEXT -->
                                <div class="col-md-5 facilities-content-col">
                                    <div class="text-white p-4 facilities-content-box">
                                        <div class="content-scroll">
                                            <h4 class="mb-3">Campus & Infrastructure</h4>

                                            <p>
                                                Collection of print as well as electronic resources. It has around 30534
                                                volumes...
                                            </p>

                                            <p>
                                                The services and operations in the Central Library are fully computerized...
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam
                                                possimus nesciunt ipsa dolorem odit molestiae voluptatum delectus est ex
                                                voluptates tempora placeat incidunt excepturi qui, nisi harum! Tempora
                                                quibusdam odio voluptatum consectetur eligendi quo debitis error ipsum sit
                                                provident.
                                            </p>

                                            <p>
                                                Keeping the library on modern techniques, the reading materials has been
                                                classified... Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Obcaecati aut, quod similique quasi doloribus labore nulla beatae quae sunt
                                                nihil tenetur architecto, modi iure recusandae cupiditate facere porro
                                                corporis eum dolorem, excepturi aperiam possimus nostrum rem? Totam quam est
                                                recusandae aliquam vitae, quas dolor libero assumenda consectetur, magni
                                                reiciendis blanditiis provident ab? Placeat voluptatum voluptate suscipit
                                                saepe nostrum quae, eaque iste corrupti animi inventore doloribus cumque ut
                                                at illo! Facilis cum quaerat omnis nam modi, eaque animi optio maxime
                                                reprehenderit officiis aspernatur cupiditate possimus vel facere dignissimos
                                                ducimus tempore deleniti et. Commodi iure fugit quaerat pariatur incidunt et
                                                dolor maiores.
                                            </p>

                                            <p>
                                                The library is managed by highly qualified professionals...
                                            </p>

                                            <p>
                                                (Aur bhi content add kar sakte ho scroll ke liye)
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- campus & Infrastructure -->

                            <!-- class Roooms & Practical's -->
                        <h2 class="section-title mt-4">Class Roooms & Practical's</h2>
                        <div class="my-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, accusamus ex optio velit soluta
                                hic minus officiis. Iusto necessitatibus architecto doloribus est ipsum soluta, doloremque,
                                exercitationem obcaecati, sed suscipit accusamus. Delectus nulla ducimus perferendis
                                voluptatibus non exercitationem natus neque. Recusandae vero, exercitationem eos iste
                                numquam harum unde! Doloribus, perspiciatis suscipit, qui maiores ab rem incidunt iste
                                veniam non, dolor perferendis facere possimus cum! Dolorem, corporis itaque suscipit ea qui
                                quo minus veniam dolor, beatae tempora, neque tempore consectetur esse? Iusto fuga
                                consectetur atque repellendus aperiam quasi at hic fugit, optio ad aspernatur error. Eum
                                quia laboriosam repudiandae deleniti, reiciendis aliquam?</p>
                            <div class="container text-center">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 1">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 2">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 3">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 4">
                                    </div>
                                </div>

                            </div>
                        </div>
                            <!-- class Roooms & Practical's -->

                                <!-- WorkShops -->
                        <h2 class="section-title mt-4">WorkShops</h2>
                        <div class="my-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, accusamus ex optio velit soluta
                                hic minus officiis. Iusto necessitatibus architecto doloribus est ipsum soluta, doloremque,
                                exercitationem obcaecati, sed suscipit accusamus. Delectus nulla ducimus perferendis
                                voluptatibus non exercitationem natus neque. Recusandae vero, exercitationem eos iste
                                numquam harum unde! Doloribus, perspiciatis suscipit, qui maiores ab rem incidunt iste
                                veniam non, dolor perferendis facere possimus cum! Dolorem, corporis itaque suscipit ea qui
                                quo minus veniam dolor, beatae tempora, neque tempore consectetur esse? Iusto fuga
                                consectetur atque repellendus aperiam quasi at hic fugit, optio ad aspernatur error. Eum
                                quia laboriosam repudiandae deleniti, reiciendis aliquam?</p>
                            <div class="container text-center">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 1">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 2">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 3">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 4">
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- WorkShops -->

                        <!-- Hostel -->
                            <h2 class="section-title mt-4">Hostel</h2>
                            <div class="my-2">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas recusandae nisi repellat beatae, praesentium iste voluptatem sit nam, eveniet dolores animi enim provident asperiores sunt nemo vitae ut repellendus corporis, officia cumque! Fugit ab illo sapiente ullam eius dolore praesentium minima porro eveniet fuga sed, impedit veritatis culpa suscipit voluptates modi reprehenderit labore doloribus. Incidunt facere, enim non ex magni quibusdam sed vel quae earum, pariatur suscipit accusantium molestiae, ducimus dicta error vero! Quo placeat inventore perferendis error magni ratione perspiciatis quaerat, eum, corrupti at sapiente! Voluptate beatae excepturi veniam nulla, maxime exercitationem cumque laboriosam quas reiciendis, expedita corporis accusantium, eum neque dolor dolorum. Nihil ad, consequuntur hic porro maxime corporis ratione rerum voluptatem aliquam labore voluptatum. Corrupti similique velit quis, vel vero debitis laudantium excepturi illum aliquid, explicabo ab deserunt consequatur perspiciatis minus esse nulla nemo. Officiis dolores perferendis laboriosam, et, expedita doloremque perspiciatis error iure pariatur vero itaque?</p>

                                    <div class="container text-center">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s"
                                                    class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 1">
                                            </div>
                                            <div class="col-4">
                                                <img src="https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI"
                                                    class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 2">
                                            </div>
                                            <div class="col-4">
                                                <img src="https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU="
                                                    class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 3">
                                            </div>
                                            <div class="col-4">
                                                <img src="https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0="
                                                    class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 4">
                                            </div>
                                        </div>
                                    
                                    </div>

                            </div>
                        <!-- Hostel -->


                        <!-- Mess -->
                        <h2 class="section-title mt-4">Mess</h2>
                        <div class="my-2">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas recusandae nisi repellat beatae, praesentium
                                iste voluptatem sit nam, eveniet dolores animi enim provident asperiores sunt nemo vitae ut repellendus
                                corporis, officia cumque! Fugit ab illo sapiente ullam eius dolore praesentium minima porro eveniet fuga sed,
                                impedit veritatis culpa suscipit voluptates modi reprehenderit labore doloribus. Incidunt facere, enim non ex
                                magni quibusdam sed vel quae earum, pariatur suscipit accusantium molestiae, ducimus dicta error vero! Quo
                                placeat inventore perferendis error magni ratione perspiciatis quaerat, eum, corrupti at sapiente! Voluptate
                                beatae excepturi veniam nulla, maxime exercitationem cumque laboriosam quas reiciendis, expedita corporis
                                accusantium, eum neque dolor dolorum. Nihil ad, consequuntur hic porro maxime corporis ratione rerum voluptatem
                                aliquam labore voluptatum. Corrupti similique velit quis, vel vero debitis laudantium excepturi illum aliquid,
                                explicabo ab deserunt consequatur perspiciatis minus esse nulla nemo. Officiis dolores perferendis laboriosam,
                                et, expedita doloremque perspiciatis error iure pariatur vero itaque?</p>
                        
                            <div class="container text-center">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 1">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI"
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 2">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 3">
                                    </div>
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0="
                                            class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover" alt="Image 4">
                                    </div>
                                </div>
                        
                            </div>
                        
                        </div>
                        <!-- Mess -->
                    </div>
            </div>
    </section>

    <?php
    include "./include/footer.php";
    ?>

    <script src="./js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".top-tab");
            const contents = document.querySelectorAll(".tab-content-custom");

            window.showTabSection = function (tabId) {
                const targetContent = document.getElementById(tabId);
                const targetButton = document.querySelector(`.top-tab[data-tab="${tabId}"]`);

                if (!targetContent || !targetButton) return;

                tabs.forEach((button) => button.classList.remove("active"));
                contents.forEach((content) => content.classList.remove("active"));

                targetButton.classList.add("active");
                targetContent.classList.add("active");
            };

            tabs.forEach((btn) => {
                btn.addEventListener("click", function () {
                    window.showTabSection(btn.dataset.tab);
                });
            });

            
            function handleHash() {
                const hash = window.location.hash;
                if (!hash) return;

                const tabId = hash.replace("#tab-", "").replace("#", "");

                setTimeout(() => {
                    const scrollTarget = document.getElementById('top-tabs-section');
                    window.showTabSection(tabId);

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
                }, 500);
            }

            handleHash();
            window.addEventListener("hashchange", handleHash);
        });
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
        if (document.querySelector(".facilitiesSwiper")) {
            new Swiper(".facilitiesSwiper", {
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".facilities-pagination",
                    clickable: true,
                }
            });
        }
    </script>
</body>

</html>