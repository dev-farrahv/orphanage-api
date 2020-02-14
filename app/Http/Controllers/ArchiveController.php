<?php

namespace App\Http\Controllers;
use DB;
use App\Archive;
use App\Doctor;
use App\Elder;
use App\ElderMedicalHistory;
use App\ElderTakenMed;
use App\Guest;
use App\Hospital;
use App\Login;
use App\Medicine;
use App\Task;
use App\User;
use App\UserEmploymentHistory;
use App\Accomplishments;
use App\MedicineInventory;
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

    public function getAllByArchived(Request $request)
    {
        $params = $request->all();

        //if($request->has('role')){
            $collection = DB::table($params['table'])->where('archived', $params['archived_value'])->get();
            //$collection = $params['table']::where('archived', $params['archived_value'])->get();
            return $collection;
        //}

        //return Archive::all();
    }
}
