<?php include "path.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home. Our Courses.</title>
    <meta name="description" content="Join PAUx Academy, the ultimate UI UX design academy for passionate learners! Our innovative approach empowers you with the tools to succeed in the design industry. Master research, develop MVPs, create effective designs, and build a professional portfolio. Start your journey to success today.">

    <META NAME="robots" CONTENT="noindex,nofollow">


    <!--  Essential META Tags for Facebook -->
    <meta property="og:title" content="Home. Our Courses.">
    <meta property="og:site_name" content="PAUx Academy">
    <meta property="og:description" content="Join PAUx Academy, the ultimate UI UX design academy for passionate learners! Our innovative approach empowers you with the tools to succeed in the design industry. Master research, develop MVPs, create effective designs, and build a professional portfolio. Start your journey to success today.">
    <meta property="og:image" content="https://paux.live/paux-preview.jpg">
    <meta property="og:url" content="https://paux.live/">

    <!--  Essential META Tags for Facebook -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home. Our Courses.">
    <meta name="twitter:description" content="Join PAUx Academy, the ultimate UI UX design academy for passionate learners! Our innovative approach empowers you with the tools to succeed in the design industry. Master research, develop MVPs, create effective designs, and build a professional portfolio. Start your journey to success today.">
    <meta name="twitter:image" content="https://paux.live/paux-preview.jpg">

    <?php include "allcss.php"; ?>
    <link rel="stylesheet" href="css/index.css?v=6.1">

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

    <!--Header Starts Here-->
    <?php include "header.php"; ?>

    <div id="luxy"><!--Used for Smooth scroll Effect-->

        <!--Main Content Starts Here-->
        <main>
            <sect ion class="container hero-section white-bg">
                <div class="inner-container">
                    <img src="assets/images/text-img/hero-section-text-black.png" alt="" class="tilted-heading-text hide-tablet">
                    <h1>Carefully & lovingly <span class="vector-heart"></span> we will teach you how to Design from
                        <span class="vector-underline">scratch</span>
                        to Pro <span class="vector-rocket"></span>
                    </h1>
                    <p>But before that we would like to know about your experience level, so we can show you the right
                        program</p>
                    <div class="cta-group-box">
                        <a href="masterclass.php" class="filled-cta">Yes, I have design experience</a>
                        <a href="roots.php" class="filled-cta">No, I do not have design experience</a>
                    </div>

                    <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                </div>
                </section>

                <section class="container program-section purp-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/program-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>These Programs are <span class="vector-underline">right</span> for you if..
                        </h2>
                        <div class="programs-container">
                            <div class="program-box program-one">
                                <div class="image-box">
                                    <picture>
                                        <source media="(min-width: 1201px)" srcset="assets/images/vectors/program-vector-black-001.png">
                                        <img src="assets/images/vectors/program-vector-black-mob-001.png">
                                    </picture>
                                </div>
                                <div class="text-box">
                                    <h3>You are New to Design</h3>
                                    <p>Don’t worry we got your back, we have a very well structured learning path that is very
                                        easy and rejuvenating to follow </p>
                                </div>
                            </div>
                            <div class="program-box program-two">
                                <div class="text-box">
                                    <h3>Already Experienced? Want to earn more</h3>
                                    <p>We will spill the secret beans that will further upscale your design game and your demand
                                        in the current competitive market</p>
                                </div>
                                <div class="image-box">
                                    <picture>
                                        <source media="(min-width: 1201px)" srcset="assets/images/vectors/program-vector-black-002.png">
                                        <img src="assets/images/vectors/program-vector-black-mob-002.png">
                                    </picture>
                                </div>

                            </div>
                            <div class="program-box program-three">
                                <div class="image-box">
                                    <picture>
                                        <source media="(min-width: 1201px)" srcset="assets/images/vectors/program-vector-black-003.png">
                                        <img src="assets/images/vectors/program-vector-black-mob-003.png">
                                    </picture>
                                </div>
                                <div class="text-box">
                                    <h3>You are Switching to
                                        Designing</h3>
                                    <p>We will be with you and ride those sturdy tides together to help come out as a skilled
                                        sailor</p>
                                </div>
                            </div>
                        </div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container select-section white-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/select-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>Choose the <span class="vector-underline">best</span> fit for you
                        </h2>
                        <div class="select-container">
                            <div class="select-box select-one">
                                <div class="image-box">
                                    <picture>
                                        <source media="(min-width: 1201px)" srcset="assets/images/vectors/select-vector-black-001.png">
                                        <img src="assets/images/vectors/select-vector-black-mob-001.png">
                                    </picture>
                                </div>
                                <div class="text-box">
                                    <h6>Starting new or switching career</h6>
                                    <h3>Start with the “Roots”</h3>
                                    <p>For people who are starting from the scratch and want to learn what is UI UX
                                        then this is the ideal program for you.</p>
                                    <a href="roots.php" class="filled-cta">Explore “Roots”</a>
                                </div>
                            </div>
                            <div class="select-box select-two">
                                <div class="text-box">
                                    <h6>Already has experience</h6>
                                    <h3>Start with “Masterclass”</h3>
                                    <p>For people who already have the experience in the field of designing and want to upscale
                                        further, then this is the ideal profram for you .</p>
                                    <a href="masterclass.php" class="filled-cta">Explore “Masterclass”</a>
                                </div>
                                <div class="image-box">
                                    <picture>
                                        <source media="(min-width: 1201px)" srcset="assets/images/vectors/select-vector-black-002.png">
                                        <img src="assets/images/vectors/select-vector-black-mob-002.png">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container placement-section purp-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/placement-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>Our Students are <span class="vector-underline">Working</span> at</h2>
                        <p>Some of the top of companies and design agencies where our Pauxians are currently working</p>

                        <div class="company-container">
                            <div class="company-box-wrapper">
                                <div class="company-box comapny-one">
                                    <img src="assets/images/logo/company-logos/uplers.png" alt="">
                                </div>
                            </div>
                            <div class="company-box-wrapper company-flex-wrapper">
                                <div class="company-box comapny-two">
                                    <img src="assets/images/logo/company-logos/the-minimalist.png" alt="">
                                </div>
                                <div class="company-box comapny-three">
                                    <img src="assets/images/logo/company-logos/elasticrun.png" alt="">
                                </div>
                                <div class="company-box comapny-four">
                                    <img src="assets/images/logo/company-logos/real.png" alt="">
                                </div>
                                <div class="company-box comapny-five">
                                    <img src="assets/images/logo/company-logos/hybreed.png" alt="">
                                </div>
                            </div>
                        </div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container student-project-section white-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/stud-project-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>Student <span class="vector-underline">Work</span></h2>
                        <p>These are a few of the Assignments that our students completed with their own unique touches.</p>

                        <div class="project-container">
                            <div class="project-box project-box-one">
                                <div class="img-box">
                                    <img src="assets/images/vectors/project/airbnb-project-box-002.png" alt="">
                                </div>
                                <div class="text-box">
                                    <h3>Airbnb Gamification Concept</h3>
                                    <p>Incorporated the idea of gamification into airbnb, giving visitors a completely new experience</p>
                                    <!-- <a href="https://www.behance.net/gallery/177076763/Implementing-Gamification-on-AIRBNB" target="_blank" class="filled-cta">View</a> -->
                                </div>

                            </div>
                            <div class="project-box project-box-two">
                                <div class="img-box">
                                    <img src="assets/images/vectors/project/kwickpay-project-box-001.png" alt="">
                                </div>
                                <div class="text-box">
                                    <h3>KwickPay Case Study</h3>
                                    <p>A fresh method of payment with a dash of daring and modern style</p>
                                    <!-- <a href="https://www.behance.net/gallery/176098017/KwickPay-A-UXUI-Case-Study" target="_blank" class="filled-cta">View</a> -->
                                </div>

                            </div>
                        </div>
                        <div class="project-btn"><a href="https://www.behance.net/pauxacademyuxui" target="_blank" class="filled-cta">View Projects</a></div>

                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container testimonial-section purp-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/testimonial-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>Student <span class="vector-underline">Testimonials</span></h2>
                        <p>Our early joiners have been saying nice things.</p>

                        <img src="assets/images/text-img/testimonial-section-black-text-002.png" alt="" class="tilted-heading-text-two">
                        <div class="testimonial-wrapper">
                            <div class="column column-one">




                                <div class="card-wrapper scene--card card-one">
                                    <div class="flip-surface flip-surface-one">
                                        <div class="card__face card__face--front">
                                            <img src="assets/images/testimonial-images/shreyasi.png" alt="" srcset="">
                                        </div>
                                        <div class="card__face card__face--back">
                                            <div class="quotes-wrapper">
                                                <p class="words">I received a 90% raise, and I am currently employed at 9LPA, all because of the level of education that I received in PAUx Academy.</p>
                                                <p class="company">Currently@ <img src="assets/images/testimonial-images/company/balance.png" alt=""></p>
                                                <p class="link-wrap"><a href="https://www.linkedin.com/in/shreyasi9/" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-wrapper scene--card card-three">
                                    <div class="flip-surface flip-surface-three">
                                        <div class="card__face card__face--front">
                                            <img src="assets/images/testimonial-images/vivek.png" alt="" srcset="">
                                        </div>
                                        <div class="card__face card__face--back">
                                            <div class="quotes-wrapper">
                                                <p class="words">PAUx Academy's instructor was amazing! He taught UI/UX flawlessly, and his kindness and politeness made the learning experience enjoyable</p>
                                                <p class="company">Currently@ <img src="assets/images/testimonial-images/company/hybreed.png" alt=""></p>
                                                <p class="link-wrap"><a href="https://www.linkedin.com/in/vivekn98/" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="column column-two">



                                <div class="card-wrapper scene--card card-two">
                                    <div class="flip-surface flip-surface-two">
                                        <div class="card__face card__face--front">
                                            <img src="assets/images/testimonial-images/aniket.png" alt="" srcset="">
                                        </div>
                                        <div class="card__face card__face--back">
                                            <div class="quotes-wrapper">
                                                <p class="words">Thanks to PAUx Academy, I landed my dream job! The practical skills and industry insights I gained greatly improved my resume and design skills</p>
                                                <p class="company">Currently@ <img src="assets/images/testimonial-images/company/real.png" alt=""></p>
                                                <p class="link-wrap"><a href="https://www.linkedin.com/in/aniket-kale-9a7278131/" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-wrapper scene--card card-four">
                                    <div class="flip-surface flip-surface-four">
                                        <div class="card__face card__face--front">
                                            <img src="assets/images/testimonial-images/general.png" alt="" srcset="">
                                        </div>
                                        <div class="card__face card__face--back">
                                            <div class="quotes-wrapper">
                                                <p class="words">PAUx Academy surpassed my expectations! Impressive course content impressed me so much that I enrolled in my second course with them</p>
                                                <p class="company">Currently@ <img src="assets/images/testimonial-images/company/uplers.png" alt=""></p>
                                                <p class="link-wrap"><a href="#" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container connect-section white-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/connect-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2>Convinced <span class="vector-underline">yet?</span></h2>
                        <p>Let us take the responsibility of explaining the modules to you.</p>
                        <div class="cta-box"><a href="#" class="filled-cta">Order a call</a></div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <section class="container root-training-section purp-bg">
                    <div class="inner-container">
                        <img src="assets/images/text-img/root-training-section-black-text.png" alt="" class="tilted-heading-text hide-tablet">
                        <h2><span class="vector-underline">Free</span> Training for Students </h2>
                        <img src="assets/images/vectors/root-training-black-vector-001.png" alt="" class="root-vector-img hide-mobile">
                        <img src="assets/images/vectors/root-training-black-vector-mob-001.png" alt="" class="root-vector-img hide-tablet hide-desktop">
                        <p>For the students who lost their parents during the gloomy COVID era</p>
                        <div class="cta-box"><a href="tel:8928308650" class="filled-cta">Contact Us</a></div>
                        <img src="assets/images/vectors/section-partition-horizontal-001.png" alt="" class="section-divider hide-desktop hide-tablet">
                    </div>
                </section>

                <!--FAQ Section Here-->
                <?php include "faq-sec.php"; ?>

        </main>

        <!--Footer Starts Here-->
        <?php include "footer.php"; ?>
    </div>

    <!--PopUp Form Starts Here-->
    <?php include "popup-form.php"; ?>

    <!--Global Html sarts Here-->
    <?php include "global-include.php"; ?>

    <!--All Scripts-->
    <?php include "allscripts.php"; ?>

</body>

</html>