@extends('adminlte::page')

@section('content')

<h1>Seleccione un registro</h1>

<div class="row">
  <div class="col-md-12">
    <select class="form-control" id="datospersona_id">
      @foreach ($allRecords as $record)
      <option value="{{ $record->id }}">{{ $record->nombre }} {{ $record->apellidoPaterno }} {{ $record->apellidoMaterno }}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="submitForm()">Select</button>
</div>

<script>
function submitForm() {
  var selectedId = document.getElementById('datospersona_id').value;
  window.location.href = "{{ route('record.show', ':id') }}".replace(':id', selectedId);
}
</script>

@endsection
