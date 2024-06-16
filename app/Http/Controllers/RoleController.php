<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request){
        if($request->user()->can('read.roles',Role::class)){
            $role = Role::get();
        return $this->success_response($role);
        }
        else {
            return $this->unauthorized_response();
        }
    }
    public function edit(Request $request,$id){
        if($request->user()->can('edit.roles',Role::class)){
            $role = Role::get();
        return $this->success_response($role);
        }
    }
}
