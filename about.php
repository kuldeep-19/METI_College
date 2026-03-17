<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/index.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    /* HERO */
    .hero {
      background: url('./Assets/image/students-2000x1279.jpg') center/cover no-repeat;
      height: 90vh;
      color: white;
      display: flex;
      align-items: center;
      text-align: center;
    }

    .hero-overlay {
      background: rgba(0,
          0,
          0,
          0.6);
      padding: 40px;
      width: 100%;
    }

    /* Section Title */
    .section-title {
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Cards */
    .card:hover {
      transform: translateY(-5px);
      transition: 0.3s;
    }

    /* CTA */
    .cta {
      background: linear-gradient(135deg, #0a1f44, #1e90ff);
      color: white;
      padding: 50px;
      text-align: center;
    }


    /* Faculty Section */
/* FACULTY 3D SECTION */
.faculty-slider {
  padding: 60px 0;
  background: linear-gradient(135deg, #eef2f7, #ffffff);
}
.faculty-slider .swiper {
  width: 90%;
  margin: auto; /* center */
}
.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 80px;
}

.swiper-slide {
  width: 260px;
    opacity: 0.5;
  transform: scale(0.8);
  transition: all 0.4s ease;
}
/* Default (side cards) */
.swiper-slide {
  opacity: 0.5;
  transform: scale(0.8);
  transition: all 0.4s ease;
}

/* Center card */
.swiper-slide-active {
  opacity: 1;
  transform: scale(1);
  z-index: 2;
}


/* Soft blur side cards */
.swiper-slide:not(.swiper-slide-active) {
  filter: blur(1px);
}
/* Card Design */
.faculty-card {
  border-radius: 20px;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(10px);
  transition: all 0.4s ease;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  cursor: pointer;
}

.faculty-card {
  border-radius: 20px;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(10px);
  transition: all 0.4s ease;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  cursor: pointer;
}

/* Image */
.faculty-img {
  height: 260px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f0f4ff, #e6ecff);
  padding: 10px;
}

.faculty-img img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
  transition: 0.3s;
}
/* Slight zoom on hover */
.faculty-card:hover img {
  transform: scale(1.05);
}
/* Text */
.faculty-body {
  padding: 15px;
}

.faculty-name {
  font-weight: 600;
  font-size: 16px;
}

.faculty-role {
  font-size: 14px;
  color: gray;
}

/* POPUP MODAL */
#facultyModal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.9);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

#facultyModal img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
}

#closeModal {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
  border: 2px solid white;
  padding: 5px 12px;
  border-radius: 50%;
}
/* Active Center Card */
.swiper-slide-active .faculty-card {
  box-shadow: 0 25px 50px rgba(0,0,0,0.25);
}
  </style>
</head>

