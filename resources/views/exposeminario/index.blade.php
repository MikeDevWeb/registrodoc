<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Expositor en Seminario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-sm">
                    <div class="card-header text-sm">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title text-sm">
                                {{ __('Expositor en seminario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('exposeminarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="text-center mx-auto alert-sm alert-success col-md-4 rounded">
                        <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div id="tablita_wrapper">
                        <div class="card-body bg-white">
                            <div class="table-responsive">
                                <table id="tablita" class="table table-striped table-hover text-xs w-100">
                                    <thead class="thead">
                                        <tr>
                                            <th>#</th>
                                            <th >Docente</th>
                                            <th >Institución</th>
                                            <th >Tipo/ Evento</th>
                                            <th >Temática</th>
                                            <th >Fecha inicio</th>
                                            <th >Fecha fin</th>
                                            <th >Duración</th>
                                            <th >Registrado por</th>
                                            <th >Registrado</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($exposeminarios as $exposeminario)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td >{{ $exposeminario->datospersona->nombre }} {{ $exposeminario->datospersona->apellidoPaterno }} {{ $exposeminario->datospersona->apellidoMaterno }}</td>
                                                <td >{{ $exposeminario->institucion }}</td>
                                                <td >{{ $exposeminario->tipoevento }}</td>
                                                <td >{{ $exposeminario->tematica }}</td>
                                                <td >{{ $exposeminario->fechainicio }}</td>
                                                <td >{{ $exposeminario->fechafin }}</td>
                                                <td >{{ $exposeminario->duracion }}</td>
                                                <td >{{ $exposeminario->user->name }}</td>
                                                <td >{{ $exposeminario->fecharegistro }}</td>

                                                <td>
                                                    <form action="{{ route('exposeminarios.destroy', $exposeminario->id) }}" method="POST">
                                                        <div class="btn-group">
                                                            <a class="btn-xs btn-primary text-center" href="{{ route('exposeminarios.show', $exposeminario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Revisar') }}</a>
                                                            <a class="btn-xs btn-success text-center" href="{{ route('exposeminarios.edit', $exposeminario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn-danger btn-xs" onclick="event.preventDefault(); confirm('Confirma eliminar el registro?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $exposeminarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@endsection
@section('js')
    {{-- <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>let table = new DataTable('#tablita');</script> --}}
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
{{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#tablita").DataTable({
      "dom": 'Bfrtip',
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "paging": true,
      "responsive": true,
      "language": {
        location: "es-ES",
        url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
        },
        "scrollX": true,
    }).buttons().container().appendTo('#tablita_wrapper .col-md-6:eq(0)');
  });
</script>

@endsection
