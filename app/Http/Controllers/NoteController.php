<?php

namespace App\Http\Controllers;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        return Note::all();
    }
 
    public function show($id)
    {
        return Note::find($id);
    }

    public function store(Request $request)
    {
        return Note::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Note = Note::findOrFail($id);
        $Note->update($request->all());

        return $Note;
    }

    public function destroy(Request $request, $id)
    {
        $Note = Note::findOrFail($id);
        $Note->delete();

        return 204;
    }
}
