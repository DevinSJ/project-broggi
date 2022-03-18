<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
</head>

<body>
    <div id="app">
        @if (Auth::check())
            <nav-bar :user="{{ Auth::user() }}"></nav-bar>

            <router-view>
            </router-view>
        @else
            @yield('content')
        @endif
    </div>
    <script type="text/javascript" src="{{ asset('/assets/js/app.js') }}"></script>
</body>

</html>
