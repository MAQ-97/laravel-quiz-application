<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{url('')}}{{ mix('js/app.js', 'themes/admin') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{url('')}}{{mix('css/app.css', 'themes/admin') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.navigation')

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
