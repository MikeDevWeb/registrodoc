<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $trabproyinvconcluido->name ?? __('Revisar') . " " . __('Trabajos/Proyectos de Investigación concluidos') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Trabajos/Proyectos de Investigación concluidos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('trabproyinvconcluidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $trabproyinvconcluido->datospersona->nombre }} {{ $trabproyinvconcluido->datospersona->apellidoPaterno }} {{ $trabproyinvconcluido->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo de investigación:</strong>
                            {{ $trabproyinvconcluido->trabajoproyecto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha inicio:</strong>
                            {{ $trabproyinvconcluido->fechainicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha fin:</strong>
                            {{ $trabproyinvconcluido->fechafin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración:</strong>
                            {{ $trabproyinvconcluido->duracion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Autor:</strong>
                            {{ $trabproyinvconcluido->autor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Coautor:</strong>
                            {{ $trabproyinvconcluido->coautor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $trabproyinvconcluido->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20"></div>
                            <strong>Registrado:</strong>
                            {{ $trabproyinvconcluido->fecharegistro }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
