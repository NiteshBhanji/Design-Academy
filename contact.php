<?php include "path.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Now</title>

    <META NAME="robots" CONTENT="noindex,nofollow">

    <?php include "allcss.php"; ?>
    <link rel="stylesheet" href="css/contact.css?v=1.5">

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
</head>

<body>

    <?php

    include('smtp/PHPMailerAutoload.php');

    if (isset($_POST['submit'])) {

        $visitor_email = $_POST['userEmail'];
        $visitor_phone = $_POST['userPhone'];
        $visitor_Message = $_POST['userMsg'];



        $email_body = "Conatct form data - <br><strong>Email</strong> - " . $visitor_email . "<br><strong>Contact</strong> - " . $visitor_phone . "<br><strong>Message</strong> - " . $visitor_Message;



        function smtp_mailer($to, $subject, $msg)
        {
            $mail = new PHPMailer();
            //$mail->SMTPDebug=3;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.hostinger.com";
            $mail->Port = "465";
            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Username = "hr_team@paux.live";
            $mail->Password = 'Paux@2k23#hr';
            $mail->SetFrom("hr_team@paux.live");
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->AddAddress($to);
            $mail->SMTPOptions = array('ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            ));

            // 	$mail->Send();

            if (!$mail->Send()) {
                echo "<script>alert('Some technical issues arrived.');</script>";
            } else {
                echo '<script>alert("Thank You for Conatcting at PAUx Academy.")</script>';
            }
        }

        smtp_mailer('hola@paux.live', 'New Contact Form Arrived', $email_body);
    }
    ?>

    <!--Header Starts Here-->
    <?php include "header.php"; ?>

    <div id=" luxy"><!--Used for Smooth scroll Effect-->

        <!--Main Content Starts Here-->
        <main>
            <section class="container hero-section white-bg">
                <div class="inner-container">
                    <div class="content-wrapper">
                        <img src="assets/images/vectors/contact/title-contact-001.png" class="title-image">
                        <h3>Ready to Uplevel your Design Career?</h3>

                        <div class="form-wrapper">
                            <p class="instruct">We’d love to enroll you into PAUx Academy. Fill out the form and we’ll be in touch within 24 hours.</p>
                            <form method="post" action="contact.php">
                                <p id="userEmail-info" class="info">Email Address<span class="required-color">*</span></p>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Enter Email Address" required>

                                <p id="userPhone-info" class="info">Contact Number<span class="required-color">*</span></p>
                                <input type="tel" name="userPhone" id="userPhone" placeholder="Enter Contact Number" required>

                                <p id="userMsg-info" class="info">Write a brief description about yourself (Optional)</p>
                                <textarea name="userMsg" id="userMsg" placeholder="Description"></textarea>

                                <!-- <p id="userProfession-info" class="info">Your Professional Status <span class="light-text">(Optional)</span></p>
                                        <select name="userProfession" id="userProfession">
                                            <option value="">Select</option>
                                            <option value="diff-field">Working in a Different Field</option>
                                            <option value="student">College Student</option>
                                            <option value="switch-field">Thinking of changing the Domain</option>
                                        </select>

                                        <p id="userLink-info" class="info">LinkedIn Profile <span class="light-text">(Optional)</span></p>
                                        <input type="email" name="userLink" id="userLink" placeholder="Contact Number*"> -->

                                <div class="submit-box">
                                    <input type="submit" value="Submit" class="submit-btn" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--Footer Starts Here-->
        <?php include "footer.php"; ?>
    </div>

    <!--Global Html sarts Here-->
    <?php include "global-include.php"; ?>

    <!--All Scripts-->
    <?php include "allscripts.php"; ?>

</body>

</html>