<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use PhpParser\Node\Stmt\Echo_;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin_login(){
        return view('user.login');
    }
    public function admin_registration(){
        return view('user.registration');
    }
    public function password(){
        return view('admin.password');
    }
    public function static(){
        return view('admin.static');
    }
    public function chart(){
        return view('admin.chart');
    }

    public function index()
    {
       return view('admin.index');
    }



    public function u_admin(){

        $data['admins']=DB::table('users')->get();

        return view('admin.u_admin',$data);

    }
    public function u_student(){

        $data['students']=DB::table('students')->get();

        return view('admin.u_student',$data);

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
