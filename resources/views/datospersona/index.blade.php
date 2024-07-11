<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

@extends('adminlte::page')

@section('template_title')
    Datos Personales A
@endsection

@section('content')


    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12  text-sm">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title text-sm">
                                {{ __('Datos personales A') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datospersonas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert-sm alert-success m-4 text-sm">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div id="tablita_wrapper">
                        <div class="card-body bg-white text-sm">
                            <div class="table-responsive  text-xs">
                                {{-- <div class="dt-buttons btn-group flex-wrap">
                                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="tablita" type="button">
                                        <span>Copy</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="tablita" type="button">
                                        <span>CSV</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="tablita" type="button">
                                        <span>Excel</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="tablita" type="button">
                                        <span>PDF</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="tablita" type="button">
                                        <span>Print</span>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                                            <span>Column visibility</span>
                                            <span class="dt-down-arrow"></span>
                                        </button>
                                    </div>
                                </div> --}}
                                <table id="tablita" class="table-sm table-striped table-bordered text-xs">
                                    <thead class="thead text-xs">
                                        <tr>
                                            <th>#</th>

                                        <th >Registrado</th>
                                        <th >Nombre</th>
                                        <th >Apellido Paterno</th>
                                        <th >Apellido Materno</th>
                                        <th >Profesion</th>
                                        <th >Fecha de Nacimiento</th>
                                        <th >Lugar de Nacimiento</th>
                                        <th >Edad</th>
                                        <th >Estado Civil</th>
                                        <th >Sexo</th>
                                        <th >Carnet de Identidad</th>
                                        <th >Ci Expedido</th>
                                        <th >Registrado por</th>
                                            <th hidden></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datospersonas as $datospersona)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                            <td >{{ $datospersona->fecharegistro }}</td>
                                            <td >{{ $datospersona->nombre }}</td>
                                            <td >{{ $datospersona->apellidoPaterno }}</td>
                                            <td >{{ $datospersona->apellidoMaterno }}</td>
                                            <td >{{ $datospersona->profesion }}</td>
                                            <td >{{ $datospersona->fechaNacimiento }}</td>
                                            <td >{{ $datospersona->lugarNacimiento }}</td>
                                            <td >{{ $datospersona->edad }}</td>
                                            <td >{{ $datospersona->estadoCivil }}</td>
                                            <td >{{ $datospersona->sexo }}</td>
                                            <td >{{ $datospersona->carnetidentidad }}</td>
                                            <td >{{ $datospersona->ciexpedido }}</td>
                                            <td hidden>{{ $datospersona->user_id }}</td>
                                            <td><p>{{ $datospersona->user->name }}</p></td>


                                                <td>
                                                    <form action="{{ route('datospersonas.destroy', $datospersona->id) }}" method="POST">
                                                        <div class="btn-group">

                                                            <a class="text-xs text-center btn-xs btn-primary margin" href="{{ route('datospersonas.show', $datospersona->id) }}"> <i class="fa fa-fw fa-eye"></i> {{ __('Revisar') }}</a>
                                                            <a class="btn-xs text-center btn-success" href="{{ route('datospersonas.edit', $datospersona->id) }}"> <i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-xs btn-danger btn-xs" onclick="event.preventDefault(); confirm('Confirma eliminar el registro?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
                {!! $datospersonas->withQueryString()->links() !!}
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
