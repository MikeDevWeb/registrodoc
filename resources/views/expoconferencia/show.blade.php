<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $expoconferencia->name ?? __('Revisar') . " " . __('Expositor en conferencia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Expositor en conferencia</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Datospersona Id:</strong>
                            {{ $expoconferencia->datospersona->nombre }} {{ $expoconferencia->datospersona->apellidoPaterno }} {{ $expoconferencia->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institución:</strong>
                            {{ $expoconferencia->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo de evento:</strong>
                            {{ $expoconferencia->tipoevento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Temática:</strong>
                            {{ $expoconferencia->tematica }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha inicio:</strong>
                            {{ $expoconferencia->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha fin:</strong>
                            {{ $expoconferencia->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración:</strong>
                            {{ $expoconferencia->duracion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $expoconferencia->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado:</strong>
                            {{ $expoconferencia->fecharegistro }}
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('expoconferencias.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
