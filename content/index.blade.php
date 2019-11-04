@extends('_includes.content_page')

@section('pageTitle', 'John Blackmore - Freelance PHP Developer, Digital Marketer')
@section('header::image', 'macbook-plant-phone.jpg')
@section('header::title', 'John Blackmore')
@section('header::tagline', $siteDescription)

@section('content')
    @markdown
    ## Welcome

    Hi I'm John, although many people know me as just 'JB'. I am a **freelance PHP and frontend software developer** based in
    Taunton, United Kingdom. I am currently available to take on new projects.

    I have over 20 years experience of building and maintaining websites and e-commerce applications, and over 10 years of commercial 
    experience building web applications for a wide range of industries. I have worked with companies in their startup stage to help define their product offering and establish product market fit. I have also worked with growth-stage companies to review and re-architect existing systems for _high traffic_ and deployment to multi-server _cloud infrastructures_.

    I have a keen interest in building **clean code** and my niche is working with legacy PHP systems, refactoring, and introducing **Modern PHP**. I work with a number of popular PHP Frameworks including [Laravel](https://laravel.com/), [Symfony](https://symfony.com/), [Yii](https://www.yiiframework.com/) and [CodeIgniter](https://codeigniter.com/). With my experience over the years I am not afraid to take on projects outside of these areas, and I am happy to work on most PHP based platforms.

    Some of the systems I have helped design and develop include a **FinTech crowdfunding platform** that processed over &pound;100 million in transactions in one year, and an **online lettings platform** that actively advertised and processed tenant enquiries for around 1500 properties a month. I have also worked with companies to help to streamline local development, introduce _Continuous Integration_ (CI) and _Continuous Deployment_ (CD) pipelines, alongside _zero-downtime deployments_.

    I have also kept a keen interest in digital marketing, being involved in _Search Engine Optimisation_ (Orginic Search) and _Search Engine Marketing_ (Paid Search) projects, _Conversion Rate Optimisation_ (CRO), video marketing, social, local,
    mobile, display advertising and more. I am both **Google and [Hubspot](https://www.hubspot.com/) qualified** in digital marketing techniques.

    This site is mostly a scratchpad for my own thoughts and consists primarily of links to articles and projects that I find interesting. If you have any questions please get in touch, and if you want to follow what I get up to [I am on Twitter as @johnblackmore](https://twitter.com/johnblackmore).

    Thanks for visiting!

    JB.
    @endmarkdown
@stop
