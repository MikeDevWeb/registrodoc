<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datospersona;
use App\Models\Articulogeneral;
use App\Models\Articulorevista;
use App\Models\Contacto;
use App\Models\Datospersonb;
use App\Models\Docente;
use App\Models\Expoconferencia;
use App\Models\Expoevento;
use App\Models\Exposeminario;
use App\Models\Expprograrel;
use App\Models\Formcurso;
use App\Models\Formpostgrado;
use App\Models\Formprofesional;
use App\Models\Funcadminacad;
use App\Models\Libropublicado;
use App\Models\Reconocimiento;
use App\Models\Textopublicado;
use App\Models\Tutortribunal;
use App\Models\Trabproyinvconcluido;
class RecordController extends Controller
{
    public function index()
    {
        $allRecords = Datospersona::all();
        return view('select_record', compact('allRecords'));
    }

    public function show(Request $request, $id)
    {
        $selectedRecord = Datospersona::with([
            'Articulogenerals',
            'Articulorevistas',
            'Contactos',
            'Datospersonbs',
            'Expoconferencias',
            'Expoeventos',
            'Exposeminarios',
            'Expprograrels',
            'Formcursos',
            'Formpostgrados',
            'Formprofesionals',
            'Funcadminacads',
            'Libropublicados',
            'Reconocimientos',
            'Textopublicados',
            'Tutortribunals',
            'Trabproyinvconcluidos',
            ])->findOrFail($id);

        // $selectedRecord = Datospersona::find($id);

        // // Carga de los modelos relacionados en un array asociativo
        $relatedModels = [
            'articulogeneral' => Articulogeneral::where('datospersona_id', $selectedRecord->id)->get(),
            'articulorevista' => Articulorevista::where('datospersona_id', $selectedRecord->id)->get(),
            'contacto' => Contacto::where('datospersona_id', $selectedRecord->id)->get(),
            'datospersonb' => Datospersonb::where('datospersona_id', $selectedRecord->id)->get(),
            // 'docente' => Docente::where('datospersona_id', $selectedRecord->id)->get(),
            'expoconferencia' => Expoconferencia::where('datospersona_id', $selectedRecord->id)->get(),
            'expoevento' => Expoevento::where('datospersona_id', $selectedRecord->id)->get(),
            'exposeminario' => Exposeminario::where('datospersona_id', $selectedRecord->id)->get(),
            'expprograrel' => Expprograrel::where('datospersona_id', $selectedRecord->id)->get(),
            'formcurso' => Formcurso::where('datospersona_id', $selectedRecord->id)->get(),
            'formpostgrado' => Formpostgrado::where('datospersona_id', $selectedRecord->id)->get(),
            'formprofesional' => Formprofesional::where('datospersona_id', $selectedRecord->id)->get(),
            'funcadminacad' => Funcadminacad::where('datospersona_id', $selectedRecord->id)->get(),
            'libropublicado' => Libropublicado::where('datospersona_id', $selectedRecord->id)->get(),
            'reconocimiento' => Reconocimiento::where('datospersona_id', $selectedRecord->id)->get(),
            'textopublicado' => Textopublicado::where('datospersona_id', $selectedRecord->id)->get(),
            'tutortribunal' => Tutortribunal::where('datospersona_id', $selectedRecord->id)->get(),
            'trabproyinvconcluido' => Trabproyinvconcluido::where('datospersona_id', $selectedRecord->id)->get(),
        ];


        return view('record_modal', compact('selectedRecord', 'relatedModels'));
    }
}
