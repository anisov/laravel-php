<!DOCTYPE html>
<html lang="ru">
<head>
    <title>main - ГеймсМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>;
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
<div class="main-wrapper">
    <header class="main-header">
        <div class="logotype-container"><a href="#" class="logotype-link"><img src="/img/logo.png" alt="Логотип"></a></div>
        @include('includes.navigation')
        <div class="header-contact">
            <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
        </div>
        <div class="header-container">
            <div class="payment-container">
                <div class="payment-basket__status">
                    <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a></div>
                    <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">{{$countOrders}}</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
                </div>
            </div>
            <div class="authorization-block">
                @if (Auth::user())
                    <a href="{{route('profile')}}" class="authorization-block__link">Личный кабинет</a>
                    <a href="{{ route('logout') }}" class="authorization-block__link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{route('register')}}" class="authorization-block__link">Регистрация</a>
                    <a href="{{route('login')}}" class="authorization-block__link">Войти</a>
                @endif
            </div>
        </div>
    </header>
    <div class="middle">
        <div class="sidebar">
            @include('includes.listCategories')
            @include('includes.lastNews')
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">
                            @yield('title')
                        </div>
                    </div>
                    <div class="content-head__search-block">
                        <div class="search-container">
                            <form class="search-container__form">
                                <input type="text" class="search-container__form__input">
                                <button class="search-container__form__btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
            @yield('content-bottom')
        </div>
    </div>
        <footer class="footer">
            <div class="footer__footer-content">
                @include('includes.randomProduct')
                <div class="footer__footer-content__main-content">
                    <p>
                        Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                        онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                        У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                        и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                        коды продления и многое друго. Также здесь всегда можно узнать последние новости
                        из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                        актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                        что немаловажно, выгодно!
                    </p>
                </div>
            </div>
            <div class="footer__social-block">
                <ul class="social-block__list bcg-social">
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="./js/form.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>