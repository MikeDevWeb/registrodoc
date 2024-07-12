<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

<div class="row padding-1 p-1">
    <div class="col-md-12  text-sm">
        <div class="row">
            <div class="col-md-4 text-sm">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                    <input readonly autocomplete="@php echo $datospersona?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')@endphp" type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersona?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                    {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nombre" class="form-label text-sm">{{ __('Nombre') }}</label>
                    <input type="text" name="nombre" class="form-control text-sm @error('nombre') is-invalid @enderror" value="{{ old('nombre', $datospersona?->nombre) }}" id="nombre" placeholder="Nombre">
                    {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="apellido_paterno" class="form-label text-sm">{{ __('Apellido Paterno') }}</label>
                    <input type="text" name="apellidoPaterno" class="form-control text-sm @error('apellidoPaterno') is-invalid @enderror" value="{{ old('apellidoPaterno', $datospersona?->apellidoPaterno) }}" id="apellido_paterno">
                    {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="apellido_materno" class="form-label text-sm">{{ __('Apellido Materno') }}</label>
                    <input type="text" name="apellidoMaterno" class="form-control text-sm @error('apellidoMaterno') is-invalid @enderror" value="{{ old('apellidoMaterno', $datospersona?->apellidoMaterno) }}" id="apellido_materno">
                    {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="profesion" class="form-label text-sm">{{ __('Profesión') }}</label>
                    <select name="profesion" class="form-control text-sm @error('profesion') is-invalid @enderror" id="profesion">
                        <option value="" disabled selected>Seleccione...</option>
                        @foreach ($profesiones as $profesion)
                            <option value="{{ $profesion }}" {{ old('profesion', $datospersona?->profesion) == $profesion ? 'selected' : '' }}>
                                {{ $profesion }}
                            </option>
                        @endforeach
                    </select>

                    @error('profesion')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    {!! $errors->first('profesion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>

                <div class="form-group mb-2 mb20 text-sm">
                    <label for="lugar_nacimiento" class="form-label text-sm">{{ __('Lugar de nacimiento') }}</label>
                    <select class="form-control text-sm @error('lugarNacimiento') is-invalid @enderror" name="lugarNacimiento" id="lugar_nacimiento" required>
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
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="fecha_nacimiento" class="form-label text-sm">{{ __('Fecha de nacimiento') }}</label>
                    <input type="date" name="fechaNacimiento" class="form-control text-sm @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento', $datospersona?->fechaNacimiento) }}" id="fecha_nacimiento">
                    {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="edad" class="form-label text-sm">{{ __('Edad') }}</label>
                    <input type="number" name="edad" class="form-control text-sm @error('edad') is-invalid @enderror" value="{{ old('edad', $datospersona?->edad) }}" id="edad" min="25" max="80" maxlength="2" oninput="this.value = this.value.slice(0, this.maxLength)" pattern="[0-9]{0,2}">
                    {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="estado_civil" class="form-label text-sm">{{ __('Estado civil') }}</label>
                    <select name="estadoCivil" class="form-control text-sm @error('estadoCivil') is-invalid @enderror" value="{{ old('estadoCivil', $datospersona?->estadoCivil) }}" id="estado_civil">
                        <option value="Soltero/a" {{ $datospersona?->estadoCivil == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                        <option value="Casado/a" {{ $datospersona?->estadoCivil == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                        <option value="Concubinato" {{ $datospersona?->estadoCivil == 'Concubinato' ? 'selected' : '' }}>Concubinato</option>
                        <option value="Viudo/a" {{ $datospersona?->estadoCivil == 'Viudo/a' ? 'selected' : '' }}>Viudo/a</option>
                    </select>
                    {!! $errors->first('estadoCivil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="sexo" class="form-label text-sm">{{ __('Sexo') }}</label>
                    <select name="sexo" class="form-control text-sm @error('sexo') is-invalid @enderror" id="sexo">
                        <option value="Masculino" {{ $datospersona?->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ $datospersona?->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                      </select>
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="carnetidentidad" class="form-label text-sm">{{ __('Carnet Identidad') }}</label>
                    <input type="text" name="carnetidentidad" class="form-control text-sm @error('carnetidentidad') is-invalid @enderror" value="{{ old('carnetidentidad', $datospersona?->carnetidentidad) }}" id="carnetidentidad">
                    {!! $errors->first('carnetidentidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="ciexpedido" class="form-label text-sm">{{ __('Ci Expedido en') }}</label>
                    <select class="form-control text-sm @error('ciexpedido') is-invalid @enderror" name="ciexpedido" id="ciexpedido">
                        <option value="LP" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'LP') selected @endif>LP - La Paz</option>
                        <option value="OR" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'OR') selected @endif>OR - Oruro</option>
                        <option value="PT" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'PT') selected @endif>PT - Potosi</option>
                        <option value="CB" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'CB') selected @endif>CB - Cochabamba</option>
                        <option value="SC" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'SC') selected @endif>SC - Santa Cruz</option>
                        <option value="BN" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'BN') selected @endif>BN - Beni</option>
                        <option value="PA" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'PA') selected @endif>PA - Pando</option>
                        <option value="TJ" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'TJ') selected @endif>TJ - Tarija</option>
                        <option value="CH" @if(old('ciexpedido', $datospersona?->ciexpedido) == 'CH') selected @endif>CH - Chuquisaca</option>
                        <option value=" " @if(old('ciexpedido', $datospersona?->ciexpedido) == ' ') selected @endif>" "</option>
                    </select>
                    {!! $errors->first('ciexpedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                    <input readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                    <input class="form-control text-sm" type="text" readonly value="{{ auth()->user()->name }}">
                    {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn-sm btn-primary">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn-sm btn-secondary">{{ __('Volver') }}</button>

    </div>
</div>
