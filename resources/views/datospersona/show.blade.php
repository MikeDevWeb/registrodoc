
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $datospersona->name ?? __('Show') . " " . __('Datospersona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Datos Personales A</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datospersonas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Registro:</strong>
                                    {{ $datospersona->fecharegistro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $datospersona->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Paterno:</strong>
                                    {{ $datospersona->apellidoPaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido Materno:</strong>
                                    {{ $datospersona->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Profesion:</strong>
                                    {{ $datospersona->profesion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha de Nacimiento:</strong>
                                    {{ $datospersona->fechaNacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar de Nacimiento:</strong>
                                    {{ $datospersona->lugarNacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $datospersona->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Civil:</strong>
                                    {{ $datospersona->estadoCivil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $datospersona->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Carnet de Identidad:</strong>
                                    {{ $datospersona->carnetidentidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Carnet Expedido en:</strong>
                                    {{ $datospersona->ciexpedido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado por:</strong>
                                    <input  class="col-md-4 form-control" type="text" value="{{ $datospersona->user->name }}" readonly>
                                    <p hidden>{{ $datospersona->user_id }}</p>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
