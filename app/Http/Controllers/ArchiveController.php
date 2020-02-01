<?php

namespace App\Http\Controllers;
use App\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index()
    {
        return Archive::all();
    }
 
    public function show($id)
    {
        return Archive::find($id);
    }

    public function store(Request $request)
    {
        return Archive::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Archive = Archive::findOrFail($id);
        $Archive->update($request->all());

        return $Archive;
    }

    public function destroy(Request $request, $id)
    {
        $Archive = Archive::findOrFail($id);
        $Archive->delete();

        return 204;
    }
}
