<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use PhpParser\Node\Stmt\Echo_;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function index(){

      $data['students'] = DB::table('students')->get();

    //   dd($data);
    return view('student.index',$data);

    }



    public function store(Request $request){
              
        $data['name']=$request->name;
        $data['department']=$request->department;
        $data['address']=$request->address;
        $data['mobile']=$request->mobile;

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

}