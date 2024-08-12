@extends('adminlte::page')

@section('content')
    <h1>Hoja de Vida - {{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</h1>

    <div class="section">
        <h2>Información Personal</h2>
        <table>
            <tr><th>Fecha de Registro</th><td>{{ $datospersona->fecharegistro }}</td></tr>
            <tr><th>Nombre</th><td>{{ $datospersona->nombre }}</td></tr>
            <tr><th>Apellido Paterno</th><td>{{ $datospersona->apellidoPaterno }}</td></tr>
            <tr><th>Apellido Materno</th><td>{{ $datospersona->apellidoMaterno }}</td></tr>
            <tr><th>Profesión</th><td>{{ $datospersona->profesion }}</td></tr>
            <tr><th>Fecha de Nacimiento</th><td>{{ $datospersona->fechaNacimiento }}</td></tr>
            <tr><th>Lugar de Nacimiento</th><td>{{ $datospersona->lugarNacimiento }}</td></tr>
            <tr><th>Edad</th><td>{{ $datospersona->edad }}</td></tr>
            <tr><th>Estado Civil</th><td>{{ $datospersona->estadoCivil }}</td></tr>
            <tr><th>Sexo</th><td>{{ $datospersona->sexo }}</td></tr>
            <tr><th>Carnet de Identidad</th><td>{{ $datospersona->carnetidentidad }}</td></tr>
            <tr><th>Expedido</th><td>{{ $datospersona->ciexpedido }}</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Contactos</h2>
        <table>
            <tr><th>Ciudad de Residencia</th><td>{{ $datospersona->contacto->ciudadresidencia }}</td></tr>
            <tr><th>Dirección</th><td>{{ $datospersona->contacto->direccion }}</td></tr>
            <tr><th>Teléfono Fijo</th><td>{{ $datospersona->contacto->telefonofijo }}</td></tr>
            <tr><th>Celular</th><td>{{ $datospersona->contacto->celular }}</td></tr>
            <tr><th>Correo Electrónico</th><td>{{ $datospersona->contacto->correo }}</td></tr>
            <tr><th>Facebook</th><td>{{ $datospersona->contacto->facebook }}</td></tr>
            <tr><th>Twitter</th><td>{{ $datospersona->contacto->twitter }}</td></tr>
            <tr><th>LinkedIn</th><td>{{ $datospersona->contacto->linkedin }}</td></tr>
            <tr><th>Instagram</th><td>{{ $datospersona->contacto->instagram }}</td></tr>
            <tr><th>Telegram</th><td>{{ $datospersona->contacto->telegram }}</td></tr>
            <tr><th>WhatsApp</th><td>{{ $datospersona->contacto->whatsapp }}</td></tr>
        </table>
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Artículos Generales</h2>
        @foreach($datospersona->articulogenerals as $articulogeneral)
        <table>
            <tr><th>Nombre del Artículo</th><td>{{ $articulogeneral->nombrearticulo }}</td></tr>
            <tr><th>Año</th><td>{{ $articulogeneral->anio }}</td></tr>
            <tr><th>Órgano de Publicación</th><td>{{ $articulogeneral->organopublicacion }}</td></tr>
            <tr><th>Autor</th><td>{{ $articulogeneral->autor }}</td></tr>
            <tr><th>Coautor</th><td>{{ $articulogeneral->coautor }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Artículos en Revistas</h2>
        @foreach($datospersona->articulorevistas as $articulorevista)
        <table>
            <tr><th>Nombre del Artículo</th><td>{{ $articulorevista->nombrearticulo }}</td></tr>
            <tr><th>Año</th><td>{{ $articulorevista->anio }}</td></tr>
            <tr><th>Órgano de Publicación</th><td>{{ $articulorevista->organopublicacion }}</td></tr>
            <tr><th>Autor</th><td>{{ $articulorevista->autor }}</td></tr>
            <tr><th>Coautor</th><td>{{ $articulorevista->coautor }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Experiencia Docente</h2>
        @foreach($datospersona->expdocentes as $expdocente)
        <table>
            <tr><th>Institución</th><td>{{ $expdocente->institucion }}</td></tr>
            <tr><th>Carrera</th><td>{{ $expdocente->carrera }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $expdocente->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $expdocente->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $expdocente->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Conferencias</h2>
        @foreach($datospersona->expoconferencias as $expoconferencia)
        <table>
            <tr><th>Institución</th><td>{{ $expoconferencia->institucion }}</td></tr>
            <tr><th>Tipo de Evento</th><td>{{ $expoconferencia->tipoevento }}</td></tr>
            <tr><th>Temática</th><td>{{ $expoconferencia->tematica }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $expoconferencia->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $expoconferencia->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $expoconferencia->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Eventos</h2>
        @foreach($datospersona->expoeventos as $expoevento)
        <table>
            <tr><th>Institución</th><td>{{ $expoevento->institucion }}</td></tr>
            <tr><th>Tipo de Evento</th><td>{{ $expoevento->tipoevento }}</td></tr>
            <tr><th>Temática</th><td>{{ $expoevento->tematica }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $expoevento->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $expoevento->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $expoevento->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Seminarios</h2>
        @foreach($datospersona->exposeminarios as $exposeminario)
        <table>
            <tr><th>Institución</th><td>{{ $exposeminario->institucion }}</td></tr>
            <tr><th>Tipo de Evento</th><td>{{ $exposeminario->tipoevento }}</td></tr>
            <tr><th>Temática</th><td>{{ $exposeminario->tematica }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $exposeminario->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $exposeminario->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $exposeminario->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Programas Relacionados</h2>
        @foreach($datospersona->expprograrels as $expprograrel)
        <table>
            <tr><th>Institución</th><td>{{ $expprograrel->institucion }}</td></tr>
            <tr><th>Tipo de Programa</th><td>{{ $expprograrel->tipoprograma }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $expprograrel->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $expprograrel->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $expprograrel->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Cursos de Formación</h2>
        @foreach($datospersona->formcursos as $formcurso)
        <table>
            <tr><th>Nombre del Curso</th><td>{{ $formcurso->nombrecurso }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $formcurso->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $formcurso->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $formcurso->duracion }}</td></tr>
            <tr><th>Institución</th><td>{{ $formcurso->institucion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Postgrados</h2>
        @foreach($datospersona->formpostgrados as $formpostgrado)
        <table>
            <tr><th>Nombre del Postgrado</th><td>{{ $formpostgrado->nombrepostgrado }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $formpostgrado->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $formpostgrado->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $formpostgrado->duracion }}</td></tr>
            <tr><th>Institución</th><td>{{ $formpostgrado->institucion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Experiencia Profesional</h2>
        @foreach($datospersona->formprofesionals as $formprofesional)
        <table>
            <tr><th>Nombre de la Empresa</th><td>{{ $formprofesional->empresa }}</td></tr>
            <tr><th>Cargo</th><td>{{ $formprofesional->cargo }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $formprofesional->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $formprofesional->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $formprofesional->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Funciones Administrativas Académicas</h2>
        @foreach($datospersona->funcadminacads as $funcadminacad)
        <table>
            <tr><th>Institución</th><td>{{ $funcadminacad->institucion }}</td></tr>
            <tr><th>Cargo</th><td>{{ $funcadminacad->cargo }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $funcadminacad->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $funcadminacad->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $funcadminacad->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Libros Publicados</h2>
        @foreach($datospersona->libropublicados as $libropublicado)
        <table>
            <tr><th>Título del Libro</th><td>{{ $libropublicado->titulolibro }}</td></tr>
            <tr><th>Año de Publicación</th><td>{{ $libropublicado->aniopublicacion }}</td></tr>
            <tr><th>Editorial</th><td>{{ $libropublicado->editorial }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Textos Publicados</h2>
        @foreach($datospersona->textopublicados as $textopublicado)
        <table>
            <tr><th>Título del Texto</th><td>{{ $textopublicado->titulotexto }}</td></tr>
            <tr><th>Año de Publicación</th><td>{{ $textopublicado->aniopublicacion }}</td></tr>
            <tr><th>Editorial</th><td>{{ $textopublicado->editorial }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Tutorías y Tribunales</h2>
        @foreach($datospersona->tutortribunals as $tutortribunal)
        <table>
            <tr><th>Nombre del Tutorando</th><td>{{ $tutortribunal->nombretutorando }}</td></tr>
            <tr><th>Universidad</th><td>{{ $tutortribunal->universidad }}</td></tr>
            <tr><th>Título de la Tesis</th><td>{{ $tutortribunal->titulotesis }}</td></tr>
            <tr><th>Fecha</th><td>{{ $tutortribunal->fecha }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="page-break"></div>

    <div class="section">
        <h2>Proyectos de Investigación Concluidos</h2>
        @foreach($datospersona->trabproyinvconcluidos as $trabproyinvconcluido)
        <table>
            <tr><th>Nombre del Proyecto</th><td>{{ $trabproyinvconcluido->nombreproyecto }}</td></tr>
            <tr><th>Institución</th><td>{{ $trabproyinvconcluido->institucion }}</td></tr>
            <tr><th>Fecha de Inicio</th><td>{{ $trabproyinvconcluido->fechainicio }}</td></tr>
            <tr><th>Fecha de Fin</th><td>{{ $trabproyinvconcluido->fechafin }}</td></tr>
            <tr><th>Duración</th><td>{{ $trabproyinvconcluido->duracion }}</td></tr>
        </table>
        @endforeach
    </div>

    <div class="section">
        <h2>Reconocimientos</h2>
        @foreach($datospersona->reconocimientos as $reconocimiento)
        <table>
            <tr><th>Nombre del Reconocimiento</th><td>{{ $reconocimiento->nombrereconocimiento }}</td></tr>
            <tr><th>Institución</th><td>{{ $reconocimiento->institucion }}</td></tr>
            <tr><th>Año</th><td>{{ $reconocimiento->anio }}</td></tr>
        </table>
        @endforeach
    </div>

@endsection

@section('css')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        color: #333;
    }
    h1, h2, h3 {
        color: #003366;
        border-bottom: 2px solid #003366;
        padding-bottom: 5px;
    }
    .section {
        margin-bottom: 20px;
    }
    .section table {
        width: 100%;
        border-collapse: collapse;
    }
    .section th, .section td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .section th {
        background-color: #f2f2f2;
    }
    .page-break {
        page-break-before: always;
    }
</style>

@endsection

@section('js')
<!-- Incluye jsPDF en tu vista Blade -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
@endsection
