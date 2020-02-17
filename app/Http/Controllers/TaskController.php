<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        if($request->has('task_owner_role')){
            $collection = Task::where('task_owner_role', $params['task_owner_role'])->get();
            return $collection;
        }        

        if($request->has('task_owner_id')){
            $collection = Task::where('task_owner_id', $params['task_owner_id'])->get();
            return $collection;
        }
        return Task::all();
    }
 
    public function show($id)
    {
        return Task::find($id);
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Task = Task::findOrFail($id);
        $Task->update($request->all());

        return $Task;
    }

    public function destroy(Request $request, $id)
    {
        $Task = Task::findOrFail($id);
        $Task->delete();

        return 204;
    }
}
