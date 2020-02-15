<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        if($request->has('role')){
            $collection = User::where('role', $params['role'])->get();
            return $collection;
        }
        
        return User::all();
    }
 
    public function show($id)
    {
        return User::find($id);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        // if (Hash::check('test123', $data['password']))
        // {
        //     dd('IS MATCH!');
        // }
        return User::create($data);
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $data = $request->all();
        // $data['password'] = Hash::make($data['password']);
        $User->update($data);

        return $User;
    }

    public function destroy(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return 204;
    }
}
