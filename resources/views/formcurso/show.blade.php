<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $formcurso->name ?? __('Show') . " " . __('Formcurso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formcurso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('formcursos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion:</strong>
                                    {{ $formcurso->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $formcurso->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombreevento:</strong>
                                    {{ $formcurso->nombreevento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $formcurso->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $formcurso->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion:</strong>
                                    {{ $formcurso->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $formcurso->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $formcurso->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
