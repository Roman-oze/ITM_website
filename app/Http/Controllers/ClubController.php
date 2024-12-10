<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Student;
use App\Models\ClubPhoto;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

        public function club(){

            $photos = ClubPhoto::all();
            $footers = Footer::all();
            $committees = Committee::whereIn('id', [ 2, 3, 4])->get();
            return view('club.club',compact('committees','photos','footers'));
    }

    public function create(){
        $photos = ClubPhoto::all();
        return view('club.create',compact('photos'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'nullable | required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable image field
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

        ClubPhoto::create($data);
        return redirect()->back()->with('success', 'Club created successfully');
    }

    public function edit($id){

        $photo = ClubPhoto::find($id);
        return view('club.edit',compact('photo'));
    }

    public function update(Request $request, $id)
{
    // Validate incoming data
    $request->validate([
        'title' => 'nullable|string|max:255', // Title is nullable and must be a string
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable image field with validation
    ]);

    // Find the existing photo record
    $photo = ClubPhoto::findOrFail($id);

    // Initialize the data array for the update
    $data = [
        'title' => $request->title ?? $photo->title,  // Update the title, or keep the existing one if empty
    ];

    // If a new image is uploaded, replace the old image
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if (file_exists(public_path($photo->image))) {
            unlink(public_path($photo->image)); // Delete old image file
        }

        // Generate a unique file name for the new image
        $fileName = time() . '-itm.' . $request->file('image')->getClientOriginalExtension();

        // Move the new image to the 'committee' folder
        $request->file('image')->move(public_path('committee'), $fileName);

        // Update the image path
        $data['image'] = 'committee/' . $fileName;
    } else {
        // If no image is uploaded, keep the old image
        $data['image'] = $photo->image;  // Keep the current image if no new image is uploaded
    }

    // Update the ClubPhoto record
    $photo->update($data);

    return redirect()->back()->with('success', 'Photo updated successfully!');
}


    public function destroy($id)
    {
        // Find the photo record
        $photo = ClubPhoto::findOrFail($id);
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
       $upcoming = Event::all();
       $events = Event::where('type', 'Club')->get();
       return view('club.event.upcoming',compact('upcoming','events'));
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
