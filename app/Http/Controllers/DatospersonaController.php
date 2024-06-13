<?php

namespace App\Http\Controllers;

use App\Models\Datospersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DatospersonaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DatospersonaController extends Controller
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
        $datospersonas = Datospersona::paginate();

        return view('datospersona.index', compact('datospersonas'))
            ->with('i', ($request->input('page', 1) - 1) * $datospersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $datospersona = new Datospersona();

        return view('datospersona.create', compact('datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatospersonaRequest $request): RedirectResponse
    {
        Datospersona::create($request->validated());

        return Redirect::route('datospersonas.index')
            ->with('success', 'Datospersona created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $datospersona = Datospersona::find($id);

        return view('datospersona.show', compact('datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $datospersona = Datospersona::find($id);

        return view('datospersona.edit', compact('datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DatospersonaRequest $request, Datospersona $datospersona): RedirectResponse
    {
        $datospersona->update($request->validated());

        return Redirect::route('datospersonas.index')
            ->with('success', 'Datospersona updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Datospersona::find($id)->delete();

        return Redirect::route('datospersonas.index')
            ->with('success', 'Datospersona deleted successfully');
    }
}
