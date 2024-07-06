<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $datospersonb->name ?? __('Revisar') . " " . __('Datos Personales B') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Datos Personales B</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datospersonbs.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                                <div class="form-group mb-2 mb20">
                                    <strong>Docente:</strong>
                                    {{ $datospersonb->datospersona->nombre }} {{ $datospersonb->datospersona->apellidoPaterno }} {{ $datospersonb->datospersona->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dirección:</strong>
                                    {{ $datospersonb->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Teléfono:</strong>
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
                                    <strong>Idioma Nativo:</strong>
                                    {{ $datospersonb->idiomaNativo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de escritura:</strong>
                                    {{ $datospersonb->nivelidiomaescritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de lectura:</strong>
                                    {{ $datospersonb->nivelidiomalectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de habla:</strong>
                                    {{ $datospersonb->nivelidiomahabla }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma Secundario:</strong>
                                    {{ $datospersonb->idiomaSecundario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de escritura:</strong>
                                    {{ $datospersonb->nivelidiomaSecundarioescritura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de lectura:</strong>
                                    {{ $datospersonb->nivelidiomaSecundariolectura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel de habla:</strong>
                                    {{ $datospersonb->nivelidiomaSecundariohabla }}
                                </div>

                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado por:</strong>
                                    {{ $datospersonb->user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha de registro:</strong>
                                    {{ $datospersonb->fecharegistro }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
