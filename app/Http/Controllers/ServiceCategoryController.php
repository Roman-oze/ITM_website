<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceCategories = ServiceCategory::latest()->get();

        return view('service_category.index', compact('serviceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function serviceCategories()
    // {
    //     $serviceCategories = ServiceCategory::latest()->get();

    //     return view('service_category.category', compact('serviceCategories'));
    // }

    public function serviceCategories(Request $request)
{
    $query = ServiceCategory::where('status','Active');

    if($request->filled('category'))
    {
        $query->where('category',$request->category);
    }

    $serviceCategories = $query->latest()->get();

    return view('service_category.category',compact('serviceCategories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'          => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'logo'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website'           => 'nullable|url',
            'software_name'     => 'nullable|string|max:255',
            'service_type'      => 'required|string|max:255',
            'country'           => 'required|string|max:255',
            'description'       => 'nullable|string',
            'status'            => 'required|in:Active,Inactive',
        ]);

        $serviceCategory = new ServiceCategory();

        $serviceCategory->category = $request->category;
        $serviceCategory->organization_name = $request->organization_name;
        $serviceCategory->website = $request->website;
        $serviceCategory->software_name = $request->software_name;
        $serviceCategory->service_type = $request->service_type;
        $serviceCategory->country = $request->country;
        $serviceCategory->description = $request->description;
        $serviceCategory->status = $request->status;

        // Upload Logo
        if ($request->hasFile('logo')) {

            $image = $request->file('logo');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('uploads/service-category'), $imageName);

            $serviceCategory->logo = 'uploads/service-category/' . $imageName;
        }

        $serviceCategory->save();

        return redirect()
            ->route('service-category.index')
            ->with('success', 'Service Category created successfully.');
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit($id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);

        return view('service-category.edit', compact('serviceCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'category'          => 'required|string|max:255',
    //         'organization_name' => 'required|string|max:255',
    //         'logo'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //         'website'           => 'nullable|url',
    //         'software_name'     => 'nullable|string|max:255',
    //         'service_type'      => 'required|string|max:255',
    //         'country'           => 'required|string|max:255',
    //         'description'       => 'nullable|string',
    //         'status'            => 'required|in:Active,Inactive',
    //     ]);

    //     $serviceCategory = ServiceCategory::findOrFail($id);

    //     $serviceCategory->category = $request->category;
    //     $serviceCategory->organization_name = $request->organization_name;
    //     $serviceCategory->website = $request->website;
    //     $serviceCategory->software_name = $request->software_name;
    //     $serviceCategory->service_type = $request->service_type;
    //     $serviceCategory->country = $request->country;
    //     $serviceCategory->description = $request->description;
    //     $serviceCategory->status = $request->status;

    //     // Update Logo
    //     if ($request->hasFile('logo')) {

    //         if ($serviceCategory->logo && File::exists(public_path($serviceCategory->logo))) {
    //             File::delete(public_path($serviceCategory->logo));
    //         }

    //         $image = $request->file('logo');

    //         $imageName = time().'_'.$image->getClientOriginalName();

    //         $image->move(public_path('uploads/service-category'), $imageName);

    //         $serviceCategory->logo = 'uploads/service-category/'.$imageName;
    //     }

    //     $serviceCategory->save();

    //     return redirect()
    //         ->route('service-category.index')
    //         ->with('success', 'Service Category updated successfully.');
    // }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category'          => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'logo'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website'           => 'nullable|url|max:255',
            'software_name'     => 'nullable|string|max:255',
            'service_type'      => 'required|string|max:255',
            'country'           => 'required|string|max:255',
            'description'       => 'nullable|string',
            'status'            => 'required|in:Active,Inactive',
        ]);

        $serviceCategory = ServiceCategory::findOrFail($id);

        // Update Logo
        if ($request->hasFile('logo')) {

            if (
                $serviceCategory->logo &&
                File::exists(public_path($serviceCategory->logo))
            ) {
                File::delete(public_path($serviceCategory->logo));
            }

            $destination = public_path('uploads/service-category');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $image = $request->file('logo');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move($destination, $imageName);

            $validated['logo'] = 'uploads/service-category/' . $imageName;
        }

        $serviceCategory->update($validated);

        return redirect()
            ->route('service-category.index')
            ->with('success', 'Service Category updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);

        if ($serviceCategory->logo && File::exists(public_path($serviceCategory->logo))) {
            File::delete(public_path($serviceCategory->logo));
        }

        $serviceCategory->delete();

        return redirect()
            ->route('service-category.index')
            ->with('success', 'Service Category deleted successfully.');
    }
}
