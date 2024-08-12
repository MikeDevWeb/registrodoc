@extends('adminlte::page')
@section('content')
    <div class="header">
        <h1>Reporte del Registro {{ $data->id }}</h1>
    </div>
    <div class="content">
        <p><strong>Nombre:</strong> {{ $data->nombre }}</p>
        <p><strong>Apellido Paterno:</strong> {{ $data->apellidoPaterno }}</p>
        <p><strong>Apellido Materno:</strong> {{ $data->apellidoMaterno }}</p>
        <!-- Añadir más campos según la estructura de tu tabla -->
    </div>
    <div class="footer">
        <p>Generado el {{ now() }}</p>
    </div>
@endsection
@section('css')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .content {
        margin: 20px;
    }
    .footer {
        position: fixed;
        bottom: 10px;
        text-align: center;
        width: 100%;
    }
</style>
@endsection
