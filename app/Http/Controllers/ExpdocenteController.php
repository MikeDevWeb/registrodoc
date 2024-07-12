<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Expdocente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpdocenteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpdocenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expdocentes = Expdocente::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expdocente.index', compact('expdocentes', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $expdocentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expdocente = new Expdocente();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expdocente.create', compact('expdocente', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpdocenteRequest $request): RedirectResponse
    {
        Expdocente::create($request->validated());

        return Redirect::route('expdocentes.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expdocente = Expdocente::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expdocente.show', compact('expdocente', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expdocente = Expdocente::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expdocente.edit', compact('expdocente', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpdocenteRequest $request, Expdocente $expdocente): RedirectResponse
    {
        $expdocente->update($request->validated());

        return Redirect::route('expdocentes.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Expdocente::find($id)->delete();

        return Redirect::route('expdocentes.index')
            ->with('success', 'Eliminado correctamente');
    }
}
