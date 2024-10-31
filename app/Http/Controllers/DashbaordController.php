<?php

namespace App\Http\Controllers;
use App\Models\User;
// use App\Models\auth;
use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Scholarship;
use App\Models\Alumni;
use App\Models\Menu;
use App\Models\MenuPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class DashbaordController extends Controller
{
       public function dashboard()
    {
        // $userRoleId = Auth::user()->role_id;

        // // Query the menus with role-based permissions
        // $menus = Menu::with(['children', 'permissions' => function ($query) use ($userRoleId) {
        //     $query->where('role_id', $userRoleId);
        // }])
        // ->whereNull('parent_id')  // Get only parent menus initially
        // ->orderBy('id')           // Order by the desired field
        // ->get();

        // $userRoleId = Auth::user()->role_id;

        // // Retrieve the menus, ordered by the 'order' column
        // $menus = Menu::with(['children' => function ($query) {
        //     $query->orderBy('order'); // Order submenus
        // }, 'permissions' => function ($query) use ($userRoleId) {
        //     $query->where('role_id', $userRoleId);
        // }])
        // ->whereNull('parent_id')  // Only parent menus
        // ->orderBy('order')        // Order by the new 'order' column
        // ->get();
// Assuming the authenticated user has a role assigned
$roleId = Auth::user()->role_id;

// Step 1: Retrieve menus with access based on role permissions
$menus = Menu::with(['children' => function($query) use ($roleId) {
                    $query->whereHas('permissions', function($q) use ($roleId) {
                        $q->where('role_id', $roleId);
                    });
                }])
            ->whereNull('parent_id') // Top-level menus
            ->whereHas('permissions', function($query) use ($roleId) {
                $query->where('role_id', $roleId);
            })
            ->orderBy('order')
            ->get();

        $studentCount = DB::table('users')->count();
        $facultyCount = DB::table('teachers')->count();
        $alumniCount = DB::table('alumnis')->count();
        $scholarshipCount = DB::table('scholarships')->count();



        // // Get the current user's role
        // $userRole = Auth::user()->role;

        // // Fetch menus based on the user's role
        // $menus = MenuPermission::where('role_id', $userRole->id)
        //     ->with('menu') // Assuming menu relationship is defined in MenuPermission model
        //     ->get();



       return view('dashboard',[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
        'menus' => $menus,
    ]);
    }


}
