@section('css')
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@endsection
@extends('adminlte::page')

@section('template_title')
    {{ $formcurso->name ?? __('Revisar') . " " . __('Formación de Curso/Seminario/Otro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 text-sm">
                <div class="card">
                    <div class="card-header text-sm" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Formación de Curso/Seminario/Otro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('formcursos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white text-sm">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $formcurso->datospersona->nombre }} {{ $formcurso->datospersona->apellidoPaterno }} {{ $formcurso->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institución:</strong>
                            {{ $formcurso->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo:</strong>
                            {{ $formcurso->tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre de Evento:</strong>
                            {{ $formcurso->nombreevento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha inicio:</strong>
                            {{ $formcurso->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha fin:</strong>
                            {{ $formcurso->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración:</strong>
                            {{ $formcurso->duracion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $formcurso->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado:</strong>
                            {{ $formcurso->fecharegistro }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
