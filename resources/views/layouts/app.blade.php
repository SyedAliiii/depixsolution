<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Depix Solution')</title>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description', 'Creative Portfolio HTML Template')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/socicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ms-main.css') }}">
    @stack('styles')
</head>
<body data-theme="@yield('theme', 'light')">
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')

    <!--Libs-->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesLoaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
