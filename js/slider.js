/*$(document).ready(function () {

    $('.project-wrapper').on('init',function(){
        $(".slick-active").prev().removeClass('nextdiv').addClass('prevdiv');
        $(".slick-active").next().removeClass('prevdiv').addClass('nextdiv');
    });

    $('.project-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        draggable: true,
        centerMode: true,
        variableWidth: true
    }).on('afterChange',function(){
        $(".slick-active").prev().removeClass('nextdiv').addClass('prevdiv');
        $(".slick-active").next().removeClass('prevdiv').addClass('nextdiv');
    });
});*/


/*$(document).ready(function () {
    var index = 0;

    $('.project-wrapper').each(function() {
        index++;
        $(this).attr('data-slider', index);

    $(this).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        draggable: false
    });
});
});*/




$(document).ready(function () {

    $('.project-wrapper')
    .on('afterChange init', function(event, slick, direction){
        console.log('afterChange/init', event, slick, slick.$slides);
        // remove all prev/next
        slick.$slides.removeClass('prevdiv').removeClass('nextdiv');
    
        // find current slide
        for (var i = 0; i < slick.$slides.length; i++)
        {
            var $slide = $(slick.$slides[i]);
            if ($slide.hasClass('slick-current')) {
                // update DOM siblings
                $slide.prev().addClass('prevdiv');
                $slide.next().addClass('nextdiv');
                break;
            }
        }
      }
    )
    .on('beforeChange', function(event, slick) {
        // optional, but cleaner maybe
        // remove all prev/next
        slick.$slides.removeClass('prevdiv').removeClass('nextdiv');
    })
    .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        draggable: true,
        centerMode: true,
        variableWidth: true
    });
});