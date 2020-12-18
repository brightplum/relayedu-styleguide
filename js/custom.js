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


    // Program Accordion
    $('.program-accordion-heading').click(function () {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().attr('aria-expanded', 'false');
            $(this).parent().removeClass('active');
            $(this).find('h6').removeClass('active');
            $('.program-accordion-item').each(function (index, element) {
                $(element).removeClass('expanded');
            });
        } else {
            $('.program-accordion-item').each(function (index, element) {
                $(element).attr('aria-expanded', 'false');
                $(element).addClass('expanded');
                $(element).removeClass('active');
                $(element).find('h6').removeClass('active');
            })
            $(this).parent().attr('aria-expanded', 'true');
            $(this).parent().addClass('active');
            $(this).find('h6').addClass('active');
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

    // Plain slider
    $('.plain-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: false,
        prevArrow: $('.plain-left'),
        nextArrow: $('.plain-right'),
        dots: true,
    });

    // text Slider

    $('.text-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false
    });

    // Carousel

    $('.carousel-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 10000,
        centerPadding: '60px',
        centerMode: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    // Main menu
    $('.main-nav--icon').click(function() {
        $(this).toggleClass('open');
    });

    // Delete on drupal theme
    $(".main-nav ul li > a").click(function(e) {
        e.preventDefault();
    });

    $('.main-nav li .no-link').click(function() {
        $('.main-nav li').removeClass('active');
        $(this).parent().toggleClass('active');
    });
    $('.menu-back .back').click(function (e) {
        $(this).closest('li').toggleClass('active');
        e.preventDefault();
    });

    $('.main-nav--icon').click(function() {
        $('.parent-menu').toggleClass('open');
        $('.nav').toggleClass('open');
    });


    // Program tabs
    const select = document.querySelectorAll('.selectBtn');
    const option = document.querySelectorAll('.option');
    let index = 1;

    select.forEach(a => {
        a.addEventListener('click', b => {
            const next = b.target.nextElementSibling;
            next.classList.toggle('toggle');
            next.style.zIndex = index++;
        });
    });
    option.forEach(a => {
        a.addEventListener('click', b => {
            b.target.parentElement.classList.remove('toggle');

            const parent = b.target.closest('.select').children[0];
            parent.setAttribute('data-type', b.target.getAttribute('data-type'));
            parent.innerText = b.target.innerText;
        });
    });

    $('.program-tabs--headers-head').click(function () {
        let target = $(this).data('target');
        $('.program-tabs--headers-head').removeClass('active');
        $(this).addClass('active');
        $('.program-tabs-tab').removeClass('active');
        $('#' + target).addClass('active');
    });


})(jQuery)