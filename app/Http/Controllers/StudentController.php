<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Batch;
use App\Models\Menu;
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
        $batches = Batch::all();
        
        return view('student.create',compact('batches'));
    }

    public function index(){

        $menus = Menu::all();
      $students = DB::table('students')->paginate(10);



    return view('student.index',compact('students','menus'));

    //  $students = Student::paginate(10);
    //  return view('student.index',compact('students'));

    }



    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'email' => 'required', // Assuming 'users' is the table name and 'email' is the column name
            'blood' => 'required', // Assuming 'users' is the table name and 'email' is the column name
            'address' => 'required',
            'mobile' => 'required', // Assuming 'users' is the table name and 'mobile' is the column name
            'type' => 'required',
            'batch_id' => 'required',

           ]) ;


         $data['name']=$request->name;
         $data['roll']=$request->roll;
         $data['email']=$request->email;
         $data['batch_id']=$request->batch_id;
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
        // $data['student'] =DB::table('students')->where('id',$id)->first();
        // return view('student.show',$data);

        $std =Student::count();
        dd($std);
        }


    public function edit($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
                return view('student.edit',compact('student'));
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['batch_id']=$request->batch_id;
        $data['blood']=$request->blood;
        $data['address']=$request->address;
        $data['mobile']=$request->mobile;
        $data['type']=$request->type;


        DB::table('students')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect('/dashboard/students')->with('update','Successfully done!');


    }
    public function destroy($id){

        DB::table('students')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect()->back();

    }

    public function search(Request $request){

        $data = $request->input('search');
        $students = Student::where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('student.index',compact('students'));

    }








}
