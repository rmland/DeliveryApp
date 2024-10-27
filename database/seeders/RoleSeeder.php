<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        Permission::create(['name' => 'categorias.index']);
        Permission::create(['name' => 'categorias.edit']);
        Permission::create(['name' => 'categorias.delete']);
        Permission::create(['name' => 'categorias.show']);

        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.edit']);
        Permission::create(['name' => 'menu.delete']);
        Permission::create(['name' => 'menu.show']);

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);
        Permission::create(['name' => 'users.show']);
    }
}
