@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Seleccionar Persona</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datospersonas as $persona)
                <tr>
                    <td>{{ $persona->nombre }} {{ $persona->apellidopaterno }} {{ $persona->apellidomaterno }}</td>
                    <td>
                        <a href="{{ route('datospersonas.show', ['id' => $persona->id]) }}">Ver detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
