<?php

namespace App\Http\Controllers;

use App\Models\Tutortribunal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TutortribunalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TutortribunalController extends Controller
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
        $tutortribunals = Tutortribunal::paginate();

        return view('tutortribunal.index', compact('tutortribunals'))
            ->with('i', ($request->input('page', 1) - 1) * $tutortribunals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tutortribunal = new Tutortribunal();

        return view('tutortribunal.create', compact('tutortribunal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TutortribunalRequest $request): RedirectResponse
    {
        Tutortribunal::create($request->validated());

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Tutortribunal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tutortribunal = Tutortribunal::find($id);

        return view('tutortribunal.show', compact('tutortribunal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tutortribunal = Tutortribunal::find($id);

        return view('tutortribunal.edit', compact('tutortribunal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TutortribunalRequest $request, Tutortribunal $tutortribunal): RedirectResponse
    {
        $tutortribunal->update($request->validated());

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Tutortribunal updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tutortribunal::find($id)->delete();

        return Redirect::route('tutortribunals.index')
            ->with('success', 'Tutortribunal deleted successfully');
    }
}
