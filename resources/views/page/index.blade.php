@extends('layout.page')

@section('meta-description', $page->meta_description )

@section('content')
    <div class="page-item">
        <div class="featured_image">
            <img src="{{ $page->image }}" alt="Imagen">
        </div>
        <div class="title">
            <h1>{{ $page->title }}</h1>
        </div>
        <div class="body">
            <p>{!! $page->body !!}</p>
        </div>
    </div>
@stop
