@extends('_includes.blog_post_base')

@section('post::title', 'Today Is The Best Day Of Your Life')
@section('post::date', 'March 01, 2016')
@section('post::brief', 'When you watch reality TV singing shows, the hopefuls tend to be starry eyed dreamers, who’ll look into the camera and say “I’ve always dreamed about being a singer.” They never say they’ve always dreamed of singing.')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    The easiest way to accomplish visual balance is to align elements and structure designs with a clear grid. It guides us in the right direction when placing elements and determine dimensions, and it makes it easier for the user to process the interface.

    ### H3 PHP

    <!--?prettify?-->
    ```php
    require __DIR__.'/vendor/autoload.php';

    $katana = new \Katana\Katana(
            new Symfony\Component\Console\Application
    );

    $katana->handle();
    ```

    #### H4 SQL

    <!--?prettify?-->
    ```sql
    CREATE TABLE `binds` (
        `bind_id` int(11) NOT NULL AUTO_INCREMENT,
        `hook_name` varchar(125) NOT NULL,
        `bind_class` varchar(100) NOT NULL,
        `bind_method` varchar(100) NOT NULL,
        `bind_filename` text NOT NULL,
        `bind_created` datetime NOT NULL,
        PRIMARY KEY (`bind_id`),
        KEY `hook_name` (`hook_name`)
    ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
    ```

    No design is ever finished or done. Don’t be afraid of throwing away work, features or designs, good design is always evolving and grows with the business. Design with change in mind will allow us to quickly adapt to new learnings and insights. Every feature or functionality that is introduced needs time to improve. Once something is launched, evaluating performance and iteration should be the focus.

    <script src="https://gist.github.com/johnblackmore/4bc2b1550bb4373a2cff.js"></script>

    [Read the complete article on Medium](https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c)
    @endmarkdown

@stop