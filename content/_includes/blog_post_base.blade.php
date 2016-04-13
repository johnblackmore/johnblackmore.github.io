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
                    <span class="meta">Posted on @yield('post::date') - <span class="eta"></span> read</span>
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

                <div id="disqus_thread"></div>
                <script>
                    /**
                     * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                     */
                    /*
                     var disqus_config = function () {
                     this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };
                     */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');

                        s.src = '//johnblackmore.disqus.com/embed.js';

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </div>
    </div>
</article>
@stop

@section('scripts')
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="@url('/js/readingTime.js')"></script>
    <script type="application/javascript">
        $(function () {
            $('article').readingTime();
        });
    </script>
@stop