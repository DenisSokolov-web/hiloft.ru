$(document).ready(function () {

    /*
     Плавный скроллинг к якорю
     */
    var $anchorElem = $('.js-a_anchor');

    $anchorElem.on('click', function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        var dist = $(id).offset().top;

        $('body,html').animate({scrollTop: dist}, 1500);
    });

    /*
     Прилипание верхнего меню при скроллинге
     */
    var $body = $('.joombotron');

    var windowScroll = 100; //на какой высоте срабатывает эффект

    $(window).scroll(function()
    {
        var $top_menu =  $('.header__line');

        if (!$body.hasClass('fixed'))
        {
            if($(this).scrollTop() >= windowScroll)
            {
                $top_menu.addClass('header__line_sticky-top');
                $top_menu.addClass('animated fadeIn');
            } else {
                $top_menu.removeClass('header__line_sticky-top');
                $top_menu.removeClass('animated fadeIn');
            }
        }
    });

        $('.header__a_mobile').on('click', function () {
            $('.header__mobile').fadeOut();
            $("#nav-icon3").removeClass("open");
        });




    $('.pop-up-open[pop-up="pop-up_booking_form"]').on('click', function () {
        roomName = $(this).siblings('.price__name').html();
        roomPrice = $(this).siblings('.price__amount').html();
        roomPrice = roomPrice.split(' ');
        roomPrice = roomPrice[0];

        $('.form__title_booking-item').html(roomName);
        $('.form__calculate_amount').html(roomPrice);

        $('.js-input-room-name').val(roomName);
    });

    /*
    Открытие pop-up при нажатии на .POP-UP-OPEN
     */
    $('.pop-up-open').click(function () {
        currentScroll = window.pageYOffset;

        var popUp = $(this).attr('pop-up');
        var popUpClass = '.' + popUp;
        $('.header__line').hide();
        $(popUpClass).show();
        $('.joombotron').addClass('fixed');
        $('.joombotron').css({'top': -1 * currentScroll});
        $('body,html').scrollTop(0);
    });

    /*

     */
    $('.booking-form__quantity').on('change', function () {
        var quantity = $(this).val();
        var sum = quantity * roomPrice;
        $('.form__calculate_amount').html(sum);
    });

    /*
    Закрытие pop-up при нажатии на close
     */
    $('.pop-up__close-button').on('click', function () {
        $('.pop-up').hide();
        $('.header__line').fadeIn(200);
        $('.joombotron').removeClass('fixed');
        $('body,html').scrollTop(currentScroll);
    });

    /*
    AJAX
     */
    /*$('.js-submit_ajax').on('click', function (event) {
        event.preventDefault();

        var form = $(this).parents('form');
        console.log(form);
        var form = $('#form');
        console.log(form);

        var msg = $(form).serialize();
        console.log(msg);
        $.ajax({
            type: 'POST',
            url: "/ajax/forms_handler",
            data: {'data': msg},
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            }

        });

    });*/

    $("form").on("js-submit-booking", function( event ) {
        event.preventDefault();

        var msg = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: "/ajax/forms_handler",
            data: msg,
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            }

        });
    });

    /*

     */
    $('.form_review-create').on('keyup', function () {
        var name = $(this).find('#input-name').val();
        var text = $(this).find('#input-text').val();
        var $submit = $(this).find('.form__submit');

        console.log('keyup');

        if (name.length > 0 && text.length > 0)
            $submit.removeClass('button_disabled');
        if (name.length == 0 || text.length == 0)
            $submit.addClass('button_disabled');
    });

    $('.js-form-booking').on('keyup', function () {
        ckeckBookingForm($(this));
    });

    $('.js-form-booking').on('change', function () {
        ckeckBookingForm($(this));
    });


    function ckeckBookingForm(form) {
        var name = $(form).find('#input-name').val();
        var phone = $(form).find('#input-phone').val();
        var email = $(form).find('#input-email').val();
        var dateArrival = $(form).find('#input-date_arrival').val();
        var dateDeparture = $(form).find('#input-date_departure').val();
        var quantity = $(form).find('#input-quantity').val();

        var $submit = $(form).find('.form__submit');

        if (name.length > 0 && phone.length > 0 && email.length > 0 && dateArrival.length > 0 && dateDeparture.length > 0 && quantity > 0)
            $submit.removeClass('button_disabled');
        if (name.length == 0 || phone.length == 0 || email.length == 0 || dateArrival.length == 0 || dateDeparture.length == 0 || !quantity)
            $submit.addClass('button_disabled');
    }

    $('.js-submit-booking').on('click', function () {
        if ($(this).hasClass('button_disabled'))
        {
            event.preventDefault();
            return;
        }

        event.preventDefault();

        var $form = $(this).parents('form');

        var name = $(form).find('#input-name').val();
        var phone = $(form).find('#input-phone').val();
        var email = $(form).find('#input-email').val();
        var dateArrival = $(form).find('#input-date_arrival').val();
        var dateDeparture = $(form).find('#input-date_departure').val();
        var quantity = $(form).find('#input-quantity').val();
        var roomName = $(form).find('.js-input-room-name').val();
        var hotelId = $(form).find('.js-hotel-id').val();

        $.post(
            "/ajax/booking_form_handler",
            {
                hotel_id: hotelId,
                name: name,
                phone: phone,
                email: email,
                date_arrival: dateArrival,
                date_departure: dateDeparture,
                quantity: quantity,
                room_name: roomName
            },
            function (data) {
                $('.pop-up').hide();
                $form.find('input').val('');
            }
        );
        $('.pop-up').hide();
        $form.find('input').val('');
    });

    $('.form__submit').on('click', function (event) {
        if ($(this).hasClass('button_disabled'))
            event.preventDefault();
    });

    /*

     */
    $('.js-form__input_phone').mask("+7(999)999-99-99");


    /*

     */
    $('.js-countries-select').on('change', function () {
        var country = $(this).val();

        $.post(
            "/ajax/hotels-select-handler",
            {
                country: country
            },
            function (data) {

                $.each(data, function (i, val) {
                    var option = "<option>" + val.city +"</option>"
                    $('.js-cities-select').append(option)
                })
            }
        );
    })

});