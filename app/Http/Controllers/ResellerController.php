<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function index(){
        $reseller = Reseller::get();
        return response()->json($reseller);
    }

    public function create(Request $request){
        $reseller = Reseller::create($request->toArray());
        return response()->json($reseller);
    }

    public function edit(Request $request, $id){
        $reseller = Reseller::where('id',$id)->update($request->toArray());
        return response()->json($reseller);
    }

    public function delete($id){
        $reseller = Reseller::destroy($id);
        return response()->json($reseller);
    }

}
