<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $reconocimiento->name ?? __('Show') . " " . __('Reconocimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reconocimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reconocimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Reconocimiento:</strong>
                                    {{ $reconocimiento->reconocimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion:</strong>
                                    {{ $reconocimiento->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anio:</strong>
                                    {{ $reconocimiento->anio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actividad:</strong>
                                    {{ $reconocimiento->actividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $reconocimiento->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $reconocimiento->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
