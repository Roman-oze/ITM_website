<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin()
    {
        return view('frontend.dashboard');
    }
    public function sign_in()
    {
        return view('user.signin');
    }
    public function signup()
    {
        return view('user.signup');
    }
    public function create()
    {
        return view('user.create');
    }

    public function index(){

      $data['students'] = DB::table('users')->get();

    //   dd($data);
    return view('user.user',$data);

    }



    public function register(Request $request){

        $rule= [

            'name'=>'required',
            'email'=>'required|unique',
            'password'=>'required|confirmed',
        ];

         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['password']=$request->password;
         $data['role']=$request->role;


        DB::table('users')->insert($data);

        // dd(DB::table('students')->get());
        return redirect('users');


    }
    public function view($id)
    {
        $data['student'] =DB::table('users')->where('id',$id)->first();
        return view('user.view',$data);
    }


    public function edit($id)
    {
        $data['students'] = DB::table('users')->where('id',$id)->first();
                return view('user.edit',$data);
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;

        DB::table('users')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect('admin_user');


    }
    public function destroy($id){

        DB::table('students')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect('students');


    }
        }
