<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Document Settings -->

        <meta charset="utf-8"/>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="Primera-Obra" />

        {{-- <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/ico/primera-obra_logo.jpg" sizes="16x16" /> --}}

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('primera-obra-main/assets/images/ico/primera-obra_logo.jpg') }}" sizes="16x16" />


        <!-- Page Title -->
        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('primera-obra-main/assets/css/bootstrap.min.css') }}">

        <!-- Plugins -->
        <link rel='stylesheet' href="{{ asset('primera-obra-main/assets/css/font-awesome.min.css') }}">
        <link rel='stylesheet' href="{{ asset('primera-obra-main/assets/css/lightgallery.min.css') }}">
        <link rel='stylesheet' href="{{ asset('primera-obra-main/assets/css/slick.css') }}">
        <link rel='stylesheet' href="{{ asset('primera-obra-main/assets/css/zoom.css') }}">

        <!-- Custom css file -->
        <link rel="stylesheet" href="{{ asset('primera-obra-main/assets/css/style.css') }}">
    </head>
    <body>

    <!-- Wrapper -->
        <div class="wrapper">
        <!-- Header -->
            @include('layouts.partials.header')
        <!-- /Header -->

        <!-- Container -->
            <main class="container">
                @yield('content')
            </main>
        <!-- /Container -->

            <!-- Footer -->
                @include('layouts.partials.header')
        <!-- /Footer -->
        </div>
    <!-- /Wrapper -->

    <!-- JS -->
    <!-- jquery-2.1.3.min js -->
        <script type="text/javascript" src='{{ asset('primera-obra-main/assets/js/jquery-2.1.3.min.js') }}'></script>

    <!-- Plugins -->
        <script type="text/javascript" src='{{ asset('primera-obra-main/assets/js/libs.js') }}'></script>

    <!-- Main js -->
        <script type="text/javascript" src="{{ asset('primera-obra-main/assets/js/main.js') }}"></script>
    </body>
</html>
