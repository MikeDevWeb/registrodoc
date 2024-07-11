<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 text-sm">
        <div class="form-group row text-sm">
            @csrf
            <div class="form-group col-md-4 text-sm">
                <div class="form-group  mb-2 mb20 text-sm">
                    <label for="datospersona_id" class="form-label text-sm">{{ __('Nombre Docente') }}</label>
                    <select class="text-sm form-control text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                        <option value="">Seleccione...</option>
                        @foreach ($datospersonas as $datospersona)
                            @php
                                $isRegistered = \App\Models\contacto::where('datospersona_id', $datospersona->id)->exists();
                            @endphp
                            <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $contacto?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                                {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                            </option>
                        @endforeach
                    </select>
                    {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                    <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $contacto?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                    {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label title="Registrado por" for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                    <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                    <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
                    {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="ciudadresidencia" class="form-label text-sm">{{ __('Residencia') }}</label>
                    <input type="text" name="ciudadresidencia" class="form-control text-sm @error('ciudadresidencia') is-invalid @enderror" value="{{ old('ciudadresidencia', $contacto?->ciudadresidencia) }}" id="ciudadresidencia">
                {!! $errors->first('ciudadresidencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="direccion" class="form-label text-sm">{{ __('Dirección') }}</label>
                    <input type="text" name="direccion" class="form-control text-sm @error('direccion') is-invalid @enderror" value="{{ old('direccion', $contacto?->direccion) }}" id="direccion">
                {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="form-group col-md-4 text-sm">

                <div class="form-group mb-2 mb20 text-sm">
                    <label for="telefonofijo" class="form-label text-sm">{{ __('Teléfono') }}</label>
                    <input type="text" name="telefonofijo" class="form-control text-sm @error('telefonofijo') is-invalid @enderror" value="{{ old('telefonofijo', $contacto?->telefonofijo) }}" id="telefonofijo">
                    {!! $errors->first('telefonofijo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="celular" class="form-label text-sm">{{ __('Celular') }}</label>
                    <input type="text" name="celular" class="form-control text-sm @error('celular') is-invalid @enderror" value="{{ old('celular', $contacto?->celular) }}" id="celular">
                    {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="correo" class="form-label text-sm">{{ __('Correo') }}</label>
                    <input type="text" name="correo" class="form-control text-sm @error('correo') is-invalid @enderror" value="{{ old('correo', $contacto?->correo) }}" id="correo">
                    {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="facebook" class="form-label text-sm">{{ __('Facebook') }}</label>
                    <input type="text" name="facebook" class="form-control text-sm @error('facebook') is-invalid @enderror" value="{{ old('facebook', $contacto?->facebook) }}" id="facebook">
                    {!! $errors->first('facebook', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="twitter" class="form-label text-sm">{{ __('Twitter') }}</label>
                    <input type="text" name="twitter" class="form-control text-sm @error('twitter') is-invalid @enderror" value="{{ old('twitter', $contacto?->twitter) }}" id="twitter">
                    {!! $errors->first('twitter', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="form-group col-md-4 text-sm">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="linkedin" class="form-label text-sm">{{ __('Linkedin') }}</label>
                    <input type="text" name="linkedin" class="form-control text-sm @error('linkedin') is-invalid @enderror" value="{{ old('linkedin', $contacto?->linkedin) }}" id="linkedin">
                    {!! $errors->first('linkedin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="instagram" class="form-label text-sm">{{ __('Instagram') }}</label>
                    <input type="text" name="instagram" class="form-control text-sm @error('instagram') is-invalid @enderror" value="{{ old('instagram', $contacto?->instagram) }}" id="instagram">
                    {!! $errors->first('instagram', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="telegram" class="form-label text-sm">{{ __('Telegram') }}</label>
                    <input type="text" name="telegram" class="form-control text-sm @error('telegram') is-invalid @enderror" value="{{ old('telegram', $contacto?->telegram) }}" id="telegram">
                    {!! $errors->first('telegram', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="whatsapp" class="form-label text-sm">{{ __('Whatsapp') }}</label>
                    <input type="text" name="whatsapp" class="form-control text-sm @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp', $contacto?->whatsapp) }}" id="whatsapp">
                    {!! $errors->first('whatsapp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2 buttons-group">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
