<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $articulorevista->name ?? __('Revisar') . " " . __('Artículo en revista') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Artículo en revista</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Datospersona Id:</strong>
                            {{ $articulorevista->datospersona->nombre }} {{ $articulorevista->datospersona->apellidoPaterno }} {{ $articulorevista->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombrearticulo:</strong>
                            {{ $articulorevista->nombrearticulo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Anio:</strong>
                            {{ $articulorevista->anio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Organopublicacion:</strong>
                            {{ $articulorevista->organopublicacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Autor:</strong>
                            {{ $articulorevista->autor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Coautor:</strong>
                            {{ $articulorevista->coautor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $articulorevista->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado:</strong>
                            {{ $articulorevista->fecharegistro }}
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <a class="btn btn-primary btn-sm" href="{{ route('articulorevistas.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
