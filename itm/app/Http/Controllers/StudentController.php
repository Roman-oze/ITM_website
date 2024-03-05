<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
 

 
        
    public function create(){
        return view('students.create');
     }
    

   public function index(){
    $data['students'] = (DB::table('students')->get());
        //   dd($data);
        return view('students.index',$data);
     }

     public function store(Request $request)
     {
         // Validate the incoming request data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'department' => 'required|string|max:255',
             'address' => 'required|string|max:255',
             'mobile' => 'required|string|max:20',
         ]);
 
         // Create a new student record
         $student = Student::create($validatedData);
 
         return redirect()->route('students.index')->with('success', 'Student created successfully');
     }
 



public function show($id){
    $data['students'] = DB::table('students')->where('id',$id)->first();
    return view('students/show',$data);
    }


     public function edit(){
         return view('students.edit');
     }
 
}