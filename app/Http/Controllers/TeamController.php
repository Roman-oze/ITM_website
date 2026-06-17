<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function team()
    {


        // team
        $boardOfDirectors = Teacher::whereIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $technicalTeam = Teacher::whereNotIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $teachers = Teacher::all();




        return view('team.team', [
            'boardOfDirectors' => $boardOfDirectors,
            'technicalTeam' => $technicalTeam,
            'teachers' => $teachers


        ]);
    }

    public function index()
    {

        $teamMembers = Teacher::all();

        return view('team.index', [
            'teamMembers' => $teamMembers
        ]);
    }



    public function create (){
        return view('team.index');
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

        $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('faculty', $fileName);






        $data['image'] =  'faculty/' . $fileName;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['fb'] = $request->fb;
        $data['linked'] = $request->linked;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;


        DB::table('teachers')->insert($data);
        return redirect()->route('team.index')->with('success', 'Faculty Added Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = DB::table('teachers')->where('teacher_id', $id)->first();
        return view('team.index', compact('teacher'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'fb' => 'required',
            'linked' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'fb' => $request->fb,
            'linked' => $request->linked,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        if ($request->hasFile('image')) {

            $fileName = time() . '-itm.' .
                $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move('faculty', $fileName);

            $data['image'] = 'faculty/' . $fileName;
        }

        Teacher::where('teacher_id', $id)->update($data);

        return redirect()
            ->route('team.index')
            ->with('success', 'Faculty Updated Successfully');
    }



    public function destroy($id)
    {
        Teacher::where('teacher_id', $id)->delete();

        return redirect()
            ->route('team.index')
            ->with('success', 'Faculty Deleted Successfully');
    }










    public function search(Request $request)
    {


        $data = $request->input('search');
        $teachers = DB::table('teachers')->where('name', 'like', '%' . $data . '%')->orWhere('email', 'like', '%' . $data . '%')->paginate(10);
        return view('faculty.index', compact('teachers'));
    }
}
