<?php

namespace App\Http\Controllers;

use App\Models\Exposeminario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExposeminarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExposeminarioController extends Controller
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
        $exposeminarios = Exposeminario::paginate();

        return view('exposeminario.index', compact('exposeminarios'))
            ->with('i', ($request->input('page', 1) - 1) * $exposeminarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $exposeminario = new Exposeminario();

        return view('exposeminario.create', compact('exposeminario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExposeminarioRequest $request): RedirectResponse
    {
        Exposeminario::create($request->validated());

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Exposeminario created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $exposeminario = Exposeminario::find($id);

        return view('exposeminario.show', compact('exposeminario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $exposeminario = Exposeminario::find($id);

        return view('exposeminario.edit', compact('exposeminario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExposeminarioRequest $request, Exposeminario $exposeminario): RedirectResponse
    {
        $exposeminario->update($request->validated());

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Exposeminario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Exposeminario::find($id)->delete();

        return Redirect::route('exposeminarios.index')
            ->with('success', 'Exposeminario deleted successfully');
    }
}
