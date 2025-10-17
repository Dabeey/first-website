<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Website</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <h1>Home Page</h1>
    <form action="{{ route('formsubmitted') }}" method="POST"> 
        @csrf
        <label for="email">Full name</label>
        <input type="text" name="fullname" placeholder="Type Your full  name!" required>
        <br><br>
        <label for="email">E-Mail</label>
        <input type="text" name="email" placeholder="Type your email!" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>