<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index(){
        $task = Task::get();
        return response()->json($task);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'image' => 'required|image'
        ]);
        if($validator->fails()){
            return $this->errorResponse($validator->messages(),422);
        }

        $image = Carbon::now()->microsecond . '.' . $request->image->extension();

        dd($request->image);
        //$task = Task::create($request->toArray());
        //return response()->json($task);
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
