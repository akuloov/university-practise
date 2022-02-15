@foreach(config('mock.category') as $category)
    <a href="{{$category['link']}}" class="category">
        <div class="category__left-block">
            <svg class="category__img">
                <use href="{{$category['icon']}}"></use>
            </svg>
            <div class="category__text">{{$category['text']}}</div>
        </div>
        <svg class="category__vector">
            <use href="assets/images/icons.svg#icon-vector"></use>
        </svg>
    </a>
@endforeach
