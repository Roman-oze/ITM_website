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

// In StudentController
// public function __construct()
// {
//     $this->middleware('super-admin');
// }





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
        $batches = Batch::all();
        // $students = Student::with('batches')->get();

    //   $students = DB::table('students')->paginate(10);

$students = Student::with('batch')->paginate(10);

    return view('student.index',compact('students','menus','batches'));

    //  $students = Student::paginate(10);
    //  return view('student.index',compact('students'));

    }


    // Controller
public function activate($studentId)
{
    $student = Student::findOrFail($studentId);
    $student->type = 'active'; // Assuming 'active' type ID is 1
    $student->save();

    return redirect()->route('student.index')->with('success','Student activated!');

}

public function deactivate($studentId)
{
    $student = Student::findOrFail($studentId);
    $student->type = 'inactive'; // Assuming 'inactive' type ID is 2
    $student->save();

    return redirect()->route('student.index')->with('success','Student Inactivated!');

}

public function batches(Request $request)
{
    $request->validate([
        'batch_name' => 'required|string|max:255|unique:batches,batch_name',
    ]);

    // Save the batch
    $batch = Batch::create([
        'batch_name' => $request->batch_name,
    ]);

    return redirect()->route('student.create')->with('success','Add Batch Successfully !');


}




<<<<<<< Updated upstream
    public function store(Request $request){
=======
public function store(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'name' => 'required|string|max:255',
        'roll' => 'required|string|unique:students,roll|max:50',
        'email' => 'required|email|unique:students,email|max:255',
        'blood' => 'nullable|string|max:10',
        'address' => 'nullable|string|max:255',
        'mobile' => 'nullable|string|max:20',
        'type' => ['required', 'in:active,inactive'], // Validating status
    ]);
>>>>>>> Stashed changes

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'roll' => 'required|string|unique:students,roll|max:50',
            'email' => 'required|email|unique:students,email|max:255',
            'blood' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:20',
            'type' => ['required', 'in:active,inactive'], // Validating status
            'batch_id' => 'required|exists:batches,id',
        ]);

        // Store the student
        // Student::create($validatedData);


         $data['name']=$request->name;
         $data['roll']=$request->roll;
         $data['email']=$request->email;
         $data['batch_id']=$request->batch_id;
         $data['blood']=$request->blood;
         $data['address']=$request->address;
         $data['mobile']=$request->mobile;
         $data['type']=$request->type;



         Student::insert($data);
         return redirect()->route('student.index')->with('success','Congratulations! for join Us');

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
        $student = Student::where('id',$id)->first();
        $batches =  Batch::all();

        return view('student.edit',compact('student','batches'));
    }


    public function update(Request $request,$id){

        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['batch_id']=$request->batch_id;
        $data['blood']=$request->blood;
        $data['address']=$request->address;
        $data['mobile']=$request->mobile;


        DB::table('students')->where('id',$id)->update($data);

        // dd(DB::table('students')->get());
        return redirect()->route('student.index')->with('success','Update Successfully done!');


    }
    public function destroy($id){

        DB::table('students')->where('id',$id)->delete();

        // dd(DB::table('students')->get());
        return redirect()->route('student.index')->with('success','Delete Successfully done!');

    }

    public function search(Request $request){

        $data = $request->input('search');
        $students = Student::where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('student.index',compact('students'));

    }








}
