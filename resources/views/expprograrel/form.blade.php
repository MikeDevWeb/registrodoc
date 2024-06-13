<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $expprograrel?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cargoactividad" class="form-label">{{ __('Cargoactividad') }}</label>
            <input type="text" name="cargoactividad" class="form-control @error('cargoactividad') is-invalid @enderror" value="{{ old('cargoactividad', $expprograrel?->cargoactividad) }}" id="cargoactividad" placeholder="Cargoactividad">
            {!! $errors->first('cargoactividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechainicio" class="form-label">{{ __('Fechainicio') }}</label>
            <input type="text" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $expprograrel?->fechainicio) }}" id="fechainicio" placeholder="Fechainicio">
            {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechafin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechafin" class="form-control @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $expprograrel?->fechafin) }}" id="fechafin" placeholder="Fechafin">
            {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $expprograrel?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $expprograrel?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $expprograrel?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
