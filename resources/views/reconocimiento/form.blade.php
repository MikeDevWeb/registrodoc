<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="reconocimiento" class="form-label">{{ __('Reconocimiento') }}</label>
            <input type="text" name="reconocimiento" class="form-control @error('reconocimiento') is-invalid @enderror" value="{{ old('reconocimiento', $reconocimiento?->reconocimiento) }}" id="reconocimiento" placeholder="Reconocimiento">
            {!! $errors->first('reconocimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $reconocimiento?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="anio" class="form-label">{{ __('Anio') }}</label>
            <input type="text" name="anio" class="form-control @error('anio') is-invalid @enderror" value="{{ old('anio', $reconocimiento?->anio) }}" id="anio" placeholder="Anio">
            {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="actividad" class="form-label">{{ __('Actividad') }}</label>
            <input type="text" name="actividad" class="form-control @error('actividad') is-invalid @enderror" value="{{ old('actividad', $reconocimiento?->actividad) }}" id="actividad" placeholder="Actividad">
            {!! $errors->first('actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $reconocimiento?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $reconocimiento?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
