@extends('adminlte::page')

@section('content')

<div class="container">
       <h1>Datos de la Persona</h1>

        <div class="section-title">Información Personal</div>
        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <td>{{ $datosPersona->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido Paterno</th>
                <td>{{ $datosPersona->apellidoPaterno }}</td>
            </tr>
            <tr>
                <th>Apellido Materno</th>
                <td>{{ $datosPersona->apellidoMaterno }}</td>
            </tr>
            <tr>
                <th>Profesión</th>
                <td>{{ $datosPersona->profesion }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ $datosPersona->fechaNacimiento }}</td>
            </tr>
            <tr>
                <th>Lugar de Nacimiento</th>
                <td>{{ $datosPersona->lugarNacimiento }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{ $datosPersona->edad }}</td>
            </tr>
            <tr>
                <th>Estado Civil</th>
                <td>{{ $datosPersona->estadoCivil }}</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>{{ $datosPersona->sexo }}</td>
            </tr>
            <tr>
                <th>Carnet de Identidad</th>
                <td>{{ $datosPersona->carnetidentidad }}</td>
            </tr>
            <tr>
                <th>CI Expedido</th>
                <td>{{ $datosPersona->ciexpedido }}</td>
            </tr>
        </table>

        <div class="section-title">Idiomas</div>
        <table class="table table-bordered">
            <tr>
                <th>Idioma Nativo</th>
                <td>{{ $datosPersona->datospersonb->idiomaNativo }}</td>
            </tr>
            <tr>
                <th>Nivel de Escritura</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomaescritura }}</td>
            </tr>
            <tr>
                <th>Nivel de Lectura</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomalectura }}</td>
            </tr>
            <tr>
                <th>Nivel de Habla</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomahabla }}</td>
            </tr>
            <tr>
                <th>Idioma Secundario</th>
                <td>{{ $datosPersona->datospersonb->idiomaSecundario }}</td>
            </tr>
            <tr>
                <th>Nivel de Escritura (Secundario)</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomaSecundarioescritura }}</td>
            </tr>
            <tr>
                <th>Nivel de Lectura (Secundario)</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomaSecundariolectura }}</td>
            </tr>
            <tr>
                <th>Nivel de Habla (Secundario)</th>
                <td>{{ $datosPersona->datospersonb->nivelidiomaSecundariohabla }}</td>
            </tr>
        </table>

        <div class="section-title">Contactos</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ciudad de Residencia</th>
                    <th>Dirección</th>
                    <th>Teléfono Fijo</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>LinkedIn</th>
                    <th>Instagram</th>
                    <th>Telegram</th>
                    <th>WhatsApp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->contactos as $contacto)
                    <tr>
                        <td>{{ $contacto->ciudadresidencia }}</td>
                        <td>{{ $contacto->direccion }}</td>
                        <td>{{ $contacto->telefonofijo }}</td>
                        <td>{{ $contacto->celular }}</td>
                        <td>{{ $contacto->correo }}</td>
                        <td>{{ $contacto->facebook }}</td>
                        <td>{{ $contacto->twitter }}</td>
                        <td>{{ $contacto->linkedin }}</td>
                        <td>{{ $contacto->instagram }}</td>
                        <td>{{ $contacto->telegram }}</td>
                        <td>{{ $contacto->whatsapp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Experiencia Docente</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Institución</th>
                    <th>Carrera</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->expdocentes as $expdocente)
                    <tr>
                        <td>{{ $expdocente->institucion }}</td>
                        <td>{{ $expdocente->carrera }}</td>
                        <td>{{ $expdocente->fechainicio }}</td>
                        <td>{{ $expdocente->fechafin }}</td>
                        <td>{{ $expdocente->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Experiencia en Conferencias</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Institución</th>
                    <th>Tipo de Evento</th>
                    <th>Temática</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->expoconferencias as $expoconferencia)
                    <tr>
                        <td>{{ $expoconferencia->institucion }}</td>
                        <td>{{ $expoconferencia->tipoevento }}</td>
                        <td>{{ $expoconferencia->tematica }}</td>
                        <td>{{ $expoconferencia->fechainicio }}</td>
                        <td>{{ $expoconferencia->fechafin }}</td>
                        <td>{{ $expoconferencia->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Experiencia en Eventos</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Institución</th>
                    <th>Tipo de Evento</th>
                    <th>Temática</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->expoeventos as $expoevento)
                    <tr>
                        <td>{{ $expoevento->institucion }}</td>
                        <td>{{ $expoevento->tipoevento }}</td>
                        <td>{{ $expoevento->tematica }}</td>
                        <td>{{ $expoevento->fechainicio }}</td>
                        <td>{{ $expoevento->fechafin }}</td>
                        <td>{{ $expoevento->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Experiencia en Seminarios</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Institución</th>
                    <th>Tipo de Evento</th>
                    <th>Temática</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->exposeminarios as $exposeminario)
                    <tr>
                        <td>{{ $exposeminario->institucion }}</td>
                        <td>{{ $exposeminario->tipoevento }}</td>
                        <td>{{ $exposeminario->tematica }}</td>
                        <td>{{ $exposeminario->fechainicio }}</td>
                        <td>{{ $exposeminario->fechafin }}</td>
                        <td>{{ $exposeminario->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Programas Relacionados</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Programa</th>
                    <th>Institución</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->expprograrels as $expprograrel)
                    <tr>
                        <td>{{ $expprograrel->programa }}</td>
                        <td>{{ $expprograrel->institucion }}</td>
                        <td>{{ $expprograrel->fechainicio }}</td>
                        <td>{{ $expprograrel->fechafin }}</td>
                        <td>{{ $expprograrel->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Cursos</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Institución</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->formcursos as $formcurso)
                    <tr>
                        <td>{{ $formcurso->curso }}</td>
                        <td>{{ $formcurso->institucion }}</td>
                        <td>{{ $formcurso->fechainicio }}</td>
                        <td>{{ $formcurso->fechafin }}</td>
                        <td>{{ $formcurso->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Postgrados</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Postgrado</th>
                    <th>Institución</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->formpostgrados as $formpostgrado)
                    <tr>
                        <td>{{ $formpostgrado->postgrado }}</td>
                        <td>{{ $formpostgrado->institucion }}</td>
                        <td>{{ $formpostgrado->fechainicio }}</td>
                        <td>{{ $formpostgrado->fechafin }}</td>
                        <td>{{ $formpostgrado->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Formación Profesional</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Formación</th>
                    <th>Institución</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->formprofesionals as $formprofesional)
                    <tr>
                        <td>{{ $formprofesional->formacion }}</td>
                        <td>{{ $formprofesional->institucion }}</td>
                        <td>{{ $formprofesional->fechainicio }}</td>
                        <td>{{ $formprofesional->fechafin }}</td>
                        <td>{{ $formprofesional->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Función Administrativa Académica</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Función</th>
                    <th>Institución</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->funcadminacads as $funcadminacad)
                    <tr>
                        <td>{{ $funcadminacad->funcion }}</td>
                        <td>{{ $funcadminacad->institucion }}</td>
                        <td>{{ $funcadminacad->fechainicio }}</td>
                        <td>{{ $funcadminacad->fechafin }}</td>
                        <td>{{ $funcadminacad->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Libros Publicados</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Libro</th>
                    <th>Editorial</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->libropublicados as $libropublicado)
                    <tr>
                        <td>{{ $libropublicado->libro }}</td>
                        <td>{{ $libropublicado->editorial }}</td>
                        <td>{{ $libropublicado->ano }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Reconocimientos</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Reconocimiento</th>
                    <th>Institución</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->reconocimientos as $reconocimiento)
                    <tr>
                        <td>{{ $reconocimiento->reconocimiento }}</td>
                        <td>{{ $reconocimiento->institucion }}</td>
                        <td>{{ $reconocimiento->ano }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Textos Publicados</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Texto</th>
                    <th>Editorial</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->textopublicados as $textopublicado)
                    <tr>
                        <td>{{ $textopublicado->texto }}</td>
                        <td>{{ $textopublicado->editorial }}</td>
                        <td>{{ $textopublicado->ano }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Tutoria de Tribunal</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tutoria</th>
                    <th>Institución</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->tutortribunals as $tutortribunal)
                    <tr>
                        <td>{{ $tutortribunal->tutoria }}</td>
                        <td>{{ $tutortribunal->institucion }}</td>
                        <td>{{ $tutortribunal->ano }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="section-title">Trabajo de Investigación Concluido</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Trabajo</th>
                    <th>Institución</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datosPersona->trabproyinvconcluidos as $trabproyinvconcluido)
                    <tr>
                        <td>{{ $trabproyinvconcluido->trabajo }}</td>
                        <td>{{ $trabproyinvconcluido->institucion }}</td>
                        <td>{{ $trabproyinvconcluido->ano }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection

@section('css')
<style>


/*    .page {
    width: 210mm;
    min-height: 297mm;
    padding: 20mm;
    margin: 10mm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px black solid;
    height: 257mm;
    outline: 2cm #FFEAEA solid;
}

@page {
    size: A4;
    margin: 0;
}*/
/*
@media print {
    html, body {
        margin:0 !important;
        padding:0 !important;
        height:100% !important;
        visibility: hidden;
    }

    .page .subpage .col-md-12,.col-lg-12{
        float:left;
        width:100%;
    }
    .page .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
        position:absolute;
    }
    .page {
        visibility: visible;
    }
} */
/*
@media print{
  body * {
    visibility: hidden;
  }
  #page, #page * {
    visibility: visible;
  }
  #page {
    position: absolute;
    top: 0;
    left: 0;
  }
} */
/*
.page {
    width: 210mm;
    min-height: 297mm;
    padding: 20mm;
    margin: 10mm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px black solid;
    height: 257mm;
    outline: 2cm #FFEAEA solid;
}

@page {
    size: letter;
    margin: 0;
}
*/


/* Estilo general del documento */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Estilo del contenedor principal */
.container {
    margin: 2cm 2cm; /* Márgenes de 2 cm en todos los lados */
}

/* Títulos principales */
h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #007bff; /* Color celeste pastel */
}

/* Estilo de los títulos de las secciones */
.section-title {
    font-size: 20px;
    margin-top: 30px;
    margin-bottom: 10px;
    border-bottom: 2px solid #007bff; /* Línea debajo del título */
    padding-bottom: 5px;
    color: #007bff; /* Color celeste pastel */
}

/* Estilo de las tablas */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px; /* Espacio entre tablas */
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #e0f7fa; /* Color celeste pastel para encabezados */
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9; /* Alternar color de filas */
}

/* Espaciado de las tablas */
table + table {
    margin-top: 20px;
}

</style>
@endsection
@section('js')

@endsection
