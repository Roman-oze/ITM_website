<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alumni(){
         $alumns = Alumni::all();
        return view('alumni.alumni',compact('alumns'));
    }
    public function index(){
        $menus = Menu::all();
        $alumns = Alumni::all();
        return view('alumni.index',compact('alumns','menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('alumni',$fileName);




        // $alumni = new Alumni();
        // $alumni->image = $request['alumni/'.$fileName];
        // $alumni->name = $request['name'];
        // $alumni->roll = $request['roll'];
        // $alumni->batch = $request['batch'];
        // $alumni->pass_year = $request['pass_year'];
        // $alumni->organization = $request['organization'];
        // $alumni->designation = $request['designation'];
        // $alumni->phone = $request['phone'];
        // $alumni->email = $request['email'];
        // $alumni->address = $request['address'];
        // $alumni->save();

        $data ['image'] = 'alumni/'.$fileName;
        $data ['name'] = $request->name;
        $data ['roll'] = $request->roll;
        $data ['batch'] = $request->batch;
        $data ['pass_year'] = $request->pass_year;
        $data ['organization'] = $request->organization;
        $data ['designation'] = $request->designation;
        $data ['phone'] = $request->phone;
        $data ['email'] = $request->email;
        $data ['address'] = $request->address;



        // Alumni::insert($data);
        DB::table('alumnis')->insert($data);
        return redirect('/dashboard/alumni')->with('Alumni','Card added');

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
        $alumni = Alumni::where('id', $id)->first();
        return view('alumni.edit',compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('alumni',$fileName);


        $data ['image'] = 'alumni/'.$fileName;
        $data ['name'] = $request->name;
        $data ['roll'] = $request->roll;
        $data ['batch'] = $request->batch;
        $data ['pass_year'] = $request->pass_year;
        $data ['organization'] = $request->organization;
        $data ['designation'] = $request->designation;
        $data ['phone'] = $request->phone;
        $data ['email'] = $request->email;
        $data ['address'] = $request->address;

        Alumni::where('id',$id)->update($data);
        return redirect('/dashboard/alumni')->back();



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Alumni::where('id',$id)->delete();
        return redirect()->back();
    }
}
