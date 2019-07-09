<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Webster - Responsive Multi-purpose HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('web/css/basic.css')) }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('web/css/settings.css')) }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('web/css/typography.css')) }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('web/css/shortcodes.css')) }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('web/css/style.css')) }}" />
</head>
<body>

<div class="wrapper">
    <div id="pre-loader">
        <img src="images/pre-loader/loader-01.svg" alt="">
    </div>

    @include('f.partials.menu')
    @include('f.partials.rev_slider')

    @include('f.partials.footer')
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <script src="{{ asset(mix('web/js/basic.js')) }}"></script>
    <!-- Plugin_path -->
    <script>var plugin_path = 'js/';</script>
    <!-- Revolution JS files -->
    <script src="{{ asset(mix('web/js/revo.js')) }}"></script>
    <!-- Custom -->
    <script src="{{ asset(mix('web/js/custom.js')) }}"></script>
</body>
</html>