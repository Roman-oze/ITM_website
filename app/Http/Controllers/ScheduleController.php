<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller

{

    public function index()
    {

        $schedules = Schedule::with('course', 'teacher')->paginate(10);

        return view('schedule.index', compact('schedules'));

    //    echo"<pre>";
    //    print_r($schedules);
    }

    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('schedule.create', compact('courses', 'teachers'));
    }

    public function store(Request $request)
    {

        $schedule = new Schedule();
        $schedule->room_no = $request->input('room_no');
        $schedule->day = $request->input('day');
        $schedule->start_time =$request->input('start_time');
        $schedule->end_time =$request->input('end_time');
        $schedule->course_id =$request->input('course_id');
        $schedule->teacher_id =$request->input('teacher_id');
        $schedule->save();
        // echo"<pre>";
        // print_r($data);
        Schedule::create($request->all());
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
    }

    public function edit(string $schedule_id)
    {
        // $courses = Course::whereIn('course_code','course_name')->get();
        // $teachers = Teacher::whereIn('name')->get();
         $schedule = Schedule::where('schedule_id', $schedule_id)->firstOrFail();

    // Pass the schedule data to the edit view
    return view('schedule.edit', compact('schedule'));
    }

    public function show (string $schedule_id){

        // $schedules = Schedule::with('course', 'teacher')->get();

        $schedule = Schedule::where('schedule_id', $schedule_id)->firstOrFail();

        return view('schedule.show',compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'room_no' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'course_id' => 'required|exists:courses,id',
            'faculty_id' => 'required|exists:faculties,id',
        ]);

        $schedule->update($request->all());
        return redirect()->route('schedule.index')->with('success', 'Schedule updated successfully.');
    }


    public function destroy($schedule_id)
    {
        $schedule = Schedule::findOrFail($schedule_id); // Find the schedule by ID or fail if not found
        $schedule->delete(); // Delete the schedule

        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }



    public function  search(Request $request){

        $search = $request->input('search');


        // $schedules = Schedule::with('course','teacher')->where('day', 'like', '%' . $search .'%')
        // ->orWhere('name','like','%'.$search.'%')->orWhere('course_code','like','%'.$search.'%')
        // ->orWhere('course_name','like','%'.$search.'%')->orWhere('day','like','%'.$search.'%')
        // ->orWhere('start_time','like','%'.$search.'%')->orWhere('room_no','like','%'.$search.'%')->get();

        $schedules = Schedule::where('course_code', 'like'.$search.'%')
            ->orWhere('course_name', 'like','%' .$search.'%')
            ->orWhere('name', 'like','%'.$search.'%')
            ->orWhere('day', 'like','%' .$search.'%')
            ->orWhere('start_time','like' ,'%'.$search.'%')
            ->paginate(10);

            dd(

                $schedules
            );

        // return view('schedule.index',[ 'schedules' => $schedules,]);
        // echo"<pre>";
        // print_r($schedules);


    }


}
