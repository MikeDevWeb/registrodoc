<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $expdocente->name ?? __('Revisar') . " " . __('Experiencia en docencia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Experiencia en docencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('expdocentes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white text-sm">
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Datospersona Id:</strong>
                            {{ $expdocente->datospersona->nombre }} {{ $expdocente->datospersona->apellidoPaterno }} {{ $expdocente->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Institucion:</strong>
                            {{ $expdocente->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Carrera:</strong>
                            {{ $expdocente->carrera }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Fecha inicio:</strong>
                            {{ $expdocente->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Fecha fin:</strong>
                            {{ $expdocente->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Duración:</strong>
                            {{ $expdocente->duracion }}
                        </div>

                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Registrado por:</strong>
                            {{ $expdocente->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
