<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Sitemap - All user - by @stdejan</title>
</head>
<body class="antialiased">
<div>
    <h1>All Users</h1>

    <ul>
        @foreach($users as $user)
            <li>
                <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
