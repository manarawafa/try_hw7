<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
</head>

<body>
    <h1>Insert photo here</h1>
    <form action="{{route('photos.store')}}" method="POST">
        @csrf
        photo name: <input type="text"><br>
        <input type="submit">
    </form>
</body>

</html>