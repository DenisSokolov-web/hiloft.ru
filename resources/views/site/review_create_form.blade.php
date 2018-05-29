<div class="pop-up pop-up_review-create">
    <div class="pop-up__overlay">
        <div class="container">
            <div class="row">
                <div class="pop-up__body pop-up__body_review-create-form col-md-6 col-md-offset-3">

                    <img src="{{ asset('public/img/form/close.png') }}" alt="close" class="pop-up__close-button">

                    <form action="{{ route('hotels.feedbacks.store', [$hotel->id]) }}" method="post" class="form form_review-create form_pop-up" enctype="multipart/form-data">

                        <div class="form__header">
                            <h2 class="form__title">Новый отзыв</h2>
                            <h3 class="form__title_booking-item">Оставьте свой отзыв о нас</h3>
                        </div>

                        <div>
                            <div class="form__input-group">
                                <label for="input-photo" class="form__label form__label_block">Ваше фото (необязательно):</label>
                                <input type="file" id="input-photo" class="form__input" name="photo_src">
                            </div>

                            <div class="form__input-group">
                                <label for="input-name" class="form__label form__label_block">Ваше имя:</label>
                                <input type="text" id="input-name" class="form__input" name="name">
                            </div>

                            <div class="form__input-group">
                                <label for="input-text" class="form__label form__label_block">Текст отзыва:</label>
                                <textarea name="text" id="input-text" cols="30" rows="10" class="form__input form__textarea"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="form_name" value="feedback">

                        {{ csrf_field() }}

                        <button type="submit" class="button button_small form__submit submit_ajax js-submit-feedback button_disabled">Готово</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>