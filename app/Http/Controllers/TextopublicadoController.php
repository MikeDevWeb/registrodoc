<?php

namespace App\Http\Controllers;

use App\Models\Textopublicado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TextopublicadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TextopublicadoController extends Controller
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
        $textopublicados = Textopublicado::paginate();

        return view('textopublicado.index', compact('textopublicados'))
            ->with('i', ($request->input('page', 1) - 1) * $textopublicados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $textopublicado = new Textopublicado();

        return view('textopublicado.create', compact('textopublicado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TextopublicadoRequest $request): RedirectResponse
    {
        Textopublicado::create($request->validated());

        return Redirect::route('textopublicados.index')
            ->with('success', 'Textopublicado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $textopublicado = Textopublicado::find($id);

        return view('textopublicado.show', compact('textopublicado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $textopublicado = Textopublicado::find($id);

        return view('textopublicado.edit', compact('textopublicado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TextopublicadoRequest $request, Textopublicado $textopublicado): RedirectResponse
    {
        $textopublicado->update($request->validated());

        return Redirect::route('textopublicados.index')
            ->with('success', 'Textopublicado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Textopublicado::find($id)->delete();

        return Redirect::route('textopublicados.index')
            ->with('success', 'Textopublicado deleted successfully');
    }
}
