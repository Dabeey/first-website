@extends('layouts.default')

@section('title', 'All Posts')


@section('content')
<h1>All Posts</h1>
<a href="{{ route('posts.create')}}">Create New Post</a>


@if($posts->count())
    <ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post)}}">{{ $post->title }}</a>
            
            <a href="{{ route('posts.update', $post)}}" class="btn">Edit</a>


            <form action="{{route('posts.destroy', $post)}}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>
@else
    <p>No posts found!</p>
@endif

@endsection