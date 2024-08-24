@extends('adminlte::page')

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
    <button type="button" class="btn btn-secondary" onclick="window.print('')">Print</button>
    <button id="show-modal" class="btn btn-primary" data-toggle="modal" data-target="#recordModal">Mostrar modal</button>

    {{-- <a href="{{ route('record.modal', $selectedRecord->id) }}">Ver detalle</a> --}}
  </div>
</div>

@endsection
@section('css')
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@endsection
