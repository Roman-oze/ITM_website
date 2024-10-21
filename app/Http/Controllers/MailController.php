<?php

namespace App\Http\Controllers;

use App\Mail\UserNotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller



{

 public function index(){
    return view('emails.send-mail');
 }

    public function sendMail(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'emails' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Store file if uploaded
        $filePath = null;
        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('attachments');
        }

        // Prepare email details
        $details = [
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send emails to each recipient
        $emails = explode(',', $request->emails);
        foreach ($emails as $email) {
            Mail::to(trim($email))->send(new UserNotificationMail($details, $filePath ? storage_path('app/' . $filePath) : null));
        }

        return redirect()->back()->with('success', 'Emails sent successfully!');
    }
}
