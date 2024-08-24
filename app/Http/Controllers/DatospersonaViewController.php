<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use Illuminate\Http\Request;

class DatospersonaViewController extends Controller
{
    public function index()
    {
        $datospersonas = Datospersona::all();
        return view('datospersonas.index', compact('datospersonas'));
    }
    public function show($id)
    {
        $datospersona  = Datospersona::with([
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
            'tutortribunals'
        ])->findOrFail($id);

        return view('datospersonas.view', compact('datospersona'));

        // return view('datospersonas.view', ['datospersona' => $datospersona]);
    }
}
