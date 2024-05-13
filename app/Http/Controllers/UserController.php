<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
         'role'=>'1'

        ]);

        dd($request->all());

            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['mobile']=$request->mobile;
            $data['password']=$request->password;
            $data['password_confirm']=$request->password_confirm;

            //   Admin::get()->insert($data);
            //   return redirect('admin_user')->back()->with('message','Registration Successfull');
            DB::table('users')->insert($data);
            dd(DB::table('students')->get());
            // return redirect ('');

            // $admins = admin::all();
            // echo "<pre>";
            // print_r($admins->toArray());
            }

public function admin_user(){

     $data['admins']=User::get();


        return view('frontend.user',$data);
            }


            public function create()
            {
                return view('student.create');
            }

            public function index(){

              $data['students'] = DB::table('users')->get();

            //   dd($data);
            return view('student.index',$data);

            }



            public function store(Request $request){

                $data['name']=$request->name;
                $data['department']=$request->department;
                $data['address']=$request->address;
                $data['mobile']=$request->mobile;


                DB::table('users')->insert($data);

                // dd(DB::table('students')->get());
                return redirect('students');


            }
            public function show($id)
            {
                $data['student'] =DB::table('users')->where('id',$id)->first();
                return view('student.show',$data);
            }


            public function edit($id)
            {
                $data['student'] = DB::table('users')->where('id',$id)->first();
                        return view('student.edit',$data);
            }


            public function update(Request $request,$id){

                $data['name']=$request->name;
                $data['department']=$request->department;
                $data['address']=$request->address;
                $data['mobile']=$request->mobile;

                DB::table('users')->where('id',$id)->update($data);

                // dd(DB::table('students')->get());
                return redirect('students');


            }
            public function destroy($id){

                DB::table('users')->where('id',$id)->delete();

                // dd(DB::table('students')->get());
                return redirect('students');


            }
        }
