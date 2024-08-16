<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datospersona;

class RecordController extends Controller
{
    public function index()
    {
        $allRecords = Datospersona::all();
        return view('select_record', compact('allRecords'));
    }

    public function show(Request $request, $id)
    {
        $selectedRecord = Datospersona::find($id);
        // $relatedData = $selectedRecord->relatedTable()->get();
        $record = $selectedRecord;
        return view('record_modal', compact('selectedRecord', 'record'));
    }
    // public function showModal($id)
    // {
    //     $record = Datospersona::find($id);
    //     $datosPersona = Datospersona::all($id);
    //     return view('record_modal', compact('record', 'datosPersona'));
    // }
}
