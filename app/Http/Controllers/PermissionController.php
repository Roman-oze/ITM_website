<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{

    public function __construct()
    {
       $this->middleware('permission:view permission', ['only' => ['index']]);
       $this->middleware('permission:create permission', ['only' => ['create','store','addPermissionToRole','updatePermissionToRole']]);
       $this->middleware('permission:update permission', ['only' => ['update','edit']]);
       $this->middleware('permission:delete permission', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
       return view('role-permission.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.permission.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','unique:permissions,name'],
        ]);

        Permission::create([
            'name' => $request->name,
        ]);
        return redirect('permissions')->with('success','Permission created successfully');


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
        $permission = Permission::find($id);
        return view('role-permission.permission.edit',[
            'permission' => $permission,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => ['required','string','unique:permissions,name'],
        ]);

        $permission->update([
            'name' => $request->name,
            ]);

            return redirect('permissions')->with('success','Permission updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $permission = Permission::find($id);
    $permission->delete();
            return redirect('permissions')->with('success','Permission delete successfully');

    }
}
