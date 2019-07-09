<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

    {{-- Basic CSS --}}
    <link rel="stylesheet" href="{{ mix(asset('assets/web/css/basic.css'))}}">
    {{-- Revolution Settings --}}
    <link rel="stylesheet" href="{{ mix(asset('assets/web/css/settings.css'))}}">
    {{-- Typography --}}
    <link rel="stylesheet" href="{{ mix(asset('assets/web/css/typography.css'))}}">
    {{-- Shortcodes --}}
    <link rel="stylesheet" href="{{ mix(asset('assets/web/css/shortcodes.css'))}}">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ mix(asset('assets/web/css/style.css'))}}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/web/vendor/modernizr/modernizr.min.js')}}"></script>
</head>
<body>
    <div class="body">
        @include('f.partials.nav')
        @include('f.partials.carrousel')

        <div role="main" class="main">
            @yield('content')
        </div>

        @include('f.partials.footer')
    </div>

    {{-- Basic JS --}}
    <script src="{{ mix(asset('assets/web/js/basic.js'))}}"></script>
    {{-- Revolution JS --}}
    <script src="{{ mix(asset('assets/web/js/revo.js'))}}"></script>
    {{-- Custom JS --}}
    <script src="{{ mix(asset('assets/web/js/custom.js'))}}"></script>
</body>
</html>