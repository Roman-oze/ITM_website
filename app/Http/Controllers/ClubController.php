<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Student;
use App\Models\ClubPhoto;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

        public function club(){

            $photos = Gallery::where('type','Club')->get();
            $footers = Footer::all();
            $committees = Committee::whereIn('id', [ 2, 3, 4])->get();
            return view('club.club',compact('committees','photos','footers'));
    }

    public function create(){
        $photos = Gallery::where('type','Club')->get();
        return view('club.create',compact('photos'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'nullable | required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable image field
            'type' => 'required|string|in:Departmental,Club'

        ]);

        if ($request->hasFile('image')) {
            // Generate a unique file name
            $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();

            // Move the image to the 'committee' folder
            $request->file('image')->move('committee', $fileName);

            // Add the image path to the data array
            $data['image'] = 'committee/' . $fileName;
        } else {
            // If no image is provided, set the image field to null (or empty string)
            $data['image'] = null; // You can also use '' (empty string) if you prefer
        }

        $data['title'] = $request->title;
        $data['type'] = $request->type;
        Gallery::create($data);
        return redirect()->back()->with('success', 'Club created successfully');
    }

    public function edit($id){

            $photo = Gallery::find($id);
            return view('club.edit',compact('photo'));
        }

        public function update(Request $request, $id)
        {
            $photo = Gallery::findOrFail($id);

            $request->validate([
                'title' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'type' => 'required|string|in:Departmental,Club',
            ]);

            if ($request->hasFile('image')) {
                if ($photo->image && file_exists(public_path($photo->image))) {
                    unlink(public_path($photo->image));
                }

                $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('committee', $fileName);
                $photo->image = 'committee/' . $fileName;
            }

            $photo->title = $request->title;
            $photo->type = $request->type;
            $photo->save();

            return redirect()->back()->with('success', 'Gallery updated successfully');
        }



    public function destroy($id)
    {
        // Find the photo record
        $photo = Gallery::findOrFail($id);
        // Delete the photo record from the database
        $photo->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Photo deleted successfully!');
    }




        public function membership(){

            $batches = Batch::all();

            $students = Student::with('Batch')->get();

            return view('club.member.membership',compact('students','batches'));

   }


   public function event(){
       $events = Event::where('type', 'Club')->get();
       return view('club.event.event',compact('events'));
    }
   public function event_index(){
       $upcoming = Event::all();
       $events = Event::where('type', 'Club')->get();
       return view('club.event.index',compact('upcoming','events'));
    }

    public function index(){

        $batches = Batch::all();

        $students = Student::with('Batch')->get();

        return view('club.member.index',compact('students','batches'));
    }




}
