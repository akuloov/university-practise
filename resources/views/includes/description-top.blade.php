<div class="description-top">
    <div class="description-top__left">
        @foreach(config('mock.availability') as $availability)
            <div class="description-top__description-availability description-availability">
                <svg class="description-availability__img">
                    <use href="{{$availability['img']}}"></use>
                </svg>
                <div class="description-availability__text">{{$availability['text']}}</div>
            </div>
        @endforeach
        <div class="description__rating">
            @include('includes.rating')
        </div>
    </div>
    @foreach(config('mock.vendor-code') as $vendorCode)
        <div class="vendor-code">{{$vendorCode['text']}} <span
                class="vendor-code--dark">{{$vendorCode['int']}}</span></div>
    @endforeach
</div>
