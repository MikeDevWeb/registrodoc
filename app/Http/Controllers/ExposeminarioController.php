<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Exposeminario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExposeminarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExposeminarioController extends Controller
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
        $exposeminarios = Exposeminario::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('exposeminario.index', compact('exposeminarios', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $exposeminarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $exposeminario = new Exposeminario();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('exposeminario.create', compact('exposeminario', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExposeminarioRequest $request): RedirectResponse
    {
        Exposeminario::create($request->validated());

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $exposeminario = Exposeminario::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('exposeminario.show', compact('exposeminario', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $exposeminario = Exposeminario::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('exposeminario.edit', compact('exposeminario', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExposeminarioRequest $request, Exposeminario $exposeminario): RedirectResponse
    {
        $exposeminario->update($request->validated());

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Exposeminario::find($id)->delete();

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Eliminado correctamente');
    }
}
