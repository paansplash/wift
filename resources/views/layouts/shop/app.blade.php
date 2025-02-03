<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Wift')</title>

    <meta name="keywords" content="@yield('meta_keywords', 'Wish With Gift')" />
    <meta name="description" content="@yield('meta_description', 'Wift - Wish With Gift')">
    <meta name="author" content="@yield('meta_author', 'paansplash')">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/icon2.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logos/icon2.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COverpass:200,400,600,700,800,900%7CPT+Serif&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    {{-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    {{-- <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css"> --}}
    {{-- <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}"> --}}

    <!-- Skin CSS -->
    {{-- <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}"> --}}

    <!-- Theme Custom CSS -->
    {{-- <link rel="stylesheet" href="css/custom.css"> --}}

    <style>

    </style>
    @vite(['resources/css/shop.css', 'resources/css/app.css'])

    @stack('css')
</head>

<body data-plugin-page-transition>
    <div class="body">

        @include('layouts.shop.header')

        <div class="body">
            @yield('content')
        </div>

        @include('layouts.shop.footer')

        <!-- Vendor -->
        <script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('assets/js/views/view.shop.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('assets/js/theme.init.js') }}"></script>


        @stack('scripts')
    </div>
</body>

</html>
