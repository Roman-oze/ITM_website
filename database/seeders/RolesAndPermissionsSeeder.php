<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

     // Clear cache (optional but recommended to avoid any stale permissions issues)
     app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

     // Create permissions with the 'web' guard (default guard)
     Permission::create(['name' => 'manage users']);
     Permission::create(['name' => 'edit articles']);
     Permission::create(['name' => 'delete articles']);
     Permission::create(['name' => 'publish articles']);

     // Create roles and assign created permissions to the roles
     $adminRole = Role::create(['name' => 'admin']);
     $adminRole->givePermissionTo(['manage users', 'edit articles', 'delete articles', 'publish articles']);

     $editorRole = Role::create(['name' => 'editor']);
     $editorRole->givePermissionTo(['edit articles', 'publish articles']);

     // Create an admin user and assign the admin role
     $adminUser = User::create([
        'name' => 'Admin',
        'email' => 'admin@itm.com',
        'password' => bcrypt('admin211'),
     ]);
     $adminUser->assignRole($adminRole);

     // Create an editor user and assign the editor role
     $editorUser = User::create([
        'name' => 'Editor ',
        'email' => 'editor@example.com',
        'password' => bcrypt('editor211'),
     ]);
     $editorUser->assignRole($editorRole);

    }
}
