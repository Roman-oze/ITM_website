<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
        public function membership(){

        $students = DB::table('students')->get();

        return view('club.membership',compact('students'));

   }
//         public function staff(){

//         $staffs = DB::table('staffs')->get();

//         return view('frontend.about',compact('staffs'));

//    }


}
