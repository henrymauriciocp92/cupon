<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('title')

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!! URL::asset('css/bootstrap/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! URL::asset('css/dist/css/AdminLTE.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! URL::asset('css/plugins/iCheck/square/blue.css') !!}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">

     {{-- <div class="login-logo">
        <b>SOS</b>Evaluation
      </div><!-- /.login-logo -->
--}}
      @yield('login-box-body')

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{!! URL::asset('css/plugins/jQuery/jQuery-2.1.4.min.js') !!}" type="text/javascript" ></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{!! URL::asset('css/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript" ></script>
    <!-- iCheck -->
    <script src="{!! URL::asset('css/plugins/iCheck/icheck.min.js') !!}" type="text/javascript" ></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
