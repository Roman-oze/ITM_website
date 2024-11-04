<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Semester;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function program(){


        $courses = Course::all();

        $courseData = Course::orderBy('semester_id')
        ->orderBy('course_code')
        ->get()
        ->groupBy('semester_id'); // Group by semester_id
        return view('frontend.program',[
            'courses' => $courses,
            'courseData' => $courseData,


        ]);

    }


    public function index()
    {
        $coursePage = Course::paginate(10);

        $courses = Course::orderBy('semester_id')
        ->orderBy('course_code')
        ->get()
        ->groupBy('semester_id'); // Group by semester_id

        return view('course.index', [
            'coursePage' => $coursePage,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $semesters = Semester::all();
        return view('course.create',compact('semesters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
            'credit' => 'required',
            'semester_id' => 'required',

        ]);

            // Course::create($request->all());
            // return redirect()->route('course.index')->with('success', 'Course created successfully');
            $course = new Course();
            $course->course_name = $request->input('course_name');
            $course->course_code = $request->input('course_code');
            $course->credit = $request->input('credit');
            $course->semester_id = $request->input('semester_id');
            $course->save();

            return redirect()->back()->with('success', 'Course created successfully!');





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
          $semesters = Semester::all();
          $course = Course::where('course_id',$id)->first();
          return view('course.edit', compact('course','semesters'));
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
    return redirect()->back()->with('success', 'Course updated successfully');
}




    public function destroy(string $id)
    {
        Course::where('course_id',$id)->delete();
       return redirect()->back()->with('success', 'Course Deleted successfully!');

    }

    public function search(Request $request){

        $search = $request->input('search');
        $courses = Course::where('course_id','like','%'.   $search .'%')->orWhere('course_code','like','%'.   $search .'%')->orWhere('course_name','like','%'.    $search .'%')->get();

        return view('Course.index', compact('courses'));
    }

}
