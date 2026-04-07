<?php
$page_title = "Register Details";
include('include/header.php');
?>
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
