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
        $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
            'room_no' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        Schedule::create($request->all());
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully!');
    }


    public function edit(string $schedule_id)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
         $schedule = Schedule::where('schedule_id', $schedule_id)->firstOrFail();

    // Pass the schedule data to the edit view
    return view('schedule.edit',[
        'schedule' => $schedule,
        'courses' => $courses,
        'teachers' => $teachers
    ]);
    }


    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
            'room_no' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $schedule->update($request->all());
        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully!');
    }


    public function destroy($schedule_id)
    {
        $schedule = Schedule::findOrFail($schedule_id); // Find the schedule by ID or fail if not found
        $schedule->delete(); // Delete the schedule

        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }

    }



