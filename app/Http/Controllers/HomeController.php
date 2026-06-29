<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Herosection;
use App\Models\Message;
use App\Models\Scholarship;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {

        // team
        $boardOfDirectors = TeamMember::whereIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $technicalTeam = TeamMember::whereNotIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $teammembers = TeamMember::all();

        $hero = Herosection::first();
        $features = Feature::all();
        $services = Service::all();
        $contact = Footer::first();
        $footers = Footer::all();
        // $teamMembersCount = DB::table('team_members')->count();
        $serviceCategory = ServiceCategory::count();



        return view('home', compact('hero', 'contact', 'footers', 'boardOfDirectors', 'technicalTeam', 'serviceCategory', 'teammembers'), [
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

    public function gallery()
    {

        $gallery = Gallery::where('type', 'Departmental')->get();

        return view('website_setup.Gallery.create', compact('gallery'));
    }

    public function about()
    {
        //  $officers = Staff::whereIn('position',['Dean and Professor of CSE','Associate Dean','Head of the Department'])->get();
        $staffs = Staff::all();
        //  $officers = $officers->merge($staffs);
        $footers = Footer::first();
        $gallery = Gallery::where('type', 'Departmental')->get();
        $photo = Gallery::where('type', 'Departmental')->first();

        return view('frontend.about', [
            'staffs' => $staffs,
            'footers' => $footers,
            'gallery' => $gallery,
            'photo' => $photo,
        ]);
    }
    public function chart()
    {
        return view('statistic.chart');
    }

    public function static()
    {
        return view('statistic.static');
    }
}
