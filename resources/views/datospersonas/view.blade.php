@extends('adminlte::page')

@section('content')
<div class="container">
    <h3 class="text-center">Datos del Docente</h3>

    <h4 class="text-center">{{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</h4>


    <h5>Datos Personales</h5>
    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
        </tr>
        <tr>
            <td>{{ $datospersona->nombre }}</td>
            <td>{{ $datospersona->apellidoPaterno }}</td>
            <td>{{ $datospersona->apellidoMaterno }}</td>
            <td>{{ $datospersona->telefono }}</td>
            <td>{{ $datospersona->correoElectronico }}</td>
        </tr>
    </table>
    <h5>Datos Personales B</h5>
    <table class="table table-striped">
        <tr>
            <th>Idioma Nativo</th>
            <th>Nivel de Escritura</th>
            <th>Nivel de Lectura</th>
            <th>Nivel de Habla</th>
        </tr>
        @foreach ($datospersona->datospersonbs as $datospersonb)
            <tr>
                <td>{{ $datospersonb->idiomaNativo }}</td>
                <td>{{ $datospersonb->nivelidiomaescritura }}</td>
                <td>{{ $datospersonb->nivelidiomalectura }}</td>
                <td>{{ $datospersonb->nivelidiomahabla }}</td>
            </tr>
        @endforeach
            <tr>
            <th>Idioma Secundario</th>
            <th>Nivel de Escritura</th>
            <th>Nivel de Lectura</th>
            <th>Nivel de Habla</th>
            </tr>
            @foreach ($datospersona->datospersonbs as $datospersonb)
            <tr>
                <td>{{ $datospersonb->idiomaSecundario }}</td>
                <td>{{ $datospersonb->nivelidiomaSecundarioescritura }}</td>
                <td>{{ $datospersonb->nivelidiomaSecundariolectura }}</td>
                <td>{{ $datospersonb->nivelidiomaSecundariohabla }}</td>
            </tr>
            @endforeach
    </table>
    <h5>Artículos Generales</h5>
    <table class="table table-striped">
        <tr>
            <th>Nombre Artículo</th>
            <th>Año</th>
            <th>Organismo de Publicación</th>
            <th>Autor</th>
            <th>Coautor</th>
        </tr>
        @foreach ($datospersona->articulogenerals as $articulo)
            <tr>
                <td>{{ $articulo->nombrearticulo }}</td>
                <td>{{ $articulo->anio }}</td>
                <td>{{ $articulo->organopublicacion }}</td>
                <td>{{ $articulo->autor }}</td>
                <td>{{ $articulo->coautor }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Artículos de Revista</h5>
    <table class="table table-striped">
        <tr>
            <th>Nombre Artículo</th>
            <th>Año</th>
            <th>Organismo de Publicación</th>
            <th>Autor</th>
            <th>Coautor</th>
        </tr>
        @foreach ($datospersona->articulorevistas as $revista)
            <tr>
                <td>{{ $revista->nombrearticulo }}</td>
                <td>{{ $revista->anio }}</td>
                <td>{{ $revista->organopublicacion }}</td>
                <td>{{ $revista->autor }}</td>
                <td>{{ $revista->coautor }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Contactos</h5>
    <table class="table table-striped">
        <tr>
            <th>Ciudad de Residencia</th>
            <th>Dirección</th>
            <th>Teléfono Fijo</th>
            <th>Celular</th>
            <th>Correo Electrónico</th>
            <th>Facebook</th>
        </tr>

        @foreach ($datospersona->contactos as $contacto)
            <tr>
                <td>{{ $contacto->ciudadresidencia }}</td>
                <td>{{ $contacto->direccion }}</td>
                <td>{{ $contacto->telefonofijo }}</td>
                <td>{{ $contacto->celular }}</td>
                <td>{{ $contacto->correo }}</td>
                <td>{{ $contacto->facebook }}</td>
            </tr>
            @endforeach

            <tr>
                <th>Twitter</th>
                <th>LinkedIn</th>
                <th>Instagram</th>
                <th>Telegram</th>
                <th>WhatsApp</th>
            </tr>
            @foreach ($datospersona->contactos as $contacto)
            <tr>
                <td>{{ $contacto->twitter }}</td>
                <td>{{ $contacto->linkedin }}</td>
                <td>{{ $contacto->instagram }}</td>
                <td>{{ $contacto->telegram }}</td>
                <td>{{ $contacto->whatsapp }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Experiencia Docente</h5>
    <table class="table table-striped">
        <tr>
            <th>Institución</th>
            <th>Cargo</th>
        </tr>
        @foreach ($datospersona->expdocentes as $expdocente)
            <tr>
                <td>{{ $expdocente->institucion }}</td>
                <td>{{ $expdocente->cargo }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Experiencia en Conferencias</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->expoconferencias as $expoconferencia)
            <tr>
                <td>{{ $expoconferencia->titulo }}</td>
                <td>{{ $expoconferencia->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Experiencia en Eventos</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->expoeventos as $expoevento)
            <tr>
                <td>{{ $expoevento->titulo }}</td>
                <td>{{ $expoevento->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Experiencia en Seminarios</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->exposeminarios as $exposeminario)
            <tr>
                <td>{{ $exposeminario->titulo }}</td>
                <td>{{ $exposeminario->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Experiencia en Programas de Relaciones Académicas</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->expprograrels as $expprograrel)
            <tr>
                <td>{{ $expprograrel->titulo }}</td>
                <td>{{ $expprograrel->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Formación de Cursos</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->formcursos as $formcurso)
            <tr>
                <td>{{ $formcurso->titulo }}</td>
                <td>{{ $formcurso->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Formación de Postgrados</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->formpostgrados as $formpostgrado)
            <tr>
                <td>{{ $formpostgrado->titulo }}</td>
                <td>{{ $formpostgrado->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Formación de Profesionales</h5>
    <table class="table table-striped">
        <tr>
            <th>Título</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->formprofesionals as $formprofesional)
            <tr>
                <td>{{ $formprofesional->titulo }}</td>
                <td>{{ $formprofesional->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Funciones Administrativas Académicas</h5>
    <table class="table table-striped">
        <tr>
            <th>Función</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->funcadminacads as $funcadminacad)
            <tr>
                <td>{{ $funcadminacad->funcion }}</td>
                <td>{{ $funcadminacad->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Libros Publicados</h5>
    <table class="table table-striped">
        <tr>
            <th>Título Libro</th>
            <th>Editorial</th>
        </tr>
        @foreach ($datospersona->libropublicados as $libropublicado)
            <tr>
                <td>{{ $libropublicado->titulolibro }}</td>
                <td>{{ $libropublicado->editorial }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Reconocimientos</h5>
    <table class="table table-striped">
        <tr>
            <th>Reconocimiento</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->reconocimientos as $reconocimiento)
            <tr>
                <td>{{ $reconocimiento->reconocimiento }}</td>
                <td>{{ $reconocimiento->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Textos Publicados</h5>
    <table class="table table-striped">
        <tr>
            <th>Texto</th>
            <th>Editorial</th>
        </tr>
        @foreach ($datospersona->textopublicados as $textopublicado)
            <tr>
                <td>{{ $textopublicado->texto }}</td>
                <td>{{ $textopublicado->editorial }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Trabajos de Investigación Concluidos</h5>
    <table class="table table-striped">
        <tr>
            <th>Trabajo</th>
            <th>Institución</th>
        </tr>
        @foreach ($datospersona->trabproyinvconcluidos as $trabproyinvconcluido)
            <tr>
                <td>{{ $trabproyinvconcluido->trabajo }}</td>
                <td>{{ $trabproyinvconcluido->institucion }}</td>
            </tr>
        @endforeach
    </table>

    <h5>Tutoria de Tribunal</h5>
    <table class="table table-striped">
        <tr>
            <th>Tutoría</th>
            <th>Institución</th>
            <th>Universidad</th>
            <th>Título de la Tesis</th>
            <th>Fecha</th>
        </tr>
        @foreach ($datospersona->tutortribunals as $tutortribunal)
            <tr>
                <td>{{ $tutortribunal->tutoria }}</td>
                <td>{{ $tutortribunal->institucion }}</td>
                <td>{{ $tutortribunal->universidad }}</td>
                <td>{{ $tutortribunal->titulotesis }}</td>
                <td>{{ $tutortribunal->fecha }}</td>
            </tr>
        @endforeach
    </table>
</div>

<div class="no-print">
    <button onclick="window.print()">Imprimir PDF</button>
</div>
@endsection
