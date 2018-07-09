{{-- Part of fruit project. --}}
@extends('_global.html')

@section('page_title')
    Home
@stop

@section('content')
    <div class="jumbotron" style="padding: 0;">
        <img src="{{ $asset->path('images/home-banner.jpg') }}" alt="" style="width: 100%;">
        <a href=""></a>
    </div>
    <div class="container" style="text-align: center;">
        <h1 class="display-4">There is Fresh Fruit</h1>
    </div>
@stop
