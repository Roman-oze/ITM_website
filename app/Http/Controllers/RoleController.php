<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
        $this->middleware('permission:view role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create','store','addPermissionToRole','updatePermissionToRole']]);
        $this->middleware('permission:update role', ['only' => ['update','edit']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);

     }

    public function index()
    {
        $roles = Role::all();
       return view('role-permission.role.index',[
        'roles' => $roles
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.role.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','unique:roles,name'],
        ]);

        Role::create([
            'name' => $request->name,
        ]);
        return redirect('roles')->with('success','Roles created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        return view('role-permission.role.edit',[
            'role' => $role,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['required','string','unique:roles,name'],
        ]);

        $role->update([
            'name' => $request->name,
            ]);

            return redirect('roles')->with('success','role updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roleId)
    {
    $role = Role::find($roleId);
    $role->delete();
            return redirect('roles')->with('success','Roles delete successfully');

    }

    // public function addPermissionToRole($roleId){
    //     $role = Role::find($roleId);
    //     $permissions = Permission::get();
    //     $rolePermission = DB::table('role_has_permissions')
    //     ->where('role_has_permissions'.'role_id',$roleId)
    //     ->pluck('role_has_permission'.'permission_id	','role_has_permission'.'permission_id	')
    //     ->all();



    //     return view('role-permission.role.add-permission',[
    //         'role' => $role,
    //         'permissions' => $permissions,
    //         'rolePermission' => $rolePermission,
    //         ]);

    // }

    public function addPermissionToRole($roleId)
{
    // Find the role by ID
    $role = Role::find($roleId);

    // Check if the role exists
    if (!$role) {
        return redirect()->back()->with('error', 'Role not found.');
    }

    // Get all permissions
    $permissions = Permission::all();

    // Get permissions associated with the role
    $rolePermissions = DB::table('role_has_permissions')
        ->where('role_id', $roleId) // Correctly reference the role_id column
        ->pluck('permission_id') // Correctly pluck the permission_id column
        ->all();

    // Return the view with the role, all permissions, and the permissions assigned to the role
    return view('role-permission.role.add-permission', [
        'role' => $role,
        'permissions' => $permissions,
        'rolePermissions' => $rolePermissions, // Renamed to rolePermissions for clarity
    ]);
}



    public function updatePermissionToRole(Request $request, $roleId){

        $request->validate([
            'permissions' => 'required',
        ]);
        $role = Role::find($roleId);
        $role->syncPermissions($request->permissions);
        return redirect('roles')->with('success','Role permission updated successfully');


    }
}
