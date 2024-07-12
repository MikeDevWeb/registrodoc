<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Exposeminarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Exposeminarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('exposeminarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="text-center mx-auto alert-sm alert-success col-md-4 rounded">
                        <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Institucion</th>
									<th >Tipoevento</th>
									<th >Tematica</th>
									<th >Fechainicio</th>
									<th >Fechafin</th>
									<th >Duracion</th>
									<th >Datospersona Id</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exposeminarios as $exposeminario)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $exposeminario->institucion }}</td>
										<td >{{ $exposeminario->tipoevento }}</td>
										<td >{{ $exposeminario->tematica }}</td>
										<td >{{ $exposeminario->fechainicio }}</td>
										<td >{{ $exposeminario->fechafin }}</td>
										<td >{{ $exposeminario->duracion }}</td>
										<td >{{ $exposeminario->datospersona_id }}</td>
										<td >{{ $exposeminario->user_id }}</td>

                                            <td>
                                                <form action="{{ route('exposeminarios.destroy', $exposeminario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('exposeminarios.show', $exposeminario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('exposeminarios.edit', $exposeminario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $exposeminarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
