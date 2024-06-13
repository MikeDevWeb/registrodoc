<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@extends('adminlte::page')

@section('template_title')
    Contactos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contactos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contactos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

									<th >Ciudadresidencia</th>
									<th >Direccion</th>
									<th >Telefonofijo</th>
									<th >Celular</th>
									<th >Correo</th>
									<th >Facebook</th>
									<th >Twitter</th>
									<th >Linkedin</th>
									<th >Instagram</th>
									<th >Telegram</th>
									<th >Whatsapp</th>
									<th >Datospersona Id</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactos as $contacto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $contacto->ciudadresidencia }}</td>
										<td >{{ $contacto->direccion }}</td>
										<td >{{ $contacto->telefonofijo }}</td>
										<td >{{ $contacto->celular }}</td>
										<td >{{ $contacto->correo }}</td>
										<td >{{ $contacto->facebook }}</td>
										<td >{{ $contacto->twitter }}</td>
										<td >{{ $contacto->linkedin }}</td>
										<td >{{ $contacto->instagram }}</td>
										<td >{{ $contacto->telegram }}</td>
										<td >{{ $contacto->whatsapp }}</td>
										<td >{{ $contacto->datospersona_id }}</td>
										<td >{{ $contacto->user_id }}</td>

                                            <td>
                                                <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contactos.show', $contacto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contactos.edit', $contacto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $contactos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
