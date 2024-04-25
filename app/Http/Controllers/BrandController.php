<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::with('products')->get();
        return response()->json($brand);
}

public function create(Request $request){
    $brand = Brand::create($request->toArray());
    return response()->json($brand);
}

public function edit(Request $request,$id){
    $brand = Brand::where('id',$id)->update($request->toArray());
    return response()->json($brand);
}

public function delete($id){
    $brand = Brand::destroy($id);
    return response()->json($brand);
}
}
