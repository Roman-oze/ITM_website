<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $schedules = $schedules = Schedule::with('Course', 'Teacher')->get();
        return view('schedule.index',[
            'schedules' => $schedules,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('schedule.create', [
            'courses' => $courses,
            'teachers' => $teachers,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
            // 'user_id' => 'required',
            'Day' => 'required',

            ]);
            // Schedule::create($request->all());
            // return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
            // $schedule = new Schedule();
            // $schedule->user_id = $request->input('user_id');
            // $schedule->course_id = $request->input('course_id');
            // $schedule->teacher_id = $request->input('teacher_id');
            // $schedule->day = $request->input('day');
            // $schedule->save();
            // return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
            // $schedule ['user_id'] =$request->user_id;
            $schedule ['course_id'] =$request->course_id;
            $schedule ['teacher_id'] =$request->teacher_id;
            $schedule ['Day'] =$request->Day;
            return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');



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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
