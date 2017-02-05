<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$siteDescription}}">

    <title>@yield('pageTitle')</title>

    {{--<!-- Bootstrap Core CSS -->--}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{--<!-- Custom CSS -->--}}
    {{--<link href="@url('css/clean-blog.min.css')" rel="stylesheet">--}}
    <link href="@url('css/clean-blog.css')" rel="stylesheet">
    {{--<!-- Custom Fonts -->--}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    {{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MF4DCD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF4DCD');</script>
<!-- End Google Tag Manager -->
{{--<!-- Navigation -->--}}
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="@url('/')">{{$siteName}}</a>
        </div>

        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="@url('/')">Home</a>
                </li>
                <li>
                    <a href="@url('about')">About Me</a>
                </li>
                <li>
                    <a href="@url('blog')">Blog</a>
                </li>
                <li>
                    <a href="@url('laravel')">Laravel</a>
                </li>
                <li>
                    <a href="@url('links')">Links</a>
                </li>
            </ul>
        </div>
        {{--<!-- /.navbar-collapse -->--}}
    </div>
    {{--<!-- /.container -->--}}
</nav>

@yield('body')

<hr>

{{--<!-- Footer -->--}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="{{$twitter}}" class="link-twitter" title="Twitter">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$linkedIn}}" class="link-linkedin" title="LinkedIn">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$instagram}}" class="link-instagram" title="Instragram">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$tumblr}}" class="link-tumblr" title="Tumblr">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$github}}" class="link-github" title="Github">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$googleMaps}}" class="link-googlemaps" title="Google Local Guides">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; {{$siteAuthor}} 2016</p>
            </div>
        </div>
    </div>
</footer>
{{--<!-- jQuery -->--}}
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
{{--<!-- Bootstrap Core JavaScript -->--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--<!-- Custom Theme JavaScript -->--}}
<script src="@url('/js/clean-blog.min.js')"></script>
{{-- Google Code Prettify --}}
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
@yield('scripts')
</body>
</html>
