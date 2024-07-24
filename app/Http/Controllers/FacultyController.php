<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function member()
    {
        $teachers = DB::table('teachers')->get();

        return view('faculty.faculty',compact('teachers'));
    }





    public function index()
    {
        $teachers = DB::table('teachers')->paginate(10);

        return view('faculty.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faculty.create');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            $request->file('image')->move('faculty',$fileName);



            $data ['image'] =  'faculty/'.$fileName;
            $data['name']=$request->name;
            $data['designation']=$request->designation;
            $data['fb']=$request->fb;
            $data['linked']=$request->linked;
            $data['email']=$request->email;
            $data['phone']=$request->phone;


    DB::table('teachers')->insert($data);
    return redirect()->route('dashboard.faculty')->with('success','Faculty Added Successfully');


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
       return view('faculty.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'image' => 'required|mimes:png,jpg,jpeg,webp',
        //     'name' => 'required',
        //     'designation' => 'required',
        //     'fb' => 'required',
        //     'linked' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        // ]);


        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('faculty',$fileName);



            $data ['image'] =  'faculty/'.$fileName;
            $data['name']=$request->name;
            $data['designation']=$request->designation;
            $data['fb']=$request->fb;
            $data['linked']=$request->linked;
            $data['email']=$request->email;
            $data['phone']=$request->phone;


            DB::table('teachers')->where('teacher_id',$id)->update($data);

            return redirect()->route('dashboard.faculty')->with('success','Faculty update Successfully');

    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('teachers')->where('teacher_id',$id)->delete();
        return redirect()->back();
    }











    public function search (Request $request){


        $data = $request->input('search');
        $teachers = DB::table('teachers')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('faculty.index',compact('teachers'));



    }

}
