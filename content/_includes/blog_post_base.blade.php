@extends('_includes.base')

@section('header::image', 'candle-bokeh.jpg')

@section('body')
{{--<!-- Page Header -->--}}
<header class="intro-header" style="background-image: url('img/headers/@yield('header::image')')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>@yield('post::title')</h1>
                    {{--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>--}}
                    <span class="meta">Posted on @yield('post::date')</span>
                </div>
            </div>
        </div>
    </div>
</header>

{{--<!-- Post Content -->--}}
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @yield('post_body')
            </div>
        </div>
    </div>
</article>

    {{--<div class="wrapper m-t-30">--}}
        {{--<div class="left-side">--}}
            {{--<a href="@url('blog')">Back to blog</a>--}}

            {{--<h1>@yield('post::title')</h1>--}}

            {{--<small>@yield('post::date')</small>--}}

            {{--@yield('post_body')--}}
        {{--</div>--}}

        {{--<div class="right-side">--}}
            {{--@include('_includes.sidebar')--}}
        {{--</div>--}}
    {{--</div>--}}

@stop