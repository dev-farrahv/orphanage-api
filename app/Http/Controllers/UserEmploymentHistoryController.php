<?php

namespace App\Http\Controllers;
use App\UserEmploymentHistory;
use Illuminate\Http\Request;

class UserEmploymentHistoryController extends Controller
{
    public function index()
    {
        return UserEmploymentHistory::all();
    }
 
    public function show($id)
    {
        return UserEmploymentHistory::find($id);
    }

    public function store(Request $request)
    {
        return UserEmploymentHistory::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $UserEmploymentHistory = UserEmploymentHistory::findOrFail($id);
        $UserEmploymentHistory->update($request->all());

        return $UserEmploymentHistory;
    }

    public function destroy(Request $request, $id)
    {
        $UserEmploymentHistory = UserEmploymentHistory::findOrFail($id);
        $UserEmploymentHistory->delete();

        return 204;
    }
}
