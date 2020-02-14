<?php

namespace App\Http\Controllers;
use App\MedicineReport;
use Illuminate\Http\Request;

class MedicineReportController extends Controller
{
    public function index()
    {
        return MedicineReport::all();
    }
 
    public function show($id)
    {
        return MedicineReport::find($id);
    }

    public function store(Request $request)
    {
        return MedicineReport::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $MedicineReport = MedicineReport::findOrFail($id);
        $MedicineReport->update($request->all());

        return $MedicineReport;
    }

    public function destroy(Request $request, $id)
    {
        $MedicineReport = MedicineReport::findOrFail($id);
        $MedicineReport->delete();

        return 204;
    }
}
