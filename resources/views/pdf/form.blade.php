@extends('adminlte::page')
@section('content')
    <h2>Generar PDF</h2>
    <form action="{{ route('generate.pdf') }}" method="POST">
        @csrf

        <div>
            <label for="id">ID del Registro:</label>
            <input type="text" id="id" name="id" required>
        </div>

        <div>
            <button type="submit">Generar PDF</button>
        </div>
    </form>
@endsection
