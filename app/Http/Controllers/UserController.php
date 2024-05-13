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

    public function index(Request $request)
    {
        //$phone_number = request('phone_number');
        //$email = request('email');
        $user =new User();
        //سفارشاتی مه مربوط به کاربر با شماره مو بایل ایکس و ایمیل ایکس می باشد
      $user = $user->with(['team:id,name','orders','labels:id,name']);
      //$user = $user->whereHas('orders',function(Builder $q) use($phone_number,$email){
      //$q->where('email',$email)->where('phoneNumber',$phone_number);
   //});
        //if($request->has_order)
        //$user = $user->paginate(10);
        $user = $user->get();
        return response()->json($user);
    }

    public function create(Request $request)
    {
        $users = User::create($request->toArray());
        $users->labels()->attach($request->label_ids);
        return response()->json($users);
    }

    public function edit(Request $request, $id)
    {
        $users = User::where('id', $id)->update($request->toArray());
        return response()->json($users);
    }

    public function delete($id)
    {
        $users = User::destroy($id);
        return response()->json($users);
    }

    public function adminregister(Request $request){
        $user = User::create($request->toArray());
        $user->assignRole($request->role);
        return response()->json($user);
    }

}
