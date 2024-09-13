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

    public function edit(Schedule $schedule)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('schedule.edit', compact('schedule', 'courses', 'teachers'));
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

    public function destroy(string $schedule_id)
    {
       Schedule::where('schedule_id',$schedule_id)->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }

    public function  search(Request $request){

        $search = $request->input('search');

        // $schedules = Schedule::with('course','teacher')->where('day', 'like', '%' . $search .'%')
        // ->orWhere('name','like','%'.$search.'%')->orWhere('course_code','like','%'.$search.'%')
        // ->orWhere('course_name','like','%'.$search.'%')->orWhere('day','like','%'.$search.'%')
        // ->orWhere('start_time','like','%'.$search.'%')->orWhere('room_no','like','%'.$search.'%')->get();

        $schedules = Schedule::where('course_code', 'LIKE', "%{$search}%")
            ->orWhere('course_name', 'LIKE' .$search.'%')
            ->orWhere('name', 'LIKE','LIKE'.$search.'%')
            ->orWhere('day', 'LIKE', 'LIKE' .$search.'%')
            ->orWhere('start_time', 'LIKE' .$search.'%')
            ->paginate(10);

        return view('schedule.index',[
            'schedules' => $schedules,
        ]);
        // echo"<pre>";
        // print_r($schedules);


    }

}
