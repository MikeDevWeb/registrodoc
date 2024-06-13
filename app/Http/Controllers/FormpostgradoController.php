<?php

namespace App\Http\Controllers;

use App\Models\Formpostgrado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FormpostgradoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormpostgradoController extends Controller
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
        $formpostgrados = Formpostgrado::paginate();

        return view('formpostgrado.index', compact('formpostgrados'))
            ->with('i', ($request->input('page', 1) - 1) * $formpostgrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $formpostgrado = new Formpostgrado();

        return view('formpostgrado.create', compact('formpostgrado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormpostgradoRequest $request): RedirectResponse
    {
        Formpostgrado::create($request->validated());

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Formpostgrado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $formpostgrado = Formpostgrado::find($id);

        return view('formpostgrado.show', compact('formpostgrado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $formpostgrado = Formpostgrado::find($id);

        return view('formpostgrado.edit', compact('formpostgrado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormpostgradoRequest $request, Formpostgrado $formpostgrado): RedirectResponse
    {
        $formpostgrado->update($request->validated());

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Formpostgrado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Formpostgrado::find($id)->delete();

        return Redirect::route('formpostgrados.index')
            ->with('success', 'Formpostgrado deleted successfully');
    }
}
