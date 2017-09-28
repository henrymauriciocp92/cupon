
@extends('...layouts.app')
@push('scripts')
 <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background: #e3e4e5 !important;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>

@endpush
@section('content')
 <div class="content">
                <div>
                    <br/>
                        <div>
                                           <h1><i class="fa fa-search" aria-hidden="true"></i> Finder</h1>
                        </div>
                <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-4 " style="padding:1em 0;">
                    <form class="form-search" method="POST" action="{{ route('results') }}">
                                                               {{ csrf_field() }}
                    <div class="input-group">

                      <input id="search_text" type="text" name="search_text" value="{{ old('search_text') }}" class="form-control input-lg" placeholder="Buscar Cupon..." required autofocus >
                      <span class="input-group-btn ">
                        <button class="btn btn-lg btn-primary" type="submit">Buscar ahora!</button>
                      </span>

                    </div><!-- /input-group -->
                    </form>

</div>


                </div><!-- /.row -->



</div>

<h5>Sistema de Servicios al Donante</h5>
               {{-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>--}}
            </div>
@endsection
