<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::get();
        return response()->json($task);
    }

    public function create(Request $request){
        $task = Task::create($request->toArray());
        return response()->json($task);
    }

    public function edit(Request $request, $id){
        $task = Task::where('id',$id)->update($request->toArray());
        return response()->json($task);
    }

    public function delete($id){
        $task = Task::destroy($id);
        return response()->json($task);
    }
}
