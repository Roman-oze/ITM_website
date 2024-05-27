<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use PhpParser\Node\Stmt\Echo_;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function user_admin(){

        $record = User::paginate(10);
        return view('admin.user_admin',compact('record'));

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
         $data['password']= md5($request->password);
         $data['created_at']=date('Y-m-d H:i:s');
         $data['updated_at']=date('Y-m-d H:i:s');
        //  $data['status']=$request->status;
        //  $data['created_by']=Auth::user()->id;
        //  $data['updated_by']=Auth::user()->id;
        //  $data['created_ip']=request()->ip();
        //  $data['updated_ip']=request()->ip();

        DB::table('users')->insert($data);

        // dd(DB::table('students')->get());
        return redirect('users');


    }
    public function show($id)
    {
        $data['record'] =DB::table('users')->where('id',$id)->first();
        return view('admin.user.show',$data);
    }


    public function edit($id)
    {
        $data['record'] = DB::table('users')->where('id',$id)->first();
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

    public function routine(){
        return view('admin.routine');

    }
    public function records(Request $request){

        $data = $request->input('search');
        $record = DB::table('users')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('admin.user_admin',compact('record'));

    }


}
