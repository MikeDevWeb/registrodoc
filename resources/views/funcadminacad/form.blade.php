@section('style')
<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
@endsection

<div class="row padding-1 p-1">
    <div class="col-md-12 row">

        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="institucion" class="form-label text-sm">{{ __('Institución') }}</label>
                <input type="text" name="institucion" class="form-control text-sm @error('institucion') is-invalid @enderror" value="{{ old('institucion', $funcadminacad?->institucion) }}" id="institucion">
                {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="cargoempleado" class="form-label text-sm">{{ __('Cargo Empleado') }}</label>
                <input type="text" name="cargoempleado" class="form-control text-sm @error('cargoempleado') is-invalid @enderror" value="{{ old('cargoempleado', $funcadminacad?->cargoempleado) }}" id="cargoempleado">
                {!! $errors->first('cargoempleado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechainicio" class="form-label text-sm">{{ __('Fecha inicio') }}</label>
                <input type="date" name="fechainicio" class="form-control text-sm @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $funcadminacad?->fechainicio) }}" id="fechainicio">
                {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechafin" class="form-label text-sm">{{ __('Fecha fin') }}</label>
                <input type="date" name="fechafin" class="form-control text-sm @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $funcadminacad?->fechafin) }}" id="fechafin" min="{{ $funcadminacad?->fechainicio ?? '' }}">
                    @error('fechafin')
                        <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                    @enderror
                    @if($funcadminacad?->fechainicio && $funcadminacad?->fechainicio > $funcadminacad?->fechafin)
                        <span class="text-danger">La fecha final debe ser mayor que la fecha inicial.</span>
                    @elseif($funcadminacad?->fechainicio && $funcadminacad?->fechainicio < $funcadminacad?->fechafin)
                        <span class="text-danger">La fecha inicial debe ser menor que la fecha final.</span>
                    @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="duracion" class="form-label text-sm">{{ __('Duración') }}</label>
                <input type="text" name="duracion" class="form-control text-sm @error('duracion') is-invalid @enderror" value="{{ old('duracion', $funcadminacad?->duracion) }}" id="duracion" placeholder="En meses">
                {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="datospersona_id" class="form-label text-sm">{{ __('Docente') }}</label>
                <select class="text-sm form-control text-sm text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\funcadminacad::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($funcadminacad)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $funcadminacad?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
                {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $funcadminacad?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
