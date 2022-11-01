<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' =>'Administrador']);
        $role2 = Role::create(['name' =>'Empleado']);
        

        Permission::create(['name'=>'admin.home',
                            'description'=>'Ver Dashboard'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.categories.index',
                            'description'=>'Ver listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.create',
                            'description'=>'Crear categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.edit',
                            'description'=>'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.destroy',
                            'description'=>'Eliminar categorias'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.users.index',
                            'description'=>'Ver lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.create',
                            'description'=>'Crear usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                            'description'=>'editar usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.destroy',
                            'description'=>'Eliminar usuario'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.roles.index',
                            'description'=>'Ver lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.create',
                            'description'=>'Crear usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.edit',
                            'description'=>'editar usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.destroy',
                            'description'=>'Eliminar usuario'])->syncRoles([$role1]);
        
        Permission::create(['name'=>'clientes.index',
                            'description'=>'clientes'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'clientes.create',
                            'description'=>'Crear cliente'])->syncRoles([$role1]);
        Permission::create(['name'=>'clientes.edit',
                            'description'=>'editar cliente'])->syncRoles([$role1]);
        Permission::create(['name'=>'clientes.destroy',
                            'description'=>'Eliminar cliente'])->syncRoles([$role1]);
    }
}
