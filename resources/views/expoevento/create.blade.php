<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Registrar') }} Expositor en Eventos cientificos
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 text-sm">

                <div class="card card-default text-sm">
                    <div class="card-header text-sm">
                        <span class="card-title text-sm">{{ __('Registrar') }} Expositor en Evento cientificos</span>
                    </div>
                    <div class="card-body bg-white text-sm">
                        <form method="POST" action="{{ route('expoeventos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('expoevento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
