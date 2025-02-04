<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Routine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function spring()
    {
       $springs= Routine::whereIn('type',['spring'])->get();
       return view('routine.spring',compact('springs'));

    }
    public function fall()
    {
        $falls = Routine::whereIn('type',['fall'])->get();
    //    $routines = DB::table('routines')->get();
       return view('routine.fall',compact('falls'));

    }



    public function index()
    {
        $springs= Routine::whereIn('type',['spring'])->get();
        $falls = Routine::whereIn('type',['fall'])->get();
        $files = DB::table('routines')->get();

        return view('routine.index',[
        'files' => $files,
        'springs' => $springs,
        'falls' => $falls
       ]);

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
    // public function store(Request $request)
    // {
    //     // Validate the file input
    //     $request->validate([
    //         'file' => 'required|max:2048',
    //         'type' => 'required|string',
    //         'date' => 'required|date',
    //     ]);

    //     // Generate a new file name
    //     $fileName = time() . '.' . $request->file('file')->getClientOriginalExtension();

    //     // Move the file to the 'routine' directory
    //     $request->file('file')->move(('routine'), $fileName);

    //     // Prepare data for insertion
    //     $data['file'] = 'routine/' . $fileName;
    //     $data['type'] = $request->type;
    //     $data['date'] = $request->date;

    //     // Insert data into the database
    //     DB::table('routines')->insert($data);

    //     // Redirect to the create routine route
    //     return redirect()->route('routine.index');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'file_path' => 'nullable|file|mimes:pdf|max:2048', // Allow PDF files up to 2MB
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow images up to 2MB
            'title' => 'nullable',
            'type' => 'required|string|max:255'

            ,

        ]);

        if($request->hasFile('image')){
            $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('routine'), $fileName);

            $data['image'] = 'routine/'.$fileName;
        }


        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            $data['file_path'] = 'storage/' . $filePath;
        }
            $data['title'] = $request->title;
            $data['type'] = $request->type;
            $data['uploaded_at'] = now();

            Routine::create($data);

            return redirect()->route('routine.index')->with('success', 'File uploaded successfully.');
        }

    // Handle file download
    public function download($id)
    {
        $file = Routine::findOrFail($id);
        return Storage::download('public/uploads/' . basename($file->file_path));
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $springs =DB::table('routines')->where('id',$id)->first();
       return view('routine.show',compact('springs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $routine = Routine::where('id',$id)->first();
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



        Routine::where('id',$id)->update($data);

        return redirect()->route('routine.index')->with('success','routine update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     Routine::where('id',$id)->delete();
       return redirect()->route('routine.index')->with('success','routine delete Successfully');


    }



    // Mail::send('emails.routineCreate',$routine->toArray(),
    // function($message){
    //     $message->to('rumuislam202@gmail.com','routine')->subject('New Routine Created');
    // });






}
