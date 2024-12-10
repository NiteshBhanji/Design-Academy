<div class="popup-container" id="popup-container">
</div>

<!--Occasional Auto Loading Popup-->
<div class="auto-popup-box" id="auto-popup-box">
    <div class="inner-popup-box">
        <img src="assets/images/icons/close.png" alt="" class="close-btn" id="auto-close-btn-id">
        <h3>Guaranteed Internship!</h3>
        <p class="instruct">We have officially parterned with Vayuu Design Agency</p>
        <div class="form-wrapper">
            <h2>PAU<span>x</span> &nbsp;<span class="thin-letter">X</span>&nbsp; Vayuu</h2>
            <h3>Join PAUx today for a 100% chance to land an internship opportunity.</h3>
            <!-- <a href="http://" class="filled-cta">Wohoo!</a> -->
        </div>
    </div>
</div>

<!-- <a href="https://wa.me/+918928308650?text=Heya!%20Welcome%20to%20PAUx%20Academy%2C%20where%20we%20aspire%20to%20be%20exceptional." class="whatsapp-float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a> -->


<!--Contact Form Popup-->
<!-- <div class="popup-box" id="popup-box">
    <div class="inner-popup-box">
        <img src="assets/images/icons/close.png" alt="" class="close-btn" id="close-btn-id">
        <h3>Enroll with PAUx</h3>
        <p class="instruct">Enroll today, first lecture on us, let's cheer 'Hooray!</p>
        <div class="form-wrapper">
            <form name="frmContact" id="" method="post" action="contact.php" enctype="multipart/form-data" onsubmit="return validateContactForm()">
                <p id="userEmail-info" class="info">Email Address</p>
                <input type="email" name="userEmail" id="userEmail" placeholder="Email Address*">

                <p id="userPhone-info" class="info">Contact Number</p>
                <input type="tel" name="userPhone" id="userPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number*">

                <div class="submit-box">
                    <input type="submit" value="Submit" class="submit-btn">
                </div>

                <div id="statusMessage">
                    <?php if (!empty($message)) { ?>
                        <p class='<?php echo $type; ?>Message'>
                            <?php echo $message; ?>
                        </p>
                    <?php } ?>
                </div>

                <p class="note">After submitting your details, a member of our team will promptly reach out to you to discuss the enrollment process in further detail.</p>
            </form>
        </div>
    </div>
</div> -->

<!--Form Validation Script-->
<!-- <script>
    function validateContactForm() {
        var valid = true;

        $(".info").html("");
        var userEmail = $("#userEmail").val();
        var userPhone = $("#userPhone").val();

        if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border-bottom', '0.5px solid #e66262');
            valid = false;
        } else {
            $("#userEmail").css('border-bottom', '0.5px solid #323232');
        }

        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border-bottom', '0.5px solid #e66262');
            valid = false;
        } else {
            $("#userEmail").css('border-bottom', '0.5px solid #323232');
        }

        if (userPhone == "") {
            $("#userPhone-info").html("Required.");
            $("#userPhone").css('border-bottom', '0.5px solid #e66262');
            valid = false;
        } else {
            $("#userPhone").css('border-bottom', '0.5px solid #323232');
        }

        if (!userPhone.match(/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/)) {
            $("#userPhone-info").html("Invalid Contact Number.");
            $("#userPhone").css('border-bottom', '0.5px solid #e66262');
            valid = false;
        } else {
            $("#userPhone").css('border-bottom', '0.5px solid #323232');
        }

        return valid;
    }
</script> -->