<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['brand','orders','labels','warranty'])->get();
        if($request->user()->can('product.index')){

            return response()->json($products);
        }else{
            return response()->json('user dose not have permission',403);
        }

    }

    public function create(Request $request)
    {
        $path = $request->file('path_image')->store('public/product_image');
        $products = Product::create($request->merge(["image_path" =>$path])->toArray());
        $products->orders()->attach($request->order_ids);
        $products->label()->attach($request->label_ids);

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
