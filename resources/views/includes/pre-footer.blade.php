@foreach(config('mock.preFooter') as $preFooter)
    <div class="pre-footer">
        <div class="pre-footer__title">{{$preFooter['title']}}</div>
        <div class="pre-footer__feedback feedback">
            <input type="text" placeholder="{{$preFooter['placeholder']}}" class="feedback__tel-input">
            <button type="submit" class="feedback__submit">{{$preFooter['feedbackButton']}}</button>
        </div>
    </div>
@endforeach
