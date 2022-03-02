<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
</head>

<body>
    <div id="app">
        <nav-bar></nav-bar>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/js/app.js') }}"></script>
</body>

</html>
