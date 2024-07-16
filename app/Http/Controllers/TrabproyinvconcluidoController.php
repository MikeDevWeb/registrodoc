<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Trabproyinvconcluido;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TrabproyinvconcluidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TrabproyinvconcluidoController extends Controller
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
        $trabproyinvconcluidos = Trabproyinvconcluido::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('trabproyinvconcluido.index', compact('trabproyinvconcluidos', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $trabproyinvconcluidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $trabproyinvconcluido = new Trabproyinvconcluido();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('trabproyinvconcluido.create', compact('trabproyinvconcluido', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrabproyinvconcluidoRequest $request): RedirectResponse
    {
        Trabproyinvconcluido::create($request->validated());

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $trabproyinvconcluido = Trabproyinvconcluido::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('trabproyinvconcluido.show', compact('trabproyinvconcluido', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $trabproyinvconcluido = Trabproyinvconcluido::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('trabproyinvconcluido.edit', compact('trabproyinvconcluido', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TrabproyinvconcluidoRequest $request, Trabproyinvconcluido $trabproyinvconcluido): RedirectResponse
    {
        $trabproyinvconcluido->update($request->validated());

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Trabproyinvconcluido::find($id)->delete();

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Eliminado correctamente');
    }
}
