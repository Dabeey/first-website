@extends('layouts.default')

@section('title', 'Create Post')

@section('content')
<div class="create_page">
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store')}}" method="POST">
        @csrf
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
        
        <button type="submit">Create Post</button>

    </form>
</div>
@endsection    
