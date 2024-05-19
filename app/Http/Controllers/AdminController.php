<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use PhpParser\Node\Stmt\Echo_;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user_admin(){

        $data['admins']=DB::table('users')->get();

        return view('admin.user_admin',$data);

    }
      public function user_student(){

        $data['students']=DB::table('students')->get();

        return view('admin.user_student',$data);

    }
    public function login()
    {
        return view('admin.user.login');
    }
    public function registration()
    {
        return view('admin.user.registration');
    }
    public function password()
    {
        return view('admin.user.password');
    }
    public function create()
    {
        return view('user.create');
    }

    public function index()
    {
       return view('admin.index');
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
        return redirect('user_data');


    }
    public function show($id)
    {
        $data['admin'] =DB::table('users')->where('id',$id)->first();
        return view('admin.user.show',$data);
    }


    public function edit($id)
    {
        $data['admin'] = DB::table('users')->where('id',$id)->first();
                return view('admin.user.edit',$data);
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;

        DB::table('users')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect('users');


    }
    public function destroy($id){

        DB::table('users')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect('users');


    }
}
