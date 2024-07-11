<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="datospersona_id" class="form-label text-sm">{{ __('Docente') }}</label>
                <select class="text-sm form-control text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\formpostgrado::where('datospersona_id', $datospersona->id)->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $formpostgrado?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="institucion_universidad" class="form-label text-sm">{{ __('Institucion/Universidad') }}</label>
                <input type="text" name="institucionUniversidad" class="form-control text-sm @error('institucionUniversidad') is-invalid @enderror" value="{{ old('institucionUniversidad', $formpostgrado?->institucionUniversidad) }}" id="institucion_universidad">
                {!! $errors->first('institucionUniversidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="anio" class="form-label text-sm">{{ __('Año') }}</label>
                <input type="text" name="anio" class="form-control text-sm @error('anio') is-invalid @enderror" value="{{ old('anio', $formpostgrado?->anio) }}" id="anio">
                {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group mb-2 mb20 text-sm">
                <label for="gradoacademico" class="form-label text-sm">{{ __('Grado Academico') }}</label>
                <select name="gradoacademico" class="form-control text-sm @error('gradoacademico') is-invalid @enderror" id="gradoacademico">
                    <option value="Diplomado" {{ old('gradoacademico', $formpostgrado?->gradoacademico) === 'Diplomado' ? 'selected' : '' }}>Diplomado</option>
                    <option value="Maestria" {{ old('gradoacademico', $formpostgrado?->gradoacademico) === 'Maestria' ? 'selected' : '' }}>Maestria</option>
                    <option value="Especialidad" {{ old('gradoacademico', $formpostgrado?->gradoacademico) === 'Especialidad' ? 'selected' : '' }}>Especialidad</option>
                    <option value="Doctorado" {{ old('gradoacademico', $formpostgrado?->gradoacademico) === 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                    <option value="MBA" {{ old('gradoacademico', $formpostgrado?->gradoacademico) === 'MBA' ? 'selected' : '' }}>MBA</option>
                </select>
                {!! $errors->first('gradoacademico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20 text-sm">
                <label for="titulodiploma" class="form-label text-sm">{{ __('Titulo/Diploma') }}</label>
                <input type="text" name="titulodiploma" class="form-control text-sm @error('titulodiploma') is-invalid @enderror" value="{{ old('titulodiploma', $formpostgrado?->titulodiploma) }}" id="titulodiploma">
                {!! $errors->first('titulodiploma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
        {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $formpostgrado?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
