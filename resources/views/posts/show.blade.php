@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>{{$post->title}}</h1>

<div>
    <hr>
    <strong>{{ $post->body }}</strong>
    <p></p>
    <a href="{{ route('posts.update', $post)}}" class="btn">Edit</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
    </form>
    
    <br><br><hr>
    <span>Created at: {{ $post->created_at}}</span>
    <br><br>

    <span>Last modified: {{ $post->updated_at}}</span>
    <br><br><hr>
    <a href="{{ route('posts.index')}}">Back To Posts</a>

</div>


@endsection