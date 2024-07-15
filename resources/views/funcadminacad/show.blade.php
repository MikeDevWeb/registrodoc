<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $funcadminacad->name ?? __('Revisar') . " " . __('Función administrativa / academica') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Función administrativa / academica</span>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $funcadminacad->datospersona->nombre }} {{ $funcadminacad->datospersona->apellidoPaterno }} {{ $funcadminacad->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institución:</strong>
                            {{ $funcadminacad->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cargoempleado:</strong>
                            {{ $funcadminacad->cargoempleado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha inicio:</strong>
                            {{ $funcadminacad->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha fin:</strong>
                            {{ $funcadminacad->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración:</strong>
                            {{ $funcadminacad->duracion }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $funcadminacad->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado:</strong>
                            {{ $funcadminacad->fecharegistro }}
                        </div>
                        <div class="float-left">
                            <a class="btn-primary btn-sm" href="{{ route('funcadminacads.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
