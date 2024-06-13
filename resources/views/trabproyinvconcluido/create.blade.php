<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Trabproyinvconcluido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Trabproyinvconcluido</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('trabproyinvconcluidos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('trabproyinvconcluido.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
