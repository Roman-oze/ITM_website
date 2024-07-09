<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{

    public function dashboard()
    {
        // $data = array();
        // if(Session::has('id')){
        //     $data = User::where('id','=',Session::get('id'))->first();
        // }

       return view('admin.index');
    }



    public function registration()
    {
        return view('admin.user.registration');
    }


    public function register(Request $request){

       $request -> validate ([

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|string|min:5|max:16',
        ]);

         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['password']= $request->password;
         $data['created_at']=date('Y-m-d H:i:s');
         $data['updated_at']=date('Y-m-d H:i:s');
        //  $data['status']=$request->status;

        // if($data){
        //     return back()->with('success','You have registered Successfully');
        //     }
        //     else{
        //         return back()->with('error','Something went wrong');
        //     }



        DB::table('users')->insert($data);

        // dd(DB::table('students')->get());
     return redirect('admin/login')->with('success','Congratulations! You Profile is Ready');

        // return redirect()->back();


    }

    public function login()
    {
        return view('admin.user.login');
    }

    public function loginUser(Request $request)
    {
        $user = DB::table('users')->where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($user){
            session()->put('id',$user->id);
                return redirect('dashboard');
        }
        else{
            return redirect()->back()->with('error','Email/Password Incorrect');
        }

    }



    public function logout(){
        session()->forget('id');
        return redirect('login');

      }


    public function password()
    {
        return view('admin.user.password');
    }


    public function user(){

        $record = User::paginate(10);
        return view('admin.user.user',compact('record'));

    }



      public function user_student(){

        $data['students']=DB::table('students')->get();

        return view('admin.user_student',$data);

    }

    public function create()
    {
        return view('user.create');
    }



    public function show($id)
    {
        $users =DB::table('users')->where('id',$id)->first();
        return view('admin.user.show',compact('users'));
    }


    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->first();
                return view('admin.user.edit',compact('users'));
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;

        DB::table('users')->where('id',$id)->update($data);
        return redirect()->route('admin.user')->with('success','User Updated Successfully');



    }
    public function destroy($id){

        DB::table('users')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect()->route('admin.user')->with('success','User delete Successfully');


    }

    public function routine(){
        return view('admin.routine');

    }


    public function records(Request $request){

        $data = $request->input('search');
        $record = DB::table('users')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('admin.user.user_admin',compact('record'));

    }


}
