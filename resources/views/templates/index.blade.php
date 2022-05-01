@php  use App\Models\Usuaris; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        @if (Auth::check())
            <nav-bar :user="{{ Usuaris::with('perfil')->find(Auth::id())}}"></nav-bar>

            <router-view class="container-fluid p-4">
            </router-view>

            <float-btn-help-lang />
        @else
            @yield('content')
        @endif
    </div>
    <!-- MAPBOX -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
    <script type="text/javascript" src="{{ mix('js/svg.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>

</html>
