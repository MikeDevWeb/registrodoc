<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('Registrado por') }}</label>
            <input readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
            <input class="form-control" type="text" readonly value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
            <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $expdocente?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
            {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group md-4 mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Nombre Docente') }}</label>
            @php
                use App\Models\Datospersona;
                $datospersonas = Datospersona::all();
            @endphp
            <select class="form-control @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                <option value="">Seleccione...</option>
                @foreach ($datospersonas as $datospersona)
                    <option value="{{ $datospersona->id }}" {{ old('datospersona_id', $expdocente?->datospersona_id) == $datospersona->id ? 'selected' : '' }}>{{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</option>
                @endforeach
            </select>
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $expdocente?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="carrera" class="form-label">{{ __('Carrera') }}</label>
            <input type="text" name="carrera" class="form-control @error('carrera') is-invalid @enderror" value="{{ old('carrera', $expdocente?->carrera) }}" id="carrera" placeholder="Carrera">
            {!! $errors->first('carrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechainicio" class="form-label">{{ __('Fechainicio') }}</label>
            <input type="text" name="fechainicio" class="form-control @error('fechainicio') is-invalid @enderror" value="{{ old('fechainicio', $expdocente?->fechainicio) }}" id="fechainicio" placeholder="Fechainicio">
            {!! $errors->first('fechainicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechafin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechafin" class="form-control @error('fechafin') is-invalid @enderror" value="{{ old('fechafin', $expdocente?->fechafin) }}" id="fechafin" placeholder="Fechafin">
            {!! $errors->first('fechafin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $expdocente?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>




    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
