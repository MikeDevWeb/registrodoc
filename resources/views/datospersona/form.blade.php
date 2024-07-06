<link rel="icon" href="{{ asset('vendor/adminlte/dist/img/ICONO_esam.png') }}" type="image/png" sizes="16x16">

<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-2 mb20">
                    <label for="fecharegistro" class="form-label">{{ __('Fecha Registro') }}</label>
                    <input readonly autocomplete="@php echo $datospersona?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')@endphp" type="text" name="fecharegistro" class="form-control @error('fecharegistro') is-invalid @enderror" value="{{ old('fecharegistro', $datospersona?->fecharegistro ?? \Carbon\Carbon::now()->format('Y-m-d')) }}" id="fecharegistro">
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

            </div>
            <div class="col-md-4">
                <div class="form-group mb-2 mb20">
                    <label for="profesion" class="form-label">{{ __('Profesión') }}</label>
                    <input type="text" list="profesiones" name="profesion" class="form-control @error('profesion') is-invalid @enderror" id="profesion" value="{{ old('profesion', $datospersona?->profesion) }}" placeholder="Seleccione...">
                    <datalist id="profesiones">
                        @php
                            $profesiones = [
                                'Arqueología',
                                'Chef',
                                'Historia',
                                'Ing. Aeroespacial',
                                'Ing. Aeronáutica',
                                'Ing. Agroindustrial',
                                'Ing. Agronómica',
                                'Ing. Agropecuaria',
                                'Ing. Ambiental',
                                'Ing. En Biología Marina',
                                'Ing. Biomédica',
                                'Ing. De Alimentos',
                                'Ing. De Recursos Hídricos',
                                'Ing. Electrónica',
                                'Ing. Electromecánica',
                                'Ing. En Desarrollo Rural Sostenible',
                                'Ing. En Eco Piscicultura',
                                'Ing. En Ecología Y Medio Ambiente',
                                'Ing. En Gas Y Petróleo',
                                'Ing. En Geodesia',
                                'Ing. En Irrigación',
                                'Ing. En Materiales',
                                'Ing. En Minas',
                                'Ing. En Redes Y Telecomunicaciones',
                                'Ing. En Robótica',
                                'Ing. Financiera',
                                'Ing. Forestal',
                                'Ing. Geográfica',
                                'Ing. Industrial',
                                'Ing. Informática',
                                'Ing. Mecánica',
                                'Ing. Mecatrónica',
                                'Ing. Metalúrgica',
                                'Ing. Meteorológica',
                                'Ing. Nuclear',
                                'Ing. Petro Ambientalista',
                                'Ing. Petrolera',
                                'Ing. Petroquímica',
                                'Ing. Química',
                                'Ing. Sanitario Y Ambiental',
                                'Ing. Tecnologías De Información Y Seguridad',
                                'Ing. Telecomunicaciones',
                                'Ing. Zootécnico',
                                'Lic. Construcción Civil',
                                'Lic. Diseño De Interiores E Inmobiliario',
                                'Lic. En Administración De Empresas',
                                'Lic. En Administración Financiera',
                                'Lic. En Administración Y Gestión Publica',
                                'Lic. En Antropología',
                                'Lic. En Arquitectura Y Urbanismo',
                                'Lic. En Bio-Imagenología',
                                'Lic. En Ciencias De La Comunicación Social',
                                'Lic. En Ciencias De La Educación',
                                'Lic. En Comercio Internacional',
                                'Lic. En Contaduría Pública',
                                'Lic. En Derecho',
                                'Lic. En Diseño Gráfico Y Comunicación Visual',
                                'Lic. En Economía',
                                'Lic. En Educación Técnica Y Tecnológica',
                                'Lic. En Enfermería',
                                'Lic. En Estadística',
                                'Lic. En Filosofía Y Letras',
                                'Lic. En Física',
                                'Lic. En Fisioterapia Y Kinesiología',
                                'Lic. En Fonoaudiología',
                                'Lic. En Gestión Ambiental',
                                'Lic. En Gestión Del Desarrollo Endógeno Y Agroecología',
                                'Lic. En Idiomas Inglés Y Francés',
                                'Lic. En Laboratorio Clínico',
                                'Lic. En Marketing Y Publicidad',
                                'Lic. En Matemática',
                                'Lic. En Mecánica Industrial',
                                'Lic. En Medicina',
                                'Lic. En Medicina Veterinaria Y Zootecnia',
                                'Lic. En Negocios Internacionales',
                                'Lic. En Nutrición Y Dietética',
                                'Lic. En Odontología',
                                'Lic. En Orden Y Seguridad',
                                'Lic. En Pedagogía Social',
                                'Lic. En Psicología',
                                'Lic. En Psicopedagogía',
                                'Lic. En Química Industrial',
                                'Lic. En Relaciones Internacionales',
                                'Lic. En Teología',
                                'Lic. En Trabajo Social',
                                'Lic. En Turismo',
                                'Lic. Planificación Territorial',
                                'Lic. Psicomotricidad',
                                'Lic. Técnica Tecnológica General',
                                'Oficial De Policía',
                                'Optometría',
                                'Profesor',
                                'Químico Farmacéutico',
                                'Sociólogo',
                                'Técnico En Bibliotecología',
                                'Técnico Medio En Gastronomía',
                                'Técnico Superior En Electricidad Industrial',
                                'Técnico Superior En Electromecánica',
                                'Técnico Superior En Mantenimiento De Equipo Pesado',
                                'Técnico Superior En Química Industrial',
                                'Técnico Superior En Secretariado Ejecutivo',
                                'Técnico Superior En Topografía',
                                'Lic. En Agronomía',
                                'Ing. En Agronomía',
                                'Agrimensor',
                                'Lic. En Ingeniería Agrónoma',
                                'Ing. En Fitotecnia',
                                'Ing. Agrícola',
                                'Ing. En Mecánica Agropecuaria',
                                'Ing. Acuicultor',
                                'Lic. En Ingeniería Civil',
                                'Lic. En Construcción Civil',
                                'Ing. Civil',
                                'Ing. Comercial',
                                'Ing. En Recursos Naturales',
                                'Ing. Eléctrico',
                                'Técnico Electrónico',
                                'Ing. Electrónico',
                                'Ing. En Sistemas Electrónicos',
                                'Ing. Eléctrico',
                                'Lic. En Electricidad',
                                'Lic. En Ingeniería Electrónica',
                                'Ing. Eléctrico',
                                'Ing. Electricista',
                                'Ing. En Electromecánica',
                                'Lic. En Electro Mecánica',
                                'Ing. Desarrollo Rural',
                                'Ing. En Desarrollo Socioeconómico Y Ambiente',
                                'Ing. En Geodesia Y Topografía',
                                'Ing. Geológica',
                                'Lic. En Ingeniería Geológica',
                                'Lic. En Ingeniería En Redes Y Telecomunicaciones',
                                'Ing. Agroforestal',
                                'Ing. Geográfica	Militar',
                                'Ing. En Geografía',
                                'Ing. Industrial',
                                'Lic. En Ingeniería De Sistemas',
                                'Lic. En Informática',
                                'Ing. Informático',
                                'Ing. De Sistemas',
                                'Lic. En Ingeniería Mecánica Automotriz',
                                'Técnico Superior Mecánica Automotriz',
                                'Mecánico',
                                'Ing. Mecánico',
                                'Lic. Ingeniería Química Industrial',
                                'Ing. Químico Tecnólogo En El Carbono Y Sus Derivados',
                                'Técnico Superior Electrónica Y Telecomunicaciones',
                                'Administradora De Empresas',
                                'Lic. En Antropología',
                                'Lic. En Arquitectura',
                                'Arquitecto Urbanista',
                                'Médico Especialista En Radiología',
                                'Lic. En Comunicación Social',
                                'Comunicador Audiovisual Con Mención En Radio Y Televisión',
                                'Lic. En Educación',
                                'Lic. En Educación Especial',
                                'Lic. En Ciencias De La Educación Para El Desarrollo Humano',
                                'Lic. En Auditoría Y Contaduría Pública',
                                'Contador General',
                                'Contaduría Pública Y Auditoria Forense',
                                'Contaduría Financiera',
                                'Contaduría Pública Con Autorización',
                                'Auditoría Financiera',
                                'Lic. En Auditoria',
                                'Lic. En Contabilidad Y Finanzas',
                                'Lic. En Contaduría Y Auditoría De Sistemas',
                                'Lic. Auditoría Contaduría Pública',
                                'Abogacía',
                                'Lic. En Ciencias Jurídicas',
                                'Lic. En Ciencias Políticas',
                                'Lic. En Derecho Ciencias Políticas Y Sociales',
                                'Lic. En Ciencias Jurídicas Y Políticas',
                                'Lic. En Derecho Y Ciencias Jurídicas',
                                'Economista',
                                'Lic. En Educación Técnica Y Tecnológica',
                                'Lic. En Educación Intercultural Innovadora',
                                'Lic. En Administración Educativa',
                                'Educador Especial',
                                'Lic. Educación Técnica Tecnológica',
                                'Lic. En Enfermería Y Obstetricia',
                                'Técnico Medio En Enfermería',
                                'Técnico Medio En Auxiliar De Enfermería',
                                'Lic. En Enfermería',
                                'Auxiliar En Enfermería',
                                'Técnico Medio En Enfermería',
                                'Lic. En Enfermería Obstetríz',
                                'Fisioterapeuta',
                                'Lic. En Fisioterapia Y Kinesiología',
                                'Ing. En Sonido',
                                'Fonoaudiología',
                                'Ing. En Medio Ambiente',
                                'Lic. En Lingüística Aplicada A La Enseñanza De Lenguas',
                                'Lic. En Lingüística E Idiomas',
                                'Lic. En Idioma Inglés',
                                'Lic. En Educación Intercultural Bilingüe',
                                'Médico Cirujano',
                                'Doctor En Medicina',
                                'Médico Integral Comunitario',
                                'Lic. Medicina Forense',
                                'Médico General',
                                'Medico Integral Comunitario',
                                'Doctor Anestesiólogo',
                                'Especialista En Pediatría',
                                'Medicina Familiar',
                                'Médico Internista',
                                'Médico Reumatólogo',
                                'Médico Ginecólogo Obstetra',
                                'Ing. Médico Anestesista',
                                'Medico Anestesiólogo',
                                'Médico Veterinario',
                                'Nutricionista',
                                'Lic. En Odontología',
                                'Cirujano Dentista',
                                'Lic. En Pedagogía',
                                'Lic. En Psicología',
                                'Trabajadora Social',
                                'Licenciada En Trabajo Social',
                                'Lic. En Turismo Y Hotelería',
                                'Lic. En Turismo',
                                'Lic. Técnica Tecnológica Comunitaria',
                                'Lic. Ciencias Policiales',
                                'Funcionario Policial',
                                'Lic. En Ciencias Y Artes Militares Navales',
                                'Lic. Ciencias Militares Terrestres',
                                'Lic. En Educación Escolar',
                                'Educación Parvularia',
                                'Lic. En Ciencias Naturales: Biología - Geografía',
                                'Educación Secundaria Comunitaria',
                                'Lic. En Educación Inicial En Familia Comunitaria',
                                'Maestro De Cosmovisiones, Filosofía Y Psicología',
                                'Maestra De Técnica Tecnológica General',
                                'Maestra De Educación Primaria Comunitaria Vocacional',
                                'Maestra De Matemática',
                                'Educación Secundaria Comunitaria Productiva',
                                'Maestra De Educación Alternativa Educación De Personas Jóvenes Y Adultas',
                                'Maestra De Física Y Química',
                                'Lic. En Ciencias Naturales: Física-Química',
                                'Lic. En Geografía',
                                'Lic. Literatura',
                                'Lic. En Actividad Física',
                                'LIC. En Bioquímica',
                                'Químico Farmacéutico',
                                'Lic. Laboratorista',
                                'Lic. En Farmacia',
                                'Lic. En Bioquímico Farmacéutico',
                                'Lic. En Laboratorio Clínico',
                                'Lic. Farmacia Y Bioquímica',
                                'Lic. En Bioquímica Y Farmacia',
                                'Lic. En Química Farmacéutica',
                                'Lic. En Bioquímica Farmacéutica',
                                'Licenciatura En Sociología',
                                'Relaciones Internacionales',
                                'Técnico Superior En Topografía',
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
                    <label for="fecha_nacimiento" class="form-label">{{ __('Fecha de nacimiento') }}</label>
                    <input type="date" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento', $datospersona?->fechaNacimiento) }}" id="fecha_nacimiento">
                    {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="lugar_nacimiento" class="form-label">{{ __('Lugar de nacimiento') }}</label>
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
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2 mb20">
                    <label for="estado_civil" class="form-label">{{ __('Estado civil') }}</label>
                    <select name="estadoCivil" class="form-control @error('estadoCivil') is-invalid @enderror" value="{{ old('estadoCivil', $datospersona?->estadoCivil) }}" id="estado_civil">
                        <option value="Soltero/a" {{ $datospersona?->estadoCivil == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                        <option value="Casado/a" {{ $datospersona?->estadoCivil == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                        <option value="Concubinato" {{ $datospersona?->estadoCivil == 'Concubinato' ? 'selected' : '' }}>Concubinato</option>
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
                        <option value=" " @if(old('ciexpedido', $datospersona?->ciexpedido) == ' ') selected @endif>" "</option>

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
        </div>



    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>




 {{--
                    <select name="profesion" class="form-control @error('profesion') is-invalid @enderror" id="profesion" oninput="this.selectedIndex=this.options.length-1;">
                        <option value="">Seleccione...</option>
                        @php
                            $profesiones = [
                                'Lic. en Ing. de Sistemas',
                                'Lic. en Ing. Mecatrónica',
                                'Lic. en Ing. Informatica',
                                'Lic. en Ing. Electrica',
                                'Lic. en Ing. Mecanica',
                                'Lic. en Ing. Electronica',
                                'Lic. en Ing. Quimica'
                            ];
                        @endphp
                        @foreach ($profesiones as $profesion)
                            <option value="{{ $profesion }}" {{ $datospersona?->profesion == $profesion ? 'selected' : '' }}>{{ $profesion }}</option>
                        @endforeach
                        <option value="Lic. en Ing. de Sistemas" {{ $datospersona?->profesion == 'Lic. en Ing. en Sistemas' ? 'selected' : '' }}>Lic. en Ing. en Sistemas</option>
                        <option value="Lic. en Ing. Mecatrónica" {{ $datospersona?->profesion == 'Lic. en Ing. en Mecatrónica' ? 'selected' : '' }}>Lic. en Ing. en Mecatrónica</option>
                        <option value="Lic. en Ing. Informatica" {{ $datospersona?->profesion == 'Lic. en Ing. en Informatica' ? 'selected' : '' }}>Lic. en Ing. en Informatica</option>
                        <option value="Lic. en Ing. Electrica" {{ $datospersona?->profesion == 'Lic. en Ing. en Electrica' ? 'selected' : '' }}>Lic. en Ing. en Electrica</option>
                        <option value="Lic. en Ing. Mecanica" {{ $datospersona?->profesion == 'Lic. en Ing. Mecanica' ? 'selected' : '' }}>Lic. en Ing. Mecanica</option>
                        <option value="Lic. en Ing. Electronica" {{ $datospersona?->profesion == 'Lic. en Ing. Electronica' ? 'selected' : '' }}>Lic. en Ing. Electronica</option>
                        <option value="Lic. en Ing. Quimica" {{ $datospersona?->profesion == 'Lic. en Ing. Quimica' ? 'selected' : '' }}>Lic. en Ing. Quimica</option>
                        <option value="Lic. en Ing. Civil" {{ $datospersona?->profesion == 'Lic. en Ing. Civil' ? 'selected' : '' }}>Lic. en Ing. Civil</option>
                        <option value="Lic. en Ing. Industrial" {{ $datospersona?->profesion == 'Lic. en Ing. Industrial' ? 'selected' : '' }}>Lic. en Ing. Industrial</option>
                        <option value="Lic. en Ing. Biomedica" {{ $datospersona?->profesion == 'Lic. en Ing. Biomedica' ? 'selected' : '' }}>Lic. en Ing. Biomedica</option>
                        <option value="Lic. en Ing. Aeroespacial" {{ $datospersona?->profesion == 'Lic. en Ing. Aeroespacial' ? 'selected' : '' }}>Lic. en Ing. Aeroespacial</option>
                        <option value="Lic. en Ing. Agronómica" {{ $datospersona?->profesion == 'Lic. en Ing. Agronómica' ? 'selected' : '' }}>Lic. en Ing. Agronómica</option>
                        <option value="Lic. en Ing. Ambiental" {{ $datospersona?->profesion == 'Lic. en Ing. Ambiental' ? 'selected' : '' }}>Lic. en Ing. Ambiental</option>
                        <option value="Lic. en Ing. de la Computacion" {{ $datospersona?->profesion == 'Lic. en Ing. de Computacion' ? 'selected' : '' }}>Lic. en Ing. de Computacion</option>
                        <option value="Lic. en Ing. en Telecomunicaciones" {{ $datospersona?->profesion == 'Lic. en Ing. en Telecomunicaciones' ? 'selected' : '' }}>Lic. en Ing. en Telecomunicaciones</option>
                    </select> --}}
