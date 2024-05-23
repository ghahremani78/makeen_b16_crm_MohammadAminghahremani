<?php

namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index(){
        $warranty = Warranty::get();
        return response()->json($warranty);
    }

    public function create(Request $request){
        $warranty = Warranty::create($request->toArray());
        return response()->json($warranty);
    }

    public function edit(Request $request, $id){
        $warranty = Warranty::where('id',$id)->update($request->toArray());
        return response()->json($warranty);
    }

    public function delete(Request $request, $id){
        $warranty = Warranty::destroy($id);
        return response()->json($warranty);
    }
}
