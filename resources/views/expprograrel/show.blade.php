<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $expprograrel->name ?? __('Revisar') . " " . __('Experiencia en programas relacionados') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Experiencia en programas relacionados</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $expprograrel->datospersona->nombre }} {{ $expprograrel->datospersona->apellidoPaterno }} {{ $expprograrel->datospersona->apellidoMaterno }}
                        </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Institución:</strong>
                                    {{ $expprograrel->institucion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cargo o actividad:</strong>
                                    {{ $expprograrel->cargoactividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha inicio:</strong>
                                    {{ $expprograrel->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha fin:</strong>
                                    {{ $expprograrel->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duración:</strong>
                                    {{ $expprograrel->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrado por:</strong>
                                    {{ $expprograrel->user->name }}
                                </div>
                    </div>
                </div><div class="float-left">
                    <a class="btn btn-primary btn-sm" href="{{ route('expprograrels.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
