<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Batch;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
        public function membership(){

            $batches = Batch::all();

        $students = Student::with('Batch')->get();

        return view('club.membership',compact('students','batches'));

   }
//         public function staff(){

//         $staffs = DB::table('staffs')->get();

//         return view('frontend.about',compact('staffs'));

//    }
public function upcoming(){
    $upcoming = Event::all();
    return view('club.upcoming',compact('upcoming'));
}


}
