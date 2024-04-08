<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();
        return response()->json( $categories);
    }

    public function create(Request $request) {
        DB::table('categories')->insert($request->toArray());
        return response()->json('$categories');
    }

    public function edit(Request $request, $id) {
        $categories = DB::table('categories')->where('id', $id)->update($request->toArray());
        return response()->json($categories);
    }
    
    public function delete($id) {
        $categories = DB::table('categories')->where('id', $id)->delete();
        return response()->json($categories);
    }

}
