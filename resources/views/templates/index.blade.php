<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

    <!-- MAPBOX -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
</head>

<body>
    <div id="app">
        @if (Auth::check())
            <nav-bar :user="{{ Auth::user() }}"></nav-bar>

            <router-view class="container-fluid p-4">
            </router-view>

            <float-btn-help-lang />
        @else
            @yield('content')
        @endif
    </div>
    <script type="text/javascript" src="{{ asset('/assets/js/app.js') }}"></script>
</body>

</html>
