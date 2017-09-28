      <header class="main-header">
        <!-- Logo -->
        <a href="{{route('dashboard')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>OS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SOS</b>Evaluation</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{!! URL::asset('img/perfil-sos.png') !!}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{!! URL::asset('img/perfil-sos.png') !!}"  class="img-circle" alt="User Image">
                    @if(Auth::user()->isUser())
                    <p>
                       {{--datos Usuario--}}
                       {{--{{ Auth::user()->name }}--}}
                     <i class="fa fa-fw fa-black-tie"></i>
                     <b>{{Auth::user()->assignments()->where('status',true)->first()->position->profile()->first()->name}}</b>
                      <small><b>{{Auth::user()->assignments()->where('status',true)->first()->position->name}}</b></small>
                      {{--<small>Member since Nov. 2012</small>--}}
                    </p>


                    @endif
                  </li>

                 {{-- <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Opción 1</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Opción 2</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Opción 3</a>
                    </div>
                  </li>--}}
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{route('user/profile')}}" class="btn btn-primary btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">

                      <a href="{{ route('logout') }}" class="btn btn-danger btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>