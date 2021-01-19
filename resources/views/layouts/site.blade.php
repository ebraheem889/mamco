<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mamco</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo:wght@600&display=swap" rel="stylesheet">	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_files/css/bootstrap.min.css')}}">
    <link href="{{asset('front_files/css/main.css')}}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{--
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    @stack('style')
</head>



<body>

@include('front_parts._nav')
@yield('content')

<script src="{{asset('front_files/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front_files/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front_files/js/jquery.js')}}"></script>
<script src="{{asset('front_files/plugin/custom.js')}}"></script>


</body>
</html>
