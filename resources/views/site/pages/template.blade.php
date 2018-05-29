<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Hi Loft - сеть дизайнерских миниотелей</title>
    <meta name="description" content="{{ $hotel->meta_description }}">
    <meta name="keywords" content="{{ $hotel->meta_keywords }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png"/>
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}" type="image/x-icon">

    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

    <!-- start TL head script -->
    <script type="text/javascript">
        (function(w){
            var q=[
                ['setContext', 'TL-INT-hiloft', 'ru']
            ];
            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
        })(window);
    </script>
    <!-- end TL head script -->


</head>

<body>

@include('site.booking_form')
@include('site.review_create_form')

<div class="joombotron">
    @if($main_photo)
        <header id="start" class="header header_bg" style="background-image:url({{ asset('public/img/photo' . '/' . $main_photo->img ) }});">
    @else
        <header id="start" class="header header_bg" style="background-image:none">
    @endif
        <div class="header__line">
            <div class="container">
                <div class="row">

                    <div class="header__columns flex">
                        <div class="header__logo"><a href="http://hiloft.ru"><img src="{{ asset('public/img/header/__logo/logo.png') }}" class="header__img" alt="logo"></a></div>

                        <div class="header__contacts">
                            <div class="header__phone-pad icon-flex flex border-mobile">
                                <div class="header__phone-icon icon"></div>
                                <div class="header__phone-text"><a href="tel:{{ str_replace(['(', ')', '-', ' '], '', $hotel->phone) }}" class="link_nodecor">{{ $hotel->phone }}</a></div>
                            </div>
                            <div class="header__mail icon-flex flex hidden-xs">
                                <div class="header__mail-icon"></div>
                                <div class="header__mail-text"><a href="mailto:{{ $hotel->email }}" class="link_nodecor">{{ $hotel->email }}</a></div>
                            </div>
                            <div class="header__location-pad icon-flex flex hidden-sm hidden-md hidden-lg">
                                <div class="header__location-icon icon"></div>
                                <div class="header__location-text">г. {{ $hotel->city }}<br/>{{ $hotel->address }}</div>
                            </div>
                        </div>

                        <div class="header__location icon-flex flex hidden-xs">
                            <div class="header__location-icon"></div>
                            <div class="header__location-text">
                                г. {{ $hotel->city }}<br/>{{ $hotel->address }}
                            </div>
                        </div>

                        <div class="header__settings hidden-sm hidden-xs">
                            <a href="/" class="header__lang after_icon link_nodecor">Ru</a>
                            <a href="{{ route('login') }}" class="header__login after_icon link_nodecor">Войти</a>
                        </div>

                        <div class="mobile-menu hidden-md hidden-lg">
                            <div id="nav-icon3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header__mobile-menu">
                <ul class="header__mobile">
                    <li><a href="#start" class="js-a_anchor header__a_mobile">Начало</a></li>
                    <li><a href="#price" class="js-a_anchor header__a_mobile">Номера и цены</a></li>
                    <li><a href="#gallery" class="js-a_anchor header__a_mobile">Фотогалерея</a></li>
                    <li><a href="#reviews" class="js-a_anchor header__a_mobile">Отзывы</a></li>
                    <li><a href="#footer" class="js-a_anchor header__a_mobile">Контакты</a></li>
                </ul>
            </div>
        </div>

        <div class="header__title">
            <div>
                <span class="header__title-h1">Hi Loft</span>
                <div class="header__subtitle">сеть дизайнерских миниотелей</div>
            </div>
            <a href="#price" class="button button_big button_active js-a_anchor link_nodecor link_no-underline" style="display: none">Забронировать номер</a>

            <style>
                #tl-search-form {
                    background: rgba(0, 0, 0, .7);
                    width: 1000px;
                    margin-top: 60px;
                }
                @media (max-width: 1000px) {
                    #tl-search-form {
                        background: rgba(0, 0, 0, .7);
                        width: 100%;
                        margin-top: 60px;
                    }
                }
                @media (max-width: 800px) and (orientation:landscape) {
                    .header__title{
                        padding-top: 50px !important;
                    }
                    .header{
                        height: 500px !important;
                    }
                }
            </style>
            <!-- start TL Search form script -->
            <div id="tl-search-form"></div>
            <script type="text/javascript">
                (function(w){
                    var q=[
                        ['setContext', 'TL-INT-hiloft', 'ru'],
                        ['embed', 'search-form', {container: 'tl-search-form'}]
                    ];
                    var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
                    if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
                })(window);
            </script>
            <!-- end TL Search form script -->
        </div>
        <nav class="menu hidden-xs">
            <ul class="menu__list">
                <li class="menu__item"><a href="#price" class="menu__link js-a_anchor">Номера и цены</a></li>
                <li class="menu__item"><a href="#gallery" class="menu__link js-a_anchor">Фотогалерея</a></li>
                <li class="menu__item"><a href="#reviews" class="menu__link js-a_anchor">Отзывы</a></li>
                <li class="menu__item"><a href="#footer" class="menu__link js-a_anchor">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <section class="features" style="background-image: url({{ asset('public/img/features/features-bg.png') }}); min-height: 720px;">
        <div class="container">
            <div class="row">

                @include('site.sections.features')

            </div>

            <div class="row">
                <section class="price" id="price">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="heading heading_border">Номера и цены</h2>
                            </div>

                            @foreach($rooms as $room)

                                <div class="col-md-4 col-sm-6">
                                    <div class="price__wrap rooms__item">
                                        <div class="price__item">
                                            <div class="price__img">
                                                <img src="{{ asset('public/img/rooms') . '/' . $room->img_url }}">
                                            </div>
                                            <div class="price__content">
                                                <div class="price__name main-text price__name">{{ $room->name }}</div>
                                                <div class="price__cena price__cena_margin price__amount">{{ $room->price }} руб</div>
                                                <div class="description">
                                                    <?php echo html_entity_decode($room->descr) ?>
                                                </div>
                                                <?php if(array_key_exists($room->id, $room_types)){ ?>
                                                    <a class="button button_small button_black-text" href="/booking?room-type=<?= $room_types[$room->id] ?>">Забронировать</a>
                                                <?php }else{ ?>
                                                <div class="button button_small pop-up-open button_black-text" pop-up="pop-up_booking_form" data-id="<?= $room->id ?>">Забронировать</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading heading_border">Фотогалерея</h2>
                </div>

                <div class="col-md-12">
                    <div class="gallery__flex flex">
                        <div class="gallery__item">
                            <div class="gallery__column"><img src="{{ asset('public/img/photo') . '/' . $hotel->slug . '_gallery_1.jpg' }}" class="img-responsive" alt="pic"></div>
                            <div class="gallery__column"><img src="{{ asset('public/img/photo') . '/' . $hotel->slug . '_gallery_2.jpg' }}" class="img-responsive" alt="pic"></div>
                        </div>
                        <div class="gallery__item full-height"><img src="{{ asset('public/img/photo') . '/' . $hotel->slug . '_gallery_3.jpg' }}" class="img-responsive" alt="pic"></div>
                        <div class="gallery__item gallery__item_diff">
                            <div class="gallery__column"><img src="{{ asset('public/img/photo') . '/' . $hotel->slug . '_gallery_4.jpg' }}" class="img-responsive" alt="pic"></div>
                            <div class="gallery__column"><img src="{{ asset('public/img/photo') . '/' . $hotel->slug . '_gallery_5.jpg' }}" class="img-responsive" alt="pic"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="reviews" id="reviews" style="background-image: url({{ asset('public/img/reviews/reviews-bg.png') }}); min-height: 720px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading heading_border">Отзывы посетителей</h2>
                </div>
                <div class="reviews__carousel owl-carousel owl-theme">

                    @foreach($feedbacks as $feedback)
                        <div class="col-xs-12">
                            <div class="reviews__item">
                                @if ($feedback->photo_src)
                                    <div class="reviews__photo feedback__photo"><img src="{{ asset('public/img/feedbacks') . '/' . $feedback->photo_src }}" class="reviews__pic"></div>
                                @else
                                    <div class="reviews__photo feedback__photo"></div>
                                @endif

                                <div class="reviews__content">
                                    <div class="main-text reviews_main-text">{{ $feedback->name }}</div>
                                    <!-- <div class="reviews__mark reviews_default-text">оценка: 5</div> -->
                                    <div class="review__text reviews_default-text feedback__text">
                                        {{ $feedback->text }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <?php if(0 > 1){ ?>
                    <div class="col-xs-12">
                        <div class="reviews__item">
                            <div class="reviews__photo"><img src="{{ asset('public/img/reviews/reviews__photo/pic-1.png') }}" class="reviews__pic" alt="pic"></div>
                            <div class="reviews__content">
                                <div class="main-text reviews_main-text">Александра Холодная</div>
                                <div class="review__text reviews_default-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="reviews__item">
                            <div class="reviews__photo"><img src="{{ asset('public/img/reviews/reviews__photo/pic-2.png') }}" class="reviews__pic" alt="pic"></div>
                            <div class="reviews__content">
                                <div class="main-text reviews_main-text">Александра Холодная</div>
                                <div class="review__text reviews_default-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="reviews__item">
                            <div class="reviews__photo"><img src="{{ asset('public/img/reviews/reviews__photo/pic-3.png') }}" class="reviews__pic" alt="pic"></div>
                            <div class="reviews__content">
                                <div class="main-text reviews_main-text">Александра Холодная</div>
                                <div class="review__text reviews_default-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="reviews__item">
                            <div class="reviews__photo"><img src="{{ asset('public/img/reviews/reviews__photo/pic-3.png') }}" class="reviews__pic" alt="pic"></div>
                            <div class="reviews__content">
                                <div class="main-text reviews_main-text">Александра Холодная</div>
                                <div class="review__text reviews_default-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="button button_small reviews_button pop-up-open button_black-text" pop-up="pop-up_review-create">Добавить отзыв</div>
            </div>
        </div>
    </section>


    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="footer__wrap flex">
                        <div class="footer__contacts">
                            <h3 class="footer__heading">Контакты</h3><div class="footer__line"></div>

                            <div class="footer__location footer_icon"><span>г. {{ $hotel->city }}<br/>ул. {{ $hotel->address }}<br/>м. Чернышевская</span></div>
                            <div class="phone-icon before_icon"><span><a href="tel:{{ str_replace(['(', ')', '-', ' '], '', $hotel->phone) }}" class="link_nodecor">{{ $hotel->phone }}</a></div>
                            <div class="footer__mail mail-icon before_icon"><span><a href="mailto:{{ $hotel->email }}" class="link_nodecor">{{ $hotel->email }}</a></span></div>

                            <div class="footer__logo">
                                <a href="http://hiloft.ru"><img src="{{ asset('public/img/header/__logo/logo.png') }}" class="header__img" alt="logo"></a>
                                <div class="footer__socials socials">
                                    <a href="{{ $hotel->link_fb }}" class="socials_icon">
                                        <svg  x="0px" y="0px" width="30px" height="34px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;" xml:space="preserve">
                                        <g>
                                            <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805   c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354   c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
                                        </g>
                                    </svg>
                                    </a>
                                    <a href="{{ $hotel->link_inst }}" class="socials_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="34px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
										<g>
                                            <g id="post-instagram">
                                                <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z     M255,153c56.1,0,102,45.9,102,102c0,56.1-45.9,102-102,102c-56.1,0-102-45.9-102-102C153,198.9,198.9,153,255,153z M63.75,459    C56.1,459,51,453.9,51,446.25V229.5h53.55C102,237.15,102,247.35,102,255c0,84.15,68.85,153,153,153c84.15,0,153-68.85,153-153    c0-7.65,0-17.85-2.55-25.5H459v216.75c0,7.65-5.1,12.75-12.75,12.75H63.75z M459,114.75c0,7.65-5.1,12.75-12.75,12.75h-51    c-7.65,0-12.75-5.1-12.75-12.75v-51c0-7.65,5.1-12.75,12.75-12.75h51C453.9,51,459,56.1,459,63.75V114.75z" />
                                            </g>
                                        </g>
										</svg>
                                    </a>
                                    <a href="{{ $hotel->link_vk }}" class="socials_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="34px" viewBox="0 0 548.358 548.358" style="enable-background:new 0 0 548.358 548.358;" xml:space="preserve">
										<g>
                                            <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571   l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13   c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939   l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568   c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859   c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238   c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849   c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995   c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706   c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125   c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137   c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71   c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851   c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837   c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418   c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431   c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558   c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267   c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427   c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711   C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659   c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981   c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416   c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834   c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851   c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418   c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429   c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274   l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14   c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712   C546.782,404.25,546.115,401.725,545.451,400.298z"/>
                                        </g>
										</svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    {{--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab39a11381288148fb3deb0562bdcd8f542d8ffbd92f964daca333112ec5ea5dc&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>--}}
                    <div id="yandex-map" style="width: 100%; height:450px;"></div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap;

    function init(){
        var hotel = ymaps.geocode("{{ $hotel->city }}, {{ $hotel->address }}");

        console.log(hotel);

        myMap = new ymaps.Map("yandex-map", {
            center: [{{ $hotel_coord[1] }}, {{ $hotel_coord[0] }}],
            //center: [59.94924308, 30.35551718],
            zoom: 16,
            controls: ['fullscreenControl']
        });

        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('drag');

        //myPlacemark = new ymaps.Placemark([59.94883406, 30.35801700], { hintContent: '{{ $hotel->address }}', balloonContent: '{{ $hotel->address }}<br><a href="#" style="font-size:20px">перейти</a>' });
        //myMap.geoObjects.add(myPlacemark);

        hotel.then(
            function (res) {
                myMap.geoObjects.add(res.geoObjects);
                console.log(res.geoObjects(0));
                // Выведем в консоль данные, полученные в результате геокодирования объекта.
                console.log(res.geoObjects.get(0).properties.get('metaDataProperty').getAll());
            },
            function (err) {
                // обработка ошибки
            }
        );
    }
</script>

<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('public/css/front-office.css?v=0.0.2') }}">
<link rel="stylesheet" href="{{ asset('public/libs/owl-carousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/libs/owl-carousel/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/libs/animate.css') }}">

<!-- SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="{{ asset('public/libs/owl.carousel/dist/owl.carousel.js') }}"></script>
<script src="{{ asset('public/js/scripts.min.js?v=0.0.1') }}"></script>
<script src="{{ asset('public/js/common.js') }}"></script>
<script src="{{ asset('public/js/jquery.maskedinput.min.js') }}"></script>

</body>
</html>
