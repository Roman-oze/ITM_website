<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->paginate(10);

        return view('feedback.index',compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|required|string|max:255',
            'email' => 'nullable|required|email',
            'feedback_type' =>'required|string',
            'message' => 'required|string',
        ]);

        Feedback::create($validated);

        return redirect()->route('feedback.create')->with('success', 'Feedback submitted successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        // Perform the delete action
        $feedback->delete();

        // Optionally, you can add a flash message to notify the user
        return redirect()->back()->with('success', 'Notification deleted successfully.');
    }

}
