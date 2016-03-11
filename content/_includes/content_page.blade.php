@extends('_includes.base')

@section('header::image', 'candle-bokeh.jpg')
@section('header::title', $siteName)
@section('header::tagline', $siteDescription)

@section('body')

    @include('_includes.intro_header')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>
@stop