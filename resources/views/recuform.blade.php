<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group md-6 mb20">
            <label for="user_id" class="form-label">{{ __('Registró') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->name }}" id="user_id" readonly>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group md-6 mb20">
            <label for="fecharegistro" class="form-label">{{ __('Fecha de Registro') }}</label>
            <input type="date" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ date('Y-m-d') }}" id="fecharegistro" readonly>
            {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group md-4 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $datospersona?->nombre) }}" id="nombre" placeholder="Ej: Alfredo">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group md-4 mb20">
            <label for="apellido_paterno" class="form-label">{{ __('Apellido Paterno') }}</label>
            <input type="text" name="apellidoPaterno" class="form-control @error('apellidoPaterno') is-invalid @enderror" value="{{ old('apellidoPaterno', $datospersona?->apellidoPaterno) }}" id="apellido_paterno" placeholder="Ej: Garabito">
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-4 mb20">
            <label for="apellido_materno" class="form-label">{{ __('Apellido Materno') }}</label>
            <input type="text" name="apellidoMaterno" class="form-control @error('apellidoMaterno') is-invalid @enderror" value="{{ old('apellidoMaterno', $datospersona?->apellidoMaterno) }}" id="apellido_materno" placeholder="Ej: Brito">
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profesion" class="form-label">{{ __('Profesión') }}</label>
            <input type="text" name="profesion" class="form-control @error('profesion') is-invalid @enderror" value="{{ old('profesion', $datospersona?->profesion) }}" id="profesion" placeholder="Ej: Ing. Sistemas, Lic. Derecho">
            {!! $errors->first('profesion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha de Nacimiento') }}</label>
            <input type="date" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento', $datospersona?->fechaNacimiento) }}" id="fecha_nacimiento">
            {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_nacimiento" class="form-label">{{ __('Lugar de Nacimiento') }}</label>
            <select class="form-control @error('lugarNacimiento') is-invalid @enderror" name="lugarNacimiento" id="lugar_nacimiento" required>
                <option value="La_Paz" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'La_Paz' ? 'selected' : '' }}>La Paz</option>
                <option value="Oruro" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Oruro' ? 'selected' : '' }}>Oruro</option>
                <option value="Potosi" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Potosi' ? 'selected' : '' }}>Potosí</option>
                <option value="Cochabamba" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                <option value="Santa_Cruz" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Santa_Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                <option value="Beni" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Beni' ? 'selected' : '' }}>Beni</option>
                <option value="Pando" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Pando' ? 'selected' : '' }}>Pando</option>
                <option value="Tarija" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Tarija' ? 'selected' : '' }}>Tarija</option>
                <option value="Chuquisaca" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Chuquisaca' ? 'selected' : '' }}>Chuquisaca</option>
                <option value="Otro" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Otro' ? 'selected' : '' }}>OTRO</option>

            </select>
            {!! $errors->first('lugarNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="number" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $datospersona?->edad) }}" id="edad" placeholder="22-80" min="22" max="80">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <select name="estadoCivil" class="form-control @error('estadoCivil') is-invalid @enderror" value="{{ old('estadoCivil', $datospersona?->estadoCivil) }}" id="estado_civil">
                <option value="Soltero/a" {{ $datospersona?->estadoCivil == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                <option value="Casado/a" {{ $datospersona?->estadoCivil == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                <option value="Compromiso" {{ $datospersona?->estadoCivil == 'Compromiso' ? 'selected' : '' }}>Compromiso</option>
                <option value="Viudo/a" {{ $datospersona?->estadoCivil == 'Viudo/a' ? 'selected' : '' }}>Viudo/a</option>
            </select>
            {!! $errors->first('estadoCivil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <select name="sexo" class="form-control @error('sexo') is-invalid @enderror" id="sexo">
              <option value="Masculino" {{ $datospersona?->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
              <option value="Femenino" {{ $datospersona?->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            </select>
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="carnetidentidad" class="form-label">{{ __('Carnet de identidad') }}</label>
            <input type="text" name="carnetidentidad" class="form-control @error('carnetidentidad') is-invalid @enderror" value="{{ old('carnetidentidad', $datospersona?->carnetidentidad) }}" id="carnetidentidad" placeholder="Sólo números: 12345678">
            {!! $errors->first('carnetidentidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciexpedido" class="form-label">{{ __('Ciexpedido') }}</label>
            <select class="form-control @error('ciexpedido') is-invalid @enderror" name="ciexpedido" id="ciexpedido">
                <option value="LP" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'LP') selected @endif>LP - La Paz</option>
                <option value="OR" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'OR') selected @endif>OR - Oruro</option>
                <option value="PT" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'PT') selected @endif>PT - Potosi</option>
                <option value="CB" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'CB') selected @endif>CB - Cochabamba</option>
                <option value="SC" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'SC') selected @endif>SC - Santa Cruz</option>
                <option value="BN" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'BN') selected @endif>BN - Beni</option>
                <option value="PA" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'PA') selected @endif>PA - Pando</option>
                <option value="TJ" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'TJ') selected @endif>TJ - Tarija</option>
                <option value="CH" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'CH') selected @endif>CH - Chuquisaca</option>
            </select>
            {!! $errors->first('ciexpedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
