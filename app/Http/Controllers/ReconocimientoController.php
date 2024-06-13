<?php

namespace App\Http\Controllers;

use App\Models\Reconocimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReconocimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReconocimientoController extends Controller
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
        $reconocimientos = Reconocimiento::paginate();

        return view('reconocimiento.index', compact('reconocimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $reconocimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reconocimiento = new Reconocimiento();

        return view('reconocimiento.create', compact('reconocimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReconocimientoRequest $request): RedirectResponse
    {
        Reconocimiento::create($request->validated());

        return Redirect::route('reconocimientos.index')
            ->with('success', 'Reconocimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $reconocimiento = Reconocimiento::find($id);

        return view('reconocimiento.show', compact('reconocimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $reconocimiento = Reconocimiento::find($id);

        return view('reconocimiento.edit', compact('reconocimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReconocimientoRequest $request, Reconocimiento $reconocimiento): RedirectResponse
    {
        $reconocimiento->update($request->validated());

        return Redirect::route('reconocimientos.index')
            ->with('success', 'Reconocimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reconocimiento::find($id)->delete();

        return Redirect::route('reconocimientos.index')
            ->with('success', 'Reconocimiento deleted successfully');
    }
}
