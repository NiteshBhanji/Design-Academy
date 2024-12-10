<?php include "path.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Now</title>

    <?php include "allcss.php"; ?>
    <link rel="stylesheet" href="css/enroll.css?v=8">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GGL7JFCLP2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GGL7JFCLP2');
    </script>

    <!-- Google Captcha script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <!--Header Starts Here-->
    <header class="container header-section">

        <div class="inner-container">

            <div class="flex-box">
                <div class="header-logo-box">
                    <h5 class="logo-text" id="logotextid"><a href="https://paux.live/"> PAU<span>x</span> Academy</a></h5>
                </div>

                <div class="back-home-btn">
                    <p><a href="https://paux.live/">Back to Home</a></p>
                </div>

            </div>
        </div>

        <!-- <p id="demolink"></p> -->
    </header>

    <div id="luxy"><!--Used for Smooth scroll Effect-->

        <!--Main Content Starts Here-->
        <main>

            <section class="container hero-section white-bg">
                <div class="inner-container">
                    <div class="flex-wrapper">
                        <div class="flex-box form-box">
                            <div class="inner-form-box">
                                <h3>Enroll with PAUx</h3>
                                <p class="instruct">Enroll today, to get 20 days free trial ⭐<br class="hide-desktop hide-tablet"></p>
                                <div class="form-wrapper">
                                    <form id="enrollForm" method="post" action="enrollnow.php" action="send_mail.php">
                                        <div class="name-wrapper">
                                            <div class="name-box fname-box">
                                                <p id="userFname-info" class="info">First Name<span class="required-color">*</span></p>
                                                <input type="text" name="userFname" id="userFname" placeholder="Enter First Name" required><br>
                                            </div>
                                            <div class="name-box lname-box">
                                                <p id="userLname-info" class="info">Last Name<span class="required-color">*</span></p>
                                                <input type="text" name="userLname" id="userLname" placeholder="Enter Last Name" required><br>
                                            </div>
                                        </div>

                                        <p id="userEmail-info" class="info">Email Address<span class="required-color">*</span></p>
                                        <input type="email" name="userEmail" id="userEmail" placeholder="Enter Email Address" required><br>


                                        <p id="userPhone-info" class="info">Contact Number<span class="required-color">*</span></p>
                                        <input type="tel" name="userPhone" id="userPhone" placeholder="Enter Contact Number" required><br>

                                        <!-- <p id="userLinkedin-info" class="info">LinkedIn Profile</p>
                                        <input type="url" name="userLinkedin" id="userLinkedin" placeholder="Enter LinkedIn Profile Link"><br> -->

                                        <p id="userProfession-info" class="info">Your Professional Status <span class="light-text">(Optional)</span></p>
                                        <select name="userProfession" id="userProfession" required>
                                            <option value="" disabled selected>Select Your Profession</option>
                                            <option value="student">College Student</option>
                                            <option value="switch-field">Thinking of changing the Domain</option>
                                        </select>

                                        <p id="userCohert-info" class="info">Cohert You Want to Join <span class="required-color">*</span></p>
                                        <select name="userCohert" id="userCohert" required>
                                            <option value="" disabled selected>Select Cohert</option>
                                            <option value="current-cohert">Cohert 13 (70% Filled)</option>
                                            <option value="prebook-cohert">Cohert 14 Prebook Seat</option>
                                            <option value="advance-cohert">Cohert 15 Advance Booking</option>
                                        </select>


                                        <!-- Google reCAPTCHA v2 (checkbox) -->
                                        <div class="g-recaptcha" data-sitekey="6LfHzgMqAAAAAFRUlnnI64JsTrVMrQfsoxRWq1h_"></div>

                                        <div class="submit-box">
                                            <input type="submit" value="Submit" class="submit-btn" name="submit">
                                        </div>

                                    </form>
                                    <div id="loading">
                                        <div class="spinner-wrapper">
                                            <div class="spinner"></div>
                                        </div>
                                    </div>
                                    <p id="result-message" class="result-message"></p>
                                </div>
                            </div>
                        </div>

                        <div class="flex-box testmonial-box">
                            <div class="inner-testmonial-box">
                                <p class="quote-box">No joke, I felt 10x more confident with my UX UI skills after completing both the courses. Plus Paux covers a lot more than just designing, they focus on developing the business acumen aspect & mainly how to increase the pace of delivering mvp.
                                </p>
                                <div class="user-box">
                                    <div class="user-profile">
                                        <img src="assets/images/laxman-con.png" alt="" srcset="">
                                    </div>
                                    <div class="user-data">
                                        <p class="user-name">Laxman</p>
                                        <p class="user-company">Currently @ REAL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>

    <script>
        document.getElementById('enrollForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var phone = document.getElementById('userPhone').value;
            var phoneRegex = /^\d{10}$/;

            if (!phoneRegex.test(phone)) {
                document.getElementById('result-message').style.display = 'block';
                document.getElementById('result-message').innerText = 'Please enter a valid 10-digit phone number.';
                return;
            }

            document.getElementById('loading').style.display = 'block';
            document.getElementById('result-message').style.display = 'none';
            var formData = new FormData(this);

            fetch('send_mail.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('result-message').style.display = 'block';
                    document.getElementById('result-message').innerText = data;
                    if (data.includes("Thank You! Our team member will promptly reach out to you to discuss the enrollment process in further detail.")) {
                        document.getElementById('enrollForm').style.display = 'none';
                        document.getElementById("result-message").classList.add("success-message");
                        downloadPDF();
                    }
                })
                .catch(error => {
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('result-message').style.display = 'block';
                    document.getElementById('result-message').innerText = 'Failed to enroll.';
                    console.error('Error:', error);
                });
        });

        function downloadPDF() {
            var link = document.createElement('a');
            link.href = '/assets/documents/paux-academy-uiux-brochure.pdf';
            link.download = 'paux-academy-uiux-brochure.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>

    <!-- <script>
        document.getElementById('enrollForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var phone = document.getElementById('userPhone').value;
            var phoneRegex = /^\d{10}$/;

            if (!phoneRegex.test(phone)) {
                document.getElementById('result-message').style.display = 'block';
                document.getElementById('result-message').innerText = 'Please enter a valid 10-digit phone number.';
                return;
            }

            document.getElementById('loading').style.display = 'block';
            document.getElementById('result-message').style.display = 'none';
            var formData = new FormData(this);

            fetch('enrollnow.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('result-message').style.display = 'block';
                    document.getElementById('result-message').innerText = data;
                    if (data.includes("Thank You! Our team member will promptly reach out to you to discuss the enrollment process in further detail.")) {
                        document.getElementById('enrollForm').style.display = 'none';
                    }
                })
                .catch(error => {
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('result-message').style.display = 'block';
                    document.getElementById('result-message').innerText = 'Failed to enroll.';
                    console.error('Error:', error);
                });
        });
    </script> -->

</body>

</html>