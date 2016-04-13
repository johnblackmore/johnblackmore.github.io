<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    {{--<!-- Bootstrap Core CSS -->--}}
    <link href="@url('/css/bootstrap.min.css')" rel="stylesheet">
    {{--<!-- Custom CSS -->--}}
    <link href="@url('css/clean-blog.min.css')" rel="stylesheet">
    {{--<!-- Custom Fonts -->--}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    {{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
                {{--<li>--}}
                {{--<a href="@url('blog')">Blog</a>--}}
                {{--</li>--}}
                <li>
                    <a href="@url('about')">About Me</a>
                </li>
                <li>
                    <a href="@url('laravel')">Laravel</a>
                </li>
                <li>
                    <a href="https://github.com/johnblackmore">Github</a>
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
                        <a href="{{$twitter}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$linkedIn}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$instagram}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{$github}}">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
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
<script src="@url('/js/jquery.js')"></script>
{{--<!-- Bootstrap Core JavaScript -->--}}
<script src="@url('/js/bootstrap.min.js')"></script>
{{--<!-- Custom Theme JavaScript -->--}}
<script src="@url('/js/clean-blog.min.js')"></script>
@yield('scripts')
</body>
</html>