@extends('adminlte::page')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Seleccionar PDF') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($pdfs as $pdf)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pdf" id="pdf{{ $pdf->id }}" value="{{ $pdf->id }}">
                                <label class="form-check-label" for="pdf{{ $pdf->id }}">
                                    {{ $pdf->title }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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

@overwrite
