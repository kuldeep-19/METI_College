<?php
/**
 * Current Vacancies - Placement Department
 * METI College Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Vacancies | METI Placement Dept</title>
    <!-- CSS Includes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php include "../include/navbar.php"; ?>

    <!-- HERO SECTION -->
    <section class="placement-hero" style="padding: 100px 0; background-color: var(--navy); color: white; text-align: center; position: relative; overflow: hidden;">
        <div class="container" style="position: relative; z-index: 2;">
            <h1 class="display-4 fw-bold mb-3" data-aos="fade-down">Current Opportunities</h1>
            <p class="lead opacity-75 mb-0" data-aos="fade-up">Join the elite force of maritime professionals with our partner shipping lines.</p>
        </div>
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,31,63,0.9), rgba(0,128,128,0.4)); z-index: 1;"></div>
    </section>

    <!-- VACANCIES SECTION -->
    <section class="vacancies-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-navy">Open Positions</h2>
                <p class="text-muted">Explore current openings in the merchant navy and maritime management.</p>
            </div>

            <div class="accordion-container">
                <?php
                $vacancies = [
                    [
                        "title" => "Chief Engineer",
                        "company" => "Maersk Line",
                        "logo" => "../Assets/partner-log/bsm1-1-173x100.jpg",
                        "audience" => "Alumni",
                        "dept" => "Engineering",
                        "exp" => "10+ Years",
                        "location" => "Ocean Going Vessels",
                        "deadline" => "Open",
                        "desc" => "Assumed overall command of the engine department. Responsible for ship's technical operations and safety management.",
                        "requirements" => ["MEO Class I COC holder", "Experience on large container vessels", "Leadership & Crisis Management skills"]
                    ],
                    [
                        "title" => "Technical Superintendent",
                        "company" => "Synergy Group",
                        "logo" => "../Assets/partner-log/synergy1-355x352.jpg",
                        "audience" => "Alumni",
                        "dept" => "Shore-Based",
                        "exp" => "Chief Engineer Experience",
                        "location" => "Singapore/Chennai",
                        "deadline" => "30th May 2024",
                        "desc" => "Overseeing ship maintenance, refit programs, and dry-docking for a fleet of oil tankers.",
                        "requirements" => ["Proven track record as Chief Engineer", "Shore-based experience preferred", "Strong technical auditing skills"]
                    ],
                    [
                        "title" => "Junior Engineer (GME)",
                        "company" => "Maersk Line",
                        "logo" => "../Assets/partner-log/bsm1-1-173x100.jpg",
                        "audience" => "Cadet",
                        "dept" => "Engineering",
                        "exp" => "Freshers (2024 batch)",
                        "location" => "Foreign Going Vessels",
                        "deadline" => "30th April 2024",
                        "desc" => "Assisting the 4th Engineer in daily engine room operations, maintenance of auxiliary machinery, and bunkering processes.",
                        "requirements" => ["Graduate Marine Engineer (METI Preferred)", "Valid Passport & INDoS", "Excellent English proficiency"]
                    ],
                    [
                        "title" => "Electro-Technical Officer (ETO)",
                        "company" => "Synergy Group",
                        "logo" => "../Assets/partner-log/synergy1-355x352.jpg",
                        "audience" => "Cadet",
                        "dept" => "Electrical",
                        "exp" => "0-2 Years",
                        "location" => "Container Carriers",
                        "deadline" => "15th May 2024",
                        "desc" => "Maintenance and repair of all electronic equipment, communication systems, and automated control systems on board.",
                        "requirements" => ["Certified ETO course from DGS approved institute", "PLC & Automation knowledge", "STCW 2010 Basic Safety Training"]
                    ],
                    [
                        "title" => "Senior ETO",
                        "company" => "Fleet Management",
                        "logo" => "../Assets/partner-log/fleet-logo1-256x97.jpg",
                        "audience" => "Alumni",
                        "dept" => "Electrical",
                        "exp" => "3+ Years Sailing",
                        "location" => "Global Trade",
                        "deadline" => "Open",
                        "desc" => "Lead ETO responsible for complex automation systems and heavy electrical plant maintenance on board.",
                        "requirements" => ["Valid ETO COC", "Experience with MAN B&W ME Engines", "High voltage safety certification"]
                    ]
                ];

                foreach ($vacancies as $index => $v):
                    $delay = $index * 100;
                    $badgeClass = ($v['audience'] == 'Alumni') ? 'badge-alumni' : 'badge-cadet';
                ?>
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <div class="accordion-header">
                        <div class="d-flex align-items-center">
                            <img src="<?= $v['logo'] ?>" alt="<?= $v['company'] ?>" class="company-logo-header">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="audience-badge <?= $badgeClass ?>"><?= $v['audience'] ?></span>
                                    <span class="job-title text-navy"><?= $v['title'] ?></span>
                                </div>
                                <small class="text-muted fw-bold"><?= $v['dept'] ?></small>
                            </div>
                        </div>
                        <div class="icon-box">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="content-inner">
                            <div class="vacancy-meta">
                                <div class="meta-item">
                                    <span class="meta-label">Hiring Company</span>
                                    <span class="meta-value text-teal" style="font-size: 1.1rem;"><?= $v['company'] ?></span>
                                </div>
                                <div class="meta-item">
                                    <span class="meta-label">Experience</span>
                                    <span class="meta-value"><?= $v['exp'] ?></span>
                                </div>
                                <div class="meta-item">
                                    <span class="meta-label">Location</span>
                                    <span class="meta-value"><?= $v['location'] ?></span>
                                </div>
                                <div class="meta-item">
                                    <span class="meta-label">Deadline</span>
                                    <span class="meta-value text-danger"><?= $v['deadline'] ?></span>
                                </div>
                            </div>
                            
                            <h5 class="fw-bold mb-3">Job Description:</h5>
                            <p class="text-muted"><?= $v['desc'] ?></p>

                            <h5 class="fw-bold mb-3">Key Requirements:</h5>
                            <ul class="job-details-list">
                                <?php foreach ($v['requirements'] as $req): ?>
                                <li><i class="fa-solid fa-circle-check"></i> <?= $req ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="apply-container">
                                <a href="../apply-now.php?job=<?= urlencode($v['title']) ?>" class="btn-apply">Apply for this Position</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include "../include/footer.php"; ?>

    <!-- JS Includes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="./script.js"></script>
</body>

</html>
