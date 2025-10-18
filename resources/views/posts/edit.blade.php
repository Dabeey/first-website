@extends('layouts.default')

@section('title', 'Create Post')

@section('content')
    <h1>Update Post</h1>

    <form action="{{ route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title')}}">
            @error('title')
                <span class="error">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
            @error('body')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit">Update</button>

    </form>

    <a href="{{ route('posts.show', $post)}}">Cancel</a>

@endsection    
