<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function index(){
        $factor = Factor::get();
        return response()->json($factor);
    }

    public function create(Request $request){
        $factor = Factor::crate($request->toArray());
        return response()->json($factor);
    }
    public function edit(Request $request,$id){
        $factor = Factor::where('id',$id)->update($request->toArray());
        return response()->json($factor);
    }
    public function delete($id){
        $factor = Factor::destroy($id);
        return response()->json($factor);

    }
}
