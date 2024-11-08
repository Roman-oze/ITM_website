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


        // $request->validate([
        // 'image' => 'require',
        // 'name'=> 'require | max:255',
        // 'position' =>'require',
        // 'email' =>'require | unique',
        // 'mobile' => 'require',
        // ]);



        $fileName = time(). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(('staff'),$fileName);



       $data ['image'] = 'staff/'. $fileName;
       $data ['name'] = $request->name;
       $data ['position'] = $request->position;
       $data ['email'] = $request->email;
       $data ['mobile'] = $request->mobile;



      Staff::insert($data);
        return redirect()->back()->with('success','Staff create successfully!');



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
        $fileName = time(). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(('asset/staff'),$fileName);



       $data ['image'] = 'asset/staff/'. $fileName;
       $data ['name'] = $request->name;
       $data ['position'] = $request->position;
       $data ['email'] = $request->email;
       $data ['mobile'] = $request->mobile;



        DB::table('staffs')->where('id',$id)->update($data);
        return redirect()->back()->with('success','Update profile Successfully !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('staffs')->where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully !');

    }



    public function member()
    {
        $staffs = DB::table('staffs')->get();

        return view('faculty.member',compact('staffs'));
    }


}
