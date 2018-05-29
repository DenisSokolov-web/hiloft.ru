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

            <div class="projects__wrapper">

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
                            <select name="country" class="booking__select">
                                <option value="default" selected="selected">Выберите страну</option>
                                <option value="russia">Россия</option>
                                <option value="kazahstan">Казахстан</option>
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item">
                        <div class="select">
                            <select name="country" class="booking__select">
                                <option value="default" selected="selected" disabled>Выберите город</option>
                                <option value="russia">Санкт-Петербург</option>
                                <option value="kazahstan">Москва</option>
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item">
                        <div class="select">
                            <select name="country" class="booking__select">
                                <option value="default" selected="selected">Выберите отель</option>
                                <option value="russia">Шпалерная, 35</option>
                                <option value="kazahstan">Ленина, 51</option>
                            </select>
                            <div class="select__caret">
                                <span class="icon-caret"></span>
                            </div>
                        </div>
                    </div>

                    <div class="booking__form-item booking__form-button">
                        <a href="#" class="btn btn_md btn_solid btn_black-text">Бронировать</a>
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

@endsection