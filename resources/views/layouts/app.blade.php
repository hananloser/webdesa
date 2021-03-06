<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0')}}" type="text/css">


    <title>Web Desa</title>
</head>

<body>
    @include('components.Sidebar')

    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('components.topnav')
        <!-- Header -->
        @include('components._header')
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                @yield('content')
            </div>
            <!-- Footer -->
            @include('components._footer')
        </div>
    </div>

</body>
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
@yield('scripts')

</html>
