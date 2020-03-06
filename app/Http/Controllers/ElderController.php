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
        $bed_no_exist = Elder::where('bed_no', $request['bed_no'])->get();

        if( count($bed_no_exist) > 0 ){
            return response()->json([
                'message' => 'Bed number already exist.'
            ], 409);
        }

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
