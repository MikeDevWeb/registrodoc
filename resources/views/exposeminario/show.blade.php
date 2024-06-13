<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $exposeminario->name ?? __('Show') . " " . __('Exposeminario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Exposeminario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('exposeminarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion:</strong>
                                    {{ $exposeminario->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipoevento:</strong>
                                    {{ $exposeminario->tipoevento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tematica:</strong>
                                    {{ $exposeminario->tematica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $exposeminario->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $exposeminario->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion:</strong>
                                    {{ $exposeminario->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $exposeminario->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $exposeminario->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
