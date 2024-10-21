<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
       return view('website_setup.Footer.footer',compact('footers'));
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website_setup.Footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'footer_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = time().'.'.$request->file('footer_logo')->getClientOriginalExtension();
        $request->file('footer_logo')->move('footer_logo', $fileName);

        $data['footer_logo'] = 'footer_logo/'. $fileName;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['course_download'] = $request->course_download;
        $data['tuition_fees'] = $request->tuition_fees;
        $data['facebook'] = $request->facebook;
        $data['instagram '] = $request->instagram ;
        $data['linkedin '] = $request->linkedin ;

         Footer::create($data);



        return redirect()->route('footer.index')->with('success', 'Footer added successfully');

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
       $footer = Footer::where('id',$id)->first();
       return view('website_setup.Footer.edit',compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validated = $request->validate([
        //     'address' => 'nullable|required|string|max:255',
        //     'phone' => 'nullable|required|string|max:15',
        //     'email' => 'nullable|required|email',
        //     'footer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $fileName = time().'.'.$request->file('footer_logo')->getClientOriginalExtension();
        $request->file('footer_logo')->move('footer_logo', $fileName);

        $data['footer_logo'] = 'footer_logo/'. $fileName;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['course_download'] = $request->course_download;
        $data['tuition_fees'] = $request->tuition_fees;
        $data['facebook'] = $request->facebook;
        $data['instagram '] = $request->instagram ;
        $data['linkedin '] = $request->linkedin ;

        Footer::where('id',$id)->update($data);



        return redirect()->route('footer.index')->with('success', 'Footer Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Footer::where('id',$id)->delete();
        return redirect()->route('footer.index')->with('success', 'Footer deleted successfully');
    }
}
