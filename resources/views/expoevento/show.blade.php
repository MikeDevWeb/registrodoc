<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $expoevento->name ?? __('Revisar') . " " . __('Expositor en Evento Científico') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Expositor en Evento Científico</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institución:</strong>
                                    {{ $expoevento->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo de evento:</strong>
                                    {{ $expoevento->tipoevento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Temática:</strong>
                                    {{ $expoevento->tematica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha inicio:</strong>
                                    {{ $expoevento->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $expoevento->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duración:</strong>
                                    {{ $expoevento->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Docente:</strong>
                                    {{ $expoevento->datospersona->nombre }} {{ $expoevento->datospersona->apellidoPaterno }} {{ $expoevento->datospersona->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado por:</strong>
                                    {{ $expoevento->user->name }}
                                </div>
                                <div class="float-left">
                                    <a class="btn btn-primary btn-sm" href="{{ route('expoeventos.index') }}"> {{ __('Volver') }}</a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
