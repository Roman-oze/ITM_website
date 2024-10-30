<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\MenuPermission;
use App\Models\User;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class MenuPermissionController extends Controller
{

    public function create()
{
    $menus = Menu::all();
    $roles = Role::all();
    return view('setup-menu.menu-permission.assign-permission', compact('menus', 'roles'));
}

public function index()
{

    $permissions = MenuPermission::with('menu', 'role')->get();
    return view('setup-menu.index', compact('permissions'));
}



public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'menu_ids' => 'required|array',      // Ensure multiple menus are allowed
            'role_ids' => 'required|array',      // Ensure multiple roles are allowed
            'permissions.can_create' => 'nullable|boolean',
            'permissions.can_edit' => 'nullable|boolean',
            'permissions.can_update' => 'nullable|boolean',
            'permissions.can_delete' => 'nullable|boolean',
        ]);

        // Loop through selected roles and menus to save permissions for each
        foreach ($request->menu_ids as $menuId) {
            foreach ($request->role_ids as $roleId) {
                MenuPermission::create([
                    'menu_id' => $menuId,
                    'role_id' => $roleId,
                    'can_create' => $request->input('permissions.can_create', 0),
                    'can_edit' => $request->input('permissions.can_edit', 0),
                    'can_update' => $request->input('permissions.can_update', 0),
                    'can_delete' => $request->input('permissions.can_delete', 0),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Menu permissions saved successfully!');
    }






















}
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $roles = Role::all();
    //     $menus = Menu::all();
    //     $permissions = MenuPermission::all();
    //     return view('menu-permission.index', compact('roles', 'menus','permissions'));
    // }

    // public function updateMenuPermissions(Request $request)
    // {
    //     $data = $request->input('permissions');

    //     foreach ($data as $roleId => $permissions) {
    //         $role = Role::findById($roleId);

    //         foreach ($permissions as $menuId => $actions) {
    //             $menu = Menu::find($menuId);

    //             foreach (['view', 'create', 'edit', 'delete'] as $action) {
    //                 if (isset($actions[$action])) {
    //                     $role->givePermissionTo("{$action} {$menu->name}");
    //                 } else {
    //                     $role->revokePermissionTo("{$action} {$menu->name}");
    //                 }
    //             }
    //         }
    //     }

    //     return redirect()->back()->with('success', 'Permissions updated successfully');
    // }

    // Method to show the form for menu permissions
//     public function index()
//     {
//         $roles = Role::all(); // Get all roles
//         $menus = Menu::all(); // Get all menus
//         return view('menu-permission.index      ', compact('roles', 'menus')); // Return the view with roles and menus
//     }

//     // Method to update menu permissions
//     public function update(Request $request)
//     {
//         $data = $request->input('permissions'); // Get permissions from the form

//         foreach ($data as $roleId => $permissions) {
//             $role = Role::findById($roleId); // Find the role by ID

//             foreach ($permissions as $menuId => $actions) {
//                 $menu = Menu::find($menuId); // Find the menu by ID

//                 foreach (['view', 'create', 'edit', 'delete'] as $action) {
//                     if (isset($actions[$action])) {
//                         $role->givePermissionTo("{$action} {$menu->name}"); // Assign permission if checked
//                     } else {
//                         $role->revokePermissionTo("{$action} {$menu->name}"); // Revoke permission if unchecked
//                     }
//                 }
//             }
//         }

//         return redirect()->back()->with('success', 'Permissions updated successfully'); // Redirect back with success message
//     }
// }
