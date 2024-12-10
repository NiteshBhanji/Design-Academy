<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate reCAPTCHA
//     $recaptcha_secret = '6LfHzgMqAAAAALrUf6eXKshVsqgW2hTapoh1pNGr'; // Replace with your secret key
//     $recaptcha_response = $_POST['g-recaptcha-response'];
//     $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

//     $recaptcha_data = array(
//         'secret' => $recaptcha_secret,
//         'response' => $recaptcha_response
//     );

//     $options = array(
//         'http' => array(
//             'method' => 'POST',
//             'header' => 'Content-Type: application/x-www-form-urlencoded',
//             'content' => http_build_query($recaptcha_data)
//         )
//     );

//     $context = stream_context_create($options);
//     $recaptcha_result = file_get_contents($recaptcha_url, false, $context);
//     $recaptcha_result = json_decode($recaptcha_result, true);

//     if (!$recaptcha_result['success']) {
//         die("reCAPTCHA verification failed. Please try again.");
//     }

//     // Continue with form processing
//     $visitor_email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
//     $visitor_phone = filter_var($_POST['userPhone'], FILTER_SANITIZE_STRING);
//     $visitor_linkedin = filter_var($_POST['userLinkedin'], FILTER_SANITIZE_URL);

//     // Validate email, phone, LinkedIn URL (as before)
//     // ...

//     // Example mail sending (replace with your logic)
//     $to = "niteshbhanji70@gmail.com";
//     $subject = "New Enrollment Form Arrived";
//     $body = "Email: $visitor_email\nPhone: $visitor_phone\nLinkedIn: $visitor_linkedin";
//     $headers = "From: hr_team@paux.live";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Thank You! Our team member will promptly reach out to you to discuss the enrollment process in further detail.";
//     } else {
//         echo "Failed to enroll.";
//     }
// } else {
//     echo "Invalid request method.";
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate reCAPTCHA
    $recaptcha_secret = '6LfHzgMqAAAAALrUf6eXKshVsqgW2hTapoh1pNGr'; // Replace with your secret key
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

    $recaptcha_data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    );

    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($recaptcha_data)
        )
    );

    $context = stream_context_create($options);
    $recaptcha_result = file_get_contents($recaptcha_url, false, $context);
    $recaptcha_result = json_decode($recaptcha_result, true);

    if (!$recaptcha_result['success']) {
        die("reCAPTCHA verification failed. Please try again.");
    }

    // Continue with form processing
    $visitor_fname = filter_var($_POST['userFname'], FILTER_SANITIZE_STRING);
    $visitor_lname = filter_var($_POST['userLname'], FILTER_SANITIZE_STRING);
    $visitor_email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
    $visitor_phone = filter_var($_POST['userPhone'], FILTER_SANITIZE_STRING);
    $visitor_profession = filter_var($_POST['userProfession'], FILTER_SANITIZE_STRING);
    $visitor_cohert = filter_var($_POST['userCohert'], FILTER_SANITIZE_STRING);

    // Validate the email
    if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Validate phone number
    if (!preg_match('/^\d{10}$/', $visitor_phone)) {
        die("Please enter a valid 10-digit phone number.");
    }

    // Example mail sending (replace with your logic)
    $to = "hola@paux.live";
    $subject = "New Enrollment Form Arrived";
    $body = "Name: $visitor_fname $visitor_lname\nEmail: $visitor_email\nPhone: $visitor_phone\nProfession: $visitor_profession\nCohert to join: $visitor_cohert";
    $headers = "From: hr_team@paux.live";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank You! Our team member will promptly reach out to you to discuss the enrollment process in further detail.";
    } else {
        echo "Failed to enroll.";
    }
} else {
    echo "Invalid request method.";
}
