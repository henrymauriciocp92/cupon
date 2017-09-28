@extends('layout.app')

@section('title')
<title>SOSEvaluation| Dashboard</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Panel de control Colaborador</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        {{--<li class="active">Dashboard</li>--}}
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    @include('elements.alert')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Historial de Encuestas</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach ($evaluations as $evaluation)
                        @if($evaluation->weighing->status)
                        <tr>
                            <td>{{$evaluation->name}}</td>
                            {{--<td></td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-success">Approved</span></td>--}}
                            <td><a href="{{route('performance/evaluate', $evaluation->id)}}" class="btn btn-block btn-info btn-xs">Evaluar</a></td>
                        </tr>
                        @endif
                        @endforeach


                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Encuestas enviadas</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>

                            <th>Usuario</th>
                            <th>Evaluación</th>
                            <th>Estado</th>


                        </tr>
                        @foreach ($performances as $performance)
                        <tr>

                            <td>{{$performance->user->full_name}}</td>
                            <td>{{$performance->evaluation->name}}</td>
                            <td>
                                @if($performance->process=='creado')
                                <span class="label label-warning"><i class="fa fa-fw fa-save"></i>  {{$performance->process}}</span>
                                @endif
                                @if($performance->process=='enviado')
                                <span class="label label-success"><i class="fa fa-fw fa-send"></i> {{$performance->process}}</span>
                                @endif
                                @if($performance->process=='validado')
                                <span class="label label-info"><i class="fa fa-fw fa-check-square"></i> {{$performance->process}}</span>
                                @endif
                            </td>


                        </tr>
                        @endforeach

                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class="col-md-6">
            @include('elements.info')
        </div><!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->

    </div>
</section>
@endsection