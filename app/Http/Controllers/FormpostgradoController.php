<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Formpostgrado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FormpostgradoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormpostgradoController extends Controller
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
        $formpostgrados = Formpostgrado::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formpostgrado.index', compact('formpostgrados', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $formpostgrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $formpostgrado = new Formpostgrado();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formpostgrado.create', compact('formpostgrado', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormpostgradoRequest $request): RedirectResponse
    {
        Formpostgrado::create($request->validated());

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $formpostgrado = Formpostgrado::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formpostgrado.show', compact('formpostgrado', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $formpostgrado = Formpostgrado::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formpostgrado.edit', compact('formpostgrado', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormpostgradoRequest $request, Formpostgrado $formpostgrado): RedirectResponse
    {
        $formpostgrado->update($request->validated());

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Formpostgrado::find($id)->delete();

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Eliminado correctamente');
    }
}
