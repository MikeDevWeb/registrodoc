<?php

namespace App\Http\Controllers;

use App\Models\Expoevento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpoeventoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpoeventoController extends Controller
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
        $expoeventos = Expoevento::paginate();

        return view('expoevento.index', compact('expoeventos'))
            ->with('i', ($request->input('page', 1) - 1) * $expoeventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expoevento = new Expoevento();

        return view('expoevento.create', compact('expoevento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpoeventoRequest $request): RedirectResponse
    {
        Expoevento::create($request->validated());

        return Redirect::route('expoeventos.index')
            ->with('success', 'Expoevento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expoevento = Expoevento::find($id);

        return view('expoevento.show', compact('expoevento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expoevento = Expoevento::find($id);

        return view('expoevento.edit', compact('expoevento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpoeventoRequest $request, Expoevento $expoevento): RedirectResponse
    {
        $expoevento->update($request->validated());

        return Redirect::route('expoeventos.index')
            ->with('success', 'Expoevento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Expoevento::find($id)->delete();

        return Redirect::route('expoeventos.index')
            ->with('success', 'Expoevento deleted successfully');
    }
}
