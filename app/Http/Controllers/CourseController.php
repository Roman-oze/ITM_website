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

        $courseData = [
            1 => $courses->whereIn('course_code', [ 'ENG 101','MATH 101','ITM 101','ITM 102','ITM 111','ITM 112','ITM 123']),
            2 => $courses->whereIn('course_code', [ 'ITM 211','ENG102','STA101','ITM 103','ITM 121','ITM 122','ITM 203']),
            3 => $courses->whereIn('course_code',[ 'ITM 201','ITM 202','AOL 101','ITM 217','ITM 218','ITM 213','ITM 214']),
            4 => $courses->whereIn('course_code', [ 'ITM 204','GE 215','ITM 206','ITM 221','ITM 222','ITM 223','ITM 224','GE 314']),
            5 => $courses->whereIn('course_code', [ 'GE 337','ITM 301','ITM 306','ITM 313','ITM 314','ITM 315','ITM 316','MATH 312']),
            6 => $courses->whereIn('course_code', ['ITM 302','ITM 303','ITM 328','ITM 329','ITM 322','ITM 323','ITM 324','ITM 309']),
            7 => $courses->whereIn('course_code', ['ITM 451','ITM 421','40X/41X','40X/41X','FIN 101','FIN 102']),
            8 => $courses->whereIn('course_code', ['ITM 401','ITM 452','ITM 321']),
            // Add more semesters and course groupings as needed...
        ];
        return view('frontend.program',[
            'courses' => $courses,
            'courseData' => $courseData,


        ]);

    }

    public function course_list()
    {
        $data = Course::whereIn('course_code',[
            'ENG 101','MATH 101','ITM 101','ITM 102','ITM 111','ITM 112','ITM 123'

        ])->paginate(10);

        $courses = Course::all();

        // Group courses by semesters (for demonstration)
        $courseData = [
            1 => $courses->whereIn('course_code', [ 'ENG 101','MATH 101','ITM 101','ITM 102','ITM 111','ITM 112','ITM 123']),
            2 => $courses->whereIn('course_code', [ 'ITM 211','ENG102','STA101','ITM 103','ITM 121','ITM 122','ITM 203']),
            3 => $courses->whereIn('course_code',[ 'ITM 201','ITM 202','AOL 101','ITM 217','ITM 218','ITM 213','ITM 214']),
            4 => $courses->whereIn('course_code', [ 'ITM 204','GE 215','ITM 206','ITM 221','ITM 222','ITM 223','ITM 224','GE 314']),
            5 => $courses->whereIn('course_code', [ 'GE 337','ITM 301','ITM 306','ITM 313','ITM 314','ITM 315','ITM 316','MATH 312']),
            6 => $courses->whereIn('course_code', ['ITM 302','ITM 303','ITM 328','ITM 329','ITM 322','ITM 323','ITM 324','ITM 309']),
            7 => $courses->whereIn('course_code', ['ITM 451','ITM 421','40X/41X','40X/41X','FIN 101','FIN 102']),
            8 => $courses->whereIn('course_code', ['ITM 401','ITM 452','ITM 321']),
            // Add more semesters and course groupings as needed...
        ];



        // $data = Course::all();
        return view('Course.course_list',compact('data','courseData'));

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
       return redirect()->back()->with('success', 'Course Deleted successfully!');

    }

    public function search(Request $request){

        $search = $request->input('search');
        $courses = Course::where('course_id','like','%'.   $search .'%')->orWhere('course_code','like','%'.   $search .'%')->orWhere('course_name','like','%'.    $search .'%')->get();

        return view('Course.index', compact('courses'));
    }

}
