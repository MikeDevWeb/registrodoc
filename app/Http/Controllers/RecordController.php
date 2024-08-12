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
        // Fetch related data from other tables
        // Example: $relatedData = $selectedRecord->relatedTable()->get();

        return view('print_view', compact('selectedRecord'));
    }
}
