@foreach(config('mock.page') as $page)
    <div class="page"><a class="page__link" href="{{$page['link1']}}">{{$page['page1']}}</a> — <a class="page__link" href="{{$page['link2']}}">{{$page['page2']}}</a> — <a
            class="page__link" href="{{$page['link3']}}">{{$page['page3']}}</a> — <a class="page__link" href="{{$page['link4']}}">{{$page['page4']}}</a>
    </div>
@endforeach
