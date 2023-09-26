<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Sitemap - Show user - by @stdejan</title>
</head>
<body class="antialiased">
<div>
    <h1>{{ $user->name }}</h1>

    <p>Email: {{ $user->email }}</p>
</div>
</body>
</html>
