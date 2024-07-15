<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $libropublicado->name ?? __('Revisar') . " " . __('Libros publicados') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Libros publicados</span>
                        </div>

                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Docente:</strong>
                            {{ $libropublicado->datospersona->nombre }} {{ $libropublicado->datospersona->apellidoPaterno }} {{ $libropublicado->datospersona->apellidoMaterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Título:</strong>
                            {{ $libropublicado->titulo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Año:</strong>
                            {{ $libropublicado->anio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Autor:</strong>
                            {{ $libropublicado->autor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Coautor:</strong>
                            {{ $libropublicado->coautor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado:</strong>
                            {{ $libropublicado->fecharegistro }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Registrado por:</strong>
                            {{ $libropublicado->user->name }}
                        </div>

                    </div>
                </div>
                <div class="float-left">
                    <a class="btn btn-primary btn-sm" href="{{ route('libropublicados.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
