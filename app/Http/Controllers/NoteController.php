<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $note = Note::get();
        return response()->json($note);
    }

    public function create(Request $request){
        $note = Note::create($request->toArray());
        return response()->json($note);
    }

    public function edit(Request $request, $id){
        $note = Note::where('id', $id)->update($request->toArray());
        return response()->json($note);
    }

    public function delete($id){
        $note = Note::destroy($id);
        return response()->json($note);
    }
}
