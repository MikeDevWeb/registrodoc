<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Funcadminacad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FuncadminacadRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FuncadminacadController extends Controller
{
    public function __construct()
    {
        \App::setLocale('es');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $funcadminacads = Funcadminacad::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('funcadminacad.index', compact('funcadminacads', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $funcadminacads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $funcadminacad = new Funcadminacad();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('funcadminacad.create', compact('funcadminacad', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FuncadminacadRequest $request): RedirectResponse
    {
        Funcadminacad::create($request->validated());

        return Redirect::route('funcadminacads.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $funcadminacad = Funcadminacad::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('funcadminacad.show', compact('funcadminacad', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $funcadminacad = Funcadminacad::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('funcadminacad.edit', compact('funcadminacad', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FuncadminacadRequest $request, Funcadminacad $funcadminacad): RedirectResponse
    {
        $funcadminacad->update($request->validated());

        return Redirect::route('funcadminacads.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Funcadminacad::find($id)->delete();

        return Redirect::route('funcadminacads.index')
            ->with('success', 'Eliminado correctamente');
    }
}
