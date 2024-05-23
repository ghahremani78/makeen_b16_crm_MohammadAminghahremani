<?php

namespace App\Http\Controllers;

use App\Models\label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index(){
        $lable = label::with(['users','products','teams'])->get();
        return response()->json($lable);
    }

    public function create(Request $request){
        $lable = label::create($request->toArray());
        return response()->json($lable);
    }

    public function edit(Request $request,$id){
        $lable = label::where('id', $id)->update($request->toArray());
        return response()->json($lable);
    }

    public function delete($id){
        $lable = label::destroy($id);
        return response()->json($lable);
    }
}
