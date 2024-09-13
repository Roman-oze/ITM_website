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

        $schedules = Schedule::with('course', 'teacher')->get();

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

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    //     //  $schedules = Schedule::with('Course', 'Teacher')->get();
    //     $schedules = Schedule::with('Course', 'Teacher')->get();



    //     return view('schedule.index',[
    //         'schedules' => $schedules
    //     ]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $users = User::all();
    //     $courses = Course::all();
    //     $teachers = Teacher::all();
    //     return view('schedule.create', [
    //         'courses' => $courses,
    //         'teachers' => $teachers,
    //         'users' => $users,
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'course_id' => 'required',
    //         'teacher_id' => 'required',
    //         // 'user_id' => 'required',
    //         'Day' => 'required',

    //         ]);
    //         // Schedule::create($request->all());
    //         // return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
    //         // $schedule = new Schedule();
    //         // $schedule->user_id = $request->input('user_id');
    //         // $schedule->course_id = $request->input('course_id');
    //         // $schedule->teacher_id = $request->input('teacher_id');
    //         // $schedule->day = $request->input('day');
    //         // $schedule->save();
    //         // return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
    //         // $schedule ['user_id'] =$request->user_id;
    //         $schedule ['course_id'] =$request->course_id;
    //         $schedule ['teacher_id'] =$request->teacher_id;
    //         $schedule ['Day'] =$request->Day;
    //         // return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
    //         // echo"<pre>";
    //         // print_r($schedule);
    //         Schedule::insert($schedule);
    //         return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');



    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     Schedule::where('schedule_id',$id)->delete();
    //     return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully');
    // }


}
