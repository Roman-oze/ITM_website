<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $users = User::all();
        return view('role-permission.user.index',[
            'users' => $users,
            'menus' => $menus

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
         return view('role-permission.user.create',[
            'roles' => $roles
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:25|',
            'roles' => 'required'
        ]);


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user->roles()->sync($request->input('roles'));
        return redirect()->route('users')->with('success', 'User created successfully');


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

        $user = User::find($id);
        $roles = Role::all();
        return view('role-permission.user.edit',[
            'user' => $user,
            'roles' => $roles
            ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8|max:25',
            'roles' => 'required'
            ]);

            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();
            $user->roles()->sync($request->input('roles'));
            return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $userId)
    {

     $users = User::find($userId);
     $users->delete();
     return redirect()->route('users.index')->with('success', 'User deleted successfully');

    }

    public function search(Request $request){
        $search = $request->input('search');
        $users = User::where('name', 'LIKE', '%' . $search . '%')->orWhere('email','LIKE','%'.$search.'%')->pagination(10);

        return view('role-permission.user.index', compact('users'));
    }
}
