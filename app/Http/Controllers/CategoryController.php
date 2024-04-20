<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
