<?php

namespace App\Http\Controllers;
use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        if($request->has('staff_id')){
            $collection = Notification::where('staff_id', $params['staff_id'])->get();
            return $collection;
        }        

        // if($request->has('task_owner_id')){
        //     $collection = Notification::where('task_owner_id', $params['task_owner_id'])->get();
        //     return $collection;
        // }
        return Notification::all();
    }
 
    public function show($id)
    {
        return Notification::find($id);
    }

    public function store(Request $request)
    {
        return Notification::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Task = Notification::findOrFail($id);
        $Task->update($request->all());

        return $Task;
    }

    public function destroy(Request $request, $id)
    {
        $Task = Notification::findOrFail($id);
        $Task->delete();

        return 204;
    }
}
