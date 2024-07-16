<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Modificar') }} Expositor en Conferencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default text-sm">
                    <div class="card-header text-sm">
                        <span class="card-title text-sm">{{ __('Modificar') }} Expositor en Conferencia</span>
                    </div>
                    <div class="card-body bg-white text-sm">
                        <form method="POST" action="{{ route('expoconferencias.update', $expoconferencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('expoconferencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
