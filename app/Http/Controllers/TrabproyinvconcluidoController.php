<?php

namespace App\Http\Controllers;

use App\Models\Trabproyinvconcluido;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TrabproyinvconcluidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TrabproyinvconcluidoController extends Controller
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
        $trabproyinvconcluidos = Trabproyinvconcluido::paginate();

        return view('trabproyinvconcluido.index', compact('trabproyinvconcluidos'))
            ->with('i', ($request->input('page', 1) - 1) * $trabproyinvconcluidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $trabproyinvconcluido = new Trabproyinvconcluido();

        return view('trabproyinvconcluido.create', compact('trabproyinvconcluido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrabproyinvconcluidoRequest $request): RedirectResponse
    {
        Trabproyinvconcluido::create($request->validated());

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Trabproyinvconcluido created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $trabproyinvconcluido = Trabproyinvconcluido::find($id);

        return view('trabproyinvconcluido.show', compact('trabproyinvconcluido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $trabproyinvconcluido = Trabproyinvconcluido::find($id);

        return view('trabproyinvconcluido.edit', compact('trabproyinvconcluido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TrabproyinvconcluidoRequest $request, Trabproyinvconcluido $trabproyinvconcluido): RedirectResponse
    {
        $trabproyinvconcluido->update($request->validated());

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Trabproyinvconcluido updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Trabproyinvconcluido::find($id)->delete();

        return Redirect::route('trabproyinvconcluidos.index')
            ->with('success', 'Trabproyinvconcluido deleted successfully');
    }
}
