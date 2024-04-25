<?php

namespace Database\Seeders;

use App\Models\Reseller;
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
        Permission::create(['name'=>'create-users']);
        Permission::create(['name'=>'index-users']);
        Permission::create(['name'=>'edit-users']);
        Permission::create(['name'=>'delete-users']);
        $admin->givePermissionTo([
        'create-users',
        'index-users',
        'delete-users',
        'edit-users'
    ]);
    $super_admin->givePermissionTo([
        'create-users',
        'index-users',
        'delete-users',
        'edit-users'
    ]);
    $user->givePermissionTo([

        'index-users'
    ]);
    $reseller->givePermissionTo([
        'create-users',
        'index-users'
    ]);

    }
}
