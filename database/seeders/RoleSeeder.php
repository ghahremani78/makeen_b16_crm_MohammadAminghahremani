<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $admin->syncPermissions([
            'user.create',
            'user.index',
            'user.delete',
            'user.edit',
        ]);

        $super_admin = Role::create(['name' => 'super_admin']);
        $super_admin->syncPermissions([
            'user.create',
            'user.index',
            'user.delete',
            'user.edit',
            'product.create',
            'product.index',
            'product.edit',
            'product.delete',
            'order.create',
            'order.index',
            'order.edit',
            'order.delete',

        ]);

        $user = Role::create(['name' => 'user']);
        $user->syncPermissions([
            'user.index'
        ]);
        $reseller = Role::create(['name' => 'reseller']);
        $reseller->syncPermissions([
            'user.create',
            'user.index'
        ]);

        $super_admin = User::create([
            'username' => 'mohammad',
            'first_name' => 'mohammad amin',
            'last_name' => 'ghrmn',
            'phoneNumber' => '9940362007',
            'email' => 'm_ghahremani89@yahoo.com',
            'password' => '123456'
        ]);
        $super_admin->assignRole('super_admin');
    }
}
