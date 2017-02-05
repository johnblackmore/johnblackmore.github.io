@extends('_includes.content_page')

@section('pageTitle', "Ramblings of a PHP Software Developer - John Blackmore's Blog")
@section('header::image', 'macbook-code.jpg')
@section('header::title', 'Blog Posts')
@section('header::tagline', 'Ramblings of a PHP Software Developer')

@section('content')
    @foreach($paginatedBlogPosts as $post)
        <div class="post-preview">
            <a href="@url($post->path)">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                    {{ str_limit($post->brief, 130) }}
                </h3>
            </a>
            <p class="post-meta">Posted on {{ $post->date }}</p>
        </div>
        <hr>
    @endforeach
    @include('_includes.blog_paginator')
@stop