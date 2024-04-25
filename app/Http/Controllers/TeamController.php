<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $team = Team::with('users:id,username,team_id','labels')->get();
        return response()->json($team);
    }

    public function create(Request $request){
        $team = Team::create($request->toArray());
        $team->labels()->attach($request->label_ids);
        return response()->json($team);
    }

    public function edit(Request $request, $id){
        $team = team::where('id',$id)->update($request->toArray());
        return response()->json($team);
    }
    public function delete($id){
        $team = team::destroy($id);
        return response()->json($team);
    }
}
