<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <!-- Scripts -->
        @routes
            @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead  
        <!-- Font Awesome CSS -->
        <link href="{{ asset('assets/css/fontAwesomePro.css') }}" rel="stylesheet" />
        <!-- Animate CSS-->
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
        <!-- Bar Filler CSS -->
        <link href="{{ asset('assets/css/barfiller.css') }}" rel="stylesheet" />
        <!-- Magnific Popup Video -->
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
        <!-- Flaticon CSS -->
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet" />
        <!-- Owl Carousel CSS -->
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" />
        <!-- Slick Slider CSS -->
        <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
        <!-- Nice Select  -->
        <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet" />
        <!-- Back to Top -->
        <link href="{{ asset('assets/css/backToTop.css') }}" rel="stylesheet" />
        <!-- Metis Menu -->
        <link href="{{ asset('assets/css/metismenu.css') }}" rel="stylesheet" />
        <!-- Style CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <!-- Responsive CSS -->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
        <!-- jquery -->
        <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    </head>
    <body>
        @inertia
    </body>
        <!-- Popper JS -->
        <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Slick Slider JS -->
        <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('/assets/js/magnific-popup.min.js') }}"></script>
        <!-- Isotope JS -->
        <script src="{{ asset('/assets/js/isotope-3.0.6-min.js') }}"></script>
        <!-- Sticky JS -->
        <script src="{{ asset('/assets/js/jquery.sticky.js') }}"></script>
        <!-- Nice Select JS -->
        <script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Back To Top JS -->
        <script src="{{ asset('/assets/js/backToTop.js') }}"></script>
        <!-- Metis Menu JS -->
        <script src="{{ asset('/assets/js/metismenu.js') }}"></script>
        <!-- Progress Bar JS -->
        <script src="{{ asset('/assets/js/jquery.barfiller.js') }}"></script>
        <!-- Circle Progress Bar JS -->
        <script src="{{ asset('/assets/js/circle-progress.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>
</html>
