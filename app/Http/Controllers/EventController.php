<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $upcoming =Event::whereIN('name',['empty'])->get();
        $event = Event::whereNotIn('name',['empty'])->get();;
        return view('event.events',compact('event','upcoming'));
    }

    // admin dashvboard event file
    public function index(){
        $menus = Menu::all();
        $events = DB::table('events')->get();
        return view('event.index',compact('events','menus'));
    }

    public function create()
    {
        return view('event.create');


    }


     public function show($id)
    {
        $events = DB::table('events')->where('id',$id)->first();
        return view('event.show',compact('events'));

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
    return redirect()->route('event.index')->with('success','Event Added Successfully');

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
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function event_update(Request $request, string $id)
{
    $data = [
        'name' => $request->name,
        'date' => $request->date,
        'time' => $request->time,
        'location' => $request->location,
        'description' => $request->description,
    ];

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('event', $fileName);

        // Add the image path to the $data array
        $data['image'] = 'event/' . $fileName;
    }

    // Update the record in the database
    DB::table('events')->where('id', $id)->update($data);

    return redirect()->route('event.index')->with('success', 'Event updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = DB::table('events')->where('id',$id)->delete();
        return redirect()->route('event.index')->with('success','Event delete Successfully');
    }




}
