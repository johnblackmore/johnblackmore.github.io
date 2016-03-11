@extends('_includes.content_page')

@section('header::image', 'macbook-plant-phone.jpg')
@section('header::title', $siteName)
@section('header::tagline', $siteDescription)

@section('content')
    @markdown
    ## Welcome

    I've not got a lot to say at the moment. This is mostly a scratchpad for my own thoughts, links to articles and projects.

    ### Personal Website Links

    - [My Personal Site](http://johnblackmore.com)
    - [My Tech Blog](http://j16e.com)

    ### PHP Links

    - [The League of Extraordinary Packages](https://thephpleague.com/)
    - [PHP: The Right Way](http://www.phptherightway.com/)
    - [PHP Framework Interop Group](http://www.php-fig.org/)

    ### Creative Commons Zero (No Copyright) Media

    - [Pixabay](https://pixabay.com/) - CC0 Images and Videos
    - [Unsplash](https://unsplash.com/) - CC0 Images
    - [BossFight.co](http://bossfight.co/) - CC0 Images
    - [Pexels](https://www.pexels.com/) - CC0 Images
    - [New Old Stock](http://nos.twnsnd.co/) - Public Domain Images
    - [Public Domain Archive](http://publicdomainarchive.com/)
    @endmarkdown
@stop

{{--@section('body')--}}

    {{--@include('_includes.intro_header')--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">--}}
                {{--@markdown--}}

                {{--@endmarkdown--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@stop--}}