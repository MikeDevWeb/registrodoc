<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombrearticulo" class="form-label">{{ __('Nombrearticulo') }}</label>
            <input type="text" name="nombrearticulo" class="form-control @error('nombrearticulo') is-invalid @enderror" value="{{ old('nombrearticulo', $articulorevista?->nombrearticulo) }}" id="nombrearticulo" placeholder="Nombrearticulo">
            {!! $errors->first('nombrearticulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="anio" class="form-label">{{ __('Anio') }}</label>
            <input type="text" name="anio" class="form-control @error('anio') is-invalid @enderror" value="{{ old('anio', $articulorevista?->anio) }}" id="anio" placeholder="Anio">
            {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="organopublicacion" class="form-label">{{ __('Organopublicacion') }}</label>
            <input type="text" name="organopublicacion" class="form-control @error('organopublicacion') is-invalid @enderror" value="{{ old('organopublicacion', $articulorevista?->organopublicacion) }}" id="organopublicacion" placeholder="Organopublicacion">
            {!! $errors->first('organopublicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor', $articulorevista?->autor) }}" id="autor" placeholder="Autor">
            {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="coautor" class="form-label">{{ __('Coautor') }}</label>
            <input type="text" name="coautor" class="form-control @error('coautor') is-invalid @enderror" value="{{ old('coautor', $articulorevista?->coautor) }}" id="coautor" placeholder="Coautor">
            {!! $errors->first('coautor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $articulorevista?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $articulorevista?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
