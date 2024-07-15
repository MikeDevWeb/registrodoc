<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="datospersona_id" class="form-label text-sm">{{ __('Docente') }}</label>
                <select class="text-sm form-control text-sm text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\tutortribunal::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($tutortribunal)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $tutortribunal?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="institucion" class="form-label text-sm">{{ __('Institución') }}</label>
                <input type="text" name="institucion" class="form-control text-sm @error('institucion') is-invalid @enderror" value="{{ old('institucion', $tutortribunal?->institucion) }}" id="institucion" placeholder="Institucion">
                {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="pregradopostgrado" class="form-label text-sm">{{ __('Pregrado/ postgrado') }}</label>
                <br><div class="form-check form-check-inline text-sm">
                    <input class="form-check-input" type="radio" name="pregradopostgrado" id="pregrado" value="Pregrado" {{ old('pregradopostgrado', $tutortribunal?->pregradopostgrado) === 'Pregrado' ? 'checked' : '' }}>
                    <label class="form-check-label" for="pregrado">Pregrado</label>
                </div>
                <br><div class="form-check form-check-inline text-sm">
                    <input class="form-check-input" type="radio" name="pregradopostgrado" id="postgrado" value="Postgrado" {{ old('pregradopostgrado', $tutortribunal?->pregradopostgrado) === 'Postgrado' ? 'checked' : '' }}>
                    <label class="form-check-label" for="postgrado">Postgrado</label>
                </div>
                {!! $errors->first('pregradopostgrado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="nivelprograma" class="form-label text-sm">{{ __('Nivel del programa') }}</label>
                <input type="text" name="nivelprograma" class="form-control text-sm @error('nivelprograma') is-invalid @enderror" value="{{ old('nivelprograma', $tutortribunal?->nivelprograma) }}" id="nivelprograma" placeholder="Nivelprograma">
                {!! $errors->first('nivelprograma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="tutorevalutribu" class="form-label text-sm">{{ __('Designación') }}</label>
                <select name="tutorevalutribu" class="form-control text-sm @error('tutorevalutribu') is-invalid @enderror" id="tutorevalutribu">
                  <option value="Tutor" {{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) == 'Tutor' ? 'selected' : '' }}>Tutor</option>
                  <option value="Evaluador" {{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) == 'Evaluador' ? 'selected' : '' }}>Evaluador</option>
                  <option value="Tribunal" {{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) == 'Tribunal' ? 'selected' : '' }}>Tribunal</option>
                  <option value="Coordinador" {{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) == 'Coordinador' ? 'selected' : '' }}>Coordinador</option>
                  <option value="Asesor" {{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) == 'Asesor' ? 'selected' : '' }}>Asesor</option>
                </select>
                {!! $errors->first('tutorevalutribu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="tituloinvestigacion" class="form-label text-sm">{{ __('Titulo de la investigacion') }}</label>
                <input type="text" name="tituloinvestigacion" class="form-control text-sm @error('tituloinvestigacion') is-invalid @enderror" value="{{ old('tituloinvestigacion', $tutortribunal?->tituloinvestigacion) }}" id="tituloinvestigacion" placeholder="Tituloinvestigacion">
                {!! $errors->first('tituloinvestigacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $tutortribunal?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
