@extends('_includes.base')

@section('header::image', 'candle-bokeh.jpg')

@section('head')
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@@johnblackmore">
    <meta name="twitter:creator" content="@@johnblackmore">
    <meta name="twitter:title" content="@yield('post::title')">
    <meta name="twitter:description" content="@yield('post::brief')">
    <meta name="twitter:image" content="http://johnblackmore.com/img/headers/@yield('header::image')">
    <meta property="og:url" content="{{ $currentUrlPath }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('post::title')"/>
    <meta property="og:description" content="@yield('post::brief')"/>
    <meta property="og:image" content="http://johnblackmore.com/img/headers/@yield('header::image')"/>
@stop

@section('body')
    {{--<!-- Page Header -->--}}
    <header class="intro-header" style="background-image: url('/img/headers/@yield('header::image')')">
        <div class="image-mask">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading">
                            <h1>@yield('post::title')</h1>
                            <h2 class="subheading">@yield('post::brief')</h2>
                            <span class="meta">Posted on @yield('post::published') - <span class="eta"></span> read</span>
                        </div>
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
                    @include('_partials.bio')

                    @yield('post_body')

                    @include('_partials.bio')
                </div>
            </div>
        </div>
    </article>
@stop

@section('scripts')
    <script src="@url('/js/readingTime.js')"></script>
    <script type="application/javascript">
        $(function () {
            $('article').readingTime();
        });
    </script>
@stop