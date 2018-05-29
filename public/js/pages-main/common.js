$(document).ready(function () {

    $('.js-slick-slider_pop-directions').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true
    });

    $('.js-slick-slider_pop-directions').on('beforeChange', function(event, slick, currentSlide, nextSlide) {

        var $curItem = $(this).find('.six-main__owl-item');
        //$curItem.addClass('slider__item_current');

        console.log($curItem);
    });

    /*
    hover-effect для blog__item
     */

    var $blogItem = $('.blog__item');
    duration = 600;
    heightStart = '80px';
    heightEnd = '800px';

    $blogItem.on('mouseenter', function () {
        var $header = $(this).find('.blog__header-container');
        $header.animate({'max-height': heightEnd}, duration)
    });

    $blogItem.on('mouseleave', function () {
        var $header = $(this).find('.blog__header-container');
        $header.animate({'max-height': heightStart}, duration)
    });

    $(function(){
        var nav = $('.menu_mobile'),
            animateTime = 500,
            navLink = $('.js-menu__button_toggle');
        navLink.click(function(){

            navLink.toggleClass('is-active');

            if(nav.height() === 0){
                autoHeightAnimate(nav, animateTime);
            } else {
                nav.stop().animate({ height: '0' }, animateTime);
            }
        });
    });

    /* Function to animate height: auto */
    function autoHeightAnimate(element, time){
        var curHeight = element.height(), // Get Default Height
            autoHeight = element.css('height', 'auto').height(); // Get Auto Height
        element.height(curHeight); // Reset to Default Height
        element.stop().animate({ height: autoHeight }, parseInt(time)); // Animate to Auto Height
    }

    $('.menu__a_mobile').on('click', function () {
        var nav = $('.menu_mobile');
        navLink = $('.js-menu__button_toggle');

        nav.css({'height': 0});
        navLink.toggleClass('is-active');
    });

    /*
    HOTELS-SELECT
     */

    $('.js-countries-select').on('change', function () {

        console.log('countries')

        var country = $(this).val();
        var $selectCity = $('.js-cities-select');

        $.post(
            "ajax/hotels-select-handler",
            {
                'country': country
            },
            function (data) {
                console.log(data)
                $selectCity.find('.select-hotels__option').remove();
                $.each(data, function (key, value) {
                    $selectCity.append("<option class='select-hotels__option'>" + value.city + "</option>");
                });
            }
        );

    });

    $('.js-cities-select').on('change', function () {

        console.log('cities')

        var city = $(this).val();
        var $selectHotels = $('.js-hotels-select');

        $.post(
            "ajax/hotels-select-handler",
            {
                'city': city
            },
            function (data) {
                $selectHotels.find('.select-hotels__option').remove();
                $.each(data, function (key, value) {
                    $selectHotels.append("<option class='select-hotels__option'>" + value.address + "</option>");
                });
            }
        );

    });

    $('.js-hotels-select').on('change', function () {
        var address = $(this).val();
        var $submit = $('.js-hotels-select-submit');

        $.post(
            "ajax/hotels-select-handler",
            {
                'address': address
            },
            function (data) {
                $submit.attr('href', data.slug)
            }
        );
    });

});