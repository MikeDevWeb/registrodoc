<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
            <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersona?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
            {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $datospersona?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_paterno" class="form-label">{{ __('Apellido Paterno') }}</label>
            <input type="text" name="apellidoPaterno" class="form-control @error('apellidoPaterno') is-invalid @enderror" value="{{ old('apellidoPaterno', $datospersona?->apellidoPaterno) }}" id="apellido_paterno">
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_materno" class="form-label">{{ __('Apellido Materno') }}</label>
            <input type="text" name="apellidoMaterno" class="form-control @error('apellidoMaterno') is-invalid @enderror" value="{{ old('apellidoMaterno', $datospersona?->apellidoMaterno) }}" id="apellido_materno">
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profesion" class="form-label">{{ __('Profesión') }}</label>
{{--
            <select name="profesion" class="form-control @error('profesion') is-invalid @enderror" id="profesion" oninput="this.selectedIndex=this.options.length-1;">
                <option value="">Seleccione...</option>
                @php
                    $profesiones = [
                        'Lic. en Ingenieria de Sistemas',
                        'Lic. en Ingenieria Mecatrónica',
                        'Lic. en Ingenieria Informatica',
                        'Lic. en Ingenieria Electrica',
                        'Lic. en Ingenieria Mecanica',
                        'Lic. en Ingenieria Electronica',
                        'Lic. en Ingenieria Quimica'
                    ];
                @endphp
                @foreach ($profesiones as $profesion)
                    <option value="{{ $profesion }}" {{ $datospersona?->profesion == $profesion ? 'selected' : '' }}>{{ $profesion }}</option>
                @endforeach
                <option value="Lic. en Ingenieria de Sistemas" {{ $datospersona?->profesion == 'Lic. en Ingenieria en Sistemas' ? 'selected' : '' }}>Lic. en Ingenieria en Sistemas</option>
                <option value="Lic. en Ingenieria Mecatrónica" {{ $datospersona?->profesion == 'Lic. en Ingenieria en Mecatrónica' ? 'selected' : '' }}>Lic. en Ingenieria en Mecatrónica</option>
                <option value="Lic. en Ingenieria Informatica" {{ $datospersona?->profesion == 'Lic. en Ingenieria en Informatica' ? 'selected' : '' }}>Lic. en Ingenieria en Informatica</option>
                <option value="Lic. en Ingenieria Electrica" {{ $datospersona?->profesion == 'Lic. en Ingenieria en Electrica' ? 'selected' : '' }}>Lic. en Ingenieria en Electrica</option>
                <option value="Lic. en Ingenieria Mecanica" {{ $datospersona?->profesion == 'Lic. en Ingenieria Mecanica' ? 'selected' : '' }}>Lic. en Ingenieria Mecanica</option>
                <option value="Lic. en Ingenieria Electronica" {{ $datospersona?->profesion == 'Lic. en Ingenieria Electronica' ? 'selected' : '' }}>Lic. en Ingenieria Electronica</option>
                <option value="Lic. en Ingenieria Quimica" {{ $datospersona?->profesion == 'Lic. en Ingenieria Quimica' ? 'selected' : '' }}>Lic. en Ingenieria Quimica</option>
                <option value="Lic. en Ingenieria Civil" {{ $datospersona?->profesion == 'Lic. en Ingenieria Civil' ? 'selected' : '' }}>Lic. en Ingenieria Civil</option>
                <option value="Lic. en Ingenieria Industrial" {{ $datospersona?->profesion == 'Lic. en Ingenieria Industrial' ? 'selected' : '' }}>Lic. en Ingenieria Industrial</option>
                <option value="Lic. en Ingenieria Biomedica" {{ $datospersona?->profesion == 'Lic. en Ingenieria Biomedica' ? 'selected' : '' }}>Lic. en Ingenieria Biomedica</option>
                <option value="Lic. en Ingenieria Aeroespacial" {{ $datospersona?->profesion == 'Lic. en Ingenieria Aeroespacial' ? 'selected' : '' }}>Lic. en Ingenieria Aeroespacial</option>
                <option value="Lic. en Ingenieria Agronómica" {{ $datospersona?->profesion == 'Lic. en Ingenieria Agronómica' ? 'selected' : '' }}>Lic. en Ingenieria Agronómica</option>
                <option value="Lic. en Ingenieria Ambiental" {{ $datospersona?->profesion == 'Lic. en Ingenieria Ambiental' ? 'selected' : '' }}>Lic. en Ingenieria Ambiental</option>
                <option value="Lic. en Ingenieria de la Computacion" {{ $datospersona?->profesion == 'Lic. en Ingenieria de Computacion' ? 'selected' : '' }}>Lic. en Ingenieria de Computacion</option>
                <option value="Lic. en Ingenieria en Telecomunicaciones" {{ $datospersona?->profesion == 'Lic. en Ingenieria en Telecomunicaciones' ? 'selected' : '' }}>Lic. en Ingenieria en Telecomunicaciones</option>
            </select> --}}


            <input type="text" list="profesiones" name="profesion" class="form-control @error('profesion') is-invalid @enderror" id="profesion" value="{{ old('profesion', $datospersona?->profesion) }}" placeholder="Seleccione...">
            <datalist id="profesiones">
                @php
                    $profesiones = [
                        'Lic. en Ingenieria de Sistemas',
                        'Lic. en Ingenieria Mecatrónica',
                        'Lic. en Ingenieria Informatica',
                        'Lic. en Ingenieria Electrica',
                        'Lic. en Ingenieria Mecanica',
                        'Lic. en Ingenieria Electronica',
                        'Lic. en Ingenieria Quimica',
                        'Lic. en Ingenieria Civil',
                        'Lic. en Ingenieria Industrial',
                        'Lic. en Ingenieria Biomedica',
                        'Lic. en Ingenieria Aeroespacial',
                        'Lic. en Ingenieria Agronómica',
                        'Lic. en Ingenieria Ambiental',
                        'Lic. en Ingenieria de la Computacion',
                        'Lic. en Ingenieria en Telecomunicaciones',
                    ];
                @endphp
                @foreach ($profesiones as $profesion)
                    <option value="{{ $profesion }}" {{ $datospersona?->profesion == $profesion ? 'selected' : '' }}>{{ $profesion }}</option>
                @endforeach
                <option value="{{ old('profesion') }}">{{ old('profesion') }}</option>
            </datalist>

            {!! $errors->first('profesion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fechanacimiento') }}</label>
            <input type="date" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento', $datospersona?->fechaNacimiento) }}" id="fecha_nacimiento">
            {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_nacimiento" class="form-label">{{ __('Lugarnacimiento') }}</label>
            <select class="form-control @error('lugarNacimiento') is-invalid @enderror" name="lugarNacimiento" id="lugar_nacimiento" required>
                <option value="La Paz" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'La Paz' ? 'selected' : '' }}>La Paz</option>
                <option value="Oruro" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Oruro' ? 'selected' : '' }}>Oruro</option>
                <option value="Potosi" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Potosi' ? 'selected' : '' }}>Potosí</option>
                <option value="Cochabamba" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                <option value="Santa Cruz" {{ old('lugarNacimiento', $datospersona?->lugarNacimiento) == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
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
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $datospersona?->edad) }}" id="edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado civil') }}</label>
            <select name="estadoCivil" class="form-control @error('estadoCivil') is-invalid @enderror" value="{{ old('estadoCivil', $datospersona?->estadoCivil) }}" id="estado_civil">
                <option value="Soltero/a" {{ $datospersona?->estadoCivil == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                <option value="Casado/a" {{ $datospersona?->estadoCivil == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                <option value="Compromiso" {{ $datospersona?->estadoCivil == 'Concubinato' ? 'selected' : '' }}>Concubinato</option>
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
        </div>
        <div class="form-group mb-2 mb20">
            <label for="carnetidentidad" class="form-label">{{ __('Carnet Identidad') }}</label>
            <input type="text" name="carnetidentidad" class="form-control @error('carnetidentidad') is-invalid @enderror" value="{{ old('carnetidentidad', $datospersona?->carnetidentidad) }}" id="carnetidentidad">
            {!! $errors->first('carnetidentidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciexpedido" class="form-label">{{ __('Ci Expedido en') }}</label>
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
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('Registrado por') }}</label>
            <input readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
            <input class="form-control" type="text" readonly value="{{ auth()->user()->name }}">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
