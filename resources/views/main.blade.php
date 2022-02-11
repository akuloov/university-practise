<!doctype html>
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico">
</head>

<body>
<div class="layout">
    <div class="container">
        <div class="header">
            <div class="header__top">
                <div class="header__left">
                    <a href="">
                        <svg class="header__logo main-logo">
                            <use href="assets/images/icons.svg#icon-wezom_logo"></use>
                        </svg>
                    </a>
                    <div class="header__nav">
                        @foreach(config('mock.nav') as $nav)
                            <nav class="nav">
                                <a href="" class="nav__link">{{$nav['text1']}}</a>
                                <div class="nav__point point"></div>
                                <a href="" class="nav__link">{{$nav['text2']}}</a>
                                <div class="nav__point point"></div>
                                <a href="" class="nav__link">{{$nav['text3']}}</a>
                            </nav>
                        @endforeach
                    </div>
                </div>
                <div class="header__right">
                    @foreach(config('mock.tel') as $tel)
                        <a href="tel:380680000000" class="header__tel tel">{{$tel['tel']}}</a>
                    @endforeach
                    <div class="header__lang">
                        @foreach(config('mock.lang') as $lang)
                            <div class="lang">
                                <div class="lang__item">{{$lang['lang1']}}</div>
                                <div class="lang__point point"></div>
                                <div class="lang__item">{{$lang['lang2']}}</div>
                            </div>
                        @endforeach
                    </div>
                    @foreach(config('mock.signIn') as $signIn)
                        <div class="sign-in">
                            <a href="" class="sign-in__text">{{$signIn['text']}}</a>
                            <svg class="sign-in__logo">
                                <use href="{{$signIn['logo']}}"></use>
                            </svg>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="header__bottom">
                <div class="burger-menu">
                    <span class="burger"></span>
                    <div class="burger-menu__text">каталог</div>
                    <a href="" class="burger-menu__link">Все категории</a>
                    <div class="burger-menu__list">

                    </div>
                </div>
                <input type="text" placeholder="Поиск, например “тест”" class="search-products">
                <div class="useful">
                    <a href="" class="useful__item">
                        <svg class="useful__img">
                            <use href="assets/images/icons.svg#icon-compare"></use>
                        </svg>
                    </a>
                    <a href="" class="useful__item">
                        <svg class="useful__img">
                            <use href="assets/images/icons.svg#icon-like"></use>
                        </svg>
                    </a>
                    <a href="" class="useful__item">
                        <svg class="useful__img">
                            <use href="assets/images/icons.svg#icon-basket"></use>
                        </svg>
                        <div class="counter">3</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>

</html>

