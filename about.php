<?php
$page_title = "About us";
include("include/header.php");
?>
<body>
    <!-- Nav-Bar Add here -->

    <?php
    include "./include/navbar.php";
    $topTabsConfig = [
        'id' => 'top-tabs-section',
        'title' => 'Explore METI',
        'image' => './Assets/577a7723-2643x1762.jpg',
        'image_alt' => 'METI campus banner',
        'active_tab' => 'about',
        'buttons' => [
            [
                'tab' => 'about',
                'label' => 'About METI',
                'icon' => 'fa fa-building',
            ],
            [
                'tab' => 'whyus',
                'label' => 'Why Us',
                'icon' => 'fa fa-graduation-cap',
            ],
            [
                'tab' => 'staff-faculty',
                'label' => 'Staff & Faculty',
                'icon' => 'fa fa-eye',
            ],
            [
                'tab' => 'facilities',
                'label' => 'Facilities',
                'icon' => 'fa fa-bullseye',
            ],
        ],
    ];
    ?>
    <section>
        <div style="background: linear-gradient(135deg,#eef2ff,#f8fafc);">
            <div class="container">

                <!-- TOP BUTTONS -->
                <?php include "./include/top-tabs-banner.php"; ?>

                <!-- CONTENT AREA -->

                <div class="tab-content-custom active" id="about">
                    <!-- Overview, History, Mission, Values -->


<?php
$overview = [
    "title" => "Overview",
    "icon" => "fa-info-circle",
    "description" => "Cochin Shipyard was incorporated in the year 1972 as a fully owned Government of India company. In the last three decades the company has emerged as a forerunner in the Indian Shipbuilding & Ship repair industry. This yard can build and repair the largest vessels in India.

The Marine Engineering Training Institute (METI) of the Cochin Shipyard Ltd. was set up as a division of CSL in September 1993 as recommended by the Expert Committee on Maritime Education and Training.

Grade A1 by Lloyd's Register."
];

$stats = [
    [
        "icon" => "fa-star",
        "color" => "primary",
        "title" => "Grade A1",
        "desc" => "Lloyd's Rating"
    ],
    [
        "icon" => "fa-graduation-cap",
        "color" => "success",
        "title" => "160 Seats",
        "desc" => "Annual GME Capacity"
    ],
    [
        "icon" => "fa-users",
        "color" => "info",
        "title" => "World-Class",
        "desc" => "Faculty Team"
    ]
];
?>

                    <!-- Overview -->
                        <div class="row gy-4 p-5 mb-5" data-aos="fade-up">

                            <!-- Left Content -->
                            <div class="col-lg-6 content-text">
                                <h2 class="section-title mb-4">
                                    <i class="fa-solid <?= $overview['icon']; ?> me-2 text-primary"></i>
                                    <?= $overview['title']; ?>
                                </h2>

                                <p class="lead fs-5 mb-3" style=" line-height:1.2;">
                                    <?= nl2br($overview['description']); ?>
                                </p>
                            </div>

                            <!-- Right Stats -->
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="row g-4">

                                    <?php foreach ($stats as $index => $stat): ?>
                                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= 50 + ($index * 25); ?>">
                                            <div class="stat-box text-center">
                                                <i class="fa <?= $stat['icon']; ?> fa-2x text-<?= $stat['color']; ?> mb-3"></i>
                                                <h4 class="fw-bold text-<?= $stat['color']; ?>">
                                                    <?= $stat['title']; ?>
                                                </h4>
                                                <p class="text-muted"><?= $stat['desc']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                        </div>
                    <!-- History -->
<?php
$history_section = [
    "title" => "Our History",
    "icon" => "fa-history",
    "description" => "Established in 1993 as CSL division, METI pioneered maritime training in India. Vigyana Sagar campus was inaugurated by the Honourable Prime Minister in 2021."
];

