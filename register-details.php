<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Profile - METI Alumni Network</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    

    <style>
        body {
            background: linear-gradient(135deg, #0a1628 0%, #1e3a5f 50%, #2d5f8a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            width: 100%;
            max-width: 600px;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h2 {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(90deg, #ffffff, #00b4d8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .register-header p {
            color: #b0c4d8;
            font-size: 0.95rem;
            margin: 0;
        }

        #registration-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        #registration-form input,
        #registration-form select {
            padding: 14px 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            background: rgba(255, 255, 255, 0.06);
            color: #fff;
            transition: all 0.3s ease;
        }

        #registration-form input::placeholder,
        #registration-form select::placeholder {
            color: #8ca0b3;
        }

        #registration-form input:focus,
        #registration-form select:focus {
            outline: none;
            border-color: #00b4d8;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 3px rgba(0, 180, 216, 0.15);
        }

        #registration-form select {
            cursor: pointer;
        }

        #registration-form select option {
            background: #1e3a5f;
            color: #fff;
        }

        #registration-form input[readonly] {
            opacity: 0.9;
            background: rgba(255, 255, 255, 0.04);
            cursor: not-allowed;
        }

        .form-group {
            display: none;
        }

        .form-group.active {
            display: block;
        }

        .form-group.active.full-width {
            grid-column: 1 / -1;
        }

        #registration-form button {
            background: linear-gradient(135deg, #f0a500, #ffc947);
            color: #0a1628;
            padding: 15px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            letter-spacing: 0.5px;
            margin-top: 10px;
        }

        #registration-form button:hover {
            background: linear-gradient(135deg, #ffc947, #f0a500);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(240, 165, 0, 0.4);
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #00b4d8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .progress-indicator {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .progress-step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #b0c4d8;
            transition: all 0.3s ease;
        }

        .progress-step.active {
            background: linear-gradient(135deg, #f0a500, #ffc947);
            border-color: #ffc947;
            color: #0a1628;
        }

        .progress-step.completed {
            background: #00b4d8;
            border-color: #00b4d8;
            color: #fff;
        }

        @media (max-width: 768px) {
            .register-card {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .register-header h2 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>
      <?php
    include "./include/navbar.php";
    ?>
    <div class="register-container">
        <div class="register-card">
            <!-- Progress Indicator -->
            <div class="progress-indicator">
                <div class="progress-step completed">1</div>
                <div class="progress-step completed">2</div>
                <div class="progress-step active">3</div>
            </div>

            <!-- Header -->
            <div class="register-header">
                <h2>Complete Your Profile</h2>
                <p>Fill in your details to complete registration</p>
            </div>

            <!-- Registration Form -->
            <form id="registration-form" onsubmit="handleRegistrationSubmit(event)">
                <div class="form-row">
                    <input type="text" id="reg-firstName" placeholder="First Name" required>
                    <input type="text" id="reg-lastName" placeholder="Last Name" required>
                </div>

                <input type="email" id="reg-email" placeholder="Email Address" readonly>

                <select id="reg-affiliation" required onchange="updateAffiliationFields()">
                    <option value="">Select Affiliation</option>
                    <option value="alumni">Alumni</option>
                    <option value="faculty">Faculty</option>
                    <option value="staff">Staff</option>
                    <option value="student">Student</option>
                    <option value="other">Other</option>
                </select>

                <input type="tel" id="reg-mobile" placeholder="Mobile Number" readonly>

                <input type="text" id="reg-city" placeholder="City" required>

                <!-- Conditional Fields -->
                <div id="year-of-entry-field" class="form-group">
                    <input type="number" id="reg-year-entry" placeholder="Year of Entry (e.g., 2020)" min="1990" max="2080">
                </div>

                <div id="year-of-graduation-field" class="form-group">
                    <input type="number" id="reg-year-graduation" placeholder="Year of Graduation (e.g., 2022)" min="1990" max="2080">
                </div>

                <div id="course-field" class="form-group">
                    <input type="text" id="reg-course" placeholder="Course Name">
                </div>

                <div id="registration-number-field" class="form-group">
                    <input type="text" id="reg-registration-number" placeholder="Registration/Enrolment Number">
                </div>

                <button type="submit">Complete Registration</button>
            </form>

            <!-- Back Link -->
            <div class="back-link">
                <a href="alumni.php"><i class="fa-solid fa-arrow-left"></i> Back to Alumni Network</a>
            </div>
        </div>
    </div>
  <?php
    include "./include/footer.php";
    ?>
    <script>
        // Get email and mobile from URL parameters
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        // Pre-fill email and mobile
        document.addEventListener('DOMContentLoaded', function() {
            const email = getUrlParameter('email');
            const mobile = getUrlParameter('mobile');
            
            if (email) {
                document.getElementById('reg-email').value = email;
            }
            if (mobile) {
                document.getElementById('reg-mobile').value = mobile;
            }
        });

        // Update affiliation-based fields visibility
        function updateAffiliationFields() {
            const affiliation = document.getElementById('reg-affiliation').value;
            
            // Hide all conditional fields first
            document.getElementById('year-of-entry-field').classList.remove('active');
            document.getElementById('year-of-graduation-field').classList.remove('active');
            document.getElementById('course-field').classList.remove('active');
            document.getElementById('registration-number-field').classList.remove('active');
            
            // Clear values
            document.getElementById('reg-year-entry').value = '';
            document.getElementById('reg-year-graduation').value = '';
            document.getElementById('reg-course').value = '';
            document.getElementById('reg-registration-number').value = '';
            
            // Show fields based on affiliation
            if (affiliation === 'alumni' || affiliation === 'student') {
                document.getElementById('year-of-entry-field').classList.add('active');
                document.getElementById('year-of-graduation-field').classList.add('active');
                document.getElementById('course-field').classList.add('active');
                document.getElementById('registration-number-field').classList.add('active');
            } else if (affiliation === 'faculty' || affiliation === 'staff') {
                document.getElementById('course-field').classList.add('active');
            }
        }

        // Handle Registration Form Submission
        function handleRegistrationSubmit(event) {
            event.preventDefault();
            
            // Collect all form data
            const registrationData = {
                firstName: document.getElementById('reg-firstName').value,
                lastName: document.getElementById('reg-lastName').value,
                email: document.getElementById('reg-email').value,
                mobile: document.getElementById('reg-mobile').value,
                affiliation: document.getElementById('reg-affiliation').value,
                city: document.getElementById('reg-city').value,
                yearOfEntry: document.getElementById('reg-year-entry').value || null,
                yearOfGraduation: document.getElementById('reg-year-graduation').value || null,
                course: document.getElementById('reg-course').value || null,
                registrationNumber: document.getElementById('reg-registration-number').value || null
            };
            
            // Validate required fields
            if (!registrationData.firstName || !registrationData.lastName || !registrationData.affiliation || !registrationData.city) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Validate affiliation-specific fields
            if ((registrationData.affiliation === 'alumni' || registrationData.affiliation === 'student') && 
                (!registrationData.yearOfEntry || !registrationData.yearOfGraduation || !registrationData.course || !registrationData.registrationNumber)) {
                alert('Please fill in all required fields for your affiliation');
                return;
            }
            
            // In a real app, this would send data to a backend API
            console.log('Registration Data:', registrationData);
            
            // Show success message and redirect
            alert('Registration completed successfully! Welcome to METI Alumni Network.');
            
            // Redirect to alumni page
            window.location.href = 'alumni.php';
        }
    </script>
</body>
</html>
