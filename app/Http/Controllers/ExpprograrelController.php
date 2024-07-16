<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use App\Models\Expprograrel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpprograrelRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpprograrelController extends Controller
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
        $expprograrels = Expprograrel::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expprograrel.index', compact('expprograrels', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $expprograrels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expprograrel = new Expprograrel();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expprograrel.create', compact('expprograrel', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpprograrelRequest $request): RedirectResponse
    {
        Expprograrel::create($request->validated());

        return Redirect::route('expprograrels.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expprograrel = Expprograrel::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expprograrel.show', compact('expprograrel', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expprograrel = Expprograrel::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('expprograrel.edit', compact('expprograrel', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpprograrelRequest $request, Expprograrel $expprograrel): RedirectResponse
    {
        $expprograrel->update($request->validated());

        return Redirect::route('expprograrels.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Expprograrel::find($id)->delete();

        return Redirect::route('expprograrels.index')
            ->with('success', 'Eliminado correctamente');
    }
}
