<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $articulogeneral->name ?? __('Revisar') . " " . __('Artículo general') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            {{-- <div class="col-md-6 float-none mx-auto"> --}}
            <div class="col-md-12">
                <div class="card text-sm">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Revisar') }} Artículo general</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Docente:</strong>
                            {{ $articulogeneral->datospersona->nombre }} {{ $articulogeneral->datospersona->apellidoPaterno }} {{ $articulogeneral->datospersona->apellidoMaterno }}
                        </div>

                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Nombre del artículo:</strong>
                            {{ $articulogeneral->nombrearticulo }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Año:</strong>
                            {{ $articulogeneral->anio }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Órgano Publicación:</strong>
                            {{ $articulogeneral->organopublicacion }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Autor:</strong>
                            {{ $articulogeneral->autor }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Coautor:</strong>
                            {{ $articulogeneral->coautor }}
                        </div>
                        <div class="form-group mb-2 mb20 text-sm">
                            <strong>Registrado por:</strong>
                            {{ $articulogeneral->user->name }}
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <a class="btn-primary btn-sm" href="{{ route('articulogenerals.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
