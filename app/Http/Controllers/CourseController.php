<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function program(){


        $courses = Course::all();
        return view('frontend.program',[
            'courses' => $courses
        ]);

    }

    public function course_list()
    {
        $data = Course::whereIn('course_code',[
            'ENG 101','MATH 101','ITM 101','ITM 102','ITM 111','ITM 112','ITM 123'

        ])->paginate(10);
        // $data = Course::all();
        return view('Course.course_list',compact('data'));

    }


    public function showCourseList()
    {
        return view('Course.Course_list'); // Ensure the view is saved as Course/Course_list.blade.php
    }

    // Method to fetch courses by semester via AJAX
    public function getCoursesBySemester ($semester)
    {
        // Fetch courses based on the semester
        $courses = Course::whereIn('course_code',[
            'ENG 101','MATH 101','ITM 101','ITM 102','ITM 111','ITM 112','ITM 123'

        ])->get();

        return response()->json($courses);
    }













    public function index()
    {
        $courses = Course::paginate(10);;
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
            'credit' => 'required',]);

            // Course::create($request->all());
            // return redirect()->route('course.index')->with('success', 'Course created successfully');
            $course = new Course();
            $course->course_name = $request->input('course_name');
            $course->course_code = $request->input('course_code');
            $course->credit = $request->input('credit');
            $course->save();
            return redirect()->route('Courses.index')->with('success', 'Course created successfully');


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
          $course = Course::where('course_id',$id)->first();
          return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */

        public function update(Request $request, string $id)
{
    // Validate the request data
    $request->validate([
        'course_name' => 'required',
        'course_code' => 'required',
        'credit' => 'required',
    ]);

    $course['course_name'] =$request->course_name;
    $course['course_code'] =$request->course_code;
    $course['credit'] =$request->credit;

    Course::where('course_id',$id)->update($course);

    // Redirect back to the courses list with a success message
    return redirect()->route('Courses.index')->with('success', 'Course updated successfully');
}




    public function destroy(string $id)
    {
        Course::where('course_id',$id)->delete();
       return redirect()->route('Courses.index')->with('success', 'Course deleted successfully');
    }

    public function search(Request $request){

        $search = $request->input('search');
        $courses = Course::where('course_id','like','%'.   $search .'%')->orWhere('course_code','like','%'.   $search .'%')->orWhere('course_name','like','%'.    $search .'%')->get();

        return view('Course.index', compact('courses'));
    }

}
