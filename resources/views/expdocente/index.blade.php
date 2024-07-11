<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Expdocentes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expdocentes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('expdocentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert-sm alert-success m-4">
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
									<th >Carrera</th>
									<th >Fechainicio</th>
									<th >Fechafin</th>
									<th >Duracion</th>
									<th >Datospersona Id</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expdocentes as $expdocente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $expdocente->institucion }}</td>
										<td >{{ $expdocente->carrera }}</td>
										<td >{{ $expdocente->fechainicio }}</td>
										<td >{{ $expdocente->fechafin }}</td>
										<td >{{ $expdocente->duracion }}</td>
										<td >{{ $expdocente->datospersona_id }}</td>
										<td >{{ $expdocente->user_id }}</td>

                                            <td>
                                                <form action="{{ route('expdocentes.destroy', $expdocente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('expdocentes.show', $expdocente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('expdocentes.edit', $expdocente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $expdocentes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
