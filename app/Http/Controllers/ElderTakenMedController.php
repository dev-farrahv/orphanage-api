<?php

namespace App\Http\Controllers;
use App\ElderTakenMed;

use Illuminate\Http\Request;

class ElderTakenMedController extends Controller
{
    public function index()
    {
        return ElderTakenMed::all();
    }
 
    public function show($id , Request $request)
    {
        return ElderTakenMed::find($id);
    }

    public function store(Request $request)
    {
        return ElderTakenMed::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $ElderTakenMed = ElderTakenMed::findOrFail($id);
        $ElderTakenMed->update($request->all());

        return $ElderTakenMed;
    }

    public function destroy(Request $request, $id)
    {
        $ElderTakenMed = ElderTakenMed::findOrFail($id);
        $ElderTakenMed->delete();

        return 204;
    }
}
