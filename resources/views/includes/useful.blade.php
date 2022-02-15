<div class="useful">
    <a href="#" class="useful__item">
        <svg class="useful__img">
            <use href="assets/images/icons.svg#icon-compare"></use>
        </svg>
    </a>
    <a href="#" class="useful__item">
        <svg class="useful__img">
            <use href="assets/images/icons.svg#icon-like"></use>
        </svg>
    </a>
    @foreach(config('mock.itemCounter') as $itemCounter)
        <a href="#" class="useful__item--basket useful__item">
            <svg class="useful__img--basket">
                <use href="assets/images/icons.svg#icon-basket"></use>
            </svg>
            <div class="useful__counter">{{$itemCounter['counter']}}</div>
        </a>
    @endforeach
    @include('includes.popup-basket')
</div>
