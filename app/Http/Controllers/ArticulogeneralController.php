<?php

namespace App\Http\Controllers;

use App\Models\Articulogeneral;
use App\Models\Datospersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArticulogeneralRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticulogeneralController extends Controller
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
        $articulogenerals = Articulogeneral::with('user')->paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulogeneral.index', compact('articulogenerals', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $articulogenerals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $articulogeneral = new Articulogeneral();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulogeneral.create', compact('articulogeneral', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticulogeneralRequest $request): RedirectResponse
    {
        Articulogeneral::create($request->validated());

        return Redirect::route('articulogenerals.index')
            ->with('success', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $articulogeneral = Articulogeneral::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulogeneral.show', compact('articulogeneral', 'datospersonas', 'datospersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $articulogeneral = Articulogeneral::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulogeneral.edit', compact('articulogeneral', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticulogeneralRequest $request, Articulogeneral $articulogeneral): RedirectResponse
    {
        $articulogeneral->update($request->validated());

        return Redirect::route('articulogenerals.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Articulogeneral::find($id)->delete();

        return Redirect::route('articulogenerals.index')
            ->with('success', 'Eliminado correctamente');
    }

}
