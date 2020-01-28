<?php

namespace App\Http\Controllers;
use App\Elder;

use Illuminate\Http\Request;

class ElderController extends Controller
{
    public function index()
    {
        return Elder::all();
    }
 
    public function show($id)
    {
        return Elder::find($id);
    }

    public function store(Request $request)
    {
        return Elder::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Elder = Elder::findOrFail($id);
        $Elder->update($request->all());

        return $Elder;
    }

    public function destroy(Request $request, $id)
    {
        $Elder = Elder::findOrFail($id);
        $Elder->delete();

        return 204;
    }
}
