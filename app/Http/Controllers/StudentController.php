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

      $students = DB::table('students')->get();


    return view('student.index',compact('students'));

    //  $students = Student::paginate(10);
    //  return view('student.index',compact('students'));

    }



    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'batch' => 'required',
            'email' => 'required', // Assuming 'users' is the table name and 'email' is the column name
            'blood' => 'required', // Assuming 'users' is the table name and 'email' is the column name
            'address' => 'required',
            'mobile' => 'required', // Assuming 'users' is the table name and 'mobile' is the column name
            'type' => 'required', // Assuming 'users' is the table name and 'mobile' is the column name
           // 'password_confirmation' is the default field name for password confirmation
           ]) ;


         $data['name']=$request->name;
         $data['roll']=$request->roll;
         $data['batch']=$request->batch;
         $data['email']=$request->email;
         $data['blood']=$request->blood;
         $data['address']=$request->address;
         $data['mobile']=$request->mobile;
         $data['type']=$request->type;



         DB::table('students')->insert($data);
         return redirect()->back()->with('success','Congratulations! for join Us');


        // dd(DB::table('students')->get());



    }
    public function show($id)
    {
        $data['student'] =DB::table('students')->where('id',$id)->first();
        return view('student.show',$data);
    }


    public function edit($id)
    {
        $students = DB::table('students')->where('id',$id)->first();
                return view('student.edit',compact('students'));
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['email']=$request->email;
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

    public function search(Request $request){

        $data = $request->input('search');
        $students =DB::table('students')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('student.index',compact('students'));

    }


}
