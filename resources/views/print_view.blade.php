@extends('print_layout')

@section('content')

<div class="container">
  <h1>Información del registro</h1>

  <div class="row">
    <div class="col-md-12">
      <p>Nombre: {{ $selectedRecord->nombre }}</p>
      <p>Apellido Paterno: {{ $selectedRecord->apellidoPaterno }}</p>
      <p>Apellido Materno: {{ $selectedRecord->apellidoMaterno }}</p>
      <!-- Add more fields as needed -->
    </div>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" onclick="window.print()">Print</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>

@endsection
