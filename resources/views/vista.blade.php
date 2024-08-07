@extends('adminlte::page')
@section('content')
<h1>Reporte de {{ $datosPersona->nombre }}</h1>
    <!-- Muestra los datos de la tabla principal -->
    <p><strong>Nombre:</strong> {{ $datosPersona->nombre }}</p>
    <!-- Muestra los datos de las tablas relacionadas -->
    @foreach($relatedData as $table => $data)
        <h2>Datos de {{ ucfirst($table) }}</h2>
        <table>
            <thead>
                <tr>
                    <!-- Define los encabezados según los datos -->
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <!-- Muestra los datos de cada fila -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
@endsection
