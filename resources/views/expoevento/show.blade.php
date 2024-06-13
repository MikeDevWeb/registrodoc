<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $expoevento->name ?? __('Show') . " " . __('Expoevento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Expoevento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('expoeventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institucion:</strong>
                                    {{ $expoevento->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipoevento:</strong>
                                    {{ $expoevento->tipoevento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tematica:</strong>
                                    {{ $expoevento->tematica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $expoevento->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $expoevento->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion:</strong>
                                    {{ $expoevento->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $expoevento->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $expoevento->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
