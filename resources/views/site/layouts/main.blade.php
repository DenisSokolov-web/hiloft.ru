<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('public/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('public/libs/hamburgers/hamburgers.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/theme-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/libs/slick-slider/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/libs/fontawesome/css/fontawesome-all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">

    <title>Document</title>
</head>
<body>

<div class="body__layout-grid">

    @include('site.layouts.header')

    @yield('content')

    @include('site.layouts.footer')

</div>

<script src="{{ asset('public/libs/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('public/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/libs/slick-slider/slick.min.js') }}"></script>
<script src="{{ asset(('public/libs/viewport-checker/jquery.viewportchecker.min.js')) }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>
<script src="{{ asset('public/js/pages-main/common.js') }}"></script>

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

</body>
</html>