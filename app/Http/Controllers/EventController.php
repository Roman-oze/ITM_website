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

        $events = Event::where('type', 'Departmental')->get();

        return view('event.events',compact('events'));
    }

    // admin dashvboard event file
    public function index(){
        $menus = Menu::all();
        $events = Event::where('type', 'Departmental')->get();
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
        // Validate Input
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|in:Departmental,Club'
            ,
        ]);

        // Handle Image Upload
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('event', $fileName);
        }

        // Prepare Data
        $data = [
            'name' => $request->name,
            'image' => $fileName ? 'event/' . $fileName : null,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'description' => $request->description,
            'type' => $request->type,
        ];

        // Insert Data
        DB::table('events')->insert($data);

        // Redirect with Success Message
        return redirect()->back()->with('success', 'Event Added Successfully');
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
        'type' => $request->type
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

    return redirect()->back()->with('success', 'Event updated successfully!');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = DB::table('events')->where('id',$id)->delete();
        return redirect()->back()->with('success','Event delete Successfully');
    }




}
