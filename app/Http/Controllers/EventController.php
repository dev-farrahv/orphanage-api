<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }
 
    public function show($id)
    {
        return Event::find($id);
    }

    public function store(Request $request)
    {
        return Event::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Event = Event::findOrFail($id);
        $Event->update($request->all());

        return $Event;
    }

    public function destroy(Request $request, $id)
    {
        $Event = Event::findOrFail($id);
        $Event->delete();

        return 204;
    }
}
