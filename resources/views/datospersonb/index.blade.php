<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Datos personales B
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos personales B') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datospersonbs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white text-sm">
                        <div class="table-responsive">
                            <table id="tablita" class="table-sm table-striped table-hover text-xs">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Direccion</th>
									<th >Telefono</th>
									<th >Celular</th>
									<th >Correo</th>
									<th >Idioma Nativo</th>
									<th >Escritura</th>
									<th >Lectura</th>
									<th >Habla</th>
									<th >Idioma Secundario</th>
									<th >Escritura</th>
									<th >Lectura</th>
									<th >Habla</th>
									<th >Docente </th>
									<th >Registrado por</th>
                                    <th >Registrado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datospersonbs as $datospersonb)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $datospersonb->direccion }}</td>
										<td >{{ $datospersonb->telefono }}</td>
										<td >{{ $datospersonb->celular }}</td>
										<td >{{ $datospersonb->correo }}</td>
										<td >{{ $datospersonb->idiomaNativo }}</td>
										<td >{{ $datospersonb->nivelidiomaescritura }}</td>
										<td >{{ $datospersonb->nivelidiomalectura }}</td>
										<td >{{ $datospersonb->nivelidiomahabla }}</td>
										<td >{{ $datospersonb->idiomaSecundario }}</td>
										<td >{{ $datospersonb->nivelidiomaSecundarioescritura }}</td>
										<td >{{ $datospersonb->nivelidiomaSecundariolectura }}</td>
										<td >{{ $datospersonb->nivelidiomaSecundariohabla }}</td>
										<td >{{ $datospersonb->datospersona->nombre }} {{ $datospersonb->datospersona->apellidoPaterno }} {{ $datospersonb->datospersona->apellidoMaterno }}</td>
                                        <td hidden>{{ $datospersonb->datospersona->user_id }}</td>
                                        <td><p>{{ $datospersonb->datospersona->user->name }}</p></td>
                                        <td>{{ $datospersonb->fecharegistro }}</td>

                                            <td>
                                                <form action="{{ route('datospersonbs.destroy', $datospersonb->id) }}" method="POST">
                                                    <div class="btn-group">

                                                    <a class="btn-xs text-center btn-primary " href="{{ route('datospersonbs.show', $datospersonb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Revisar') }}</a>
                                                    <a class="btn-xs text-center btn-success" href="{{ route('datospersonbs.edit', $datospersonb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-danger btn-xs" onclick="event.preventDefault(); confirm('Está de acuerdo con la eliminación?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
                {!! $datospersonbs->withQueryString()->links() !!}
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
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#tablita").DataTable({
    "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "responsive": true,
      "language": {
        url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
        },
      "autoWidth": true,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
