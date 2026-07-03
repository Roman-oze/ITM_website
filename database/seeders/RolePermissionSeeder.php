<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        $permissions = [

            'view role',
            'create role',
            'update role',
            'delete role',

            'view permission',
            'create permission',
            'update permission',
            'delete permission',

            'view user',
            'create user',
            'update user',
            'delete user',

        ];

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name'=>$permission,
                'guard_name'=>'web'
            ]);

        }

        $superAdmin = Role::firstOrCreate([
            'name'=>'super-admin',
            'guard_name'=>'web'
        ]);

        $admin = Role::firstOrCreate([
            'name'=>'admin',
            'guard_name'=>'web'
        ]);

        $superAdmin->syncPermissions(Permission::all());

        $admin->syncPermissions([

            'view role',

            'view permission',

            'view user',

            'create user',

            'update user'

        ]);

    }
}
