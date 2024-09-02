<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MenuPermission;

class MenuPermissionController extends Controller
{
    public function assignPermission(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $menu = Menu::find($request->input('menu_id'));

        if ($user && $menu) {
            MenuPermission::create([
                'user_id' => $user->id,
                'menu_id' => $menu->id,
            ]);

            return response()->json(['message' => 'Permission assigned successfully.']);
        }

        return response()->json(['message' => 'User or menu not found.'], 404);
    }

    public function create_permission(){
        return view('menu-permission.assign-permission');
    }
    public function index(){
        $menus = Menu::all();
        $users =User::all();
        $menuPermission = MenuPermission::all();

        return view('menu-permission.index',compact('menuPermission','menus','users'));
    }


}
