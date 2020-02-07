<?php

namespace App\Http\Controllers;
use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return Hospital::all();
    }
 
    public function show($id)
    {
        return Hospital::find($id);
    }

    public function store(Request $request)
    {
        return Hospital::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Hospital = Hospital::findOrFail($id);
        $Hospital->update($request->all());

        return $Hospital;
    }

    public function destroy(Request $request, $id)
    {
        $Hospital = Hospital::findOrFail($id);
        $Hospital->delete();

        return 204;
    }
}
