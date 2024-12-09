<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Batch;
use App\Models\Committee;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

        public function club(){

            $committees = Committee::whereIn('id', [ 2, 3, 4])->get();
            return view('club.club',compact('committees'));
    }

        public function membership(){

            $batches = Batch::all();

            $students = Student::with('Batch')->get();

            return view('club.member.membership',compact('students','batches'));

   }


   public function upcoming(){
       $upcoming = Event::all();
       return view('club.event.upcoming',compact('upcoming'));
    }

    public function index(){

        $batches = Batch::all();

        $students = Student::with('Batch')->get();

        return view('club.member.index',compact('students','batches'));
    }




}
