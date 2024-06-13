<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $trabproyinvconcluido->name ?? __('Show') . " " . __('Trabproyinvconcluido') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Trabproyinvconcluido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('trabproyinvconcluidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Trabajoproyecto:</strong>
                                    {{ $trabproyinvconcluido->trabajoproyecto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $trabproyinvconcluido->fechainicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $trabproyinvconcluido->fechafin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duracion:</strong>
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
                                    <strong>Datospersona Id:</strong>
                                    {{ $trabproyinvconcluido->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $trabproyinvconcluido->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
