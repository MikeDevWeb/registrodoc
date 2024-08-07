<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Tutortribunal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TutortribunalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TutortribunalController extends Controller
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
        $tutortribunals = Tutortribunal::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('tutortribunal.index', compact('tutortribunals', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $tutortribunals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tutortribunal = new Tutortribunal();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('tutortribunal.create', compact('tutortribunal', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TutortribunalRequest $request): RedirectResponse
    {
        Tutortribunal::create($request->validated());

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tutortribunal = Tutortribunal::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('tutortribunal.show', compact('tutortribunal', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tutortribunal = Tutortribunal::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('tutortribunal.edit', compact('tutortribunal', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TutortribunalRequest $request, Tutortribunal $tutortribunal): RedirectResponse
    {
        $tutortribunal->update($request->validated());

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Tutortribunal::find($id)->delete();

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Eliminado correctamente');
    }
}
