@extends('_includes.content_page')

@section('pageTitle', '- About')
@section('header::image', 'about-me.jpg')
@section('header::title', 'About Me')
@section('header::tagline', 'Hello, is it me you&apos;re looking for?')

@section('content')
    @markdown
    ## About Me

    Hello, I’m John. I’m a web software developer with ten years of commercial experience in everything from brochure websites to eCommerce, Software as a Service (SaaS) online applications and small enterprise management systems.

    I mainly work in PHP with a particular passion for building web applications on the Laravel framework, although I also specialise in working on and modernising legacy PHP applications.

    I’m available to hire for odd jobs and small projects and I’m happy to talk through your options with no obligation, so please get in touch.

    - Telephone: 07825 699380
    - Email: [hello@johnblackmore.com](mailto:hello@johnblackmore.com)
    @endmarkdown
@stop
