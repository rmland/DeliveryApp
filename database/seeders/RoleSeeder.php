<?php

namespace Database\Seeders;

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
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleUser = Role::create(['name'=>'user']);
        
        Permission::create(['name' => 'navigation.admin'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'categorias.index'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'categorias.edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'categorias.delete'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'categorias.show'])->syncRoles([$roleAdmin]);
        
        Permission::create(['name' => 'menu.index'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'menu.edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'menu.delete'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'menu.show'])->syncRoles([$roleAdmin]);
        
        Permission::create(['name' => 'users.index'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'users.delete'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'users.show'])->syncRoles([$roleAdmin]);
        
        Permission::create(['name' => 'roles.index'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'roles.edit'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'roles.delete'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'roles.show'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'public.contacto'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name' => 'dashboard'])->syncRoles([$roleAdmin, $roleUser]);
    }
}
