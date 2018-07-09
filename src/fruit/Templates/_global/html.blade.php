{{-- Part of fruit project. --}}
    <!DOCTYPE html>
<html lang="{{ $app->get('language.locale') ? : $app->get('language.default', 'en-GB') }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ $uri->path }}/asset/images/favicon.ico" />
    <meta name="generator" content="Windwalker Framework" />
    @yield('meta')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $uri->path; ?>/asset/css/main.css" />
    {!! $asset->renderStyles(true) !!}
    @yield('style')
    @stack('style')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
    {!! $asset->renderScripts(true) !!}
    @yield('script')
    @stack('script')
</head>
<body>
@section('navbar')
    <div class="navbar navbar-default navbar-fixed-top fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="@route('home')">
                <img src="{{ $asset->path('images/nav_image.png') }}" alt="Fruit" />
            </a>
            <button type="button" class="navbar-toggle navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @section('nav')
                        <li class="nav-item"><a class="nav-link" href="@route('home')">Home</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
@show

@section('message')
    @messages()
@show

@yield('content', 'Content')

@section('copyright')
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <hr />

                    <footer>
                        &copy; Windwalker {{ $datetime->format('Y') }}
                    </footer>
                </div>
            </div>
        </div>
    </div>
@show

{!! $asset->getTemplate()->renderTemplates() !!}
</body>
</html>