$timeline = [
    [
        "year" => "1993",
        "title" => "Foundation",
        "desc" => "METI established as CSL training division per DGS recommendations",
        "icon" => "fa-building"
    ],
    [
        "year" => "2021",
        "title" => "New Era",
        "desc" => "Vigyana Sagar campus inaugurated - 5x capacity expansion",
        "icon" => "fa-graduation-cap"
    ],
    [
        "year" => "2024",
        "title" => "Excellence",
        "desc" => "Lloyd's Register awards Grade A1 - Highest possible rating",
        "icon" => "fa-star"
    ]
];
?>

                        <div class="row gy-4 p-5 mb-5" data-aos="fade-up">

                            <!-- Left Content -->
                            <div class="col-lg-6 content-text">
                                <h2 class="section-title">
                                    <i class="fa <?= $history_section['icon']; ?> me-2 text-success"></i>
                                    <?= $history_section['title']; ?>
                                </h2>

                                <p class="lead fs-5 ">
                                    <?= $history_section['description']; ?>
                                </p>
                            </div>

                            <!-- Timeline -->
                            <div class="col-lg-6 content-text">
                                <div class="timeline-modern">

                                    <?php foreach ($timeline as $item): ?>
                                        <div class="timeline-item">

                                            <div class="timeline-icon">
                                                <i class="fa <?= $item['icon']; ?>"></i>
                                            </div>

                                            <div class="timeline-content">
                                                <h5 class="fw-bold">
                                                    <?= $item['year']; ?>: <?= $item['title']; ?>
                                                </h5>
                                                <p><?= $item['desc']; ?></p>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                        </div>

                    <!-- Our Mission -->
                     <?php
$mission_section = [
    "title" => "Our Mission",
    "icon" => "fa-bullseye",
    "description" => "To deliver world-class maritime training that produces technically proficient, safety-conscious marine engineers ready for global shipping challenges."
];

$mission_points = [
    [
        "icon" => "fa-anchor",
        "color" => "primary",
        "title" => "Practical Excellence",
        "desc" => "60% hands-on training with real engines, simulators & afloat experience at Cochin Shipyard"
    ],
    [
        "icon" => "fa-shield-alt",
        "color" => "success",
        "title" => "Safety First",
        "desc" => "STCW-compliant training with emphasis on emergency response & risk management"
    ]
];
?>

                        <div class="row gy-4 p-5 mb-5" data-aos="fade-up">
                            <!-- Left Content -->
                            <div class="col-lg-5 content-text">
                                <h2 class="section-title">
                                    <i class="fa <?= $mission_section['icon']; ?> me-2 text-info"></i>
                                    <?= $mission_section['title']; ?>
                                </h2>

                                <p class="lead fs-6 text-muted lh-lg">
                                    <?= $mission_section['description']; ?>
                                </p>
                            </div>
                            <!-- Right Cards -->
                            <div class="col-lg-7 order-1 order-lg-2">
                                <div class="row g-4">

                                    <?php foreach ($mission_points as $index => $point): ?>
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= 50 + ($index * 50); ?>">
                                            
                                            <div class="mission-point p-4 text-center">

                                                <div class="mb-4 d-flex justify-content-center">
                                                    <i class="fa <?= $point['icon']; ?> fa-3x text-<?= $point['color']; ?>"></i>
                                                </div>

                                                <h5 class="fw-bold mb-3"><?= $point['title']; ?></h5>

                                                <p class="text-muted"><?= $point['desc']; ?></p>

                                            </div>

                                        </div>
                                    <?php endforeach; ?>

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
<?php
$achievements = [
    [
        "image" => "./Assets/image/2-days-scba-886x1147.jpg",
        "title" => "Fire Safety Training",
        "desc" => "2-day SCBA training program conducted with practical safety drills."
    ],
    [
        "image" => "./Assets/image/3-days-bff-886x1147.jpg",
        "title" => "Basic Fire Fighting",
        "desc" => "3-day BFF course covering emergency handling and fire control."
    ],
    [
        "image" => "./Assets/image/advert2-886x1108.jpeg",
        "title" => "Industry Collaboration",
        "desc" => "Collaboration with global maritime companies for training excellence."
    ],
    [
        "image" => "./Assets/image/maersk-advrt-2-886x1083.jpg",
        "title" => "Maersk Partnership",
        "desc" => "Training partnership with Maersk for global exposure."
    ]
];
?>
                    <div data-aos="fade-up">
                        <h2 class="section-title mb-4">
                            <i class="fa fa-trophy me-2 text-danger"></i>Achievements
                        </h2>

                        <div class="row row-cols-1 row-cols-md-4 g-4">

                            <?php foreach ($achievements as $item): ?>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">

                                        <img src="<?= $item['image']; ?>" 
                                            class="card-img-top" 
                                            alt="<?= $item['title']; ?>">

                                        <div class="card-body">
                                            <h5 class="card-title"><?= $item['title']; ?></h5>
                                            <p class="card-text text-muted"><?= $item['desc']; ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                    <!-- 2. AWARDS & CERTIFICATION -->

