<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $tutortribunal->name ?? __('Revisar') . " " . __('Experiencia Tutor/tribunal') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Experiencia Tutor/tribunal</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $tutortribunal->datospersona->nombre }} {{ $tutortribunal->datospersona->apellidoPaterno }} {{ $tutortribunal->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institucion:</strong>
                            {{ $tutortribunal->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregradopostgrado:</strong>
                            {{ $tutortribunal->pregradopostgrado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nivelprograma:</strong>
                            {{ $tutortribunal->nivelprograma }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tutorevalutribu:</strong>
                            {{ $tutortribunal->tutorevalutribu }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tituloinvestigacion:</strong>
                            {{ $tutortribunal->tituloinvestigacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $tutortribunal->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20"></div>
                            <strong>Registrado:</strong>
                            {{ $tutortribunal->fecharegistro }}
                        </div>

                    </div>
                    <div class="float-left">
                        <a class="btn-primary btn-sm" href="{{ route('tutortribunals.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
