<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auth;
use App\Models\Message;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\DB;
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
        $messages = Message::all();

       return view('auth.dashboard',compact('messages'));
    }


}
