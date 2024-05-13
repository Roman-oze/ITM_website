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
        public function login()
        {
            return view('frontend.login');
        }

        public function register(Request $request)
    {
        $request->validate([
                   'name'=>'required',
                   'email'=>'required|unique:admin',
                   'mobile'=>'required|',
                   'password'=>'required|min:8|confirmed',
                   'password_confirm'=>'required | same:password'
                   ]);

                $data['name']=$request->name;
                $data['email']=$request->email;
                $data['mobile']=$request->mobile;
                $data['password']=$request->password;
                $data['password_confirm']=$request->password_confirm;

                //   Admin::get()->insert($data);
                //   return redirect('admin_user')->back()->with('message','Registration Successfull');
                DB::table('admins')->insert($data);
                dd(DB::table('students')->get());
                // return redirect ('');

                // $admins = admin::all();
                // echo "<pre>";
                // print_r($admins->toArray());
                }

    public function admin_user(){

         $data['admins']=Admin::get();


            return view('frontend.user',$data);
                }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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



