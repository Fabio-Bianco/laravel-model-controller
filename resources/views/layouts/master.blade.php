<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MyMovies')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
</head>
<body class="bg-light">
    @include('layouts.partials.header')


    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
