@foreach(config('mock.characteristic') as $characteristic)
    <div class="characteristic">
        <div class="characteristic__title">{{$characteristic['title']}} <a href=""
                                                                           class="characteristic__link">{{$characteristic['titleGreen']}}</a>
        </div>
        <div class="characteristic__positions">
            @foreach(config('mock.position') as $position)
                <div class="characteristic__position">
                    <div class="characteristic__type">{{$position['type']}}</div>
                    <div class="characteristic__line"></div>
                    <div class="characteristic__product">{{$position['product']}}</div>
                </div>
            @endforeach
        </div>
        @foreach($characteristic['show-more'] as $showMore)
        <a href="" class="characteristic__all">
            <span class="characteristic__text-all">{{$showMore}}</span>
            <svg class="characteristic__vector">
                <use href="assets/images/icons.svg#icon-vector"></use>
            </svg>
        </a>
        @endforeach
    </div>
@endforeach
