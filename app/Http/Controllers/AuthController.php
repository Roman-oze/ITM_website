<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\auth;
use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Scholarship;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\table;

class AuthController extends Controller
{

    public function dashboard()
    {
        // $data = array();
        // if(Session::has('id')){
        //     $data = User::where('id','=',Session::get('id'))->first();
        // }
        $messages = Message::all();
        $studentCount = DB::table('users')->count();
        $facultyCount = DB::table('teachers')->count();
        $alumniCount = DB::table('alumnis')->count();
        $scholarshipCount = DB::table('scholarships')->count();

       return view('auth.dashboard',compact('messages'),[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
    ]);
    }


// public function register(){
//     return view('auth.registration');

// }

// public function login(){
//     return view('auth.login');

// }

//     public function password()
//     {
//         return view('auth.password');
//     }



public function login(){
    return view('auth.login');
}
public function loginUser(){

}

public function register(){
    return view('auth.registration');
}

}
