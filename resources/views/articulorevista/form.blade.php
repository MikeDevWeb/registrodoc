<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="datospersona_id" class="form-label text-sm">{{ __('Docente') }}</label>
                <select class="form-control text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\Articulorevista::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($articulorevista)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $articulorevista?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="nombrearticulo" class="form-label text-sm">{{ __('Nombre del artículo') }}</label>
                <input type="text" name="nombrearticulo" class="form-control text-sm @error('nombrearticulo') is-invalid @enderror" value="{{ old('nombrearticulo', $articulorevista?->nombrearticulo) }}" id="nombrearticulo" placeholder="">
                {!! $errors->first('nombrearticulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="anio" class="form-label text-sm">{{ __('Año') }}</label>
                <input type="text" name="anio" class="form-control text-sm @error('anio') is-invalid @enderror" value="{{ old('anio', $articulorevista?->anio) }}" id="anio" placeholder="">
                {!! $errors->first('anio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="organopublicacion" class="form-label text-sm">{{ __('Organo publicación') }}</label>
                <input type="text" name="organopublicacion" class="form-control text-sm @error('organopublicacion') is-invalid @enderror" value="{{ old('organopublicacion', $articulorevista?->organopublicacion) }}" id="organopublicacion" placeholder="">
                {!! $errors->first('organopublicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="autor" class="form-label text-sm">{{ __('Autor') }}</label>
                <input type="text" name="autor" class="form-control text-sm @error('autor') is-invalid @enderror" value="{{ old('autor', $articulorevista?->autor) }}" id="autor" placeholder="">
                {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="coautor" class="form-label text-sm">{{ __('Coautor') }}</label>
                <input type="text" name="coautor" class="form-control text-sm @error('coautor') is-invalid @enderror" value="{{ old('coautor', $articulorevista?->coautor) }}" id="coautor" placeholder="">
                {!! $errors->first('coautor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $articulogeneral?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
