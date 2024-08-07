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
@section('css')

@endsection
@section('js')
<script>
    // En tu archivo JS o dentro de un script en tu Blade
    $('#printModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Botón que activó el modal
        var recordId = button.data('id'); // Extrae el ID del botón
        var modal = $(this);
        modal.find('#recordId').val(recordId);
    });
</script>
