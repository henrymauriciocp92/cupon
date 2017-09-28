@extends('...layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a class="btn btn-primary pull-right" href="{{route('images.download',[$cupon->id])}}"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
                <a href="/" class="btn btn-default "><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                </div>
                  <div class="panel-body">
                 <h3>Cupon</h3>
                <p>
                    <b>ID: </b>{{$cupon->id}}    |
                    <b>Identificación: </b>{{$cupon->identification}}   |
                    <b>Caja: </b>{{$cupon->box}}   |
                    <b>Carpeta: </b>{{$cupon->folder}}</p>
                    <img style="width:100%; border:3px dashed grey; padding:10px;" src="{{URL::asset('tmp/'.$file_name )}}"/>
                </div>
                <div class="panel-footer">

                <a href="/" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
