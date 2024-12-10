<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<!--Testimonial Flip Cards-->
<script>
    var cards = document.querySelectorAll('.flip-surface');
    [...cards].forEach((card) => {
        card.addEventListener('click', function() {
            card.classList.toggle('is-flipped');
            $('.flip-surface-four').removeClass('is-flipped');
        });
    });
</script>


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    $(function() {
        $('a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active');
                $(this).parents('li').addClass('active');
            }
        });
    });
</script>


<!--FAQ Accordian-->
<script src="<?php echo BASE_URL; ?>js/accordian.js"></script>


<!--Popup Form JS-->
<script src="<?php echo BASE_URL; ?>js/form-popup.js"></script>

<script src="<?php echo BASE_URL; ?>js/hamMenu.js"></script> <!--JS For Toggle Hamburger Menu-->

<!--fliped testimoial card in mobile-->
<script>
    jQuery(document).ready(function($) {
        var alterClass = function() {
            var ww = document.body.clientWidth;
            if (ww <= 768) {
                $('.flip-surface-three').addClass('is-flipped');
                $('.flip-surface-four').removeClass('is-flipped');
                $('.flip-surface-two').removeClass('is-flipped');
            } else if (ww > 769) {
                $('.flip-surface-three').addClass('is-flipped');
                $('.flip-surface-four').removeClass('is-flipped');
                $('.flip-surface-two').addClass('is-flipped');
            };
        };
        $(window).resize(function() {
            alterClass();
        });
        //Fire it when the page first loads:
        alterClass();
    });
</script>


<script src="<?php echo BASE_URL; ?>dist/luxy.js"></script> <!--JS For Smooth Scrolling-->
<script src="<?php echo BASE_URL; ?>js/smooth-scroll.js"></script>