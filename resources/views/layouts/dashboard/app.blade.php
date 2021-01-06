<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--      select2 --}}
      <link rel="stylesheet" type="text/css" href="{{asset('dashed/plugins/select2/select2.min.css')}}">
    <!-- Main CSS-->
{{--      jquery--}}
      <script src="{{asset('dashed/js/jquery-3.3.1.min.js')}}"></script>

      <link rel="stylesheet" type="text/css" href="{{asset('dashed/css/main.css')}}">
    {{-- notification --}}
  <link rel="stylesheet" type="text/css" href="{{asset('dashed/css/noty.css')}}">
  <script src="{{asset('dashed/js/noty.min.js')}}" type="text/javascript"></script>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('layouts.dashboard._header')

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('layouts.dashboard._aside')
    <main class="app-content">
      {{-- <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div> --}}
{{--      @include('partials._sessions')--}}
     @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('dashed/js/popper.min.js')}}"></script>
    <script src="{{asset('dashed/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashed/plugins/select2/select2.min.js')}}"></script>
{{--    selecte --}}
    <script src="{{asset('dashed/js/main.js')}}"></script>


    </body>
</html>
