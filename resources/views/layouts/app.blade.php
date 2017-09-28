<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('scripts')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('boostrap-4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                         <img src="{{asset('imgs/logo-sos.png')}}" alt="SOS Finder" height="auto" width="100%" style="margin-top: -17px; ">

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Ingresar</a></li>
                        @else
                         <li><a href="{{ route('home') }}"><i class="fa fa-search" aria-hidden="true"></i> Nueva búsqueda</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')


            {{--<footer style="background-color: lightslategrey; height: 90px;position: absolute;--}}
                                                                              {{--bottom: 0px;--}}
                                                                              {{--width: 100%;"class="main-footer">--}}

                              {{--<div  style="padding-top:20px; text-align:center; ">--}}
                                {{--<span style="color:#fff;"  class="text-muted">Calle Veracruz N34-102 y Av. América. </span>--}}

                              {{--</div>--}}
                              {{--<div  style="text-align:center; color: #fff">--}}
                                      {{--<span style="margin-top:-10px;">Desarrollado por &copy; 2017 <a style="color:#fff;"  href="http://www.cladian.com/">Cladian Digital</a></span>--}}
                                    {{--</div>--}}
            {{--</footer>--}}
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('boostrap-4/js/bootstrap.js') }}"></script>

</body>

</html>
