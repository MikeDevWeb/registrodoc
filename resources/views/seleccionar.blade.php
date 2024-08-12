
@section('content')
<!-- Modal -->
<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="printModalLabel">Generar PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí puedes agregar un formulario para seleccionar opciones o ingresar parámetros -->
                <form id="printForm" method="POST" action="{{ route('generate.pdf') }}">
                    @csrf
                    <input type="hidden" name="id" id="recordId">
                    <div class="form-group">
                        <label for="table">Selecciona las tablas relacionadas:</label>
                        <select name="tables[]" id="tables" class="form-control" multiple>
                            <!-- Agrega las opciones de tablas aquí -->
                            <option value="expdocentes">Expdocentes</option>
                            <option value="expoconferencias">Expoconferencias</option>
                            <!-- Agrega más opciones según tus tablas -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Generar PDF</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')

@endsection
