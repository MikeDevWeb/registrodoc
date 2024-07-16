<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Formcurso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FormcursoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormcursoController extends Controller
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
        $formcursos = Formcurso::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formcurso.index', compact('formcursos', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $formcursos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $formcurso = new Formcurso();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formcurso.create', compact('formcurso', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormcursoRequest $request): RedirectResponse
    {
        Formcurso::create($request->validated());

        return Redirect::route('formcursos.index')
            ->with('success', 'Registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $formcurso = Formcurso::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formcurso.show', compact('formcurso', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $formcurso = Formcurso::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('formcurso.edit', compact('formcurso', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormcursoRequest $request, Formcurso $formcurso): RedirectResponse
    {
        $formcurso->update($request->validated());

        return Redirect::route('formcursos.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Formcurso::find($id)->delete();

        return Redirect::route('formcursos.index')
            ->with('success', 'Eliminado correctamente');
    }
}
