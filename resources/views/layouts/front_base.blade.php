<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset( 'assets/web/css/app.css' ) }}">
    <script src="{{ asset( 'assets/web/modernizr/modernizr.min.js' ) }}"></script>
</head>
<body>
    <div class="body">
        @yield('content')
    </div>
    
    <script src="{{ asset( 'assets/web/js/app.js' ) }}"></script>
</body>
</html>