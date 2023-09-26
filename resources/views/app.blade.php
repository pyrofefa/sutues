<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
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
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
