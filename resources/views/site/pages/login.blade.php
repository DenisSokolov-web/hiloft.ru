<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('public/libs/bootstrap-grid/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}">

    <title>HiLoft - авторизация</title>
</head>
<body>

<div class="joombotron_login">

    <div class="container-fluid section-container">
        <div class="row section-container__item">

            <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">

                <div class="container form-login__container">

                    <div class="login__logo">
                        <img src="{{ asset('public/img/logo.png') }}" alt="логотип" title="HiLoft логотип">
                    </div>

                    <form action="" class="form-login" accept-charset="{{ route('login') }}" method="post">

                        <div class="login-form__role-select">
                            <span class="login-form__role-name login-form__role-name_left login-form__role-name_active">Гость</span>
                            <span class="login-form__role-name">Отельер</span>
                        </div>

                        <div class="form-login__input-group">
                            <label for="email" class="form-login__label">email*</label>
                            <input type="text" name="email" id="email" class="form-login__item form-login__input">
                        </div>

                        <div class="form-login__input-group">
                            <label for="password" class="form-login__label">пароль*</label>
                            <input type="password" name="password" id="password" class="form-login__item form-login__input">
                        </div>

                        {{ csrf_field() }}

                        <div class="form-login__input-group form-login__input-group_submit">
                            <button type="submit" class="form-login__item form-login__submit">ВОЙТИ</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

<!-- SCRIPTS -->
<script src="{{ asset('public/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/form-login.js') }}"></script>

</body>
</html>