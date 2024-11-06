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



class DashbaordController extends Controller
{


       public function dashboard()
    {
            // Get the current user's role




            // Fetch top-level menus with their children, applying permissions
            // Get the authenticated user's role
            $roleId = Auth::user()->Role;





            // Fetch menus where the user has at least one permission
            $menus = Menu::with(['children' => function ($query) use ($roleId) {
                $query->whereHas('permissions', function ($q) use ($roleId) {
                    $q->where('role_id', $roleId)
                    ->where(function ($q) {
                        $q->where('can_create', true)
                            ->orWhere('can_edit', true)
                            ->orWhere('can_update', true)
                            ->orWhere('can_delete', true);
                    });
                });
            }])
            ->whereNull('parent_id') // Only top-level menus
            ->whereHas('permissions', function ($query) use ($roleId) {
                $query->where('role_id', $roleId)
                    ->where(function ($q) {
                        $q->where('can_create', true)
                            ->orWhere('can_edit', true)
                            ->orWhere('can_update', true)
                            ->orWhere('can_delete', true);
                    });
            })
            ->orderBy('order')
            ->get();

            // {{-- fixed --}}
        // // Assuming the authenticated user has a role assigned
        // $roleId = Auth::user()->role_id;

        // // Step 1: Retrieve menus with access based on role permissions
        // $menus = Menu::with(['children' => function($query) use ($roleId) {
        //                     $query->whereHas('permissions', function($q) use ($roleId) {
        //                         $q->where('role_id', $roleId);
        //                     });
        //                 }])
        //             ->whereNull('parent_id') // Top-level menus
        //             ->whereHas('permissions', function($query) use ($roleId) {
        //                 $query->where('role_id', $roleId);
        //             })
        //             ->orderBy('order')
        //             ->get();
        // {{-- fixed --}}


        $studentCount = Student::count();
        $facultyCount = Teacher::count();
        $alumniCount = Alumni::count();
        $scholarshipCount = Scholarship::count();

       return view('dashboard',[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
        'menus' => $menus,

    ]);
    }


}
