<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Funcadminacad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Funcadminacad</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('funcadminacads.update', $funcadminacad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('funcadminacad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection