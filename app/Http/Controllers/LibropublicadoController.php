<?php

namespace App\Http\Controllers;

use App\Models\Libropublicado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LibropublicadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LibropublicadoController extends Controller
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
        $libropublicados = Libropublicado::paginate();

        return view('libropublicado.index', compact('libropublicados'))
            ->with('i', ($request->input('page', 1) - 1) * $libropublicados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $libropublicado = new Libropublicado();

        return view('libropublicado.create', compact('libropublicado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibropublicadoRequest $request): RedirectResponse
    {
        Libropublicado::create($request->validated());

        return Redirect::route('libropublicados.index')
            ->with('success', 'Libropublicado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $libropublicado = Libropublicado::find($id);

        return view('libropublicado.show', compact('libropublicado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $libropublicado = Libropublicado::find($id);

        return view('libropublicado.edit', compact('libropublicado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LibropublicadoRequest $request, Libropublicado $libropublicado): RedirectResponse
    {
        $libropublicado->update($request->validated());

        return Redirect::route('libropublicados.index')
            ->with('success', 'Libropublicado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Libropublicado::find($id)->delete();

        return Redirect::route('libropublicados.index')
            ->with('success', 'Libropublicado deleted successfully');
    }
}
