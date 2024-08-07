@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ESAM SUCRE 2</h1>
    <h6>AREA ACADEMICA</h6>

@stop

@section('content')
    <p>Bienvenid@ al panel del registro de docentes.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

@stop

@section('js')
    <script> console.log("Hola este es el dashboard!"); </script>
@stop
