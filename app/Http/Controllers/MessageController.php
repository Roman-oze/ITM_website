<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function inbox()
    // {
    //    $messages = Message::all();
    //    return view('auth.dashboard',compact('messages'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $menus = Menu::all();
       $messages = Message::all();
       return view('message.index',compact('messages','menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data['message']=$request->message;



        DB::table('messages')->insert($data);
        return redirect()->back()->with('successfully send message!');


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
       DB::table('messages')->where('id',$id)->delete();
       return redirect()->back()->with('successfully delete message!');

    }
}
