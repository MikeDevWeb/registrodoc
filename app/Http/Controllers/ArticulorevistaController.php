<?php

namespace App\Http\Controllers;

use App\Models\Articulorevista;
use App\Models\Datospersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArticulorevistaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class ArticulorevistaController extends Controller
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
        $articulorevistas = Articulorevista::paginate();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulorevista.index', compact('articulorevistas', 'datospersonas', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $articulorevistas->perPage());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $articulorevista = new Articulorevista();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulorevista.create', compact('articulorevista', 'datospersonas', 'datospersona'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticulorevistaRequest $request): RedirectResponse
    {
        Articulorevista::create($request->validated());

        return Redirect::route('articulorevistas.index')
            ->with('success', 'Registrado correctamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $articulorevista = Articulorevista::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulorevista.show', compact('articulorevista', 'datospersonas', 'datospersona'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $articulorevista = Articulorevista::find($id);
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('articulorevista.edit', compact('articulorevista', 'datospersonas', 'datospersona'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ArticulorevistaRequest $request, Articulorevista $articulorevista): RedirectResponse
    {
        $articulorevista->update($request->validated());
        return Redirect::route('articulorevistas.index')
            ->with('success', 'Modificado correctamente');
    }
    public function destroy($id): RedirectResponse
    {
        Articulorevista::find($id)->delete();
        return Redirect::route('articulorevistas.index')
            ->with('success', 'Eliminado correctamente');
    }
}