<?php
$awards_section = [
    "title" => "Awards & Certificates",
    "icon" => "fa-trophy"
];

$awards = [
    [
        "image" => "./Assets/image/2-days-scba-886x1147.jpg",
        "title" => "SCBA Certification",
        "desc" => "2-day SCBA training certification with hands-on safety drills."
    ],
    [
        "image" => "./Assets/image/3-days-bff-886x1147.jpg",
        "title" => "Fire Fighting Certificate",
        "desc" => "Basic Fire Fighting course completion certificate."
    ],
    [
        "image" => "./Assets/image/advert2-886x1108.jpeg",
        "title" => "Industry Recognition",
        "desc" => "Awarded for excellence in maritime training."
    ],
    [
        "image" => "./Assets/image/maersk-advrt-2-886x1083.jpg",
        "title" => "Maersk Certification",
        "desc" => "Certified partnership program with Maersk."
    ]
];
?>

                    <div data-aos="fade-up">

                        <h2 class="section-title mb-4 mt-5">
                            <i class="fa <?= $awards_section['icon']; ?> me-2 text-danger"></i>
                            <?= $awards_section['title']; ?>
                        </h2>

                        <div class="row row-cols-1 row-cols-md-4 g-4">

                            <?php foreach ($awards as $item): ?>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">

                                        <img src="<?= $item['image']; ?>" 
                                            class="card-img-top" 
                                            alt="<?= $item['title']; ?>">

                                        <div class="card-body">
                                            <h5 class="card-title"><?= $item['title']; ?></h5>
                                            <p class="card-text text-muted"><?= $item['desc']; ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                    <!-- 3. PLACEMENT -->

<?php
$placement_section = [
    "title" => "Placement Record",
    "icon" => "fa-briefcase"
];

