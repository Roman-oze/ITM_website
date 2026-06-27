<?php

namespace App\Http\Controllers;
use App\Models\Menu;
// use App\Models\auth;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Models\MenuPermission;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class DashboardController extends Controller
{



       public function dashboard()
    {
            // Get the current user's role




            // Fetch top-level menus with their children, applying permissions
            // Get the authenticated user's role
            if (Auth::check()) {
                $roleId = Auth::user()->role;

                // Fetch menus where the user has at least one permission
                $menus = Menu::with(['children' => function ($query) use ($roleId) {
                    $query->whereHas('permissions', function ($q) use ($roleId) {
                        $q->where('role_id', $roleId);
                    })->orderBy('order'); // Order the children
                }])
                ->whereNull('parent_id') // Only top-level menus
                ->whereHas('permissions', function ($query) use ($roleId) {
                    $query->where('role_id', $roleId);
                })
                ->orderBy('order') // Order the top-level menus
                ->get();
            }





        $facultyCount = Teacher::count();


       return view('dashboard',[
        'facultyCount' => $facultyCount,

        'menus' => $menus,
            // 'menu_permissions' => $menu_permission,

    ]);
    }


}
