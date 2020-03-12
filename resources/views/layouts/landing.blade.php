<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Web Desa')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e1e5779b9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
        type="text/css">

</head>

<body>
    @include('components.landing.Sidebar')
    <main>
        @yield('content')
    </main>
    <script>
        var index = 1;
        var theme = ['quickly', 'quickly-dark', 'quickly-light'];
        var body = document.getElementsByTagName('body');
        document.getElementById('btnTheme').addEventListener('click', function(e) {
            body[0].classList.remove('quickly-dark', 'quickly-light');
            body[0].classList.add(theme[index++]);
            index = (index > 2) ? 0 : index;
        });
    </script>
</body>

</html>
