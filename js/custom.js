(function ($) {

    // Accordion Functionality
    $('.accordion-heading').click(function () {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().attr('aria-expanded', 'false');
            $(this).parent().removeClass('active');
        } else {
            $('.accordion-item').each(function (index, element) {
                $(element).attr('aria-expanded', 'false');
                $(element).removeClass('active');
            })
            $(this).parent().attr('aria-expanded', 'true');
            $(this).parent().addClass('active');
        }
    });



    //Card-slider

    $('.card-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        prevArrow: $('.slider-controls--left'),
        nextArrow: $('.slider-controls--right')
    });


    $('.main-nav--icon').click(function(){
        $(this).toggleClass('open');
    });


})(jQuery)