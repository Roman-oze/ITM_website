<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\auth;
use App\Models\Message;
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
        $messages = Message::all();

       return view('auth.dashboard',compact('messages'));
    }


public function register(){
    return view('auth.registration');

}

public function login(){
    return view('auth.login');

}

    public function password()
    {
        return view('auth.password');
    }




}
