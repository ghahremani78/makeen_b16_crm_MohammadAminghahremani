<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        $orders = DB::table('orders')->get();
        return response()->json( $orders);
    }

    public function create(Request $request) {
      $orders = DB::table('orders')->insert($request->toArray());
        return response()->json($orders);
    }

    public function edit(Request $request, $id) {
        $orders = DB::table('orders')->where('id', $id)->update($request->toArray());
        return response()->json($orders);
    }

    public function delete($id) {
        $orders = DB::table('orders')->where('id', $id)->delete();
        return response()->json($orders);
    }
}
