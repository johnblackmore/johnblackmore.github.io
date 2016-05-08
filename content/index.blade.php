@extends('_includes.content_page')

@section('header::image', 'macbook-plant-phone.jpg')
@section('header::title', $siteName)
@section('header::tagline', $siteDescription)

@section('content')
    @markdown
    ## Welcome

    Hi I'm John, although many people know me as just 'JB'. I'm a software developer based in Taunton, South-West England.
    By day I work on PHP web applications as a developer and systems architect. I am also [available to hire](/about) to work on
    a freelance basis in a consultant or developer capacity.

    I have nearly 10 years of commercial experience building web applications in PHP, Python and Java. I have a keen
    interest in building clean code and my niche is working with legacy PHP systems, refactoring, and introducing Modern PHP.
    In my spare time I fly quadcopters (drones), tinker with [Arduino](https://www.arduino.cc/) and code on
    [Raspberry Pis](https://www.raspberrypi.org/).

    I've not got a lot more to say at the moment. This site is mostly a scratchpad for my own thoughts and consists
    primarily of links to articles and projects that I find interesting.

    Thanks for visiting!

    JB.
    @endmarkdown
@stop
