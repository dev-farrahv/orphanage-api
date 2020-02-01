<?php

namespace App\Http\Controllers;
use App\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return Medicine::all();
    }
 
    public function show($id)
    {
        return Medicine::find($id);
    }

    public function store(Request $request)
    {
        return Medicine::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Medicine = Medicine::findOrFail($id);
        $Medicine->update($request->all());

        return $Medicine;
    }

    public function destroy(Request $request, $id)
    {
        $Medicine = Medicine::findOrFail($id);
        $Medicine->delete();

        return 204;
    }
}
