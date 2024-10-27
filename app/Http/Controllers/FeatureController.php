<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::all();

        return view('website_setup.Feature.index',[
            'features' => $features
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('website_setup.Feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif,svg',
        ]);



        $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();

        $request->file('image')->move('features', $fileName);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['image'] = 'features/'.$fileName;

        Feature::create($data);



      return redirect()->back()->with('success', 'Feature created successfully');



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
        $feature = Feature::find($id);
        return view('website_setup.Feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the form data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional
    ]);

    // Find the feature by ID
    $feature = Feature::findOrFail($id);

    // Update title and description
    $feature->title = $validated['title'];
    $feature->description = $validated['description'];

    // Handle optional image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($feature->image) {
            Storage::disk('feature')->delete($feature->image);
        }

        // Store the new image and update the path
        $imagePath = $request->file('image')->store('images', 'public');
        $feature->image = $imagePath;
    }

    // Save the updated feature
    $feature->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Feature updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $feature = Feature::find($id);
       $feature->delete();

       return redirect()->back()->with('success', 'Feature deleted successfully');
    }
}
