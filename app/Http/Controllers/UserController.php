<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index()
    {
        $users = User::get();
        return response()->json($users);
    }

    public function create(Request $request)
    {
        $users = User::create($request->merge([
            "password" => Hash::make($request->password)
        ])->toArray());
        return response()->json($users);
    }

    public function edit(Request $request, $id)
    {
        $users = User::where('id', $id)->update($request->merge([
            "password" => Hash::make($request->password)
        ])->toArray());
        return response()->json($users);
    }

    public function delete($id)
    {
        $users = User::destroy($id);
        return response()->json($users);

    }

}
