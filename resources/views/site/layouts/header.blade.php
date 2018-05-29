<!-- HEADER -->
<header class="header">
    <div class="header__content">

        <div class="header__phone">
            <span class="icon-phone icon_inline-left"></span>
            <a href="tel:8(495)532-30-20">8(495)532-30-20</a>
        </div>

        <div class="header__logo">
            <span class="header__logo-text header__logo-text_left">hosteling</span>
            <img src="{{ asset('public/img/header/logo-key.png') }}" alt="logo" class="header__logo-img">
            <span class="header__logo-text">international</span>
        </div>

        <div class="header__actions">
            Ru / Войти
        </div>

        <div class="header__hamburger">
            <button class="hamburger hamburger--spin" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>

    </div>

    <ul class="header__menu">
        @foreach($menu as $i)
            <li class="menu__item header__menu-item">
                {!! $i !!}
            </li>
        @endforeach
    </ul>

</header>