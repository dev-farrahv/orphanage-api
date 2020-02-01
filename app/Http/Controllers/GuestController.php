<?php

namespace App\Http\Controllers;
use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return Guest::all();
    }
 
    public function show($id)
    {
        return Guest::find($id);
    }

    public function store(Request $request)
    {
        return Guest::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Guest = Guest::findOrFail($id);
        $Guest->update($request->all());

        return $Guest;
    }

    public function destroy(Request $request, $id)
    {
        $Guest = Guest::findOrFail($id);
        $Guest->delete();

        return 204;
    }
}
