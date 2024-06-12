<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
            ->first();
        if (!$user) {
            return response()->json('user not found');
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json('pass eror');
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json(["token" => $token]);

    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json('logged out');

    }


    public function Role(Request $request, $id){
    $user = User::find($id);
    if($user->hasRole($request->$id))
    {
        return response()->json('ok');
    }
    else
    {
        return response()->json('no');
    }
    }

    public function index(Request $request, string $id = null)
    {
        if($request->user()->hasPermissionTo('user.index')|| $request->user()->id == $id){


        $user =new User();
        $user = $user->with(['team:id,name','orders','labels:id,name']);
        if($request->has_oders){
            $user = $user->has('orders');
        }
        if($request->order_sum){
            $user = $user->withSum('orders', 'totalAmount');
        }
        if($request->order_count){
            $user = $user->whitCount('orders');

        }else{
            $user = $user->get();
        return response()->json($user);
        }
    } else{
        return $this->unauthorized_response();
    }

        $user = $user->get();
        return response()->json($user);

    }

    public function create(Request $request)
    {

            $users = User::create($request->toArray());
            $users->labels()->attach($request->label_ids);
            $users->assignRole('user');
            return response()->json($users);

        }



    public function edit(Request $request, $id)
    {
        if($request->user()->hasPermissionTo('user.edit')){
            $users = User::where('id', $id)->update($request->toArray());
            return response()->json($users);
        }else{
            return response()->json('user dose not have permission',403);
        }

    }

    public function delete(Request $request ,$id)
    {
        if($request->user()->hasPermissionTo('user.delete')){
            $users = User::destroy($id);
            return response()->json($users);
        }else{
            return response()->json('user dose not have permission',403);
        }

    }

    public function adminregister(Request $request){
        $user = auth()->user();

        if($user->hasRole('super_admin')){
            $user = User::create($request->toArray());
        $user->assignRole($request->role);
        return response()->json($user);
        }else{
            return response()->json('user dose not have permission',403);
        }

    }

}
