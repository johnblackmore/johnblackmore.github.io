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

    ### Building Secure PHP Login Systems

    - [The definitive guide to form-based website authentication](http://stackoverflow.com/questions/549/the-definitive-guide-to-form-based-website-authentication)
    - [Implementing Secure User Authentication in PHP Applications with Long-Term Persistence](https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence)
    - [Persistent Login Cookie Best Practice](http://fishbowl.pastiche.org/2004/01/19/persistent_login_cookie_best_practice/)

    ### Password Complexity

    - [zxcvbn: realistic password strength estimation](https://blogs.dropbox.com/tech/2012/04/zxcvbn-realistic-password-strength-estimation/)
    - [Password Strength xkcd](https://xkcd.com/936/) - Password entropy visualised
    - [The Top 500 Worst Passwords of All Time](http://www.whatsmypass.com/the-top-500-worst-passwords-of-all-time)
    @endmarkdown
@stop
