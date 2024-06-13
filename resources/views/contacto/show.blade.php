<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $contacto->name ?? __('Show') . " " . __('Contacto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('contactos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudadresidencia:</strong>
                                    {{ $contacto->ciudadresidencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $contacto->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefonofijo:</strong>
                                    {{ $contacto->telefonofijo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $contacto->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo:</strong>
                                    {{ $contacto->correo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Facebook:</strong>
                                    {{ $contacto->facebook }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Twitter:</strong>
                                    {{ $contacto->twitter }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linkedin:</strong>
                                    {{ $contacto->linkedin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instagram:</strong>
                                    {{ $contacto->instagram }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telegram:</strong>
                                    {{ $contacto->telegram }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Whatsapp:</strong>
                                    {{ $contacto->whatsapp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Datospersona Id:</strong>
                                    {{ $contacto->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $contacto->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
