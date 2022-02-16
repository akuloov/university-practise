@foreach(config('mock.rating') as $rating)
    <div class="rating">
        <div class="rating__stars">
            @foreach($rating['star'] as $star)
                <svg class="rating__star">
                    <use href="{{$star}}"></use>
                </svg>
            @endforeach
        </div>
        <span class="rating__int">{{$rating['int']}}</span>
    </div>
@endforeach
