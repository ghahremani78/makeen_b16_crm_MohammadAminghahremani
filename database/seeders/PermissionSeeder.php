<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user permission
        Permission::create(['name' => 'user.index']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.delete']);
        //product permission
        Permission::create(['name' => 'product.index']);
        Permission::create(['name' => 'product.create']);
        Permission::create(['name' => 'product.edit']);
        Permission::create(['name' => 'product.delete']);
        //order permissiom
        Permission::create(['name' => 'order.index']);
        Permission::create(['name' => 'order.create']);
        Permission::create(['name' => 'order.edit']);
        Permission::create(['name' => 'order.delete']);
    }
}
