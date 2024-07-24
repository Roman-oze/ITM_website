<?php


namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller
{
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






}
