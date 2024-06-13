<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $tutortribunal?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregradopostgrado" class="form-label">{{ __('Pregradopostgrado') }}</label>
            <input type="text" name="pregradopostgrado" class="form-control @error('pregradopostgrado') is-invalid @enderror" value="{{ old('pregradopostgrado', $tutortribunal?->pregradopostgrado) }}" id="pregradopostgrado" placeholder="Pregradopostgrado">
            {!! $errors->first('pregradopostgrado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelprograma" class="form-label">{{ __('Nivelprograma') }}</label>
            <input type="text" name="nivelprograma" class="form-control @error('nivelprograma') is-invalid @enderror" value="{{ old('nivelprograma', $tutortribunal?->nivelprograma) }}" id="nivelprograma" placeholder="Nivelprograma">
            {!! $errors->first('nivelprograma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tutorevalutribu" class="form-label">{{ __('Tutorevalutribu') }}</label>
            <input type="text" name="tutorevalutribu" class="form-control @error('tutorevalutribu') is-invalid @enderror" value="{{ old('tutorevalutribu', $tutortribunal?->tutorevalutribu) }}" id="tutorevalutribu" placeholder="Tutorevalutribu">
            {!! $errors->first('tutorevalutribu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tituloinvestigacion" class="form-label">{{ __('Tituloinvestigacion') }}</label>
            <input type="text" name="tituloinvestigacion" class="form-control @error('tituloinvestigacion') is-invalid @enderror" value="{{ old('tituloinvestigacion', $tutortribunal?->tituloinvestigacion) }}" id="tituloinvestigacion" placeholder="Tituloinvestigacion">
            {!! $errors->first('tituloinvestigacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $tutortribunal?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $tutortribunal?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
