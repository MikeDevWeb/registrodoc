@extends('adminlte::page')

@section('content')
<div class="row ">
    <div class="col-md-12 ">
        <div class="header text-right">

            <div class="no-print">
                <button class="btn btn-sm btn-primary" onclick="window.print()"><i class="fa fa-fw fa-print"></i></a> Imprimir PDF</button>
            </div>
        </div>
        <div class="container flex flex-col p-3">
            <h3 class="text-center">CURRICULUM VITAE</h3>

            <h4 class="text-center">{{ $datospersona->nombre }} {{ $datospersona->apellidoPaterno }} {{ $datospersona->apellidoMaterno }}</h4>


            <h5 class="text-bold">Datos Personales</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Carnet de Identidad</th>
                    <th>Edad</th>
                </tr>
                <tr>
                    <td>{{ $datospersona->nombre }}</td>
                    <td>{{ $datospersona->apellidoPaterno }}</td>
                    <td>{{ $datospersona->apellidoMaterno }}</td>
                    <td>{{ $datospersona->carnetidentidad }}</td>
                    <td>{{ $datospersona->edad }}</td>
                </tr>
            </table>
            <h5 class="text-bold">Idiomas</h5>
            <table class="table table-striped w-100">
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
            <h5 class="text-bold">Artículos Generales</h5>
            <table class="table table-striped w-100">
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

            <h5 class="text-bold">Artículos de Revista</h5>
            <table class="table table-striped w-100">
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

            <h5 class="text-bold">Contactos</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Ciudad de Residencia</th>
                    <th>Dirección</th>
                    <th>Teléfono Fijo</th>
                    <th>Celular</th>
                    <th>Correo Electrónico</th>
                </tr>

                @foreach ($datospersona->contactos as $contacto)
                    <tr>
                        <td>{{ $contacto->ciudadresidencia }}</td>
                        <td>{{ $contacto->direccion }}</td>
                        <td>{{ $contacto->telefonofijo }}</td>
                        <td>{{ $contacto->celular }}</td>
                        <td>{{ $contacto->correo }}</td>
                    </tr>
                    @endforeach
            </table>
            <h5 class="text-bold">Redes Sociales</h5>
            <table class="table table-striped w-100">
                    <tr>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>LinkedIn</th>
                        <th>Instagram</th>
                        <th>Telegram</th>
                        <th>WhatsApp</th>

                    </tr>

                    @foreach ($datospersona->contactos as $contacto)
                    <tr>

                        <td>{{ $contacto->facebook }}</td>
                        <td>{{ $contacto->twitter }}</td>
                        <td>{{ $contacto->linkedin }}</td>
                        <td>{{ $contacto->instagram }}</td>
                        <td>{{ $contacto->telegram }}</td>
                        <td>{{ $contacto->whatsapp }}</td>

                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Experiencia Docente</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Carrera</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->expdocentes as $expdocente)
                    <tr>
                        <td>{{ $expdocente->institucion }}</td>
                        <td>{{ $expdocente->carrera }}</td>
                        <td>{{ $expdocente->fechainicio }}</td>
                        <td>{{ $expdocente->fechafin }}</td>
                        <td>{{ $expdocente->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Experiencia en Conferencias</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Tipo Evento</th>
                    <th>Tematica</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->expoconferencias as $expoconferencia)
                    <tr>
                        <td>{{ $expoconferencia->institucion }}</td>
                        <td>{{ $expoconferencia->tipoevento }}</td>
                        <td>{{ $expoconferencia->tematica }}</td>
                        <td>{{ $expoconferencia->fechainicio }}</td>
                        <td>{{ $expoconferencia->fechafin }}</td>
                        <td>{{ $expoconferencia->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Experiencia en Eventos</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Evento</th>
                    <th>Tematica</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->expoeventos as $expoevento)
                    <tr>
                        <td>{{ $expoevento->institucion }}</td>
                        <td>{{ $expoevento->tipoevento }}</td>
                        <td>{{ $expoevento->tematica }}</td>
                        <td>{{ $expoevento->fechainicio }}</td>
                        <td>{{ $expoevento->fechafin }}</td>
                        <td>{{ $expoevento->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Experiencia en Seminarios</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Tipo Evento</th>
                    <th>Tematica</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->exposeminarios as $exposeminario)
                    <tr>
                        <td>{{ $exposeminario->institucion }}</td>
                        <td>{{ $exposeminario->tipoevento }}</td>
                        <td>{{ $exposeminario->tematica }}</td>
                        <td>{{ $exposeminario->fechainicio }}</td>
                        <td>{{ $exposeminario->fechafin }}</td>
                        <td>{{ $exposeminario->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Experiencia en Programas Relacionados</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Cargo/ Actividad</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->expprograrels as $expprograrel)
                    <tr>
                        <td>{{ $expprograrel->institucion }}</td>
                        <td>{{ $expprograrel->cargoactividad }}</td>
                        <td>{{ $expprograrel->fechainicio }}</td>
                        <td>{{ $expprograrel->fechafin }}</td>
                        <td>{{ $expprograrel->duracion }}</td>
                @endforeach
            </table>

            <h5 class="text-bold">Formación de Cursos</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Tipo</th>
                    <th>Nombre de Evento</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->formcursos as $formcurso)
                    <tr>
                        <td>{{ $formcurso->institucion }}</td>
                        <td>{{ $formcurso->tipo }}</td>
                        <td>{{ $formcurso->nombreevento }}</td>
                        <td>{{ $formcurso->fechainicio }}</td>
                        <td>{{ $formcurso->fechafin }}</td>
                        <td>{{ $formcurso->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Formación de Postgrados</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución/Universidad</th>
                    <th>Año</th>
                    <th>Grado Académico</th>
                    <th>Título/Diploma</th>
                </tr>
                @foreach ($datospersona->formpostgrados as $formpostgrado)
                    <tr>
                        <td>{{ $formpostgrado->institucionUniversidad }}</td>
                        <td>{{ $formpostgrado->anio }}</td>
                        <td>{{ $formpostgrado->gradoacademico }}</td>
                        <td>{{ $formpostgrado->titulodiploma }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Formación de Profesionales</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Año</th>
                    <th>Grado Académico</th>
                    <th>Título/Diploma</th>
                </tr>
                @foreach ($datospersona->formprofesionals as $formprofesional)
                    <tr>
                        <td>{{ $formprofesional->universidad }}</td>
                        <td>{{ $formprofesional->anio }}</td>
                        <td>{{ $formprofesional->gradoacademico }}</td>
                        <td>{{ $formprofesional->titulodiploma }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Funciones Administrativas Académicas</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Cargo/ Empleado</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Duración</th>
                </tr>
                @foreach ($datospersona->funcadminacads as $funcadminacad)
                    <tr>
                        <td>{{ $funcadminacad->institucion }}</td>
                        <td>{{ $funcadminacad->cargoempleado }}</td>
                        <td>{{ $funcadminacad->fechainicio }}</td>
                        <td>{{ $funcadminacad->fechafin }}</td>
                        <td>{{ $funcadminacad->duracion }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Libros Publicados</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Autor</th>
                    <th>Coautor</th>
                </tr>
                @foreach ($datospersona->libropublicados as $libropublicado)
                    <tr>
                        <td>{{ $libropublicado->titulo }}</td>
                        <td>{{ $libropublicado->anio }}</td>
                        <td>{{ $libropublicado->autor }}</td>
                        <td>{{ $libropublicado->coautor }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Reconocimientos</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Reconocimiento</th>
                    <th>Institución</th>
                    <th>Año</th>
                    <th>Actividad</th>
                </tr>
                @foreach ($datospersona->reconocimientos as $reconocimiento)
                    <tr>
                        <td>{{ $reconocimiento->reconocimiento }}</td>
                        <td>{{ $reconocimiento->institucion }}</td>
                        <td>{{ $reconocimiento->anio }}</td>
                        <td>{{ $reconocimiento->actividad }}</td>
                    </tr>

                @endforeach
            </table>

            <h5 class="text-bold">Textos Publicados</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Autor</th>
                    <th>Coautor</th>
                </tr>
                @foreach ($datospersona->textopublicados as $textopublicado)
                    <tr>
                        <td>{{ $textopublicado->titulo }}</td>
                        <td>{{ $textopublicado->anio }}</td>
                        <td>{{ $textopublicado->autor }}</td>
                        <td>{{ $textopublicado->coautor }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Trabajos de Investigación Concluidos</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Tipo de investigación</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Duración</th>
                    <th>Autor</th>
                    <th>Coautor</th>
                </tr>
                @foreach ($datospersona->trabproyinvconcluidos as $trabproyinvconcluido)
                    <tr>
                        <td>{{ $trabproyinvconcluido->trabajoproyecto }}</td>
                        <td>{{ $trabproyinvconcluido->fechainicio }}</td>
                        <td>{{ $trabproyinvconcluido->fechafin }}</td>
                        <td>{{ $trabproyinvconcluido->duracion }}</td>
                        <td>{{ $trabproyinvconcluido->autor }}</td>
                        <td>{{ $trabproyinvconcluido->coautor }}</td>
                    </tr>
                @endforeach
            </table>

            <h5 class="text-bold">Tutoria o Tribunal</h5>
            <table class="table table-striped w-100">
                <tr>
                    <th>Institución</th>
                    <th>Pregrado/Postgrado</th>
                    <th>Nivel de Programa</th>
                    <th>Designación</th>
                    <th>Título de la Investigación</th>
                    <th>Fecha</th>
                </tr>
                @foreach ($datospersona->tutortribunals as $tutortribunal)
                    <tr>
                        <td>{{ $tutortribunal->institucion }}</td>
                        <td>{{ $tutortribunal->pregradopostgrado }}</td>
                        <td>{{ $tutortribunal->nivelprograma }}</td>
                        <td>{{ $tutortribunal->tutorevalutribu }}</td>
                        <td>{{ $tutortribunal->tituloinvestigacion }}</td>
                        <td>{{ $tutortribunal->fecha }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

@endsection

@section('css')
    <style>
        .scrollable-div {
            max-height: none;
            overflow-y: auto;
            padding: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        /* .content-wrapper {
            overflow: hidden;
        } */

        @media print {
            body {
                font-size: 12px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .no-print {
                display: none;
            }

            body {
                font-size: 12px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
        }
    </style>
@endsection
