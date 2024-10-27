<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

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

        // Feature::create($data);

        dd($data);


      return redirect()->route('features.index')->with('success', 'Feature created successfully');



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
