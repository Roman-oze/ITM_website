<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Staff;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function faculty()
    {


        // $teachers = Teacher::all();

        // // Task 1: Assign the Dean and Head of ITM Department to the first row
        // $firstRowTeachers = $teachers->filter(function ($teacher) {
        //     return $teacher->designation == 'Dean of ITM Department' || $teacher->designation == 'Head Of ITM Department';
        // });

        // // Task 2: The rest of the teachers for the second row
        // $secondRowTeachers = $teachers->diff($firstRowTeachers);



        $teachers = Teacher::whereNotIn('teacher_id', [1, 2])->get();

        $teachers_new = Teacher::whereIn('teacher_id', [1, 2])->get();



        $staffs = Staff::whereIn('position', ['Assistant Coordination Officer'])->get();

        return view('faculty.faculty',[
            'teachers' => $teachers,
            'teachers_new' => $teachers_new,
            // 'firstRowTeachers' => $firstRowTeachers,
            // 'secondRowTeachers' => $secondRowTeachers,


        ]);
    }





    public function index()
    {
        $menus = Menu::all();

        $teachers =Teacher::paginate(10);


        $teachers_new = Teacher::whereIn('teacher_id', [1, 2])->get();



        return view('faculty.index',[
            'menus' => $menus,
            'teachers' => $teachers,
            'teachers_new' => $teachers_new
            ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faculty.create');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'designation' => 'required',
            'fb' => 'required',
            'linked' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

            $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('faculty',$fileName);






            $data ['image'] =  'faculty/'.$fileName;
            $data['name']=$request->name;
            $data['designation']=$request->designation;
            $data['fb']=$request->fb;
            $data['linked']=$request->linked;
            $data['email']=$request->email;
            $data['phone']=$request->phone;


    DB::table('teachers')->insert($data);
    return redirect()->route('faculty.index')->with('success','Faculty Added Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $teacher = DB::table('teachers')->where('teacher_id',$id)->first();
       return view('faculty.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Initialize an empty data array
        $data = [];

        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            // Generate a unique file name with timestamp and extension
            $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();

            // Move the uploaded file to the 'faculty' directory
            $request->file('image')->move('faculty', $fileName);

            // Set the image path in the data array
            $data['image'] = 'faculty/' . $fileName;
        }

        // Collect the other input data
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['fb'] = $request->fb;
        $data['linked'] = $request->linked;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        // Update the record in the database
        DB::table('teachers')->where('teacher_id', $id)->update($data);

        // Redirect back with a success message
        return redirect()->route('faculty.index')->with('success', 'Faculty updated successfully');
    }







    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('teacher_id',$id)->delete();
        return redirect()->route('faculty.index')->with('success','Faculty delete Successfully');

    }











    public function search (Request $request){


        $data = $request->input('search');
        $teachers = DB::table('teachers')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('faculty.index',compact('teachers'));



    }













}
