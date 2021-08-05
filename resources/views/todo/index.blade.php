<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Todo</h1>
<form action="/add" method="post">
    @csrf
    <input type="text" name="content" value="">
    <input type="submit" value="追加">
</form>
<ul>
    @foreach ($items as $item)
    <li>{{$item ->content}}</li>
    <li>{{$item ->created_at}} </li>
    <li>{{$item ->update_at}}</li>
    @endforeach
</ul>
</body>
</html>
