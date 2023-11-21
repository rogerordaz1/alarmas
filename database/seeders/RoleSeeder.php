<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = Role::create(['name' => 'Admin', 'guard_name' => 'web']);

        $Tecnico = Role::create(['name' => 'Operativo', 'guard_name' => 'web']);


        //?Permisos de Usuarios/..

        Permission::create(
            ['name' => 'dashboard.users.index',
            ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.create',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.store',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.show',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.edit',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.update',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.users.destroy',
        ])->syncRoles([$Admin]);

        //? Permisos de Equipos
        Permission::create(
            ['name' => 'dashboard.equipos.index',
            ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.create',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.store',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.show',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.edit',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.update',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.equipos.destroy',
        ])->syncRoles([$Admin]);

        //? Permisos de Servicios
        Permission::create(
            ['name' => 'dashboard.servicios.index',
            ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.create',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.store',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.show',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.edit',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.update',
        ])->syncRoles([$Admin]);
        Permission::create([
            'name' => 'dashboard.servicios.destroy',
        ])->syncRoles([$Admin]);
    }
}
