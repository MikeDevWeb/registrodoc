<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="institucion_universidad" class="form-label">{{ __('Institucionuniversidad') }}</label>
            <input type="text" name="institucionUniversidad" class="form-control @error('institucionUniversidad') is-invalid @enderror" value="{{ old('institucionUniversidad', $formpostgrado?->institucionUniversidad) }}" id="institucion_universidad" placeholder="Institucionuniversidad">
            {!! $errors->first('institucionUniversidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="anio" class="form-label">{{ __('Anio') }}</label>
            <input type="text" name="anio" class="form-control @error('anio') is-invalid @enderror" value="{{ old('anio', $formpostgrado?->anio) }}" id="anio" placeholder="Anio">
            {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gradoacademico" class="form-label">{{ __('Gradoacademico') }}</label>
            <input type="text" name="gradoacademico" class="form-control @error('gradoacademico') is-invalid @enderror" value="{{ old('gradoacademico', $formpostgrado?->gradoacademico) }}" id="gradoacademico" placeholder="Gradoacademico">
            {!! $errors->first('gradoacademico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulodiploma" class="form-label">{{ __('Titulodiploma') }}</label>
            <input type="text" name="titulodiploma" class="form-control @error('titulodiploma') is-invalid @enderror" value="{{ old('titulodiploma', $formpostgrado?->titulodiploma) }}" id="titulodiploma" placeholder="Titulodiploma">
            {!! $errors->first('titulodiploma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $formpostgrado?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $formpostgrado?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
