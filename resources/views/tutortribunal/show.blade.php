<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $tutortribunal->name ?? __('Show') . " " . __('Tutortribunal') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tutortribunal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tutortribunals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

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
                                    <strong>Datospersona Id:</strong>
                                    {{ $tutortribunal->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $tutortribunal->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
