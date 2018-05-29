$(document).ready(function(){
    $('.projects__slider').slick({
        slidesToShow: 3,
        prevArrow: "<button type=\"button\" class=\"projects__slider-arrow slider__arrow slider__arrow_prev\"><i class=\"fas fa-chevron-left\"></i></button>",
        nextArrow: "<button type=\"button\" class=\"projects__slider-arrow slider__arrow slider__arrow_next\"><i class=\"fas fa-chevron-right\"></i></button>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true
                }
            }
    ]
    });

    $('.directions__slider').slick({
        slidesToShow: 3,
        prevArrow: "<button type=\"button\" class=\"directions__slider-arrow slider__arrow slider__arrow_prev\"><i class=\"fas fa-chevron-left\"></i></button>",
        nextArrow: "<button type=\"button\" class=\"directions__slider-arrow slider__arrow slider__arrow_next\"><i class=\"fas fa-chevron-right\"></i></button>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true
                }
            }
        ]
    });

    /*
    // HOVER-АНИМАЦИЯ для `SECTION-BLOG`
     */
    var $blogItem = $('.blog-item');
    $blogItem.on('mouseenter', function () {
        var $img = $(this).find('.blog-item__img');
        $img.toggleClass('blog-item__img_hover');
    });
    $blogItem.on('mouseleave', function () {
        var $img = $(this).find('.blog-item__img');
        $img.toggleClass('blog-item__img_hover');
    });

    /*
    // HOVER-АНИМАЦИЯ для `SECTION-DIRECTIONS`
     */
    var $directionsItem = $('.directions-item');
    $directionsItem.on('mouseenter', function () {
        var $img = $(this).find('.directions-item__img');
        $img.toggleClass('directions-item__img_hover');
    });
    $directionsItem.on('mouseleave', function () {
        var $img = $(this).find('.directions-item__img');
        $img.toggleClass('directions-item__img_hover');
    });

    /*
    // АНИМАЦИЯ CARET` У `SELECT`
     */
    var viewportWidthDesktop = 1200;
    var viewportCurrent = screen.width;
    var $select = $('select');

    $select.on('blur', function () {
        var $caret = $(this).siblings('.select__caret');
        if ($caret.hasClass('select__caret_active'))
        {
            $caret.toggleClass('select__caret_active');
        }
    });

    $select.on('click', function () {
        var $caret = $(this).siblings('.select__caret');

        if (viewportCurrent < viewportWidthDesktop && $caret.hasClass('select__caret_active')) {
            return;
        } else {
            $caret.toggleClass('select__caret_active');
        }

    });

    /*
    // HAMBURGER
     */
    $hamb = $('.hamburger');
    $menu = $('.header__menu');
    $menuLink = $('.header__menu-link');

    $hamb.on('click', function () {
        menuToggle();
    });

    $menuLink.on('click', function () {
        menuToggle();
    });

    function menuToggle() {
        $hamb.toggleClass('is-active');
        $menu.slideToggle();
    }

    /*
    // ПЛАВНЫЙ СКРОЛЛ К ЯКОРЮ
     */
    $("a[href^='#']").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 1700, 'easeInOutCubic');
        return false;
    });

    /*
    // Анимация при скролле
     */
    /*var $cta = $('.cta-franch__text');
    $cta.addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 100
    });*/

    /*

     */


    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();

        var $el = $('');
        var parallaxSpeed = 1/50;
        $el.css({
            'transform': 'translate(0%,' + scrollTop * parallaxSpeed + '%)'
        })
    })

});