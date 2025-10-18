@extends('layouts.default')

@section('title', 'All Posts')


@section('content')
<h1>All Posts</h1>

@if($posts->count())
    <ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post)}}">{{ $post->title }}</a>

            <strong>{{ $post->title }}</strong>
            <p>{{ $post->body }}</p>
        </li>
    @endforeach
    </ul>
@else
    <p>No posts found!</p>
@endif

<a href="{{ route('posts.create')}}">Create New Post</a>
@endsection