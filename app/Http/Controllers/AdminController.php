<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;


class AdminController extends Controller
{


    public function admin()
    {
        return view('frontend.dashboard');
    }
    public function registration()
    {
        return view('frontend.registration');
    }
    public function create()
    {
        return view('student.create');
    }

    public function index(){

      $data['students'] = DB::table('students')->get();

    //   dd($data);
    return view('student.index',$data);

    }



    public function store(Request $request){

        // $request->validate([

        //     'name'=>'required',
        //     'email'=>'required|unique',
        //     'address'=>'required',
        //     'mobile'=>'required|unique',
        //     'password'=>'required|confirmed',
        //     'password_confirm'=>'required | same:password',
        //     ]);

         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['department']=$request->department;
         $data['address']=$request->mobile;
         $data['mobile']=$request->mobile;
         $data['password']=$request->password;
         $data['password_confirm']=$request->password_confirm;
         $data['role']=$request->role;


        DB::table('students')->insert($data);

        // dd(DB::table('students')->get());
        return redirect('students');


    }
    public function show($id)
    {
        $data['student'] =DB::table('students')->where('id',$id)->first();
        return view('student.show',$data);
    }


    public function edit($id)
    {
        $data['student'] = DB::table('students')->where('id',$id)->first();
                return view('student.edit',$data);
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['department']=$request->department;
        $data['address']=$request->address;
        $data['mobile']=$request->mobile;

        DB::table('students')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect('students');


    }
    public function destroy($id){

        DB::table('students')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect('students');


    }
    public function membership()
    {
        $data['students'] = DB::table('students')->get();

         return view('frontend.membership', $data);

    }

}











 // public function story(Request $request){
    //     $request->validate([
    //        'name'=>'required',
    //        'email'=>'required|unique:admin',
    //        'mobile'=>'required|',
    //        'password'=>'required|min:8|confirmed',
    //        'password_confirm'=>'required | same:password'
    //     ]);

    //     $data['name']=$request->name;
    //     $data['email']=$request->email;
    //     $data['mobile']=$request->mobile;
    //     $data['password']=$request->password;
    //     $data['password_confirm']=$request->password_confirm;

    //     if($data)

    //     {
    //      return redirect()->route('admin.login')->with('success','Admin Registration Successfully');
    //      }
    //      else
    //      {
    //          return redirect()->back()->with('error','Admin Registration Failed');
    //          }
    // }



