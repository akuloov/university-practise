@foreach(config('mock.condition') as $condition)
    <div class="condition @if(Arr::hasAny($condition, 'class')){{$condition['class']}}@endif">
        <div class="condition__top-block">
            <div class="condition__left-block">
                <svg class="condition__img">
                    <use href="{{$condition['img']}}"></use>
                </svg>
                <div class="condition__text">{{$condition['title']}}</div>
            </div>
            <svg class="condition__vector">
                <use href="assets/images/icons.svg#icon-vector"></use>
            </svg>
        </div>
        <div class="condition__content">{{$condition['text']}}
        </div>
    </div>
@endforeach
