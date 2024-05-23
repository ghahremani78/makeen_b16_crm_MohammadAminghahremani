<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $ticket = Ticket::with(['medias','messages']);
        return response()->json($ticket);
    }

    public function create(Request $request){
        $ticket = Ticket::create($request->toArray());
        return response()->json($ticket);
    }

    public function edit(Request $request ,$id){
        $ticket = Ticket::where('id',$id)->update($request->toArray());
        return response()->json($ticket);
    }

    public function delete(Request $request, $id){
        $ticket = Ticket::destroy($id);
        return response()->json($ticket);
    }
}
