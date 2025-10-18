<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Blog App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <!-- Navbar -->
            <a href="{{ route('posts.index')}}">Home</a>
            <a href="{{ route('posts.create')}}">Create</a>
        </nav>
    </header>


    <main>
        <!-- Flash Message -->
         @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
    @endif

    <!-- Page Content -->
    @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y')}} My App 2036</p>
    </footer>

</body>
</html>