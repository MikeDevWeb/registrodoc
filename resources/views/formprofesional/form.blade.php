<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-4">
            <div class="form-group mb-2 mb20 text-sm text-sm">
                <label for="datospersona_id" class="form-label text-sm  text-sm">{{ __('Nombre Docente') }}</label>
                <select class="text-sm form-control text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\Formprofesional::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($formprofesional)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $formprofesional?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="universidad" class="form-label text-sm">{{ __('Universidad') }}</label>
                <input type="text" name="universidad" class="form-control text-sm @error('universidad') is-invalid @enderror" value="{{ old('universidad', $formprofesional?->universidad) }}" id="universidad">
                {!! $errors->first('universidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="anio" class="form-label text-sm">{{ __('Año') }}</label>
                <select class="form-control text-sm @error('anio') is-invalid @enderror" id="anio" name="anio">
                    @foreach(range(date('Y'), 1940) as $year)
                        <option value="{{ $year }}" {{ old('anio', $formprofesional?->anio) == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endforeach
                </select>
                {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="gradoacademico" class="form-label text-sm">{{ __('Grado Académico') }}</label>
                <select class="form-control text-sm @error('gradoacademico') is-invalid @enderror" id="gradoacademico" name="gradoacademico">
                    <option value="Tecnico" {{ old('gradoacademico', $formprofesional?->gradoacademico) == 'Tecnico' ? 'selected' : '' }}>Técnico Superior</option>
                    <option value="Licenciatura" {{ old('gradoacademico', $formprofesional?->gradoacademico) == 'Licenciatura' ? 'selected' : '' }}>Licenciatura</option>
                </select>
                {!! $errors->first('gradoacademico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="titulodiploma" class="form-label text-sm">{{ __('Título/Diploma') }}</label>
                {{-- <input type="text" name="titulodiploma" class="form-control text-sm @error('titulodiploma') is-invalid @enderror" value="{{ old('titulodiploma', $formprofesional?->titulodiploma) }}" id="titulodiploma"> --}}
                <select name="titulodiploma" class="form-control text-sm @error('titulodiploma') is-invalid @enderror" id="titulodiploma">
                    <option value="" disabled selected>Seleccione...</option>
                    @foreach ($titulodiplomas as $titulodiploma)
                        <option value="{{ $titulodiploma }}" {{ old('titulodiploma', $formprofesional?->titulodiploma) == $titulodiploma ? 'selected' : '' }}>
                            {{ $titulodiploma }}
                        </option>
                    @endforeach
                </select>

                @error('titulodiploma')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                {!! $errors->first('titulodiploma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mb-2 mb20 text-sm text-sm">
                <label for="fecharegistro" class="form-label text-sm text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $formprofesional?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm text-sm">
                <label title="Registrado por" for="user_id" class="form-label text-sm text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
                {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
