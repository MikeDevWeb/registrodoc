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

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-sm">
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
										<td >{{ $datospersonb->datospersona_id }}</td>
                                        <td hidden>{{ $datospersona->user_id }}</td>
                                        <td><p>{{ $datospersonb->user->name }}</p></td>

                                            <td>
                                                <form action="{{ route('datospersonbs.destroy', $datospersonb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datospersonbs.show', $datospersonb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datospersonbs.edit', $datospersonb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Está de acuerdo con la eliminación?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
