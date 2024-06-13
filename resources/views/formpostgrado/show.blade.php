<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $formpostgrado->name ?? __('Show') . " " . __('Formpostgrado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formpostgrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('formpostgrados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

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
                                    <strong>Datospersona Id:</strong>
                                    {{ $formpostgrado->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $formpostgrado->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
