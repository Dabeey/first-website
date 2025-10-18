<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    
    @if($posts->count())
        <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->body }}</p>
            </li>
        @endforeach
        </ul>
    @else
        <p>No posts found!</p>
    @endif

    <a href="{{ route('posts.create')}}">Create New Post</a>
</body>
</html>