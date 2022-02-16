@foreach(config('mock.footer') as $footer)
    <div class="footer">
        @foreach($footer['text'] as $text)
            <div class="footer__text">{{$text}}
            </div>
        @endforeach
    </div>
@endforeach
