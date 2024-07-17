<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

     public function index(){
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));

     }


    //  public function store( Request $request ){



    //     $this->validate($request, [

    //         'name'          => 'required|string|max:255|unique:users,username',
    //         'email'             => 'required|string|email|max:255|unique:users,email',
    //         'password'          => 'required',

    //     ]);



    //         $user = new User();
    //         $user->name = $request['username'];
    //         $user->email = $request['email'];
    //         $user->password = Hash::make( $request['password'] );
    //         $user->save();

    //          return redirect( route('login') )->with(['success' => 'User Successfully Created!']);
    // }

    public function store(Request $request){

       $request -> validate ([

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|string|min:5|max:16',
        ]);

         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['password']= $request->password;
         $data['created_at']=date('Y-m-d H:i:s');
         $data['updated_at']=date('Y-m-d H:i:s');


        DB::table('users')->insert($data);
     return redirect('user/login')->with('success','Congratulations! You Profile is Ready');




    }

    public function show($id)
    {
        $users =DB::table('users')->where('id',$id)->first();
        return view('admin.user.show',compact('users'));
    }

    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->first();
         return view('admin.user.edit',compact('users'));
    }


    public function update(Request $request,string $id){


     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['password']= $request->password;


        DB::table('users')->where('id',$id)->update($data);
        return redirect()->route('users')->with('success','User Updated Successfully');




    }


    public function destroy($id){

        DB::table('users')->where('id',$id)->delete();

        return redirect()->back()->with('success','User delete Successfully');


    }



    public function search(Request $request){

        $data = $request->input('search');
        $users =DB::table('users')->where('name','like','%'.$data.'%')->orWhere('email','like','%'.$data.'%')->paginate(10);
        return view('admin.user.index',compact('users'));

    }


}
