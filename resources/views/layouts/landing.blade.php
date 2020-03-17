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
</body>

</html>
