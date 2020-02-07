<?php

namespace App\Http\Controllers;
use App\ElderMedicalHistory;
use Illuminate\Http\Request;

class ElderMedicalHistoryController extends Controller
{
    public function index()
    {
        return ElderMedicalHistory::all();
    }
 
    public function show($id)
    {
        return ElderMedicalHistory::find($id);
    }

    public function store(Request $request)
    {
        return ElderMedicalHistory::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $ElderMedicalHistory = ElderMedicalHistory::findOrFail($id);
        $ElderMedicalHistory->update($request->all());

        return $ElderMedicalHistory;
    }

    public function destroy(Request $request, $id)
    {
        $ElderMedicalHistory = ElderMedicalHistory::findOrFail($id);
        $ElderMedicalHistory->delete();

        return 204;
    }
}