$placements = [
    [
        "slot" => "01",
        "name" => "Devendra Kumar",
        "sponsor" => "Maersk",
        "batch" => "2023",
        "image" => "./Assets/faculty/elizabeth-k-a-photo-413x531.jpg",
        "testimonial" => "METI training made me job-ready from day one!",
        "author" => "Rahul K."
    ],
    [
        "slot" => "02",
        "name" => "Aman Singh",
        "sponsor" => "Shell",
        "batch" => "2022",
        "image" => "./Assets/faculty/elizabeth-k-a-photo-413x531.jpg",
        "testimonial" => "Great faculty and placement support!",
        "author" => "Aman S."
    ],
    [
        "slot" => "03",
        "name" => "Rohit Sharma",
        "sponsor" => "BPCL",
        "batch" => "2021",
        "image" => "./Assets/faculty/elizabeth-k-a-photo-413x531.jpg",
        "testimonial" => "Best institute for marine training!",
        "author" => "Rohit"
    ]
];
?>
                    <div class="my-3" data-aos="fade-up">

                        <h2 class="section-title mb-4 mt-3">
                            <i class="fa <?= $placement_section['icon']; ?> me-2 text-success"></i>
                            <?= $placement_section['title']; ?>
                        </h2>

                        <div class="placement-slider">
                            <div class="placement-track">

                                <?php foreach ($placements as $item): ?>
                                    <div class="card">

                                        <div class="row g-0">

                                            <!-- Image -->
                                            <div class="col-md-3 ml-5 py-1" style="width: 110px">
                                                <img src="<?= $item['image']; ?>" 
                                                    class="img-fluid rounded-circle" 
                                                    alt="<?= $item['name']; ?>" style="width: 110px; height: 110px; object-fit: cover;">
                                            </div>

                                            <!-- Details -->
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6><span class="label text-danger">Slot No:</span> <?= $item['slot']; ?></h6>
                                                    <h6><span class="label text-primary">Name:</span> <?= $item['name']; ?></h6>
                                                    <h6><span class="label text-success">Sponsored by:</span> <?= $item['sponsor']; ?></h6>
                                                    <h6><span class="label text-warning">Batch:</span> <?= $item['batch']; ?></h6>
                                                </div>
                                            </div>

                                            <!-- Testimonial -->
                                            <div class="placement-testimonial">
                                                <i class="fa-solid fa-quote-left quote-icon"></i>
                                                <p class="testimonial-text"><?= $item['testimonial']; ?></p>
                                                <small class="author">- <?= $item['author']; ?></small>
                                            </div>

                                        </div>

                                    </div>
                                <?php endforeach; ?>

                            </div>

                            <!-- Navigation -->
                            <button class="slider-nav slider-prev" onclick="scrollSlider('prev')">
                                <i class="fa fa-chevron-left"></i>
                            </button>

                            <button class="slider-nav slider-next" onclick="scrollSlider('next')">
                                <i class="fa fa-chevron-right"></i>
                            </button>

                        </div>

                    </div>
                </div>

                <?php
                $faculty_departments = [
                    [
                        'name' => 'Department of Marine Engineering',
                        'aos_delay' => 100,
                        'members' => [
                            [
                                'name' => 'Saju M D',
                                'role' => 'Course In-Charge',
                                'qualification' => 'B.E (Marine), M.Tech (Ocean Engineering)',
                                'experience' => '15+ Years',
                                'description' => 'Specializes in Marine Diesel Engines, Ship Stability and Naval Architecture. Oversees the entire GME course curriculum and practical training at METI.',
                                'tags' => ['Marine Diesel Engines', 'Ship Stability', 'Naval Architecture'],
                                'image' => './Assets/faculty/saju-md-course-in-charge-photo-706x942.jpg',
                                'card_summary' => 'Marine Diesel Engines · Ship Stability',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Department of Nautical Studies',
                        'aos_delay' => 150,
                        'members' => [
                            [
                                'name' => 'Noushad T H',
                                'role' => 'Faculty - Nautical Studies',
                                'qualification' => 'B.Sc (Nautical Science), M.Phil',
                                'experience' => '10+ Years',
                                'description' => 'Expert in Navigation, Maritime Laws and Cargo Operations. Trains marine cadets in bridge watchkeeping and integrated navigation systems.',
                                'tags' => ['Navigation Systems', 'Maritime Laws', 'Cargo Operations'],
                                'image' => './Assets/faculty/noushad-th-706x872.jpeg',
                                'card_summary' => 'Navigation · Maritime Laws',
                            ],
                        ],
                    ],
                ];
                ?>

                <!-- staff-faculty -->
                <div class="tab-content-custom container" id="staff-faculty">

                    <!-- Trainers Section -->
                    <section id="trainers" class="section trainers py-4">
                        <?php foreach ($faculty_departments as $department): ?>
                            <div class="faculty-dept-block" data-aos="fade-up" data-aos-delay="<?= $department['aos_delay']; ?>">
                                <div class="faculty-dept-header section-title">
                                    <i class="fas fa-graduation-cap"></i><?= htmlspecialchars($department['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </div>

                                <div class="row g-4">
                                    <?php foreach ($department['members'] as $member): ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="faculty-card" onclick='openFacultyModal(
                                                <?= json_encode($member['name']); ?>,
                                                <?= json_encode($member['role']); ?>,
                                                <?= json_encode($department['name']); ?>,
                                                <?= json_encode($member['qualification']); ?>,
                                                <?= json_encode($member['experience']); ?>,
                                                <?= json_encode($member['description']); ?>,
                                                <?= json_encode($member['tags']); ?>,
                                                <?= json_encode($member['image']); ?>
                                            )'>
                                                <div class="faculty-card-img-wrap">
                                                    <img src="<?= htmlspecialchars($member['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?>">
                                                    <div class="faculty-card-overlay">
                                                        <i class="fa fa-expand-alt"></i> View Profile
                                                    </div>
                                                </div>

                                                <div class="faculty-card-body">
                                                    <h5><?= htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                                                    <span class="faculty-role"><?= htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8'); ?></span>
                                                    <p><?= htmlspecialchars($member['card_summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </section>
                    <!-- /Trainers Section -->
                </div>

                    <?php
                    $facility_feature = [
                        'title' => 'Campus & Infrastructure',
                        'slides' => [
                            'https://picsum.photos/800/500?1',
                            'https://picsum.photos/800/500?2',
                            'https://picsum.photos/800/500?3',
                        ],
                        'content_title' => 'Campus & Infrastructure',
                        'paragraphs' => [
                            'Collection of print as well as electronic resources. It has around 30534 volumes...',
                            'The services and operations in the Central Library are fully computerized... Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam possimus nesciunt ipsa dolorem odit molestiae voluptatum delectus est ex voluptates tempora placeat incidunt excepturi qui, nisi harum! Tempora quibusdam odio voluptatum consectetur eligendi quo debitis error ipsum sit provident.',
                            'Keeping the library on modern techniques, the reading materials has been classified... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aut, quod similique quasi doloribus labore nulla beatae quae sunt nihil tenetur architecto, modi iure recusandae cupiditate facere porro corporis eum dolorem, excepturi aperiam possimus nostrum rem? Totam quam est recusandae aliquam vitae, quas dolor libero assumenda consectetur, magni reiciendis blanditiis provident ab? Placeat voluptatum voluptate suscipit saepe nostrum quae, eaque iste corrupti animi inventore doloribus cumque ut at illo! Facilis cum quaerat omnis nam modi, eaque animi optio maxime reprehenderit officiis aspernatur cupiditate possimus vel facere dignissimos ducimus tempore deleniti et. Commodi iure fugit quaerat pariatur incidunt et dolor maiores.',
                            'The library is managed by highly qualified professionals...',
                            '(Aur bhi content add kar sakte ho scroll ke liye)',
                        ],
                    ];

                    $facility_sections = [
                        [
                            'title' => "Class Roooms & Practical's",
                            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, accusamus ex optio velit soluta hic minus officiis. Iusto necessitatibus architecto doloribus est ipsum soluta, doloremque, exercitationem obcaecati, sed suscipit accusamus. Delectus nulla ducimus perferendis voluptatibus non exercitationem natus neque. Recusandae vero, exercitationem eos iste numquam harum unde! Doloribus, perspiciatis suscipit, qui maiores ab rem incidunt iste veniam non, dolor perferendis facere possimus cum! Dolorem, corporis itaque suscipit ea qui quo minus veniam dolor, beatae tempora, neque tempore consectetur esse? Iusto fuga consectetur atque repellendus aperiam quasi at hic fugit, optio ad aspernatur error. Eum quia laboriosam repudiandae deleniti, reiciendis aliquam?',
                            'images' => [
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s',
                                'https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI',
                                'https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU=',
                                'https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0=',
                            ],
                        ],
                        [
                            'title' => 'WorkShops',
                            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, accusamus ex optio velit soluta hic minus officiis. Iusto necessitatibus architecto doloribus est ipsum soluta, doloremque, exercitationem obcaecati, sed suscipit accusamus. Delectus nulla ducimus perferendis voluptatibus non exercitationem natus neque. Recusandae vero, exercitationem eos iste numquam harum unde! Doloribus, perspiciatis suscipit, qui maiores ab rem incidunt iste veniam non, dolor perferendis facere possimus cum! Dolorem, corporis itaque suscipit ea qui quo minus veniam dolor, beatae tempora, neque tempore consectetur esse? Iusto fuga consectetur atque repellendus aperiam quasi at hic fugit, optio ad aspernatur error. Eum quia laboriosam repudiandae deleniti, reiciendis aliquam?',
                            'images' => [
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s',
                                'https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI',
                                'https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU=',
                                'https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0=',
                            ],
                        ],
                        [
                            'title' => 'Hostel',
                            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas recusandae nisi repellat beatae, praesentium iste voluptatem sit nam, eveniet dolores animi enim provident asperiores sunt nemo vitae ut repellendus corporis, officia cumque! Fugit ab illo sapiente ullam eius dolore praesentium minima porro eveniet fuga sed, impedit veritatis culpa suscipit voluptates modi reprehenderit labore doloribus. Incidunt facere, enim non ex magni quibusdam sed vel quae earum, pariatur suscipit accusantium molestiae, ducimus dicta error vero! Quo placeat inventore perferendis error magni ratione perspiciatis quaerat, eum, corrupti at sapiente! Voluptate beatae excepturi veniam nulla, maxime exercitationem cumque laboriosam quas reiciendis, expedita corporis accusantium, eum neque dolor dolorum. Nihil ad, consequuntur hic porro maxime corporis ratione rerum voluptatem aliquam labore voluptatum. Corrupti similique velit quis, vel vero debitis laudantium excepturi illum aliquid, explicabo ab deserunt consequatur perspiciatis minus esse nulla nemo. Officiis dolores perferendis laboriosam, et, expedita doloremque perspiciatis error iure pariatur vero itaque?',
                            'images' => [
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s',
                                'https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI',
                                'https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU=',
                                'https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0=',
                            ],
                        ],
                        [
                            'title' => 'Mess',
                            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas recusandae nisi repellat beatae, praesentium iste voluptatem sit nam, eveniet dolores animi enim provident asperiores sunt nemo vitae ut repellendus corporis, officia cumque! Fugit ab illo sapiente ullam eius dolore praesentium minima porro eveniet fuga sed, impedit veritatis culpa suscipit voluptates modi reprehenderit labore doloribus. Incidunt facere, enim non ex magni quibusdam sed vel quae earum, pariatur suscipit accusantium molestiae, ducimus dicta error vero! Quo placeat inventore perferendis error magni ratione perspiciatis quaerat, eum, corrupti at sapiente! Voluptate beatae excepturi veniam nulla, maxime exercitationem cumque laboriosam quas reiciendis, expedita corporis accusantium, eum neque dolor dolorum. Nihil ad, consequuntur hic porro maxime corporis ratione rerum voluptatem aliquam labore voluptatum. Corrupti similique velit quis, vel vero debitis laudantium excepturi illum aliquid, explicabo ab deserunt consequatur perspiciatis minus esse nulla nemo. Officiis dolores perferendis laboriosam, et, expedita doloremque perspiciatis error iure pariatur vero itaque?',
                            'images' => [
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi9TKfSm6mAe_SR5Z3xYOtmlpinEhJ9_MC_A&s',
                                'https://news.uchicago.edu/sites/default/files/styles/gallery/public/images/2018-07/Campus.jpg?h=81f7e332&itok=VDRipNcI',
                                'https://media.istockphoto.com/id/948400550/photo/students-in-balliol-college-oxford-england.jpg?s=612x612&w=0&k=20&c=HTHAY0WjnlJeYOM2ii60JRrMlZr50k--wpVqq3yYGrU=',
                                'https://media.istockphoto.com/id/1323420737/photo/aerial-over-north-carolina-central-university-in-the-spring.jpg?s=612x612&w=0&k=20&c=KgNudHx1-Dnf7PaZprc6LgevoyjCUt2LV-ca2KkDcH0=',
                            ],
                        ],
                    ];
                    ?>

                    <!-- facilities -->
                    <div class="tab-content-custom " id="facilities">

                        <h2 class="section-title"><?= htmlspecialchars($facility_feature['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <div class="my-4">
                            <div class="row facilities-overlap-row align-items-center">

                                <div class="col-md-7 p-0 facilities-slider-col">
                                    <div class="swiper facilitiesSwiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($facility_feature['slides'] as $index => $slide): ?>
                                                <div class="swiper-slide">
                                                    <img
                                                        src="<?= htmlspecialchars($slide, ENT_QUOTES, 'UTF-8'); ?>"
                                                        class="img-fluid w-100"
                                                        alt="Facility Slide <?= $index + 1; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <div class="swiper-pagination facilities-pagination"></div>
                                    </div>
                                </div>

                                <div class="col-md-5 facilities-content-col">
                                    <div class="text-white p-4 facilities-content-box">
                                        <div class="content-scroll">
                                            <h4 class="mb-3"><?= htmlspecialchars($facility_feature['content_title'], ENT_QUOTES, 'UTF-8'); ?></h4>

                                            <?php foreach ($facility_feature['paragraphs'] as $paragraph): ?>
                                                <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php foreach ($facility_sections as $section): ?>
                            <h2 class="section-title mt-4"><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                            <div class="my-2">
                                <p><?= htmlspecialchars($section['description'], ENT_QUOTES, 'UTF-8'); ?></p>

                                <div class="container text-center">
                                    <div class="row g-3">
                                        <?php foreach ($section['images'] as $index => $image): ?>
                                            <div class="col-4">
                                                <img
                                                    src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>"
                                                    class="img-fluid w-100 rounded shadow-sm h-100 object-fit-cover"
                                                    alt="<?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?> Image <?= $index + 1; ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
    </section>

    <?php
    include "./include/footer.php";
    ?>

    <!-- ====== FACULTY PROFILE MODAL ====== -->
<div class="faculty-modal-backdrop" id="facultyModalBackdrop" onclick="closeFacultyModal()"></div>
    <div class="faculty-modal-popup" id="facultyModalPopup" role="dialog" aria-modal="true">
        <!-- Close Button -->
        <button class="faculty-modal-close" onclick="closeFacultyModal()" title="Close">
            <i class="fa fa-times"></i>
        </button>

        <div class="faculty-modal-inner">
            <!-- LEFT: Photo Panel -->
            <div class="faculty-modal-photo-panel">
                <div class="faculty-modal-img-wrap">
                    <img id="fm-photo" src="" alt="Faculty Photo">
                </div>
                <div class="faculty-modal-badge-row">
                    <span class="fm-exp-badge"><i class="fa fa-clock me-1"></i><span id="fm-exp"></span></span>
                </div>
            </div>

            <!-- RIGHT: Info Panel -->
            <div class="faculty-modal-info-panel">
                <div class="faculty-modal-header-block">
                    <h3 id="fm-name"></h3>
                    <span class="fm-role-pill" id="fm-role"></span>
                    <p class="fm-dept" id="fm-dept"><i class="fa fa-university me-1"></i><span></span></p>
                </div>

                <div class="fm-detail-row">
                    <div class="fm-detail-item">
                        <i class="fa fa-graduation-cap"></i>
                        <div>
                            <small>Qualification</small>
                            <strong id="fm-qual"></strong>
                        </div>
                    </div>
                    <div class="fm-detail-item">
                        <i class="fa fa-briefcase"></i>
                        <div>
                            <small>Experience</small>
                            <strong id="fm-exp2"></strong>
                        </div>
                    </div>
                </div>

                <div class="fm-about-block">
                    <h6><i class="fa fa-user me-2"></i>About</h6>
                    <p id="fm-desc"></p>
                </div>

                <div class="fm-skills-block">
                    <h6><i class="fa fa-tags me-2"></i>Specializations</h6>
                    <div class="fm-tags" id="fm-tags"></div>
                </div>
            </div>
        </div>
</div>
    <!-- ====== END FACULTY MODAL ====== -->

    <script src="./js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
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

    <script>
    /* ====== FACULTY MODAL FUNCTIONS ====== */
    function openFacultyModal(name, role, dept, qual, exp, desc, tags, img) {
        document.getElementById('fm-name').textContent  = name;
        document.getElementById('fm-role').textContent  = role;
        document.getElementById('fm-dept').innerHTML    = '<i class="fa fa-university me-1"></i>' + dept;
        document.getElementById('fm-qual').textContent  = qual;
        document.getElementById('fm-exp').textContent   = exp;
        document.getElementById('fm-exp2').textContent  = exp;
        document.getElementById('fm-desc').textContent  = desc;
        document.getElementById('fm-photo').src         = img;
        document.getElementById('fm-photo').alt         = name;

        // Build tags
        const tagsContainer = document.getElementById('fm-tags');
        tagsContainer.innerHTML = '';
        tags.forEach(function(tag) {
            const span = document.createElement('span');
            span.className = 'fm-tag';
            span.textContent = tag;
            tagsContainer.appendChild(span);
        });

        // Get current scroll position
        const scrollTop = window.scrollY;
        
        // Apply position to backdrop and modal wrapper
        const backdrop = document.getElementById('facultyModalBackdrop');
        const popup = document.getElementById('facultyModalPopup');
        
        backdrop.style.top = scrollTop + 'px';
        popup.style.top = scrollTop + 'px';

        // Show modal & prevent background scroll
        document.body.style.overflow = 'hidden';
        backdrop.classList.add('active');
        popup.classList.add('active');
    }

    function closeFacultyModal() {
        // Restore background scroll
        document.body.style.overflow = '';
        const backdrop = document.getElementById('facultyModalBackdrop');
        const popup = document.getElementById('facultyModalPopup');
        
        backdrop.classList.remove('active');
        popup.classList.remove('active');
        
        // small delay before removing top to avoid jump
        setTimeout(() => {
            backdrop.style.top = '';
            popup.style.top = '';
        }, 300);
    }

    // Close on Escape key or backdrop click
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeFacultyModal();
    });
    
    document.getElementById('facultyModalPopup').addEventListener('click', function(e) {
        // If clicking directly on the scrollable wrapper (outside the inner card), close it
        if (e.target === this) {
            closeFacultyModal();
        }
    });
    </script>
</body>

</html>
