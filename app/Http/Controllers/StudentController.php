<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use PhpParser\Node\Stmt\Echo_;


class StudentController extends Controller
{






    public function sign_in()
    {
        return view('student.login');
    }
    public function create()
    {
        return view('student.create');
    }

    public function index(){

      $data['student'] = DB::table('students')->get();

    //   dd($data);
    return view('student.index',$data);

    }



    public function store(Request $request){

        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email', // Assuming 'users' is the table name and 'email' is the column name
            'address' => 'required',
            'mobile' => 'required|unique:users,mobile', // Assuming 'users' is the table name and 'mobile' is the column name
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password', // 'password_confirmation' is the default field name for password confirmation
        ];


         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['department']=$request->department;
         $data['address']=$request->address;
         $data['mobile']=$request->mobile;
         $data['password']=$request->password;
         $data['password_confirm']=$request->password_confirm;
         $data['role']=$request->role;


        DB::table('students')->insert($data);

        // dd(DB::table('students')->get());
        return redirect('students');


    }
    public function show($id)
    {
        $data['student'] =DB::table('students')->where('id',$id)->first();
        return view('student.show',$data);
    }


    public function edit($id)
    {
        $data['student'] = DB::table('students')->where('id',$id)->first();
                return view('student.edit',$data);
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['department']=$request->department;
        $data['address']=$request->address;
        $data['mobile']=$request->mobile;

        DB::table('students')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect('students');


    }
    public function destroy($id){

        DB::table('students')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect('students');


    }
   

}
