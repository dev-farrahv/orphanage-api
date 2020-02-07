<?php

namespace App\Http\Controllers;
use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::all();
    }
 
    public function show($id)
    {
        return Doctor::find($id);
    }

    public function store(Request $request)
    {
        return Doctor::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Doctor = Doctor::findOrFail($id);
        $Doctor->update($request->all());

        return $Doctor;
    }

    public function destroy(Request $request, $id)
    {
        $Doctor = Doctor::findOrFail($id);
        $Doctor->delete();

        return 204;
    }
}
