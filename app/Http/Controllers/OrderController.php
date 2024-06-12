<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $orders = new Order();
        $orders = $orders->with(['user:id,username', 'products'])->orderBy('id', 'desc');
        $orders = $orders->get();
        if($request->user()->can('order.index')){

            return response()->json($orders);
        }else{
            return response()->json('user dose not have permission',403);
        }

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
        $user = User::find($request->user_id);
        Mail::send(new OrderShipped($user));
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
