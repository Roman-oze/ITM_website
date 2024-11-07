<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    public function __construct()
    {
       $this->middleware('permission:view user', ['only' => ['index']]);
       $this->middleware('permission:create user', ['only' => ['create','store','addPermissionToRole','updatePermissionToRole']]);
       $this->middleware('permission:update user', ['only' => ['update','edit']]);
       $this->middleware('permission:delete user', ['only' => ['destroy']]);

    }

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



        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>Hash::make($request->password),
                'role' => $request->roles['0']
                ]);

        $user->roles()->sync($request->roles);

        return redirect()->back()->with('success', 'User created successfully');


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
    public function edit(USer $user)
    {

        $roles = Role::pluck('name','name')->all();
        $userRoles = $user->roles()->pluck('name','name')->all();
        return view('role-permission.user.edit',[
            'roles' => $roles,
            'userRoles' => $userRoles,
            'user' => $user
            ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'nullable|min:8|max:25',
            'roles' => 'required'
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];

            if($request->password){
                $data['password'] = bcrypt($request->password);
                }
                $user->update($data);
                $user->syncRoles($request->roles);
                return redirect()->route('users.index')->with('success','User updated successfully');


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
