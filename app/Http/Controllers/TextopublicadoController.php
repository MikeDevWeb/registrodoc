<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Textopublicado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TextopublicadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TextopublicadoController extends Controller
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
        $textopublicados = Textopublicado::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('textopublicado.index', compact('textopublicados', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $textopublicados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $textopublicado = new Textopublicado();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('textopublicado.create', compact('textopublicado', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TextopublicadoRequest $request): RedirectResponse
    {
        Textopublicado::create($request->validated());

        return Redirect::route('textopublicados.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $textopublicado = Textopublicado::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('textopublicado.show', compact('textopublicado', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $textopublicado = Textopublicado::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('textopublicado.edit', compact('textopublicado', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TextopublicadoRequest $request, Textopublicado $textopublicado): RedirectResponse
    {
        $textopublicado->update($request->validated());

        return Redirect::route('textopublicados.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Textopublicado::find($id)->delete();

        return Redirect::route('textopublicados.index')
            ->with('success', 'Eliminado correctamente');
    }
}
