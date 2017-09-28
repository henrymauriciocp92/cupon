<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SOS: Automatic Page Title -->
    @yield('title')

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link rel="stylesheet" href="{!! URL::asset('bootstrap/css/bootstrap.min.css') !!}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! URL::asset('font-awesome/css/font-awesome.min.css') !!}">
    <!-- Ionicons -->
    {{--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}



    <!-- Theme style -->
     <link rel="stylesheet" href="{!! URL::asset('dist/css/AdminLTE.css') !!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! URL::asset('dist/css/skins/_all-skins.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('bootstrap-datepicker/css/bootstrap-datepicker3.css') !!}">


    {{--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--}}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>
      <script src="{!! URL::asset('js/html5shiv.min.js') !!}"></script>
        <script src="{!! URL::asset('js/respond.min.js') !!}"></script>
    <![endif]-->

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layout.header')
        @include('layout.sidebar')

        <div class="content-wrapper">
            @yield('content-header')
            @yield('content')
        </div>

        {{--SOS: Footer Default information --}}
        @include('layout.footer')

    </div>
    <script src="{!! URL::asset('js/jquery-1.11.0.min.js') !!}" type="text/javascript" ></script>
    <script src="{!! URL::asset('js/config.js') !!}" type="text/javascript" ></script>
    <script src="{!! URL::asset('js/knockout-3.4.0.js') !!}" type="text/javascript"></script>
{{--    @yield('footer-scripts')--}}


    <!-- jQuery UI 1.11.4 -->
    <script src="{!! URL::asset('js/jquery-ui.min.js') !!}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{!! URL::asset('bootstrap/js/bootstrap.min.js') !!}" type="text/javascript" ></script>
   <!-- AdminLTE App -->
    <script src="{!! URL::asset('dist/js/app.min.js') !!}" type="text/javascript" ></script>
    @yield('footer-scripts')
  </body>
</html>
