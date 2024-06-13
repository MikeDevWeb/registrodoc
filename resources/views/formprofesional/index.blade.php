<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Formprofesionals
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Formprofesionals') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('formprofesionals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Universidad</th>
									<th >Anio</th>
									<th >Gradoacademico</th>
									<th >Titulodiploma</th>
									<th >Datospersona Id</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formprofesionals as $formprofesional)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $formprofesional->universidad }}</td>
										<td >{{ $formprofesional->anio }}</td>
										<td >{{ $formprofesional->gradoacademico }}</td>
										<td >{{ $formprofesional->titulodiploma }}</td>
										<td >{{ $formprofesional->datospersona_id }}</td>
										<td >{{ $formprofesional->user_id }}</td>

                                            <td>
                                                <form action="{{ route('formprofesionals.destroy', $formprofesional->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('formprofesionals.show', $formprofesional->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('formprofesionals.edit', $formprofesional->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $formprofesionals->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
