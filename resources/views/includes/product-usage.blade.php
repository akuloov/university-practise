<div class="product-usage">
    @foreach(config('mock.product-usage') as $productUsage)
    <div class="action">
        <div class="action__text">{{$productUsage['action']}}</div>
        <a href="" class="action__description">{{$productUsage['actionText']}}</a>
    </div>
    <div class="product-usage__price">
        <div class="product-usage__new-price">{{$productUsage['newPrice']}}</div>
        <div class="product-usage__old-price">{{$productUsage['oldPrice']}}</div>
    </div>
    @endforeach
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
