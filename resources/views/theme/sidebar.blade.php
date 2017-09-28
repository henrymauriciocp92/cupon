 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="active treeview">
        <a href="/dashboard">
          <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
        </a>
      </li>

      @if(Auth::user()->isAdmin())
      <li class="active treeview">
        <a href="{{route('performances')}}">
          <i class="fa fa-fw fa-pencil-square-o"></i> <span>Evaluaciones de Desempeño</span>
        </a>
      </li>



      <li class="active treeview">
        <a href="#">
          <i class="fa fa-fw fa-archive"></i> <span>Gestión Humana</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li >
            <a href="{{route('profiles')}}">
              <i class="fa fa-fw fa-black-tie"></i> <span>Perfiles</span>
            </a>
          </a>
        </li>
        <li>
          <a href="{{route('positions')}}">
            <i class="fa fa-fw fa-group"></i> <span>Cargos</span>
          </a>
        </li>
        <li >
          <a href="{{route('assignments')}}">
            @include('icon.assignments',['title'=>'Asignaciones'])
          </a>
        </li>
        <li >
          <a href="{{route('evaluates')}}">
            @include('icon.evaluate',['title'=>'Evaluadores'])
          </a>
        </li>

        <li >
          <a href="{{route('users')}}">
            <i class="fa fa-fw fa-male"></i> <span>Usuarios</span>
          </a>
        </li>

      </ul>
    </li>
    <li class="active treeview">
      <a href="#">
        <i class="fa fa-gears"></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li >
          <a href="{{route('weighings')}}">
          @include('icon.weighing',['title'=>'Ponderaciones'])

          </a>
        </li>
        {{--<li><a href="{{route('weights')}}">--}}
          {{--<i class="fa fa-fw fa-balance-scale"></i> <span>Peso</span>--}}
        {{--</a></li>--}}
        <li >
          <a href="{{route('offices')}}">
            @include('icon.office',['title'=>'Oficinas'])
          </a>
        </li>
        {{--<li >
          <a href="{{route('evaluations')}}">
            @include('icon.evaluation',['title'=>'Evaluaciones'])
          </a>
        </li>--}}
      </ul>
    </li>


    @else (Auth::user()->isUser())
    <li class="active treeview">
      <a href="{{route('performance/record')}}">
        <i class="fa fa-fw fa-pencil-square-o"></i> <span>Evaluaciones de Desempeño</span>
      </a>
    </li>



    @endif

  </ul>
</section>
<!-- /.sidebar -->
</aside>