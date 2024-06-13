<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $libropublicado->name ?? __('Show') . " " . __('Libropublicado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libropublicado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('libropublicados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $libropublicado->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anio:</strong>
                                    {{ $libropublicado->anio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Autor:</strong>
                                    {{ $libropublicado->autor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Coautor:</strong>
                                    {{ $libropublicado->coautor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $libropublicado->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $libropublicado->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
