<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Бронирование</title>

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

<section id="six">
    <div class="container" style="min-height: 1000px">
        <div class="row" style="padding: 20px 0">
            <div class="col-md-12">
                <div class="six-main__line six-main__line_one"></div>
                <div class="six-main__title">БРОНИРОВАНИЕ</div>
                <div class="six-main__line six-main__line_two"></div>
            </div>
        </div>

        <div class="row">
        <!-- start TL Booking form script -->
        <div id="tl-booking-form">&nbsp;</div>
        <script type="text/javascript">
            (function(w){
                var q=[
                    ['setContext', 'TL-INT-hiloft', 'ru'],
                    ['embed', 'booking-form', {container: 'tl-booking-form'}]
                ];
                var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
                if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
            })(window);
        </script>
        <!-- end TL Booking form script -->
        </div>
    </div>

</section>


<!-- STYLES -->
<link rel="stylesheet" href="{{ env('DIR_CSS') . 'main.css' }}">

</body>
</html>
