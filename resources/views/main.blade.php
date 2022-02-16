<!doctype html>
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>
        @foreach(config('mock.nameSite') as $nameSite)
            {{$nameSite['nameSite']}}
        @endforeach
    </title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico">
</head>

<body>
<div class="layout">
    @include('includes.header')
    <div class="main-wrapper">
        <div class="main-wrapper2">
            <div class="container">
                <div class="main">
                    <div class="main__left">
                        <div class="main__page">
                            @include('includes.page')
                        </div>
                        @include('includes.photos')
                        <div class="main__characteristic">
                            @include('includes.characteristic')
                        </div>
                    </div>
                    <div class="main__description description">
                        <div class="main__description-top">
                            @include('includes.description-top')
                        </div>
                        <div class="main__product-usage">
                            @include('includes.product-usage')
                        </div>
                        @include('includes.condition')
                        <div class="main__reviews">
                            @include('includes.reviews')
                        </div>
                        <a href="" class="main__buttonShowMore buttonShowMore">Показать еще</a>
                    </div>
                </div>
                @include('includes.pre-footer')
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="container">
            @include('includes.footer')
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>

</html>

