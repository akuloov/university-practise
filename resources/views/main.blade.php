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
    @include('includes.header')
    <div class="main-wrapper">
        <div class="main-wrapper2">
            <div class="container">
                <div class="main">
                    <div class="main__left">
                        <div class="main__page">
                            @include('includes.page')
                        </div>
                        @include('includes.photos')
                        <div class="main__characteristic">
                            @include('includes.characteristic')
                        </div>
                    </div>
                    <div class="main__description description">
                        <div class="main__description-top description-top">
                            <div class="description-top__left">
                                <div class="description-top__description-availability description-availability">
                                    <svg class="description-availability__img">
                                        <use href="assets/images/icons.svg#icon-done"></use>
                                    </svg>
                                    <div class="description-availability__text">В наличии</div>
                                </div>
                                <div class="description__rating rating">
                                    <div class="rating__stars">
                                        <svg class="rating__star">
                                            <use href="assets/images/icons.svg#icon-star"></use>
                                        </svg>
                                        <svg class="rating__star">
                                            <use href="assets/images/icons.svg#icon-star"></use>
                                        </svg>
                                        <svg class="rating__star">
                                            <use href="assets/images/icons.svg#icon-star"></use>
                                        </svg>
                                        <svg class="rating__star">
                                            <use href="assets/images/icons.svg#icon-star"></use>
                                        </svg>
                                        <svg class="rating__star">
                                            <use href="assets/images/icons.svg#icon-star"></use>
                                        </svg>
                                    </div>
                                    <span class="rating__int">12</span>
                                </div>
                            </div>
                            <div class="vendor-code">Артикул: <span class="vendor-code--dark">100500</span></div>
                        </div>
                        <div class="main__product-usage product-usage">
                            <div class="action">
                                <div class="action__text">Акция</div>
                                <a href="" class="action__description">До 30 июля скидка — 20% на все тестовые
                                    товары</a>
                            </div>
                            <div class="product-usage__price">
                                <div class="product-usage__new-price">3 799 ₴</div>
                                <div class="product-usage__old-price">4 200 ₴</div>
                            </div>
                            <div class="actions">
                                <a href="" class="to-basket actions__to-basket">
                                    <div class="to-basket__text">В корзину</div>
                                    <svg class="to-basket__img">
                                        <use href="assets/images/icons.svg#icon-basket"></use>
                                    </svg>
                                </a>
                                <a href="" class="scales">
                                    <svg class="scales__img">
                                        <use href="assets/images/icons.svg#icon-compare"></use>
                                    </svg>
                                </a>
                                <a href="" class="actions__like like">
                                    <svg class="like__img">
                                        <use href="assets/images/icons.svg#icon-like"></use>
                                    </svg>
                                </a>
                                <a href="" class="buy-fast">
                                    <svg class="buy-fast__img">
                                        <use href="assets/images/icons.svg#icon-tel"></use>
                                    </svg>
                                    <div class="buy-fast__text">Купить в<br>1 клик</div>
                                </a>
                            </div>
                        </div>
                        @include('includes.condition')
                        <div class="main__reviews">
                            <div class="reviews">
                                <div class="reviews__top">
                                    <div class="reviews__title">Отзывы покупателей <span class="reviews__title--green">12</span>
                                    </div>
                                    <a href="" class="reviews__right-block">
                                        <div class="reviews__all">Все отзывы</div>
                                        <svg class="reviews__vector">
                                            <use href="assets/images/icons.svg#icon-vector"></use>
                                        </svg>
                                    </a>
                                </div>
                                @foreach(config('mock.review1') as $review)
                                    <div class="review">
                                        <div class="review__title">
                                            <div class="review__name">{{$review['name']}} <span
                                                    class="review__date">{{$review['date']}}</span>
                                            </div>
                                            <div class="review__rating">
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--yellow">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="review__text">{{$review['text']}}</div>
                                    </div>
                                @endforeach
                                @foreach(config('mock.review2') as $review)
                                    <div class="review">
                                        <div class="review__title">
                                            <div class="review__name">{{$review['name']}} <span
                                                    class="review__date">{{$review['date']}}</span>
                                            </div>
                                            <div class="review__rating">
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--orange">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--yellow">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--yellow">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                                <svg class="review__star review__star--yellow">
                                                    <use href="assets/images/icons.svg#icon-star"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="review__text">{{$review['text']}}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <a href="" class="main__buttonShowMore buttonShowMore">Показать еще</a>
                    </div>
                </div>
                <div class="pre-footer">
                    <div class="pre-footer__title">Нужна помощь в подборе товара? Мы перезваниваем !</div>
                    <div class="pre-footer__feedback feedback">
                        <input type="tel" class="feedback__tel-input">
                        <button type="submit" class="feedback__submit">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="container">
            <div class="footer">
                <div class="footer__text">2021 © Wezom Test
                </div>
                <div class="footer__text">Тестовое \\ Wezom
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>

</html>

