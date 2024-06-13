<?php

namespace App\Http\Controllers;

use App\Models\Formprofesional;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FormprofesionalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FormprofesionalController extends Controller
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
        $formprofesionals = Formprofesional::paginate();

        return view('formprofesional.index', compact('formprofesionals'))
            ->with('i', ($request->input('page', 1) - 1) * $formprofesionals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $formprofesional = new Formprofesional();

        return view('formprofesional.create', compact('formprofesional'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormprofesionalRequest $request): RedirectResponse
    {
        Formprofesional::create($request->validated());

        return Redirect::route('formprofesionals.index')
            ->with('success', 'Formprofesional created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $formprofesional = Formprofesional::find($id);

        return view('formprofesional.show', compact('formprofesional'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $formprofesional = Formprofesional::find($id);

        return view('formprofesional.edit', compact('formprofesional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormprofesionalRequest $request, Formprofesional $formprofesional): RedirectResponse
    {
        $formprofesional->update($request->validated());

        return Redirect::route('formprofesionals.index')
            ->with('success', 'Formprofesional updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Formprofesional::find($id)->delete();

        return Redirect::route('formprofesionals.index')
            ->with('success', 'Formprofesional deleted successfully');
    }
}
