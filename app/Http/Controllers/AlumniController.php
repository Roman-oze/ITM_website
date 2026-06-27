<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use App\Models\Batch;
use App\Models\Alumni;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alumni(){
         $alumns = Alumni::all();
        return view('alumni.alumni',compact('alumns'));
    }
    public function index(){
        $menus = Menu::all();
        $alumns = Alumni::paginate(8); // Adjust '10' to the number of records per page you want

        return view('alumni.index',compact('alumns','menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::all();
        $Students = Student::all();
        return view('alumni.create',[
            'batches' => $batches,
            'students' => $Students,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('alumni',$fileName);

        $data ['image'] = 'alumni/'.$fileName;
        $data ['name'] = $request->name;
        $data ['roll'] = $request->roll;
        $data ['batch'] = $request->batch;
        $data ['pass_year'] = $request->pass_year;
        $data ['organization'] = $request->organization;
        $data ['designation'] = $request->designation;
        $data ['phone'] = $request->phone;
        $data ['email'] = $request->email;
        $data ['address'] = $request->address;



        // Alumni::insert($data);
        DB::table('alumnis')->insert($data);
        return redirect()->route('alumni.index')->with('success',' Added Graduated Successfully !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batch::all();
        $students = Student::all();
        $alumni = Alumni::where('id', $id)->first();
        return view('alumni.edit',[
            'alumni' => $alumni,
            'batches' => $batches,
            'students' => $students,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data = [
        'name' => $request->name,
        'roll' => $request->roll,
        'batch' => $request->batch,
        'pass_year' => $request->pass_year,
        'organization' => $request->organization,
        'designation' => $request->designation,
        'phone' => $request->phone,
        'email' => $request->email,
        'address' => $request->address,
    ];

    // Check if the image file is present in the request
    if ($request->hasFile('image')) {
        $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('alumni', $fileName);
        $data['image'] = 'alumni/' . $fileName;
    }

    Alumni::where('id', $id)->update($data);
    return redirect()->route('alumni.index')->with('success',' Update Successfully !');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Alumni::where('id',$id)->delete();
       return redirect()->route('alumni.index')->with('success',' Delete Successfully !');
    }
}
