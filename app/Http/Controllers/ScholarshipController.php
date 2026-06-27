<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\Batch;
use App\Models\Student;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function scholar()
    {
        $scholars  = Scholarship::all();
        return view('scholarship.scholar',compact('scholars'));
    }

    public function index()
    {
        $menus = Menu::all();
      $scholarship = Scholarship::paginate(8);
       return view('scholarship.index',compact('scholarship','menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::all();
        $Students = Student::all();
        return view('scholarship.create',[
            'batches' => $batches,
            'students' => $Students,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName =time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('scholarship',$fileName);


       $data['image'] = 'scholarship/'.$fileName;
       $data['name'] = $request->name;
       $data['country'] = $request->country;
       $data['roll'] = $request->roll;
       $data['batch'] = $request->batch;
       $data['duration'] = $request->duration;
       $data['email'] = $request->email;

       Scholarship::insert($data);
       return redirect()->route('scholarship.index')->with('success',' Added Successfully !');
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
       $scholars = Scholarship::where('id',$id)->first();
       return view('scholarship.edit',compact('scholars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Initialize the data array with other fields
        $data = [
            'name' => $request->name,
            'country' => $request->country,
            'roll' => $request->roll,
            'batch' => $request->batch,
            'duration' => $request->duration,
            'email' => $request->email,
        ];

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Generate a new file name and move the uploaded file
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('scholarship', $fileName);

            // Update the image path in the data array
            $data['image'] = 'scholarship/' . $fileName;
        }

        // Update the scholarship data in the database
        Scholarship::where('id', $id)->update($data);

        // Redirect with a success message
        return redirect()->route('scholarship.index')->with('success', 'Update Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Scholarship::where('id',$id)->delete();
        return redirect()->route('scholarship.index')->with('success',' Deleted Successfully !');
    }
}
