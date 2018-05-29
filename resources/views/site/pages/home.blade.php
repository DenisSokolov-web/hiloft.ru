@extends('site.layouts.main')

@section('content')

    <!-- PRIMARY-SCREEN-->
    <div class="primary-screen" id="primary-screen">

        <div class="primary-screen__overlay"></div>

        <div class="primary-screen__content">

            <h1 class="h1">
                <span>HiLoft</span>
                <span class="h1__subheader">сеть дизайнерских миниотелей</span>
            </h1>

            <div class="primary-screen__actions">
                <a href="#" class="btn btn_lg btn_solid">бронирование</a>
                <a href="#" class="btn btn_lg btn_solid">Франшиза</a>
            </div>

        </div>

    </div>

    <!-- BODY-CONTENT -->
    <div class="body__content">

        <!-- SECTION - BENEFITS -->
        <section class="benefits">

            <div class="benefits__wrapper">

                <div class="benefits-item">
                    <div class="benefits-item__img-group">
                        <img src="{{ asset('public/img/benefits/hex.png') }}" alt="hex" class="benefits-item__hex">
                        <img src="{{ asset('public/img/benefits/comfort.png') }}" alt="комфортный номер" class="benefits-item__img">
                    </div>
                    <p class="benefits-item__title">комфотный номер</p>
                </div>

                <div class="benefits-item">
                    <div class="benefits-item__img-group">
                        <img src=" {{ asset('public/img/benefits/hex.png') }}" alt="hex" class="benefits-item__hex">
                        <img src="{{ asset('public/img/benefits/cleaning.png') }}" alt="ежедневная уборка" class="benefits-item__img">
                    </div>
                    <p class="benefits-item__title">ежедневная уборка</p>
                </div>

                <div class="benefits-item">
                    <div class="benefits-item__img-group">
                        <img src=" {{ asset('public/img/benefits/hex.png') }}" alt="hex" class="benefits-item__hex">
                        <img src="{{ asset('public/img/benefits/clients.png') }}" alt="дружелюбные соседи" class="benefits-item__img">
                    </div>
                    <p class="benefits-item__title">дружелюбные соседи</p>
                </div>

                <div class="benefits-item">
                    <div class="benefits-item__img-group">
                        <img src=" {{ asset('public/img/benefits/hex.png') }}" alt="hex" class="benefits-item__hex">
                        <img src="{{ asset('public/img/benefits/safe.png') }}" alt="персональный сейф" class="benefits-item__img">
                    </div>
                    <p class="benefits-item__title">персональный сейф</p>
                </div>

            </div>

        </section>

        <!-- SECTION - PROJECTS -->
        <section class="projects">

            <div class="section__wrapper">

                <h2 class="h2 h2_white h2_decor">наши проекты</h2>

                <div class="slider projects__slider">

                    <div class="projects-item">
                        <div class="projects-item__img-overlay">
                            <img src="{{ asset('public/img/projects/moscow.jpg') }}" class="projects-item__img" alt="Москва">
                        </div>
                        <p class="projects-item__title">Москва</p>
                    </div>

                    <div class="projects-item">
                        <div class="projects-item__img-overlay">
                            <img src="{{ asset('public/img/projects/spb.jpg') }}" class="projects-item__img" alt="Санкт-Петербург">
                        </div>
                        <p class="projects-item__title">Санкт-Петербург</p>
                    </div>

                    <div class="projects-item">
                        <div class="projects-item__img-overlay">
                            <img src="{{ asset('public/img/projects/krasnodar.jpg') }}" class="projects-item__img" alt="Краснодар">
                        </div>
                        <p class="projects-item__title">Краснодар</p>
                    </div>

                    <div class="projects-item">
                        <div class="projects-item__img-overlay">
                            <img src="{{ asset('public/img/projects/rostov.jpg') }}" class="projects-item__img" alt="Ростов-На-Дону">
                        </div>
                        <p class="projects-item__title">Ростов-На-Дону</p>
                    </div>

                </div>

            </div>

        </section>

        <!-- SECTION - BOOKING -->
        <section class="booking" id="booking">

            <div class="booking__wrapper">

                <h2 class="h2 booking__header">Куда собираетесь поехать?</h2>

                <div class="booking__form">

                    <div class="booking__form-item">
                        <div class="select">
                            <select name="country" class="booking__select js-countries-select">
                                <option selected="selected">Выберите страну</option>
                                @foreach($hotels as $hotel)
                                    <option>{{ $hotel->country }}</option>
                                @endforeach
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item">
                        <div class="select">
                            <select name="country" class="booking__select js-cities-select">
                                <option selected="selected" disabled>Выберите город</option>
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item">
                        <div class="select">
                            <select name="country" class="booking__select js-hotels-select">
                                <option value="default" selected="selected">Выберите отель</option>
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item booking__form-button">
                        <a href="#" class="btn btn_md btn_solid btn_black-text js-hotels-select-submit">Бронировать</a>
                    </div>

                </div>

            </div>

        </section>

        <div id="map" class="map"></div>

        <!-- SECTION - DIRECTIONSS -->
        <section class="directions">

            <div class="section__wrapper">

                <h2 class="h2 h2_black h2_decor">популярные направления</h2>

                <div class="slider directions__slider">

                    <div class="directions-item">
                        <div class="directions-item__img-overlay">
                            <img src="{{ asset('public/img/directions/milan.jpg') }}" alt="" class="directions-item__img">
                        </div>
                        <div class="directions-item__content">
                            <p class="directions-item__title">Милан</p>
                            <p class="directions-item__text">- 8 миниотелей -</p>
                        </div>
                    </div>

                    <div class="directions-item">
                        <div class="directions-item__img-overlay">
                            <img src="{{ asset('public/img/directions/milan.jpg') }}" alt="" class="directions-item__img">
                        </div>
                        <div class="directions-item__content">
                            <p class="directions-item__title">Милан</p>
                            <p class="directions-item__text">- 8 миниотелей -</p>
                        </div>
                    </div>

                    <div class="directions-item">
                        <div class="directions-item__img-overlay">
                            <img src="{{ asset('public/img/directions/milan.jpg') }}" alt="" class="directions-item__img">
                        </div>
                        <div class="directions-item__content">
                            <p class="directions-item__title">Милан</p>
                            <p class="directions-item__text">- 8 миниотелей -</p>
                        </div>
                    </div>

                    <div class="directions-item">
                        <div class="directions-item__img-overlay">
                            <img src="{{ asset('public/img/directions/milan.jpg') }}" alt="" class="directions-item__img">
                        </div>
                        <div class="directions-item__content">
                            <p class="directions-item__title">Милан</p>
                            <p class="directions-item__text">- 8 миниотелей -</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- CTA-FRANCH - SECTION -->
        <section class="cta-franch">

            <div class="cta-franch__wrapper">

                <img src="{{ asset('public/img/cta-franch/lines.png') }}" alt="линии" class="cta-franch__lines">
                <p class="cta-franch__text">Работайте с HiLoft и зарабатывайте от <span class="cta-franch__figure">2<span class="figure__delimeter">000</span>000</span> в год</p>
                <a href="#" class="btn btn_transp btn_sm cta-franch__btn">франшиза</a>

            </div>

        </section>

        <!-- BLOG - SECTION -->
        <section class="blog">

            <div class="section__wrapper">

                <h2 class="h2 h2_black h2_decor">Блог Hosteling international</h2>

                <div class="blog__items">

                    <div class="blog-item blog-item_sm">
                        <img src="{{ asset('public/img/blog/pic-1.jpg') }}" alt="" class="blog-item__img">
                        <div class="blog-item__overlay">
                            <p class="blog-item__text">
                                Get lost in London's iconic cityscape
                            </p>
                            <a href="#" class="blog-item__link-more">more ></a>
                        </div>
                    </div>

                    <div class="blog-item blog-item_lg">
                        <img src="{{ asset('public/img/blog/pic-3.jpg') }}" alt="" class="blog-item__img">
                        <div class="blog-item__overlay">
                            <p class="blog-item__text">
                                From cute eco elfin huts in Bolivia to hydro-powered hostels in Canada, you can save the world one stay at a time.
                            </p>
                            <a href="#" class="blog-item__link-more">more ></a>
                        </div>
                    </div>

                    <div class="blog-item blog-item_md">
                        <img src="{{ asset('public/img/blog/pic-4.jpg') }}" alt="" class="blog-item__img">
                        <div class="blog-item__overlay">
                            <p class="blog-item__text">
                                Get lost in London's iconic cityscape
                            </p>
                            <a href="#" class="blog-item__link-more">more ></a>
                        </div>
                    </div>

                    <div class="blog-item blog-item_md">
                        <img src="{{ asset('public/img/blog/pic-2.jpg') }}" alt="" class="blog-item__img">
                        <div class="blog-item__overlay">
                            <p class="blog-item__text">
                                Get lost in London's iconic cityscape
                            </p>
                            <a href="#" class="blog-item__link-more">more ></a>
                        </div>
                    </div>

                    <div class="blog-item blog-item_sm">
                        <img src="{{ asset('public/img/blog/pic-5.jpg') }}" alt="" class="blog-item__img">
                        <div class="blog-item__overlay">
                            <p class="blog-item__text">
                                Get lost in London's iconic cityscape
                            </p>
                            <a href="#" class="blog-item__link-more">more ></a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="partners">

                <div class="partners-item">
                    <img src="{{ asset('public/img/blog/bnovo.png') }}" alt="Bnovo" class="partners-item__img">
                </div>

                <div class="partners-item">
                    <img src="{{ asset('public/img/blog/booking.png') }}" alt="Booking.com" class="partners-item__img">
                </div>

                <div class="partners-item">
                    <img src="{{ asset('public/img/blog/hi.png') }}" alt="Hosteling International" class="partners-item__img">
                </div>

            </div>

        </section>

    </div>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script>

        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map ("map", {
                center: [56.25105135, 56.18606208],
                zoom: 4,
                controls: []
            });

            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('drag');

            Moscow = new ymaps.Placemark([55.75399400, 37.62209300], {
                    hintContent: 'Москва'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            NNovgorod = new ymaps.Placemark([56.33317275, 43.98662034], {
                    hintContent: 'Нижний Новгород'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            SPeter = new ymaps.Placemark([59.91817154, 30.30557800], {
                    hintContent: 'Санкт-Петербург'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Novosibirsk = new ymaps.Placemark([55.00068342, 82.95627700], {
                    hintContent: 'Новосибирск'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Tula = new ymaps.Placemark([54.18221671, 37.61902750], {
                    hintContent: 'Тула'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Sochi = new ymaps.Placemark([43.70903108, 39.58069650], {
                    hintContent: 'Сочи'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Samara = new ymaps.Placemark([53.32206091, 50.06108050], {
                    hintContent: 'Самара'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Krasnodar = new ymaps.Placemark([45.06148367, 38.96220200], {
                    hintContent: 'Краснодар'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Eburg = new ymaps.Placemark([56.78886213, 60.60339450], {
                    hintContent: 'Екатеринбург'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Kazan = new ymaps.Placemark([55.77025877, 49.10271300], {
                    hintContent: 'Казань'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Rostov = new ymaps.Placemark([47.25213065, 39.69431600], {
                    hintContent: 'Ростов-на-Дону'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Yaroslavl = new ymaps.Placemark([57.65072123, 39.86692250], {
                    hintContent: 'Ярославль'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            Kaliningrad = new ymaps.Placemark([54.70453943, 20.47379150], {
                    hintContent: 'Калининград'},
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '{{ asset('public/img/map_point.png') }}',
                    // Размеры метки.
                    iconImageSize: [56, 72],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-28, -72]
                }
            );

            myMap.geoObjects
                .add(Moscow)
                .add(NNovgorod)
                .add(Novosibirsk)
                .add(SPeter)
                .add(Tula)
                .add(Sochi)
                .add(Samara)
                .add(Krasnodar)
                .add(Eburg)
                .add(Kazan)
                .add(Rostov)
                .add(Yaroslavl)
                .add(Kaliningrad)
        }
    </script>

@endsection