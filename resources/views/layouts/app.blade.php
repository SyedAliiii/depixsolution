<!DOCTYPE html>
@php
    $settings = \App\Models\Setting::all()->pluck('value', 'key');
@endphp
<html lang="en">

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
   <!-- #title -->
   <title>@yield('title', 'Xpovio - Digital Agency Creative Portfolio Template')</title>
   <!-- #keywords -->
   <meta name="keywords" content="creative, agency, portfolio">
   <!-- #description -->
   <meta name="description" content="Creative Agency Portfolio HTML5 Template">
   
   <!-- ==== css dependencies start ==== -->
   <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor/glyyphter/css/xpovio.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/vendor/slick/css/slick.css') }}">
   <!-- ==== / css dependencies end ==== -->
   
   <!-- main css -->
   <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
   @stack('styles')
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
   <div class="my-app">
      <!-- ==== preloader start ==== -->
      <div id="preloader">
         <div id="loader"></div>
      </div>
      <!-- ==== / preloader end ==== -->
      
      <!-- ==== mouse cursor drag start ==== -->
      <div class="mouseCursor cursor-outer"></div>
      <div class="mouseCursor cursor-inner">
         <span>Drag</span>
      </div>
      <!-- ==== / mouse cursor drag end ==== -->

      @include('layouts.header')

      <div id="smooth-wrapper">
         <div id="smooth-content">
            
            @yield('content')

            @include('layouts.footer')
            
         </div>
      </div>

      <!-- ==== scroll to top start ==== -->
      <button class="progress-wrap" aria-label="scroll indicator" title="go to top">
         <span></span>
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </button>
      <!-- ==== / scroll to top end ==== -->
      
      <div class="line">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
      
      <!-- video modal -->
      <div class="vid-m">
         <div class="vid-c">
            <a href="javascript:void(0)" aria-label="close video popup" class="close-v">
               <i class="fa-light fa-xmark-large"></i>
            </a>
            <video autoplay="autoplay" loop muted controls>
               <source src="{{ asset('assets/images/popup-video.mp4') }}" type="video/mp4">
            </video>
            <h5>Hello</h5>
         </div>
      </div>
   </div>

   <!-- ==== js dependencies start ==== -->
   <script src="{{ asset('assets/vendor/jquery/jquery-3.7.0.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/images-loaded/imagesloaded.pkgd.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/chroma.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/SplitText.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/ScrollSmoother.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/ScrollToPlugin.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/vanilla-tilt/tilt.jquery.js') }}"></script>
   <!-- ==== / js dependencies end ==== -->
   
   <!-- plugins js -->
   <script src="{{ asset('assets/js/plugins.js') }}"></script>
   <!-- main js -->
   <script src="{{ asset('assets/js/main.js') }}"></script>
   @stack('scripts')
</body>

</html>
