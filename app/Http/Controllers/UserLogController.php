<?php

namespace App\Http\Controllers;
use App\UserLog;
use Illuminate\Http\Request;

class UserLogController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        if($request->has('staff_id')){
            $collection = UserLog::where('staff_id', $params['staff_id'])->get();
            return $collection;
        }
        return UserLog::all();
    }
 
    public function show($id)
    {
        return UserLog::find($id);
    }

    public function store(Request $request)
    {
        return UserLog::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $UserLog = UserLog::findOrFail($id);
        $UserLog->update($request->all());

        return $UserLog;
    }

    public function destroy(Request $request, $id)
    {
        $UserLog = UserLog::findOrFail($id);
        $UserLog->delete();

        return 204;
    }
}
