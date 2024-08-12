@extends('adminlte::page')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#printModal">
  Imprimir
</button>

<!-- Modal -->
<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="printModalLabel">Imprimir Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="datospersona_id">Seleccione un registro:</label>
            <select class="form-control" id="datospersona_id">
              @foreach ($datospersonas as $datospersona)
              <option value="{{ $datospersona->id }}">{{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</option>
              @endforeach
            </select>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <!-- Añade más encabezados de columna según tus necesidades -->
              </tr>
            </thead>
            <tbody>
              @foreach ($datospersonas as $datospersona)
              <tr>
                <td>{{ $datospersona->id }}</td>
                <td>{{ $datospersona->nombre }}</td>
                <td>{{ $datospersona->apellidoPaterno }}</td>
                <td>{{ $datospersona->apellidoMaterno }}</td>
                <!-- Añade más celdas de datos según tus necesidades -->
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="print()">Imprimir</button>
      </div>
    </div>
  </div>
</div>

@endsection
