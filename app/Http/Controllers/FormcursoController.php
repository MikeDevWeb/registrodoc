<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $formcursos = Formcurso::paginate();

        return view('formcurso.index', compact('formcursos'))
            ->with('i', ($request->input('page', 1) - 1) * $formcursos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $formcurso = new Formcurso();

        return view('formcurso.create', compact('formcurso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormcursoRequest $request): RedirectResponse
    {
        Formcurso::create($request->validated());

        return Redirect::route('formcursos.index')
            ->with('success', 'Formcurso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $formcurso = Formcurso::find($id);

        return view('formcurso.show', compact('formcurso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $formcurso = Formcurso::find($id);

        return view('formcurso.edit', compact('formcurso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormcursoRequest $request, Formcurso $formcurso): RedirectResponse
    {
        $formcurso->update($request->validated());

        return Redirect::route('formcursos.index')
            ->with('success', 'Formcurso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Formcurso::find($id)->delete();

        return Redirect::route('formcursos.index')
            ->with('success', 'Formcurso deleted successfully');
    }
}
