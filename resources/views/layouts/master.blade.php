<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    @includeIf('layouts.partials.header')

    <main class="container py-4">
        @yield('content')
    </main>

    @includeIf('layouts.partials.footer')
    @stack('scripts')
</body>
</html>