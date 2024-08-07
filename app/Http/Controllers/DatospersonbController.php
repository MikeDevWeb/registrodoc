<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Datospersona;
use App\Models\Datospersonb;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DatospersonbRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DatospersonbController extends Controller
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

        $datospersonbs = Datospersonb::with('user')->paginate();

        $datospersona = Datospersona::all();

        return view('datospersonb.index', compact('datospersonbs', 'datospersona'))
            ->with('i', ($request->input('page', 1) - 1) * $datospersonbs->perPage());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $datospersonb = new Datospersonb();
        $datospersonas = Datospersona::all();
        $datospersona = $datospersonas;
        return view('datospersonb.create', compact('datospersonb', 'datospersonas', 'datospersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatospersonbRequest $request): RedirectResponse
    {
        Datospersonb::create($request->validated());

        return Redirect::route('datospersonbs.index')
            ->with('Genial!', 'Registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $datospersonb = Datospersonb::find($id);

        return view('datospersonb.show', compact('datospersonb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $datospersonb = Datospersonb::find($id);
        $datospersona = Datospersona::all();
        $datospersonas = $datospersona;
        return view('datospersonb.edit', compact('datospersonb', 'datospersonas', 'datospersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DatospersonbRequest $request, Datospersonb $datospersonb): RedirectResponse
    {
        $datospersonb->update($request->validated());

        return Redirect::route('datospersonbs.index')
            ->with('success', 'Modificado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Datospersonb::find($id)->delete();

        return Redirect::route('datospersonbs.index')
            ->with('success', 'Eliminado correctamente');
    }
}
