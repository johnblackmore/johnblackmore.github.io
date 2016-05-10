@extends('_includes.blog_post_base')

@section('header::image', 'nanny-moo.jpg')
@section('post::title', 'Nothing to See Here!')
@section('post::date', 'May 10, 2016')
@section('post::brief', 'No there really is nothing, I have not finished writing yet')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    Just as the title says, there is nothing to see here.

    I've just not finished any articles yet.

    There will be content here soon I promised, and when that happens this page will not be here any more.
    @endmarkdown

@stop