<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
//  frontend view file
    public function events(){
        $event = DB::table('events')->get();
        return view('admin.event.events',compact('event'));
    }

    // admin dashvboard event file
    public function index(){
        $events = DB::table('events')->get();
        return view('admin.event.index',compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');


    }


     public function show($id)
    {
        $events = DB::table('events')->where('id',$id)->first();
        return view('admin.event.show',compact('events'));

     }

    /**
     * Store a newly created resource in storage.
     */
    public function event_store(Request $request)
    {

        $fileName = time().'-itm'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('event', $fileName);


       $data ['name']=$request->name;
       $data ['image']= 'event/'.$fileName;
       $data ['date']=$request->date;
       $data ['time']=$request->time;
       $data ['location']=$request->location;
       $data ['description']=$request->description;

      DB::table('events')->insert($data);

    //   return redirect()->route->back()->with('success','Event Added Successfully');
    return redirect()->route('admin.event')->with('success','Event Added Successfully');

    // dd(DB::table('events')->get());





    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $event = DB::table('events')->where('id',$id)->first();
        return view('admin.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function event_update(Request $request, string $id)
    {
        $fileName = time().'-itm'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('event', $fileName);


       $data ['name']=$request->name;
       $data ['image']= 'event/'.$fileName;
       $data ['date']=$request->date;
       $data ['time']=$request->time;
       $data ['location']=$request->location;
       $data ['description']=$request->description;

      DB::table('events')->where('id',$id)->update($data);

      return redirect()->route('admin.event')->with('success','Event update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = DB::table('events')->where('id',$id)->delete();
        return redirect()->route('admin.event')->with('success','Event delete Successfully');
    }




}
