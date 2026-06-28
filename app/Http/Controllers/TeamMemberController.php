<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function team()
    {


        // team
        $boardOfDirectors = TeamMember::whereIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $technicalTeam = TeamMember::whereNotIn('designation', [
            'Managing Director',
            'Director'
        ])->get();

        $teachers = TeamMember::all();




        return view('team.team', [
            'boardOfDirectors' => $boardOfDirectors,
            'technicalTeam' => $technicalTeam,
            'teachers' => $teachers


        ]);
    }

    public function index()
    {

        $teamMembers = TeamMember::all();

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

        $fileName = time() . '-sg.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('teammember', $fileName);






        $data['image'] =  'teammember/' . $fileName;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['fb'] = $request->fb;
        $data['linked'] = $request->linked;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;


        DB::table('team_members')->insert($data);
        return redirect()->route('team.index')->with('success', 'Team Member Added Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = DB::table('team_members')->where('teammember_id', $id)->first();
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

            $fileName = time() . '-sg.' .
                $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move('teammember', $fileName);

            $data['image'] = 'teammember/' . $fileName;
        }

        TeamMember::where('teammember_id', $id)->update($data);

        return redirect()
            ->route('team.index')
            ->with('success', 'Team Member Updated Successfully');
    }



    public function destroy($id)
    {
        TeamMember::where('teammember_id', $id)->delete();

        return redirect()
            ->route('team.index')
            ->with('success', 'Team Member Deleted Successfully');
    }











}
