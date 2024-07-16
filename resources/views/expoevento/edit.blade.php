<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Modificar') }} Expositor en Evento cientificos
@endsection

@section('content')
    <section class="content container-fluid text-sm">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default text-sm">
                    <div class="card-header text-sm">
                        <span class="card-title">{{ __('Modificar') }} Expositor en Evento cientificos</span>
                    </div>
                    <div class="card-body bg-white text-sm">
                        <form method="POST" action="{{ route('expoeventos.update', $expoevento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('expoevento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
