<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $formprofesional->name ?? __('Show') . " " . __('Formprofesional') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formprofesional</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('formprofesionals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Universidad:</strong>
                                    {{ $formprofesional->universidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anio:</strong>
                                    {{ $formprofesional->anio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gradoacademico:</strong>
                                    {{ $formprofesional->gradoacademico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulodiploma:</strong>
                                    {{ $formprofesional->titulodiploma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $formprofesional->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $formprofesional->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
