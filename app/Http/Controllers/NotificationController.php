<?php

namespace App\Http\Controllers;

use App\Models\Notification;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        $notifications = Notification::orderBy('created_at', 'desc')->paginate(10);
        return view('notifications.index', compact('notifications'));
    }

    // Mark notification as read
    public function markAsRead(Notification $notification)
    {
        $notification->update(['is_read' => true]);
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Notification::create($validatedData);

        return redirect()->back()->with('success', 'Notification send successfully!');
    }


    public function destroy(Notification $notification)
    {
        // Perform the delete action
        $notification->delete();

        // Optionally, you can add a flash message to notify the user
        return redirect()->back()->with('success', 'Notification deleted successfully.');
    }


}
