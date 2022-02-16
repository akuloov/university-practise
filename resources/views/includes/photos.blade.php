@foreach(config('mock.photos') as $photos)
    <div class="photos">
        <div class="photos__collection">
            <svg class="photos__prev">
                <use href="assets/images/icons.svg#icon-vector"></use>
            </svg>
            @foreach($photos['smallPhoto'] as $smallPhoto)
                <picture class="photos__img">
                    <img data-src="{{$smallPhoto}}" alt="" class="lozad">
                </picture>
            @endforeach
            <svg class="photos__next">
                <use href="assets/images/icons.svg#icon-vector"></use>
            </svg>
        </div>
        <picture class="photos__main-img">
            <img data-src="{{$photos['mainPhoto']}}" alt="" class="lozad">
        </picture>
    </div>
@endforeach
