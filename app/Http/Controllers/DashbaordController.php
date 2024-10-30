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
        $menus = Menu::all();

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
