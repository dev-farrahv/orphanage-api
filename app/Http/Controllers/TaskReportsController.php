<?php

namespace App\Http\Controllers;
use App\TaskReports;
use Illuminate\Http\Request;

class TaskReportsController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        if($request->has('staff_id')){
            $collection = TaskReports::where('staff_id', $params['staff_id'])->get();
            return $collection;
        }
        return TaskReports::all();
    }
 
    public function show($id)
    {
        return TaskReports::find($id);
    }

    public function store(Request $request)
    {
        return TaskReports::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $TaskReports = TaskReports::findOrFail($id);
        $TaskReports->update($request->all());

        return $TaskReports;
    }

    public function destroy(Request $request, $id)
    {
        $TaskReports = TaskReports::findOrFail($id);
        $TaskReports->delete();

        return 204;
    }

    public function getTaskByDateToday()
    {
        // $params = $request->all();

        // if($request->has('staff_id')){
        //     $collection = TaskReports::where('date', $params['staff_id'])->get();
        //     return $collection;
        // }
        $datataskreports = TaskReports::all();
        $finaltaskreports = [];
        foreach ($datataskreports as $data) {
            if(date('d-m-Y', strtotime($data['date'])) == date('d-m-Y')){
                array_push($finaltaskreports, $data);
            }
        }
        return $finaltaskreports;
    }
}
