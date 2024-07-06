{{-- <div class="container">
    <div class="row mt20 mb20">
        <div class="col-md-12">
            <div class="row">
                <div class="form-group col-md-4">
                    <div class="form-group mb-2 mb20">
                        <label for="idiomaNativo" class="form-label">{{ __('Idioma Primario') }}</label>
                        <select class="form-control @error('idiomaNativo') is-invalid @enderror" name="idiomaNativo" id="idiomaNativo" required>
                            @foreach (['Español', 'Inglés', 'Portugués', 'Francés', 'Italiano', 'Chino', 'Japonés', 'Coreano', 'Alemán', 'Ruso', 'Quechua', 'Aymara', 'Guaraní'] as $idioma)
                                <option value="{{ $idioma }}" {{ old('idiomaNativo', $datospersona?->idiomaNativo) == $idioma ? 'selected' : '' }}>{{ $idioma }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idiomaNativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidioma_lectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                        <select name="nivelidioma_lectura" id="nivelidioma_lectura" class="form-control @error('nivelidioma_lectura') is-invalid @enderror">
                            @foreach (['Bajo', 'Medio', 'Alto'] as $nivel)
                                <option value="{{ $nivel }}" {{ old('nivelidioma_lectura', $datospersonb?->nivelidioma_lectura) == $nivel ? 'selected' : '' }}>{{ $nivel }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('nivelidioma_lectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidioma_habla" class="form-label">{{ __('Nivel de Habla') }}</label>
                        <select name="nivelidioma_habla" id="nivelidioma_habla" class="form-control @error('nivelidioma_habla') is-invalid @enderror">
                            @foreach (['Bajo', 'Medio', 'Alto'] as $nivel)
                                <option value="{{ $nivel }}" {{ old('nivelidioma_habla', $datospersonb?->nivelidioma_habla) == $nivel ? 'selected' : '' }}>{{ $nivel }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('nivelidioma_habla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-group mb-2 mb20">
                        <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                        <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersonb?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                        {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="idiomaSecundario" class="form-label">{{ __('Idioma Secundario') }}</label>
                        <select class="form-control @error('idiomaSecundario') is-invalid @enderror" name="idiomaSecundario" id="idiomaSecundario" required>
                            @foreach (['Español', 'Inglés', 'Portugués', 'Francés', 'Italiano', 'Chino', 'Japonés', 'Coreano', 'Alemán', 'Ruso', 'Quechua', 'Aymara', 'Guaraní'] as $idioma)
                                <option value="{{ $idioma }}" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == $idioma ? 'selected' : '' }}>{{ $idioma }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idiomaSecundario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundarioescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                        <select name="nivelidiomaSecundarioescritura" id="nivelidiomaSecundarioescritura" class="form-control @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
                            @foreach (['Bajo', 'Medio', 'Alto'] as $nivel)
                                <option value="{{ $nivel }}" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == $nivel ? 'selected' : '' }}>{{ $nivel }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundariolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                        <select name="nivelidiomaSecundariolectura" id="nivelidiomaSecundariolectura" class="form-control @error('nivelidiomaSecundariolectura') is-invalid @enderror">
                            @foreach (['Bajo', 'Medio', 'Alto'] as $nivel)
                                <option value="{{ $nivel }}" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == $nivel ? 'selected' : '' }}>{{ $nivel }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundariohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                        <select name="nivelidiomaSecundariohabla" id="nivelidiomaSecundariohabla" class="form-control @error('nivelidiomaSecundariohabla') is-invalid @enderror">
                            @foreach (['Bajo', 'Medio', 'Alto'] as $nivel)
                                <option value="{{ $nivel }}" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == $nivel ? 'selected' : '' }}>{{ $nivel }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-group mb-2 mb20">
                        <label title="Registrado por" for="user_id" class="form-label">{{ __('Registrado por') }}</label>
                        <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                        <input title="Registrado por" class="form-control" type="text" readonly='true' value="{{ auth()->user()->name }}">
                        {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt20 mt-2">
                <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
            </div>
        </div>
    </div>
</div>
 --}}


<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
<div class="row padding-1 p-1 text-sm">
    <div class=" col-md-12 ">
        <div class="form-group row">
            @csrf
            <div class="form-group col-md-4">
                <div class="form-group md-4 mb-2 mb20">
                    <label for="datospersona_id" class="form-label">{{ __('Nombre Docente') }}</label>

                    <select class="form-control @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                        <option value="">Seleccione...</option>
                        @foreach ($datospersonas as $datospersona)
                            <option value="{{ $datospersona->id }}" {{ $datospersona->id == (old('datospersona_id', $datospersonb?->datospersona_id) ?: '') ? 'selected' : '' }}>
                                {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                            </option>
                        @endforeach
                    </select>
                    {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                {{-- <div class="form-group md-4 mb-2 mb20">
                    <label for="docente" class="form-label">{{ __('Docente') }}</label>
                    <input type="text" name="datospersona_id" class="form-control @error('datospersona_id') is-invalid @enderror" value="{{ old('datospersona_id', $datospersonb?->datospersona_id) }}" id="datospersona_id" placeholder="">
                    {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div> --}}
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
            </div>
            <div class="form-group col-md-4">

                <div class="form-group mb-2 mb20">
                    <label for="idiomaNativo" class="form-label">{{ __('Idioma Nativo') }}</label>
                    <select class="form-control @error('idiomaNativo') is-invalid @enderror" name="idiomaNativo" id="idiomaNativo" required>
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

                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomaescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                    <select name="nivelidiomaescritura" id="nivelidiomaescritura" class="form-control @error('nivelidiomaescritura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaescritura', $datospersonb?->nivelidiomaescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomalectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                    <select name="nivelidiomalectura" id="nivelidiomalectura" class="form-control @error('nivelidiomalectura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomalectura', $datospersonb?->nivelidiomalectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomalectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomahabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                    <select name="nivelidiomahabla" id="nivelidiomahabla" class="form-control @error('nivelidiomahabla') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomahabla', $datospersonb?->nivelidiomahabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomahabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                    <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersonb?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                    {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="form-group col-md-4">

                <div class="form-group mb-2 mb20">
                    <label for="idiomaSecundario" class="form-label">{{ __('Idioma Secundario') }}</label>
                    <select class="form-control @error('idiomaSecundario') is-invalid @enderror" name="idiomaSecundario" id="idiomaSecundario" required>
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

                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomaSecundarioescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                    <select name="nivelidiomaSecundarioescritura" id="nivelidiomaSecundarioescritura" class="form-control @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomaSecundariolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                    <select name="nivelidiomaSecundariolectura" id="nivelidiomaSecundariolectura" class="form-control @error('nivelidiomaSecundariolectura') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="nivelidiomaSecundariohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                    <select name="nivelidiomaSecundariohabla" id="nivelidiomaSecundariohabla" class="form-control @error('nivelidiomaSecundariohabla') is-invalid @enderror">
                      <option value="">Seleccione...</option>
                      <option value="Bajo" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                      <option value="Medio" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                      <option value="Alto" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                    </select>
                    {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label title="Registrado por" for="user_id" class="form-label">{{ __('Registrado por') }}</label>
                    <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                    <input title="Registrado por" class="form-control" type="text" readonly='true' value="{{ auth()->user()->name }}">
                    {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
     </div>
</div>



{{-- <form method="POST" action="{{ 'datospersonb' }}">
    @csrf
    <link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">
    <div class="row padding-1 p-1 text-sm">
        <div class="col-md-12">
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <div class="form-group md-4 mb-2 mb20">
                        <label for="datospersona_id" class="form-label">{{ __('Nombre Docente') }}</label>
                        @php
                            use App\Models\Datospersona;
                            $datospersonas = Datospersona::all();
                        @endphp
                        <select class="form-control @error('datospersona_id') is-invalid @enderror" name="datospersona_id" id="datospersona_id">
                            <option value="">Seleccione...</option>
                            @foreach ($datospersonas as $datospersona)
                                @php
                                    $selected = old('datospersona_id', $datospersonb?->datospersona_id) == $datospersona->id ? 'selected' : '';
                                @endphp
                                @if (!$datospersonb || $datospersonb->datospersona_id != $datospersona->id)
                                    <option value="{{ $datospersona->id }}" {{ $selected }}>
                                        {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        {!! $errors->first('datospersona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <!-- Resto del código del formulario -->
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
                </div>
                <div class="form-group col-md-4">
                    <div class="form-group mb-2 mb20">
                        <label for="idiomaNativo" class="form-label">{{ __('Idioma Nativo') }}</label>
                        <select class="form-control @error('idiomaNativo') is-invalid @enderror" name="idiomaNativo" id="idiomaNativo" required>
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
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaNativoescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                        <select name="nivelidiomaNativoescritura" id="nivelidiomaNativoescritura" class="form-control @error('nivelidiomaNativoescritura') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaNativoescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaNativolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                        <select name="nivelidiomaNativolectura" id="nivelidiomaNativolectura" class="form-control @error('nivelidiomaNativolectura') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaNativolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaNativohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                        <select name="nivelidiomaNativohabla" id="nivelidiomaNativohabla" class="form-control @error('nivelidiomaNativohabla') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaNativohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                        <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersonb?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                        {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-group mb-2 mb20">
                        <label for="idiomaSecundario" class="form-label">{{ __('Idioma Secundario') }}</label>
                        <select class="form-control @error('idiomaSecundario') is-invalid @enderror" name="idiomaSecundario" id="idiomaSecundario" required>
                            <option value="Español" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Español' ? 'selected' : '' }}>Español</option>
                            <option value="Inglés" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Inglés' ? 'selected' : '' }}>Inglés</option>
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
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundarioescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                        <select name="nivelidiomaSecundarioescritura" id="nivelidiomaSecundarioescritura" class="form-control @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundariolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                        <select name="nivelidiomaSecundariolectura" id="nivelidiomaSecundariolectura" class="form-control @error('nivelidiomaSecundariolectura') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label for="nivelidiomaSecundariohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                        <select name="nivelidiomaSecundariohabla" id="nivelidiomaSecundariohabla" class="form-control @error('nivelidiomaSecundariohabla') is-invalid @enderror">
                            <option value="">Seleccione...</option>
                            <option value="Bajo" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                            <option value="Medio" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                            <option value="Alto" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                        </select>
                        {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <label title="Registrado por" for="user_id" class="form-label">{{ __('Registrado por') }}</label>
                        <input title="Registrado por" readonly hidden required type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ auth()->user()->id }}" id="user_id">
                        <input title="Registrado por" class="form-control" type="text" readonly='true' value="{{ auth()->user()->name }}">
                        {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt20 mt-2">
                <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
             </div>
        </div>
    </div>
</div>

{{--


@section('content')
<div class="container">
    <h1>Crear Nuevo Registro</h1>
    <form action="{{ route('datospersonb.store') }}" method="POST">
        @csrf

        <!-- Campo Fecha de Registro -->
        <div class="form-group">
            <label for="fecharegistro">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecharegistro" name="fecharegistro" required>
        </div>

        <!-- Campo Dirección -->
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <!-- Campo Teléfono -->
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>

        <!-- Campo Celular -->
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" required>
        </div>

        <!-- Campo Correo -->
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>

        <div class="form-group col-md-4">
            <div class="form-group mb-2 mb20">
                <label for="idiomaNativo" class="form-label">{{ __('Idioma Nativo') }}</label>
                <select class="form-control @error('idiomaNativo') is-invalid @enderror" name="idiomaNativo" id="idiomaNativo" required>
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
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaNativoescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                <select name="nivelidiomaNativoescritura" id="nivelidiomaNativoescritura" class="form-control @error('nivelidiomaNativoescritura') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaNativoescritura', $datospersonb?->nivelidiomaNativoescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaNativoescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaNativolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                <select name="nivelidiomaNativolectura" id="nivelidiomaNativolectura" class="form-control @error('nivelidiomaNativolectura') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaNativolectura', $datospersonb?->nivelidiomaNativolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaNativolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaNativohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                <select name="nivelidiomaNativohabla" id="nivelidiomaNativohabla" class="form-control @error('nivelidiomaNativohabla') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaNativohabla', $datospersonb?->nivelidiomaNativohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaNativohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                <input readonly required type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersonb?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
                {!! $errors->first('fecharegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group mb-2 mb20">
                <label for="idiomaSecundario" class="form-label">{{ __('Idioma Secundario') }}</label>
                <select class="form-control @error('idiomaSecundario') is-invalid @enderror" name="idiomaSecundario" id="idiomaSecundario" required>
                    <option value="Español" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Español' ? 'selected' : '' }}>Español</option>
                    <option value="Inglés" {{ old('idiomaSecundario', $datospersona?->idiomaSecundario) == 'Inglés' ? 'selected' : '' }}>Inglés</option>
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
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaSecundarioescritura" class="form-label">{{ __('Nivel de Escritura') }}</label>
                <select name="nivelidiomaSecundarioescritura" id="nivelidiomaSecundarioescritura" class="form-control @error('nivelidiomaSecundarioescritura') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaSecundarioescritura', $datospersonb?->nivelidiomaSecundarioescritura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaSecundarioescritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaSecundariolectura" class="form-label">{{ __('Nivel de Lectura') }}</label>
                <select name="nivelidiomaSecundariolectura" id="nivelidiomaSecundariolectura" class="form-control @error('nivelidiomaSecundariolectura') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaSecundariolectura', $datospersonb?->nivelidiomaSecundariolectura) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaSecundariolectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="nivelidiomaSecundariohabla" class="form-label">{{ __('Nivel de Habla') }}</label>
                <select name="nivelidiomaSecundariohabla" id="nivelidiomaSecundariohabla" class="form-control @error('nivelidiomaSecundariohabla') is-invalid @enderror">
                    <option value="">Seleccione...</option>
                    <option value="Bajo" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
                    <option value="Medio" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Medio' ? 'selected' : '' }}>Medio</option>
                    <option value="Alto" {{ old('nivelidiomaSecundariohabla', $datospersonb?->nivelidiomaSecundariohabla) == 'Alto' ? 'selected' : '' }}>Alto</option>
                </select>
                {!! $errors->first('nivelidiomaSecundariohabla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <!-- Campo Datospersona -->
        <div class="form-group">
            <label for="datospersona_id">Persona</label>
            <select class="form-control" id="datospersona_id" name="datospersona_id" required>
                @foreach($datospersonas as $datospersona)
                    <option value="{{ $datospersona->id }}">{{ $datospersona->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Campo Usuario (Oculto) -->
        <input type="hidden" name="user_id" value="{{ $user->id }}">

        <!-- Mostrar Nombre del Usuario Actual -->
        <div class="form-group">
            <label>Registrado por:</label>
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>

        <!-- Botón de Envío -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection --}}
