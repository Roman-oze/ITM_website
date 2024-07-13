<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function routine()
    {
    //    $routines = DB::table('routines')->get();
    //    return view('routine.index',compact('routines'));
    return "this is routine page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $routines = DB::table('routines')->get();
        return view('routine.create',compact('routines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'type' => 'required|string',
            'date' => 'required|date',
        ]);

        // Generate a new file name
        $fileName = time() . '.' . $request->file('file')->getClientOriginalExtension();

        // Move the file to the 'routine' directory
        $request->file('file')->move(public_path('routine'), $fileName);

        // Prepare data for insertion
        $data['file'] = 'routine/' . $fileName;
        $data['type'] = $request->type;
        $data['date'] = $request->date;

        // Insert data into the database
        DB::table('routines')->insert($data);

        // Redirect to the create routine route
        return redirect()->route('routine.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $routine =DB::table('routines')->where('id',$id)->first();
       return view('routine.show',compact('routine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $routine = DB::table('routines')->where('id',$id)->first();
        return view('routine.edit',compact('routine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->move('routine',$fileName);

        $data ['file'] = 'routine/'.$fileName;
        $data ['type'] = $request->type;
        $data ['date'] = $request->date;



        DB::table('events')->where('id',$id)->update($data);

        return redirect()->route('routine.create')->with('success','routine update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       DB::table('routines')->where('id',$id)->delete();
       return redirect()->route('routine.create')->with('success','routine delete Successfully');


    }



    // Mail::send('emails.routineCreate',$routine->toArray(),
    // function($message){
    //     $message->to('rumuislam202@gmail.com','routine')->subject('New Routine Created');
    // });


    public function download(Request $request, $file)
    {
        $path = storage_path('routine/'.$file);
        return response()->download($path);
    }





}
