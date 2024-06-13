<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ $textopublicado->name ?? __('Show') . " " . __('Textopublicado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Textopublicado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('textopublicados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $textopublicado->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anio:</strong>
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
                                    <strong>Datospersona Id:</strong>
                                    {{ $textopublicado->datospersona_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $textopublicado->user_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
