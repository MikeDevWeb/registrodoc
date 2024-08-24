@extends('print_view')

@section('content')

<div class="modal fade" id="recordModal" tabindex="-1" role="dialog" aria-labelledby="recordModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recordModalLabel">Detalles del Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Volver">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your table code here -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Profesión</th>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de Nacimiento</th>
                <th>Edad</th>
                <th>Estado Civil</th>
                <th>Sexo</th>
                <th>Carnet de Identidad</th>
                <th>Expedido</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $selectedRecord->nombre }}</td>
                <td>{{ $selectedRecord->apellidoPaterno }}</td>
                <td>{{ $selectedRecord->apellidoMaterno }}</td>
                <td>{{ $selectedRecord->profesion }}</td>
                <td>{{ $selectedRecord->fechaNacimiento }}</td>
                <td>{{ $selectedRecord->lugarNacimiento }}</td>
                <td>{{ $selectedRecord->edad }}</td>
                <td>{{ $selectedRecord->estadoCivil }}</td>
                <td>{{ $selectedRecord->sexo }}</td>
                <td>{{ $selectedRecord->carnetidentidad }}</td>
                <td>{{ $selectedRecord->ciexpedido }}</td>
              </tr>
            </tbody>
            <thead>
                <tr>
                  <th>Idioma Nativo</th>
                  <th>Nivel Habla</th>
                  <th>Nivel Escritura</th>
                  <th>Nivel Lectura</th>
                  <th>Idioma Secundario</th>
                  <th>Nivel Habla</th>
                  <th>Nivel Escritura</th>
                  <th>Nivel Lectura</th>
                </tr>
              </thead>
              @foreach ($relatedModels['datospersonb'] as $datospersonb)
              <tbody>
                <tr>
                  <td >{{ $datospersonb->idiomaNativo }}</td>
                  <td >{{ $datospersonb->nivelidiomaescritura }}</td>
                  <td >{{ $datospersonb->nivelidiomalectura }}</td>
                  <td >{{ $datospersonb->nivelidiomahabla }}</td>
                  <td >{{ $datospersonb->idiomaSecundario }}</td>
                  <td >{{ $datospersonb->nivelidiomaSecundarioescritura }}</td>
                  <td >{{ $datospersonb->nivelidiomaSecundariolectura }}</td>
                  <td >{{ $datospersonb->nivelidiomaSecundariohabla }}</td>
                </tr>
              </tbody>
              @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@section('script')
<script>
    $('#show-modal').on('click', function() {
      $('#recordModal').modal('show');
    });
</script>
@endsection
@section('css')
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

@endsection
