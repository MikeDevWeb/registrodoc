<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        // Retrieve all docentes
        $docentes = Docente::all();

        // Return the view with the docentes data
        return view('docente.index', compact('docentes'));
    }

    public function create()
    {
        // Retrieve the related datospersonas
        $datospersonas = Datospersona::all();

        // Return the view for creating a new docente
        return view('docente.create', compact('datospersonas'));
    }

    public function store(Request $request)
    {
        // Validate and save the new docente
        $docente = Docente::create($request->all());

        // Redirect to the docentes index page
        return redirect()->route('docentes.index');
    }

    public function show(Docente $docente)
    {
        // Retrieve the related datospersona
        $datospersona = $docente->datospersona;

        // Return the view with the docente and datospersona data
        return view('docente.show', compact('docente', 'datospersona'));
    }

    public function edit(Docente $docente)
    {
        // Retrieve the related datospersonas
        $datospersonas = Datospersona::all();

        // Return the view for editing the docente
        return view('docente.edit', compact('docente', 'datospersonas'));
    }

    public function update(Request $request, Docente $docente)
    {
        // Validate and update the docente
        $docente->update($request->all());

        // Redirect to the docentes index page
        return redirect()->route('docentes.index');
    }

    public function destroy(Docente $docente)
    {
        // Delete the docente
        $docente->delete();

        // Redirect to the docentes index page
        return redirect()->route('docentes.index');
    }
}
// namespace App\Http\Controllers;

// use App\Models\Datospersona;
// use Illuminate\Http\Request;

// class DocenteController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Datospersona $datospersona)
//     {
//         // Retrieve the related models
//         $articulogenerals = $datospersona->articulogenerals;
//         $articulorevistas = $datospersona->articulorevistas;
//         // Add more related models as needed

//         // Return the view with the associated data
//         return view('docente.show', compact('datospersona', 'articulogenerals', 'articulorevistas'));
//     }
//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Datospersona $datospersona)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Datospersona $datospersona)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Datospersona $datospersona)
//     {
//         //
//     }
// }
