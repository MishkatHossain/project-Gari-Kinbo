<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>@yield('title') | {{config('app.name', 'Laravel')}}</title>
</head>
<body>
<header>Your Header</header>       
@yield('content')

<footer>Your footer</footer>

</body>
</html>