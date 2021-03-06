<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Dr. Avinash Alva">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css?v=1.3') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css?v=1.8') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css?v=1.9') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/img/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/img/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/img/favicon_io/favicon-16x16.png') }}">

    <!-- Start custom css -->
    @yield('my-style') 
    <!-- End custom css -->
</head>
<body>
    @include('website.layouts.header')

    @yield('page-content')

    @include('website.layouts.footer')

    <script src="{{ asset('website//js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('website/js/wow.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('website/js/custom.js?v=1.3') }}"></script>

    <!-- Start custom script -->
    @yield('my-script')

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    <!-- End custom script -->
</body>
</html>