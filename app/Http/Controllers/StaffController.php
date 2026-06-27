<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $staffs = DB::table('staffs')->get();
       return view('staff.index', compact('staffs'));
    }


   public function staff()
    {
        $menus = Menu::all();
        $staffs = DB::table('staffs')->get();

        return view('frontend.about',compact('staffs','menus'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fileName = time(). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(('staff'),$fileName);



       $data ['image'] = 'staff/'. $fileName;
       $data ['name'] = $request->name;
       $data ['position'] = $request->position;
       $data ['email'] = $request->email;
       $data ['mobile'] = $request->mobile;



      Staff::insert($data);
      return redirect()->route('staff.index')->with('success','Staff create successfully!');



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
       $staff = DB::table('Staffs')->where('id',$id)->first();
       return view('staff.edit',compact('staff'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data = [
        'name' => $request->name,
        'position' => $request->position,
        'email' => $request->email,
        'mobile' => $request->mobile,
    ];

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('asset/staff'), $fileName);

        // Add the image path to the $data array
        $data['image'] = 'asset/staff/' . $fileName;
    }

    // Update the record in the database
    Staff::where('id', $id)->update($data);

    return redirect()->route('staff.index')->with('success', 'Update profile successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('staffs')->where('id',$id)->delete();
        return redirect()->route('staff.index')->with('success','Delete Successfully !');

    }



    public function member()
    {
        $staffs = DB::table('staffs')->get();

        return view('faculty.member',compact('staffs'));
    }


}
