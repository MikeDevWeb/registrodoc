<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="form-group mb-2 mb20">
                <label for="datospersona_id" class="form-label">{{ __('Docente') }}</label>
                <select class="form-control text-sm" text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                    <option value="">Seleccione...</option>
                    @foreach ($datospersonas as $datospersona)
                        @php
                            $isRegistered = \App\Models\Expoconferencia::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($expoconferencia)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $expoconferencia?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="institucion" class="form-label">{{ __('Institución') }}</label>
                <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $expoconferencia?->institucion) }}" id="institucion" placeholder="">
                {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="tipoevento" class="form-label">{{ __('Tipo de evento') }}</label>
                <select class="form-control @error('tipoevento') is-invalid @enderror" name="tipoevento" id="tipoevento">
                    <option value="Conferencia" {{ 'Conferencia' == (old('tipoevento', $expoconferencia?->tipoevento) ?: '') ? 'selected' : '' }}>Conferencia</option>
                </select>
                {!! $errors->first('tipoevento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="tematica" class="form-label">{{ __('Temática') }}</label>
                <input type="text" name="tematica" class="form-control @error('tematica') is-invalid @enderror" value="{{ old('tematica', $expoconferencia?->tematica) }}" id="tematica" placeholder="">
                {!! $errors->first('tematica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-2 mb20">
                <label for="fechainicio" class="form-label">{{ __('Fecha inicio') }}</label>
                <input type="date" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $expoconferencia?->fechainicio) }}" id="fechainicio" placeholder="">
                {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="fechafin" class="form-label">{{ __('Fecha fin') }}</label>
                <input type="date" name="fechafin" class="form-control text-sm" text-sm @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $expoconferencia?->fechafin) }}" id="fechafin" min="{{ $expoconferencia?->fechainicio ?? '' }}">
                @error('fechafin')
                    <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                @enderror
                @if($expoconferencia?->fechainicio && $expoconferencia?->fechainicio > $expoconferencia?->fechafin)
                    <span class="text-danger">La fecha final debe ser mayor que la fecha inicial.</span>
                @elseif($expoconferencia?->fechainicio && $expoconferencia?->fechainicio < $expoconferencia?->fechafin)
                    <span class="text-danger">La fecha inicial debe ser menor que la fecha final.</span>
                @endif
                {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="duracion" class="form-label">{{ __('Duración') }}</label>
                <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $expoconferencia?->duracion) }}" id="duracion" placeholder="">
                {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20">
                <label for="user_id" class="form-label">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm" @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm"" type="text" readonly='true' value="{{ auth()->user()->name }}">
                {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control " @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $expoconferencia?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>
