<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $formpostgrado->name ?? __('Revisar') . " " . __('Formación de Postgrado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Formación de Postgrado</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $formpostgrado->datospersona->nombre }} {{ $formpostgrado->datospersona->apellidoPaterno }} {{ $formpostgrado->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institucionuniversidad:</strong>
                            {{ $formpostgrado->institucionUniversidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Anio:</strong>
                            {{ $formpostgrado->anio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Gradoacademico:</strong>
                            {{ $formpostgrado->gradoacademico }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Titulodiploma:</strong>
                            {{ $formpostgrado->titulodiploma }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>User Id:</strong>
                            {{ $formpostgrado->user->name }}
                        </div>
                        <div class="float-left">
                            <a class="btn-primary btn-sm" href="{{ route('formpostgrados.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
