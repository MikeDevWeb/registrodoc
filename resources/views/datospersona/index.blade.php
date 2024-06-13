<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

@extends('adminlte::page')

@section('template_title')
    Datos Personales A
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
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
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>Código</th>

									<th >Fecha de Registro</th>
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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datospersonas.show', $datospersona->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datospersonas.edit', $datospersona->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Esta de acuerdo con eliminar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datospersonas->withQueryString()->links() !!}
            </div>
        </div>
    </div>




@endsection
