@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Seleccionar Docente</h2>
    <form action="{{ route('generar-pdf') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="datospersona_id">Seleccione un Docente:</label>
            <select name="datospersona_id" id="datospersona_id" class="form-control" required>
                @foreach($docentes as $docente)
                    <option value="{{ $docente->id }}">
                        {{ $docente->nombre }} {{ $docente->apellidoPaterno }} {{ $docente->apellidoMaterno }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Generar PDF</button>
    </form>
</div>
@endsection
