<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Alumni;
use App\Models\Footer;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Herosection;
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

        $hero = Herosection::first();
        $features = Feature::all();
        $services = Service::all();
        $footers= Footer::all();
        $scholars = Scholarship::all();
        $studentCount = DB::table('users')->count();
        $facultyCount = DB::table('teachers')->count();
        $alumniCount = DB::table('alumnis')->count();
        $scholarshipCount = DB::table('scholarships')->count();


         return view('home',compact('hero','scholars','footers'),[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
        'features' => $features,
        'services' => $services,
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

    public function gallery(){

        $gallery = Gallery::where('type','Departmental')->get();

        return view('website_setup.Gallery.create',compact('gallery'));
    }

    public function about()
    {
         $officers = Staff::whereIn('position',['Dean and Professor of CSE','Associate Dean','Head of the Department'])->get();
         $staffs = Staff::whereIn('position',['Assistant Coordination Officer'])->get();
        //  $officers = $officers->merge($staffs);
        $footers = Footer::first();
        $gallery = Gallery::where('type','Departmental')->get();
        $photo = Gallery::where('type', 'Departmental')->first();

        return view('frontend.about',[
            'officers' => $officers,
            'staffs' => $staffs,
            'footers' => $footers,
            'gallery' => $gallery,
            'photo' => $photo,
        ]);
    }
    public function chart(){
        return view('statistic.chart');
    }

    public function static(){
        return view('statistic.static');
    }



}
