<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Alumni;
use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $message = Message::all();
        $scholars = Scholarship::all();
        $studentCount = DB::table('users')->count();
        $facultyCount = DB::table('teachers')->count();
        $alumniCount = DB::table('alumnis')->count();
        $scholarshipCount = DB::table('scholarships')->count();


         return view('home',compact('scholars','message'),[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
    ]);


    }


    public function Local_tuition()
    {
       return view('admission.tuition');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function international_tuition()
    {
       return view('admission.international_tuiton');
    }
    public function admission_eligibility()
    {
       return view('admission.admission_eligibility');
    }

    public function about()
    {
         $staffs = Staff::get();
        //  $staffs = Staff::whereIn('position'['cordinate']);

        return view('frontend.about',compact('staffs'));
    }
    public function chart(){
        return view('statistic.chart');
    }

    public function static(){
        return view('statistic.static');
    }

    

}
