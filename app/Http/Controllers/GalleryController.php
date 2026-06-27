<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
       public function gallery()
    {

        $photos = Gallery::where('type', 'Club')->get();
        $single = Gallery::where('type', 'Club')->first();

        return view('gallery.gallery', compact('photos', 'single'));
    }

        public function index(){
        $photos = Gallery::where('type','Club')->get();
        return view('gallery.index',compact('photos'));
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
            return view('gallery.edit',compact('photo'));
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

}
