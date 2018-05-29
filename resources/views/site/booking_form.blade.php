<div class="pop-up pop-up_booking_form">
    <div class="pop-up__overlay">
        <div class="container">
            <div class="row">
                <div class="pop-up__body pop-up__body_booking-form col-md-6 col-md-offset-3 col-sm-12 col-xs-12">

                    <img src="{{ asset('public/img/form/close.png') }}" alt="close" class="pop-up__close-button">

                    <form action="#" class="form form_booking form_pop-up js-form-booking" enctype="multipart/form-data" id="form">

                        <div class="form__header">
                            <h2 class="form__title">Забронировать номер</h2>
                            <h3 class="form__title_booking-item">Кровать в общем 8-ми местном номере для женщин</h3>
                        </div>

                        <div>
                            <div class="form__input-group">
                                <label for="input-name" class="form__label form__label_block">*Ваше имя:</label>
                                <input type="text" id="input-name" class="form__input" name="name">
                            </div>

                            <div class="form__input-group">
                                <label for="input-phone" class="form__label form__label_block">*Ваш телефон:</label>
                                <input type="text" id="input-phone" class="form__input js-form__input_phone" name="phone">
                            </div>

                            <div class="form__input-group">
                                <label for="input-email" class="form__label form__label_block">*Ваш email:</label>
                                <input type="text" id="input-email" class="form__input" name="email">
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form__input-group">
                                        <label for="input-date_arrival" class="form__label form__label_block">*Дата заезда:</label>
                                        <input type="date" id="input-date_arrival" class="form__input" name="date_arrival">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form__input-group">
                                        <label for="input-date_departure" class="form__label form__label_block">*Дата отъезда:</label>
                                        <input type="date" id="input-date_departure" class="form__input" name="date_departure">
                                    </div>
                                </div>
                            </div>

                            <div class="form__input-group">
                                <label for="input-quantity" class="form__label form__label_block">*Количество:</label>
                                <input type="number" min="1" id="input-quantity" class="form__input booking-form__quantity" value="1">
                            </div>

                            <input type="hidden" name="room_name" class="js-input-room-name" value="123">
                        </div>

                        <div class="form__calculate">Сумма: <span class="form__calculate_sum"><span class="form__calculate_amount">3000</span> руб.</span></div>

                        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}" class="js-hotel-id">

                        <button title="submit" class="button button_small form__submit js-submit_ajax js-submit-booking button_disabled">Забронировать</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>