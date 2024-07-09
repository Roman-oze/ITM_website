<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //    $routines = DB::table('routines')->get();
    //    return view('routine.index',compact('routines'));
    // }

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
    public function routine_store(Request $request)
    {

        $fileName = time().'-itm-routine'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->move('routine',$fileName);

        $data ['file'] = 'routine/'.$fileName;
        $data ['type'] = $request->type;
        $data ['date'] = $request->date;

        DB::table('routines')->insert($data);
        return redirect()->route('routine.create');

        // dd(DB::table('routines')->get());
        //
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
