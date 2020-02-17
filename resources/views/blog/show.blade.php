@extends('layout.blog')

@section('meta-description', $post->meta_description )

@section('content')
    <div class="blog-item">
        <div class="featured_image">
            <img src="/{{ $post->image }}" alt="image">
        </div>
        <div class="title">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="body">
            <p>{!! $post->body !!}</p>
        </div>
        <div class="Author flex">
            <span class="avatar mr-5">
                <img src="/{{ $post->authorId->avatar}}" alt="avatar" width="50">
            </span>
            <span class="name">
                <h4>{{ $post->authorId->name }}</h4>
            </span>
        </div>
    </div>
@stop
