<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $getuser = User::where('email', $data['email'])->first();
        if($getuser){
            if (Hash::check($data['password'], $getuser['password']))
            {
                return response()->json([
                    'message' => 'User Logged in successfully.',
                    'data' => $getuser,
                ], 200);
            } else { 
                return response()->json([
                    'message' => 'Password does not match.',
                ], 404);
             }
        }else{
            return response()->json([
                'message' => 'Email not found.',
            ], 404);
        }

        return User::create($data);
    }
}
