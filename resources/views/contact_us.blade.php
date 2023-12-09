<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>

<body>

    <h1>welcome in contact page</h1>
    <hr>
    <form action="/user/{role}" method="get">
        @csrf
        <input type="text">
        <input type="submit">

    </form>
    <a href="/user/{role}">home page</a>
    <a href="{{route('about_us')}}">about page</a>
</body>

</html>