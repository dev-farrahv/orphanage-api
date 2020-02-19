<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {

    }
 
    public function show($id)
    {

    }

    public function store(Request $request)
    {
        $data = $request->image->store('public/images');

        if($data){
            $filePath = $data; //storage/app/images/bqOziUTj2O1P599oftOmKm3OySvRV1WdzHdJPBzO.png
            return response()->json([
                'filePath' => $filePath
            ], 200);            
        } else {
            return response()->json([
                'message' => 'Something went wrong.'
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request, $id)
    {

    }


    //update email and password/ validation for email if exists
    public function updateEmailPassword(Request $request)
    {

    }
}
