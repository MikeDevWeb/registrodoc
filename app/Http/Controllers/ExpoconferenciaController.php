<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Expoconferencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpoconferenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpoconferenciaController extends Controller
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
        $expoconferencias = Expoconferencia::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expoconferencia.index', compact('expoconferencias', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $expoconferencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expoconferencia = new Expoconferencia();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expoconferencia.create', compact('expoconferencia', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpoconferenciaRequest $request): RedirectResponse
    {
        Expoconferencia::create($request->validated());

        return Redirect::route('expoconferencias.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expoconferencia = Expoconferencia::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expoconferencia.show', compact('expoconferencia', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expoconferencia = Expoconferencia::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expoconferencia.edit', compact('expoconferencia', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpoconferenciaRequest $request, Expoconferencia $expoconferencia): RedirectResponse
    {
        $expoconferencia->update($request->validated());

        return Redirect::route('expoconferencias.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Expoconferencia::find($id)->delete();

        return Redirect::route('expoconferencias.index')
            ->with('success', 'Eliminado correctamente');
    }
}
