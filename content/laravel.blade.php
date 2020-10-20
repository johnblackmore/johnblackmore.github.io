@extends('_includes.content_page')

@section('pageTitle', 'Laravel Resources for Web Artisans')
@section('header::image', 'macbook-air.jpg')
@section('header::title', 'Laravel Links')
@section('header::tagline', 'The PHP Framework For Web Artisans')

@section('content')
    @markdown
    ## Laravel Resources

    Over the years I've picked up links to a wide range of Laravel resources. I'm sharing them here so that I don't forget, but also
    so that others may benefit.

    ### Documentation and Learning

    * [Laravel Docs](https://laravel.com/docs)
    * [Livewire](https://laravel-livewire.com/)
    * [Laracasts](https://laracasts.com/)
    * [Laravel.io Forum](http://laravel.io/forum)
    * [Larachat Slack Channel](http://larachat.co/)

    ### Useful Packages

    * [Katana](http://themsaid.github.io/katana/) - PHP static site & blog generator (powers this site)
    * [Jigsaw](http://jigsaw.tighten.co/) - Static site framework
    * [Laravel Doctrine](http://www.laraveldoctrine.org/) - A fluent mapping driver for Doctrine2 (Data Mapper)

    ### Laravel Related Blogs and Twitter Accounts

    * [Taylor Otwell](http://taylorotwell.com/) ([@taylorotwell](https://twitter.com/taylorotwell)) - Creator of Laravel
    * Jeffrey Way ([@jeffrey_way](https://twitter.com/jeffrey_way)) - Creator of Laracasts
    * [Matt Stauffer](https://mattstauffer.co/) ([@stauffermatt](https://twitter.com/stauffermatt)) - Host of the [@LaravelPodcast](https://twitter.com/laravelpodcast)
    * [Adam Wathan](http://adamwathan.me/) ([@adamwathan](https://twitter.com/adamwathan)) - Host of the [@fullstackradio](https://twitter.com/fullstackradio) podcast
    * [Chris Fidao](http://fideloper.com/) ([@fideloper](https://twitter.com/fideloper)) - Creator of [Servers for Hackers](https://serversforhackers.com/)

    @endmarkdown
@stop
