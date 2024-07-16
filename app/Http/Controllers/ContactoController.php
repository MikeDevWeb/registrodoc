<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Datospersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ContactoController extends Controller
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
        $contactos = Contacto::paginate();
        $datospersona = Datospersona::all();
        $datospersonas = $datospersona;
        return view('contacto.index', compact('contactos', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $contactos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $contacto = new Contacto();
        $datospersona = Datospersona::all();
        $datospersonas = $datospersona;
        return view('contacto.create', compact('contacto', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactoRequest $request): RedirectResponse
    {
        Contacto::create($request->validated());

        return Redirect::route('contactos.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $contacto = Contacto::find($id);
        $datospersona = Datospersona::all();
        $datospersonas = $datospersona;
        return view('contacto.show', compact('contacto', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $contacto = Contacto::find($id);
        $datospersona = Datospersona::all();
        $datospersonas = $datospersona;
        return view('contacto.edit', compact('contacto', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactoRequest $request, Contacto $contacto): RedirectResponse
    {
        $contacto->update($request->validated());

        return Redirect::route('contactos.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Contacto::find($id)->delete();

        return Redirect::route('contactos.index')
            ->with('success', 'Eliminado correctamente');
    }
}
