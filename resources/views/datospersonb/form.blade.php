

<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1 text-sm">
    <div class=" col-md-12  text-sm">
        <div class="form-group row  text-sm">
            @csrf
            <div class="form-group col-md-4 text-sm">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="datospersona_id" class="form-label  text-sm">{{ __('Docente') }}</label>

                    <select class="text-sm form-control text-sm @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                        <option value="">Seleccione...</option>
                        @foreach ($datospersonas as $datospersona)
                            @php
                                $isRegistered = \App\Models\datospersonb::where('datospersona_id', $datospersona->id)->exists();
                            @endphp
                            <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $datospersonb?->datospersona_id) ?: '') ? 'selected' : '' }} {{ $isRegistered ? 'disabled' : '' }}>
                                {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                            </option>
                        @endforeach
                    </select>
                    {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                    <div class="form-group mb-2 mb20 text-sm">
                        <label for="fecharegistro" class="form-label text-sm">{{ __('Fecha Registro') }}</label>
                        <input readonly required type="text" name="fecharegistro" class="form-control text-sm @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersonb?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                        {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20 text-sm">
                        <label title="Registrado por" for="user_id" class="form-label text-sm">{{ __('Registrado por') }}</label>
                        <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control text-sm @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                        <input title="Registrado por" class="form-control text-sm" type="text" readonly='true' value="{{ auth()->user()->name }}">
                        {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
            </div>
            <div class="form-group col-md-4 text-sm">

                <div class="form-group mb-2 mb20 text-sm">
                    <label for="idiomaNativo" class="form-label text-sm">{{ __('Idioma Nativo') }}</label>
                    <select class="form-control text-sm @error('idiomaNativo') is-invalid @enderror" name="idiomaNativo" id="idiomaNativo" required>
                        <option value="Español" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Español' ? 'selected' : '' }}>Español</option>
                        <option value="Inglés" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                        <option value="Portugués" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Portugués' ? 'selected' : '' }}>Portugués</option>
                        <option value="Frances" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Frances' ? 'selected' : '' }}>Frances</option>
                        <option value="Italiano" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                        <option value="Chino" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Chino' ? 'selected' : '' }}>Chino</option>
                        <option value="Japones" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Japones' ? 'selected' : '' }}>Japones</option>
                        <option value="Coreano" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Coreano' ? 'selected' : '' }}>Coreano</option>
                        <option value="Aleman" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Aleman' ? 'selected' : '' }}>Aleman</option>
                        <option value="Ruso" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                        <option value="Quechua" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                        <option value="Aymara" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                        <option value="Guarani" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == 'Guarani' ? 'selected' : '' }}>Guarani</option>
                    </select>
                    {!! $errors->first('idiomaNativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomaescritura" class="form-label text-sm">{{ __('Nivel de Escritura') }}</label>
                    <select name="nivelidiomaescritura" id="nivelidiomaescritura" class="form-control text-sm @error('nivelidiomaescritura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomalectura" class="form-label text-sm">{{ __('Nivel de Lectura') }}</label>
                    <select name="nivelidiomalectura" id="nivelidiomalectura" class="form-control text-sm @error('nivelidiomalectura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomalectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomahabla" class="form-label text-sm">{{ __('Nivel de Habla') }}</label>
                    <select name="nivelidiomahabla" id="nivelidiomahabla" class="form-control text-sm @error('nivelidiomahabla') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomahabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="form-group col-md-4 text-sm">
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="idiomaSecundario" class="form-label text-sm">{{ __('Idioma Secundario') }}</label>
                    <select class="form-control text-sm @error('idiomaSecundario') is-invalid @enderror" name="idiomaSecundario" id="idiomaSecundario">
                        <option value="Ninguno" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
                        <option value="Inglés" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Inglés' ? 'selected' : '' }}>Inglés</option>
                        <option value="Español" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Español' ? 'selected' : '' }}>Español</option>
                        <option value="Portugués" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Portugués' ? 'selected' : '' }}>Portugués</option>
                        <option value="Frances" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Frances' ? 'selected' : '' }}>Frances</option>
                        <option value="Italiano" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                        <option value="Chino" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Chino' ? 'selected' : '' }}>Chino</option>
                        <option value="Japones" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Japones' ? 'selected' : '' }}>Japones</option>
                        <option value="Coreano" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Coreano' ? 'selected' : '' }}>Coreano</option>
                        <option value="Aleman" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Aleman' ? 'selected' : '' }}>Aleman</option>
                        <option value="Ruso" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                        <option value="Quechua" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                        <option value="Aymara" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                        <option value="Guarani" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Guarani' ? 'selected' : '' }}>Guarani</option>
                    </select>
                    {!! $errors->first('idiomaSecundario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomaSecundarioescritura" class="form-label text-sm">{{ __('Nivel de Escritura') }}</label>
                    <select name="nivelidiomaSecundarioescritura" id="nivelidiomaSecundarioescritura" class="form-control text-sm @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomaSecundariolectura" class="form-label text-sm">{{ __('Nivel de Lectura') }}</label>
                    <select name="nivelidiomaSecundariolectura" id="nivelidiomaSecundariolectura" class="form-control text-sm @error('nivelidiomaSecundariolectura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20 text-sm">
                    <label for="nivelidiomaSecundariohabla" class="form-label text-sm">{{ __('Nivel de Habla') }}</label>
                    <select name="nivelidiomaSecundariohabla" id="nivelidiomaSecundariohabla" class="form-control text-sm @error('nivelidiomaSecundariohabla') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary text-sm">{{ __('Registrar') }}</button>
        <button type="button" onclick="history.back()" class="btn btn-secondary text-sm">{{ __('Volver') }}</button>
     </div>
</div>


