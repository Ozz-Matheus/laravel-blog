@extends('layout.blog')

@section('content')

    <div class="blog">
        @forelse($posts as $post)
            <div class="item">
                <a href="{{ route('blog.show', $post->slug) }}">
                    <div class="featured_image">
                        <img src="{{ $post->image }}" alt="Images">
                    </div>
                    <div class="title">
                        <h1>{{ $post->title }}</h1>
                    </div>
                    <div class="excerpt">
                        <p>{{ $post->excerpt }}</p>
                    </div>
                    <span class="date">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                </a>
            </div>
        @empty
            <div class="empty">
                No hay entradas para mostrar
            </div>
        @endforelse
    </div>

@stop
