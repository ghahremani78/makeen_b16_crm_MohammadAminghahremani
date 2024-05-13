<?php

namespace Database\Seeders;

use App\Models\Reseller;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name'=>'admin']);
        $super_admin = Role::create(['name' => 'super_admin']);
        $user = Role::create(['name' => 'user']);
        $reseller = Role::create(['name' => 'Reseller']);
        /*user permission
        Permission::create(['name'=>'create-user']);
        Permission::create(['name'=>'index-user']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'delete-user']);
        //product permission
        Permission::create(['name'=>'create-product']);
        Permission::create(['name'=>'index-product']);
        Permission::create(['name'=>'edit-product']);
        Permission::create(['name'=>'delete-product']);
        //order permissiom
        Permission::create(['name'=>'create-order']);
        Permission::create(['name'=>'index-order']);
        Permission::create(['name'=>'edit-order']);
        Permission::create(['name'=>'delete-order']);
        //super_admin role
        $super_admin = Role::where(['name', 'super_admin'])->first();
        if(!$super_admin){
            $super_admin = Role::create(['name'=> 'super_admin']);
        }
        //admin role
        $admin = Role::where(['name', 'admin'])->first();
        if(!$admin){
            $admin = Role::create(['name'=> 'admin']);
        }
        // user role
        $user = Role::where(['name', 'user'])->first();
        if(!$user){
            $user = Role::create(['name'=> 'user']);
        }
        //reseller role
        $reseller = Role::where(['name', 'reseller'])->first();
        if(!$reseller){
            $reseller = Role::create(['name'=>'reseller']);
        *///}


    $admin->syncPermissions([
        'create-users',
        'index-users',
        'delete-users',
        'edit-users',
    ]);
    $super_admin->syncPermissions([
        'create-users',
        'index-users',
        'delete-users',
        'edit-users',
        'create-product',
        'index-product',
        'edit-product',
        'delete-product',
        'create-order',
        'index-order',
        'edit-order',
        'delete-order',

    ]);
    $user->syncPermissions([

        'index-users'
    ]);
    $reseller->syncPermissions([
        'create-users',
        'index-users'
    ]);

    $super_admin = User::create([
        'username'=> 'mohammad',
        'phoneNumber'=>'9940362007',
        'email'=>'m_ghahremani89@yahoo.com',
        'password'=>'123456'
    ]);
    $super_admin->assignRole('super_admin');


    }
}
