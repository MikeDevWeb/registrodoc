<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datospersona;
use App\Models\Articulogeneral;
use App\Models\Articulorevista;
// Importa aquí los demás modelos que necesitas
use Barryvdh\Snappy\Facades\SnappyPdf as PDF; // Snappy para wkhtmltopdf

class PdfController extends Controller
{
    public function index()
    {
        $docentes = Datospersona::all();
        return view('selectdocente', compact('docentes'));
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

        $pdf = PDF::loadView('pdfdocente', compact('docente'));
        return $pdf->download('hojadevida_'.$docente->nombre.'_'.$docente->apellidoPaterno.'.pdf');
    }
}







// namespace App\Http\Controllers;

// use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
// use App\Models\Datospersona;
// use Illuminate\Http\Request;

// class PdfController extends Controller
// {
//     public function generatePdf(Request $request)
//     {
//         // Validar la solicitud
//         $request->validate([
//             'id' => 'required|integer|exists:datospersonas,id',
//         ]);

//         // Obtener el ID desde la solicitud
//         $id = $request->input('id');

//         // Obtener los datos necesarios de la base de datos usando el ID
//         $data = Datospersona::with('relaciones')->findOrFail($id);

//         // Generar el PDF utilizando la vista Blade
//         $pdf = PDF::loadView('pdf.template', compact('data'));

//         // Descargar el PDF
//         return $pdf->download('reporte_'.$id.'.pdf');
//     }
// }
