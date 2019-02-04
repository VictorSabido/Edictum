<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/linear-icons/css/linear-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/theme-elements.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/custom.css')}}">

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

    <!-- Vendor -->
    <script src="{{ asset('assets/web/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/common/common.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/vide/vide.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/vivus/vivus.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/vivus/vivus.min.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/web/js/theme.js')}}"></script>
    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/web/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('assets/web/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('assets/web/js/custom.js')}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/web/js/theme.init.js')}}"></script>
</body>
</html>