@extends('_includes.content_page')

@section('pageTitle', 'John Blackmore - Freelance Digital Marketer, Laravel PHP Developer')
@section('header::image', 'macbook-plant-phone.jpg')
@section('header::title', 'John Blackmore')
@section('header::tagline', $siteDescription)

@section('content')
    @markdown
    ## Welcome

    Hi I'm John, although many people know me as just 'JB'. I'm a digital marketing consultant and software developer based in
    Taunton, United Kingdom. I primarily work on PHP web applications as a developer and systems architect although I am also
    [available to hire](/about) to work on a freelance basis on your online marketing or development projects.

    I have nearly 10 years of commercial experience building web applications in PHP, Python and Java. I have a keen
    interest in building clean code and my niche is working with legacy PHP systems, refactoring, and introducing Modern PHP.
    I have also kept a keen interest in digital marketing, being involved in SEO and SEM projects, video marketing, social, local,
    mobile, display advertising and more. I am both Google and Hubspot qualified in digital marketing techniques.

    In my spare time I fly quadcopters (drones), tinker with [Arduino](https://www.arduino.cc/) and code on
    [Raspberry Pis](https://www.raspberrypi.org/). This site is mostly a scratchpad for my own thoughts and consists
    primarily of links to articles and projects that I find interesting.

    For more on my commercial offerings I trade under the agency name [Hello JB](http://hellojb.uk/).

    Thanks for visiting!

    JB.
    @endmarkdown
@stop
