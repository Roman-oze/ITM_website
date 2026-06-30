<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use Illuminate\Support\Facades\File;

class AchievementController extends Controller
{
    /**
     * Frontend Achievement Page
     */
    public function achievement()
    {
        $achievements = Achievement::where('status', 'Active')
            ->latest()
            ->get();

        return view('achievement.achievement', compact('achievements'));
    }

    /**
     * Admin Index
     */
    public function index()
    {
        $achievements = Achievement::latest()->get();

        return view('achievement.index', compact('achievements'));
    }

    /**
     * Store Achievement
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'achievement_date' => 'required|date',
            'description' => 'nullable|string',
            'certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'featured' => 'required|boolean',
            'status' => 'required|in:Active,Inactive',
        ]);
        /*
        |-------------------------------------------------------
        | Upload Image
        |-------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $destination = public_path('uploads/achievement');

            if (!File::exists($destination)) {

                File::makeDirectory($destination, 0755, true);
            }

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move($destination, $imageName);

            $validated['image'] = 'uploads/achievement/' . $imageName;
        }

        /*
        |-------------------------------------------------------
        | Upload Certificate
        |-------------------------------------------------------
        */

        if ($request->hasFile('certificate')) {

            $destination = public_path('uploads/achievement/certificate');

            if (!File::exists($destination)) {

                File::makeDirectory($destination, 0755, true);
            }

            $certificate = $request->file('certificate');

            $certificateName = time() . '_' . $certificate->getClientOriginalName();

            $certificate->move($destination, $certificateName);

            $validated['certificate'] =
                'uploads/achievement/certificate/' . $certificateName;
        }

        Achievement::create($validated);

        return redirect()
            ->route('achievement.index')
            ->with('success', 'Achievement created successfully.');
    }

    /**
     * Update Achievement
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'achievement_date' => 'required|date',
            'description' => 'nullable|string',
            'certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'featured' => 'required|boolean',
            'status' => 'required|in:Active,Inactive',
        ]);
        $achievement = Achievement::findOrFail($id);

        /*
        |-------------------------------------------------------
        | Replace Image
        |-------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            if (
                $achievement->image &&
                File::exists(public_path($achievement->image))
            ) {
                File::delete(public_path($achievement->image));
            }

            $destination = public_path('uploads/achievement');

            if (!File::exists($destination)) {

                File::makeDirectory($destination, 0755, true);
            }

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move($destination, $imageName);

            $validated['image'] =
                'uploads/achievement/' . $imageName;
        }

        /*
        |-------------------------------------------------------
        | Replace Certificate
        |-------------------------------------------------------
        */

        if ($request->hasFile('certificate')) {

            if (
                $achievement->certificate &&
                File::exists(public_path($achievement->certificate))
            ) {
                File::delete(public_path($achievement->certificate));
            }

            $destination = public_path('uploads/achievement/certificate');

            if (!File::exists($destination)) {

                File::makeDirectory($destination, 0755, true);
            }

            $certificate = $request->file('certificate');

            $certificateName = time() . '_' . $certificate->getClientOriginalName();

            $certificate->move($destination, $certificateName);

            $validated['certificate'] =
                'uploads/achievement/certificate/' . $certificateName;
        }

        $achievement->update($validated);

        return redirect()
            ->route('achievement.index')
            ->with('success', 'Achievement updated successfully.');
    }

    /**
     * Delete Achievement
     */
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);

        if (
            $achievement->image &&
            File::exists(public_path($achievement->image))
        ) {
            File::delete(public_path($achievement->image));
        }

        if (
            $achievement->certificate &&
            File::exists(public_path($achievement->certificate))
        ) {
            File::delete(public_path($achievement->certificate));
        }

        $achievement->delete();

        return redirect()
            ->route('achievement.index')
            ->with('success', 'Achievement deleted successfully.');
    }
}
