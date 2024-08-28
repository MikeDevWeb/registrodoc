

@extends('adminlte::page')

@section('content')
<div class="container">
    <h4>Seleccionar Docente</h4>

    <table id="datatable" class="table table-striped">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Profesion</th>
                <th>Edad</th>
                <th>Carnet de Identidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datospersonas as $persona)
                <tr>
                    <td>{{ $persona->nombre }} {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</td>
                    <td>{{ $persona->profesion }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->carnetidentidad }}</td>
                    <td>
                        <a href="{{ route('datospersons.show', $persona->id) }}">Ver detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
            }
        });
    });
</script>
@endsection
