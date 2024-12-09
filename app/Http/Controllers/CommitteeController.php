<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\models\Committee;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function committee(){
        $committees = Committee::all();
        $committee_hd = Committee::find(1); // Committee with ID 1
        $committee_con = Committee::find(2); // Committee with ID 2


        return view('club.committee.committee',[
            'committees' => $committees,
            'committee_hd' => $committee_hd,
            'committee_con' => $committee_con,


                ]);
    }

    public function index()
    {
        $committeeMembers = Committee::all();

        return view('club.committee.index',compact('committeeMembers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('club.committee.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Validate incoming request
         $request->validate([
             'name' => 'required|string|max:255',
             'position' => 'required|string|max:255',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable image field
         ]);

         // Initialize the data array
         $data = [];

         // Handle image upload if a file is provided
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

         // Add the name and position to the data array
         $data['name'] = $request->name;
         $data['position'] = $request->position;

         // Save the data (if using Eloquent, you'd typically call create or save method here)
         // Assuming you're using Eloquent and there's a model (e.g., CommitteeMember)

         Committee::create($data);



         return redirect()->route('committee.index')->with('success', 'Committee Member Added Successfully');
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
        $committees = committee::findOrFail($id);
        return view('club.committee.edit',compact('committees'));
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
