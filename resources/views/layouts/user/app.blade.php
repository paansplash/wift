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
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COverpass:200,400,600,700,800,900%7CPT+Serif&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">

    @vite(['resources/css/public-porto.css', 'resources/css/app.css'])

    @stack('css')
</head>

<body class="loading-overlay-showing" data-loading-overlay data-plugin-page-transition>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    @include('layouts.user.header')

    <div class="body">
        @yield('content')
    </div>

    @include('layouts.user.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/demos/demo-architecture-2.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>
    <script src="{{ asset('assets/js/views/view.contact.js') }}"></script>

    @stack('scripts')
</body>

</html>
