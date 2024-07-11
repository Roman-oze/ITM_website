<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\table;

class AuthController extends Controller
{




    public function dashboard()
    {
        // $data = array();
        // if(Session::has('id')){
        //     $data = User::where('id','=',Session::get('id'))->first();
        // }

       return view('auth.dashboard');
    }



    public function registration()
    {
        return view('auth.registration');
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
        //     return back('user/login')->with('success','You have registered Successfully');
        //     }
        //     else{
        //         return back()->with('error','Something went wrong');
        //     }



        DB::table('users')->insert($data);
     return redirect('user/login')->with('success','Congratulations! You Profile is Ready');




    }



    public function login()
    {
        return view('auth.login');
    }



    public function loginUser(Request $request)
    {
        $user = DB::table('users')->where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($user){
            session()->put('id',$user->id);
                return redirect('dashboard');
        }
        else{
            return redirect()->back()->with('error','Email/Password Incorrect please try again');
        }

    }



    public function logout(){
        session()->forget('id');
        return redirect('login');

      }


    public function password()
    {
        return view('auth.password');
    }




}
