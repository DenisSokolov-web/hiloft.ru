<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>HiLoft</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="{{ asset('public/img/pages-main/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('public/img/pages-main/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/img/pages-main/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/img/pages-main/favicon/apple-touch-icon-114x114.png') }}">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>

    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46893522 = new Ya.Metrika({ id:46893522, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46893522" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}" type="image/x-icon">

    <style>body {
            opacity    : 0;
            overflow-x : hidden;
        }

        html {
            background-color : #fff;
        }</style>

</head>

<body>

<section id="start" class="title-screen">

    <header class="top-line header__container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-md-push-3 md-visible">
                    <div class="top-line__logo">
                        <span>HOSTELLING</span>
                        <img src="{{ asset('public/img/pages-main/favicon.png') }}" alt="logo">
                        <span>INTERNATIONAL</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-md-pull-5 header_mobile">
                    <div class="top-line__phone">
                        <img src="{{ asset('public/img/pages-main/phone-call.png') }}" alt="phone-call">
                        <span><a href="tel:+74955323020">8 (495) 532 - 30 -  20</a></span>
                    </div>

                    <div class="hamburger md-hidden hamburger--squeeze js-menu__button_toggle">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-2 md-visible">
                    <div class="top-line__lang">
                        <div class="top-line__select">
                            <select>
                                <option>En</option>
                                <option>Ru</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2 md-visible">
                    <div class="top-line__enter header__link">
                        <a href="{{ route('login') }}">
                            <span>Войти</span>
                            <img src="{{ asset('public/img/pages-main/login.png') }}" alt="login">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu__container_mobile">
            <ul class="menu_mobile">
                <li class="menu__item_mobile"><a href="#start" class="menu__a_mobile js-a_anchor">Начало</a></li>
                <li class="menu__item_mobile"><a href="#booking" class="menu__a_mobile js-a_anchor">Бронирование</a></li>
                <li class="menu__item_mobile"><a href="#contacts" class="menu__a_mobile js-a_anchor">Контакты</a></li>
            </ul>
        </div>
    </header>

    <div class="one-main title-screen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="one-main__wrap">
                        <div class="one-main__title"><h1>Hi Loft</h1></div>
                        <div class="one-main__desc">сеть дизайнерских миниотелей</div>
                    </div>
                </div>
            </div>

            <div class="one-main__wrap">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
                        <a class="one-main__button button button_transparent button_wide js-a_anchor" href="#booking">ЗАБРОНИРОВАТЬ</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a class="one-main__button button button_wide button_transparent" href="http://franchising.hiloft.ru">ФРАНШИЗА</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="two">

    <div class="two-main">

        <div class="container">
            <div class="row">

                @include('site.sections.features')

            </div>

        </div>

    </div>

</section>

<section id="three">
    <div class="three-main">

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="three-main__line three-main__line_one"></div>
                    <div class="three-main__title">НАШИ ПРОЕКТЫ</div>
                    <div class="three-main__line three-main__line_two"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="three-main__owl owl-carousel owl-theme">

                        @foreach($projects as $project)
                            <div class="three-main__owl-item">
                                @if($project->link)
                                    <a href="{{ $project->link }}">
                                        <img class="img-responsive1 projects__img" src="{{ asset('public/img/projects/' . $project->img_src) }}" alt="{{ $project->city }}" title="{{ $project->city }}">
                                        <div class="three-main__owl-title">
                                            {{ $project->city }}
                                        </div>
                                    </a>
                                @else
                                    <img class="img-responsive1 projects__img" src="{{ asset('public/img/projects/' . $project->img_src) }}" alt="{{ $project->city }}" title="{{ $project->city }}">
                                    <div class="three-main__owl-title">
                                        {{ $project->city }}
                                    </div>
                                @endif
                            </div>
                        @endforeach

                </div>
            </div>

        </div>
    </div>
</section>

<section id="four">

    <div class="four-main" id="booking">

        <div class="four-main__frame">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="four-main__title">КУДА СОБИРАЕТЕСЬ ПОЕХАТЬ?</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post">

                            <div class="four-main__form-wrap">

                                <div class="four-main__select">
                                    <select class="js-countries-select">
                                        <option>Выберите страну</option>
                                        @foreach($hotels as $hotel)
                                            <option>{{ $hotel->country }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="four-main__select">
                                    <select class="js-cities-select">
                                        <option selected="selected">Выберите город</option>
                                    </select>
                                </div>

                                <div class="four-main__select">
                                    <select class="js-hotels-select">
                                        <option selected="selected">Выберите миниотель</option>
                                    </select>
                                </div>

                                <a href="" target="_blank" class="four-main__button button button_white js-hotels-select-submit" type="submit">Бронирую!</a>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section id="five">

    <div id="ymap_home" style="width:100%; height: 600px;" class="ymap ymap_world"></div>

</section>

<section id="six">

    <div class="six-main">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="six-main__line six-main__line_one"></div>
                    <div class="six-main__title">ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ</div>
                    <div class="six-main__line six-main__line_two"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="six-main__owl owl-carousel owl-theme">

                        <div class="six-main__owl-item">
                            <img class="img-responsive1" src="{{ asset('public/img/pages-main/six-slide-1.jpg') }}" alt="slide-1">
                            <div class="six-main__owl-title">
                                Барселона
                            </div>
                            <div class="six-main__owl-desc">- 16 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive1" src="{{ asset('public/img/pages-main/six-slide-1.jpg') }}" alt="slide-2">
                            <div class="six-main__owl-title">
                                Милан
                            </div>
                            <div class="six-main__owl-desc">- 8 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive1" src="{{ asset('public/img/pages-main//six-slide-2.jpg') }}" alt="slide-3">
                            <div class="six-main__owl-title">
                                Ливерпуль
                            </div>
                            <div class="six-main__owl-desc">- 10 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/six-slide-3.jpg') }}" alt="slide-1">
                            <div class="six-main__owl-title">
                                Барселона
                            </div>
                            <div class="six-main__owl-desc">- 16 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/six-slide-4.jpg') }}" alt="slide-2">
                            <div class="six-main__owl-title">
                                Милан
                            </div>
                            <div class="six-main__owl-desc">- 8 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/six-slide-5.jpg') }}" alt="slide-3">
                            <div class="six-main__owl-title">
                                Ливерпуль
                            </div>
                            <div class="six-main__owl-desc">- 10 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive1" src="{{ asset('public/img/pages-main/six-slide-6.jpg') }}" alt="slide-1">
                            <div class="six-main__owl-title">
                                Прага
                            </div>
                            <div class="six-main__owl-desc">- 5 миниотелей -</div>
                        </div>
                        <div class="six-main__owl-item">
                            <img class="img-responsive1" src="{{ asset('public/img/pages-main/six-slide-7.jpg') }}" alt="slide-1">
                            <div class="six-main__owl-title">
                                Берлин
                            </div>
                            <div class="six-main__owl-desc">- 8 миниотелей -</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

<section id="seven">

    <div class="seven-main">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seven-main__img"><img class="img-responsive" src="{{ asset('public/img/pages-main/seven-1.png') }}" alt="seven-1"></div>
                    <div class="seven-main__title">Работай вместе с HiLoft и зарабатывай <br>
                        от <span class="seven-main__title-span">2 000 000</span> в год.
                    </div>
                    <a href="http://franchising.hiloft.ru" class="seven-main__button button button_wide button_transparent">УЗНАТЬ О ФРАНШИЗЕ</a>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="eight">

    <div class="eight-main">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eight-main__line eight-main__line_one"></div>
                    <div class="eight-main__title">БЛОГ HOSTELLING INTERNATIONAL</div>
                    <div class="eight-main__line eight-main__line_two"></div>
                </div>
            </div>

            <div class="row">
                <div class="plr-5 col-md-4">

                    <div class="eight-main__item blog__item">
                        <div class="eight-main__item-img">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/eight-1.jpg') }}" alt="eight-1">
                        </div>
                        <div class="eight-main__item-wrap blog__header-container">
                            <div class="eight-main__item-wrap-title">
                                Building Resilience in Our Organisation
                            </div>
                            <div class="eight-main__item-wrap-desc">
                                Constantly improving and evolving is at the core of Hostelling International. That is why for our 10th and final monthly topic during the 2017 Year of Sustainable Tourism for Development, we are focusing on:
                            </div>
                            <div class="eight-main__item-wrap-link">
                                <a href="#">MORE ></a>
                            </div>
                        </div>
                    </div>

                    <div class="eight-main__item blog__item">
                        <div class="eight-main__item-img">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/eight-2.jpg') }}" alt="eight-2">
                        </div>
                        <div class="eight-main__item-wrap blog__header-container">
                            <div class="eight-main__item-wrap-title">
                                Protecting Destinations: Culture & Biodiversity
                            </div>
                            <div class="eight-main__item-wrap-desc">
                                Why do we travel? As well as meeting new people and getting out of our personal comfort zones, culture and biodiversity are two of the main reasons travellers choose to visit certain locations
                            </div>
                            <div class="eight-main__item-wrap-link">
                                <a href="#">MORE ></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="plr-5 col-md-4">

                    <div class="eight-main__item blog__item">
                        <div class="eight-main__item-img">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/eight-3.jpg') }}" alt="eight-3">
                        </div>
                        <div class="eight-main__item-wrap blog__header-container">
                            <div class="eight-main__item-wrap-title">
                                Stay environmental with our eco hostels
                            </div>
                            <div class="eight-main__item-wrap-desc">
                                From cute eco elfin huts in Bolivia to hydro-powered hostels in Canada, you can save the world one stay
                                at a time.
                            </div>
                            <div class="eight-main__item-wrap-link">
                                <a href="#">MORE ></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plr-5 col-md-4">

                    <div class="eight-main__item blog__item">
                        <div class="eight-main__item-img">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/eight-4.jpg') }}" alt="eight-4">
                        </div>
                        <div class="eight-main__item-wrap blog__header-container">
                            <div class="eight-main__item-wrap-title">
                                Great American Total Solar Eclipse
                            </div>
                            <div class="eight-main__item-wrap-desc">
                                On 21 August, celestial enthusiasts and casual stargazers alike across parts of the U.S. will be treated to a total solar eclipse
                            </div>
                            <div class="eight-main__item-wrap-link">
                                <a href="#">MORE ></a>
                            </div>
                        </div>
                    </div>

                    <div class="eight-main__item blog__item">
                        <div class="eight-main__item-img">
                            <img class="img-responsive" src="{{ asset('public/img/pages-main/eight-5.jpg') }}" alt="eight-5">
                        </div>
                        <div class="eight-main__item-wrap blog__header-container">
                            <div class="eight-main__item-wrap-title">
                                Our People – Caring for our staff and volunteers
                            </div>
                            <div class="eight-main__item-wrap-desc">
                                Here comes another month in our journey of Sustainable Tourism through Hostelling. In May we looked at Mobility – Inclusive travel & stay, make sure you check out the link to see how HI Hostels around the world are tackling the topic.
                            </div>
                            <div class="eight-main__item-wrap-link">
                                <a href="#">MORE ></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    @include('site.sections.our_partners')

</section>

<section id="footer">

    <div class="nine-main">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="nine-main__title">О КОМПАНИИ</div>
                    <div class="nine-main__line"></div>
                    <div class="nine-main__desc">Сеть хостелов Hi Loft – проект, отвечающий высоким стандартам международной
                        ассоциации Hosteling International.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nine-main__wrap">

                        <div class="nine-main__logo">
                            <a href="#"><img src="{{ asset('public/img/pages-main/nine-logo.png') }}" alt="nine-logo"></a>
                        </div>
                        <div class="nine-main__wrap-soc">

                            <div class="nine-main__soc">
                                <a href="https://www.facebook.com/Hi_loft_hostels-543834725962099/">
                                    <svg  x="0px" y="0px" width="30px" height="34px" viewBox="0 0 430.113 430.114" xml:space="preserve" class="social__icon">
                                        <g>
                                            <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805   c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354   c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="nine-main__soc">
                                <a href="https://www.instagram.com/p/BcZbJeVBcMC/">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="34px" viewBox="0 0 510 510" class="social__icon" xml:space="preserve">
                                        <g id="post-instagram">
                                            <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z     M255,153c56.1,0,102,45.9,102,102c0,56.1-45.9,102-102,102c-56.1,0-102-45.9-102-102C153,198.9,198.9,153,255,153z M63.75,459    C56.1,459,51,453.9,51,446.25V229.5h53.55C102,237.15,102,247.35,102,255c0,84.15,68.85,153,153,153c84.15,0,153-68.85,153-153    c0-7.65,0-17.85-2.55-25.5H459v216.75c0,7.65-5.1,12.75-12.75,12.75H63.75z M459,114.75c0,7.65-5.1,12.75-12.75,12.75h-51    c-7.65,0-12.75-5.1-12.75-12.75v-51c0-7.65,5.1-12.75,12.75-12.75h51C453.9,51,459,56.1,459,63.75V114.75z" />
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="nine-main__soc">
                                <a href="https://vk.com/clubhiloft">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="34px" viewBox="0 0 548.358 548.358" class="social__icon" xml:space="preserve">
										<g>
                                            <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571   l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13   c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939   l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568   c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859   c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238   c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849   c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995   c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706   c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125   c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137   c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71   c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851   c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837   c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418   c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431   c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558   c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267   c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427   c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711   C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659   c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981   c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416   c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834   c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851   c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418   c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429   c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274   l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14   c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712   C546.782,404.25,546.115,401.725,545.451,400.298z"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-4" id="contacts">
                    <div class="nine-main__title">КОНТАКТЫ1</div>
                    <div class="nine-main__line"></div>
                    <div class="nine-main__desc">
                        <ul>
                            <li>г. Москва, ул. Арбат, д. 12, стр. 1
                            </li>
                            <li>
                                <a href="tel:+74955323020">8-495-532-30-20</a><br>
                            </li>

                            <li>

                                <a href="mailto:info@hiloft.ru">info@hiloft.ru</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="nine-main__design"></div>
                </div>
            </div>

        </div>
    </div>

</section>

<link rel="stylesheet" href="{{ env('DIR_CSS') . 'main.css' }}">
<link rel="stylesheet" type="text/css" href="{{ env('DIR_LIBS') . 'slick-slider/slick.css' }}"/>

<script src="{{ env('DIR_LIBS') . 'jquery/jquery.min.js' }}"></script>

<script src="{{ env('DIR_LIBS') . 'jquery.maskedinput.min.js' }}"></script>
<script type="text/javascript" src="{{ env('DIR_LIBS') . 'slick-slider/slick.js' }}"></script>
<script type="text/javascript" src="{{ env('DIR_LIBS') . 'owl.carousel/dist/owl.carousel.min.js' }}"></script>

<link rel="stylesheet" type="text/css" href="{{ env('DIR_LIBS') . 'hamburgers/hamburgers.css' }}"/>

<script src="{{ env('DIR_JS') . 'pages-main/common.js' }}"></script>
<script src="{{ env('DIR_JS') . 'common.js' }}"></script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
</script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
        myMap = new ymaps.Map ("ymap_home", {
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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
                iconImageHref: 'public/img/ymap/map_point.png',
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

</body>
</html>