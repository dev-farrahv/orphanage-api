<?php

namespace App\Http\Controllers;
use App\Guest;
use App\Elder;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $allguest = Guest::all();
        foreach ($allguest as $getguest) {
            $getthiselder = Elder::where('id', $getguest['elder_id'])->first();
            $getguest['elder_name'] = $getthiselder['first_name'] . ' '. $getthiselder['last_name'];
        }
        return $allguest;
    }
 
    public function show($id)
    {
        return Guest::find($id);
    }

    public function store(Request $request)
    {
        return Guest::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Guest = Guest::findOrFail($id);
        $Guest->update($request->all());

        return $Guest;
    }

    public function destroy(Request $request, $id)
    {
        $Guest = Guest::findOrFail($id);
        $Guest->delete();

        return 204;
    }
}
