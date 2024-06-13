<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Formprofesional
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Formprofesional</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('formprofesionals.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('formprofesional.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
