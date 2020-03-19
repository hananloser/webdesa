<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ __('Desa Bangun Jaya') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('assets2/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets2/css/paper-kit.css?v=2.2.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
</head>


<body class="bg-dark">
    <!-- Navbar -->
    {{-- @include('components.landing.Navbar') --}}
    <!-- End Navbar -->
    <div class="main">
        @yield('content')
    </div>
    <script src="{{asset('assets2/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/paper-kit.js?v=2.2.0')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/particle.js')}}" type="text/javascript"></script>

    <script>
        particlesJS.load('particles-js', 'assets/js/particlesjs-config.json')
    </script>

    <style>
        body,
        html {
            height: 100%
        }

        #particles-js canvas {
            display: block;
            vertical-align: bottom;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
            transition: opacity .8s ease, transform 1.4s ease
        }

        #particles-js {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -10;
            top: 0;
            left: 0
        }
    </style>

</body>

</html>
