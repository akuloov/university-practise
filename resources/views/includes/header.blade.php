<div class="container">
    <div class="header">
        <div class="header__top">
            <div class="header__left">
                <a href="/">
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
            <div class="header__burger-menu burger-menu">
                <div class="burger-menu__left">
                    <div class="burger-menu__burger burger">
                        <span class="burger__span"></span>
                    </div>
                    <div class="burger-menu__text">каталог</div>
                </div>
                <a href="" class="burger-menu__link">Все категории</a>
                <div class="burger-menu__list">
                    @include('includes.category')
                </div>
            </div>
            <div class="header__search-products-wrapper search-products-wrapper">
                <input type="text" placeholder="Поиск, например “тест”"
                       class="header__search-products search-products">
                <svg class="search-products__icon">
                    <use href="assets/images/icons.svg#icon-search"></use>
                </svg>
            </div>
            @include('includes.useful')
        </div>
    </div>
</div>
