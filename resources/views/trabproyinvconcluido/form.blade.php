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
                            $isRegistered = \App\Models\Trabproyinvconcluido::where('datospersona_id', $datospersona->id)
                                ->where('id', '<>', optional($trabproyinvconcluido)->id)
                                ->exists();
                        @endphp
                        <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $trabproyinvconcluido?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                            {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                        </option>
                    @endforeach
                </select>
                 {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="trabajoproyecto" class="form-label text-sm">{{ __('Tipo de investigación concluida') }}</label>
                <select name="trabajoproyecto" class="form-control text-sm @error('trabajoproyecto') is-invalid @enderror" id="trabajoproyecto">
                  <option value="" disabled selected>Seleccione...</option>
                  <option value="Proyecto" {{ old('trabajoproyecto', $trabproyinvconcluido?->trabajoproyecto) == 'Proyecto' ? 'selected' : '' }}>Proyecto</option>
                  <option value="Trabajo" {{ old('trabajoproyecto', $trabproyinvconcluido?->trabajoproyecto) == 'Trabajo' ? 'selected' : '' }}>Trabajo</option>
                </select>
                {!! $errors->first('trabajoproyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechainicio" class="form-label text-sm">{{ __('Fecha inicio') }}</label>
                <input type="date" name="fechainicio" class="form-control text-sm @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $trabproyinvconcluido?->fechainicio) }}" id="fechainicio" placeholder="">
                {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fechafin" class="form-label text-sm">{{ __('Fecha fin') }}</label>
                <input type="date" name="fechafin" class="form-control text-sm @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $trabproyinvconcluido?->fechafin) }}" id="fechafin" min="{{ $trabproyinvconcluido?->fechainicio ?? '' }}">
                @error('fechafin')
                    <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                @enderror
                @if($trabproyinvconcluido?->fechainicio && $trabproyinvconcluido?->fechainicio > $trabproyinvconcluido?->fechafin)
                    <span class="text-danger">La fecha final debe ser mayor que la fecha inicial.</span>
                @elseif($trabproyinvconcluido?->fechainicio && $trabproyinvconcluido?->fechainicio < $trabproyinvconcluido?->fechafin)
                    <span class="text-danger">La fecha inicial debe ser menor que la fecha final.</span>
                @endif
                {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-2 mb20 text-sm">
                <label for="duracion" class="form-label text-sm">{{ __('Duración') }}</label>
                <input type="text" name="duracion" class="form-control text-sm @error('duracion') is-invalid @enderror" value="{{ old('duracion', $trabproyinvconcluido?->duracion) }}" id="duracion" placeholder="">
                {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="autor" class="form-label text-sm">{{ __('Autor') }}</label>
                <input type="text" name="autor" class="form-control text-sm @error('autor') is-invalid @enderror" value="{{ old('autor', $trabproyinvconcluido?->autor) }}" id="autor" placeholder="">
                {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="coautor" class="form-label text-sm">{{ __('Coautor') }}</label>
                <input type="text" name="coautor" class="form-control text-sm @error('coautor') is-invalid @enderror" value="{{ old('coautor', $trabproyinvconcluido?->coautor) }}" id="coautor" placeholder="">
                {!! $errors->first('coautor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20 text-sm">
                <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
                {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20 text-sm">
                <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $trabproyinvconcluido?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>
    </div>
</div>

