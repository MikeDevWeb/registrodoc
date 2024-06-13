<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group md-4 mb-2 mb20">
            <label for="datospersona_id" class="form-label">{{ __('Nombre Docente') }}</label>
            @php
                use App\Models\Datospersona;
                $datospersonas = Datospersona::all();
            @endphp
            <select class="form-control @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                <option value="">Seleccione...</option>
                @foreach ($datospersonas as $datospersona)
                    <option value="{{ $datospersona->id }}" {{ old('datospersona_id', $datospersonb?->datospersona_id) == $datospersona->id ? 'selected' : '' }}>{{ $datospersona->nombre }} {{ $datospersona->apellido }}</option>
                @endforeach
            </select>
            {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('Registrado por') }}</label>
            <input readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
            <input class="form-control" type="text" readonly value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $datospersonb?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $datospersonb?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $datospersonb?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $datospersonb?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma_nativo" class="form-label">{{ __('Idioma Nativo') }}</label>
            <input type="text" list="idioma_nativo" name="idioma_nativo" class="form-control @error('idioma_nativo') is-invalid @enderror" id="idioma_nativo" value="{{ old('idioma_nativo', $datospersonb?->idioma_nativo) }}" placeholder="Seleccione...">
            <datalist id="idioma_nativos">
                @php
                    $idioma_nativos = [
                        'Español',
                        'Portugués',
                        'Inglés',
                        'Quechua',
                        'Guarani',
                        'Aymara',
                    ];
                @endphp
                @foreach ($profesiones as $profesion)
                    <option value="{{ $profesion }}" {{ $datospersona?->profesion == $profesion ? 'selected' : '' }}>{{ $profesion }}</option>
                @endforeach
                <option value="{{ old('profesion') }}">{{ old('profesion') }}</option>
            </datalist>
            {!! $errors->first('idiomaNativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidiomaescritura" class="form-label">{{ __('Escritura') }}</label>
            <select name="nivelidiomaescritura" id="nivelidiomaescritura" class="form-control @error('nivelidiomaescritura') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomaescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidiomalectura" class="form-label">{{ __('Lectura') }}</label>
            <select name="nivelidiomalectura" id="nivelidiomalectura" class="form-control @error('nivelidiomalectura') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomalectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidiomahabla" class="form-label">{{ __('Habla') }}</label>
            <select name="nivelidiomahabla" id="nivelidiomahabla" class="form-control @error('nivelidiomahabla') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomahabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma_secundario" class="form-label">{{ __('Idioma Secundario') }}</label>
            <input type="text" name="idiomaSecundario" class="form-control @error('idiomaSecundario') is-invalid @enderror" value="{{ old('idiomaSecundario', $datospersonb?->idiomaSecundario) }}" id="idioma_secundario" placeholder="Idiomasecundario">
            {!! $errors->first('idiomaSecundario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidioma_secundarioescritura" class="form-label">{{ __('Escritura') }}</label>
            <select name="nivelidiomaSecundarioescritura" id="nivelidioma_secundarioescritura" class="form-control @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidioma_secundariolectura" class="form-label">{{ __('Lectura') }}</label>
            <select name="nivelidiomaSecundariolectura" id="nivelidioma_secundariolectura" class="form-control @error('nivelidiomaSecundariolectura') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivelidioma_secundariohabla" class="form-label">{{ __('Habla') }}</label>
            <select name="nivelidiomaSecundariohabla" id="nivelidioma_secundariohabla" class="form-control @error('nivelidiomaSecundariohabla') is-invalid @enderror">
              <option value="">Seleccione...</option>
              <option value="bajo" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'bajo' ? 'selected' : '' }}>Bajo</option>
              <option value="medio" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'medio' ? 'selected' : '' }}>Medio</option>
              <option value="alto" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'alto' ? 'selected' : '' }}>Alto</option>
            </select>
            {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
