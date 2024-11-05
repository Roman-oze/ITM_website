<?php

namespace App\Http\Controllers;
use App\models\Herosection;
use Illuminate\Http\Request;

class HerosectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $herosections = Herosection::get();
        return view('website_setup.Hero.hero_section',compact('herosections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website_setup.Hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required',
        'description' => 'required',
        'link' => 'nullable|url',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $hero = new Herosection();
    $hero->title = $request->input('title');
    $hero->description = $request->input('description');
    $hero->link = $request->input('link');

    $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();
    $request->file('image')->move('hero',$fileName);


    $hero->image ='hero/'.$fileName;
    $hero->save();
    return redirect()->route('herosection.index')->with('success','Hero Section Added Successfully');

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
        $herosection = Herosection::find($id);
        return view('website_setup.Hero.edit',compact('herosection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the existing hero section
        $hero = Herosection::findOrFail($id);

        // Update the fields
        $hero->title = $request->input('title');
        $hero->description = $request->input('description');
        $hero->link = $request->input('link');

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Generate a new filename
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Move the uploaded file to the desired location
            $request->file('image')->move('hero', $fileName);

            // Update the image path in the database
            $hero->image = 'hero/' . $fileName;
        }

        // Save the updated hero section
        $hero->save();

        return redirect()->back()->with('success', 'Hero Section Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Herosection::where('id',$id)->delete();
        return redirect()->route('herosection.index')->with('success','Hero Section Deleted Successfully');

    }
}
