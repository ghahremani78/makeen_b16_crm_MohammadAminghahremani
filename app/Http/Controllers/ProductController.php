<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand','orders','labe'])->get();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $products = Product::create($request->toArray());
        $products->orders()->attach($request->order_ids);
        $products->labels()->attach($request->label_ids);
        return response()->json($products);
    }

    public function edit(Request $request, $id)
    {
        $products = Product::where('id', $id)->update($request->toArray());
        return response()->json($products);
    }

    public function delete($id)
    {
        $products = Product::destroy($id);
        return response()->json($products);
    }
}
