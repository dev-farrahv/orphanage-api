<?php

namespace App\Http\Controllers;
use App\MedicineInventory;
use Illuminate\Http\Request;

class MedicineInventoryController extends Controller
{
    public function index()
    {
        return MedicineInventory::all();
    }
 
    public function show($id)
    {
        return MedicineInventory::find($id);
    }

    public function store(Request $request)
    {
        return MedicineInventory::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $MedicineInventory = MedicineInventory::findOrFail($id);
        $MedicineInventory->update($request->all());

        return $MedicineInventory;
    }

    public function destroy(Request $request, $id)
    {
        $MedicineInventory = MedicineInventory::findOrFail($id);
        $MedicineInventory->delete();

        return 204;
    }
}
