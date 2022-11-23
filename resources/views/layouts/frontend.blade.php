<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Responsive -->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Stylesheets -->
        <link href="{{asset('assets_front/css/bootstrap.css')}}" rel="stylesheet">

        <link href="{{asset('assets_front/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets_front/css/responsive.css')}}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

        <!--Color Switcher Mockup-->
        <link href="{{asset('assets_front/css/color-switcher-design.css')}}" rel="stylesheet">

        <!-- Color Themes -->
        <link id="theme-color-file" href="{{asset('assets_front/css/color-themes/purple-theme.css')}}" rel="stylesheet">

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">


        @stack('css')
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

        </head>


<body>
    <div class="page-wrapper">
        @include('frontend.partials.header')
        @yield('content')
    </div>

    <script src="{{asset('assets_front/js/jquery.js')}}"></script>
    <script src="{{asset('assets_front/js/popper.min.js')}}"></script>
    <script src="{{asset('assets_front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets_front/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets_front/js/appear.js')}}"></script>
    <script src="{{asset('assets_front/js/nav-tool.js')}}"></script>
    <script src="{{asset('assets_front/js/owl.js')}}"></script>
    <script src="{{asset('assets_front/js/wow.js')}}"></script>
    <script src="{{asset('assets_front/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('assets_front/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets_front/js/color-settings.js')}}"></script>
    @stack('js')
</body>

</html>
