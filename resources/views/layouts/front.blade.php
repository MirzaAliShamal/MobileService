<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mobile Service</title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/assets/img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('app/assets/img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app/assets/img/favicons/favicon-16x16.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app/assets/img/favicons/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('app/assets/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileImage" content="{{ asset('app/assets/img/favicons/mstile-150x150.png') }}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{ asset('app/assets/js/config.js') }}"></script>
        <script src="{{ asset('app/vendors/simplebar/simplebar.min.js') }}"></script>
        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="{{ asset('app/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('app/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app/assets/css/theme-rtl.css') }}" rel="stylesheet" id="style-rtl">
        <link href="{{ asset('app/assets/css/theme.css') }}" rel="stylesheet" id="style-default">
        <link href="{{ asset('app/assets/css/user-rtl.css') }}" rel="stylesheet" id="user-style-rtl">
        <link href="{{ asset('app/assets/css/user.css') }}" rel="stylesheet" id="user-style-default">
    </head>
    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            @include('front.components.header')
            @yield('content')
            @include('front.components.footer')
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <script src="{{ asset('app/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('app/vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('app/vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('app/vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('app/vendors/swiper/swiper-bundle.min.js') }}"> </script>
        <script src="{{ asset('app/vendors/typed.js/typed.umd.js') }}"></script>
        <script src="{{ asset('app/vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('app/vendors/lodash/lodash.min.js') }}"></script>
        <script src="{{ asset('app/vendors/list.js/list.min.js') }}"></script>
        <script src="{{ asset('app/assets/js/theme.js') }}"></script>
    </body>
</html>
