<?php include "path.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Now</title>

    <?php include "allcss.php"; ?>
    <link rel="stylesheet" href="css/enroll.css?v=2">

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
                                <p class="instruct">Enroll today, first lecture on us, <br class="hide-desktop hide-tablet">let's cheer 'Hooray!</p>
                                <div class="form-wrapper">
                                    <form method="post" action="enrollnow.php" action="send_mail.php">
                                        <p id="userEmail-info" class="info">Email Address<span class="required-color">*</span></p>
                                        <input type="email" name="userEmail" id="userEmail" placeholder="Enter Email Address" required><br>

                                        <p id="userPhone-info" class="info">Contact Number<span class="required-color">*</span></p>
                                        <input type="tel" name="userPhone" id="userPhone" placeholder="Enter Contact Number" required><br>

                                        <p id="userLinkedin-info" class="info">LinkedIn Profile<span class="required-color">*</span></p>
                                        <input type="url" name="userLinkedin" id="userLinkedin" placeholder="Enter LinkedIn Profile Link" required><br>

                                        <!-- <p id="userProfession-info" class="info">Your Professional Status <span class="light-text">(Optional)</span></p>
                                        <select name="userProfession" id="userProfession">
                                            <option value="">Select</option>
                                            <option value="diff-field">Working in a Different Field</option>
                                            <option value="student">College Student</option>
                                            <option value="switch-field">Thinking of changing the Domain</option>
                                        </select>

                                        <p id="userLink-info" class="info">LinkedIn Profile <span class="light-text">(Optional)</span></p>
                                        <input type="email" name="userLink" id="userLink" placeholder="Contact Number*"> -->


                                        <!-- Google reCAPTCHA v2 (checkbox) -->
                                        <div class="g-recaptcha" data-sitekey="6LfHzgMqAAAAAFRUlnnI64JsTrVMrQfsoxRWq1h_"></div>

                                        <div class="submit-box">
                                            <input type="submit" value="Submit" class="submit-btn" name="submit">
                                        </div>

                                        <p class="note">After submitting your details, a member of our team will promptly reach out to you to discuss the enrollment process in further detail.</p>
                                    </form>
                                    <div id="loading"></div>
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
                    if (data.includes("Mail sent successfully!")) {
                        document.getElementById('enrollForm').style.display = 'none';
                    }
                })
                .catch(error => {
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('result-message').style.display = 'block';
                    document.getElementById('result-message').innerText = 'Failed to submit form.';
                    console.error('Error:', error);
                });
        });
    </script>

</body>

</html>