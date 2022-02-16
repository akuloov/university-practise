<div class="reviews">
    @foreach(config('mock.reviewsTop') as $reviewsTop)
        <div class="reviews__top">
            <div class="reviews__title">{{$reviewsTop['text']}} <span class="reviews__title--green">{{$reviewsTop['sumReviews']}}</span>
            </div>
            <a href="{{$reviewsTop['reviewsAllLink']}}" class="reviews__right-block">
                <div class="reviews__all">{{$reviewsTop['reviewsAllText']}}</div>
                <svg class="reviews__vector">
                    <use href="assets/images/icons.svg#icon-vector"></use>
                </svg>
            </a>
        </div>
    @endforeach
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
