<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index() {
        $orders = Order::with(['user','products'])->get();

        return response()->json( $orders);
    }

    public function create(Request $request) {
      $orders = Order::create($request->toArray());
      $orders->products()->attach($request->product_ids);
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
