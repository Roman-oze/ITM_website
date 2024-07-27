<?php

namespace App\Http\Controllers;
use App\Models\Scholarship;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $scholars = Scholarship::all();
       return view('scholarship.index',compact('scholars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scholarship.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName =time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('scholarship',$fileName);


       $data['image'] = 'scholarship/'.$fileName;
       $data['name'] = $request->name;
       $data['country'] = $request->country;
       $data['roll'] = $request->roll;
       $data['batch'] = $request->batch;
       $data['duration'] = $request->duration;
       $data['email'] = $request->email;

       Scholarship::insert($data);
       return redirect('/dashboard/scholarship');
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
       $scholars = Scholarship::where('id',$id)->first();
       return view('scholarship.edit',compact('scholars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName =time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('scholarship',$fileName);


       $data['image'] = 'scholarship/'.$fileName;
       $data['name'] = $request->name;
       $data['country'] = $request->country;
       $data['roll'] = $request->roll;
       $data['batch'] = $request->batch;
       $data['duration'] = $request->duration;
       $data['email'] = $request->email;

       Scholarship::where('id',$id)->update($data);
       return redirect('/dashboard/scholarship');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Scholarship::where('id',$id)->delete();
        return redirect()->back();
    }
}
