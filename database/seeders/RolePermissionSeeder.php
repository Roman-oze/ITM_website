<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /*
        |--------------------------------------------------------------------------
        | Create Permissions
        |--------------------------------------------------------------------------
        */

        $permissions = [

            // Role Management
            'view role',
            'create role',
            'update role',
            'delete role',
            'assign permission',

            // Permission Management
            'view permission',
            'create permission',
            'update permission',
            'delete permission',

            // User Management
            'view user',
            'create user',
            'update user',
            'delete user',

        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Create Roles
        |--------------------------------------------------------------------------
        */

        $superAdmin = Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'web',
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $employee = Role::firstOrCreate([
            'name' => 'employee',
            'guard_name' => 'web',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Assign Permissions
        |--------------------------------------------------------------------------
        */

        // Super Admin gets everything
        $superAdmin->syncPermissions(Permission::all());

        // Admin permissions
        $admin->syncPermissions([

            'view role',
            'create role',
            'update role',

            'view permission',
            'create permission',

            'view user',
            'create user',
            'update user',

        ]);

        // Employee permissions
        $employee->syncPermissions([

            'view user',

        ]);
    }
}
