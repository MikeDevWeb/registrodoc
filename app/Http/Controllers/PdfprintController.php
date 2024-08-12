<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datospersona;
use App\Models\Articulogeneral;
use App\Models\Articulorevista;
// Importa aquí los demás modelos que necesitas
use Barryvdh\Snappy\Facades\SnappyPdf as PDF; // Snappy para wkhtmltopdf

class PdfprintController extends Controller
{
    public function index()
    {
        $docentes = Datospersona::all();
        return view('pdfprint.select', compact('docentes'));
    }

    public function generarPDF(Request $request)
    {
        $docente = Datospersona::with([
            'articulogenerals',
            'articulorevistas',
            'contactos',
            'datospersonbs',
            'expdocentes',
            'expoconferencias',
            'expoeventos',
            'exposeminarios',
            'expprograrels',
            'formcursos',
            'formpostgrados',
            'formprofesionals',
            'funcadminacads',
            'libropublicados',
            'reconocimientos',
            'textopublicados',
            'trabproyinvconcluidos',
            'tutortribunals',
        ])->findOrFail($request->datospersona_id);

        $pdf = PDF::loadView('pdfprint.plantilla', compact('docente'));
        return $pdf->download('hojadevida_'.$docente->nombre.'_'.$docente->apellidoPaterno.'.pdf');
    }
}
