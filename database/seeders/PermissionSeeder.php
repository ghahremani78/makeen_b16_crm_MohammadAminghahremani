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
    }
}
