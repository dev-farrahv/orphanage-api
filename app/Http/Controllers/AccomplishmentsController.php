<?php

namespace App\Http\Controllers;
use App\Accomplishments;
use Illuminate\Http\Request;

class AccomplishmentsController extends Controller
{
    public function index()
    {
        return Accomplishments::all();
    }
 
    public function show($id)
    {
        return Accomplishments::find($id);
    }

    public function store(Request $request)
    {
        return Accomplishments::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Accomplishments = Accomplishments::findOrFail($id);
        $Accomplishments->update($request->all());

        return $Accomplishments;
    }

    public function destroy(Request $request, $id)
    {
        $Accomplishments = Accomplishments::findOrFail($id);
        $Accomplishments->delete();

        return 204;
    }
}
