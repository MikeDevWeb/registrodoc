<?php

namespace App\Http\Controllers;

use App\Models\Expprograrel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpprograrelRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpprograrelController extends Controller
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
        $expprograrels = Expprograrel::paginate();

        return view('expprograrel.index', compact('expprograrels'))
            ->with('i', ($request->input('page', 1) - 1) * $expprograrels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expprograrel = new Expprograrel();

        return view('expprograrel.create', compact('expprograrel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpprograrelRequest $request): RedirectResponse
    {
        Expprograrel::create($request->validated());

        return Redirect::route('expprograrels.index')
            ->with('success', 'Expprograrel created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expprograrel = Expprograrel::find($id);

        return view('expprograrel.show', compact('expprograrel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expprograrel = Expprograrel::find($id);

        return view('expprograrel.edit', compact('expprograrel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpprograrelRequest $request, Expprograrel $expprograrel): RedirectResponse
    {
        $expprograrel->update($request->validated());

        return Redirect::route('expprograrels.index')
            ->with('success', 'Expprograrel updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Expprograrel::find($id)->delete();

        return Redirect::route('expprograrels.index')
            ->with('success', 'Expprograrel deleted successfully');
    }
}
