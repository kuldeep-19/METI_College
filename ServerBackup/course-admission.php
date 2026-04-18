<?php
$page_title = "Course & Admission";
include('include/header.php');
?>

<body>

  <?php include "./include/navbar.php"; ?>
  <?php
  $topTabsConfig = [
    'id' => 'top-tabs-section',
    'title' => 'Course & Admission',
    'image' => './Assets/577a7723-2643x1762.jpg',
    'image_alt' => 'METI campus banner',
    'active_tab' => 'Course',
    'buttons' => [
      [
        'tab' => 'Course',
        'label' => 'Course',
        'icon' => 'fa fa-building',
      ],
      [
        'tab' => 'Apply-Now',
        'label' => 'Apply Now',
        'icon' => 'fa fa-graduation-cap',
      ],
      [
        'tab' => 'Fee-Payment',
        'label' => 'Fee Payment',
        'icon' => 'fa fa-eye',
      ],
      [
        'tab' => 'Admission-Information',
        'label' => 'Admission Information',
        'icon' => 'fa fa-bullseye',
      ],
    ],
  ];
  ?>

  <!-- MAIN CONTENT -->
  <section>
    <div class="container" style="background: linear-gradient(135deg,#eef2ff,#f8fafc);">
      <!-- TOP BUTTONS -->
      <?php include "./include/top-tabs-banner.php"; ?>
    </div>
    <div class="tab-content-area">
      <div id="Course" class="tab-content-custom active">
        <div class="container my-5">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="card course-card shadow-sm h-100">
                <img
                  src="https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?semt=ais_incoming&w=740&q=80"
                  class="card-img-top" alt="Pre sea courses">

                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title section-title">PRE SEA COURSES</h5>
                    <button type="button" class="btn btn-primary" onclick="showTabSection('Apply-Now')">Apply Now</button>
                  </div>
                  <p class="text-muted">This 12 months course is mandatory for continuing with the 6 months Shipboard
                    training prior to appearing for Class IV Certificate of Competency exam (MEO Class-IV) to become an
                    Officer in charge of an Engineering Watch in a manned engine room or as a designated duty engineer in a
                    periodically unmanned engine room of Merchant Ships. METI has engaged with the Institute of Marine
                    Engineers to enlist as student members of IME which enables them to be in the forefront of marine
                    engineering technology as it evolves.
                  </p>
                  <ol>
                    <li>GME</li>
                    <li>Basic Training in Oil & Chemical Tanker Cargo Operations</li>
                    <li>Basic Training for Liquified Gas Tanker Cargo Operations</li>
                  </ol>
                  <div class="accordion" id="course1">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#c1module1">
                          More Details
                        </button>
                      </h2>
                      <div id="c1module1" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste vero quidem quae ratione! Saepe
                          accusantium libero, ut tempore, eum architecto eligendi iure nulla magnam soluta illo dolorem
                          quaerat omnis deserunt quisquam iusto nesciunt. Aut itaque illo quibusdam, vel voluptate
                          recusandae, quasi voluptas iste temporibus, voluptatem impedit dolore iure ipsam vero nihil
                          tenetur eveniet assumenda quia dolor quidem. Omnis voluptatum, est dolorem incidunt modi
                          provident. Dolor quidem deleniti ullam iste autem dolorem minus quibusdam. Dolorem consequuntur
                          quis, in nam reprehenderit necessitatibus. Corrupti quis neque cumque! Exercitationem corporis
                          quaerat nulla perferendis voluptatem! Quidem vel quaerat optio et culpa laborum eveniet quisquam
                          similique!
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card course-card shadow-sm h-100">
                <img
                  src="https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?semt=ais_incoming&w=740&q=80"
                  class="card-img-top" alt="Post sea courses">

                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title section-title">POST SEA COURSES</h5>
                    <button type="button" class="btn btn-primary" onclick="showTabSection('Apply-Now')">Apply Now</button>
                  </div>
                  <p class="text-muted">This 12 months course is mandatory for continuing with the 6 months Shipboard
                    training prior to appearing for Class IV Certificate of Competency exam (MEO Class-IV) to become an
                    Officer in charge of an Engineering Watch in a manned engine room or as a designated duty engineer in a
                    periodically unmanned engine room of Merchant Ships. METI has engaged with the Institute of Marine
                    Engineers to enlist as student members of IME which enables them to be in the forefront of marine
                    engineering technology as it evolves.
                  </p>
                  <ol>
                    <li>Advanced Fire Fighting (AFF)</li>
                    <li>Medical First Aid (MFA)</li>
                  </ol>
                  <div class="accordion" id="course2">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#c2module1">
                          More Details
                        </button>
                      </h2>
                      <div id="c2module1" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint explicabo voluptatem earum quidem? Nam, voluptas vero minus ullam inventore corrupti nulla eveniet aliquid quo modi officiis impedit rem fugiat aperiam tempore, distinctio animi. Quia iusto delectus magnam reprehenderit voluptatibus cumque totam repellendus necessitatibus ab sint. Ratione, dolorum modi accusantium, soluta perspiciatis neque nihil tenetur quod, velit ullam et amet vitae laboriosam eos commodi! Rem aspernatur dignissimos ex nulla corrupti, non eum vero velit aliquid quis recusandae facilis dolore dolorum, fugiat inventore quia officia exercitationem consequatur alias quae corporis. Ab quas autem non tempora quod, harum nihil, debitis numquam dolores nobis possimus porro, vero consequuntur. Quia rerum esse ipsa, alias commodi odit dolorum at accusamus repellendus illo aliquid id voluptatibus nam sit eos odio voluptates laudantium ratione dolor asperiores harum enim error earum. Ut, quibusdam dolorum blanditiis aperiam perferendis sint consequuntur asperiores saepe! Velit odit quaerat ipsum, laudantium beatae earum sint.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <section class="admission-process-section">
          <div class="container my-5">
            <div class="admission-process-wrap p-5 mb-5" data-aos="fade-up">
              <div class="row gy-4 align-items-start">
                <div class="col-lg-5">
                  <div class="content-text">
                    <h2 class="section-title mb-4">
                      <i class="fa-solid fa-clipboard-list me-2 text-primary"></i>
                      Admission Process
                    </h2>
                    <p class="lead fs-6 text-muted lh-lg mb-4">
                      METI follows a clear and student-friendly admission workflow so applicants can understand each stage
                      easily and complete the process without confusion.
                    </p>

                    <div class="admission-info-box">
                      <h5 class="fw-bold mb-3">What you should keep ready</h5>
                      <div class="admission-checklist">
                        <div><i class="fa-solid fa-check"></i> Academic mark sheets and certificates</div>
                        <div><i class="fa-solid fa-check"></i> Government ID proof and passport-size photographs</div>
                        <div><i class="fa-solid fa-check"></i> Eligibility details and active contact information</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-7">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="admission-step-card h-100">
                        <div class="admission-step-badge">01</div>
                        <div class="admission-step-icon">
                          <i class="fa-solid fa-file-signature"></i>
                        </div>
                        <h5 class="fw-bold">Submit Application</h5>
                        <p class="text-muted mb-0">Fill in the application form with your personal, academic, and course preference details.</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="admission-step-card h-100">
                        <div class="admission-step-badge">02</div>
                        <div class="admission-step-icon">
                          <i class="fa-solid fa-folder-open"></i>
                        </div>
                        <h5 class="fw-bold">Document Submission</h5>
                        <p class="text-muted mb-0">Upload or provide the required certificates, ID proof, and supporting documents for review.</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="admission-step-card h-100">
                        <div class="admission-step-badge">03</div>
                        <div class="admission-step-icon">
                          <i class="fa-solid fa-user-check"></i>
                        </div>
                        <h5 class="fw-bold">Verification</h5>
                        <p class="text-muted mb-0">The admission team checks eligibility, verifies documents, and guides you on the next formalities.</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="admission-step-card h-100">
                        <div class="admission-step-badge">04</div>
                        <div class="admission-step-icon">
                          <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <h5 class="fw-bold">Admission Confirmation</h5>
                        <p class="text-muted mb-0">Complete fee payment and confirm your seat for the selected course at METI.</p>
                      </div>
                    </div>
                  </div>

                  <div class="admission-support-box mt-4">
                    <div>
                      <h5 class="fw-bold mb-2">Need help with your application?</h5>
                      <p class="text-muted mb-0">Our admission office can support you with eligibility guidance, documents, and course selection.</p>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="showTabSection('Apply-Now')">Apply Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="Apply-Now" class="tab-content-custom">
        <section class="py-5">
          <div class="container my-5">
            <div class="admission-process-wrap p-5 mb-5" data-aos="fade-up">
              <div class="row gy-4 align-items-center mb-4">
                <div class="col-lg-5">
                  <h2 class="section-title mb-4">
                    <i class="fa-solid fa-pen-to-square me-2 text-primary"></i>
                    Apply Now
                  </h2>
                  <p class="lead fs-6 text-muted lh-lg mb-0">
                    Complete the application form below to start your admission enquiry for the course of your choice.
                  </p>
                </div>
                <div class="col-lg-7">
                  <div class="row g-3">
                    <div class="col-md-4">
                      <div class="quick-info-card text-center">
                        <i class="fa-solid fa-file-lines"></i>
                        <h6 class="mt-3 mb-0">Application Form</h6>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="quick-info-card text-center">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <h6 class="mt-3 mb-0">Admission Response</h6>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="quick-info-card text-center">
                        <i class="fa-solid fa-user-graduate"></i>
                        <h6 class="mt-3 mb-0">Course Guidance</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="apply-inline-form">
                <form action="save_inquiry.php" method="POST">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <label class="form-label">Full Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Email Address</label>
                      <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Phone Number</label>
                      <input type="tel" name="phone" class="form-control" placeholder="+91 00000 00000" required>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-12">
                      <label class="form-label">Message / Query (Optional)</label>
                      <textarea name="message" class="form-control" rows="4" placeholder="How can we help you?"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary px-4 py-2">Submit Application</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="Fee-Payment" class="tab-content-custom">
        <section class="py-5">
          <div class="container my-5">
            <div class="admission-process-wrap p-5 mb-5" data-aos="fade-up">
              <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                  <h2 class="section-title mb-4">
                    <i class="fa-solid fa-credit-card me-2 text-primary"></i>
                    Fee Payment
                  </h2>
                  <p class="lead fs-6 text-muted lh-lg mb-0">
                    Students can proceed with payment after eligibility confirmation and admission approval from the institute.
                  </p>
                </div>
                <div class="col-lg-7">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-building-columns"></i>
                        <h5 class="fw-bold mt-3">Payment Modes</h5>
                        <p class="text-muted mb-0">Online transfer, bank payment, or institute-approved payment instructions shared by the office.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-receipt"></i>
                        <h5 class="fw-bold mt-3">Keep Proof Ready</h5>
                        <p class="text-muted mb-0">Save payment receipts, transaction references, and confirmation details for verification.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="Admission-Information" class="tab-content-custom">
        <section class="py-5">
          <div class="container my-5">
            <div class="admission-process-wrap p-5 mb-5" data-aos="fade-up">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <h2 class="section-title mb-4">
                    <i class="fa-solid fa-circle-info me-2 text-primary"></i>
                    Admission Information
                  </h2>
                  <p class="lead fs-6 text-muted lh-lg mb-0">
                    Review the key admission requirements before submitting your application to avoid delays in processing.
                  </p>
                </div>
                <div class="col-lg-7">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-id-card"></i>
                        <h5 class="fw-bold mt-3">Eligibility Check</h5>
                        <p class="text-muted mb-0">Confirm educational qualification, age criteria, and course-specific requirements.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-folder-tree"></i>
                        <h5 class="fw-bold mt-3">Required Documents</h5>
                        <p class="text-muted mb-0">Prepare your certificates, ID proof, photographs, and any supporting records requested.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-phone-volume"></i>
                        <h5 class="fw-bold mt-3">Admission Support</h5>
                        <p class="text-muted mb-0">Reach out to the admission office for application guidance and clarification on the process.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="quick-info-card h-100">
                        <i class="fa-solid fa-calendar-check"></i>
                        <h5 class="fw-bold mt-3">Final Confirmation</h5>
                        <p class="text-muted mb-0">Admission is finalized only after verification, approval, and successful fee payment.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <?php include "./include/footer.php"; ?>

  <script src="./js/common.js"></script>

  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>

</html>
