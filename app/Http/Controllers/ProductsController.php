<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return response()->json( $products);
    }

    public function create(Request $request) {
        DB::table('products')->insert($request->toArray());
        return response()->json('products');
    }

    public function edit(Request $request, $id) {
        $products = DB::table('products')->where('id', $id)->update($request->toArray());
        return response()->json($products);
    }

    public function delete($id) {
        $products = DB::table('products')->where('id', $id)->delete();
        return response()->json($products);
    }
}
