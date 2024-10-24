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
        // $this->middleware('permission:delete role');


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
        return redirect('roles')->with('status','Roles created successfully');


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

            return redirect('roles')->with('status','role updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roleId)
    {
    $role = Role::find($roleId);
    $role->delete();
            return redirect('roles')->with('status','Roles delete successfully');

    }

    public function addPermissionToRole($roleId){
        $role = Role::find($roleId);
        $permissions = Permission::get();
        $rolePermission = DB::table('role_has_permissions')
        ->where('role_id',$roleId)
        ->pluck('permission_id');



        return view('role-permission.role.add-permission',[
            'role' => $role,
            'permissions' => $permissions,
            'rolePermission' => $rolePermission,
            ]);

    }


    public function updatePermissionToRole(Request $request, $roleId){

        $request->validate([
            'permissions' => 'required',
        ]);
        $role = Role::find($roleId);
        $role->syncPermissions($request->permissions);
        return redirect('roles')->with('status','Role permission updated successfully');


    }
}
