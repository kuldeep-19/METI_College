<?php
/**
 * Apply Now Page
 * METI College Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now | METI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <style>
        :root {
            --navy: #001f3f;
            --teal: #008080;
        }
        .apply-hero {
            background: linear-gradient(135deg, var(--navy), #003366);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .form-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: -50px;
            border: 1px solid #edf2f7;
        }
        .form-label {
            font-weight: 600;
            color: var(--navy);
            font-size: 0.9rem;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #e2e8f0;
        }
        .form-control:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.1);
        }
        .btn-apply {
            background: var(--navy);
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 700;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-apply:hover {
            background: var(--teal);
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="bg-light">

    <?php include "./include/navbar.php"; ?>

    <section class="apply-hero">
        <div class="container" data-aos="fade-up">
            <h1 class="fw-bold">Course Application Form</h1>
            <p class="opacity-75">Join the elite ranks of Maritime Professionals</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <div class="form-card">
                        <form action="save_inquiry.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+91 00000 00000" required>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                                    <label class="form-label">Select Course</label>
                                    <select name="subject" class="form-select form-control" required>
                                        <option value="" selected disabled>Choose a course...</option>
                                        <option value="GME">Graduate Marine Engineering (GME)</option>
                                        <option value="OCTCO">Oil & Chemical Tanker Cargo Operation (OCTCO)</option>
                                        <option value="GTCO">Liquefied Gas Tanker Operation (GTCO)</option>
                                        <option value="BST">Basic Safety Training (BST)</option>
                                        <option value="AFF">Advance Fire Fighting (AFF)</option>
                                        <option value="MFA">Medical First Aid (MFA)</option>
                                    </select>
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                    <label class="form-label">Message / Query (Optional)</label>
                                    <textarea name="message" class="form-control" rows="4" placeholder="How can we help you?"></textarea>
                                </div>
                                <div class="col-12 mt-4 text-center" data-aos="fade-up" data-aos-delay="350">
                                    <button type="submit" class="btn btn-apply border-0 shadow">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./include/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>
