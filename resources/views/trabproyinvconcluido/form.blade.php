<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="trabajoproyecto" class="form-label">{{ __('Trabajoproyecto') }}</label>
            <input type="text" name="trabajoproyecto" class="form-control @error('trabajoproyecto') is-invalid @enderror" value="{{ old('trabajoproyecto', $trabproyinvconcluido?->trabajoproyecto) }}" id="trabajoproyecto" placeholder="Trabajoproyecto">
            {!! $errors->first('trabajoproyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechainicio" class="form-label">{{ __('Fechainicio') }}</label>
            <input type="text" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $trabproyinvconcluido?->fechainicio) }}" id="fechainicio" placeholder="Fechainicio">
            {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechafin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechafin" class="form-control @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $trabproyinvconcluido?->fechafin) }}" id="fechafin" placeholder="Fechafin">
            {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $trabproyinvconcluido?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor', $trabproyinvconcluido?->autor) }}" id="autor" placeholder="Autor">
            {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="coautor" class="form-label">{{ __('Coautor') }}</label>
            <input type="text" name="coautor" class="form-control @error('coautor') is-invalid @enderror" value="{{ old('coautor', $trabproyinvconcluido?->coautor) }}" id="coautor" placeholder="Coautor">
            {!! $errors->first('coautor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $trabproyinvconcluido?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $trabproyinvconcluido?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
