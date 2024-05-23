<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $message = Message::get();
        return response()->json($message);
    }

    public function create(Request $request){
        $message = Message::create($request->toArray());
        return response()->json($message);
    }

    public function edit(Request $request,$id){
        $message = Message::where('id',$id)->update($request->toArray());
        return response()->json($message);
    }

    public function delete(Request $request, $id){
        $message = Message::destroy($id);
        return response()->json($message);
    }
}
