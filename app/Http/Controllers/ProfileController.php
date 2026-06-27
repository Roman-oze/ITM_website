<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    // Update validated user fields
    $request->user()->fill($request->validated());

    // Handle profile picture upload
    if ($request->hasFile('profile_picture')) {
        // Delete the old profile picture if it exists
        if ($request->user()->profile_picture) {
            Storage::delete('public/profile_pictures/' . $request->user()->profile_picture);
        }

        // Upload and store the new profile picture
        $file = $request->file('profile_picture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/profile_pictures', $filename);

        // Set the new profile picture filename
        $request->user()->profile_picture = $filename;
    }

    // Check if the email has been changed
    if ($request->user()->isDirty('email')) {
        $request->user()->email_verified_at = null;
    }

    // Save the updated user information
    $request->user()->save();

    // Redirect back with a success message
    return redirect()->route('profile.edit')->with('success', 'profile-updated');
}



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
