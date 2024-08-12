{{-- @extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Seleccionar Docente</h2>
    <form action="{{ route('generarPDF') }}" method="POST">
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
@endsection --}}


@extends('adminlte::page')

@section('title', 'PDF DE DOCENTE')

@section('content_header')
    <h1>Seleccionar Persona</h1>
@stop

@section('content')
    <form action="{{ route('datospersonas.show') }}" method="GET" id="selectForm">
        @csrf
        <div class="form-group">
            <label for="datospersona">Seleccione una Persona:</label>
            <select class="form-control" id="datospersona" name="id" required>
                <option value="">Seleccione</option>
                @foreach($datospersonas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Hoja de Vida</button>
    </form>

    <button id="generatePDF" class="btn btn-success mt-3">Generar PDF</button>

    <!-- Incluimos el script de jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('generatePDF').addEventListener('click', function () {
            const { jsPDF } = window.jspdf;
            let doc = new jsPDF();

            // Aquí puedes agregar más contenido al PDF
            doc.text("Hoja de Vida", 10, 10);

            // Generar el PDF
            doc.save("hoja_de_vida.pdf");
        });
    </script>
@stop
