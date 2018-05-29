@extends('site.layouts.main')

@section('content')

    <!-- PRIMARY-SCREEN-->
    <div class="primary-screen" id="primary-screen">

        <div class="primary-screen__overlay"></div>

        <div class="primary-screen__content">

            <h1 class="h1">
                <span class="h1_sm"><span>сотруд</span><span>ничество</span></span>
                <span class="h1__subheader">для собственников помещений</span>
            </h1>

            <div class="primary-screen__actions">
                <a href="#cta-partner" class="btn btn_lg btn_solid">начать сотрудничество</a>
            </div>

        </div>

    </div>

    <!-- BODY-CONTENT -->
    <div class="body__content">

        <!-- SECTION - CONDITIONS -->
        <section class="section conditions">
            <div class="section__wrapper section__wrapper">

                <div class="h2 h2_narrow">
                    <h2>У НАС ЛУЧШИЕ УСЛОВИЯ ДЛЯ СОТРУДНИЧЕСТВА</h2>
                    <p class="h2__subheader">Мы готовы взять в аренду помещение или открыть для вас отель или хостел под ключ на эксклюзивных условиях.</p>
                </div>

                <div class="conditions__body">

                    <div class="conditions__row">

                        <div class="conditions__img">
                            <img src="{{ asset('public/img/conditions/img-1.jpg') }}" alt="Помощь и гарантированный результат">
                        </div>

                        <div class="conditions__text">
                            <h3 class="h3">Помощь и гарантированный результат</h3>
                            <div class="conditions__text-body">
                                <p>Наша система ведения бизнеса практикуется более двух лет. За это время мы открыли более 30 успешных обьектов размещения гостей в разных городах.</p>
                                <p>Мы оказываем юридическую поддержку, маркетинговое и рекламное сопровождение бизнеса партнеров.</p>
                            </div>
                        </div>
                    </div>

                    <div class="conditions__row">
                        <div class="conditions__text">
                            <h3 class="h3">Качество и стильный интерьер</h3>
                            <div class="conditions__text-body">
                                <p>В Помещениях выполняется качественный евроремонт класса А+ из высокачественных материалов опытными строителями-специалистами.</p>
                                <p>Все обьекты размещения гостей проходят обязательную сертификацию. гарантируется соответствие всех требований ГОСТа и законодальства РФ.</p>
                                <p>Удачное предложение для взаимовыгодного сотрудничества!</p>
                            </div>
                        </div>

                        <div class="conditions__img">
                            <img src="{{ asset('public/img/conditions/img-2.jpg') }}" alt="Качество и стильный интерьер">
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- SECTION - CTA-PARTNER -->
        <section class="section cta-partner" id="cta-partner">
            <div class="section__wrapper cta-partner__wrapper">

                <div class="cta-partner__text">
                    <h3>Хотите узнать подробней?</h3>
                    <p>Оставьте контактные данные. Мы отправим вам коммерческое предложение или просто позвоните нам на номер
                        <a href="tel:8-989-888-09-09">8-989-888-09-09</a></p>
                </div>

                <form action="#" class="form cta-partner__form">
                    <input type="text" class="form__input form__input_md" name="phone-number" placeholder="Номер телефона">
                    <button class="btn btn_solid btn_md js-cta-partnership-submit">отправить</button>
                    <p class="cta-partner__agreement">*нажимая на кнопку вы соглашаетесь с условиями обработки ваших персональных данных</p>
                </form>

            </div>
        </section>

        <!-- SECTION - PARAMETERS -->
        <section class="section parameters">
            <div class="section__wrapper">

                <div class="h2 h2_narrow">
                    <h2>ПАРАМЕТРЫ ИДЕАЛЬНОГО ПОМЕЩЕНИЯ</h2>
                </div>

                <div class="parameters__body">

                    <div class="parameters__text">
                        <h3>Предложение для собственников в Москве и Санкт-петербурге</h3>

                        <div>
                            <ol class="parameters__items">
                                <li class="parameters__item"><span class="icon-metro parameters_icon"></span>удаленность от метро: максимум 15 минут</li>
                                <li class="parameters__item"><span class="icon-square parameters_icon"></span>площадь от 150 м2</li>
                                <li class="parameters__item"><span class="icon-building parameters_icon"></span>этажность: 4 этажа (выше - потребуется лифт)</li>
                                <li class="parameters__item"><span class="icon-no-persons parameters_icon"></span>коммерческое назначение: не жилое</li>
                                <li class="parameters__item"><span class="icon-money-bag parameters_icon"></span>цена: в Москве: до 14 000 за кв.м в год&nbspв Петербурге обсуждается индивидуально</li>
                            </ol>
                        </div>

                        <div class="parameters__action">
                            <a href="#cta-partner" class="btn btn_solid btn_xl btn_black-text">начать сотрудничество</a>
                        </div>

                    </div>

                    <div class="parameters__img">
                        <img src="{{ asset('public/img/parameters/img.jpg') }}" alt="ПАРАМЕТРЫ ИДЕАЛЬНОГО ПОМЕЩЕНИЯ">
                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection