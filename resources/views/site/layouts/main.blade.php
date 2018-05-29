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
<script src="{{ asset('public/libs/masked-input/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset(('public/libs/viewport-checker/jquery.viewportchecker.min.js')) }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>

</body>
</html>