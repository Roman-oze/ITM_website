<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
       return view('website_setup.Service.service',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website_setup.Service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('service',$fileName);

       $service = new Service();
       $service->image ='service/'.$fileName;
       $service->link_name = $request->link_name;
       $service->link = $request->link;
       $service->description = $request->description;
       $service->save();
       return redirect()->route('services.index')->with('success','service Added Successfully');



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
       $service = Service::where('id',$id)->first();
       return view('website_setup.Service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        // Check if a new image is uploaded

            // Generate a new file name and move the uploaded file
            $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('service', $fileName);

            // Update the service image path
            $service->image = 'service/'.$fileName;


        // Update other fields
        $service->link_name = $request->link_name;
        $service->link = $request->link;
        $service->description = $request->description;

        // Save the updated service
        $service->save();

        // Redirect with a success message
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id',$id)->delete();
        return redirect()->route('services.index')->with('success','service Deleted Successfully');
    }
}
