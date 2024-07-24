<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class RegisterController extends Controller
{

public function register(){
    return view('auth.registration');
}


    public function store(Request $request){

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


         DB::table('users')->insert($data);
      return redirect('user/login')->with('success','Congratulations! You Profile is Ready');




     }
}
