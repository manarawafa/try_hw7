<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> my new view</h2>
    <form method="post" action="{{route('receive')}}">
        @csrf
        <input type="text" name="fname">
        <input type="submit">
</body>

</html>