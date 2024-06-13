<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $datospersonb->name ?? __('Show') . " " . __('Datospersonb') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Datospersonb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datospersonbs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $datospersonb->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $datospersonb->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $datospersonb->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo:</strong>
                                    {{ $datospersonb->correo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idiomanativo:</strong>
                                    {{ $datospersonb->idiomaNativo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomaescritura:</strong>
                                    {{ $datospersonb->nivelidiomaescritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomalectura:</strong>
                                    {{ $datospersonb->nivelidiomalectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomahabla:</strong>
                                    {{ $datospersonb->nivelidiomahabla }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idiomasecundario:</strong>
                                    {{ $datospersonb->idiomaSecundario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomasecundarioescritura:</strong>
                                    {{ $datospersonb->nivelidiomaSecundarioescritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomasecundariolectura:</strong>
                                    {{ $datospersonb->nivelidiomaSecundariolectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivelidiomasecundariohabla:</strong>
                                    {{ $datospersonb->nivelidiomaSecundariohabla }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $datospersonb->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $datospersonb->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
