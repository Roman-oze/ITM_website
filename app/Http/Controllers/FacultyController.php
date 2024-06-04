<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function main()
    {
        $teachers = DB::table('teachers')->get();

        return view('admin.faculty.main',compact('teachers'));
    }
    public function showing()
    {
        $teachers = DB::table('teachers')->get();

        return view('admin.faculty.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faculty.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function faculty_store(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'designation' => 'required',
            'fb' => 'required',
            'linked' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

            $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('upload/teachers',$fileName);



            $data ['image'] = $fileName;
            $data['name']=$request->name;
            $data['designation']=$request->designation;
            $data['fb']=$request->fb;
            $data['linked']=$request->linked;
            $data['email']=$request->email;
            $data['phone']=$request->phone;


    DB::table('teachers')->insert($data);
    return redirect('showing');






    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $teacher = DB::table('teachers')->where('teacher_id',$id)->first();
       return view('admin.faculty.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function faculty_update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'designation' => 'required',
            'fb' => 'required',
            'linked' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

           
           $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('upload/teachers',$fileName);



            $data ['image'] = $fileName;
            $data['name']=$request->name;
            $data['designation']=$request->designation;
            $data['fb']=$request->fb;
            $data['linked']=$request->linked;
            $data['email']=$request->email;
            $data['phone']=$request->phone;


            DB::table('teachers')->where('teacher_id',$id)->update($data);
            return redirect('showing');
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('teachers')->where('teacher_id',$id)->delete();
        return redirect('showing');
    }
}
