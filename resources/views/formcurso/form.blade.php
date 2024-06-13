<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $formcurso?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $formcurso?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombreevento" class="form-label">{{ __('Nombreevento') }}</label>
            <input type="text" name="nombreevento" class="form-control @error('nombreevento') is-invalid @enderror" value="{{ old('nombreevento', $formcurso?->nombreevento) }}" id="nombreevento" placeholder="Nombreevento">
            {!! $errors->first('nombreevento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechainicio" class="form-label">{{ __('Fechainicio') }}</label>
            <input type="text" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $formcurso?->fechainicio) }}" id="fechainicio" placeholder="Fechainicio">
            {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechafin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechafin" class="form-control @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $formcurso?->fechafin) }}" id="fechafin" placeholder="Fechafin">
            {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $formcurso?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $formcurso?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $formcurso?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
