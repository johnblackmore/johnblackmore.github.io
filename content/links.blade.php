@extends('_includes.content_page')

@section('pageTitle', "John Blackmore's Useful Links for Web Developers")
@section('header::image', 'candle-bokeh.jpg')
@section('header::title', 'Web Development Links')
@section('header::tagline', 'I think you might like these.')

@section('content')
    @markdown
    The links on this page are here as a reminder to myself. They are mostly links to resources I have
    found to be useful or things I want to investigate further. I hope that they might be useful for web developers like me, and others too.

    ### PHP Links

    - [The League of Extraordinary Packages](https://thephpleague.com/)
    - [PHP: The Right Way](http://www.phptherightway.com/)
    - [PHP Framework Interop Group](http://www.php-fig.org/)

    ### Creative Commons Zero (No Copyright) Media

    - [Pixabay](https://pixabay.com/) - CC0 Images and Videos
    - [Unsplash](https://unsplash.com/) - CC0 Images
    - [Pexels](https://www.pexels.com/) - CC0 Images
    - [New Old Stock](http://nos.twnsnd.co/) - Public Domain Images

    ### Building Secure PHP Login Systems

    - [The definitive guide to form-based website authentication](http://stackoverflow.com/questions/549/the-definitive-guide-to-form-based-website-authentication)
    - [Implementing Secure User Authentication in PHP Applications with Long-Term Persistence](https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence)
    - [Persistent Login Cookie Best Practice](http://fishbowl.pastiche.org/2004/01/19/persistent_login_cookie_best_practice/)

    ### Password Complexity

    - [zxcvbn: realistic password strength estimation](https://blogs.dropbox.com/tech/2012/04/zxcvbn-realistic-password-strength-estimation/)
    - [Password Strength xkcd](https://xkcd.com/936/) - Password entropy visualised
    - [The Top 500 Worst Passwords of All Time](http://www.whatsmypass.com/the-top-500-worst-passwords-of-all-time)

    ### My Other Websites

    - [Hello JB: Online Digital Marketing](http://hellojb.uk)
    @endmarkdown
@stop
