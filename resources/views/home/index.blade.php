<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My name is {{$name}}</h1>
    <h2>Date: {{$year}}</h2>
    <p>House name is the best: {{$house}}</p>
    <p>!!|!!</p>



    <p>{{Illuminate\Support\Str::after("Hello world", "Hello ")}}</p>
    <p>{{ Illuminate\Foundation\Application::VERSION}}</p>
    <p>{{PHP_VERSION}}</p>
</body>
</html>