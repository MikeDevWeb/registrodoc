<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $textopublicado->name ?? __('Revisar') . " " . __('Textos Publicados') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Textos Publicados</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $textopublicado->datospersona->nombre }} {{ $textopublicado->datospersona->apellidoPaterno }} {{ $textopublicado->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Título:</strong>
                            {{ $textopublicado->titulo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Año:</strong>
                            {{ $textopublicado->anio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Autor:</strong>
                            {{ $textopublicado->autor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Coautor:</strong>
                            {{ $textopublicado->coautor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $textopublicado->user->name }}
                        </div>
                        <div class="form-group mb-2 mb20"></div>
                            <strong>Registrado:</strong>
                            {{ $textopublicado->fecharegistro }}
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('textopublicados.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
