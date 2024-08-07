<?php
// PdfsController.php
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Barryvdh\DomPDF\PDF; // Asegúrate de tener el paquete para PDF instalado y configurado
// use Barryvdh\DomPDF\Facade;
// class PdfsController extends Controller
// {
//     public function generatePdf(Request $request)
//     {
//         $recordId = $request->input('id');
//         $selectedTables = $request->input('tables', []);

//         // Obtener los datos de la tabla principal
//         $datosPersona = \App\Models\DatosPersona::findOrFail($recordId);

//         // Obtener los datos de las tablas relacionadas
//         $relatedData = [];
//         if (in_array('expdocentes', $selectedTables)) {
//             $relatedData['expdocentes'] = $datosPersona->expdocentes()->get();
//         }
//         if (in_array('expoconferencias', $selectedTables)) {
//             $relatedData['expoconferencias'] = $datosPersona->expoconferencias()->get();
//         }
//         // Agrega más tablas según sea necesario

//         // Cargar la vista Blade para el PDF
//         $pdf = PDF::loadView('pdf.report', compact('datosPersona', 'relatedData'));

//         return $pdf->download('reporte.pdf');
//     }
// }


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Barryvdh\DomPDF\PDF;

// class PdfsController extends Controller
// {
//     protected $pdf;

//     public function __construct(PDF $pdf)
//     {
//         $this->pdf = $pdf;
//     }

//     public function generatePdf(Request $request)
//     {
//         // Obtén los datos que necesitas
//         $data = [
//             'title' => 'Reporte',
//             // Otros datos que quieras pasar a la vista
//         ];

//         // Genera el PDF a partir de la vista usando el servicio
//         $pdf = $this->pdf->loadView('pdf.report', $data);

//         // Descarga el PDF
//         return $pdf->download('reporte.pdf');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Asegúrate de que la facada PDF esté correctamente importada

class PdfsController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Obtén los datos que necesitas
        $data = [
            'title' => 'Reporte',
            // Otros datos que quieras pasar a la vista
        ];

        // Genera el PDF a partir de la vista usando la facada
        $pdf = PDF::loadView('pdfs.report', $data);

        // Descarga el PDF
        return $pdf->download('reporte.pdf');
    }
}
