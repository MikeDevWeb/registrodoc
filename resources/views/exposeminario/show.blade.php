<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $exposeminario->name ?? __('Revisar') . " " . __('Expositor en Seminario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Expositor en Seminario</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $exposeminario->datospersona->nombre }} {{ $exposeminario->datospersona->apellidoPaterno }} {{ $exposeminario->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institución:</strong>
                            {{ $exposeminario->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo de evento:</strong>
                            {{ $exposeminario->tipoevento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tematica:</strong>
                            {{ $exposeminario->tematica }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha inicio:</strong>
                            {{ $exposeminario->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha fin:</strong>
                            {{ $exposeminario->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración:</strong>
                            {{ $exposeminario->duracion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $exposeminario->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20"></div>
                            <strong>Registrado:</strong>
                            {{ $exposeminario->fecharegistro }}
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <a class="btn-primary btn" href="{{ route('exposeminarios.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
