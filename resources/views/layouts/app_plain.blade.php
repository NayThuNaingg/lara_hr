<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{URL::asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
            @yield('content')
    </div>
</body>
     <!-- @yield('footerLink') -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{URL::asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
</html>
