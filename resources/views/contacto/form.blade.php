<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="ciudadresidencia" class="form-label">{{ __('Ciudadresidencia') }}</label>
            <input type="text" name="ciudadresidencia" class="form-control @error('ciudadresidencia') is-invalid @enderror" value="{{ old('ciudadresidencia', $contacto?->ciudadresidencia) }}" id="ciudadresidencia" placeholder="Ciudadresidencia">
            {!! $errors->first('ciudadresidencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $contacto?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefonofijo" class="form-label">{{ __('Telefonofijo') }}</label>
            <input type="text" name="telefonofijo" class="form-control @error('telefonofijo') is-invalid @enderror" value="{{ old('telefonofijo', $contacto?->telefonofijo) }}" id="telefonofijo" placeholder="Telefonofijo">
            {!! $errors->first('telefonofijo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $contacto?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $contacto?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="facebook" class="form-label">{{ __('Facebook') }}</label>
            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook', $contacto?->facebook) }}" id="facebook" placeholder="Facebook">
            {!! $errors->first('facebook', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="twitter" class="form-label">{{ __('Twitter') }}</label>
            <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter', $contacto?->twitter) }}" id="twitter" placeholder="Twitter">
            {!! $errors->first('twitter', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="linkedin" class="form-label">{{ __('Linkedin') }}</label>
            <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old('linkedin', $contacto?->linkedin) }}" id="linkedin" placeholder="Linkedin">
            {!! $errors->first('linkedin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instagram" class="form-label">{{ __('Instagram') }}</label>
            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram', $contacto?->instagram) }}" id="instagram" placeholder="Instagram">
            {!! $errors->first('instagram', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telegram" class="form-label">{{ __('Telegram') }}</label>
            <input type="text" name="telegram" class="form-control @error('telegram') is-invalid @enderror" value="{{ old('telegram', $contacto?->telegram) }}" id="telegram" placeholder="Telegram">
            {!! $errors->first('telegram', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="whatsapp" class="form-label">{{ __('Whatsapp') }}</label>
            <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp', $contacto?->whatsapp) }}" id="whatsapp" placeholder="Whatsapp">
            {!! $errors->first('whatsapp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Datospersona Id') }}</label>
            <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $contacto?->datospersona_id) }}" id="datospersona_id" placeholder="Datospersona Id">
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $contacto?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
