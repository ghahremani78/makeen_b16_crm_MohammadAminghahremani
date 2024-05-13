<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $orders = new Order();
        $orders = $orders->with(['user:id,username', 'products'])->orderBy('id', 'desc');
        //if ($request->email) {
            //$orders = $orders->whereHas('user', function (Builder $q) use ($email) {
              //  $q->where('email', $email);
           //});
       // }
        //if($request->phoneNumber) {
           // $orders = $orders->whereHas('user', function (Builder $q) use ($phoneNumber) {
          //      $q->where('phoneNumber', $phoneNumber);
            //});
        //}





        $orders = $orders->get();



        return response()->json($orders);
    }

    public function show($id)
    {
        $order = Order::with(['user', 'products'])->find($id);
        return response()->json($order);
    }

    public function create(Request $request)
    {
        $orders = Order::create($request->toArray());
        $orders->products()->attach($request->product_ids);
        return response()->json($orders);
    }

    public function edit(Request $request, $id)
    {
        $orders = Order::where('id', $id)->update($request->toArray());
        return response()->json($orders);
    }

    public function delete($id)
    {
        $orders = Order::destroy($id);
        return response()->json($orders);
    }
}