<body>

  <!-- Nav-Bar Add here -->

  <?php
        include "./include/navbar.php";
      ?>
  <section class="hero">
    <div class="hero-overlay">
      <h1 data-aos="fade-up">Marine Engineering Training Institute</h1>
      <p data-aos="fade-up" data-aos-delay="200">Building Future Marine Engineers</p> <a href="#"
        class="btn btn-primary mt-3">Apply Now</a>
    </div>
  </section> <!-- ABOUT -->
  <section class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right"> <img
          src="https://images.unsplash.com/photo-1509395176047-4a66953fd231" class="img-fluid rounded shadow"> </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2 class="section-title">About Us</h2>
        <p>Cochin Shipyard was incorporated in the year 1972 as a fully owned Government of India company. In the last
          three decades the company has emerged as a forerunner in the Indian Shipbuilding & Ship repair industry. This
          yard can build and repair the largest vessels in India..</p>
        <h4>About METI</h4>
        <p>The Marine Engineering Training Institute (METI) of the Cochin Shipyard Ltd. was set up as a division of CSL
          in September 1993 as recommended by the Expert Committee on Maritime Education and Training, constituted by
          the Government of India in 1992. The institute is approved by the Director General of Shipping (DGS). Govt. of
          India<br />
          The Institute has been conducting courses in Marine Engineering Training from the Year 1993 onwards. Vigyana
          Sagar, the new premises of METI was inaugurated by the Honorable Prime Minister of India on the 14th of Feb
          2021. M/s Lioyd's Register, a leading independent rating agency designated by Director General of Shipping,
          Government of India, for Benchmarking Maritime Training Institutions, has rated the Institute as Grade A1.
          This grading certifies the outstanding ability of the Institute to meet the requirement of the course.

        </p>
      </div>
    </div>
  </section> <!-- HIGHLIGHTS -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="section-title">Highlights</h2>
      <div class="row">
        <div class="col-md-3" data-aos="zoom-in">
          <div class="card p-3"> <i class="fa fa-ship fa-2x text-primary"></i>
            <h5>Shipbuilding Leader</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
          <div class="card p-3"> <i class="fa fa-award fa-2x text-primary"></i>
            <h5>Grade A1 Institute</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
          <div class="card p-3"> <i class="fa fa-calendar fa-2x text-primary"></i>
            <h5>Since 1993</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
          <div class="card p-3"> <i class="fa fa-flag fa-2x text-primary"></i>
            <h5>Govt Approved</h5>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- INFRASTRUCTURE -->
  <section class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right">
        <h2 class="section-title">Infrastructure & Training</h2>
        <p>METI’s Training Workshop is situated in the easily accessible 170 acres CSL premises, which is situated in
          the heart of Kochi (Ernakulam), the commercial capital of Kerala. The ship building and ship repair activities
          along with workshop training, provide an ideal environment for the conversion of Mechanical / Naval Architect
          Graduate Engineers to Marine Engineers.</p>
      </div>
      <div class="col-md-6" data-aos="fade-left"> <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e"
          class="img-fluid rounded shadow"> </div>
    </div>
  </section> <!-- LOCATION -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="section-title">Location & Connectivity</h2>
      <div class="row">
        <div class="col-md-3"> 📍 Vigyana Sagar, Girinagar Kochi, Kerala Pincode- 682020 </div>
        <div class="col-md-3"> 🚆 2 km from Railway Station </div>
        <div class="col-md-3"> ✈️ 31 km from Airport </div>
        <div class="col-md-3"> 🛣 Well Connected </div>
      </div>
    </div>
  </section> <!-- ACADEMICS -->
  <section class="container py-5">
    <h2 class="section-title text-center">Academics</h2>
    <p class="text-center">Teaching methodology is tailored to suit the educational qualifications of the trainees and
      the requirements of the STCW code. Training is systematic and the objectives and structure of the course are
      conveyed to the trainees at the beginning of the course itself. Reading materials provided in each of the subjects
      supplement the classroom and practical training. METI and CSL Technical Libraries also serve as reference material
      to students. Instructional CDs and CBT are also used in training. Strict discipline and a regimented lifestyle are
      characteristics of the training, which is designed to condition the trainees for the life on board a ship.
      Representatives of sponsoring shipping companies expressed complete satisfaction with the training provided by
      METI.<br />
      <br />
      The Institute has set up training centers with quality infrastructure for Basic & Advanced Fire fighting course
      and Elementary First Aid Course
      <br /><br />There are adequate facilities for recreation including indoor and outdoor games. Training is also
      imparted in boat-work, mast-climbing, swimming, VHF communication, interpersonal relations, etiquettes and dress
      code.

    </p>
  </section>

  <!-- STUDENT LIFE -->
  <!--      
    <section class="bg-light py-5">
      <div class="container text-center">
        <h2 class="section-title">Student Training</h2>
        <div class="row">
          <div class="col-md-3">🏊 Swimming</div>
          <div class="col-md-3">⚓ Boat Work</div>
          <div class="col-md-3">📡 Communication</div>
          <div class="col-md-3">🎮 Games</div>
        </div>
      </div>
    </section>  -->

  <!-- FACULTY -->
  <section class="container py-5">
    <h2 class="section-title text-center">Faculty</h2>
    <p class="text-center">METI has full time faculty, visiting faculty, instructors and other
       faculty who are full time employees of CSL. The trainee to teacher ratio is about 4:1. 
       The faculties are well qualified and experienced in their respective subjects and have actual operational experience of marine engineering on both ashore 
      (Shipbuilding, Ship design and Ship repair) and on board merchant ships.<br/><br/>
    
    Most of the students at METI are sponsored candidates and are chosen by the sponsoring shipping companies. 
    For non-sponsored candidates, selection is primarily based on academic performance at the graduate level. 
    Evaluation and assessment of the trainees are made through practical, written and oral tests given after completion of each assignment. 
    Assessment is continuous and results of tests for various competencies are recorded in the TAR Book. Students have to qualify in each competency separately. 
    Overall evaluation also considers individual initiative, aptitude, performance in games and sports, swimming and overall discipline. 
    In sum, the assessment assists in achieving the course objective of imparting the required competencies and attitude to the trainees.
    </p>
  </section>

<section class="faculty-slider">
  <h2 class="text-center fw-bold mb-4">Our Faculty</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Elizabeth K A</h5>
            <p class="faculty-role">Faculty</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/noushad-th-706x872.jpeg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Noushad Th</h5>
            <p class="faculty-role">Faculty</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/photo-george-abraham-hod-150x200.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">George Abraham</h5>
            <p class="faculty-role">HOD</p>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/saju-md-course-in-charge-photo-706x942.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Saju MD</h5>
            <p class="faculty-role">Course In Charge</p>
          </div>
        </div>
      </div>


      <!-- duplicate slider  -->

            <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/elizabeth-k-a-photo-413x531.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Elizabeth K A</h5>
            <p class="faculty-role">Faculty</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/noushad-th-706x872.jpeg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Noushad Th</h5>
            <p class="faculty-role">Faculty</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/photo-george-abraham-hod-150x200.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">George Abraham</h5>
            <p class="faculty-role">HOD</p>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide">
        <div class="faculty-card" onclick="openModal(this)">
          <div class="faculty-img">
            <img src="./Assets/faculty/saju-md-course-in-charge-photo-706x942.jpg">
          </div>
          <div class="faculty-body">
            <h5 class="faculty-name">Saju MD</h5>
            <p class="faculty-role">Course In Charge</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- POPUP -->
<div id="facultyModal">
  <span id="closeModal" onclick="closeModal()">×</span>
  <img id="modalImg">
</div>


  <?php
  include "./include/footer.php";
?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script> AOS.init(); </script>
 <script>
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  centeredSlides: true,
  slidesPerView: 3,
  loop: true,
  loopedSlides: 6, // 🔥 important (>= number of cards)
  grabCursor: true,
  spaceBetween: 30,

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 180,
    modifier: 2,
    slideShadows: false,
  },

  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },

  speed: 800, // smooth transition

});
</script>
</body>

</html>