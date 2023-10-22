<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link href="{{ URL::asset('css/all.min.css') }}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{ URL::asset('css/css.css') }}" rel="stylesheet" />
    <!-- MDB -->
    <link href="{{ URL::asset('css/mdb.min.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
            @yield('content')
    </div>
</body>
     <!-- MDB -->
     <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
</html>
