@extends('print_view')
@yield('content')
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
                <td>{{ $record->nombre }}</td>
                <td>{{ $record->apellidoPaterno }}</td>
                <td>{{ $record->apellidoMaterno }}</td>
                <td>{{ $record->profesion }}</td>
                <td>{{ $record->fechaNacimiento }}</td>
                <td>{{ $record->lugarNacimiento }}</td>
                <td>{{ $record->edad }}</td>
                <td>{{ $record->estadoCivil }}</td>
                <td>{{ $record->sexo }}</td>
                <td>{{ $record->carnetidentidad }}</td>
                <td>{{ $record->ciexpedido }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    $('#show-modal').on('click', function() {
      $('#recordModal').modal('show');
    });
</script>
