<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    @stack('css')
</head>

<body class="login-img">
    <div>
        @yield('content')
    </div>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS -->
    <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS -->
    {{-- <script src="{{asset('assets/js/circle-progress.min.js')}}"></script> --}}

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

    <!-- INPUT MASK JS -->
    <script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('assets/js/themeColors.js')}}"></script>

    <!-- swither styles js -->
    <script src="{{asset('assets/js/swither-styles.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @stack('js')
</body>

</html>
