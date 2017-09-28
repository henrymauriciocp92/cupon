@extends('...layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Resultados de la búsqueda</div>
                @include('alerts')
                <table class="table table-condensed">
                <thead>
                <tr>
                <th>#ID</th>
                <th>Identificación</th>
                <th>Caja</th>
                <th>Carpeta</th>
                <th>Archivo</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($cupons as $cupon)
                <tr>
                    <th scope=row>{{$cupon->id}} </th>
                    <td>{{$cupon->identification}}</td>
                    <td>{{$cupon->box}}</td>
                    <td>{{$cupon->folder}}</td>
                    <td>{{$cupon->file_name}}</td>
                    <td><!-- Single button -->
                        <div class="btn-group">
                          <a class="btn btn-info btn-xs" href="{{route('images.download',[$cupon->id])}}"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
                        </div>
                        <div class="btn-group">
                        <a class="btn btn-primary btn-xs" href="{{ route('cupon.view',[$cupon->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
                        </div>
                        </td>
                    </tr>
                <tr>


                @endforeach
                </tbody>
                </table>

                <div>
                {{ $cupons->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
